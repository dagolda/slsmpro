<?php

/* BoAdvisorsBundle:Absences:index.html.twig */
class __TwigTemplate_3393d3feaf23eef5644d610015c663fb95ba1320d93e5b0be0755e916b1b01c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Absences:index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c0c2de58e8859359654cc08b19c2c8ed8b368fbc4cff48225bc0adfb2c79809 = $this->env->getExtension("native_profiler");
        $__internal_8c0c2de58e8859359654cc08b19c2c8ed8b368fbc4cff48225bc0adfb2c79809->enter($__internal_8c0c2de58e8859359654cc08b19c2c8ed8b368fbc4cff48225bc0adfb2c79809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0c2de58e8859359654cc08b19c2c8ed8b368fbc4cff48225bc0adfb2c79809->leave($__internal_8c0c2de58e8859359654cc08b19c2c8ed8b368fbc4cff48225bc0adfb2c79809_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe0c136c4d81269abffe2bc2dcb19bd99001cc7a27294326e686e9371943233a = $this->env->getExtension("native_profiler");
        $__internal_fe0c136c4d81269abffe2bc2dcb19bd99001cc7a27294326e686e9371943233a->enter($__internal_fe0c136c4d81269abffe2bc2dcb19bd99001cc7a27294326e686e9371943233a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_fe0c136c4d81269abffe2bc2dcb19bd99001cc7a27294326e686e9371943233a->leave($__internal_fe0c136c4d81269abffe2bc2dcb19bd99001cc7a27294326e686e9371943233a_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_ca5aab5984f42e4e1ac33b3f8f7b71493f3d4bae07b38a61063a2bce3187c016 = $this->env->getExtension("native_profiler");
        $__internal_ca5aab5984f42e4e1ac33b3f8f7b71493f3d4bae07b38a61063a2bce3187c016->enter($__internal_ca5aab5984f42e4e1ac33b3f8f7b71493f3d4bae07b38a61063a2bce3187c016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Absences:index.html.twig", 3)->display($context);
        
        $__internal_ca5aab5984f42e4e1ac33b3f8f7b71493f3d4bae07b38a61063a2bce3187c016->leave($__internal_ca5aab5984f42e4e1ac33b3f8f7b71493f3d4bae07b38a61063a2bce3187c016_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_301562c8058af275d0a0cd2f5f5c5e6b240554be9340ba866b82e279ee5df5c0 = $this->env->getExtension("native_profiler");
        $__internal_301562c8058af275d0a0cd2f5f5c5e6b240554be9340ba866b82e279ee5df5c0->enter($__internal_301562c8058af275d0a0cd2f5f5c5e6b240554be9340ba866b82e279ee5df5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Absences:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_301562c8058af275d0a0cd2f5f5c5e6b240554be9340ba866b82e279ee5df5c0->leave($__internal_301562c8058af275d0a0cd2f5f5c5e6b240554be9340ba866b82e279ee5df5c0_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_ca97c7298bf6ed5006dde4fa1a30539936f1b1f228b059a4773bf50d4bcb6bb2 = $this->env->getExtension("native_profiler");
        $__internal_ca97c7298bf6ed5006dde4fa1a30539936f1b1f228b059a4773bf50d4bcb6bb2->enter($__internal_ca97c7298bf6ed5006dde4fa1a30539936f1b1f228b059a4773bf50d4bcb6bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ca97c7298bf6ed5006dde4fa1a30539936f1b1f228b059a4773bf50d4bcb6bb2->leave($__internal_ca97c7298bf6ed5006dde4fa1a30539936f1b1f228b059a4773bf50d4bcb6bb2_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a8fa168e3052cb880f4be728f35a683814d4df5b9ebfff3f135a37d54c622eb1 = $this->env->getExtension("native_profiler");
        $__internal_a8fa168e3052cb880f4be728f35a683814d4df5b9ebfff3f135a37d54c622eb1->enter($__internal_a8fa168e3052cb880f4be728f35a683814d4df5b9ebfff3f135a37d54c622eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Absences:actions.html.twig", "BoAdvisorsBundle:Absences:index.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_a8fa168e3052cb880f4be728f35a683814d4df5b9ebfff3f135a37d54c622eb1->leave($__internal_a8fa168e3052cb880f4be728f35a683814d4df5b9ebfff3f135a37d54c622eb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e0827c148e2293f1846dc73e040268f27ea551d1a228b11b6fd3fa737293493 = $this->env->getExtension("native_profiler");
        $__internal_8e0827c148e2293f1846dc73e040268f27ea551d1a228b11b6fd3fa737293493->enter($__internal_8e0827c148e2293f1846dc73e040268f27ea551d1a228b11b6fd3fa737293493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 13
        $this->loadTemplate("BoAdvisorsBundle:Absences:tbliste.html.twig", "BoAdvisorsBundle:Absences:index.html.twig", 13)->display($context);
        // line 14
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
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("dash_absences_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 29
        $this->loadTemplate("BoAdminBundle:Employee:absenceform.html.twig", "BoAdvisorsBundle:Absences:index.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
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
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_8e0827c148e2293f1846dc73e040268f27ea551d1a228b11b6fd3fa737293493->leave($__internal_8e0827c148e2293f1846dc73e040268f27ea551d1a228b11b6fd3fa737293493_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf3e89e29c30de99b327647d992108ac574765a742350a353ba7d750455f51b6 = $this->env->getExtension("native_profiler");
        $__internal_bf3e89e29c30de99b327647d992108ac574765a742350a353ba7d750455f51b6->enter($__internal_bf3e89e29c30de99b327647d992108ac574765a742350a353ba7d750455f51b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_bf3e89e29c30de99b327647d992108ac574765a742350a353ba7d750455f51b6->leave($__internal_bf3e89e29c30de99b327647d992108ac574765a742350a353ba7d750455f51b6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 43,  188 => 42,  176 => 41,  165 => 33,  158 => 30,  156 => 29,  152 => 28,  147 => 26,  142 => 24,  130 => 14,  128 => 13,  125 => 12,  119 => 11,  109 => 9,  103 => 8,  87 => 7,  76 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Absences:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Absences:tbliste.html.twig"%}*/
/* 	</div>*/
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
/* 			<form action="{{ path('dash_absences_new') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(absence_form) }}*/
/* 						{%include "BoAdminBundle:Employee:absenceform.html.twig"%}*/
/* 					{{ form_rest(absence_form) }}*/
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
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
