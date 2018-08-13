<?php

/* BoAdminBundle:User:editactions.html.twig */
class __TwigTemplate_df43aafc8b4802ebc8b394a9ead9bd9fb1c6ca0bf85641a20dcb014496c4dcba extends Twig_Template
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
        $__internal_101d2491a57898bf7e9a737283e67b7c794301fb56f5d9102a68d71597f5bfd4 = $this->env->getExtension("native_profiler");
        $__internal_101d2491a57898bf7e9a737283e67b7c794301fb56f5d9102a68d71597f5bfd4->enter($__internal_101d2491a57898bf7e9a737283e67b7c794301fb56f5d9102a68d71597f5bfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:User:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("bo_admin_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_101d2491a57898bf7e9a737283e67b7c794301fb56f5d9102a68d71597f5bfd4->leave($__internal_101d2491a57898bf7e9a737283e67b7c794301fb56f5d9102a68d71597f5bfd4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:User:editactions.html.twig";
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
/* 						<a href="{{ path('bo_admin_homepage') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
