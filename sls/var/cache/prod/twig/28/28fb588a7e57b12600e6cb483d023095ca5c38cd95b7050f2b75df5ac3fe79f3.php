<?php

/* BoAdvisorsBundle:Tickets:pagination.html.twig */
class __TwigTemplate_df508cd824268c9f3bb6a60a6528b462688cbad99914b014739854a079ae32c5 extends Twig_Template
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
        $__internal_2ce0d5522f863c99b3a7796705e1a8ae8091d0f05ea67918d97e9ea626ad38fc = $this->env->getExtension("native_profiler");
        $__internal_2ce0d5522f863c99b3a7796705e1a8ae8091d0f05ea67918d97e9ea626ad38fc->enter($__internal_2ce0d5522f863c99b3a7796705e1a8ae8091d0f05ea67918d97e9ea626ad38fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:pagination.html.twig"));

        // line 1
        echo "\t\t<table width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td width=\"30%\" align=\"left\">
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sty_label\"><b>Page</b>:</td>
\t\t\t\t\t\t<td class=\"page_first\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"btn_first\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/first.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"page_previous\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"btn_previous\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/prev.gif"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><select id=\"idpage\" name=\"idpage\">";
        // line 17
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
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"page_next\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"btn_next\"  title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/next.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"page_last\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"btn_last\"  title=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/last.gif"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\"><b>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</b>: ";
        $this->loadTemplate("BoAdvisorsBundle:Tickets:selecttype.html.twig", "BoAdvisorsBundle:Tickets:pagination.html.twig", 33)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\"><b>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</b>: ";
        $this->loadTemplate("BoAdvisorsBundle:Tickets:selectstatus.html.twig", "BoAdvisorsBundle:Tickets:pagination.html.twig", 35)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t</tr>
\t\t</table>
";
        
        $__internal_2ce0d5522f863c99b3a7796705e1a8ae8091d0f05ea67918d97e9ea626ad38fc->leave($__internal_2ce0d5522f863c99b3a7796705e1a8ae8091d0f05ea67918d97e9ea626ad38fc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  100 => 33,  90 => 26,  86 => 25,  79 => 21,  75 => 20,  52 => 17,  46 => 14,  42 => 13,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* 		<table width="100%">*/
/* 			<tr>*/
/* 				<td width="30%" align="left">*/
/* 				<table>*/
/* 					<tr>*/
/* 						<td class="sty_label"><b>Page</b>:</td>*/
/* 						<td class="page_first">*/
/* 							<button type="submit" id="btn_first" title="{{'label.firstpage'|trans([],'BoAdminBundle')}}">*/
/* 								<img src="{{ asset('images/actions/first.gif') }}"/>*/
/* 							</button>*/
/* 						</td>*/
/* 						<td class="page_previous">*/
/* 							<button type="submit" id="btn_previous" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 								<img src="{{ asset('images/actions/prev.gif') }}" />*/
/* 							</button>*/
/* 						</td>*/
/* 						<td><select id="idpage" name="idpage">{%for i in range(1,nb_pages)%}<option value="{{i}}" {%if i==page%}selected="selected"{%endif%}>{{i}}</option>{%endfor%}</select>/{{nb_pages}}*/
/* 						</td>*/
/* 						<td class="page_next">*/
/* 							<button type="submit" id="btn_next"  title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 								<img src="{{ asset('images/actions/next.gif') }}"/>*/
/* 							</button>*/
/* 						</td>*/
/* 						<td class="page_last">*/
/* 							<button type="submit" id="btn_last"  title="{{'label.lastpage'|trans([],'BoAdminBundle')}}">*/
/* 								<img src="{{ asset('images/actions/last.gif') }}"/>*/
/* 							</button>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</table>*/
/* 				</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label"><b>{{'label.type'|trans([],'BoAdminBundle')}}</b>: {% include "BoAdvisorsBundle:Tickets:selecttype.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label"><b>{{'label.status'|trans([],'BoAdminBundle')}}</b>: {% include "BoAdvisorsBundle:Tickets:selectstatus.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 			</tr>*/
/* 		</table>*/
/* */
