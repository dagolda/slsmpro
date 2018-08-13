<?php

/* BoAdminBundle:Furnitures:actions.html.twig */
class __TwigTemplate_61f0eb76b49bb492f4682cb954ecc55471042e52205fa3bd7ab3c11df341ddc2 extends Twig_Template
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
        $__internal_e2e92396e5e1d3bb8fb0aa541989a12c3718bddc21a30b5435af8d2ea3b64570 = $this->env->getExtension("native_profiler");
        $__internal_e2e92396e5e1d3bb8fb0aa541989a12c3718bddc21a30b5435af8d2ea3b64570->enter($__internal_e2e92396e5e1d3bb8fb0aa541989a12c3718bddc21a30b5435af8d2ea3b64570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Furnitures:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Furnitures", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Furnitures", array(), "array"), "search", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Furnitures", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Furnitures", array(), "array"), "creation", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("mobiliers_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_e2e92396e5e1d3bb8fb0aa541989a12c3718bddc21a30b5435af8d2ea3b64570->leave($__internal_e2e92396e5e1d3bb8fb0aa541989a12c3718bddc21a30b5435af8d2ea3b64570_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Furnitures:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  46 => 13,  40 => 11,  35 => 9,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if app.session.get('rights')['ROOMS']['Furnitures'] is defined and app.session.get('rights')['ROOMS']['Furnitures'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					{%endif%}*/
/* 					{%if app.session.get('rights')['ROOMS']['Furnitures'] is defined and app.session.get('rights')['ROOMS']['Furnitures'].creation==1%}	*/
/* 					<td>*/
/* 						<a href="{{ path('mobiliers_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
