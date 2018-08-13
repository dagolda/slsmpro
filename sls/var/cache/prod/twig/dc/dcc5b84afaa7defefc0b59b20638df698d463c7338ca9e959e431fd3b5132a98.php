<?php

/* substitution/edit.html.twig */
class __TwigTemplate_79ce68e01ce21b515fb5b24efa807d712c0c480d0b6882dc63afc588f6a5b247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "substitution/edit.html.twig", 1);
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
        $__internal_df05807a7f2cc8ee675240395eab5e497ee306f4664636d138173f069038cd8a = $this->env->getExtension("native_profiler");
        $__internal_df05807a7f2cc8ee675240395eab5e497ee306f4664636d138173f069038cd8a->enter($__internal_df05807a7f2cc8ee675240395eab5e497ee306f4664636d138173f069038cd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "substitution/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df05807a7f2cc8ee675240395eab5e497ee306f4664636d138173f069038cd8a->leave($__internal_df05807a7f2cc8ee675240395eab5e497ee306f4664636d138173f069038cd8a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a632e7874e358fcaa2cf59a500b86680bf88a865906ff17bdbb8888d1358a04 = $this->env->getExtension("native_profiler");
        $__internal_1a632e7874e358fcaa2cf59a500b86680bf88a865906ff17bdbb8888d1358a04->enter($__internal_1a632e7874e358fcaa2cf59a500b86680bf88a865906ff17bdbb8888d1358a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_1a632e7874e358fcaa2cf59a500b86680bf88a865906ff17bdbb8888d1358a04->leave($__internal_1a632e7874e358fcaa2cf59a500b86680bf88a865906ff17bdbb8888d1358a04_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_5d4e5f2f3fbe086146237adc644605b9c66f44418f7298d740187b62753a37a2 = $this->env->getExtension("native_profiler");
        $__internal_5d4e5f2f3fbe086146237adc644605b9c66f44418f7298d740187b62753a37a2->enter($__internal_5d4e5f2f3fbe086146237adc644605b9c66f44418f7298d740187b62753a37a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "substitution/edit.html.twig", 3)->display($context);
        
        $__internal_5d4e5f2f3fbe086146237adc644605b9c66f44418f7298d740187b62753a37a2->leave($__internal_5d4e5f2f3fbe086146237adc644605b9c66f44418f7298d740187b62753a37a2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_cbe5a206de86bc286ade7688deeb260aa8d09339730e81f646b345a03e6917ac = $this->env->getExtension("native_profiler");
        $__internal_cbe5a206de86bc286ade7688deeb260aa8d09339730e81f646b345a03e6917ac->enter($__internal_cbe5a206de86bc286ade7688deeb260aa8d09339730e81f646b345a03e6917ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_cbe5a206de86bc286ade7688deeb260aa8d09339730e81f646b345a03e6917ac->leave($__internal_cbe5a206de86bc286ade7688deeb260aa8d09339730e81f646b345a03e6917ac_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_b229048c8bf268582a92b5a9f9bf494fcca3b52fab8e91971926546b6ad87c0f = $this->env->getExtension("native_profiler");
        $__internal_b229048c8bf268582a92b5a9f9bf494fcca3b52fab8e91971926546b6ad87c0f->enter($__internal_b229048c8bf268582a92b5a9f9bf494fcca3b52fab8e91971926546b6ad87c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b229048c8bf268582a92b5a9f9bf494fcca3b52fab8e91971926546b6ad87c0f->leave($__internal_b229048c8bf268582a92b5a9f9bf494fcca3b52fab8e91971926546b6ad87c0f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1685a62a7831d9257755851c86678ca71ee0a8535e9d05818f260a2481b4a5c2 = $this->env->getExtension("native_profiler");
        $__internal_1685a62a7831d9257755851c86678ca71ee0a8535e9d05818f260a2481b4a5c2->enter($__internal_1685a62a7831d9257755851c86678ca71ee0a8535e9d05818f260a2481b4a5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("substitution_edit", array("id" => $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Substitution:editactions.html.twig", "substitution/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">\t\t\t
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Substitution:editform.html.twig", "substitution/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_1685a62a7831d9257755851c86678ca71ee0a8535e9d05818f260a2481b4a5c2->leave($__internal_1685a62a7831d9257755851c86678ca71ee0a8535e9d05818f260a2481b4a5c2_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b335a12e8f5a41202607f2baa11013d0750bc84f672c0e3f003658a2e9dd9eed = $this->env->getExtension("native_profiler");
        $__internal_b335a12e8f5a41202607f2baa11013d0750bc84f672c0e3f003658a2e9dd9eed->enter($__internal_b335a12e8f5a41202607f2baa11013d0750bc84f672c0e3f003658a2e9dd9eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>
\t\t\t\$(\"document\").ready(function(){
\t\t\t\t\$(\".schedule_content\").show();\t
\t\t\t\treturn false;\t\t\t\t
\t\t\t});
\t\t\t\$(\"#holders\").change(function(){
\t\t\t\t\$(\".schedule_content\").show();
\t\t\t\t\$('.schedule_content').html(\"<center>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#holders option:selected\");
\t\t\t\tholders=str.val();
\t\t\t\tidcontract = \$(\"#idcontract\").val();
\t\t\t\tidgroup = \$(\"#idgroup\").val();
\t\t\t\tvar obj = \$(\"#ddate\");
\t\t\t\tddate = obj.val();
\t\t\t\tvar DATA = 'data='+holders+\"-\"+idcontract+\"-\"+idgroup+\"-\"+ddate;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("substitution_reload2");
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
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_b335a12e8f5a41202607f2baa11013d0750bc84f672c0e3f003658a2e9dd9eed->leave($__internal_b335a12e8f5a41202607f2baa11013d0750bc84f672c0e3f003658a2e9dd9eed_prof);

    }

    public function getTemplateName()
    {
        return "substitution/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 60,  163 => 35,  148 => 25,  139 => 18,  127 => 17,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('substitution_edit',{'id':substitution.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Substitution:editactions.html.twig"%}*/
/* 			<div class="show_content">			*/
/* 				{%include "BoAdminBundle:Substitution:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("document").ready(function(){*/
/* 				$(".schedule_content").show();	*/
/* 				return false;				*/
/* 			});*/
/* 			$("#holders").change(function(){*/
/* 				$(".schedule_content").show();*/
/* 				$('.schedule_content').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#holders option:selected");*/
/* 				holders=str.val();*/
/* 				idcontract = $("#idcontract").val();*/
/* 				idgroup = $("#idgroup").val();*/
/* 				var obj = $("#ddate");*/
/* 				ddate = obj.val();*/
/* 				var DATA = 'data='+holders+"-"+idcontract+"-"+idgroup+"-"+ddate;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('substitution_reload2')}}",*/
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
