<?php

/* BoAdminBundle:Company:actions.html.twig */
class __TwigTemplate_d2c3299bb14e207af277e0952a6303bafb82bf8479fd225015345f553cf98415 extends Twig_Template
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
        $__internal_dfc2b9bb4422a4de11991eb4d93677669eee5594de8028b959d2daa6aa4f6a87 = $this->env->getExtension("native_profiler");
        $__internal_dfc2b9bb4422a4de11991eb4d93677669eee5594de8028b959d2daa6aa4f6a87->enter($__internal_dfc2b9bb4422a4de11991eb4d93677669eee5594de8028b959d2daa6aa4f6a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Company:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("company_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_dfc2b9bb4422a4de11991eb4d93677669eee5594de8028b959d2daa6aa4f6a87->leave($__internal_dfc2b9bb4422a4de11991eb4d93677669eee5594de8028b959d2daa6aa4f6a87_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Company:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('company_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
