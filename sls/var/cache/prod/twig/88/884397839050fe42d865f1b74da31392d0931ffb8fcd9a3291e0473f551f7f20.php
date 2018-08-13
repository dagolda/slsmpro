<?php

/* BoHomeBundle:Default:absences.html.twig */
class __TwigTemplate_7475f87bdd36d9b7c77eb224bcb9e6ad29fc715dd34d6a53870a411ff802a7a9 extends Twig_Template
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
        $__internal_cfebfa174b67fd0db5de6e457dfdd11ad2ba2974d2787193368cf240df626a52 = $this->env->getExtension("native_profiler");
        $__internal_cfebfa174b67fd0db5de6e457dfdd11ad2ba2974d2787193368cf240df626a52->enter($__internal_cfebfa174b67fd0db5de6e457dfdd11ad2ba2974d2787193368cf240df626a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:absences.html.twig"));

        // line 1
        echo "\t\t<br/>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absences", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t";
        // line 5
        $this->loadTemplate("BoHomeBundle:Default:abslist.html.twig", "BoHomeBundle:Default:absences.html.twig", 5)->display($context);
        // line 6
        echo "\t\t\t</div>
\t\t</div>
";
        
        $__internal_cfebfa174b67fd0db5de6e457dfdd11ad2ba2974d2787193368cf240df626a52->leave($__internal_cfebfa174b67fd0db5de6e457dfdd11ad2ba2974d2787193368cf240df626a52_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:absences.html.twig";
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
/* 			<div class="panel-heading">{{'entity.absences'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body noframe">*/
/* 				{%include "BoHomeBundle:Default:abslist.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* */
