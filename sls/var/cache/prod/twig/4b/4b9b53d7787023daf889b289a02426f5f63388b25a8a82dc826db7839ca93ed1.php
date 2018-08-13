<?php

/* BoAdminBundle:Students:evalshowactions.html.twig */
class __TwigTemplate_3a269e42c4d7a05e96d7387baf9c203166716b2e9dbe0f889d7c1f13c3104224 extends Twig_Template
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
        $__internal_df4d0408661d6af0809198324ac075421c87bb309315880d473eab710a7d9b88 = $this->env->getExtension("native_profiler");
        $__internal_df4d0408661d6af0809198324ac075421c87bb309315880d473eab710a7d9b88->enter($__internal_df4d0408661d6af0809198324ac075421c87bb309315880d473eab710a7d9b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:evalshowactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_show", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_df4d0408661d6af0809198324ac075421c87bb309315880d473eab710a7d9b88->leave($__internal_df4d0408661d6af0809198324ac075421c87bb309315880d473eab710a7d9b88_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:evalshowactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>				*/
/* 					<td>*/
/* 						<a href="{{ path('students_show', { 'id': student.id }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
