<?php

/* BoAdminBundle:Agenda:notification.html.twig */
class __TwigTemplate_0f1467418b7ece3eabfe407fbfad4b702e39ecc20cac3fd1512236e2b86db38a extends Twig_Template
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
        $__internal_005d811edc0ae34d40d690dfa0283861583ba2f59c4543e62d7503aa5edf2431 = $this->env->getExtension("native_profiler");
        $__internal_005d811edc0ae34d40d690dfa0283861583ba2f59c4543e62d7503aa5edf2431->enter($__internal_005d811edc0ae34d40d690dfa0283861583ba2f59c4543e62d7503aa5edf2431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:notification.html.twig"));

        // line 1
        if (array_key_exists("cc", $context)) {
            // line 2
            echo "\t<p>Bonjour / Hello,</p>
";
        } elseif (((        // line 3
(isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")) && $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contracts", array())) && $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contracts", array()), "advisor", array()))) {
            // line 4
            echo "\t<p>Bonjour / Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contracts", array()), "advisor", array()), "firstname", array()), "html", null, true);
            echo ",</p>
";
        } elseif (((        // line 5
(isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")) && $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "group", array())) && $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "group", array()), "advisor", array()))) {
            // line 6
            echo "\t<p>Bonjour / Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "group", array()), "advisor", array()), "firstname", array()), "html", null, true);
            echo ",</p>
";
        }
        // line 8
        echo "<p>
\t";
        // line 9
        if (((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")) && $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "employee", array()))) {
            // line 10
            echo "\t\tL'agenda du professeur ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "employee", array()), "name", array()), "html", null, true);
            echo " a été modifi&#233; par ";
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
            echo ": Ajout d'horaires.
\t";
        }
        // line 12
        echo "</p>
<p>
";
        // line 14
        if (((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")) && $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contracts", array()))) {
            // line 15
            echo "\t";
            $context["schedule"] = (isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda"));
            // line 16
            echo "\t";
            $context["contract"] = $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contracts", array());
            // line 17
            echo "\t<div><u><b>Contrat/Contract:</b></u></div>
\t<div><b>Id / Numero </b>: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "html", null, true);
            echo "</div>
\t";
            // line 19
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array())) {
                // line 20
                echo "\t\t<div><b>Contract Number</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
                echo "</div>
\t";
            }
            // line 22
            echo "\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array())) {
                // line 23
                echo "\t\t<div><b>Langue / Language </b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array()), "html", null, true);
                echo "</div>
\t";
            }
            // line 25
            echo "\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array())) {
                // line 26
                echo "\t\t<div><b>Date de D&#233;but / Start Date</b>: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t";
            }
            // line 28
            echo "\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array())) {
                // line 29
                echo "\t\t<div><b>Date de Fin / End Date</b>:";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t";
            }
            // line 31
            echo "\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array())) {
                // line 32
                echo "\t\t<div><b>Horaire / Schedule</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array()), "html", null, true);
                echo "</div>
\t";
            }
            // line 34
            echo "\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array())) {
                // line 35
                echo "\t\t<div><b>Niveau vis&#233; / Target Level</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array()), "html", null, true);
                echo "</div>
\t";
            }
            // line 37
            echo "\t";
            if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array())) == 1))) {
                // line 38
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 39
                    echo "\t\t\t<div><b>Apprenant / Student</b>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t";
            }
            // line 42
            echo "\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array())) {
                // line 43
                echo "\t\t<div><b>Lieu / Address</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array()), "html", null, true);
                echo "</div>
\t";
            } elseif ((($this->getAttribute(            // line 44
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()))) {
                // line 45
                echo "\t\t<div><b>Lieu / Address</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()), "address", array()), "html", null, true);
                echo "</div>
\t";
            }
            // line 47
            echo "\t";
            if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) {
                // line 48
                echo "\t\t<div><b>Salle de classe</b>: ";
                if (array_key_exists("room", $context)) {
                    echo twig_escape_filter($this->env, (isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "html", null, true);
                }
                echo "</div>
\t";
            }
        } elseif ((        // line 50
(isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")) && $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "group", array()))) {
            // line 51
            echo "\t";
            $context["group"] = $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "group", array());
            // line 52
            echo "\t<div><u><b>Le groupe/the group:</b></u></div>
\t<div><b>Id / Numero</b>: ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
            echo "</div>
\t<div><b>Nom du groupe / Group name</b>: ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name", array()), "html", null, true);
            echo "</div>
\t";
            // line 55
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "startdate", array())) {
                // line 56
                echo "\t\t<div><b>Date de D&#233;but / Start Date</b>: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "startdate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t";
            }
            // line 58
            echo "\t";
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "enddate", array())) {
                // line 59
                echo "\t\t<div><b>Date de Fin / End Date</b>:";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "enddate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t";
            }
            // line 61
            echo "\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array())) {
                // line 62
                echo "\t\t<div><b>Niveau vis&#233; / Target Level</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array()), "html", null, true);
                echo "</div>
\t";
            }
        }
        // line 65
        echo "</p>
";
        // line 66
        if ((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda"))) {
            // line 67
            echo "\t<p>
\t\t<div><u><b>Horaire/Schedule:</b></u></div>
\t\t";
            // line 69
            if ($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startdate", array())) {
                // line 70
                echo "\t\t\t<div><b>Date de D&#233;but / Start Date</b>: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startdate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 72
            echo "\t\t";
            if ($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "enddate", array())) {
                // line 73
                echo "\t\t\t<div><b>Date de Fin / End Date</b>:";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "enddate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 75
            echo "\t\t";
            if ($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "hourperday", array())) {
                // line 76
                echo "\t\t\t<div><b>Nombre d'heures / hours</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "hourperday", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 78
            echo "\t\t<div><b>Jours / days</b>:";
            $this->loadTemplate("BoAdminBundle:Contracts:days.html.twig", "BoAdminBundle:Agenda:notification.html.twig", 78)->display($context);
            echo "</div>
\t\t";
            // line 79
            if (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startam", array()), "H:i") != "00:00") && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startam", array()), "H:i") != "00:00"))) {
                // line 80
                echo "\t\t\t<div><b>Matin / A.M.</b>: de/from ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startam", array()), "H:i"), "html", null, true);
                echo " &#224;/to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "endam", array()), "H:i"), "html", null, true);
                echo " </div>
\t\t";
            }
            // line 82
            echo "\t\t";
            if (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startpm", array()), "H:i") != "00:00") && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startpm", array()), "H:i") != "00:00"))) {
                // line 83
                echo "\t\t\t<div><b>Apr&#232; / P.M.</b>: de/from ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "startpm", array()), "H:i"), "html", null, true);
                echo " &#224;/to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "endpm", array()), "H:i"), "html", null, true);
                echo " </div>
\t\t";
            }
            // line 85
            echo "\t</p>
";
        }
        // line 87
        echo "<p>
\tSLS MANAGER for 
\tCLIC OTTAWA-GATINEAU
</p>
";
        
        $__internal_005d811edc0ae34d40d690dfa0283861583ba2f59c4543e62d7503aa5edf2431->leave($__internal_005d811edc0ae34d40d690dfa0283861583ba2f59c4543e62d7503aa5edf2431_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 87,  282 => 85,  274 => 83,  271 => 82,  263 => 80,  261 => 79,  256 => 78,  250 => 76,  247 => 75,  241 => 73,  238 => 72,  232 => 70,  230 => 69,  226 => 67,  224 => 66,  221 => 65,  214 => 62,  211 => 61,  205 => 59,  202 => 58,  196 => 56,  194 => 55,  190 => 54,  186 => 53,  183 => 52,  180 => 51,  178 => 50,  170 => 48,  167 => 47,  161 => 45,  159 => 44,  154 => 43,  151 => 42,  148 => 41,  137 => 39,  132 => 38,  129 => 37,  123 => 35,  120 => 34,  114 => 32,  111 => 31,  105 => 29,  102 => 28,  96 => 26,  93 => 25,  87 => 23,  84 => 22,  78 => 20,  76 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  61 => 14,  57 => 12,  47 => 10,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {%if cc is defined%}*/
/* 	<p>Bonjour / Hello,</p>*/
/* {%elseif agenda and agenda.contracts and agenda.contracts.advisor%}*/
/* 	<p>Bonjour / Hello {{agenda.contracts.advisor.firstname}},</p>*/
/* {%elseif agenda and agenda.group and agenda.group.advisor%}*/
/* 	<p>Bonjour / Hello {{agenda.group.advisor.firstname}},</p>*/
/* {%endif%}*/
/* <p>*/
/* 	{%if agenda and agenda.employee%}*/
/* 		L'agenda du professeur {{agenda.employee.firstname}} {{agenda.employee.name}} a été modifi&#233; par {{user}}: Ajout d'horaires.*/
/* 	{%endif%}*/
/* </p>*/
/* <p>*/
/* {%if agenda and agenda.contracts%}*/
/* 	{%set schedule=agenda%}*/
/* 	{%set contract=agenda.contracts%}*/
/* 	<div><u><b>Contrat/Contract:</b></u></div>*/
/* 	<div><b>Id / Numero </b>: {{contract.id}}</div>*/
/* 	{%if contract.contractnumber%}*/
/* 		<div><b>Contract Number</b>:{{contract.contractnumber}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.language%}*/
/* 		<div><b>Langue / Language </b>: {{contract.language}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.startdate%}*/
/* 		<div><b>Date de D&#233;but / Start Date</b>: {{contract.startdate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.enddate%}*/
/* 		<div><b>Date de Fin / End Date</b>:{{contract.enddate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.schedule%}*/
/* 		<div><b>Horaire / Schedule</b>:{{contract.schedule}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.targetlevel%}*/
/* 		<div><b>Niveau vis&#233; / Target Level</b>:{{contract.targetlevel}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.students and contract.students|length==1%}*/
/* 		{%for student in contract.students%}*/
/* 			<div><b>Apprenant / Student</b>: {{student.firstname}} {{student.name}}</div>*/
/* 		{%endfor%}*/
/* 	{%endif%}*/
/* 	{%if contract.adresse%}*/
/* 		<div><b>Lieu / Address</b>:{{contract.adresse}}</div>*/
/* 	{%elseif contract.location and contract.location=="Campus" and contract.campus%}*/
/* 		<div><b>Lieu / Address</b>:{{contract.campus.address}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.location=="Campus"%}*/
/* 		<div><b>Salle de classe</b>: {%if room is defined%}{{room}}{%endif%}</div>*/
/* 	{%endif%}*/
/* {%elseif agenda and agenda.group%}*/
/* 	{%set group=agenda.group%}*/
/* 	<div><u><b>Le groupe/the group:</b></u></div>*/
/* 	<div><b>Id / Numero</b>: {{group.id}}</div>*/
/* 	<div><b>Nom du groupe / Group name</b>: {{group.name}}</div>*/
/* 	{%if group.startdate%}*/
/* 		<div><b>Date de D&#233;but / Start Date</b>: {{group.startdate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if group.enddate%}*/
/* 		<div><b>Date de Fin / End Date</b>:{{group.enddate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.targetlevel%}*/
/* 		<div><b>Niveau vis&#233; / Target Level</b>:{{contract.targetlevel}}</div>*/
/* 	{%endif%}*/
/* {%endif%}*/
/* </p>*/
/* {%if agenda%}*/
/* 	<p>*/
/* 		<div><u><b>Horaire/Schedule:</b></u></div>*/
/* 		{%if agenda.startdate%}*/
/* 			<div><b>Date de D&#233;but / Start Date</b>: {{agenda.startdate|date("d-m-Y")}}</div>*/
/* 		{%endif%}*/
/* 		{%if agenda.enddate%}*/
/* 			<div><b>Date de Fin / End Date</b>:{{agenda.enddate|date("d-m-Y")}}</div>*/
/* 		{%endif%}*/
/* 		{%if agenda.hourperday%}*/
/* 			<div><b>Nombre d'heures / hours</b>:{{agenda.hourperday}}</div>*/
/* 		{%endif%}*/
/* 		<div><b>Jours / days</b>:{%include "BoAdminBundle:Contracts:days.html.twig"%}</div>*/
/* 		{%if agenda.startam|date('H:i')!="00:00" and agenda.startam|date('H:i')!="00:00"%}*/
/* 			<div><b>Matin / A.M.</b>: de/from {{agenda.startam|date('H:i')}} &#224;/to {{agenda.endam|date('H:i')}} </div>*/
/* 		{%endif%}*/
/* 		{%if agenda.startpm|date('H:i')!="00:00" and agenda.startpm|date('H:i')!="00:00"%}*/
/* 			<div><b>Apr&#232; / P.M.</b>: de/from {{agenda.startpm|date('H:i')}} &#224;/to {{agenda.endpm|date('H:i')}} </div>*/
/* 		{%endif%}*/
/* 	</p>*/
/* {%endif%}*/
/* <p>*/
/* 	SLS MANAGER for */
/* 	CLIC OTTAWA-GATINEAU*/
/* </p>*/
/* */
