<?php

/* BoAdminBundle:Employee:loginform.html.twig */
class __TwigTemplate_0ff799201e04124593adc1a87e2c5912c945ea13378856d1f2dc31e46d7c639d extends Twig_Template
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
        $__internal_8a96f0dc41a4f8cf7115b8c2f02e3529d8035b0fb549d10b23471ca2b1291678 = $this->env->getExtension("native_profiler");
        $__internal_8a96f0dc41a4f8cf7115b8c2f02e3529d8035b0fb549d10b23471ca2b1291678->enter($__internal_8a96f0dc41a4f8cf7115b8c2f02e3529d8035b0fb549d10b23471ca2b1291678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:loginform.html.twig"));

        // line 1
        echo "\t\t<table width=\"100%\">
\t\t\t<tr>
                \t\t<th width=\"20%\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo " :</th>
\t\t\t\t<td class=\"sty_label\">";
        // line 4
        $this->loadTemplate("BoAdminBundle:Employee:selectstatus.html.twig", "BoAdminBundle:Employee:loginform.html.twig", 4)->display($context);
        echo "</td>
\t\t\t</tr>
\t\t</table>
";
        
        $__internal_8a96f0dc41a4f8cf7115b8c2f02e3529d8035b0fb549d10b23471ca2b1291678->leave($__internal_8a96f0dc41a4f8cf7115b8c2f02e3529d8035b0fb549d10b23471ca2b1291678_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:loginform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 		<table width="100%">*/
/* 			<tr>*/
/*                 		<th width="20%">{{'label.status'|trans([],'BoAdminBundle')}} :</th>*/
/* 				<td class="sty_label">{% include "BoAdminBundle:Employee:selectstatus.html.twig" %}</td>*/
/* 			</tr>*/
/* 		</table>*/
/* */
