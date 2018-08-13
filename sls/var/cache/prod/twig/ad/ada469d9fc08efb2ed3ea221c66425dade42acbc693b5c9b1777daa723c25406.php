<?php

/* group/show.html.twig */
class __TwigTemplate_da6b1d5eb2b30ed9397a9f784e3ca9d807e77cc1723e46baef57b945cdb1c20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "group/show.html.twig", 1);
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
        $__internal_9dca083b5a1cb55d9c6831836f51bc26772bb1d4c6cadd9310ce20fcd5e69fed = $this->env->getExtension("native_profiler");
        $__internal_9dca083b5a1cb55d9c6831836f51bc26772bb1d4c6cadd9310ce20fcd5e69fed->enter($__internal_9dca083b5a1cb55d9c6831836f51bc26772bb1d4c6cadd9310ce20fcd5e69fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dca083b5a1cb55d9c6831836f51bc26772bb1d4c6cadd9310ce20fcd5e69fed->leave($__internal_9dca083b5a1cb55d9c6831836f51bc26772bb1d4c6cadd9310ce20fcd5e69fed_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_541414cc08163ea801b781372a7d41d9411981cee3ac2b8af990e55707f7e0ad = $this->env->getExtension("native_profiler");
        $__internal_541414cc08163ea801b781372a7d41d9411981cee3ac2b8af990e55707f7e0ad->enter($__internal_541414cc08163ea801b781372a7d41d9411981cee3ac2b8af990e55707f7e0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_541414cc08163ea801b781372a7d41d9411981cee3ac2b8af990e55707f7e0ad->leave($__internal_541414cc08163ea801b781372a7d41d9411981cee3ac2b8af990e55707f7e0ad_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a1ec951832ada61f9d104bf25eca619a3c0a8efd75310fcaabd9cd16f09b3e2e = $this->env->getExtension("native_profiler");
        $__internal_a1ec951832ada61f9d104bf25eca619a3c0a8efd75310fcaabd9cd16f09b3e2e->enter($__internal_a1ec951832ada61f9d104bf25eca619a3c0a8efd75310fcaabd9cd16f09b3e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "group/show.html.twig", 3)->display($context);
        
        $__internal_a1ec951832ada61f9d104bf25eca619a3c0a8efd75310fcaabd9cd16f09b3e2e->leave($__internal_a1ec951832ada61f9d104bf25eca619a3c0a8efd75310fcaabd9cd16f09b3e2e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5c8c00e1c01d4280255ab80de02637a1f7815fd6b3edab5500a103f23d475953 = $this->env->getExtension("native_profiler");
        $__internal_5c8c00e1c01d4280255ab80de02637a1f7815fd6b3edab5500a103f23d475953->enter($__internal_5c8c00e1c01d4280255ab80de02637a1f7815fd6b3edab5500a103f23d475953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Group:rightshow.html.twig", "group/show.html.twig", 5)->display($context);
        
        $__internal_5c8c00e1c01d4280255ab80de02637a1f7815fd6b3edab5500a103f23d475953->leave($__internal_5c8c00e1c01d4280255ab80de02637a1f7815fd6b3edab5500a103f23d475953_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_73a746aa309399d54512cd9f5436f97db7433b5cc93eb2c064db4ce855366792 = $this->env->getExtension("native_profiler");
        $__internal_73a746aa309399d54512cd9f5436f97db7433b5cc93eb2c064db4ce855366792->enter($__internal_73a746aa309399d54512cd9f5436f97db7433b5cc93eb2c064db4ce855366792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_73a746aa309399d54512cd9f5436f97db7433b5cc93eb2c064db4ce855366792->leave($__internal_73a746aa309399d54512cd9f5436f97db7433b5cc93eb2c064db4ce855366792_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_885e7db45d12f1bb3460c3384b828ff8f52d18438774d2b0454fedb40c80873f = $this->env->getExtension("native_profiler");
        $__internal_885e7db45d12f1bb3460c3384b828ff8f52d18438774d2b0454fedb40c80873f->enter($__internal_885e7db45d12f1bb3460c3384b828ff8f52d18438774d2b0454fedb40c80873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"body-content\">
\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Group:showactions.html.twig", "group/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings"))) > 0)) {
            // line 12
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.training", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 14
            $this->loadTemplate("BoAdminBundle:Group:training.html.twig", "group/show.html.twig", 14)->display($context);
            // line 15
            echo "\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))) < 2)) {
            // line 18
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 20
            $this->loadTemplate("BoAdminBundle:Group:contracts.html.twig", "group/show.html.twig", 20)->display($context);
            // line 21
            echo "\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 25
        $this->loadTemplate("BoAdminBundle:Group:students.html.twig", "group/show.html.twig", 25)->display($context);
        // line 26
        echo "\t\t</div>
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"teacher_content\">
\t\t\t\t";
        // line 30
        $this->loadTemplate("BoAdminBundle:Group:teachers.html.twig", "group/show.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.local", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"teacher_content\">
\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdminBundle:Group:local.html.twig", "group/show.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t</div>
\t\t</div>\t\t
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t<!-- Begin Close form Modal -->
\t<div class=\"container\">
\t  <div class=\"modal fade\" id=\"close_group\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["close_form"]) ? $context["close_form"] : $this->getContext($context, "close_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["close_form"]) ? $context["close_form"] : $this->getContext($context, "close_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- End Reopen form Modal -->

\t<!-- Begin reopen form Modal -->
\t<div class=\"container\">
\t  <div class=\"modal fade\" id=\"reopen_group\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.reopen", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.reopen", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 106
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["reopen_form"]) ? $context["reopen_form"] : $this->getContext($context, "reopen_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 108
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["reopen_form"]) ? $context["reopen_form"] : $this->getContext($context, "reopen_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- End Reopen form Modal -->

\t";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_885e7db45d12f1bb3460c3384b828ff8f52d18438774d2b0454fedb40c80873f->leave($__internal_885e7db45d12f1bb3460c3384b828ff8f52d18438774d2b0454fedb40c80873f_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6f35d3a0b441d697cd0879ffa93817f7fc0df0d8bff8db3f174f6ba92417bc7 = $this->env->getExtension("native_profiler");
        $__internal_f6f35d3a0b441d697cd0879ffa93817f7fc0df0d8bff8db3f174f6ba92417bc7->enter($__internal_f6f35d3a0b441d697cd0879ffa93817f7fc0df0d8bff8db3f174f6ba92417bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f6f35d3a0b441d697cd0879ffa93817f7fc0df0d8bff8db3f174f6ba92417bc7->leave($__internal_f6f35d3a0b441d697cd0879ffa93817f7fc0df0d8bff8db3f174f6ba92417bc7_prof);

    }

    public function getTemplateName()
    {
        return "group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 119,  311 => 118,  299 => 117,  287 => 108,  283 => 107,  279 => 106,  273 => 103,  267 => 100,  246 => 82,  242 => 81,  238 => 80,  232 => 77,  226 => 74,  206 => 57,  202 => 56,  198 => 55,  192 => 52,  186 => 49,  172 => 37,  170 => 36,  165 => 34,  160 => 31,  158 => 30,  153 => 28,  149 => 26,  147 => 25,  143 => 24,  140 => 23,  136 => 21,  134 => 20,  130 => 19,  127 => 18,  124 => 17,  120 => 15,  118 => 14,  114 => 13,  111 => 12,  108 => 11,  106 => 10,  103 => 9,  97 => 8,  81 => 7,  73 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%include "BoAdminBundle:Group:rightshow.html.twig"%}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Group:showactions.html.twig"%}*/
/* 		{%if trainings|length>0%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.training'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Group:training.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if contracts|length<2%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Group:contracts.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Group:students.html.twig"%}*/
/* 		</div>*/
/* 		<div class="display_content">*/
/* 			<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="teacher_content">*/
/* 				{%include "BoAdminBundle:Group:teachers.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.local'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="teacher_content">*/
/* 				{%include "BoAdminBundle:Group:local.html.twig"%}*/
/* 			</div>*/
/* 		</div>		*/
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
/* 	<!-- Begin Close form Modal -->*/
/* 	<div class="container">*/
/* 	  <div class="modal fade" id="close_group" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.close'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.close'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(close_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(close_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- End Reopen form Modal -->*/
/* */
/* 	<!-- Begin reopen form Modal -->*/
/* 	<div class="container">*/
/* 	  <div class="modal fade" id="reopen_group" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.reopen'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.reopen'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(reopen_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(reopen_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- End Reopen form Modal -->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
