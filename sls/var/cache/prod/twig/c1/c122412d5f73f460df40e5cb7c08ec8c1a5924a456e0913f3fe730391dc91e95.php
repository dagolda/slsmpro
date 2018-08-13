<?php

/* BoAdminBundle:Evaluation:modalform.html.twig */
class __TwigTemplate_d330b08647fef3d40c2ab185abb29edbf3883d81bf1622d51f1d9d224ec0c19e extends Twig_Template
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
        $__internal_2424cd5a836a073261746098a37c3989fe03fff8d6dc1b38676feaf0f1319f3d = $this->env->getExtension("native_profiler");
        $__internal_2424cd5a836a073261746098a37c3989fe03fff8d6dc1b38676feaf0f1319f3d->enter($__internal_2424cd5a836a073261746098a37c3989fe03fff8d6dc1b38676feaf0f1319f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
\t\t\t<th width=\"40%\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaltype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t\t<th width=\"40%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.options", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaltype", array()), 'widget', array("attr" => array("class" => "evaltype span3")));
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options", array()), 'widget', array("attr" => array("class" => "options span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluator", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluator", array()), 'widget', array("attr" => array("class" => "evaluator span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaldate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
\t\t\t<th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evalhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaldate", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaltime", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sendevaldate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sendto", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sendevaldate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sendto", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ryacc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t\t
\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ryacc", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.typeoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typetime", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeoftraining", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "campus", array()), 'widget', array("attr" => array("class" => "campusclass span3")));
        echo "</td>
\t\t\t<td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresse", array()), 'widget', array("attr" => array("class" => "addressclass span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t\t\t\t
\t\t<tr>
\t\t\t<th>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students", array()), 'widget', array("attr" => array("class" => "student span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "name span3")));
        echo "</td>\t\t\t
\t\t\t<td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "student span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expenses", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailstudent", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expenses", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentprofile", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "targetprofile", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " (<span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customerdetail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span>)</th>
            <th>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "customer", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailcontact", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonecontact", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingcontact", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingemail", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingphone", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evallocation", array()), 'widget', array("attr" => array("class" => "evallocation span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "campus", array()), 'widget', array("attr" => array("class" => "campusclass span3")));
        echo "</td>
\t\t\t<td>";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresse", array()), 'widget', array("attr" => array("class" => "addressclass span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t\t\t
\t\t<tr>
            <th>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.readingcomprehension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.writenexpression", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "writencomprehension", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "writenexpression", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rcresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.eeresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rcresult", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eeresult", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.syntax", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.oralcomprehension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "syntaxe", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oralunderstanding", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.qualityofdiscourse", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
            <th>";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pronunciation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qualityofdiscourse", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prononciation", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.grammar", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
            <th>";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.verbs", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grammar", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "verbs", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.vocabulary", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vocabulary", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftgroup", array(), "BoAdminBundle"), "html", null, true);
        echo "<br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftgroup.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></th>
            <th>";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourgroup", array(), "BoAdminBundle"), "html", null, true);
        echo "<br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourgroup.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ftgroup", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourgroup", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftindividual", array(), "BoAdminBundle"), "html", null, true);
        echo "<br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftindividual.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></th>
            <th>";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourftindividual", array(), "BoAdminBundle"), "html", null, true);
        echo "<br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourftindividual.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ftindividual", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourftindividual", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ptstarting", array(), "BoAdminBundle"), "html", null, true);
        echo "<br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ptstarting.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></th>
            <th>";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourptindividual", array(), "BoAdminBundle"), "html", null, true);
        echo "<br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourptindividual.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ptstarting", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourptindividual", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.paid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.paiddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paid", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paiddate", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan='2'>";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan='2'>";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_2424cd5a836a073261746098a37c3989fe03fff8d6dc1b38676feaf0f1319f3d->leave($__internal_2424cd5a836a073261746098a37c3989fe03fff8d6dc1b38676feaf0f1319f3d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 248,  588 => 245,  581 => 241,  577 => 240,  571 => 237,  567 => 236,  560 => 232,  556 => 231,  547 => 227,  541 => 226,  534 => 222,  530 => 221,  521 => 217,  515 => 216,  508 => 212,  504 => 211,  495 => 207,  489 => 206,  482 => 202,  476 => 199,  469 => 195,  465 => 194,  459 => 191,  455 => 190,  448 => 186,  444 => 185,  438 => 182,  434 => 181,  427 => 177,  423 => 176,  417 => 173,  413 => 172,  406 => 168,  402 => 167,  395 => 163,  391 => 162,  383 => 157,  379 => 156,  373 => 153,  369 => 152,  362 => 148,  358 => 147,  352 => 144,  348 => 143,  341 => 139,  337 => 138,  331 => 135,  327 => 134,  320 => 130,  316 => 129,  310 => 126,  306 => 125,  299 => 121,  295 => 120,  289 => 117,  285 => 116,  278 => 112,  274 => 111,  268 => 108,  262 => 107,  255 => 103,  251 => 102,  245 => 99,  241 => 98,  234 => 94,  230 => 93,  224 => 90,  220 => 89,  213 => 85,  209 => 84,  203 => 81,  199 => 80,  192 => 76,  188 => 75,  182 => 72,  178 => 71,  171 => 67,  165 => 64,  158 => 60,  154 => 59,  148 => 56,  144 => 55,  137 => 51,  133 => 50,  127 => 47,  123 => 46,  116 => 42,  112 => 41,  106 => 38,  102 => 37,  95 => 33,  91 => 32,  85 => 29,  81 => 28,  74 => 24,  70 => 23,  64 => 20,  60 => 19,  53 => 15,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0">*/
/* 		<tr>*/
/* 			<th width="40%">{{'label.evaltype'|trans([],'BoAdminBundle')}}</th>		*/
/* 			<th width="40%">{{'label.options'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.evaltype, {'attr' : {'class' : 'evaltype span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.options, {'attr' : {'class' : 'options span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<th>{{'label.evaluator'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.evaluator, {'attr' : {'class' : 'evaluator span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.evaldate'|trans([],'BoAdminBundle')}}</th>  */
/* 			<th>{{'label.evalhour'|trans([],'BoAdminBundle')}}</th>  			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.evaldate) }}</td>	*/
/* 			<td>{{ form_widget(form.evaltime) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.sendevaldate'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.sendto'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.sendevaldate) }}</td>*/
/* 			<td>{{ form_widget(form.sendto) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.language'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th>{{'label.ryacc'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>			*/
/* 			<td>{{ form_widget(form.languages) }}</td>*/
/* 			<td>{{ form_widget(form.ryacc) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.typeoftraining'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.typetime) }}</td>*/
/* 			<td>{{ form_widget(form.typeoftraining) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.campus'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.address'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.campus, {'attr' : {'class' : 'campusclass span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.addresse, {'attr' : {'class' : 'addressclass span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>				*/
/* 		<tr>*/
/* 			<th>{{'label.student'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.students, {'attr' : {'class' : 'student span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.firstname, {'attr' : {'class' : 'name span3'}}) }}</td>			*/
/* 			<td>{{ form_widget(form.name, {'attr' : {'class' : 'student span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.title) }}</td>*/
/* 			<td>{{ form_widget(form.phone) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.studentemail'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.expenses'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.emailstudent) }}</td>*/
/* 			<td>{{ form_widget(form.expenses) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.currentprofile'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.targetprofile'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.currentprofile) }}</td>		*/
/* 			<td>{{ form_widget(form.targetprofile) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.customer'|trans([],'BoAdminBundle')}} (<span class="customer_detail">{{'label.customerdetail'|trans([],'BoAdminBundle')}}</span>)</th>*/
/*             <th>{{'label.contact'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.customer) }}</td>	*/
/* 			<td>{{ form_widget(form.contact) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.contactemail'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.contactphone'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.emailcontact) }}</td>*/
/* 			<td>{{ form_widget(form.phonecontact) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.billingcontact'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.billingemail'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.billingcontact) }}</td>*/
/* 			<td>{{ form_widget(form.billingemail) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.billingphone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.location'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.billingphone) }}</td>	*/
/* 			<td>{{ form_widget(form.evallocation, {'attr' : {'class' : 'evallocation span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.campus'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.address'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.campus, {'attr' : {'class' : 'campusclass span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.addresse, {'attr' : {'class' : 'addressclass span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>			*/
/* 		<tr>*/
/*             <th>{{'label.readingcomprehension'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.writenexpression'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.writencomprehension) }}</td>*/
/* 			<td>{{ form_widget(form.writenexpression) }}</td>*/
/* 		</tr>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.rcresult'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.eeresult'|trans([],'BoAdminBundle')}}</th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.rcresult) }}</td>	*/
/* 			<td>{{ form_widget(form.eeresult) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.syntax'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.oralcomprehension'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.syntaxe) }}</td>*/
/* 			<td>{{ form_widget(form.oralunderstanding) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.qualityofdiscourse'|trans([],'BoAdminBundle')}}</th>		*/
/*             <th>{{'label.pronunciation'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.qualityofdiscourse) }}</td>		*/
/* 			<td>{{ form_widget(form.prononciation) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.grammar'|trans([],'BoAdminBundle')}}</th>		*/
/*             <th>{{'label.verbs'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.grammar) }}</td>	*/
/* 			<td>{{ form_widget(form.verbs) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.vocabulary'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.vocabulary) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.ftgroup'|trans([],'BoAdminBundle')}}<br/><span class="customer_detail">{{'label.ftgroup.detail'|trans([],'BoAdminBundle')}}</span></th>*/
/*             <th>{{'label.hourgroup'|trans([],'BoAdminBundle')}}<br/><span class="customer_detail">{{'label.hourgroup.detail'|trans([],'BoAdminBundle')}}</span></th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.ftgroup) }}</td>	*/
/* 			<td>{{ form_widget(form.hourgroup) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.ftindividual'|trans([],'BoAdminBundle')}}<br/><span class="customer_detail">{{'label.ftindividual.detail'|trans([],'BoAdminBundle')}}</span></th>*/
/*             <th>{{'label.hourftindividual'|trans([],'BoAdminBundle')}}<br/><span class="customer_detail">{{'label.hourftindividual.detail'|trans([],'BoAdminBundle')}}</span></th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.ftindividual) }}</td>	*/
/* 			<td>{{ form_widget(form.hourftindividual) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.ptstarting'|trans([],'BoAdminBundle')}}<br/><span class="customer_detail">{{'label.ptstarting.detail'|trans([],'BoAdminBundle')}}</span></th>*/
/*             <th>{{'label.hourptindividual'|trans([],'BoAdminBundle')}}<br/><span class="customer_detail">{{'label.hourptindividual.detail'|trans([],'BoAdminBundle')}}</span></th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.ptstarting) }}</td>	*/
/* 			<td>{{ form_widget(form.hourptindividual) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.paid'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.paiddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.paid) }}</td>	*/
/* 			<td>{{ form_widget(form.paiddate) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan='2'>{{'label.comment'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan='2'>{{ form_widget(form.comment) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
