<?php

/* BoAdminBundle:Param:editactions.html.twig */
class __TwigTemplate_4e7ceeb0c3104693dbc21da4c192c5487b97551838d2fd978717cf67f2b0533a extends Twig_Template
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
        $__internal_7d17493d290e85e812d35e476a695d35d5f5998f4629cc8a6c69e27cd7d705df = $this->env->getExtension("native_profiler");
        $__internal_7d17493d290e85e812d35e476a695d35d5f5998f4629cc8a6c69e27cd7d705df->enter($__internal_7d17493d290e85e812d35e476a695d35d5f5998f4629cc8a6c69e27cd7d705df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Param:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("param_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_7d17493d290e85e812d35e476a695d35d5f5998f4629cc8a6c69e27cd7d705df->leave($__internal_7d17493d290e85e812d35e476a695d35d5f5998f4629cc8a6c69e27cd7d705df_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Param:editactions.html.twig";
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
/* 						<a href="{{ path('param_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
