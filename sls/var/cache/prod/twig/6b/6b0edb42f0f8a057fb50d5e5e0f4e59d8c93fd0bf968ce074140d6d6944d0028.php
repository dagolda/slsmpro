<?php

/* BoAdminBundle:TicketContacts:editactions.html.twig */
class __TwigTemplate_a887b82256c77dcc55ca9a56c5e38f126af36268f5ce4251319572ce62b06689 extends Twig_Template
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
        $__internal_2b18c9010c72895990ea2b247dfe9eb7b6b4c249c4c661970f0089b0b5c6c315 = $this->env->getExtension("native_profiler");
        $__internal_2b18c9010c72895990ea2b247dfe9eb7b6b4c249c4c661970f0089b0b5c6c315->enter($__internal_2b18c9010c72895990ea2b247dfe9eb7b6b4c249c4c661970f0089b0b5c6c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TicketContacts:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_2b18c9010c72895990ea2b247dfe9eb7b6b4c249c4c661970f0089b0b5c6c315->leave($__internal_2b18c9010c72895990ea2b247dfe9eb7b6b4c249c4c661970f0089b0b5c6c315_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TicketContacts:editactions.html.twig";
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
/* 						<a href="{{ path('ticketcontacts_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
