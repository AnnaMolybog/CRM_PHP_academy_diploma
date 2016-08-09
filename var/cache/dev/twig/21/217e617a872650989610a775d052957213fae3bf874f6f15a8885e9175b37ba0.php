<?php

/* ::base.html.twig */
class __TwigTemplate_6296b699369f937c51c5476e78ada6aa81bd37ce31e1e1afc90c0afa9ef70da1 extends Twig_Template
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
        $__internal_4a4d32b285ccb48cdf62c837455c617ff0dc4f18e724b5eec634a1dfaa8c6e0e = $this->env->getExtension("native_profiler");
        $__internal_4a4d32b285ccb48cdf62c837455c617ff0dc4f18e724b5eec634a1dfaa8c6e0e->enter($__internal_4a4d32b285ccb48cdf62c837455c617ff0dc4f18e724b5eec634a1dfaa8c6e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4a4d32b285ccb48cdf62c837455c617ff0dc4f18e724b5eec634a1dfaa8c6e0e->leave($__internal_4a4d32b285ccb48cdf62c837455c617ff0dc4f18e724b5eec634a1dfaa8c6e0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbf7e9ef8299d8a31a998bd3de80c72d1485085fcfb1f90fa27793bbf9d037f3 = $this->env->getExtension("native_profiler");
        $__internal_fbf7e9ef8299d8a31a998bd3de80c72d1485085fcfb1f90fa27793bbf9d037f3->enter($__internal_fbf7e9ef8299d8a31a998bd3de80c72d1485085fcfb1f90fa27793bbf9d037f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fbf7e9ef8299d8a31a998bd3de80c72d1485085fcfb1f90fa27793bbf9d037f3->leave($__internal_fbf7e9ef8299d8a31a998bd3de80c72d1485085fcfb1f90fa27793bbf9d037f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aef4b67f9f88b09a64c3f4ad550623ec4e61345e78a4465f41ace7631013abe1 = $this->env->getExtension("native_profiler");
        $__internal_aef4b67f9f88b09a64c3f4ad550623ec4e61345e78a4465f41ace7631013abe1->enter($__internal_aef4b67f9f88b09a64c3f4ad550623ec4e61345e78a4465f41ace7631013abe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aef4b67f9f88b09a64c3f4ad550623ec4e61345e78a4465f41ace7631013abe1->leave($__internal_aef4b67f9f88b09a64c3f4ad550623ec4e61345e78a4465f41ace7631013abe1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_803e2aa1e8a49dec071319470d8e676f26594fab3dc38c552af02ae0ee9fb554 = $this->env->getExtension("native_profiler");
        $__internal_803e2aa1e8a49dec071319470d8e676f26594fab3dc38c552af02ae0ee9fb554->enter($__internal_803e2aa1e8a49dec071319470d8e676f26594fab3dc38c552af02ae0ee9fb554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_803e2aa1e8a49dec071319470d8e676f26594fab3dc38c552af02ae0ee9fb554->leave($__internal_803e2aa1e8a49dec071319470d8e676f26594fab3dc38c552af02ae0ee9fb554_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_635862e957c9c58e1aa3704bc59ff6f322693a1306da6eb8577d7a6e2cb741d4 = $this->env->getExtension("native_profiler");
        $__internal_635862e957c9c58e1aa3704bc59ff6f322693a1306da6eb8577d7a6e2cb741d4->enter($__internal_635862e957c9c58e1aa3704bc59ff6f322693a1306da6eb8577d7a6e2cb741d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_635862e957c9c58e1aa3704bc59ff6f322693a1306da6eb8577d7a6e2cb741d4->leave($__internal_635862e957c9c58e1aa3704bc59ff6f322693a1306da6eb8577d7a6e2cb741d4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
