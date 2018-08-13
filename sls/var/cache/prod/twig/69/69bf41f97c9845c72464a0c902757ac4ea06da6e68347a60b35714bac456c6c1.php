<?php

/* BoAdminBundle:Evaluation:result.html.twig */
class __TwigTemplate_d7c5ab4aa154d8a64b2fcdb270e6f16207acdc834775d4145ae89ef0629566a7 extends Twig_Template
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
        $__internal_6ba36854dfa66c05f0a70826a3cea3227250df064852afcf71487f334a0b0210 = $this->env->getExtension("native_profiler");
        $__internal_6ba36854dfa66c05f0a70826a3cea3227250df064852afcf71487f334a0b0210->enter($__internal_6ba36854dfa66c05f0a70826a3cea3227250df064852afcf71487f334a0b0210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:result.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"7%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wcomprehension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th width=\"7%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wexpression", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rcrt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.eert", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.orc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.qsp", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
                <th width=\"7%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pr", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gr", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.vb", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.voc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.s", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t   <tr>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "writencomprehension", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "writenexpression", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "rcresult", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "eeresult", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "oralunderstanding", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "qualityofdiscourse", array()), "html", null, true);
        echo "</td>\t\t\t
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "prononciation", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "grammar", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "verbs", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "vocabulary", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "syntaxe", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
";
        
        $__internal_6ba36854dfa66c05f0a70826a3cea3227250df064852afcf71487f334a0b0210->leave($__internal_6ba36854dfa66c05f0a70826a3cea3227250df064852afcf71487f334a0b0210_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="7%">{{'label.wcomprehension'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th width="7%">{{'label.wexpression'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.rcrt'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.eert'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.orc'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.qsp'|trans([],'BoAdminBundle')}}</th>				*/
/*                 <th width="7%">{{'label.pr'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.gr'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.vb'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.voc'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.s'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 	   <tr>*/
/*                 <td>{{ evaluation.writencomprehension }}</td>*/
/*                 <td>{{ evaluation.writenexpression }}</td>*/
/*                 <td>{{ evaluation.rcresult }}</td>*/
/*                 <td>{{ evaluation.eeresult }}</td>*/
/*                 <td>{{ evaluation.oralunderstanding }}</td>*/
/*                 <td>{{ evaluation.qualityofdiscourse }}</td>			*/
/*                 <td>{{ evaluation.prononciation }}</td>*/
/*                 <td>{{ evaluation.grammar }}</td>*/
/*                 <td>{{ evaluation.verbs }}</td>*/
/*                 <td>{{ evaluation.vocabulary }}</td>*/
/*                 <td>{{ evaluation.syntaxe }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
