<?php

/* BoAdminBundle:Students:rightshow.html.twig */
class __TwigTemplate_d31c5e2b2602444c5eedd8fc10241978f57894ff35601198dff2c80ad22185fd extends Twig_Template
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
        $__internal_df15b6b253e2243efae38ddb5606354e1491b568786e14a5717c37854a4a59d9 = $this->env->getExtension("native_profiler");
        $__internal_df15b6b253e2243efae38ddb5606354e1491b568786e14a5717c37854a4a59d9->enter($__internal_df15b6b253e2243efae38ddb5606354e1491b568786e14a5717c37854a4a59d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:rightshow.html.twig"));

        // line 1
        echo "\t<div class=\"employee-identity\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
    <table>
        <tbody>
            <tr>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "name", array(), "any", true, true)) {
            // line 9
            echo "            <tr>
                <th>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "firstname", array(), "any", true, true)) {
            // line 15
            echo "            <tr>
                <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "group", array(), "any", true, true) && ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "group", array()) != null))) {
            // line 21
            echo "            <tr>
                <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "group", array()), "name", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "startdate", array(), "any", true, true)) {
            // line 27
            echo "            <tr>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "enddate", array(), "any", true, true)) {
            // line 33
            echo "            <tr>
                <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "enddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 38
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email", array())) {
            // line 39
            echo "            <tr>
                <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email1", array())) {
                echo "1";
            }
            echo ":</th>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 44
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email1", array())) {
            // line 45
            echo "            <tr>
                <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 50
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phonenumber", array())) {
            // line 51
            echo "            <tr>
                <th>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phonenumber1", array())) {
                echo "1";
            }
            echo ":</th>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phonenumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 56
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phonenumber1", array())) {
            // line 57
            echo "            <tr>
                <th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phonenumber1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 62
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startlevel", array())) {
            // line 63
            echo "            <tr>
                <th>";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlevel", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startlevel", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 68
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array())) {
            // line 69
            echo "            <tr>
                <th>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 74
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()) != null))) {
            // line 75
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 80
        echo "\t\t\t";
        if ((array_key_exists("token", $context) && ($this->getAttribute($this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
            // line 81
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.token", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "pwd", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 86
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()))) {
            // line 87
            echo "            <tr>
                <th>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastlogin", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "createby", array())) {
            // line 93
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "createby", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 98
        echo "            <tr>
                <th>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 100
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
";
        
        $__internal_df15b6b253e2243efae38ddb5606354e1491b568786e14a5717c37854a4a59d9->leave($__internal_df15b6b253e2243efae38ddb5606354e1491b568786e14a5717c37854a4a59d9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 100,  289 => 99,  286 => 98,  280 => 95,  276 => 94,  273 => 93,  270 => 92,  264 => 89,  260 => 88,  257 => 87,  254 => 86,  248 => 83,  244 => 82,  241 => 81,  238 => 80,  232 => 77,  228 => 76,  225 => 75,  222 => 74,  216 => 71,  212 => 70,  209 => 69,  206 => 68,  200 => 65,  196 => 64,  193 => 63,  190 => 62,  184 => 59,  180 => 58,  177 => 57,  174 => 56,  168 => 53,  160 => 52,  157 => 51,  154 => 50,  148 => 47,  144 => 46,  141 => 45,  138 => 44,  132 => 41,  124 => 40,  121 => 39,  118 => 38,  112 => 35,  108 => 34,  105 => 33,  102 => 32,  96 => 29,  92 => 28,  89 => 27,  86 => 26,  80 => 23,  76 => 22,  73 => 21,  70 => 20,  64 => 17,  60 => 16,  57 => 15,  54 => 14,  48 => 11,  44 => 10,  41 => 9,  39 => 8,  34 => 6,  30 => 5,  22 => 1,);
    }
}
/* 	<div class="employee-identity">{{'entity.student'|trans([],'BoAdminBundle')}}</div>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.id }}</td>*/
/*             </tr>*/
/* 			{%if student.name is defined%}*/
/*             <tr>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.name }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.firstname is defined%}*/
/*             <tr>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.firstname }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.group is defined and student.group!=null%}*/
/*             <tr>*/
/*                 <th>{{'label.group'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.group.name }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.startdate is defined%}*/
/*             <tr>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.startdate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.enddate is defined%}*/
/*             <tr>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.enddate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.email%}*/
/*             <tr>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}} {%if student.email1%}1{%endif%}:</th>*/
/*                 <td>{{ student.email }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.email1%}*/
/*             <tr>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}} 2:</th>*/
/*                 <td>{{ student.email1 }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.phonenumber%}*/
/*             <tr>*/
/*                 <th>{{'label.phonenumber'|trans([],'BoAdminBundle')}} {%if student.phonenumber1%}1{%endif%}:</th>*/
/*                 <td>{{ student.phonenumber }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.phonenumber1%}*/
/*             <tr>*/
/*                 <th>{{'label.phonenumber'|trans([],'BoAdminBundle')}} 2:</th>*/
/*                 <td>{{ student.phonenumber1 }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.startlevel%}*/
/*             <tr>*/
/*                 <th>{{'label.startlevel'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.startlevel }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if student.targetlevel%}*/
/*             <tr>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ student.targetlevel }}</td>*/
/*             </tr>*/
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
/* 				<td>{{ student.pwd }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if user[0]is defined and user[0].username%}*/
/*             <tr>*/
/*                 <th>{{'label.lastlogin'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ user[0].lastLogin|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if student.createby %}*/
/*             <tr>		*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ student.createby }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if student.creationdate %}{{ student.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
