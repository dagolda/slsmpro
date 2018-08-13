<?php

/* BoAdvisorsBundle:Default:schedule.html.twig */
class __TwigTemplate_48d942d5de76368ec756317e95c2d5e3daf93362ecde12cb8379ffa3b2f8ce8e extends Twig_Template
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
        $__internal_4f87737b483352c4d23ba8eaac688030d7decbb7176bd110cf99447c140aa76e = $this->env->getExtension("native_profiler");
        $__internal_4f87737b483352c4d23ba8eaac688030d7decbb7176bd110cf99447c140aa76e->enter($__internal_4f87737b483352c4d23ba8eaac688030d7decbb7176bd110cf99447c140aa76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Default:schedule.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.days", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 16
            echo "\t\t\t";
            $context["schedule"] = $this->getAttribute((isset($context["tsc"]) ? $context["tsc"] : $this->getContext($context, "tsc")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
            // line 17
            echo "\t\t\t";
            $context["nbd"] = 0;
            // line 18
            echo "\t\t\t<tr>
\t\t\t\t<td ";
            // line 19
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 20
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t\t";
            // line 21
            if (((((($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true))) {
                // line 22
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 23
                $context["nbd"] = 5;
                // line 24
                echo "\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 26
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 27
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 28
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 29
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true)) {
                    $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                    echo " ";
                }
                // line 30
                echo "\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t</td>
\t\t\t\t<td align=\"center\" ";
            // line 32
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t<td align=\"center\" ";
            // line 33
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t<td align=\"center\" ";
            // line 34
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t<td align=\"center\" ";
            // line 35
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t<td align=\"center\" ";
            // line 36
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t<td align=\"center\" ";
            // line 37
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
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
            // line 39
            echo "\t\t\t<tr><td colspan=\"8\">No contract found</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t
        </tbody>
    </table>";
        
        $__internal_4f87737b483352c4d23ba8eaac688030d7decbb7176bd110cf99447c140aa76e->leave($__internal_4f87737b483352c4d23ba8eaac688030d7decbb7176bd110cf99447c140aa76e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Default:schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 40,  221 => 39,  203 => 37,  191 => 36,  179 => 35,  167 => 34,  155 => 33,  143 => 32,  140 => 31,  137 => 30,  130 => 29,  123 => 28,  116 => 27,  109 => 26,  102 => 25,  99 => 24,  97 => 23,  92 => 22,  90 => 21,  84 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  62 => 15,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
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
/* 				<td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.contractnumber }}</td>*/
/* 				<td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
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
/* 				<td align="center" {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if schedule.startam!=null%}{{ schedule.startam|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 				<td align="center" {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if schedule.endam!=null%}{{ schedule.endam|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 				<td align="center" {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if schedule.startpm!=null%}{{ schedule.startpm|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 				<td align="center" {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if schedule.endpm!=null%}{{ schedule.endpm|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 				<td align="center" {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if schedule.hourperday%}{{ schedule.hourperday }}{%else%}---{%endif%}</td>				*/
/* 				<td align="center" {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if schedule.hourperweek%}{{ schedule.hourperweek }}{%elseif schedule.hourperday%}{%set hourperweek=schedule.hourperday*nbd%}{{ hourperweek }}{%else%}---{%endif%}</td>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">No contract found</td></tr>*/
/* 		{%endfor%}			*/
/*         </tbody>*/
/*     </table>*/
