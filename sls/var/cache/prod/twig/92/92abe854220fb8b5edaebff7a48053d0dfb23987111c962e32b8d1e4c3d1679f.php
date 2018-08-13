<?php

/* BoAdminBundle:Substitution:editactions.html.twig */
class __TwigTemplate_c68f52d0234b1ee64db172da9e417c0679fc21bde6c063bbee8d1350ac7bf441 extends Twig_Template
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
        $__internal_c541560297538a3548969c08e022e6ffc15cffe509d92156bcdd8cd3737087f7 = $this->env->getExtension("native_profiler");
        $__internal_c541560297538a3548969c08e022e6ffc15cffe509d92156bcdd8cd3737087f7->enter($__internal_c541560297538a3548969c08e022e6ffc15cffe509d92156bcdd8cd3737087f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("substitution_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_c541560297538a3548969c08e022e6ffc15cffe509d92156bcdd8cd3737087f7->leave($__internal_c541560297538a3548969c08e022e6ffc15cffe509d92156bcdd8cd3737087f7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:editactions.html.twig";
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
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('substitution_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
