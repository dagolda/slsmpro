<?php

/* BoAdminBundle:Contracts:contractual.html.twig */
class __TwigTemplate_9971d2177be1017aa5180a85efe090abe99386e790340491d3a21b6bf2e15a86 extends Twig_Template
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
        $__internal_4ded43cd21115a07050a64a2246aa8b5fbf424a3abd749897538650e813796ff = $this->env->getExtension("native_profiler");
        $__internal_4ded43cd21115a07050a64a2246aa8b5fbf424a3abd749897538650e813796ff->enter($__internal_4ded43cd21115a07050a64a2246aa8b5fbf424a3abd749897538650e813796ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:contractual.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array())) {
            // line 14
            echo "\t\t";
            $context["contractual"] = $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array());
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contractual"]) ? $context["contractual"] : $this->getContext($context, "contractual")), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contractual"]) ? $context["contractual"] : $this->getContext($context, "contractual")), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contractual"]) ? $context["contractual"] : $this->getContext($context, "contractual")), "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contractual"]) ? $context["contractual"] : $this->getContext($context, "contractual")), "createby", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute((isset($context["contractual"]) ? $context["contractual"] : $this->getContext($context, "contractual")), "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contractual"]) ? $context["contractual"] : $this->getContext($context, "contractual")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t";
            // line 22
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contractual", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contractual", array(), "array"), "edit", array()) == 1))) {
                // line 23
                echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#edit_contractual\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>\t
\t\t\t\t\t\t<a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_contractual_remove", array("idcontractual" => $this->getAttribute((isset($context["contractual"]) ? $context["contractual"] : $this->getContext($context, "contractual")), "id", array()), "idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 26
            echo "                </td>
            </tr>
\t";
        } elseif ((($this->getAttribute(        // line 28
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
            // line 29
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"6\" class=\"list-action\">
\t\t\t\t\t";
            // line 31
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contractual", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contractual", array(), "array"), "creation", array()) == 1))) {
                // line 32
                echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_contractual\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t</td>\t\t\t\t
\t\t\t</tr>
\t";
        } else {
            // line 37
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t</td>\t\t\t\t
\t\t\t</tr>
        ";
        }
        // line 43
        echo "        </tbody>
    </table>
";
        
        $__internal_4ded43cd21115a07050a64a2246aa8b5fbf424a3abd749897538650e813796ff->leave($__internal_4ded43cd21115a07050a64a2246aa8b5fbf424a3abd749897538650e813796ff_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:contractual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  123 => 39,  119 => 37,  114 => 34,  108 => 32,  106 => 31,  102 => 29,  100 => 28,  96 => 26,  89 => 24,  84 => 23,  82 => 22,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  53 => 14,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {%if contract.contractual %}*/
/* 		{%set contractual=contract.contractual%}*/
/*             <tr>*/
/*                 <td>{{ contractual.name }}</td>*/
/*                 <td>{{ contractual.email }}</td>*/
/*                 <td>{{ contractual.phone }}</td>*/
/*                 <td>{{ contractual.createby }}</td>*/
/*                 <td>{% if contractual.creationdate %}{{ contractual.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contractual'] is defined and app.session.get('rights')['CONTRACTS']['Contractual'].edit==1%}*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#edit_contractual">{{'action.edit'|trans([],'BoAdminBundle')}}</button>	*/
/* 						<a href="{{ path('contracts_contractual_remove',{'idcontractual':contractual.id,'idcontract':contract.id}) }}">{{'action.remove'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 	{%elseif contract.status==1 or contract.status==2%}*/
/* 			<tr>*/
/* 				<td colspan="6" class="list-action">*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contractual'] is defined and app.session.get('rights')['CONTRACTS']['Contractual'].creation==1%}*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_contractual">{{'action.add'|trans([],'BoAdminBundle')}}</button>					*/
/* 					{%endif%}*/
/* 				</td>				*/
/* 			</tr>*/
/* 	{%else%}*/
/* 			<tr>*/
/* 				<td colspan="6">*/
/* 					{{'No data found'|trans([],'BoAdminBundle')}}*/
/* 				</td>				*/
/* 			</tr>*/
/*         {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
