<?php

/* BoHomeBundle:Tickets:showactions.html.twig */
class __TwigTemplate_ba455d841b191b6e5c5bca4d2b4238f446b7983e72126cfba2df2e4a6d628cc2 extends Twig_Template
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
        $__internal_ab7d373ba1103d121773a35d4d78217cbfa908e5b2fd9ea1816bef9def67d557 = $this->env->getExtension("native_profiler");
        $__internal_ab7d373ba1103d121773a35d4d78217cbfa908e5b2fd9ea1816bef9def67d557->enter($__internal_ab7d373ba1103d121773a35d4d78217cbfa908e5b2fd9ea1816bef9def67d557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tickets:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("home_tickets_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_ab7d373ba1103d121773a35d4d78217cbfa908e5b2fd9ea1816bef9def67d557->leave($__internal_ab7d373ba1103d121773a35d4d78217cbfa908e5b2fd9ea1816bef9def67d557_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tickets:showactions.html.twig";
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
/* 						<a href="{{ path('home_tickets_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
