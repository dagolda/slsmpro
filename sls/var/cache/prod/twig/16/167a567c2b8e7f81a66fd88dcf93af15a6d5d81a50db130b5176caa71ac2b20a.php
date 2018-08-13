<?php

/* BoAdminBundle:Contracts:editactions.html.twig */
class __TwigTemplate_a35e897bdac975eb0f4af9ad793b62c27d625124060f2fe86293e9935c628426 extends Twig_Template
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
        $__internal_80aeca7a29ae09f0ce1848734349348f3c323531147f427a3980be464f445d8e = $this->env->getExtension("native_profiler");
        $__internal_80aeca7a29ae09f0ce1848734349348f3c323531147f427a3980be464f445d8e->enter($__internal_80aeca7a29ae09f0ce1848734349348f3c323531147f427a3980be464f445d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t";
        // line 6
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "search"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "search"), "method"))) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "data"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "data"), "method"))))) {
            echo "\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("contracts_back");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("contracts_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_80aeca7a29ae09f0ce1848734349348f3c323531147f427a3980be464f445d8e->leave($__internal_80aeca7a29ae09f0ce1848734349348f3c323531147f427a3980be464f445d8e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:editactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  48 => 12,  45 => 11,  37 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					{%if (app.session.get('search') is defined and app.session.get('search') is not null) or (app.session.get('data') is defined and app.session.get('data') is not null)%}	*/
/* 						<td>*/
/* 							<a href="{{ path('contracts_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%else%}*/
/* 						<td>*/
/* 							<a href="{{ path('contracts_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
