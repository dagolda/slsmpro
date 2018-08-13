<?php

/* BoAdvisorsBundle:Orderform:erroractions.html.twig */
class __TwigTemplate_bfe0d32fd3806b61a63fe97b97bd5c0a0b8d1ea5edae8581533a17e54f7e9a69 extends Twig_Template
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
        $__internal_239d8dd83030824ddf74b6fe780c81e343646b31176381db40ce1d1988c7522f = $this->env->getExtension("native_profiler");
        $__internal_239d8dd83030824ddf74b6fe780c81e343646b31176381db40ce1d1988c7522f->enter($__internal_239d8dd83030824ddf74b6fe780c81e343646b31176381db40ce1d1988c7522f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:erroractions.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_enquiry_show", array("id" => $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_239d8dd83030824ddf74b6fe780c81e343646b31176381db40ce1d1988c7522f->leave($__internal_239d8dd83030824ddf74b6fe780c81e343646b31176381db40ce1d1988c7522f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:erroractions.html.twig";
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
/* 						<a href="{{ path('dash_enquiry_show',{'id':enquiry.id})}}">{{'action.back'|trans([],'BoAdminBundle')}}</a>						*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
