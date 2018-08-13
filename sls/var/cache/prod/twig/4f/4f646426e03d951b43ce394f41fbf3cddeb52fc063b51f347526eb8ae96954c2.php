<?php

/* BoStudentBundle:Default:contactaction.html.twig */
class __TwigTemplate_c74640a968a84965d1b6f9a14be39d42adeb3a15f64c53ffe952c2fe14743a9a extends Twig_Template
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
        $__internal_1a52db361277cf68ebb45b27a4cd1e1598763df744c2c39b2d95c2ee8f4cdb95 = $this->env->getExtension("native_profiler");
        $__internal_1a52db361277cf68ebb45b27a4cd1e1598763df744c2c39b2d95c2ee8f4cdb95->enter($__internal_1a52db361277cf68ebb45b27a4cd1e1598763df744c2c39b2d95c2ee8f4cdb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Default:contactaction.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("bo_student_teamcontact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_1a52db361277cf68ebb45b27a4cd1e1598763df744c2c39b2d95c2ee8f4cdb95->leave($__internal_1a52db361277cf68ebb45b27a4cd1e1598763df744c2c39b2d95c2ee8f4cdb95_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Default:contactaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  31 => 8,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('bo_student_teamcontact') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
