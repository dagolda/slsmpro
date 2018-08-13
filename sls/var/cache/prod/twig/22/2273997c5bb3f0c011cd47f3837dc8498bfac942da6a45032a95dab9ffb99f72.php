<?php

/* BoAdminBundle:Histocontract:actions.html.twig */
class __TwigTemplate_4f7f2c6d306520547a88846ec33a4cbd467d1ce3d699c16bbd98d3e432026ddd extends Twig_Template
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
        $__internal_c3233bf30f178098d5f74ca9d4581a6c74d7f7a81bc16166beef5e15309c8518 = $this->env->getExtension("native_profiler");
        $__internal_c3233bf30f178098d5f74ca9d4581a6c74d7f7a81bc16166beef5e15309c8518->enter($__internal_c3233bf30f178098d5f74ca9d4581a6c74d7f7a81bc16166beef5e15309c8518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Histocontract:actions.html.twig"));

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
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_c3233bf30f178098d5f74ca9d4581a6c74d7f7a81bc16166beef5e15309c8518->leave($__internal_c3233bf30f178098d5f74ca9d4581a6c74d7f7a81bc16166beef5e15309c8518_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Histocontract:actions.html.twig";
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
/* 						<a href="{{ path('contracts_show',{'id':contract.id}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>*/
/* */
