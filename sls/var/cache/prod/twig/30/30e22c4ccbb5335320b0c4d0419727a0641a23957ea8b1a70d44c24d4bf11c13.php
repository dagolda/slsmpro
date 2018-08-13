<?php

/* BoHomeBundle:Default:schedules.html.twig */
class __TwigTemplate_f40cea0ad8307ac05b4b4fb3fdfd97d36d61c950b97041009448b0126224cf14 extends Twig_Template
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
        $__internal_0c58495c9b123f49b77b523e117c3f4f6ac4414bcbfd75051a106f7d1434bdd4 = $this->env->getExtension("native_profiler");
        $__internal_0c58495c9b123f49b77b523e117c3f4f6ac4414bcbfd75051a106f7d1434bdd4->enter($__internal_0c58495c9b123f49b77b523e117c3f4f6ac4414bcbfd75051a106f7d1434bdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:schedules.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.myschedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body\" >
\t\t\t\t<div class=\"event_sub_title\">
\t\t\t\t\t<div class=\"current-event\">
\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<span class=\"badge\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<button type=\"button\" class=\"event_next_week\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.next", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"next-event\">
\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<span class=\"badge\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<button type=\"button\" class=\"event_current_week\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.current", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"load_data\">
\t\t\t\t\t";
        // line 23
        $this->loadTemplate("BoHomeBundle:Default:event-tab.html.twig", "BoHomeBundle:Default:schedules.html.twig", 23)->display($context);
        // line 24
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"data_error\"></div>
\t\t\t</div>
\t</div>
";
        
        $__internal_0c58495c9b123f49b77b523e117c3f4f6ac4414bcbfd75051a106f7d1434bdd4->leave($__internal_0c58495c9b123f49b77b523e117c3f4f6ac4414bcbfd75051a106f7d1434bdd4_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:schedules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  61 => 23,  54 => 19,  48 => 16,  40 => 11,  34 => 8,  25 => 2,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 			<div class="panel-heading">{{'label.myschedule'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body" >*/
/* 				<div class="event_sub_title">*/
/* 					<div class="current-event">*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								<span class="badge">{{'label.currentweek'|trans([],'BoAdminBundle')}}</span>*/
/* 							</button>*/
/* 						</td>*/
/* 						<button type="button" class="event_next_week">{{'label.next'|trans([],'BoAdminBundle')}}</button>*/
/* 					</div>*/
/* 					<div class="next-event">*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								<span class="badge">{{'label.nextweek'|trans([],'BoAdminBundle')}}</span>*/
/* 							</button>*/
/* 						</td>*/
/* 						<button type="button" class="event_current_week">{{'label.current'|trans([],'BoAdminBundle')}}</button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="load_data">*/
/* 					{%include "BoHomeBundle:Default:event-tab.html.twig"%}*/
/* 				</div>*/
/* 				<div id="data_error"></div>*/
/* 			</div>*/
/* 	</div>*/
/* */
