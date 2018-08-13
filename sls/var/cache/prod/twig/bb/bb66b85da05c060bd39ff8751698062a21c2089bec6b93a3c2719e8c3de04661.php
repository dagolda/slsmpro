<?php

/* profil/show.html.twig */
class __TwigTemplate_a25b7a45bee52359164bce867f0f206902143b65286cd4996604734ea265d864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profil/show.html.twig", 1);
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
        $__internal_f51dbab9233aabc3de4799897b358449f181f58472c67a7cba643ab52dd7942f = $this->env->getExtension("native_profiler");
        $__internal_f51dbab9233aabc3de4799897b358449f181f58472c67a7cba643ab52dd7942f->enter($__internal_f51dbab9233aabc3de4799897b358449f181f58472c67a7cba643ab52dd7942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51dbab9233aabc3de4799897b358449f181f58472c67a7cba643ab52dd7942f->leave($__internal_f51dbab9233aabc3de4799897b358449f181f58472c67a7cba643ab52dd7942f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe622a461dccab5596c53ae7ee677191f7a54c62d487cf21204306ef229899f2 = $this->env->getExtension("native_profiler");
        $__internal_fe622a461dccab5596c53ae7ee677191f7a54c62d487cf21204306ef229899f2->enter($__internal_fe622a461dccab5596c53ae7ee677191f7a54c62d487cf21204306ef229899f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.profile", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_fe622a461dccab5596c53ae7ee677191f7a54c62d487cf21204306ef229899f2->leave($__internal_fe622a461dccab5596c53ae7ee677191f7a54c62d487cf21204306ef229899f2_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d8ebc2917ab07f2493760bcba0a692367bcfc374b420ae9b1ab2443f89d1aac2 = $this->env->getExtension("native_profiler");
        $__internal_d8ebc2917ab07f2493760bcba0a692367bcfc374b420ae9b1ab2443f89d1aac2->enter($__internal_d8ebc2917ab07f2493760bcba0a692367bcfc374b420ae9b1ab2443f89d1aac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "profil/show.html.twig", 3)->display($context);
        
        $__internal_d8ebc2917ab07f2493760bcba0a692367bcfc374b420ae9b1ab2443f89d1aac2->leave($__internal_d8ebc2917ab07f2493760bcba0a692367bcfc374b420ae9b1ab2443f89d1aac2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_42a58f8adc92fb8b6b1f4b8ab91ff5d0f7f9740fa86e0ba80d2f4e751d9ae773 = $this->env->getExtension("native_profiler");
        $__internal_42a58f8adc92fb8b6b1f4b8ab91ff5d0f7f9740fa86e0ba80d2f4e751d9ae773->enter($__internal_42a58f8adc92fb8b6b1f4b8ab91ff5d0f7f9740fa86e0ba80d2f4e751d9ae773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_42a58f8adc92fb8b6b1f4b8ab91ff5d0f7f9740fa86e0ba80d2f4e751d9ae773->leave($__internal_42a58f8adc92fb8b6b1f4b8ab91ff5d0f7f9740fa86e0ba80d2f4e751d9ae773_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_b55159affa50eca3fc3e58fc0fcc494d843943453ae143708f3207c9b0fd1932 = $this->env->getExtension("native_profiler");
        $__internal_b55159affa50eca3fc3e58fc0fcc494d843943453ae143708f3207c9b0fd1932->enter($__internal_b55159affa50eca3fc3e58fc0fcc494d843943453ae143708f3207c9b0fd1932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.profile", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "name", array()), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b55159affa50eca3fc3e58fc0fcc494d843943453ae143708f3207c9b0fd1932->leave($__internal_b55159affa50eca3fc3e58fc0fcc494d843943453ae143708f3207c9b0fd1932_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_35671bfcc68367175b07a68d387a379ef27759970ab33f51fcc52092b916ac8b = $this->env->getExtension("native_profiler");
        $__internal_35671bfcc68367175b07a68d387a379ef27759970ab33f51fcc52092b916ac8b->enter($__internal_35671bfcc68367175b07a68d387a379ef27759970ab33f51fcc52092b916ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Profil:showactions.html.twig", "profil/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.right", array(), "BoAdminBundle"), "html", null, true);
        echo "s</legend>
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Profil:rights.html.twig", "profil/show.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t<input type=\"hidden\" id=\"idprofil\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()), "html", null, true);
        echo "\"/>
\t\t</div>
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employees", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Profil:employee.html.twig", "profil/show.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t<input type=\"hidden\" id=\"idprofil\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()), "html", null, true);
        echo "\"/>
\t\t</div>
\t</div>
\t
\t<!-- begin add right creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_right\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.right", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rights_add", array("idprofil" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdminBundle:Profil:addrightform.html.twig", "profil/show.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end Training creation form by modal dialog-->
\t
\t";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_35671bfcc68367175b07a68d387a379ef27759970ab33f51fcc52092b916ac8b->leave($__internal_35671bfcc68367175b07a68d387a379ef27759970ab33f51fcc52092b916ac8b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acba7e48862579281134162c5b0a443c7378d3afe2e3b7b3034b9c67d17c6667 = $this->env->getExtension("native_profiler");
        $__internal_acba7e48862579281134162c5b0a443c7378d3afe2e3b7b3034b9c67d17c6667->enter($__internal_acba7e48862579281134162c5b0a443c7378d3afe2e3b7b3034b9c67d17c6667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t\t<script>
\t\t\t\$(\".idrubric\").change(function(){
\t\t\t\t\$('.select_srubric').html(\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' />\");
\t\t\t\tvar str=\$(\".idrubric option:selected\");
\t\t\t\trubric=str.val();
\t\t\t\tvar profil = \$(\"#idprofil\").val();\t
\t\t\t\tvar DATA = 'data='+rubric+\":\"+profil;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("rights_srubric_load");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.select_srubric').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idsrubric\").change(function(){
\t\t\t\tvar str=\$(\"#idsrubric option:selected\");
\t\t\t\tsrubric=str.val();
\t\t\t\talert(srubric);
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_acba7e48862579281134162c5b0a443c7378d3afe2e3b7b3034b9c67d17c6667->leave($__internal_acba7e48862579281134162c5b0a443c7378d3afe2e3b7b3034b9c67d17c6667_prof);

    }

    public function getTemplateName()
    {
        return "profil/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 77,  232 => 76,  213 => 60,  201 => 53,  197 => 51,  185 => 50,  172 => 40,  165 => 37,  163 => 36,  159 => 35,  154 => 33,  147 => 31,  129 => 17,  127 => 16,  123 => 15,  116 => 12,  114 => 11,  110 => 10,  107 => 9,  105 => 8,  102 => 7,  96 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.profile'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.profile'|trans([],'BoAdminBundle')}} {{profil.name}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Profil:showactions.html.twig"%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.right'|trans([],'BoAdminBundle')}}s</legend>*/
/* 			{%include "BoAdminBundle:Profil:rights.html.twig"%}*/
/* 			<input type="hidden" id="idprofil" value="{{profil.id}}"/>*/
/* 		</div>*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.employees'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Profil:employee.html.twig"%}*/
/* 			<input type="hidden" id="idprofil" value="{{profil.id}}"/>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add right creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_right" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.right'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('rights_add', { 'idprofil': profil.id }) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(right_form) }}*/
/* 						{%include "BoAdminBundle:Profil:addrightform.html.twig"%}*/
/* 					{{ form_rest(right_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end Training creation form by modal dialog-->*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(".idrubric").change(function(){*/
/* 				$('.select_srubric').html("{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' />");*/
/* 				var str=$(".idrubric option:selected");*/
/* 				rubric=str.val();*/
/* 				var profil = $("#idprofil").val();	*/
/* 				var DATA = 'data='+rubric+":"+profil;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('rights_srubric_load')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.select_srubric').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idsrubric").change(function(){*/
/* 				var str=$("#idsrubric option:selected");*/
/* 				srubric=str.val();*/
/* 				alert(srubric);*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
