<?php

/* BoAdvisorsBundle:Orderform:rightshow.html.twig */
class __TwigTemplate_6d1f5b7ba1e4a084f818674362e2a9fc01124dc2ea6ba4f7259a72af297db974 extends Twig_Template
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
        $__internal_135f6346b99c37612f0024ffd3f76307510cefc923a821bb667d7f64d9e510b7 = $this->env->getExtension("native_profiler");
        $__internal_135f6346b99c37612f0024ffd3f76307510cefc923a821bb667d7f64d9e510b7->enter($__internal_135f6346b99c37612f0024ffd3f76307510cefc923a821bb667d7f64d9e510b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:rightshow.html.twig"));

        // line 1
        echo "<div class=\"employee-identity\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.request", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
    <table>
        <tbody>
            <tr>\t\t
\t\t\t\t<th>Id:</th>
\t\t\t\t<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array())) {
            // line 9
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "firstname", array())) {
            // line 15
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "firstname", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array())) {
            // line 21
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "phone", array(), "any", true, true)) {
            // line 27
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "phone", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "address", array(), "any", true, true) && ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "address", array()) != null))) {
            // line 33
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "address", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 38
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "city", array(), "any", true, true) && ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "city", array()) != null))) {
            // line 39
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.city", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "city", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 44
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "language", array())) {
            // line 45
            echo "            <tr>
\t\t\t\t<th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlanguage", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "language", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 50
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "targetlevel", array())) {
            // line 51
            echo "            <tr>
                <th>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "targetlevel", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 56
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "privateorgroup", array())) {
            // line 57
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.privateorgroup", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "privateorgroup", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 62
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "schedule", array())) {
            // line 63
            echo "            <tr>
                <th>";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "schedule", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 68
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "location", array())) {
            // line 69
            echo "            <tr>
\t\t\t\t<th>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.traininglocation", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "location", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 74
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hours", array())) {
            // line 75
            echo "            <tr>               
\t\t\t\t<th>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hours", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hours", array()), "html", null, true);
            echo "</td>            
            </tr>
\t\t\t";
        }
        // line 80
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "ftorpt", array())) {
            // line 81
            echo "            <tr>
                <th>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "ftorpt", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 86
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gouvemp", array())) {
            // line 87
            echo "            <tr>
                <th>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gouvemp", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gouvemp", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gtso", array())) {
            // line 93
            echo "            <tr>
                <th>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gtso", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "gtso", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 98
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "workon", array())) {
            // line 99
            echo "            <tr>
                <th>";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workon", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "workon", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 104
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "typecontract", array())) {
            // line 105
            echo "            <tr>
                <th>";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "typecontract", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 110
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "field", array()) && $this->getAttribute($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "field", array()), "wfname", array()))) {
            // line 111
            echo "            <tr>
                <th>";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "field", array()), "wfname", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 116
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperday", array())) {
            // line 117
            echo "            <tr>
                <th>";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperday", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 122
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperweek", array())) {
            // line 123
            echo "            <tr>
                <th>";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "hourperweek", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 128
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "contact", array())) {
            // line 129
            echo "            <tr>
                <th>";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "contact", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 134
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "phonecontact", array())) {
            // line 135
            echo "            <tr>
                <th>";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactphone", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "phonecontact", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 140
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "emailcontact", array())) {
            // line 141
            echo "            <tr>
                <th>";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactemail", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "emailcontact", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 146
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "startdate", array())) {
            // line 147
            echo "            <tr>
                <th>";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "startdate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 152
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "enddate", array())) {
            // line 153
            echo "            <tr>
                <th>";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 155
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "enddate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 158
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "creationdate", array())) {
            // line 159
            echo "            <tr>
\t\t\t\t<th>Creation date:</th>
\t\t\t\t<td>";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 164
        echo "        </tbody>
    </table>
\t";
        // line 166
        if (($this->getAttribute((isset($context["orderform"]) ? $context["orderform"] : null), "status", array(), "any", true, true) && ($this->getAttribute((isset($context["orderform"]) ? $context["orderform"] : $this->getContext($context, "orderform")), "status", array()) == 0))) {
            // line 167
            echo "\t\t<table width=\"100%\">\t
\t\t\t<tr>
\t\t\t\t<td class=\"panel-body\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#edit_enquiry\">";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</center>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t";
        }
        
        $__internal_135f6346b99c37612f0024ffd3f76307510cefc923a821bb667d7f64d9e510b7->leave($__internal_135f6346b99c37612f0024ffd3f76307510cefc923a821bb667d7f64d9e510b7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 171,  454 => 167,  452 => 166,  448 => 164,  442 => 161,  438 => 159,  435 => 158,  429 => 155,  425 => 154,  422 => 153,  419 => 152,  413 => 149,  409 => 148,  406 => 147,  403 => 146,  397 => 143,  393 => 142,  390 => 141,  387 => 140,  381 => 137,  377 => 136,  374 => 135,  371 => 134,  365 => 131,  361 => 130,  358 => 129,  355 => 128,  349 => 125,  345 => 124,  342 => 123,  339 => 122,  333 => 119,  329 => 118,  326 => 117,  323 => 116,  317 => 113,  313 => 112,  310 => 111,  307 => 110,  301 => 107,  297 => 106,  294 => 105,  291 => 104,  285 => 101,  281 => 100,  278 => 99,  275 => 98,  269 => 95,  265 => 94,  262 => 93,  259 => 92,  253 => 89,  249 => 88,  246 => 87,  243 => 86,  237 => 83,  233 => 82,  230 => 81,  227 => 80,  221 => 77,  217 => 76,  214 => 75,  211 => 74,  205 => 71,  201 => 70,  198 => 69,  195 => 68,  189 => 65,  185 => 64,  182 => 63,  179 => 62,  173 => 59,  169 => 58,  166 => 57,  163 => 56,  157 => 53,  153 => 52,  150 => 51,  147 => 50,  141 => 47,  137 => 46,  134 => 45,  131 => 44,  125 => 41,  121 => 40,  118 => 39,  115 => 38,  109 => 35,  105 => 34,  102 => 33,  99 => 32,  93 => 29,  89 => 28,  86 => 27,  83 => 26,  77 => 23,  73 => 22,  70 => 21,  67 => 20,  61 => 17,  57 => 16,  54 => 15,  51 => 14,  45 => 11,  41 => 10,  38 => 9,  36 => 8,  31 => 6,  22 => 1,);
    }
}
/* <div class="employee-identity">{{'label.request'|trans([],'BoAdminBundle')}}</div>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>		*/
/* 				<th>Id:</th>*/
/* 				<td>{{ enquiry.id }}</td>*/
/*             </tr>*/
/* 			{% if enquiry.name %}*/
/* 				<tr>		*/
/* 					<th>{{'label.name'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ enquiry.name }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if enquiry.firstname %}*/
/* 				<tr>		*/
/* 					<th>{{'label.firstname'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ enquiry.firstname }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if enquiry.email %}*/
/* 				<tr>		*/
/* 					<th>{{'label.email'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ enquiry.email }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if enquiry.phone is defined %}*/
/* 				<tr>*/
/* 					<th>{{'label.phone'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ enquiry.phone }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if enquiry.address is defined and enquiry.address!=null%}*/
/* 				<tr>*/
/* 					<th>{{'label.address'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ enquiry.address }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if enquiry.city is defined and enquiry.city!=null%}*/
/* 				<tr>*/
/* 					<th>{{'label.city'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ enquiry.city }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if enquiry.language %}*/
/*             <tr>*/
/* 				<th>{{'label.targetlanguage'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ enquiry.language }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if enquiry.targetlevel %}*/
/*             <tr>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.targetlevel }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.privateorgroup %}*/
/* 			<tr>*/
/* 				<th>{{'label.privateorgroup'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.privateorgroup }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.schedule %}*/
/*             <tr>*/
/*                 <th>{{'label.schedule'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.schedule }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.location %}*/
/*             <tr>*/
/* 				<th>{{'label.traininglocation'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.location }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.hours %}*/
/*             <tr>               */
/* 				<th>{{'label.hours'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ enquiry.hours }}</td>            */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.ftorpt %}*/
/*             <tr>*/
/*                 <th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.ftorpt }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.gouvemp %}*/
/*             <tr>*/
/*                 <th>{{'label.gouvemp'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.gouvemp }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.gtso %}*/
/*             <tr>*/
/*                 <th>{{'label.gtso'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.gtso }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.workon %}*/
/*             <tr>*/
/*                 <th>{{'label.workon'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.workon }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.typecontract%}*/
/*             <tr>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.typecontract }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.field and enquiry.field.wfname%}*/
/*             <tr>*/
/*                 <th>{{'label.field'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.field.wfname }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.hourperday %}*/
/*             <tr>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.hourperday }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.hourperweek %}*/
/*             <tr>*/
/*                 <th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.hourperweek }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.contact %}*/
/*             <tr>*/
/*                 <th>{{'label.contact'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.contact }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.phonecontact %}*/
/*             <tr>*/
/*                 <th>{{'label.contactphone'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.phonecontact }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if enquiry.emailcontact %}*/
/*             <tr>*/
/*                 <th>{{'label.contactemail'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.emailcontact }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if enquiry.startdate %}*/
/*             <tr>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.startdate|date('d-m-Y') }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if enquiry.enddate %}*/
/*             <tr>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ enquiry.enddate|date('d-m-Y') }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if enquiry.creationdate %}*/
/*             <tr>*/
/* 				<th>Creation date:</th>*/
/* 				<td>{{ enquiry.creationdate|date('Y-m-d H:i:s') }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* 	{%if orderform.status is defined and orderform.status==0%}*/
/* 		<table width="100%">	*/
/* 			<tr>*/
/* 				<td class="panel-body">*/
/* 					<center>*/
/* 						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit_enquiry">{{'action.edit'|trans([],'BoAdminBundle')}}</button>*/
/* 					</center>*/
/* 				</td>*/
/* 			</tr>*/
/* 		</table>*/
/* 	{%endif%}*/
