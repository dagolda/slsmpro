<?php

/* rights/new.html.twig */
class __TwigTemplate_9857408994a90ac48fd28c175ba5c1488a30be008463a7186c61e3c162fe8e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rights/new.html.twig", 1);
        $this->blocks = array(
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e11db3fa9972948dc35ef66bf9b35aa69907651dcf919f93e41fe4cc19032e = $this->env->getExtension("native_profiler");
        $__internal_30e11db3fa9972948dc35ef66bf9b35aa69907651dcf919f93e41fe4cc19032e->enter($__internal_30e11db3fa9972948dc35ef66bf9b35aa69907651dcf919f93e41fe4cc19032e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e11db3fa9972948dc35ef66bf9b35aa69907651dcf919f93e41fe4cc19032e->leave($__internal_30e11db3fa9972948dc35ef66bf9b35aa69907651dcf919f93e41fe4cc19032e_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c51ced14944b82e111c75462e3778c226f75e1cc56be18e1d76349889f37c395 = $this->env->getExtension("native_profiler");
        $__internal_c51ced14944b82e111c75462e3778c226f75e1cc56be18e1d76349889f37c395->enter($__internal_c51ced14944b82e111c75462e3778c226f75e1cc56be18e1d76349889f37c395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "rights/new.html.twig", 2)->display($context);
        
        $__internal_c51ced14944b82e111c75462e3778c226f75e1cc56be18e1d76349889f37c395->leave($__internal_c51ced14944b82e111c75462e3778c226f75e1cc56be18e1d76349889f37c395_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f9ec1447c2d8c651d066667b9dab7614209e1d74856fff53822d133d31bf4f33 = $this->env->getExtension("native_profiler");
        $__internal_f9ec1447c2d8c651d066667b9dab7614209e1d74856fff53822d133d31bf4f33->enter($__internal_f9ec1447c2d8c651d066667b9dab7614209e1d74856fff53822d133d31bf4f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_f9ec1447c2d8c651d066667b9dab7614209e1d74856fff53822d133d31bf4f33->leave($__internal_f9ec1447c2d8c651d066667b9dab7614209e1d74856fff53822d133d31bf4f33_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_447eafae23693bfe283d932221e3dedbbf16c7b1fcc3f7d8e5dae7b795235036 = $this->env->getExtension("native_profiler");
        $__internal_447eafae23693bfe283d932221e3dedbbf16c7b1fcc3f7d8e5dae7b795235036->enter($__internal_447eafae23693bfe283d932221e3dedbbf16c7b1fcc3f7d8e5dae7b795235036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Rights creation</h1>";
        
        $__internal_447eafae23693bfe283d932221e3dedbbf16c7b1fcc3f7d8e5dae7b795235036->leave($__internal_447eafae23693bfe283d932221e3dedbbf16c7b1fcc3f7d8e5dae7b795235036_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f62b975aef6f5dcd4fe5f0843efa35639364001014292505624c8509b28ef074 = $this->env->getExtension("native_profiler");
        $__internal_f62b975aef6f5dcd4fe5f0843efa35639364001014292505624c8509b28ef074->enter($__internal_f62b975aef6f5dcd4fe5f0843efa35639364001014292505624c8509b28ef074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("rights_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoUserBundle:Rights:newactions.html.twig", "rights/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoUserBundle:Rights:newform.html.twig", "rights/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_f62b975aef6f5dcd4fe5f0843efa35639364001014292505624c8509b28ef074->leave($__internal_f62b975aef6f5dcd4fe5f0843efa35639364001014292505624c8509b28ef074_prof);

    }

    public function getTemplateName()
    {
        return "rights/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  98 => 13,  96 => 12,  93 => 11,  91 => 10,  87 => 9,  83 => 8,  80 => 7,  74 => 6,  62 => 5,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>Rights creation</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('rights_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoUserBundle:Rights:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoUserBundle:Rights:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
