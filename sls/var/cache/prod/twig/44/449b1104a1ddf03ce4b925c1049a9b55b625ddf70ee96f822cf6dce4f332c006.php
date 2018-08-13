<?php

/* BoAdminBundle:Employee:newactions.html.twig */
class __TwigTemplate_ed8a0d8d57fcaaf76eca5faf99ccde7022ff157801a09446656ad2bc191d1fa1 extends Twig_Template
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
        $__internal_b3a33f3e282004d775ba72729ceec66b69983ec33184820a824dc5831cf151fd = $this->env->getExtension("native_profiler");
        $__internal_b3a33f3e282004d775ba72729ceec66b69983ec33184820a824dc5831cf151fd->enter($__internal_b3a33f3e282004d775ba72729ceec66b69983ec33184820a824dc5831cf151fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:newactions.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_b3a33f3e282004d775ba72729ceec66b69983ec33184820a824dc5831cf151fd->leave($__internal_b3a33f3e282004d775ba72729ceec66b69983ec33184820a824dc5831cf151fd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:newactions.html.twig";
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
/* 						<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
