<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_408b3c28318b0d8863f2a27513b0924893b30ce66804399159ade28c2b190ffe extends Twig_Template
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
        $__internal_11cadcc01608506cc8f3dbfa22c0c42303b4c88e276fba235302a3ee9112ad85 = $this->env->getExtension("native_profiler");
        $__internal_11cadcc01608506cc8f3dbfa22c0c42303b4c88e276fba235302a3ee9112ad85->enter($__internal_11cadcc01608506cc8f3dbfa22c0c42303b4c88e276fba235302a3ee9112ad85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A Bootstrap Blog Template\">
    <meta name=\"author\" content=\"Vijaya Anand\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap CSS file -->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
</head>

<body>

<!-- Header -->
";
        // line 23
        echo twig_include($this->env, $context, "AppBundle::Blocks/navbar.html.twig");
        echo "

<!-- Body -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">

            ";
        // line 30
        echo twig_include($this->env, $context, "AppBundle::Blocks/categories.html.twig");
        echo "

        </div>
        <div class=\"col-md-8\">

            ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
        </div>

    </div>
</div>

<!-- Footer -->
<footer>
    <div class=\"container\">
        <hr />
        <p class=\"text-center\">Copyright &copy; PhpAcademy 2016. All rights reserved.</p>
    </div>
</footer>

<!-- Jquery and Bootstrap Script files -->
";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "</body>
</html>";
        
        $__internal_11cadcc01608506cc8f3dbfa22c0c42303b4c88e276fba235302a3ee9112ad85->leave($__internal_11cadcc01608506cc8f3dbfa22c0c42303b4c88e276fba235302a3ee9112ad85_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc8aadfe19d76d6c6e817fe191bf63dc05980313b9f48ec51986e1d97bb3e6bd = $this->env->getExtension("native_profiler");
        $__internal_fc8aadfe19d76d6c6e817fe191bf63dc05980313b9f48ec51986e1d97bb3e6bd->enter($__internal_fc8aadfe19d76d6c6e817fe191bf63dc05980313b9f48ec51986e1d97bb3e6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRM system";
        
        $__internal_fc8aadfe19d76d6c6e817fe191bf63dc05980313b9f48ec51986e1d97bb3e6bd->leave($__internal_fc8aadfe19d76d6c6e817fe191bf63dc05980313b9f48ec51986e1d97bb3e6bd_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de62778474e0d3a43ad60d1d331a9fdd7316220d8e93454031b77046e663f293 = $this->env->getExtension("native_profiler");
        $__internal_de62778474e0d3a43ad60d1d331a9fdd7316220d8e93454031b77046e663f293->enter($__internal_de62778474e0d3a43ad60d1d331a9fdd7316220d8e93454031b77046e663f293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_de62778474e0d3a43ad60d1d331a9fdd7316220d8e93454031b77046e663f293->leave($__internal_de62778474e0d3a43ad60d1d331a9fdd7316220d8e93454031b77046e663f293_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_330af912802c28164f135e29a1c2eaa3a6dada2d589a959f79af535945411d10 = $this->env->getExtension("native_profiler");
        $__internal_330af912802c28164f135e29a1c2eaa3a6dada2d589a959f79af535945411d10->enter($__internal_330af912802c28164f135e29a1c2eaa3a6dada2d589a959f79af535945411d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_330af912802c28164f135e29a1c2eaa3a6dada2d589a959f79af535945411d10->leave($__internal_330af912802c28164f135e29a1c2eaa3a6dada2d589a959f79af535945411d10_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7647cbc7b8984a2e350b80b48e50e83d9eafe9e8b56cbef37500340dcbcbf4d4 = $this->env->getExtension("native_profiler");
        $__internal_7647cbc7b8984a2e350b80b48e50e83d9eafe9e8b56cbef37500340dcbcbf4d4->enter($__internal_7647cbc7b8984a2e350b80b48e50e83d9eafe9e8b56cbef37500340dcbcbf4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7647cbc7b8984a2e350b80b48e50e83d9eafe9e8b56cbef37500340dcbcbf4d4->leave($__internal_7647cbc7b8984a2e350b80b48e50e83d9eafe9e8b56cbef37500340dcbcbf4d4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  149 => 52,  143 => 51,  132 => 35,  123 => 15,  118 => 14,  112 => 13,  100 => 10,  92 => 55,  90 => 51,  73 => 36,  71 => 35,  63 => 30,  53 => 23,  45 => 17,  43 => 13,  37 => 10,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="A Bootstrap Blog Template">*/
/*     <meta name="author" content="Vijaya Anand">*/
/* */
/*     <title>{% block title %}CRM system{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap CSS file -->*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('/bundles/app/css/bootstrap/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*         <link href="{{ asset('/bundles/app/css/blog.css') }}" type="text/css" rel="stylesheet" />*/
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <!-- Header -->*/
/* {{ include('AppBundle::Blocks/navbar.html.twig') }}*/
/* */
/* <!-- Body -->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/* */
/*             {{ include('AppBundle::Blocks/categories.html.twig') }}*/
/* */
/*         </div>*/
/*         <div class="col-md-8">*/
/* */
/*             {% block body %}{% endblock %}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <!-- Footer -->*/
/* <footer>*/
/*     <div class="container">*/
/*         <hr />*/
/*         <p class="text-center">Copyright &copy; PhpAcademy 2016. All rights reserved.</p>*/
/*     </div>*/
/* </footer>*/
/* */
/* <!-- Jquery and Bootstrap Script files -->*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('/bundles/app/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('/bundles/app/js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
