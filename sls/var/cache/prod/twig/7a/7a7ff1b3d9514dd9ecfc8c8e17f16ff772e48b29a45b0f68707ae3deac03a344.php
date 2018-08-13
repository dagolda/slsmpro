<?php

/* BoAdvisorsBundle:Enquiry:showactions.html.twig */
class __TwigTemplate_7d6337eb4bad91421e7ab0f0fa6bee4b1e9a7cdd3563776bb5f23954bb3b17e3 extends Twig_Template
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
        $__internal_959c474f5f6b60d0fc87e47d8ac7b4b6fe623e171a672bbef6e550df48adf720 = $this->env->getExtension("native_profiler");
        $__internal_959c474f5f6b60d0fc87e47d8ac7b4b6fe623e171a672bbef6e550df48adf720->enter($__internal_959c474f5f6b60d0fc87e47d8ac7b4b6fe623e171a672bbef6e550df48adf720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if (($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array()) == 1)) {
            // line 6
            echo "\t\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_back");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 13
        if (($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array()) == 1)) {
            // line 14
            echo "\t\t\t\t\t\t<td class=\"btn_resolved\">
\t\t\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_orderform_new", array("id" => $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.resolve", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"btn_notresolved\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btn_notresolved\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.notresolved", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array()) != 2)) {
            // line 22
            echo "\t\t\t\t\t\t<!--td class=\"btn_resolved\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btn_resolved\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.resolved", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td-->
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 27
        if (($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array()) == 1)) {
            // line 28
            echo "\t\t\t\t\t\t\t<span class=\"btn wax_3d_1\">
\t\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.created", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 31
(isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array()) == 2)) {
            // line 32
            echo "\t\t\t\t\t\t\t<span class=\"btn validated\">
\t\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolved", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 35
(isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array()) == 3)) {
            // line 36
            echo "\t\t\t\t\t\t\t<span class=\"btn rejected\">
\t\t\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notresolved", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_959c474f5f6b60d0fc87e47d8ac7b4b6fe623e171a672bbef6e550df48adf720->leave($__internal_959c474f5f6b60d0fc87e47d8ac7b4b6fe623e171a672bbef6e550df48adf720_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  112 => 37,  109 => 36,  107 => 35,  102 => 33,  99 => 32,  97 => 31,  92 => 29,  89 => 28,  87 => 27,  84 => 26,  76 => 23,  73 => 22,  70 => 21,  62 => 18,  54 => 15,  51 => 14,  49 => 13,  42 => 11,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if enquiry.status==1%}*/
/* 						<td class="delete-action">*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('dash_enquiry_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%if enquiry.status==1%}*/
/* 						<td class="btn_resolved">*/
/* 							<a href="{{ path('dash_orderform_new',{'id':enquiry.id}) }}">{{'action.resolve'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 						<td class="btn_notresolved">*/
/* 							<button type="button" id="btn_notresolved" value="{{enquiry.id}}">{{'action.notresolved'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if enquiry.status!=2%}*/
/* 						<!--td class="btn_resolved">*/
/* 							<button type="button" id="btn_resolved" value="{{enquiry.id}}">{{'action.resolved'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td-->*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						{%if enquiry.status==1%}*/
/* 							<span class="btn wax_3d_1">*/
/* 								{{'label.created'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif enquiry.status==2%}*/
/* 							<span class="btn validated">*/
/* 								{{'label.resolved'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif enquiry.status==3%}*/
/* 							<span class="btn rejected">*/
/* 								{{'label.notresolved'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
