<?php

/* group/edit.html.twig */
class __TwigTemplate_8577254d52a4ec01400e0b726166dbed7c59d517ec6816408c13dc8b6e1f759c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "group/edit.html.twig", 1);
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
        $__internal_dfbb8a5ac4e1c93b31f413ee998dec75adacbdaca3cf3e7d4ec4ad6582d97b14 = $this->env->getExtension("native_profiler");
        $__internal_dfbb8a5ac4e1c93b31f413ee998dec75adacbdaca3cf3e7d4ec4ad6582d97b14->enter($__internal_dfbb8a5ac4e1c93b31f413ee998dec75adacbdaca3cf3e7d4ec4ad6582d97b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbb8a5ac4e1c93b31f413ee998dec75adacbdaca3cf3e7d4ec4ad6582d97b14->leave($__internal_dfbb8a5ac4e1c93b31f413ee998dec75adacbdaca3cf3e7d4ec4ad6582d97b14_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_748d073558b7f68effd82f283178e33fdf49b5dd70215c3a03b29604317901f6 = $this->env->getExtension("native_profiler");
        $__internal_748d073558b7f68effd82f283178e33fdf49b5dd70215c3a03b29604317901f6->enter($__internal_748d073558b7f68effd82f283178e33fdf49b5dd70215c3a03b29604317901f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_748d073558b7f68effd82f283178e33fdf49b5dd70215c3a03b29604317901f6->leave($__internal_748d073558b7f68effd82f283178e33fdf49b5dd70215c3a03b29604317901f6_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_934757fea5d38357f449592a94776d7959ffc99ac2646a4ddc1ddedbe07ba3fa = $this->env->getExtension("native_profiler");
        $__internal_934757fea5d38357f449592a94776d7959ffc99ac2646a4ddc1ddedbe07ba3fa->enter($__internal_934757fea5d38357f449592a94776d7959ffc99ac2646a4ddc1ddedbe07ba3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "group/edit.html.twig", 3)->display($context);
        
        $__internal_934757fea5d38357f449592a94776d7959ffc99ac2646a4ddc1ddedbe07ba3fa->leave($__internal_934757fea5d38357f449592a94776d7959ffc99ac2646a4ddc1ddedbe07ba3fa_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d811c89e797175400d5736def306cb3d9cb95cbfa668247e44911c6a22a1a47a = $this->env->getExtension("native_profiler");
        $__internal_d811c89e797175400d5736def306cb3d9cb95cbfa668247e44911c6a22a1a47a->enter($__internal_d811c89e797175400d5736def306cb3d9cb95cbfa668247e44911c6a22a1a47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_d811c89e797175400d5736def306cb3d9cb95cbfa668247e44911c6a22a1a47a->leave($__internal_d811c89e797175400d5736def306cb3d9cb95cbfa668247e44911c6a22a1a47a_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ad17cfae447de812fb5f137530bcb91763af2ff509c872a407aec0cbca480e90 = $this->env->getExtension("native_profiler");
        $__internal_ad17cfae447de812fb5f137530bcb91763af2ff509c872a407aec0cbca480e90->enter($__internal_ad17cfae447de812fb5f137530bcb91763af2ff509c872a407aec0cbca480e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ad17cfae447de812fb5f137530bcb91763af2ff509c872a407aec0cbca480e90->leave($__internal_ad17cfae447de812fb5f137530bcb91763af2ff509c872a407aec0cbca480e90_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd6c8a9501a5f745c2e3260a873f48563e8b37cde4610d037eaa22cf3744e84 = $this->env->getExtension("native_profiler");
        $__internal_7dd6c8a9501a5f745c2e3260a873f48563e8b37cde4610d037eaa22cf3744e84->enter($__internal_7dd6c8a9501a5f745c2e3260a873f48563e8b37cde4610d037eaa22cf3744e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_edit", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Group:editactions.html.twig", "group/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        if ((((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) && $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array())) && ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array()) == "Superadmin"))) {
            // line 13
            echo "\t\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Group:editform1.html.twig", "group/edit.html.twig", 13)->display($context);
            // line 14
            echo "\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Group:editform.html.twig", "group/edit.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</div>
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_7dd6c8a9501a5f745c2e3260a873f48563e8b37cde4610d037eaa22cf3744e84->leave($__internal_7dd6c8a9501a5f745c2e3260a873f48563e8b37cde4610d037eaa22cf3744e84_prof);

    }

    public function getTemplateName()
    {
        return "group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 18,  129 => 17,  126 => 16,  123 => 15,  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('group_edit',{'id':group.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Group:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%if employee and employee.profil and employee.profil=="Superadmin"%}*/
/* 					{%include "BoAdminBundle:Group:editform1.html.twig"%}*/
/* 				{%else%}*/
/* 					{%include "BoAdminBundle:Group:editform.html.twig"%}*/
/* 				{%endif%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
