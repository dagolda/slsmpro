<?php

/* BoHomeBundle:Absences:index.html.twig */
class __TwigTemplate_96315d154d7d0564f4e0b2269ec3147129a27008c2b2046ee8eef3c40c0e915f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Absences:index.html.twig", 1);
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
        $__internal_56a3e30e1b9d30df5c1b9966d651525acc3cf7725c0b1f5afd37eb2c8d9bbcd8 = $this->env->getExtension("native_profiler");
        $__internal_56a3e30e1b9d30df5c1b9966d651525acc3cf7725c0b1f5afd37eb2c8d9bbcd8->enter($__internal_56a3e30e1b9d30df5c1b9966d651525acc3cf7725c0b1f5afd37eb2c8d9bbcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a3e30e1b9d30df5c1b9966d651525acc3cf7725c0b1f5afd37eb2c8d9bbcd8->leave($__internal_56a3e30e1b9d30df5c1b9966d651525acc3cf7725c0b1f5afd37eb2c8d9bbcd8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8deb715de9e677f05e8bbc4ff94d31a6830dd6c34ea079eee8b35fa95fdf1e96 = $this->env->getExtension("native_profiler");
        $__internal_8deb715de9e677f05e8bbc4ff94d31a6830dd6c34ea079eee8b35fa95fdf1e96->enter($__internal_8deb715de9e677f05e8bbc4ff94d31a6830dd6c34ea079eee8b35fa95fdf1e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.request", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8deb715de9e677f05e8bbc4ff94d31a6830dd6c34ea079eee8b35fa95fdf1e96->leave($__internal_8deb715de9e677f05e8bbc4ff94d31a6830dd6c34ea079eee8b35fa95fdf1e96_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c5a47f90a406c386686cb73affa038e82531aef415dd637a6ce5954e1f1bc300 = $this->env->getExtension("native_profiler");
        $__internal_c5a47f90a406c386686cb73affa038e82531aef415dd637a6ce5954e1f1bc300->enter($__internal_c5a47f90a406c386686cb73affa038e82531aef415dd637a6ce5954e1f1bc300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:request.html.twig", "BoHomeBundle:Absences:index.html.twig", 3)->display($context);
        
        $__internal_c5a47f90a406c386686cb73affa038e82531aef415dd637a6ce5954e1f1bc300->leave($__internal_c5a47f90a406c386686cb73affa038e82531aef415dd637a6ce5954e1f1bc300_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_117cc1a464550ff7f3d2acfed37dd64f9b2e6fd789556aeffddb20a36eb298c0 = $this->env->getExtension("native_profiler");
        $__internal_117cc1a464550ff7f3d2acfed37dd64f9b2e6fd789556aeffddb20a36eb298c0->enter($__internal_117cc1a464550ff7f3d2acfed37dd64f9b2e6fd789556aeffddb20a36eb298c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Absences:index.html.twig", 4)->display($context);
        }
        
        $__internal_117cc1a464550ff7f3d2acfed37dd64f9b2e6fd789556aeffddb20a36eb298c0->leave($__internal_117cc1a464550ff7f3d2acfed37dd64f9b2e6fd789556aeffddb20a36eb298c0_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_557eb3ed30915edf82797da2b575f7429be8e41a1d3fd6e344e108f89a77e727 = $this->env->getExtension("native_profiler");
        $__internal_557eb3ed30915edf82797da2b575f7429be8e41a1d3fd6e344e108f89a77e727->enter($__internal_557eb3ed30915edf82797da2b575f7429be8e41a1d3fd6e344e108f89a77e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.request", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_557eb3ed30915edf82797da2b575f7429be8e41a1d3fd6e344e108f89a77e727->leave($__internal_557eb3ed30915edf82797da2b575f7429be8e41a1d3fd6e344e108f89a77e727_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7e927698cdacaf544cee2cb534ec933c704d215985aed1c51a96df5b81c1d674 = $this->env->getExtension("native_profiler");
        $__internal_7e927698cdacaf544cee2cb534ec933c704d215985aed1c51a96df5b81c1d674->enter($__internal_7e927698cdacaf544cee2cb534ec933c704d215985aed1c51a96df5b81c1d674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Absences:actions.html.twig", "BoHomeBundle:Absences:index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_7e927698cdacaf544cee2cb534ec933c704d215985aed1c51a96df5b81c1d674->leave($__internal_7e927698cdacaf544cee2cb534ec933c704d215985aed1c51a96df5b81c1d674_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9b37816496fa278335bbd3502e7b89a7602eee53b585f73afc42a2196e641f = $this->env->getExtension("native_profiler");
        $__internal_4e9b37816496fa278335bbd3502e7b89a7602eee53b585f73afc42a2196e641f->enter($__internal_4e9b37816496fa278335bbd3502e7b89a7602eee53b585f73afc42a2196e641f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 11
        $this->loadTemplate("BoHomeBundle:Absences:tbliste.html.twig", "BoHomeBundle:Absences:index.html.twig", 11)->display($context);
        // line 12
        echo "\t</div>

\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_absence\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("home_absences_new");
        echo "\" method=\"post\" class=\"modal-form\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Employee:absenceform.html.twig", "BoHomeBundle:Absences:index.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4e9b37816496fa278335bbd3502e7b89a7602eee53b585f73afc42a2196e641f->leave($__internal_4e9b37816496fa278335bbd3502e7b89a7602eee53b585f73afc42a2196e641f_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_065ab1b59d0f6d2b9e35f4ecb94a8158f3491d968900f050011856468622afe8 = $this->env->getExtension("native_profiler");
        $__internal_065ab1b59d0f6d2b9e35f4ecb94a8158f3491d968900f050011856468622afe8->enter($__internal_065ab1b59d0f6d2b9e35f4ecb94a8158f3491d968900f050011856468622afe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_065ab1b59d0f6d2b9e35f4ecb94a8158f3491d968900f050011856468622afe8->leave($__internal_065ab1b59d0f6d2b9e35f4ecb94a8158f3491d968900f050011856468622afe8_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 44,  189 => 43,  177 => 42,  165 => 33,  161 => 32,  154 => 29,  152 => 28,  148 => 27,  143 => 25,  138 => 23,  125 => 12,  123 => 11,  120 => 10,  114 => 9,  104 => 7,  98 => 6,  82 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.request'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.request'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Absences:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoHomeBundle:Absences:tbliste.html.twig"%}*/
/* 	</div>*/
/* */
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_absence" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addabsence'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('home_absences_new') }}" method="post" class="modal-form">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(absence_form) }}*/
/* 						{%include "BoAdminBundle:Employee:absenceform.html.twig"%}*/
/* 					{{ form_rest(absence_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
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
