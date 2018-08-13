<?php

/* BoAdminBundle:Workfields:editactions.html.twig */
class __TwigTemplate_3146212542fed213504d2fe3d64cf3c6a5262c8f18a9788dabbbf7cb423e1471 extends Twig_Template
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
        $__internal_29d332f60402effddaf176504632c1fddfd0512cec8571a1ab537bd711505105 = $this->env->getExtension("native_profiler");
        $__internal_29d332f60402effddaf176504632c1fddfd0512cec8571a1ab537bd711505105->enter($__internal_29d332f60402effddaf176504632c1fddfd0512cec8571a1ab537bd711505105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Workfields:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("workfields_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_29d332f60402effddaf176504632c1fddfd0512cec8571a1ab537bd711505105->leave($__internal_29d332f60402effddaf176504632c1fddfd0512cec8571a1ab537bd711505105_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Workfields:editactions.html.twig";
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
/* 						<a href="{{ path('workfields_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
