<?php

/* BoAdminBundle:Local:editactions.html.twig */
class __TwigTemplate_b0c1b01c70a37842f48ae3dcb5b3dc3749efaa62474a9bf9e6ac4a55118155e8 extends Twig_Template
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
        $__internal_f2a188fb8e217b287e3e9cede357ef9a2879a2b8ff70cfa432d6fc804bd5edd8 = $this->env->getExtension("native_profiler");
        $__internal_f2a188fb8e217b287e3e9cede357ef9a2879a2b8ff70cfa432d6fc804bd5edd8->enter($__internal_f2a188fb8e217b287e3e9cede357ef9a2879a2b8ff70cfa432d6fc804bd5edd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("local_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_f2a188fb8e217b287e3e9cede357ef9a2879a2b8ff70cfa432d6fc804bd5edd8->leave($__internal_f2a188fb8e217b287e3e9cede357ef9a2879a2b8ff70cfa432d6fc804bd5edd8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:editactions.html.twig";
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
/* 						<a href="{{ path('local_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
