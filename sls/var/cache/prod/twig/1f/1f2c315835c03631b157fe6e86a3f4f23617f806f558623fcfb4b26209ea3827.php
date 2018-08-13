<?php

/* BoAdminBundle:Evaluation:confirmation.html.twig */
class __TwigTemplate_47ac94a9afd832c76cdd1ee2aace6caf50e97aeed044218b592eab779be5930a extends Twig_Template
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
        $__internal_e9e0763f093d114753f9336b7a727e23bab39ca4fa802b12ed716f19e0a6421f = $this->env->getExtension("native_profiler");
        $__internal_e9e0763f093d114753f9336b7a727e23bab39ca4fa802b12ed716f19e0a6421f->enter($__internal_e9e0763f093d114753f9336b7a727e23bab39ca4fa802b12ed716f19e0a6421f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:confirmation.html.twig"));

        // line 1
        echo "<p>Bonjour / Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "name", array()), "html", null, true);
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
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "languages", array())) {
            // line 9
            echo "\t\t<div><b>Langue / Language </b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "languages", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 11
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaldate", array())) {
            // line 12
            echo "\t\t<div><b>Date de l'évaluation / Evaluation Date</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaldate", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t";
        }
        // line 14
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltime", array())) {
            // line 15
            echo "\t\t<div><b>Heure de l'évaluation / Evaluation Time</b>: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltime", array()), "H:i"), "html", null, true);
            echo "</div>
\t";
        }
        // line 17
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evallocation", array())) {
            // line 18
            echo "\t\t<div><b>Lieu de l'évaluation / Evaluation Location</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evallocation", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 20
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "addresse", array())) {
            // line 21
            echo "\t\t<div><b>Adresse de l'évaluation / Evaluation Address</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "addresse", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 23
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "expenses", array())) {
            // line 24
            echo "\t\t<div><b>Frais de l'évaluation / Evaluation fees</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "expenses", array()), "html", null, true);
            echo "\$</div>
\t";
        }
        // line 26
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array())) {
            // line 27
            echo "\t\t<div><b>Evaluateur / Evaluator</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array()), "name", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 29
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltype", array())) {
            // line 30
            echo "\t\t<div><b>Type d'évaluation  / Evaluation Type</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltype", array()), "html", null, true);
            echo "</div>\t
\t";
        }
        // line 32
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "options", array())) {
            // line 33
            echo "\t\t<div><b>Options </b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "options", array()), "html", null, true);
            echo "</div>\t
\t";
        }
        // line 35
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "currentprofile", array())) {
            // line 36
            echo "\t\t<div><b>Profil actuel / Current Profile</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "currentprofile", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 38
        echo "\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "targetprofile", array())) {
            // line 39
            echo "\t\t<div><b>Profil recherché / Target Profile</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "targetprofile", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 41
        echo "\t";
        if (($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltype", array()) != "Oral")) {
            // line 42
            echo "\t\t<p>
\t\t\t<b>Lien pour évaluation / Evaluation link</b>:
\t\t\t";
            // line 44
            if (((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "online", array()) == true) && array_key_exists("evalquiz", $context)) && ((isset($context["evalquiz"]) ? $context["evalquiz"] : $this->getContext($context, "evalquiz")) != null))) {
                // line 45
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo "</a>
\t\t\t\t<div><b>Username/Nom utilisateur</b>: ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evalquiz"]) ? $context["evalquiz"] : $this->getContext($context, "evalquiz")), "user", array()), "email", array()), "html", null, true);
                echo " </div>
\t\t\t\t<div><b>Password/Lot de passe</b>: ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evalquiz"]) ? $context["evalquiz"] : $this->getContext($context, "evalquiz")), "user", array()), "password", array()), "html", null, true);
                echo "</div>
\t\t\t\t<br/>
\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://slsmpro.com/wpslsm/evaluations-for-reading-comprehension-and-written-expression/\" target=\"blank\">https://slsmpro.com/wpslsm/evaluations-for-reading-comprehension-and-written-expression/</a>
\t\t\t\t</div>\t
\t\t\t";
            }
            // line 54
            echo "\t\t</p>
\t";
        }
        // line 56
        echo "</p>
";
        // line 57
        if (((isset($context["mailfooter"]) ? $context["mailfooter"] : $this->getContext($context, "mailfooter")) != null)) {
            // line 58
            echo "\t<p>
\t\t";
            // line 59
            echo (isset($context["mailfooter"]) ? $context["mailfooter"] : $this->getContext($context, "mailfooter"));
            echo "
\t</p>
";
        }
        
        $__internal_e9e0763f093d114753f9336b7a727e23bab39ca4fa802b12ed716f19e0a6421f->leave($__internal_e9e0763f093d114753f9336b7a727e23bab39ca4fa802b12ed716f19e0a6421f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  184 => 58,  182 => 57,  179 => 56,  175 => 54,  169 => 50,  163 => 47,  159 => 46,  152 => 45,  150 => 44,  146 => 42,  143 => 41,  137 => 39,  134 => 38,  128 => 36,  125 => 35,  119 => 33,  116 => 32,  110 => 30,  107 => 29,  99 => 27,  96 => 26,  90 => 24,  87 => 23,  81 => 21,  78 => 20,  72 => 18,  69 => 17,  63 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  34 => 4,  31 => 3,  29 => 2,  22 => 1,);
    }
}
/* <p>Bonjour / Hello {{evaluation.firstname}} {{evaluation.name}},</p>*/
/* {%if mailhead!=null%}*/
/* 	<p>*/
/* 	{{mailhead|raw}}*/
/* 	</p>*/
/* {%endif%}*/
/* <p>*/
/* 	{%if evaluation.languages%}*/
/* 		<div><b>Langue / Language </b>: {{evaluation.languages}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.evaldate%}*/
/* 		<div><b>Date de l'évaluation / Evaluation Date</b>: {{evaluation.evaldate|date("d-m-Y")}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.evaltime%}*/
/* 		<div><b>Heure de l'évaluation / Evaluation Time</b>: {{evaluation.evaltime|date("H:i")}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.evallocation%}*/
/* 		<div><b>Lieu de l'évaluation / Evaluation Location</b>: {{evaluation.evallocation}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.addresse%}*/
/* 		<div><b>Adresse de l'évaluation / Evaluation Address</b>: {{evaluation.addresse}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.expenses%}*/
/* 		<div><b>Frais de l'évaluation / Evaluation fees</b>: {{evaluation.expenses}}$</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.evaluator%}*/
/* 		<div><b>Evaluateur / Evaluator</b>: {{evaluation.evaluator.firstname}} {{evaluation.evaluator.name}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.evaltype%}*/
/* 		<div><b>Type d'évaluation  / Evaluation Type</b>: {{evaluation.evaltype}}</div>	*/
/* 	{%endif%}*/
/* 	{%if evaluation.options%}*/
/* 		<div><b>Options </b>: {{evaluation.options}}</div>	*/
/* 	{%endif%}*/
/* 	{%if evaluation.currentprofile%}*/
/* 		<div><b>Profil actuel / Current Profile</b>: {{evaluation.currentprofile}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.targetprofile %}*/
/* 		<div><b>Profil recherché / Target Profile</b>: {{evaluation.targetprofile}}</div>*/
/* 	{%endif%}*/
/* 	{%if evaluation.evaltype!="Oral"%}*/
/* 		<p>*/
/* 			<b>Lien pour évaluation / Evaluation link</b>:*/
/* 			{%if evaluation.online==true and evalquiz is defined and evalquiz!=null%}*/
/* 				<a href="{{ link }}">{{ link }}</a>*/
/* 				<div><b>Username/Nom utilisateur</b>: {{evalquiz.user.email}} </div>*/
/* 				<div><b>Password/Lot de passe</b>: {{evalquiz.user.password}}</div>*/
/* 				<br/>*/
/* 			{%else%}*/
/* 				<div>*/
/* 					<a href="https://slsmpro.com/wpslsm/evaluations-for-reading-comprehension-and-written-expression/" target="blank">https://slsmpro.com/wpslsm/evaluations-for-reading-comprehension-and-written-expression/</a>*/
/* 				</div>	*/
/* 			{%endif%}*/
/* 		</p>*/
/* 	{%endif%}*/
/* </p>*/
/* {%if mailfooter!=null%}*/
/* 	<p>*/
/* 		{{mailfooter|raw}}*/
/* 	</p>*/
/* {%endif%}*/
/* */
