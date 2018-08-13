<?php

/* BoAdminBundle:Local:pagination.html.twig */
class __TwigTemplate_a50808c37cec1c7bcf1bc4011553a434a2b9c07aa6ff5c51bb6d6d7082e3445b extends Twig_Template
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
        $__internal_856f3dfcac9e495bb90110293fdc41c860a3addacc30f448826b0760c697d5bd = $this->env->getExtension("native_profiler");
        $__internal_856f3dfcac9e495bb90110293fdc41c860a3addacc30f448826b0760c697d5bd->enter($__internal_856f3dfcac9e495bb90110293fdc41c860a3addacc30f448826b0760c697d5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:pagination.html.twig"));

        // line 1
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("local_xls");
        echo "\" method=\"post\" }} >
\t\t<table width=\"100%\">
\t\t\t<tr>
\t\t\t\t";
        // line 4
        if (array_key_exists("nb_pages", $context)) {
            // line 5
            echo "\t\t\t\t\t<td class=\"sty-label\">Page:</td>
\t\t\t\t\t<td class=\"page_first\">
\t\t\t\t\t\t<a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("local_page", array("option" => 1));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstpage", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("local_page", array("option" => 2));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/prev.gif"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td><select id=\"idpage\" name=\"idpage\">";
            // line 16
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
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("local_page", array("option" => 3));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_page", array("option" => (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 31
        $this->loadTemplate("BoAdminBundle:Local:selectcampus.html.twig", "BoAdminBundle:Local:pagination.html.twig", 31)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.availability", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 34
        $this->loadTemplate("BoAdminBundle:Local:availability.html.twig", "BoAdminBundle:Local:pagination.html.twig", 34)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td width=\"50%\">&nbsp;</td>
\t\t\t\t<!--td class=\"sty_label\" align=\"right\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 38
        $this->loadTemplate("BoAdminBundle:Local:selectstatus.html.twig", "BoAdminBundle:Local:pagination.html.twig", 38)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td class=\"sty_value\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "startdate", array()), 'widget', array("attr" => array("class" => "startdate span3")));
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td class=\"sty_value\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "enddate", array()), 'widget', array("attr" => array("class" => "enddate span3")));
        echo "</td>
\t\t\t\t<td class=\"extract_btn\"><button type=\"submit\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/xls.gif"), "html", null, true);
        echo "\" /></button></td--!>\t
\t\t\t</tr>
\t\t</table>
\t</form>";
        
        $__internal_856f3dfcac9e495bb90110293fdc41c860a3addacc30f448826b0760c697d5bd->leave($__internal_856f3dfcac9e495bb90110293fdc41c860a3addacc30f448826b0760c697d5bd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  153 => 44,  149 => 43,  144 => 41,  140 => 40,  135 => 38,  131 => 37,  125 => 34,  121 => 33,  116 => 31,  112 => 30,  109 => 29,  102 => 25,  96 => 24,  89 => 20,  83 => 19,  60 => 16,  54 => 13,  48 => 12,  41 => 8,  35 => 7,  31 => 5,  29 => 4,  22 => 1,);
    }
}
/* 	<form action="{{ path('local_xls') }}" method="post" }} >*/
/* 		<table width="100%">*/
/* 			<tr>*/
/* 				{%if nb_pages is defined%}*/
/* 					<td class="sty-label">Page:</td>*/
/* 					<td class="page_first">*/
/* 						<a href="{{ path('local_page', {'option': 1}) }}" title="{{'label.firstpage'|trans([],'BoAdminBundle')}}">*/
/* 							<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 						</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('local_page', {'option': 2}) }}" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 							<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 						</a>*/
/* 					</td>*/
/* 					<td><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('local_page', {'option': 3}) }}" title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 							<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 						</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('local_page', {'option': nb_pages}) }}" title="{{'label.lastpage'|trans([],'BoAdminBundle')}}">*/
/* 							<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 						</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.campus'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{% include "BoAdminBundle:Local:selectcampus.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.availability'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{% include "BoAdminBundle:Local:availability.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td width="50%">&nbsp;</td>*/
/* 				<!--td class="sty_label" align="right">{{'label.status'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{% include "BoAdminBundle:Local:selectstatus.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.startdate'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td class="sty_value">{{ form_widget(ccd_form.startdate, {'attr' : {'class' : 'startdate span3'}}) }}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.enddate'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td class="sty_value">{{ form_widget(ccd_form.enddate, {'attr' : {'class' : 'enddate span3'}}) }}</td>*/
/* 				<td class="extract_btn"><button type="submit"><img src="{{ asset('images/actions/xls.gif') }}" /></button></td--!>	*/
/* 			</tr>*/
/* 		</table>*/
/* 	</form>*/
