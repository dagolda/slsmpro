<?php

/* BoAdvisorsBundle:Default:contractlist.html.twig */
class __TwigTemplate_71ad2213a46761ea4e219b7c760037fe79f56e8ea3a11643891e5cff2d4332da extends Twig_Template
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
        $__internal_1e47fdda9fdf6f80e8794cb7cda6fb35376de76fc32a15ce7782d905a97fdb62 = $this->env->getExtension("native_profiler");
        $__internal_1e47fdda9fdf6f80e8794cb7cda6fb35376de76fc32a15ce7782d905a97fdb62->enter($__internal_1e47fdda9fdf6f80e8794cb7cda6fb35376de76fc32a15ce7782d905a97fdb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Default:contractlist.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"12%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisors", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            echo "\t
                <th>Actions</th>
\t\t";
        }
        // line 16
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 20
            echo "            <tr>
                <td ";
            // line 21
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "group", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t\t";
            // line 24
            if (($this->getAttribute($context["contract"], "students", array()) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                // line 25
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 26
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 28
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t
\t\t\t\t</td>
                <td ";
            // line 32
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 33
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "advisor", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 34
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "hoursnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 35
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 36
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 37
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.completed", array(), "BoAdminBundle"), "html", null, true);
            } elseif (($this->getAttribute($context["contract"], "startdate", array()) > (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.upcoming", array(), "BoAdminBundle"), "html", null, true);
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 1)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.inprogress", array(), "BoAdminBundle"), "html", null, true);
            }
            echo "</td>
\t\t";
            // line 38
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
                echo "\t
\t\t        <td class=\"list-action\"  width=\"126px\">
\t\t\t\t\t\t";
                // line 40
                if (($this->getAttribute($context["contract"], "status", array()) == 1)) {
                    // line 41
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_timesheet_add", array("idcontract" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t        </td>
\t\t";
            }
            // line 44
            echo "\t\t
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t\t\t<tr><td colspan=\"10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
";
        
        $__internal_1e47fdda9fdf6f80e8794cb7cda6fb35376de76fc32a15ce7782d905a97fdb62->leave($__internal_1e47fdda9fdf6f80e8794cb7cda6fb35376de76fc32a15ce7782d905a97fdb62_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Default:contractlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 49,  225 => 47,  218 => 44,  214 => 43,  206 => 41,  204 => 40,  199 => 38,  183 => 37,  173 => 36,  163 => 35,  155 => 34,  147 => 33,  139 => 32,  135 => 30,  131 => 29,  124 => 28,  114 => 26,  108 => 25,  106 => 24,  100 => 23,  90 => 22,  82 => 21,  79 => 20,  74 => 19,  69 => 16,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="12%">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.advisors'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 		{%if app.session.get('dts') is defined and app.session.get('dts')==1%}	*/
/*                 <th>Actions</th>*/
/* 		{%endif%}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.contractnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.group %}{{ contract.group.name }}{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 					{%if contract.students and contract.students|length==1%}*/
/* 						{%for student in contract.students %}*/
/* 							{{ student.firstname }} {{ student.name }}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endfor%}							*/
/* 					{%endif%}			*/
/* 				</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.typecontract }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.advisor }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.hoursnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.status==0%}{{'status.completed'|trans([],'BoAdminBundle')}}{%elseif contract.startdate>now%}{{'label.upcoming'|trans([],'BoAdminBundle')}}{%elseif contract.status==1%}{{'status.inprogress'|trans([],'BoAdminBundle')}}{%endif%}</td>*/
/* 		{%if app.session.get('dts') is defined and app.session.get('dts')==1%}	*/
/* 		        <td class="list-action"  width="126px">*/
/* 						{%if contract.status==1%}*/
/* 							<a href="{{ path('dash_timesheet_add', { 'idcontract': contract.id }) }}">{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%endif%}*/
/* 		        </td>*/
/* 		{%endif%}		*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="10">{{'message.no.found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
