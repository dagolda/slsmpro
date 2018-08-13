<?php

/* BoAdminBundle:Contracts:advisorform.html.twig */
class __TwigTemplate_2d1ace90772e8fe439e49e9d2097e1bd14d7bff15a91c9b295adc1171db71750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f873596cefe1f4eb234724532ed87376830800ad27ace4b2eb7c2082ae3a799 = $this->env->getExtension("native_profiler");
        $__internal_0f873596cefe1f4eb234724532ed87376830800ad27ace4b2eb7c2082ae3a799->enter($__internal_0f873596cefe1f4eb234724532ed87376830800ad27ace4b2eb7c2082ae3a799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:advisorform.html.twig"));

        // line 1
        echo "\t\t\t<div class=\"sty_label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div>";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["advisor_form"]) ? $context["advisor_form"] : $this->getContext($context, "advisor_form")), "advisor", array()), 'widget', array("attr" => array("class" => "idadvisor span3")));
        echo "</div>\t\t\t";
        
        $__internal_0f873596cefe1f4eb234724532ed87376830800ad27ace4b2eb7c2082ae3a799->leave($__internal_0f873596cefe1f4eb234724532ed87376830800ad27ace4b2eb7c2082ae3a799_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:advisorform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }
}
/* 			<div class="sty_label">{{'label.pa'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div>{{ form_widget(advisor_form.advisor, {'attr' : {'class' : 'idadvisor span3'}}) }}</div>			*/
