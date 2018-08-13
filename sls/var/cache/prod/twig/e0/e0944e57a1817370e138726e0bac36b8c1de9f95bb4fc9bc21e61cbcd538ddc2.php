<?php

/* BoAdminBundle:Evaluation:tbliste2.html.twig */
class __TwigTemplate_db3ef90df1a3d6dda4a3e3c5f769b281c4a0d0fe591c1c95585fbac37e4c8e56 extends Twig_Template
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
        $__internal_957baddcc65516ea2180aaf70a60478be6e6beb279ad27ce48c9207f4fbc42d1 = $this->env->getExtension("native_profiler");
        $__internal_957baddcc65516ea2180aaf70a60478be6e6beb279ad27ce48c9207f4fbc42d1->enter($__internal_957baddcc65516ea2180aaf70a60478be6e6beb279ad27ce48c9207f4fbc42d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:tbliste2.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t<th width=\"5%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluator", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaldate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 19
            echo "            <tr>
\t\t\t\t<td ";
            // line 20
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 21
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "firstname", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "title", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 24
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "phone", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "currentprofile", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 26
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "customer", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 27
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "contact", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 28
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "evaluator", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "evaluator", array()), "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 29
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["evaluation"], "evaldate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evaluation"], "evaldate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action  ";
            // line 30
            if ((($this->getAttribute($context["evaluation"], "status", array()) != 1) && ($this->getAttribute($context["evaluation"], "status", array()) != 11))) {
                echo "completed_contracts";
            }
            echo "\" nowrap>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_show", array("id" => $this->getAttribute($context["evaluation"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 32
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ADMINISTRATION", array(), "array", false, true), "Evaluation", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Evaluation", array(), "array"), "edit", array()) == 1))) {
                // line 33
                echo "\t\t\t\t\t\t";
                if (((($this->getAttribute($context["evaluation"], "status", array()) == "1") || ($this->getAttribute($context["evaluation"], "status", array()) == "11")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Evaluation", array(), "array"), "others", array()) == 1))) {
                    // line 34
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_evaluate", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.evaluate", array(), "BoAdminBundle"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_edit", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
";
        
        $__internal_957baddcc65516ea2180aaf70a60478be6e6beb279ad27ce48c9207f4fbc42d1->leave($__internal_957baddcc65516ea2180aaf70a60478be6e6beb279ad27ce48c9207f4fbc42d1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:tbliste2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 44,  206 => 42,  199 => 39,  196 => 38,  188 => 36,  180 => 34,  177 => 33,  175 => 32,  169 => 31,  163 => 30,  153 => 29,  143 => 28,  135 => 27,  127 => 26,  119 => 25,  111 => 24,  103 => 23,  95 => 22,  87 => 21,  79 => 20,  76 => 19,  71 => 18,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 		<th width="5%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.currentprofile'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.customer'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.contact'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.evaluator'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.evaldate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for evaluation in evaluations %}*/
/*             <tr>*/
/* 				<td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.id }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.firstname }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.name }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.title }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.phone }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.currentprofile }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.customer }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.contact }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{{ evaluation.evaluator.firstname }} {{ evaluation.evaluator.name }}</td>*/
/*                 <td {%if evaluation.status!=1 and evaluation.status!=11 %}class="completed_contracts"{%endif%}>{% if evaluation.evaldate %}{{ evaluation.evaldate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td class="list-action  {%if evaluation.status!=1 and evaluation.status!=11 %}completed_contracts{%endif%}" nowrap>*/
/*                     <a href="{{ path('evaluation_show', { 'id': evaluation.id,'page':page }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if (app.session.get('rights')['ADMINISTRATION']['Evaluation'] is defined and app.session.get('rights')['ADMINISTRATION']['Evaluation'].edit==1) %}*/
/* 						{%if (evaluation.status=="1" or evaluation.status=="11") and app.session.get('rights')['ADMINISTRATION']['Evaluation'].others==1%}*/
/* 							<a href="{{ path('evaluation_evaluate', { 'id': evaluation.id }) }}">{{'action.evaluate'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%else%}*/
/* 							<a href="{{ path('evaluation_edit', { 'id': evaluation.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%endif%}*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
