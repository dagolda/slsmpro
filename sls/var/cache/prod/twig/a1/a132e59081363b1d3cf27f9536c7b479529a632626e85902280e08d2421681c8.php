<?php

/* BoAdminBundle:Contracts:editform.html.twig */
class __TwigTemplate_b7b5fb60e8b01d5236f2748ecb89511c991bf37929ff9da39caed76fb6e92324 extends Twig_Template
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
        $__internal_50a67a16aebec263faa14e307f89d5fc356582851e48fbd967d57151495d911d = $this->env->getExtension("native_profiler");
        $__internal_50a67a16aebec263faa14e307f89d5fc356582851e48fbd967d57151495d911d->enter($__internal_50a67a16aebec263faa14e307f89d5fc356582851e48fbd967d57151495d911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>\t\t\t
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ordernumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.methodofsupply", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ordernumber", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contractnumber", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "methodofsupply", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.department", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.program", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_client\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.client", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>\t\t\t
\t\t\t</td>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "department", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "program", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.session", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workfields", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "session", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typecontract", array()), 'widget', array("attr" => array("class" => "typecontract span3")));
        echo "</td>
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "workfields", array()), 'widget', array("attr" => array("class" => "field span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.step", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ryacc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlesson", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "step", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ryacc", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startlesson", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.planreceived", array(), "BoAdminBundle"), "html", null, true);
        echo "?</th>
\t\t\t<th class=\"sty_label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.learningplan", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "planreceived", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "learningplan", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "targetlevel", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.initialhours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.usedhours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hourperweek", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "initialhours", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usedhours", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startrate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hoursnumber", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hourlyrate", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startrate1", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hoursnumber1", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hourlyrate1", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t\t<th class=\"sty_label\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t\t<th class=\"sty_label\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startrate2", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hoursnumber2", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hourlyrate2", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estimatedcost", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estimatedcost1", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estimatedcost2", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalhours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalcost", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "totalhours", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "totalcost", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</td>
\t\t\t<th class=\"sty_label\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t";
        // line 127
        if ((array_key_exists("connected", $context) && ((isset($context["connected"]) ? $context["connected"] : $this->getContext($context, "connected")) != null))) {
            // line 128
            echo "\t\t\t\t<th colspan=\"3\" class=\"sty_label\">Confirmation</th>
\t\t\t";
        }
        // line 130
        echo "\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'widget');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "group", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_group\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.client", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>
\t\t\t</td>\t
\t\t\t";
        // line 137
        if ((array_key_exists("connected", $context) && ((isset($context["connected"]) ? $context["connected"] : $this->getContext($context, "connected")) != null))) {
            // line 138
            echo "\t\t\t\t<td colspan=\"3\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confirmation", array()), 'widget');
            echo "</td>\t\t\t
\t\t\t";
        }
        // line 140
        echo "\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.typeoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "language", array()), 'widget', array("attr" => array("class" => "language span3")));
        echo "</td>
\t\t\t<td>";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeoftraining", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typetime", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<th class=\"sty_label\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.traininglocation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<td>&nbsp;</td>\t\t\t\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "campus", array()), 'widget', array("attr" => array("class" => "campusclass span3")));
        echo "</td>
\t\t\t<td>&nbsp;</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<th class=\"sty_label\" colspan=\"3\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td colspan=\"3\">";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget', array("attr" => array("class" => "addressclass span3")));
        echo "</td>\t\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"3\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "schedule", array()), 'widget', array("attr" => array("class" => "schedule span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<th class=\"sty_label\">";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th class=\"sty_label\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractual", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["adlist_form"]) ? $context["adlist_form"] : $this->getContext($context, "adlist_form")), "advisor", array()), 'widget', array("attr" => array("class" => "advisor span3")));
        echo "</td>
\t\t\t<td>";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "coordinator", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contractual", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>\t\t
\t\t<tr>\t\t\t
\t\t\t<th class=\"sty_label\" colspan=\"3\">";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td colspan=\"3\">";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "billingcontact", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t\t\t
\t\t\t<th class=\"sty_label\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contractdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startdate", array()), 'widget', array("attr" => array("class" => "startdate span3")));
        echo "</td>
\t\t\t<td>";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enddate", array()), 'widget', array("attr" => array("class" => "enddate span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t\t<th class=\"sty_label\">Clic signature date</th>
\t\t\t<th class=\"sty_label\">Client signature date</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "receivedate", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clicsignaturedate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clientsignaturedate", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"3\" class=\"sty_label\">Notes</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "notes", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>
\t";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campuss"]) ? $context["campuss"] : $this->getContext($context, "campuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["campus"]) {
            // line 227
            echo "\t\t<input type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "reference", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "reference", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "address", array()), "html", null, true);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_50a67a16aebec263faa14e307f89d5fc356582851e48fbd967d57151495d911d->leave($__internal_50a67a16aebec263faa14e307f89d5fc356582851e48fbd967d57151495d911d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 227,  574 => 226,  567 => 222,  557 => 215,  553 => 214,  549 => 213,  541 => 208,  534 => 204,  530 => 203,  526 => 202,  520 => 199,  516 => 198,  512 => 197,  505 => 193,  499 => 190,  492 => 186,  488 => 185,  484 => 184,  478 => 181,  474 => 180,  470 => 179,  463 => 175,  457 => 172,  450 => 168,  444 => 165,  436 => 160,  432 => 159,  425 => 155,  421 => 154,  414 => 150,  410 => 149,  406 => 148,  400 => 145,  396 => 144,  392 => 143,  387 => 140,  381 => 138,  379 => 137,  372 => 135,  368 => 134,  363 => 132,  359 => 130,  355 => 128,  353 => 127,  349 => 126,  345 => 125,  338 => 121,  334 => 120,  328 => 117,  324 => 116,  317 => 112,  313 => 111,  309 => 110,  303 => 107,  299 => 106,  295 => 105,  288 => 101,  284 => 100,  280 => 99,  274 => 96,  270 => 95,  266 => 94,  259 => 90,  255 => 89,  251 => 88,  245 => 85,  241 => 84,  237 => 83,  230 => 79,  226 => 78,  222 => 77,  216 => 74,  212 => 73,  208 => 72,  201 => 68,  197 => 67,  193 => 66,  187 => 63,  183 => 62,  179 => 61,  172 => 57,  168 => 56,  164 => 55,  158 => 52,  154 => 51,  150 => 50,  143 => 46,  139 => 45,  135 => 44,  129 => 41,  125 => 40,  121 => 39,  114 => 35,  110 => 34,  106 => 33,  100 => 30,  96 => 29,  92 => 28,  85 => 24,  81 => 23,  74 => 21,  70 => 20,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>			*/
/* 			<th width="25%" class="sty_label">{{'label.ordernumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.methodofsupply'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(edit_form.ordernumber) }}</td>*/
/* 			<td>{{ form_widget(edit_form.contractnumber) }}</td>*/
/* 			<td>{{ form_widget(edit_form.methodofsupply) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.customer'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.department'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.program'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(edit_form.client) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_client"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.client'|trans([],'BoAdminBundle')}}" /></button>			*/
/* 			</td>*/
/* 			<td>{{ form_widget(edit_form.department) }}</td>*/
/* 			<td>{{ form_widget(edit_form.program) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.session'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.workfields'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.session) }}</td>*/
/* 			<td>{{ form_widget(edit_form.typecontract, {'attr' : {'class' : 'typecontract span3'}}) }}</td>*/
/* 			<td>{{ form_widget(edit_form.workfields, {'attr' : {'class' : 'field span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.step'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.ryacc'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.startlesson'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.step) }}</td>*/
/* 			<td>{{ form_widget(edit_form.ryacc) }}</td>*/
/* 			<td>{{ form_widget(edit_form.startlesson) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.planreceived'|trans([],'BoAdminBundle')}}?</th>*/
/* 			<th class="sty_label">{{'label.learningplan'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.planreceived) }}</td>*/
/* 			<td>{{ form_widget(edit_form.learningplan) }}</td>*/
/* 			<td>{{ form_widget(edit_form.targetlevel) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.initialhours'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.usedhours'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.hourperweek) }}</td>	*/
/* 			<td>{{ form_widget(edit_form.initialhours) }}</td>*/
/* 			<td>{{ form_widget(edit_form.usedhours) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.numberhour'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.startrate) }}</td>*/
/* 			<td>{{ form_widget(edit_form.hoursnumber) }}</td>*/
/* 			<td>{{ form_widget(edit_form.hourlyrate) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.numberhour'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}} 1</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.startrate1) }}</td>*/
/* 			<td>{{ form_widget(edit_form.hoursnumber1) }}</td>*/
/* 			<td>{{ form_widget(edit_form.hourlyrate1) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}} 2</th>*/
/* 			<th class="sty_label">{{'label.numberhour'|trans([],'BoAdminBundle')}} 2</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}} 2</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.startrate2) }}</td>*/
/* 			<td>{{ form_widget(edit_form.hoursnumber2) }}</td>*/
/* 			<td>{{ form_widget(edit_form.hourlyrate2) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.estimatedcost'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.estimatedcost'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.estimatedcost'|trans([],'BoAdminBundle')}} 2</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.estimatedcost) }}</td>*/
/* 			<td>{{ form_widget(edit_form.estimatedcost1) }}</td>*/
/* 			<td>{{ form_widget(edit_form.estimatedcost2) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.totalhours'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.totalcost'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.totalhours) }}</td>*/
/* 			<td>{{ form_widget(edit_form.totalcost) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<td class="sty_label">{{'label.status'|trans([],'BoAdminBundle')}}</td>*/
/* 			<th class="sty_label">{{'label.group'|trans([],'BoAdminBundle')}}</th>	*/
/* 			{%if connected is defined and connected!=null%}*/
/* 				<th colspan="3" class="sty_label">Confirmation</th>*/
/* 			{%endif%}*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td class="sty_label">{{ form_widget(edit_form.status) }}</td>*/
/* 			<td>*/
/* 				{{ form_widget(edit_form.group) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_group"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.client'|trans([],'BoAdminBundle')}}" /></button>*/
/* 			</td>	*/
/* 			{%if connected is defined and connected!=null%}*/
/* 				<td colspan="3">{{ form_widget(edit_form.confirmation) }}</td>			*/
/* 			{%endif%}*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.typeoftraining'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.language, {'attr' : {'class' : 'language span3'}}) }}</td>*/
/* 			<td>{{ form_widget(edit_form.typeoftraining) }}</td>*/
/* 			<td>{{ form_widget(edit_form.typetime) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<th class="sty_label">{{'label.traininglocation'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.campus'|trans([],'BoAdminBundle')}}</th>*/
/* 			<td>&nbsp;</td>						*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(edit_form.location) }}</td>*/
/* 			<td>{{ form_widget(edit_form.campus, {'attr' : {'class' : 'campusclass span3'}}) }}</td>*/
/* 			<td>&nbsp;</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<th class="sty_label" colspan="3">{{'label.address'|trans([],'BoAdminBundle')}}</th>						*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td colspan="3">{{ form_widget(edit_form.adresse, {'attr' : {'class' : 'addressclass span3'}}) }}</td>						*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="3">{{'label.schedule'|trans([],'BoAdminBundle')}}</th>								*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(edit_form.schedule, {'attr' : {'class' : 'schedule span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<th class="sty_label">{{'label.pa'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th class="sty_label">{{'label.coordinator'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.contractual'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(adlist_form.advisor,{'attr' : {'class' : 'advisor span3'}}) }}</td>*/
/* 			<td>{{ form_widget(edit_form.coordinator) }}</td>*/
/* 			<td>{{ form_widget(edit_form.contractual) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>		*/
/* 		<tr>			*/
/* 			<th class="sty_label" colspan="3">{{'label.billingcontact'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td colspan="3">{{ form_widget(edit_form.billingcontact) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>			*/
/* 			<th class="sty_label">{{'label.contractdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(edit_form.contractdate) }}</td>*/
/* 			<td>{{ form_widget(edit_form.startdate, {'attr' : {'class' : 'startdate span3'}}) }}</td>*/
/* 			<td>{{ form_widget(edit_form.enddate, {'attr' : {'class' : 'enddate span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.receiveddate'|trans([],'BoAdminBundle')}}</th>			*/
/* 			<th class="sty_label">Clic signature date</th>*/
/* 			<th class="sty_label">Client signature date</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.receivedate) }}</td>		*/
/* 			<td>{{ form_widget(edit_form.clicsignaturedate) }}</td>*/
/* 			<td>{{ form_widget(edit_form.clientsignaturedate) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="3" class="sty_label">Notes</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(edit_form.notes) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	{%for campus in campuss%}*/
/* 		<input type="hidden" id="{{campus.reference}}" name="{{campus.reference}}" value="{{campus.address}}"/>*/
/* 	{%endfor%}*/
/* */
