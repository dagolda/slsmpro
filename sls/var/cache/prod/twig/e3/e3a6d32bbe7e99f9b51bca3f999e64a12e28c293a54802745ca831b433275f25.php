<?php

/* BoAdminBundle:Advisors:showactions.html.twig */
class __TwigTemplate_d4c14676a90217f2413e63ade84ddeef2bd1894013c25206b644b9b62e742edd extends Twig_Template
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
        $__internal_6cb917ff6ef3df8419f70f3e00c04bda795deb7acf0c9bea9d8835a4fd019918 = $this->env->getExtension("native_profiler");
        $__internal_6cb917ff6ef3df8419f70f3e00c04bda795deb7acf0c9bea9d8835a4fd019918->enter($__internal_6cb917ff6ef3df8419f70f3e00c04bda795deb7acf0c9bea9d8835a4fd019918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "ddelete", array()) == 1))) {
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
        echo $this->env->getExtension('routing')->getPath("advisors_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))) != 0)) {
            // line 16
            echo "\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.curentcontract", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "hour", array(), "array") != 0) && ($this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "percent", array(), "array") != 0))) {
            // line 23
            echo "\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.chargehour", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "hour", array(), "array"), 2, ".", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.chargepercent", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "percent", array(), "array"), 2, ".", " "), "html", null, true);
            echo "%</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#show_detail\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.details", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_6cb917ff6ef3df8419f70f3e00c04bda795deb7acf0c9bea9d8835a4fd019918->leave($__internal_6cb917ff6ef3df8419f70f3e00c04bda795deb7acf0c9bea9d8835a4fd019918_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  90 => 32,  81 => 28,  73 => 25,  69 => 23,  66 => 22,  57 => 18,  53 => 16,  51 => 15,  44 => 13,  41 => 12,  34 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].ddelete==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('advisors_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%if contracts|length!=0%}*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								{{'label.curentcontract'|trans([],'BoAdminBundle')}} <span class="badge">{{contracts|length}}</span>*/
/* 							</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if charge['hour']!=0 and charge['percent']!=0%}*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								{{'label.chargehour'|trans([],'BoAdminBundle')}} <span class="badge">{{charge['hour']|number_format(2,"."," ")}}</span>*/
/* 							</button>*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								{{'label.chargepercent'|trans([],'BoAdminBundle')}} <span class="badge">{{charge['percent']|number_format(2,"."," ")}}%</span>*/
/* 							</button>*/
/* 						</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#show_detail">{{'label.details'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
