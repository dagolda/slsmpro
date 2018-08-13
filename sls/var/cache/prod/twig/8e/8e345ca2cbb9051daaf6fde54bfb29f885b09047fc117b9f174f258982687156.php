<?php

/* BoAdminBundle:Employee:contracts.html.twig */
class __TwigTemplate_1cf23ede14a77971b2056f4a235645488d646c92ed469e7e990abb90f4415b68 extends Twig_Template
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
        $__internal_fd66097e8855ac8e6e8dd53b7c214cc20f427ab52b36fff4059bf2450d1712af = $this->env->getExtension("native_profiler");
        $__internal_fd66097e8855ac8e6e8dd53b7c214cc20f427ab52b36fff4059bf2450d1712af->enter($__internal_fd66097e8855ac8e6e8dd53b7c214cc20f427ab52b36fff4059bf2450d1712af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:contracts.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th width=\"4%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"18%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"22%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
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
            if ($this->getAttribute((isset($context["tcsc"]) ? $context["tcsc"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                // line 17
                echo "\t\t\t\t";
                $context["tsc"] = $this->getAttribute((isset($context["tcsc"]) ? $context["tcsc"] : $this->getContext($context, "tcsc")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
                // line 18
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td ";
                // line 19
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 20
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td  ";
                // line 21
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">
\t\t\t\t\t\t";
                // line 22
                if (($this->getAttribute($context["contract"], "students", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "\t\t\t\t
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td ";
                // line 30
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 31
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "advisor", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 32
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                if ($this->getAttribute($context["contract"], "startdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tsc"]) ? $context["tsc"] : $this->getContext($context, "tsc")), "startdate", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td ";
                // line 33
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                if ($this->getAttribute($context["contract"], "enddate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tsc"]) ? $context["tsc"] : $this->getContext($context, "tsc")), "enddate", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td ";
                // line 34
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), $this->getAttribute($context["contract"], "id", array()), array(), "array"), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 37
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t<tr><td colspan=\"8\">No contract found</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
";
        
        $__internal_fd66097e8855ac8e6e8dd53b7c214cc20f427ab52b36fff4059bf2450d1712af->leave($__internal_fd66097e8855ac8e6e8dd53b7c214cc20f427ab52b36fff4059bf2450d1712af_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 40,  201 => 38,  196 => 37,  180 => 34,  168 => 33,  156 => 32,  146 => 31,  136 => 30,  133 => 29,  129 => 27,  122 => 26,  112 => 24,  106 => 23,  104 => 22,  96 => 21,  86 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  62 => 15,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.pa'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="22%">{{'label.schedule'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/* 			{%if tcsc[contract.id] is defined%}*/
/* 				{%set tsc = tcsc[contract.id]%}*/
/* 				<tr>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.id }}</td>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.contractnumber }}</td>*/
/* 					<td  {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 						{%if contract.students is defined and contract.students|length==1%}*/
/* 							{%for student in contract.students %}*/
/* 								{{ student.firstname }} {{ student.name }}*/
/* 							{%else%}*/
/* 								---*/
/* 							{%endfor%}				*/
/* 						{%endif%}*/
/* 					</td>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.typecontract }}</td>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.advisor }}</td>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.startdate %}{{ tsc.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.enddate %}{{ tsc.enddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if schedule[contract.id] is defined %}{{schedule[contract.id]}}{%else%}---{%endif%}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">No contract found</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
