<?php

/* BoHomeBundle:Contracts:group.html.twig */
class __TwigTemplate_ea7a7506e17f34d797fe8b0a789f040c09ef214ef5fbfa2cb1c5bb5c845cd943 extends Twig_Template
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
        $__internal_7628ba3f40c134acdbd45f0dfb39ea9b5986322e4ed91e0db0154b1627c71247 = $this->env->getExtension("native_profiler");
        $__internal_7628ba3f40c134acdbd45f0dfb39ea9b5986322e4ed91e0db0154b1627c71247->enter($__internal_7628ba3f40c134acdbd45f0dfb39ea9b5986322e4ed91e0db0154b1627c71247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Contracts:group.html.twig"));

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
\t\t";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            echo "\t
\t\t\t<th>Actions</th>
\t\t";
        }
        // line 13
        echo "            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 17
            echo "\t\t\t\t";
            if (((($this->getAttribute($context["group"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["group"], "enddate", array()))) || ($this->getAttribute($context["group"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                // line 18
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td ";
                // line 19
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo "><a>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td ";
                // line 20
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                if (($this->getAttribute((isset($context["gcontracts"]) ? $context["gcontracts"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["gcontracts"]) ? $context["gcontracts"] : $this->getContext($context, "gcontracts")), 0, array(), "array"), "typecontract", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gcontracts"]) ? $context["gcontracts"] : $this->getContext($context, "gcontracts")), 0, array(), "array"), "typecontract", array()), "reference", array()), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t\t<td ";
                // line 21
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td ";
                // line 22
                if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                    echo " class=\"completed_contracts\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "targetlevel", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td ";
                // line 23
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
\t\t\t\t\t\t<td ";
                // line 24
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
\t\t\t\t\t";
                // line 25
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
                    echo "\t
\t\t\t\t\t\t<td class=\"list-action\"  width=\"126px\">
\t\t\t\t\t\t\t";
                    // line 27
                    if ( !$this->getAttribute((isset($context["existgroupabs"]) ? $context["existgroupabs"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t";
                        if (((((((isset($context["authorization"]) ? $context["authorization"] : $this->getContext($context, "authorization")) == 1) && ($this->getAttribute($context["group"], "status", array()) == 1)) || (($this->getAttribute($context["group"], "status", array()) == 1) &&  !$this->getAttribute((isset($context["etsg"]) ? $context["etsg"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true))) && (twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "D") != "Sat")) && (twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "D") != "Sun"))) {
                            echo " 
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 29
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_group", array("idgroup" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                            echo "\" ";
                            if (($this->getAttribute((isset($context["dtsbg"]) ? $context["dtsbg"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["dtsbg"]) ? $context["dtsbg"] : $this->getContext($context, "dtsbg")), $this->getAttribute($context["group"], "id", array()), array(), "array") == 0))) {
                                echo "class=\"disabled\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 31
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "\t\t\t\t<tr><td colspan=\"7\">No group found</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
";
        
        $__internal_7628ba3f40c134acdbd45f0dfb39ea9b5986322e4ed91e0db0154b1627c71247->leave($__internal_7628ba3f40c134acdbd45f0dfb39ea9b5986322e4ed91e0db0154b1627c71247_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Contracts:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 39,  172 => 37,  167 => 36,  163 => 34,  159 => 32,  156 => 31,  145 => 29,  140 => 28,  138 => 27,  133 => 25,  121 => 24,  109 => 23,  101 => 22,  93 => 21,  81 => 20,  73 => 19,  70 => 18,  67 => 17,  62 => 16,  57 => 13,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/* 		{%if app.session.get('dts') is defined and app.session.get('dts')==1%}	*/
/* 			<th>Actions</th>*/
/* 		{%endif%}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for group in groups %}*/
/* 				{%if (group.startdate<=now and now<=group.enddate) or group.startdate>=now%}*/
/* 					<tr>*/
/* 						<td {%if group.status==0%} class="completed_contracts"{%endif%}><a>{{ group.id }}</a></td>*/
/* 						<td {%if group.status==0%} class="completed_contracts"{%endif%}>{%if gcontracts[0] is defined and gcontracts[0].typecontract %}{{ gcontracts[0].typecontract.reference }}{%else%}---{%endif%}</td>*/
/* 						<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.name }}</td>*/
/* 						<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.targetlevel }}</td>*/
/* 						<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.startdate %}{{ group.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 						<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.enddate %}{{ group.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					{%if app.session.get('dts') is defined and app.session.get('dts')==1%}	*/
/* 						<td class="list-action"  width="126px">*/
/* 							{%if existgroupabs[group.id] is not defined%}*/
/* 								{%if ((authorization==1 and group.status==1) or (group.status==1 and etsg[group.id] is not defined)) and now|date("D")!="Sat" and now|date("D")!="Sun"%} */
/* 									<a href="{{ path('home_timesheet_group', { 'idgroup': group.id }) }}" {%if dtsbg[group.id] is defined and dtsbg[group.id]==0%}class="disabled"{%endif%}>{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 								{%endif%}*/
/* 							{%endif%}*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					</tr>*/
/* 				{%endif%}*/
/* 			{%else%}*/
/* 				<tr><td colspan="7">No group found</td></tr>*/
/* 			{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
