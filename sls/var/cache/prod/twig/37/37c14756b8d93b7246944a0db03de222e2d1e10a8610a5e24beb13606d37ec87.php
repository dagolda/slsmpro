<?php

/* BoAdminBundle:Tickets:notifycontacts.html.twig */
class __TwigTemplate_0eb2b2f045f2e77f99a904cede0e34a2354683ac8262847aa8411940c0d13d7a extends Twig_Template
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
        $__internal_a785d442edf4a4066cb4b23ea2f2547f4e9de2c5e5d20b1d9e44b302f5843359 = $this->env->getExtension("native_profiler");
        $__internal_a785d442edf4a4066cb4b23ea2f2547f4e9de2c5e5d20b1d9e44b302f5843359->enter($__internal_a785d442edf4a4066cb4b23ea2f2547f4e9de2c5e5d20b1d9e44b302f5843359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tickets:notifycontacts.html.twig"));

        // line 1
        echo "<p>Bonjour / Hello,</p>
<p>
\tSLS Manager vient de recevoir une demande d'aide qui vous a été affectée. 
</p>
<p>
\t";
        // line 6
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "subject", array())) {
            // line 7
            echo "\t\t<div><b>Objet / Subject </b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "subject", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 9
        echo "\t<div><b>Applicant / Demandeur </b>: 
\t\t";
        // line 10
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array())) {
            // line 11
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array()), "name", array()), "html", null, true);
            echo "
\t\t";
        } elseif ($this->getAttribute(        // line 12
(isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array())) {
            // line 13
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array()), "name", array()), "html", null, true);
            echo "
\t\t";
        }
        // line 15
        echo "\t</div>
\t";
        // line 16
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array())) {
            // line 17
            echo "\t\t<div><b>Date de la demande / Request Date</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 19
        echo "\t";
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array())) {
            // line 20
            echo "\t\t<div>
\t\t\t<b>Message</b>:
\t\t\t<hr/>
\t\t</div>
\t\t<div>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "comments", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 26
        echo "</p>
<p>
\tSLS MANAGER for CLIC
</p>
";
        
        $__internal_a785d442edf4a4066cb4b23ea2f2547f4e9de2c5e5d20b1d9e44b302f5843359->leave($__internal_a785d442edf4a4066cb4b23ea2f2547f4e9de2c5e5d20b1d9e44b302f5843359_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tickets:notifycontacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  79 => 24,  73 => 20,  70 => 19,  64 => 17,  62 => 16,  59 => 15,  51 => 13,  49 => 12,  42 => 11,  40 => 10,  37 => 9,  31 => 7,  29 => 6,  22 => 1,);
    }
}
/* <p>Bonjour / Hello,</p>*/
/* <p>*/
/* 	SLS Manager vient de recevoir une demande d'aide qui vous a été affectée. */
/* </p>*/
/* <p>*/
/* 	{%if ticket.subject %}*/
/* 		<div><b>Objet / Subject </b>: {{ticket.subject}}</div>*/
/* 	{%endif%}*/
/* 	<div><b>Applicant / Demandeur </b>: */
/* 		{%if ticket.employee %}*/
/* 			{{ ticket.employee.firstname }} {{ ticket.employee.name }}*/
/* 		{%elseif ticket.students %}*/
/* 			{{ ticket.students.firstname }} {{ ticket.students.name }}*/
/* 		{%endif%}*/
/* 	</div>*/
/* 	{%if ticket.openeddate%}*/
/* 		<div><b>Date de la demande / Request Date</b>: {{ticket.openeddate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if ticket.openeddate%}*/
/* 		<div>*/
/* 			<b>Message</b>:*/
/* 			<hr/>*/
/* 		</div>*/
/* 		<div>{{ticket.comments}}</div>*/
/* 	{%endif%}*/
/* </p>*/
/* <p>*/
/* 	SLS MANAGER for CLIC*/
/* </p>*/
/* */
