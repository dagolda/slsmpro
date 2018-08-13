<?php

/* BoHomeBundle:Default:clearance.html.twig */
class __TwigTemplate_beab80c7305ce833092dff6bb6f3a837c8dccb9d1151adf5a914e48c5de9d0ff extends Twig_Template
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
        $__internal_203203b723af2ebb4b74c7c84aa4864ac479746835762ffc961114de67b90aa3 = $this->env->getExtension("native_profiler");
        $__internal_203203b723af2ebb4b74c7c84aa4864ac479746835762ffc961114de67b90aa3->enter($__internal_203203b723af2ebb4b74c7c84aa4864ac479746835762ffc961114de67b90aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:clearance.html.twig"));

        // line 1
        echo "\t\t";
        if ($this->getAttribute((isset($context["securityCotes"]) ? $context["securityCotes"] : null), 0, array(), "array", true, true)) {
            // line 2
            echo "\t\t\t<br/>
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.security.cote", array(), "BoAdminBundle"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t\t";
            // line 6
            $this->loadTemplate("BoHomeBundle:User:securitycote.html.twig", "BoHomeBundle:Default:clearance.html.twig", 6)->display($context);
            // line 7
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        
        $__internal_203203b723af2ebb4b74c7c84aa4864ac479746835762ffc961114de67b90aa3->leave($__internal_203203b723af2ebb4b74c7c84aa4864ac479746835762ffc961114de67b90aa3_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:clearance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  34 => 6,  29 => 4,  25 => 2,  22 => 1,);
    }
}
/* 		{%if securityCotes[0] is defined%}*/
/* 			<br/>*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading">{{'title.security.cote'|trans([],'BoAdminBundle')}}</div>*/
/* 				<div class="panel-body noframe">*/
/* 					{%include "BoHomeBundle:User:securitycote.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
/* */
