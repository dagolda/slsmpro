<?php

/* employee/sendlogin.html.twig */
class __TwigTemplate_0596865d49380282037fca9d5b0326fcb65202f10cf84bc8f23d538d2ee2b96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "employee/sendlogin.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd26283c6ef4c765c6bb36c4faf55e12538f312c29ded8f6de6b4aebcd6c15ce = $this->env->getExtension("native_profiler");
        $__internal_bd26283c6ef4c765c6bb36c4faf55e12538f312c29ded8f6de6b4aebcd6c15ce->enter($__internal_bd26283c6ef4c765c6bb36c4faf55e12538f312c29ded8f6de6b4aebcd6c15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/sendlogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd26283c6ef4c765c6bb36c4faf55e12538f312c29ded8f6de6b4aebcd6c15ce->leave($__internal_bd26283c6ef4c765c6bb36c4faf55e12538f312c29ded8f6de6b4aebcd6c15ce_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb843da2d7746d8520cb26191a3fa5dbb6ef8b44b92b14de78ebb775fd19c5d = $this->env->getExtension("native_profiler");
        $__internal_2cb843da2d7746d8520cb26191a3fa5dbb6ef8b44b92b14de78ebb775fd19c5d->enter($__internal_2cb843da2d7746d8520cb26191a3fa5dbb6ef8b44b92b14de78ebb775fd19c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.login", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_2cb843da2d7746d8520cb26191a3fa5dbb6ef8b44b92b14de78ebb775fd19c5d->leave($__internal_2cb843da2d7746d8520cb26191a3fa5dbb6ef8b44b92b14de78ebb775fd19c5d_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_79aa02931b41bcb9c921ddd1269f8816d979bc844321a4272ccdec4df45ca69e = $this->env->getExtension("native_profiler");
        $__internal_79aa02931b41bcb9c921ddd1269f8816d979bc844321a4272ccdec4df45ca69e->enter($__internal_79aa02931b41bcb9c921ddd1269f8816d979bc844321a4272ccdec4df45ca69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/sendlogin.html.twig", 3)->display($context);
        
        $__internal_79aa02931b41bcb9c921ddd1269f8816d979bc844321a4272ccdec4df45ca69e->leave($__internal_79aa02931b41bcb9c921ddd1269f8816d979bc844321a4272ccdec4df45ca69e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bb822fa7b50d41466816f10aa46971576036fa4e33c853d661f1f48133045832 = $this->env->getExtension("native_profiler");
        $__internal_bb822fa7b50d41466816f10aa46971576036fa4e33c853d661f1f48133045832->enter($__internal_bb822fa7b50d41466816f10aa46971576036fa4e33c853d661f1f48133045832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_bb822fa7b50d41466816f10aa46971576036fa4e33c853d661f1f48133045832->leave($__internal_bb822fa7b50d41466816f10aa46971576036fa4e33c853d661f1f48133045832_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_fbd8e9d9f3a58ae38951f94e08e3072c2f43cac8889ad013e09a2a05742c4bd8 = $this->env->getExtension("native_profiler");
        $__internal_fbd8e9d9f3a58ae38951f94e08e3072c2f43cac8889ad013e09a2a05742c4bd8->enter($__internal_fbd8e9d9f3a58ae38951f94e08e3072c2f43cac8889ad013e09a2a05742c4bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.login", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_fbd8e9d9f3a58ae38951f94e08e3072c2f43cac8889ad013e09a2a05742c4bd8->leave($__internal_fbd8e9d9f3a58ae38951f94e08e3072c2f43cac8889ad013e09a2a05742c4bd8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fb83451b701cd8c6e671e4c94ba56bc70a6f2827bb0f24c3fb5e9d135da2651 = $this->env->getExtension("native_profiler");
        $__internal_0fb83451b701cd8c6e671e4c94ba56bc70a6f2827bb0f24c3fb5e9d135da2651->enter($__internal_0fb83451b701cd8c6e671e4c94ba56bc70a6f2827bb0f24c3fb5e9d135da2651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("employee_sendmail");
        echo "\" method=\"post\" class=\"style\">
\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Employee:slaction.html.twig", "employee/sendlogin.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div id=\"content-liste\">
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Employee:tbslliste.html.twig", "employee/sendlogin.html.twig", 11)->display($context);
        // line 12
        echo "\t\t</div>
\t\t<input type=\"hidden\" name=\"strids\" id=\"strids\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["strids"]) ? $context["strids"] : $this->getContext($context, "strids")), "html", null, true);
        echo "\"/>
\t</form>
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_0fb83451b701cd8c6e671e4c94ba56bc70a6f2827bb0f24c3fb5e9d135da2651->leave($__internal_0fb83451b701cd8c6e671e4c94ba56bc70a6f2827bb0f24c3fb5e9d135da2651_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3dc13452537b2ed6df958ec1bd8069032060caeeb3dec1b26518d5ecab39690 = $this->env->getExtension("native_profiler");
        $__internal_d3dc13452537b2ed6df958ec1bd8069032060caeeb3dec1b26518d5ecab39690->enter($__internal_d3dc13452537b2ed6df958ec1bd8069032060caeeb3dec1b26518d5ecab39690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t<script>
\t\t\t\$(\"#select-all\").click(function(){
\t\t\t\t\$(\".td_check\").hide();
\t\t\t\t\$(\".td_uncheck\").show();
\t\t\t\tvar strids = \$(\"#strids\").val(); 
\t\t\t\tvar ids = strids.split(\",\");
\t\t\t\tvar arraylength = ids.length;
\t\t\t\tfor(var i=0; i<arraylength; i++){
\t\t\t\t\tvar check=\"chk_\"+ids[i];
\t\t\t\t\t\$(\"#\"+check).attr('checked',true);
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#deselect-all\").click(function(){
\t\t\t\t\$(\".td_check\").show();
\t\t\t\t\$(\".td_uncheck\").hide();
\t\t\t\tvar strids = \$(\"#strids\").val(); 
\t\t\t\tvar ids = strids.split(\",\");
\t\t\t\tvar arraylength = ids.length;
\t\t\t\tfor(var i=0; i<arraylength; i++){
\t\t\t\t\tvar check=\"chk_\"+ids[i];
\t\t\t\t\t\$(\"#\"+check).attr('checked',false);
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});\t
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d3dc13452537b2ed6df958ec1bd8069032060caeeb3dec1b26518d5ecab39690->leave($__internal_d3dc13452537b2ed6df958ec1bd8069032060caeeb3dec1b26518d5ecab39690_prof);

    }

    public function getTemplateName()
    {
        return "employee/sendlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 43,  166 => 42,  138 => 16,  126 => 15,  121 => 13,  118 => 12,  116 => 11,  113 => 10,  111 => 9,  106 => 8,  100 => 7,  82 => 6,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'action.send'|trans([],'BoAdminBundle')}}  {{'user.login'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'action.send'|trans([],'BoAdminBundle')}} {{'user.login'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<form action="{{ path('employee_sendmail')}}" method="post" class="style">*/
/* 		{%include "BoAdminBundle:Employee:slaction.html.twig"%}*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Employee:tbslliste.html.twig"%}*/
/* 		</div>*/
/* 		<input type="hidden" name="strids" id="strids" value="{{strids}}"/>*/
/* 	</form>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#select-all").click(function(){*/
/* 				$(".td_check").hide();*/
/* 				$(".td_uncheck").show();*/
/* 				var strids = $("#strids").val(); */
/* 				var ids = strids.split(",");*/
/* 				var arraylength = ids.length;*/
/* 				for(var i=0; i<arraylength; i++){*/
/* 					var check="chk_"+ids[i];*/
/* 					$("#"+check).attr('checked',true);*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 			$("#deselect-all").click(function(){*/
/* 				$(".td_check").show();*/
/* 				$(".td_uncheck").hide();*/
/* 				var strids = $("#strids").val(); */
/* 				var ids = strids.split(",");*/
/* 				var arraylength = ids.length;*/
/* 				for(var i=0; i<arraylength; i++){*/
/* 					var check="chk_"+ids[i];*/
/* 					$("#"+check).attr('checked',false);*/
/* 				}*/
/* 				return false;*/
/* 			});	*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
