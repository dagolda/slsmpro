<?php

/* BoAdminBundle:Agenda:editactions.html.twig */
class __TwigTemplate_83032b64e69062ced9c8735b74ba1755fa3fb7b2e4492e37b023da0d96a820b7 extends Twig_Template
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
        $__internal_69b7da68b0400ed070cd86c0f9b7d33a255d8ce95e98f1d6f108be3682cff37f = $this->env->getExtension("native_profiler");
        $__internal_69b7da68b0400ed070cd86c0f9b7d33a255d8ce95e98f1d6f108be3682cff37f->enter($__internal_69b7da68b0400ed070cd86c0f9b7d33a255d8ce95e98f1d6f108be3682cff37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t";
        // line 6
        if (((isset($context["force"]) ? $context["force"] : $this->getContext($context, "force")) == 1)) {
            // line 7
            echo "\t\t\t\t\t\t<td><button type=\"submit\" id=\"btn-force\" name=\"btn-force\" value=\"1\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.force", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 10
        if (array_key_exists("contracts", $context)) {
            // line 11
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t</td>

\t\t\t\t\t";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "ddelete", array()) == 1))) {
            // line 18
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_69b7da68b0400ed070cd86c0f9b7d33a255d8ce95e98f1d6f108be3682cff37f->leave($__internal_69b7da68b0400ed070cd86c0f9b7d33a255d8ce95e98f1d6f108be3682cff37f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:editactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  72 => 20,  68 => 18,  66 => 17,  62 => 15,  54 => 13,  46 => 11,  44 => 10,  40 => 8,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					{%if force==1%}*/
/* 						<td><button type="submit" id="btn-force" name="btn-force" value="1">{{'label.force'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					{%endif%}					*/
/* 					<td>*/
/* 						{%if contracts is defined%}*/
/* 							<a href="{{ path('contracts_show',{'id':contract.id}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%else%}*/
/* 							<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%endif%}*/
/* 					</td>*/
/* */
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].ddelete==1%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 								{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 							</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
