<?php

/* BoHomeBundle:Invitation:index.html.twig */
class __TwigTemplate_196c89e47e1af44c5a90dc097d0c975270b0df770e06f029e50b72bec3559130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Invitation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6162ada1436515f294fafe9e110a984ee3924fed411f3b3170db5f654b2a5bea = $this->env->getExtension("native_profiler");
        $__internal_6162ada1436515f294fafe9e110a984ee3924fed411f3b3170db5f654b2a5bea->enter($__internal_6162ada1436515f294fafe9e110a984ee3924fed411f3b3170db5f654b2a5bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Invitation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6162ada1436515f294fafe9e110a984ee3924fed411f3b3170db5f654b2a5bea->leave($__internal_6162ada1436515f294fafe9e110a984ee3924fed411f3b3170db5f654b2a5bea_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c605d8b7e8b9b0a71856aca9e082fc09bc60ac95bf13c4b26f43b0d015974439 = $this->env->getExtension("native_profiler");
        $__internal_c605d8b7e8b9b0a71856aca9e082fc09bc60ac95bf13c4b26f43b0d015974439->enter($__internal_c605d8b7e8b9b0a71856aca9e082fc09bc60ac95bf13c4b26f43b0d015974439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.invitation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_c605d8b7e8b9b0a71856aca9e082fc09bc60ac95bf13c4b26f43b0d015974439->leave($__internal_c605d8b7e8b9b0a71856aca9e082fc09bc60ac95bf13c4b26f43b0d015974439_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_85dc4dc7ddc92edf1b240a912b92b3de077a575156b61602637afc48893d0d7d = $this->env->getExtension("native_profiler");
        $__internal_85dc4dc7ddc92edf1b240a912b92b3de077a575156b61602637afc48893d0d7d->enter($__internal_85dc4dc7ddc92edf1b240a912b92b3de077a575156b61602637afc48893d0d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:contract.html.twig", "BoHomeBundle:Invitation:index.html.twig", 3)->display($context);
        
        $__internal_85dc4dc7ddc92edf1b240a912b92b3de077a575156b61602637afc48893d0d7d->leave($__internal_85dc4dc7ddc92edf1b240a912b92b3de077a575156b61602637afc48893d0d7d_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_5c897b515a1c93d4893bfd6a9e702878f18f00ff1bce10f2ec2ad249bb359797 = $this->env->getExtension("native_profiler");
        $__internal_5c897b515a1c93d4893bfd6a9e702878f18f00ff1bce10f2ec2ad249bb359797->enter($__internal_5c897b515a1c93d4893bfd6a9e702878f18f00ff1bce10f2ec2ad249bb359797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.invitation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5c897b515a1c93d4893bfd6a9e702878f18f00ff1bce10f2ec2ad249bb359797->leave($__internal_5c897b515a1c93d4893bfd6a9e702878f18f00ff1bce10f2ec2ad249bb359797_prof);

    }

    // line 5
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4f549e30d2fa251b7707920ecb95aba4827dbaa6dd748160235ac3f8ba613a4c = $this->env->getExtension("native_profiler");
        $__internal_4f549e30d2fa251b7707920ecb95aba4827dbaa6dd748160235ac3f8ba613a4c->enter($__internal_4f549e30d2fa251b7707920ecb95aba4827dbaa6dd748160235ac3f8ba613a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Invitation:actions.html.twig", "BoHomeBundle:Invitation:index.html.twig", 6)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_4f549e30d2fa251b7707920ecb95aba4827dbaa6dd748160235ac3f8ba613a4c->leave($__internal_4f549e30d2fa251b7707920ecb95aba4827dbaa6dd748160235ac3f8ba613a4c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5380a528a94e7194a563777628e9ec17208db2ea3f7f3b6d2cefe6cec7be769f = $this->env->getExtension("native_profiler");
        $__internal_5380a528a94e7194a563777628e9ec17208db2ea3f7f3b6d2cefe6cec7be769f->enter($__internal_5380a528a94e7194a563777628e9ec17208db2ea3f7f3b6d2cefe6cec7be769f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 10
        $this->loadTemplate("BoHomeBundle:Invitation:tbliste.html.twig", "BoHomeBundle:Invitation:index.html.twig", 10)->display($context);
        // line 11
        echo "\t</div>
";
        
        $__internal_5380a528a94e7194a563777628e9ec17208db2ea3f7f3b6d2cefe6cec7be769f->leave($__internal_5380a528a94e7194a563777628e9ec17208db2ea3f7f3b6d2cefe6cec7be769f_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Invitation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 11,  107 => 10,  104 => 9,  98 => 8,  88 => 6,  82 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'layout.menu.contracts'|trans([],'BoAdminBundle')}} >> {{'label.invitation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:contract.html.twig"%}{% endblock %}	*/
/* {% block label %}<h1>{{'layout.menu.contracts'|trans([],'BoAdminBundle')}} >> {{'label.invitation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Invitation:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoHomeBundle:Invitation:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
