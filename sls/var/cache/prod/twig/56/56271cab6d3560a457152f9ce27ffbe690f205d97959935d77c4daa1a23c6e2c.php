<?php

/* BoAdminBundle:Group:contracts.html.twig */
class __TwigTemplate_0933238852333a95093bce1a9c29ceebd37324f4f6c7c2c92dd359db68a73a80 extends Twig_Template
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
        $__internal_d8ecd9fb141aabed767a040354a03b232931321ba35f2ff5fbdaa305e4071189 = $this->env->getExtension("native_profiler");
        $__internal_d8ecd9fb141aabed767a040354a03b232931321ba35f2ff5fbdaa305e4071189->enter($__internal_d8ecd9fb141aabed767a040354a03b232931321ba35f2ff5fbdaa305e4071189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:contracts.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"10%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"18%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberofhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 14
            echo "            <tr>
                <td ";
            // line 15
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 16
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 17
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "advisor", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 18
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "hoursnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 19
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 20
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<tr><td colspan=\"7\">No contract found</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_d8ecd9fb141aabed767a040354a03b232931321ba35f2ff5fbdaa305e4071189->leave($__internal_d8ecd9fb141aabed767a040354a03b232931321ba35f2ff5fbdaa305e4071189_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  118 => 23,  104 => 20,  94 => 19,  86 => 18,  78 => 17,  70 => 16,  62 => 15,  59 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="10%">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.pa'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.numberofhour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.contractnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.typecontract }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.advisor }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.hoursnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">No contract found</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
