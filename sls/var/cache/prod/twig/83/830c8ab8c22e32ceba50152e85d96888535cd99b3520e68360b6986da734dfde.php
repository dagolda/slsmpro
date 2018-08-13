<?php

/* students/editabsence.html.twig */
class __TwigTemplate_f5281d33395a30da8bb08f060c6b8670694825a296281beebc37837b770c5177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "students/editabsence.html.twig", 1);
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
        $__internal_7f772ab6266348b3f308b32cf2f2d89e4266163964f53d72bcef1903d91dfeaf = $this->env->getExtension("native_profiler");
        $__internal_7f772ab6266348b3f308b32cf2f2d89e4266163964f53d72bcef1903d91dfeaf->enter($__internal_7f772ab6266348b3f308b32cf2f2d89e4266163964f53d72bcef1903d91dfeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/editabsence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f772ab6266348b3f308b32cf2f2d89e4266163964f53d72bcef1903d91dfeaf->leave($__internal_7f772ab6266348b3f308b32cf2f2d89e4266163964f53d72bcef1903d91dfeaf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfab494f3d931008deab113683ba572fc3efff9ab5b3f8faa41f95b10f24a5cb = $this->env->getExtension("native_profiler");
        $__internal_bfab494f3d931008deab113683ba572fc3efff9ab5b3f8faa41f95b10f24a5cb->enter($__internal_bfab494f3d931008deab113683ba572fc3efff9ab5b3f8faa41f95b10f24a5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_bfab494f3d931008deab113683ba572fc3efff9ab5b3f8faa41f95b10f24a5cb->leave($__internal_bfab494f3d931008deab113683ba572fc3efff9ab5b3f8faa41f95b10f24a5cb_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a6167aef8c838050b88652f5a3e696533c95954f16a7a9e89d7036aad2b4f661 = $this->env->getExtension("native_profiler");
        $__internal_a6167aef8c838050b88652f5a3e696533c95954f16a7a9e89d7036aad2b4f661->enter($__internal_a6167aef8c838050b88652f5a3e696533c95954f16a7a9e89d7036aad2b4f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "students/editabsence.html.twig", 3)->display($context);
        
        $__internal_a6167aef8c838050b88652f5a3e696533c95954f16a7a9e89d7036aad2b4f661->leave($__internal_a6167aef8c838050b88652f5a3e696533c95954f16a7a9e89d7036aad2b4f661_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fe53e7b5151c080855d1bc5e282e021ec0ed5d7641c98bf28ece75545d5202c4 = $this->env->getExtension("native_profiler");
        $__internal_fe53e7b5151c080855d1bc5e282e021ec0ed5d7641c98bf28ece75545d5202c4->enter($__internal_fe53e7b5151c080855d1bc5e282e021ec0ed5d7641c98bf28ece75545d5202c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:rightshow.html.twig", "students/editabsence.html.twig", 4)->display($context);
        
        $__internal_fe53e7b5151c080855d1bc5e282e021ec0ed5d7641c98bf28ece75545d5202c4->leave($__internal_fe53e7b5151c080855d1bc5e282e021ec0ed5d7641c98bf28ece75545d5202c4_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_5c9378e1415879ed69a36bfb45279cc877a09d8814be2462991711867ab5beb1 = $this->env->getExtension("native_profiler");
        $__internal_5c9378e1415879ed69a36bfb45279cc877a09d8814be2462991711867ab5beb1->enter($__internal_5c9378e1415879ed69a36bfb45279cc877a09d8814be2462991711867ab5beb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5c9378e1415879ed69a36bfb45279cc877a09d8814be2462991711867ab5beb1->leave($__internal_5c9378e1415879ed69a36bfb45279cc877a09d8814be2462991711867ab5beb1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b04882f37138e0d79974e1d31054fcb1131216022c3c5f29ab8271d4b13111e7 = $this->env->getExtension("native_profiler");
        $__internal_b04882f37138e0d79974e1d31054fcb1131216022c3c5f29ab8271d4b13111e7->enter($__internal_b04882f37138e0d79974e1d31054fcb1131216022c3c5f29ab8271d4b13111e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_edit_absence", array("id" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()), "option" => (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Students:editabsenceactions.html.twig", "students/editabsence.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Students:editabsenceform.html.twig", "students/editabsence.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_b04882f37138e0d79974e1d31054fcb1131216022c3c5f29ab8271d4b13111e7->leave($__internal_b04882f37138e0d79974e1d31054fcb1131216022c3c5f29ab8271d4b13111e7_prof);

    }

    public function getTemplateName()
    {
        return "students/editabsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 14,  123 => 13,  121 => 12,  118 => 11,  116 => 10,  112 => 9,  108 => 8,  105 => 7,  99 => 6,  81 => 5,  68 => 4,  56 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	{%include "BoAdminBundle:Students:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('students_edit_absence',{'id':absence.id,'option':option}) }}" method="post" class="style">*/
/* 			{{ form_errors(absence_form) }}*/
/* 			{%include "BoAdminBundle:Students:editabsenceactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Students:editabsenceform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(absence_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
