<?php

/* BoAdminBundle:Students:editactions.html.twig */
class __TwigTemplate_5cf3dd9fc46ec6c2ec22a8cc41e4b838ed2316d0a427c364c00c4b9f27abd610 extends Twig_Template
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
        $__internal_6d1a882f9d18375b6ed5d75a553e90a238af0140fb40773e8fd1a8910490892e = $this->env->getExtension("native_profiler");
        $__internal_6d1a882f9d18375b6ed5d75a553e90a238af0140fb40773e8fd1a8910490892e->enter($__internal_6d1a882f9d18375b6ed5d75a553e90a238af0140fb40773e8fd1a8910490892e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:editactions.html.twig"));

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
            echo $this->env->getExtension('routing')->getPath("students_index");
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
        
        $__internal_6d1a882f9d18375b6ed5d75a553e90a238af0140fb40773e8fd1a8910490892e->leave($__internal_6d1a882f9d18375b6ed5d75a553e90a238af0140fb40773e8fd1a8910490892e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:editactions.html.twig";
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
/* 							<a href="{{ path('students_index')}}">{{'action.back'|trans([],'BoAdminBundle')}}</a>						*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
