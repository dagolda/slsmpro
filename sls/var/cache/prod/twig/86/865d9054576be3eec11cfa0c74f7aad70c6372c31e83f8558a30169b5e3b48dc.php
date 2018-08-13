<?php

/* BoHomeBundle:Default:teamcontact.html.twig */
class __TwigTemplate_7cea3c065dcb0adcfc346b9b43fd66d88226ff0482309d506377288f7df86dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Default:teamcontact.html.twig", 1);
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
        $__internal_7e0041c97303bb4596abd62e04861bf6468b2b4359deff763c498be8a771d36a = $this->env->getExtension("native_profiler");
        $__internal_7e0041c97303bb4596abd62e04861bf6468b2b4359deff763c498be8a771d36a->enter($__internal_7e0041c97303bb4596abd62e04861bf6468b2b4359deff763c498be8a771d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:teamcontact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0041c97303bb4596abd62e04861bf6468b2b4359deff763c498be8a771d36a->leave($__internal_7e0041c97303bb4596abd62e04861bf6468b2b4359deff763c498be8a771d36a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e91fa2184af9153291915549202916e61f88aba73461db9cfbd92054a48643b7 = $this->env->getExtension("native_profiler");
        $__internal_e91fa2184af9153291915549202916e61f88aba73461db9cfbd92054a48643b7->enter($__internal_e91fa2184af9153291915549202916e61f88aba73461db9cfbd92054a48643b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontact", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e91fa2184af9153291915549202916e61f88aba73461db9cfbd92054a48643b7->leave($__internal_e91fa2184af9153291915549202916e61f88aba73461db9cfbd92054a48643b7_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b70db577afda111c9e37d67bd637cc1d495d24e4e02282dc893643e262cd3404 = $this->env->getExtension("native_profiler");
        $__internal_b70db577afda111c9e37d67bd637cc1d495d24e4e02282dc893643e262cd3404->enter($__internal_b70db577afda111c9e37d67bd637cc1d495d24e4e02282dc893643e262cd3404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:tdb.html.twig", "BoHomeBundle:Default:teamcontact.html.twig", 3)->display($context);
        
        $__internal_b70db577afda111c9e37d67bd637cc1d495d24e4e02282dc893643e262cd3404->leave($__internal_b70db577afda111c9e37d67bd637cc1d495d24e4e02282dc893643e262cd3404_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e2614a1006e2171185a2b4664348d47f88ea05dc0b35fdf0dbd6a44ef9912ae9 = $this->env->getExtension("native_profiler");
        $__internal_e2614a1006e2171185a2b4664348d47f88ea05dc0b35fdf0dbd6a44ef9912ae9->enter($__internal_e2614a1006e2171185a2b4664348d47f88ea05dc0b35fdf0dbd6a44ef9912ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Default:teamcontact.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_e2614a1006e2171185a2b4664348d47f88ea05dc0b35fdf0dbd6a44ef9912ae9->leave($__internal_e2614a1006e2171185a2b4664348d47f88ea05dc0b35fdf0dbd6a44ef9912ae9_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_52de8c5d05762206e7a62fa16137bc8876936da1bfa36f84ee163a55020ebd14 = $this->env->getExtension("native_profiler");
        $__internal_52de8c5d05762206e7a62fa16137bc8876936da1bfa36f84ee163a55020ebd14->enter($__internal_52de8c5d05762206e7a62fa16137bc8876936da1bfa36f84ee163a55020ebd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_52de8c5d05762206e7a62fa16137bc8876936da1bfa36f84ee163a55020ebd14->leave($__internal_52de8c5d05762206e7a62fa16137bc8876936da1bfa36f84ee163a55020ebd14_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_465df1442115d5ecb2ab31971fff550c7604a2918d32d48595224e2439676725 = $this->env->getExtension("native_profiler");
        $__internal_465df1442115d5ecb2ab31971fff550c7604a2918d32d48595224e2439676725->enter($__internal_465df1442115d5ecb2ab31971fff550c7604a2918d32d48595224e2439676725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Default:contactaction.html.twig", "BoHomeBundle:Default:teamcontact.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_465df1442115d5ecb2ab31971fff550c7604a2918d32d48595224e2439676725->leave($__internal_465df1442115d5ecb2ab31971fff550c7604a2918d32d48595224e2439676725_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4146841bf5ef4b54f7a8aee055626d77a0abbd4241807a5b3b824a616f962019 = $this->env->getExtension("native_profiler");
        $__internal_4146841bf5ef4b54f7a8aee055626d77a0abbd4241807a5b3b824a616f962019->enter($__internal_4146841bf5ef4b54f7a8aee055626d77a0abbd4241807a5b3b824a616f962019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div class=\"home-content\">
\t\t<div id=\"content-liste\">
\t\t\t";
        // line 14
        $this->loadTemplate("BoStudentBundle:Default:tblistcontact.html.twig", "BoHomeBundle:Default:teamcontact.html.twig", 14)->display($context);
        // line 15
        echo "\t\t</div>
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4146841bf5ef4b54f7a8aee055626d77a0abbd4241807a5b3b824a616f962019->leave($__internal_4146841bf5ef4b54f7a8aee055626d77a0abbd4241807a5b3b824a616f962019_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00553c21da682ab73a72d8e9b41e122befacd2337558f42c9e5a29a388977021 = $this->env->getExtension("native_profiler");
        $__internal_00553c21da682ab73a72d8e9b41e122befacd2337558f42c9e5a29a388977021->enter($__internal_00553c21da682ab73a72d8e9b41e122befacd2337558f42c9e5a29a388977021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_00553c21da682ab73a72d8e9b41e122befacd2337558f42c9e5a29a388977021->leave($__internal_00553c21da682ab73a72d8e9b41e122befacd2337558f42c9e5a29a388977021_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:teamcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 40,  166 => 30,  156 => 25,  147 => 18,  135 => 17,  131 => 15,  129 => 14,  125 => 12,  119 => 11,  109 => 9,  103 => 8,  87 => 7,  76 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.teamcontact'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.teamcontact'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Default:contactaction.html.twig"%}					*/
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
