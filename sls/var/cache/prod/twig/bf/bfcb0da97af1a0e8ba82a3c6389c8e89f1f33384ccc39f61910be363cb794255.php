<?php

/* BoCoordinatorBundle:Supervision:showactions.html.twig */
class __TwigTemplate_009acd88b8839b15396a04204c2d4be2eb3c0e2121d583ed9143a658a81404bd extends Twig_Template
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
        $__internal_aa931f53549807370e547e7af83940e9ca887088fc11b7f82f49e088cb312b8e = $this->env->getExtension("native_profiler");
        $__internal_aa931f53549807370e547e7af83940e9ca887088fc11b7f82f49e088cb312b8e->enter($__internal_aa931f53549807370e547e7af83940e9ca887088fc11b7f82f49e088cb312b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Supervision:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinator_supervision_index", array("status" => (isset($context["_status"]) ? $context["_status"] : $this->getContext($context, "_status")))), "html", null, true);
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
\t</div>\t
";
        
        $__internal_aa931f53549807370e547e7af83940e9ca887088fc11b7f82f49e088cb312b8e->leave($__internal_aa931f53549807370e547e7af83940e9ca887088fc11b7f82f49e088cb312b8e_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Supervision:showactions.html.twig";
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
/* 						<a href="{{ path('coordinator_supervision_index',{'status':_status}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
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
/* */
