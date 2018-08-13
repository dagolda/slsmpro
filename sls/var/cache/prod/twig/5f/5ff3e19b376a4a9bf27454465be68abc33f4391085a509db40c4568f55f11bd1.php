<?php

/* BoAdminBundle:Campus:showactions.html.twig */
class __TwigTemplate_8a96ef83ac426a0ccb30c65fad4aeb30c6199f2213362d256bd4218c2558190a extends Twig_Template
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
        $__internal_99c1b22568e13f0e5204b6a88381230bfd166e9663323d69e3fd27768d3a3fdb = $this->env->getExtension("native_profiler");
        $__internal_99c1b22568e13f0e5204b6a88381230bfd166e9663323d69e3fd27768d3a3fdb->enter($__internal_99c1b22568e13f0e5204b6a88381230bfd166e9663323d69e3fd27768d3a3fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Campus:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Campus", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Campus", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t";
            // line 7
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Delete\">
\t\t\t\t\t\t";
            // line 9
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("campus_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_99c1b22568e13f0e5204b6a88381230bfd166e9663323d69e3fd27768d3a3fdb->leave($__internal_99c1b22568e13f0e5204b6a88381230bfd166e9663323d69e3fd27768d3a3fdb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Campus:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  38 => 9,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['ROOMS']['Campus'] is defined and app.session.get('rights')['ROOMS']['Campus'].ddelete==1%}*/
/* 					<td class="delete-action">*/
/* 						{{ form_start(delete_form) }}*/
/* 							<input type="submit" value="Delete">*/
/* 						{{ form_end(delete_form) }}*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('campus_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
