<?php

/* BoAdminBundle:Status:tbliste.html.twig */
class __TwigTemplate_5df4809fc0b799caf1e2bf260b05445bfc64163f990c7ab31ecc91391e81ffd2 extends Twig_Template
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
        $__internal_1022e9e2c4986cd54d11517573a47b9f27d7334fb88425b92ddcbeb38bb63cc8 = $this->env->getExtension("native_profiler");
        $__internal_1022e9e2c4986cd54d11517573a47b9f27d7334fb88425b92ddcbeb38bb63cc8->enter($__internal_1022e9e2c4986cd54d11517573a47b9f27d7334fb88425b92ddcbeb38bb63cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Status:tbliste.html.twig"));

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
\t\t\t\t<th>Cration date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 12
            echo "            <tr>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("status_show", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "statusname", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 15
            if ($this->getAttribute($context["status"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["status"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("status_show", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 18
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Status", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Status", array(), "array"), "edit", array()) == 1))) {
                // line 19
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("status_edit", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 21
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t\t<tr><td colspan=\"4\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>";
        
        $__internal_1022e9e2c4986cd54d11517573a47b9f27d7334fb88425b92ddcbeb38bb63cc8->leave($__internal_1022e9e2c4986cd54d11517573a47b9f27d7334fb88425b92ddcbeb38bb63cc8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Status:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  86 => 24,  79 => 21,  71 => 19,  69 => 18,  65 => 17,  58 => 15,  54 => 14,  48 => 13,  45 => 12,  40 => 11,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Cration date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for status in statuses %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('status_show', { 'id': status.id }) }}">{{ status.id }}</a></td>*/
/*                 <td>{{ status.statusname }}</td>*/
/* 				<td>{% if status.creationdate %}{{ status.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('status_show', { 'id': status.id }) }}">show</a>*/
/* 					{%if app.session.get('rights')['STAFF']['Status'] is defined and app.session.get('rights')['STAFF']['Status'].edit==1%}*/
/* 						<a href="{{ path('status_edit', { 'id': status.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="4">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
