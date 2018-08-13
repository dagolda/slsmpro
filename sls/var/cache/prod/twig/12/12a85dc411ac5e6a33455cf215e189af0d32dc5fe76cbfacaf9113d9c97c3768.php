<?php

/* BoAdminBundle:Diary:show.html.twig */
class __TwigTemplate_318baeed3f3b4fa1989ae22647530e9c044d8a95ebfb86980ae55c0b4a67df35 extends Twig_Template
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
        $__internal_cf94b8a050a4d7f5ad4028809b176ed41e62b1401251a4ea0df7f19a58e21d17 = $this->env->getExtension("native_profiler");
        $__internal_cf94b8a050a4d7f5ad4028809b176ed41e62b1401251a4ea0df7f19a58e21d17->enter($__internal_cf94b8a050a4d7f5ad4028809b176ed41e62b1401251a4ea0df7f19a58e21d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Diary:show.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
                <th width=\"30%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.date", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "ddate", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td>";
        // line 11
        if ($this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "students", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "students", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t    <tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 20
        if ($this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "employee", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "employee", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "contracts", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "contracts", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "group", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "group", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th colspan=\"3\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.note", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td colspan=\"3\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th colspan=\"3\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td colspan=\"3\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "datecreation", array()), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
\t    <tr><td colspan=\"3\">&nbsp;</td></tr>
        </tbody>
    </table>
";
        
        $__internal_cf94b8a050a4d7f5ad4028809b176ed41e62b1401251a4ea0df7f19a58e21d17->leave($__internal_cf94b8a050a4d7f5ad4028809b176ed41e62b1401251a4ea0df7f19a58e21d17_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Diary:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  114 => 33,  107 => 29,  101 => 26,  90 => 22,  82 => 21,  74 => 20,  68 => 17,  64 => 16,  60 => 15,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="30%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">{{'label.date'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ diary.id }}</td>*/
/*                 <td>{{ diary.ddate|date("d-m-Y") }}</td>*/
/*                 <td>{%if diary.students %}{{ diary.students }}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/* 	    <tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{%if diary.employee %}{{ diary.employee }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if diary.contracts %}{{ diary.contracts }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if diary.group %}{{ diary.group }}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th colspan="3">{{'label.note'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3">{{ diary.note }}</td>*/
/*             </tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th colspan="3">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3">{{ diary.datecreation|date("d-m-Y") }}</td>*/
/*             </tr>*/
/* 	    <tr><td colspan="3">&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
