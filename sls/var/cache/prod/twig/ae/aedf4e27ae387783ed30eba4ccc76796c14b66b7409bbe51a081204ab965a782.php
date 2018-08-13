<?php

/* BoUserBundle:Rights:righteditactions.html.twig */
class __TwigTemplate_529ff49f070e135b643a60b7f799fd47967a6ee0f33ec2c3f54d56b5d9b61fb4 extends Twig_Template
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
        $__internal_33366443aac0039c03d333e84d66dc75d1cfbc83544087986c496c6ae061c8ee = $this->env->getExtension("native_profiler");
        $__internal_33366443aac0039c03d333e84d66dc75d1cfbc83544087986c496c6ae061c8ee->enter($__internal_33366443aac0039c03d333e84d66dc75d1cfbc83544087986c496c6ae061c8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:Rights:righteditactions.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_show", array("id" => $this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "idprofil", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rights_enableall", array("id" => $this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "id", array()))), "html", null, true);
        echo "\">Enable all</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_33366443aac0039c03d333e84d66dc75d1cfbc83544087986c496c6ae061c8ee->leave($__internal_33366443aac0039c03d333e84d66dc75d1cfbc83544087986c496c6ae061c8ee_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:Rights:righteditactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('profil_show', { 'id': right.idprofil }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('rights_enableall', { 'id': right.id }) }}">Enable all</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
