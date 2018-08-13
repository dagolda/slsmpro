<?php

/* BoQuizBundle:Scoring:tbliste.html.twig */
class __TwigTemplate_b99d60bc9a96e313033cb7ace6cfcaa7c9ea4a8040578d36e993a7ead897b171 extends Twig_Template
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
        $__internal_0aa366399a30696ad7c7c0c002350bbf7b1bcfb6dfd20f564663427eb16ff856 = $this->env->getExtension("native_profiler");
        $__internal_0aa366399a30696ad7c7c0c002350bbf7b1bcfb6dfd20f564663427eb16ff856->enter($__internal_0aa366399a30696ad7c7c0c002350bbf7b1bcfb6dfd20f564663427eb16ff856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoQuizBundle:Scoring:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.noq", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.letter", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scorings"]) ? $context["scorings"] : $this->getContext($context, "scorings")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["scoring"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["scoring"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["scoring"], "language", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["scoring"], "noq", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["scoring"], "noq", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["scoring"], "binf", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["scoring"], "bsup", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["scoring"], "letter", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    \t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("scoring_show", array("id" => $this->getAttribute($context["scoring"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("scoring_edit", array("id" => $this->getAttribute($context["scoring"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scoring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_0aa366399a30696ad7c7c0c002350bbf7b1bcfb6dfd20f564663427eb16ff856->leave($__internal_0aa366399a30696ad7c7c0c002350bbf7b1bcfb6dfd20f564663427eb16ff856_prof);

    }

    public function getTemplateName()
    {
        return "BoQuizBundle:Scoring:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  107 => 28,  96 => 24,  92 => 23,  87 => 21,  83 => 20,  79 => 19,  71 => 18,  67 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.noq'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.from'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.to'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.letter'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for scoring in scorings %}*/
/*             <tr>*/
/*                 <td>{{ scoring.id }}</td>*/
/*                 <td>{{ scoring.language }}</td>*/
/*                 <td>{%if scoring.noq %}{{ scoring.noq }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ scoring.binf }}</td>*/
/*                 <td>{{ scoring.bsup }}</td>*/
/*                 <td>{{ scoring.letter }}</td>*/
/*                 <td class="list-action">*/
/*                     	<a href="{{ path('scoring_show', { 'id': scoring.id }) }}">show</a>*/
/* 			<a href="{{ path('scoring_edit', { 'id': scoring.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
