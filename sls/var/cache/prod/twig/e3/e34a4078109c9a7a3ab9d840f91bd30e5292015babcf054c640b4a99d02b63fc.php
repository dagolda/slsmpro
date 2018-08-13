<?php

/* BoAdminBundle:Tickets:showactions.html.twig */
class __TwigTemplate_8826621410a820a4ec2fc1cbb798823ee283d0b109db02005b635b604b983137 extends Twig_Template
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
        $__internal_b52ef5e8fc26e813908be4420fa011c97db6228500e130c804db6424fad621e2 = $this->env->getExtension("native_profiler");
        $__internal_b52ef5e8fc26e813908be4420fa011c97db6228500e130c804db6424fad621e2->enter($__internal_b52ef5e8fc26e813908be4420fa011c97db6228500e130c804db6424fad621e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tickets:showactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("tickets_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_b52ef5e8fc26e813908be4420fa011c97db6228500e130c804db6424fad621e2->leave($__internal_b52ef5e8fc26e813908be4420fa011c97db6228500e130c804db6424fad621e2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tickets:showactions.html.twig";
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
/* 						<a href="{{ path('tickets_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
