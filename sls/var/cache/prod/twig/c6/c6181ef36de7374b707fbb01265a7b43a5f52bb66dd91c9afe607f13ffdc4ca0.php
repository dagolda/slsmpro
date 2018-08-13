<?php

/* billingcontact/index.html.twig */
class __TwigTemplate_5f752bc58250392fe8e31a033997ff66ef882b83f8a5799d3e9973c95d5d18c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "billingcontact/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3b01ec0fc1bd595d19cd02a6ade5cd09ace5c7422bcd28a1cc83381219e1b34 = $this->env->getExtension("native_profiler");
        $__internal_b3b01ec0fc1bd595d19cd02a6ade5cd09ace5c7422bcd28a1cc83381219e1b34->enter($__internal_b3b01ec0fc1bd595d19cd02a6ade5cd09ace5c7422bcd28a1cc83381219e1b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "billingcontact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3b01ec0fc1bd595d19cd02a6ade5cd09ace5c7422bcd28a1cc83381219e1b34->leave($__internal_b3b01ec0fc1bd595d19cd02a6ade5cd09ace5c7422bcd28a1cc83381219e1b34_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c718c6641c93dfc4a5f3edfd0281f24c935d31070658d516fc0b639513a9b7f = $this->env->getExtension("native_profiler");
        $__internal_8c718c6641c93dfc4a5f3edfd0281f24c935d31070658d516fc0b639513a9b7f->enter($__internal_8c718c6641c93dfc4a5f3edfd0281f24c935d31070658d516fc0b639513a9b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8c718c6641c93dfc4a5f3edfd0281f24c935d31070658d516fc0b639513a9b7f->leave($__internal_8c718c6641c93dfc4a5f3edfd0281f24c935d31070658d516fc0b639513a9b7f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_90f003a4b2a189826a50602e24d33a88af3622442a1b80eadb9fe6f3c5a5f961 = $this->env->getExtension("native_profiler");
        $__internal_90f003a4b2a189826a50602e24d33a88af3622442a1b80eadb9fe6f3c5a5f961->enter($__internal_90f003a4b2a189826a50602e24d33a88af3622442a1b80eadb9fe6f3c5a5f961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "billingcontact/index.html.twig", 3)->display($context);
        
        $__internal_90f003a4b2a189826a50602e24d33a88af3622442a1b80eadb9fe6f3c5a5f961->leave($__internal_90f003a4b2a189826a50602e24d33a88af3622442a1b80eadb9fe6f3c5a5f961_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fc1ecc8fbb5223a8147086d7263906d5ad39d7b683fe111ebb5ea96730bcedbc = $this->env->getExtension("native_profiler");
        $__internal_fc1ecc8fbb5223a8147086d7263906d5ad39d7b683fe111ebb5ea96730bcedbc->enter($__internal_fc1ecc8fbb5223a8147086d7263906d5ad39d7b683fe111ebb5ea96730bcedbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_fc1ecc8fbb5223a8147086d7263906d5ad39d7b683fe111ebb5ea96730bcedbc->leave($__internal_fc1ecc8fbb5223a8147086d7263906d5ad39d7b683fe111ebb5ea96730bcedbc_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_722e4217c8146e032bbf6ace54e84958dabd038e9aeb085d1ca4920f8bacaa6d = $this->env->getExtension("native_profiler");
        $__internal_722e4217c8146e032bbf6ace54e84958dabd038e9aeb085d1ca4920f8bacaa6d->enter($__internal_722e4217c8146e032bbf6ace54e84958dabd038e9aeb085d1ca4920f8bacaa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_722e4217c8146e032bbf6ace54e84958dabd038e9aeb085d1ca4920f8bacaa6d->leave($__internal_722e4217c8146e032bbf6ace54e84958dabd038e9aeb085d1ca4920f8bacaa6d_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c09e6582931f6a2ce2060b71aff06eaf1d7dc593aecae57b07be6c79bb346849 = $this->env->getExtension("native_profiler");
        $__internal_c09e6582931f6a2ce2060b71aff06eaf1d7dc593aecae57b07be6c79bb346849->enter($__internal_c09e6582931f6a2ce2060b71aff06eaf1d7dc593aecae57b07be6c79bb346849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:BillingContact:actions.html.twig", "billingcontact/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_c09e6582931f6a2ce2060b71aff06eaf1d7dc593aecae57b07be6c79bb346849->leave($__internal_c09e6582931f6a2ce2060b71aff06eaf1d7dc593aecae57b07be6c79bb346849_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e663cc87979010748e1aa5d3c3ce8f1c9dc914a8f7dd8d47b48334153f87d968 = $this->env->getExtension("native_profiler");
        $__internal_e663cc87979010748e1aa5d3c3ce8f1c9dc914a8f7dd8d47b48334153f87d968->enter($__internal_e663cc87979010748e1aa5d3c3ce8f1c9dc914a8f7dd8d47b48334153f87d968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:BillingContact:tbliste.html.twig", "billingcontact/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
";
        
        $__internal_e663cc87979010748e1aa5d3c3ce8f1c9dc914a8f7dd8d47b48334153f87d968->leave($__internal_e663cc87979010748e1aa5d3c3ce8f1c9dc914a8f7dd8d47b48334153f87d968_prof);

    }

    public function getTemplateName()
    {
        return "billingcontact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  121 => 12,  118 => 11,  112 => 10,  102 => 8,  96 => 7,  80 => 6,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.billingcontact'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.billingcontact'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:BillingContact:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:BillingContact:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
