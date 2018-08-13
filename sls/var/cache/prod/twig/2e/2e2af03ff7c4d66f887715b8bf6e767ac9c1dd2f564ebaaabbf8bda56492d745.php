<?php

/* BoAdminBundle:Holidayslist:editactions.html.twig */
class __TwigTemplate_edd24db0054dc7cb2dbff1d2fc6398f6f3f0334e7089f9cfd95a2afa990126b2 extends Twig_Template
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
        $__internal_86c2c86865698683e81a38b1c4aa424916f3d2f53443f0e08f2b8e8fd163ae04 = $this->env->getExtension("native_profiler");
        $__internal_86c2c86865698683e81a38b1c4aa424916f3d2f53443f0e08f2b8e8fd163ae04->enter($__internal_86c2c86865698683e81a38b1c4aa424916f3d2f53443f0e08f2b8e8fd163ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Holidayslist:editactions.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("holidayslist_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_86c2c86865698683e81a38b1c4aa424916f3d2f53443f0e08f2b8e8fd163ae04->leave($__internal_86c2c86865698683e81a38b1c4aa424916f3d2f53443f0e08f2b8e8fd163ae04_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Holidayslist:editactions.html.twig";
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
/* 						<a href="{{ path('holidayslist_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
