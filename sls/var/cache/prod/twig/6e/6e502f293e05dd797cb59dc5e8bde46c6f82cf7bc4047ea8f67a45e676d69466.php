<?php

/* tadmin/show.html.twig */
class __TwigTemplate_39209c19534a8bcd728b457570f2c79d26f58f236458bae8b01d3e47f23e47c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tadmin/show.html.twig", 1);
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
        $__internal_79988173f7441dc0fa3a873ac633dee881ae0192690060c15c5f695443e10686 = $this->env->getExtension("native_profiler");
        $__internal_79988173f7441dc0fa3a873ac633dee881ae0192690060c15c5f695443e10686->enter($__internal_79988173f7441dc0fa3a873ac633dee881ae0192690060c15c5f695443e10686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tadmin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79988173f7441dc0fa3a873ac633dee881ae0192690060c15c5f695443e10686->leave($__internal_79988173f7441dc0fa3a873ac633dee881ae0192690060c15c5f695443e10686_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_91f49cb58223b6045dbf1b4d54558b40041b7b5d51cef9e78340a28d5e44769e = $this->env->getExtension("native_profiler");
        $__internal_91f49cb58223b6045dbf1b4d54558b40041b7b5d51cef9e78340a28d5e44769e->enter($__internal_91f49cb58223b6045dbf1b4d54558b40041b7b5d51cef9e78340a28d5e44769e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_91f49cb58223b6045dbf1b4d54558b40041b7b5d51cef9e78340a28d5e44769e->leave($__internal_91f49cb58223b6045dbf1b4d54558b40041b7b5d51cef9e78340a28d5e44769e_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_48f3bcaa75bd08bc237c4bfc01ac54efd41419b15b149172d1a735ccef5a0803 = $this->env->getExtension("native_profiler");
        $__internal_48f3bcaa75bd08bc237c4bfc01ac54efd41419b15b149172d1a735ccef5a0803->enter($__internal_48f3bcaa75bd08bc237c4bfc01ac54efd41419b15b149172d1a735ccef5a0803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "tadmin/show.html.twig", 3)->display($context);
        
        $__internal_48f3bcaa75bd08bc237c4bfc01ac54efd41419b15b149172d1a735ccef5a0803->leave($__internal_48f3bcaa75bd08bc237c4bfc01ac54efd41419b15b149172d1a735ccef5a0803_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c11a09630a59292fb45b264b9f1f83aed29faee5762df161be7b0a4a9b3b5c44 = $this->env->getExtension("native_profiler");
        $__internal_c11a09630a59292fb45b264b9f1f83aed29faee5762df161be7b0a4a9b3b5c44->enter($__internal_c11a09630a59292fb45b264b9f1f83aed29faee5762df161be7b0a4a9b3b5c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_c11a09630a59292fb45b264b9f1f83aed29faee5762df161be7b0a4a9b3b5c44->leave($__internal_c11a09630a59292fb45b264b9f1f83aed29faee5762df161be7b0a4a9b3b5c44_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_da903eeeb0856c42c09a05a1298aea107a32af0f8c0a9bfa0c0add509cdbcd67 = $this->env->getExtension("native_profiler");
        $__internal_da903eeeb0856c42c09a05a1298aea107a32af0f8c0a9bfa0c0add509cdbcd67->enter($__internal_da903eeeb0856c42c09a05a1298aea107a32af0f8c0a9bfa0c0add509cdbcd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_da903eeeb0856c42c09a05a1298aea107a32af0f8c0a9bfa0c0add509cdbcd67->leave($__internal_da903eeeb0856c42c09a05a1298aea107a32af0f8c0a9bfa0c0add509cdbcd67_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebdc88695648f8ec101ea34b40e39e6cec5a9f0cc7da622ba15d9af09aacb9e1 = $this->env->getExtension("native_profiler");
        $__internal_ebdc88695648f8ec101ea34b40e39e6cec5a9f0cc7da622ba15d9af09aacb9e1->enter($__internal_ebdc88695648f8ec101ea34b40e39e6cec5a9f0cc7da622ba15d9af09aacb9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Tadmin:showactions.html.twig", "tadmin/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Tadmin:show.html.twig", "tadmin/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>
\t<!-- begin add tadmin creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_spec\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tadmin_new", array("id" => $this->getAttribute($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "employee", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Tadmin:modalform.html.twig", "tadmin/show.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ebdc88695648f8ec101ea34b40e39e6cec5a9f0cc7da622ba15d9af09aacb9e1->leave($__internal_ebdc88695648f8ec101ea34b40e39e6cec5a9f0cc7da622ba15d9af09aacb9e1_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de0b932a3fa65f7770e6276a216f0ec452a349770aef1af442ebd260b7979d9c = $this->env->getExtension("native_profiler");
        $__internal_de0b932a3fa65f7770e6276a216f0ec452a349770aef1af442ebd260b7979d9c->enter($__internal_de0b932a3fa65f7770e6276a216f0ec452a349770aef1af442ebd260b7979d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_de0b932a3fa65f7770e6276a216f0ec452a349770aef1af442ebd260b7979d9c->leave($__internal_de0b932a3fa65f7770e6276a216f0ec452a349770aef1af442ebd260b7979d9c_prof);

    }

    public function getTemplateName()
    {
        return "tadmin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 69,  214 => 68,  202 => 67,  191 => 59,  187 => 58,  183 => 57,  177 => 54,  171 => 51,  149 => 32,  142 => 29,  140 => 28,  136 => 27,  131 => 25,  124 => 23,  110 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'label.tadmin'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'label.tadmin'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Tadmin:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Tadmin:show.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- begin add tadmin creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_spec" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.tadmin'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tadmin_new',{'id':tadmin.employee.id})}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(tadmin_form) }}*/
/* 						{%include "BoAdminBundle:Tadmin:modalform.html.twig"%}*/
/* 					{{ form_rest(tadmin_form) }}*/
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
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
