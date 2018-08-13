<?php

/* BoAdvisorsBundle:Tickets:myactions.html.twig */
class __TwigTemplate_d5127c337b54d0b875d4b3c4bffc336138c3f9d8179dcc460e9d0efdb776bc17 extends Twig_Template
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
        $__internal_89b2a7866efe0dca49f91ebe0163e6c320d2da86e548b230e6609f4a07153c3b = $this->env->getExtension("native_profiler");
        $__internal_89b2a7866efe0dca49f91ebe0163e6c320d2da86e548b230e6609f4a07153c3b->enter($__internal_89b2a7866efe0dca49f91ebe0163e6c320d2da86e548b230e6609f4a07153c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:myactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("dash_tickets_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_89b2a7866efe0dca49f91ebe0163e6c320d2da86e548b230e6609f4a07153c3b->leave($__internal_89b2a7866efe0dca49f91ebe0163e6c320d2da86e548b230e6609f4a07153c3b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:myactions.html.twig";
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
/* 						<a href="{{ path('dash_tickets_index') }}">{{'action.list'|trans([],'BoAdminBundle')}}</a>						*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
