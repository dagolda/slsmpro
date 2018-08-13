<?php

/* BoAdminBundle:Substitution:newactions.html.twig */
class __TwigTemplate_2a66bbb91270ac0275c96a8968b24b4e251ef85df4acc99605eac3ac35d50268 extends Twig_Template
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
        $__internal_cdc7c27d29c0d3250f737685ad2bfb80ee726efa02e45a30a2b2e76671497c31 = $this->env->getExtension("native_profiler");
        $__internal_cdc7c27d29c0d3250f737685ad2bfb80ee726efa02e45a30a2b2e76671497c31->enter($__internal_cdc7c27d29c0d3250f737685ad2bfb80ee726efa02e45a30a2b2e76671497c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:newactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "creation", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 9
        if ((array_key_exists("contract", $context) && (isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")))) {
            // line 10
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        } elseif (        // line 11
array_key_exists("url", $context)) {
            // line 12
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_cdc7c27d29c0d3250f737685ad2bfb80ee726efa02e45a30a2b2e76671497c31->leave($__internal_cdc7c27d29c0d3250f737685ad2bfb80ee726efa02e45a30a2b2e76671497c31_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:newactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  50 => 12,  48 => 11,  41 => 10,  39 => 9,  36 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].creation==1%}*/
/* 					<td><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						{%if contract is defined and contract%}*/
/* 							<a href="{{ path('contracts_show', { 'id': contract.id }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%elseif url is defined%}*/
/* 							<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
