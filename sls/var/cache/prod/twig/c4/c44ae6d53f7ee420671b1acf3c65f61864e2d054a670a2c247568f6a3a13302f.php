<?php

/* BoAdminBundle:Students:contract.html.twig */
class __TwigTemplate_f069056c5fd29a5c31d77c566f96eee35bd3b8c1b878bea67c27a7e5d450ffc5 extends Twig_Template
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
        $__internal_08ed577c2fb75770a0b0c6387e686053c757ec00d2c8520a7e2093bed642a65d = $this->env->getExtension("native_profiler");
        $__internal_08ed577c2fb75770a0b0c6387e686053c757ec00d2c8520a7e2093bed642a65d->enter($__internal_08ed577c2fb75770a0b0c6387e686053c757ec00d2c8520a7e2093bed642a65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:contract.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receptiondate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
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
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 17
            echo "            <tr>
                <td ";
            // line 18
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 19
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t";
            // line 20
            if ((($this->getAttribute($context["contract"], "typeoftraining", array()) == "GR") && $this->getAttribute($context["contract"], "group", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
            } elseif ($this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), $this->getAttribute($context["contract"], "id", array()), array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), $this->getAttribute($context["contract"], "id", array()), array(), "array"), "name", array()), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 21
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "receivedate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 24
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "client", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "client", array()), "reference", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute($context["contract"], "status", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td ";
            // line 26
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 27
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
";
        
        $__internal_08ed577c2fb75770a0b0c6387e686053c757ec00d2c8520a7e2093bed642a65d->leave($__internal_08ed577c2fb75770a0b0c6387e686053c757ec00d2c8520a7e2093bed642a65d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 32,  166 => 30,  152 => 27,  142 => 26,  134 => 25,  122 => 24,  114 => 23,  106 => 22,  98 => 21,  88 => 20,  82 => 19,  74 => 18,  71 => 17,  66 => 16,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.receptiondate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.customer'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.id }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 				{%if contract.typeoftraining=="GR" and contract.group%}{{ contract.group.name }}{%elseif students[contract.id] is defined%}{{students[contract.id].firstname}} {{students[contract.id].name}}{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.contractnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.receivedate|date('Y-m-d') }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.typecontract }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.client%}{{ contract.client.reference }}{%else%}---{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ status[contract.status] }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
