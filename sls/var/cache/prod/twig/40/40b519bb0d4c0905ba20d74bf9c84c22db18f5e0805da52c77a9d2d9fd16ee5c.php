<?php

/* BoAdvisorsBundle:Timesheet:addactions.html.twig */
class __TwigTemplate_cadca32ac95f8b7797ac8407b1dab1a69cc787d84d4b5a848d4024077a2b033d extends Twig_Template
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
        $__internal_da79ed90063d31a9ebdf9e3c267e9d92a99792c70a222c43c7a5a7a9b9c28619 = $this->env->getExtension("native_profiler");
        $__internal_da79ed90063d31a9ebdf9e3c267e9d92a99792c70a222c43c7a5a7a9b9c28619->enter($__internal_da79ed90063d31a9ebdf9e3c267e9d92a99792c70a222c43c7a5a7a9b9c28619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:addactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("bo_advisors_mycontracts");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_da79ed90063d31a9ebdf9e3c267e9d92a99792c70a222c43c7a5a7a9b9c28619->leave($__internal_da79ed90063d31a9ebdf9e3c267e9d92a99792c70a222c43c7a5a7a9b9c28619_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:addactions.html.twig";
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
/* 						<a href="{{ path('bo_advisors_mycontracts') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
