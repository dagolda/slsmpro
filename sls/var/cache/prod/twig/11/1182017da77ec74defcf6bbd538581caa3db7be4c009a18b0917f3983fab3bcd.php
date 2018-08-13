<?php

/* BoAdminBundle:Absences:group.html.twig */
class __TwigTemplate_4a6ce6144e36061f5511ee544bec0faf9eecc4b44114bfc152800e8a6db50121 extends Twig_Template
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
        $__internal_b722760e60107a29b1b14a60d00b80f9ac230c097a8775b49da0fef8c2660ac1 = $this->env->getExtension("native_profiler");
        $__internal_b722760e60107a29b1b14a60d00b80f9ac230c097a8775b49da0fef8c2660ac1->enter($__internal_b722760e60107a29b1b14a60d00b80f9ac230c097a8775b49da0fef8c2660ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:group.html.twig"));

        // line 1
        echo "    ";
        $context["groups"] = $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "group", array());
        // line 2
        echo "\t<table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"18%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "\t\t\t";
            if ((($this->getAttribute($context["group"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["group"], "enddate", array())))) {
                // line 17
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td ";
                // line 18
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
                // line 19
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 20
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "targetlevel", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 21
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "advisor", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 22
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                if ($this->getAttribute($context["group"], "startdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["group"], "startdate", array()), "Y-m-d"), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t<td ";
                // line 23
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                if ($this->getAttribute($context["group"], "enddate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["group"], "enddate", array()), "Y-m-d"), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t";
                // line 24
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "creation", array()) == 1)) && $this->getAttribute((isset($context["esg"]) ? $context["esg"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) && ($this->getAttribute((isset($context["esg"]) ? $context["esg"] : $this->getContext($context, "esg")), $this->getAttribute($context["group"], "id", array()), array(), "array") == 1))) {
                    // line 25
                    echo "\t\t\t\t\t\t<td class=\"list-action\" nowrap>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_subsgroup";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addsubstitution", array(), "BoAdminBundle"), "html", null, true);
                    echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t</tr>
\t\t\t";
            }
            // line 31
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "\t\t\t<tr><td colspan=\"6\">No activity entry found in database</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
";
        
        $__internal_b722760e60107a29b1b14a60d00b80f9ac230c097a8775b49da0fef8c2660ac1->leave($__internal_b722760e60107a29b1b14a60d00b80f9ac230c097a8775b49da0fef8c2660ac1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 34,  151 => 32,  146 => 31,  142 => 29,  134 => 26,  131 => 25,  129 => 24,  117 => 23,  105 => 22,  97 => 21,  89 => 20,  81 => 19,  69 => 18,  66 => 17,  63 => 16,  58 => 15,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  25 => 2,  22 => 1,);
    }
}
/*     {%set groups=absence.group%}*/
/* 	<table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.pa'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for group in groups %}*/
/* 			{%if group.startdate<=now and now<=group.enddate%}*/
/* 				<tr>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{%if group.typecontract %}{{ group.typecontract.reference }}{%else%}---{%endif%}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.name }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.targetlevel }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.advisor }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.startdate %}{{ group.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.enddate %}{{ group.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].creation==1  and esg[group.id] is defined and esg[group.id]==1%}*/
/* 						<td class="list-action" nowrap>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_subsgroup{{group.id}}">{{'label.addsubstitution'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">No activity entry found in database</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
