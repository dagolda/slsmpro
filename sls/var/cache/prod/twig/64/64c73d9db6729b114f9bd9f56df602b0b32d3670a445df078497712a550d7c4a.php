<?php

/* evaluation/confirmation.html.twig */
class __TwigTemplate_8d5745b471829cb00b6fd86c0d543282145bb038df80b03678b531a0eeec8237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/confirmation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_68d42ff3b58ba9352dfbc84784246bbbfbef34b4e66284d7d71de21a62a46164 = $this->env->getExtension("native_profiler");
        $__internal_68d42ff3b58ba9352dfbc84784246bbbfbef34b4e66284d7d71de21a62a46164->enter($__internal_68d42ff3b58ba9352dfbc84784246bbbfbef34b4e66284d7d71de21a62a46164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d42ff3b58ba9352dfbc84784246bbbfbef34b4e66284d7d71de21a62a46164->leave($__internal_68d42ff3b58ba9352dfbc84784246bbbfbef34b4e66284d7d71de21a62a46164_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3501427dadc51ad63d73beff5e48ae829dba033eb8d6c83b6da45676ef6ba107 = $this->env->getExtension("native_profiler");
        $__internal_3501427dadc51ad63d73beff5e48ae829dba033eb8d6c83b6da45676ef6ba107->enter($__internal_3501427dadc51ad63d73beff5e48ae829dba033eb8d6c83b6da45676ef6ba107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.confirmation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3501427dadc51ad63d73beff5e48ae829dba033eb8d6c83b6da45676ef6ba107->leave($__internal_3501427dadc51ad63d73beff5e48ae829dba033eb8d6c83b6da45676ef6ba107_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75555347588b7553c71dfc950f9fa5e761ea9aad703bf842a3ef78d702363465 = $this->env->getExtension("native_profiler");
        $__internal_75555347588b7553c71dfc950f9fa5e761ea9aad703bf842a3ef78d702363465->enter($__internal_75555347588b7553c71dfc950f9fa5e761ea9aad703bf842a3ef78d702363465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_75555347588b7553c71dfc950f9fa5e761ea9aad703bf842a3ef78d702363465->leave($__internal_75555347588b7553c71dfc950f9fa5e761ea9aad703bf842a3ef78d702363465_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_fd5295df607bca689435ba0064762f94b2ce57ab71eee08fcdddb20f2909db9a = $this->env->getExtension("native_profiler");
        $__internal_fd5295df607bca689435ba0064762f94b2ce57ab71eee08fcdddb20f2909db9a->enter($__internal_fd5295df607bca689435ba0064762f94b2ce57ab71eee08fcdddb20f2909db9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "evaluation/confirmation.html.twig", 4)->display($context);
        
        $__internal_fd5295df607bca689435ba0064762f94b2ce57ab71eee08fcdddb20f2909db9a->leave($__internal_fd5295df607bca689435ba0064762f94b2ce57ab71eee08fcdddb20f2909db9a_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_44cf12da77153f2b6e0f93339de7d3ad674ccc52688f48430f8faac777c1b54c = $this->env->getExtension("native_profiler");
        $__internal_44cf12da77153f2b6e0f93339de7d3ad674ccc52688f48430f8faac777c1b54c->enter($__internal_44cf12da77153f2b6e0f93339de7d3ad674ccc52688f48430f8faac777c1b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Evaluation:rightshow.html.twig", "evaluation/confirmation.html.twig", 5)->display($context);
        
        $__internal_44cf12da77153f2b6e0f93339de7d3ad674ccc52688f48430f8faac777c1b54c->leave($__internal_44cf12da77153f2b6e0f93339de7d3ad674ccc52688f48430f8faac777c1b54c_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_cccf1e3f21cf3d603b33bebef9e6dc3a4a77c0fae9031d8ddd2cf55f5e76c13a = $this->env->getExtension("native_profiler");
        $__internal_cccf1e3f21cf3d603b33bebef9e6dc3a4a77c0fae9031d8ddd2cf55f5e76c13a->enter($__internal_cccf1e3f21cf3d603b33bebef9e6dc3a4a77c0fae9031d8ddd2cf55f5e76c13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.confirmation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_cccf1e3f21cf3d603b33bebef9e6dc3a4a77c0fae9031d8ddd2cf55f5e76c13a->leave($__internal_cccf1e3f21cf3d603b33bebef9e6dc3a4a77c0fae9031d8ddd2cf55f5e76c13a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a862a59ff38228d08c6dfd2b3bbe8ee3ce4530e160319025a260cccb4a2efb7 = $this->env->getExtension("native_profiler");
        $__internal_3a862a59ff38228d08c6dfd2b3bbe8ee3ce4530e160319025a260cccb4a2efb7->enter($__internal_3a862a59ff38228d08c6dfd2b3bbe8ee3ce4530e160319025a260cccb4a2efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_confirmation", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">\t
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Evaluation:confirmactions.html.twig", "evaluation/confirmation.html.twig", 10)->display($context);
        echo "\t\t\t\t
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t<div class=\"title2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.send.confirmation", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 14
        if ((isset($context["emailstudents"]) ? $context["emailstudents"] : $this->getContext($context, "emailstudents"))) {
            // line 15
            echo "\t\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"student\" value=\"1\" checked> ";
            echo twig_escape_filter($this->env, (isset($context["emailstudents"]) ? $context["emailstudents"] : $this->getContext($context, "emailstudents")), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t";
        if (($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "emailcontact", array()) && ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "emailcontact", array()) != null))) {
            // line 18
            echo "\t\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"contact\" value=\"1\" checked> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "emailcontact", array()), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array())) {
            // line 21
            echo "\t\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"evaluator\" value=\"1\" checked> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array()), "email", array()), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"clientservice\" value=\"1\" checked> ";
        echo twig_escape_filter($this->env, (isset($context["clientservice"]) ? $context["clientservice"] : $this->getContext($context, "clientservice")), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"aeration\">
\t\t\t\t\t<b>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.other", array(), "BoAdminBundle"), "html", null, true);
        echo "</b>: <input type=\"text\" name=\"other\" size=\"60\" value=\"\" />
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t</div>
\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>
\t</div>
";
        
        $__internal_3a862a59ff38228d08c6dfd2b3bbe8ee3ce4530e160319025a260cccb4a2efb7->leave($__internal_3a862a59ff38228d08c6dfd2b3bbe8ee3ce4530e160319025a260cccb4a2efb7_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 29,  166 => 25,  160 => 23,  154 => 21,  151 => 20,  145 => 18,  142 => 17,  136 => 15,  134 => 14,  130 => 13,  126 => 12,  121 => 10,  117 => 9,  114 => 8,  108 => 7,  92 => 6,  80 => 5,  68 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.confirmation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}	*/
/* {% block nav %}{%include "BoAdminBundle:Evaluation:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.confirmation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('evaluation_confirmation',{'id':evaluation.id}) }}" method="post" class="style">	*/
/* 			{%include "BoAdminBundle:Evaluation:confirmactions.html.twig"%}				*/
/* 			<div class="show_content">*/
/* 				{{ form_errors(form) }}*/
/* 				<div class="title2">{{'message.send.confirmation'|trans([],'BoAdminBundle')}}</div>*/
/* 				{%if emailstudents %}*/
/* 					<div class="aeration"><input type="checkbox" name="student" value="1" checked> {{ emailstudents }}</div>*/
/* 				{%endif%}*/
/* 				{%if evaluation.emailcontact and evaluation.emailcontact!=null%}*/
/* 					<div class="aeration"><input type="checkbox" name="contact" value="1" checked> {{evaluation.emailcontact}}</div>*/
/* 				{%endif%}*/
/* 				{%if evaluation.evaluator%}*/
/* 					<div class="aeration"><input type="checkbox" name="evaluator" value="1" checked> {{evaluation.evaluator.email}}</div>*/
/* 				{%endif%}*/
/* 				<div class="aeration"><input type="checkbox" name="clientservice" value="1" checked> {{clientservice}}</div>*/
/* 				<div class="aeration">*/
/* 					<b>{{'label.other'|trans([],'BoAdminBundle')}}</b>: <input type="text" name="other" size="60" value="" />*/
/* 				</div>*/
/* 				<br/>*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
