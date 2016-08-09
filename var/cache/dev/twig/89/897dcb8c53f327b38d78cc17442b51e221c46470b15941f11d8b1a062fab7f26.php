<?php

/* AppBundle:Main:index.html.twig */
class __TwigTemplate_34ef855d1d1f89ce73620e977438c4a9b0bab67d6258678714506f02b556cda5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::main.html.twig", "AppBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c87c8ebb7142495205ed093fc0fdbe0faea591bfa3fe76f3d973c01afa2d390c = $this->env->getExtension("native_profiler");
        $__internal_c87c8ebb7142495205ed093fc0fdbe0faea591bfa3fe76f3d973c01afa2d390c->enter($__internal_c87c8ebb7142495205ed093fc0fdbe0faea591bfa3fe76f3d973c01afa2d390c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c87c8ebb7142495205ed093fc0fdbe0faea591bfa3fe76f3d973c01afa2d390c->leave($__internal_c87c8ebb7142495205ed093fc0fdbe0faea591bfa3fe76f3d973c01afa2d390c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5af7728ec4e6bc17519b960251bc2d883d83c3432bd14772fffa361f764a58f = $this->env->getExtension("native_profiler");
        $__internal_f5af7728ec4e6bc17519b960251bc2d883d83c3432bd14772fffa361f764a58f->enter($__internal_f5af7728ec4e6bc17519b960251bc2d883d83c3432bd14772fffa361f764a58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Main:index";
        
        $__internal_f5af7728ec4e6bc17519b960251bc2d883d83c3432bd14772fffa361f764a58f->leave($__internal_f5af7728ec4e6bc17519b960251bc2d883d83c3432bd14772fffa361f764a58f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5526e9514f79ca4953b6b44446d7807a96a25b7925c49cf17eb78370eb3439be = $this->env->getExtension("native_profiler");
        $__internal_5526e9514f79ca4953b6b44446d7807a96a25b7925c49cf17eb78370eb3439be->enter($__internal_5526e9514f79ca4953b6b44446d7807a96a25b7925c49cf17eb78370eb3439be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"page-header\">
        <h1>Welcome to the investments approval system</h1>
    </div>
    <form class=\"form-horizontal\" method=\"post\">
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-10\">
                <input type=\"email\" name=\"login\" class=\"form-control\" placeholder=\"Email\" value=\"initiator.surname@company.com\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" value=\"initiator\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-default btn-block\">Sign in</button>
            </div>
        </div>
    </form>
";
        
        $__internal_5526e9514f79ca4953b6b44446d7807a96a25b7925c49cf17eb78370eb3439be->leave($__internal_5526e9514f79ca4953b6b44446d7807a96a25b7925c49cf17eb78370eb3439be_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:index.html.twig";
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
/* {% extends "AppBundle::main.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Main:index{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>Welcome to the investments approval system</h1>*/
/*     </div>*/
/*     <form class="form-horizontal" method="post">*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label">Email</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="email" name="login" class="form-control" placeholder="Email" value="initiator.surname@company.com">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label">Password</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="password" name="password" class="form-control" placeholder="Password" value="initiator">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-default btn-block">Sign in</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
/* */
