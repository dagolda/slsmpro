<?php

/* contracts/substitute.html.twig */
class __TwigTemplate_f6e81fb114223a726cb1bfcf64c570364319f99e9e9c51765333b762f33aa140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contracts/substitute.html.twig", 1);
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
        $__internal_09a438b3a56f99ae6694b9bc1ad27c7bf7e14c863da5c3fca843d33751c1acef = $this->env->getExtension("native_profiler");
        $__internal_09a438b3a56f99ae6694b9bc1ad27c7bf7e14c863da5c3fca843d33751c1acef->enter($__internal_09a438b3a56f99ae6694b9bc1ad27c7bf7e14c863da5c3fca843d33751c1acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/substitute.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a438b3a56f99ae6694b9bc1ad27c7bf7e14c863da5c3fca843d33751c1acef->leave($__internal_09a438b3a56f99ae6694b9bc1ad27c7bf7e14c863da5c3fca843d33751c1acef_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_816fdf5e9768100836ea03a07eb2a664dc967d0f3c30e0edcafb6ca531951626 = $this->env->getExtension("native_profiler");
        $__internal_816fdf5e9768100836ea03a07eb2a664dc967d0f3c30e0edcafb6ca531951626->enter($__internal_816fdf5e9768100836ea03a07eb2a664dc967d0f3c30e0edcafb6ca531951626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_816fdf5e9768100836ea03a07eb2a664dc967d0f3c30e0edcafb6ca531951626->leave($__internal_816fdf5e9768100836ea03a07eb2a664dc967d0f3c30e0edcafb6ca531951626_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_73f8d33fe40e5f5a5c707a93166dbd60f69e6d2374a95fe3ac49f011de19eb34 = $this->env->getExtension("native_profiler");
        $__internal_73f8d33fe40e5f5a5c707a93166dbd60f69e6d2374a95fe3ac49f011de19eb34->enter($__internal_73f8d33fe40e5f5a5c707a93166dbd60f69e6d2374a95fe3ac49f011de19eb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "contracts/substitute.html.twig", 3)->display($context);
        
        $__internal_73f8d33fe40e5f5a5c707a93166dbd60f69e6d2374a95fe3ac49f011de19eb34->leave($__internal_73f8d33fe40e5f5a5c707a93166dbd60f69e6d2374a95fe3ac49f011de19eb34_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_df8c7fc9ff56628469977e2e2a35e54e3c971cd0bedd1889cac36b6cb4d90dbb = $this->env->getExtension("native_profiler");
        $__internal_df8c7fc9ff56628469977e2e2a35e54e3c971cd0bedd1889cac36b6cb4d90dbb->enter($__internal_df8c7fc9ff56628469977e2e2a35e54e3c971cd0bedd1889cac36b6cb4d90dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_df8c7fc9ff56628469977e2e2a35e54e3c971cd0bedd1889cac36b6cb4d90dbb->leave($__internal_df8c7fc9ff56628469977e2e2a35e54e3c971cd0bedd1889cac36b6cb4d90dbb_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_1873cb86ac86e3e1d8b7205bb672eb7605f2631bc1c53a87389870eabc2ef1f0 = $this->env->getExtension("native_profiler");
        $__internal_1873cb86ac86e3e1d8b7205bb672eb7605f2631bc1c53a87389870eabc2ef1f0->enter($__internal_1873cb86ac86e3e1d8b7205bb672eb7605f2631bc1c53a87389870eabc2ef1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_1873cb86ac86e3e1d8b7205bb672eb7605f2631bc1c53a87389870eabc2ef1f0->leave($__internal_1873cb86ac86e3e1d8b7205bb672eb7605f2631bc1c53a87389870eabc2ef1f0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_75338b2cc34dc8333c8bedfabdc91b5e78fe4256c1ed2a732a1d0225a0a0c838 = $this->env->getExtension("native_profiler");
        $__internal_75338b2cc34dc8333c8bedfabdc91b5e78fe4256c1ed2a732a1d0225a0a0c838->enter($__internal_75338b2cc34dc8333c8bedfabdc91b5e78fe4256c1ed2a732a1d0225a0a0c838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_substitution_new", array("idagenda" => $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Contracts:substituteaction.html.twig", "contracts/substitute.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Substitution:contract.html.twig", "contracts/substitute.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Contracts:substitutionform.html.twig", "contracts/substitute.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t</div>
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_75338b2cc34dc8333c8bedfabdc91b5e78fe4256c1ed2a732a1d0225a0a0c838->leave($__internal_75338b2cc34dc8333c8bedfabdc91b5e78fe4256c1ed2a732a1d0225a0a0c838_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_475ba24962beaf80e93c75aead563a60b0f2de62b6d224ffa67dd8ad6eb42554 = $this->env->getExtension("native_profiler");
        $__internal_475ba24962beaf80e93c75aead563a60b0f2de62b6d224ffa67dd8ad6eb42554->enter($__internal_475ba24962beaf80e93c75aead563a60b0f2de62b6d224ffa67dd8ad6eb42554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t<script>
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
\t\t\t\tvar obj = \$(\"#idcontract\");
\t\t\t\tidcontract = obj.val();
\t\t\t\tvar DATA = 'data='+holders+\"-\"+idcontract;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 33
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
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_475ba24962beaf80e93c75aead563a60b0f2de62b6d224ffa67dd8ad6eb42554->leave($__internal_475ba24962beaf80e93c75aead563a60b0f2de62b6d224ffa67dd8ad6eb42554_prof);

    }

    public function getTemplateName()
    {
        return "contracts/substitute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 58,  167 => 33,  154 => 25,  149 => 22,  137 => 21,  131 => 18,  128 => 17,  126 => 16,  122 => 14,  120 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('contracts_substitution_new',{'idagenda':agenda.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(substitution_form) }}*/
/* 			{%include "BoAdminBundle:Contracts:substituteaction.html.twig"%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'entity.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Substitution:contract.html.twig"%}*/
/* 			</div>*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Contracts:substitutionform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(substitution_form) }}*/
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
