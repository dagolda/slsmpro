<?php

/* BoAdminBundle:Status:newactions.html.twig */
class __TwigTemplate_d3a1a2f391ad3c731a92e3cc0c143d6582cdde68c5badfded585ea60076e7efa extends Twig_Template
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
        $__internal_41ff6ce82afd6943234456b6501b6b6100b733a0aa01473632edbf416cc047cc = $this->env->getExtension("native_profiler");
        $__internal_41ff6ce82afd6943234456b6501b6b6100b733a0aa01473632edbf416cc047cc->enter($__internal_41ff6ce82afd6943234456b6501b6b6100b733a0aa01473632edbf416cc047cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Status:newactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("status_index");
        echo "\">Status list</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_41ff6ce82afd6943234456b6501b6b6100b733a0aa01473632edbf416cc047cc->leave($__internal_41ff6ce82afd6943234456b6501b6b6100b733a0aa01473632edbf416cc047cc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Status:newactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('status_index') }}">Status list</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
