<?php

/* BoAdminBundle:Holidayslist:tbliste.html.twig */
class __TwigTemplate_7d1514ba873ef672d524deba66e9d29b897c471579a0b5a566aa62b6c3d0ea11 extends Twig_Template
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
        $__internal_6908bbb2276b6a72d3850856f125e8f9272e7b0ea41a2517a6da01d901822eee = $this->env->getExtension("native_profiler");
        $__internal_6908bbb2276b6a72d3850856f125e8f9272e7b0ea41a2517a6da01d901822eee->enter($__internal_6908bbb2276b6a72d3850856f125e8f9272e7b0ea41a2517a6da01d901822eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Holidayslist:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Date</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Country</th>
                <th>Province</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["holidayslists"]) ? $context["holidayslists"] : $this->getContext($context, "holidayslists")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["holidayslist"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            if ($this->getAttribute($context["holidayslist"], "ddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["holidayslist"], "ddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["holidayslist"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["holidayslist"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["holidayslist"], "province", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["holidayslist"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["holidayslist"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("holidayslist_show", array("id" => $this->getAttribute($context["holidayslist"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("holidayslist_edit", array("id" => $this->getAttribute($context["holidayslist"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['holidayslist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>";
        
        $__internal_6908bbb2276b6a72d3850856f125e8f9272e7b0ea41a2517a6da01d901822eee->leave($__internal_6908bbb2276b6a72d3850856f125e8f9272e7b0ea41a2517a6da01d901822eee_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Holidayslist:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  90 => 26,  79 => 22,  75 => 21,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  50 => 15,  47 => 14,  42 => 13,  34 => 8,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Country</th>*/
/*                 <th>Province</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for holidayslist in holidayslists %}*/
/*             <tr>*/
/*                 <td>{% if holidayslist.ddate %}{{ holidayslist.ddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ holidayslist.designation }}</td>*/
/*                 <td>{{ holidayslist.country }}</td>*/
/*                 <td>{{ holidayslist.province }}</td>*/
/*                 <td>{% if holidayslist.creationdate %}{{ holidayslist.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('holidayslist_show', { 'id': holidayslist.id }) }}">show</a>*/
/*                     <a href="{{ path('holidayslist_edit', { 'id': holidayslist.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
