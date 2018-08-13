<?php

/* BoAdminBundle:Contracts:students.html.twig */
class __TwigTemplate_24c9612fe2030455cb3cdeca6421fb4fcd12c3343c9bed235f623e58230ba5f9 extends Twig_Template
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
        $__internal_8964b42ddc867099e38be0a3eb571ba8732499c0da0202f1c97dcf8633983891 = $this->env->getExtension("native_profiler");
        $__internal_8964b42ddc867099e38be0a3eb571ba8732499c0da0202f1c97dcf8633983891->enter($__internal_8964b42ddc867099e38be0a3eb571ba8732499c0da0202f1c97dcf8633983891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:students.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"15%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"120px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["student"], "startlevel", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "startlevel", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "targetlevel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["student"], "phonenumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "phonenumber", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "creationdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\" nowrap>
\t\t";
            // line 25
            if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
                // line 26
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_students_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
                // line 27
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
                    // line 28
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_students_remove0", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "idstudent" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 30
                echo "\t\t";
            }
            // line 31
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t";
        if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
            echo "\t
         <tr>\t
\t\t\t<td colspan=\"8\" class=\"list-action\">\t\t
\t\t\t\t";
            // line 37
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "creation", array()) == 1))) {
                // line 38
                echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_student\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["hstudents"]) ? $context["hstudents"] : null), 0, array(), "array", true, true)) {
                // line 41
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#historic_student\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.seehistoric", array(), "BoAdminBundle"), "html", null, true);
                    echo "</button>
\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t";
            }
            // line 45
            echo "\t\t\t</td>
\t</tr>
\t";
        }
        // line 48
        echo "        </tbody>
    </table>
";
        
        $__internal_8964b42ddc867099e38be0a3eb571ba8732499c0da0202f1c97dcf8633983891->leave($__internal_8964b42ddc867099e38be0a3eb571ba8732499c0da0202f1c97dcf8633983891_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 48,  165 => 45,  162 => 44,  156 => 42,  153 => 41,  150 => 40,  144 => 38,  142 => 37,  135 => 34,  127 => 31,  124 => 30,  116 => 28,  114 => 27,  107 => 26,  105 => 25,  98 => 23,  94 => 22,  86 => 21,  82 => 20,  74 => 19,  70 => 18,  66 => 17,  63 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="15%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="120px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for student in students %}*/
/*             <tr>*/
/*                 <td>{{ student.firstname }}</td>*/
/*                 <td>{{ student.name }}</td>*/
/*                 <td>{%if student.startlevel %}{{ student.startlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ student.targetlevel }}</td>*/
/*                 <td>{%if student.phonenumber %}{{ student.phonenumber }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ student.email }}</td>*/
/* 				<td>{% if contract.creationdate %}{{ contract.creationdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td class="list-action" nowrap>*/
/* 		{%if contract.status==1 or contract.status==2%}*/
/*                     <a href="{{ path('contracts_students_edit', { 'id': student.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}*/
/* 						<a href="{{ path('contracts_students_remove0',{'idcontract':contract.id,'idstudent':student.id,}) }}">{{'action.remove'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/* 		{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/* 	{%if contract.status==1 or contract.status==2%}	*/
/*          <tr>	*/
/* 			<td colspan="8" class="list-action">		*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].creation==1%}*/
/* 					<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_student">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 				{%endif%}*/
/* 				{%if hstudents[0] is defined%}*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}*/
/* 							<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#historic_student">{{'action.seehistoric'|trans([],'BoAdminBundle')}}</button>*/
/* 					{%endif%}*/
/* 				{% endif %}*/
/* 			</td>*/
/* 	</tr>*/
/* 	{%endif%}*/
/*         </tbody>*/
/*     </table>*/
/* */
