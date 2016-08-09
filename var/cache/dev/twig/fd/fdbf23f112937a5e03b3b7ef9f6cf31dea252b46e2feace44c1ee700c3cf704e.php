<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c5c130f1fdff7699185814e50fcbec415e0c7c14ecb08f2121d5554e44e1773a extends Twig_Template
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
        $__internal_4dc182285f8b5cfe5dfbd8b7a5d2fc2f32f0a55110d6df2017e823996f9467b6 = $this->env->getExtension("native_profiler");
        $__internal_4dc182285f8b5cfe5dfbd8b7a5d2fc2f32f0a55110d6df2017e823996f9467b6->enter($__internal_4dc182285f8b5cfe5dfbd8b7a5d2fc2f32f0a55110d6df2017e823996f9467b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc182285f8b5cfe5dfbd8b7a5d2fc2f32f0a55110d6df2017e823996f9467b6->leave($__internal_4dc182285f8b5cfe5dfbd8b7a5d2fc2f32f0a55110d6df2017e823996f9467b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee6bb909854559545229f1d4641e98ada448bf6bfcfac46deea22d830f47a01d = $this->env->getExtension("native_profiler");
        $__internal_ee6bb909854559545229f1d4641e98ada448bf6bfcfac46deea22d830f47a01d->enter($__internal_ee6bb909854559545229f1d4641e98ada448bf6bfcfac46deea22d830f47a01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee6bb909854559545229f1d4641e98ada448bf6bfcfac46deea22d830f47a01d->leave($__internal_ee6bb909854559545229f1d4641e98ada448bf6bfcfac46deea22d830f47a01d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcc50dbabd6b2a060c117146f658de177fb2a09e94ccf074948e537a166fe75a = $this->env->getExtension("native_profiler");
        $__internal_bcc50dbabd6b2a060c117146f658de177fb2a09e94ccf074948e537a166fe75a->enter($__internal_bcc50dbabd6b2a060c117146f658de177fb2a09e94ccf074948e537a166fe75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bcc50dbabd6b2a060c117146f658de177fb2a09e94ccf074948e537a166fe75a->leave($__internal_bcc50dbabd6b2a060c117146f658de177fb2a09e94ccf074948e537a166fe75a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f502946fd9408fc7a7c39b70c78a868db3c91dfa60782fd3dd8b6629f6e3870 = $this->env->getExtension("native_profiler");
        $__internal_0f502946fd9408fc7a7c39b70c78a868db3c91dfa60782fd3dd8b6629f6e3870->enter($__internal_0f502946fd9408fc7a7c39b70c78a868db3c91dfa60782fd3dd8b6629f6e3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f502946fd9408fc7a7c39b70c78a868db3c91dfa60782fd3dd8b6629f6e3870->leave($__internal_0f502946fd9408fc7a7c39b70c78a868db3c91dfa60782fd3dd8b6629f6e3870_prof);

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
