<?php

/* BoAdminBundle:Substitution:group.html.twig */
class __TwigTemplate_15abaeed24618b275db4108947daa780e78f99f04e7900e1274b450778b66d3f extends Twig_Template
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
        $__internal_92e39d8910e98a767082ee90a687344ed38ce220b103ee9a283844f6392f6717 = $this->env->getExtension("native_profiler");
        $__internal_92e39d8910e98a767082ee90a687344ed38ce220b103ee9a283844f6392f6717->enter($__internal_92e39d8910e98a767082ee90a687344ed38ce220b103ee9a283844f6392f6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:group.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "targetlevel", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "startdate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 19
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "enddate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 20
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "createby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "createby", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "creationdate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_92e39d8910e98a767082ee90a687344ed38ce220b103ee9a283844f6392f6717->leave($__internal_92e39d8910e98a767082ee90a687344ed38ce220b103ee9a283844f6392f6717_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  87 => 20,  79 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{{ group.id }}</td>*/
/*                 <td>{{ group.name }}</td>*/
/*                 <td>{{ group.targetlevel }}</td>*/
/*                 <td>{% if group.startdate %}{{ group.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if group.enddate %}{{ group.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if group.createby %}{{ group.createby }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if group.creationdate %}{{ group.creationdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
