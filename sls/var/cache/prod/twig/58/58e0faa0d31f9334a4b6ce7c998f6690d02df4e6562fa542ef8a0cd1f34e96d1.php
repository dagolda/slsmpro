<?php

/* BoHomeBundle:Invitation:tbliste.html.twig */
class __TwigTemplate_7d540709175da1fae415d12f49cd33b163953cf0d7eeceab0992d32526affc6a extends Twig_Template
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
        $__internal_e9d766dc5c780c5d6279ce4248775f3223e499ae8c7b252f5fda9b2ca9b2fbb4 = $this->env->getExtension("native_profiler");
        $__internal_e9d766dc5c780c5d6279ce4248775f3223e499ae8c7b252f5fda9b2ca9b2fbb4->enter($__internal_e9d766dc5c780c5d6279ce4248775f3223e499ae8c7b252f5fda9b2ca9b2fbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Invitation:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.noh", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.days", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.istatus", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.statusdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t";
        // line 19
        $context["nbd"] = 0;
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invitations"]) ? $context["invitations"] : $this->getContext($context, "invitations")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
            // line 21
            echo "\t\t";
            if ($this->getAttribute($context["invitation"], "agenda", array())) {
                $context["schedule"] = $this->getAttribute($context["invitation"], "agenda", array());
            }
            // line 22
            echo "\t\t";
            if ((array_key_exists("schedule", $context) && $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array()))) {
                $context["contract"] = $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array());
            }
            // line 23
            echo "            <tr>
                <td ";
            // line 24
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 26
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 27
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t";
            // line 28
            if ((($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "group", array()) == null) && array_key_exists("contract", $context))) {
                // line 29
                echo "\t\t\t\t";
                $context["students"] = $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array());
                // line 30
                echo "\t\t\t\t\t";
                if ((twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))) == 1)) {
                    // line 31
                    echo "\t\t\t\t\t\t";
                    $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), 0, array(), "array");
                    // line 32
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 33
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array())) {
                    // line 34
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "name", array()), "html", null, true);
                    echo " 
\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t
\t\t\t";
            } elseif ((($this->getAttribute(            // line 36
(isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "group", array()) != null) && $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "idgroup", array()), array(), "array", true, true))) {
                // line 37
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "idgroup", array()), array(), "array"), "name", array()), "html", null, true);
                echo "
\t\t\t";
            } else {
                // line 38
                echo "---";
            }
            echo "</td>
                <td ";
            // line 39
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            $this->loadTemplate("BoAdminBundle:Contracts:days.html.twig", "BoHomeBundle:Invitation:tbliste.html.twig", 39)->display($context);
            echo "</td>
                <td ";
            // line 40
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 41
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 42
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 43
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 44
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.accepted", array(), "BoAdminBundle"), "html", null, true);
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.rejected", array(), "BoAdminBundle"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.sent", array(), "BoAdminBundle"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 45
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "idate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action ";
            // line 46
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 2)) {
                echo "ping-color";
            } elseif (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()) == 1)) {
                echo "wax_3d_1";
            }
            echo "\" nowrap>
                    \t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_invitation_show", array("id" => $this->getAttribute($context["invitation"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t\t<tr><td colspan=\"11\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invitation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
";
        
        $__internal_e9d766dc5c780c5d6279ce4248775f3223e499ae8c7b252f5fda9b2ca9b2fbb4->leave($__internal_e9d766dc5c780c5d6279ce4248775f3223e499ae8c7b252f5fda9b2ca9b2fbb4_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Invitation:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 55,  311 => 53,  293 => 48,  289 => 47,  281 => 46,  269 => 45,  253 => 44,  241 => 43,  229 => 42,  217 => 41,  205 => 40,  195 => 39,  190 => 38,  184 => 37,  182 => 36,  179 => 35,  173 => 34,  171 => 33,  164 => 32,  161 => 31,  158 => 30,  155 => 29,  153 => 28,  145 => 27,  135 => 26,  123 => 25,  111 => 24,  108 => 23,  103 => 22,  98 => 21,  79 => 20,  77 => 19,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.noh'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.student'|trans([],'BoAdminBundle')}}/{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.days'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.istatus'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.statusdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 	{%set nbd=0%}*/
/*         {% for invitation in invitations %}*/
/* 		{%if invitation.agenda %}{%set schedule = invitation.agenda%}{%endif%}*/
/* 		{%if schedule is defined and schedule.contracts %}{%set contract = schedule.contracts%}{%endif%}*/
/*             <tr>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.startdate %}{{ schedule.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.enddate %}{{ schedule.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{{ schedule.hourperday }}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>*/
/* 			{% if schedule.group==null and contract is defined%}*/
/* 				{%set students = contract.students%}*/
/* 					{%if students|length==1%}*/
/* 						{%set student=students[0]%}*/
/* 						{{student.firstname}} {{student.name}}*/
/* 					{%elseif contract.group%}*/
/* 						{{contract.group.name}} */
/* 					{%endif%}					*/
/* 			{%elseif schedule.group!=null and groups[schedule.idgroup] is defined%}*/
/* 				{{ groups[schedule.idgroup].name }}*/
/* 			{%else%}---{%endif%}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{%include "BoAdminBundle:Contracts:days.html.twig"%}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.startam %}{{ schedule.startam|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.endam %}{{ schedule.endam|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.startpm %}{{ schedule.startpm|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.endpm %}{{ schedule.endpm|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.istatus==1 %}{{'status.accepted'|trans([],'BoAdminBundle')}}{%elseif schedule.istatus==2 %}{{'status.rejected'|trans([],'BoAdminBundle')}}{% else %}{{'status.sent'|trans([],'BoAdminBundle')}}{% endif %}</td>*/
/*                 <td {%if schedule.istatus==2%}class="ping-color"{%elseif schedule.istatus==1%}class="wax_3d_1"{%endif%}>{% if schedule.endam %}{{ schedule.idate|date('d-m-Y') }}{% endif %}</td>*/
/*                 <td class="list-action {%if schedule.istatus==2%}ping-color{%elseif schedule.istatus==1%}wax_3d_1{%endif%}" nowrap>*/
/*                     	<a href="{{ path('home_invitation_show', { 'id': invitation.id }) }}">*/
/* 				{{'action.show'|trans([],'BoAdminBundle')}}*/
/* 			</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="11">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
