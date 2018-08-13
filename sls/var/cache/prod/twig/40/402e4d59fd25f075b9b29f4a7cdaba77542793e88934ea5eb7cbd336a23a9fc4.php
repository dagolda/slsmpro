<?php

/* BoAdminBundle:Agenda:newactions.html.twig */
class __TwigTemplate_867232a6ffb528d9a6946ceef964542d9409d4633d6bc8b5ab99fc5d0ab0638a extends Twig_Template
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
        $__internal_c02ff2cb5de4b68f325e14a0d980cd3f97462e30ffe867a49c4dd5bf42b72012 = $this->env->getExtension("native_profiler");
        $__internal_c02ff2cb5de4b68f325e14a0d980cd3f97462e30ffe867a49c4dd5bf42b72012->enter($__internal_c02ff2cb5de4b68f325e14a0d980cd3f97462e30ffe867a49c4dd5bf42b72012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:newactions.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>";
        
        $__internal_c02ff2cb5de4b68f325e14a0d980cd3f97462e30ffe867a49c4dd5bf42b72012->leave($__internal_c02ff2cb5de4b68f325e14a0d980cd3f97462e30ffe867a49c4dd5bf42b72012_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:newactions.html.twig";
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
/* 						<a href="{{ path('contracts_show',{'id':idcontract}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>*/
