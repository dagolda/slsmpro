<?php

/* BoAdminBundle:Securitycote:tbliste.html.twig */
class __TwigTemplate_9d5bd3557dbea403608b6b9a69ccb341721590c22f81d9e8f48efb1586182f4e extends Twig_Template
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
        $__internal_f58ba70c010a0ffa0bcf1ad8a5896508a65e22025140e328890934ac5c82dd4d = $this->env->getExtension("native_profiler");
        $__internal_f58ba70c010a0ffa0bcf1ad8a5896508a65e22025140e328890934ac5c82dd4d->enter($__internal_f58ba70c010a0ffa0bcf1ad8a5896508a65e22025140e328890934ac5c82dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Firstname & Name</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.requesteddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expireddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["securityCotes"]) ? $context["securityCotes"] : $this->getContext($context, "securityCotes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["securityCote"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("securitycote_show", array("id" => $this->getAttribute($context["securityCote"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["securityCote"], "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["securityCote"], "employee", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "filenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["securityCote"], "requestdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "requestdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["securityCote"], "receivedate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "receivedate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["securityCote"], "expirydate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "expirydate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["securityCote"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "creationdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["securityCote"], "createby", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "createby", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("securitycote_show", array("id" => $this->getAttribute($context["securityCote"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 28
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "edit", array()) == 1))) {
                // line 29
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("securitycote_edit", array("id" => $this->getAttribute($context["securityCote"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 31
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['securityCote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>";
        
        $__internal_f58ba70c010a0ffa0bcf1ad8a5896508a65e22025140e328890934ac5c82dd4d->leave($__internal_f58ba70c010a0ffa0bcf1ad8a5896508a65e22025140e328890934ac5c82dd4d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 36,  146 => 34,  139 => 31,  131 => 29,  129 => 28,  125 => 27,  116 => 25,  108 => 24,  100 => 23,  92 => 22,  84 => 21,  80 => 20,  74 => 19,  68 => 18,  65 => 17,  60 => 16,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Firstname & Name</th>*/
/*                 <th>{{'label.filenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.requesteddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.receiveddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.expireddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for securityCote in securityCotes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('securitycote_show', { 'id': securityCote.id }) }}">{{ securityCote.id }}</a></td>*/
/*                 <td>{{ securityCote.employee.firstname }} {{ securityCote.employee.name }}</td>*/
/*                 <td>{{ securityCote.filenumber }}</td>*/
/*                 <td>{% if securityCote.requestdate %}{{ securityCote.requestdate|date('Y-m-d') }}{%else %}---{% endif %}</td>*/
/*                 <td>{% if securityCote.receivedate %}{{ securityCote.receivedate|date('Y-m-d') }}{%else %}---{% endif %}</td>*/
/*                 <td>{% if securityCote.expirydate %}{{ securityCote.expirydate|date('Y-m-d') }}{%else %}---{% endif %}</td>*/
/*                 <td>{% if securityCote.creationdate %}{{ securityCote.creationdate|date('Y-m-d') }}{% else %}---{%endif %}</td>*/
/*                 <td>{%if securityCote.createby %}{{ securityCote.createby }}{% else %}---{%endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('securitycote_show', { 'id': securityCote.id }) }}">show</a>*/
/* 					{%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].edit==1%}*/
/* 						<a href="{{ path('securitycote_edit', { 'id': securityCote.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
