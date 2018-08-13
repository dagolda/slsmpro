<?php

/* BoAdminBundle:Tools:index.html.twig */
class __TwigTemplate_d4785c7691828f40711303514b039a59bf0de99030c319f3c756994ab5d47c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdminBundle:Tools:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
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
        $__internal_5e8b62f756bcf099d05c0e0eba93e0952b80294d51663b7ab19a16788bddbbe6 = $this->env->getExtension("native_profiler");
        $__internal_5e8b62f756bcf099d05c0e0eba93e0952b80294d51663b7ab19a16788bddbbe6->enter($__internal_5e8b62f756bcf099d05c0e0eba93e0952b80294d51663b7ab19a16788bddbbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tools:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e8b62f756bcf099d05c0e0eba93e0952b80294d51663b7ab19a16788bddbbe6->leave($__internal_5e8b62f756bcf099d05c0e0eba93e0952b80294d51663b7ab19a16788bddbbe6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_63e291b0ece5c7aef8aa7c0e4b572be018c38ecf6de1f581367b26887a228c3b = $this->env->getExtension("native_profiler");
        $__internal_63e291b0ece5c7aef8aa7c0e4b572be018c38ecf6de1f581367b26887a228c3b->enter($__internal_63e291b0ece5c7aef8aa7c0e4b572be018c38ecf6de1f581367b26887a228c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tools", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_63e291b0ece5c7aef8aa7c0e4b572be018c38ecf6de1f581367b26887a228c3b->leave($__internal_63e291b0ece5c7aef8aa7c0e4b572be018c38ecf6de1f581367b26887a228c3b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_3c6434a2132ad23ccf9cd42c3ed50106efd62f29f41af3ad73602813de043927 = $this->env->getExtension("native_profiler");
        $__internal_3c6434a2132ad23ccf9cd42c3ed50106efd62f29f41af3ad73602813de043927->enter($__internal_3c6434a2132ad23ccf9cd42c3ed50106efd62f29f41af3ad73602813de043927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "BoAdminBundle:Tools:index.html.twig", 3)->display($context);
        
        $__internal_3c6434a2132ad23ccf9cd42c3ed50106efd62f29f41af3ad73602813de043927->leave($__internal_3c6434a2132ad23ccf9cd42c3ed50106efd62f29f41af3ad73602813de043927_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7549752b5dda92bff6ca05557405a52cf4cb47e57654b0d34e6527aac490b809 = $this->env->getExtension("native_profiler");
        $__internal_7549752b5dda92bff6ca05557405a52cf4cb47e57654b0d34e6527aac490b809->enter($__internal_7549752b5dda92bff6ca05557405a52cf4cb47e57654b0d34e6527aac490b809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_7549752b5dda92bff6ca05557405a52cf4cb47e57654b0d34e6527aac490b809->leave($__internal_7549752b5dda92bff6ca05557405a52cf4cb47e57654b0d34e6527aac490b809_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_359ec3f472ec45cca49e7a7582fb55bdb03463b53c483fd0e88af1dc22445bc3 = $this->env->getExtension("native_profiler");
        $__internal_359ec3f472ec45cca49e7a7582fb55bdb03463b53c483fd0e88af1dc22445bc3->enter($__internal_359ec3f472ec45cca49e7a7582fb55bdb03463b53c483fd0e88af1dc22445bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tools", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_359ec3f472ec45cca49e7a7582fb55bdb03463b53c483fd0e88af1dc22445bc3->leave($__internal_359ec3f472ec45cca49e7a7582fb55bdb03463b53c483fd0e88af1dc22445bc3_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a3c18a0eb0bd4e677f1903d71df25425d6d7ff69edd9d83012e425d74fe0b193 = $this->env->getExtension("native_profiler");
        $__internal_a3c18a0eb0bd4e677f1903d71df25425d6d7ff69edd9d83012e425d74fe0b193->enter($__internal_a3c18a0eb0bd4e677f1903d71df25425d6d7ff69edd9d83012e425d74fe0b193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Profil:actions.html.twig", "BoAdminBundle:Tools:index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_a3c18a0eb0bd4e677f1903d71df25425d6d7ff69edd9d83012e425d74fe0b193->leave($__internal_a3c18a0eb0bd4e677f1903d71df25425d6d7ff69edd9d83012e425d74fe0b193_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aa2fbe07f55b51b672a59ae9d0bac674a96bbecd7ded5e026681b2dc39a59b7 = $this->env->getExtension("native_profiler");
        $__internal_6aa2fbe07f55b51b672a59ae9d0bac674a96bbecd7ded5e026681b2dc39a59b7->enter($__internal_6aa2fbe07f55b51b672a59ae9d0bac674a96bbecd7ded5e026681b2dc39a59b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#remove_employee\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#remove_employee_ofcontract\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tools_update_training");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.training", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tools_update_contract");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("tools_create_coordinator");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#remove_teacher_contract\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#remove_employee_ofcontract2\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("tools_update_training2");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.training", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#remove_local_contract\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#remove_local_group\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#update_local_status\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.release", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-free\" data-toggle=\"modal\" data-target=\"#free_local\" >";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.release", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-free\" data-toggle=\"modal\" data-target=\"#addlocaltogroup\" >";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-free\" data-toggle=\"modal\" data-target=\"#addlocaltocontract\" >";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-free\" data-toggle=\"modal\" data-target=\"#remove_schedule\" >";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " </button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-free\" data-toggle=\"modal\" data-target=\"#display_schedule\" >";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.display", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " </button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-free\" data-toggle=\"modal\" data-target=\"#display_schedule_bis\" >";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.display", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " idc-Idemp</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-free\" data-toggle=\"modal\" data-target=\"#display_schedule_byid\" >";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.display", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " idsch</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("tools_show_schedule");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("tools_update_allcontract");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("tools_checkbis");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.garbage", array(), "BoAdminBundle"), "html", null, true);
        echo " </a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("tools_check");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.check", array(), "BoAdminBundle"), "html", null, true);
        echo " </a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("tools_generate_agenda");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.generate", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.agenda", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("tools_update_amorpm");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("tools_agenda_update");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.agenda", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("tools_update_schedule");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>

\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"free_local\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("tools_free_allroom");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<center>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.localfree", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_employee\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("tools_remove_group");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tGroup Id: <input type=\"text\" name=\"idgroup\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_schedule\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("tools_remove_schedule");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tId schedule: <input type=\"text\" name=\"idschedule\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"display_schedule\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("tools_display_schedule");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tId employee: <input type=\"text\" name=\"idemployee\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"display_schedule_byid\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("tools_display_schedulebyid");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tId schedule: <input type=\"text\" name=\"idschedule\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"display_schedule_bis\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 248
        echo $this->env->getExtension('routing')->getPath("tools_display_schedulebis");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tId employee: <input type=\"text\" name=\"idemployee\"><br>
\t\t\t\t\tId contract: <input type=\"text\" name=\"idcontract\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_teacher_contract\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 273
        echo $this->env->getExtension('routing')->getPath("tools_removeteacher_fromcontract");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tContract Id: <input type=\"text\" name=\"idcontract\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_local_contract\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 297
        echo $this->env->getExtension('routing')->getPath("tools_removelocal_fromcontract");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tContract Id: <input type=\"text\" name=\"idcontract\"><br>
\t\t\t\t\tLocal Id: <input type=\"text\" name=\"idlocal\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"addlocaltogroup\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.local", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 322
        echo $this->env->getExtension('routing')->getPath("tools_add_localtogroup");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tGroup Id : <input type=\"text\" name=\"idgroup\"><br><br>
\t\t\t\t\tLocal Id : <input type=\"text\" name=\"idlocal\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.execute", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"addlocaltocontract\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.local", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 347
        echo $this->env->getExtension('routing')->getPath("tools_add_localtocontract");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tContract Id: <input type=\"text\" name=\"idcontract\"><br/><br/>
\t\t\t\t\tLocal Id   : <input type=\"text\" name=\"idlocal\"><br/>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.execute", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_local_group\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 372
        echo $this->env->getExtension('routing')->getPath("tools_removelocal_fromgroup");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<table><tr>
\t\t\t\t\t\t<td>group Id: <input type=\"text\" name=\"idgroup\"><br></td>
\t\t\t\t\t\t<td>Local Id: <input type=\"text\" name=\"idlocal\"><br></td>
\t\t\t\t\t</tr></table>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"update_local_status\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 399
        echo $this->env->getExtension('routing')->getPath("tools_update_localstatus");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<table><tr>
\t\t\t\t\t\t<td>Local Id: <input type=\"text\" name=\"idlocal\"><br></td>
\t\t\t\t\t</tr></table>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_employee_ofcontract\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 425
        echo $this->env->getExtension('routing')->getPath("tools_remove_ofcontract");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tContract Id: <input type=\"text\" name=\"idcontract\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_employee_ofcontract2\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.removeemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 449
        echo $this->env->getExtension('routing')->getPath("tools_remove_ofcontract2");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tContract Id: <input type=\"text\" name=\"idcontract\"><br>
\t\t\t\t\tEmployee Id: <input type=\"text\" name=\"idemployee\"><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 463
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6aa2fbe07f55b51b672a59ae9d0bac674a96bbecd7ded5e026681b2dc39a59b7->leave($__internal_6aa2fbe07f55b51b672a59ae9d0bac674a96bbecd7ded5e026681b2dc39a59b7_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bea52ecf2a0b60b2d6ced86f1d6a8961754dc7a53f862b9df9380522e0a010e2 = $this->env->getExtension("native_profiler");
        $__internal_bea52ecf2a0b60b2d6ced86f1d6a8961754dc7a53f862b9df9380522e0a010e2->enter($__internal_bea52ecf2a0b60b2d6ced86f1d6a8961754dc7a53f862b9df9380522e0a010e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 464
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_bea52ecf2a0b60b2d6ced86f1d6a8961754dc7a53f862b9df9380522e0a010e2->leave($__internal_bea52ecf2a0b60b2d6ced86f1d6a8961754dc7a53f862b9df9380522e0a010e2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tools:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  937 => 466,  933 => 465,  928 => 464,  916 => 463,  905 => 455,  896 => 449,  891 => 447,  871 => 430,  863 => 425,  858 => 423,  838 => 406,  828 => 399,  819 => 397,  799 => 380,  788 => 372,  777 => 370,  757 => 353,  748 => 347,  737 => 345,  717 => 328,  708 => 322,  697 => 320,  677 => 303,  668 => 297,  657 => 295,  637 => 278,  629 => 273,  618 => 271,  598 => 254,  589 => 248,  584 => 246,  564 => 229,  556 => 224,  551 => 222,  531 => 205,  523 => 200,  518 => 198,  498 => 181,  490 => 176,  485 => 174,  465 => 157,  457 => 152,  452 => 150,  432 => 133,  426 => 130,  421 => 128,  416 => 126,  391 => 108,  381 => 105,  368 => 99,  358 => 96,  350 => 93,  342 => 90,  327 => 84,  318 => 82,  310 => 79,  302 => 76,  291 => 70,  283 => 67,  271 => 64,  259 => 61,  246 => 55,  238 => 52,  226 => 49,  214 => 46,  201 => 40,  191 => 37,  179 => 34,  169 => 31,  156 => 25,  146 => 22,  136 => 19,  126 => 16,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tools'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.tools'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Profil:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#remove_employee">{{'label.removeemployee'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#remove_employee_ofcontract">{{'label.removeemployee'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_update_training') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'entity.training'|trans([],'BoAdminBundle')}} 1</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_update_contract') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'entity.contract'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td>&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_create_coordinator') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'entity.coordinator'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#remove_teacher_contract">{{'action.remove'|trans([],'BoAdminBundle')}} {{'label.teacher'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#remove_employee_ofcontract2">{{'label.removeemployee'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_update_training2') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'entity.training'|trans([],'BoAdminBundle')}} 2</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td>&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#remove_local_contract">{{'action.remove'|trans([],'BoAdminBundle')}} {{'label.room'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#remove_local_group">{{'action.remove'|trans([],'BoAdminBundle')}} {{'label.room'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#update_local_status">{{'action.release'|trans([],'BoAdminBundle')}} {{'label.room'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-free" data-toggle="modal" data-target="#free_local" >{{'action.release'|trans([],'BoAdminBundle')}} {{'label.all'|trans([],'BoAdminBundle')}} {{'label.room'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td>&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-free" data-toggle="modal" data-target="#addlocaltogroup" >{{'action.add'|trans([],'BoAdminBundle')}} {{'label.room'|trans([],'BoAdminBundle')}} {{'label.to'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-free" data-toggle="modal" data-target="#addlocaltocontract" >{{'action.add'|trans([],'BoAdminBundle')}} {{'label.room'|trans([],'BoAdminBundle')}} {{'label.to'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-free" data-toggle="modal" data-target="#remove_schedule" >{{'action.remove'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}} </button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-free" data-toggle="modal" data-target="#display_schedule" >{{'action.display'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}} </button>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td>&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-free" data-toggle="modal" data-target="#display_schedule_bis" >{{'action.display'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}} idc-Idemp</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-free" data-toggle="modal" data-target="#display_schedule_byid" >{{'action.display'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}} idsch</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_show_schedule') }}">{{'action.show'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td><a href="{{ path('tools_update_allcontract') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td>&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_checkbis') }}">{{'label.garbage'|trans([],'BoAdminBundle')}} </a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_check') }}">{{'action.check'|trans([],'BoAdminBundle')}} </a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_generate_agenda') }}">{{'action.generate'|trans([],'BoAdminBundle')}} {{'label.agenda'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_update_amorpm') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'label.amorpm'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td>&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_agenda_update') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'label.agenda'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('tools_update_schedule') }}">{{'action.update'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}}</a>*/
/* */
/* 					</td>*/
/* */
/* 				</tr>*/
/* 				<tr><td>&nbsp;</td></tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="free_local" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_free_allroom') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					<center>{{'message.confirm.localfree'|trans([],'BoAdminBundle')}}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_employee" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_remove_group') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Group Id: <input type="text" name="idgroup"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_schedule" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_remove_schedule') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Id schedule: <input type="text" name="idschedule"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="display_schedule" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_display_schedule') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Id employee: <input type="text" name="idemployee"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.show'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="display_schedule_byid" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_display_schedulebyid') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Id schedule: <input type="text" name="idschedule"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.show'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="display_schedule_bis" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_display_schedulebis') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Id employee: <input type="text" name="idemployee"><br>*/
/* 					Id contract: <input type="text" name="idcontract"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.show'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_teacher_contract" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.remove'|trans([],'BoAdminBundle')}} {{'label.teacher'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_removeteacher_fromcontract') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Contract Id: <input type="text" name="idcontract"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_local_contract" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{'action.remove'|trans([],'BoAdminBundle')}} {{'label.teacher'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_removelocal_fromcontract') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Contract Id: <input type="text" name="idcontract"><br>*/
/* 					Local Id: <input type="text" name="idlocal"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="addlocaltogroup" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.local'|trans([],'BoAdminBundle')}} {{'label.to'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_add_localtogroup') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Group Id : <input type="text" name="idgroup"><br><br>*/
/* 					Local Id : <input type="text" name="idlocal"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.execute'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="addlocaltocontract" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.local'|trans([],'BoAdminBundle')}} {{'label.to'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_add_localtocontract') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Contract Id: <input type="text" name="idcontract"><br/><br/>*/
/* 					Local Id   : <input type="text" name="idlocal"><br/>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.execute'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_local_group" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{'action.remove'|trans([],'BoAdminBundle')}} {{'label.teacher'|trans([],'BoAdminBundle')}} {{'label.from'|trans([],'BoAdminBundle')}} {{'label.contract'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_removelocal_fromgroup') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					<table><tr>*/
/* 						<td>group Id: <input type="text" name="idgroup"><br></td>*/
/* 						<td>Local Id: <input type="text" name="idlocal"><br></td>*/
/* 					</tr></table>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="update_local_status" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{'action.update'|trans([],'BoAdminBundle')}} {{'label.room'|trans([],'BoAdminBundle')}} {{'label.status'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_update_localstatus') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					<table><tr>*/
/* 						<td>Local Id: <input type="text" name="idlocal"><br></td>*/
/* 					</tr></table>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_employee_ofcontract" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_remove_ofcontract') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Contract Id: <input type="text" name="idcontract"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_employee_ofcontract2" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.removeemployee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('tools_remove_ofcontract2') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					Contract Id: <input type="text" name="idcontract"><br>*/
/* 					Employee Id: <input type="text" name="idemployee"><br>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
