<?php

/* BoAdminBundle:HistoStudents:tbliste.html.twig */
class __TwigTemplate_c7c8d69cbcdfff5b67c670d10df752748c3f0a4051534767c3d73e5b4ff0e295 extends Twig_Template
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
        $__internal_05d7f400349166b22d606a0b45d361be2ee921d40883c552d670ec552f56b042 = $this->env->getExtension("native_profiler");
        $__internal_05d7f400349166b22d606a0b45d361be2ee921d40883c552d670ec552f56b042->enter($__internal_05d7f400349166b22d606a0b45d361be2ee921d40883c552d670ec552f56b042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:HistoStudents:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"6%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"10%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hstudents"]) ? $context["hstudents"] : $this->getContext($context, "hstudents")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            if ($this->getAttribute($context["student"], "group", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["student"], "group", array()), "name", array()), "html", null, true);
            } else {
            }
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["student"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["student"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["student"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>";
        
        $__internal_05d7f400349166b22d606a0b45d361be2ee921d40883c552d670ec552f56b042->leave($__internal_05d7f400349166b22d606a0b45d361be2ee921d40883c552d670ec552f56b042_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:HistoStudents:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  92 => 20,  84 => 19,  76 => 18,  72 => 17,  68 => 16,  61 => 15,  58 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="6%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="10%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for student in hstudents %}*/
/*             <tr>*/
/*                 <td>{%if student.group %}{{ student.group.name }}{%else%}{%endif%}</td>*/
/*                 <td>{{ student.name }}</td>*/
/*                 <td>{{ student.firstname }}</td>*/
/*                 <td>{% if student.startdate %}{{ student.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if student.enddate %}{{ student.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if student.creationdate %}{{ student.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
