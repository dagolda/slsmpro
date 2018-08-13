<?php

/* BoHomeBundle:Absences:newactions.html.twig */
class __TwigTemplate_b59d0132ab6642180787dbc8a29639a0d1245c90bd6a216aa01a8181c6a42599 extends Twig_Template
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
        $__internal_2bd2162366381d6117748e1662f4ce3eb71217ae68f6d37769458d14a37fe9ec = $this->env->getExtension("native_profiler");
        $__internal_2bd2162366381d6117748e1662f4ce3eb71217ae68f6d37769458d14a37fe9ec->enter($__internal_2bd2162366381d6117748e1662f4ce3eb71217ae68f6d37769458d14a37fe9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:newactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("home_absences_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_2bd2162366381d6117748e1662f4ce3eb71217ae68f6d37769458d14a37fe9ec->leave($__internal_2bd2162366381d6117748e1662f4ce3eb71217ae68f6d37769458d14a37fe9ec_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:newactions.html.twig";
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
/* 					<td><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('home_absences_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
