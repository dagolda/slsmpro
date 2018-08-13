<?php

/* BoAdminBundle:Contracts:showactions.html.twig */
class __TwigTemplate_4cec207123ac53939988b63884b7a164efa3eb7313a7c560e5e2fe8c21e0b5c5 extends Twig_Template
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
        $__internal_8b2f03622f9450a7a534eccd9408d26591fa230bc313608184a7cddcf2718ebc = $this->env->getExtension("native_profiler");
        $__internal_8b2f03622f9450a7a534eccd9408d26591fa230bc313608184a7cddcf2718ebc->enter($__internal_8b2f03622f9450a7a534eccd9408d26591fa230bc313608184a7cddcf2718ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "search"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "search"), "method"))) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "data"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "data"), "method"))))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("contracts_back");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("contracts_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 18
        echo "\t
\t\t\t\t";
        // line 19
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
            echo "\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_duplicate", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.duplicate", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 23
            if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()) == null)) {
                // line 24
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_advisor\">";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addadvisor", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#extract_presence\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tspresence", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 31
            if (((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2)) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) == null))) {
                // line 32
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#close_contract\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_note\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.note", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            // line 41
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#reopen_contract\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.open", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t";
        if ((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "creation", array()) == 1)) && ((isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings")) != null)) && ((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")) != null)) && ((isset($context["holders"]) ? $context["holders"] : $this->getContext($context, "holders")) != null))) {
            // line 46
            echo "\t\t\t\t\t<!--td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_substitution\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addsubstitution", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td-->
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
            // line 51
            echo "\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["schedules"]) ? $context["schedules"] : null), 0, array(), "array", true, true) && $this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), 0, array(), "array", true, true)) && $this->getAttribute((isset($context["locals"]) ? $context["locals"] : null), 0, array(), "array", true, true))) {
                // line 52
                echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" id=\"btn_plan\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.plan", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t<!--a href=\"";
                // line 54
                echo $this->env->getExtension('routing')->getPath("schedule_new");
                echo "\">Schedule</a-->
\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "others", array()) == 1)) && (twig_length_filter($this->env, (isset($context["historics"]) ? $context["historics"] : $this->getContext($context, "historics"))) > 0))) {
            // line 59
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_historic", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.historic", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t";
        if ((array_key_exists("lefthours", $context) && ((isset($context["lefthours"]) ? $context["lefthours"] : $this->getContext($context, "lefthours")) != 0))) {
            // line 64
            echo "\t\t\t\t\t<!--td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lefthours", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["lefthours"]) ? $context["lefthours"] : $this->getContext($context, "lefthours")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td-->
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()))) && (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "Superadmin") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "Payroll")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "RH")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "Executive")))) {
            // line 71
            echo "\t\t\t\t\t";
            if ((((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "confirmation", array()) == null) && (twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))) > 0)) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) != 0))) {
                // line 72
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_confirmation", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sendconfirmation", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<!--button type=\"button\" id=\"btn_confirmation\"  value=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sendconfirmation", array(), "BoAdminBundle"), "html", null, true);
                echo "</button--!>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 76
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "confirmation", array()) == 1)) {
                // line 77
                echo "\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.confirmationsent", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 82
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "confirmation", array()) != null)) {
                // line 83
                echo "\t\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.confirmationsent", array(), "BoAdminBundle"), "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "confirmation", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_8b2f03622f9450a7a534eccd9408d26591fa230bc313608184a7cddcf2718ebc->leave($__internal_8b2f03622f9450a7a534eccd9408d26591fa230bc313608184a7cddcf2718ebc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 90,  247 => 89,  238 => 85,  234 => 83,  232 => 82,  226 => 79,  222 => 77,  220 => 76,  213 => 74,  207 => 73,  204 => 72,  201 => 71,  198 => 70,  189 => 66,  185 => 64,  182 => 63,  174 => 60,  171 => 59,  168 => 58,  165 => 57,  159 => 54,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  138 => 47,  135 => 46,  132 => 45,  126 => 42,  123 => 41,  120 => 40,  112 => 37,  109 => 36,  103 => 33,  100 => 32,  98 => 31,  93 => 29,  90 => 28,  84 => 25,  81 => 24,  79 => 23,  72 => 21,  67 => 19,  64 => 18,  56 => 16,  53 => 15,  45 => 12,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].ddelete==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if (app.session.get('search') is defined and app.session.get('search') is not null) or (app.session.get('data') is defined and app.session.get('data') is not null)%}	*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%else%}*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}	*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}				*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_duplicate', { 'id': contract.id }) }}">{{'action.duplicate'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%if contract.advisor==null%}*/
/* 						<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_advisor">{{'label.addadvisor'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#extract_presence">{{'label.tspresence'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					{%if (contract.status==1 or contract.status==2) and contract.group==null%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#close_contract">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_note">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.note'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if contract.status==0%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#reopen_contract">{{'action.open'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].creation==1 and trainings!=null and teachers!=null and holders!=null%}*/
/* 					<!--td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_substitution">{{'label.addsubstitution'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td-->*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}*/
/* 					{%if schedules[0] is defined and teachers[0] is defined and locals[0] is defined%}*/
/* 					<td>*/
/* 						<button type="button" id="btn_plan" value="{{contract.id}}">{{'action.plan'|trans([],'BoAdminBundle')}}</button>*/
/* 						<!--a href="{{ path('schedule_new') }}">Schedule</a-->*/
/* 					</td>*/
/* 					{%endif%}*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].others==1 and historics|length>0%}*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_historic',{'id':contract.id}) }}">{{'action.historic'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if lefthours is defined and lefthours!=0%}*/
/* 					<!--td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							{{'label.lefthours'|trans([],'BoAdminBundle')}} <span class="badge">{{lefthours|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td-->*/
/* 				{%endif%}*/
/* 				{% if app.user is defined and app.user.employee.profil is not null and (app.user.employee.profil=="Superadmin" or app.user.employee.profil=="Payroll" or app.user.employee.profil=="RH" or app.user.employee.profil=="Executive")%}*/
/* 					{% if contract.confirmation==null and students|length>0 and contract.advisor and contract.status!=0%}*/
/* 						<td>*/
/* 							<a href="{{ path('contracts_confirmation', { 'idcontract': contract.id }) }}">{{'action.sendconfirmation'|trans([],'BoAdminBundle')}}</a>*/
/* 							<!--button type="button" id="btn_confirmation"  value="{{contract.id}}">{{'action.sendconfirmation'|trans([],'BoAdminBundle')}}</button--!>*/
/* 						</td>*/
/* 					{%elseif contract.confirmation==1%}*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								{{'label.confirmationsent'|trans([],'BoAdminBundle')}}*/
/* 							</button>*/
/* 						</td>*/
/* 					{%elseif contract.confirmation!=null%}*/
/* 						<td class="total_number">*/
/* 							<button type="button" class="btn btn-primary">*/
/* 								{{'label.confirmationsent'|trans([],'BoAdminBundle')}} <span class="badge">{{contract.confirmation}}</span>*/
/* 							</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
