<?php

/* BoAdminBundle:Training:editactions.html.twig */
class __TwigTemplate_6e543f5244668f1d4c8aeb39c71d76a1e47fd55394f7a34e28e8965f96d3b09b extends Twig_Template
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
        $__internal_39b52057add9aa32a3fb9eff2988bc84837c9981f82e49ce4cb0eee4afa6300c = $this->env->getExtension("native_profiler");
        $__internal_39b52057add9aa32a3fb9eff2988bc84837c9981f82e49ce4cb0eee4afa6300c->enter($__internal_39b52057add9aa32a3fb9eff2988bc84837c9981f82e49ce4cb0eee4afa6300c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Training:editactions.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "contracts", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_39b52057add9aa32a3fb9eff2988bc84837c9981f82e49ce4cb0eee4afa6300c->leave($__internal_39b52057add9aa32a3fb9eff2988bc84837c9981f82e49ce4cb0eee4afa6300c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Training:editactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_show',{'id':training.contracts.id}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
