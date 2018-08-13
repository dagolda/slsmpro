<?php

/* BoUserBundle:Rights:newactions.html.twig */
class __TwigTemplate_5d41babd3977df4a7cf5c5dbac1e9c8fbc14e2860b37c0a810db54a3cd551e66 extends Twig_Template
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
        $__internal_fb7aa750110cff0c9e75090a797d9661af8496217317dc29f5b65c9db51edb54 = $this->env->getExtension("native_profiler");
        $__internal_fb7aa750110cff0c9e75090a797d9661af8496217317dc29f5b65c9db51edb54->enter($__internal_fb7aa750110cff0c9e75090a797d9661af8496217317dc29f5b65c9db51edb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:Rights:newactions.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_show", array("id" => (isset($context["idprofil"]) ? $context["idprofil"] : $this->getContext($context, "idprofil")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_fb7aa750110cff0c9e75090a797d9661af8496217317dc29f5b65c9db51edb54->leave($__internal_fb7aa750110cff0c9e75090a797d9661af8496217317dc29f5b65c9db51edb54_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:Rights:newactions.html.twig";
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
/* 						<a href="{{ path('profil_show', { 'id': idprofil }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
