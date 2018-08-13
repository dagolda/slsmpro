<?php

/* employee/newschedule.html.twig */
class __TwigTemplate_84706d7b33811c196aa32f703eda677174216fb7f99ce3b0fae75b1818c1e5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/newschedule.html.twig", 1);
        $this->blocks = array(
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_405023b48bdee3c834f56bfca3491960adcb7a58932ee7550383a61bbbcf5b51 = $this->env->getExtension("native_profiler");
        $__internal_405023b48bdee3c834f56bfca3491960adcb7a58932ee7550383a61bbbcf5b51->enter($__internal_405023b48bdee3c834f56bfca3491960adcb7a58932ee7550383a61bbbcf5b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/newschedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_405023b48bdee3c834f56bfca3491960adcb7a58932ee7550383a61bbbcf5b51->leave($__internal_405023b48bdee3c834f56bfca3491960adcb7a58932ee7550383a61bbbcf5b51_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_313355b4947a8ce0bc8eab1ceb813619320eff16813009d85e7cd73b91810f4d = $this->env->getExtension("native_profiler");
        $__internal_313355b4947a8ce0bc8eab1ceb813619320eff16813009d85e7cd73b91810f4d->enter($__internal_313355b4947a8ce0bc8eab1ceb813619320eff16813009d85e7cd73b91810f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "employee/newschedule.html.twig", 2)->display($context);
        
        $__internal_313355b4947a8ce0bc8eab1ceb813619320eff16813009d85e7cd73b91810f4d->leave($__internal_313355b4947a8ce0bc8eab1ceb813619320eff16813009d85e7cd73b91810f4d_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c8ac6049917b647a5f7cf9e84afb3d021305151c9287f4f329c6aa34f684619c = $this->env->getExtension("native_profiler");
        $__internal_c8ac6049917b647a5f7cf9e84afb3d021305151c9287f4f329c6aa34f684619c->enter($__internal_c8ac6049917b647a5f7cf9e84afb3d021305151c9287f4f329c6aa34f684619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "employee/newschedule.html.twig", 3)->display($context);
        
        $__internal_c8ac6049917b647a5f7cf9e84afb3d021305151c9287f4f329c6aa34f684619c->leave($__internal_c8ac6049917b647a5f7cf9e84afb3d021305151c9287f4f329c6aa34f684619c_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_175630f50afb64236a1bd625a66322d807460aa1bca75710def1e80af8582b39 = $this->env->getExtension("native_profiler");
        $__internal_175630f50afb64236a1bd625a66322d807460aa1bca75710def1e80af8582b39->enter($__internal_175630f50afb64236a1bd625a66322d807460aa1bca75710def1e80af8582b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_175630f50afb64236a1bd625a66322d807460aa1bca75710def1e80af8582b39->leave($__internal_175630f50afb64236a1bd625a66322d807460aa1bca75710def1e80af8582b39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e44a7afce572f985f455f6ffbd2de3f5ea25009b84df3140abe4ff01634bb700 = $this->env->getExtension("native_profiler");
        $__internal_e44a7afce572f985f455f6ffbd2de3f5ea25009b84df3140abe4ff01634bb700->enter($__internal_e44a7afce572f985f455f6ffbd2de3f5ea25009b84df3140abe4ff01634bb700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_add_schedule", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Employee:newschactions.html.twig", "employee/newschedule.html.twig", 9)->display($context);
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
            $this->loadTemplate("BoAdminBundle:Agenda:tbliste.html.twig", "employee/newschedule.html.twig", 13)->display($context);
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
            $this->loadTemplate("BoAdminBundle:Agenda:absence.html.twig", "employee/newschedule.html.twig", 19)->display($context);
            // line 20
            echo "\t\t\t\t</div>\t\t\t
\t\t\t";
        }
        // line 22
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 23
        $this->loadTemplate("BoAdminBundle:Agenda:adchform.html.twig", "employee/newschedule.html.twig", 23)->display($context);
        // line 24
        echo "\t\t\t</div>
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t
\t";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e44a7afce572f985f455f6ffbd2de3f5ea25009b84df3140abe4ff01634bb700->leave($__internal_e44a7afce572f985f455f6ffbd2de3f5ea25009b84df3140abe4ff01634bb700_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31699d6e7fc0f4352d952e1227b414f512b039edad765b1e98b8fd23a6f86903 = $this->env->getExtension("native_profiler");
        $__internal_31699d6e7fc0f4352d952e1227b414f512b039edad765b1e98b8fd23a6f86903->enter($__internal_31699d6e7fc0f4352d952e1227b414f512b039edad765b1e98b8fd23a6f86903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "\t\t<script></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_31699d6e7fc0f4352d952e1227b414f512b039edad765b1e98b8fd23a6f86903->leave($__internal_31699d6e7fc0f4352d952e1227b414f512b039edad765b1e98b8fd23a6f86903_prof);

    }

    public function getTemplateName()
    {
        return "employee/newschedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 33,  167 => 32,  163 => 31,  160 => 30,  148 => 29,  141 => 25,  138 => 24,  136 => 23,  133 => 22,  129 => 20,  127 => 19,  121 => 18,  118 => 17,  115 => 16,  111 => 14,  109 => 13,  103 => 12,  100 => 11,  97 => 10,  95 => 9,  91 => 8,  87 => 7,  84 => 6,  78 => 5,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.teacherschedule'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('employee_add_schedule',{'id':employee.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(asc_form) }}*/
/* 			{%include "BoAdminBundle:Employee:newschactions.html.twig"%}*/
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
/* 				{%include "BoAdminBundle:Agenda:adchform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(asc_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
