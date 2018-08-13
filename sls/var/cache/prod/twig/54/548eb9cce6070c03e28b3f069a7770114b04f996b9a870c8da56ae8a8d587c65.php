<?php

/* BoAdminBundle:Color:editactions.html.twig */
class __TwigTemplate_18939fdabf3e8a9668ff07f45e0f231028bb4be72e6a061b2507afef495d0b67 extends Twig_Template
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
        $__internal_8d14dd2d722d8b0f7c3423da739dd220d96e8ab62e2b70631179faee68a5fe4a = $this->env->getExtension("native_profiler");
        $__internal_8d14dd2d722d8b0f7c3423da739dd220d96e8ab62e2b70631179faee68a5fe4a->enter($__internal_8d14dd2d722d8b0f7c3423da739dd220d96e8ab62e2b70631179faee68a5fe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Color:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("color_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_8d14dd2d722d8b0f7c3423da739dd220d96e8ab62e2b70631179faee68a5fe4a->leave($__internal_8d14dd2d722d8b0f7c3423da739dd220d96e8ab62e2b70631179faee68a5fe4a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Color:editactions.html.twig";
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
/* 						<a href="{{ path('color_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
