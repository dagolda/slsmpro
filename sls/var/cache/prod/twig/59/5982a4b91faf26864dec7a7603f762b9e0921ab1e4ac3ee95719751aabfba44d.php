<?php

/* BoAdminBundle:Coordinator:tbliste.html.twig */
class __TwigTemplate_64eb4ba2a0c026b18d4d3d490385b1f2a45bb6e83c8ad2b96f2187029d3efe16 extends Twig_Template
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
        $__internal_dcb33df2352a261570eb9dcb0aa362f0fcf2b676878c833debcfe25b8f7baf29 = $this->env->getExtension("native_profiler");
        $__internal_dcb33df2352a261570eb9dcb0aa362f0fcf2b676878c833debcfe25b8f7baf29->enter($__internal_dcb33df2352a261570eb9dcb0aa362f0fcf2b676878c833debcfe25b8f7baf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coordinators"]) ? $context["coordinators"] : $this->getContext($context, "coordinators")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coordinator"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinator"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinator"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["coordinator"], "phone", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["coordinator"], "phone", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinator"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinator"], "createby", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["coordinator"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["coordinator"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinator_show", array("id" => $this->getAttribute($context["coordinator"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 24
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Coordinators", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Coordinators", array(), "array"), "edit", array()) == 1))) {
                // line 25
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinator_edit", array("id" => $this->getAttribute($context["coordinator"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 27
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coordinator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>";
        
        $__internal_dcb33df2352a261570eb9dcb0aa362f0fcf2b676878c833debcfe25b8f7baf29->leave($__internal_dcb33df2352a261570eb9dcb0aa362f0fcf2b676878c833debcfe25b8f7baf29_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 32,  117 => 30,  110 => 27,  102 => 25,  100 => 24,  94 => 23,  87 => 21,  83 => 20,  79 => 19,  71 => 18,  67 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for coordinator in coordinators %}*/
/*             <tr>*/
/*                 <td>{{ coordinator.name }}</td>*/
/*                 <td>{{ coordinator.email }}</td>*/
/*                 <td>{% if coordinator.phone %}{{ coordinator.phone }}{% else %}---{% endif %}</td>*/
/*                 <td>{{ coordinator.typecontract }}</td>*/
/*                 <td>{{ coordinator.createby }}</td>*/
/*                 <td>{% if coordinator.creationdate %}{{ coordinator.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					<a href="{{ path('coordinator_show', { 'id': coordinator.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Coordinators'] is defined and app.session.get('rights')['CONTRACTS']['Coordinators'].edit==1%}*/
/* 						<a href="{{ path('coordinator_edit', { 'id': coordinator.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
