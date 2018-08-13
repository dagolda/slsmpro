<?php

/* BoAdvisorsBundle:Help:actions.html.twig */
class __TwigTemplate_ee4c4a96b8deffec2181d50baa508d6bf578f86df3dbeb11fa85bc4e8f908cbd extends Twig_Template
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
        $__internal_c512372e5ce8420fa2e95f789cda96027f5e0d71914994a281ee29ff1fc8202f = $this->env->getExtension("native_profiler");
        $__internal_c512372e5ce8420fa2e95f789cda96027f5e0d71914994a281ee29ff1fc8202f->enter($__internal_c512372e5ce8420fa2e95f789cda96027f5e0d71914994a281ee29ff1fc8202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Help:actions.html.twig"));

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
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_help\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_c512372e5ce8420fa2e95f789cda96027f5e0d71914994a281ee29ff1fc8202f->leave($__internal_c512372e5ce8420fa2e95f789cda96027f5e0d71914994a281ee29ff1fc8202f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Help:actions.html.twig";
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
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_help">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
