<?php

/* employee/newsubstitution.html.twig */
class __TwigTemplate_c59068f9f8a781251fab8bbd1692964534ff398e6465dc69fd3642f06c06cb8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/newsubstitution.html.twig", 1);
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
        $__internal_079b808bc17fd54ff5d214ecb2b0316bf128c3046d1f618143ee054e7c6b5a11 = $this->env->getExtension("native_profiler");
        $__internal_079b808bc17fd54ff5d214ecb2b0316bf128c3046d1f618143ee054e7c6b5a11->enter($__internal_079b808bc17fd54ff5d214ecb2b0316bf128c3046d1f618143ee054e7c6b5a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/newsubstitution.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_079b808bc17fd54ff5d214ecb2b0316bf128c3046d1f618143ee054e7c6b5a11->leave($__internal_079b808bc17fd54ff5d214ecb2b0316bf128c3046d1f618143ee054e7c6b5a11_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e25d92b56f58c42232aeb47ec8f5522a0693484ba0ef3341b905314b86c12ad3 = $this->env->getExtension("native_profiler");
        $__internal_e25d92b56f58c42232aeb47ec8f5522a0693484ba0ef3341b905314b86c12ad3->enter($__internal_e25d92b56f58c42232aeb47ec8f5522a0693484ba0ef3341b905314b86c12ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e25d92b56f58c42232aeb47ec8f5522a0693484ba0ef3341b905314b86c12ad3->leave($__internal_e25d92b56f58c42232aeb47ec8f5522a0693484ba0ef3341b905314b86c12ad3_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_1c81ab8844f2457c47fd0cd01f88ae4c216ed749d996c5830787b78c7a158492 = $this->env->getExtension("native_profiler");
        $__internal_1c81ab8844f2457c47fd0cd01f88ae4c216ed749d996c5830787b78c7a158492->enter($__internal_1c81ab8844f2457c47fd0cd01f88ae4c216ed749d996c5830787b78c7a158492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/newsubstitution.html.twig", 3)->display($context);
        
        $__internal_1c81ab8844f2457c47fd0cd01f88ae4c216ed749d996c5830787b78c7a158492->leave($__internal_1c81ab8844f2457c47fd0cd01f88ae4c216ed749d996c5830787b78c7a158492_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0ee9bf6728abdc558d6e96d1ec8589717b8c2c0522aa86b9233d7226375affe6 = $this->env->getExtension("native_profiler");
        $__internal_0ee9bf6728abdc558d6e96d1ec8589717b8c2c0522aa86b9233d7226375affe6->enter($__internal_0ee9bf6728abdc558d6e96d1ec8589717b8c2c0522aa86b9233d7226375affe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_0ee9bf6728abdc558d6e96d1ec8589717b8c2c0522aa86b9233d7226375affe6->leave($__internal_0ee9bf6728abdc558d6e96d1ec8589717b8c2c0522aa86b9233d7226375affe6_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_788de6714b730840ab0c3292038f56c621cee94dd55191d8e6700c43a885a080 = $this->env->getExtension("native_profiler");
        $__internal_788de6714b730840ab0c3292038f56c621cee94dd55191d8e6700c43a885a080->enter($__internal_788de6714b730840ab0c3292038f56c621cee94dd55191d8e6700c43a885a080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_788de6714b730840ab0c3292038f56c621cee94dd55191d8e6700c43a885a080->leave($__internal_788de6714b730840ab0c3292038f56c621cee94dd55191d8e6700c43a885a080_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2f88eac55e1d2f9158f4a6e4a94839bc657c139856cfbdf524ad281246ff9a6 = $this->env->getExtension("native_profiler");
        $__internal_e2f88eac55e1d2f9158f4a6e4a94839bc657c139856cfbdf524ad281246ff9a6->enter($__internal_e2f88eac55e1d2f9158f4a6e4a94839bc657c139856cfbdf524ad281246ff9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_substitution_contract", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "idabsence" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Substitution:newactions.html.twig", "employee/newsubstitution.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Substitution:contract.html.twig", "employee/newsubstitution.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Employee:subscontform.html.twig", "employee/newsubstitution.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t</div>
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'rest');
        echo "
\t\t\t<input type=\"hidden\" name=\"idcontract\" id=\"idcontract\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "html", null, true);
        echo "\"/>
\t\t</form>\t
\t</div>
\t";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e2f88eac55e1d2f9158f4a6e4a94839bc657c139856cfbdf524ad281246ff9a6->leave($__internal_e2f88eac55e1d2f9158f4a6e4a94839bc657c139856cfbdf524ad281246ff9a6_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f39f4180a776bf4a6d4692f5467456f082bd9b048bd7e102fd54b89ec3daf2e = $this->env->getExtension("native_profiler");
        $__internal_3f39f4180a776bf4a6d4692f5467456f082bd9b048bd7e102fd54b89ec3daf2e->enter($__internal_3f39f4180a776bf4a6d4692f5467456f082bd9b048bd7e102fd54b89ec3daf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "\t\t<script>
\t\t\t\$(\"#holders\").change(function(){
\t\t\t\t\$(\".schedule_content\").show();
\t\t\t\t\$('.schedule_content').html(\"<center>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#holders option:selected\");
\t\t\t\tholders=str.val();
\t\t\t\tvar obj = \$(\"#idcontract\");
\t\t\t\tidcontract = obj.val();
\t\t\t\tvar DATA = 'data='+holders+\"-\"+idcontract;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("substitution_reload");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.schedule_content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tvar str=\$(\"#holders option:selected\");
\t\t\t\tholders=str.val();
\t\t\t\tvar str=\$(\"#teachers option:selected\");
\t\t\t\tteachers=str.val();
\t\t\t\tif(holders==0){
\t\t\t\t\talert(\"You have to select a holder!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(teachers==0){
\t\t\t\t\talert(\"You have to select a substitute!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_3f39f4180a776bf4a6d4692f5467456f082bd9b048bd7e102fd54b89ec3daf2e->leave($__internal_3f39f4180a776bf4a6d4692f5467456f082bd9b048bd7e102fd54b89ec3daf2e_prof);

    }

    public function getTemplateName()
    {
        return "employee/newsubstitution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 59,  171 => 34,  158 => 26,  153 => 23,  141 => 22,  135 => 19,  131 => 18,  128 => 17,  126 => 16,  122 => 14,  120 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('employee_substitution_contract',{'idcontract':contract.id,'idabsence':absence.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(substitution_form) }}*/
/* 			{%include "BoAdminBundle:Substitution:newactions.html.twig"%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'entity.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Substitution:contract.html.twig"%}*/
/* 			</div>*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Employee:subscontform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(substitution_form) }}*/
/* 			<input type="hidden" name="idcontract" id="idcontract" value="{{contract.id}}"/>*/
/* 		</form>	*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#holders").change(function(){*/
/* 				$(".schedule_content").show();*/
/* 				$('.schedule_content').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#holders option:selected");*/
/* 				holders=str.val();*/
/* 				var obj = $("#idcontract");*/
/* 				idcontract = obj.val();*/
/* 				var DATA = 'data='+holders+"-"+idcontract;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('substitution_reload')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.schedule_content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn-create").click(function(){*/
/* 				var str=$("#holders option:selected");*/
/* 				holders=str.val();*/
/* 				var str=$("#teachers option:selected");*/
/* 				teachers=str.val();*/
/* 				if(holders==0){*/
/* 					alert("You have to select a holder!");*/
/* 					return false;*/
/* 				}*/
/* 				if(teachers==0){*/
/* 					alert("You have to select a substitute!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
