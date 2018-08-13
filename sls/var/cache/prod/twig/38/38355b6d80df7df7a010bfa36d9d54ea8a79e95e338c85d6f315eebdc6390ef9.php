<?php

/* BoAdminBundle:Students:showcontract.html.twig */
class __TwigTemplate_cc83fc5bb2219337f69fb956b8b0eb997df136620bb0e1014e14fe6bf0d56126 extends Twig_Template
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
        $__internal_86a78ff083f91133e31caa3b1427b0d9875354962e47a13bda5348a7cd84ea16 = $this->env->getExtension("native_profiler");
        $__internal_86a78ff083f91133e31caa3b1427b0d9875354962e47a13bda5348a7cd84ea16->enter($__internal_86a78ff083f91133e31caa3b1427b0d9875354962e47a13bda5348a7cd84ea16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:showcontract.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receptiondate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teachers", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td ";
        // line 17
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">
\t\t\t\t";
        // line 18
        if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typeoftraining", array()) == "GR") && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "name", array()), "html", null, true);
        } elseif ($this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), array(), "array"), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), array(), "array"), "name", array()), "html", null, true);
        }
        echo "</td>
                <td ";
        // line 19
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
        echo "</td>
                <td ";
        // line 20
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "receivedate", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                <td ";
        // line 21
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()), "html", null, true);
        echo "</td>
                <td ";
        // line 22
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "client", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "client", array()), "reference", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td ";
        // line 23
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">
\t\t\t\t\t";
        // line 24
        $context["i"] = 1;
        // line 25
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "employee", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 26
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                echo "<br>";
            } else {
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            }
            // line 27
            echo "\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t\t\t\t\t\t---
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</td>
                <td ";
        // line 31
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber", array()), "html", null, true);
        echo "</td>
                <td ";
        // line 32
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                <td ";
        // line 33
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            echo " class=\"completed_contracts\"";
        }
        echo ">";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_86a78ff083f91133e31caa3b1427b0d9875354962e47a13bda5348a7cd84ea16->leave($__internal_86a78ff083f91133e31caa3b1427b0d9875354962e47a13bda5348a7cd84ea16_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:showcontract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 33,  166 => 32,  158 => 31,  155 => 30,  148 => 28,  143 => 27,  133 => 26,  127 => 25,  125 => 24,  119 => 23,  107 => 22,  99 => 21,  91 => 20,  83 => 19,  73 => 18,  67 => 17,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.receptiondate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.customer'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.teachers'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.totalhour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 				{%if contract.typeoftraining=="GR" and contract.group%}{{ contract.group.name }}{%elseif students[contract.id] is defined%}{{students[contract.id].firstname}} {{students[contract.id].name}}{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.contractnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.receivedate|date('Y-m-d') }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.typecontract }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.client%}{{ contract.client.reference }}{%else%}---{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 					{%set i=1%}*/
/* 					{%for teacher in contract.employee %}*/
/* 						{{ teacher.firstname }} {{ teacher.name }}{%if contract.employee|length>i%}<br>{%else%}{%set i=i+1%}{%endif%}*/
/* 					{%else%}*/
/* 						---*/
/* 					{%endfor%}*/
/* 				</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.hoursnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
