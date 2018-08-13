<?php

/* BoAdminBundle:Typecontract:tbliste.html.twig */
class __TwigTemplate_e6dc3a6c20054b45e26b25cbeefd06a74b1d7ef6c7e923c719dd9f2ca646844c extends Twig_Template
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
        $__internal_4c623827af1180bad2472d64332953ff10a9373c90f7314bc4e22528971b7597 = $this->env->getExtension("native_profiler");
        $__internal_4c623827af1180bad2472d64332953ff10a9373c90f7314bc4e22528971b7597->enter($__internal_4c623827af1180bad2472d64332953ff10a9373c90f7314bc4e22528971b7597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Typecontract:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Cration date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typecontracts"]) ? $context["typecontracts"] : $this->getContext($context, "typecontracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["typecontract"]) {
            // line 13
            echo "            <tr>
                <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typecontract_show", array("id" => $this->getAttribute($context["typecontract"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typecontract"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["typecontract"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["typecontract"], "designation", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            if ($this->getAttribute($context["typecontract"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["typecontract"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typecontract_show", array("id" => $this->getAttribute($context["typecontract"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 20
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "edit", array()) == 1))) {
                // line 21
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typecontract_edit", array("id" => $this->getAttribute($context["typecontract"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 23
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<tr><td colspan=\"4\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typecontract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>";
        
        $__internal_4c623827af1180bad2472d64332953ff10a9373c90f7314bc4e22528971b7597->leave($__internal_4c623827af1180bad2472d64332953ff10a9373c90f7314bc4e22528971b7597_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Typecontract:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  96 => 26,  89 => 23,  81 => 21,  79 => 20,  73 => 19,  66 => 17,  62 => 16,  58 => 15,  52 => 14,  49 => 13,  44 => 12,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Cration date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for typecontract in typecontracts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('typecontract_show', { 'id': typecontract.id }) }}">{{ typecontract.id }}</a></td>*/
/*                 <td>{{ typecontract.reference }}</td>*/
/*                 <td>{{ typecontract.designation }}</td>*/
/* 				<td>{% if typecontract.creationdate %}{{ typecontract.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('typecontract_show', { 'id': typecontract.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].edit==1%}*/
/* 						<a href="{{ path('typecontract_edit', { 'id': typecontract.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="4">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
