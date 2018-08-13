<?php

/* BoAdminBundle:Absences:spagination.html.twig */
class __TwigTemplate_8e0bcdf36802604c3d566250a412d087f50727eaab48364ad29535812122f39a extends Twig_Template
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
        $__internal_740241ca0271e7e687f261bd8d1c754ab5e0d685ed0f5b7ef67b91b6353dd021 = $this->env->getExtension("native_profiler");
        $__internal_740241ca0271e7e687f261bd8d1c754ab5e0d685ed0f5b7ef67b91b6353dd021->enter($__internal_740241ca0271e7e687f261bd8d1c754ab5e0d685ed0f5b7ef67b91b6353dd021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:spagination.html.twig"));

        // line 1
        echo "\t<center>\t
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td class=\"sty-label\">Page:</td>
\t\t\t\t<td class=\"page_first\">
\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("students_page_absences", array("option" => 1));
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
        echo $this->env->getExtension('routing')->getPath("students_page_absences", array("option" => 2));
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
        echo $this->env->getExtension('routing')->getPath("students_page_absences", array("option" => 3));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_page_absences", array("option" => (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</center>";
        
        $__internal_740241ca0271e7e687f261bd8d1c754ab5e0d685ed0f5b7ef67b91b6353dd021->leave($__internal_740241ca0271e7e687f261bd8d1c754ab5e0d685ed0f5b7ef67b91b6353dd021_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:spagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  90 => 23,  83 => 19,  77 => 18,  54 => 15,  48 => 12,  42 => 11,  35 => 7,  29 => 6,  22 => 1,);
    }
}
/* 	<center>	*/
/* 		<table>*/
/* 			<tr>*/
/* 				<td class="sty-label">Page:</td>*/
/* 				<td class="page_first">*/
/* 					<a href="{{ path('students_page_absences', {'option': 1}) }}" title="{{'label.firstpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('students_page_absences', {'option': 2}) }}" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 					</a>*/
/* 				</td>*/
/* 				<td><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('students_page_absences', {'option': 3}) }}" title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('students_page_absences', {'option': nb_pages}) }}" title="{{'label.lastpage'|trans([],'BoAdminBundle')}}">*/
/* 						<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 					</a>*/
/* 				</td>*/
/* 			</tr>*/
/* 		</table>*/
/* 	</center>*/
