<?php

/* BoCoordinatorBundle:Students:index.html.twig */
class __TwigTemplate_d061abf89248538e245da3c283588818862b4278757fa98beb84f1fa442fa20d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("coordinator.html.twig", "BoCoordinatorBundle:Students:index.html.twig", 1);
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
        $__internal_51a52fcebba04f2315add0f4867fce61e0b6337ca3e2be33b838d314d79d0895 = $this->env->getExtension("native_profiler");
        $__internal_51a52fcebba04f2315add0f4867fce61e0b6337ca3e2be33b838d314d79d0895->enter($__internal_51a52fcebba04f2315add0f4867fce61e0b6337ca3e2be33b838d314d79d0895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Students:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a52fcebba04f2315add0f4867fce61e0b6337ca3e2be33b838d314d79d0895->leave($__internal_51a52fcebba04f2315add0f4867fce61e0b6337ca3e2be33b838d314d79d0895_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_077e521c38752cfe0e79c8265be91f0bdaaa468a633e678784424bb484e8c916 = $this->env->getExtension("native_profiler");
        $__internal_077e521c38752cfe0e79c8265be91f0bdaaa468a633e678784424bb484e8c916->enter($__internal_077e521c38752cfe0e79c8265be91f0bdaaa468a633e678784424bb484e8c916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.students", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_077e521c38752cfe0e79c8265be91f0bdaaa468a633e678784424bb484e8c916->leave($__internal_077e521c38752cfe0e79c8265be91f0bdaaa468a633e678784424bb484e8c916_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_eb827ebc8e007f538e4068adff0af3780beec1bf6bc058d65ebf9c7e92134aed = $this->env->getExtension("native_profiler");
        $__internal_eb827ebc8e007f538e4068adff0af3780beec1bf6bc058d65ebf9c7e92134aed->enter($__internal_eb827ebc8e007f538e4068adff0af3780beec1bf6bc058d65ebf9c7e92134aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoCoordinatorBundle:Default:supervision.html.twig", "BoCoordinatorBundle:Students:index.html.twig", 3)->display($context);
        
        $__internal_eb827ebc8e007f538e4068adff0af3780beec1bf6bc058d65ebf9c7e92134aed->leave($__internal_eb827ebc8e007f538e4068adff0af3780beec1bf6bc058d65ebf9c7e92134aed_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_87c76e13fe38e16a081bb914d3a8e90d64939ddfb9d6bc975ee8f1944447779f = $this->env->getExtension("native_profiler");
        $__internal_87c76e13fe38e16a081bb914d3a8e90d64939ddfb9d6bc975ee8f1944447779f->enter($__internal_87c76e13fe38e16a081bb914d3a8e90d64939ddfb9d6bc975ee8f1944447779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        if (((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")) != null)) {
            $this->loadTemplate("BoAdminBundle:Coordinator:rightshow.html.twig", "BoCoordinatorBundle:Students:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_87c76e13fe38e16a081bb914d3a8e90d64939ddfb9d6bc975ee8f1944447779f->leave($__internal_87c76e13fe38e16a081bb914d3a8e90d64939ddfb9d6bc975ee8f1944447779f_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_76d5522a7c5b4e1e31b4c3d2970235b2b71d06aff9fa02baf8171d60e1f976f5 = $this->env->getExtension("native_profiler");
        $__internal_76d5522a7c5b4e1e31b4c3d2970235b2b71d06aff9fa02baf8171d60e1f976f5->enter($__internal_76d5522a7c5b4e1e31b4c3d2970235b2b71d06aff9fa02baf8171d60e1f976f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.students", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_76d5522a7c5b4e1e31b4c3d2970235b2b71d06aff9fa02baf8171d60e1f976f5->leave($__internal_76d5522a7c5b4e1e31b4c3d2970235b2b71d06aff9fa02baf8171d60e1f976f5_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fc12c00e414d85a4c9d50aa84e53ae36f80f8451a2a4707a045d0f7d333d8ba7 = $this->env->getExtension("native_profiler");
        $__internal_fc12c00e414d85a4c9d50aa84e53ae36f80f8451a2a4707a045d0f7d333d8ba7->enter($__internal_fc12c00e414d85a4c9d50aa84e53ae36f80f8451a2a4707a045d0f7d333d8ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $this->loadTemplate("BoCoordinatorBundle:Students:actions.html.twig", "BoCoordinatorBundle:Students:index.html.twig", 8)->display($context);
        
        $__internal_fc12c00e414d85a4c9d50aa84e53ae36f80f8451a2a4707a045d0f7d333d8ba7->leave($__internal_fc12c00e414d85a4c9d50aa84e53ae36f80f8451a2a4707a045d0f7d333d8ba7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0cc3c3af2385af1d8389f4b852804adecc03fe08082d7004538a3bc50b617f1 = $this->env->getExtension("native_profiler");
        $__internal_a0cc3c3af2385af1d8389f4b852804adecc03fe08082d7004538a3bc50b617f1->enter($__internal_a0cc3c3af2385af1d8389f4b852804adecc03fe08082d7004538a3bc50b617f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"body-content\">
\t\t<div class=\"display_content\">
\t\t\t<input type=\"hidden\" id=\"nb_pages\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")), "html", null, true);
        echo "\" /> 
\t\t\t<div id=\"content-liste\">
\t\t\t\t";
        // line 14
        $this->loadTemplate("BoCoordinatorBundle:Students:tblist.html.twig", "BoCoordinatorBundle:Students:index.html.twig", 14)->display($context);
        // line 15
        echo "\t\t\t</div>
\t\t</div>\t\t\t
\t</div>
\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a0cc3c3af2385af1d8389f4b852804adecc03fe08082d7004538a3bc50b617f1->leave($__internal_a0cc3c3af2385af1d8389f4b852804adecc03fe08082d7004538a3bc50b617f1_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f70c257f05137c73d240dd5c01ea8153607a5fc3afcfa448c7ade3fd0a3084d = $this->env->getExtension("native_profiler");
        $__internal_6f70c257f05137c73d240dd5c01ea8153607a5fc3afcfa448c7ade3fd0a3084d->enter($__internal_6f70c257f05137c73d240dd5c01ea8153607a5fc3afcfa448c7ade3fd0a3084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("students_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("students_search");
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
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_6f70c257f05137c73d240dd5c01ea8153607a5fc3afcfa448c7ade3fd0a3084d->leave($__internal_6f70c257f05137c73d240dd5c01ea8153607a5fc3afcfa448c7ade3fd0a3084d_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Students:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 57,  186 => 47,  175 => 41,  157 => 26,  148 => 19,  136 => 18,  131 => 15,  129 => 14,  124 => 12,  120 => 10,  114 => 9,  102 => 8,  86 => 7,  74 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'coordinator.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.supervision'|trans([],'BoAdminBundle')}}  >> {{'label.students'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoCoordinatorBundle:Default:supervision.html.twig"%}{% endblock %}*/
/* {% block nav %}*/
/* 	{%if coordinator!=null%}{%include "BoAdminBundle:Coordinator:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.supervision'|trans([],'BoAdminBundle')}}  >> {{'label.students'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block actions %}{%include "BoCoordinatorBundle:Students:actions.html.twig"%}{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<div class="display_content">*/
/* 			<input type="hidden" id="nb_pages" value="{{nb_pages}}" /> */
/* 			<div id="content-liste">*/
/* 				{%include "BoCoordinatorBundle:Students:tblist.html.twig"%}*/
/* 			</div>*/
/* 		</div>			*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();			*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_search')}}",*/
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
