<?php

/* BoAdminBundle:Local:tbliste.html.twig */
class __TwigTemplate_dd011a22cee04cc9a576e7249e4521c8a1921a49747422050934a88a547aff71 extends Twig_Template
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
        $__internal_b97b0e41d3d703c33799f5aafca651e249d97cf305dd2cda639e790e839e7644 = $this->env->getExtension("native_profiler");
        $__internal_b97b0e41d3d703c33799f5aafca651e249d97cf305dd2cda639e790e839e7644->enter($__internal_b97b0e41d3d703c33799f5aafca651e249d97cf305dd2cda639e790e839e7644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"8%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dimension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.capacity", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">Max</th>
                <th width=\"12%\">Campus</th>
                <th width=\"12%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"110px\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locals"]) ? $context["locals"] : $this->getContext($context, "locals")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 18
            echo "            <tr>
                <td ";
            // line 19
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "reference", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 20
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "designation", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 21
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "dimension", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "capability", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "max", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 24
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "campus", array()), "designation", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">
\t\t\t\t\t<center>
\t\t\t\t\t\t";
            // line 27
            if (($this->getAttribute($context["local"], "group", array()) && (twig_length_filter($this->env, $this->getAttribute($context["local"], "group", array())) > 0))) {
                // line 28
                echo "\t\t\t\t\t\t\t";
                $context["i"] = 0;
                // line 29
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["local"], "group", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    if (((($context["group"] != null) && ($this->getAttribute($context["group"], "name", array()) != null)) && (((($this->getAttribute($context["group"], "status", array()) == 1) && ($this->getAttribute($context["group"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["group"], "enddate", array()))) || ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))))) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 32
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($context["local"], "group", array())))) {
                            echo ", ";
                        }
                        // line 34
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["local"], "contracts", array()) && (twig_length_filter($this->env, $this->getAttribute($context["local"], "contracts", array())) > 0))) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                $context["i"] = 0;
                // line 38
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["local"], "contracts", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 39
                    if ((((((((($this->getAttribute($context["c"], "status", array()) == 1) && ($this->getAttribute($context["c"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["c"], "enddate", array()))) && ($this->getAttribute($context["c"], "status", array()) == 1)) || ($this->getAttribute($context["c"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && $this->getAttribute($context["c"], "group", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($context["c"], "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute($context["c"], "group", array()), "name", array()) != null))) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "group", array()), "name", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 41
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($context["local"], "contracts", array())))) {
                            echo ", ";
                        }
                        // line 43
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t</center>
\t\t\t\t</td>
                <td ";
            // line 50
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">
\t\t\t\t\t";
            // line 51
            if (($this->getAttribute($context["local"], "contracts", array()) && (twig_length_filter($this->env, $this->getAttribute($context["local"], "contracts", array())) > 0))) {
                // line 52
                echo "\t\t\t\t\t";
                $context["i"] = 0;
                // line 53
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["local"], "contracts", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 54
                    if ((((((($this->getAttribute($context["c"], "status", array()) == 1) && ($this->getAttribute($context["c"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["c"], "enddate", array()))) || ($this->getAttribute($context["c"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && $this->getAttribute($context["c"], "students", array())) && (twig_length_filter($this->env, $this->getAttribute($context["c"], "students", array())) == 1))) {
                        // line 55
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["c"], "students", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                            // line 56
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "firstname", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 58
                        echo "\t\t\t\t\t\t\t\t";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 59
                        echo "\t\t\t\t\t\t\t\t";
                        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($context["local"], "contracts", array())))) {
                            echo ", ";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t</td>
                <td ";
            // line 64
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "class=\"ping-color\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "class=\"brown_3d_11\"";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "class=\"wax_3d_3\"";
            }
            echo ">";
            if ($this->getAttribute($context["local"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["local"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action ";
            // line 65
            if (($this->getAttribute($context["local"], "available", array()) == 0)) {
                echo "ping-color";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 1)) {
                echo "brown_3d_11";
            } elseif (($this->getAttribute($context["local"], "status", array()) == 2)) {
                echo "wax_3d_3";
            }
            echo "\" nowrap>
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_show", array("id" => $this->getAttribute($context["local"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 67
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "edit", array()) == 1))) {
                echo "\t
\t\t\t\t\t\t<a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_edit", array("id" => $this->getAttribute($context["local"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 70
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "\t\t\t<tr><td colspan=\"11\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>
";
        
        $__internal_b97b0e41d3d703c33799f5aafca651e249d97cf305dd2cda639e790e839e7644->leave($__internal_b97b0e41d3d703c33799f5aafca651e249d97cf305dd2cda639e790e839e7644_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 75,  342 => 73,  335 => 70,  328 => 68,  324 => 67,  320 => 66,  310 => 65,  296 => 64,  293 => 63,  290 => 62,  284 => 61,  281 => 60,  276 => 59,  273 => 58,  262 => 56,  257 => 55,  255 => 54,  248 => 53,  245 => 52,  243 => 51,  233 => 50,  229 => 48,  225 => 46,  222 => 45,  216 => 44,  213 => 43,  208 => 42,  206 => 41,  201 => 40,  199 => 39,  192 => 38,  189 => 37,  186 => 36,  180 => 35,  177 => 34,  172 => 33,  170 => 32,  165 => 31,  162 => 30,  157 => 29,  154 => 28,  152 => 27,  141 => 25,  129 => 24,  117 => 23,  105 => 22,  93 => 21,  81 => 20,  69 => 19,  66 => 18,  61 => 17,  53 => 12,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="8%">{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.dimension'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.capacity'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">Max</th>*/
/*                 <th width="12%">Campus</th>*/
/*                 <th width="12%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="110px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for local in locals %}*/
/*             <tr>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>{{ local.reference }}</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>{{ local.designation }}</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>{{ local.dimension }}</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>{{ local.capability }}</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>{{ local.max }}</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>{{ local.campus.designation }}</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>*/
/* 					<center>*/
/* 						{%if local.group and local.group|length>0%}*/
/* 							{%set i=0%}*/
/* 							{%for group in local.group%}*/
/* 								{%if group!=null and group.name!=null and ((group.status==1 and group.startdate<=now and now<=group.enddate) or group.startdate>=now)%}*/
/* 									{{ group.name }}*/
/* 									{%set i=i+1%}*/
/* 									{%if i<local.group|length%}, {%endif%}*/
/* 								{%endif%}*/
/* 							{%endfor%}*/
/* 						{%elseif local.contracts and local.contracts|length>0%}*/
/* 							{%set i=0%}*/
/* 							{%for c in local.contracts%}							*/
/* 								{%if ((c.status==1 and c.startdate<=now and now<=c.enddate and c.status==1) or c.startdate>=now) and c.group is defined and c.group.name is defined and c.group.name!=null%}*/
/* 										{{c.group.name}}*/
/* 									{%set i=i+1%}*/
/* 									{%if i<local.contracts|length%}, {%endif%}*/
/* 								{%endif%}*/
/* 							{%endfor%}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endif%}*/
/* 					</center>*/
/* 				</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>*/
/* 					{%if local.contracts and local.contracts|length>0%}*/
/* 					{%set i=0%}*/
/* 						{%for c in local.contracts%}							*/
/* 							{%if ((c.status==1 and c.startdate<=now and now<=c.enddate) or c.startdate>=now) and c.students and c.students|length==1%}*/
/* 								{%for s in c.students%}*/
/* 									{{ s.firstname }} {{ s.name }}*/
/* 								{%endfor%}*/
/* 								{%set i=i+1%}*/
/* 								{%if i<local.contracts|length%}, {%endif%}*/
/* 							{%endif%}*/
/* 						{%endfor%}*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if local.available==0%}class="ping-color"{%elseif local.status==1%}class="brown_3d_11"{%elseif local.status==2%}class="wax_3d_3"{%endif%}>{% if local.creationdate %}{{ local.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action {%if local.available==0%}ping-color{%elseif local.status==1%}brown_3d_11{%elseif local.status==2%}wax_3d_3{%endif%}" nowrap>*/
/*                     <a href="{{ path('local_show', { 'id': local.id }) }}">show</a>*/
/* 					{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].edit==1%}	*/
/* 						<a href="{{ path('local_edit', { 'id': local.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="11">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
