<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_54704b976770d5306ad5c59ad440ceab226319679b996d424c649a685b92fe10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_17b12c599ece56a725f0929b7065c626b5342563c6117522324f288ece2f3909 = $this->env->getExtension("native_profiler");
        $__internal_17b12c599ece56a725f0929b7065c626b5342563c6117522324f288ece2f3909->enter($__internal_17b12c599ece56a725f0929b7065c626b5342563c6117522324f288ece2f3909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b12c599ece56a725f0929b7065c626b5342563c6117522324f288ece2f3909->leave($__internal_17b12c599ece56a725f0929b7065c626b5342563c6117522324f288ece2f3909_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fe5b6570624f4104119962a4cadc3db5423abe7103ce34e098474b4a5836d45 = $this->env->getExtension("native_profiler");
        $__internal_8fe5b6570624f4104119962a4cadc3db5423abe7103ce34e098474b4a5836d45->enter($__internal_8fe5b6570624f4104119962a4cadc3db5423abe7103ce34e098474b4a5836d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8fe5b6570624f4104119962a4cadc3db5423abe7103ce34e098474b4a5836d45->leave($__internal_8fe5b6570624f4104119962a4cadc3db5423abe7103ce34e098474b4a5836d45_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbda0de9eda80c48d3922327f2fa22186d8cba10045f0ea7cb5d025472e05efb = $this->env->getExtension("native_profiler");
        $__internal_fbda0de9eda80c48d3922327f2fa22186d8cba10045f0ea7cb5d025472e05efb->enter($__internal_fbda0de9eda80c48d3922327f2fa22186d8cba10045f0ea7cb5d025472e05efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fbda0de9eda80c48d3922327f2fa22186d8cba10045f0ea7cb5d025472e05efb->leave($__internal_fbda0de9eda80c48d3922327f2fa22186d8cba10045f0ea7cb5d025472e05efb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_771580689147dc049d6fcc91690936a80f821070b266326024129851710421b8 = $this->env->getExtension("native_profiler");
        $__internal_771580689147dc049d6fcc91690936a80f821070b266326024129851710421b8->enter($__internal_771580689147dc049d6fcc91690936a80f821070b266326024129851710421b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_771580689147dc049d6fcc91690936a80f821070b266326024129851710421b8->leave($__internal_771580689147dc049d6fcc91690936a80f821070b266326024129851710421b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
