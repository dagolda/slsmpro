<?php

/* BoAdminBundle:Tools:scheduleactions.html.twig */
class __TwigTemplate_b80b09e6a5f2043a755a434457bc035cb80cded4c15884c8d4e2cf72e5c3c853 extends Twig_Template
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
        $__internal_0d616dc8b8abfe87f595fe01cbe4649cfc7b0fb3c2cd5329ce3593b8225aa9fa = $this->env->getExtension("native_profiler");
        $__internal_0d616dc8b8abfe87f595fe01cbe4649cfc7b0fb3c2cd5329ce3593b8225aa9fa->enter($__internal_0d616dc8b8abfe87f595fe01cbe4649cfc7b0fb3c2cd5329ce3593b8225aa9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tools:scheduleactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tools_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_0d616dc8b8abfe87f595fe01cbe4649cfc7b0fb3c2cd5329ce3593b8225aa9fa->leave($__internal_0d616dc8b8abfe87f595fe01cbe4649cfc7b0fb3c2cd5329ce3593b8225aa9fa_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tools:scheduleactions.html.twig";
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
/* 						<a href="{{ path('tools_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
