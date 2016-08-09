<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_efbf18b4888e5453c0d1beb8164ed417dc2a15f808c510911b58de2a327e08ba extends Twig_Template
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
        $__internal_28e6ab246a19bd6b5e3a8920b0e658c2d1a7a75e1f83fa18d15f17f37b4f665c = $this->env->getExtension("native_profiler");
        $__internal_28e6ab246a19bd6b5e3a8920b0e658c2d1a7a75e1f83fa18d15f17f37b4f665c->enter($__internal_28e6ab246a19bd6b5e3a8920b0e658c2d1a7a75e1f83fa18d15f17f37b4f665c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e6ab246a19bd6b5e3a8920b0e658c2d1a7a75e1f83fa18d15f17f37b4f665c->leave($__internal_28e6ab246a19bd6b5e3a8920b0e658c2d1a7a75e1f83fa18d15f17f37b4f665c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45cc0a0b6bc0bae4c563d6e07bc3dca13e62699b33d0efa1289bdd1bf3850687 = $this->env->getExtension("native_profiler");
        $__internal_45cc0a0b6bc0bae4c563d6e07bc3dca13e62699b33d0efa1289bdd1bf3850687->enter($__internal_45cc0a0b6bc0bae4c563d6e07bc3dca13e62699b33d0efa1289bdd1bf3850687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45cc0a0b6bc0bae4c563d6e07bc3dca13e62699b33d0efa1289bdd1bf3850687->leave($__internal_45cc0a0b6bc0bae4c563d6e07bc3dca13e62699b33d0efa1289bdd1bf3850687_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac245762916b921d3fd3db6aa619a5d69cd2e4fe69492cab71e7d5f4299e8e5c = $this->env->getExtension("native_profiler");
        $__internal_ac245762916b921d3fd3db6aa619a5d69cd2e4fe69492cab71e7d5f4299e8e5c->enter($__internal_ac245762916b921d3fd3db6aa619a5d69cd2e4fe69492cab71e7d5f4299e8e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac245762916b921d3fd3db6aa619a5d69cd2e4fe69492cab71e7d5f4299e8e5c->leave($__internal_ac245762916b921d3fd3db6aa619a5d69cd2e4fe69492cab71e7d5f4299e8e5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82514a5868baa0c0c8d511c89501884c5d2d805b7432003584c574854a443d4f = $this->env->getExtension("native_profiler");
        $__internal_82514a5868baa0c0c8d511c89501884c5d2d805b7432003584c574854a443d4f->enter($__internal_82514a5868baa0c0c8d511c89501884c5d2d805b7432003584c574854a443d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82514a5868baa0c0c8d511c89501884c5d2d805b7432003584c574854a443d4f->leave($__internal_82514a5868baa0c0c8d511c89501884c5d2d805b7432003584c574854a443d4f_prof);

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
