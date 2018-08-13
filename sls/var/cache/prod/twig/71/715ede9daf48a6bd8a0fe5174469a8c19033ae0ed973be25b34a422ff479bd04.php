<?php

/* BoAdminBundle:Rubric:showactions.html.twig */
class __TwigTemplate_dfc8903c8c36b4e5a3cc8d5376792f2e352782a31f51f2258125090c1913aad2 extends Twig_Template
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
        $__internal_3b8f09447ffc72b3470b4c89f6a4618d43b2edcecb839d9fc061447512be5f69 = $this->env->getExtension("native_profiler");
        $__internal_3b8f09447ffc72b3470b4c89f6a4618d43b2edcecb839d9fc061447512be5f69->enter($__internal_3b8f09447ffc72b3470b4c89f6a4618d43b2edcecb839d9fc061447512be5f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("rubric_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubric_edit", array("id" => $this->getAttribute((isset($context["rubric"]) ? $context["rubric"] : $this->getContext($context, "rubric")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("rubric_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td-->
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_3b8f09447ffc72b3470b4c89f6a4618d43b2edcecb839d9fc061447512be5f69->leave($__internal_3b8f09447ffc72b3470b4c89f6a4618d43b2edcecb839d9fc061447512be5f69_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('rubric_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<!--td>*/
/* 						<a href="{{ path('rubric_edit', { 'id': rubric.id }) }}">Edit</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('rubric_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td-->*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
