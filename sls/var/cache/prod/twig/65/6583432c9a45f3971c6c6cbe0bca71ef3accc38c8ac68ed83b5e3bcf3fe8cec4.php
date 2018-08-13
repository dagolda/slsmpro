<?php

/* BoAdminBundle:Employee:pagination.html.twig */
class __TwigTemplate_05857cde632225dd405dc6960b0429c8974eb91bb1eb3405e397db84b849b5ec extends Twig_Template
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
        $__internal_0ac2053128390c3b41530bd5a5f4e63e3b7d6f251f175fe730a602f2a5985491 = $this->env->getExtension("native_profiler");
        $__internal_0ac2053128390c3b41530bd5a5f4e63e3b7d6f251f175fe730a602f2a5985491->enter($__internal_0ac2053128390c3b41530bd5a5f4e63e3b7d6f251f175fe730a602f2a5985491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:pagination.html.twig"));

        // line 1
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("employee_xls");
        echo "\" method=\"post\" }} >
\t\t<table width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td class=\"sty-label\">Page:</td>
\t\t\t\t<td class=\"page_first\">
\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("employee_page", array("option" => 1));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("employee_page", array("option" => 2));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/prev.gif"), "html", null, true);
        echo "\" />
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td><select id=\"idpage\" name=\"idpage\">";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            if (($context["i"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select>/";
        echo twig_escape_filter($this->env, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")), "html", null, true);
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("employee_page", array("option" => 3));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_page", array("option" => (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\">";
        // line 28
        $this->loadTemplate("BoAdminBundle:Employee:selecttype.html.twig", "BoAdminBundle:Employee:pagination.html.twig", 28)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\">";
        // line 30
        $this->loadTemplate("BoAdminBundle:Employee:selectstatus.html.twig", "BoAdminBundle:Employee:pagination.html.twig", 30)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\">";
        // line 32
        $this->loadTemplate("BoAdminBundle:Employee:savailability.html.twig", "BoAdminBundle:Employee:pagination.html.twig", 32)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\">";
        // line 34
        $this->loadTemplate("BoAdminBundle:Employee:selectlangage.html.twig", "BoAdminBundle:Employee:pagination.html.twig", 34)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\">";
        // line 36
        $this->loadTemplate("BoAdminBundle:Employee:selectsexe.html.twig", "BoAdminBundle:Employee:pagination.html.twig", 36)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\">";
        // line 38
        $this->loadTemplate("BoAdminBundle:Employee:selectoption.html.twig", "BoAdminBundle:Employee:pagination.html.twig", 38)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"extract_btn\"><button type=\"submit\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/xls.gif"), "html", null, true);
        echo "\" /></button></td>\t
\t\t\t</tr>
\t\t</table>
\t</form>";
        
        $__internal_0ac2053128390c3b41530bd5a5f4e63e3b7d6f251f175fe730a602f2a5985491->leave($__internal_0ac2053128390c3b41530bd5a5f4e63e3b7d6f251f175fe730a602f2a5985491_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  130 => 38,  125 => 36,  120 => 34,  115 => 32,  110 => 30,  105 => 28,  98 => 24,  92 => 23,  85 => 19,  79 => 18,  56 => 15,  50 => 12,  44 => 11,  37 => 7,  31 => 6,  22 => 1,);
    }
}
/* 	<form action="{{ path('employee_xls') }}" method="post" }} >*/
/* 		<table width="100%">*/
/* 			<tr>*/
/* 				<td class="sty-label">Page:</td>*/
/* 				<td class="page_first">*/
/* 					<a href="{{ path('employee_page', {'option': 1}) }}" title="{{'label.firstpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('employee_page', {'option': 2}) }}" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 					</a>*/
/* 				</td>*/
/* 				<td><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('employee_page', {'option': 3}) }}" title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('employee_page', {'option': nb_pages}) }}" title="{{'label.lastpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label">{% include "BoAdminBundle:Employee:selecttype.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label">{% include "BoAdminBundle:Employee:selectstatus.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label">{% include "BoAdminBundle:Employee:savailability.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label">{% include "BoAdminBundle:Employee:selectlangage.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label">{% include "BoAdminBundle:Employee:selectsexe.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label">{% include "BoAdminBundle:Employee:selectoption.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="extract_btn"><button type="submit"><img src="{{ asset('images/actions/xls.gif') }}" /></button></td>	*/
/* 			</tr>*/
/* 		</table>*/
/* 	</form>*/
