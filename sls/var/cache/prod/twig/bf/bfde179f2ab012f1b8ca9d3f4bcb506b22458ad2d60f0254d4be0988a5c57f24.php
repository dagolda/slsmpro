<?php

/* BoAdminBundle:TeamContacts:showactions.html.twig */
class __TwigTemplate_2eeb20b32b439374c7bf43fd23fe0ffe08ec8dd4d66212f3673219f86ed71688 extends Twig_Template
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
        $__internal_73137f2a57ec34a007ee707477c54f5f71d1139d33cadce8039e252106c15e22 = $this->env->getExtension("native_profiler");
        $__internal_73137f2a57ec34a007ee707477c54f5f71d1139d33cadce8039e252106c15e22->enter($__internal_73137f2a57ec34a007ee707477c54f5f71d1139d33cadce8039e252106c15e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TeamContacts:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Teamcontacts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Teamcontacts", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("teamcontacts_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_73137f2a57ec34a007ee707477c54f5f71d1139d33cadce8039e252106c15e22->leave($__internal_73137f2a57ec34a007ee707477c54f5f71d1139d33cadce8039e252106c15e22_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TeamContacts:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  41 => 12,  34 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Teamcontacts'] is defined and app.session.get('rights')['STAFF']['Teamcontacts'].ddelete==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('teamcontacts_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
