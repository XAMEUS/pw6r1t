<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Role;
use AppBundle\Entity\Post;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }


    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        $user = new User();

        $form = $this->createFormBuilder($user)
        ->add('email', EmailType::class, array(
            'label' => false,
            'attr' => array(
                'placeholder' => 'Email',
            )
        ))
        ->add('username', TextType::class, array(
            'label' => false,
            'attr' => array(
                'placeholder' => "Nom d'utilisateur",
            )
        ))
        ->add('plainPassword', RepeatedType::class, array(
            'type' => PasswordType::class,
            'first_options'  => array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Mot de passe',
                )
            ),
            'second_options' => array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Répétez le mot de passe',
                )
            )
        ))
        ->add('firstname', TextType::class, array(
            'label' => false,
            'attr' => array(
                'placeholder' => 'Prénom',
            )
        ))
        ->add('lastname', TextType::class, array(
            'label' => false,
            'attr' => array(
                'placeholder' => 'Nom',
            )
        ))
        ->add('birthdate', BirthdayType::class, array('label' => 'Date de naissance'))
        ->add('sex', ChoiceType::class, array(
            'choices'  => array(
                'Homme' => "M",
                'Femme' => "F",
            ),
            'expanded' => true,
            'label' => false))
        ->add('save', SubmitType::class, array('label' => "S'enregistrer"))
        ->getForm();

        // tester si le formulaire est déjà rempli
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('register.html.twig', array('form' => $form->createView()));
    }


    /**
     * @Route("/search",name="search")
     */
    public function findUser(Request $request)
    {
        return $this->render('search.html.twig');
    }

    /**
     * @Route("/userslist",name="userslist")
     */
    public function usersList(Request $req){
        if($req->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT u
                FROM AppBundle:User u
                WHERE u.username LIKE :r OR u.email LIKE :r OR u.firstname LIKE :r OR u.lastname LIKE :r
                ORDER BY u.username ASC'
            )->setParameter('r', "%".$req->get('search')."%");

            return new JsonResponse(array('data' => json_encode($query->getResult())));
        }
        return new Response("Erreur : Ce n'est pas une requête Ajax",400);
    }

    /**
    * @Route("/user/{id}",name="user", defaults={"id" = 0})
    */
    public function showUser($id, Request $request){
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneById($id);
        $post = $this->getDoctrine()->getRepository('AppBundle:Post')->findBy(
            array('author' => $id),
            array('id' => 'asc')
        );

        if(!$user){
            throw $this->createNotFoundException("No user with this id : ".$id);
        }

        return $this->render("user.html.twig",['user' => $user, 'messages' => $post]);
    }

    /**
    * @Route("/post",name="post")
    */
    public function showPost(Request $request){
        $post = new Post();

        $form = $this->createFormBuilder($post)
        ->add('message', TextareaType::class, array(
            'label' => false,
            'attr' => array(
                'placeholder' => 'Raconte ta vie...',
            )
        ))
        ->add('tag', TextType::class, array(
            'label' => false,
            'attr' => array(
                'placeholder' => 'tag',
            )
        ))
        ->add('save', SubmitType::class, array('label' => "Poster"))
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post->setAuthor($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('post.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/list", name="list")
     */
    public function showAction(Request $request)
    {
        $messages = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll(
            array('id' => 'desc'),
            100
        );

        return $this->render('list.html.twig', [
            'messages' => $messages
        ]);
    }

}
