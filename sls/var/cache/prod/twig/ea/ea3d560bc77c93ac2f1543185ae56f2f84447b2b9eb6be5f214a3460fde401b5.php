<?php

/* BoAdminBundle:Coordinator:rightshow.html.twig */
class __TwigTemplate_692c73419560847933dbc08e97fed34b5e464349681baac9a32fd549807d7369 extends Twig_Template
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
        $__internal_e2920d752544c0c5bc4138fd1205d18f1b0b7b06836dda516973693f19853e1b = $this->env->getExtension("native_profiler");
        $__internal_e2920d752544c0c5bc4138fd1205d18f1b0b7b06836dda516973693f19853e1b->enter($__internal_e2920d752544c0c5bc4138fd1205d18f1b0b7b06836dda516973693f19853e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:rightshow.html.twig"));

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
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "phone", array())) {
            // line 17
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "phone", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 22
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "typecontract", array())) {
            // line 23
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "typecontract", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 28
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "client", array())) {
            // line 29
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "client", array()), "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 34
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()) != null))) {
            // line 35
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 40
        echo "\t\t\t";
        if ((array_key_exists("token", $context) && ($this->getAttribute($this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
            // line 41
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.token", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "pwd", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 46
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()))) {
            // line 47
            echo "            <tr>
                <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastlogin", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 52
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "createby", array())) {
            // line 53
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "createby", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 58
        echo "            <tr>
                <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 60
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_e2920d752544c0c5bc4138fd1205d18f1b0b7b06836dda516973693f19853e1b->leave($__internal_e2920d752544c0c5bc4138fd1205d18f1b0b7b06836dda516973693f19853e1b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 60,  179 => 59,  176 => 58,  170 => 55,  166 => 54,  163 => 53,  160 => 52,  154 => 49,  150 => 48,  147 => 47,  144 => 46,  138 => 43,  134 => 42,  131 => 41,  128 => 40,  122 => 37,  118 => 36,  115 => 35,  112 => 34,  106 => 31,  102 => 30,  99 => 29,  96 => 28,  90 => 25,  86 => 24,  83 => 23,  80 => 22,  74 => 19,  70 => 18,  67 => 17,  64 => 16,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  22 => 1,);
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
/* 				<tr>*/
/* 					<th>{{'label.email'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ coordinator.email }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if coordinator.phone%}*/
/* 				<tr>*/
/* 					<th>{{'label.phone'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ coordinator.phone }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if coordinator.typecontract%}*/
/* 				<tr>*/
/* 					<th>{{'label.contracttype'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ coordinator.typecontract }}</td>*/
/* 				</tr>*/
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
