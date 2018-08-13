<?php

/* BoAdminBundle:Local:teachersgroup.html.twig */
class __TwigTemplate_47b7c25930abe566257b75ea65d558c859c0d1f9fd9f77f8f269572a7ad0bf1d extends Twig_Template
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
        $__internal_68ace819f5dc05e4451a5f6f4fa7cb4d9949e5408fa8db05b7ea74126883d9cd = $this->env->getExtension("native_profiler");
        $__internal_68ace819f5dc05e4451a5f6f4fa7cb4d9949e5408fa8db05b7ea74126883d9cd->enter($__internal_68ace819f5dc05e4451a5f6f4fa7cb4d9949e5408fa8db05b7ea74126883d9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:teachersgroup.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"11%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"18%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"28%\" colspan=\"2\">Schedule</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 13
        $context["i"] = 0;
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 15
            echo "\t\t\t";
            if (((((($this->getAttribute($context["group"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["group"], "enddate", array()))) && ($this->getAttribute($context["group"], "status", array()) == 1)) || ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && $this->getAttribute((isset($context["gteachers"]) ? $context["gteachers"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true))) {
                // line 16
                echo "\t\t\t\t";
                $context["teachers"] = $this->getAttribute((isset($context["gteachers"]) ? $context["gteachers"] : $this->getContext($context, "gteachers")), $this->getAttribute($context["group"], "id", array()), array(), "array");
                // line 17
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["gteacherschedule"]) ? $context["gteacherschedule"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) {
                    $context["schedule"] = $this->getAttribute((isset($context["gteacherschedule"]) ? $context["gteacherschedule"] : $this->getContext($context, "gteacherschedule")), $this->getAttribute($context["group"], "id", array()), array(), "array");
                }
                // line 18
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 19
                    echo "\t\t\t\t\t";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 20
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td colspan=\"2\"><center>";
                    // line 26
                    if (((array_key_exists("schedule", $context) && $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : null), $this->getAttribute($context["employee"], "id", array()), array(), "array", true, true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), $this->getAttribute($context["employee"], "id", array()), array(), "array") != null))) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</center></td>
\t\t\t\t\t</tr>\t\t\t\t
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "\t\t\t";
            }
            // line 30
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>";
        
        $__internal_68ace819f5dc05e4451a5f6f4fa7cb4d9949e5408fa8db05b7ea74126883d9cd->leave($__internal_68ace819f5dc05e4451a5f6f4fa7cb4d9949e5408fa8db05b7ea74126883d9cd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:teachersgroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 31,  116 => 30,  113 => 29,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  77 => 20,  74 => 19,  69 => 18,  64 => 17,  61 => 16,  58 => 15,  53 => 14,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="11%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.homenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="28%" colspan="2">Schedule</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{% set i=0 %}*/
/*         {% for group in groups %}*/
/* 			{%if ((group.startdate<=now and now<=group.enddate and group.status==1) or group.startdate>=now) and gteachers[group.id] is defined%}*/
/* 				{%set teachers=gteachers[group.id]%}*/
/* 				{%if gteacherschedule[group.id] is defined%}{%set schedule=gteacherschedule[group.id]%}{%endif%}*/
/* 				{% for employee in teachers %}*/
/* 					{% set i=i+1 %}*/
/* 					<tr>*/
/* 						<td>{{ employee.firstname }}</td>*/
/* 						<td>{{ employee.name }}</td>*/
/* 						<td>{{ employee.email }}</td>*/
/* 						<td>{{ employee.homenumber }}</td>*/
/* 						<td>{{ employee.cellnumber }}</td>*/
/* 						<td colspan="2"><center>{%if schedule is defined and schedule[employee.id] is defined and schedule[employee.id]!=null %}{{ schedule[employee.id]}}{%else%}---{%endif%}</center></td>*/
/* 					</tr>				*/
/* 				{% endfor %}*/
/* 			{%endif%}*/
/* 		{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
