<?php

/* BoAdminBundle:Group:newactions.html.twig */
class __TwigTemplate_0de67c48e5817f8aa3b5dd464fd7ee28136c986e5a639881d36d6132357e75dc extends Twig_Template
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
        $__internal_2735369f6e5c7703ac86eb4c555011f9e3970d387f9a8ae9f18bb6b3fab9bfac = $this->env->getExtension("native_profiler");
        $__internal_2735369f6e5c7703ac86eb4c555011f9e3970d387f9a8ae9f18bb6b3fab9bfac->enter($__internal_2735369f6e5c7703ac86eb4c555011f9e3970d387f9a8ae9f18bb6b3fab9bfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:newactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("group_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_2735369f6e5c7703ac86eb4c555011f9e3970d387f9a8ae9f18bb6b3fab9bfac->leave($__internal_2735369f6e5c7703ac86eb4c555011f9e3970d387f9a8ae9f18bb6b3fab9bfac_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:newactions.html.twig";
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
/* 						<a href="{{ path('group_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
