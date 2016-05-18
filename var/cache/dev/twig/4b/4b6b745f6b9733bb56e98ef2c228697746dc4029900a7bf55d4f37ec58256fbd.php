<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f135eb69ecf13ea92f8438e7125e16b34b458c640907c4421cc084d5e7e7e8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bdb746d089fb2b49fa5346d9edf8c12143efb7e02fdfea947cff7793e7eb14c = $this->env->getExtension("native_profiler");
        $__internal_6bdb746d089fb2b49fa5346d9edf8c12143efb7e02fdfea947cff7793e7eb14c->enter($__internal_6bdb746d089fb2b49fa5346d9edf8c12143efb7e02fdfea947cff7793e7eb14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bdb746d089fb2b49fa5346d9edf8c12143efb7e02fdfea947cff7793e7eb14c->leave($__internal_6bdb746d089fb2b49fa5346d9edf8c12143efb7e02fdfea947cff7793e7eb14c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c198fd7290c4613f7fe1ed67dadce23115da994f43b6de2da32c2882373b6ad5 = $this->env->getExtension("native_profiler");
        $__internal_c198fd7290c4613f7fe1ed67dadce23115da994f43b6de2da32c2882373b6ad5->enter($__internal_c198fd7290c4613f7fe1ed67dadce23115da994f43b6de2da32c2882373b6ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c198fd7290c4613f7fe1ed67dadce23115da994f43b6de2da32c2882373b6ad5->leave($__internal_c198fd7290c4613f7fe1ed67dadce23115da994f43b6de2da32c2882373b6ad5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc4cbbfa752493f91e97f145c45069e3288a720861e5db836e74ff096e027929 = $this->env->getExtension("native_profiler");
        $__internal_dc4cbbfa752493f91e97f145c45069e3288a720861e5db836e74ff096e027929->enter($__internal_dc4cbbfa752493f91e97f145c45069e3288a720861e5db836e74ff096e027929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc4cbbfa752493f91e97f145c45069e3288a720861e5db836e74ff096e027929->leave($__internal_dc4cbbfa752493f91e97f145c45069e3288a720861e5db836e74ff096e027929_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2320df5e2b890c94b8fadde430b3f33fe36f28f8a63aa65f08fa5f77361115f = $this->env->getExtension("native_profiler");
        $__internal_e2320df5e2b890c94b8fadde430b3f33fe36f28f8a63aa65f08fa5f77361115f->enter($__internal_e2320df5e2b890c94b8fadde430b3f33fe36f28f8a63aa65f08fa5f77361115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2320df5e2b890c94b8fadde430b3f33fe36f28f8a63aa65f08fa5f77361115f->leave($__internal_e2320df5e2b890c94b8fadde430b3f33fe36f28f8a63aa65f08fa5f77361115f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
