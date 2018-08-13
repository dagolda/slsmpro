<?php

/* BoAdminBundle:Holidayslist:showactions.html.twig */
class __TwigTemplate_9df2d316261c7b14429102a8c1859d5617b330a3d5217baaa5a23b97e1639b96 extends Twig_Template
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
        $__internal_2f59b37bf3e6bda83fe320eba92eb432fdd9b1264615727951c35063019aae94 = $this->env->getExtension("native_profiler");
        $__internal_2f59b37bf3e6bda83fe320eba92eb432fdd9b1264615727951c35063019aae94->enter($__internal_2f59b37bf3e6bda83fe320eba92eb432fdd9b1264615727951c35063019aae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Holidayslist:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Delete\">
\t\t\t\t\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("holidayslist_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("holidayslist_duplicate", array("id" => $this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "id", array()))), "html", null, true);
        echo "\">Duplicate</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_2f59b37bf3e6bda83fe320eba92eb432fdd9b1264615727951c35063019aae94->leave($__internal_2f59b37bf3e6bda83fe320eba92eb432fdd9b1264615727951c35063019aae94_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Holidayslist:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  40 => 11,  34 => 8,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="delete-action">*/
/* 						{{ form_start(delete_form) }}*/
/* 							<input type="submit" value="Delete">*/
/* 						{{ form_end(delete_form) }}*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('holidayslist_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('holidayslist_duplicate',{'id':holidayslist.id}) }}">Duplicate</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
