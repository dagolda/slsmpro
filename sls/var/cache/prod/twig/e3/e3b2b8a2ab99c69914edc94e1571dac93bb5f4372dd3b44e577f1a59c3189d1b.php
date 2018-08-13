<?php

/* BoAdminBundle:Evaluation:rightshow.html.twig */
class __TwigTemplate_a4b24c64cda085b763ceacd6869d7fe2c49b1289714516a013a951c815a9d9aa extends Twig_Template
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
        $__internal_142ff7c3e7ca2d9a50377fffe44fcac5a70d77080d780452baad1ea72af39df1 = $this->env->getExtension("native_profiler");
        $__internal_142ff7c3e7ca2d9a50377fffe44fcac5a70d77080d780452baad1ea72af39df1->enter($__internal_142ff7c3e7ca2d9a50377fffe44fcac5a70d77080d780452baad1ea72af39df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:rightshow.html.twig"));

        // line 1
        echo "<div class=\"employee-identity\">Evaluation Id:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()), "html", null, true);
        echo "</div>
    <table> 
        <tbody>
\t\t\t";
        // line 4
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "customer", array())) {
            // line 5
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th width=\"125px\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "customer", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 10
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltype", array())) {
            // line 11
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaltype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td valign=\"bottom\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltype", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "options", array())) {
            // line 17
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.options", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td valign=\"bottom\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "options", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 22
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array())) {
            // line 23
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th width=\"120px\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluator", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaluator", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 28
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaldate", array())) {
            // line 29
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaldate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaldate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 34
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltime", array())) {
            // line 35
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evalhour", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evaltime", array()), "H:i"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 40
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "sendevaldate", array())) {
            // line 41
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th width=\"120px\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sendevaldate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "sendevaldate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 46
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "sendto", array())) {
            // line 47
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th width=\"120px\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sendto", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "sendto", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 52
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ryacc", array())) {
            // line 53
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th width=\"120px\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ryacc", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ryacc", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 58
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "typetime", array())) {
            // line 59
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th width=\"120px\">FT or PT:</th>
\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "typetime", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 64
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "languages", array())) {
            // line 65
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "languages", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 70
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "typeoftraining", array())) {
            // line 71
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.typeoftraining", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "typeoftraining", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 76
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "expenses", array())) {
            // line 77
            echo "\t\t\t\t<tr>\t\t
\t\t\t\t\t<th>";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expenses", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "expenses", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 82
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evallocation", array())) {
            // line 83
            echo "            <tr>
\t\t\t\t<th>Location:</th>
\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "evallocation", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 88
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "campus", array())) {
            // line 89
            echo "            <tr>
\t\t\t\t<th>Campus:</th>
\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "campus", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 94
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "addresse", array())) {
            // line 95
            echo "            <tr>
\t\t\t\t<th>";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "addresse", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 100
        echo "\t\t\t";
        if ((((isset($context["resdisp"]) ? $context["resdisp"] : $this->getContext($context, "resdisp")) == 2) || ((isset($context["resdisp"]) ? $context["resdisp"] : $this->getContext($context, "resdisp")) == "right"))) {
            // line 101
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "writencomprehension", array())) {
                // line 102
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.writencomprehension", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t<td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "writencomprehension", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "writenexpression", array())) {
                // line 108
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.writenexpression", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t<td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "writenexpression", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 112
            echo "\t\t
\t\t\t\t";
            // line 113
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "rcresult", array())) {
                // line 114
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rcresult", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>\t\t\t
\t\t\t\t\t<td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "rcresult", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "eeresult", array())) {
                // line 120
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.eeresult", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>\t\t\t
\t\t\t\t\t<td>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "eeresult", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 124
            echo "\t\t\t
\t\t\t\t";
            // line 125
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "oralunderstanding", array())) {
                // line 126
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.orc", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t<td valign=\"bottom\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "oralunderstanding", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 130
            echo "\t
\t\t\t\t";
            // line 131
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "qualityofdiscourse", array())) {
                // line 132
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.qsp", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t<td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "qualityofdiscourse", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "prononciation", array())) {
                // line 138
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pr", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t<td>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "prononciation", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "grammar", array())) {
                // line 144
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gr", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t<td>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "grammar", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "verbs", array())) {
                // line 150
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.vb", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t<td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "verbs", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 154
            echo "\t
\t\t\t\t";
            // line 155
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "vocabulary", array())) {
                // line 156
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.voc", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>\t\t\t
\t\t\t\t\t<td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "vocabulary", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "syntaxe", array())) {
                // line 162
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 163
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.s", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>\t\t\t
\t\t\t\t\t<td>";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "syntaxe", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 166
            echo "\t
\t\t\t";
        }
        // line 168
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ftgroup", array())) {
            // line 169
            echo "            <tr>
\t\t\t\t<th>";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftgroup", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ftgroup", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 174
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "hourgroup", array())) {
            // line 175
            echo "            <tr>
\t\t\t\t<th>";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourgroup", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "hourgroup", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 180
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ftindividual", array())) {
            // line 181
            echo "            <tr>
\t\t\t\t<th>";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftindividual", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ftindividual", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 186
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "hourftindividual", array())) {
            // line 187
            echo "            <tr>
\t\t\t\t<th>";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourftindividual", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "hourftindividual", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 192
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ptstarting", array())) {
            // line 193
            echo "            <tr>
\t\t\t\t<th>";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ptstarting", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "ptstarting", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 198
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "hourptindividual", array())) {
            // line 199
            echo "            <tr>
\t\t\t\t<th>";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourptindividual", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "hourptindividual", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 204
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "online", array())) {
            // line 205
            echo "            <tr>
\t\t\t\t<th>";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.online", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td><input type=\"checkbox\" ";
            // line 207
            if (($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "online", array()) == 1)) {
                echo "checked";
            }
            echo " disabled/></td>
            </tr>
\t\t\t";
        }
        // line 210
        echo "            <tr>
\t\t\t\t<th>Status:</th>
\t\t\t\t<td>";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()), array(), "array"), "html", null, true);
        echo "</td>               
            </tr>
\t\t\t";
        // line 214
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "creationdate", array())) {
            // line 215
            echo "            <tr>
\t\t\t\t<th>";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 217
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 220
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "createby", array())) {
            // line 221
            echo "            <tr>
\t\t\t\t<th>";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "createby", array()), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 226
        echo "        </tbody>
    </table>
";
        
        $__internal_142ff7c3e7ca2d9a50377fffe44fcac5a70d77080d780452baad1ea72af39df1->leave($__internal_142ff7c3e7ca2d9a50377fffe44fcac5a70d77080d780452baad1ea72af39df1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 226,  616 => 223,  612 => 222,  609 => 221,  606 => 220,  600 => 217,  596 => 216,  593 => 215,  591 => 214,  586 => 212,  582 => 210,  574 => 207,  570 => 206,  567 => 205,  564 => 204,  558 => 201,  554 => 200,  551 => 199,  548 => 198,  542 => 195,  538 => 194,  535 => 193,  532 => 192,  526 => 189,  522 => 188,  519 => 187,  516 => 186,  510 => 183,  506 => 182,  503 => 181,  500 => 180,  494 => 177,  490 => 176,  487 => 175,  484 => 174,  478 => 171,  474 => 170,  471 => 169,  468 => 168,  464 => 166,  458 => 164,  454 => 163,  451 => 162,  448 => 161,  442 => 158,  438 => 157,  435 => 156,  433 => 155,  430 => 154,  424 => 152,  420 => 151,  417 => 150,  414 => 149,  408 => 146,  404 => 145,  401 => 144,  398 => 143,  392 => 140,  388 => 139,  385 => 138,  382 => 137,  376 => 134,  372 => 133,  369 => 132,  367 => 131,  364 => 130,  358 => 128,  354 => 127,  351 => 126,  349 => 125,  346 => 124,  340 => 122,  336 => 121,  333 => 120,  330 => 119,  324 => 116,  320 => 115,  317 => 114,  315 => 113,  312 => 112,  306 => 110,  302 => 109,  299 => 108,  296 => 107,  290 => 104,  286 => 103,  283 => 102,  280 => 101,  277 => 100,  271 => 97,  267 => 96,  264 => 95,  261 => 94,  255 => 91,  251 => 89,  248 => 88,  242 => 85,  238 => 83,  235 => 82,  229 => 79,  225 => 78,  222 => 77,  219 => 76,  213 => 73,  209 => 72,  206 => 71,  203 => 70,  197 => 67,  193 => 66,  190 => 65,  187 => 64,  181 => 61,  177 => 59,  174 => 58,  168 => 55,  164 => 54,  161 => 53,  158 => 52,  152 => 49,  148 => 48,  145 => 47,  142 => 46,  136 => 43,  132 => 42,  129 => 41,  126 => 40,  120 => 37,  116 => 36,  113 => 35,  110 => 34,  104 => 31,  100 => 30,  97 => 29,  94 => 28,  86 => 25,  82 => 24,  79 => 23,  76 => 22,  70 => 19,  66 => 18,  63 => 17,  60 => 16,  54 => 13,  50 => 12,  47 => 11,  44 => 10,  38 => 7,  34 => 6,  31 => 5,  29 => 4,  22 => 1,);
    }
}
/* <div class="employee-identity">Evaluation Id:{{ evaluation.id }}</div>*/
/*     <table> */
/*         <tbody>*/
/* 			{% if evaluation.customer %}*/
/* 				<tr>*/
/* 					<th width="125px">{{'label.customer'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.customer }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.evaltype %}*/
/* 				<tr>		*/
/* 					<th>{{'label.evaltype'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td valign="bottom">{{ evaluation.evaltype }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.options %}*/
/* 				<tr>		*/
/* 					<th>{{'label.options'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td valign="bottom">{{ evaluation.options }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.evaluator %}*/
/* 				<tr>		*/
/* 					<th width="120px">{{'label.evaluator'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.evaluator.firstname }} {{ evaluation.evaluator.name }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.evaldate %}*/
/* 				<tr>*/
/* 					<th>{{'label.evaldate'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.evaldate|date('Y-m-d') }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.evaltime %}*/
/* 				<tr>*/
/* 					<th>{{'label.evalhour'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.evaltime|date('H:i') }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.sendevaldate %}*/
/* 				<tr>		*/
/* 					<th width="120px">{{'label.sendevaldate'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.sendevaldate|date('Y-m-d') }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.sendto %}*/
/* 				<tr>		*/
/* 					<th width="120px">{{'label.sendto'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.sendto }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.ryacc %}*/
/* 				<tr>		*/
/* 					<th width="120px">{{'label.ryacc'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.ryacc }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.typetime %}*/
/* 				<tr>		*/
/* 					<th width="120px">FT or PT:</th>*/
/* 					<td>{{ evaluation.typetime }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.languages %}*/
/* 				<tr>		*/
/* 					<th>{{'label.language'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.languages }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.typeoftraining %}*/
/* 				<tr>		*/
/* 					<th>{{'label.typeoftraining'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.typeoftraining }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{%if evaluation.expenses %}*/
/* 				<tr>		*/
/* 					<th>{{'label.expenses'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.expenses }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.evallocation %}*/
/*             <tr>*/
/* 				<th>Location:</th>*/
/* 				<td>{{ evaluation.evallocation }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if evaluation.campus %}*/
/*             <tr>*/
/* 				<th>Campus:</th>*/
/* 				<td>{{ evaluation.campus }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if evaluation.addresse%}*/
/*             <tr>*/
/* 				<th>{{'label.address'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ evaluation.addresse }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if resdisp==2 or resdisp=="right"%}*/
/* 				{% if evaluation.writencomprehension %}*/
/* 				<tr>*/
/* 					<th>{{'label.writencomprehension'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.writencomprehension }}</td>*/
/* 				</tr>*/
/* 				{%endif%}*/
/* 				{% if evaluation.writenexpression %}*/
/* 				<tr>*/
/* 					<th>{{'label.writenexpression'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.writenexpression }}</td>*/
/* 				</tr>*/
/* 				{%endif%}		*/
/* 				{% if evaluation.rcresult %}*/
/* 				<tr>*/
/* 					<th>{{'label.rcresult'|trans([],'BoAdminBundle')}}:</th>			*/
/* 					<td>{{ evaluation.rcresult }}</td>*/
/* 				</tr>*/
/* 				{%endif%}*/
/* 				{% if evaluation.eeresult %}*/
/* 				<tr>*/
/* 					<th>{{'label.eeresult'|trans([],'BoAdminBundle')}}:</th>			*/
/* 					<td>{{ evaluation.eeresult }}</td>*/
/* 				</tr>*/
/* 				{%endif%}			*/
/* 				{% if evaluation.oralunderstanding %}*/
/* 				<tr>*/
/* 					<th>{{'label.orc'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td valign="bottom">{{ evaluation.oralunderstanding }}</td>*/
/* 				</tr>*/
/* 				{%endif%}	*/
/* 				{% if evaluation.qualityofdiscourse %}*/
/* 				<tr>*/
/* 					<th>{{'label.qsp'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.qualityofdiscourse }}</td>*/
/* 				</tr>*/
/* 				{%endif%}*/
/* 				{% if evaluation.prononciation %}*/
/* 				<tr>*/
/* 					<th>{{'label.pr'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.prononciation }}</td>*/
/* 				</tr>*/
/* 				{%endif%}*/
/* 				{% if evaluation.grammar %}*/
/* 				<tr>*/
/* 					<th>{{'label.gr'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.grammar }}</td>*/
/* 				</tr>*/
/* 				{%endif%}*/
/* 				{% if evaluation.verbs %}*/
/* 				<tr>*/
/* 					<th>{{'label.vb'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ evaluation.verbs }}</td>*/
/* 				</tr>*/
/* 				{%endif%}	*/
/* 				{% if evaluation.vocabulary %}*/
/* 				<tr>*/
/* 					<th>{{'label.voc'|trans([],'BoAdminBundle')}}:</th>			*/
/* 					<td>{{ evaluation.vocabulary }}</td>*/
/* 				</tr>*/
/* 				{%endif%}*/
/* 				{% if evaluation.syntaxe %}*/
/* 				<tr>*/
/* 					<th>{{'label.s'|trans([],'BoAdminBundle')}}:</th>			*/
/* 					<td>{{ evaluation.syntaxe }}</td>*/
/* 				</tr>*/
/* 				{%endif%}	*/
/* 			{%endif%}*/
/* 			{% if evaluation.ftgroup %}*/
/*             <tr>*/
/* 				<th>{{'label.ftgroup'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ evaluation.ftgroup }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.hourgroup %}*/
/*             <tr>*/
/* 				<th>{{'label.hourgroup'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ evaluation.hourgroup }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.ftindividual %}*/
/*             <tr>*/
/* 				<th>{{'label.ftindividual'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ evaluation.ftindividual }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.hourftindividual %}*/
/*             <tr>*/
/* 				<th>{{'label.hourftindividual'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ evaluation.hourftindividual }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.ptstarting %}*/
/*             <tr>*/
/* 				<th>{{'label.ptstarting'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ evaluation.ptstarting }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.hourptindividual %}*/
/*             <tr>*/
/* 				<th>{{'label.hourptindividual'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ evaluation.hourptindividual }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if evaluation.online %}*/
/*             <tr>*/
/* 				<th>{{'label.online'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td><input type="checkbox" {%if evaluation.online==1 %}checked{%endif%} disabled/></td>*/
/*             </tr>*/
/* 			{%endif%}*/
/*             <tr>*/
/* 				<th>Status:</th>*/
/* 				<td>{{ status[evaluation.status] }}</td>               */
/*             </tr>*/
/* 			{% if evaluation.creationdate %}*/
/*             <tr>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ evaluation.creationdate|date('Y-m-d H:i:s') }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if evaluation.createby %}*/
/*             <tr>*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ evaluation.createby}}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
