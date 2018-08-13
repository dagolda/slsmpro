<?php

/* BoAdminBundle:Group:pagination.html.twig */
class __TwigTemplate_8a8d6cca7b7b060480fc1b1799491e3f153f4f2955db19a5a373131ee6a6fe21 extends Twig_Template
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
        $__internal_416580d19e9eed7825e4342d2bc9bfcdded8a1ba2abf1476f3cf4daf5f3573f3 = $this->env->getExtension("native_profiler");
        $__internal_416580d19e9eed7825e4342d2bc9bfcdded8a1ba2abf1476f3cf4daf5f3573f3->enter($__internal_416580d19e9eed7825e4342d2bc9bfcdded8a1ba2abf1476f3cf4daf5f3573f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:pagination.html.twig"));

        // line 1
        echo "\t\t<ul>
\t\t\t<li class=\"sty-label\">Page:</li>
\t\t\t<li class=\"page_first\">
\t\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("group_page", array("option" => 1));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("group_page", array("option" => 2));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/prev.gif"), "html", null, true);
        echo "\" />
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li><select id=\"idpage\" name=\"idpage\">";
        // line 13
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
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("group_page", array("option" => 3));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_page", array("option" => (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>";
        
        $__internal_416580d19e9eed7825e4342d2bc9bfcdded8a1ba2abf1476f3cf4daf5f3573f3->leave($__internal_416580d19e9eed7825e4342d2bc9bfcdded8a1ba2abf1476f3cf4daf5f3573f3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  88 => 21,  81 => 17,  75 => 16,  52 => 13,  46 => 10,  40 => 9,  33 => 5,  27 => 4,  22 => 1,);
    }
}
/* 		<ul>*/
/* 			<li class="sty-label">Page:</li>*/
/* 			<li class="page_first">*/
/* 				<a href="{{ path('group_page', {'option': 1}) }}" title="{{'label.firstpage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a href="{{ path('group_page', {'option': 2}) }}" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 				</a>*/
/* 			</li>*/
/* 			<li><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 			</li>*/
/* 			<li>*/
/* 				<a href="{{ path('group_page', {'option': 3}) }}" title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a href="{{ path('group_page', {'option': nb_pages}) }}" title="{{'label.lastpage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 				</a>*/
/* 			</li>*/
/* 		</ul>*/
