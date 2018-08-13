<?php

/* BoAdvisorsBundle:Default:group.html.twig */
class __TwigTemplate_f7416be3c3be3adb76ec0e1939c0960c42786c92d102d4a4d341551cf3bf7bc2 extends Twig_Template
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
        $__internal_848518b2d9344ac7c9bd83099db1ad1e2c9d7794e876a8807a8602dbd0fa2f4f = $this->env->getExtension("native_profiler");
        $__internal_848518b2d9344ac7c9bd83099db1ad1e2c9d7794e876a8807a8602dbd0fa2f4f->enter($__internal_848518b2d9344ac7c9bd83099db1ad1e2c9d7794e876a8807a8602dbd0fa2f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Default:group.html.twig"));

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
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 15
            echo "            <tr>
                <td ";
            // line 16
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo "><a>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "</a></td>
                <td ";
            // line 17
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if (($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), 0, array(), "array"), "typecontract", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), 0, array(), "array"), "typecontract", array()), "reference", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 18
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 19
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "targetlevel", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 20
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
                <td ";
            // line 21
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
                <td class=\"list-action\"  width=\"126px\">
\t\t\t\t\t";
            // line 23
            if (($this->getAttribute($context["group"], "status", array()) == 1)) {
                // line 24
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_group", array("idgroup" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 26
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>";
        
        $__internal_848518b2d9344ac7c9bd83099db1ad1e2c9d7794e876a8807a8602dbd0fa2f4f->leave($__internal_848518b2d9344ac7c9bd83099db1ad1e2c9d7794e876a8807a8602dbd0fa2f4f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Default:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 31,  141 => 29,  134 => 26,  126 => 24,  124 => 23,  111 => 21,  99 => 20,  91 => 19,  83 => 18,  71 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for group in groups %}*/
/*             <tr>*/
/*                 <td {%if group.status==0%} class="completed_contracts"{%endif%}><a>{{ group.id }}</a></td>*/
/*                 <td {%if group.status==0%} class="completed_contracts"{%endif%}>{%if contracts[0] is defined and contracts[0].typecontract %}{{ contracts[0].typecontract.reference }}{%else%}---{%endif%}</td>*/
/*                 <td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.name }}</td>*/
/*                 <td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.targetlevel }}</td>*/
/*                 <td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.startdate %}{{ group.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.enddate %}{{ group.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td class="list-action"  width="126px">*/
/* 					{%if group.status==1%}*/
/* 						<a href="{{ path('home_timesheet_group', { 'idgroup': group.id }) }}">{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'message.no.found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
