<?php

/* BoAdminBundle:Errors:actions.html.twig */
class __TwigTemplate_4610e47c4a7607a52afba8dcfe1ce65780786658e1158cd49f6d05fab6b1e3c4 extends Twig_Template
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
        $__internal_8879286c7be5de6e5ae45655db64c166f8069da06be99f4ce42b37d19ab0bfcb = $this->env->getExtension("native_profiler");
        $__internal_8879286c7be5de6e5ae45655db64c166f8069da06be99f4ce42b37d19ab0bfcb->enter($__internal_8879286c7be5de6e5ae45655db64c166f8069da06be99f4ce42b37d19ab0bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Errors:actions.html.twig"));

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
        
        $__internal_8879286c7be5de6e5ae45655db64c166f8069da06be99f4ce42b37d19ab0bfcb->leave($__internal_8879286c7be5de6e5ae45655db64c166f8069da06be99f4ce42b37d19ab0bfcb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Errors:actions.html.twig";
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
