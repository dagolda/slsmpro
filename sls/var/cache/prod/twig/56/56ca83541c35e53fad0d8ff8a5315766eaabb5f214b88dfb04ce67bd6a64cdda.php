<?php

/* BoAdminBundle:Rubric:actions.html.twig */
class __TwigTemplate_62240a3537e30aa2874f1eda1b5b2650a17dfcc318f85fab82949cef1e3c5b73 extends Twig_Template
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
        $__internal_e69eca2fca5f01c0f3485c380e0bcd96098d492c319c5f0bc5555e85fdd2df9f = $this->env->getExtension("native_profiler");
        $__internal_e69eca2fca5f01c0f3485c380e0bcd96098d492c319c5f0bc5555e85fdd2df9f->enter($__internal_e69eca2fca5f01c0f3485c380e0bcd96098d492c319c5f0bc5555e85fdd2df9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("rubric_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal rubric <span class=\"badge\">";
        // line 10
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["rubrics"]) ? $context["rubrics"] : $this->getContext($context, "rubrics"))), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_e69eca2fca5f01c0f3485c380e0bcd96098d492c319c5f0bc5555e85fdd2df9f->leave($__internal_e69eca2fca5f01c0f3485c380e0bcd96098d492c319c5f0bc5555e85fdd2df9f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('rubric_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total rubric <span class="badge">{{rubrics|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
