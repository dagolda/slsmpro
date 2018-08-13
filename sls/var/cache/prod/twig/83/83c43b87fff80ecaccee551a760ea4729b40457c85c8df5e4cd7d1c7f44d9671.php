<?php

/* BoCoordinatorBundle:Supervision:pagination.html.twig */
class __TwigTemplate_349c38c2388e57b8f163bc8be9b57058433388897f59d9f1590a26847b76816a extends Twig_Template
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
        $__internal_a1c3df0ac3d823b9b269ed7901cb5f8b44206729fcfdfa2a6c70d7764e4633a2 = $this->env->getExtension("native_profiler");
        $__internal_a1c3df0ac3d823b9b269ed7901cb5f8b44206729fcfdfa2a6c70d7764e4633a2->enter($__internal_a1c3df0ac3d823b9b269ed7901cb5f8b44206729fcfdfa2a6c70d7764e4633a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Supervision:pagination.html.twig"));

        // line 1
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_contract_xls");
        echo "\" method=\"post\" }} >
\t\t<ul>
\t\t\t<li class=\"sty-label\">Page:</li>
\t\t\t<li class=\"page_first\">
\t\t\t\t<button type=\"submit\" id=\"btn_first\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li class=\"page_previous\">
\t\t\t\t<button type=\"submit\" id=\"btn_previous\" title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/prev.gif"), "html", null, true);
        echo "\" />
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li><select id=\"idpage\" name=\"idpage\">";
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
\t\t\t</li>
\t\t\t<li class=\"page_next\">
\t\t\t\t<button type=\"submit\" id=\"btn_next\"  title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li class=\"page_last\">
\t\t\t\t<button type=\"submit\" id=\"btn_last\"  title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li><button type=\"submit\" class=\"no-trame\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/xls.gif"), "html", null, true);
        echo "\" width=\"20px\" /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.extract", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></li>\t
\t\t</ul>
\t</form>";
        
        $__internal_a1c3df0ac3d823b9b269ed7901cb5f8b44206729fcfdfa2a6c70d7764e4633a2->leave($__internal_a1c3df0ac3d823b9b269ed7901cb5f8b44206729fcfdfa2a6c70d7764e4633a2_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Supervision:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  89 => 23,  85 => 22,  78 => 18,  74 => 17,  51 => 14,  45 => 11,  41 => 10,  34 => 6,  30 => 5,  22 => 1,);
    }
}
/* 	<form action="{{ path('coordinator_supervision_contract_xls') }}" method="post" }} >*/
/* 		<ul>*/
/* 			<li class="sty-label">Page:</li>*/
/* 			<li class="page_first">*/
/* 				<button type="submit" id="btn_first" title="{{'label.firstpage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 				</button>*/
/* 			</li>*/
/* 			<li class="page_previous">*/
/* 				<button type="submit" id="btn_previous" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 				</button>*/
/* 			</li>*/
/* 			<li><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 			</li>*/
/* 			<li class="page_next">*/
/* 				<button type="submit" id="btn_next"  title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 				</button>*/
/* 			</li>*/
/* 			<li class="page_last">*/
/* 				<button type="submit" id="btn_last"  title="{{'label.lastpage'|trans([],'BoAdminBundle')}}">*/
/* 					<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 				</button>*/
/* 			</li>*/
/* 			<li><button type="submit" class="no-trame"><img src="{{ asset('images/actions/xls.gif') }}" width="20px" /> {{'action.extract'|trans([],'BoAdminBundle')}} {{'label.all'|trans([],'BoAdminBundle')}}</button></li>	*/
/* 		</ul>*/
/* 	</form>*/
