<?php

/* BoAdminBundle:Employee:slaction.html.twig */
class __TwigTemplate_d875ea15cafdb9cb7645530ebd4e177dada8a94dbdcff9252fb73783a64688a7 extends Twig_Template
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
        $__internal_052121dc58273aaf8a4b8d57a70349a728da57faa90dda937cf7ac524e9b5fef = $this->env->getExtension("native_profiler");
        $__internal_052121dc58273aaf8a4b8d57a70349a728da57faa90dda937cf7ac524e9b5fef->enter($__internal_052121dc58273aaf8a4b8d57a70349a728da57faa90dda937cf7ac524e9b5fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:slaction.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees"))) > 0)) {
            // line 6
            echo "\t\t\t\t\t\t<td class=\"td_check\">
\t\t\t\t\t\t\t<button id=\"select-all\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.checkall", array(), "BoAdminBundle"), "html", null, true);
            echo " </button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t\t<!--td class=\"td_uncheck\">
\t\t\t\t\t\t<button id=\"deselect-all\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.uncheckall", array(), "BoAdminBundle"), "html", null, true);
        echo " </button>
\t\t\t\t\t</td-->
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" id=\"btn-create\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("employee_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees"))), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_052121dc58273aaf8a4b8d57a70349a728da57faa90dda937cf7ac524e9b5fef->leave($__internal_052121dc58273aaf8a4b8d57a70349a728da57faa90dda937cf7ac524e9b5fef_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:slaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  54 => 17,  48 => 14,  42 => 11,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if employees|length>0%}*/
/* 						<td class="td_check">*/
/* 							<button id="select-all">{{'action.checkall'|trans([],'BoAdminBundle')}} </button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<!--td class="td_uncheck">*/
/* 						<button id="deselect-all">{{'action.uncheckall'|trans([],'BoAdminBundle')}} </button>*/
/* 					</td-->*/
/* 					<td>*/
/* 						<button type="submit" id="btn-create">{{'action.send'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('employee_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.employee'|trans([],'BoAdminBundle')}} <span class="badge">{{employees|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>*/
/* */
