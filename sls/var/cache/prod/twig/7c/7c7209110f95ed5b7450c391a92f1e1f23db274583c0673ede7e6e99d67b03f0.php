<?php

/* BoAdminBundle:Holidayslist:actions.html.twig */
class __TwigTemplate_9e990b7a3d037d5ee93084d09d2f5d427e16ea84b67c2fc4158d1b77b7b3ecec extends Twig_Template
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
        $__internal_9217b73f83ce2c7134244eb252797bdbafb1eb713e9c02542dd484ca47a6b63f = $this->env->getExtension("native_profiler");
        $__internal_9217b73f83ce2c7134244eb252797bdbafb1eb713e9c02542dd484ca47a6b63f->enter($__internal_9217b73f83ce2c7134244eb252797bdbafb1eb713e9c02542dd484ca47a6b63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Holidayslist:actions.html.twig"));

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
\t\t\t\t\t";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "creation", array()) == 1))) {
            // line 10
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_holiday\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_9217b73f83ce2c7134244eb252797bdbafb1eb713e9c02542dd484ca47a6b63f->leave($__internal_9217b73f83ce2c7134244eb252797bdbafb1eb713e9c02542dd484ca47a6b63f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Holidayslist:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  40 => 11,  37 => 10,  35 => 9,  31 => 8,  22 => 1,);
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
/* 					{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_holiday">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
