<?php

/* BoAdminBundle:Pricesreference:actions.html.twig */
class __TwigTemplate_920fdbe6e12f43bf9e34055e2ae56eb01bcb3419f7a12b44678e783161f047b0 extends Twig_Template
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
        $__internal_3868b77f57ce17d3321e1ccdbb5947351b5b0eba23431d9a8de067ce7ce2c4e2 = $this->env->getExtension("native_profiler");
        $__internal_3868b77f57ce17d3321e1ccdbb5947351b5b0eba23431d9a8de067ce7ce2c4e2->enter($__internal_3868b77f57ce17d3321e1ccdbb5947351b5b0eba23431d9a8de067ce7ce2c4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Pricesreference:actions.html.twig"));

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
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_priceguide\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("otherprices_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.other", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.price", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pricesreference_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_3868b77f57ce17d3321e1ccdbb5947351b5b0eba23431d9a8de067ce7ce2c4e2->leave($__internal_3868b77f57ce17d3321e1ccdbb5947351b5b0eba23431d9a8de067ce7ce2c4e2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Pricesreference:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  52 => 16,  42 => 13,  36 => 10,  31 => 8,  22 => 1,);
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
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_priceguide">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('otherprices_index') }}">{{'label.other'|trans([],'BoAdminBundle')}} {{'label.price'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('pricesreference_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.setting'|trans([],'BoAdminBundle')}} <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
