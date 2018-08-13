<?php

/* BoAdvisorsBundle:Enquiry:tbshow.html.twig */
class __TwigTemplate_266dff08ca8c49d56e119d1661aeaae99c383ec63ad955e138475c084c14247b extends Twig_Template
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
        $__internal_d09f2eb04ba7da50639406052777aad8dfe15246f47101aee6527941738197a1 = $this->env->getExtension("native_profiler");
        $__internal_d09f2eb04ba7da50639406052777aad8dfe15246f47101aee6527941738197a1->enter($__internal_d09f2eb04ba7da50639406052777aad8dfe15246f47101aee6527941738197a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:tbshow.html.twig"));

        // line 1
        echo "    <div class=\"message_error\">";
        if ((array_key_exists("message", $context) && ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != null))) {
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        }
        echo "</div>
\t<table width=\"100%\">
        <tbody>
            <tr>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>               
\t\t\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "firstname", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlanguage", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.privateorgroup", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>               
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "phone", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "language", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 26
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "targetlevel", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "targetlevel", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 27
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "privateorgroup", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "privateorgroup", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.traininglocation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t\t<th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
                <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr> 
\t\t\t\t<td>";
        // line 36
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "location", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "location", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 37
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hours", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hours", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 38
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "ftorpt", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "ftorpt", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th colspan=\"4\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr> 
\t\t\t\t<td colspan=\"4\">";
        // line 45
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "schedule", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "schedule", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gouvemp", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gtso", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
\t\t\t\t<th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workon", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
            </tr>
            <tr>                
                <td>";
        // line 55
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gouvemp", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gouvemp", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 56
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gtso", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gtso", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 57
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "workon", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "workon", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 58
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "status", array()), array(), "array"), array(), "BoAdminBundle"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>                
                <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
            </tr>
            <tr>                \t\t\t\t
                <td>";
        // line 68
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "contact", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "contact", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 69
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "phonecontact", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "phonecontact", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 70
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "emailcontact", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "emailcontact", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td></td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
                <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 81
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "typecontract", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "typecontract", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t
                <td>";
        // line 82
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "field", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "field", array()), "wfname", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 83
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperday", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperday", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 84
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperweek", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperweek", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>                
                <th>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>                \t\t\t\t
                <td>";
        // line 94
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 95
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "enddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>";
        // line 96
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>";
        // line 97
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "employee", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "employee", array()), "name", array()), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        // line 100
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "comment", array())) {
            // line 101
            echo "            <tr>
                <th colspan=\"4\">Comment</th>               
            </tr>
            <tr>
                <td colspan=\"4\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "comment", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        }
        // line 109
        echo "        </tbody>
    </table>";
        
        $__internal_d09f2eb04ba7da50639406052777aad8dfe15246f47101aee6527941738197a1->leave($__internal_d09f2eb04ba7da50639406052777aad8dfe15246f47101aee6527941738197a1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 109,  375 => 105,  369 => 101,  367 => 100,  357 => 97,  351 => 96,  345 => 95,  339 => 94,  333 => 91,  329 => 90,  325 => 89,  321 => 88,  310 => 84,  302 => 83,  294 => 82,  286 => 81,  280 => 78,  276 => 77,  272 => 76,  268 => 75,  256 => 70,  248 => 69,  240 => 68,  233 => 64,  229 => 63,  225 => 62,  214 => 58,  206 => 57,  198 => 56,  190 => 55,  184 => 52,  180 => 51,  176 => 50,  172 => 49,  161 => 45,  155 => 42,  144 => 38,  136 => 37,  128 => 36,  122 => 33,  118 => 32,  114 => 31,  103 => 27,  95 => 26,  91 => 25,  87 => 24,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  22 => 1,);
    }
}
/*     <div class="message_error">{%if message is defined and message!=null%}{{message}}{%endif%}</div>*/
/* 	<table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>               */
/* 				<td>{{ enquiry.id }}</td>*/
/*                 <td>{{ enquiry.firstname }}</td>*/
/*                 <td>{{ enquiry.name }}</td>*/
/*                 <td>{{ enquiry.email }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.targetlanguage'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.privateorgroup'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>               */
/*                 <td>{{ enquiry.phone }}</td>*/
/* 				<td>{{ enquiry.language }}</td>*/
/* 				<td>{%if enquiry.targetlevel %}{{ enquiry.targetlevel }}{%else%}---{%endif%}</td>*/
/* 				<td>{%if enquiry.privateorgroup %}{{ enquiry.privateorgroup }}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.traininglocation'|trans([],'BoAdminBundle')}}</th>	*/
/* 				<th>{{'label.hours'|trans([],'BoAdminBundle')}}</th>				*/
/*                 <th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr> */
/* 				<td>{%if enquiry.location %}{{ enquiry.location }}{%else%}---{%endif%}</td>*/
/* 				<td>{%if enquiry.hours %}{{ enquiry.hours }}{%else%}---{%endif%}</td>*/
/* 				<td>{%if enquiry.ftorpt %}{{ enquiry.ftorpt }}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th colspan="4">{{'label.schedule'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr> */
/* 				<td colspan="4">{%if enquiry.schedule %}{{ enquiry.schedule }}{%else%}---{%endif%}</td>	*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.gouvemp'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.gtso'|trans([],'BoAdminBundle')}}</th>				*/
/* 				<th>{{'label.workon'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>				*/
/*             </tr>*/
/*             <tr>                */
/*                 <td>{%if enquiry.gouvemp %}{{ enquiry.gouvemp }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if enquiry.gtso %}{{ enquiry.gtso }}{%else%}---{%endif%}</td>*/
/* 				<td>{%if enquiry.workon %}{{ enquiry.workon }}{%else%}---{%endif%}</td>*/
/* 				<td>{%if enquiry.status%}{{status[enquiry.status]|trans([],'BoAdminBundle')}}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>                */
/*                 <th>{{'label.contact'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.contactphone'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.contactemail'|trans([],'BoAdminBundle')}}</th>*/
/* 				<td></td>*/
/*             </tr>*/
/*             <tr>                				*/
/*                 <td>{% if enquiry.contact %}{{ enquiry.contact }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if enquiry.phonecontact %}{{ enquiry.phonecontact }}{%else%}---{% endif %}</td>*/
/* 				<td>{% if enquiry.emailcontact %}{{ enquiry.emailcontact }}{%else%}---{% endif %}</td>*/
/* 				<td></td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>			*/
/*                 <th>{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 				<td>{% if enquiry.typecontract %}{{ enquiry.typecontract }}{%else%}---{% endif %}</td>			*/
/*                 <td>{% if enquiry.field %}{{ enquiry.field.wfname }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if enquiry.hourperday %}{{ enquiry.hourperday }}{%else%}---{% endif %}</td>*/
/* 				<td>{% if enquiry.hourperweek %}{{ enquiry.hourperweek }}{%else%}---{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>                */
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>                				*/
/*                 <td>{% if enquiry.startdate %}{{ enquiry.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if enquiry.enddate %}{{ enquiry.enddate|date('Y-m-d') }}{% endif %}</td>*/
/* 				<td>{% if enquiry.creationdate %}{{ enquiry.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 				<td>{% if enquiry.employee %}{{ enquiry.employee.firstname }} {{ enquiry.employee.name }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/* 			{% if enquiry.comment %}*/
/*             <tr>*/
/*                 <th colspan="4">Comment</th>               */
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="4">{{ enquiry.comment }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/* 			{%endif%}*/
/*         </tbody>*/
/*     </table>*/
