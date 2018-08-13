<?php

/* BoAdminBundle:Language:actions.html.twig */
class __TwigTemplate_84a676c221be4c5d79609a58dfc0546a4c3564e330a90270596f2ace7c350a43 extends Twig_Template
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
        $__internal_8768d386ba702636090d49957361ccb370e5f2a5fed9ece3716dcc2ed085a46e = $this->env->getExtension("native_profiler");
        $__internal_8768d386ba702636090d49957361ccb370e5f2a5fed9ece3716dcc2ed085a46e->enter($__internal_8768d386ba702636090d49957361ccb370e5f2a5fed9ece3716dcc2ed085a46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Language:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("language_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_8768d386ba702636090d49957361ccb370e5f2a5fed9ece3716dcc2ed085a46e->leave($__internal_8768d386ba702636090d49957361ccb370e5f2a5fed9ece3716dcc2ed085a46e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Language:actions.html.twig";
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
/* 						<a href="{{ path('language_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
