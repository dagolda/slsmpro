<?php

/* advisors/show.html.twig */
class __TwigTemplate_831d6dc76e71fa60201d743d8711e27264190f558318ad3e8c052390b219683d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "advisors/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_7e5360962aa1112fefb781f1032cde378b26ef34547c04c18450ea9eee1424a2 = $this->env->getExtension("native_profiler");
        $__internal_7e5360962aa1112fefb781f1032cde378b26ef34547c04c18450ea9eee1424a2->enter($__internal_7e5360962aa1112fefb781f1032cde378b26ef34547c04c18450ea9eee1424a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advisors/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5360962aa1112fefb781f1032cde378b26ef34547c04c18450ea9eee1424a2->leave($__internal_7e5360962aa1112fefb781f1032cde378b26ef34547c04c18450ea9eee1424a2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5853592c4215f32a0798c26d8574e5ac4c887fea1a71652bf093af5aaa955168 = $this->env->getExtension("native_profiler");
        $__internal_5853592c4215f32a0798c26d8574e5ac4c887fea1a71652bf093af5aaa955168->enter($__internal_5853592c4215f32a0798c26d8574e5ac4c887fea1a71652bf093af5aaa955168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.advisors", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_5853592c4215f32a0798c26d8574e5ac4c887fea1a71652bf093af5aaa955168->leave($__internal_5853592c4215f32a0798c26d8574e5ac4c887fea1a71652bf093af5aaa955168_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd2764ac9dd59a1c0db7ffdbeb8032742f6846b6b09549fd8302d25fafe4ed65 = $this->env->getExtension("native_profiler");
        $__internal_fd2764ac9dd59a1c0db7ffdbeb8032742f6846b6b09549fd8302d25fafe4ed65->enter($__internal_fd2764ac9dd59a1c0db7ffdbeb8032742f6846b6b09549fd8302d25fafe4ed65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t.row.content {min-height: 660px}
\t</style>
";
        
        $__internal_fd2764ac9dd59a1c0db7ffdbeb8032742f6846b6b09549fd8302d25fafe4ed65->leave($__internal_fd2764ac9dd59a1c0db7ffdbeb8032742f6846b6b09549fd8302d25fafe4ed65_prof);

    }

    // line 9
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a89bf9a7b723ed6477293266ed3b5cf49a2dac31a522878555aa4d3abee5f651 = $this->env->getExtension("native_profiler");
        $__internal_a89bf9a7b723ed6477293266ed3b5cf49a2dac31a522878555aa4d3abee5f651->enter($__internal_a89bf9a7b723ed6477293266ed3b5cf49a2dac31a522878555aa4d3abee5f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "advisors/show.html.twig", 9)->display($context);
        
        $__internal_a89bf9a7b723ed6477293266ed3b5cf49a2dac31a522878555aa4d3abee5f651->leave($__internal_a89bf9a7b723ed6477293266ed3b5cf49a2dac31a522878555aa4d3abee5f651_prof);

    }

    // line 10
    public function block_nav($context, array $blocks = array())
    {
        $__internal_64c23eb260bd6971803fd6e898ef407c2252d501d0cbb6c322bb88d4a1f9564c = $this->env->getExtension("native_profiler");
        $__internal_64c23eb260bd6971803fd6e898ef407c2252d501d0cbb6c322bb88d4a1f9564c->enter($__internal_64c23eb260bd6971803fd6e898ef407c2252d501d0cbb6c322bb88d4a1f9564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 11
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Advisors:rightshow.html.twig", "advisors/show.html.twig", 11)->display($context);
        
        $__internal_64c23eb260bd6971803fd6e898ef407c2252d501d0cbb6c322bb88d4a1f9564c->leave($__internal_64c23eb260bd6971803fd6e898ef407c2252d501d0cbb6c322bb88d4a1f9564c_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_7ffad99150180ffa4823e29d2badd538415ee05226e60306e0196890e6bed6d6 = $this->env->getExtension("native_profiler");
        $__internal_7ffad99150180ffa4823e29d2badd538415ee05226e60306e0196890e6bed6d6->enter($__internal_7ffad99150180ffa4823e29d2badd538415ee05226e60306e0196890e6bed6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.advisors", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_7ffad99150180ffa4823e29d2badd538415ee05226e60306e0196890e6bed6d6->leave($__internal_7ffad99150180ffa4823e29d2badd538415ee05226e60306e0196890e6bed6d6_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef056721424003f7827c9d4a367ef6811a2b799d4a730fa48e77f7aa9873bcef = $this->env->getExtension("native_profiler");
        $__internal_ef056721424003f7827c9d4a367ef6811a2b799d4a730fa48e77f7aa9873bcef->enter($__internal_ef056721424003f7827c9d4a367ef6811a2b799d4a730fa48e77f7aa9873bcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t<div id=\"body-content\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Advisors:showactions.html.twig", "advisors/show.html.twig", 16)->display($context);
        echo "\t
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 19
        $this->loadTemplate("BoAdminBundle:Advisors:contracts.html.twig", "advisors/show.html.twig", 19)->display($context);
        // line 20
        echo "\t\t</div>\t\t\t
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
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t<!-- begin displaying detail charges of advisor by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"show_detail\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.details", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.charges", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 60
        $this->loadTemplate("BoAdminBundle:Advisors:details.html.twig", "advisors/show.html.twig", 60)->display($context);
        // line 61
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end displaying detail charges of advisor by modal dialog-->

\t";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ef056721424003f7827c9d4a367ef6811a2b799d4a730fa48e77f7aa9873bcef->leave($__internal_ef056721424003f7827c9d4a367ef6811a2b799d4a730fa48e77f7aa9873bcef_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78c22ec4588e1c502af55c6c1cb6d3fd727983737da7230ee1864fc915065af0 = $this->env->getExtension("native_profiler");
        $__internal_78c22ec4588e1c502af55c6c1cb6d3fd727983737da7230ee1864fc915065af0->enter($__internal_78c22ec4588e1c502af55c6c1cb6d3fd727983737da7230ee1864fc915065af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_78c22ec4588e1c502af55c6c1cb6d3fd727983737da7230ee1864fc915065af0->leave($__internal_78c22ec4588e1c502af55c6c1cb6d3fd727983737da7230ee1864fc915065af0_prof);

    }

    public function getTemplateName()
    {
        return "advisors/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 74,  229 => 73,  217 => 72,  205 => 63,  201 => 61,  199 => 60,  191 => 57,  170 => 39,  166 => 38,  162 => 37,  156 => 34,  150 => 31,  137 => 20,  135 => 19,  131 => 18,  126 => 16,  123 => 15,  117 => 14,  101 => 13,  93 => 11,  87 => 10,  75 => 9,  62 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.advisors'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<style>*/
/* 		.row.content {min-height: 660px}*/
/* 	</style>*/
/* {% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%include "BoAdminBundle:Advisors:rightshow.html.twig"%}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.advisors'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Advisors:showactions.html.twig"%}	*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.contracts'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Advisors:contracts.html.twig"%}*/
/* 		</div>			*/
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
/* 	<!-- begin displaying detail charges of advisor by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="show_detail" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.details'|trans([],'BoAdminBundle')}} {{'label.charges'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 				<div class="modal-body">*/
/* 					{%include "BoAdminBundle:Advisors:details.html.twig"%}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 				</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end displaying detail charges of advisor by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
