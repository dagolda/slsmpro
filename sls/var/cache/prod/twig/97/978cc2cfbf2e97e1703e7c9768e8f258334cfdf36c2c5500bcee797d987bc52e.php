<?php

/* BoAdvisorsBundle:Enquiry:new.html.twig */
class __TwigTemplate_eb58223916d6456802e46e7c57c0d6cce8bd16bfb416cbd2e635ee6c8c821ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Enquiry:new.html.twig", 1);
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
        $__internal_b608f5e51e7920241946ddb7e541f6cad42d4e967ce72beabc30e34c234a241f = $this->env->getExtension("native_profiler");
        $__internal_b608f5e51e7920241946ddb7e541f6cad42d4e967ce72beabc30e34c234a241f->enter($__internal_b608f5e51e7920241946ddb7e541f6cad42d4e967ce72beabc30e34c234a241f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b608f5e51e7920241946ddb7e541f6cad42d4e967ce72beabc30e34c234a241f->leave($__internal_b608f5e51e7920241946ddb7e541f6cad42d4e967ce72beabc30e34c234a241f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_472f941352b39227c19cd409313fb564dda92ad24bc89ebc17850e3a65442c27 = $this->env->getExtension("native_profiler");
        $__internal_472f941352b39227c19cd409313fb564dda92ad24bc89ebc17850e3a65442c27->enter($__internal_472f941352b39227c19cd409313fb564dda92ad24bc89ebc17850e3a65442c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_472f941352b39227c19cd409313fb564dda92ad24bc89ebc17850e3a65442c27->leave($__internal_472f941352b39227c19cd409313fb564dda92ad24bc89ebc17850e3a65442c27_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d4adfc812786bddd62a39843ed2c5733e6e6dea8b97ebd5992a00199dd2d4763 = $this->env->getExtension("native_profiler");
        $__internal_d4adfc812786bddd62a39843ed2c5733e6e6dea8b97ebd5992a00199dd2d4763->enter($__internal_d4adfc812786bddd62a39843ed2c5733e6e6dea8b97ebd5992a00199dd2d4763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Enquiry:new.html.twig", 3)->display($context);
        
        $__internal_d4adfc812786bddd62a39843ed2c5733e6e6dea8b97ebd5992a00199dd2d4763->leave($__internal_d4adfc812786bddd62a39843ed2c5733e6e6dea8b97ebd5992a00199dd2d4763_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c7b129d887cd4172727d600fd9e42bbf3548e08fa70bdaa197867ecce3040bcd = $this->env->getExtension("native_profiler");
        $__internal_c7b129d887cd4172727d600fd9e42bbf3548e08fa70bdaa197867ecce3040bcd->enter($__internal_c7b129d887cd4172727d600fd9e42bbf3548e08fa70bdaa197867ecce3040bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Enquiry:new.html.twig", 4)->display($context);
        }
        echo "\t";
        
        $__internal_c7b129d887cd4172727d600fd9e42bbf3548e08fa70bdaa197867ecce3040bcd->leave($__internal_c7b129d887cd4172727d600fd9e42bbf3548e08fa70bdaa197867ecce3040bcd_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_26d4e9b7eb58a52169cd8e1f6e25eafd8030fbcdeddb1e387de03c694547b1fe = $this->env->getExtension("native_profiler");
        $__internal_26d4e9b7eb58a52169cd8e1f6e25eafd8030fbcdeddb1e387de03c694547b1fe->enter($__internal_26d4e9b7eb58a52169cd8e1f6e25eafd8030fbcdeddb1e387de03c694547b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_26d4e9b7eb58a52169cd8e1f6e25eafd8030fbcdeddb1e387de03c694547b1fe->leave($__internal_26d4e9b7eb58a52169cd8e1f6e25eafd8030fbcdeddb1e387de03c694547b1fe_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e64b691f478fe9de9545ff382a928717184b71fd1f55216af9ae31d08802db81 = $this->env->getExtension("native_profiler");
        $__internal_e64b691f478fe9de9545ff382a928717184b71fd1f55216af9ae31d08802db81->enter($__internal_e64b691f478fe9de9545ff382a928717184b71fd1f55216af9ae31d08802db81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:newactions.html.twig", "BoAdvisorsBundle:Enquiry:new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:newform.html.twig", "BoAdvisorsBundle:Enquiry:new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>

\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e64b691f478fe9de9545ff382a928717184b71fd1f55216af9ae31d08802db81->leave($__internal_e64b691f478fe9de9545ff382a928717184b71fd1f55216af9ae31d08802db81_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a11ad68b80c2021a6b16f299938ebde12d5bfca0344b506b42ea24238433999 = $this->env->getExtension("native_profiler");
        $__internal_4a11ad68b80c2021a6b16f299938ebde12d5bfca0344b506b42ea24238433999->enter($__internal_4a11ad68b80c2021a6b16f299938ebde12d5bfca0344b506b42ea24238433999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t\t<script>\t
\t\t\t\$(\".field\").change(function(){
\t\t\t\tvar str=\$(\".field option:selected\");
\t\t\t\tfield=str.val();
\t\t\t\tif(field==1){
\t\t\t\t\t\$(\".language\").val(\"French\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".privateorgroup\").val(\"Group\");
\t\t\t\t\t\$(\".typecontract\").val(\"NMSO\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==2){
\t\t\t\t\t\$(\".language\").val(\"English\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".privateorgroup\").val(\"Group\");
\t\t\t\t\t\$(\".typecontract\").val(\"NMSO\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==3){
\t\t\t\t\t\$(\".language\").val(\"French\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".typecontract\").val(\"NMSO\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\t\$(\".privateorgroup\").val(\"Private\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==4){
\t\t\t\t\t\$(\".language\").val(\"English\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".privateorgroup\").val(\"Private\");
\t\t\t\t\t\$(\".typecontract\").val(\"NMSO\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}\t
\t\t\t\tif(field==6){
\t\t\t\t\t\$(\".typecontract\").val(\"NMSO\");
\t\t\t\t\t\$(\".language\").val(\"French\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Part Time\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t\t
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_4a11ad68b80c2021a6b16f299938ebde12d5bfca0344b506b42ea24238433999->leave($__internal_4a11ad68b80c2021a6b16f299938ebde12d5bfca0344b506b42ea24238433999_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 76,  203 => 75,  145 => 19,  133 => 18,  126 => 14,  123 => 13,  121 => 12,  118 => 11,  116 => 10,  112 => 9,  108 => 8,  105 => 7,  99 => 6,  83 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%if employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	{% endblock %}*/
/* {% block label %}<h1>{{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('dash_enquiry_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdvisorsBundle:Enquiry:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdvisorsBundle:Enquiry:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>	*/
/* 			$(".field").change(function(){*/
/* 				var str=$(".field option:selected");*/
/* 				field=str.val();*/
/* 				if(field==1){*/
/* 					$(".language").val("French");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".privateorgroup").val("Group");*/
/* 					$(".typecontract").val("NMSO");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}*/
/* 				if(field==2){*/
/* 					$(".language").val("English");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".privateorgroup").val("Group");*/
/* 					$(".typecontract").val("NMSO");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					$(".schedule").val("");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}*/
/* 				if(field==3){*/
/* 					$(".language").val("French");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".typecontract").val("NMSO");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					$(".privateorgroup").val("Private");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}*/
/* 				if(field==4){*/
/* 					$(".language").val("English");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".privateorgroup").val("Private");*/
/* 					$(".typecontract").val("NMSO");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					$(".schedule").val("");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}	*/
/* 				if(field==6){*/
/* 					$(".typecontract").val("NMSO");*/
/* 					$(".language").val("French");*/
/* 					$(".ftorpt").val("Part Time");*/
/* 					$(".schedule").val("");*/
/* 					return false;*/
/* 				}					*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
