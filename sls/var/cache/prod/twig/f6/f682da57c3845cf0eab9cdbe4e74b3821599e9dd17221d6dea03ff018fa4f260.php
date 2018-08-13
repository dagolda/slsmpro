<?php

/* BoCoordinatorBundle:Default:rightshow.html.twig */
class __TwigTemplate_3a8f80e32f21aeeeedbea2e66c5a41aec8d939e122986906677096afb513c157 extends Twig_Template
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
        $__internal_d1184cbdb028b6147f66b9e0b81d9426e135b3044dfb6abc6b7536123cce9e2a = $this->env->getExtension("native_profiler");
        $__internal_d1184cbdb028b6147f66b9e0b81d9426e135b3044dfb6abc6b7536123cce9e2a->enter($__internal_d1184cbdb028b6147f66b9e0b81d9426e135b3044dfb6abc6b7536123cce9e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Default:rightshow.html.twig"));

        // line 1
        echo "\t<div class=\"employee-identity\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "master", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.master", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</div>
    <table>
        <tbody>
\t\t\t";
        // line 4
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : null), "name", array(), "any", true, true)) {
            // line 5
            echo "            <tr>
                <th>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fullname", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "name", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 10
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "email", array())) {
            // line 11
            echo "            <tr>
                <th>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "email", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "phone", array())) {
            // line 17
            echo "            <tr>
                <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "phone", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "typecontract", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "client", array())) {
            // line 27
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "client", array()), "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()) != null))) {
            // line 33
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 38
        echo "\t\t\t";
        if ((array_key_exists("token", $context) && ($this->getAttribute($this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
            // line 39
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.token", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "pwd", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 44
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()))) {
            // line 45
            echo "            <tr>
                <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastlogin", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 50
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "createby", array())) {
            // line 51
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "createby", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 56
        echo "            <tr>
                <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 58
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_d1184cbdb028b6147f66b9e0b81d9426e135b3044dfb6abc6b7536123cce9e2a->leave($__internal_d1184cbdb028b6147f66b9e0b81d9426e135b3044dfb6abc6b7536123cce9e2a_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Default:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 58,  173 => 57,  170 => 56,  164 => 53,  160 => 52,  157 => 51,  154 => 50,  148 => 47,  144 => 46,  141 => 45,  138 => 44,  132 => 41,  128 => 40,  125 => 39,  122 => 38,  116 => 35,  112 => 34,  109 => 33,  106 => 32,  100 => 29,  96 => 28,  93 => 27,  90 => 26,  84 => 23,  80 => 22,  74 => 19,  70 => 18,  67 => 17,  64 => 16,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  22 => 1,);
    }
}
/* 	<div class="employee-identity">{{'entity.coordinator'|trans([],'BoAdminBundle')}} {%if coordinator.master%}{{'label.master'|trans([],'BoAdminBundle')}}{%endif%}</div>*/
/*     <table>*/
/*         <tbody>*/
/* 			{%if coordinator.name is defined%}*/
/*             <tr>*/
/*                 <th>{{'label.fullname'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ coordinator.name }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if coordinator.email%}*/
/*             <tr>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ coordinator.email }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if coordinator.phone%}*/
/*             <tr>*/
/*                 <th>{{'label.phone'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ coordinator.phone }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ coordinator.typecontract }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if coordinator.client%}*/
/* 				<tr>*/
/* 					<th>{{'label.customer'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ coordinator.client.reference }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if user[0] is defined and user[0].username!=null %}*/
/*             <tr>		*/
/* 				<th>{{'label.username'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ user[0].username }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if token is defined and token.roles[0]=="ROLE_ADMIN" %}*/
/*             <tr>		*/
/* 				<th>{{'label.token'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ coordinator.pwd }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if user[0]is defined and user[0].username%}*/
/*             <tr>*/
/*                 <th>{{'label.lastlogin'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ user[0].lastLogin|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if coordinator.createby %}*/
/*             <tr>		*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ coordinator.createby }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if coordinator.creationdate %}{{ coordinator.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
