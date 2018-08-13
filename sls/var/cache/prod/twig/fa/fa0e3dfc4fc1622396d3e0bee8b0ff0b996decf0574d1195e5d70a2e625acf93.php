<?php

/* BoAdminBundle:Contractual:newactions.html.twig */
class __TwigTemplate_1e435599c3e5aeca71447c32f49a139b0cd5da1ea1be78311eeca9d722d0fbd6 extends Twig_Template
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
        $__internal_6aa608624926cab077ff9a8d35c8806ed25d0b36331c161026925029db9297da = $this->env->getExtension("native_profiler");
        $__internal_6aa608624926cab077ff9a8d35c8806ed25d0b36331c161026925029db9297da->enter($__internal_6aa608624926cab077ff9a8d35c8806ed25d0b36331c161026925029db9297da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contractual:newactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("contractual_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_6aa608624926cab077ff9a8d35c8806ed25d0b36331c161026925029db9297da->leave($__internal_6aa608624926cab077ff9a8d35c8806ed25d0b36331c161026925029db9297da_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contractual:newactions.html.twig";
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
/* 						<a href="{{ path('contractual_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
