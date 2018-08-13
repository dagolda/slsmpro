<?php

/* BoAdminBundle:Contracts:notifnewcontracts.html.twig */
class __TwigTemplate_3c1ff348d5c32be73e17a8766258a813a1e452389397464c1f24b9425e92af2a extends Twig_Template
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
        $__internal_7dab7d8c43bb574c452c71a4db433f4b3ba6ad5571caebaaf4d5eb8861fcd8fc = $this->env->getExtension("native_profiler");
        $__internal_7dab7d8c43bb574c452c71a4db433f4b3ba6ad5571caebaaf4d5eb8861fcd8fc->enter($__internal_7dab7d8c43bb574c452c71a4db433f4b3ba6ad5571caebaaf4d5eb8861fcd8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:notifnewcontracts.html.twig"));

        // line 1
        echo "<p>Bonjour / Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()), "firstname", array()), "html", null, true);
        echo ",</p>
<p>
\tUn nouveau contrat vient d'être ajouter à la liste de votre supervision :
</p>
<p>
\t";
        // line 6
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array())) {
            // line 7
            echo "\t\t<div><b>Langue / Language </b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 9
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array())) {
            // line 10
            echo "\t\t<div><b>Date de D&#233;but / Start Date</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 12
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array())) {
            // line 13
            echo "\t\t<div><b>Date de Fin / End Date</b>:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 15
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber", array())) {
            // line 16
            echo "\t\t<div><b>Nombre d'heures / Number of hours</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "totalhours", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 18
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array())) {
            // line 19
            echo "\t\t<div><b>Horaire / Schedule</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 21
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array())) {
            // line 22
            echo "\t\t<div><b>Niveau vis&#233; / Target Level</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 24
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) != null))) {
            // line 25
            echo "\t\t<div><b>Groupe / Group</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "name", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 27
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array())) == 1))) {
            // line 28
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 29
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
            // line 31
            echo "\t";
        }
        // line 32
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array())) {
            // line 33
            echo "\t\t<div><b>Lieu / Address</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array()), "html", null, true);
            echo "</div>
\t";
        } elseif ((($this->getAttribute(        // line 34
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()))) {
            // line 35
            echo "\t\t<div><b>Lieu / Address</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()), "address", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 37
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array())) {
            // line 38
            echo "\t\t<div><b>Contract Number</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 40
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) {
            // line 41
            echo "\t\t<div><b>Salle de classe</b>: ";
            if (array_key_exists("room", $context)) {
                echo twig_escape_filter($this->env, (isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "html", null, true);
            }
            echo "</div>
\t";
        }
        // line 43
        echo "</p>
<p>
\tSLS MANAGER for CLIC
</p>
";
        
        $__internal_7dab7d8c43bb574c452c71a4db433f4b3ba6ad5571caebaaf4d5eb8861fcd8fc->leave($__internal_7dab7d8c43bb574c452c71a4db433f4b3ba6ad5571caebaaf4d5eb8861fcd8fc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:notifnewcontracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 43,  143 => 41,  140 => 40,  134 => 38,  131 => 37,  125 => 35,  123 => 34,  118 => 33,  115 => 32,  112 => 31,  101 => 29,  96 => 28,  93 => 27,  87 => 25,  84 => 24,  78 => 22,  75 => 21,  69 => 19,  66 => 18,  60 => 16,  57 => 15,  51 => 13,  48 => 12,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  22 => 1,);
    }
}
/* <p>Bonjour / Hello {{contract.advisor.firstname}},</p>*/
/* <p>*/
/* 	Un nouveau contrat vient d'être ajouter à la liste de votre supervision :*/
/* </p>*/
/* <p>*/
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
/* <p>*/
/* 	SLS MANAGER for CLIC*/
/* </p>*/
/* */
