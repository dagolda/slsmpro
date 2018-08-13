<?php

/* BoAdminBundle:Param:tbliste.html.twig */
class __TwigTemplate_553f2fd5378b0821024a6502b72d59fff946fcb31920642f113a2102106f1877 extends Twig_Template
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
        $__internal_1205df73c1b430870348bfa72729dd15f8ec5158ffb0f552dc92cda7e5b5a002 = $this->env->getExtension("native_profiler");
        $__internal_1205df73c1b430870348bfa72729dd15f8ec5158ffb0f552dc92cda7e5b5a002->enter($__internal_1205df73c1b430870348bfa72729dd15f8ec5158ffb0f552dc92cda7e5b5a002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Param:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.unit", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.value", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"130px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("param_show", array("id" => $this->getAttribute($context["param"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["param"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["param"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["param"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["param"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["param"], "unit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["param"], "value", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("param_show", array("id" => $this->getAttribute($context["param"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("param_edit", array("id" => $this->getAttribute($context["param"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_1205df73c1b430870348bfa72729dd15f8ec5158ffb0f552dc92cda7e5b5a002->leave($__internal_1205df73c1b430870348bfa72729dd15f8ec5158ffb0f552dc92cda7e5b5a002_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Param:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  107 => 28,  96 => 24,  90 => 23,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.unit'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.value'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="130px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for param in params %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('param_show', { 'id': param.id }) }}">{{ param.id }}</a></td>*/
/*                 <td>{{ param.reference }}</td>*/
/*                 <td>{{ param.category }}</td>*/
/*                 <td>{{ param.name }}</td>*/
/*                 <td>{{ param.unit }}</td>*/
/*                 <td>{{ param.value }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('param_show', { 'id': param.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                     <a href="{{ path('param_edit', { 'id': param.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
