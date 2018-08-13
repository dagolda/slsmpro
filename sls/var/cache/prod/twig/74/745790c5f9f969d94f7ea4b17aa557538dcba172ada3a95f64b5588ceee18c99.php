<?php

/* BoAdminBundle:Coordinator:newactions.html.twig */
class __TwigTemplate_6314f976464e0ea4ac903b5ae683a6a84cacd5c8a65a9c86df2eec7caeea16fd extends Twig_Template
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
        $__internal_51026ad7fcc2a6d476af7a0af10879bb76a26e8cf63800087c3df937bb2477db = $this->env->getExtension("native_profiler");
        $__internal_51026ad7fcc2a6d476af7a0af10879bb76a26e8cf63800087c3df937bb2477db->enter($__internal_51026ad7fcc2a6d476af7a0af10879bb76a26e8cf63800087c3df937bb2477db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:newactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("coordinator_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_51026ad7fcc2a6d476af7a0af10879bb76a26e8cf63800087c3df937bb2477db->leave($__internal_51026ad7fcc2a6d476af7a0af10879bb76a26e8cf63800087c3df937bb2477db_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:newactions.html.twig";
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
/* 						<a href="{{ path('coordinator_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
