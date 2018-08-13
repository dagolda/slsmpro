<?php

/* BoAdminBundle:Agenda:searchaction.html.twig */
class __TwigTemplate_d57713abdb9e5882ac420e6545b5af68a13eb86484b4eedc7ff3a7135d8c6f85 extends Twig_Template
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
        $__internal_8c1c301ec0d0c40062a16ee9d6654eaf3dd4858244c96114fdd179cc8fe640b4 = $this->env->getExtension("native_profiler");
        $__internal_8c1c301ec0d0c40062a16ee9d6654eaf3dd4858244c96114fdd179cc8fe640b4->enter($__internal_8c1c301ec0d0c40062a16ee9d6654eaf3dd4858244c96114fdd179cc8fe640b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:searchaction.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("agenda_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#advanced_search\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advanced.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.found", array(), "BoAdminBundle"), "html", null, true);
        echo "  <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["schedules"]) ? $context["schedules"] : $this->getContext($context, "schedules"))), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_8c1c301ec0d0c40062a16ee9d6654eaf3dd4858244c96114fdd179cc8fe640b4->leave($__internal_8c1c301ec0d0c40062a16ee9d6654eaf3dd4858244c96114fdd179cc8fe640b4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:searchaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  36 => 8,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('agenda_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td><button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#advanced_search">{{'label.advanced.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'label.found'|trans([],'BoAdminBundle')}}  <span class="badge">{{schedules|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
