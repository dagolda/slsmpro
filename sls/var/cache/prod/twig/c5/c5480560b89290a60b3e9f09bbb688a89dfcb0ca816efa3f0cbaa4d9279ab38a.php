<?php

/* BoAdminBundle:Pricesreference:show.html.twig */
class __TwigTemplate_ff7d211f62e7fb225ca1321c7cafe7cd5dc8eb74a1231439f192c91551741ca8 extends Twig_Template
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
        $__internal_9725d34d0a914c5f1a1847b141c67c6d43adc54fd75862f05d41fd9d99df7b7a = $this->env->getExtension("native_profiler");
        $__internal_9725d34d0a914c5f1a1847b141c67c6d43adc54fd75862f05d41fd9d99df7b7a->enter($__internal_9725d34d0a914c5f1a1847b141c67c6d43adc54fd75862f05d41fd9d99df7b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Pricesreference:show.html.twig"));

        // line 1
        echo "\t<div class=\"employee-identity\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
    <table>
        <tbody>
            <tr>
                <th>Id:</th>
\t\t\t\t<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "id", array()), "html", null, true);
        echo "</td>               
            </tr>
\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "typecontract", array())) {
            // line 9
            echo "            <tr>\t\t\t\t
\t\t\t\t<th>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "typecontract", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 14
        echo "\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t<th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.offernumber", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "offernumber", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t";
        // line 18
        if ($this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "ftorpt", array())) {
            // line 19
            echo "\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t<th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "ftorpt", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 24
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "privateorgroup", array())) {
            // line 25
            echo "\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t<th>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.privateorgroup", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "privateorgroup", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 30
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "language", array())) {
            // line 31
            echo "\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t<th>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "language", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 36
        echo "            <tr>
                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
\t\t\t\t<th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workfield", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>                
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "field", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_9725d34d0a914c5f1a1847b141c67c6d43adc54fd75862f05d41fd9d99df7b7a->leave($__internal_9725d34d0a914c5f1a1847b141c67c6d43adc54fd75862f05d41fd9d99df7b7a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Pricesreference:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  133 => 45,  127 => 42,  123 => 41,  117 => 38,  113 => 37,  110 => 36,  104 => 33,  100 => 32,  97 => 31,  94 => 30,  88 => 27,  84 => 26,  81 => 25,  78 => 24,  72 => 21,  68 => 20,  65 => 19,  63 => 18,  58 => 16,  54 => 15,  51 => 14,  45 => 11,  41 => 10,  38 => 9,  36 => 8,  31 => 6,  22 => 1,);
    }
}
/* 	<div class="employee-identity">{{'label.category'|trans([],'BoAdminBundle')}}</div>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id:</th>*/
/* 				<td>{{ pricesreference.id }}</td>               */
/*             </tr>*/
/* 			{%if pricesreference.typecontract%}*/
/*             <tr>				*/
/* 				<th>{{'label.contracttype'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ pricesreference.typecontract }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 				<tr>				*/
/* 					<th>{{'label.offernumber'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ pricesreference.offernumber }}</td>*/
/* 				</tr>*/
/* 			{%if pricesreference.ftorpt%}*/
/* 				<tr>				*/
/* 					<th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ pricesreference.ftorpt }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if pricesreference.privateorgroup%}*/
/* 				<tr>				*/
/* 					<th>{{'label.privateorgroup'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ pricesreference.privateorgroup }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if pricesreference.language%}*/
/* 				<tr>				*/
/* 					<th>{{'label.language'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ pricesreference.language }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/*             <tr>*/
/*                 <th>{{'label.description'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ pricesreference.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/* 				<th>{{'label.workfield'|trans([],'BoAdminBundle')}}:</th>                */
/*                 <td>{{ pricesreference.field }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{'label.location'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ pricesreference.location }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
