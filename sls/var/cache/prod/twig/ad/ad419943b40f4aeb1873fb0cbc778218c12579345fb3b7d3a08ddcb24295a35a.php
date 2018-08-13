<?php

/* BoAdminBundle:BillingContact:tbliste.html.twig */
class __TwigTemplate_0e83bbd3a189e7c7f36fb16c1e8192fd774ca491ad6b3c9a2f3d8a4304c6482d extends Twig_Template
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
        $__internal_496cb7915629fa70443745ff2b3c1b9a64bdf782e43940c8637c7b6e25487e70 = $this->env->getExtension("native_profiler");
        $__internal_496cb7915629fa70443745ff2b3c1b9a64bdf782e43940c8637c7b6e25487e70->enter($__internal_496cb7915629fa70443745ff2b3c1b9a64bdf782e43940c8637c7b6e25487e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:BillingContact:tbliste.html.twig"));

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
                <th width=\"10%\">Phone</th>
                <th width=\"15%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["billingContacts"]) ? $context["billingContacts"] : $this->getContext($context, "billingContacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["billingcontact"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            if ($this->getAttribute($context["billingcontact"], "name", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["billingcontact"], "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 15
            if ($this->getAttribute($context["billingcontact"], "email", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["billingcontact"], "email", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 16
            if ($this->getAttribute($context["billingcontact"], "phone", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["billingcontact"], "phone", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["billingcontact"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["billingcontact"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("billingcontact_show", array("id" => $this->getAttribute($context["billingcontact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 20
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Billing Contact", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Billing Contact", array(), "array"), "edit", array()) == 1))) {
                // line 21
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("billingcontact_edit", array("id" => $this->getAttribute($context["billingcontact"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 23
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<tr><td colspan=\"5\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['billingcontact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>";
        
        $__internal_496cb7915629fa70443745ff2b3c1b9a64bdf782e43940c8637c7b6e25487e70->leave($__internal_496cb7915629fa70443745ff2b3c1b9a64bdf782e43940c8637c7b6e25487e70_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:BillingContact:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 28,  106 => 26,  99 => 23,  91 => 21,  89 => 20,  83 => 19,  76 => 17,  68 => 16,  60 => 15,  52 => 14,  49 => 13,  44 => 12,  36 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="40%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">Phone</th>*/
/*                 <th width="15%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for billingcontact in billingContacts %}*/
/*             <tr>*/
/*                 <td>{% if billingcontact.name %}{{ billingcontact.name }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if billingcontact.email %}{{ billingcontact.email }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if billingcontact.phone %}{{ billingcontact.phone }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if billingcontact.creationdate %}{{ billingcontact.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					<a href="{{ path('billingcontact_show', { 'id': billingcontact.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Billing Contact'] is defined and app.session.get('rights')['CONTRACTS']['Billing Contact'].edit==1%}*/
/* 						<a href="{{ path('billingcontact_edit', { 'id': billingcontact.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="5">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
