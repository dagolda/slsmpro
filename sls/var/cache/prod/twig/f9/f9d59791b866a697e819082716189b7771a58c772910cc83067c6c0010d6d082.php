<?php

/* BoAdminBundle:Otherprices:editactions.html.twig */
class __TwigTemplate_ff2ad641abbceb72c84585df67bff569452c4f911cfb7816c2f723d7f51aa088 extends Twig_Template
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
        $__internal_3d11f75e25d625f131e6e964c352966af0750a8e97c84510db3c3ba23d54ddba = $this->env->getExtension("native_profiler");
        $__internal_3d11f75e25d625f131e6e964c352966af0750a8e97c84510db3c3ba23d54ddba->enter($__internal_3d11f75e25d625f131e6e964c352966af0750a8e97c84510db3c3ba23d54ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Otherprices:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("otherprices_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_3d11f75e25d625f131e6e964c352966af0750a8e97c84510db3c3ba23d54ddba->leave($__internal_3d11f75e25d625f131e6e964c352966af0750a8e97c84510db3c3ba23d54ddba_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Otherprices:editactions.html.twig";
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
/* 						<a href="{{ path('otherprices_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
