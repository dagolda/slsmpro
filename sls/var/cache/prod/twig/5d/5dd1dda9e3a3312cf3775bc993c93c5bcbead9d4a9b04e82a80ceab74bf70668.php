<?php

/* BoAdminBundle:Pricesreference:editactions.html.twig */
class __TwigTemplate_0b5c3932711fb186a92377664398d93f56fc1106c35e9561100e458ecbdfa2b9 extends Twig_Template
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
        $__internal_e869109056e3b6d3c0240feccb38588aa615b4b9e509aed41acbf1c758a31e9c = $this->env->getExtension("native_profiler");
        $__internal_e869109056e3b6d3c0240feccb38588aa615b4b9e509aed41acbf1c758a31e9c->enter($__internal_e869109056e3b6d3c0240feccb38588aa615b4b9e509aed41acbf1c758a31e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Pricesreference:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("prices_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_e869109056e3b6d3c0240feccb38588aa615b4b9e509aed41acbf1c758a31e9c->leave($__internal_e869109056e3b6d3c0240feccb38588aa615b4b9e509aed41acbf1c758a31e9c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Pricesreference:editactions.html.twig";
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
/* 						<a href="{{ path('prices_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
