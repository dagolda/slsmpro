<?php

/* BoAdminBundle:Employee:tbslliste.html.twig */
class __TwigTemplate_8033c02d1b90a9aefb8664200af82de58190153e1af9db5fb21b339272ebd085 extends Twig_Template
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
        $__internal_5033fa2969d09da3d23b7f710cdb1898cd537ca069d86d1787c1dde759837bf6 = $this->env->getExtension("native_profiler");
        $__internal_5033fa2969d09da3d23b7f710cdb1898cd537ca069d86d1787c1dde759837bf6->enter($__internal_5033fa2969d09da3d23b7f710cdb1898cd537ca069d86d1787c1dde759837bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:tbslliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"4%\"><!--input type=\"checkbox\" name=\"allselect\"  id=\"selectall\" value=\"\"/--></th>
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
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 17
            echo "\t\t\t";
            $context["c"] = 0;
            // line 18
            echo "\t\t\t";
            $context["g"] = 0;
            // line 19
            echo "\t\t\t";
            if (($this->getAttribute($context["employee"], "agenda", array()) && (twig_length_filter($this->env, $this->getAttribute($context["employee"], "agenda", array())) > 0))) {
                // line 20
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["employee"], "agenda", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
                    // line 21
                    echo "\t\t\t\t\t";
                    if (((((($this->getAttribute($context["agenda"], "status", array()) == 1) || ($this->getAttribute($context["agenda"], "status", array()) == 2)) && $this->getAttribute($context["agenda"], "contracts", array())) && (($this->getAttribute($this->getAttribute($context["agenda"], "contracts", array()), "status", array()) == 1) || ($this->getAttribute($this->getAttribute($context["agenda"], "contracts", array()), "status", array()) == 2))) && ((($this->getAttribute($this->getAttribute($context["agenda"], "contracts", array()), "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($this->getAttribute($context["agenda"], "contracts", array()), "enddate", array()))) || ($this->getAttribute($this->getAttribute($context["agenda"], "contracts", array()), "startdate", array()) > (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))))) {
                        // line 22
                        echo "\t\t\t\t\t\t";
                        $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
                        // line 23
                        echo "\t\t\t\t\t";
                    }
                    // line 24
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t";
            }
            // line 26
            echo "\t\t\t";
            if (($this->getAttribute($context["employee"], "group", array()) && (twig_length_filter($this->env, $this->getAttribute($context["employee"], "group", array())) > 0))) {
                // line 27
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["employee"], "group", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 28
                    echo "\t\t\t\t\t";
                    if (((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ((($this->getAttribute($context["group"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["group"], "enddate", array()))) || ($this->getAttribute($context["group"], "startdate", array()) > (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))))) {
                        // line 29
                        echo "\t\t\t\t\t\t";
                        $context["g"] = ((isset($context["g"]) ? $context["g"] : $this->getContext($context, "g")) + 1);
                        // line 30
                        echo "\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t";
            }
            // line 33
            echo "            <tr>
                <td ";
            // line 34
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo "><input type=\"checkbox\" name=\"chk_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\"  id=\"chk_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\"/></td>
                <td ";
            // line 35
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 36
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 37
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 38
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 39
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 40
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">
\t\t\t\t\t";
            // line 41
            $context["i"] = 0;
            // line 42
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["employee"], "typecontract", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 43
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "reference", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 44
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 45
                echo "\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($context["employee"], "typecontract", array())))) {
                    echo ", ";
                }
                // line 46
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t\t</td>
                <td ";
            // line 48
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">
\t\t\t\t\t<center>
\t\t\t\t\t\t";
            // line 50
            if (((array_key_exists("c", $context) && ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) > 0)) || (array_key_exists("g", $context) && ((isset($context["g"]) ? $context["g"] : $this->getContext($context, "g")) > 0)))) {
                // line 51
                echo "\t\t\t\t\t\t\t";
                if ((array_key_exists("c", $context) && ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) > 0))) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo "C
\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t";
                if ((array_key_exists("g", $context) && ((isset($context["g"]) ? $context["g"] : $this->getContext($context, "g")) > 0))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (isset($context["g"]) ? $context["g"] : $this->getContext($context, "g")), "html", null, true);
                    echo "G
\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t";
            } else {
                echo "---";
            }
            // line 58
            echo "\t\t\t\t\t</center>
\t\t\t\t</td>
                <td ";
            // line 60
            if (($this->getAttribute($context["employee"], "active", array()) == false)) {
                echo " class=\"ping-color\"";
            } elseif (($this->getAttribute($context["employee"], "available", array()) == false)) {
                echo " class=\"enquiry_processed\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["employee"], "status", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>
";
        
        $__internal_5033fa2969d09da3d23b7f710cdb1898cd537ca069d86d1787c1dde759837bf6->leave($__internal_5033fa2969d09da3d23b7f710cdb1898cd537ca069d86d1787c1dde759837bf6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:tbslliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 65,  281 => 63,  267 => 60,  263 => 58,  258 => 57,  252 => 55,  249 => 54,  243 => 52,  240 => 51,  238 => 50,  229 => 48,  226 => 47,  220 => 46,  215 => 45,  213 => 44,  208 => 43,  203 => 42,  201 => 41,  193 => 40,  183 => 39,  173 => 38,  163 => 37,  153 => 36,  143 => 35,  129 => 34,  126 => 33,  123 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  103 => 27,  100 => 26,  97 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  63 => 16,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%"><!--input type="checkbox" name="allselect"  id="selectall" value=""/--></th>*/
/*                 <th width="12%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.qualification'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="5%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employee in employees %}*/
/* 			{%set c=0%}*/
/* 			{%set g=0%}*/
/* 			{%if employee.agenda and employee.agenda|length>0%}*/
/* 				{% for agenda in employee.agenda %}*/
/* 					{%if (agenda.status==1 or agenda.status==2) and agenda.contracts and (agenda.contracts.status==1 or agenda.contracts.status==2) and ((agenda.contracts.startdate<=now and now<=agenda.contracts.enddate) or agenda.contracts.startdate>now)%}*/
/* 						{%set c=c+1%}*/
/* 					{%endif%}*/
/* 				{%endfor%}*/
/* 			{%endif%}*/
/* 			{%if employee.group and employee.group|length>0%}*/
/* 				{% for group in employee.group %}*/
/* 					{%if (group.status==1 or group.status==2) and ((group.startdate<=now and now<=group.enddate) or group.startdate>now)%}*/
/* 						{%set g=g+1%}*/
/* 					{%endif%}*/
/* 				{%endfor%}*/
/* 			{%endif%}*/
/*             <tr>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}><input type="checkbox" name="chk_{{employee.id}}"  id="chk_{{employee.id}}" value="{{employee.id}}"/></td>*/
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
/* 					<center>*/
/* 						{%if (c is defined and c>0) or (g is defined and g>0)%}*/
/* 							{%if c is defined and c>0%}*/
/* 								{{ c }}C*/
/* 							{%endif%}*/
/* 							{%if g is defined and g>0%}*/
/* 								{{ g }}G*/
/* 							{%endif%}*/
/* 						{%else%}---{%endif%}*/
/* 					</center>*/
/* 				</td>*/
/*                 <td {%if employee.active==false%} class="ping-color"{%elseif employee.available==false%} class="enquiry_processed"{%endif%}>{{ employee.status|trans([],'BoAdminBundle') }}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
