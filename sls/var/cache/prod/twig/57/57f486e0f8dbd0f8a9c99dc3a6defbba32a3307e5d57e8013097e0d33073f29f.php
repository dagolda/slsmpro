<?php

/* BoAdminBundle:Profil:employee.html.twig */
class __TwigTemplate_8ca7298ae51aeecc1aee7ba289a80a95b52a953e8da3d20324b021e4fc97ea5f extends Twig_Template
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
        $__internal_be4825a9993197b91cec147714ea7edaaee0db68493932b43b7bab4eb6f555c7 = $this->env->getExtension("native_profiler");
        $__internal_be4825a9993197b91cec147714ea7edaaee0db68493932b43b7bab4eb6f555c7->enter($__internal_be4825a9993197b91cec147714ea7edaaee0db68493932b43b7bab4eb6f555c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Profil:employee.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"4%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 14
            echo "            <tr>
                <td ";
            // line 15
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "</a></td>
                <td ";
            // line 16
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 17
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 18
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 19
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 20
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
        
        $__internal_be4825a9993197b91cec147714ea7edaaee0db68493932b43b7bab4eb6f555c7->leave($__internal_be4825a9993197b91cec147714ea7edaaee0db68493932b43b7bab4eb6f555c7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Profil:employee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 25,  128 => 23,  114 => 20,  104 => 19,  94 => 18,  84 => 17,  74 => 16,  62 => 15,  59 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employee in employees %}*/
/*             <tr>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}><a href="{{ path('employee_show', { 'id': employee.id }) }}">{{ employee.id }}</a></td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>{{ employee.firstname }}</td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>{{ employee.name }}</td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>{{ employee.email }}</td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>{{ employee.homenumber }}</td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>{{ employee.cellnumber }}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
