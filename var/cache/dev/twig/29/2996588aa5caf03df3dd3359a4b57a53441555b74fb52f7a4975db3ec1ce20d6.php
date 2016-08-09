<?php

/* AppBundle:Role:initiator.html.twig */
class __TwigTemplate_3d4be34df54840c83a3cbe34b095dbe2cc4be59d1d8751fbeb6337e00c2ececa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Role:initiator.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0479fb3503adad2a5b280b1141f162e06f24f216792838f465a1d73cce9cbd0e = $this->env->getExtension("native_profiler");
        $__internal_0479fb3503adad2a5b280b1141f162e06f24f216792838f465a1d73cce9cbd0e->enter($__internal_0479fb3503adad2a5b280b1141f162e06f24f216792838f465a1d73cce9cbd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Role:initiator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0479fb3503adad2a5b280b1141f162e06f24f216792838f465a1d73cce9cbd0e->leave($__internal_0479fb3503adad2a5b280b1141f162e06f24f216792838f465a1d73cce9cbd0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ddac073553077c60a3f5ec503d755748fd5215bd5ab159ce8d3b3ba320c22ba = $this->env->getExtension("native_profiler");
        $__internal_1ddac073553077c60a3f5ec503d755748fd5215bd5ab159ce8d3b3ba320c22ba->enter($__internal_1ddac073553077c60a3f5ec503d755748fd5215bd5ab159ce8d3b3ba320c22ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Role:initiator";
        
        $__internal_1ddac073553077c60a3f5ec503d755748fd5215bd5ab159ce8d3b3ba320c22ba->leave($__internal_1ddac073553077c60a3f5ec503d755748fd5215bd5ab159ce8d3b3ba320c22ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1edc3a2f34d40192af613eb36b77acc5d97a76e340b25397b2a224408d861bbf = $this->env->getExtension("native_profiler");
        $__internal_1edc3a2f34d40192af613eb36b77acc5d97a76e340b25397b2a224408d861bbf->enter($__internal_1edc3a2f34d40192af613eb36b77acc5d97a76e340b25397b2a224408d861bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Role:initiator page</h1>
";
        
        $__internal_1edc3a2f34d40192af613eb36b77acc5d97a76e340b25397b2a224408d861bbf->leave($__internal_1edc3a2f34d40192af613eb36b77acc5d97a76e340b25397b2a224408d861bbf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Role:initiator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Role:initiator{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Role:initiator page</h1>*/
/* {% endblock %}*/
/* */
