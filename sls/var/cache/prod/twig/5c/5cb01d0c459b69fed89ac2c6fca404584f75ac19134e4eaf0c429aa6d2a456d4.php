<?php

/* BoAdminBundle:Contracts:studentedit.html.twig */
class __TwigTemplate_f3da8fa5399a0aae8729d754ce5f21ef506691e0bbcc669dcf24b3e64fbfa591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdminBundle:Contracts:studentedit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70484f30704a45989571fbaa681d9b705858051530e5691ff14c1d5cfbd1e0fd = $this->env->getExtension("native_profiler");
        $__internal_70484f30704a45989571fbaa681d9b705858051530e5691ff14c1d5cfbd1e0fd->enter($__internal_70484f30704a45989571fbaa681d9b705858051530e5691ff14c1d5cfbd1e0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:studentedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70484f30704a45989571fbaa681d9b705858051530e5691ff14c1d5cfbd1e0fd->leave($__internal_70484f30704a45989571fbaa681d9b705858051530e5691ff14c1d5cfbd1e0fd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8028f4fa162ccbc7e18a2e4705da9087f3b104e401d56037af8fd1844ade0b4 = $this->env->getExtension("native_profiler");
        $__internal_d8028f4fa162ccbc7e18a2e4705da9087f3b104e401d56037af8fd1844ade0b4->enter($__internal_d8028f4fa162ccbc7e18a2e4705da9087f3b104e401d56037af8fd1844ade0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d8028f4fa162ccbc7e18a2e4705da9087f3b104e401d56037af8fd1844ade0b4->leave($__internal_d8028f4fa162ccbc7e18a2e4705da9087f3b104e401d56037af8fd1844ade0b4_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_05a6edaa8f32226dd19b365ecfedf47343575dc438220f8d7183872cff44ad31 = $this->env->getExtension("native_profiler");
        $__internal_05a6edaa8f32226dd19b365ecfedf47343575dc438220f8d7183872cff44ad31->enter($__internal_05a6edaa8f32226dd19b365ecfedf47343575dc438220f8d7183872cff44ad31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "BoAdminBundle:Contracts:studentedit.html.twig", 3)->display($context);
        
        $__internal_05a6edaa8f32226dd19b365ecfedf47343575dc438220f8d7183872cff44ad31->leave($__internal_05a6edaa8f32226dd19b365ecfedf47343575dc438220f8d7183872cff44ad31_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a821c4414f0c610f03a9a26b419f272ddd57ba01ac7b30c0080ff0193c620bae = $this->env->getExtension("native_profiler");
        $__internal_a821c4414f0c610f03a9a26b419f272ddd57ba01ac7b30c0080ff0193c620bae->enter($__internal_a821c4414f0c610f03a9a26b419f272ddd57ba01ac7b30c0080ff0193c620bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_a821c4414f0c610f03a9a26b419f272ddd57ba01ac7b30c0080ff0193c620bae->leave($__internal_a821c4414f0c610f03a9a26b419f272ddd57ba01ac7b30c0080ff0193c620bae_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ed3e6dd5031c1fd9deb35f2c8449e741a1b606ae70cab7d417407c16bda8f903 = $this->env->getExtension("native_profiler");
        $__internal_ed3e6dd5031c1fd9deb35f2c8449e741a1b606ae70cab7d417407c16bda8f903->enter($__internal_ed3e6dd5031c1fd9deb35f2c8449e741a1b606ae70cab7d417407c16bda8f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ed3e6dd5031c1fd9deb35f2c8449e741a1b606ae70cab7d417407c16bda8f903->leave($__internal_ed3e6dd5031c1fd9deb35f2c8449e741a1b606ae70cab7d417407c16bda8f903_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2ccca6ca0a60030c1e3a9b1e6bf0663d749f86335da64fc0f2a4dcb144ca4bb = $this->env->getExtension("native_profiler");
        $__internal_c2ccca6ca0a60030c1e3a9b1e6bf0663d749f86335da64fc0f2a4dcb144ca4bb->enter($__internal_c2ccca6ca0a60030c1e3a9b1e6bf0663d749f86335da64fc0f2a4dcb144ca4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_students_edit", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Students:editactions.html.twig", "BoAdminBundle:Contracts:studentedit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Students:editform.html.twig", "BoAdminBundle:Contracts:studentedit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_c2ccca6ca0a60030c1e3a9b1e6bf0663d749f86335da64fc0f2a4dcb144ca4bb->leave($__internal_c2ccca6ca0a60030c1e3a9b1e6bf0663d749f86335da64fc0f2a4dcb144ca4bb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:studentedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('contracts_students_edit',{'id':student.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Students:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Students:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
