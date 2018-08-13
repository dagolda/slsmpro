<?php

/* BoAdminBundle:Securitycote:showactions.html.twig */
class __TwigTemplate_4df47e11f324ee3afd4ed363fa51b55f6e896b3643bd41d9269d22e609efb469 extends Twig_Template
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
        $__internal_e4493d682b6f9e9390da3b0690e8ac087f7dde7904dd972c41fa821cb97e896e = $this->env->getExtension("native_profiler");
        $__internal_e4493d682b6f9e9390da3b0690e8ac087f7dde7904dd972c41fa821cb97e896e->enter($__internal_e4493d682b6f9e9390da3b0690e8ac087f7dde7904dd972c41fa821cb97e896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("securitycote_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_e4493d682b6f9e9390da3b0690e8ac087f7dde7904dd972c41fa821cb97e896e->leave($__internal_e4493d682b6f9e9390da3b0690e8ac087f7dde7904dd972c41fa821cb97e896e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].ddelete==1%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('securitycote_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
