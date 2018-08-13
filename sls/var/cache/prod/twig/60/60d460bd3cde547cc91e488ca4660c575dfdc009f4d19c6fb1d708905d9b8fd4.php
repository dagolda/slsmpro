<?php

/* BoUserBundle:User:tbliste.html.twig */
class __TwigTemplate_c1579be84f068cd93e95bd859627999b597dda54204f556ad41ebf242ef9c3cb extends Twig_Template
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
        $__internal_1060b90844a09f3be1e2b5b961f33b50a8c36d5efd40d44d03867373e0661487 = $this->env->getExtension("native_profiler");
        $__internal_1060b90844a09f3be1e2b5b961f33b50a8c36d5efd40d44d03867373e0661487->enter($__internal_1060b90844a09f3be1e2b5b961f33b50a8c36d5efd40d44d03867373e0661487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:User:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fullname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Roles</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastlogin", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Date Creation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            if ($this->getAttribute($context["user"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "employee", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["user"], "lastLogin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["user"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\" width=\"110px\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t<tr><td colspan=\"6\">Aucune entrée de user trouvée dans la base de données</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
";
        
        $__internal_1060b90844a09f3be1e2b5b961f33b50a8c36d5efd40d44d03867373e0661487->leave($__internal_1060b90844a09f3be1e2b5b961f33b50a8c36d5efd40d44d03867373e0661487_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:User:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 32,  119 => 30,  108 => 26,  102 => 25,  95 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  67 => 18,  61 => 17,  58 => 16,  53 => 15,  44 => 9,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.fullname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.username'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Roles</th>*/
/*                 <th>{{'label.lastlogin'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Date Creation</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                 <td>{%if user.employee%}{{ user.employee.firstname }} {{ user.employee.name }}{%else%}---{%endif%}</td>				*/
/*                 <td>{{ user.username }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/* 				<td>{{ user.roles[0] }}</td>*/
/*                 <td>{% if user.lastLogin %}{{ user.lastLogin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if user.creationdate %}{{ user.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action" width="110px">*/
/*                     <a href="{{ path('user_show', { 'id': user.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                     <a href="{{ path('user_edit', { 'id': user.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">Aucune entrée de user trouvée dans la base de données</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
