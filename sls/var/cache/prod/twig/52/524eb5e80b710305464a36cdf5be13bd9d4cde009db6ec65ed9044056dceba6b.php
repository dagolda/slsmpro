<?php

/* BoHomeBundle:Tsdoc:actions.html.twig */
class __TwigTemplate_055f6dab6c0ffe12f79925fbb9e91f1184cc4571040c3324fb21e614f49ebbad extends Twig_Template
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
        $__internal_fde0360300ea57a8b174ff4595495997526d67fd3d572e0a7c81149060b747fe = $this->env->getExtension("native_profiler");
        $__internal_fde0360300ea57a8b174ff4595495997526d67fd3d572e0a7c81149060b747fe->enter($__internal_fde0360300ea57a8b174ff4595495997526d67fd3d572e0a7c81149060b747fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tsdoc:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_tsdoc\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 12
        if ((array_key_exists("url", $context) && ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) != null))) {
            // line 13
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_fde0360300ea57a8b174ff4595495997526d67fd3d572e0a7c81149060b747fe->leave($__internal_fde0360300ea57a8b174ff4595495997526d67fd3d572e0a7c81149060b747fe_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tsdoc:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  46 => 14,  43 => 13,  41 => 12,  36 => 10,  31 => 8,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_tsdoc">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					{%if url is defined and url!=null%}*/
/* 					<td>*/
/* 						<a href="{{url}}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
