<?php

/* BoAdminBundle:Employee:rightshow.html.twig */
class __TwigTemplate_f75f36a0050e9421374ffeb820c35c68da965195e872cc6212d18571af04bcd1 extends Twig_Template
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
        $__internal_8075ebfa549a248a5c166fdc65eebf74663d689d30b7c5c887faeeacc0eb1675 = $this->env->getExtension("native_profiler");
        $__internal_8075ebfa549a248a5c166fdc65eebf74663d689d30b7c5c887faeeacc0eb1675->enter($__internal_8075ebfa549a248a5c166fdc65eebf74663d689d30b7c5c887faeeacc0eb1675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:rightshow.html.twig"));

        // line 1
        echo "<div class=\"employee-identity\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "name", array()), "html", null, true);
        echo "</div>
<div class=\"employee-status\">";
        // line 2
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "status", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "status", array()), array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</div>
    <table>
        <tbody>
            <tr>\t\t
\t\t\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
\t\t\t\t<td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 9
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "sexe", array())) {
            // line 10
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sex", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "sexe", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array())) {
            // line 16
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.profile", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 21
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "email", array())) {
            // line 22
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo " 1:</th>
\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "email", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "email1", array())) {
            // line 28
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>
\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "email1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 33
        echo "\t\t\t";
        if ((((array_key_exists("token", $context) && ($this->getAttribute($this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "profile"), "method", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Superadmin"))) {
            // line 34
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 36
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
            </tr>
            <tr>\t\t
\t\t\t\t<th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.token", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "pwd", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 43
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "typecontract", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "typecontract", array())) > 0))) {
            // line 44
            echo "            <tr>
                <th>Qualification:</th>
                <td>
\t\t\t\t\t";
            // line 47
            $context["i"] = 0;
            // line 48
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "typecontract", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 49
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "reference", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 50
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 51
                echo "\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "typecontract", array())))) {
                    echo "-";
                }
                // line 52
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t</td>
            </tr>
\t\t\t";
        }
        // line 56
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "langage", array())) {
            // line 57
            echo "            <tr>
\t\t\t\t<th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "langage", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 62
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "englishlevel", array())) {
            // line 63
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.englishlevel", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "englishlevel", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 68
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "frenchlevel", array())) {
            // line 69
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frenchlevel", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "frenchlevel", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 74
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "homenumber", array())) {
            // line 75
            echo "            <tr>
                <th>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "homenumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 80
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "cellnumber", array())) {
            // line 81
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "cellnumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 86
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address1", array())) {
            // line 87
            echo "            <tr>
                <th>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo " 1:</th>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address2", array())) {
            // line 93
            echo "            <tr>
\t\t\t\t<th>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address2", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 98
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "categoryteacher", array()))) {
            // line 99
            echo "            <tr>               
\t\t\t\t<th>Category:</th>
\t\t\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "categoryteacher", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>            
            </tr>
\t\t\t";
        }
        // line 104
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "tsdate", array())) {
            // line 105
            echo "            <tr>
                <th>TsDA:</th>
                <td>";
            // line 107
            if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "tsdate", array()) == 0)) {
                echo "No";
            } else {
                echo "Yes";
            }
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 110
        echo "\t   ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Birthday", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Birthday", array(), "array"), "active", array()) == 1)) && $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "birthdate", array()))) {
            // line 111
            echo "\t\t    <tr>
\t\t        <th>";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.birthdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t        <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "birthdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>               
\t\t    </tr>
\t   ";
        }
        // line 116
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "hiringdate", array()) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "hiringdate", array()), "Y-m-d") != "1970-01-01"))) {
            // line 117
            echo "            <tr>
                <th>";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hiringdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "hiringdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 122
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "creationdate", array())) {
            // line 123
            echo "            <tr>
\t\t\t\t<th>";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 128
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "createby", array())) {
            // line 129
            echo "            <tr>
\t\t\t\t<th>";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "createby", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 134
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "loginsentdate", array())) {
            // line 135
            echo "            <tr>
\t\t\t\t<th>";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.loginsentdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "loginsentdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 140
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "loginsentby", array())) {
            // line 141
            echo "            <tr>
\t\t\t\t<th>";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.loginsentby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "loginsentby", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 146
        echo "        </tbody>
    </table>
";
        
        $__internal_8075ebfa549a248a5c166fdc65eebf74663d689d30b7c5c887faeeacc0eb1675->leave($__internal_8075ebfa549a248a5c166fdc65eebf74663d689d30b7c5c887faeeacc0eb1675_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 146,  410 => 143,  406 => 142,  403 => 141,  400 => 140,  394 => 137,  390 => 136,  387 => 135,  384 => 134,  378 => 131,  374 => 130,  371 => 129,  368 => 128,  362 => 125,  358 => 124,  355 => 123,  352 => 122,  346 => 119,  342 => 118,  339 => 117,  336 => 116,  330 => 113,  326 => 112,  323 => 111,  320 => 110,  310 => 107,  306 => 105,  303 => 104,  297 => 101,  293 => 99,  290 => 98,  284 => 95,  280 => 94,  277 => 93,  274 => 92,  268 => 89,  264 => 88,  261 => 87,  258 => 86,  252 => 83,  248 => 82,  245 => 81,  242 => 80,  236 => 77,  232 => 76,  229 => 75,  226 => 74,  220 => 71,  216 => 70,  213 => 69,  210 => 68,  204 => 65,  200 => 64,  197 => 63,  194 => 62,  188 => 59,  184 => 58,  181 => 57,  178 => 56,  173 => 53,  167 => 52,  162 => 51,  160 => 50,  155 => 49,  150 => 48,  148 => 47,  143 => 44,  140 => 43,  134 => 40,  130 => 39,  120 => 36,  116 => 35,  113 => 34,  110 => 33,  104 => 30,  100 => 29,  97 => 28,  94 => 27,  88 => 24,  84 => 23,  81 => 22,  78 => 21,  72 => 18,  68 => 17,  65 => 16,  62 => 15,  56 => 12,  52 => 11,  49 => 10,  47 => 9,  42 => 7,  38 => 6,  29 => 2,  22 => 1,);
    }
}
/* <div class="employee-identity">{{ employee.firstname }} {{ employee.name }}</div>*/
/* <div class="employee-status">{% if employee.status %}{{ employee.status|trans([],'BoAdminBundle') }}{%endif%}</div>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>		*/
/* 				<th>{{'label.id'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.id }}</td>*/
/*             </tr>*/
/* 			{% if employee.sexe %}*/
/*             <tr>		*/
/* 				<th>{{'label.sex'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.sexe }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if employee.profil %}*/
/*             <tr>		*/
/* 				<th>{{'label.profile'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.profil }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if employee.email %}*/
/*             <tr>		*/
/* 				<th>{{'label.email'|trans([],'BoAdminBundle')}} 1:</th>*/
/* 				<td>{{ employee.email }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if employee.email1 %}*/
/*             <tr>		*/
/* 				<th>{{'label.email'|trans([],'BoAdminBundle')}} 2:</th>*/
/* 				<td>{{ employee.email1 }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if token is defined and token.roles[0]=="ROLE_ADMIN" and app.session.get('profile') is defined and app.session.get('profile')=="Superadmin"%}*/
/*             <tr>		*/
/* 				<th>{{'label.username'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{%if user %}{{ user.username }}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/*             <tr>		*/
/* 				<th>{{'label.token'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.pwd }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if employee.typecontract is defined and employee.typecontract|length>0 %}*/
/*             <tr>*/
/*                 <th>Qualification:</th>*/
/*                 <td>*/
/* 					{%set i=0%}*/
/* 					{%for tc in employee.typecontract%}*/
/* 						{{ tc.reference }}*/
/* 						{%set i=i+1%}*/
/* 						{%if i<employee.typecontract|length%}-{%endif%}*/
/* 					{%endfor%}*/
/* 				</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if employee.langage %}*/
/*             <tr>*/
/* 				<th>{{'label.language'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ employee.langage|trans([],'BoAdminBundle') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if employee.englishlevel %}*/
/* 				<tr>*/
/* 					<th>{{'label.englishlevel'|trans([],'BoAdminBundle')}}:</th>			*/
/* 					<td>{{ employee.englishlevel }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if employee.frenchlevel %}*/
/* 				<tr>*/
/* 					<th>{{'label.frenchlevel'|trans([],'BoAdminBundle')}}:</th>			*/
/* 					<td>{{ employee.frenchlevel }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if employee.homenumber %}*/
/*             <tr>*/
/*                 <th>{{'label.homenumber'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ employee.homenumber }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if employee.cellnumber %}*/
/* 			<tr>*/
/* 				<th>{{'label.cellnumber'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ employee.cellnumber }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if employee.address1 %}*/
/*             <tr>*/
/*                 <th>{{'label.address'|trans([],'BoAdminBundle')}} 1:</th>*/
/*                 <td>{{ employee.address1 }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if employee.address2 %}*/
/*             <tr>*/
/* 				<th>{{'label.address'|trans([],'BoAdminBundle')}} 2:</th>*/
/*                 <td>{{ employee.address2 }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if teacher[0] is defined and teacher[0].categoryteacher %}*/
/*             <tr>               */
/* 				<th>Category:</th>*/
/* 				<td>{{ teacher[0].categoryteacher|trans([],'BoAdminBundle') }}</td>            */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if employee.tsdate %}*/
/*             <tr>*/
/*                 <th>TsDA:</th>*/
/*                 <td>{%if employee.tsdate==0 %}No{%else%}Yes{%endif%}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 	   {%if app.session.get('rights')['STAFF']['Birthday'] is defined and app.session.get('rights')['STAFF']['Birthday'].active==1 and employee.birthdate%}*/
/* 		    <tr>*/
/* 		        <th>{{'label.birthdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 		        <td>{{ employee.birthdate|date('Y-m-d') }}</td>               */
/* 		    </tr>*/
/* 	   {% endif %}*/
/* 			{% if employee.hiringdate and employee.hiringdate|date("Y-m-d")!="1970-01-01" %}*/
/*             <tr>*/
/*                 <th>{{'label.hiringdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ employee.hiringdate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if employee.creationdate %}*/
/*             <tr>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.creationdate|date('Y-m-d H:i:s') }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if employee.createby %}*/
/*             <tr>*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.createby}}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if employee.loginsentdate %}*/
/*             <tr>*/
/* 				<th>{{'label.loginsentdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.loginsentdate|date('Y-m-d H:i:s')}}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if employee.loginsentby %}*/
/*             <tr>*/
/* 				<th>{{'label.loginsentby'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.loginsentby}}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
