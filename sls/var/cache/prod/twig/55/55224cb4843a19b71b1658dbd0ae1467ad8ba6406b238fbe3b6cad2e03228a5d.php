<?php

/* BoAdminBundle:SupEmployee:tbliste.html.twig */
class __TwigTemplate_050a2ec1aef394ac6675220758e9a1e6ac91b6595ccd64f21d640e63b21d7aa7 extends Twig_Template
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
        $__internal_4ce0c9955d7c747581311358841addd402a7dee4d9b24686ee0b38856159425f = $this->env->getExtension("native_profiler");
        $__internal_4ce0c9955d7c747581311358841addd402a7dee4d9b24686ee0b38856159425f->enter($__internal_4ce0c9955d7c747581311358841addd402a7dee4d9b24686ee0b38856159425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:SupEmployee:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"10%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"11%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"11%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.deletedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"13%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.deleteddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["supemployees"]) ? $context["supemployees"] : $this->getContext($context, "supemployees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "deleteby", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["employee"], "deleteddate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td class=\"list-action\"  width=\"126px\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supemployee_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>";
        
        $__internal_4ce0c9955d7c747581311358841addd402a7dee4d9b24686ee0b38856159425f->leave($__internal_4ce0c9955d7c747581311358841addd402a7dee4d9b24686ee0b38856159425f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:SupEmployee:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  110 => 31,  100 => 26,  96 => 25,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  64 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="10%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.deletedby'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="13%">{{'label.deleteddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employee in supemployees %}*/
/*             <tr>*/
/*                 <td>{{ employee.firstname }}</td>*/
/*                 <td>{{ employee.name }}</td>*/
/*                 <td>{{ employee.email }}</td>*/
/*                 <td>{{ employee.homenumber }}</td>*/
/*                 <td>{{ employee.cellnumber }}</td>*/
/*                 <td>{{ employee.deleteby}}</td>*/
/*                 <td>{{ employee.deleteddate|date('Y-m-d H:i:s')}}</td>*/
/*                 <td class="list-action"  width="126px">*/
/*                     <a href="{{ path('supemployee_show', { 'id': employee.id }) }}">*/
/* 						{{'action.show'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
