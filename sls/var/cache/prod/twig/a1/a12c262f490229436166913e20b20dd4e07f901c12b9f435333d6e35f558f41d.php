<?php

/* BoAdminBundle:Group:editactions.html.twig */
class __TwigTemplate_28d57859e8ebf6b015989ce00dc80f7e900ec05fd9a8335d3a375e55a0876534 extends Twig_Template
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
        $__internal_0987a329d95a262d7ea622601092deee590fbec32aa1757008987d60895307a4 = $this->env->getExtension("native_profiler");
        $__internal_0987a329d95a262d7ea622601092deee590fbec32aa1757008987d60895307a4->enter($__internal_0987a329d95a262d7ea622601092deee590fbec32aa1757008987d60895307a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("group_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_0987a329d95a262d7ea622601092deee590fbec32aa1757008987d60895307a4->leave($__internal_0987a329d95a262d7ea622601092deee590fbec32aa1757008987d60895307a4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:editactions.html.twig";
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
/* 						<a href="{{ path('group_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
