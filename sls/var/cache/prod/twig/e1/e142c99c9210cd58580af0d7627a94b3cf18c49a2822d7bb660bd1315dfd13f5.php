<?php

/* BoAdvisorsBundle:Orderform:error.html.twig */
class __TwigTemplate_fb5db2fdbed6b5c9ff290b939e12f170ad91ae9196c5142102facfb1f1af575e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Orderform:error.html.twig", 1);
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
        $__internal_55ea272858f7bc037a897e2d0960c62d5cb19aa815fb6f2fa18956547c50f398 = $this->env->getExtension("native_profiler");
        $__internal_55ea272858f7bc037a897e2d0960c62d5cb19aa815fb6f2fa18956547c50f398->enter($__internal_55ea272858f7bc037a897e2d0960c62d5cb19aa815fb6f2fa18956547c50f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ea272858f7bc037a897e2d0960c62d5cb19aa815fb6f2fa18956547c50f398->leave($__internal_55ea272858f7bc037a897e2d0960c62d5cb19aa815fb6f2fa18956547c50f398_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea6c373efc862fcd650c75e70a27586ad40a2e6dd70c1f564bbecc7adf4321c3 = $this->env->getExtension("native_profiler");
        $__internal_ea6c373efc862fcd650c75e70a27586ad40a2e6dd70c1f564bbecc7adf4321c3->enter($__internal_ea6c373efc862fcd650c75e70a27586ad40a2e6dd70c1f564bbecc7adf4321c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_ea6c373efc862fcd650c75e70a27586ad40a2e6dd70c1f564bbecc7adf4321c3->leave($__internal_ea6c373efc862fcd650c75e70a27586ad40a2e6dd70c1f564bbecc7adf4321c3_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_2ef0057c0e6bbb60338a50a51ff74b80ae3dda1b72b72a8f242dd3cb594d6806 = $this->env->getExtension("native_profiler");
        $__internal_2ef0057c0e6bbb60338a50a51ff74b80ae3dda1b72b72a8f242dd3cb594d6806->enter($__internal_2ef0057c0e6bbb60338a50a51ff74b80ae3dda1b72b72a8f242dd3cb594d6806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Orderform:error.html.twig", 3)->display($context);
        
        $__internal_2ef0057c0e6bbb60338a50a51ff74b80ae3dda1b72b72a8f242dd3cb594d6806->leave($__internal_2ef0057c0e6bbb60338a50a51ff74b80ae3dda1b72b72a8f242dd3cb594d6806_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_843ead0ed30f97e7a40940e475a525c3b12dafa0b64f62340ebede4690c698e5 = $this->env->getExtension("native_profiler");
        $__internal_843ead0ed30f97e7a40940e475a525c3b12dafa0b64f62340ebede4690c698e5->enter($__internal_843ead0ed30f97e7a40940e475a525c3b12dafa0b64f62340ebede4690c698e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        if (((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")) != null)) {
            $this->loadTemplate("BoAdvisorsBundle:Orderform:rightshow.html.twig", "BoAdvisorsBundle:Orderform:error.html.twig", 4)->display($context);
        }
        
        $__internal_843ead0ed30f97e7a40940e475a525c3b12dafa0b64f62340ebede4690c698e5->leave($__internal_843ead0ed30f97e7a40940e475a525c3b12dafa0b64f62340ebede4690c698e5_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_b47ba13c0419a4d2a4a00fb779015347afbae1e0efce527bbbb2960fb67513f2 = $this->env->getExtension("native_profiler");
        $__internal_b47ba13c0419a4d2a4a00fb779015347afbae1e0efce527bbbb2960fb67513f2->enter($__internal_b47ba13c0419a4d2a4a00fb779015347afbae1e0efce527bbbb2960fb67513f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b47ba13c0419a4d2a4a00fb779015347afbae1e0efce527bbbb2960fb67513f2->leave($__internal_b47ba13c0419a4d2a4a00fb779015347afbae1e0efce527bbbb2960fb67513f2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d301efb479c9ec836e79d07afc0fb2e83f274c4665ee9922b5736e37b4360d5e = $this->env->getExtension("native_profiler");
        $__internal_d301efb479c9ec836e79d07afc0fb2e83f274c4665ee9922b5736e37b4360d5e->enter($__internal_d301efb479c9ec836e79d07afc0fb2e83f274c4665ee9922b5736e37b4360d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_orderform_error", array("id" => $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()), "opt" => (isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t";
        // line 10
        $this->loadTemplate("BoAdvisorsBundle:Orderform:erroractions.html.twig", "BoAdvisorsBundle:Orderform:error.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t\t<div class=\"show_content\">
\t\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:editform.html.twig", "BoAdvisorsBundle:Orderform:error.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_d301efb479c9ec836e79d07afc0fb2e83f274c4665ee9922b5736e37b4360d5e->leave($__internal_d301efb479c9ec836e79d07afc0fb2e83f274c4665ee9922b5736e37b4360d5e_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fac44204223445528bc3e766fe68664ed6f00b6359cbfc075d41fb81c12a4732 = $this->env->getExtension("native_profiler");
        $__internal_fac44204223445528bc3e766fe68664ed6f00b6359cbfc075d41fb81c12a4732->enter($__internal_fac44204223445528bc3e766fe68664ed6f00b6359cbfc075d41fb81c12a4732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>\t
\t\t\t\$(\".field\").change(function(){
\t\t\t\tvar str=\$(\".field option:selected\");
\t\t\t\tfield=str.val();
\t\t\t\tif(field==1){
\t\t\t\t\t\$(\".typetraining\").val(\"GR\");
\t\t\t\t\t\$(\".language\").val(\"French\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==2){
\t\t\t\t\t\$(\".typetraining\").val(\"GR\");
\t\t\t\t\t\$(\".language\").val(\"English\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==3){
\t\t\t\t\t\$(\".typetraining\").val(\"\");
\t\t\t\t\t\$(\".language\").val(\"French\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==4){
\t\t\t\t\t\$(\".typetraining\").val(\"\");
\t\t\t\t\t\$(\".language\").val(\"English\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Full Time\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\t\$(\".hourperday\").val(7);
\t\t\t\t\t\$(\".hourperweek\").val(35);
\t\t\t\t\treturn false;
\t\t\t\t}\t
\t\t\t\tif(field==6){
\t\t\t\t\t\$(\".typetraining\").val(\"PR\");
\t\t\t\t\t\$(\".language\").val(\"French\");
\t\t\t\t\t\$(\".ftorpt\").val(\"Part Time\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t\t
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_fac44204223445528bc3e766fe68664ed6f00b6359cbfc075d41fb81c12a4732->leave($__internal_fac44204223445528bc3e766fe68664ed6f00b6359cbfc075d41fb81c12a4732_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 69,  198 => 68,  146 => 18,  134 => 17,  128 => 14,  125 => 13,  123 => 12,  120 => 11,  118 => 10,  114 => 9,  110 => 8,  107 => 7,  101 => 6,  84 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.orderform'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}} >> {{'entity.enquiry'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%if enquiry!=null%}{%include "BoAdvisorsBundle:Orderform:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.orderform'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{{'entity.enquiry'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('dash_orderform_error',{'id':enquiry.id,'opt':opt}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 				{%include "BoAdvisorsBundle:Orderform:erroractions.html.twig"%}*/
/* 				<div class="show_content">*/
/* 					{%include "BoAdvisorsBundle:Enquiry:editform.html.twig"%}*/
/* 				</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>	*/
/* 			$(".field").change(function(){*/
/* 				var str=$(".field option:selected");*/
/* 				field=str.val();*/
/* 				if(field==1){*/
/* 					$(".typetraining").val("GR");*/
/* 					$(".language").val("French");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}*/
/* 				if(field==2){*/
/* 					$(".typetraining").val("GR");*/
/* 					$(".language").val("English");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".schedule").val("");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}*/
/* 				if(field==3){*/
/* 					$(".typetraining").val("");*/
/* 					$(".language").val("French");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}*/
/* 				if(field==4){*/
/* 					$(".typetraining").val("");*/
/* 					$(".language").val("English");*/
/* 					$(".ftorpt").val("Full Time");*/
/* 					$(".schedule").val("");*/
/* 					$(".hourperday").val(7);*/
/* 					$(".hourperweek").val(35);*/
/* 					return false;*/
/* 				}	*/
/* 				if(field==6){*/
/* 					$(".typetraining").val("PR");*/
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
