<?php

/* BoAdminBundle:Rubric:tbliste.html.twig */
class __TwigTemplate_12674f92054e084e0b4999d4ca44c3b91f96acb5679bcc6d83bb31bc535b6391 extends Twig_Template
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
        $__internal_cb30a3b32f63ee5c975b48fe23aa8d53132e51cbcae96f33958d54e761a3645a = $this->env->getExtension("native_profiler");
        $__internal_cb30a3b32f63ee5c975b48fe23aa8d53132e51cbcae96f33958d54e761a3645a->enter($__internal_cb30a3b32f63ee5c975b48fe23aa8d53132e51cbcae96f33958d54e761a3645a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Name (english)</th>
                <th>Name (french)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrics"]) ? $context["rubrics"] : $this->getContext($context, "rubrics")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rubric"]) {
            // line 12
            echo "            <tr>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubric_show", array("id" => $this->getAttribute($context["rubric"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rubric"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["rubric"], "nameen", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["rubric"], "namefr", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubric_show", array("id" => $this->getAttribute($context["rubric"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubric_edit", array("id" => $this->getAttribute($context["rubric"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t\t\t<tr><td colspan=\"4\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubric'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>";
        
        $__internal_cb30a3b32f63ee5c975b48fe23aa8d53132e51cbcae96f33958d54e761a3645a->leave($__internal_cb30a3b32f63ee5c975b48fe23aa8d53132e51cbcae96f33958d54e761a3645a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  75 => 22,  64 => 18,  60 => 17,  55 => 15,  51 => 14,  45 => 13,  42 => 12,  37 => 11,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Name (english)</th>*/
/*                 <th>Name (french)</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for rubric in rubrics %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('rubric_show', { 'id': rubric.id }) }}">{{ rubric.id }}</a></td>*/
/*                 <td>{{ rubric.nameen }}</td>*/
/*                 <td>{{ rubric.namefr }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('rubric_show', { 'id': rubric.id }) }}">show</a>*/
/*                     <a href="{{ path('rubric_edit', { 'id': rubric.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="4">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
