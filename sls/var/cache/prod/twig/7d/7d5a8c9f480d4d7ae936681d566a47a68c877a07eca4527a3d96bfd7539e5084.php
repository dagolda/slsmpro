<?php

/* BoUserBundle:User:show.html.twig */
class __TwigTemplate_4852c57a56f848f590f59483cd585f02432d8e7615ce0602d464162903cb2a85 extends Twig_Template
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
        $__internal_1ed98ca70eb43d03a547e32a17cdf88ec575323acac254f7f78afdc2c26a38d3 = $this->env->getExtension("native_profiler");
        $__internal_1ed98ca70eb43d03a547e32a17cdf88ec575323acac254f7f78afdc2c26a38d3->enter($__internal_1ed98ca70eb43d03a547e32a17cdf88ec575323acac254f7f78afdc2c26a38d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:User:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th width=\"200px\">Id:</th>
                <td width=\"500px\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "employee", array())) {
            // line 9
            echo "            <tr>
                <th>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "employee", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "employee", array()), "firstname", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "students", array())) {
            // line 15
            echo "            <tr>
                <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "students", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "students", array()), "firstname", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 20
        echo "\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enabled", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 28
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled", array()) == 1)) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password", array(), "BoAdminBundle"), "html", null, true);
        echo "(md5):</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pwd", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t";
        // line 36
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin", array())) {
            // line 37
            echo "            <tr>
                <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastlogin", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t";
        }
        // line 43
        echo "            <tr>
                <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>Roles:</th>
                <td>
\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 52
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo ",
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lastlogin", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 59
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastlogin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 64
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
        </tbody>
    </table>
";
        
        $__internal_1ed98ca70eb43d03a547e32a17cdf88ec575323acac254f7f78afdc2c26a38d3->leave($__internal_1ed98ca70eb43d03a547e32a17cdf88ec575323acac254f7f78afdc2c26a38d3_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 64,  173 => 63,  164 => 59,  160 => 58,  154 => 54,  145 => 52,  141 => 51,  132 => 45,  128 => 44,  125 => 43,  118 => 39,  114 => 38,  111 => 37,  109 => 36,  103 => 33,  99 => 32,  88 => 28,  84 => 27,  77 => 23,  73 => 22,  69 => 20,  61 => 17,  57 => 16,  54 => 15,  51 => 14,  43 => 11,  39 => 10,  36 => 9,  34 => 8,  28 => 5,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="200px">Id:</th>*/
/*                 <td width="500px">{{ user.id }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 			{%if user.employee%}*/
/*             <tr>*/
/*                 <th>{{'label.employee'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ user.employee.name }} {{ user.employee.firstname }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if user.students%}*/
/*             <tr>*/
/*                 <th>{{'label.student'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ user.students.name }} {{ user.students.firstname }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.username'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ user.username }}</td>*/
/*             </tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.enabled'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{%if user.enabled==1 %}Yes{%else%}No{%endif%}</td>*/
/*             </tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.password'|trans([],'BoAdminBundle')}}(md5):</th>*/
/*                 <td>{{ user.pwd }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		{%if user.lastLogin%}*/
/*             <tr>*/
/*                 <th>{{'label.lastlogin'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ user.lastLogin|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		{%endif%}*/
/*             <tr>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ user.email }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Roles:</th>*/
/*                 <td>*/
/* 					{%for role in user.roles%}*/
/* 						{{ role }},*/
/* 					{%endfor%}*/
/* 				</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.lastlogin'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if user.lastlogin %}{{ user.lastlogin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if user.creationdate %}{{ user.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
