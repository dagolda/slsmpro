<?php

/* BoAdvisorsBundle:Enquiry:newactions.html.twig */
class __TwigTemplate_3226ec44d58890b2b3566875cd501cbef909a5d64492fc7c42b29e5b3c0617c4 extends Twig_Template
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
        $__internal_9f8938b5911be1f035c025afe03bfa5aafe0934ccf0c97cbf3ce5cf97687445f = $this->env->getExtension("native_profiler");
        $__internal_9f8938b5911be1f035c025afe03bfa5aafe0934ccf0c97cbf3ce5cf97687445f->enter($__internal_9f8938b5911be1f035c025afe03bfa5aafe0934ccf0c97cbf3ce5cf97687445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:newactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_9f8938b5911be1f035c025afe03bfa5aafe0934ccf0c97cbf3ce5cf97687445f->leave($__internal_9f8938b5911be1f035c025afe03bfa5aafe0934ccf0c97cbf3ce5cf97687445f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:newactions.html.twig";
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
/* 						<a href="{{ path('dash_enquiry_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
