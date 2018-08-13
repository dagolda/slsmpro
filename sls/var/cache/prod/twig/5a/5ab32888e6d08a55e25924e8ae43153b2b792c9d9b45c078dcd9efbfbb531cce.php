<?php

/* BoAdminBundle:Contracts:notifforrevision.html.twig */
class __TwigTemplate_84b3524c4338a12ed50b990d1d16207132c9aaab2540acf54a3e1c54ef1c5352 extends Twig_Template
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
        $__internal_04881ae64995c7e388887b8e10c0464be33586e40fc8f7eab09ed7cc4fe38add = $this->env->getExtension("native_profiler");
        $__internal_04881ae64995c7e388887b8e10c0464be33586e40fc8f7eab09ed7cc4fe38add->enter($__internal_04881ae64995c7e388887b8e10c0464be33586e40fc8f7eab09ed7cc4fe38add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:notifforrevision.html.twig"));

        // line 1
        if (array_key_exists("cc", $context)) {
            // line 2
            echo "\t<p>Bonjour / Hello,</p>
";
        } elseif ($this->getAttribute(        // line 3
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) {
            // line 4
            echo "\t<p>Bonjour / Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()), "firstname", array()), "html", null, true);
            echo ",</p>
";
        }
        // line 6
        echo "<p>
\t";
        // line 7
        if (((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")) != null)) {
            // line 8
            echo "\t\tLe contrat de ";
            echo twig_escape_filter($this->env, (isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "html", null, true);
            echo " a été révisé :
\t";
        } elseif ($this->getAttribute(        // line 9
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) {
            // line 10
            echo "\t\tLe contrat ci-dessous a été révisé :
\t";
        }
        // line 12
        echo "</p>
<p>
\t<div><u><b>Contract</b></u></div>
\t";
        // line 15
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array())) {
            // line 16
            echo "\t\t<div><b>Langue / Language </b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 18
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array())) {
            // line 19
            echo "\t\t<div><b>Date de D&#233;but / Start Date</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 21
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array())) {
            // line 22
            echo "\t\t<div><b>Date de Fin / End Date</b>:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 24
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber", array())) {
            // line 25
            echo "\t\t<div><b>Nombre d'heures / Number of hours</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "totalhours", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 27
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array())) {
            // line 28
            echo "\t\t<div><b>Horaire / Schedule</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 30
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array())) {
            // line 31
            echo "\t\t<div><b>Niveau vis&#233; / Target Level</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 33
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) != null))) {
            // line 34
            echo "\t\t<div><b>Groupe / Group</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "name", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 36
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array())) == 1))) {
            // line 37
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 38
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
            // line 40
            echo "\t";
        }
        // line 41
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array())) {
            // line 42
            echo "\t\t<div><b>Lieu / Address</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array()), "html", null, true);
            echo "</div>
\t";
        } elseif ((($this->getAttribute(        // line 43
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()))) {
            // line 44
            echo "\t\t<div><b>Lieu / Address</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()), "address", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 46
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array())) {
            // line 47
            echo "\t\t<div><b>Contract Number</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 49
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) {
            // line 50
            echo "\t\t<div><b>Salle de classe</b>: ";
            if (array_key_exists("room", $context)) {
                echo twig_escape_filter($this->env, (isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "html", null, true);
            }
            echo "</div>
\t";
        }
        // line 52
        echo "</p>
";
        // line 53
        if (((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")) != null)) {
            // line 54
            echo "\t<p>
\t\t<div><u><b>Revision</b></u></div>
\t\t";
            // line 56
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "amendment", array())) {
                // line 57
                echo "\t\t\t<div><b>Amendement / Amendment </b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "amendment", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 59
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "authorizeddate", array())) {
                // line 60
                echo "\t\t\t<div><b>Autorisation / Authorisation</b>: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "authorizeddate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 62
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "ratedate", array())) {
                // line 63
                echo "\t\t\t<div><b>Date du tarif / Rate date</b>:";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "ratedate", array()), "d-m-Y"), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 65
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hourlyrate", array())) {
                // line 66
                echo "\t\t\t<div><b>Tarif horaire / Hourly Rate</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hourlyrate", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 68
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hoursbefore", array())) {
                // line 69
                echo "\t\t\t<div><b>Heures avant / Hours before</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hoursbefore", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 71
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hour", array())) {
                // line 72
                echo "\t\t\t<div><b>Nombre d'heure / Number of hours</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hour", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 74
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hourafter", array())) {
                // line 75
                echo "\t\t\t<div><b>Heures after / Hours after</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "hourafter", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 77
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "costbefore", array())) {
                // line 78
                echo "\t\t\t<div><b>Coût avant / Cost before</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "costbefore", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 80
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "total", array())) {
                // line 81
                echo "\t\t\t<div><b>Coût / Cost</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "costbefore", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 83
            echo "\t\t";
            if ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "costafter", array())) {
                // line 84
                echo "\t\t\t<div><b>Coût après / Cost after</b>:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "costafter", array()), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 86
            echo "\t</p>
";
        }
        // line 88
        echo "<p>
\tSLS MANAGER for 
\tCLIC OTTAWA-GATINEAU
</p>
";
        
        $__internal_04881ae64995c7e388887b8e10c0464be33586e40fc8f7eab09ed7cc4fe38add->leave($__internal_04881ae64995c7e388887b8e10c0464be33586e40fc8f7eab09ed7cc4fe38add_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:notifforrevision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 88,  274 => 86,  268 => 84,  265 => 83,  259 => 81,  256 => 80,  250 => 78,  247 => 77,  241 => 75,  238 => 74,  232 => 72,  229 => 71,  223 => 69,  220 => 68,  214 => 66,  211 => 65,  205 => 63,  202 => 62,  196 => 60,  193 => 59,  187 => 57,  185 => 56,  181 => 54,  179 => 53,  176 => 52,  168 => 50,  165 => 49,  159 => 47,  156 => 46,  150 => 44,  148 => 43,  143 => 42,  140 => 41,  137 => 40,  126 => 38,  121 => 37,  118 => 36,  112 => 34,  109 => 33,  103 => 31,  100 => 30,  94 => 28,  91 => 27,  85 => 25,  82 => 24,  76 => 22,  73 => 21,  67 => 19,  64 => 18,  58 => 16,  56 => 15,  51 => 12,  47 => 10,  45 => 9,  40 => 8,  38 => 7,  35 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {%if cc is defined%}*/
/* 	<p>Bonjour / Hello,</p>*/
/* {%elseif contract.advisor%}*/
/* 	<p>Bonjour / Hello {{contract.advisor.firstname}},</p>*/
/* {%endif%}*/
/* <p>*/
/* 	{%if student!=null%}*/
/* 		Le contrat de {{student}} a été révisé :*/
/* 	{%elseif contract.advisor%}*/
/* 		Le contrat ci-dessous a été révisé :*/
/* 	{%endif%}*/
/* </p>*/
/* <p>*/
/* 	<div><u><b>Contract</b></u></div>*/
/* 	{%if contract.language%}*/
/* 		<div><b>Langue / Language </b>: {{contract.language}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.startdate%}*/
/* 		<div><b>Date de D&#233;but / Start Date</b>: {{contract.startdate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.enddate%}*/
/* 		<div><b>Date de Fin / End Date</b>:{{contract.enddate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.hoursnumber%}*/
/* 		<div><b>Nombre d'heures / Number of hours</b>:{{contract.totalhours}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.schedule%}*/
/* 		<div><b>Horaire / Schedule</b>:{{contract.schedule}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.targetlevel%}*/
/* 		<div><b>Niveau vis&#233; / Target Level</b>:{{contract.targetlevel}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.group and contract.group!=null%}*/
/* 		<div><b>Groupe / Group</b>: {{contract.group.name}}</div>*/
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
/* 	{%if contract.contractnumber%}*/
/* 		<div><b>Contract Number</b>:{{contract.contractnumber}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.location=="Campus"%}*/
/* 		<div><b>Salle de classe</b>: {%if room is defined%}{{room}}{%endif%}</div>*/
/* 	{%endif%}*/
/* </p>*/
/* {%if revision!=null%}*/
/* 	<p>*/
/* 		<div><u><b>Revision</b></u></div>*/
/* 		{%if revision.amendment%}*/
/* 			<div><b>Amendement / Amendment </b>: {{revision.amendment}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.authorizeddate%}*/
/* 			<div><b>Autorisation / Authorisation</b>: {{revision.authorizeddate|date("d-m-Y")}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.ratedate%}*/
/* 			<div><b>Date du tarif / Rate date</b>:{{revision.ratedate|date("d-m-Y")}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.hourlyrate%}*/
/* 			<div><b>Tarif horaire / Hourly Rate</b>:{{revision.hourlyrate}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.hoursbefore%}*/
/* 			<div><b>Heures avant / Hours before</b>:{{revision.hoursbefore}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.hour%}*/
/* 			<div><b>Nombre d'heure / Number of hours</b>:{{revision.hour}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.hourafter%}*/
/* 			<div><b>Heures after / Hours after</b>:{{revision.hourafter}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.costbefore%}*/
/* 			<div><b>Coût avant / Cost before</b>:{{revision.costbefore}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.total%}*/
/* 			<div><b>Coût / Cost</b>:{{revision.costbefore}}</div>*/
/* 		{%endif%}*/
/* 		{%if revision.costafter%}*/
/* 			<div><b>Coût après / Cost after</b>:{{revision.costafter}}</div>*/
/* 		{%endif%}*/
/* 	</p>*/
/* {%endif%}*/
/* <p>*/
/* 	SLS MANAGER for */
/* 	CLIC OTTAWA-GATINEAU*/
/* </p>*/
/* */
