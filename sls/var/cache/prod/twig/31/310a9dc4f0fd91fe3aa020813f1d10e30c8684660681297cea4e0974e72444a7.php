<?php

/* BoAdminBundle:Contracts:substituteaction.html.twig */
class __TwigTemplate_ca0f3b6fa2d183f0e3fd37a7266337e16a30c57b91ddfc95b15949cf8abd097a extends Twig_Template
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
        $__internal_41b22f76454947b24ce1edfe32e16cb0be5e55b2616a1558f3ec024328208cd8 = $this->env->getExtension("native_profiler");
        $__internal_41b22f76454947b24ce1edfe32e16cb0be5e55b2616a1558f3ec024328208cd8->enter($__internal_41b22f76454947b24ce1edfe32e16cb0be5e55b2616a1558f3ec024328208cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:substituteaction.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_41b22f76454947b24ce1edfe32e16cb0be5e55b2616a1558f3ec024328208cd8->leave($__internal_41b22f76454947b24ce1edfe32e16cb0be5e55b2616a1558f3ec024328208cd8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:substituteaction.html.twig";
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
/* 						<a href="{{ path('contracts_show', { 'id': contract.id }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
