<?php

/* BoAdminBundle:Rubric:editactions.html.twig */
class __TwigTemplate_2e9fb897543d63a4163a6d7e18ac569f6e328cab92e39af5c5dcb1890ab287d0 extends Twig_Template
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
        $__internal_d8c9a7b810dc619cee29a4007c7f8ad787e40109c629c586bf0844d709f0d9b3 = $this->env->getExtension("native_profiler");
        $__internal_d8c9a7b810dc619cee29a4007c7f8ad787e40109c629c586bf0844d709f0d9b3->enter($__internal_d8c9a7b810dc619cee29a4007c7f8ad787e40109c629c586bf0844d709f0d9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("rubric_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_d8c9a7b810dc619cee29a4007c7f8ad787e40109c629c586bf0844d709f0d9b3->leave($__internal_d8c9a7b810dc619cee29a4007c7f8ad787e40109c629c586bf0844d709f0d9b3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:editactions.html.twig";
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
/* 						<a href="{{ path('rubric_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
