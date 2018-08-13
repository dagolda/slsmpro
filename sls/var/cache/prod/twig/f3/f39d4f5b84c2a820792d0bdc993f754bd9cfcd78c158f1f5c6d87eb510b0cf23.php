<?php

/* absences/editforemployee.html.twig */
class __TwigTemplate_935cb8786fb930028deb73ca3a146f4045a10084453167ab1525353d5ab94296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absences/editforemployee.html.twig", 1);
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
        $__internal_c5fd3a8f8f285ea0b3b75392a483a72dc5eedb3ed4205219ab0e3eb1d8983ae4 = $this->env->getExtension("native_profiler");
        $__internal_c5fd3a8f8f285ea0b3b75392a483a72dc5eedb3ed4205219ab0e3eb1d8983ae4->enter($__internal_c5fd3a8f8f285ea0b3b75392a483a72dc5eedb3ed4205219ab0e3eb1d8983ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absences/editforemployee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5fd3a8f8f285ea0b3b75392a483a72dc5eedb3ed4205219ab0e3eb1d8983ae4->leave($__internal_c5fd3a8f8f285ea0b3b75392a483a72dc5eedb3ed4205219ab0e3eb1d8983ae4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9809dcfb0fbac7ff02e2c70ddb2cddddc3b485218eed36210101457d292d20bf = $this->env->getExtension("native_profiler");
        $__internal_9809dcfb0fbac7ff02e2c70ddb2cddddc3b485218eed36210101457d292d20bf->enter($__internal_9809dcfb0fbac7ff02e2c70ddb2cddddc3b485218eed36210101457d292d20bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9809dcfb0fbac7ff02e2c70ddb2cddddc3b485218eed36210101457d292d20bf->leave($__internal_9809dcfb0fbac7ff02e2c70ddb2cddddc3b485218eed36210101457d292d20bf_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_31ed5eab9fbc8c07cdc1ad30c2aa2fd9537eb1f4985302670cc93a15b75c2936 = $this->env->getExtension("native_profiler");
        $__internal_31ed5eab9fbc8c07cdc1ad30c2aa2fd9537eb1f4985302670cc93a15b75c2936->enter($__internal_31ed5eab9fbc8c07cdc1ad30c2aa2fd9537eb1f4985302670cc93a15b75c2936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "absences/editforemployee.html.twig", 3)->display($context);
        
        $__internal_31ed5eab9fbc8c07cdc1ad30c2aa2fd9537eb1f4985302670cc93a15b75c2936->leave($__internal_31ed5eab9fbc8c07cdc1ad30c2aa2fd9537eb1f4985302670cc93a15b75c2936_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_69259ba5128c9c501c921ec7862e9a40aa1ab8ed6fc3b99751c7f0f9f4130866 = $this->env->getExtension("native_profiler");
        $__internal_69259ba5128c9c501c921ec7862e9a40aa1ab8ed6fc3b99751c7f0f9f4130866->enter($__internal_69259ba5128c9c501c921ec7862e9a40aa1ab8ed6fc3b99751c7f0f9f4130866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "absences/editforemployee.html.twig", 4)->display($context);
        
        $__internal_69259ba5128c9c501c921ec7862e9a40aa1ab8ed6fc3b99751c7f0f9f4130866->leave($__internal_69259ba5128c9c501c921ec7862e9a40aa1ab8ed6fc3b99751c7f0f9f4130866_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_52585dd0c13bc0aeedf4b87708908a735ba344e5b6c988260c3b61e74e98ab69 = $this->env->getExtension("native_profiler");
        $__internal_52585dd0c13bc0aeedf4b87708908a735ba344e5b6c988260c3b61e74e98ab69->enter($__internal_52585dd0c13bc0aeedf4b87708908a735ba344e5b6c988260c3b61e74e98ab69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_52585dd0c13bc0aeedf4b87708908a735ba344e5b6c988260c3b61e74e98ab69->leave($__internal_52585dd0c13bc0aeedf4b87708908a735ba344e5b6c988260c3b61e74e98ab69_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_af38c402b602189f071dbb2bf2e3ac997af43f4f57fb535ce3ac5503997730da = $this->env->getExtension("native_profiler");
        $__internal_af38c402b602189f071dbb2bf2e3ac997af43f4f57fb535ce3ac5503997730da->enter($__internal_af38c402b602189f071dbb2bf2e3ac997af43f4f57fb535ce3ac5503997730da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absences_employee_edit", array("id" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Absences:editforempactions.html.twig", "absences/editforemployee.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Absences:employeeform.html.twig", "absences/editforemployee.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_af38c402b602189f071dbb2bf2e3ac997af43f4f57fb535ce3ac5503997730da->leave($__internal_af38c402b602189f071dbb2bf2e3ac997af43f4f57fb535ce3ac5503997730da_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bdb741ceccaca958f3347b4920229ab010c4117db39a521a3285126a65926ef = $this->env->getExtension("native_profiler");
        $__internal_7bdb741ceccaca958f3347b4920229ab010c4117db39a521a3285126a65926ef->enter($__internal_7bdb741ceccaca958f3347b4920229ab010c4117db39a521a3285126a65926ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script>
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\".abstart\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});\t
\t\t\t\$(\".abend\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_7bdb741ceccaca958f3347b4920229ab010c4117db39a521a3285126a65926ef->leave($__internal_7bdb741ceccaca958f3347b4920229ab010c4117db39a521a3285126a65926ef_prof);

    }

    public function getTemplateName()
    {
        return "absences/editforemployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 85,  228 => 84,  185 => 43,  173 => 42,  162 => 34,  158 => 33,  154 => 32,  148 => 29,  142 => 26,  127 => 14,  124 => 13,  122 => 12,  119 => 11,  117 => 10,  113 => 9,  109 => 8,  106 => 7,  100 => 6,  82 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('absences_employee_edit',{'id':absence.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(absence_form) }}*/
/* 			{%include "BoAdminBundle:Absences:editforempactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Absences:employeeform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(absence_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn-create").click(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$(".abstart").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});	*/
/* 			$(".abend").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
