<?php

/* BoAdminBundle:Otherprices:actions.html.twig */
class __TwigTemplate_fe03108aca4a7dcbeafd040fc278f44bbe09a3796d5e026bd2a788db6f07985f extends Twig_Template
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
        $__internal_8bd061611545e0cf1be91e9a7e90543ffe1d806d17a38a684ec76ec6ae2feb2c = $this->env->getExtension("native_profiler");
        $__internal_8bd061611545e0cf1be91e9a7e90543ffe1d806d17a38a684ec76ec6ae2feb2c->enter($__internal_8bd061611545e0cf1be91e9a7e90543ffe1d806d17a38a684ec76ec6ae2feb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Otherprices:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_price\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("pricesreference_index");
        echo "\">NMSO ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.price", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("otherprices_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["otherprices"]) ? $context["otherprices"] : $this->getContext($context, "otherprices"))), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_8bd061611545e0cf1be91e9a7e90543ffe1d806d17a38a684ec76ec6ae2feb2c->leave($__internal_8bd061611545e0cf1be91e9a7e90543ffe1d806d17a38a684ec76ec6ae2feb2c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Otherprices:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  43 => 12,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_price">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('pricesreference_index') }}">NMSO {{'label.price'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('otherprices_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.setting'|trans([],'BoAdminBundle')}} <span class="badge">{{otherprices|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
