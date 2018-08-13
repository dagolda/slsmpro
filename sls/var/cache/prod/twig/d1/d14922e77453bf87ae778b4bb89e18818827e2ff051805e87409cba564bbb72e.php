<?php

/* BoAdminBundle:Employee:securitycote.html.twig */
class __TwigTemplate_bc994e1e2cf2bd4319a3df565156684739e72ed0a5cb520292378b7194742e6e extends Twig_Template
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
        $__internal_f8c72aa9de74c0eaae8ce55145eb293d482dfbc8bd34de2e2fa0db9d4ac0683b = $this->env->getExtension("native_profiler");
        $__internal_f8c72aa9de74c0eaae8ce55145eb293d482dfbc8bd34de2e2fa0db9d4ac0683b->enter($__internal_f8c72aa9de74c0eaae8ce55145eb293d482dfbc8bd34de2e2fa0db9d4ac0683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:securitycote.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.requesteddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expireddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["securityCotes"]) ? $context["securityCotes"] : $this->getContext($context, "securityCotes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["securityCote"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("securitycote_show", array("id" => $this->getAttribute($context["securityCote"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "filenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["securityCote"], "requestdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "requestdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["securityCote"], "receivedate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "receivedate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["securityCote"], "expirydate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "expirydate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["securityCote"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "creationdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t\t\t<td>";
            // line 23
            if ($this->getAttribute($context["securityCote"], "createby", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "createby", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
                <td class=\"list-action\">
\t\t\t\t\t";
            // line 25
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "edit", array()) == 1))) {
                // line 26
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_securitycote_edit", array("id" => $this->getAttribute($context["securityCote"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 30
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"7\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t";
            // line 36
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "edit", array()) == 1))) {
                // line 37
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_securitycote_new", array("idemployee" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t</td>
\t\t\t</tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['securityCote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>";
        
        $__internal_f8c72aa9de74c0eaae8ce55145eb293d482dfbc8bd34de2e2fa0db9d4ac0683b->leave($__internal_f8c72aa9de74c0eaae8ce55145eb293d482dfbc8bd34de2e2fa0db9d4ac0683b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:securitycote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 42,  148 => 39,  140 => 37,  138 => 36,  133 => 34,  130 => 33,  123 => 30,  117 => 27,  112 => 26,  110 => 25,  101 => 23,  95 => 22,  89 => 21,  83 => 20,  77 => 19,  73 => 18,  67 => 17,  64 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
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
/*                 <td>{{ securityCote.filenumber }}</td>*/
/*                 <td>{% if securityCote.requestdate %}{{ securityCote.requestdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if securityCote.receivedate %}{{ securityCote.receivedate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if securityCote.expirydate %}{{ securityCote.expirydate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if securityCote.creationdate %}{{ securityCote.creationdate|date('Y-m-d') }}{% endif %}</td>*/
/* 				<td>{% if securityCote.createby %}{{ securityCote.createby }}{%else%}---{%endif%}</td>				*/
/*                 <td class="list-action">*/
/* 					{%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].edit==1%}*/
/* 						<a href="{{ path('employee_securitycote_edit', { 'id': securityCote.id }) }}">*/
/* 							{{'action.edit'|trans([],'BoAdminBundle')}}*/
/* 						</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr>*/
/* 				<td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td>*/
/* 				<td class="list-action">*/
/* 					{%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].edit==1%}*/
/* 						<a href="{{ path('employee_securitycote_new',{'idemployee':employee.id}) }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/* 				</td>*/
/* 			</tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
