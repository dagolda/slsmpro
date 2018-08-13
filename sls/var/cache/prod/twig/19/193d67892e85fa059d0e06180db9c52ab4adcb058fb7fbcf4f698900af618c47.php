<?php

/* BoAdminBundle:Evaluation:confirmactions.html.twig */
class __TwigTemplate_ea66b87ca123bee46fabbf9892cd62f857a14a7b92a916ea2bc9a41407160189 extends Twig_Template
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
        $__internal_f1e70905934b55184bb5cb4677297a9ec17595a7b74975ecf142c02e71c172e0 = $this->env->getExtension("native_profiler");
        $__internal_f1e70905934b55184bb5cb4677297a9ec17595a7b74975ecf142c02e71c172e0->enter($__internal_f1e70905934b55184bb5cb4677297a9ec17595a7b74975ecf142c02e71c172e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:confirmactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submitt\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_show", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()), "page" => 1)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_f1e70905934b55184bb5cb4677297a9ec17595a7b74975ecf142c02e71c172e0->leave($__internal_f1e70905934b55184bb5cb4677297a9ec17595a7b74975ecf142c02e71c172e0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:confirmactions.html.twig";
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
/* 					<td><button type="submitt">{{'action.send'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('evaluation_show',{'id':evaluation.id,'page':1}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
