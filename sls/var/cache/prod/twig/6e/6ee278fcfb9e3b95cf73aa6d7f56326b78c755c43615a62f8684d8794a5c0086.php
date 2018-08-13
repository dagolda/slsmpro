<?php

/* BoAdminBundle:TeamContacts:tbliste.html.twig */
class __TwigTemplate_73a0b5789d69cb1c87370cfc3643a1bf417c7878bff3f5daa130f60219a4c4cd extends Twig_Template
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
        $__internal_3867857d9700f65fbe878fc924615301a8364aed742e604066716e89dd5da27f = $this->env->getExtension("native_profiler");
        $__internal_3867857d9700f65fbe878fc924615301a8364aed742e604066716e89dd5da27f->enter($__internal_3867857d9700f65fbe878fc924615301a8364aed742e604066716e89dd5da27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TeamContacts:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"5%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"17%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">Extension</th>
                <th width=\"15%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"110px\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teamcontacts"]) ? $context["teamcontacts"] : $this->getContext($context, "teamcontacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["teamcontact"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teamcontacts_show", array("id" => $this->getAttribute($context["teamcontact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            if ($this->getAttribute($context["teamcontact"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["teamcontact"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["teamcontact"], "employee", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "extension", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "room", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "title", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teamcontacts_show", array("id" => $this->getAttribute($context["teamcontact"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 26
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "edit", array()) == 1))) {
                // line 27
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teamcontacts_edit", array("id" => $this->getAttribute($context["teamcontact"], "id", array()))), "html", null, true);
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
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teamcontact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>";
        
        $__internal_3867857d9700f65fbe878fc924615301a8364aed742e604066716e89dd5da27f->leave($__internal_3867857d9700f65fbe878fc924615301a8364aed742e604066716e89dd5da27f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TeamContacts:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 34,  124 => 32,  117 => 29,  109 => 27,  107 => 26,  103 => 25,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  72 => 18,  66 => 17,  63 => 16,  58 => 15,  50 => 10,  46 => 9,  41 => 7,  37 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="5%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.firstname'|trans([],'BoAdminBundle')}} {{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="17%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.location'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">Extension</th>*/
/*                 <th width="15%">{{'label.room'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="110px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for teamcontact in teamcontacts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('teamcontacts_show', { 'id': teamcontact.id }) }}">{{ teamcontact.id }}</a></td>*/
/*                 <td>{%if teamcontact.employee%}{{ teamcontact.employee.firstname }} {{ teamcontact.employee.name }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ teamcontact.email }}</td>*/
/*                 <td>{{ teamcontact.location }}</td>*/
/*                 <td>{{ teamcontact.extension }}</td>*/
/*                 <td>{{ teamcontact.room }}</td>*/
/*                 <td>{{ teamcontact.title }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('teamcontacts_show', { 'id': teamcontact.id }) }}">show</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].edit==1%}*/
/* 						<a href="{{ path('teamcontacts_edit', { 'id': teamcontact.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
