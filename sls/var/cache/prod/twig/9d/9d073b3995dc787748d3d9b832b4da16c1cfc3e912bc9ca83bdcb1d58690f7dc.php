<?php

/* BoAdvisorsBundle:Tickets:editactions.html.twig */
class __TwigTemplate_4b4e28163a247e2d297a8d909b4e7da8b23b5535de7604182bdf3496e0033360 extends Twig_Template
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
        $__internal_85ba761dee62f9497d9143ae88cd3fee1053aa1486d7716d63adea9138dc63ad = $this->env->getExtension("native_profiler");
        $__internal_85ba761dee62f9497d9143ae88cd3fee1053aa1486d7716d63adea9138dc63ad->enter($__internal_85ba761dee62f9497d9143ae88cd3fee1053aa1486d7716d63adea9138dc63ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:editactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("dash_tickets_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_85ba761dee62f9497d9143ae88cd3fee1053aa1486d7716d63adea9138dc63ad->leave($__internal_85ba761dee62f9497d9143ae88cd3fee1053aa1486d7716d63adea9138dc63ad_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:editactions.html.twig";
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
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('dash_tickets_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
