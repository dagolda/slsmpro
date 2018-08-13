<?php

/* BoAdminBundle:Message:editactions.html.twig */
class __TwigTemplate_5f454ba5d7072655a998838fb6234728026366a68399673547ff80b5e08bf2ac extends Twig_Template
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
        $__internal_0e0b5083f6b4bbfcda59817e598a8368e3219fc03ba3bd65dd8c11b8d4cff41e = $this->env->getExtension("native_profiler");
        $__internal_0e0b5083f6b4bbfcda59817e598a8368e3219fc03ba3bd65dd8c11b8d4cff41e->enter($__internal_0e0b5083f6b4bbfcda59817e598a8368e3219fc03ba3bd65dd8c11b8d4cff41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Message:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("message_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_0e0b5083f6b4bbfcda59817e598a8368e3219fc03ba3bd65dd8c11b8d4cff41e->leave($__internal_0e0b5083f6b4bbfcda59817e598a8368e3219fc03ba3bd65dd8c11b8d4cff41e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Message:editactions.html.twig";
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
/* 						<a href="{{ path('message_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
