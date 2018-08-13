<?php

/* BoAdminBundle:Advisors:editactions.html.twig */
class __TwigTemplate_8dab9c30ebed7f2cb2700d7a34ac08c88c10f8dcd4d1d6bfb04ecbfcd733e77c extends Twig_Template
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
        $__internal_0c758815c40119c819368a39f4983d756885c170a4f730713a6e0d04bc42830b = $this->env->getExtension("native_profiler");
        $__internal_0c758815c40119c819368a39f4983d756885c170a4f730713a6e0d04bc42830b->enter($__internal_0c758815c40119c819368a39f4983d756885c170a4f730713a6e0d04bc42830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("advisors_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_0c758815c40119c819368a39f4983d756885c170a4f730713a6e0d04bc42830b->leave($__internal_0c758815c40119c819368a39f4983d756885c170a4f730713a6e0d04bc42830b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:editactions.html.twig";
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
/* 						<a href="{{ path('advisors_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
