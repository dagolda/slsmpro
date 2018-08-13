<?php

/* BoAdminBundle:Evaluation:showactions.html.twig */
class __TwigTemplate_98daf725a8d156e8a0c507a7cdf93b9d7d23f75fc605fb3edf003e5e0f26ad18 extends Twig_Template
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
        $__internal_87a3b63e1434d97def06be3682e03f9dc7cdbad4f1501a68128b101a3b5cc846 = $this->env->getExtension("native_profiler");
        $__internal_87a3b63e1434d97def06be3682e03f9dc7cdbad4f1501a68128b101a3b5cc846->enter($__internal_87a3b63e1434d97def06be3682e03f9dc7cdbad4f1501a68128b101a3b5cc846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ADMINISTRATION", array(), "array", false, true), "Evaluation", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Evaluation", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>\t
\t\t\t\t\t";
        }
        // line 9
        echo "\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_back", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 13
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ADMINISTRATION", array(), "array", false, true), "Evaluation", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Evaluation", array(), "array"), "edit", array()) == 1)) || ((isset($context["connected"]) ? $context["connected"] : $this->getContext($context, "connected")) == $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array())))) {
            // line 14
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 15
            if ((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 1) || ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 11))) {
                // line 16
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#evaluate\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.evaluate", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#edit_eval\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 1) || ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 11))) {
            // line 23
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#editfirst_eval\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))) > 0)) {
            // line 28
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_evalquiz", array("id" => $this->getAttribute((isset($context["evalquiz"]) ? $context["evalquiz"] : $this->getContext($context, "evalquiz")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.onlineresult", array(), "BoAdminBundle"), "html", null, true);
            echo " </a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 2)) {
            // line 33
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_sendresult", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.result", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<!--td class=\"delete-action\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#remove_pdf\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.removepdf", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td-->
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "confirmation", array()) != null)) {
            // line 41
            echo "\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.confirmationsent", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "confirmation", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 1) && ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "confirmation", array()) == 0))) {
            // line 48
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_confirmation", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sendconfirmation", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_confirmation", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.resend", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_87a3b63e1434d97def06be3682e03f9dc7cdbad4f1501a68128b101a3b5cc846->leave($__internal_87a3b63e1434d97def06be3682e03f9dc7cdbad4f1501a68128b101a3b5cc846_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  154 => 53,  151 => 52,  143 => 49,  140 => 48,  137 => 47,  128 => 43,  124 => 41,  121 => 40,  115 => 37,  105 => 34,  102 => 33,  99 => 32,  91 => 29,  88 => 28,  85 => 27,  79 => 24,  76 => 23,  73 => 22,  69 => 20,  63 => 18,  57 => 16,  55 => 15,  52 => 14,  50 => 13,  43 => 11,  39 => 9,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if app.session.get('rights')['ADMINISTRATION']['Evaluation'] is defined and app.session.get('rights')['ADMINISTRATION']['Evaluation'].ddelete==1%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>	*/
/* 					{%endif%}					*/
/* 					<td>*/
/* 						<a href="{{ path('evaluation_back',{'page':page}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%if (app.session.get('rights')['ADMINISTRATION']['Evaluation'] is defined and app.session.get('rights')['ADMINISTRATION']['Evaluation'].edit==1) or(connected==evaluation.evaluator)%}*/
/* 						<td>*/
/* 							{%if evaluation.status==1 or evaluation.status==11%}*/
/* 								<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#evaluate">{{'action.evaluate'|trans([],'BoAdminBundle')}}</button>*/
/* 							{%else%}*/
/* 								<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#edit_eval">{{'action.edit'|trans([],'BoAdminBundle')}}</button>*/
/* 							{%endif%}*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if evaluation.status==1 or evaluation.status==11%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#editfirst_eval">{{'action.edit'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{% if results|length>0 %}*/
/* 						<td>*/
/* 							<a href="{{ path('evaluation_evalquiz',{'id':evalquiz.id}) }}">{{'label.onlineresult'|trans([],'BoAdminBundle')}} </a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if evaluation.status==2%}*/
/* 						<td>*/
/* 							<a href="{{ path('evaluation_sendresult',{'id':evaluation.id}) }}">{{'action.send'|trans([],'BoAdminBundle')}} {{'label.result'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 						<!--td class="delete-action">*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#remove_pdf">{{'action.removepdf'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td-->*/
/* 					{%endif%}*/
/* 					{%if evaluation.confirmation!=null%}*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								{{'label.confirmationsent'|trans([],'BoAdminBundle')}} <span class="badge">{{evaluation.confirmation}}</span>*/
/* 							</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if evaluation.status==1 and evaluation.confirmation==0%}*/
/* 						<td>*/
/* 							<a href="{{ path('evaluation_confirmation',{'id':evaluation.id}) }}">{{'action.sendconfirmation'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%else%}*/
/* 						<td>*/
/* 							<a href="{{ path('evaluation_confirmation',{'id':evaluation.id}) }}">{{'action.resend'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
