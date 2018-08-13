<?php

/* rubric/new.html.twig */
class __TwigTemplate_b8081b84f7c563bc8ba990318b46c49063f46d22bad2c09ae0bb121d5b05c04f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rubric/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_2872a542eca557cb982e3ef967215b7f8753ded48e327e1db4a72e19ff755d5f = $this->env->getExtension("native_profiler");
        $__internal_2872a542eca557cb982e3ef967215b7f8753ded48e327e1db4a72e19ff755d5f->enter($__internal_2872a542eca557cb982e3ef967215b7f8753ded48e327e1db4a72e19ff755d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rubric/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2872a542eca557cb982e3ef967215b7f8753ded48e327e1db4a72e19ff755d5f->leave($__internal_2872a542eca557cb982e3ef967215b7f8753ded48e327e1db4a72e19ff755d5f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ff50d069baceba9c2a3b50c9459f29fc9297979776fa8f4b11b70197b1f737f = $this->env->getExtension("native_profiler");
        $__internal_7ff50d069baceba9c2a3b50c9459f29fc9297979776fa8f4b11b70197b1f737f->enter($__internal_7ff50d069baceba9c2a3b50c9459f29fc9297979776fa8f4b11b70197b1f737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_7ff50d069baceba9c2a3b50c9459f29fc9297979776fa8f4b11b70197b1f737f->leave($__internal_7ff50d069baceba9c2a3b50c9459f29fc9297979776fa8f4b11b70197b1f737f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_89ee371ea76137a7efa8e78e5fae0eb173de65c57b5fb96c257b367bfe255427 = $this->env->getExtension("native_profiler");
        $__internal_89ee371ea76137a7efa8e78e5fae0eb173de65c57b5fb96c257b367bfe255427->enter($__internal_89ee371ea76137a7efa8e78e5fae0eb173de65c57b5fb96c257b367bfe255427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "rubric/new.html.twig", 3)->display($context);
        
        $__internal_89ee371ea76137a7efa8e78e5fae0eb173de65c57b5fb96c257b367bfe255427->leave($__internal_89ee371ea76137a7efa8e78e5fae0eb173de65c57b5fb96c257b367bfe255427_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_332603b813218d6be8cd25c818a7207485a210879f5d8ce8ec640493d7eff56f = $this->env->getExtension("native_profiler");
        $__internal_332603b813218d6be8cd25c818a7207485a210879f5d8ce8ec640493d7eff56f->enter($__internal_332603b813218d6be8cd25c818a7207485a210879f5d8ce8ec640493d7eff56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_332603b813218d6be8cd25c818a7207485a210879f5d8ce8ec640493d7eff56f->leave($__internal_332603b813218d6be8cd25c818a7207485a210879f5d8ce8ec640493d7eff56f_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_3156bd8c3258ef545c7c59c504818a7da5969546e6c050f5f8e2d009ffef7f09 = $this->env->getExtension("native_profiler");
        $__internal_3156bd8c3258ef545c7c59c504818a7da5969546e6c050f5f8e2d009ffef7f09->enter($__internal_3156bd8c3258ef545c7c59c504818a7da5969546e6c050f5f8e2d009ffef7f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3156bd8c3258ef545c7c59c504818a7da5969546e6c050f5f8e2d009ffef7f09->leave($__internal_3156bd8c3258ef545c7c59c504818a7da5969546e6c050f5f8e2d009ffef7f09_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0100a1280a5ab39c85cadafc7fe662a42f94fbdc4f4437c676dfe3607da927f7 = $this->env->getExtension("native_profiler");
        $__internal_0100a1280a5ab39c85cadafc7fe662a42f94fbdc4f4437c676dfe3607da927f7->enter($__internal_0100a1280a5ab39c85cadafc7fe662a42f94fbdc4f4437c676dfe3607da927f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("rubric_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Rubric:newactions.html.twig", "rubric/new.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Rubric:newform.html.twig", "rubric/new.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_0100a1280a5ab39c85cadafc7fe662a42f94fbdc4f4437c676dfe3607da927f7->leave($__internal_0100a1280a5ab39c85cadafc7fe662a42f94fbdc4f4437c676dfe3607da927f7_prof);

    }

    public function getTemplateName()
    {
        return "rubric/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 15,  119 => 14,  117 => 13,  114 => 12,  112 => 11,  108 => 10,  104 => 9,  101 => 8,  95 => 7,  79 => 6,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('rubric_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Rubric:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Rubric:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
