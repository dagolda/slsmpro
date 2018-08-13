<?php

/* billingcontact/new.html.twig */
class __TwigTemplate_c791c12ee09593a8664b756d851104582909753cecee649d19b8cba7ce91d1ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "billingcontact/new.html.twig", 1);
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
        $__internal_29a614f18a5ad5a02540d32ca9cc557240630b88f6ea485091e559249bb41268 = $this->env->getExtension("native_profiler");
        $__internal_29a614f18a5ad5a02540d32ca9cc557240630b88f6ea485091e559249bb41268->enter($__internal_29a614f18a5ad5a02540d32ca9cc557240630b88f6ea485091e559249bb41268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "billingcontact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a614f18a5ad5a02540d32ca9cc557240630b88f6ea485091e559249bb41268->leave($__internal_29a614f18a5ad5a02540d32ca9cc557240630b88f6ea485091e559249bb41268_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ab6de83285f06fb70a821d5fcc2eb00baf1760e0461a04c51a8fb3a92500cc2 = $this->env->getExtension("native_profiler");
        $__internal_0ab6de83285f06fb70a821d5fcc2eb00baf1760e0461a04c51a8fb3a92500cc2->enter($__internal_0ab6de83285f06fb70a821d5fcc2eb00baf1760e0461a04c51a8fb3a92500cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_0ab6de83285f06fb70a821d5fcc2eb00baf1760e0461a04c51a8fb3a92500cc2->leave($__internal_0ab6de83285f06fb70a821d5fcc2eb00baf1760e0461a04c51a8fb3a92500cc2_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_dbf737a93f38d5b59b0fa316fdd2d4528be506210add7ab6f998c9f8054ac7d4 = $this->env->getExtension("native_profiler");
        $__internal_dbf737a93f38d5b59b0fa316fdd2d4528be506210add7ab6f998c9f8054ac7d4->enter($__internal_dbf737a93f38d5b59b0fa316fdd2d4528be506210add7ab6f998c9f8054ac7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "billingcontact/new.html.twig", 3)->display($context);
        
        $__internal_dbf737a93f38d5b59b0fa316fdd2d4528be506210add7ab6f998c9f8054ac7d4->leave($__internal_dbf737a93f38d5b59b0fa316fdd2d4528be506210add7ab6f998c9f8054ac7d4_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7b566a2a5c84ae1bb9c27dc9cfb2430d75abe256f9927b2e48baa5d56070deac = $this->env->getExtension("native_profiler");
        $__internal_7b566a2a5c84ae1bb9c27dc9cfb2430d75abe256f9927b2e48baa5d56070deac->enter($__internal_7b566a2a5c84ae1bb9c27dc9cfb2430d75abe256f9927b2e48baa5d56070deac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_7b566a2a5c84ae1bb9c27dc9cfb2430d75abe256f9927b2e48baa5d56070deac->leave($__internal_7b566a2a5c84ae1bb9c27dc9cfb2430d75abe256f9927b2e48baa5d56070deac_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_5c812648d7886a7e0e63792bf37bcb4b52c73180139c7c28f34e6c9428c35dc3 = $this->env->getExtension("native_profiler");
        $__internal_5c812648d7886a7e0e63792bf37bcb4b52c73180139c7c28f34e6c9428c35dc3->enter($__internal_5c812648d7886a7e0e63792bf37bcb4b52c73180139c7c28f34e6c9428c35dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5c812648d7886a7e0e63792bf37bcb4b52c73180139c7c28f34e6c9428c35dc3->leave($__internal_5c812648d7886a7e0e63792bf37bcb4b52c73180139c7c28f34e6c9428c35dc3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_86048e31def16c3da641162f874049f609a8c6a151183076539e93e984e33611 = $this->env->getExtension("native_profiler");
        $__internal_86048e31def16c3da641162f874049f609a8c6a151183076539e93e984e33611->enter($__internal_86048e31def16c3da641162f874049f609a8c6a151183076539e93e984e33611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("billingcontact_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:BillingContact:newactions.html.twig", "billingcontact/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:BillingContact:newform.html.twig", "billingcontact/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_86048e31def16c3da641162f874049f609a8c6a151183076539e93e984e33611->leave($__internal_86048e31def16c3da641162f874049f609a8c6a151183076539e93e984e33611_prof);

    }

    public function getTemplateName()
    {
        return "billingcontact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.billingcontact'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.billingcontact'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('billingcontact_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:BillingContact:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:BillingContact:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
