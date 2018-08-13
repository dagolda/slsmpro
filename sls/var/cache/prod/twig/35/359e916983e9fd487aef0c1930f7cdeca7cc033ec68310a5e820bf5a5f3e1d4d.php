<?php

/* BoCoordinatorBundle:Supervision:show.html.twig */
class __TwigTemplate_da977a2ad6554c2aff16ff8f67c5bce0bc250af428cf031d14cf67b059180dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("coordinator.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 1);
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
        return "coordinator.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995760173d6e5cb6c2e8c9dca801a16462680492f22a4527677468598bb5b921 = $this->env->getExtension("native_profiler");
        $__internal_995760173d6e5cb6c2e8c9dca801a16462680492f22a4527677468598bb5b921->enter($__internal_995760173d6e5cb6c2e8c9dca801a16462680492f22a4527677468598bb5b921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Supervision:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995760173d6e5cb6c2e8c9dca801a16462680492f22a4527677468598bb5b921->leave($__internal_995760173d6e5cb6c2e8c9dca801a16462680492f22a4527677468598bb5b921_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6e7f384e325c4af83106f635f829575abc500a82e58943019e6ac6cd36da685 = $this->env->getExtension("native_profiler");
        $__internal_b6e7f384e325c4af83106f635f829575abc500a82e58943019e6ac6cd36da685->enter($__internal_b6e7f384e325c4af83106f635f829575abc500a82e58943019e6ac6cd36da685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b6e7f384e325c4af83106f635f829575abc500a82e58943019e6ac6cd36da685->leave($__internal_b6e7f384e325c4af83106f635f829575abc500a82e58943019e6ac6cd36da685_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6694af8ac2c6c752d12d995891a4ea2064fb2cd56f06d47db376def62ff8e94 = $this->env->getExtension("native_profiler");
        $__internal_e6694af8ac2c6c752d12d995891a4ea2064fb2cd56f06d47db376def62ff8e94->enter($__internal_e6694af8ac2c6c752d12d995891a4ea2064fb2cd56f06d47db376def62ff8e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_e6694af8ac2c6c752d12d995891a4ea2064fb2cd56f06d47db376def62ff8e94->leave($__internal_e6694af8ac2c6c752d12d995891a4ea2064fb2cd56f06d47db376def62ff8e94_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6952133e9af31337b1aa228476ae884943809d20a36346839edd782d8bf47419 = $this->env->getExtension("native_profiler");
        $__internal_6952133e9af31337b1aa228476ae884943809d20a36346839edd782d8bf47419->enter($__internal_6952133e9af31337b1aa228476ae884943809d20a36346839edd782d8bf47419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoCoordinatorBundle:Default:supervision.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 4)->display($context);
        
        $__internal_6952133e9af31337b1aa228476ae884943809d20a36346839edd782d8bf47419->leave($__internal_6952133e9af31337b1aa228476ae884943809d20a36346839edd782d8bf47419_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ad1f87d6665f93aa0b0d271296d47e521114010ea47f3603786993858efa3974 = $this->env->getExtension("native_profiler");
        $__internal_ad1f87d6665f93aa0b0d271296d47e521114010ea47f3603786993858efa3974->enter($__internal_ad1f87d6665f93aa0b0d271296d47e521114010ea47f3603786993858efa3974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Contracts:rightshow.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 5)->display($context);
        
        $__internal_ad1f87d6665f93aa0b0d271296d47e521114010ea47f3603786993858efa3974->leave($__internal_ad1f87d6665f93aa0b0d271296d47e521114010ea47f3603786993858efa3974_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_3740327bd1815b6a6210c9f246575094ac4ec9eef9a5985e1d7fd5944da5161b = $this->env->getExtension("native_profiler");
        $__internal_3740327bd1815b6a6210c9f246575094ac4ec9eef9a5985e1d7fd5944da5161b->enter($__internal_3740327bd1815b6a6210c9f246575094ac4ec9eef9a5985e1d7fd5944da5161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3740327bd1815b6a6210c9f246575094ac4ec9eef9a5985e1d7fd5944da5161b->leave($__internal_3740327bd1815b6a6210c9f246575094ac4ec9eef9a5985e1d7fd5944da5161b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_baaca79980b879349a44f5b0e47966a7e8f69b97326b3cfabb20b35cd90afdb2 = $this->env->getExtension("native_profiler");
        $__internal_baaca79980b879349a44f5b0e47966a7e8f69b97326b3cfabb20b35cd90afdb2->enter($__internal_baaca79980b879349a44f5b0e47966a7e8f69b97326b3cfabb20b35cd90afdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t";
        // line 9
        $this->loadTemplate("BoCoordinatorBundle:Supervision:showactions.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 9)->display($context);
        // line 10
        echo "
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "group", array(), "any", true, true) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) != null))) {
            // line 12
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 14
            $this->loadTemplate("BoAdminBundle:Contracts:group.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 14)->display($context);
            // line 15
            echo "\t\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.training", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 19
        $this->loadTemplate("BoCoordinatorBundle:Supervision:training.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"teacher_content\">
\t\t\t\t";
        // line 24
        $this->loadTemplate("BoCoordinatorBundle:Supervision:teachers.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 27
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "campus", array(), "any", true, true) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()) != null))) {
            // line 28
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 30
            $this->loadTemplate("BoCoordinatorBundle:Supervision:local.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 30)->display($context);
            // line 31
            echo "\t\t</div>
\t\t";
        }
        // line 33
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"students_content\">
\t\t\t\t";
        // line 36
        $this->loadTemplate("BoCoordinatorBundle:Supervision:students.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t</div>
\t\t</div>\t
\t\t";
        // line 39
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) {
            // line 40
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t<div id=\"advisor_content\">
\t\t\t\t";
            // line 43
            $this->loadTemplate("BoAdminBundle:Contracts:advisor.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 43)->display($context);
            // line 44
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 47
        echo "\t\t";
        if ((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions"))) {
            // line 48
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.revision", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 50
            $this->loadTemplate("BoCoordinatorBundle:Supervision:revision.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 50)->display($context);
            // line 51
            echo "\t\t</div>
\t\t";
        }
        // line 53
        echo "\t\t";
        if ((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator"))) {
            // line 54
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.departmentcontact", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 56
            $this->loadTemplate("BoAdminBundle:Contracts:coordinator.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 56)->display($context);
            // line 57
            echo "\t\t</div>\t
\t\t";
        }
        // line 58
        echo "\t
\t\t";
        // line 59
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "notes", array())) {
            // line 60
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notes", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t<div>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "notes", array()), "html", null, true);
            echo "</div>
\t\t</div>\t
\t\t";
        }
        // line 64
        echo "\t\t\t
\t\t<br/>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"historic_student\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studenthistoric", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  ";
        // line 80
        $this->loadTemplate("BoAdminBundle:HistoStudents:tbliste.html.twig", "BoCoordinatorBundle:Supervision:show.html.twig", 80)->display($context);
        // line 81
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_baaca79980b879349a44f5b0e47966a7e8f69b97326b3cfabb20b35cd90afdb2->leave($__internal_baaca79980b879349a44f5b0e47966a7e8f69b97326b3cfabb20b35cd90afdb2_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bbb1eff3a75d07042831151c5dba429dc8f4f221e676cf87c5d5d1473299ac0 = $this->env->getExtension("native_profiler");
        $__internal_8bbb1eff3a75d07042831151c5dba429dc8f4f221e676cf87c5d5d1473299ac0->enter($__internal_8bbb1eff3a75d07042831151c5dba429dc8f4f221e676cf87c5d5d1473299ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_8bbb1eff3a75d07042831151c5dba429dc8f4f221e676cf87c5d5d1473299ac0->leave($__internal_8bbb1eff3a75d07042831151c5dba429dc8f4f221e676cf87c5d5d1473299ac0_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Supervision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 90,  308 => 89,  296 => 88,  287 => 81,  285 => 80,  279 => 77,  264 => 64,  258 => 62,  254 => 61,  251 => 60,  249 => 59,  246 => 58,  242 => 57,  240 => 56,  236 => 55,  233 => 54,  230 => 53,  226 => 51,  224 => 50,  220 => 49,  217 => 48,  214 => 47,  209 => 44,  207 => 43,  202 => 41,  199 => 40,  197 => 39,  193 => 37,  191 => 36,  186 => 34,  183 => 33,  179 => 31,  177 => 30,  173 => 29,  170 => 28,  168 => 27,  164 => 25,  162 => 24,  157 => 22,  153 => 20,  151 => 19,  147 => 18,  144 => 17,  140 => 15,  138 => 14,  134 => 13,  131 => 12,  129 => 11,  126 => 10,  124 => 9,  121 => 8,  115 => 7,  95 => 6,  83 => 5,  71 => 4,  58 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'coordinator.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.supervision'|trans([],'BoAdminBundle')}} >> {{'label.contracts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoCoordinatorBundle:Default:supervision.html.twig"%}{% endblock %}*/
/* {% block nav %}{%include "BoAdminBundle:Contracts:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.supervision'|trans([],'BoAdminBundle')}} >> {{'label.contracts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoCoordinatorBundle:Supervision:showactions.html.twig"%}*/
/* */
/* 		{%if contract.group is defined and contract.group!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.training'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoCoordinatorBundle:Supervision:training.html.twig"%}*/
/* 		</div>*/
/* 		<div class="display_content">*/
/* 			<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="teacher_content">*/
/* 				{%include "BoCoordinatorBundle:Supervision:teachers.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* 		{%if contract.campus is defined and contract.campus!=null%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.room'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoCoordinatorBundle:Supervision:local.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'Student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="students_content">*/
/* 				{%include "BoCoordinatorBundle:Supervision:students.html.twig"%}*/
/* 			</div>*/
/* 		</div>	*/
/* 		{%if contract.advisor%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.pa'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="advisor_content">*/
/* 				{%include "BoAdminBundle:Contracts:advisor.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if revisions%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.revision'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoCoordinatorBundle:Supervision:revision.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if coordinator%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.departmentcontact'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Contracts:coordinator.html.twig"%}*/
/* 		</div>	*/
/* 		{%endif%}	*/
/* 		{%if contract.notes%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.notes'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div>{{contract.notes}}</div>*/
/* 		</div>	*/
/* 		{%endif%}			*/
/* 		<br/>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="historic_student" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.studenthistoric'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  {%include "BoAdminBundle:HistoStudents:tbliste.html.twig"%}*/
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
