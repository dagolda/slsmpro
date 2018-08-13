<?php

/* BoAdminBundle:Students:teacherlist.html.twig */
class __TwigTemplate_e1e08f6bb9bcccd11c9fdc14b122f1ede84ff21a048586273536a4d41ab9f532 extends Twig_Template
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
        $__internal_4dd55586657a3dba85dba17a8c83f86f60ce1fe6a3c7624e969f9f4dc2bb655d = $this->env->getExtension("native_profiler");
        $__internal_4dd55586657a3dba85dba17a8c83f86f60ce1fe6a3c7624e969f9f4dc2bb655d->enter($__internal_4dd55586657a3dba85dba17a8c83f86f60ce1fe6a3c7624e969f9f4dc2bb655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:teacherlist.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"4%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
               <th width=\"10%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th> 
                <th width=\"10%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"110\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 17
            echo "\t\t";
            $context["available"] = $this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), $this->getAttribute($context["employee"], "id", array()), array(), "array");
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["employee"], "id", array()), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["available"]) ? $context["available"] : $this->getContext($context, "available")), "html", null, true);
            echo "</td>
                <td width=\"126px\" nowrap></td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
";
        
        $__internal_4dd55586657a3dba85dba17a8c83f86f60ce1fe6a3c7624e969f9f4dc2bb655d->leave($__internal_4dd55586657a3dba85dba17a8c83f86f60ce1fe6a3c7624e969f9f4dc2bb655d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:teacherlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  119 => 30,  110 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  76 => 19,  73 => 18,  70 => 17,  65 => 16,  57 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}/{{'label.group'|trans([],'BoAdminBundle')}}</th> */
/*                 <th width="10%">{{'label.available'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="110" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employee in employees %}*/
/* 		{%set available = availability[employee.id]%}*/
/*             <tr>*/
/*                 <td><a href="{{ path('employee_show', { 'id': employee.id }) }}">{{ employee.id }}</a></td>*/
/*                 <td>{{ employee.firstname }}</td>*/
/*                 <td>{{ employee.name }}</td>*/
/*                 <td>{{ employee.email }}</td>*/
/*                 <td>{{ employee.homenumber }}</td>*/
/*                 <td>{{ employee.cellnumber }}</td>*/
/*                 <td>{%if students[employee.id] is defined%}{{ students[employee.id] }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ available }}</td>*/
/*                 <td width="126px" nowrap></td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
