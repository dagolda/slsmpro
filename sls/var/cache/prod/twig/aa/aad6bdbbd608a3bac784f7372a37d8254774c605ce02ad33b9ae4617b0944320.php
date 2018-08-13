<?php

/* BoAdminBundle:Local:newactions.html.twig */
class __TwigTemplate_d5bc511af410aa451d1254574499998829de15c883643ea59a1b38c27aee8201 extends Twig_Template
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
        $__internal_9c0960c4fbe64afb142954415181283923e5e07507b91e136f25c35a7b1428ee = $this->env->getExtension("native_profiler");
        $__internal_9c0960c4fbe64afb142954415181283923e5e07507b91e136f25c35a7b1428ee->enter($__internal_9c0960c4fbe64afb142954415181283923e5e07507b91e136f25c35a7b1428ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:newactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("local_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_9c0960c4fbe64afb142954415181283923e5e07507b91e136f25c35a7b1428ee->leave($__internal_9c0960c4fbe64afb142954415181283923e5e07507b91e136f25c35a7b1428ee_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:newactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('local_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
