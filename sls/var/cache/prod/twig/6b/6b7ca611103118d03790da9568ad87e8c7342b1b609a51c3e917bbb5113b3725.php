<?php

/* BoAdminBundle:Securitycote:show.html.twig */
class __TwigTemplate_f349e62b7e2673f704385c86ab2ccbc0d3e8a1370762bbcedf064f2bbbc8a19e extends Twig_Template
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
        $__internal_a1b35f9062f138ee66eacdde3b3cca06a3952cae17e2e650c6cb0c89b901a299 = $this->env->getExtension("native_profiler");
        $__internal_a1b35f9062f138ee66eacdde3b3cca06a3952cae17e2e650c6cb0c89b901a299->enter($__internal_a1b35f9062f138ee66eacdde3b3cca06a3952cae17e2e650c6cb0c89b901a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:show.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
                <th width=\"30%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"30%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "employee", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "employee", array()), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "filenumber", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.requesteddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expireddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                
            </tr>
            <tr>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "requestdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "requestdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "receivedate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "receivedate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>";
        // line 23
        if ($this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 31
        if ($this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                <td colspan=\"2\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "comment", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
        </tbody>
    </table>";
        
        $__internal_a1b35f9062f138ee66eacdde3b3cca06a3952cae17e2e650c6cb0c89b901a299->leave($__internal_a1b35f9062f138ee66eacdde3b3cca06a3952cae17e2e650c6cb0c89b901a299_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  104 => 31,  98 => 28,  94 => 27,  85 => 23,  79 => 22,  73 => 21,  66 => 17,  62 => 16,  58 => 15,  51 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="30%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="30%">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">{{'label.filenumber'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ securityCote.id }}</td>*/
/*                 <td>{{ securityCote.employee.firstname }} {{ securityCote.employee.name }}</td>*/
/* 				 <td>{{ securityCote.filenumber }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th class="sty_label">{{'label.requesteddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th class="sty_label">{{'label.receiveddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th class="sty_label">{{'label.expireddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 */
/*             </tr>*/
/*             <tr>*/
/*                 <td>{% if securityCote.requestdate %}{{ securityCote.requestdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if securityCote.receivedate %}{{ securityCote.receivedate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 				<td>{% if securityCote.creationdate %}{{ securityCote.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.comment'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 				<td>{% if securityCote.creationdate %}{{ securityCote.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td colspan="2">{{ securityCote.comment }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
