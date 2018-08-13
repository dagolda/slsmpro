<?php

/* BoAdminBundle:Typecontract:editactions.html.twig */
class __TwigTemplate_16602ac9df2b330fbf14bd640725d56d8809525b68796fc34bdee1663ae8a525 extends Twig_Template
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
        $__internal_dfb852fb2e7fa0196702f580f5792702f9ce682df4c6efea3807bae26c9f1491 = $this->env->getExtension("native_profiler");
        $__internal_dfb852fb2e7fa0196702f580f5792702f9ce682df4c6efea3807bae26c9f1491->enter($__internal_dfb852fb2e7fa0196702f580f5792702f9ce682df4c6efea3807bae26c9f1491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Typecontract:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("typecontract_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_dfb852fb2e7fa0196702f580f5792702f9ce682df4c6efea3807bae26c9f1491->leave($__internal_dfb852fb2e7fa0196702f580f5792702f9ce682df4c6efea3807bae26c9f1491_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Typecontract:editactions.html.twig";
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
/* 						<a href="{{ path('typecontract_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
