<?php

/* BoAdvisorsBundle:Substitution:index.html.twig */
class __TwigTemplate_70633e3e70e801ecac4c65127c2fc48fe01fc91ae8e4cbddea719d5bd4e2a83c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Substitution:index.html.twig", 1);
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
        $__internal_a598363704a6cabe9ed1679f6f772304003498e556f4b25dd8c85bae8db8550e = $this->env->getExtension("native_profiler");
        $__internal_a598363704a6cabe9ed1679f6f772304003498e556f4b25dd8c85bae8db8550e->enter($__internal_a598363704a6cabe9ed1679f6f772304003498e556f4b25dd8c85bae8db8550e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Substitution:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a598363704a6cabe9ed1679f6f772304003498e556f4b25dd8c85bae8db8550e->leave($__internal_a598363704a6cabe9ed1679f6f772304003498e556f4b25dd8c85bae8db8550e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdb2667443f956d1a1187885362d87f801e18a42fbfa190e3ebe379e184c4280 = $this->env->getExtension("native_profiler");
        $__internal_fdb2667443f956d1a1187885362d87f801e18a42fbfa190e3ebe379e184c4280->enter($__internal_fdb2667443f956d1a1187885362d87f801e18a42fbfa190e3ebe379e184c4280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_fdb2667443f956d1a1187885362d87f801e18a42fbfa190e3ebe379e184c4280->leave($__internal_fdb2667443f956d1a1187885362d87f801e18a42fbfa190e3ebe379e184c4280_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_043c3ab9b61bbdde786f72c69e226aef2a12e2714fececcafcae01f6aabcb0c2 = $this->env->getExtension("native_profiler");
        $__internal_043c3ab9b61bbdde786f72c69e226aef2a12e2714fececcafcae01f6aabcb0c2->enter($__internal_043c3ab9b61bbdde786f72c69e226aef2a12e2714fececcafcae01f6aabcb0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Substitution:index.html.twig", 3)->display($context);
        
        $__internal_043c3ab9b61bbdde786f72c69e226aef2a12e2714fececcafcae01f6aabcb0c2->leave($__internal_043c3ab9b61bbdde786f72c69e226aef2a12e2714fececcafcae01f6aabcb0c2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e2bc841ff2e6e312503a1decc4a22aec62e130ce24fbd8788084d31148fdd187 = $this->env->getExtension("native_profiler");
        $__internal_e2bc841ff2e6e312503a1decc4a22aec62e130ce24fbd8788084d31148fdd187->enter($__internal_e2bc841ff2e6e312503a1decc4a22aec62e130ce24fbd8788084d31148fdd187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Substitution:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_e2bc841ff2e6e312503a1decc4a22aec62e130ce24fbd8788084d31148fdd187->leave($__internal_e2bc841ff2e6e312503a1decc4a22aec62e130ce24fbd8788084d31148fdd187_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_9709c02759690d8cbaffa9a91f38d867ae276148ab25a64a92b050e81d665130 = $this->env->getExtension("native_profiler");
        $__internal_9709c02759690d8cbaffa9a91f38d867ae276148ab25a64a92b050e81d665130->enter($__internal_9709c02759690d8cbaffa9a91f38d867ae276148ab25a64a92b050e81d665130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_9709c02759690d8cbaffa9a91f38d867ae276148ab25a64a92b050e81d665130->leave($__internal_9709c02759690d8cbaffa9a91f38d867ae276148ab25a64a92b050e81d665130_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ad455ade46ba38066b2b80dc0a795b701d13b0f37fe86da06f25ee2791de1c13 = $this->env->getExtension("native_profiler");
        $__internal_ad455ade46ba38066b2b80dc0a795b701d13b0f37fe86da06f25ee2791de1c13->enter($__internal_ad455ade46ba38066b2b80dc0a795b701d13b0f37fe86da06f25ee2791de1c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Substitution:actions.html.twig", "BoAdvisorsBundle:Substitution:index.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_ad455ade46ba38066b2b80dc0a795b701d13b0f37fe86da06f25ee2791de1c13->leave($__internal_ad455ade46ba38066b2b80dc0a795b701d13b0f37fe86da06f25ee2791de1c13_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f48ba8af82c6468a75eded1a433ef965a28be94d86b5c3a19d7ecfde12082b1 = $this->env->getExtension("native_profiler");
        $__internal_3f48ba8af82c6468a75eded1a433ef965a28be94d86b5c3a19d7ecfde12082b1->enter($__internal_3f48ba8af82c6468a75eded1a433ef965a28be94d86b5c3a19d7ecfde12082b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div class=\"pagination_content\">
\t\t";
        // line 13
        $this->loadTemplate("BoAdvisorsBundle:Substitution:criteria.html.twig", "BoAdvisorsBundle:Substitution:index.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdvisorsBundle:Substitution:tbliste.html.twig", "BoAdvisorsBundle:Substitution:index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_3f48ba8af82c6468a75eded1a433ef965a28be94d86b5c3a19d7ecfde12082b1->leave($__internal_3f48ba8af82c6468a75eded1a433ef965a28be94d86b5c3a19d7ecfde12082b1_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8b50aadd5c1bbdbde3d852ba7271051e062a926ff5464bfb7eea362bffe91bb = $this->env->getExtension("native_profiler");
        $__internal_f8b50aadd5c1bbdbde3d852ba7271051e062a926ff5464bfb7eea362bffe91bb->enter($__internal_f8b50aadd5c1bbdbde3d852ba7271051e062a926ff5464bfb7eea362bffe91bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t\t<script>
\t\t\t\$(\".year\").change(function(){
\t\t\t\tvar str=\$(\".year option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("substitution_pagesearch");
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
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("substitution_search");
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
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f8b50aadd5c1bbdbde3d852ba7271051e062a926ff5464bfb7eea362bffe91bb->leave($__internal_f8b50aadd5c1bbdbde3d852ba7271051e062a926ff5464bfb7eea362bffe91bb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Substitution:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 58,  188 => 48,  178 => 41,  160 => 26,  151 => 19,  139 => 18,  136 => 17,  134 => 16,  130 => 14,  128 => 13,  125 => 12,  119 => 11,  109 => 9,  103 => 8,  87 => 7,  76 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.substitution'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.substitution'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Substitution:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdvisorsBundle:Substitution:criteria.html.twig' %}*/
/* 	</div>*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Substitution:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(".year").change(function(){*/
/* 				var str=$(".year option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('substitution_pagesearch')}}",*/
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
/* 					url: "{{ path('substitution_search')}}",*/
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
