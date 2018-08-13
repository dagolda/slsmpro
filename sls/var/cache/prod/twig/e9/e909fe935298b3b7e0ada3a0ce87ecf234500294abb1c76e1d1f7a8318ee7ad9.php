<?php

/* BoAdminBundle:Contracts:rightshow.html.twig */
class __TwigTemplate_bd250d75bc136c575f214e6e9689dbdd7129ee92feb74eef819b0fe1ee955c56 extends Twig_Template
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
        $__internal_ddf7d732d8289291a42e2b0bad31c3b54fbe5a194122c495c11bcc47a864ea99 = $this->env->getExtension("native_profiler");
        $__internal_ddf7d732d8289291a42e2b0bad31c3b54fbe5a194122c495c11bcc47a864ea99->enter($__internal_ddf7d732d8289291a42e2b0bad31c3b54fbe5a194122c495c11bcc47a864ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:rightshow.html.twig"));

        // line 1
        echo "<div class=\"employee-identity\">";
        if (((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()), "html", null, true);
            echo " - ";
        }
        if (((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
        }
        echo "</div>
    <table> 
        <tbody>
            <tr>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
\t\t\t\t<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "client", array())) {
            // line 9
            echo "            <tr>
                <th>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "client", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "ordernumber", array())) {
            // line 15
            echo "            <tr>\t\t
\t\t\t\t<th width=\"120px\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ordernumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "ordernumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) && ($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "id", array()) > 0))) {
            // line 21
            echo "            <tr>
                <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "name", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) {
            // line 27
            echo "            <tr>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "methodofsupply", array())) {
            // line 33
            echo "            <tr>\t\t
\t\t\t\t<th width=\"120px\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ordernumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "methodofsupply", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 38
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "ryacc", array())) {
            // line 39
            echo "            <tr>\t\t
\t\t\t\t<th width=\"120px\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ryacc", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "ryacc", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 44
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typetime", array())) {
            // line 45
            echo "            <tr>\t\t
\t\t\t\t<th width=\"120px\">FT or PT:</th>
\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typetime", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 50
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array())) {
            // line 51
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "language", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 56
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typeoftraining", array())) {
            // line 57
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.typeoftraining", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typeoftraining", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 62
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array())) {
            // line 63
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "schedule", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 68
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array())) {
            // line 69
            echo "            <tr>
                <th>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "targetlevel", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 74
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "workfields", array())) {
            // line 75
            echo "            <tr>
                <th>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workfields", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "workfields", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 80
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "session", array())) {
            // line 81
            echo "            <tr>
                <th>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.session", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "session", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 85
        echo "\t
\t\t\t";
        // line 86
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "program", array())) {
            // line 87
            echo "            <tr>
                <th>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.program", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "program", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 91
        echo "\t
\t\t\t";
        // line 92
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "step", array())) {
            // line 93
            echo "            <tr>
                <th>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.step", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "step", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 98
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startlesson", array())) {
            // line 99
            echo "            <tr>
                <th>";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlesson", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startlesson", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 104
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "planreceived", array())) {
            // line 105
            echo "            <tr>
                <th>";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.planreceived", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "planreceived", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 110
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "learningplan", array())) {
            // line 111
            echo "            <tr>
                <th>";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.learningplan", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "learningplan", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 115
        echo "\t
\t\t\t";
        // line 116
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "initialhours", array())) {
            // line 117
            echo "            <tr>
\t\t\t\t<th>";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.initialhours", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "initialhours", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 122
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate", array())) {
            // line 123
            echo "            <tr>
\t\t\t\t<th>";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate1", array())) {
                echo "1";
            }
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 127
        echo "\t\t\t
\t\t\t";
        // line 128
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber", array())) {
            // line 129
            echo "            <tr>
\t\t\t\t<th>";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate1", array())) {
                echo "1";
            }
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 134
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourlyrate", array())) {
            // line 135
            echo "            <tr>
\t\t\t\t<th>";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate1", array())) {
                echo "1";
            }
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourlyrate", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 140
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "estimatedcost", array())) {
            // line 141
            echo "            <tr>
\t\t\t\t<th>";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate1", array())) {
                echo "1";
            }
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 143
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "estimatedcost", array()), 2, ".", " "), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 146
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate1", array())) {
            // line 147
            echo "            <tr>
\t\t\t\t<th>";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>\t\t\t
\t\t\t\t<td>";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate1", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 151
        echo "\t\t\t
\t\t\t";
        // line 152
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber1", array())) {
            // line 153
            echo "            <tr>
\t\t\t\t<th>";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>\t\t\t
\t\t\t\t<td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 158
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourlyrate1", array())) {
            // line 159
            echo "            <tr>
\t\t\t\t<th>";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>\t\t\t
\t\t\t\t<td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourlyrate1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 164
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "estimatedcost1", array())) {
            // line 165
            echo "            <tr>
\t\t\t\t<th>";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>\t\t\t
\t\t\t\t<td>";
            // line 167
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "estimatedcost1", array()), 2, ".", " "), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 170
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate2", array())) {
            // line 171
            echo "            <tr>
\t\t\t\t<th>";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
            echo " 3:</th>\t\t\t
\t\t\t\t<td>";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startrate2", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 175
        echo "\t\t\t
\t\t\t";
        // line 176
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber2", array())) {
            // line 177
            echo "            <tr>
\t\t\t\t<th>";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
            echo " 3:</th>\t\t\t
\t\t\t\t<td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hoursnumber2", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 182
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourlyrate2", array())) {
            // line 183
            echo "            <tr>
\t\t\t\t<th>";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
            echo " 3:</th>\t\t\t
\t\t\t\t<td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourlyrate2", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 188
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "estimatedcost2", array())) {
            // line 189
            echo "            <tr>
\t\t\t\t<th>";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
            echo " 3:</th>\t\t\t
\t\t\t\t<td>";
            // line 191
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "estimatedcost2", array()), 2, ".", " "), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 194
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "totalhours", array())) {
            // line 195
            echo "            <tr>
\t\t\t\t<th>";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalhours", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "totalhours", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 200
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "usedhours", array())) {
            // line 201
            echo "            <tr>
\t\t\t\t<th>";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.usedhours", array(), "BoAdminBundle"), "html", null, true);
            echo ": </th>\t\t\t
\t\t\t\t<td>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "usedhours", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 206
        echo "\t\t\t";
        if ((array_key_exists("lefthours", $context) && ((isset($context["lefthours"]) ? $context["lefthours"] : $this->getContext($context, "lefthours")) != null))) {
            // line 207
            echo "            <tr>
\t\t\t\t<th>";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.lefthours", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 209
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["lefthours"]) ? $context["lefthours"] : $this->getContext($context, "lefthours")), 0, "", " "), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 212
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourperweek", array())) {
            // line 213
            echo "            <tr>
\t\t\t\t<th>";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "hourperweek", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 218
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "receivedate", array())) {
            // line 219
            echo "            <tr>
                <th>";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 221
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "receivedate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 224
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array())) {
            // line 225
            echo "            <tr>
                <th>";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 227
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 230
        echo "\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "initialenddate", array())) {
            // line 231
            echo "\t\t<tr>
\t\t\t<th>";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.initialdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                \t<td>";
            // line 233
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "initialenddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            \t</tr>
\t\t";
        }
        // line 236
        echo "\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array())) {
            // line 237
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                \t\t<td>";
            // line 239
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "enddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            \t\t</tr>
\t\t";
        }
        // line 242
        echo "\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "renddate", array())) {
            // line 243
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.renddate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                \t\t<td>";
            // line 245
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "renddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            \t\t</tr>
\t\t";
        }
        // line 248
        echo "\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "clientsignaturedate", array())) {
            // line 249
            echo "            <tr>
                <th>Client Signature:</th>
                <td>";
            // line 251
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "clientsignaturedate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t";
        }
        // line 254
        echo "\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "clicsignaturedate", array())) {
            // line 255
            echo "            <tr>
                <th>Clic Signature:</th>
                <td>";
            // line 257
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "clicsignaturedate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 260
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array())) {
            // line 261
            echo "            <tr>
\t\t\t\t<th>Location:</th>
\t\t\t\t<td>";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()), "designation", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        } elseif ($this->getAttribute(        // line 265
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array())) {
            // line 266
            echo "            <tr>
\t\t\t\t<th>Location:</th>
\t\t\t\t<td>";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "location", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 271
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array())) {
            // line 272
            echo "            <tr>
\t\t\t\t<th>";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "adresse", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 277
        echo "            <tr>
\t\t\t\t<th>Status:</th>
\t\t\t\t<td>";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()), array(), "array"), "html", null, true);
        echo "</td>               
            </tr>
\t\t\t";
        // line 281
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "creationdate", array())) {
            // line 282
            echo "            <tr>
\t\t\t\t<th>";
            // line 283
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 284
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 287
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "createby", array())) {
            // line 288
            echo "            <tr>
\t\t\t\t<th>";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "createby", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 293
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "closeddate", array())) {
            // line 294
            echo "            <tr>
\t\t\t\t<th>";
            // line 295
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.closeddate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 296
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "closeddate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 299
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "closedby", array()))) {
            // line 300
            echo "            <tr>
\t\t\t\t<th>";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.closedby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "closedby", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 305
        echo "        </tbody>
    </table>
";
        
        $__internal_ddf7d732d8289291a42e2b0bad31c3b54fbe5a194122c495c11bcc47a864ea99->leave($__internal_ddf7d732d8289291a42e2b0bad31c3b54fbe5a194122c495c11bcc47a864ea99_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 305,  841 => 302,  837 => 301,  834 => 300,  831 => 299,  825 => 296,  821 => 295,  818 => 294,  815 => 293,  809 => 290,  805 => 289,  802 => 288,  799 => 287,  793 => 284,  789 => 283,  786 => 282,  784 => 281,  779 => 279,  775 => 277,  769 => 274,  765 => 273,  762 => 272,  759 => 271,  753 => 268,  749 => 266,  747 => 265,  742 => 263,  738 => 261,  735 => 260,  729 => 257,  725 => 255,  722 => 254,  716 => 251,  712 => 249,  709 => 248,  703 => 245,  699 => 244,  696 => 243,  693 => 242,  687 => 239,  683 => 238,  680 => 237,  677 => 236,  671 => 233,  667 => 232,  664 => 231,  661 => 230,  655 => 227,  651 => 226,  648 => 225,  645 => 224,  639 => 221,  635 => 220,  632 => 219,  629 => 218,  623 => 215,  619 => 214,  616 => 213,  613 => 212,  607 => 209,  603 => 208,  600 => 207,  597 => 206,  591 => 203,  587 => 202,  584 => 201,  581 => 200,  575 => 197,  571 => 196,  568 => 195,  565 => 194,  559 => 191,  555 => 190,  552 => 189,  549 => 188,  543 => 185,  539 => 184,  536 => 183,  533 => 182,  527 => 179,  523 => 178,  520 => 177,  518 => 176,  515 => 175,  509 => 173,  505 => 172,  502 => 171,  499 => 170,  493 => 167,  489 => 166,  486 => 165,  483 => 164,  477 => 161,  473 => 160,  470 => 159,  467 => 158,  461 => 155,  457 => 154,  454 => 153,  452 => 152,  449 => 151,  443 => 149,  439 => 148,  436 => 147,  433 => 146,  427 => 143,  419 => 142,  416 => 141,  413 => 140,  407 => 137,  399 => 136,  396 => 135,  393 => 134,  387 => 131,  379 => 130,  376 => 129,  374 => 128,  371 => 127,  365 => 125,  357 => 124,  354 => 123,  351 => 122,  345 => 119,  341 => 118,  338 => 117,  336 => 116,  333 => 115,  327 => 113,  323 => 112,  320 => 111,  317 => 110,  311 => 107,  307 => 106,  304 => 105,  301 => 104,  295 => 101,  291 => 100,  288 => 99,  285 => 98,  279 => 95,  275 => 94,  272 => 93,  270 => 92,  267 => 91,  261 => 89,  257 => 88,  254 => 87,  252 => 86,  249 => 85,  243 => 83,  239 => 82,  236 => 81,  233 => 80,  227 => 77,  223 => 76,  220 => 75,  217 => 74,  211 => 71,  207 => 70,  204 => 69,  201 => 68,  195 => 65,  191 => 64,  188 => 63,  185 => 62,  179 => 59,  175 => 58,  172 => 57,  169 => 56,  163 => 53,  159 => 52,  156 => 51,  153 => 50,  147 => 47,  143 => 45,  140 => 44,  134 => 41,  130 => 40,  127 => 39,  124 => 38,  118 => 35,  114 => 34,  111 => 33,  108 => 32,  102 => 29,  98 => 28,  95 => 27,  92 => 26,  86 => 23,  82 => 22,  79 => 21,  76 => 20,  70 => 17,  66 => 16,  63 => 15,  60 => 14,  54 => 11,  50 => 10,  47 => 9,  45 => 8,  40 => 6,  36 => 5,  22 => 1,);
    }
}
/* <div class="employee-identity">{%if contract and contract.typecontract %}{{ contract.typecontract }} - {%endif%}{%if contract and contract.contractnumber %}{{ contract.contractnumber }}{%endif%}</div>*/
/*     <table> */
/*         <tbody>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.id }}</td>*/
/*             </tr>*/
/* 			{% if contract.client %}*/
/*             <tr>*/
/*                 <th>{{'label.customer'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.client }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.ordernumber %}*/
/*             <tr>		*/
/* 				<th width="120px">{{'label.ordernumber'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.ordernumber }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.group and contract.group.id>0 %}*/
/*             <tr>*/
/*                 <th>{{'label.group'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.group.name }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.advisor %}*/
/*             <tr>*/
/*                 <th>{{'label.pa'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.advisor }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.methodofsupply %}*/
/*             <tr>		*/
/* 				<th width="120px">{{'label.ordernumber'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.methodofsupply }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.ryacc %}*/
/*             <tr>		*/
/* 				<th width="120px">{{'label.ryacc'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.ryacc }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.typetime %}*/
/*             <tr>		*/
/* 				<th width="120px">FT or PT:</th>*/
/* 				<td>{{ contract.typetime }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.language %}*/
/*             <tr>		*/
/* 				<th>{{'label.language'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.language }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.typeoftraining %}*/
/*             <tr>		*/
/* 				<th>{{'label.typeoftraining'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.typeoftraining }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.schedule %}*/
/*             <tr>		*/
/* 				<th>{{'label.schedule'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.schedule }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.targetlevel %}*/
/*             <tr>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.targetlevel }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.workfields %}*/
/*             <tr>*/
/*                 <th>{{'label.workfields'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.workfields }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.session %}*/
/*             <tr>*/
/*                 <th>{{'label.session'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.session }}</td>*/
/*             </tr>*/
/* 			{%endif%}	*/
/* 			{% if contract.program %}*/
/*             <tr>*/
/*                 <th>{{'label.program'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.program }}</td>*/
/*             </tr>*/
/* 			{%endif%}	*/
/* 			{% if contract.step %}*/
/*             <tr>*/
/*                 <th>{{'label.step'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.step }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.startlesson %}*/
/*             <tr>*/
/*                 <th>{{'label.startlesson'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.startlesson }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.planreceived %}*/
/*             <tr>*/
/*                 <th>{{'label.planreceived'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.planreceived }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.learningplan %}*/
/*             <tr>*/
/*                 <th>{{'label.learningplan'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.learningplan }}</td>*/
/*             </tr>*/
/* 			{%endif%}	*/
/* 			{% if contract.initialhours %}*/
/*             <tr>*/
/* 				<th>{{'label.initialhours'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ contract.initialhours }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.startrate %}*/
/*             <tr>*/
/* 				<th>{{'label.daterate'|trans([],'BoAdminBundle')}} {% if contract.startrate1 %}1{%endif%}:</th>			*/
/* 				<td>{{ contract.startrate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{%endif%}			*/
/* 			{% if contract.hoursnumber %}*/
/*             <tr>*/
/* 				<th>{{'label.numberhour'|trans([],'BoAdminBundle')}} {% if contract.startrate1 %}1{%endif%}:</th>			*/
/* 				<td>{{ contract.hoursnumber }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.hourlyrate %}*/
/*             <tr>*/
/* 				<th>{{'label.hourlyrate'|trans([],'BoAdminBundle')}} {% if contract.startrate1 %}1{%endif%}:</th>			*/
/* 				<td>{{ contract.hourlyrate }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.estimatedcost %}*/
/*             <tr>*/
/* 				<th>{{'label.estimatedcost'|trans([],'BoAdminBundle')}} {% if contract.startrate1 %}1{%endif%}:</th>			*/
/* 				<td>{{ contract.estimatedcost|number_format(2, '.', ' ') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.startrate1 %}*/
/*             <tr>*/
/* 				<th>{{'label.daterate'|trans([],'BoAdminBundle')}} 2:</th>			*/
/* 				<td>{{ contract.startrate1|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{%endif%}			*/
/* 			{% if contract.hoursnumber1 %}*/
/*             <tr>*/
/* 				<th>{{'label.numberhour'|trans([],'BoAdminBundle')}} 2:</th>			*/
/* 				<td>{{ contract.hoursnumber1 }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.hourlyrate1 %}*/
/*             <tr>*/
/* 				<th>{{'label.hourlyrate'|trans([],'BoAdminBundle')}} 2:</th>			*/
/* 				<td>{{ contract.hourlyrate1 }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.estimatedcost1 %}*/
/*             <tr>*/
/* 				<th>{{'label.estimatedcost'|trans([],'BoAdminBundle')}} 2:</th>			*/
/* 				<td>{{ contract.estimatedcost1|number_format(2, '.', ' ') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.startrate2 %}*/
/*             <tr>*/
/* 				<th>{{'label.daterate'|trans([],'BoAdminBundle')}} 3:</th>			*/
/* 				<td>{{ contract.startrate2|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{%endif%}			*/
/* 			{% if contract.hoursnumber2 %}*/
/*             <tr>*/
/* 				<th>{{'label.numberhour'|trans([],'BoAdminBundle')}} 3:</th>			*/
/* 				<td>{{ contract.hoursnumber2 }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.hourlyrate2 %}*/
/*             <tr>*/
/* 				<th>{{'label.hourlyrate'|trans([],'BoAdminBundle')}} 3:</th>			*/
/* 				<td>{{ contract.hourlyrate2 }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.estimatedcost2 %}*/
/*             <tr>*/
/* 				<th>{{'label.estimatedcost'|trans([],'BoAdminBundle')}} 3:</th>			*/
/* 				<td>{{ contract.estimatedcost2|number_format(2, '.', ' ') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.totalhours %}*/
/*             <tr>*/
/* 				<th>{{'label.totalhours'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ contract.totalhours }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.usedhours %}*/
/*             <tr>*/
/* 				<th>{{'label.usedhours'|trans([],'BoAdminBundle')}}: </th>			*/
/* 				<td>{{ contract.usedhours }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if lefthours is defined and lefthours!=null %}*/
/*             <tr>*/
/* 				<th>{{'label.lefthours'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ lefthours|number_format(0,""," ") }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if contract.hourperweek %}*/
/*             <tr>*/
/* 				<th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ contract.hourperweek }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if contract.receivedate %}*/
/*             <tr>*/
/*                 <th>{{'label.receiveddate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.receivedate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if contract.startdate %}*/
/*             <tr>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ contract.startdate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 		{%if contract.initialenddate %}*/
/* 		<tr>*/
/* 			<th>{{'label.initialdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 	<td>{{ contract.initialenddate|date('Y-m-d') }}</td>*/
/*             	</tr>*/
/* 		{% endif %}*/
/* 		{%if contract.enddate %}*/
/* 			<tr>*/
/* 				<th>{{'label.enddate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 		<td>{{ contract.enddate|date('Y-m-d') }}</td>*/
/*             		</tr>*/
/* 		{% endif %}*/
/* 		{%if contract.renddate %}*/
/* 			<tr>*/
/* 				<th>{{'label.renddate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 		<td>{{ contract.renddate|date('Y-m-d') }}</td>*/
/*             		</tr>*/
/* 		{% endif %}*/
/* 		{%if contract.clientsignaturedate %}*/
/*             <tr>*/
/*                 <th>Client Signature:</th>*/
/*                 <td>{{ contract.clientsignaturedate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 		{% endif %}*/
/* 		{%if contract.clicsignaturedate %}*/
/*             <tr>*/
/*                 <th>Clic Signature:</th>*/
/*                 <td>{{ contract.clicsignaturedate|date('Y-m-d') }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if contract.campus%}*/
/*             <tr>*/
/* 				<th>Location:</th>*/
/* 				<td>{{ contract.campus.designation }}</td>               */
/*             </tr>*/
/* 			{%elseif contract.location%}*/
/*             <tr>*/
/* 				<th>Location:</th>*/
/* 				<td>{{ contract.location }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if contract.adresse%}*/
/*             <tr>*/
/* 				<th>{{'label.address'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.adresse }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/*             <tr>*/
/* 				<th>Status:</th>*/
/* 				<td>{{ status[contract.status] }}</td>               */
/*             </tr>*/
/* 			{% if contract.creationdate %}*/
/*             <tr>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.creationdate|date('Y-m-d H:i:s') }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if contract.createby %}*/
/*             <tr>*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.createby}}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if contract.closeddate %}*/
/*             <tr>*/
/* 				<th>{{'label.closeddate'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.closeddate|date('Y-m-d H:i:s')}}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if contract.status==0 and contract.closedby%}*/
/*             <tr>*/
/* 				<th>{{'label.closedby'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ contract.closedby }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
