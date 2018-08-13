<?php

/* BoAdminBundle:Students:tbeval.html.twig */
class __TwigTemplate_30c9ad603e7a37e6059a4e4d145cd46eff206efc10c9cbc7777e3e61faa84251 extends Twig_Template
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
        $__internal_9e0eac0da4b571420a3eff313f824403376255e345308415555b82265f188bad = $this->env->getExtension("native_profiler");
        $__internal_9e0eac0da4b571420a3eff313f824403376255e345308415555b82265f188bad->enter($__internal_9e0eac0da4b571420a3eff313f824403376255e345308415555b82265f188bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:tbeval.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaldate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "addresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "currentprofile", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "customer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "contact", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "phonecontact", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["evaluation"], "evaldate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evaluation"], "evaldate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\" nowrap>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_evaluation", array("id" => $this->getAttribute($context["evaluation"], "id", array()), "idstudent" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "\t\t\t<tr><td colspan=\"12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
";
        
        $__internal_9e0eac0da4b571420a3eff313f824403376255e345308415555b82265f188bad->leave($__internal_9e0eac0da4b571420a3eff313f824403376255e345308415555b82265f188bad_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:tbeval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  122 => 33,  111 => 29,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  69 => 18,  64 => 17,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.address'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.currentprofile'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.customer'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contact'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contactphone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.evaldate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for evaluation in evaluations %}*/
/*             <tr>*/
/*                 <td>{{ evaluation.id }}</td>*/
/*                 <td>{{ evaluation.title }}</td>*/
/*                 <td>{{ evaluation.phone }}</td>*/
/*                 <td>{{ evaluation.addresse }}</td>*/
/*                 <td>{{ evaluation.currentprofile }}</td>*/
/*                 <td>{{ evaluation.customer }}</td>*/
/*                 <td>{{ evaluation.contact }}</td>*/
/*                 <td>{{ evaluation.phonecontact }}</td>*/
/*                 <td>{% if evaluation.evaldate %}{{ evaluation.evaldate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action" nowrap>*/
/*                     <a href="{{ path('students_evaluation', { 'id': evaluation.id, 'idstudent': student.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="12">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
