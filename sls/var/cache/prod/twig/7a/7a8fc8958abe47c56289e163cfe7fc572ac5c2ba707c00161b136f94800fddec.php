<?php

/* contracts/student.html.twig */
class __TwigTemplate_dd1182e3ce603dc7e3d3a44cc7d06c315ead9378e56ad58668a76fb3b1936bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contracts/student.html.twig", 1);
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
        $__internal_c89dfc6848af38dae7d678f708c1d58733eee25b12201d4f4c40e5b9dc06dd6b = $this->env->getExtension("native_profiler");
        $__internal_c89dfc6848af38dae7d678f708c1d58733eee25b12201d4f4c40e5b9dc06dd6b->enter($__internal_c89dfc6848af38dae7d678f708c1d58733eee25b12201d4f4c40e5b9dc06dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/student.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89dfc6848af38dae7d678f708c1d58733eee25b12201d4f4c40e5b9dc06dd6b->leave($__internal_c89dfc6848af38dae7d678f708c1d58733eee25b12201d4f4c40e5b9dc06dd6b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3eafb981ccf28dcb9148ba1302cadd9aac4f7de98eb6888fd6cc4031ff1c65f8 = $this->env->getExtension("native_profiler");
        $__internal_3eafb981ccf28dcb9148ba1302cadd9aac4f7de98eb6888fd6cc4031ff1c65f8->enter($__internal_3eafb981ccf28dcb9148ba1302cadd9aac4f7de98eb6888fd6cc4031ff1c65f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3eafb981ccf28dcb9148ba1302cadd9aac4f7de98eb6888fd6cc4031ff1c65f8->leave($__internal_3eafb981ccf28dcb9148ba1302cadd9aac4f7de98eb6888fd6cc4031ff1c65f8_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e5c7b2d5c7c08969d6ee72ce080adccb5d1b6680ab2a9e3b4d291281e0aa5cb7 = $this->env->getExtension("native_profiler");
        $__internal_e5c7b2d5c7c08969d6ee72ce080adccb5d1b6680ab2a9e3b4d291281e0aa5cb7->enter($__internal_e5c7b2d5c7c08969d6ee72ce080adccb5d1b6680ab2a9e3b4d291281e0aa5cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/student.html.twig", 3)->display($context);
        
        $__internal_e5c7b2d5c7c08969d6ee72ce080adccb5d1b6680ab2a9e3b4d291281e0aa5cb7->leave($__internal_e5c7b2d5c7c08969d6ee72ce080adccb5d1b6680ab2a9e3b4d291281e0aa5cb7_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_100aeec2fcef6c75153447ddb4ed8946651b74104af9efe307af6021dfc8f7b0 = $this->env->getExtension("native_profiler");
        $__internal_100aeec2fcef6c75153447ddb4ed8946651b74104af9efe307af6021dfc8f7b0->enter($__internal_100aeec2fcef6c75153447ddb4ed8946651b74104af9efe307af6021dfc8f7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_100aeec2fcef6c75153447ddb4ed8946651b74104af9efe307af6021dfc8f7b0->leave($__internal_100aeec2fcef6c75153447ddb4ed8946651b74104af9efe307af6021dfc8f7b0_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_e89271d006a36efcb9b187483758958a02a3e39a109a60b81b02914a7174f377 = $this->env->getExtension("native_profiler");
        $__internal_e89271d006a36efcb9b187483758958a02a3e39a109a60b81b02914a7174f377->enter($__internal_e89271d006a36efcb9b187483758958a02a3e39a109a60b81b02914a7174f377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_e89271d006a36efcb9b187483758958a02a3e39a109a60b81b02914a7174f377->leave($__internal_e89271d006a36efcb9b187483758958a02a3e39a109a60b81b02914a7174f377_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ee74e346a90c8fbc367c616ad9e3618e6561687f3576ea3a03cb90054bc28fe = $this->env->getExtension("native_profiler");
        $__internal_6ee74e346a90c8fbc367c616ad9e3618e6561687f3576ea3a03cb90054bc28fe->enter($__internal_6ee74e346a90c8fbc367c616ad9e3618e6561687f3576ea3a03cb90054bc28fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("contracts_students_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Contracts:studentactions.html.twig", "contracts/student.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t";
        if ( !(null === (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")))) {
            // line 11
            echo "\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Contracts:select.html.twig", "contracts/student.html.twig", 11)->display($context);
            // line 12
            echo "\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t<div class=\"show_content\">
\t\t\t\t\t";
            // line 15
            $this->loadTemplate("BoAdminBundle:Students:newform.html.twig", "contracts/student.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
\t\t\t";
        }
        // line 19
        echo "\t\t</form>\t
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_student\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addstudent", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("contracts_students_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("BoAdminBundle:Students:addform.html.twig", "contracts/student.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 39
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
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6ee74e346a90c8fbc367c616ad9e3618e6561687f3576ea3a03cb90054bc28fe->leave($__internal_6ee74e346a90c8fbc367c616ad9e3618e6561687f3576ea3a03cb90054bc28fe_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2145b164ba4c8aa8a5a74126e894074ea94224cc82ece494b5c8a9fe4251aad2 = $this->env->getExtension("native_profiler");
        $__internal_2145b164ba4c8aa8a5a74126e894074ea94224cc82ece494b5c8a9fe4251aad2->enter($__internal_2145b164ba4c8aa8a5a74126e894074ea94224cc82ece494b5c8a9fe4251aad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_2145b164ba4c8aa8a5a74126e894074ea94224cc82ece494b5c8a9fe4251aad2->leave($__internal_2145b164ba4c8aa8a5a74126e894074ea94224cc82ece494b5c8a9fe4251aad2_prof);

    }

    public function getTemplateName()
    {
        return "contracts/student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 50,  194 => 49,  182 => 48,  170 => 39,  163 => 36,  161 => 35,  157 => 34,  152 => 32,  147 => 30,  134 => 19,  129 => 17,  126 => 16,  124 => 15,  118 => 13,  115 => 12,  112 => 11,  109 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('contracts_students_new') }}" method="post" class="style">*/
/* 			{%include "BoAdminBundle:Contracts:studentactions.html.twig"%}*/
/* 			{%if students is not null%}*/
/* 				{%include "BoAdminBundle:Contracts:select.html.twig"%}*/
/* 			{%else%}*/
/* 				{{ form_errors(form) }}*/
/* 				<div class="show_content">*/
/* 					{%include "BoAdminBundle:Students:newform.html.twig"%}*/
/* 				</div>*/
/* 				{{ form_rest(form) }}*/
/* 			{%endif%}*/
/* 		</form>	*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_student" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addstudent'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_students_new') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Students:addform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
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
