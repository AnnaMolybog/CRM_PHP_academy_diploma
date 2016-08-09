<?php

/* AppBundle::main.html.twig */
class __TwigTemplate_420208364c93b7cf0c748fdaa3d8b0b49eab11cc8ab53a359a58dcae56cdf270 extends Twig_Template
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
        $__internal_5066973b24819bff01afbc0df4fe6536e2ed47de3c1686eba46c0db0ed4c92dd = $this->env->getExtension("native_profiler");
        $__internal_5066973b24819bff01afbc0df4fe6536e2ed47de3c1686eba46c0db0ed4c92dd->enter($__internal_5066973b24819bff01afbc0df4fe6536e2ed47de3c1686eba46c0db0ed4c92dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::main.html.twig"));

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
        
        $__internal_5066973b24819bff01afbc0df4fe6536e2ed47de3c1686eba46c0db0ed4c92dd->leave($__internal_5066973b24819bff01afbc0df4fe6536e2ed47de3c1686eba46c0db0ed4c92dd_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_24292c5ca5c835d3921ee45c55abdb9f6aca26c5c81bc0aafdd7e0798f3a776b = $this->env->getExtension("native_profiler");
        $__internal_24292c5ca5c835d3921ee45c55abdb9f6aca26c5c81bc0aafdd7e0798f3a776b->enter($__internal_24292c5ca5c835d3921ee45c55abdb9f6aca26c5c81bc0aafdd7e0798f3a776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRM system";
        
        $__internal_24292c5ca5c835d3921ee45c55abdb9f6aca26c5c81bc0aafdd7e0798f3a776b->leave($__internal_24292c5ca5c835d3921ee45c55abdb9f6aca26c5c81bc0aafdd7e0798f3a776b_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e20adcdeae4c826a73d5df420f293235d3f56eb7c0be642db1afd728218782e = $this->env->getExtension("native_profiler");
        $__internal_3e20adcdeae4c826a73d5df420f293235d3f56eb7c0be642db1afd728218782e->enter($__internal_3e20adcdeae4c826a73d5df420f293235d3f56eb7c0be642db1afd728218782e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_3e20adcdeae4c826a73d5df420f293235d3f56eb7c0be642db1afd728218782e->leave($__internal_3e20adcdeae4c826a73d5df420f293235d3f56eb7c0be642db1afd728218782e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_f23764e766f0b4bc9c7b33faa49374a46887a0b3ee41fd0625e539371a1c5fae = $this->env->getExtension("native_profiler");
        $__internal_f23764e766f0b4bc9c7b33faa49374a46887a0b3ee41fd0625e539371a1c5fae->enter($__internal_f23764e766f0b4bc9c7b33faa49374a46887a0b3ee41fd0625e539371a1c5fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f23764e766f0b4bc9c7b33faa49374a46887a0b3ee41fd0625e539371a1c5fae->leave($__internal_f23764e766f0b4bc9c7b33faa49374a46887a0b3ee41fd0625e539371a1c5fae_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec0f7fc2811b2393aeefea6a3182893be87965ea1481eac2de360d6e03559ff5 = $this->env->getExtension("native_profiler");
        $__internal_ec0f7fc2811b2393aeefea6a3182893be87965ea1481eac2de360d6e03559ff5->enter($__internal_ec0f7fc2811b2393aeefea6a3182893be87965ea1481eac2de360d6e03559ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ec0f7fc2811b2393aeefea6a3182893be87965ea1481eac2de360d6e03559ff5->leave($__internal_ec0f7fc2811b2393aeefea6a3182893be87965ea1481eac2de360d6e03559ff5_prof);

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
