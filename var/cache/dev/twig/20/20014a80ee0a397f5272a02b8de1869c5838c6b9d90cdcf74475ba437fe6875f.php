<?php

/* base.html.twig */
class __TwigTemplate_04edeb39c8e68c8d289a01192c16a2e5c8f5f6551c5ce27f62aa8bd56f1faa8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c41f5a5fead64e25b258af69aebd2fbaf0ce0b4aa3b5af69840424d8e1bea2f = $this->env->getExtension("native_profiler");
        $__internal_8c41f5a5fead64e25b258af69aebd2fbaf0ce0b4aa3b5af69840424d8e1bea2f->enter($__internal_8c41f5a5fead64e25b258af69aebd2fbaf0ce0b4aa3b5af69840424d8e1bea2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8c41f5a5fead64e25b258af69aebd2fbaf0ce0b4aa3b5af69840424d8e1bea2f->leave($__internal_8c41f5a5fead64e25b258af69aebd2fbaf0ce0b4aa3b5af69840424d8e1bea2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd34af3725c01580f68e2f5666aaf0fbb13c08c71ee0b6b09ebc036e4b1dde81 = $this->env->getExtension("native_profiler");
        $__internal_dd34af3725c01580f68e2f5666aaf0fbb13c08c71ee0b6b09ebc036e4b1dde81->enter($__internal_dd34af3725c01580f68e2f5666aaf0fbb13c08c71ee0b6b09ebc036e4b1dde81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd34af3725c01580f68e2f5666aaf0fbb13c08c71ee0b6b09ebc036e4b1dde81->leave($__internal_dd34af3725c01580f68e2f5666aaf0fbb13c08c71ee0b6b09ebc036e4b1dde81_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77700577a10435d33eec33a47933ac91e5637868b6b91d2ef5441cdfb8410d6f = $this->env->getExtension("native_profiler");
        $__internal_77700577a10435d33eec33a47933ac91e5637868b6b91d2ef5441cdfb8410d6f->enter($__internal_77700577a10435d33eec33a47933ac91e5637868b6b91d2ef5441cdfb8410d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_77700577a10435d33eec33a47933ac91e5637868b6b91d2ef5441cdfb8410d6f->leave($__internal_77700577a10435d33eec33a47933ac91e5637868b6b91d2ef5441cdfb8410d6f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0229797147a30d1ad73c51c5a4805f544138b848d3d1c9da1e7bcd1b6fb9116c = $this->env->getExtension("native_profiler");
        $__internal_0229797147a30d1ad73c51c5a4805f544138b848d3d1c9da1e7bcd1b6fb9116c->enter($__internal_0229797147a30d1ad73c51c5a4805f544138b848d3d1c9da1e7bcd1b6fb9116c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0229797147a30d1ad73c51c5a4805f544138b848d3d1c9da1e7bcd1b6fb9116c->leave($__internal_0229797147a30d1ad73c51c5a4805f544138b848d3d1c9da1e7bcd1b6fb9116c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12f55b39c0a29d4d14f80545ae26639e2bc8f6a2ac7f2ae902bf396963aca2d9 = $this->env->getExtension("native_profiler");
        $__internal_12f55b39c0a29d4d14f80545ae26639e2bc8f6a2ac7f2ae902bf396963aca2d9->enter($__internal_12f55b39c0a29d4d14f80545ae26639e2bc8f6a2ac7f2ae902bf396963aca2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12f55b39c0a29d4d14f80545ae26639e2bc8f6a2ac7f2ae902bf396963aca2d9->leave($__internal_12f55b39c0a29d4d14f80545ae26639e2bc8f6a2ac7f2ae902bf396963aca2d9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
