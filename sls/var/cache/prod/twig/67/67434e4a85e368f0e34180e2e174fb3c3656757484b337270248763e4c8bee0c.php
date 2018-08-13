<?php

/* BoAdminBundle:Students:backactions.html.twig */
class __TwigTemplate_9f26699c8bb01771b72c7b1432c533b5b50ed885b003923873a0c1e8cfa18eee extends Twig_Template
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
        $__internal_94459973b7f639938f1ae1a2c07dc60314b1865fa4f44c8bb729e593deaa300f = $this->env->getExtension("native_profiler");
        $__internal_94459973b7f639938f1ae1a2c07dc60314b1865fa4f44c8bb729e593deaa300f->enter($__internal_94459973b7f639938f1ae1a2c07dc60314b1865fa4f44c8bb729e593deaa300f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:backactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "search", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"form-group\">
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
        echo "\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("students_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t</td>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_94459973b7f639938f1ae1a2c07dc60314b1865fa4f44c8bb729e593deaa300f->leave($__internal_94459973b7f639938f1ae1a2c07dc60314b1865fa4f44c8bb729e593deaa300f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:backactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  42 => 13,  36 => 10,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				<td>*/
/* 					<a href="{{ path('students_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 				</td>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
