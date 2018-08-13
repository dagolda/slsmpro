<?php

/* typecontract/edit.html.twig */
class __TwigTemplate_b26377bdeedda305069eb351c337b2e20414d772a4a9f1583183d3a30babffd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typecontract/edit.html.twig", 1);
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
        $__internal_96a7182eb6aec9c5403ab095e5c921acac249c81996da063c92a50fff0b1b455 = $this->env->getExtension("native_profiler");
        $__internal_96a7182eb6aec9c5403ab095e5c921acac249c81996da063c92a50fff0b1b455->enter($__internal_96a7182eb6aec9c5403ab095e5c921acac249c81996da063c92a50fff0b1b455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecontract/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a7182eb6aec9c5403ab095e5c921acac249c81996da063c92a50fff0b1b455->leave($__internal_96a7182eb6aec9c5403ab095e5c921acac249c81996da063c92a50fff0b1b455_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1de72342433126340cc43361834dcd300714baa6e33a01dff9dc2ddedf34320 = $this->env->getExtension("native_profiler");
        $__internal_d1de72342433126340cc43361834dcd300714baa6e33a01dff9dc2ddedf34320->enter($__internal_d1de72342433126340cc43361834dcd300714baa6e33a01dff9dc2ddedf34320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.typecontract", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d1de72342433126340cc43361834dcd300714baa6e33a01dff9dc2ddedf34320->leave($__internal_d1de72342433126340cc43361834dcd300714baa6e33a01dff9dc2ddedf34320_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_ef4cde98090f07086a53c06d31557433ef065354bd1e51d1941276965c5f3ea6 = $this->env->getExtension("native_profiler");
        $__internal_ef4cde98090f07086a53c06d31557433ef065354bd1e51d1941276965c5f3ea6->enter($__internal_ef4cde98090f07086a53c06d31557433ef065354bd1e51d1941276965c5f3ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "typecontract/edit.html.twig", 3)->display($context);
        
        $__internal_ef4cde98090f07086a53c06d31557433ef065354bd1e51d1941276965c5f3ea6->leave($__internal_ef4cde98090f07086a53c06d31557433ef065354bd1e51d1941276965c5f3ea6_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_029d0bd63450abb27cf8c89a5f28fe465455f09a0021ee7eabf9c952597bcf43 = $this->env->getExtension("native_profiler");
        $__internal_029d0bd63450abb27cf8c89a5f28fe465455f09a0021ee7eabf9c952597bcf43->enter($__internal_029d0bd63450abb27cf8c89a5f28fe465455f09a0021ee7eabf9c952597bcf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_029d0bd63450abb27cf8c89a5f28fe465455f09a0021ee7eabf9c952597bcf43->leave($__internal_029d0bd63450abb27cf8c89a5f28fe465455f09a0021ee7eabf9c952597bcf43_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_26b4f0c37393c3d0c73c884224703d0cc4cb29b3a69cd501d3723aa60949955f = $this->env->getExtension("native_profiler");
        $__internal_26b4f0c37393c3d0c73c884224703d0cc4cb29b3a69cd501d3723aa60949955f->enter($__internal_26b4f0c37393c3d0c73c884224703d0cc4cb29b3a69cd501d3723aa60949955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.typecontract", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_26b4f0c37393c3d0c73c884224703d0cc4cb29b3a69cd501d3723aa60949955f->leave($__internal_26b4f0c37393c3d0c73c884224703d0cc4cb29b3a69cd501d3723aa60949955f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab1906cb121113e6c7c5047499277f2af343d9516838cdfae3490b728ca2f3ea = $this->env->getExtension("native_profiler");
        $__internal_ab1906cb121113e6c7c5047499277f2af343d9516838cdfae3490b728ca2f3ea->enter($__internal_ab1906cb121113e6c7c5047499277f2af343d9516838cdfae3490b728ca2f3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typecontract_edit", array("id" => $this->getAttribute((isset($context["typecontract"]) ? $context["typecontract"] : $this->getContext($context, "typecontract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Typecontract:editactions.html.twig", "typecontract/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Typecontract:editform.html.twig", "typecontract/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_ab1906cb121113e6c7c5047499277f2af343d9516838cdfae3490b728ca2f3ea->leave($__internal_ab1906cb121113e6c7c5047499277f2af343d9516838cdfae3490b728ca2f3ea_prof);

    }

    public function getTemplateName()
    {
        return "typecontract/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.typecontract'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.typecontract'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('typecontract_edit',{'id':typecontract.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Typecontract:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Typecontract:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
