<?php

/* BoAdminBundle:Company:showactions.html.twig */
class __TwigTemplate_ff059fb29050d774e78d15028cd00ba6e476e446b0c409c25db254da8e06ffb6 extends Twig_Template
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
        $__internal_1ce2a8794b91e44dcc6cbe0cae1f6b61a7293adaa8e64cd2ca8d4093e636bf00 = $this->env->getExtension("native_profiler");
        $__internal_1ce2a8794b91e44dcc6cbe0cae1f6b61a7293adaa8e64cd2ca8d4093e636bf00->enter($__internal_1ce2a8794b91e44dcc6cbe0cae1f6b61a7293adaa8e64cd2ca8d4093e636bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Company:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_edit", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_duplicate", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.duplicate", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_1ce2a8794b91e44dcc6cbe0cae1f6b61a7293adaa8e64cd2ca8d4093e636bf00->leave($__internal_1ce2a8794b91e44dcc6cbe0cae1f6b61a7293adaa8e64cd2ca8d4093e636bf00_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Company:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('company_edit', { 'id': company.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('company_duplicate', { 'id': company.id }) }}">{{'action.duplicate'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
