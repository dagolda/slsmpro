<?php

/* BoHomeBundle:Default:actions.html.twig */
class __TwigTemplate_48fdc66762282c345d878951e89cbf74fb688b691df4c2b5a5e3229ea90457f3 extends Twig_Template
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
        $__internal_a30a18e543efe8ea09c535191bb3194fd54cd0b69f7b46b185a6d1c3ce7e0dca = $this->env->getExtension("native_profiler");
        $__internal_a30a18e543efe8ea09c535191bb3194fd54cd0b69f7b46b185a6d1c3ce7e0dca->enter($__internal_a30a18e543efe8ea09c535191bb3194fd54cd0b69f7b46b185a6d1c3ce7e0dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:actions.html.twig"));

        // line 1
        echo "\t\t\t<table width=\"100%\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"100%\">
\t\t\t\t\t\t<button type=\"button\" class=\"modal_create\" data-toggle=\"modal\" data-target=\"#add_ticket\" size=\"100%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.help", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"100%\">
\t\t\t\t\t\t<button type=\"button\" class=\"modal_create\" data-toggle=\"modal\" data-target=\"#add_absence\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.absence", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
";
        
        $__internal_a30a18e543efe8ea09c535191bb3194fd54cd0b69f7b46b185a6d1c3ce7e0dca->leave($__internal_a30a18e543efe8ea09c535191bb3194fd54cd0b69f7b46b185a6d1c3ce7e0dca_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  27 => 4,  22 => 1,);
    }
}
/* 			<table width="100%">*/
/* 				<tr>*/
/* 					<td width="100%">*/
/* 						<button type="button" class="modal_create" data-toggle="modal" data-target="#add_ticket" size="100%">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.help'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td width="100%">*/
/* 						<button type="button" class="modal_create" data-toggle="modal" data-target="#add_absence">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.absence'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>*/
/* */
