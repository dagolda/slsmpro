<?php

/* BoAdvisorsBundle:Orderform:tbliste.html.twig */
class __TwigTemplate_872503b46c629a7eca99b5e2545e833c6bdb1d6ccf43ec17fe8bf6d228953186 extends Twig_Template
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
        $__internal_e9fa7e3e87935780a6a0df18d5b19006cc75442524653f24904e8476c8bc1518 = $this->env->getExtension("native_profiler");
        $__internal_e9fa7e3e87935780a6a0df18d5b19006cc75442524653f24904e8476c8bc1518->enter($__internal_e9fa7e3e87935780a6a0df18d5b19006cc75442524653f24904e8476c8bc1518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ordernumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nbstudent", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.program", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalhours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalcost", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"120px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderforms"]) ? $context["orderforms"] : $this->getContext($context, "orderforms")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["orderform"]) {
            // line 20
            echo "            <tr>
                <td ";
            // line 21
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderform"], "id", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if ($this->getAttribute($context["orderform"], "enquiry", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderform"], "enquiry", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if ($this->getAttribute($context["orderform"], "enquiry", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderform"], "enquiry", array()), "firstname", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 24
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderform"], "ordernumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderform"], "nbstudent", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 26
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderform"], "program", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 27
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo " align=\"right\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orderform"], "totalhours", array()), 0, "", " "), "html", null, true);
            echo "</td>
                <td ";
            // line 28
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo " align=\"right\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orderform"], "totalcost", array()), 2, ".", " "), "html", null, true);
            echo "</td>
                <td ";
            // line 29
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if ($this->getAttribute($context["orderform"], "enquiry", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderform"], "enquiry", array()), "language", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 30
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if (($this->getAttribute($context["orderform"], "enquiry", array()) && $this->getAttribute($this->getAttribute($context["orderform"], "enquiry", array()), "startdate", array()))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["orderform"], "enquiry", array()), "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 31
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if (($this->getAttribute($context["orderform"], "enquiry", array()) && $this->getAttribute($this->getAttribute($context["orderform"], "enquiry", array()), "enddate", array()))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["orderform"], "enquiry", array()), "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td class=\"list-action ";
            // line 32
            if (($this->getAttribute($context["orderform"], "status", array()) == 1)) {
                echo "wax_3d_1";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 2)) {
                echo "validated";
            } elseif (($this->getAttribute($context["orderform"], "status", array()) == 3)) {
                echo "rejected";
            }
            echo "\">
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_orderform_show", array("id" => $this->getAttribute($context["orderform"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 34
            if ((($this->getAttribute($context["orderform"], "status", array()) == 0) && ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array()) && ($this->getAttribute($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "profil", array()), "name", array()) == "Superadmin")))) {
                // line 35
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_orderform_edit", array("id" => $this->getAttribute($context["orderform"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 37
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "\t\t\t<tr><td colspan=\"12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
        
        $__internal_e9fa7e3e87935780a6a0df18d5b19006cc75442524653f24904e8476c8bc1518->leave($__internal_e9fa7e3e87935780a6a0df18d5b19006cc75442524653f24904e8476c8bc1518_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 42,  263 => 40,  256 => 37,  248 => 35,  246 => 34,  242 => 33,  232 => 32,  216 => 31,  200 => 30,  184 => 29,  172 => 28,  160 => 27,  148 => 26,  136 => 25,  124 => 24,  108 => 23,  92 => 22,  80 => 21,  77 => 20,  72 => 19,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.ordernumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.nbstudent'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.program'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.totalhours'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.totalcost'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="120px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for orderform in orderforms %}*/
/*             <tr>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{{ orderform.id }}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{%if orderform.enquiry %}{{ orderform.enquiry.name }}{%else%}---{%endif%}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{%if orderform.enquiry %}{{ orderform.enquiry.firstname }}{%else%}---{%endif%}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{{ orderform.ordernumber }}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{{ orderform.nbstudent }}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{{ orderform.program }}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%} align="right">{{ orderform.totalhours|number_format(0,""," ") }}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%} align="right">{{ orderform.totalcost|number_format(2,"."," ") }}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{%if orderform.enquiry %}{{ orderform.enquiry.language }}{%else%}---{%endif%}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{% if orderform.enquiry and orderform.enquiry.startdate %}{{ orderform.enquiry.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td {%if orderform.status==1%}class="wax_3d_1"{%elseif orderform.status==2%}class="validated"{%elseif orderform.status==3%}class="rejected"{%endif%}>{% if orderform.enquiry and orderform.enquiry.enddate %}{{ orderform.enquiry.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td class="list-action {%if orderform.status==1%}wax_3d_1{%elseif orderform.status==2%}validated{%elseif orderform.status==3%}rejected{%endif%}">*/
/*                     <a href="{{ path('dash_orderform_show', { 'id': orderform.id }) }}">show</a>*/
/* 					{%if orderform.status==0 and (employee.profil and employee.profil.name=="Superadmin")%}*/
/* 						<a href="{{ path('dash_orderform_edit', { 'id': orderform.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="12">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
