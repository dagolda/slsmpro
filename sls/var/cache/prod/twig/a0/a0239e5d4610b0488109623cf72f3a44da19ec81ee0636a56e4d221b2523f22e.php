<?php

/* BoAdminBundle:Revision:editactions.html.twig */
class __TwigTemplate_85ceb67fee3334622bb000ed6d42b6d3563ff816e71486b942efc811f8ac2abd extends Twig_Template
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
        $__internal_d1ab7ea13a4f5684900f609b5f9769f0964f1bd0a6d158388b17fc308f9f4f82 = $this->env->getExtension("native_profiler");
        $__internal_d1ab7ea13a4f5684900f609b5f9769f0964f1bd0a6d158388b17fc308f9f4f82->enter($__internal_d1ab7ea13a4f5684900f609b5f9769f0964f1bd0a6d158388b17fc308f9f4f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Revision:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "idcontracts", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_d1ab7ea13a4f5684900f609b5f9769f0964f1bd0a6d158388b17fc308f9f4f82->leave($__internal_d1ab7ea13a4f5684900f609b5f9769f0964f1bd0a6d158388b17fc308f9f4f82_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Revision:editactions.html.twig";
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
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_show',{'id':revision.idcontracts}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
