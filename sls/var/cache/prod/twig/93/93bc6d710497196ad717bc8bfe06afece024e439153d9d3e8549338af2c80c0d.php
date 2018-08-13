<?php

/* BoAdvisorsBundle:Orderform:actions.html.twig */
class __TwigTemplate_bd8c5af6c1f3c7b6d26f6a4cf84abb7e92d5cedd50a81279f4b350a39898e602 extends Twig_Template
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
        $__internal_6a10643a14907c66b6144147889020a70e24ae1a04546b900240ed52ab1b60e4 = $this->env->getExtension("native_profiler");
        $__internal_6a10643a14907c66b6144147889020a70e24ae1a04546b900240ed52ab1b60e4->enter($__internal_6a10643a14907c66b6144147889020a70e24ae1a04546b900240ed52ab1b60e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_search\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td-->
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("dash_orderform_headsup");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.headsup", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("dash_orderform_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<span class=\"btn wax_3d_1\">
\t\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.created", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"btn validated\">
\t\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.headsup", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"btn rejected\">
\t\t\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractcreated", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</td-->
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"sty_label\"><b>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo ":</b></div>
\t\t\t\t\t\t";
        // line 38
        $this->loadTemplate("BoAdvisorsBundle:Orderform:status.html.twig", "BoAdvisorsBundle:Orderform:actions.html.twig", 38)->display($context);
        // line 39
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_6a10643a14907c66b6144147889020a70e24ae1a04546b900240ed52ab1b60e4->leave($__internal_6a10643a14907c66b6144147889020a70e24ae1a04546b900240ed52ab1b60e4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  94 => 38,  90 => 37,  83 => 33,  77 => 30,  71 => 27,  61 => 22,  52 => 18,  44 => 15,  38 => 12,  32 => 9,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<!--td>*/
/* 						<a href="#">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td-->*/
/* 					<td>*/
/* 						<a href="{{ path('dash_orderform_headsup') }}">{{'label.headsup'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('dash_orderform_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.orderform'|trans([],'BoAdminBundle')}} <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 					<!--td>*/
/* 						<span class="btn wax_3d_1">*/
/* 							{{'label.created'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 						<span class="btn validated">*/
/* 							{{'label.headsup'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 						<span class="btn rejected">*/
/* 							{{'label.contractcreated'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 					</td-->*/
/* 					<td>*/
/* 						<div class="sty_label"><b>{{'label.status'|trans([],'BoAdminBundle')}}:</b></div>*/
/* 						{% include "BoAdvisorsBundle:Orderform:status.html.twig" %}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
