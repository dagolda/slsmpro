<?php

/* BoAdminBundle:MotifAbsence:tbliste.html.twig */
class __TwigTemplate_73b8a87ad0b48fd6489947b5fd42d8b03ee88218dac84b5c526b7f341f613990 extends Twig_Template
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
        $__internal_1a685b5e962cb6ae3397f3d8795e4046ecc1e019e5ccbf02c07cc8d041725632 = $this->env->getExtension("native_profiler");
        $__internal_1a685b5e962cb6ae3397f3d8795e4046ecc1e019e5ccbf02c07cc8d041725632->enter($__internal_1a685b5e962cb6ae3397f3d8795e4046ecc1e019e5ccbf02c07cc8d041725632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:MotifAbsence:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"130px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["motifabsences"]) ? $context["motifabsences"] : $this->getContext($context, "motifabsences")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["motifabsence"]) {
            // line 13
            echo "            <tr>
                <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motifabsence_show", array("id" => $this->getAttribute($context["motifabsence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["motifabsence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["motifabsence"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            if ($this->getAttribute($context["motifabsence"], "student", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.yes", array(), "BoAdminBundle"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.no", array(), "BoAdminBundle"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["motifabsence"], "teacher", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.yes", array(), "BoAdminBundle"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.no", array(), "BoAdminBundle"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motifabsence_show", array("id" => $this->getAttribute($context["motifabsence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motifabsence_edit", array("id" => $this->getAttribute($context["motifabsence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motifabsence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
        
        $__internal_1a685b5e962cb6ae3397f3d8795e4046ecc1e019e5ccbf02c07cc8d041725632->leave($__internal_1a685b5e962cb6ae3397f3d8795e4046ecc1e019e5ccbf02c07cc8d041725632_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:MotifAbsence:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  99 => 24,  88 => 20,  82 => 19,  73 => 17,  65 => 16,  61 => 15,  55 => 14,  52 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="130px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for motifabsence in motifabsences %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('motifabsence_show', { 'id': motifabsence.id }) }}">{{ motifabsence.id }}</a></td>*/
/*                 <td>{{ motifabsence.name }}</td>*/
/*                 <td>{%if motifabsence.student %}{{'label.yes'|trans([],'BoAdminBundle')}}{%else%}{{'label.no'|trans([],'BoAdminBundle')}}{%endif%}</td>*/
/*                 <td>{%if motifabsence.teacher %}{{'label.yes'|trans([],'BoAdminBundle')}}{%else%}{{'label.no'|trans([],'BoAdminBundle')}}{%endif%}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('motifabsence_show', { 'id': motifabsence.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                     <a href="{{ path('motifabsence_edit', { 'id': motifabsence.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
