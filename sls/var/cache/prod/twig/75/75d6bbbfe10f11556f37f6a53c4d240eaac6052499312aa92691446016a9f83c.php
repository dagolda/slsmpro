<?php

/* rights/edit.html.twig */
class __TwigTemplate_b70e212e6d1957606fb59b59cd760ee22c083368b0fd11d2b15d9d1d2e677ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rights/edit.html.twig", 1);
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
        $__internal_ce624bbd1aaaa3376e360b48588a7264a4aea1e23269a6f16f68c2247caa924d = $this->env->getExtension("native_profiler");
        $__internal_ce624bbd1aaaa3376e360b48588a7264a4aea1e23269a6f16f68c2247caa924d->enter($__internal_ce624bbd1aaaa3376e360b48588a7264a4aea1e23269a6f16f68c2247caa924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce624bbd1aaaa3376e360b48588a7264a4aea1e23269a6f16f68c2247caa924d->leave($__internal_ce624bbd1aaaa3376e360b48588a7264a4aea1e23269a6f16f68c2247caa924d_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_f7f5aa5a66f72f081fe693280183bc2af7e4ed0ab327a6f240dea5b7a857b0e5 = $this->env->getExtension("native_profiler");
        $__internal_f7f5aa5a66f72f081fe693280183bc2af7e4ed0ab327a6f240dea5b7a857b0e5->enter($__internal_f7f5aa5a66f72f081fe693280183bc2af7e4ed0ab327a6f240dea5b7a857b0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "rights/edit.html.twig", 2)->display($context);
        
        $__internal_f7f5aa5a66f72f081fe693280183bc2af7e4ed0ab327a6f240dea5b7a857b0e5->leave($__internal_f7f5aa5a66f72f081fe693280183bc2af7e4ed0ab327a6f240dea5b7a857b0e5_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_59bb3f80361a6cdaefd6792c6a882371ce98cf1b358001192a8a711752d9572b = $this->env->getExtension("native_profiler");
        $__internal_59bb3f80361a6cdaefd6792c6a882371ce98cf1b358001192a8a711752d9572b->enter($__internal_59bb3f80361a6cdaefd6792c6a882371ce98cf1b358001192a8a711752d9572b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_59bb3f80361a6cdaefd6792c6a882371ce98cf1b358001192a8a711752d9572b->leave($__internal_59bb3f80361a6cdaefd6792c6a882371ce98cf1b358001192a8a711752d9572b_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_2cdb5075e625aa2d3f93e7bc90461af5566d54d95714a45e5e5716f908800f5f = $this->env->getExtension("native_profiler");
        $__internal_2cdb5075e625aa2d3f93e7bc90461af5566d54d95714a45e5e5716f908800f5f->enter($__internal_2cdb5075e625aa2d3f93e7bc90461af5566d54d95714a45e5e5716f908800f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Rights edit</h1>";
        
        $__internal_2cdb5075e625aa2d3f93e7bc90461af5566d54d95714a45e5e5716f908800f5f->leave($__internal_2cdb5075e625aa2d3f93e7bc90461af5566d54d95714a45e5e5716f908800f5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_876f3e1ab57116d68ae39f897b169978c84b78e5aef6f8bc4fa76490adbf7e00 = $this->env->getExtension("native_profiler");
        $__internal_876f3e1ab57116d68ae39f897b169978c84b78e5aef6f8bc4fa76490adbf7e00->enter($__internal_876f3e1ab57116d68ae39f897b169978c84b78e5aef6f8bc4fa76490adbf7e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rights_edit", array("id" => $this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoUserBundle:Rights:righteditactions.html.twig", "rights/edit.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>Rights</legend>
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoUserBundle:Rights:righteditform.html.twig", "rights/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_876f3e1ab57116d68ae39f897b169978c84b78e5aef6f8bc4fa76490adbf7e00->leave($__internal_876f3e1ab57116d68ae39f897b169978c84b78e5aef6f8bc4fa76490adbf7e00_prof);

    }

    public function getTemplateName()
    {
        return "rights/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 14,  97 => 13,  95 => 12,  91 => 10,  89 => 9,  85 => 8,  81 => 7,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>Rights edit</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('rights_edit',{'id':right.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoUserBundle:Rights:righteditactions.html.twig"%}*/
/* 			<div class="display_content">*/
/* 				<legend>Rights</legend>*/
/* 				{%include "BoUserBundle:Rights:righteditform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
