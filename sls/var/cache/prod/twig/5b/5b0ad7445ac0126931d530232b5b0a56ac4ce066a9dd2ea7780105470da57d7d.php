<?php

/* BoHomeBundle:Default:editactions.html.twig */
class __TwigTemplate_f8d84ed6652ba275575b49cc98a0153b3069ab4993d8c4834e3683f47046408b extends Twig_Template
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
        $__internal_d18a9d27505a66b3ae340f34714c3beba41f8c259d26d27302ee97e420a06290 = $this->env->getExtension("native_profiler");
        $__internal_d18a9d27505a66b3ae340f34714c3beba41f8c259d26d27302ee97e420a06290->enter($__internal_d18a9d27505a66b3ae340f34714c3beba41f8c259d26d27302ee97e420a06290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("bo_home_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_d18a9d27505a66b3ae340f34714c3beba41f8c259d26d27302ee97e420a06290->leave($__internal_d18a9d27505a66b3ae340f34714c3beba41f8c259d26d27302ee97e420a06290_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:editactions.html.twig";
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
/* 						<a href="{{ path('bo_home_homepage') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
