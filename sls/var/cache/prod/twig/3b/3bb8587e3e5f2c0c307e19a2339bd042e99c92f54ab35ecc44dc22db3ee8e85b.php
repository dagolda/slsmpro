<?php

/* BoAdvisorsBundle:Enquiry:edit.html.twig */
class __TwigTemplate_90b7b2387f0d8de41acdfcf96ca527a1e8521fbb4993c74a140898b9511db3c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Enquiry:edit.html.twig", 1);
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
        $__internal_0a30c53060908db58e14bacdbfdcca6ef0f222419f6add55425b1488cf7b72dc = $this->env->getExtension("native_profiler");
        $__internal_0a30c53060908db58e14bacdbfdcca6ef0f222419f6add55425b1488cf7b72dc->enter($__internal_0a30c53060908db58e14bacdbfdcca6ef0f222419f6add55425b1488cf7b72dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a30c53060908db58e14bacdbfdcca6ef0f222419f6add55425b1488cf7b72dc->leave($__internal_0a30c53060908db58e14bacdbfdcca6ef0f222419f6add55425b1488cf7b72dc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1b7deb9d33782a574368fbeae3277a54484b6cc86743ccd21eaee5fb60f37ab = $this->env->getExtension("native_profiler");
        $__internal_d1b7deb9d33782a574368fbeae3277a54484b6cc86743ccd21eaee5fb60f37ab->enter($__internal_d1b7deb9d33782a574368fbeae3277a54484b6cc86743ccd21eaee5fb60f37ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d1b7deb9d33782a574368fbeae3277a54484b6cc86743ccd21eaee5fb60f37ab->leave($__internal_d1b7deb9d33782a574368fbeae3277a54484b6cc86743ccd21eaee5fb60f37ab_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_cd17d317faff78fcf892ad65ac1814f64bbb4949cefeb4fab02faf59de6f0715 = $this->env->getExtension("native_profiler");
        $__internal_cd17d317faff78fcf892ad65ac1814f64bbb4949cefeb4fab02faf59de6f0715->enter($__internal_cd17d317faff78fcf892ad65ac1814f64bbb4949cefeb4fab02faf59de6f0715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Enquiry:edit.html.twig", 3)->display($context);
        
        $__internal_cd17d317faff78fcf892ad65ac1814f64bbb4949cefeb4fab02faf59de6f0715->leave($__internal_cd17d317faff78fcf892ad65ac1814f64bbb4949cefeb4fab02faf59de6f0715_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_81e70627db810374c0c8856501c8365384db3790238cc4491198827369050660 = $this->env->getExtension("native_profiler");
        $__internal_81e70627db810374c0c8856501c8365384db3790238cc4491198827369050660->enter($__internal_81e70627db810374c0c8856501c8365384db3790238cc4491198827369050660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        if ((array_key_exists("employee", $context) && ((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null))) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Enquiry:edit.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_81e70627db810374c0c8856501c8365384db3790238cc4491198827369050660->leave($__internal_81e70627db810374c0c8856501c8365384db3790238cc4491198827369050660_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_4ee1c1750ac3fec3d3564280dd7bdee4c441de1a94442871a75ee3939c1bdfb1 = $this->env->getExtension("native_profiler");
        $__internal_4ee1c1750ac3fec3d3564280dd7bdee4c441de1a94442871a75ee3939c1bdfb1->enter($__internal_4ee1c1750ac3fec3d3564280dd7bdee4c441de1a94442871a75ee3939c1bdfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4ee1c1750ac3fec3d3564280dd7bdee4c441de1a94442871a75ee3939c1bdfb1->leave($__internal_4ee1c1750ac3fec3d3564280dd7bdee4c441de1a94442871a75ee3939c1bdfb1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f37195e89a8ab4b9eefd0113793025b24a6da83d6228f2810b3f6d31833d505 = $this->env->getExtension("native_profiler");
        $__internal_1f37195e89a8ab4b9eefd0113793025b24a6da83d6228f2810b3f6d31833d505->enter($__internal_1f37195e89a8ab4b9eefd0113793025b24a6da83d6228f2810b3f6d31833d505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_enquiry_edit", array("id" => $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:editactions.html.twig", "BoAdvisorsBundle:Enquiry:edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 14
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:editform.html.twig", "BoAdvisorsBundle:Enquiry:edit.html.twig", 14)->display($context);
        // line 15
        echo "\t\t\t</div>
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_1f37195e89a8ab4b9eefd0113793025b24a6da83d6228f2810b3f6d31833d505->leave($__internal_1f37195e89a8ab4b9eefd0113793025b24a6da83d6228f2810b3f6d31833d505_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_014baf1b229f176c55320623e45be7e7b6adcd439c7a3359f71b23cb8087c7ef = $this->env->getExtension("native_profiler");
        $__internal_014baf1b229f176c55320623e45be7e7b6adcd439c7a3359f71b23cb8087c7ef->enter($__internal_014baf1b229f176c55320623e45be7e7b6adcd439c7a3359f71b23cb8087c7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
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
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_014baf1b229f176c55320623e45be7e7b6adcd439c7a3359f71b23cb8087c7ef->leave($__internal_014baf1b229f176c55320623e45be7e7b6adcd439c7a3359f71b23cb8087c7ef_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 71,  198 => 70,  146 => 20,  134 => 19,  128 => 16,  125 => 15,  123 => 14,  120 => 13,  118 => 12,  114 => 11,  110 => 10,  107 => 9,  101 => 8,  85 => 7,  73 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%if employee is defined and employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('dash_enquiry_edit',{'id':enquiry.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdvisorsBundle:Enquiry:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdvisorsBundle:Enquiry:editform.html.twig"%}*/
/* 			</div>*/
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
