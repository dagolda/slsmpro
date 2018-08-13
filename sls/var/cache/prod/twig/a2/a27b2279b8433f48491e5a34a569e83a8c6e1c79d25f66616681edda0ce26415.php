<?php

/* BoAdminBundle:Pricesreference:tbliste.html.twig */
class __TwigTemplate_cdde275baafa0a12f3a66192e7492745f0c3fc59e9f9cd0b07b4f38ea8c08fe8 extends Twig_Template
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
        $__internal_00265b8d2f35da4d3f52d5bb7c25cbbad2bf9ff33369e1e267db1de3a95b0bb8 = $this->env->getExtension("native_profiler");
        $__internal_00265b8d2f35da4d3f52d5bb7c25cbbad2bf9ff33369e1e267db1de3a95b0bb8->enter($__internal_00265b8d2f35da4d3f52d5bb7c25cbbad2bf9ff33369e1e267db1de3a95b0bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Pricesreference:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.offernumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pricesreferences"]) ? $context["pricesreferences"] : $this->getContext($context, "pricesreferences")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pricesreference"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pricesreference_show", array("id" => $this->getAttribute($context["pricesreference"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricesreference"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricesreference"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricesreference"], "offernumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricesreference"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricesreference"], "field", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricesreference"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["pricesreference"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pricesreference"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pricesreference_show", array("id" => $this->getAttribute($context["pricesreference"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 26
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Prices", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Prices", array(), "array"), "edit", array()) == 1))) {
                // line 27
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pricesreference_edit", array("id" => $this->getAttribute($context["pricesreference"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 29
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "\t\t\t<tr><td colspan=\"7\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pricesreference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>";
        
        $__internal_00265b8d2f35da4d3f52d5bb7c25cbbad2bf9ff33369e1e267db1de3a95b0bb8->leave($__internal_00265b8d2f35da4d3f52d5bb7c25cbbad2bf9ff33369e1e267db1de3a95b0bb8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Pricesreference:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  121 => 32,  114 => 29,  106 => 27,  104 => 26,  100 => 25,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  67 => 17,  64 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.offernumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.description'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.location'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pricesreference in pricesreferences %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('pricesreference_show', { 'id': pricesreference.id }) }}">{{ pricesreference.id }}</a></td>*/
/*                 <td>{{ pricesreference.typecontract }}</td>*/
/*                 <td>{{ pricesreference.offernumber }}</td>*/
/*                 <td>{{ pricesreference.description }}</td>*/
/*                 <td>{{ pricesreference.field }}</td>*/
/*                 <td>{{ pricesreference.location }}</td>*/
/*                 <td>{% if pricesreference.creationdate %}{{ pricesreference.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('pricesreference_show', { 'id': pricesreference.id }) }}">show</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Prices'] is defined and app.session.get('rights')['CONTRACTS']['Prices'].edit==1%}*/
/* 						<a href="{{ path('pricesreference_edit', { 'id': pricesreference.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
