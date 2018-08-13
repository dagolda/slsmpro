<?php

/* BoAdminBundle:Evaluation:backactions.html.twig */
class __TwigTemplate_be31f0fd798ae3225f6deb303e59e14941a168b98c4fce6848207ea14c5e4c6b extends Twig_Template
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
        $__internal_66c7fb38892102434b75f9f4e28abd15ca9b860e11f601c04a9d731f5bee6bb6 = $this->env->getExtension("native_profiler");
        $__internal_66c7fb38892102434b75f9f4e28abd15ca9b860e11f601c04a9d731f5bee6bb6->enter($__internal_66c7fb38892102434b75f9f4e28abd15ca9b860e11f601c04a9d731f5bee6bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:backactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\"  value=\"";
        // line 6
        if (array_key_exists("description", $context)) {
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        }
        echo "\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_search\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_eval\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("evaluation_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_66c7fb38892102434b75f9f4e28abd15ca9b860e11f601c04a9d731f5bee6bb6->leave($__internal_66c7fb38892102434b75f9f4e28abd15ca9b860e11f601c04a9d731f5bee6bb6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:backactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  43 => 12,  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control"  value="{%if description is defined%}{{ description}}{%endif%}" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_eval">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('evaluation_index') }}">{{'action.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
