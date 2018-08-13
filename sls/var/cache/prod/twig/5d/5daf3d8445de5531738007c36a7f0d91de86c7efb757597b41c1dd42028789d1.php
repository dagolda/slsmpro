<?php

/* BoAdvisorsBundle:Validation:index.html.twig */
class __TwigTemplate_9dc7835c5690dac13550550dcca44280c2d3ceea04d0d561b37d2831c1ff5963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Validation:index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cd7ca9705889f98d8d51d35b4a4386de2a0fcef16848609ace4c5a5e9ba385d = $this->env->getExtension("native_profiler");
        $__internal_0cd7ca9705889f98d8d51d35b4a4386de2a0fcef16848609ace4c5a5e9ba385d->enter($__internal_0cd7ca9705889f98d8d51d35b4a4386de2a0fcef16848609ace4c5a5e9ba385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Validation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd7ca9705889f98d8d51d35b4a4386de2a0fcef16848609ace4c5a5e9ba385d->leave($__internal_0cd7ca9705889f98d8d51d35b4a4386de2a0fcef16848609ace4c5a5e9ba385d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1eec897a93e046320e75e10345fcf5381ecbdb129a06b203806470349fa3a88 = $this->env->getExtension("native_profiler");
        $__internal_c1eec897a93e046320e75e10345fcf5381ecbdb129a06b203806470349fa3a88->enter($__internal_c1eec897a93e046320e75e10345fcf5381ecbdb129a06b203806470349fa3a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> Validation";
        
        $__internal_c1eec897a93e046320e75e10345fcf5381ecbdb129a06b203806470349fa3a88->leave($__internal_c1eec897a93e046320e75e10345fcf5381ecbdb129a06b203806470349fa3a88_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6f0579d22a8311803e729141ce9623bc189bc0e0218c7e0cee17d8d4013f6ad8 = $this->env->getExtension("native_profiler");
        $__internal_6f0579d22a8311803e729141ce9623bc189bc0e0218c7e0cee17d8d4013f6ad8->enter($__internal_6f0579d22a8311803e729141ce9623bc189bc0e0218c7e0cee17d8d4013f6ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Validation:index.html.twig", 3)->display($context);
        
        $__internal_6f0579d22a8311803e729141ce9623bc189bc0e0218c7e0cee17d8d4013f6ad8->leave($__internal_6f0579d22a8311803e729141ce9623bc189bc0e0218c7e0cee17d8d4013f6ad8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_67eb5108df3e288b6ed501437f9ca76e65cc3e48d8bef3d517028e4c8a8c92b4 = $this->env->getExtension("native_profiler");
        $__internal_67eb5108df3e288b6ed501437f9ca76e65cc3e48d8bef3d517028e4c8a8c92b4->enter($__internal_67eb5108df3e288b6ed501437f9ca76e65cc3e48d8bef3d517028e4c8a8c92b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_67eb5108df3e288b6ed501437f9ca76e65cc3e48d8bef3d517028e4c8a8c92b4->leave($__internal_67eb5108df3e288b6ed501437f9ca76e65cc3e48d8bef3d517028e4c8a8c92b4_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_2481cca341132ba229f65d3810e5342da6d953fbfbe748f9265c68d9dd29c21f = $this->env->getExtension("native_profiler");
        $__internal_2481cca341132ba229f65d3810e5342da6d953fbfbe748f9265c68d9dd29c21f->enter($__internal_2481cca341132ba229f65d3810e5342da6d953fbfbe748f9265c68d9dd29c21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> Validation</h1>";
        
        $__internal_2481cca341132ba229f65d3810e5342da6d953fbfbe748f9265c68d9dd29c21f->leave($__internal_2481cca341132ba229f65d3810e5342da6d953fbfbe748f9265c68d9dd29c21f_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_769f4ee9d01af050328d93e85df97c0133f6e4cb78fc7bdf61f2d1712a714775 = $this->env->getExtension("native_profiler");
        $__internal_769f4ee9d01af050328d93e85df97c0133f6e4cb78fc7bdf61f2d1712a714775->enter($__internal_769f4ee9d01af050328d93e85df97c0133f6e4cb78fc7bdf61f2d1712a714775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Validation:actions.html.twig", "BoAdvisorsBundle:Validation:index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_769f4ee9d01af050328d93e85df97c0133f6e4cb78fc7bdf61f2d1712a714775->leave($__internal_769f4ee9d01af050328d93e85df97c0133f6e4cb78fc7bdf61f2d1712a714775_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_281c545fe2714e38e6cc5e852679aeaa4f805f9bacd720045c482127ce1be6da = $this->env->getExtension("native_profiler");
        $__internal_281c545fe2714e38e6cc5e852679aeaa4f805f9bacd720045c482127ce1be6da->enter($__internal_281c545fe2714e38e6cc5e852679aeaa4f805f9bacd720045c482127ce1be6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdvisorsBundle:Validation:pagination.html.twig", "BoAdvisorsBundle:Validation:index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdvisorsBundle:Validation:tbliste.html.twig", "BoAdvisorsBundle:Validation:index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_281c545fe2714e38e6cc5e852679aeaa4f805f9bacd720045c482127ce1be6da->leave($__internal_281c545fe2714e38e6cc5e852679aeaa4f805f9bacd720045c482127ce1be6da_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5d36d72f6dc3d1968eebcd4720943a39e2f71de5db2d6de0cefebba62f30ef7 = $this->env->getExtension("native_profiler");
        $__internal_f5d36d72f6dc3d1968eebcd4720943a39e2f71de5db2d6de0cefebba62f30ef7->enter($__internal_f5d36d72f6dc3d1968eebcd4720943a39e2f71de5db2d6de0cefebba62f30ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("dash_employee_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>Recherche en cours >>&nbsp;<img src=\\\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("dash_employee_search");
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f5d36d72f6dc3d1968eebcd4720943a39e2f71de5db2d6de0cefebba62f30ef7->leave($__internal_f5d36d72f6dc3d1968eebcd4720943a39e2f71de5db2d6de0cefebba62f30ef7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Validation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 59,  185 => 49,  175 => 42,  157 => 27,  148 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  124 => 14,  122 => 13,  119 => 12,  116 => 11,  110 => 10,  100 => 8,  94 => 7,  80 => 6,  67 => 4,  55 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> Validation{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> Validation</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Validation:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdvisorsBundle:Validation:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Validation:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_employee_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn-search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();				*/
/* 				$('#content-liste').html("<center>Recherche en cours >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".total_number").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_employee_search')}}",*/
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
