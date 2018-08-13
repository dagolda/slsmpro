<?php

/* employee/editabsence.html.twig */
class __TwigTemplate_188922509cadabc92906aa7ed8cff1a48b365f50195d4dc559c2cd667dedc2ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/editabsence.html.twig", 1);
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
        $__internal_02fbe20b3d8b0fc5a0c3953d1b4dc1048d64e5dbfc2225325881ce57b36c19f5 = $this->env->getExtension("native_profiler");
        $__internal_02fbe20b3d8b0fc5a0c3953d1b4dc1048d64e5dbfc2225325881ce57b36c19f5->enter($__internal_02fbe20b3d8b0fc5a0c3953d1b4dc1048d64e5dbfc2225325881ce57b36c19f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/editabsence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02fbe20b3d8b0fc5a0c3953d1b4dc1048d64e5dbfc2225325881ce57b36c19f5->leave($__internal_02fbe20b3d8b0fc5a0c3953d1b4dc1048d64e5dbfc2225325881ce57b36c19f5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ede388f5cb6419799256aba8ff576d926326b165861f98240c071daa25c42fc = $this->env->getExtension("native_profiler");
        $__internal_3ede388f5cb6419799256aba8ff576d926326b165861f98240c071daa25c42fc->enter($__internal_3ede388f5cb6419799256aba8ff576d926326b165861f98240c071daa25c42fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3ede388f5cb6419799256aba8ff576d926326b165861f98240c071daa25c42fc->leave($__internal_3ede388f5cb6419799256aba8ff576d926326b165861f98240c071daa25c42fc_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0dad51a7510680d73e8b4e48292bcba28c8aec0d95aef1f2df29ecf382892387 = $this->env->getExtension("native_profiler");
        $__internal_0dad51a7510680d73e8b4e48292bcba28c8aec0d95aef1f2df29ecf382892387->enter($__internal_0dad51a7510680d73e8b4e48292bcba28c8aec0d95aef1f2df29ecf382892387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/editabsence.html.twig", 3)->display($context);
        
        $__internal_0dad51a7510680d73e8b4e48292bcba28c8aec0d95aef1f2df29ecf382892387->leave($__internal_0dad51a7510680d73e8b4e48292bcba28c8aec0d95aef1f2df29ecf382892387_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_15cdd32f162ae0fa84d3e120ebb333f9f8c47c96b8acec209753702e5847eae8 = $this->env->getExtension("native_profiler");
        $__internal_15cdd32f162ae0fa84d3e120ebb333f9f8c47c96b8acec209753702e5847eae8->enter($__internal_15cdd32f162ae0fa84d3e120ebb333f9f8c47c96b8acec209753702e5847eae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "employee/editabsence.html.twig", 4)->display($context);
        
        $__internal_15cdd32f162ae0fa84d3e120ebb333f9f8c47c96b8acec209753702e5847eae8->leave($__internal_15cdd32f162ae0fa84d3e120ebb333f9f8c47c96b8acec209753702e5847eae8_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_3ac3d16d477fdcf82f9f412a43c04e49ca8ed6afd6dca42580ea927a931ba9e9 = $this->env->getExtension("native_profiler");
        $__internal_3ac3d16d477fdcf82f9f412a43c04e49ca8ed6afd6dca42580ea927a931ba9e9->enter($__internal_3ac3d16d477fdcf82f9f412a43c04e49ca8ed6afd6dca42580ea927a931ba9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3ac3d16d477fdcf82f9f412a43c04e49ca8ed6afd6dca42580ea927a931ba9e9->leave($__internal_3ac3d16d477fdcf82f9f412a43c04e49ca8ed6afd6dca42580ea927a931ba9e9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_014ebac076648aa0b82fc2fc0e0922e1b1d7b0776c021a6269be4e6fa8832dec = $this->env->getExtension("native_profiler");
        $__internal_014ebac076648aa0b82fc2fc0e0922e1b1d7b0776c021a6269be4e6fa8832dec->enter($__internal_014ebac076648aa0b82fc2fc0e0922e1b1d7b0776c021a6269be4e6fa8832dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit_absence", array("id" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Employee:editabsenceactions.html.twig", "employee/editabsence.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Employee:absenceform.html.twig", "employee/editabsence.html.twig", 12)->display($context);
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
        
        $__internal_014ebac076648aa0b82fc2fc0e0922e1b1d7b0776c021a6269be4e6fa8832dec->leave($__internal_014ebac076648aa0b82fc2fc0e0922e1b1d7b0776c021a6269be4e6fa8832dec_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21402549c62cddf3b08faf0cbf20d46cf9477e91e9ece3c736c9f5e3064d1d44 = $this->env->getExtension("native_profiler");
        $__internal_21402549c62cddf3b08faf0cbf20d46cf9477e91e9ece3c736c9f5e3064d1d44->enter($__internal_21402549c62cddf3b08faf0cbf20d46cf9477e91e9ece3c736c9f5e3064d1d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script>\t
\t\t\t\$(\".amorpm\").change(function(){
\t\t\t\tvar str=\$(\".amorpm input:checked\");
\t\t\t\tamorpm=str.val();
\t\t\t\tif(amorpm==\"AM\" || amorpm==\"PM\"){
\t\t\t\t\t\$(\".numberday\").val(0.5);
\t\t\t\t}else{
\t\t\t\t\t\$(\".numberday\").val(1);
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_21402549c62cddf3b08faf0cbf20d46cf9477e91e9ece3c736c9f5e3064d1d44->leave($__internal_21402549c62cddf3b08faf0cbf20d46cf9477e91e9ece3c736c9f5e3064d1d44_prof);

    }

    public function getTemplateName()
    {
        return "employee/editabsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 56,  199 => 55,  185 => 43,  173 => 42,  162 => 34,  158 => 33,  154 => 32,  148 => 29,  142 => 26,  127 => 14,  124 => 13,  122 => 12,  119 => 11,  117 => 10,  113 => 9,  109 => 8,  106 => 7,  100 => 6,  82 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('employee_edit_absence',{'id':absence.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(absence_form) }}*/
/* 			{%include "BoAdminBundle:Employee:editabsenceactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Employee:absenceform.html.twig"%}*/
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
/* 		<script>	*/
/* 			$(".amorpm").change(function(){*/
/* 				var str=$(".amorpm input:checked");*/
/* 				amorpm=str.val();*/
/* 				if(amorpm=="AM" || amorpm=="PM"){*/
/* 					$(".numberday").val(0.5);*/
/* 				}else{*/
/* 					$(".numberday").val(1);*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
