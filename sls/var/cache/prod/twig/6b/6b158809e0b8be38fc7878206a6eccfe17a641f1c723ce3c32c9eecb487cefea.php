<?php

/* BoUserBundle:User:editactions.html.twig */
class __TwigTemplate_fc47bc04131d958071fed795bc2ac35f5efd55ccce99e2365e2cae45a735c6a7 extends Twig_Template
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
        $__internal_6bb6a0c932122d58716bcf9fca94dddcd7d21f534c6481c02e3ddccd9608bede = $this->env->getExtension("native_profiler");
        $__internal_6bb6a0c932122d58716bcf9fca94dddcd7d21f534c6481c02e3ddccd9608bede->enter($__internal_6bb6a0c932122d58716bcf9fca94dddcd7d21f534c6481c02e3ddccd9608bede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:User:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_6bb6a0c932122d58716bcf9fca94dddcd7d21f534c6481c02e3ddccd9608bede->leave($__internal_6bb6a0c932122d58716bcf9fca94dddcd7d21f534c6481c02e3ddccd9608bede_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:User:editactions.html.twig";
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
/* 						<a href="{{ path('user_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
