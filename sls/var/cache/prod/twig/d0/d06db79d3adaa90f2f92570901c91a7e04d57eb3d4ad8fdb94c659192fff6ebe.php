<?php

/* absences/new.html.twig */
class __TwigTemplate_fcf0a020f7318982bfca72f73165da98a8507c65cf785914abe2bbdd557b2247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absences/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_ce00a08f4f850f45eb6b4cacf9342c61445567f09e90c2f4089cfe3ff7fd7d50 = $this->env->getExtension("native_profiler");
        $__internal_ce00a08f4f850f45eb6b4cacf9342c61445567f09e90c2f4089cfe3ff7fd7d50->enter($__internal_ce00a08f4f850f45eb6b4cacf9342c61445567f09e90c2f4089cfe3ff7fd7d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absences/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce00a08f4f850f45eb6b4cacf9342c61445567f09e90c2f4089cfe3ff7fd7d50->leave($__internal_ce00a08f4f850f45eb6b4cacf9342c61445567f09e90c2f4089cfe3ff7fd7d50_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e2c2bd3c0f016cb6f918a0908d5364e4a55581d381d3d7038934538bdabfe7a = $this->env->getExtension("native_profiler");
        $__internal_6e2c2bd3c0f016cb6f918a0908d5364e4a55581d381d3d7038934538bdabfe7a->enter($__internal_6e2c2bd3c0f016cb6f918a0908d5364e4a55581d381d3d7038934538bdabfe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_6e2c2bd3c0f016cb6f918a0908d5364e4a55581d381d3d7038934538bdabfe7a->leave($__internal_6e2c2bd3c0f016cb6f918a0908d5364e4a55581d381d3d7038934538bdabfe7a_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9ff5dd7d74093ec71900371505f04384748f946984c3296c7e8a7ce0bea46024 = $this->env->getExtension("native_profiler");
        $__internal_9ff5dd7d74093ec71900371505f04384748f946984c3296c7e8a7ce0bea46024->enter($__internal_9ff5dd7d74093ec71900371505f04384748f946984c3296c7e8a7ce0bea46024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "absences/new.html.twig", 3)->display($context);
        
        $__internal_9ff5dd7d74093ec71900371505f04384748f946984c3296c7e8a7ce0bea46024->leave($__internal_9ff5dd7d74093ec71900371505f04384748f946984c3296c7e8a7ce0bea46024_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fbe86b755305780d168991cc9b807c625a8536666db0c52b53f686392473f124 = $this->env->getExtension("native_profiler");
        $__internal_fbe86b755305780d168991cc9b807c625a8536666db0c52b53f686392473f124->enter($__internal_fbe86b755305780d168991cc9b807c625a8536666db0c52b53f686392473f124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_fbe86b755305780d168991cc9b807c625a8536666db0c52b53f686392473f124->leave($__internal_fbe86b755305780d168991cc9b807c625a8536666db0c52b53f686392473f124_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_c16d07d05095429bb3923c0b3c3c78dc069e6893d75537c9c0fd85e6e137ae00 = $this->env->getExtension("native_profiler");
        $__internal_c16d07d05095429bb3923c0b3c3c78dc069e6893d75537c9c0fd85e6e137ae00->enter($__internal_c16d07d05095429bb3923c0b3c3c78dc069e6893d75537c9c0fd85e6e137ae00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rights", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c16d07d05095429bb3923c0b3c3c78dc069e6893d75537c9c0fd85e6e137ae00->leave($__internal_c16d07d05095429bb3923c0b3c3c78dc069e6893d75537c9c0fd85e6e137ae00_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b83e77ef751f9d3aa30420a24d36f1a5109cb785d4bad6587a344ab5e8dd3b9 = $this->env->getExtension("native_profiler");
        $__internal_2b83e77ef751f9d3aa30420a24d36f1a5109cb785d4bad6587a344ab5e8dd3b9->enter($__internal_2b83e77ef751f9d3aa30420a24d36f1a5109cb785d4bad6587a344ab5e8dd3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("absences_new_employee");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Absences:newactions.html.twig", "absences/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Absences:modalform.html.twig", "absences/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_2b83e77ef751f9d3aa30420a24d36f1a5109cb785d4bad6587a344ab5e8dd3b9->leave($__internal_2b83e77ef751f9d3aa30420a24d36f1a5109cb785d4bad6587a344ab5e8dd3b9_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d9aebaff578045f9e706ff37898d738f40b3c4bf63387a40819433953f2aa09 = $this->env->getExtension("native_profiler");
        $__internal_3d9aebaff578045f9e706ff37898d738f40b3c4bf63387a40819433953f2aa09->enter($__internal_3d9aebaff578045f9e706ff37898d738f40b3c4bf63387a40819433953f2aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>
\t\t\t\$(\"#btn_create_absence\").click(function(){
\t\t\t\tvar str=\$(\".employee option:selected\");
\t\t\t\temployee=str.text();
\t\t\t\tvar numberday= \$(\".numberday\").val();
\t\t\t\tif(employee==null || employee==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must select a employee\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(numberday==null || numberday==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must enter a number of day\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_3d9aebaff578045f9e706ff37898d738f40b3c4bf63387a40819433953f2aa09->leave($__internal_3d9aebaff578045f9e706ff37898d738f40b3c4bf63387a40819433953f2aa09_prof);

    }

    public function getTemplateName()
    {
        return "absences/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  157 => 34,  139 => 18,  127 => 17,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.rights'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('absences_new_employee') }}" method="post" class="style">*/
/* 			{{ form_errors(absence_form) }}*/
/* 			{%include "BoAdminBundle:Absences:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Absences:modalform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(absence_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_create_absence").click(function(){*/
/* 				var str=$(".employee option:selected");*/
/* 				employee=str.text();*/
/* 				var numberday= $(".numberday").val();*/
/* 				if(employee==null || employee==""){*/
/* 					$('#error-message').html("You must select a employee");*/
/* 					return false;*/
/* 				}*/
/* 				if(numberday==null || numberday==""){*/
/* 					$('#error-message').html("You must enter a number of day");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
