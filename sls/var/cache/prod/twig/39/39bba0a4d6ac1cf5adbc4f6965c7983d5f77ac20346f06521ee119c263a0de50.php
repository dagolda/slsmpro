<?php

/* BoHomeBundle:Substitution:index.html.twig */
class __TwigTemplate_3efbbad070af07818775f47e4c6e45459cd066ef3ff27b2a6e3e64cbb6ed24f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Substitution:index.html.twig", 1);
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
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_060e54398d53aa355d2adb19fce6e28b984f46416b0ecda6d4d87aae15713b28 = $this->env->getExtension("native_profiler");
        $__internal_060e54398d53aa355d2adb19fce6e28b984f46416b0ecda6d4d87aae15713b28->enter($__internal_060e54398d53aa355d2adb19fce6e28b984f46416b0ecda6d4d87aae15713b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Substitution:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060e54398d53aa355d2adb19fce6e28b984f46416b0ecda6d4d87aae15713b28->leave($__internal_060e54398d53aa355d2adb19fce6e28b984f46416b0ecda6d4d87aae15713b28_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_69e6e6dbf10444e36ccaca3225a47926e56a22f7396a3ebedc3f975903bbbd7e = $this->env->getExtension("native_profiler");
        $__internal_69e6e6dbf10444e36ccaca3225a47926e56a22f7396a3ebedc3f975903bbbd7e->enter($__internal_69e6e6dbf10444e36ccaca3225a47926e56a22f7396a3ebedc3f975903bbbd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_69e6e6dbf10444e36ccaca3225a47926e56a22f7396a3ebedc3f975903bbbd7e->leave($__internal_69e6e6dbf10444e36ccaca3225a47926e56a22f7396a3ebedc3f975903bbbd7e_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0f27e48f157b175cd1d116c8702db66d1fe8644dc311c53d10c49931057b1a81 = $this->env->getExtension("native_profiler");
        $__internal_0f27e48f157b175cd1d116c8702db66d1fe8644dc311c53d10c49931057b1a81->enter($__internal_0f27e48f157b175cd1d116c8702db66d1fe8644dc311c53d10c49931057b1a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:contract.html.twig", "BoHomeBundle:Substitution:index.html.twig", 3)->display($context);
        
        $__internal_0f27e48f157b175cd1d116c8702db66d1fe8644dc311c53d10c49931057b1a81->leave($__internal_0f27e48f157b175cd1d116c8702db66d1fe8644dc311c53d10c49931057b1a81_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f042b7a7b0956a71b883692f14f0c474db0b430550e3fef123f1fd73011417a0 = $this->env->getExtension("native_profiler");
        $__internal_f042b7a7b0956a71b883692f14f0c474db0b430550e3fef123f1fd73011417a0->enter($__internal_f042b7a7b0956a71b883692f14f0c474db0b430550e3fef123f1fd73011417a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Substitution:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_f042b7a7b0956a71b883692f14f0c474db0b430550e3fef123f1fd73011417a0->leave($__internal_f042b7a7b0956a71b883692f14f0c474db0b430550e3fef123f1fd73011417a0_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_134e29fb601533efbece9aa1b4fb182ca08a71809363f96e0be714ff55f2e978 = $this->env->getExtension("native_profiler");
        $__internal_134e29fb601533efbece9aa1b4fb182ca08a71809363f96e0be714ff55f2e978->enter($__internal_134e29fb601533efbece9aa1b4fb182ca08a71809363f96e0be714ff55f2e978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_134e29fb601533efbece9aa1b4fb182ca08a71809363f96e0be714ff55f2e978->leave($__internal_134e29fb601533efbece9aa1b4fb182ca08a71809363f96e0be714ff55f2e978_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ceccb04ee40cbbd0499ed8a20ef90e350166027969cff4184ba76c145ed60765 = $this->env->getExtension("native_profiler");
        $__internal_ceccb04ee40cbbd0499ed8a20ef90e350166027969cff4184ba76c145ed60765->enter($__internal_ceccb04ee40cbbd0499ed8a20ef90e350166027969cff4184ba76c145ed60765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Substitution:actions.html.twig", "BoHomeBundle:Substitution:index.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_ceccb04ee40cbbd0499ed8a20ef90e350166027969cff4184ba76c145ed60765->leave($__internal_ceccb04ee40cbbd0499ed8a20ef90e350166027969cff4184ba76c145ed60765_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe0a8d475f01e6c6b383aaecf43b92bbe2ec05225936292f002c97e56f15e10 = $this->env->getExtension("native_profiler");
        $__internal_fbe0a8d475f01e6c6b383aaecf43b92bbe2ec05225936292f002c97e56f15e10->enter($__internal_fbe0a8d475f01e6c6b383aaecf43b92bbe2ec05225936292f002c97e56f15e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div class=\"pagination_content\">
\t\t";
        // line 13
        $this->loadTemplate("BoHomeBundle:Substitution:criteria.html.twig", "BoHomeBundle:Substitution:index.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoHomeBundle:Substitution:tbliste.html.twig", "BoHomeBundle:Substitution:index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_fbe0a8d475f01e6c6b383aaecf43b92bbe2ec05225936292f002c97e56f15e10->leave($__internal_fbe0a8d475f01e6c6b383aaecf43b92bbe2ec05225936292f002c97e56f15e10_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6e25a793246617fb960ef0cf09a285d5135d647559d2043fc911a26deb522d1 = $this->env->getExtension("native_profiler");
        $__internal_c6e25a793246617fb960ef0cf09a285d5135d647559d2043fc911a26deb522d1->enter($__internal_c6e25a793246617fb960ef0cf09a285d5135d647559d2043fc911a26deb522d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c6e25a793246617fb960ef0cf09a285d5135d647559d2043fc911a26deb522d1->leave($__internal_c6e25a793246617fb960ef0cf09a285d5135d647559d2043fc911a26deb522d1_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Substitution:index.html.twig";
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
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.contracts'|trans([],'BoAdminBundle')}} >> {{'entity.substitution'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:contract.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.contracts'|trans([],'BoAdminBundle')}} >> {{'entity.substitution'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Substitution:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoHomeBundle:Substitution:criteria.html.twig' %}*/
/* 	</div>*/
/* 	<div id="content-liste">*/
/* 		{%include "BoHomeBundle:Substitution:tbliste.html.twig"%}*/
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
