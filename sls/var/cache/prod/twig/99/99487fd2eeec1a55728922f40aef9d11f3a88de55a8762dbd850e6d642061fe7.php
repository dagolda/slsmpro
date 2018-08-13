<?php

/* BoAdvisorsBundle:Default:contract.html.twig */
class __TwigTemplate_37cb6cf991ba178d74683929903dbea3c4681fe17fc7a41de1bc88f97e93426c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 1);
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
        $__internal_1248e921c53d1dc998619f2bbd82feac2767be9eeddcaefa9737c69cb6b5313c = $this->env->getExtension("native_profiler");
        $__internal_1248e921c53d1dc998619f2bbd82feac2767be9eeddcaefa9737c69cb6b5313c->enter($__internal_1248e921c53d1dc998619f2bbd82feac2767be9eeddcaefa9737c69cb6b5313c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Default:contract.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1248e921c53d1dc998619f2bbd82feac2767be9eeddcaefa9737c69cb6b5313c->leave($__internal_1248e921c53d1dc998619f2bbd82feac2767be9eeddcaefa9737c69cb6b5313c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_372afb0cadf3b6cd61395383785425ddfa21479bc6ee976da050c319ba265f05 = $this->env->getExtension("native_profiler");
        $__internal_372afb0cadf3b6cd61395383785425ddfa21479bc6ee976da050c319ba265f05->enter($__internal_372afb0cadf3b6cd61395383785425ddfa21479bc6ee976da050c319ba265f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contrat", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_372afb0cadf3b6cd61395383785425ddfa21479bc6ee976da050c319ba265f05->leave($__internal_372afb0cadf3b6cd61395383785425ddfa21479bc6ee976da050c319ba265f05_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_60f5882e0f3328069855cda6825f1fc45ece7144334c1e929b58a5b0e1165f2c = $this->env->getExtension("native_profiler");
        $__internal_60f5882e0f3328069855cda6825f1fc45ece7144334c1e929b58a5b0e1165f2c->enter($__internal_60f5882e0f3328069855cda6825f1fc45ece7144334c1e929b58a5b0e1165f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 3)->display($context);
        
        $__internal_60f5882e0f3328069855cda6825f1fc45ece7144334c1e929b58a5b0e1165f2c->leave($__internal_60f5882e0f3328069855cda6825f1fc45ece7144334c1e929b58a5b0e1165f2c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_286796287bccd5f13d13012b179af7d5c4538db9de14e2e98df08cee24fda324 = $this->env->getExtension("native_profiler");
        $__internal_286796287bccd5f13d13012b179af7d5c4538db9de14e2e98df08cee24fda324->enter($__internal_286796287bccd5f13d13012b179af7d5c4538db9de14e2e98df08cee24fda324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_286796287bccd5f13d13012b179af7d5c4538db9de14e2e98df08cee24fda324->leave($__internal_286796287bccd5f13d13012b179af7d5c4538db9de14e2e98df08cee24fda324_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_c336ae97f4bd19b2e0b54ab6e3351826ab882107551c58d20a0b74b0b4e99134 = $this->env->getExtension("native_profiler");
        $__internal_c336ae97f4bd19b2e0b54ab6e3351826ab882107551c58d20a0b74b0b4e99134->enter($__internal_c336ae97f4bd19b2e0b54ab6e3351826ab882107551c58d20a0b74b0b4e99134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c336ae97f4bd19b2e0b54ab6e3351826ab882107551c58d20a0b74b0b4e99134->leave($__internal_c336ae97f4bd19b2e0b54ab6e3351826ab882107551c58d20a0b74b0b4e99134_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7a5d57ed58d4c1ff8aa7a0e98a71a64b239c1f2d13ebe40d9db7bcb37db8b28b = $this->env->getExtension("native_profiler");
        $__internal_7a5d57ed58d4c1ff8aa7a0e98a71a64b239c1f2d13ebe40d9db7bcb37db8b28b->enter($__internal_7a5d57ed58d4c1ff8aa7a0e98a71a64b239c1f2d13ebe40d9db7bcb37db8b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        echo "\t\t\t\t
";
        
        $__internal_7a5d57ed58d4c1ff8aa7a0e98a71a64b239c1f2d13ebe40d9db7bcb37db8b28b->leave($__internal_7a5d57ed58d4c1ff8aa7a0e98a71a64b239c1f2d13ebe40d9db7bcb37db8b28b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5ff8a585c4c1375c9abb271d757d6a34db8dcca42a5bb2d051b3b2e6f8c7975 = $this->env->getExtension("native_profiler");
        $__internal_f5ff8a585c4c1375c9abb271d757d6a34db8dcca42a5bb2d051b3b2e6f8c7975->enter($__internal_f5ff8a585c4c1375c9abb271d757d6a34db8dcca42a5bb2d051b3b2e6f8c7975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"home-content\">\t
\t\t<div class=\"display_content\">
\t\t\t";
        // line 13
        if (((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) && $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), 0, array(), "array", true, true))) {
            // line 14
            echo "\t\t\t\t<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 15
            $this->loadTemplate("BoAdvisorsBundle:Default:group.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t";
        }
        // line 17
        echo "\t\t\t<legend>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 18
        $this->loadTemplate("BoAdvisorsBundle:Default:contractlist.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 18)->display($context);
        // line 19
        echo "\t\t</div>
\t\t<!--div class=\"display_content\">
\t\t\t<legend>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 22
        $this->loadTemplate("BoAdminBundle:Group:students.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 22)->display($context);
        // line 23
        echo "\t\t</div--!>
\t\t";
        // line 24
        if (((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) && $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), 0, array(), "array", true, true))) {
            // line 25
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 27
            $this->loadTemplate("BoAdvisorsBundle:Default:schedulegroup.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 27)->display($context);
            // line 28
            echo "\t\t</div>
\t\t";
        }
        // line 30
        echo "\t\t";
        if (((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) && $this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : null), 0, array(), "array", true, true))) {
            // line 31
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 33
            $this->loadTemplate("BoAdvisorsBundle:Default:schedule.html.twig", "BoAdvisorsBundle:Default:contract.html.twig", 33)->display($context);
            // line 34
            echo "\t\t</div>
\t\t";
        }
        // line 36
        echo "\t</div>
";
        
        $__internal_f5ff8a585c4c1375c9abb271d757d6a34db8dcca42a5bb2d051b3b2e6f8c7975->leave($__internal_f5ff8a585c4c1375c9abb271d757d6a34db8dcca42a5bb2d051b3b2e6f8c7975_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Default:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 36,  186 => 34,  184 => 33,  180 => 32,  177 => 31,  174 => 30,  170 => 28,  168 => 27,  162 => 26,  159 => 25,  157 => 24,  154 => 23,  152 => 22,  148 => 21,  144 => 19,  142 => 18,  137 => 17,  134 => 16,  132 => 15,  127 => 14,  125 => 13,  121 => 11,  115 => 10,  102 => 8,  86 => 7,  75 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.contrat'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.contract'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}				*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="home-content">	*/
/* 		<div class="display_content">*/
/* 			{%if groups and groups[0] is defined%}*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdvisorsBundle:Default:group.html.twig"%}*/
/* 			{%endif%}*/
/* 			<legend>{{'label.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdvisorsBundle:Default:contractlist.html.twig"%}*/
/* 		</div>*/
/* 		<!--div class="display_content">*/
/* 			<legend>{{'entity.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Group:students.html.twig"%}*/
/* 		</div--!>*/
/* 		{%if groups and groups[0] is defined%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.schedule'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdvisorsBundle:Default:schedulegroup.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if contracts and contracts[0] is defined%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.schedule'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdvisorsBundle:Default:schedule.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
