<?php

/* BoHomeBundle:Default:helps.html.twig */
class __TwigTemplate_f6a93ffa3f608ba908b00bd74953eb99bf80e574462a4908ae0d002f2f89fd56 extends Twig_Template
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
        $__internal_2771dd5b8659c26cd9c0b58bf986e78fd33a1f6fd0d8def8cb353e648671a5bb = $this->env->getExtension("native_profiler");
        $__internal_2771dd5b8659c26cd9c0b58bf986e78fd33a1f6fd0d8def8cb353e648671a5bb->enter($__internal_2771dd5b8659c26cd9c0b58bf986e78fd33a1f6fd0d8def8cb353e648671a5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:helps.html.twig"));

        // line 1
        echo "\t\t<br/>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t";
        // line 5
        $this->loadTemplate("BoHomeBundle:Default:ticketlist.html.twig", "BoHomeBundle:Default:helps.html.twig", 5)->display($context);
        // line 6
        echo "\t\t\t</div>
\t\t</div>
";
        
        $__internal_2771dd5b8659c26cd9c0b58bf986e78fd33a1f6fd0d8def8cb353e648671a5bb->leave($__internal_2771dd5b8659c26cd9c0b58bf986e78fd33a1f6fd0d8def8cb353e648671a5bb_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:helps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* 		<br/>*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">{{'entity.tickets'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body noframe">*/
/* 				{%include "BoHomeBundle:Default:ticketlist.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* */
