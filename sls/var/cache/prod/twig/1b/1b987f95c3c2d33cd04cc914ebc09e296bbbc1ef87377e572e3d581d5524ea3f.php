<?php

/* contractual/new.html.twig */
class __TwigTemplate_0a6562cfcf944b648507aa410678d5209a4e8bc8e2010ea0ceaba1cdb2b4e251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contractual/new.html.twig", 1);
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
        $__internal_d2a66bd1a893a8ffe37de96723c07d32846c25f84c3dc9569676d30c01abfcb0 = $this->env->getExtension("native_profiler");
        $__internal_d2a66bd1a893a8ffe37de96723c07d32846c25f84c3dc9569676d30c01abfcb0->enter($__internal_d2a66bd1a893a8ffe37de96723c07d32846c25f84c3dc9569676d30c01abfcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contractual/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a66bd1a893a8ffe37de96723c07d32846c25f84c3dc9569676d30c01abfcb0->leave($__internal_d2a66bd1a893a8ffe37de96723c07d32846c25f84c3dc9569676d30c01abfcb0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_35d52c074fbbb4dc5494154b71b98fb298addc2794d1f775a97934fe0804766b = $this->env->getExtension("native_profiler");
        $__internal_35d52c074fbbb4dc5494154b71b98fb298addc2794d1f775a97934fe0804766b->enter($__internal_35d52c074fbbb4dc5494154b71b98fb298addc2794d1f775a97934fe0804766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contractual", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_35d52c074fbbb4dc5494154b71b98fb298addc2794d1f775a97934fe0804766b->leave($__internal_35d52c074fbbb4dc5494154b71b98fb298addc2794d1f775a97934fe0804766b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_fcabd4780810e71c5903fda2c786b50ee17041db8a9b8f6517bc10baeab822d4 = $this->env->getExtension("native_profiler");
        $__internal_fcabd4780810e71c5903fda2c786b50ee17041db8a9b8f6517bc10baeab822d4->enter($__internal_fcabd4780810e71c5903fda2c786b50ee17041db8a9b8f6517bc10baeab822d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contractual/new.html.twig", 3)->display($context);
        
        $__internal_fcabd4780810e71c5903fda2c786b50ee17041db8a9b8f6517bc10baeab822d4->leave($__internal_fcabd4780810e71c5903fda2c786b50ee17041db8a9b8f6517bc10baeab822d4_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_57064d1865c38f322014de51b721f34b99c9c32205849be88964a5a9fb62b250 = $this->env->getExtension("native_profiler");
        $__internal_57064d1865c38f322014de51b721f34b99c9c32205849be88964a5a9fb62b250->enter($__internal_57064d1865c38f322014de51b721f34b99c9c32205849be88964a5a9fb62b250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_57064d1865c38f322014de51b721f34b99c9c32205849be88964a5a9fb62b250->leave($__internal_57064d1865c38f322014de51b721f34b99c9c32205849be88964a5a9fb62b250_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_f9afea9f765ea109fd8cbafff15f0995b74872cef11892eff4bce74034d21854 = $this->env->getExtension("native_profiler");
        $__internal_f9afea9f765ea109fd8cbafff15f0995b74872cef11892eff4bce74034d21854->enter($__internal_f9afea9f765ea109fd8cbafff15f0995b74872cef11892eff4bce74034d21854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contractual", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_f9afea9f765ea109fd8cbafff15f0995b74872cef11892eff4bce74034d21854->leave($__internal_f9afea9f765ea109fd8cbafff15f0995b74872cef11892eff4bce74034d21854_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa84f37040b840f24c09e426f60f7d04a9018d9971e4348e51b783000cd7877 = $this->env->getExtension("native_profiler");
        $__internal_baa84f37040b840f24c09e426f60f7d04a9018d9971e4348e51b783000cd7877->enter($__internal_baa84f37040b840f24c09e426f60f7d04a9018d9971e4348e51b783000cd7877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_contractual_new", array("idcontract" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Contractual:newactions.html.twig", "contractual/new.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t";
        if ( !(null === (isset($context["contractuals"]) ? $context["contractuals"] : $this->getContext($context, "contractuals")))) {
            // line 11
            echo "\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Contractual:select.html.twig", "contractual/new.html.twig", 11)->display($context);
            // line 12
            echo "\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), 'errors');
            echo "
\t\t\t\t\t<div class=\"show_content\">
\t\t\t\t\t\t";
            // line 15
            $this->loadTemplate("BoAdminBundle:Contractual:newform.html.twig", "contractual/new.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t\t\t</div>
\t\t\t\t";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), 'rest');
            echo "
\t\t\t";
        }
        // line 19
        echo "\t\t</form>\t
\t</div>
";
        
        $__internal_baa84f37040b840f24c09e426f60f7d04a9018d9971e4348e51b783000cd7877->leave($__internal_baa84f37040b840f24c09e426f60f7d04a9018d9971e4348e51b783000cd7877_prof);

    }

    public function getTemplateName()
    {
        return "contractual/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 19,  128 => 17,  125 => 16,  123 => 15,  117 => 13,  114 => 12,  111 => 11,  108 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contractual'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.contractual'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('contracts_contractual_new',{'idcontract':idcontract}) }}" method="post" class="style">*/
/* 			{%include "BoAdminBundle:Contractual:newactions.html.twig"%}*/
/* 			{%if contractuals is not null%}*/
/* 				{%include "BoAdminBundle:Contractual:select.html.twig"%}*/
/* 			{%else%}*/
/* 				{{ form_errors(contractual_form) }}*/
/* 					<div class="show_content">*/
/* 						{%include "BoAdminBundle:Contractual:newform.html.twig"%}*/
/* 					</div>*/
/* 				{{ form_rest(contractual_form) }}*/
/* 			{%endif%}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
