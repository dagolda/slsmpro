<?php

/* BoAdminBundle:Local:schedulegroup.html.twig */
class __TwigTemplate_e50dbd99de8da23024e87f01fe06606f54739cf7cc9089ca7ccda97e445c4e1b extends Twig_Template
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
        $__internal_b4ce8b1cbfe895b44e2031b6944fb03f01f5eb29f5b7f15ffffff8553d2a469d = $this->env->getExtension("native_profiler");
        $__internal_b4ce8b1cbfe895b44e2031b6944fb03f01f5eb29f5b7f15ffffff8553d2a469d->enter($__internal_b4ce8b1cbfe895b44e2031b6944fb03f01f5eb29f5b7f15ffffff8553d2a469d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:schedulegroup.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daysoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "\t\t\t\t";
            if ((((($this->getAttribute($context["group"], "status", array()) == 1) || ($this->getAttribute($context["group"], "status", array()) == 2)) && ((($this->getAttribute($context["group"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["group"], "enddate", array()))) || ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) && $this->getAttribute((isset($context["gtrainings"]) ? $context["gtrainings"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true))) {
                // line 17
                echo "\t\t\t\t\t";
                $context["atrainings"] = $this->getAttribute((isset($context["gtrainings"]) ? $context["gtrainings"] : $this->getContext($context, "gtrainings")), $this->getAttribute($context["group"], "id", array()), array(), "array");
                // line 18
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["atrainings"]) ? $context["atrainings"] : $this->getContext($context, "atrainings")));
                foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
                    // line 19
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"sty_label\">
\t\t\t\t\t\t\t\t";
                    // line 24
                    if (((((($this->getAttribute($context["training"], "monday", array()) == true) && ($this->getAttribute($context["training"], "tuesday", array()) == true)) && ($this->getAttribute($context["training"], "wednesday", array()) == true)) && ($this->getAttribute($context["training"], "thursday", array()) == true)) && ($this->getAttribute($context["training"], "friday", array()) == true))) {
                        // line 25
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "monday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "tuesday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "wednesday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 30
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "thursday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "friday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                            echo " ";
                        }
                        // line 32
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startam", array()), "H:i"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endam", array()), "H:i"), "html", null, true);
                    echo "</td>\t
\t\t\t\t\t\t\t<td>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startpm", array()), "H:i"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endpm", array()), "H:i"), "html", null, true);
                    echo "</td>\t
\t\t\t\t\t\t\t<td>";
                    // line 38
                    if ($this->getAttribute($context["training"], "hourperday", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "hourperday", array()), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>\t\t\t\t
\t\t\t\t\t\t\t<td>";
                    // line 39
                    if ($this->getAttribute($context["training"], "hourperweek", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "hourperweek", array()), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t\t\t";
            }
            // line 43
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t
        </tbody>
    </table>
";
        
        $__internal_b4ce8b1cbfe895b44e2031b6944fb03f01f5eb29f5b7f15ffffff8553d2a469d->leave($__internal_b4ce8b1cbfe895b44e2031b6944fb03f01f5eb29f5b7f15ffffff8553d2a469d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:schedulegroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 47,  180 => 45,  177 => 44,  172 => 43,  169 => 42,  156 => 39,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  129 => 33,  126 => 32,  120 => 31,  114 => 30,  108 => 29,  102 => 28,  96 => 27,  90 => 25,  88 => 24,  82 => 21,  78 => 19,  73 => 18,  70 => 17,  67 => 16,  62 => 15,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.daysoftraining'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for group in groups%}*/
/* 				{%if (group.status==1 or group.status==2) and ((group.startdate<=now and now<=group.enddate) or group.startdate>=now) and gtrainings[group.id] is defined %}*/
/* 					{%set atrainings=gtrainings[group.id]%}*/
/* 					{% for training in atrainings%}*/
/* 						<tr>*/
/* 							<td>*/
/* 								{{ group.name }}							*/
/* 							</td>*/
/* 							<td class="sty_label">*/
/* 								{%if training.monday==true and training.tuesday==true and training.wednesday==true and training.thursday==true and training.friday==true%}*/
/* 									{{'label.frommonday.tofriday'|trans([],'BoAdminBundle')}}*/
/* 								{%else%}*/
/* 									{%if training.monday==true%}{{'label.monday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.tuesday==true%}{{'label.tuesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.wednesday==true%}{{'label.wednesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.thursday==true%}{{'label.thursday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.friday==true%}{{'label.friday'|trans([],'BoAdminBundle')}} {%endif%}*/
/* 								{%endif%}*/
/* 							</td>*/
/* 							<td>{{ training.startam|date('H:i') }}</td>*/
/* 							<td>{{ training.endam|date('H:i') }}</td>	*/
/* 							<td>{{ training.startpm|date('H:i') }}</td>*/
/* 							<td>{{ training.endpm|date('H:i') }}</td>	*/
/* 							<td>{%if training.hourperday%}{{ training.hourperday }}{%else%}---{%endif%}</td>				*/
/* 							<td>{%if training.hourperweek%}{{ training.hourperweek }}{%else%}---{%endif%}</td>				*/
/* 						</tr>*/
/* 					{%endfor%}*/
/* 				{%endif%}*/
/* 			{%else%}*/
/* 				<tr>*/
/* 					<td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td>*/
/* 				</tr>*/
/* 			{%endfor%}				*/
/*         </tbody>*/
/*     </table>*/
/* */
