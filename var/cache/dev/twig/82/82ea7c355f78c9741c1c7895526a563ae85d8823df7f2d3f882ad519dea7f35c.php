<?php

/* AppBundle:Main:index.html.twig */
class __TwigTemplate_e9e5ce3939a14b26e4ec3f5b985b42f040833f4b8ec2b332df8dbbcf11a7a7c5 extends Twig_Template
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
        $__internal_feb15516b16efce44656df7fcafb8cfefc0d0dcf25ac49604a19d7636ac1488d = $this->env->getExtension("native_profiler");
        $__internal_feb15516b16efce44656df7fcafb8cfefc0d0dcf25ac49604a19d7636ac1488d->enter($__internal_feb15516b16efce44656df7fcafb8cfefc0d0dcf25ac49604a19d7636ac1488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb15516b16efce44656df7fcafb8cfefc0d0dcf25ac49604a19d7636ac1488d->leave($__internal_feb15516b16efce44656df7fcafb8cfefc0d0dcf25ac49604a19d7636ac1488d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_420815dc9bf69a96cd194b07b1710ef64baabb568adf693598a76838ed29b685 = $this->env->getExtension("native_profiler");
        $__internal_420815dc9bf69a96cd194b07b1710ef64baabb568adf693598a76838ed29b685->enter($__internal_420815dc9bf69a96cd194b07b1710ef64baabb568adf693598a76838ed29b685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Main:index";
        
        $__internal_420815dc9bf69a96cd194b07b1710ef64baabb568adf693598a76838ed29b685->leave($__internal_420815dc9bf69a96cd194b07b1710ef64baabb568adf693598a76838ed29b685_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34d6e6b2ca7037b02144526e06efcc849ef88f7418705121ab49413aa083c0f3 = $this->env->getExtension("native_profiler");
        $__internal_34d6e6b2ca7037b02144526e06efcc849ef88f7418705121ab49413aa083c0f3->enter($__internal_34d6e6b2ca7037b02144526e06efcc849ef88f7418705121ab49413aa083c0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34d6e6b2ca7037b02144526e06efcc849ef88f7418705121ab49413aa083c0f3->leave($__internal_34d6e6b2ca7037b02144526e06efcc849ef88f7418705121ab49413aa083c0f3_prof);

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
