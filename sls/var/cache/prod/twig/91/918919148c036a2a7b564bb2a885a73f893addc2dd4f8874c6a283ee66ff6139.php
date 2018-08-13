<?php

/* BoAdminBundle:Contracts:bcontact.html.twig */
class __TwigTemplate_4c4f9970cc10f49714f16ab40e1606370abd08d3fbcb70a85a10f7319cecec6b extends Twig_Template
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
        $__internal_eb9d2006dba108b071a907bf580853aee01ffd2ae4f0ff26dcdde749cbe9b175 = $this->env->getExtension("native_profiler");
        $__internal_eb9d2006dba108b071a907bf580853aee01ffd2ae4f0ff26dcdde749cbe9b175->enter($__internal_eb9d2006dba108b071a907bf580853aee01ffd2ae4f0ff26dcdde749cbe9b175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:bcontact.html.twig"));

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
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 12
        if ((array_key_exists("billingContacts", $context) && ((isset($context["billingContacts"]) ? $context["billingContacts"] : $this->getContext($context, "billingContacts")) != null))) {
            // line 13
            echo "\t\t\t";
            $context["billingcontact"] = (isset($context["billingContacts"]) ? $context["billingContacts"] : $this->getContext($context, "billingContacts"));
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            if ($this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "name", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 16
            if ($this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "email", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "email", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "phone", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "phone", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t";
            // line 20
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Billing Contact", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Billing Contact", array(), "array"), "edit", array()) == 1)) && (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2)))) {
                // line 21
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_billingcontact_edit", array("id" => $this->getAttribute((isset($context["billingcontact"]) ? $context["billingcontact"] : $this->getContext($context, "billingcontact")), "id", array()), "idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 23
            echo "                </td>
            </tr>
\t\t";
        } else {
            // line 26
            echo "\t\t\t<tr><td colspan=\"5\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        // line 28
        echo "        </tbody>
    </table>
";
        
        $__internal_eb9d2006dba108b071a907bf580853aee01ffd2ae4f0ff26dcdde749cbe9b175->leave($__internal_eb9d2006dba108b071a907bf580853aee01ffd2ae4f0ff26dcdde749cbe9b175_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:bcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 28,  101 => 26,  96 => 23,  88 => 21,  86 => 20,  79 => 18,  71 => 17,  63 => 16,  55 => 15,  52 => 14,  49 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="40%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{%if billingContacts is defined and billingContacts!=null%}*/
/* 			{% set billingcontact=billingContacts %}*/
/*             <tr>*/
/*                 <td>{% if billingcontact.name %}{{ billingcontact.name }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if billingcontact.email %}{{ billingcontact.email }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if billingcontact.phone %}{{ billingcontact.phone }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if billingcontact.creationdate %}{{ billingcontact.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Billing Contact'] is defined and app.session.get('rights')['CONTRACTS']['Billing Contact'].edit==1 and (contract.status==1 or contract.status==2)%}*/
/* 						<a href="{{path('contracts_billingcontact_edit',{'id':billingcontact.id,'idcontract':contract.id}) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="5">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
