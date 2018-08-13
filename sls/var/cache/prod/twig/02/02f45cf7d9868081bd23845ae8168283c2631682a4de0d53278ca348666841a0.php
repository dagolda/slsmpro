<?php

/* BoHomeBundle:Invitation:actions.html.twig */
class __TwigTemplate_2887415850e96d7d3d5342457736d921a00ab1037af6c40a53fdde680bb68506 extends Twig_Template
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
        $__internal_2ef605d3c809a4edef0851e735f271627dc00a4a0a8884574f89ce4997b6904a = $this->env->getExtension("native_profiler");
        $__internal_2ef605d3c809a4edef0851e735f271627dc00a4a0a8884574f89ce4997b6904a->enter($__internal_2ef605d3c809a4edef0851e735f271627dc00a4a0a8884574f89ce4997b6904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Invitation:actions.html.twig"));

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
\t</div>\t
";
        
        $__internal_2ef605d3c809a4edef0851e735f271627dc00a4a0a8884574f89ce4997b6904a->leave($__internal_2ef605d3c809a4edef0851e735f271627dc00a4a0a8884574f89ce4997b6904a_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Invitation:actions.html.twig";
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
/* */
