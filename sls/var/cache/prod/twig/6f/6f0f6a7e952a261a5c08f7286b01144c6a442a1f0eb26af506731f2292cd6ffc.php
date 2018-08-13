<?php

/* employee/editsecuritycote.html.twig */
class __TwigTemplate_58518b54e9b17d6d52b6d09d8bd24498aac0eecfdcf6f8f7eea63c4d4dc3db05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/editsecuritycote.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e91111842fe64ba165844315daf4f6a0a05775b19ac83d1c90bf57029d72ff35 = $this->env->getExtension("native_profiler");
        $__internal_e91111842fe64ba165844315daf4f6a0a05775b19ac83d1c90bf57029d72ff35->enter($__internal_e91111842fe64ba165844315daf4f6a0a05775b19ac83d1c90bf57029d72ff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/editsecuritycote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91111842fe64ba165844315daf4f6a0a05775b19ac83d1c90bf57029d72ff35->leave($__internal_e91111842fe64ba165844315daf4f6a0a05775b19ac83d1c90bf57029d72ff35_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0a8cdcc6fc13864800e4104eba2fec81d2c7a1de0f54c4e9c15a0c5515d0b2a0 = $this->env->getExtension("native_profiler");
        $__internal_0a8cdcc6fc13864800e4104eba2fec81d2c7a1de0f54c4e9c15a0c5515d0b2a0->enter($__internal_0a8cdcc6fc13864800e4104eba2fec81d2c7a1de0f54c4e9c15a0c5515d0b2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/editsecuritycote.html.twig", 2)->display($context);
        
        $__internal_0a8cdcc6fc13864800e4104eba2fec81d2c7a1de0f54c4e9c15a0c5515d0b2a0->leave($__internal_0a8cdcc6fc13864800e4104eba2fec81d2c7a1de0f54c4e9c15a0c5515d0b2a0_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b85f19bd218c378263fd372d8b02e3ee0602e53bb36f774606149be7340e97b7 = $this->env->getExtension("native_profiler");
        $__internal_b85f19bd218c378263fd372d8b02e3ee0602e53bb36f774606149be7340e97b7->enter($__internal_b85f19bd218c378263fd372d8b02e3ee0602e53bb36f774606149be7340e97b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_b85f19bd218c378263fd372d8b02e3ee0602e53bb36f774606149be7340e97b7->leave($__internal_b85f19bd218c378263fd372d8b02e3ee0602e53bb36f774606149be7340e97b7_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_98d5bb392bc531feaa0187c31d3e86b501e063b69c236d3c630c976130840218 = $this->env->getExtension("native_profiler");
        $__internal_98d5bb392bc531feaa0187c31d3e86b501e063b69c236d3c630c976130840218->enter($__internal_98d5bb392bc531feaa0187c31d3e86b501e063b69c236d3c630c976130840218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.clearance", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_98d5bb392bc531feaa0187c31d3e86b501e063b69c236d3c630c976130840218->leave($__internal_98d5bb392bc531feaa0187c31d3e86b501e063b69c236d3c630c976130840218_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_415dfb63f7a277057603b58fb0c5a9ab406da3f8b4656434b5b2dc815ed64ff4 = $this->env->getExtension("native_profiler");
        $__internal_415dfb63f7a277057603b58fb0c5a9ab406da3f8b4656434b5b2dc815ed64ff4->enter($__internal_415dfb63f7a277057603b58fb0c5a9ab406da3f8b4656434b5b2dc815ed64ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_securitycote_edit", array("id" => $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Employee:editsecuritycoteactions.html.twig", "employee/editsecuritycote.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Securitycote:newform.html.twig", "employee/editsecuritycote.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t</div>\t
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_415dfb63f7a277057603b58fb0c5a9ab406da3f8b4656434b5b2dc815ed64ff4->leave($__internal_415dfb63f7a277057603b58fb0c5a9ab406da3f8b4656434b5b2dc815ed64ff4_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_738680828dd6e2d5d2b81c8cd889dede9cf15e791c66989031739d85091c9fe1 = $this->env->getExtension("native_profiler");
        $__internal_738680828dd6e2d5d2b81c8cd889dede9cf15e791c66989031739d85091c9fe1->enter($__internal_738680828dd6e2d5d2b81c8cd889dede9cf15e791c66989031739d85091c9fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_738680828dd6e2d5d2b81c8cd889dede9cf15e791c66989031739d85091c9fe1->leave($__internal_738680828dd6e2d5d2b81c8cd889dede9cf15e791c66989031739d85091c9fe1_prof);

    }

    public function getTemplateName()
    {
        return "employee/editsecuritycote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  162 => 42,  150 => 41,  139 => 33,  135 => 32,  131 => 31,  125 => 28,  119 => 25,  104 => 13,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  90 => 8,  86 => 7,  83 => 6,  77 => 5,  61 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.clearance'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('employee_securitycote_edit',{'id':securityCote.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Employee:editsecuritycoteactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Securitycote:newform.html.twig"%}*/
/* 			</div>	*/
/* 			{{ form_rest(form) }}*/
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
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
