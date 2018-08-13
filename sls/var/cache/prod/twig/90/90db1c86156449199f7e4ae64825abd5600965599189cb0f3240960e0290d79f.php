<?php

/* BoAdminBundle:Group:tbliste.html.twig */
class __TwigTemplate_88510650d409aed195c7995a2ad25d94a4e382d7085bd84cbc4effedde55d480 extends Twig_Template
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
        $__internal_6a80b910d0efca03c5f9169263a745093f0f911be0dd1605e72290b2ac130489 = $this->env->getExtension("native_profiler");
        $__internal_6a80b910d0efca03c5f9169263a745093f0f911be0dd1605e72290b2ac130489->enter($__internal_6a80b910d0efca03c5f9169263a745093f0f911be0dd1605e72290b2ac130489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <!--th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</th--!>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 17
            echo "            <tr>
                <td ";
            // line 18
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "</a></td>
                <td ";
            // line 19
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</td>
                <!--td ";
            // line 20
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 21
            if (($this->getAttribute($context["group"], "local", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["group"], "local", array())) == 1))) {
                // line 22
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "local", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "reference", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t---\t\t\t\t
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t</td--!>
                <td ";
            // line 29
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "targetlevel", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 30
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["group"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["group"], "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 31
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["group"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["group"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t<td ";
            // line 32
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["group"], "createby", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "createby", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 33
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["group"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["group"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td  ";
            // line 34
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo "class=\"completed_contracts list-action\"";
            } elseif (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1 list-action\"";
            } else {
                echo "class=\"list-action\"";
            }
            echo ">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 36
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "edit", array()) == 1))) {
                // line 37
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_edit", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 39
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
";
        
        $__internal_6a80b910d0efca03c5f9169263a745093f0f911be0dd1605e72290b2ac130489->leave($__internal_6a80b910d0efca03c5f9169263a745093f0f911be0dd1605e72290b2ac130489_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 44,  222 => 42,  215 => 39,  207 => 37,  205 => 36,  201 => 35,  191 => 34,  179 => 33,  165 => 32,  151 => 31,  137 => 30,  127 => 29,  124 => 28,  120 => 26,  117 => 25,  108 => 23,  103 => 22,  101 => 21,  93 => 20,  83 => 19,  71 => 18,  68 => 17,  63 => 16,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <!--th>{{'label.room'|trans([],'BoAdminBundle')}}</th--!>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for group in groups %}*/
/*             <tr>*/
/*                 <td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}><a href="{{ path('group_show', { 'id': group.id }) }}">{{ group.id }}</a></td>*/
/*                 <td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}>{{ group.name }}</td>*/
/*                 <!--td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%if group.local is defined and group.local|length==1%}*/
/* 						{%for room in group.local %}*/
/* 							{{ room.reference }}*/
/* 						{%endfor%}*/
/* 					{%else%}*/
/* 						---				*/
/* 					{%endif%}*/
/* 				</td--!>*/
/*                 <td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}>{{ group.targetlevel }}</td>*/
/*                 <td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}>{% if group.startdate %}{{ group.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}>{% if group.enddate %}{{ group.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 		<td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}>{% if group.createby %}{{ group.createby }}{%else%}---{% endif %}</td>*/
/*                 <td {%if group.status==0%}class="completed_contracts"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1"{%endif%}>{% if group.creationdate %}{{ group.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td  {%if group.status==0%}class="completed_contracts list-action"{%elseif (group.status==1 or group.status==2) and group.startdate>=now%}class="wax_3d_1 list-action"{%else%}class="list-action"{%endif%}>*/
/*                     <a href="{{ path('group_show', { 'id': group.id }) }}">show</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].edit==1%}*/
/* 						<a href="{{ path('group_edit', { 'id': group.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
