<?php

/* BoHomeBundle:Contracts:contract.html.twig */
class __TwigTemplate_5447f00c33f0adac24b6538ecf541f2d50f681c3586e1dabad5b69c3a2841e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 1);
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
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_969b0a88eab3208f4352791e8f004bac3ea25d1e828d5495a2a1a88b5f9f702b = $this->env->getExtension("native_profiler");
        $__internal_969b0a88eab3208f4352791e8f004bac3ea25d1e828d5495a2a1a88b5f9f702b->enter($__internal_969b0a88eab3208f4352791e8f004bac3ea25d1e828d5495a2a1a88b5f9f702b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Contracts:contract.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969b0a88eab3208f4352791e8f004bac3ea25d1e828d5495a2a1a88b5f9f702b->leave($__internal_969b0a88eab3208f4352791e8f004bac3ea25d1e828d5495a2a1a88b5f9f702b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a1ba985f319fdcf40c9163fbc1d96aafe7ebe1eeb797a7eac380bc94153159a = $this->env->getExtension("native_profiler");
        $__internal_0a1ba985f319fdcf40c9163fbc1d96aafe7ebe1eeb797a7eac380bc94153159a->enter($__internal_0a1ba985f319fdcf40c9163fbc1d96aafe7ebe1eeb797a7eac380bc94153159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_0a1ba985f319fdcf40c9163fbc1d96aafe7ebe1eeb797a7eac380bc94153159a->leave($__internal_0a1ba985f319fdcf40c9163fbc1d96aafe7ebe1eeb797a7eac380bc94153159a_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b9795cdbad7cb15dffd9b7541a34410dd1dd3c507c30618fcdbcd6cb6bacf328 = $this->env->getExtension("native_profiler");
        $__internal_b9795cdbad7cb15dffd9b7541a34410dd1dd3c507c30618fcdbcd6cb6bacf328->enter($__internal_b9795cdbad7cb15dffd9b7541a34410dd1dd3c507c30618fcdbcd6cb6bacf328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:contract.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 3)->display($context);
        
        $__internal_b9795cdbad7cb15dffd9b7541a34410dd1dd3c507c30618fcdbcd6cb6bacf328->leave($__internal_b9795cdbad7cb15dffd9b7541a34410dd1dd3c507c30618fcdbcd6cb6bacf328_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9a0f818f46000ff2a05ef4b3b5541eaa1f1ca2e637d9dcd9cbdf8af03ef4f377 = $this->env->getExtension("native_profiler");
        $__internal_9a0f818f46000ff2a05ef4b3b5541eaa1f1ca2e637d9dcd9cbdf8af03ef4f377->enter($__internal_9a0f818f46000ff2a05ef4b3b5541eaa1f1ca2e637d9dcd9cbdf8af03ef4f377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            // line 6
            echo "\t\t";
            $this->loadTemplate("BoHomeBundle:Contracts:rightshow.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 6)->display($context);
            // line 7
            echo "\t";
        }
        echo "\t
";
        
        $__internal_9a0f818f46000ff2a05ef4b3b5541eaa1f1ca2e637d9dcd9cbdf8af03ef4f377->leave($__internal_9a0f818f46000ff2a05ef4b3b5541eaa1f1ca2e637d9dcd9cbdf8af03ef4f377_prof);

    }

    // line 9
    public function block_label($context, array $blocks = array())
    {
        $__internal_23b74e9111af03db39bd4044a9b326760c7e1be7cfad017ff7f579146c9df073 = $this->env->getExtension("native_profiler");
        $__internal_23b74e9111af03db39bd4044a9b326760c7e1be7cfad017ff7f579146c9df073->enter($__internal_23b74e9111af03db39bd4044a9b326760c7e1be7cfad017ff7f579146c9df073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 10
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>
";
        
        $__internal_23b74e9111af03db39bd4044a9b326760c7e1be7cfad017ff7f579146c9df073->leave($__internal_23b74e9111af03db39bd4044a9b326760c7e1be7cfad017ff7f579146c9df073_prof);

    }

    // line 12
    public function block_actions($context, array $blocks = array())
    {
        $__internal_210dad6beb961a307d8bd8a5c2466b8aa3ff37a40963c85a64e5f5d0b75a7c3c = $this->env->getExtension("native_profiler");
        $__internal_210dad6beb961a307d8bd8a5c2466b8aa3ff37a40963c85a64e5f5d0b75a7c3c->enter($__internal_210dad6beb961a307d8bd8a5c2466b8aa3ff37a40963c85a64e5f5d0b75a7c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        echo "\t\t\t\t
";
        
        $__internal_210dad6beb961a307d8bd8a5c2466b8aa3ff37a40963c85a64e5f5d0b75a7c3c->leave($__internal_210dad6beb961a307d8bd8a5c2466b8aa3ff37a40963c85a64e5f5d0b75a7c3c_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f279c7b3ed3bb02ab622eebb07ae8adb3c0dc0501ef4d4af93b004b4c48ccc2 = $this->env->getExtension("native_profiler");
        $__internal_0f279c7b3ed3bb02ab622eebb07ae8adb3c0dc0501ef4d4af93b004b4c48ccc2->enter($__internal_0f279c7b3ed3bb02ab622eebb07ae8adb3c0dc0501ef4d4af93b004b4c48ccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t<div class=\"home-content\">
\t\t<div class=\"display_content\">
\t\t\t";
        // line 17
        if (((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) && $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), 0, array(), "array", true, true))) {
            // line 18
            echo "\t\t\t\t<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 19
            $this->loadTemplate("BoHomeBundle:Contracts:group.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 19)->display($context);
            // line 20
            echo "\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 22
            $this->loadTemplate("BoHomeBundle:Contracts:nogroup.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 22)->display($context);
            // line 23
            echo "\t\t\t";
        }
        // line 24
        echo "\t\t\t";
        if (((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) && $this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : null), 0, array(), "array", true, true))) {
            // line 25
            echo "\t\t\t\t<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 26
            $this->loadTemplate("BoHomeBundle:Contracts:contractlist.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 26)->display($context);
            // line 27
            echo "\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 29
            $this->loadTemplate("BoHomeBundle:Contracts:nocontract.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 29)->display($context);
            // line 30
            echo "\t\t\t";
        }
        // line 31
        echo "\t\t</div>
\t\t";
        // line 32
        if (((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) && $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), 0, array(), "array", true, true))) {
            // line 33
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 35
            $this->loadTemplate("BoHomeBundle:Contracts:schedulegroup.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 35)->display($context);
            // line 36
            echo "\t\t\t</div>
\t\t";
        }
        // line 38
        echo "\t\t";
        if (((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) && $this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : null), 0, array(), "array", true, true))) {
            // line 39
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 41
            $this->loadTemplate("BoHomeBundle:Contracts:schedule.html.twig", "BoHomeBundle:Contracts:contract.html.twig", 41)->display($context);
            // line 42
            echo "\t\t\t</div>
\t\t";
        }
        // line 44
        echo "\t</div>
";
        
        $__internal_0f279c7b3ed3bb02ab622eebb07ae8adb3c0dc0501ef4d4af93b004b4c48ccc2->leave($__internal_0f279c7b3ed3bb02ab622eebb07ae8adb3c0dc0501ef4d4af93b004b4c48ccc2_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Contracts:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 44,  208 => 42,  206 => 41,  202 => 40,  199 => 39,  196 => 38,  192 => 36,  190 => 35,  184 => 34,  181 => 33,  179 => 32,  176 => 31,  173 => 30,  171 => 29,  166 => 28,  163 => 27,  161 => 26,  156 => 25,  153 => 24,  150 => 23,  148 => 22,  143 => 21,  140 => 20,  138 => 19,  133 => 18,  131 => 17,  127 => 15,  121 => 14,  108 => 12,  96 => 10,  90 => 9,  80 => 7,  77 => 6,  75 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.contracts'|trans([],'BoAdminBundle')}} >> {{'action.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:contract.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}*/
/* 		{%include "BoHomeBundle:Contracts:rightshow.html.twig"%}*/
/* 	{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}*/
/* 	<h1>{{'layout.menu.contracts'|trans([],'BoAdminBundle')}} >> {{'action.show'|trans([],'BoAdminBundle')}}</h1>*/
/* {% endblock %}	*/
/* {% block actions %}				*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="home-content">*/
/* 		<div class="display_content">*/
/* 			{%if groups and groups[0] is defined%}*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoHomeBundle:Contracts:group.html.twig"%}*/
/* 			{%else%}*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoHomeBundle:Contracts:nogroup.html.twig"%}*/
/* 			{%endif%}*/
/* 			{%if contracts and contracts[0] is defined%}*/
/* 				<legend>{{'label.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoHomeBundle:Contracts:contractlist.html.twig"%}*/
/* 			{%else%}*/
/* 				<legend>{{'label.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoHomeBundle:Contracts:nocontract.html.twig"%}*/
/* 			{%endif%}*/
/* 		</div>*/
/* 		{%if groups and groups[0] is defined%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'title.schedule'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoHomeBundle:Contracts:schedulegroup.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if contracts and contracts[0] is defined%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'title.schedule'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoHomeBundle:Contracts:schedule.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
