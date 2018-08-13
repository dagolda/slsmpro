<?php

/* BoAdminBundle:Contracts:tbliste.html.twig */
class __TwigTemplate_18195521256b24868220f65b41b232334a2fc9117540e171e6fc04b2e0fceab3 extends Twig_Template
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
        $__internal_8433960e1a67b366d6cc2c090f33114a8ef846b1d760d1d420a1dab809e81263 = $this->env->getExtension("native_profiler");
        $__internal_8433960e1a67b366d6cc2c090f33114a8ef846b1d760d1d420a1dab809e81263->enter($__internal_8433960e1a67b366d6cc2c090f33114a8ef846b1d760d1d420a1dab809e81263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th width=\"3%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"4%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.number", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.session", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"3%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.step", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"3%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisor", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"120px\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 23
            echo "            <tr>
                <td ";
            // line 24
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 26
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typetime", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 27
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t";
            // line 28
            if ($this->getAttribute($context["contract"], "group", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 29
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 30
            if (($this->getAttribute($context["contract"], "students", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                // line 31
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 34
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "\t\t\t\t
\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t</td>
                <td ";
            // line 38
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 39
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "workfields", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "workfields", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 40
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "session", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "session", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 41
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "step", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "step", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 42
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 43
            if (($this->getAttribute($context["contract"], "local", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "local", array())) == 1))) {
                // line 44
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "local", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                    // line 45
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "reference", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t";
            } elseif ((($this->getAttribute($context["contract"], "group", array()) && $this->getAttribute($this->getAttribute($context["contract"], "group", array(), "any", false, true), "local", array(), "any", true, true)) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "local", array())) == 1))) {
                // line 48
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["contract"], "group", array()), "local", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                    // line 49
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "reference", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t---\t\t\t\t
\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t</td>
                <td ";
            // line 55
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 56
            $context["i"] = 1;
            // line 57
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2))) {
                // line 58
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["contract"], "group", array()) && $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "agenda", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "agenda", array())) > 0))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t";
                    $context["agendas"] = $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "agenda", array());
                    // line 60
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate("BoAdminBundle:Contracts:print_emp.html.twig", "BoAdminBundle:Contracts:tbliste.html.twig", 60)->display($context);
                    // line 61
                    echo "\t\t\t\t\t\t";
                } elseif (($this->getAttribute($context["contract"], "agenda", array()) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "agenda", array())) > 0))) {
                    // line 62
                    echo "\t\t\t\t\t\t\t";
                    $context["agendas"] = $this->getAttribute($context["contract"], "agenda", array());
                    // line 63
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate("BoAdminBundle:Contracts:print_emp.html.twig", "BoAdminBundle:Contracts:tbliste.html.twig", 63)->display($context);
                    // line 64
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 65
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["contract"], "group", array()) && $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "agenda", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "agenda", array())) > 0))) {
                    // line 69
                    echo "\t\t\t\t\t\t\t";
                    $context["agendas"] = $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "agenda", array());
                    // line 70
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate("BoAdminBundle:Contracts:emp_close.html.twig", "BoAdminBundle:Contracts:tbliste.html.twig", 70)->display($context);
                    // line 71
                    echo "\t\t\t\t\t\t";
                } elseif (($this->getAttribute($context["contract"], "agenda", array()) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "agenda", array())) > 0))) {
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                    $context["agendas"] = $this->getAttribute($context["contract"], "agenda", array());
                    // line 73
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate("BoAdminBundle:Contracts:emp_close.html.twig", "BoAdminBundle:Contracts:tbliste.html.twig", 73)->display($context);
                    // line 74
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 75
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t</td>
                <td ";
            // line 79
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "advisor", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "advisor", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "advisor", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 80
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 81
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "class=\"blue_grey_3d\"";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action ";
            // line 82
            if ((($this->getAttribute($context["contract"], "typecontract", array()) && (($this->getAttribute($context["contract"], "typecontract", array()) == "Non-NMSO") || ($this->getAttribute($context["contract"], "typecontract", array()) == "Private"))) && ($this->getAttribute($context["contract"], "typetime", array()) == "Full Time"))) {
                echo "blue_grey_3d";
            } elseif (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "completed_contracts";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "wax_3d_1";
            }
            echo "\" nowrap>
                    <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
            // line 86
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "edit", array()) == 1))) {
                // line 87
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_edit", array("id" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 91
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 94
            echo "\t\t\t<tr><td colspan=\"14\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </tbody>
    </table>
";
        
        $__internal_8433960e1a67b366d6cc2c090f33114a8ef846b1d760d1d420a1dab809e81263->leave($__internal_8433960e1a67b366d6cc2c090f33114a8ef846b1d760d1d420a1dab809e81263_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 96,  484 => 94,  469 => 91,  463 => 88,  458 => 87,  456 => 86,  451 => 84,  447 => 83,  437 => 82,  423 => 81,  409 => 80,  391 => 79,  388 => 78,  385 => 77,  381 => 75,  378 => 74,  375 => 73,  372 => 72,  369 => 71,  366 => 70,  363 => 69,  360 => 68,  357 => 67,  353 => 65,  350 => 64,  347 => 63,  344 => 62,  341 => 61,  338 => 60,  335 => 59,  332 => 58,  329 => 57,  327 => 56,  317 => 55,  314 => 54,  310 => 52,  307 => 51,  298 => 49,  293 => 48,  290 => 47,  281 => 45,  276 => 44,  274 => 43,  264 => 42,  248 => 41,  232 => 40,  216 => 39,  204 => 38,  201 => 37,  197 => 35,  190 => 34,  180 => 32,  174 => 31,  172 => 30,  162 => 29,  154 => 28,  144 => 27,  132 => 26,  120 => 25,  108 => 24,  105 => 23,  87 => 22,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th width="3%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="4%">{{'label.type'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.number'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.session'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="3%">{{'label.step'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="3%">{{'label.room'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.advisor'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="120px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.id }}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.typecontract }}</td>*/
/* 				<td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.typetime }}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 				{%if contract.group%}{{ contract.group.name }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%if contract.students is defined and contract.students|length==1%}*/
/* 						{%for student in contract.students %}*/
/* 							{{ student.firstname }} {{ student.name }}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endfor%}				*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.contractnumber }}</td>*/
/* 				<td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.workfields%}{{ contract.workfields }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.session%}{{ contract.session }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.step%}{{ contract.step }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%if contract.local is defined and contract.local|length==1%}*/
/* 						{%for room in contract.local %}*/
/* 							{{ room.reference }}*/
/* 						{%endfor%}*/
/* 					{%elseif contract.group and contract.group.local is defined and contract.group.local|length==1%}*/
/* 						{%for room in contract.group.local %}*/
/* 							{{ room.reference }}*/
/* 						{%endfor%}*/
/* 					{%else%}*/
/* 						---				*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%set i=1%}*/
/* 					{%if contract.status==1 or contract.status==2%}*/
/* 						{%if contract.group and contract.group.agenda and contract.group.agenda|length>0%}*/
/* 							{%set agendas = contract.group.agenda%}*/
/* 							{%include "BoAdminBundle:Contracts:print_emp.html.twig"%}*/
/* 						{%elseif contract.agenda and contract.agenda|length>0%}*/
/* 							{%set agendas = contract.agenda%}*/
/* 							{%include "BoAdminBundle:Contracts:print_emp.html.twig"%}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endif%}*/
/* 					{%else%}*/
/* 						{%if contract.group and contract.group.agenda and contract.group.agenda|length>0%}*/
/* 							{%set agendas = contract.group.agenda%}*/
/* 							{%include "BoAdminBundle:Contracts:emp_close.html.twig"%}*/
/* 						{%elseif contract.agenda and contract.agenda|length>0%}*/
/* 							{%set agendas = contract.agenda%}*/
/* 							{%include "BoAdminBundle:Contracts:emp_close.html.twig"%}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endif%}*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.advisor%}{{ contract.advisor.firstname }} {{ contract.advisor.name }}{%else%}---{%endif%}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}class="blue_grey_3d"{%elseif contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td class="list-action {%if contract.typecontract and (contract.typecontract=="Non-NMSO" or contract.typecontract=="Private") and contract.typetime=="Full Time"%}blue_grey_3d{%elseif contract.status==0%}completed_contracts{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}wax_3d_1{%endif%}" nowrap>*/
/*                     <a href="{{ path('contracts_show', { 'id': contract.id }) }}">*/
/* 						{{'action.show'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].edit==1%}*/
/*                     <a href="{{ path('contracts_edit', { 'id': contract.id }) }}">*/
/* 						{{'action.edit'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/* 				{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="14">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
