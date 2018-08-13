<?php

/* BoAdvisorsBundle:Enquiry:editactions.html.twig */
class __TwigTemplate_9087dade48b3e0675c76374500d0ff706f1ee68241b22ca11dfda9520674685d extends Twig_Template
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
        $__internal_708e836e3357dc21b4df6d892e04c4f33a3509dbed45ce891501e6d295f02897 = $this->env->getExtension("native_profiler");
        $__internal_708e836e3357dc21b4df6d892e04c4f33a3509dbed45ce891501e6d295f02897->enter($__internal_708e836e3357dc21b4df6d892e04c4f33a3509dbed45ce891501e6d295f02897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:editactions.html.twig"));

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
\t\t\t\t\t\t";
        // line 7
        if (array_key_exists("idcontract", $context)) {
            // line 8
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("dash_enquiry_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_708e836e3357dc21b4df6d892e04c4f33a3509dbed45ce891501e6d295f02897->leave($__internal_708e836e3357dc21b4df6d892e04c4f33a3509dbed45ce891501e6d295f02897_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:editactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  43 => 10,  35 => 8,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						{%if idcontract is defined%}*/
/* 							<a href="{{ path('contracts_show',{'id':idcontract}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%else%}*/
/* 							<a href="{{ path('dash_enquiry_index')}}">{{'action.back'|trans([],'BoAdminBundle')}}</a>						*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
