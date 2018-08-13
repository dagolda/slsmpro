<?php

/* BoAdminBundle:Diary:tbliste.html.twig */
class __TwigTemplate_11e1104c5e267bd78ad58de769a02a6262cef36b6f1ebd37379ca230f9d7bbf3 extends Twig_Template
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
        $__internal_1d5a5f6a029d8a80dcf43fb1070daf2d6cbfb89ecb69110c752eaac625899d3d = $this->env->getExtension("native_profiler");
        $__internal_1d5a5f6a029d8a80dcf43fb1070daf2d6cbfb89ecb69110c752eaac625899d3d->enter($__internal_1d5a5f6a029d8a80dcf43fb1070daf2d6cbfb89ecb69110c752eaac625899d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Diary:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"4%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.date", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"40%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.note", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"130px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diaries"]) ? $context["diaries"] : $this->getContext($context, "diaries")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["diary"]) {
            // line 16
            echo "\t\t    <tr>
\t\t        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["diary"], "id", array()), "html", null, true);
            echo "</td>
\t\t        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["diary"], "ddate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t        <td>";
            // line 19
            if ($this->getAttribute($context["diary"], "students", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diary"], "students", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diary"], "students", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t        <td>";
            // line 20
            if ($this->getAttribute($context["diary"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diary"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diary"], "employee", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t        <td>";
            // line 21
            if ($this->getAttribute($context["diary"], "group", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["diary"], "group", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t        <td>";
            // line 22
            if ($this->getAttribute($context["diary"], "contracts", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diary"], "contracts", array()), "id", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["diary"], "note", array()), "html", null, true);
            echo "</td>
\t\t        <td class=\"list-action\" nowrap>
\t\t            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diary_show", array("id" => $this->getAttribute($context["diary"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diary_edit", array("id" => $this->getAttribute($context["diary"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t        </td>
\t\t    </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t    <tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
";
        
        $__internal_1d5a5f6a029d8a80dcf43fb1070daf2d6cbfb89ecb69110c752eaac625899d3d->leave($__internal_1d5a5f6a029d8a80dcf43fb1070daf2d6cbfb89ecb69110c752eaac625899d3d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Diary:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 32,  135 => 30,  124 => 26,  118 => 25,  113 => 23,  105 => 22,  97 => 21,  87 => 20,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  61 => 15,  53 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.date'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.id'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="40%">{{'label.note'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="130px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{% for diary in diaries %}*/
/* 		    <tr>*/
/* 		        <td>{{ diary.id }}</td>*/
/* 		        <td>{{ diary.ddate|date("d-m-Y") }}</td>*/
/* 		        <td>{%if diary.students %}{{ diary.students.firstname }} {{ diary.students.name }}{%else%}---{%endif%}</td>*/
/* 		        <td>{%if diary.employee %}{{ diary.employee.firstname }} {{ diary.employee.name }}{%else%}---{%endif%}</td>*/
/* 		        <td>{%if diary.group %}{{ diary.group }}{%else%}---{%endif%}</td>*/
/* 		        <td>{%if diary.contracts %}{{ diary.contracts.id }}{%else%}---{%endif%}</td>*/
/* 		        <td>{{ diary.note }}</td>*/
/* 		        <td class="list-action" nowrap>*/
/* 		            <a href="{{ path('diary_show', { 'id': diary.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 		            <a href="{{ path('diary_edit', { 'id': diary.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 		        </td>*/
/* 		    </tr>*/
/* 		{%else%}*/
/* 		    <tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/* 		{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
