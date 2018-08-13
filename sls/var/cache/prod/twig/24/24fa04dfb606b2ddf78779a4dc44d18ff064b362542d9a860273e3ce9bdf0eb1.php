<?php

/* BoAdminBundle:Evaluation:students.html.twig */
class __TwigTemplate_47c61bfb7a5c72dc7367ed7405fe85ad065f474c9d1f3309801a05e0483d9135 extends Twig_Template
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
        $__internal_1dfde5c3035ee06427a0ea72a7e2a5658d9939d37489448c102894595a7a1852 = $this->env->getExtension("native_profiler");
        $__internal_1dfde5c3035ee06427a0ea72a7e2a5658d9939d37489448c102894595a7a1852->enter($__internal_1dfde5c3035ee06427a0ea72a7e2a5658d9939d37489448c102894595a7a1852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:students.html.twig"));

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
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t\t\t<tr>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "firstname", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "name", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 16
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "currentprofile", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "currentprofile", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "targetprofile", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "targetprofile", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "phone", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "phone", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "emailstudent", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_1dfde5c3035ee06427a0ea72a7e2a5658d9939d37489448c102894595a7a1852->leave($__internal_1dfde5c3035ee06427a0ea72a7e2a5658d9939d37489448c102894595a7a1852_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  79 => 18,  71 => 17,  63 => 16,  59 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="15%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.currentprofile'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.targetprofile'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			<tr>*/
/*                 <td>{{ evaluation.firstname }}</td>*/
/*                 <td>{{ evaluation.name }}</td>*/
/*                 <td>{%if evaluation.currentprofile %}{{ evaluation.currentprofile }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if evaluation.targetprofile %}{{ evaluation.targetprofile }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if evaluation.phone %}{{ evaluation.phone }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ evaluation.emailstudent }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
