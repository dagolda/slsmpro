<?php

/* BoAdminBundle:Evaluation:editactions.html.twig */
class __TwigTemplate_6db366ed2980a638abca995d4c1d0886b377161e4b23efe5dacc2b7548330a53 extends Twig_Template
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
        $__internal_561d4c7b22417fbbfaa5f4647c8517b9dc3025ae6d555cda82a22d33ebcef065 = $this->env->getExtension("native_profiler");
        $__internal_561d4c7b22417fbbfaa5f4647c8517b9dc3025ae6d555cda82a22d33ebcef065->enter($__internal_561d4c7b22417fbbfaa5f4647c8517b9dc3025ae6d555cda82a22d33ebcef065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_index", array("option" => (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a></td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_561d4c7b22417fbbfaa5f4647c8517b9dc3025ae6d555cda82a22d33ebcef065->leave($__internal_561d4c7b22417fbbfaa5f4647c8517b9dc3025ae6d555cda82a22d33ebcef065_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:editactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td><a href="{{ path('evaluation_index',{'option':option}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a></td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
