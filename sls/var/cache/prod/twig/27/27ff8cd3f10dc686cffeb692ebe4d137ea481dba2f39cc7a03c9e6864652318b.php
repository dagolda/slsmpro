<?php

/* BoAdvisorsBundle:Absences:newactions.html.twig */
class __TwigTemplate_064420dc3f20284a16972b00d85f22e8b7fd7884dc584a8b80529953a58c59ab extends Twig_Template
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
        $__internal_5e6fd186b2e29ee440d3b4412ae04742debbb3bc3ecefaaa3f8d1b53104e2aab = $this->env->getExtension("native_profiler");
        $__internal_5e6fd186b2e29ee440d3b4412ae04742debbb3bc3ecefaaa3f8d1b53104e2aab->enter($__internal_5e6fd186b2e29ee440d3b4412ae04742debbb3bc3ecefaaa3f8d1b53104e2aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:newactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("dash_absences_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_5e6fd186b2e29ee440d3b4412ae04742debbb3bc3ecefaaa3f8d1b53104e2aab->leave($__internal_5e6fd186b2e29ee440d3b4412ae04742debbb3bc3ecefaaa3f8d1b53104e2aab_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:newactions.html.twig";
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
/* 						<a href="{{ path('dash_absences_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
