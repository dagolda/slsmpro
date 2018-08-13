<?php

/* BoAdminBundle:Contracts:confirmation.html.twig */
class __TwigTemplate_e9b0b368d2788703fc2688f8bf32b9210816f2a1c57ea547c419f6d392a08ae8 extends Twig_Template
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
        $__internal_d1b739051ca4ba269a1ca60166b38f55f319bb6fbb3af09d0578482b5c3233ef = $this->env->getExtension("native_profiler");
        $__internal_d1b739051ca4ba269a1ca60166b38f55f319bb6fbb3af09d0578482b5c3233ef->enter($__internal_d1b739051ca4ba269a1ca60166b38f55f319bb6fbb3af09d0578482b5c3233ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:confirmation.html.twig"));

        // line 1
        echo "<p>Bonjour / Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo ",</p>
";
        // line 2
        if (((isset($context["mailhead"]) ? $context["mailhead"] : $this->getContext($context, "mailhead")) != null)) {
            // line 3
            echo "\t<p>
\t";
            // line 4
            echo (isset($context["mailhead"]) ? $context["mailhead"] : $this->getContext($context, "mailhead"));
            echo "
\t</p>
";
        }
        // line 7
        echo "<p>
\t";
        // line 8
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array())) {
            // line 9
            echo "\t\t<div><b>Langue / Language </b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 11
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array())) {
            // line 12
            echo "\t\t<div><b>Date de D&#233;but / Start Date</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 14
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array())) {
            // line 15
            echo "\t\t<div><b>Date de Fin / End Date</b>:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 17
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber", array())) {
            // line 18
            echo "\t\t<div><b>Nombre d'heures / Number of hours</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "totalhours", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 20
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array())) {
            // line 21
            echo "\t\t<div><b>Horaire / Schedule</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 23
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()) && ($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()), "reference", array()) == "Non-NMSO"))) {
            // line 24
            echo "\t\t<div><b>Type de contrat  / Contract type</b>:Contrat de service / Service contract</div>
\t";
        } elseif ((($this->getAttribute(        // line 25
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "workfields", array())) && ((($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "workfields", array()), "wfname", array()) == "Field 1") || ($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "workfields", array()), "wfname", array()) == "Field 7")) || ($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "workfields", array()), "wfname", array()) == "Field 8")))) {
            // line 26
            echo "\t\t<div><b>Type de contrat  / Contract type</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()), "reference", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "workfields", array()), "wfname", array()), "html", null, true);
            echo "</div>\t\t
\t";
        }
        // line 28
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "step", array())) {
            // line 29
            echo "\t\t<div><b>Etape / Step</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "step", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 31
        echo "\t";
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array())) {
            // line 32
            echo "\t\t<div><b>Niveau vis&#233; / Target Level</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 34
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()) != null))) {
            // line 35
            echo "\t\t<div><b>Conseiller p&#233;dagogique / Pedagogical Advisor</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()), "name", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 37
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array())) {
            // line 38
            echo "\t\t<div><b>Lieu / Address</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array()), "html", null, true);
            echo "</div>
\t";
        } elseif ((($this->getAttribute(        // line 39
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()))) {
            // line 40
            echo "\t\t<div><b>Lieu / Address</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()), "address", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 42
        echo "\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array())) {
            // line 43
            echo "\t\t<div><b>Contract Number</b>:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 45
        echo "\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()) == "Campus")) {
            // line 46
            echo "\t\t<div><b>Salle de classe</b>: ";
            if (array_key_exists("room", $context)) {
                echo twig_escape_filter($this->env, (isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "html", null, true);
            }
            echo "</div>
\t\t";
            // line 47
            echo (isset($context["mailroom"]) ? $context["mailroom"] : $this->getContext($context, "mailroom"));
            echo "
\t";
        }
        // line 49
        echo "</p>
";
        // line 50
        if (((isset($context["mailfooter"]) ? $context["mailfooter"] : $this->getContext($context, "mailfooter")) != null)) {
            // line 51
            echo "\t<p>
\t";
            // line 52
            echo (isset($context["mailfooter"]) ? $context["mailfooter"] : $this->getContext($context, "mailfooter"));
            echo "
\t</p>
";
        }
        
        $__internal_d1b739051ca4ba269a1ca60166b38f55f319bb6fbb3af09d0578482b5c3233ef->leave($__internal_d1b739051ca4ba269a1ca60166b38f55f319bb6fbb3af09d0578482b5c3233ef_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 52,  177 => 51,  175 => 50,  172 => 49,  167 => 47,  160 => 46,  157 => 45,  151 => 43,  148 => 42,  142 => 40,  140 => 39,  135 => 38,  132 => 37,  124 => 35,  121 => 34,  115 => 32,  112 => 31,  106 => 29,  103 => 28,  95 => 26,  93 => 25,  90 => 24,  87 => 23,  81 => 21,  78 => 20,  72 => 18,  69 => 17,  63 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  34 => 4,  31 => 3,  29 => 2,  22 => 1,);
    }
}
/* <p>Bonjour / Hello {{student.firstname}} {{student.name}},</p>*/
/* {%if mailhead!=null%}*/
/* 	<p>*/
/* 	{{mailhead|raw}}*/
/* 	</p>*/
/* {%endif%}*/
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
/* 	{%if contract.typecontract and contract.typecontract.reference=="Non-NMSO"%}*/
/* 		<div><b>Type de contrat  / Contract type</b>:Contrat de service / Service contract</div>*/
/* 	{%elseif  contract.typecontract and contract.workfields and (contract.workfields.wfname=="Field 1" or contract.workfields.wfname=="Field 7" or contract.workfields.wfname=="Field 8")%}*/
/* 		<div><b>Type de contrat  / Contract type</b>:{{contract.typecontract.reference}} {{contract.workfields.wfname}}</div>		*/
/* 	{%endif%}*/
/* 	{%if contract.step%}*/
/* 		<div><b>Etape / Step</b>:{{contract.step}}</div>*/
/* 	{%endif%}*/
/* 	{%if student.targetlevel%}*/
/* 		<div><b>Niveau vis&#233; / Target Level</b>:{{student.targetlevel}}</div>*/
/* 	{%endif%}*/
/* 	{%if contract.advisor and contract.advisor!=null%}*/
/* 		<div><b>Conseiller p&#233;dagogique / Pedagogical Advisor</b>: {{contract.advisor.firstname}} {{contract.advisor.name}}</div>*/
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
/* 		{{mailroom|raw}}*/
/* 	{%endif%}*/
/* </p>*/
/* {%if mailfooter!=null%}*/
/* 	<p>*/
/* 	{{mailfooter|raw}}*/
/* 	</p>*/
/* {%endif%}*/
/* */
