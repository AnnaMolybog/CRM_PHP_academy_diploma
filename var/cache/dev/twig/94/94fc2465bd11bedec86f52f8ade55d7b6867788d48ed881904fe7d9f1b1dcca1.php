<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b25e56f9351cf375c741c5a833b397c91ba0637ae606f6d6cf616ac80d27858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ee7cef97cc03a46931e024429e822a37250c0a9ceb8319c9f1ceaae236ecaac = $this->env->getExtension("native_profiler");
        $__internal_4ee7cef97cc03a46931e024429e822a37250c0a9ceb8319c9f1ceaae236ecaac->enter($__internal_4ee7cef97cc03a46931e024429e822a37250c0a9ceb8319c9f1ceaae236ecaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ee7cef97cc03a46931e024429e822a37250c0a9ceb8319c9f1ceaae236ecaac->leave($__internal_4ee7cef97cc03a46931e024429e822a37250c0a9ceb8319c9f1ceaae236ecaac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7b1292be3557965a3e66eadc50b9c712008d92496357785999b88d8428c503b = $this->env->getExtension("native_profiler");
        $__internal_e7b1292be3557965a3e66eadc50b9c712008d92496357785999b88d8428c503b->enter($__internal_e7b1292be3557965a3e66eadc50b9c712008d92496357785999b88d8428c503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e7b1292be3557965a3e66eadc50b9c712008d92496357785999b88d8428c503b->leave($__internal_e7b1292be3557965a3e66eadc50b9c712008d92496357785999b88d8428c503b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6bf3a74c2b92b619b98b9c857c47ca1ac6695bbe5e907ee0bb0801cb33a8166 = $this->env->getExtension("native_profiler");
        $__internal_e6bf3a74c2b92b619b98b9c857c47ca1ac6695bbe5e907ee0bb0801cb33a8166->enter($__internal_e6bf3a74c2b92b619b98b9c857c47ca1ac6695bbe5e907ee0bb0801cb33a8166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6bf3a74c2b92b619b98b9c857c47ca1ac6695bbe5e907ee0bb0801cb33a8166->leave($__internal_e6bf3a74c2b92b619b98b9c857c47ca1ac6695bbe5e907ee0bb0801cb33a8166_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7f6cab172fb94a3c2c8f28a3c67a2627c1ce3a99d641a54777babf219ec3ec = $this->env->getExtension("native_profiler");
        $__internal_4b7f6cab172fb94a3c2c8f28a3c67a2627c1ce3a99d641a54777babf219ec3ec->enter($__internal_4b7f6cab172fb94a3c2c8f28a3c67a2627c1ce3a99d641a54777babf219ec3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4b7f6cab172fb94a3c2c8f28a3c67a2627c1ce3a99d641a54777babf219ec3ec->leave($__internal_4b7f6cab172fb94a3c2c8f28a3c67a2627c1ce3a99d641a54777babf219ec3ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
