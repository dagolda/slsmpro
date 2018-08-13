<?php

/* BoHomeBundle:Default:rightshow.html.twig */
class __TwigTemplate_b6a9049ae3eb69387d84c096bda984811ebba14388857b956734021b67d4c3a6 extends Twig_Template
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
        $__internal_25c746eb64a419ee8be653fecde19b6c379e2e9478c35f60aa5c9619c2d0e1b7 = $this->env->getExtension("native_profiler");
        $__internal_25c746eb64a419ee8be653fecde19b6c379e2e9478c35f60aa5c9619c2d0e1b7->enter($__internal_25c746eb64a419ee8be653fecde19b6c379e2e9478c35f60aa5c9619c2d0e1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:rightshow.html.twig"));

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
\t\t\t\t<th>Id:</th>
\t\t\t\t<td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 9
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array())) {
            // line 10
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.profile", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "email", array())) {
            // line 16
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "email", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 21
        echo "\t\t\t";
        if ((array_key_exists("token", $context) && ($this->getAttribute($this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
            // line 22
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.token", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "pwd", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "typecontract", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "typecontract", array())) > 0))) {
            // line 28
            echo "            <tr>
                <th>Qualification:</th>
                <td>
\t\t\t\t\t";
            // line 31
            $context["i"] = 0;
            // line 32
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "typecontract", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 33
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "reference", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 34
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 35
                echo "\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "typecontract", array())))) {
                    echo "-";
                }
                // line 36
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t</td>
            </tr>
\t\t\t";
        }
        // line 40
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "language", array()))) {
            // line 41
            echo "            <tr>
\t\t\t\t<th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "language", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 46
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "homenumber", array())) {
            // line 47
            echo "            <tr>
                <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "homenumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 52
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "cellnumber", array())) {
            // line 53
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "cellnumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 58
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address1", array())) {
            // line 59
            echo "            <tr>
                <th>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo " 1:</th>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 64
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address2", array())) {
            // line 65
            echo "            <tr>
\t\t\t\t<th>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "address2", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 70
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "categoryteacher", array()))) {
            // line 71
            echo "            <tr>               
\t\t\t\t<th>Category:</th>
\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "categoryteacher", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>            
            </tr>
\t\t\t";
        }
        // line 76
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "birthdate", array())) {
            // line 77
            echo "            <!--tr>
                <th>";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.birthdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "birthdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>               
            </tr-->
\t\t\t";
        }
        // line 82
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "hiringdate", array())) {
            // line 83
            echo "            <tr>
                <th>";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hiringdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "hiringdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 88
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "creationdate", array())) {
            // line 89
            echo "            <tr>
\t\t\t\t<th>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 94
        echo "        </tbody>
    </table>
\t";
        // line 96
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "home")) {
            // line 97
            echo "\t<table class=\"home_edit_account\">
\t\t<tr>
\t\t\t<td><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("bo_home_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a></td>
\t\t\t<td>|</td>
\t\t\t<td><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.changepassword", array(), "BoAdminBundle"), "html", null, true);
            echo "</a></td>
\t\t</tr>
\t</table>
\t";
        }
        
        $__internal_25c746eb64a419ee8be653fecde19b6c379e2e9478c35f60aa5c9619c2d0e1b7->leave($__internal_25c746eb64a419ee8be653fecde19b6c379e2e9478c35f60aa5c9619c2d0e1b7_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 101,  280 => 99,  276 => 97,  274 => 96,  270 => 94,  264 => 91,  260 => 90,  257 => 89,  254 => 88,  248 => 85,  244 => 84,  241 => 83,  238 => 82,  232 => 79,  228 => 78,  225 => 77,  222 => 76,  216 => 73,  212 => 71,  209 => 70,  203 => 67,  199 => 66,  196 => 65,  193 => 64,  187 => 61,  183 => 60,  180 => 59,  177 => 58,  171 => 55,  167 => 54,  164 => 53,  161 => 52,  155 => 49,  151 => 48,  148 => 47,  145 => 46,  139 => 43,  135 => 42,  132 => 41,  129 => 40,  124 => 37,  118 => 36,  113 => 35,  111 => 34,  106 => 33,  101 => 32,  99 => 31,  94 => 28,  91 => 27,  85 => 24,  81 => 23,  78 => 22,  75 => 21,  69 => 18,  65 => 17,  62 => 16,  59 => 15,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  39 => 7,  29 => 2,  22 => 1,);
    }
}
/* <div class="employee-identity">{{ employee.firstname }} {{ employee.name }}</div>*/
/* <div class="employee-status">{% if employee.status %}{{ employee.status|trans([],'BoAdminBundle') }}{%endif%}</div>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>		*/
/* 				<th>Id:</th>*/
/* 				<td>{{ employee.id }}</td>*/
/*             </tr>*/
/* 			{% if employee.profil %}*/
/*             <tr>		*/
/* 				<th>{{'label.profile'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.profil }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if employee.email %}*/
/*             <tr>		*/
/* 				<th>{{'label.email'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ employee.email }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if token is defined and token.roles[0]=="ROLE_ADMIN" %}*/
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
/* 			{% if teacher[0] is defined and teacher[0].language %}*/
/*             <tr>*/
/* 				<th>{{'label.language'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ teacher[0].language|trans([],'BoAdminBundle') }}</td>*/
/*             </tr>*/
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
/* 			{% if employee.birthdate %}*/
/*             <!--tr>*/
/*                 <th>{{'label.birthdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ employee.birthdate|date('Y-m-d') }}</td>               */
/*             </tr-->*/
/* 			{% endif %}*/
/* 			{% if employee.hiringdate %}*/
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
/*         </tbody>*/
/*     </table>*/
/* 	{%if sm=="home"%}*/
/* 	<table class="home_edit_account">*/
/* 		<tr>*/
/* 			<td><a href="{{ path('bo_home_edit') }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a></td>*/
/* 			<td>|</td>*/
/* 			<td><a href="{{ path('fos_user_change_password') }}">{{'action.changepassword'|trans([],'BoAdminBundle')}}</a></td>*/
/* 		</tr>*/
/* 	</table>*/
/* 	{% endif %}*/
/* */
