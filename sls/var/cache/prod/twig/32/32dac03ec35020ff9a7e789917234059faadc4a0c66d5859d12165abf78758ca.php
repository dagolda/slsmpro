<?php

/* BoAdminBundle:Pricesreference:showactions.html.twig */
class __TwigTemplate_b4107264a8fafda5521f2b62452ac9d9e7b0c41083c32faefa10242545490d6d extends Twig_Template
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
        $__internal_e989462c3e7e7942c5a5dce5fca256f9b3e8bf55c075c076e1b239bd030f7659 = $this->env->getExtension("native_profiler");
        $__internal_e989462c3e7e7942c5a5dce5fca256f9b3e8bf55c075c076e1b239bd030f7659->enter($__internal_e989462c3e7e7942c5a5dce5fca256f9b3e8bf55c075c076e1b239bd030f7659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Pricesreference:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("pricesreference_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_price\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.price", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_e989462c3e7e7942c5a5dce5fca256f9b3e8bf55c075c076e1b239bd030f7659->leave($__internal_e989462c3e7e7942c5a5dce5fca256f9b3e8bf55c075c076e1b239bd030f7659_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Pricesreference:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('pricesreference_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_price">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.price'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
