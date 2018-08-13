<?php

/* BoAdminBundle:Students:availableactions.html.twig */
class __TwigTemplate_599bcddf63f238bed41578ff874da82afcde4ebc27a047a7b97b90f9ac18dda5 extends Twig_Template
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
        $__internal_9498061743b3e9befaab3a4238000962ac45c4b9357447056fabdb453d1533b0 = $this->env->getExtension("native_profiler");
        $__internal_9498061743b3e9befaab3a4238000962ac45c4b9357447056fabdb453d1533b0->enter($__internal_9498061743b3e9befaab3a4238000962ac45c4b9357447056fabdb453d1533b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:availableactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("students_absence_day");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a></td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "<span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees"))), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_9498061743b3e9befaab3a4238000962ac45c4b9357447056fabdb453d1533b0->leave($__internal_9498061743b3e9befaab3a4238000962ac45c4b9357447056fabdb453d1533b0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:availableactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><a href="{{ path('students_absence_day') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a></td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'label.teacher'|trans([],'BoAdminBundle')}}<span class="badge">{{employees|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
