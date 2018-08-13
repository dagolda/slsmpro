<?php

/* BoHomeBundle:Contracts:schedule.html.twig */
class __TwigTemplate_3cc3cd2b2175a0e25a6c80985e4e0a69c1315ad3e8e131f25a7218d3bdb60fc2 extends Twig_Template
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
        $__internal_75ce4b3cb6cf53487af1fe92256778337d18e1b19c5daee50dc93599fc9e9e23 = $this->env->getExtension("native_profiler");
        $__internal_75ce4b3cb6cf53487af1fe92256778337d18e1b19c5daee50dc93599fc9e9e23->enter($__internal_75ce4b3cb6cf53487af1fe92256778337d18e1b19c5daee50dc93599fc9e9e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Contracts:schedule.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                \t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                \t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.days", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 18
            echo "\t\t\t";
            $context["schedule"] = $this->getAttribute((isset($context["tsc"]) ? $context["tsc"] : $this->getContext($context, "tsc")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
            // line 19
            echo "\t\t\t";
            $context["nbd"] = 0;
            // line 20
            echo "\t\t\t<tr>
\t\t\t\t<td ";
            // line 21
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 22
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startdate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 23
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "enddate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 24
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 25
            if (((((($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true))) {
                // line 26
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 27
                $context["nbd"] = 5;
                // line 28
                echo "\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 30
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 31
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 32
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 33
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                    echo " ";
                }
                // line 34
                echo "\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t</td>
\t\t\t\t<td align=\"center\" ";
            // line 36
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t<td align=\"center\" ";
            // line 37
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t<td align=\"center\" ";
            // line 38
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t<td align=\"center\" ";
            // line 39
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t<td align=\"center\" ";
            // line 40
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t<td align=\"center\" ";
            // line 41
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperweek", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperweek", array()), "html", null, true);
            } elseif ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array())) {
                $context["hourperweek"] = ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array()) * (isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")));
                echo twig_escape_filter($this->env, (isset($context["hourperweek"]) ? $context["hourperweek"] : $this->getContext($context, "hourperweek")), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "\t\t\t<tr><td colspan=\"8\">No contract found</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t
        </tbody>
    </table>
";
        
        $__internal_75ce4b3cb6cf53487af1fe92256778337d18e1b19c5daee50dc93599fc9e9e23->leave($__internal_75ce4b3cb6cf53487af1fe92256778337d18e1b19c5daee50dc93599fc9e9e23_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Contracts:schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 44,  265 => 43,  245 => 41,  231 => 40,  217 => 39,  203 => 38,  189 => 37,  175 => 36,  172 => 35,  169 => 34,  162 => 33,  155 => 32,  148 => 31,  141 => 30,  134 => 29,  131 => 28,  129 => 27,  124 => 26,  122 => 25,  114 => 24,  104 => 23,  94 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  70 => 17,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 		<th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 		<th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.days'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/* 			{%set schedule=tsc[contract.id]%}*/
/* 			{%set nbd=0%}*/
/* 			<tr>*/
/* 				<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.contractnumber }}</td>*/
/* 				<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ schedule.startdate|date("d-m-Y") }}</td>*/
/* 				<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ schedule.enddate|date("d-m-Y") }}</td>*/
/* 				<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%if schedule.monday==true and schedule.tuesday==true and schedule.wednesday==true and schedule.thursday==true and schedule.friday==true%}*/
/* 						{{'label.frommonday.tofriday'|trans([],'BoAdminBundle')}}*/
/* 						{%set nbd=5%}*/
/* 					{%else%}*/
/* 						{%if schedule.monday==true%}{%set nbd=nbd+1%}{{'label.monday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.tuesday==true%}{%set nbd=nbd+1%}{{'label.tuesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.wednesday==true%}{%set nbd=nbd+1%}{{'label.wednesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.thursday==true%}{%set nbd=nbd+1%}{{'label.thursday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.friday==true%}{%set nbd=nbd+1%}{{'label.friday'|trans([],'BoAdminBundle')}} {%endif%}*/
/* 					{%endif%}*/
/* 				</td>*/
/* 				<td align="center" {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if schedule.startam!=null%}{{ schedule.startam|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 				<td align="center" {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if schedule.endam!=null%}{{ schedule.endam|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 				<td align="center" {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if schedule.startpm!=null%}{{ schedule.startpm|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 				<td align="center" {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if schedule.endpm!=null%}{{ schedule.endpm|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 				<td align="center" {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if schedule.hourperday%}{{ schedule.hourperday }}{%else%}---{%endif%}</td>				*/
/* 				<td align="center" {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if schedule.hourperweek%}{{ schedule.hourperweek }}{%elseif schedule.hourperday%}{%set hourperweek=schedule.hourperday*nbd%}{{ hourperweek }}{%else%}---{%endif%}</td>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">No contract found</td></tr>*/
/* 		{%endfor%}			*/
/*         </tbody>*/
/*     </table>*/
/* */
