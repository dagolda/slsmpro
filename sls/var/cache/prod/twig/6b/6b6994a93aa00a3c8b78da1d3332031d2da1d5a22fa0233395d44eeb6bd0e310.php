<?php

/* BoAdminBundle:BillingContact:newactions.html.twig */
class __TwigTemplate_4b368a645f0a8f30c03fae1842ff64fd0d38547fdaf746ce6dc1836e7034731f extends Twig_Template
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
        $__internal_c91d9dcb77c962bdc24f7bd8f863a1f125b7029a85d0c4cce7d8bac5050c9272 = $this->env->getExtension("native_profiler");
        $__internal_c91d9dcb77c962bdc24f7bd8f863a1f125b7029a85d0c4cce7d8bac5050c9272->enter($__internal_c91d9dcb77c962bdc24f7bd8f863a1f125b7029a85d0c4cce7d8bac5050c9272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:BillingContact:newactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("billingcontact_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_c91d9dcb77c962bdc24f7bd8f863a1f125b7029a85d0c4cce7d8bac5050c9272->leave($__internal_c91d9dcb77c962bdc24f7bd8f863a1f125b7029a85d0c4cce7d8bac5050c9272_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:BillingContact:newactions.html.twig";
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
/* 					<td><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('billingcontact_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
