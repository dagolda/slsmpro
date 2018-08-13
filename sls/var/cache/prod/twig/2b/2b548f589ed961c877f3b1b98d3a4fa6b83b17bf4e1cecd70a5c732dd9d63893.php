<?php

/* BoUserBundle:User:pagination.html.twig */
class __TwigTemplate_8955d2d1fa0382b84db2ecd28c8c62ffbd39a8f4d81e06269b825ba5a35fd19a extends Twig_Template
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
        $__internal_975595ff995c5ce5c4ba8f617594d1d679ad8761d9cd674f51a7a067f42c5432 = $this->env->getExtension("native_profiler");
        $__internal_975595ff995c5ce5c4ba8f617594d1d679ad8761d9cd674f51a7a067f42c5432->enter($__internal_975595ff995c5ce5c4ba8f617594d1d679ad8761d9cd674f51a7a067f42c5432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:User:pagination.html.twig"));

        // line 1
        echo "\t\t<ul>
\t\t\t<li class=\"sty-label\">Page:</li>
\t\t\t<li class=\"page_first\">
\t\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("user_page", array("option" => 1));
        echo "\" title=\"Première page\">
\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_page", array("option" => 2));
        echo "\" title=\"Page précédente\">
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
        echo $this->env->getExtension('routing')->getPath("user_page", array("option" => 3));
        echo "\" title=\"Page suivante\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("option" => (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")))), "html", null, true);
        echo "\" title=\"Dernière page\">
\t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>";
        
        $__internal_975595ff995c5ce5c4ba8f617594d1d679ad8761d9cd674f51a7a067f42c5432->leave($__internal_975595ff995c5ce5c4ba8f617594d1d679ad8761d9cd674f51a7a067f42c5432_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:User:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  82 => 21,  75 => 17,  71 => 16,  48 => 13,  42 => 10,  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 		<ul>*/
/* 			<li class="sty-label">Page:</li>*/
/* 			<li class="page_first">*/
/* 				<a href="{{ path('user_page', {'option': 1}) }}" title="Première page">*/
/* 					<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a href="{{ path('user_page', {'option': 2}) }}" title="Page précédente">*/
/* 					<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 				</a>*/
/* 			</li>*/
/* 			<li><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 			</li>*/
/* 			<li>*/
/* 				<a href="{{ path('user_page', {'option': 3}) }}" title="Page suivante">*/
/* 					<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a href="{{ path('user_page', {'option': nb_pages}) }}" title="Dernière page">*/
/* 					<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 				</a>*/
/* 			</li>*/
/* 		</ul>*/
