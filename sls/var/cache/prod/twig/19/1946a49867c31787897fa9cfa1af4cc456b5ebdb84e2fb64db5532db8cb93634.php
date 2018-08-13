<?php

/* employee/new.html.twig */
class __TwigTemplate_5094954745ce9084eaebbc85a686b40d9148555797e387e5511f6b4dee03f2cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/new.html.twig", 1);
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
        $__internal_ec6a019ccdaeb139f7f7e345d31b65af1f87dc1369bd7a302b1df3759de0086e = $this->env->getExtension("native_profiler");
        $__internal_ec6a019ccdaeb139f7f7e345d31b65af1f87dc1369bd7a302b1df3759de0086e->enter($__internal_ec6a019ccdaeb139f7f7e345d31b65af1f87dc1369bd7a302b1df3759de0086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6a019ccdaeb139f7f7e345d31b65af1f87dc1369bd7a302b1df3759de0086e->leave($__internal_ec6a019ccdaeb139f7f7e345d31b65af1f87dc1369bd7a302b1df3759de0086e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78ea99ff924f53676f71e76c4af088ca36f720e6d4d020964b3171fae6c29555 = $this->env->getExtension("native_profiler");
        $__internal_78ea99ff924f53676f71e76c4af088ca36f720e6d4d020964b3171fae6c29555->enter($__internal_78ea99ff924f53676f71e76c4af088ca36f720e6d4d020964b3171fae6c29555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_78ea99ff924f53676f71e76c4af088ca36f720e6d4d020964b3171fae6c29555->leave($__internal_78ea99ff924f53676f71e76c4af088ca36f720e6d4d020964b3171fae6c29555_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_cd438d0c79f5da8c46e1e9329fff38eaa173f96919bc038a956cda9042c3b1b8 = $this->env->getExtension("native_profiler");
        $__internal_cd438d0c79f5da8c46e1e9329fff38eaa173f96919bc038a956cda9042c3b1b8->enter($__internal_cd438d0c79f5da8c46e1e9329fff38eaa173f96919bc038a956cda9042c3b1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/new.html.twig", 3)->display($context);
        
        $__internal_cd438d0c79f5da8c46e1e9329fff38eaa173f96919bc038a956cda9042c3b1b8->leave($__internal_cd438d0c79f5da8c46e1e9329fff38eaa173f96919bc038a956cda9042c3b1b8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_023ed0083de08f13648777126c4d456de30981660937f9c59f78b3ec1bebf9a5 = $this->env->getExtension("native_profiler");
        $__internal_023ed0083de08f13648777126c4d456de30981660937f9c59f78b3ec1bebf9a5->enter($__internal_023ed0083de08f13648777126c4d456de30981660937f9c59f78b3ec1bebf9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_023ed0083de08f13648777126c4d456de30981660937f9c59f78b3ec1bebf9a5->leave($__internal_023ed0083de08f13648777126c4d456de30981660937f9c59f78b3ec1bebf9a5_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ac6408855e60b45e08c99ade986c35c62ca4c76e433f4869b54f92a7d28e3044 = $this->env->getExtension("native_profiler");
        $__internal_ac6408855e60b45e08c99ade986c35c62ca4c76e433f4869b54f92a7d28e3044->enter($__internal_ac6408855e60b45e08c99ade986c35c62ca4c76e433f4869b54f92a7d28e3044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ac6408855e60b45e08c99ade986c35c62ca4c76e433f4869b54f92a7d28e3044->leave($__internal_ac6408855e60b45e08c99ade986c35c62ca4c76e433f4869b54f92a7d28e3044_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_38153b7075e3acd75f2874f540688bc9ed17e33d475cd7a7e3a62369d00aa656 = $this->env->getExtension("native_profiler");
        $__internal_38153b7075e3acd75f2874f540688bc9ed17e33d475cd7a7e3a62369d00aa656->enter($__internal_38153b7075e3acd75f2874f540688bc9ed17e33d475cd7a7e3a62369d00aa656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Employee:newactions.html.twig", "employee/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Employee:newform.html.twig", "employee/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_status\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addstatus", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("employee_create_status");
        echo "\" method=\"post\" class=\"style\">
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["status_form"]) ? $context["status_form"] : $this->getContext($context, "status_form")), 'errors');
        echo "
\t\t\t\t\t";
        // line 31
        $this->loadTemplate("BoAdminBundle:Employee:statusnewform.html.twig", "employee/new.html.twig", 31)->display($context);
        // line 32
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["status_form"]) ? $context["status_form"] : $this->getContext($context, "status_form")), 'rest');
        echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<input type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_category\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addcategory", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("employee_create_category");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["category_form"]) ? $context["category_form"] : $this->getContext($context, "category_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 58
        $this->loadTemplate("BoAdminBundle:Employee:categorynewform.html.twig", "employee/new.html.twig", 58)->display($context);
        // line 59
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["category_form"]) ? $context["category_form"] : $this->getContext($context, "category_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_language\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("employee_create_language");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["language_form"]) ? $context["language_form"] : $this->getContext($context, "language_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 85
        $this->loadTemplate("BoAdminBundle:Employee:languagenewform.html.twig", "employee/new.html.twig", 85)->display($context);
        // line 86
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["language_form"]) ? $context["language_form"] : $this->getContext($context, "language_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_38153b7075e3acd75f2874f540688bc9ed17e33d475cd7a7e3a62369d00aa656->leave($__internal_38153b7075e3acd75f2874f540688bc9ed17e33d475cd7a7e3a62369d00aa656_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6caab097fb64bfb63494d8d5e16b761cae8bf759a75462820670d3f7a71c7cd9 = $this->env->getExtension("native_profiler");
        $__internal_6caab097fb64bfb63494d8d5e16b761cae8bf759a75462820670d3f7a71c7cd9->enter($__internal_6caab097fb64bfb63494d8d5e16b761cae8bf759a75462820670d3f7a71c7cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_6caab097fb64bfb63494d8d5e16b761cae8bf759a75462820670d3f7a71c7cd9->leave($__internal_6caab097fb64bfb63494d8d5e16b761cae8bf759a75462820670d3f7a71c7cd9_prof);

    }

    public function getTemplateName()
    {
        return "employee/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 100,  271 => 99,  259 => 98,  247 => 89,  240 => 86,  238 => 85,  234 => 84,  229 => 82,  224 => 80,  203 => 62,  196 => 59,  194 => 58,  190 => 57,  185 => 55,  180 => 53,  159 => 35,  152 => 32,  150 => 31,  146 => 30,  141 => 28,  136 => 26,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('employee_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Employee:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Employee:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_status" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addstatus'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_create_status') }}" method="post" class="style">*/
/* 			<div class="modal-body">*/
/* 				{{ form_errors(status_form) }}*/
/* 					{%include "BoAdminBundle:Employee:statusnewform.html.twig"%}*/
/* 				{{ form_rest(status_form) }}*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 			</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_category" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addcategory'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_create_category') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(category_form) }}*/
/* 						{%include "BoAdminBundle:Employee:categorynewform.html.twig"%}*/
/* 					{{ form_rest(category_form) }}*/
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
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_language" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'title.add.language'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_create_language') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(language_form) }}*/
/* 						{%include "BoAdminBundle:Employee:languagenewform.html.twig"%}*/
/* 					{{ form_rest(language_form) }}*/
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
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
