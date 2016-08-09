<?php

/* AppBundle::main.html.twig */
class __TwigTemplate_2bafc4841f162b1b24659097c695fb663cedf0d8b83c8d7c716df6eb236f407c extends Twig_Template
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
        $__internal_4438a596bac529b6075222c2a818b6cc9923543b801ef9fed78fb6c3358778ee = $this->env->getExtension("native_profiler");
        $__internal_4438a596bac529b6075222c2a818b6cc9923543b801ef9fed78fb6c3358778ee->enter($__internal_4438a596bac529b6075222c2a818b6cc9923543b801ef9fed78fb6c3358778ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::main.html.twig"));

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
        echo twig_include($this->env, $context, "AppBundle::Blocks/main_navbar.html.twig");
        echo "

<!-- Body -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">

            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
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
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
</body>
</html>";
        
        $__internal_4438a596bac529b6075222c2a818b6cc9923543b801ef9fed78fb6c3358778ee->leave($__internal_4438a596bac529b6075222c2a818b6cc9923543b801ef9fed78fb6c3358778ee_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f32a532614a3755235ab6d992194a6a9db6c128c5f6603c7810dd07af373a25 = $this->env->getExtension("native_profiler");
        $__internal_0f32a532614a3755235ab6d992194a6a9db6c128c5f6603c7810dd07af373a25->enter($__internal_0f32a532614a3755235ab6d992194a6a9db6c128c5f6603c7810dd07af373a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRM system";
        
        $__internal_0f32a532614a3755235ab6d992194a6a9db6c128c5f6603c7810dd07af373a25->leave($__internal_0f32a532614a3755235ab6d992194a6a9db6c128c5f6603c7810dd07af373a25_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e56d44083db2ef99944acd6bb95cc637420b2517ff99f7a25ce8aaf5c513810d = $this->env->getExtension("native_profiler");
        $__internal_e56d44083db2ef99944acd6bb95cc637420b2517ff99f7a25ce8aaf5c513810d->enter($__internal_e56d44083db2ef99944acd6bb95cc637420b2517ff99f7a25ce8aaf5c513810d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_e56d44083db2ef99944acd6bb95cc637420b2517ff99f7a25ce8aaf5c513810d->leave($__internal_e56d44083db2ef99944acd6bb95cc637420b2517ff99f7a25ce8aaf5c513810d_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_edad07296e1704592e090bd1933c0d8e781df2176ccc20e5c69854f968d3073a = $this->env->getExtension("native_profiler");
        $__internal_edad07296e1704592e090bd1933c0d8e781df2176ccc20e5c69854f968d3073a->enter($__internal_edad07296e1704592e090bd1933c0d8e781df2176ccc20e5c69854f968d3073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_edad07296e1704592e090bd1933c0d8e781df2176ccc20e5c69854f968d3073a->leave($__internal_edad07296e1704592e090bd1933c0d8e781df2176ccc20e5c69854f968d3073a_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ef27214aa38721426b3062c581414dcc3b855902af7edc056c2dbd252c7c9b6 = $this->env->getExtension("native_profiler");
        $__internal_7ef27214aa38721426b3062c581414dcc3b855902af7edc056c2dbd252c7c9b6->enter($__internal_7ef27214aa38721426b3062c581414dcc3b855902af7edc056c2dbd252c7c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7ef27214aa38721426b3062c581414dcc3b855902af7edc056c2dbd252c7c9b6->leave($__internal_7ef27214aa38721426b3062c581414dcc3b855902af7edc056c2dbd252c7c9b6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  141 => 46,  135 => 45,  124 => 30,  115 => 15,  110 => 14,  104 => 13,  92 => 10,  83 => 49,  81 => 45,  65 => 31,  63 => 30,  53 => 23,  45 => 17,  43 => 13,  37 => 10,  26 => 1,);
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
/* {{ include('AppBundle::Blocks/main_navbar.html.twig') }}*/
/* */
/* <!-- Body -->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/* */
/*             {% block body %}{% endblock %}*/
/* */
/*         </div>*/
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
/* */
/* </body>*/
/* </html>*/
