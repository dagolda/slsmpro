<?php

/* BoAdminBundle:Contractual:select.html.twig */
class __TwigTemplate_26c92b1b5cd39b01b0923b1701e28a209b8478d4f04c1d81d9f3574297c52318 extends Twig_Template
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
        $__internal_6e03f7a1f1d483dd6986dfaf2eb5ce9dfa7d83d60478047fdbf8704c340225b0 = $this->env->getExtension("native_profiler");
        $__internal_6e03f7a1f1d483dd6986dfaf2eb5ce9dfa7d83d60478047fdbf8704c340225b0->enter($__internal_6e03f7a1f1d483dd6986dfaf2eb5ce9dfa7d83d60478047fdbf8704c340225b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contractual:select.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contractuals"]) ? $context["contractuals"] : $this->getContext($context, "contractuals")));
        foreach ($context['_seq'] as $context["_key"] => $context["contractual"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contractual_show", array("id" => $this->getAttribute($context["contractual"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contractual"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["contractual"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["contractual"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["contractual"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contractual"], "createby", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["contractual"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contractual"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_contractual_select", array("idcontractual" => $this->getAttribute($context["contractual"], "id", array()), "idcontract" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.select", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contractual'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>";
        
        $__internal_6e03f7a1f1d483dd6986dfaf2eb5ce9dfa7d83d60478047fdbf8704c340225b0->leave($__internal_6e03f7a1f1d483dd6986dfaf2eb5ce9dfa7d83d60478047fdbf8704c340225b0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contractual:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  88 => 23,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  59 => 16,  56 => 15,  52 => 14,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contractual in contractuals %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contractual_show', { 'id': contractual.id }) }}">{{ contractual.id }}</a></td>*/
/*                 <td>{{ contractual.name }}</td>*/
/*                 <td>{{ contractual.email }}</td>*/
/*                 <td>{{ contractual.phone }}</td>*/
/*                 <td>{{ contractual.createby }}</td>*/
/*                 <td>{% if contractual.creationdate %}{{ contractual.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					<a href="{{ path('contracts_contractual_select', { 'idcontractual': contractual.id,'idcontract': idcontract }) }}">{{'action.select'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
