<?php

/* BoAdminBundle:Substitution:actions.html.twig */
class __TwigTemplate_fa36857276764f99357074d6ae06f3ea0467b354b91d4e7800c4c7ff8b7ff562 extends Twig_Template
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
        $__internal_0315cf1b582c5c4c222c050ab2276e2399d37e307e53decc145e36f7481d5136 = $this->env->getExtension("native_profiler");
        $__internal_0315cf1b582c5c4c222c050ab2276e2399d37e307e53decc145e36f7481d5136->enter($__internal_0315cf1b582c5c4c222c050ab2276e2399d37e307e53decc145e36f7481d5136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "search", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "liste", array()) == 1))) {
            // line 12
            echo "\t\t\t\t\t";
            if (((isset($context["daylist"]) ? $context["daylist"] : $this->getContext($context, "daylist")) == 1)) {
                // line 13
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 14
                echo $this->env->getExtension('routing')->getPath("substitution_index");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.alllist", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("substitution_daylist");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daylist", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal substitutions <span class=\"badge\">";
            // line 23
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions"))), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
\t<div class=\"avanced_search\">\t
\t\t";
        // line 32
        $this->loadTemplate("BoAdminBundle:Substitution:extrasearch.html.twig", "BoAdminBundle:Substitution:actions.html.twig", 32)->display($context);
        echo "\t
\t</div>
";
        
        $__internal_0315cf1b582c5c4c222c050ab2276e2399d37e307e53decc145e36f7481d5136->leave($__internal_0315cf1b582c5c4c222c050ab2276e2399d37e307e53decc145e36f7481d5136_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  79 => 27,  72 => 23,  68 => 21,  60 => 18,  57 => 17,  49 => 14,  46 => 13,  43 => 12,  40 => 11,  35 => 9,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].liste==1%}*/
/* 					{%if daylist==1%}*/
/* 						<td>*/
/* 							<a href="{{ path('substitution_index') }}">{{'label.alllist'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%else%}*/
/* 						<td>*/
/* 							<a href="{{ path('substitution_daylist') }}">{{'label.daylist'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total substitutions <span class="badge">{{substitutions|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* 	<div class="avanced_search">	*/
/* 		{% include 'BoAdminBundle:Substitution:extrasearch.html.twig' %}	*/
/* 	</div>*/
/* */
