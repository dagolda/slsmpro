<?php

/* BoAdminBundle:Employee:tbliste.html.twig */
class __TwigTemplate_569eb8ed54717b4579f0ab82789bc31ed6e67e1e5177fbf02d2a627090402871 extends Twig_Template
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
        $__internal_ccd36dbca92bef3a5f9707f7f8f6fc9bab228b583fde80bbe780b9916151a6b4 = $this->env->getExtension("native_profiler");
        $__internal_ccd36dbca92bef3a5f9707f7f8f6fc9bab228b583fde80bbe780b9916151a6b4->enter($__internal_ccd36dbca92bef3a5f9707f7f8f6fc9bab228b583fde80bbe780b9916151a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"4%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.qualification", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"5%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"110\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 18
            echo "            <tr>
                <td ";
            // line 19
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
            // line 20
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 21
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 24
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">
\t\t\t\t\t";
            // line 26
            $context["i"] = 0;
            // line 27
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["employee"], "typecontract", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 28
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "reference", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 29
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 30
                echo "\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($context["employee"], "typecontract", array())))) {
                    echo ", ";
                }
                // line 31
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t</td>
                <td ";
            // line 33
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">
\t\t\t<center>
\t\t\t\t";
            // line 35
            if (($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : null), $this->getAttribute($context["employee"], "id", array()), array(), "array", true, true) && (($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "nc", array(), "array") > 0) || ($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "ng", array(), "array") > 0)))) {
                // line 36
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "nc", array(), "array") > 0)) {
                    // line 37
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "nc", array(), "array"), "html", null, true);
                    echo "C
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "ng", array(), "array") > 0)) {
                    // line 40
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "ng", array(), "array"), "html", null, true);
                    echo "G
\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t";
            } else {
                echo "---";
            }
            // line 43
            echo "\t\t\t</center>
\t\t\t\t</td>
                <td ";
            // line 45
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["employee"], "status", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
                <td class=\"list-action ";
            // line 46
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo "ping-color";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo "enquiry_processed";
            }
            echo "\"  width=\"126px\" nowrap>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 50
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "edit", array()) == 1))) {
                // line 51
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 55
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
";
        
        $__internal_ccd36dbca92bef3a5f9707f7f8f6fc9bab228b583fde80bbe780b9916151a6b4->leave($__internal_ccd36dbca92bef3a5f9707f7f8f6fc9bab228b583fde80bbe780b9916151a6b4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 60,  258 => 58,  251 => 55,  245 => 52,  240 => 51,  238 => 50,  233 => 48,  229 => 47,  221 => 46,  211 => 45,  207 => 43,  202 => 42,  196 => 40,  193 => 39,  187 => 37,  184 => 36,  182 => 35,  173 => 33,  170 => 32,  164 => 31,  159 => 30,  157 => 29,  152 => 28,  147 => 27,  145 => 26,  137 => 25,  127 => 24,  117 => 23,  107 => 22,  97 => 21,  87 => 20,  75 => 19,  72 => 18,  67 => 17,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.qualification'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="5%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="110" nowrap>Actions</th>*/
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
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>*/
/* 					{%set i=0%}*/
/* 					{%for tc in employee.typecontract%}*/
/* 						{{ tc.reference }}*/
/* 						{%set i=i+1%}*/
/* 						{%if i<employee.typecontract|length%}, {%endif%}*/
/* 					{%endfor%}*/
/* 				</td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>*/
/* 			<center>*/
/* 				{%if contracts[employee.id] is defined and (contracts[employee.id]['nc']>0 or contracts[employee.id]['ng']>0)%}*/
/* 					{%if contracts[employee.id]['nc']>0%}*/
/* 						{{ contracts[employee.id]['nc'] }}C*/
/* 					{%endif%}*/
/* 					{%if contracts[employee.id]['ng']>0%}*/
/* 						{{ contracts[employee.id]['ng'] }}G*/
/* 					{%endif%}*/
/* 				{%else%}---{%endif%}*/
/* 			</center>*/
/* 				</td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>{{ employee.status|trans([],'BoAdminBundle') }}</td>*/
/*                 <td class="list-action {%if employee.active==false%}ping-color{%elseif employee.available==false%}enquiry_processed{%endif%}"  width="126px" nowrap>*/
/*                     <a href="{{ path('employee_show', { 'id': employee.id }) }}">*/
/* 						{{'action.show'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/* 					{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].edit==1%}*/
/* 						<a href="{{ path('employee_edit', { 'id': employee.id }) }}">*/
/* 							{{'action.edit'|trans([],'BoAdminBundle')}}*/
/* 						</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
