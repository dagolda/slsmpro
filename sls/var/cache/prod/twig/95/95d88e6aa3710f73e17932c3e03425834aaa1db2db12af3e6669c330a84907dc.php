<?php

/* BoAdminBundle:Activities:actions.html.twig */
class __TwigTemplate_b1f36bdc5278d2e6d939e8aa9e2ddcaccac351cd1252806f24c5c8153b721a11 extends Twig_Template
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
        $__internal_7edbf6dde7b2bc83006f1cd682503f2f8d969c830592ee94ddf38c6539cefafa = $this->env->getExtension("native_profiler");
        $__internal_7edbf6dde7b2bc83006f1cd682503f2f8d969c830592ee94ddf38c6539cefafa->enter($__internal_7edbf6dde7b2bc83006f1cd682503f2f8d969c830592ee94ddf38c6539cefafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Activities:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_7edbf6dde7b2bc83006f1cd682503f2f8d969c830592ee94ddf38c6539cefafa->leave($__internal_7edbf6dde7b2bc83006f1cd682503f2f8d969c830592ee94ddf38c6539cefafa_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Activities:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
