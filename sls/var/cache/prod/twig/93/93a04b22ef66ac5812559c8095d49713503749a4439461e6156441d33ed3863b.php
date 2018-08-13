<?php

/* BoAdminBundle:Language:showactions.html.twig */
class __TwigTemplate_dabc25e90ee2757b8f0b6b044fa49a4ef0608f5f198eec000f9328ca16de7eb2 extends Twig_Template
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
        $__internal_352b215746dce479a30752fb55c89572617ef8a5af492bb1845fa7314a846918 = $this->env->getExtension("native_profiler");
        $__internal_352b215746dce479a30752fb55c89572617ef8a5af492bb1845fa7314a846918->enter($__internal_352b215746dce479a30752fb55c89572617ef8a5af492bb1845fa7314a846918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Language:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("language_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_352b215746dce479a30752fb55c89572617ef8a5af492bb1845fa7314a846918->leave($__internal_352b215746dce479a30752fb55c89572617ef8a5af492bb1845fa7314a846918_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Language:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('language_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
