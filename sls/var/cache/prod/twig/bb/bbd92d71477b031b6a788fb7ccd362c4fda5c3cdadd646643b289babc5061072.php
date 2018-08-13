<?php

/* BoStudentBundle:Tickets:showactions.html.twig */
class __TwigTemplate_4e2acefe5c098dc2973949369db8abdfdca7efa8c695dafdaa39d5a0ba838e96 extends Twig_Template
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
        $__internal_371c7199eb6682a6d71364c31c8e90220bedc92e7e2ac2db833858c3698416d6 = $this->env->getExtension("native_profiler");
        $__internal_371c7199eb6682a6d71364c31c8e90220bedc92e7e2ac2db833858c3698416d6->enter($__internal_371c7199eb6682a6d71364c31c8e90220bedc92e7e2ac2db833858c3698416d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Tickets:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("student_tickets_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_371c7199eb6682a6d71364c31c8e90220bedc92e7e2ac2db833858c3698416d6->leave($__internal_371c7199eb6682a6d71364c31c8e90220bedc92e7e2ac2db833858c3698416d6_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Tickets:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('student_tickets_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
