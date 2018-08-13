<?php

/* BoAdminBundle:Contracts:newform.html.twig */
class __TwigTemplate_e8422e759b3ae721495a7992b8811a5232a9356b8dd5d08f250f8e3e90263ce7 extends Twig_Template
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
        $__internal_bebedb4e3f2e9e360364299c153b2680a56613ebfcc23074b9c931976adc6a67 = $this->env->getExtension("native_profiler");
        $__internal_bebedb4e3f2e9e360364299c153b2680a56613ebfcc23074b9c931976adc6a67->enter($__internal_bebedb4e3f2e9e360364299c153b2680a56613ebfcc23074b9c931976adc6a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:newform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordernumber", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contractnumber", array()), 'widget', array("attr" => array("class" => "contractnumber span3")));
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "methodofsupply", array()), 'widget');
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
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_client\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.client", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>
\t\t\t</td>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "department", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "program", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "session", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typecontract", array()), 'widget', array("attr" => array("class" => "typecontract span3")));
        echo "</td>
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "workfields", array()), 'widget', array("attr" => array("class" => "field span3")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ryacc", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startlesson", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "planreceived", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "learningplan", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "targetlevel", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startrate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hoursnumber", array()), 'widget', array("attr" => array("class" => "hoursnumber span3")));
        echo "</td>
\t\t\t<td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourlyrate", array()), 'widget', array("attr" => array("class" => "hourlyrate span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startrate1", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hoursnumber1", array()), 'widget', array("attr" => array("class" => "hoursnumber1 span3")));
        echo "</td>
\t\t\t<td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourlyrate1", array()), 'widget', array("attr" => array("class" => "hourlyrate1 span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t\t<th class=\"sty_label\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t\t<th class=\"sty_label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startrate2", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hoursnumber2", array()), 'widget', array("attr" => array("class" => "hoursnumber2 span3")));
        echo "</td>
\t\t\t<td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourlyrate2", array()), 'widget', array("attr" => array("class" => "hourlyrate2 span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.estimatedcost", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estimatedcost", array()), 'widget', array("attr" => array("class" => "estimatedcost span3")));
        echo "</td>
\t\t\t<td>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estimatedcost1", array()), 'widget', array("attr" => array("class" => "estimatedcost1 span3")));
        echo "</td>
\t\t\t<td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estimatedcost2", array()), 'widget', array("attr" => array("class" => "estimatedcost2 span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalhours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalcost", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalhours", array()), 'widget', array("attr" => array("class" => "totalhours span3")));
        echo "</td>
\t\t\t<td>";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalcost", array()), 'widget', array("attr" => array("class" => "totalcost span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.typeoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget', array("attr" => array("class" => "language span3")));
        echo "</td>
\t\t\t<td>";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeoftraining", array()), 'widget', array("attr" => array("class" => "typetraining span3")));
        echo "</td>
\t\t\t<td>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typetime", array()), 'widget', array("attr" => array("class" => "tipetime span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t\t<th class=\"sty_label\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t\t
\t\t</tr>
\t\t<tr>\t
\t\t\t<td>";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourperweek", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["adlist_form"]) ? $context["adlist_form"] : $this->getContext($context, "adlist_form")), "advisor", array()), 'widget', array("attr" => array("class" => "advisor span3")));
        echo "</td>
\t\t\t<td>";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t\t\t
\t\t\t<th class=\"sty_label\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.traininglocation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget', array("attr" => array("class" => "location span3")));
        echo "</td>
\t\t\t<td>";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "campus", array()), 'widget', array("attr" => array("class" => "campusclass span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan=\"3\" class=\"sty_label\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "addressclass span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"3\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "schedule", array()), 'widget', array("attr" => array("class" => "schedule span3")));
        echo "</td>
\t\t</tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\" class=\"group_pane\">
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<td colspan=\"3\"><legend>";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend></td>\t\t\t\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">
\t\t\t\t<span class=\"gro_list\">";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group", array()), 'widget', array("attr" => array("class" => "group span3")));
        echo "</span>
\t\t\t\t<button type=\"button\" class=\"show_gro_new\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.showform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.new", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"hide_gro_new\"><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/moins.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.hideform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr id=\"group_form\"><td colspan=\"3\">";
        // line 170
        $this->loadTemplate("BoAdminBundle:Contracts:groupform.html.twig", "BoAdminBundle:Contracts:newform.html.twig", 170)->display($context);
        echo "</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<td colspan=\"3\"><legend>";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend></td>\t
\t\t</tr>
\t\t<tr>\t
\t\t\t<td colspan=\"3\">
\t\t\t\t<span class=\"coo_list\">";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordinator", array()), 'widget', array("attr" => array("class" => "coordinator span3")));
        echo "</span>
\t\t\t\t<button type=\"button\" class=\"show_coo_new\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.showform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.new", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"hide_coo_new\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/moins.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.hideform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t</td>\t\t
\t\t</tr>
\t\t<tr id=\"coordinator_form\"><td colspan=\"3\">";
        // line 184
        $this->loadTemplate("BoAdminBundle:Contracts:coordinatorform.html.twig", "BoAdminBundle:Contracts:newform.html.twig", 184)->display($context);
        echo "</td></tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<td colspan=\"3\"><legend>";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractual", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<span class=\"con_list\">";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contractual", array()), 'widget', array("attr" => array("class" => "contractual span3")));
        echo "</span>
\t\t\t\t<button type=\"button\" class=\"show_con_new\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.showform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.new", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"hide_con_new\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/moins.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.hideform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t</td>\t\t\t
\t\t</tr>
\t\t<tr id=\"contractual_form\"><td colspan=\"3\">";
        // line 196
        $this->loadTemplate("BoAdminBundle:Contracts:contractualform.html.twig", "BoAdminBundle:Contracts:newform.html.twig", 196)->display($context);
        echo "</td></tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t\t\t
\t\t\t<td colspan=\"3\"><legend>";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend></td>\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td colspan=\"3\">
\t\t\t\t<span class=\"cb_list\">";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingcontact", array()), 'widget', array("attr" => array("class" => "cbilling span3")));
        echo "</span>
\t\t\t\t<button type=\"button\" class=\"show_cb_new\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.showform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.new", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"hide_cb_new\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/moins.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.hideform", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t</td>\t\t
\t\t</tr>
\t\t<tr id=\"cbilling_form\"><td colspan=\"3\">";
        // line 208
        $this->loadTemplate("BoAdminBundle:Contracts:cbillingform.html.twig", "BoAdminBundle:Contracts:newform.html.twig", 208)->display($context);
        echo "</td></tr>
\t\t<tr class=\"cb_hr\"><td colspan=\"3\"><hr></td></tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t\t\t
\t\t\t<th class=\"sty_label\">";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contractdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget', array("attr" => array("class" => "startdate span3")));
        echo "</td>
\t\t\t<td>";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget', array("attr" => array("class" => "enddate span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t\t<th class=\"sty_label\">Clic signature date</th>
\t\t\t<th class=\"sty_label\">Client signature date</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "receivedate", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clicsignaturedate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientsignaturedate", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"3\" class=\"sty_label\">Notes</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notes", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>
\t";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campuss"]) ? $context["campuss"] : $this->getContext($context, "campuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["campus"]) {
            // line 242
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
        // line 244
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["outcharges"]) ? $context["outcharges"] : $this->getContext($context, "outcharges")));
        foreach ($context['_seq'] as $context["_key"] => $context["outcharge"]) {
            // line 245
            echo "\t\t<input type=\"hidden\" id=\"emp";
            echo twig_escape_filter($this->env, $this->getAttribute($context["outcharge"], 0, array(), "array"), "html", null, true);
            echo "\" name=\"emp";
            echo twig_escape_filter($this->env, $this->getAttribute($context["outcharge"], 0, array(), "array"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["outcharge"], 1, array(), "array"), "html", null, true);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['outcharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bebedb4e3f2e9e360364299c153b2680a56613ebfcc23074b9c931976adc6a67->leave($__internal_bebedb4e3f2e9e360364299c153b2680a56613ebfcc23074b9c931976adc6a67_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 245,  645 => 244,  632 => 242,  628 => 241,  621 => 237,  611 => 230,  607 => 229,  603 => 228,  595 => 223,  588 => 219,  584 => 218,  580 => 217,  574 => 214,  570 => 213,  566 => 212,  559 => 208,  549 => 205,  541 => 204,  537 => 203,  530 => 199,  524 => 196,  514 => 193,  506 => 192,  502 => 191,  495 => 187,  489 => 184,  479 => 181,  471 => 180,  467 => 179,  460 => 175,  452 => 170,  442 => 167,  434 => 166,  430 => 165,  423 => 161,  414 => 155,  408 => 152,  401 => 148,  395 => 145,  388 => 141,  384 => 140,  378 => 137,  374 => 136,  367 => 132,  363 => 131,  359 => 130,  353 => 127,  349 => 126,  345 => 125,  338 => 121,  334 => 120,  330 => 119,  324 => 116,  320 => 115,  316 => 114,  309 => 110,  305 => 109,  299 => 106,  295 => 105,  288 => 101,  284 => 100,  280 => 99,  274 => 96,  270 => 95,  266 => 94,  259 => 90,  255 => 89,  251 => 88,  245 => 85,  241 => 84,  237 => 83,  230 => 79,  226 => 78,  222 => 77,  216 => 74,  212 => 73,  208 => 72,  201 => 68,  197 => 67,  193 => 66,  187 => 63,  183 => 62,  179 => 61,  172 => 57,  168 => 56,  164 => 55,  158 => 52,  154 => 51,  150 => 50,  143 => 46,  139 => 45,  135 => 44,  129 => 41,  125 => 40,  121 => 39,  114 => 35,  110 => 34,  106 => 33,  100 => 30,  96 => 29,  92 => 28,  85 => 24,  81 => 23,  74 => 21,  70 => 20,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>			*/
/* 			<th width="25%" class="sty_label">{{'label.ordernumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.methodofsupply'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.ordernumber) }}</td>*/
/* 			<td>{{ form_widget(form.contractnumber, {'attr' : {'class' : 'contractnumber span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.methodofsupply) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.customer'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.department'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.program'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.client) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_client"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.client'|trans([],'BoAdminBundle')}}" /></button>*/
/* 			</td>*/
/* 			<td>{{ form_widget(form.department) }}</td>*/
/* 			<td>{{ form_widget(form.program) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.session'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.workfields'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.session) }}</td>*/
/* 			<td>{{ form_widget(form.typecontract, {'attr' : {'class' : 'typecontract span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.workfields, {'attr' : {'class' : 'field span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.step'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.ryacc'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.startlesson'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.step) }}</td>*/
/* 			<td>{{ form_widget(form.ryacc) }}</td>*/
/* 			<td>{{ form_widget(form.startlesson) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.planreceived'|trans([],'BoAdminBundle')}}?</th>*/
/* 			<th class="sty_label">{{'label.learningplan'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.planreceived) }}</td>*/
/* 			<td>{{ form_widget(form.learningplan) }}</td>*/
/* 			<td>{{ form_widget(form.targetlevel) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.numberhour'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startrate) }}</td>*/
/* 			<td>{{ form_widget(form.hoursnumber, {'attr' : {'class' : 'hoursnumber span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.hourlyrate, {'attr' : {'class' : 'hourlyrate span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.numberhour'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}} 1</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startrate1) }}</td>*/
/* 			<td>{{ form_widget(form.hoursnumber1, {'attr' : {'class' : 'hoursnumber1 span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.hourlyrate1, {'attr' : {'class' : 'hourlyrate1 span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}} 2</th>*/
/* 			<th class="sty_label">{{'label.numberhour'|trans([],'BoAdminBundle')}} 2</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}} 2</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startrate2) }}</td>*/
/* 			<td>{{ form_widget(form.hoursnumber2, {'attr' : {'class' : 'hoursnumber2 span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.hourlyrate2, {'attr' : {'class' : 'hourlyrate2 span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.estimatedcost'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.estimatedcost'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.estimatedcost'|trans([],'BoAdminBundle')}} 2</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.estimatedcost, {'attr' : {'class' : 'estimatedcost span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.estimatedcost1, {'attr' : {'class' : 'estimatedcost1 span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.estimatedcost2, {'attr' : {'class' : 'estimatedcost2 span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.totalhours'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.totalcost'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.totalhours, {'attr' : {'class' : 'totalhours span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.totalcost, {'attr' : {'class' : 'totalcost span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.typeoftraining'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.language, {'attr' : {'class' : 'language span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.typeoftraining, {'attr' : {'class' : 'typetraining span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.typetime, {'attr' : {'class' : 'tipetime span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.pa'|trans([],'BoAdminBundle')}}</th>			*/
/* 			<th class="sty_label">{{'label.status'|trans([],'BoAdminBundle')}}</th>					*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td>{{ form_widget(form.hourperweek) }}</td>		*/
/* 			<td>{{ form_widget(adlist_form.advisor,{'attr' : {'class' : 'advisor span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.status) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>			*/
/* 			<th class="sty_label">{{'label.traininglocation'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.campus'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.location, {'attr' : {'class' : 'location span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.campus, {'attr' : {'class' : 'campusclass span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan="3" class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}}</th>								*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(form.adresse, {'attr' : {'class' : 'addressclass span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="3">{{'label.schedule'|trans([],'BoAdminBundle')}}</th>								*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(form.schedule, {'attr' : {'class' : 'schedule span3'}}) }}</td>*/
/* 		</tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row" class="group_pane">*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<td colspan="3"><legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend></td>							*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">*/
/* 				<span class="gro_list">{{ form_widget(form.group, {'attr' : {'class' : 'group span3'}}) }}</span>*/
/* 				<button type="button" class="show_gro_new"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'action.showform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.new'|trans([],'BoAdminBundle')}}</button>*/
/* 				<button type="button" class="hide_gro_new"><img src="{{ asset('images/actions/moins.jpg') }}" border="0" alt="{{'action.hideform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 			</td>					*/
/* 		</tr>*/
/* 		<tr id="group_form"><td colspan="3">{%include "BoAdminBundle:Contracts:groupform.html.twig"%}</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<td colspan="3"><legend>{{'label.coordinator'|trans([],'BoAdminBundle')}}</legend></td>	*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td colspan="3">*/
/* 				<span class="coo_list">{{ form_widget(form.coordinator, {'attr' : {'class' : 'coordinator span3'}}) }}</span>*/
/* 				<button type="button" class="show_coo_new"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'action.showform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.new'|trans([],'BoAdminBundle')}}</button>*/
/* 				<button type="button" class="hide_coo_new"><img src="{{ asset('images/actions/moins.jpg') }}" border="0" alt="{{'action.hideform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 			</td>		*/
/* 		</tr>*/
/* 		<tr id="coordinator_form"><td colspan="3">{%include "BoAdminBundle:Contracts:coordinatorform.html.twig"%}</td></tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<td colspan="3"><legend>{{'label.contractual'|trans([],'BoAdminBundle')}}</legend></td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				<span class="con_list">{{ form_widget(form.contractual, {'attr' : {'class' : 'contractual span3'}}) }}</span>*/
/* 				<button type="button" class="show_con_new"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'action.showform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.new'|trans([],'BoAdminBundle')}}</button>*/
/* 				<button type="button" class="hide_con_new"><img src="{{ asset('images/actions/moins.jpg') }}" border="0" alt="{{'action.hideform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 			</td>			*/
/* 		</tr>*/
/* 		<tr id="contractual_form"><td colspan="3">{%include "BoAdminBundle:Contracts:contractualform.html.twig"%}</td></tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>			*/
/* 			<td colspan="3"><legend>{{'label.billingcontact'|trans([],'BoAdminBundle')}}</legend></td>		*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td colspan="3">*/
/* 				<span class="cb_list">{{ form_widget(form.billingcontact, {'attr' : {'class' : 'cbilling span3'}}) }}</span>*/
/* 				<button type="button" class="show_cb_new"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'action.showform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.new'|trans([],'BoAdminBundle')}}</button>*/
/* 				<button type="button" class="hide_cb_new"><img src="{{ asset('images/actions/moins.jpg') }}" border="0" alt="{{'action.hideform'|trans([],'BoAdminBundle')}}" />&nbsp;{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 			</td>		*/
/* 		</tr>*/
/* 		<tr id="cbilling_form"><td colspan="3">{%include "BoAdminBundle:Contracts:cbillingform.html.twig"%}</td></tr>*/
/* 		<tr class="cb_hr"><td colspan="3"><hr></td></tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>			*/
/* 			<th class="sty_label">{{'label.contractdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.contractdate) }}</td>*/
/* 			<td>{{ form_widget(form.startdate, {'attr' : {'class' : 'startdate span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.enddate, {'attr' : {'class' : 'enddate span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.receiveddate'|trans([],'BoAdminBundle')}}</th>			*/
/* 			<th class="sty_label">Clic signature date</th>*/
/* 			<th class="sty_label">Client signature date</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.receivedate) }}</td>		*/
/* 			<td>{{ form_widget(form.clicsignaturedate) }}</td>*/
/* 			<td>{{ form_widget(form.clientsignaturedate) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="3" class="sty_label">Notes</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(form.notes) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	{%for campus in campuss%}*/
/* 		<input type="hidden" id="{{campus.reference}}" name="{{campus.reference}}" value="{{campus.address}}"/>*/
/* 	{%endfor%}*/
/* 	{%for outcharge in outcharges%}*/
/* 		<input type="hidden" id="emp{{outcharge[0]}}" name="emp{{outcharge[0]}}" value="{{outcharge[1]}}"/>*/
/* 	{%endfor%}*/
/* */
