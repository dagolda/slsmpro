<?php

/* BoAdminBundle:Company:editactions.html.twig */
class __TwigTemplate_d4d7e30666785e3b8814092e12d4ddff50ad8d9128068ee91e8ab7f3fcc79853 extends Twig_Template
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
        $__internal_0b6a8f27bbf4bb290a7d1d78a53becaee8fb0c240ac3a52496867f088d45c290 = $this->env->getExtension("native_profiler");
        $__internal_0b6a8f27bbf4bb290a7d1d78a53becaee8fb0c240ac3a52496867f088d45c290->enter($__internal_0b6a8f27bbf4bb290a7d1d78a53becaee8fb0c240ac3a52496867f088d45c290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Company:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a id='back' href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("company_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_0b6a8f27bbf4bb290a7d1d78a53becaee8fb0c240ac3a52496867f088d45c290->leave($__internal_0b6a8f27bbf4bb290a7d1d78a53becaee8fb0c240ac3a52496867f088d45c290_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Company:editactions.html.twig";
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
/* 					<td><button id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a id='back' href="{{ path('company_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
