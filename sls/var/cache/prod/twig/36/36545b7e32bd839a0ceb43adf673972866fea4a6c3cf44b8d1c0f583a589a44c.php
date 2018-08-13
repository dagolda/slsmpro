<?php

/* BoAdminBundle:Client:editactions.html.twig */
class __TwigTemplate_5f172463b42921d2e3b248d57d744a8e25871177971947338e7aa90e2bc62c02 extends Twig_Template
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
        $__internal_53bf0b8816f0fd43dd6fd38b0842c629f2c6ca849e81b9af117f9a85d0e08f37 = $this->env->getExtension("native_profiler");
        $__internal_53bf0b8816f0fd43dd6fd38b0842c629f2c6ca849e81b9af117f9a85d0e08f37->enter($__internal_53bf0b8816f0fd43dd6fd38b0842c629f2c6ca849e81b9af117f9a85d0e08f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Client:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_53bf0b8816f0fd43dd6fd38b0842c629f2c6ca849e81b9af117f9a85d0e08f37->leave($__internal_53bf0b8816f0fd43dd6fd38b0842c629f2c6ca849e81b9af117f9a85d0e08f37_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Client:editactions.html.twig";
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
/* 						<a href="{{ path('client_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
