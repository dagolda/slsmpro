<?php

/* BoAdminBundle:Evaluation:billingcontact.html.twig */
class __TwigTemplate_d4603a5add664e59e97b1fa7a81cacae78b4512405dbf1fd8006d5d4159e9b9e extends Twig_Template
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
        $__internal_a05d932e28b67ceda3a28973a3477817787008fb364a92622f1000dd745adce4 = $this->env->getExtension("native_profiler");
        $__internal_a05d932e28b67ceda3a28973a3477817787008fb364a92622f1000dd745adce4->enter($__internal_a05d932e28b67ceda3a28973a3477817787008fb364a92622f1000dd745adce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:billingcontact.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"15%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"40%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 11
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "billingcontact", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "billingcontact", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 12
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "billingemail", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "billingemail", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 13
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "billingphone", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "billingphone", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_a05d932e28b67ceda3a28973a3477817787008fb364a92622f1000dd745adce4->leave($__internal_a05d932e28b67ceda3a28973a3477817787008fb364a92622f1000dd745adce4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:billingcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  51 => 12,  43 => 11,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="40%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{% if evaluation.billingcontact %}{{ evaluation.billingcontact }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if evaluation.billingemail %}{{ evaluation.billingemail }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if evaluation.billingphone %}{{ evaluation.billingphone }}{% else %}---{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
