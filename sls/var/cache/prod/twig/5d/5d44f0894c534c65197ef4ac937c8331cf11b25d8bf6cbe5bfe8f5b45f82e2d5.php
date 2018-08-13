<?php

/* BoAdminBundle:Rubric:subeditactions.html.twig */
class __TwigTemplate_fade26a61429e9eed05300aed9f7e198fefa11781dc74051a2069709ea178e8b extends Twig_Template
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
        $__internal_46373cad84260d2a0d62ac4bfb8f00e752c3a1be06057fdc59cd8fcb12d1f557 = $this->env->getExtension("native_profiler");
        $__internal_46373cad84260d2a0d62ac4bfb8f00e752c3a1be06057fdc59cd8fcb12d1f557->enter($__internal_46373cad84260d2a0d62ac4bfb8f00e752c3a1be06057fdc59cd8fcb12d1f557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:subeditactions.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubric_show", array("id" => $this->getAttribute((isset($context["subrubric"]) ? $context["subrubric"] : $this->getContext($context, "subrubric")), "idrubric", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_46373cad84260d2a0d62ac4bfb8f00e752c3a1be06057fdc59cd8fcb12d1f557->leave($__internal_46373cad84260d2a0d62ac4bfb8f00e752c3a1be06057fdc59cd8fcb12d1f557_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:subeditactions.html.twig";
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
/* 						<a href="{{ path('rubric_show', { 'id': subrubric.idrubric }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
