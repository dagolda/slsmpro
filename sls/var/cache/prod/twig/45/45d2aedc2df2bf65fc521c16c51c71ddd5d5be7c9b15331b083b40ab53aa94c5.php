<?php

/* BoAdminBundle:Employee:group.html.twig */
class __TwigTemplate_f8b1c254e5c28aefbf96a33c777206870edd5a43d43ef3f33c474ff7162e2093 extends Twig_Template
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
        $__internal_6df53ce2153a04b62e13479a05a848183cd86826772fc0de26bcb5559a7afeb1 = $this->env->getExtension("native_profiler");
        $__internal_6df53ce2153a04b62e13479a05a848183cd86826772fc0de26bcb5559a7afeb1->enter($__internal_6df53ce2153a04b62e13479a05a848183cd86826772fc0de26bcb5559a7afeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:group.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"18%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["tcsgs"]) ? $context["tcsgs"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) {
                $context["tcsg"] = $this->getAttribute((isset($context["tcsgs"]) ? $context["tcsgs"] : $this->getContext($context, "tcsgs")), $this->getAttribute($context["group"], "id", array()), array(), "array");
            }
            // line 17
            echo "\t\t\t";
            if (((((array_key_exists("tcsg", $context) && ($this->getAttribute($context["group"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["group"], "enddate", array()))) && ($this->getAttribute((isset($context["tcsg"]) ? $context["tcsg"] : $this->getContext($context, "tcsg")), "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute((isset($context["tcsg"]) ? $context["tcsg"] : $this->getContext($context, "tcsg")), "enddate", array())))) {
                // line 18
                echo "\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 19
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td ";
                // line 20
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                if ($this->getAttribute($context["group"], "typecontract", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["group"], "typecontract", array()), "reference", array()), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t<td ";
                // line 21
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 22
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "targetlevel", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 23
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "advisor", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 24
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                if ($this->getAttribute((isset($context["tcsg"]) ? $context["tcsg"] : $this->getContext($context, "tcsg")), "startdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tcsg"]) ? $context["tcsg"] : $this->getContext($context, "tcsg")), "startdate", array()), "Y-m-d"), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t<td ";
                // line 25
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                if ($this->getAttribute((isset($context["tcsg"]) ? $context["tcsg"] : $this->getContext($context, "tcsg")), "enddate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tcsg"]) ? $context["tcsg"] : $this->getContext($context, "tcsg")), "enddate", array()), "Y-m-d"), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t<td ";
                // line 26
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">
\t\t\t\t\t\t";
                // line 27
                if ($this->getAttribute((isset($context["tgs"]) ? $context["tgs"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) {
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tgs"]) ? $context["tgs"] : $this->getContext($context, "tgs")), $this->getAttribute($context["group"], "id", array()), array(), "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            } elseif ((            // line 34
(isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                // line 35
                echo "\t\t\t\t<tr><td colspan=\"6\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
                echo "</td></tr>\t\t\t
\t\t\t";
            }
            // line 37
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
";
        
        $__internal_6df53ce2153a04b62e13479a05a848183cd86826772fc0de26bcb5559a7afeb1->leave($__internal_6df53ce2153a04b62e13479a05a848183cd86826772fc0de26bcb5559a7afeb1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 40,  175 => 38,  170 => 37,  164 => 35,  162 => 34,  158 => 32,  154 => 30,  148 => 28,  146 => 27,  140 => 26,  128 => 25,  116 => 24,  108 => 23,  100 => 22,  92 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  66 => 16,  60 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.pa'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.teacherschedule'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 	{% set i=0 %}*/
/*         {% for group in groups %}*/
/* 			{%if tcsgs[group.id] is defined %}{%set tcsg = tcsgs[group.id]%}{%endif%}*/
/* 			{%if tcsg is defined and group.startdate<=now and now<=group.enddate and tcsg.startdate<=now and now<=tcsg.enddate%}*/
/* 				{% set i=i+1 %}*/
/* 				<tr>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{%if group.typecontract %}{{ group.typecontract.reference }}{%else%}---{%endif%}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.name }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.targetlevel }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.advisor }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if tcsg.startdate %}{{ tcsg.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if tcsg.enddate %}{{ tcsg.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>*/
/* 						{%if tgs[group.id] is defined %}*/
/* 							{{tgs[group.id]}}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{%elseif i==0 %}*/
/* 				<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>			*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
