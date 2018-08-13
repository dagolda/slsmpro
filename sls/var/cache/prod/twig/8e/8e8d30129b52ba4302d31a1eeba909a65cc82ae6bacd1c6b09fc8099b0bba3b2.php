<?php

/* BoAdminBundle:Contracts:newactions.html.twig */
class __TwigTemplate_e437ca0558bbd2841debce07c05319587389e07fc9b30b66c5f9eb0c6e39d033 extends Twig_Template
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
        $__internal_3c87463ffcc8401c77a3753a7191c43ea890a28e5ccf00294182a11eed176aa5 = $this->env->getExtension("native_profiler");
        $__internal_3c87463ffcc8401c77a3753a7191c43ea890a28e5ccf00294182a11eed176aa5->enter($__internal_3c87463ffcc8401c77a3753a7191c43ea890a28e5ccf00294182a11eed176aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:newactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("contracts_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_3c87463ffcc8401c77a3753a7191c43ea890a28e5ccf00294182a11eed176aa5->leave($__internal_3c87463ffcc8401c77a3753a7191c43ea890a28e5ccf00294182a11eed176aa5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:newactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
