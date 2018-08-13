<?php

/* BoHomeBundle:Substitution:actions.html.twig */
class __TwigTemplate_a17c6af5713edfae63b0fc299936fa7c722fafc8c72ba428c62b81e90c84f8df extends Twig_Template
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
        $__internal_d0a82cb30b9883329e9abf9c63f5ff71f92b10ef9bf1f96395590308a0e98641 = $this->env->getExtension("native_profiler");
        $__internal_d0a82cb30b9883329e9abf9c63f5ff71f92b10ef9bf1f96395590308a0e98641->enter($__internal_d0a82cb30b9883329e9abf9c63f5ff71f92b10ef9bf1f96395590308a0e98641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Substitution:actions.html.twig"));

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
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal substitutions <span class=\"badge\">";
        // line 11
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions"))), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_d0a82cb30b9883329e9abf9c63f5ff71f92b10ef9bf1f96395590308a0e98641->leave($__internal_d0a82cb30b9883329e9abf9c63f5ff71f92b10ef9bf1f96395590308a0e98641_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Substitution:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  31 => 8,  22 => 1,);
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
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total substitutions <span class="badge">{{substitutions|length|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
