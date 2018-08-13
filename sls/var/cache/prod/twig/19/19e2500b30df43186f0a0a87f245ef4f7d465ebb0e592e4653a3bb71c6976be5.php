<?php

/* BoAdvisorsBundle:Supervision:showactions.html.twig */
class __TwigTemplate_b49551108b472291bae437c3cd205152a540c83ed202a6370ddc6a50f6f497b2 extends Twig_Template
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
        $__internal_20e65186e85dc23b39ea0df0478c4eaa108b8f364301f7eacebfd38cd1b7b6f4 = $this->env->getExtension("native_profiler");
        $__internal_20e65186e85dc23b39ea0df0478c4eaa108b8f364301f7eacebfd38cd1b7b6f4->enter($__internal_20e65186e85dc23b39ea0df0478c4eaa108b8f364301f7eacebfd38cd1b7b6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Supervision:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("dash_supervision_list", array("status" => 1));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 8
        if ((array_key_exists("lefthours", $context) && ((isset($context["lefthours"]) ? $context["lefthours"] : $this->getContext($context, "lefthours")) != 0))) {
            // line 9
            echo "\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lefthours", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["lefthours"]) ? $context["lefthours"] : $this->getContext($context, "lefthours")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_20e65186e85dc23b39ea0df0478c4eaa108b8f364301f7eacebfd38cd1b7b6f4->leave($__internal_20e65186e85dc23b39ea0df0478c4eaa108b8f364301f7eacebfd38cd1b7b6f4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Supervision:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  42 => 11,  38 => 9,  36 => 8,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('dash_supervision_list',{'status':1}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%if lefthours is defined and lefthours!=0%}*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								{{'label.lefthours'|trans([],'BoAdminBundle')}} <span class="badge">{{lefthours|number_format(0,""," ")}}</span>*/
/* 							</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
