<?php

/* campus/index.html.twig */
class __TwigTemplate_d769c83c933ea44207ce841549597670fff3db3ccfe74855ac0699a180b9a7d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "campus/index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b918f7806283f9d7105c3adda6ecbd8aa3bd434bf6b0cc54155dd66230b7d00a = $this->env->getExtension("native_profiler");
        $__internal_b918f7806283f9d7105c3adda6ecbd8aa3bd434bf6b0cc54155dd66230b7d00a->enter($__internal_b918f7806283f9d7105c3adda6ecbd8aa3bd434bf6b0cc54155dd66230b7d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "campus/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b918f7806283f9d7105c3adda6ecbd8aa3bd434bf6b0cc54155dd66230b7d00a->leave($__internal_b918f7806283f9d7105c3adda6ecbd8aa3bd434bf6b0cc54155dd66230b7d00a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e3b70e26fe13ae64a67a6d2424bef49d6bd3a99716cc8ba5d723c1de313d3a2 = $this->env->getExtension("native_profiler");
        $__internal_9e3b70e26fe13ae64a67a6d2424bef49d6bd3a99716cc8ba5d723c1de313d3a2->enter($__internal_9e3b70e26fe13ae64a67a6d2424bef49d6bd3a99716cc8ba5d723c1de313d3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.campus", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9e3b70e26fe13ae64a67a6d2424bef49d6bd3a99716cc8ba5d723c1de313d3a2->leave($__internal_9e3b70e26fe13ae64a67a6d2424bef49d6bd3a99716cc8ba5d723c1de313d3a2_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_67b777ea80e6efebfd09bbaeac942155a0c532d4c5c1fa1835535919745b384f = $this->env->getExtension("native_profiler");
        $__internal_67b777ea80e6efebfd09bbaeac942155a0c532d4c5c1fa1835535919745b384f->enter($__internal_67b777ea80e6efebfd09bbaeac942155a0c532d4c5c1fa1835535919745b384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "campus/index.html.twig", 3)->display($context);
        
        $__internal_67b777ea80e6efebfd09bbaeac942155a0c532d4c5c1fa1835535919745b384f->leave($__internal_67b777ea80e6efebfd09bbaeac942155a0c532d4c5c1fa1835535919745b384f_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_35ee7c58cd6eb8b754e10e24043c513dbe23a7a1999875dbbe72584dcd8254be = $this->env->getExtension("native_profiler");
        $__internal_35ee7c58cd6eb8b754e10e24043c513dbe23a7a1999875dbbe72584dcd8254be->enter($__internal_35ee7c58cd6eb8b754e10e24043c513dbe23a7a1999875dbbe72584dcd8254be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_35ee7c58cd6eb8b754e10e24043c513dbe23a7a1999875dbbe72584dcd8254be->leave($__internal_35ee7c58cd6eb8b754e10e24043c513dbe23a7a1999875dbbe72584dcd8254be_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_f670e765189a7ced2c238ba96e86416a0b8a23f8128e9cb70b26681df654fa73 = $this->env->getExtension("native_profiler");
        $__internal_f670e765189a7ced2c238ba96e86416a0b8a23f8128e9cb70b26681df654fa73->enter($__internal_f670e765189a7ced2c238ba96e86416a0b8a23f8128e9cb70b26681df654fa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.campus", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_f670e765189a7ced2c238ba96e86416a0b8a23f8128e9cb70b26681df654fa73->leave($__internal_f670e765189a7ced2c238ba96e86416a0b8a23f8128e9cb70b26681df654fa73_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_35a35b89a2ba11f9b2495c38bc9e0fe190011d80cf3bd6871a87400490c59d0f = $this->env->getExtension("native_profiler");
        $__internal_35a35b89a2ba11f9b2495c38bc9e0fe190011d80cf3bd6871a87400490c59d0f->enter($__internal_35a35b89a2ba11f9b2495c38bc9e0fe190011d80cf3bd6871a87400490c59d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Campus:actions.html.twig", "campus/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_35a35b89a2ba11f9b2495c38bc9e0fe190011d80cf3bd6871a87400490c59d0f->leave($__internal_35a35b89a2ba11f9b2495c38bc9e0fe190011d80cf3bd6871a87400490c59d0f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_38440cc8dbe6869079ddaf5e743513731849482bdf6b75fc072c69c93576f87a = $this->env->getExtension("native_profiler");
        $__internal_38440cc8dbe6869079ddaf5e743513731849482bdf6b75fc072c69c93576f87a->enter($__internal_38440cc8dbe6869079ddaf5e743513731849482bdf6b75fc072c69c93576f87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Campus:tbliste.html.twig", "campus/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
";
        
        $__internal_38440cc8dbe6869079ddaf5e743513731849482bdf6b75fc072c69c93576f87a->leave($__internal_38440cc8dbe6869079ddaf5e743513731849482bdf6b75fc072c69c93576f87a_prof);

    }

    public function getTemplateName()
    {
        return "campus/index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.campus'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.campus'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Campus:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Campus:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
