<?php

/* BoAdvisorsBundle:Enquiry:actions.html.twig */
class __TwigTemplate_3cffc43aaa5890933f12bcb188e4aef02b5ab6f2896f829eecdb22a0a8c0800e extends Twig_Template
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
        $__internal_6749060d7534cf807b2308aea10636ba528abc5491482cfa9bad1c428acbdc33 = $this->env->getExtension("native_profiler");
        $__internal_6749060d7534cf807b2308aea10636ba528abc5491482cfa9bad1c428acbdc33->enter($__internal_6749060d7534cf807b2308aea10636ba528abc5491482cfa9bad1c428acbdc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_search\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"btn wax_3d_1\">
\t\t\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.created", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"btn validated\">
\t\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolved", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"btn rejected\">
\t\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notresolved", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"sty_label\"><b>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo ":</b></div>
\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:status.html.twig", "BoAdvisorsBundle:Enquiry:actions.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_6749060d7534cf807b2308aea10636ba528abc5491482cfa9bad1c428acbdc33->leave($__internal_6749060d7534cf807b2308aea10636ba528abc5491482cfa9bad1c428acbdc33_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  88 => 35,  84 => 34,  77 => 30,  71 => 27,  65 => 24,  55 => 19,  46 => 15,  38 => 12,  32 => 9,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('dash_enquiry_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('dash_enquiry_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.enquiry'|trans([],'BoAdminBundle')}} <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<span class="btn wax_3d_1">*/
/* 							{{'label.created'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 						<span class="btn validated">*/
/* 							{{'label.resolved'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 						<span class="btn rejected">*/
/* 							{{'label.notresolved'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 					</td>*/
/* 					<td>*/
/* 						<div class="sty_label"><b>{{'label.status'|trans([],'BoAdminBundle')}}:</b></div>*/
/* 						{% include "BoAdvisorsBundle:Enquiry:status.html.twig" %}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
