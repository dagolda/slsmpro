<?php

/* BoAdminBundle:Client:show.html.twig */
class __TwigTemplate_297d5d7d6b055b8849ff8458ccf55e71dfb85a2e96db5be64abe9452ca221dd6 extends Twig_Template
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
        $__internal_794be1e05e742b4daa232ae8147cf8919dbcb73971c56710796937413d973bc4 = $this->env->getExtension("native_profiler");
        $__internal_794be1e05e742b4daa232ae8147cf8919dbcb73971c56710796937413d973bc4->enter($__internal_794be1e05e742b4daa232ae8147cf8919dbcb73971c56710796937413d973bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Client:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th width=\"120px\">Id:</th>
                <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 7
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "reference", array())) {
            // line 8
            echo "            <tr>
                <th>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "reference", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 13
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "designation", array())) {
            // line 14
            echo "            <tr>
                <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "designation", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 19
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phonenumber", array())) {
            // line 20
            echo "            <tr>
                <th>Phone number:</th>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "phonenumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 25
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array())) {
            // line 26
            echo "            <tr>
                <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "address", array())) {
            // line 32
            echo "            <tr>
                <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo "e:</th>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "address", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 37
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "details", array())) {
            // line 38
            echo "            <tr>
                <th>Others details:</th>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "details", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 43
        echo "        </tbody>
    </table>";
        
        $__internal_794be1e05e742b4daa232ae8147cf8919dbcb73971c56710796937413d973bc4->leave($__internal_794be1e05e742b4daa232ae8147cf8919dbcb73971c56710796937413d973bc4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 43,  116 => 40,  112 => 38,  109 => 37,  103 => 34,  99 => 33,  96 => 32,  93 => 31,  87 => 28,  83 => 27,  80 => 26,  77 => 25,  71 => 22,  67 => 20,  64 => 19,  58 => 16,  54 => 15,  51 => 14,  48 => 13,  42 => 10,  38 => 9,  35 => 8,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="120px">Id:</th>*/
/*                 <td>{{ client.id }}</td>*/
/*             </tr>*/
/* 			{%if client.reference%}*/
/*             <tr>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ client.reference }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if client.designation%}*/
/*             <tr>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ client.designation }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if client.phonenumber%}*/
/*             <tr>*/
/*                 <th>Phone number:</th>*/
/*                 <td>{{ client.phonenumber }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if client.email%}*/
/*             <tr>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ client.email }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if client.address%}*/
/*             <tr>*/
/*                 <th>{{'label.address'|trans([],'BoAdminBundle')}}e:</th>*/
/*                 <td>{{ client.address }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if client.details%}*/
/*             <tr>*/
/*                 <th>Others details:</th>*/
/*                 <td>{{ client.details }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/*         </tbody>*/
/*     </table>*/
