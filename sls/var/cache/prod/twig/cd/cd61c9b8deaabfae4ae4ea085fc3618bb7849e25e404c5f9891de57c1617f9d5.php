<?php

/* students/evaluation.html.twig */
class __TwigTemplate_c61a663ea8f9576287bc0305e4cf7333f6437969d5364612e42a758b813aef46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "students/evaluation.html.twig", 1);
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
        $__internal_99d6eaff79c0c78e49bc935b623f8190363424c9efb50000fdd051409b094701 = $this->env->getExtension("native_profiler");
        $__internal_99d6eaff79c0c78e49bc935b623f8190363424c9efb50000fdd051409b094701->enter($__internal_99d6eaff79c0c78e49bc935b623f8190363424c9efb50000fdd051409b094701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/evaluation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99d6eaff79c0c78e49bc935b623f8190363424c9efb50000fdd051409b094701->leave($__internal_99d6eaff79c0c78e49bc935b623f8190363424c9efb50000fdd051409b094701_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d5d2af63808e67c0ec0b622c2eaad0d49121c6916ae677a6fb98617f0ef8de4 = $this->env->getExtension("native_profiler");
        $__internal_0d5d2af63808e67c0ec0b622c2eaad0d49121c6916ae677a6fb98617f0ef8de4->enter($__internal_0d5d2af63808e67c0ec0b622c2eaad0d49121c6916ae677a6fb98617f0ef8de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_0d5d2af63808e67c0ec0b622c2eaad0d49121c6916ae677a6fb98617f0ef8de4->leave($__internal_0d5d2af63808e67c0ec0b622c2eaad0d49121c6916ae677a6fb98617f0ef8de4_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_973595406065c44064f713ade2715734285c1ad479407d028d9213d19d8558e3 = $this->env->getExtension("native_profiler");
        $__internal_973595406065c44064f713ade2715734285c1ad479407d028d9213d19d8558e3->enter($__internal_973595406065c44064f713ade2715734285c1ad479407d028d9213d19d8558e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/evaluation.html.twig", 3)->display($context);
        
        $__internal_973595406065c44064f713ade2715734285c1ad479407d028d9213d19d8558e3->leave($__internal_973595406065c44064f713ade2715734285c1ad479407d028d9213d19d8558e3_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_adbb9c08b7110f013c1917c330ecd4c337375817679c1897180cdfba15e72afd = $this->env->getExtension("native_profiler");
        $__internal_adbb9c08b7110f013c1917c330ecd4c337375817679c1897180cdfba15e72afd->enter($__internal_adbb9c08b7110f013c1917c330ecd4c337375817679c1897180cdfba15e72afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:rightshow.html.twig", "students/evaluation.html.twig", 4)->display($context);
        
        $__internal_adbb9c08b7110f013c1917c330ecd4c337375817679c1897180cdfba15e72afd->leave($__internal_adbb9c08b7110f013c1917c330ecd4c337375817679c1897180cdfba15e72afd_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_acdb14ac4a97daf8022a2e56cfceddcc2e89e78410b5a87eea480d34ad77049f = $this->env->getExtension("native_profiler");
        $__internal_acdb14ac4a97daf8022a2e56cfceddcc2e89e78410b5a87eea480d34ad77049f->enter($__internal_acdb14ac4a97daf8022a2e56cfceddcc2e89e78410b5a87eea480d34ad77049f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_acdb14ac4a97daf8022a2e56cfceddcc2e89e78410b5a87eea480d34ad77049f->leave($__internal_acdb14ac4a97daf8022a2e56cfceddcc2e89e78410b5a87eea480d34ad77049f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_be355f17c81a6a4f2d707f4bc9f4fcee3029452b51730062257004a7263d8eb1 = $this->env->getExtension("native_profiler");
        $__internal_be355f17c81a6a4f2d707f4bc9f4fcee3029452b51730062257004a7263d8eb1->enter($__internal_be355f17c81a6a4f2d707f4bc9f4fcee3029452b51730062257004a7263d8eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Students:evalshowactions.html.twig", "students/evaluation.html.twig", 8)->display($context);
        // line 9
        echo "\t\t
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Evaluation:students.html.twig", "students/evaluation.html.twig", 12)->display($context);
        // line 13
        echo "\t\t</div>\t

\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Evaluation:contractual.html.twig", "students/evaluation.html.twig", 17)->display($context);
        // line 18
        echo "\t\t</div>\t
\t\t
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 22
        $this->loadTemplate("BoAdminBundle:Evaluation:billingcontact.html.twig", "students/evaluation.html.twig", 22)->display($context);
        // line 23
        echo "\t\t</div>
\t\t";
        // line 24
        if (((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) != 1) && ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) != 11)) && ((((isset($context["resdisp"]) ? $context["resdisp"] : $this->getContext($context, "resdisp")) == null) || ((isset($context["resdisp"]) ? $context["resdisp"] : $this->getContext($context, "resdisp")) == 1)) || ((isset($context["resdisp"]) ? $context["resdisp"] : $this->getContext($context, "resdisp")) == "left")))) {
            // line 25
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.result", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 27
            $this->loadTemplate("BoAdminBundle:Evaluation:result.html.twig", "students/evaluation.html.twig", 27)->display($context);
            // line 28
            echo "\t\t\t</div>
\t\t";
        }
        // line 29
        echo "\t
\t\t";
        // line 30
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "comment", array())) {
            // line 31
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "comment", array()), "html", null, true);
            echo "</div>
\t\t\t</div>\t
\t\t";
        }
        // line 35
        echo "\t\t\t
\t\t<br/>
\t</div>
";
        
        $__internal_be355f17c81a6a4f2d707f4bc9f4fcee3029452b51730062257004a7263d8eb1->leave($__internal_be355f17c81a6a4f2d707f4bc9f4fcee3029452b51730062257004a7263d8eb1_prof);

    }

    public function getTemplateName()
    {
        return "students/evaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 35,  168 => 33,  164 => 32,  161 => 31,  159 => 30,  156 => 29,  152 => 28,  150 => 27,  146 => 26,  143 => 25,  141 => 24,  138 => 23,  136 => 22,  132 => 21,  127 => 18,  125 => 17,  121 => 16,  116 => 13,  114 => 12,  110 => 11,  106 => 9,  104 => 8,  101 => 7,  95 => 6,  79 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'entity.evaluation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%include "BoAdminBundle:Students:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'entity.evaluation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Students:evalshowactions.html.twig"%}*/
/* 		*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Evaluation:students.html.twig"%}*/
/* 		</div>	*/
/* */
/* 		<div class="display_content">*/
/* 			<legend>{{'label.contact'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Evaluation:contractual.html.twig"%}*/
/* 		</div>	*/
/* 		*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.billingcontact'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Evaluation:billingcontact.html.twig"%}*/
/* 		</div>*/
/* 		{%if evaluation.status!=1 and evaluation.status!=11 and (resdisp==null or resdisp==1 or resdisp=="left")%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.result'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Evaluation:result.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}	*/
/* 		{%if evaluation.comment%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.comment'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div>{{evaluation.comment}}</div>*/
/* 			</div>	*/
/* 		{%endif%}			*/
/* 		<br/>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
