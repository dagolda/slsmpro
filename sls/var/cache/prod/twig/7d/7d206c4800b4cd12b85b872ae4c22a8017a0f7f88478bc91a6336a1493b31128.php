<?php

/* BoAdminBundle:SupEmployee:pagination.html.twig */
class __TwigTemplate_a0868108fd7ea9c4d5ae1e89ab6933a045bf13e87d9c9624f2b6fab8bfcefbe5 extends Twig_Template
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
        $__internal_f230445f30b4797773884a8debd9cbc14f61ecb204cc98e647c028f5c6a9af5a = $this->env->getExtension("native_profiler");
        $__internal_f230445f30b4797773884a8debd9cbc14f61ecb204cc98e647c028f5c6a9af5a->enter($__internal_f230445f30b4797773884a8debd9cbc14f61ecb204cc98e647c028f5c6a9af5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:SupEmployee:pagination.html.twig"));

        // line 1
        echo "\t\t<table>
\t\t\t<tr>
\t\t\t\t<td class=\"sty-label\">Page:</td>
\t\t\t\t<td class=\"page_first\">
\t\t\t\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("supemployee_page", array("option" => 1));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("supemployee_page", array("option" => 2));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/prev.gif"), "html", null, true);
        echo "\" />
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td><select id=\"idpage\" name=\"idpage\">";
        // line 14
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
        // line 17
        echo $this->env->getExtension('routing')->getPath("supemployee_page", array("option" => 3));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supemployee_page", array("option" => (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
        
        $__internal_f230445f30b4797773884a8debd9cbc14f61ecb204cc98e647c028f5c6a9af5a->leave($__internal_f230445f30b4797773884a8debd9cbc14f61ecb204cc98e647c028f5c6a9af5a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:SupEmployee:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  89 => 22,  82 => 18,  76 => 17,  53 => 14,  47 => 11,  41 => 10,  34 => 6,  28 => 5,  22 => 1,);
    }
}
/* 		<table>*/
/* 			<tr>*/
/* 				<td class="sty-label">Page:</td>*/
/* 				<td class="page_first">*/
/* 					<a href="{{ path('supemployee_page', {'option': 1}) }}" title="{{'label.firstpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('supemployee_page', {'option': 2}) }}" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 					</a>*/
/* 				</td>*/
/* 				<td><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('supemployee_page', {'option': 3}) }}" title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('supemployee_page', {'option': nb_pages}) }}" title="{{'label.lastpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 			</tr>*/
/* 		</table>*/
