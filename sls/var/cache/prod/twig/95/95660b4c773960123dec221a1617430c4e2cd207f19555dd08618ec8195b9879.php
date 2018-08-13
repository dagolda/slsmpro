<?php

/* BoAdminBundle:Diary:editactions.html.twig */
class __TwigTemplate_fbed718bb60b14a78c78ea1345eaa8333fa3a1b24675cdd29c08986b6fc6fcb1 extends Twig_Template
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
        $__internal_7244326a5de605bd7bd01d11198909de301ab46edf3b0a14492020a5999e98c4 = $this->env->getExtension("native_profiler");
        $__internal_7244326a5de605bd7bd01d11198909de301ab46edf3b0a14492020a5999e98c4->enter($__internal_7244326a5de605bd7bd01d11198909de301ab46edf3b0a14492020a5999e98c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Diary:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("diary_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_7244326a5de605bd7bd01d11198909de301ab46edf3b0a14492020a5999e98c4->leave($__internal_7244326a5de605bd7bd01d11198909de301ab46edf3b0a14492020a5999e98c4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Diary:editactions.html.twig";
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
/* 						<a href="{{ path('diary_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
