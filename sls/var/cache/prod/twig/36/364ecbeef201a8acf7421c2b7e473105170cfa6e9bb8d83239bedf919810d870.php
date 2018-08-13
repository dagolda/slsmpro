<?php

/* BoAdminBundle:Color:showactions.html.twig */
class __TwigTemplate_4ea4902f91cc2bbfe7c0e03f6a0974f34bf19e650617bf9beabbd5cc9e358b7d extends Twig_Template
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
        $__internal_73f8418a7c58d4d388f07230317f23019e1b016c2cb2c321f6bfc3312dd70b25 = $this->env->getExtension("native_profiler");
        $__internal_73f8418a7c58d4d388f07230317f23019e1b016c2cb2c321f6bfc3312dd70b25->enter($__internal_73f8418a7c58d4d388f07230317f23019e1b016c2cb2c321f6bfc3312dd70b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Color:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("color_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_73f8418a7c58d4d388f07230317f23019e1b016c2cb2c321f6bfc3312dd70b25->leave($__internal_73f8418a7c58d4d388f07230317f23019e1b016c2cb2c321f6bfc3312dd70b25_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Color:showactions.html.twig";
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
/* 						<a href="{{ path('color_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
