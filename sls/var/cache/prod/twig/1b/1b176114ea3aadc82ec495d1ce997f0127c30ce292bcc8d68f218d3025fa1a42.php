<?php

/* BoAdminBundle:Contracts:select.html.twig */
class __TwigTemplate_2ea68b7a017f7ccf682af45fc724292d2b0c872d008c7fba13ecd12c1a4058e5 extends Twig_Template
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
        $__internal_7ed5d67b0d6adfff8b3a7f08e33c9195be7aa82f6fa0c729d788f60fa53c4cd6 = $this->env->getExtension("native_profiler");
        $__internal_7ed5d67b0d6adfff8b3a7f08e33c9195be7aa82f6fa0c729d788f60fa53c4cd6->enter($__internal_7ed5d67b0d6adfff8b3a7f08e33c9195be7aa82f6fa0c729d788f60fa53c4cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:select.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"15%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "targetlevel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "phonenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "email", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_students_select", array("idstudent" => $this->getAttribute($context["student"], "id", array()), "idcontract" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.select", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_7ed5d67b0d6adfff8b3a7f08e33c9195be7aa82f6fa0c729d788f60fa53c4cd6->leave($__internal_7ed5d67b0d6adfff8b3a7f08e33c9195be7aa82f6fa0c729d788f60fa53c4cd6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  79 => 21,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="15%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{% for student in students %}*/
/*             <tr>*/
/*                 <td>{{ student.firstname }}</td>*/
/*                 <td>{{ student.name }}</td>*/
/*                 <td>{{ student.targetlevel }}</td>*/
/*                 <td>{{ student.phonenumber }}</td>*/
/*                 <td>{{ student.email }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('contracts_students_select', { 'idstudent': student.id,'idcontract': idcontract }) }}">{{'action.select'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
