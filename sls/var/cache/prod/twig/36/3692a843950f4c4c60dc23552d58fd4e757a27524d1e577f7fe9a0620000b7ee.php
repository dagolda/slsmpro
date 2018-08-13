<?php

/* BoHomeBundle:Absences:mail.html.twig */
class __TwigTemplate_7af4932b44f883458df35e59b72375ad1abd7588c2e6717d032addec78d2dec5 extends Twig_Template
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
        $__internal_ebff9570641cff7e9d940d56a211a3c19aebbdd60b6065a09b92564304381744 = $this->env->getExtension("native_profiler");
        $__internal_ebff9570641cff7e9d940d56a211a3c19aebbdd60b6065a09b92564304381744->enter($__internal_ebff9570641cff7e9d940d56a211a3c19aebbdd60b6065a09b92564304381744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:mail.html.twig"));

        // line 1
        echo "<p>Bonjour / Hello Cancel,</p>
<p>
\tThe teacher : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "employee", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "employee", array()), "name", array()), "html", null, true);
        echo " will be absent for ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()), "html", null, true);
        echo " day";
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()) > 1)) {
            echo "s";
        }
        echo " form ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array()), "d-m-Y"), "html", null, true);
        echo "<br/> Le professeur : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "employee", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "employee", array()), "name", array()), "html", null, true);
        echo " sera absent pour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()), "html", null, true);
        echo " jour";
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()) > 1)) {
            echo "s";
        }
        echo " à compter de la date : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array()), "d-m-Y"), "html", null, true);
        echo "
</p>
<p>
\t";
        // line 6
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "motif", array())) {
            // line 7
            echo "\t\t<div><b>Motif / Reason</b>: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "motif", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</div>
\t";
        }
        // line 9
        echo "\t";
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array())) {
            // line 10
            echo "\t\t<div><b>Date de D&#233;but / Start Date</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 12
        echo "\t";
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array())) {
            // line 13
            echo "\t\t<div><b>Date de Fin / End Date</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 15
        echo "\t";
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array())) {
            // line 16
            echo "\t\t<div><b>Matin ou après-midi / AM or PM</b>: ";
            if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array()) == "ALL")) {
                echo "Toute la journée";
            } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array()) == "AM")) {
                echo "Matin";
            } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array()) == "PM")) {
                echo "Après-midi";
            }
            echo "</div>
\t";
        }
        // line 18
        echo "\t";
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array())) {
            // line 19
            echo "\t\t<div><b>Nombre de jour / Number of days</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 21
        echo "\t";
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array())) {
            // line 22
            echo "\t\t<div><b>Message</b>:<br/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 24
        echo "</p>
";
        
        $__internal_ebff9570641cff7e9d940d56a211a3c19aebbdd60b6065a09b92564304381744->leave($__internal_ebff9570641cff7e9d940d56a211a3c19aebbdd60b6065a09b92564304381744_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  107 => 22,  104 => 21,  98 => 19,  95 => 18,  83 => 16,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  62 => 9,  56 => 7,  54 => 6,  26 => 3,  22 => 1,);
    }
}
/* <p>Bonjour / Hello Cancel,</p>*/
/* <p>*/
/* 	The teacher : {{absence.employee.firstname}} {{absence.employee.name}} will be absent for {{absence.numberday}} day{%if absence.numberday>1%}s{%endif%} form {{absence.startdate|date("d-m-Y")}}<br/> Le professeur : {{absence.employee.firstname}} {{absence.employee.name}} sera absent pour {{absence.numberday}} jour{%if absence.numberday>1%}s{%endif%} à compter de la date : {{absence.startdate|date("d-m-Y")}}*/
/* </p>*/
/* <p>*/
/* 	{%if absence.motif%}*/
/* 		<div><b>Motif / Reason</b>: {{absence.motif|trans([],'BoAdminBundle')}}</div>*/
/* 	{%endif%}*/
/* 	{%if absence.startdate%}*/
/* 		<div><b>Date de D&#233;but / Start Date</b>: {{absence.startdate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if absence.enddate%}*/
/* 		<div><b>Date de Fin / End Date</b>: {{absence.enddate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if absence.amorpm%}*/
/* 		<div><b>Matin ou après-midi / AM or PM</b>: {%if absence.amorpm=="ALL"%}Toute la journée{%elseif absence.amorpm=="AM"%}Matin{%elseif absence.amorpm=="PM"%}Après-midi{%endif%}</div>*/
/* 	{%endif%}*/
/* 	{%if absence.numberday%}*/
/* 		<div><b>Nombre de jour / Number of days</b>: {{absence.numberday}}</div>*/
/* 	{%endif%}*/
/* 	{%if absence.comment%}*/
/* 		<div><b>Message</b>:<br/>{{absence.comment}}</div>*/
/* 	{%endif%}*/
/* </p>*/
/* */
