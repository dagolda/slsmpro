<?php

/* BoAdminBundle:Employee:absenceshowactions.html.twig */
class __TwigTemplate_a19311602edd88111e4ed3e04c5801ebd59120ed0493bdad324a15684f306d63 extends Twig_Template
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
        $__internal_52bcc96c0e06637f16e3c6739e852b55ace52c33d6e6dfdb16071526b21b5581 = $this->env->getExtension("native_profiler");
        $__internal_52bcc96c0e06637f16e3c6739e852b55ace52c33d6e6dfdb16071526b21b5581->enter($__internal_52bcc96c0e06637f16e3c6739e852b55ace52c33d6e6dfdb16071526b21b5581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:absenceshowactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Absences", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Absences", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t\t<td>
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
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_52bcc96c0e06637f16e3c6739e852b55ace52c33d6e6dfdb16071526b21b5581->leave($__internal_52bcc96c0e06637f16e3c6739e852b55ace52c33d6e6dfdb16071526b21b5581_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:absenceshowactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if app.session.get('rights')['STAFF']['Absences'] is defined and app.session.get('rights')['STAFF']['Absences'].ddelete==1%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
