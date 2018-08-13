<?php

/* BoHomeBundle:Absences:showactions.html.twig */
class __TwigTemplate_5454255bf7b68fb55bfb1358efdc9a03a42abf0036865eb2e007417e49237b8e extends Twig_Template
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
        $__internal_ae440414857acf57ddfd1c49f76460f44f274100616f63fdf3831441ce5dd7cb = $this->env->getExtension("native_profiler");
        $__internal_ae440414857acf57ddfd1c49f76460f44f274100616f63fdf3831441ce5dd7cb->enter($__internal_ae440414857acf57ddfd1c49f76460f44f274100616f63fdf3831441ce5dd7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td-->
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("home_absences_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_absences_edit", array("id" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
\t\t\t\t\t</td-->
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_ae440414857acf57ddfd1c49f76460f44f274100616f63fdf3831441ce5dd7cb->leave($__internal_ae440414857acf57ddfd1c49f76460f44f274100616f63fdf3831441ce5dd7cb_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<!--td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td-->*/
/* 					<td>*/
/* 						<a href="{{ path('home_absences_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<!--td>*/
/* 						<a href="{{ path('home_absences_edit', { 'id': absence.id }) }}">Edit</a>*/
/* 					</td-->*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
