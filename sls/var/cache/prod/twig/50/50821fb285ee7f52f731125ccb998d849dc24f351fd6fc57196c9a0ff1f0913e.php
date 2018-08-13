<?php

/* BoAdminBundle:Contracts:activeagenda.html.twig */
class __TwigTemplate_6850f6bc14c9116e55bfa17d9ad0a13656e013a838225840141cdfe89a8f093b extends Twig_Template
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
        $__internal_b05852b6e1dac34fbfc24b5a3622fb588acfcde995db35164499fca0be0bee8d = $this->env->getExtension("native_profiler");
        $__internal_b05852b6e1dac34fbfc24b5a3622fb588acfcde995db35164499fca0be0bee8d->enter($__internal_b05852b6e1dac34fbfc24b5a3622fb588acfcde995db35164499fca0be0bee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:activeagenda.html.twig"));

        // line 1
        echo "\t\t";
        $context["i"] = 0;
        // line 2
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 3
            echo "\t\t<tr>
\t\t\t<td ";
            // line 4
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t<td ";
            // line 5
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "employee", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t<td ";
            // line 6
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            $this->loadTemplate("BoAdminBundle:Contracts:days.html.twig", "BoAdminBundle:Contracts:activeagenda.html.twig", 6)->display($context);
            echo "</td>
\t\t\t<td ";
            // line 7
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo " align=\"center\">";
            if (($this->getAttribute($context["schedule"], "startdate", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startdate", array()), "d-m-Y"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t<td ";
            // line 8
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo " align=\"center\">";
            if (($this->getAttribute($context["schedule"], "enddate", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "enddate", array()), "d-m-Y"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t<td ";
            // line 9
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo " align=\"center\">";
            if (($this->getAttribute($context["schedule"], "startam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t<td ";
            // line 10
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo " align=\"center\">";
            if (($this->getAttribute($context["schedule"], "endam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t<td ";
            // line 11
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo " align=\"center\">";
            if (($this->getAttribute($context["schedule"], "startpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t<td ";
            // line 12
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo " align=\"center\">";
            if (($this->getAttribute($context["schedule"], "endpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t<td ";
            // line 13
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo " align=\"center\">";
            if ($this->getAttribute($context["schedule"], "hourperday", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "hourperday", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t
\t\t\t<td class=\"";
            // line 14
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "completed_contracts";
            } elseif (((($this->getAttribute($context["schedule"], "status", array()) == 1) || ($this->getAttribute($context["schedule"], "status", array()) == 2)) && ($this->getAttribute($context["schedule"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "wax_3d_1";
            }
            echo " list-action\" nowrap>
\t\t\t";
            // line 15
            if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
                // line 16
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Teacher Schedule", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Teacher Schedule", array(), "array"), "edit", array()) == 1))) {
                    // line 17
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_edit", array("id" => $this->getAttribute($context["schedule"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                    echo "</a>
\t\t\t\t";
                }
                // line 19
                echo "\t\t\t";
            }
            // line 20
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Teacher Schedule", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Teacher Schedule", array(), "array"), "ddelete", array()) == 1))) {
                // line 21
                echo "\t\t\t\t<!--a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_remove", array("id" => $this->getAttribute($context["schedule"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
                echo "</a-->
\t\t\t";
            }
            // line 23
            echo "\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "creation", array()) == 1)) && (twig_length_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array())) > 0))) {
                // line 24
                echo "\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_substitution";
                echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.substitute", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t";
            }
            // line 25
            echo "\t\t\t
\t\t\t</td>
\t\t</tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b05852b6e1dac34fbfc24b5a3622fb588acfcde995db35164499fca0be0bee8d->leave($__internal_b05852b6e1dac34fbfc24b5a3622fb588acfcde995db35164499fca0be0bee8d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:activeagenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 25,  214 => 24,  211 => 23,  203 => 21,  200 => 20,  197 => 19,  189 => 17,  186 => 16,  184 => 15,  176 => 14,  162 => 13,  148 => 12,  134 => 11,  120 => 10,  106 => 9,  92 => 8,  78 => 7,  68 => 6,  56 => 5,  46 => 4,  43 => 3,  25 => 2,  22 => 1,);
    }
}
/* 		{% set i=0 %}*/
/*         {% for schedule in agendas %}*/
/* 		<tr>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%}>{{ schedule.id }}</td>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%}>{{ schedule.employee.firstname }} {{ schedule.employee.name }}</td>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%}>{%include "BoAdminBundle:Contracts:days.html.twig"%}</td>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%} align="center">{%if schedule.startdate!=null%}{{ schedule.startdate|date('d-m-Y') }}{%else%}---{%endif%}</td>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%} align="center">{%if schedule.enddate!=null%}{{ schedule.enddate|date('d-m-Y') }}{%else%}---{%endif%}</td>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%} align="center">{%if schedule.startam!=null%}{{ schedule.startam|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%} align="center">{%if schedule.endam!=null%}{{ schedule.endam|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%} align="center">{%if schedule.startpm!=null%}{{ schedule.startpm|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%} align="center">{%if schedule.endpm!=null%}{{ schedule.endpm|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 			<td {%if schedule.status==0%}class="completed_contracts"{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}class="wax_3d_1"{%endif%} align="center">{%if schedule.hourperday%}{{ schedule.hourperday }}{%else%}---{%endif%}</td>	*/
/* 			<td class="{%if schedule.status==0%}completed_contracts{%elseif (schedule.status==1 or schedule.status==2) and schedule.startdate>=now%}wax_3d_1{%endif%} list-action" nowrap>*/
/* 			{%if contract.status==1 or contract.status==2%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Teacher Schedule'] is defined and app.session.get('rights')['CONTRACTS']['Teacher Schedule'].edit==1%}*/
/* 					<a href="{{ path('agenda_edit',{'id':schedule.id}) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 				{%endif%}*/
/* 			{%endif%}*/
/* 			{%if app.session.get('rights')['CONTRACTS']['Teacher Schedule'] is defined and app.session.get('rights')['CONTRACTS']['Teacher Schedule'].ddelete==1%}*/
/* 				<!--a href="{{ path('agenda_remove',{'id':schedule.id}) }}">{{'action.remove'|trans([],'BoAdminBundle')}}</a-->*/
/* 			{%endif%}*/
/* 			{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].creation==1 and contract.students|length>0%}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_substitution{{schedule.id}}">{{'action.substitute'|trans([],'BoAdminBundle')}}</button>*/
/* 			{%endif%}			*/
/* 			</td>*/
/* 		</tr>*/
/*         {% endfor %}*/
/* */
