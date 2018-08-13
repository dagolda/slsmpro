<?php

/* agenda/new.html.twig */
class __TwigTemplate_aa4f51c2472d8b29ea9840c3f93f3ac1f152217a588fe9b64d5f42ea44f3826f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agenda/new.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d8b427c792250de8f5bb2ccd5fff01c0e92cf647fb900081dad34b91a5b52945 = $this->env->getExtension("native_profiler");
        $__internal_d8b427c792250de8f5bb2ccd5fff01c0e92cf647fb900081dad34b91a5b52945->enter($__internal_d8b427c792250de8f5bb2ccd5fff01c0e92cf647fb900081dad34b91a5b52945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agenda/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8b427c792250de8f5bb2ccd5fff01c0e92cf647fb900081dad34b91a5b52945->leave($__internal_d8b427c792250de8f5bb2ccd5fff01c0e92cf647fb900081dad34b91a5b52945_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_1152f1a87663eeb3984be2ff55f9ad82ec888ae924178cb62353ea3509f0148d = $this->env->getExtension("native_profiler");
        $__internal_1152f1a87663eeb3984be2ff55f9ad82ec888ae924178cb62353ea3509f0148d->enter($__internal_1152f1a87663eeb3984be2ff55f9ad82ec888ae924178cb62353ea3509f0148d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "agenda/new.html.twig", 2)->display($context);
        
        $__internal_1152f1a87663eeb3984be2ff55f9ad82ec888ae924178cb62353ea3509f0148d->leave($__internal_1152f1a87663eeb3984be2ff55f9ad82ec888ae924178cb62353ea3509f0148d_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9af1addbc1332e647f908746c1df7c287081aeb8722ffaea74b13f12a3ce9c54 = $this->env->getExtension("native_profiler");
        $__internal_9af1addbc1332e647f908746c1df7c287081aeb8722ffaea74b13f12a3ce9c54->enter($__internal_9af1addbc1332e647f908746c1df7c287081aeb8722ffaea74b13f12a3ce9c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Contracts:rightshow.html.twig", "agenda/new.html.twig", 3)->display($context);
        
        $__internal_9af1addbc1332e647f908746c1df7c287081aeb8722ffaea74b13f12a3ce9c54->leave($__internal_9af1addbc1332e647f908746c1df7c287081aeb8722ffaea74b13f12a3ce9c54_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_02aefd1640659f59ba1c4216a10e65f33e2038e97e0edec1977fee7f2bacac45 = $this->env->getExtension("native_profiler");
        $__internal_02aefd1640659f59ba1c4216a10e65f33e2038e97e0edec1977fee7f2bacac45->enter($__internal_02aefd1640659f59ba1c4216a10e65f33e2038e97e0edec1977fee7f2bacac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_02aefd1640659f59ba1c4216a10e65f33e2038e97e0edec1977fee7f2bacac45->leave($__internal_02aefd1640659f59ba1c4216a10e65f33e2038e97e0edec1977fee7f2bacac45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b38674fcf38862372c2c1fe719c2c638cbb10ef9c804a8a339104a38f514b4c = $this->env->getExtension("native_profiler");
        $__internal_6b38674fcf38862372c2c1fe719c2c638cbb10ef9c804a8a339104a38f514b4c->enter($__internal_6b38674fcf38862372c2c1fe719c2c638cbb10ef9c804a8a339104a38f514b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_new", array("idcontract" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Agenda:newactions.html.twig", "agenda/new.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t";
        if (((isset($context["schedules"]) ? $context["schedules"] : $this->getContext($context, "schedules")) != null)) {
            // line 11
            echo "\t\t\t\t<div class=\"display_content\">
\t\t\t\t\t<legend>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Agenda:tbliste.html.twig", "agenda/new.html.twig", 13)->display($context);
            // line 14
            echo "\t\t\t\t</div>\t\t\t
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if (((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")) != null)) {
            // line 17
            echo "\t\t\t\t<div class=\"display_content\">
\t\t\t\t\t<legend>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.availability", array(), "BoAdminBundle"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.absence", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t\t";
            // line 19
            $this->loadTemplate("BoAdminBundle:Agenda:absence.html.twig", "agenda/new.html.twig", 19)->display($context);
            // line 20
            echo "\t\t\t\t</div>\t\t\t
\t\t\t";
        }
        // line 22
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 23
        $this->loadTemplate("BoAdminBundle:Agenda:newform.html.twig", "agenda/new.html.twig", 23)->display($context);
        // line 24
        echo "\t\t\t</div>
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_6b38674fcf38862372c2c1fe719c2c638cbb10ef9c804a8a339104a38f514b4c->leave($__internal_6b38674fcf38862372c2c1fe719c2c638cbb10ef9c804a8a339104a38f514b4c_prof);

    }

    public function getTemplateName()
    {
        return "agenda/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  137 => 24,  135 => 23,  132 => 22,  128 => 20,  126 => 19,  120 => 18,  117 => 17,  114 => 16,  110 => 14,  108 => 13,  102 => 12,  99 => 11,  96 => 10,  94 => 9,  90 => 8,  86 => 7,  83 => 6,  77 => 5,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{%include "BoAdminBundle:Contracts:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.teacherschedule'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('agenda_new',{'idcontract':idcontract}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Agenda:newactions.html.twig"%}*/
/* 			{%if schedules!=null%}*/
/* 				<div class="display_content">*/
/* 					<legend>{{'Teacher'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}}</legend>*/
/* 					{%include "BoAdminBundle:Agenda:tbliste.html.twig"%}*/
/* 				</div>			*/
/* 			{%endif%}*/
/* 			{%if absence!=null%}*/
/* 				<div class="display_content">*/
/* 					<legend>{{'label.availability'|trans([],'BoAdminBundle')}}/{{'label.absence'|trans([],'BoAdminBundle')}}</legend>*/
/* 					{%include "BoAdminBundle:Agenda:absence.html.twig"%}*/
/* 				</div>			*/
/* 			{%endif%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Agenda:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
