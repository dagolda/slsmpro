<?php

/* BoCoordinatorBundle:Default:teamcontact.html.twig */
class __TwigTemplate_5aa019af9da145ed9b1a1121c54105d96486f71632f122dd26c8a84eae5cadcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("coordinator.html.twig", "BoCoordinatorBundle:Default:teamcontact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "coordinator.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_315d3a105853815e87f117ba600f64bf7daa814141347e87617fdb59d1dad609 = $this->env->getExtension("native_profiler");
        $__internal_315d3a105853815e87f117ba600f64bf7daa814141347e87617fdb59d1dad609->enter($__internal_315d3a105853815e87f117ba600f64bf7daa814141347e87617fdb59d1dad609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Default:teamcontact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_315d3a105853815e87f117ba600f64bf7daa814141347e87617fdb59d1dad609->leave($__internal_315d3a105853815e87f117ba600f64bf7daa814141347e87617fdb59d1dad609_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fafcfcfa8816cbf08270c049b0ddf335040dcab2cce827114d25df99f7c063f0 = $this->env->getExtension("native_profiler");
        $__internal_fafcfcfa8816cbf08270c049b0ddf335040dcab2cce827114d25df99f7c063f0->enter($__internal_fafcfcfa8816cbf08270c049b0ddf335040dcab2cce827114d25df99f7c063f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_fafcfcfa8816cbf08270c049b0ddf335040dcab2cce827114d25df99f7c063f0->leave($__internal_fafcfcfa8816cbf08270c049b0ddf335040dcab2cce827114d25df99f7c063f0_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_40ff663b3245e424bc387dae135f0d833db346cf6539d6c0f9594dffc1a7f3cd = $this->env->getExtension("native_profiler");
        $__internal_40ff663b3245e424bc387dae135f0d833db346cf6539d6c0f9594dffc1a7f3cd->enter($__internal_40ff663b3245e424bc387dae135f0d833db346cf6539d6c0f9594dffc1a7f3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoCoordinatorBundle:Default:tdb.html.twig", "BoCoordinatorBundle:Default:teamcontact.html.twig", 3)->display($context);
        
        $__internal_40ff663b3245e424bc387dae135f0d833db346cf6539d6c0f9594dffc1a7f3cd->leave($__internal_40ff663b3245e424bc387dae135f0d833db346cf6539d6c0f9594dffc1a7f3cd_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4298e1ec8272abc6975aee36195d9752f2657f68de750cb40f68b1fbcba8847b = $this->env->getExtension("native_profiler");
        $__internal_4298e1ec8272abc6975aee36195d9752f2657f68de750cb40f68b1fbcba8847b->enter($__internal_4298e1ec8272abc6975aee36195d9752f2657f68de750cb40f68b1fbcba8847b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        if (((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")) != null)) {
            $this->loadTemplate("BoAdminBundle:Coordinator:rightshow.html.twig", "BoCoordinatorBundle:Default:teamcontact.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_4298e1ec8272abc6975aee36195d9752f2657f68de750cb40f68b1fbcba8847b->leave($__internal_4298e1ec8272abc6975aee36195d9752f2657f68de750cb40f68b1fbcba8847b_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_5609c64614c4e561110eafacc6edf661d25f6bc54a79bb3bf5b00598d00f02c4 = $this->env->getExtension("native_profiler");
        $__internal_5609c64614c4e561110eafacc6edf661d25f6bc54a79bb3bf5b00598d00f02c4->enter($__internal_5609c64614c4e561110eafacc6edf661d25f6bc54a79bb3bf5b00598d00f02c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5609c64614c4e561110eafacc6edf661d25f6bc54a79bb3bf5b00598d00f02c4->leave($__internal_5609c64614c4e561110eafacc6edf661d25f6bc54a79bb3bf5b00598d00f02c4_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_dac83e51e0498ccee934bf7807ad310c35f32422249bb41f9d435b929385f72a = $this->env->getExtension("native_profiler");
        $__internal_dac83e51e0498ccee934bf7807ad310c35f32422249bb41f9d435b929385f72a->enter($__internal_dac83e51e0498ccee934bf7807ad310c35f32422249bb41f9d435b929385f72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoStudentBundle:Default:contactaction.html.twig", "BoCoordinatorBundle:Default:teamcontact.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_dac83e51e0498ccee934bf7807ad310c35f32422249bb41f9d435b929385f72a->leave($__internal_dac83e51e0498ccee934bf7807ad310c35f32422249bb41f9d435b929385f72a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_93396097363fc664e22bcacf7dba7704b50088bb5bfabf87cd7042b5253e4e67 = $this->env->getExtension("native_profiler");
        $__internal_93396097363fc664e22bcacf7dba7704b50088bb5bfabf87cd7042b5253e4e67->enter($__internal_93396097363fc664e22bcacf7dba7704b50088bb5bfabf87cd7042b5253e4e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div class=\"home-content\">
\t\t<div id=\"content-liste\">
\t\t\t";
        // line 14
        $this->loadTemplate("BoStudentBundle:Default:tblistcontact.html.twig", "BoCoordinatorBundle:Default:teamcontact.html.twig", 14)->display($context);
        // line 15
        echo "\t\t</div>
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_93396097363fc664e22bcacf7dba7704b50088bb5bfabf87cd7042b5253e4e67->leave($__internal_93396097363fc664e22bcacf7dba7704b50088bb5bfabf87cd7042b5253e4e67_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5aea7679c518c0fbccbe5b31b3b1826b4fa73eec89f6329c47b1a775d9746ee8 = $this->env->getExtension("native_profiler");
        $__internal_5aea7679c518c0fbccbe5b31b3b1826b4fa73eec89f6329c47b1a775d9746ee8->enter($__internal_5aea7679c518c0fbccbe5b31b3b1826b4fa73eec89f6329c47b1a775d9746ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("bo_student_teamcontact_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_5aea7679c518c0fbccbe5b31b3b1826b4fa73eec89f6329c47b1a775d9746ee8->leave($__internal_5aea7679c518c0fbccbe5b31b3b1826b4fa73eec89f6329c47b1a775d9746ee8_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Default:teamcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 40,  167 => 30,  157 => 25,  148 => 18,  136 => 17,  132 => 15,  130 => 14,  126 => 12,  120 => 11,  110 => 9,  104 => 8,  88 => 7,  76 => 5,  70 => 4,  58 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'coordinator.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.teamcontact'|trans([],'BoAdminBundle')}}  >> {{'label.contracts'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoCoordinatorBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}*/
/* 	{%if coordinator!=null%}{%include "BoAdminBundle:Coordinator:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.teamcontact'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoStudentBundle:Default:contactaction.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="home-content">*/
/* 		<div id="content-liste">*/
/* 			{%include "BoStudentBundle:Default:tblistcontact.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn-search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();	*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('bo_student_teamcontact_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
