<?php

/* employee/show.html.twig */
class __TwigTemplate_13b88d3229deca1c53222951434bf517f93889ea7867d88ca718d077f65cc56a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d777987b7bef2c02cf9e74fc15b7898183add0bd11751f93b371f4d6eb5acc = $this->env->getExtension("native_profiler");
        $__internal_62d777987b7bef2c02cf9e74fc15b7898183add0bd11751f93b371f4d6eb5acc->enter($__internal_62d777987b7bef2c02cf9e74fc15b7898183add0bd11751f93b371f4d6eb5acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d777987b7bef2c02cf9e74fc15b7898183add0bd11751f93b371f4d6eb5acc->leave($__internal_62d777987b7bef2c02cf9e74fc15b7898183add0bd11751f93b371f4d6eb5acc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_de9fbf9d969ec675726f4cf68c833e77fef3fd111876024995177644b7bce548 = $this->env->getExtension("native_profiler");
        $__internal_de9fbf9d969ec675726f4cf68c833e77fef3fd111876024995177644b7bce548->enter($__internal_de9fbf9d969ec675726f4cf68c833e77fef3fd111876024995177644b7bce548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_de9fbf9d969ec675726f4cf68c833e77fef3fd111876024995177644b7bce548->leave($__internal_de9fbf9d969ec675726f4cf68c833e77fef3fd111876024995177644b7bce548_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8655c7a323121939f291bda1cb3913e41dc61a4063fbc74348e76886c95c0e93 = $this->env->getExtension("native_profiler");
        $__internal_8655c7a323121939f291bda1cb3913e41dc61a4063fbc74348e76886c95c0e93->enter($__internal_8655c7a323121939f291bda1cb3913e41dc61a4063fbc74348e76886c95c0e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_8655c7a323121939f291bda1cb3913e41dc61a4063fbc74348e76886c95c0e93->leave($__internal_8655c7a323121939f291bda1cb3913e41dc61a4063fbc74348e76886c95c0e93_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b48ccf885ea564b0949a1aadf7a4b8a00ece7b6a37e45f467f6fb46521a3aef7 = $this->env->getExtension("native_profiler");
        $__internal_b48ccf885ea564b0949a1aadf7a4b8a00ece7b6a37e45f467f6fb46521a3aef7->enter($__internal_b48ccf885ea564b0949a1aadf7a4b8a00ece7b6a37e45f467f6fb46521a3aef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/show.html.twig", 4)->display($context);
        
        $__internal_b48ccf885ea564b0949a1aadf7a4b8a00ece7b6a37e45f467f6fb46521a3aef7->leave($__internal_b48ccf885ea564b0949a1aadf7a4b8a00ece7b6a37e45f467f6fb46521a3aef7_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b81578a5c60728b4044e3ff97a04587e1c03eb5ea373bc48c60a268c2761b24c = $this->env->getExtension("native_profiler");
        $__internal_b81578a5c60728b4044e3ff97a04587e1c03eb5ea373bc48c60a268c2761b24c->enter($__internal_b81578a5c60728b4044e3ff97a04587e1c03eb5ea373bc48c60a268c2761b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "employee/show.html.twig", 6)->display($context);
        
        $__internal_b81578a5c60728b4044e3ff97a04587e1c03eb5ea373bc48c60a268c2761b24c->leave($__internal_b81578a5c60728b4044e3ff97a04587e1c03eb5ea373bc48c60a268c2761b24c_prof);

    }

    // line 8
    public function block_label($context, array $blocks = array())
    {
        $__internal_06d97f7d4312a7a4bbcadf1236d21ec0916e6c5b9a6e264f8f87ea6d0692debd = $this->env->getExtension("native_profiler");
        $__internal_06d97f7d4312a7a4bbcadf1236d21ec0916e6c5b9a6e264f8f87ea6d0692debd->enter($__internal_06d97f7d4312a7a4bbcadf1236d21ec0916e6c5b9a6e264f8f87ea6d0692debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_06d97f7d4312a7a4bbcadf1236d21ec0916e6c5b9a6e264f8f87ea6d0692debd->leave($__internal_06d97f7d4312a7a4bbcadf1236d21ec0916e6c5b9a6e264f8f87ea6d0692debd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dba400486a1105161abbe3c47c6159e005c7ea5873bb7bb4fda1eb3af9d0bd8f = $this->env->getExtension("native_profiler");
        $__internal_dba400486a1105161abbe3c47c6159e005c7ea5873bb7bb4fda1eb3af9d0bd8f->enter($__internal_dba400486a1105161abbe3c47c6159e005c7ea5873bb7bb4fda1eb3af9d0bd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"body-content\">
\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Employee:showactions.html.twig", "employee/show.html.twig", 11)->display($context);
        // line 12
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.security.cote", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 14
        $this->loadTemplate("BoAdminBundle:Employee:securitycote.html.twig", "employee/show.html.twig", 14)->display($context);
        // line 15
        echo "\t\t</div>
\t\t";
        // line 16
        if ((((((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) != null) && ((isset($context["tcsgs"]) ? $context["tcsgs"] : $this->getContext($context, "tcsgs")) != null)) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "others", array()) == 1))) {
            // line 17
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 19
            $this->loadTemplate("BoAdminBundle:Employee:group.html.twig", "employee/show.html.twig", 19)->display($context);
            // line 20
            echo "\t\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if ((((((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) != null) && ((isset($context["tcsc"]) ? $context["tcsc"] : $this->getContext($context, "tcsc")) != null)) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "others", array()) == 1))) {
            // line 23
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 25
            $this->loadTemplate("BoAdminBundle:Employee:contracts.html.twig", "employee/show.html.twig", 25)->display($context);
            // line 26
            echo "\t\t\t</div>
\t\t";
        }
        // line 28
        echo "\t\t";
        if ((array_key_exists("substitutions", $context) && (twig_length_filter($this->env, (isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions"))) > 0))) {
            // line 29
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitution", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t";
            // line 32
            $this->loadTemplate("BoAdminBundle:Contracts:substitutions.html.twig", "employee/show.html.twig", 32)->display($context);
            // line 33
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "\t\t";
        if (((((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) != null) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "others", array()) == 1))) {
            echo "\t
\t\t\t<!--div class=\"display_content\">
\t\t\t\t<legend>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 39
            if ((twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))) > 1)) {
                // line 40
                echo "\t\t\t\t\t";
                $this->loadTemplate("BoAdminBundle:Group:studentsgroup.html.twig", "employee/show.html.twig", 40)->display($context);
                // line 41
                echo "\t\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t\t";
                $this->loadTemplate("BoAdminBundle:Group:students.html.twig", "employee/show.html.twig", 42)->display($context);
                // line 43
                echo "\t\t\t\t";
            }
            // line 44
            echo "\t\t\t</div--!>
\t\t";
        }
        // line 46
        echo "\t\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "others", array()) == 1)) && (twig_length_filter($this->env, (isset($context["invitations"]) ? $context["invitations"] : $this->getContext($context, "invitations"))) > 0))) {
            // line 47
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.agenda", array(), "BoAdminBundle"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.invitation", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 49
            $this->loadTemplate("BoAdminBundle:Employee:invitation.html.twig", "employee/show.html.twig", 49)->display($context);
            // line 50
            echo "\t\t\t</div>
\t\t";
        }
        // line 52
        echo "\t\t";
        if ((isset($context["epjs"]) ? $context["epjs"] : $this->getContext($context, "epjs"))) {
            // line 53
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.documents", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 55
            $this->loadTemplate("BoAdminBundle:Employee:document.html.twig", "employee/show.html.twig", 55)->display($context);
            // line 56
            echo "\t\t\t</div>
\t\t";
        }
        // line 58
        echo "\t\t";
        if ((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) {
            // line 59
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>Absences</legend>
\t\t\t\t";
            // line 61
            $this->loadTemplate("BoAdminBundle:Employee:absences.html.twig", "employee/show.html.twig", 61)->display($context);
            // line 62
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 64
        echo "\t\t";
        if ((array_key_exists("tadmins", $context) && (isset($context["tadmins"]) ? $context["tadmins"] : $this->getContext($context, "tadmins")))) {
            // line 65
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 67
            $this->loadTemplate("BoAdminBundle:Tadmin:tbliste.html.twig", "employee/show.html.twig", 67)->display($context);
            // line 68
            echo "\t\t\t</div>
\t\t";
        }
        // line 69
        echo "\t\t
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.archive", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.archive", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"setting\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.setting", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_setting", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
        // line 109
        $this->loadTemplate("BoAdminBundle:Employee:setting.html.twig", "employee/show.html.twig", 109)->display($context);
        // line 110
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.validate", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t</div>
\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_absence\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_create_absence", array("idemployee" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 135
        $this->loadTemplate("BoAdminBundle:Employee:absenceform.html.twig", "employee/show.html.twig", 135)->display($context);
        // line 136
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\" id=\"btn_submit\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<!-- begin add tadmin creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_spec\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tadmin_new", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 163
        $this->loadTemplate("BoAdminBundle:Tadmin:modalform.html.twig", "employee/show.html.twig", 163)->display($context);
        // line 164
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end Training creation form by modal dialog-->

\t";
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_dba400486a1105161abbe3c47c6159e005c7ea5873bb7bb4fda1eb3af9d0bd8f->leave($__internal_dba400486a1105161abbe3c47c6159e005c7ea5873bb7bb4fda1eb3af9d0bd8f_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55826bf0d149b1be06e6dc92c9a9c458486490a279b849803fba3a85723f3145 = $this->env->getExtension("native_profiler");
        $__internal_55826bf0d149b1be06e6dc92c9a9c458486490a279b849803fba3a85723f3145->enter($__internal_55826bf0d149b1be06e6dc92c9a9c458486490a279b849803fba3a85723f3145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "\t\t<script>\t
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else if(startdate>enddate){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\".abstart\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else if(startdate>enddate){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});\t
\t\t\t\$(\".abend\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else if(startdate>enddate){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>\t\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_55826bf0d149b1be06e6dc92c9a9c458486490a279b849803fba3a85723f3145->leave($__internal_55826bf0d149b1be06e6dc92c9a9c458486490a279b849803fba3a85723f3145_prof);

    }

    public function getTemplateName()
    {
        return "employee/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 229,  511 => 228,  459 => 178,  447 => 177,  434 => 167,  427 => 164,  425 => 163,  421 => 162,  416 => 160,  409 => 158,  387 => 139,  380 => 136,  378 => 135,  374 => 134,  369 => 132,  364 => 130,  343 => 112,  339 => 110,  337 => 109,  332 => 107,  327 => 105,  307 => 88,  303 => 87,  299 => 86,  293 => 83,  287 => 80,  274 => 69,  270 => 68,  268 => 67,  264 => 66,  261 => 65,  258 => 64,  254 => 62,  252 => 61,  248 => 59,  245 => 58,  241 => 56,  239 => 55,  235 => 54,  232 => 53,  229 => 52,  225 => 50,  223 => 49,  217 => 48,  214 => 47,  211 => 46,  207 => 44,  204 => 43,  201 => 42,  198 => 41,  195 => 40,  193 => 39,  189 => 38,  183 => 36,  178 => 33,  176 => 32,  171 => 30,  168 => 29,  165 => 28,  161 => 26,  159 => 25,  155 => 24,  152 => 23,  149 => 22,  145 => 20,  143 => 19,  139 => 18,  136 => 17,  134 => 16,  131 => 15,  129 => 14,  125 => 13,  122 => 12,  120 => 11,  117 => 10,  111 => 9,  95 => 8,  87 => 6,  81 => 5,  69 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%include "BoAdminBundle:Employee:rightshow.html.twig"%}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Employee:showactions.html.twig"%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.security.cote'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Employee:securitycote.html.twig"%}*/
/* 		</div>*/
/* 		{%if groups!=null and tcsgs!=null and app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].others==1%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Employee:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if contracts!=null and tcsc!=null and app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].others==1%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.contracts'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Employee:contracts.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if substitutions is defined and substitutions|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.substitution'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div id="teacher_content">*/
/* 					{%include "BoAdminBundle:Contracts:substitutions.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if contracts!=null and app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].others==1%}	*/
/* 			<!--div class="display_content">*/
/* 				<legend>{{'entity.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%if contracts|length>1%}*/
/* 					{%include "BoAdminBundle:Group:studentsgroup.html.twig"%}*/
/* 				{%else%}*/
/* 					{%include "BoAdminBundle:Group:students.html.twig"%}*/
/* 				{%endif%}*/
/* 			</div--!>*/
/* 		{%endif%}*/
/* 		{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].others==1 and invitations|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.agenda'|trans([],'BoAdminBundle')}}/{{'label.invitation'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Employee:invitation.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if epjs%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'layout.menu.documents'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Employee:document.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if absences%}*/
/* 			<div class="display_content">*/
/* 				<legend>Absences</legend>*/
/* 				{%include "BoAdminBundle:Employee:absences.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 		{%if tadmins is defined and tadmins %}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.tadmin'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Tadmin:tbliste.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}		*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.archive'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.archive'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="setting" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 		*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">{{'label.setting'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<form action="{{ path('employee_setting',{'id':employee.id}) }}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{%include "BoAdminBundle:Employee:setting.html.twig"%}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<input type="submit" value="{{'action.validate'|trans([],'BoAdminBundle')}}">*/
/* 						</div>*/
/* 					</form>	*/
/* 				</div>*/
/* 		  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_absence" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addabsence'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_create_absence',{'idemployee':employee.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(absence_form) }}*/
/* 						{%include "BoAdminBundle:Employee:absenceform.html.twig"%}*/
/* 					{{ form_rest(absence_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" id="btn_submit">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add tadmin creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_spec" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.tadmin'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tadmin_new',{'id':employee.id})}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(tadmin_form) }}*/
/* 						{%include "BoAdminBundle:Tadmin:modalform.html.twig"%}*/
/* 					{{ form_rest(tadmin_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end Training creation form by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>	*/
/* 			$("#btn-create").click(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else if(startdate>enddate){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$(".abstart").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else if(startdate>enddate){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});	*/
/* 			$(".abend").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else if(startdate>enddate){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>			*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
