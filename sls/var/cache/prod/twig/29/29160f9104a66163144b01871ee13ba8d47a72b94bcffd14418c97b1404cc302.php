<?php

/* BoUserBundle:User:actions.html.twig */
class __TwigTemplate_bb82348394e56eb30de9797f065887c41e367cda643d69fd995f246a143baea7 extends Twig_Template
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
        $__internal_60045929bb45726196bb10e903dc817c70a4ba8e491daa5986f6570210cb5a94 = $this->env->getExtension("native_profiler");
        $__internal_60045929bb45726196bb10e903dc817c70a4ba8e491daa5986f6570210cb5a94->enter($__internal_60045929bb45726196bb10e903dc817c70a4ba8e491daa5986f6570210cb5a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:User:actions.html.twig"));

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
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td-->
\t\t\t\t\t";
        // line 12
        if (array_key_exists("option", $context)) {
            // line 13
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("user_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.user", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("user_teacher_connected");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_60045929bb45726196bb10e903dc817c70a4ba8e491daa5986f6570210cb5a94->leave($__internal_60045929bb45726196bb10e903dc817c70a4ba8e491daa5986f6570210cb5a94_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:User:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  69 => 23,  66 => 22,  57 => 18,  48 => 14,  45 => 13,  43 => 12,  36 => 10,  31 => 8,  22 => 1,);
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
/* 					<!--td>*/
/* 						<a href="{{ path('user_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td-->*/
/* 					{%if option is defined%}*/
/* 					<td>*/
/* 						<a href="{{ path('user_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 						<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.user'|trans([],'BoAdminBundle')}} <span class="badge">{{users|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 					{%else%}*/
/* 					<td>*/
/* 						<a href="{{ path('user_teacher_connected') }}">{{'label.teacher'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
