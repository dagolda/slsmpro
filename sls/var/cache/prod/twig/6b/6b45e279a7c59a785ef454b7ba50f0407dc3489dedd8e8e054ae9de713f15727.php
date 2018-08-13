<?php

/* BoAdminBundle:Mails:editactions.html.twig */
class __TwigTemplate_df6d016dbe8f057e727538d35717b9980c6ec4ad8fc44a7dab25aad0a3a39e7a extends Twig_Template
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
        $__internal_9b7555e0cde3c33bdc7b07151d66b9cce77263efe1c200816159290aacc4e12e = $this->env->getExtension("native_profiler");
        $__internal_9b7555e0cde3c33bdc7b07151d66b9cce77263efe1c200816159290aacc4e12e->enter($__internal_9b7555e0cde3c33bdc7b07151d66b9cce77263efe1c200816159290aacc4e12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Mails:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("mails_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_9b7555e0cde3c33bdc7b07151d66b9cce77263efe1c200816159290aacc4e12e->leave($__internal_9b7555e0cde3c33bdc7b07151d66b9cce77263efe1c200816159290aacc4e12e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Mails:editactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('mails_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
