<?php

/* BoAdminBundle:Param:pagination.html.twig */
class __TwigTemplate_6d4212ea5abcccc2abc39ced1f3bec7f4434153430e203a709feaad5e3f6654e extends Twig_Template
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
        $__internal_3421099cb593b1e09aef6915f5e5aca6aeccbe7bcdf270ce2fcfff42321117f6 = $this->env->getExtension("native_profiler");
        $__internal_3421099cb593b1e09aef6915f5e5aca6aeccbe7bcdf270ce2fcfff42321117f6->enter($__internal_3421099cb593b1e09aef6915f5e5aca6aeccbe7bcdf270ce2fcfff42321117f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Param:pagination.html.twig"));

        // line 1
        echo "\t\t<ul>
\t\t\t<li class=\"sty-label\">Page:</li>
\t\t\t<li class=\"page_first\">
\t\t\t\t<button type=\"submit\" id=\"btn_first\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li class=\"page_previous\">
\t\t\t\t<button type=\"submit\" id=\"btn_previous\" title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/prev.gif"), "html", null, true);
        echo "\" />
\t\t\t\t</button>
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
\t\t\t<li class=\"page_next\">
\t\t\t\t<button type=\"submit\" id=\"btn_next\"  title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li class=\"page_last\">
\t\t\t\t<button type=\"submit\" id=\"btn_last\"  title=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t</button>
\t\t\t</li>
\t\t</ul>";
        
        $__internal_3421099cb593b1e09aef6915f5e5aca6aeccbe7bcdf270ce2fcfff42321117f6->leave($__internal_3421099cb593b1e09aef6915f5e5aca6aeccbe7bcdf270ce2fcfff42321117f6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Param:pagination.html.twig";
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
/* 		</ul>*/
