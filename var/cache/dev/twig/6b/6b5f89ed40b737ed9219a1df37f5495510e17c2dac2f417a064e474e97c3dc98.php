<?php

/* AppBundle::Blocks/subscribe.html.twig */
class __TwigTemplate_7dd3ae53dda0cc7cf6a9112a6756e79deabff60ff0eba046cd83a510c53a9fa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe212ce043984b8e2f8574bc290722a04a25ed7ac774dfabdf9a65152ef8eb66 = $this->env->getExtension("native_profiler");
        $__internal_fe212ce043984b8e2f8574bc290722a04a25ed7ac774dfabdf9a65152ef8eb66->enter($__internal_fe212ce043984b8e2f8574bc290722a04a25ed7ac774dfabdf9a65152ef8eb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Blocks/subscribe.html.twig"));

        // line 1
        echo "<div class=\"well text-center\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("post_create");
        echo "\" class=\"btn btn-primary btn-lg\">Создать пост</a>
</div>";
        
        $__internal_fe212ce043984b8e2f8574bc290722a04a25ed7ac774dfabdf9a65152ef8eb66->leave($__internal_fe212ce043984b8e2f8574bc290722a04a25ed7ac774dfabdf9a65152ef8eb66_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::Blocks/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="well text-center">*/
/*     <a href="{{ path('post_create') }}" class="btn btn-primary btn-lg">Создать пост</a>*/
/* </div>*/
