<?php

/* BoAdminBundle:Company:newactions.html.twig */
class __TwigTemplate_e3364f66dbcd4c74b03a5a8a1559c913d0f58a3419b7820131e85a251cdf4e63 extends Twig_Template
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
        $__internal_17bc5eb3f7469095c880486b043c84e9786c556b1e4d597f16156efae966f796 = $this->env->getExtension("native_profiler");
        $__internal_17bc5eb3f7469095c880486b043c84e9786c556b1e4d597f16156efae966f796->enter($__internal_17bc5eb3f7469095c880486b043c84e9786c556b1e4d597f16156efae966f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Company:newactions.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_17bc5eb3f7469095c880486b043c84e9786c556b1e4d597f16156efae966f796->leave($__internal_17bc5eb3f7469095c880486b043c84e9786c556b1e4d597f16156efae966f796_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Company:newactions.html.twig";
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
/* 						<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
