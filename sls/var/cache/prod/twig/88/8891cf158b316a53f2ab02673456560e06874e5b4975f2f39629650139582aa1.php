<?php

/* BoHomeBundle:Contracts:contractlist.html.twig */
class __TwigTemplate_56a954613c81509d82b7657d64b91144dea95b902a450244b4011fecef7f0eb9 extends Twig_Template
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
        $__internal_f4b05d1460de1f31b9aa70e2872d769d274139a6324644af2b5eea6024488671 = $this->env->getExtension("native_profiler");
        $__internal_f4b05d1460de1f31b9aa70e2872d769d274139a6324644af2b5eea6024488671->enter($__internal_f4b05d1460de1f31b9aa70e2872d769d274139a6324644af2b5eea6024488671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Contracts:contractlist.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"13%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            echo "\t
                <th>Actions</th>
\t\t";
        }
        // line 14
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 18
            echo "            <tr>
                <td ";
            // line 19
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 20
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($context["contract"], "group", array())) {
                // line 22
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 23
$context["contract"], "students", array()) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                // line 24
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 27
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t
\t\t\t\t</td>
                <td ";
            // line 31
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 32
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "advisor", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 33
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 34
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 35
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
            // line 36
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
                echo "\t
                <td ";
                // line 37
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts list-action\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1 list-action\"";
                } else {
                    echo "class=\"list-action\"";
                }
                echo "  width=\"126px\">
\t\t\t\t\t";
                // line 38
                if ((( !$this->getAttribute((isset($context["existcontabs"]) ? $context["existcontabs"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true) && ($this->getAttribute($context["contract"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["contract"], "enddate", array())))) {
                    // line 39
                    echo "\t\t\t\t\t\t";
                    if (((((((isset($context["authorization"]) ? $context["authorization"] : $this->getContext($context, "authorization")) == 1) && ($this->getAttribute($context["contract"], "status", array()) == 1)) || ((($this->getAttribute($context["contract"], "status", array()) == 1) &&  !$this->getAttribute((isset($context["etsc"]) ? $context["etsc"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) &&  !$this->getAttribute((isset($context["subcontr"]) ? $context["subcontr"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true))) && (twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "D") != "Sat")) && (twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "D") != "Sun"))) {
                        echo " 
\t\t\t\t\t\t\t<a href=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_add", array("idcontract" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute((isset($context["dtsbc"]) ? $context["dtsbc"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["dtsbc"]) ? $context["dtsbc"] : $this->getContext($context, "dtsbc")), $this->getAttribute($context["contract"], "id", array()), array(), "array") == 0))) {
                            echo "class=\"disabled\"";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t";
                }
                // line 43
                echo "                </td>
\t\t";
            }
            // line 45
            echo "            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t\t\t<tr><td colspan=\"8\">No contract found</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
";
        
        $__internal_f4b05d1460de1f31b9aa70e2872d769d274139a6324644af2b5eea6024488671->leave($__internal_f4b05d1460de1f31b9aa70e2872d769d274139a6324644af2b5eea6024488671_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Contracts:contractlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 49,  239 => 47,  233 => 45,  229 => 43,  226 => 42,  215 => 40,  210 => 39,  208 => 38,  198 => 37,  194 => 36,  178 => 35,  166 => 34,  154 => 33,  144 => 32,  134 => 31,  130 => 29,  126 => 28,  119 => 27,  109 => 25,  103 => 24,  101 => 23,  96 => 22,  94 => 21,  86 => 20,  76 => 19,  73 => 18,  68 => 17,  63 => 14,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="13%">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.group'|trans([],'BoAdminBundle')}}/{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.pa'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 		{%if app.session.get('dts') is defined and app.session.get('dts')==1%}	*/
/*                 <th>Actions</th>*/
/* 		{%endif%}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.contractnumber }}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%if contract.group%}*/
/* 						{{contract.group.name}}*/
/* 					{%elseif contract.students and contract.students|length==1%}*/
/* 						{%for student in contract.students %}*/
/* 							{{ student.firstname }} {{ student.name }}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endfor%}							*/
/* 					{%endif%}			*/
/* 				</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.typecontract }}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.advisor }}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('d-m-Y') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('d-m-Y') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.status==0%}{{'status.completed'|trans([],'BoAdminBundle')}}{%elseif contract.startdate>now%}{{'label.upcoming'|trans([],'BoAdminBundle')}}{%elseif contract.status==1%}{{'status.inprogress'|trans([],'BoAdminBundle')}}{%endif%}</td>*/
/* 		{%if app.session.get('dts') is defined and app.session.get('dts')==1%}	*/
/*                 <td {%if contract.status==0%}class="completed_contracts list-action"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1 list-action"{%else%}class="list-action"{%endif%}  width="126px">*/
/* 					{%if existcontabs[contract.id] is not defined and contract.startdate<=now and now<=contract.enddate%}*/
/* 						{%if ((authorization==1 and contract.status==1) or (contract.status==1 and etsc[contract.id] is not defined and subcontr[contract.id] is not defined)) and now|date("D")!="Sat" and now|date("D")!="Sun"%} */
/* 							<a href="{{ path('home_timesheet_add', { 'idcontract': contract.id }) }}" {%if dtsbc[contract.id] is defined and dtsbc[contract.id]==0%}class="disabled"{%endif%}>{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%endif%}*/
/* 					{%endif%}*/
/*                 </td>*/
/* 		{%endif%}*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">No contract found</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
