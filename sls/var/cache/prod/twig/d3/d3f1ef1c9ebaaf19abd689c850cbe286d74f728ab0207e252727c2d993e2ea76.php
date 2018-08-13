<?php

/* BoAdminBundle:Tadmin:editactions.html.twig */
class __TwigTemplate_3eacd7d07bd5cc5efc136024a6853d818d6a5f9b6d81b6feb347ed82699d942e extends Twig_Template
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
        $__internal_97a42cc5b78c531d976efb114eade550c82878b56ffd80a3bdc9ed6f607dd827 = $this->env->getExtension("native_profiler");
        $__internal_97a42cc5b78c531d976efb114eade550c82878b56ffd80a3bdc9ed6f607dd827->enter($__internal_97a42cc5b78c531d976efb114eade550c82878b56ffd80a3bdc9ed6f607dd827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tadmin:editactions.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "employee", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_97a42cc5b78c531d976efb114eade550c82878b56ffd80a3bdc9ed6f607dd827->leave($__internal_97a42cc5b78c531d976efb114eade550c82878b56ffd80a3bdc9ed6f607dd827_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tadmin:editactions.html.twig";
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
/* 						<a href="{{ path('employee_show',{'id':tadmin.employee.id}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
