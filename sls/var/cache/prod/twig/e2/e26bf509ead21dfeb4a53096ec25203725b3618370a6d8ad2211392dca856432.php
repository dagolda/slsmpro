<?php

/* BoAdminBundle:Students:editabsenceactions.html.twig */
class __TwigTemplate_75b2c47bb2883881110397877a7d097aa1a738eecc4f6ebb73219c3c7cfe9d6a extends Twig_Template
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
        $__internal_ff2a0ea8a7b69df57470f69513f9e06a0c4a828e652eac42df3da2e77daf7c83 = $this->env->getExtension("native_profiler");
        $__internal_ff2a0ea8a7b69df57470f69513f9e06a0c4a828e652eac42df3da2e77daf7c83->enter($__internal_ff2a0ea8a7b69df57470f69513f9e06a0c4a828e652eac42df3da2e77daf7c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:editabsenceactions.html.twig"));

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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Absences", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Absences", array(), "array"), "ddelete", array()) == 1))) {
            // line 7
            echo "\t\t\t\t\t\t<!--td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td-->
\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_ff2a0ea8a7b69df57470f69513f9e06a0c4a828e652eac42df3da2e77daf7c83->leave($__internal_ff2a0ea8a7b69df57470f69513f9e06a0c4a828e652eac42df3da2e77daf7c83_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:editabsenceactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  43 => 11,  37 => 8,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					{%if app.session.get('rights')['STAFF']['Absences'] is defined and app.session.get('rights')['STAFF']['Absences'].ddelete==1%}*/
/* 						<!--td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td-->*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
