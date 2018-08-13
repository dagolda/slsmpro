<?php

/* BoAdminBundle:Local:backactions.html.twig */
class __TwigTemplate_e8085e6fdb003ea2dc1c81dcd2d20b796bfe63a4104c53617d2236fd5aff59ff extends Twig_Template
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
        $__internal_b529cc8c5efcd69f1c5cc449ce7deca0e07696e229046242d18267a784f24938 = $this->env->getExtension("native_profiler");
        $__internal_b529cc8c5efcd69f1c5cc449ce7deca0e07696e229046242d18267a784f24938->enter($__internal_b529cc8c5efcd69f1c5cc449ce7deca0e07696e229046242d18267a784f24938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:backactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "search", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_search\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "creation", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("local_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "liste", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("local_index");
            echo "\">Room list</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_b529cc8c5efcd69f1c5cc449ce7deca0e07696e229046242d18267a784f24938->leave($__internal_b529cc8c5efcd69f1c5cc449ce7deca0e07696e229046242d18267a784f24938_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:backactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 20,  56 => 18,  48 => 15,  42 => 13,  36 => 10,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].search==1%}	*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].creation==1%}	*/
/* 					<td>*/
/* 						<a href="{{ path('local_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].liste==1%}	*/
/* 					<td>*/
/* 						<a href="{{ path('local_index') }}">Room list</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
