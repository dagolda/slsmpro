<?php

/* evaluation/show.html.twig */
class __TwigTemplate_16d698b239cce76365cc897b73893f88debe08aa159f97ab7e6ec30e804d73c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_ec0bd8389d61fb2083cd32ced8625d65e66bd27b798c1c2540884ce676c46096 = $this->env->getExtension("native_profiler");
        $__internal_ec0bd8389d61fb2083cd32ced8625d65e66bd27b798c1c2540884ce676c46096->enter($__internal_ec0bd8389d61fb2083cd32ced8625d65e66bd27b798c1c2540884ce676c46096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0bd8389d61fb2083cd32ced8625d65e66bd27b798c1c2540884ce676c46096->leave($__internal_ec0bd8389d61fb2083cd32ced8625d65e66bd27b798c1c2540884ce676c46096_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb72849cdd7343321150bfb4da858c4f6613922e1f919bbc6245a4d8379fb98 = $this->env->getExtension("native_profiler");
        $__internal_dbb72849cdd7343321150bfb4da858c4f6613922e1f919bbc6245a4d8379fb98->enter($__internal_dbb72849cdd7343321150bfb4da858c4f6613922e1f919bbc6245a4d8379fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_dbb72849cdd7343321150bfb4da858c4f6613922e1f919bbc6245a4d8379fb98->leave($__internal_dbb72849cdd7343321150bfb4da858c4f6613922e1f919bbc6245a4d8379fb98_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_ded6e0011f6fc0e7bd8be6d4fc336691dccb0fac3ed28a057e30c7876b5455fe = $this->env->getExtension("native_profiler");
        $__internal_ded6e0011f6fc0e7bd8be6d4fc336691dccb0fac3ed28a057e30c7876b5455fe->enter($__internal_ded6e0011f6fc0e7bd8be6d4fc336691dccb0fac3ed28a057e30c7876b5455fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "evaluation/show.html.twig", 3)->display($context);
        
        $__internal_ded6e0011f6fc0e7bd8be6d4fc336691dccb0fac3ed28a057e30c7876b5455fe->leave($__internal_ded6e0011f6fc0e7bd8be6d4fc336691dccb0fac3ed28a057e30c7876b5455fe_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c2f4da97e74198976eaa7ee687a06e32f3645055fc5553236bc3ef5346650c79 = $this->env->getExtension("native_profiler");
        $__internal_c2f4da97e74198976eaa7ee687a06e32f3645055fc5553236bc3ef5346650c79->enter($__internal_c2f4da97e74198976eaa7ee687a06e32f3645055fc5553236bc3ef5346650c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Evaluation:rightshow.html.twig", "evaluation/show.html.twig", 4)->display($context);
        
        $__internal_c2f4da97e74198976eaa7ee687a06e32f3645055fc5553236bc3ef5346650c79->leave($__internal_c2f4da97e74198976eaa7ee687a06e32f3645055fc5553236bc3ef5346650c79_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ae08b143de77821e16395052a2000fe6ecfe073b6a4788e9fbd91ebe3f40cd03 = $this->env->getExtension("native_profiler");
        $__internal_ae08b143de77821e16395052a2000fe6ecfe073b6a4788e9fbd91ebe3f40cd03->enter($__internal_ae08b143de77821e16395052a2000fe6ecfe073b6a4788e9fbd91ebe3f40cd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ae08b143de77821e16395052a2000fe6ecfe073b6a4788e9fbd91ebe3f40cd03->leave($__internal_ae08b143de77821e16395052a2000fe6ecfe073b6a4788e9fbd91ebe3f40cd03_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f6179be5605e13b32ec298e95d532f0a95a4dadbf7ea97d07c25b0a6c16cb5 = $this->env->getExtension("native_profiler");
        $__internal_c7f6179be5605e13b32ec298e95d532f0a95a4dadbf7ea97d07c25b0a6c16cb5->enter($__internal_c7f6179be5605e13b32ec298e95d532f0a95a4dadbf7ea97d07c25b0a6c16cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div id=\"body-content\">
\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Evaluation:showactions.html.twig", "evaluation/show.html.twig", 9)->display($context);
        // line 10
        echo "\t\t
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Evaluation:students.html.twig", "evaluation/show.html.twig", 13)->display($context);
        // line 14
        echo "\t\t</div>\t

\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 18
        $this->loadTemplate("BoAdminBundle:Evaluation:contractual.html.twig", "evaluation/show.html.twig", 18)->display($context);
        // line 19
        echo "\t\t</div>\t
\t\t
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 23
        $this->loadTemplate("BoAdminBundle:Evaluation:billingcontact.html.twig", "evaluation/show.html.twig", 23)->display($context);
        // line 24
        echo "\t\t</div>
\t\t";
        // line 25
        if ((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) != 1) && ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) != 11))) {
            // line 26
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.result", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 28
            $this->loadTemplate("BoAdminBundle:Evaluation:result.html.twig", "evaluation/show.html.twig", 28)->display($context);
            // line 29
            echo "\t\t\t</div>
\t\t";
        }
        // line 30
        echo "\t
\t\t";
        // line 31
        if ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "comment", array())) {
            // line 32
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "comment", array()), "html", null, true);
            echo "</div>
\t\t\t</div>\t
\t\t";
        }
        // line 36
        echo "\t\t\t
\t\t<br/>
\t</div>
\t
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<button class=\"close_modal_delete\" data-dismiss=\"modal\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 58
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
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"remove_pdf\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.removepdf", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["remove_form"]) ? $context["remove_form"] : $this->getContext($context, "remove_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["remove_form"]) ? $context["remove_form"] : $this->getContext($context, "remove_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>\t
\t
\t";
        // line 91
        if ((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 1) || ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "status", array()) == 11))) {
            // line 92
            echo "\t\t<!-- begin edit first evaluation form by modal dialog-->
\t\t\t<div class=\"container\">
\t\t\t  <!-- Modal -->
\t\t\t  <div class=\"modal fade\" id=\"editfirst_eval\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t
\t\t\t\t  <!-- Modal content-->
\t\t\t\t  <div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_editfirst", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 107
            $this->loadTemplate("BoAdminBundle:Evaluation:editfirstform.html.twig", "evaluation/show.html.twig", 107)->display($context);
            // line 108
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"close_modal_edit\" data-dismiss=\"modal\">";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t<!-- end eveluation edtion first form by modal dialog-->
\t\t
\t\t<!-- begin evaluation of the advisor form by modal dialog-->
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"evaluate\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.evaluate", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "name", array()), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_evaluate", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
            // line 136
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'errors');
            echo "
\t\t\t\t\t\t\t";
            // line 137
            $this->loadTemplate("BoAdminBundle:Evaluation:part2form.html.twig", "evaluation/show.html.twig", 137)->display($context);
            // line 138
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'rest');
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_edit\" data-dismiss=\"modal\">";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t<!-- end eveluation creation form by modal dialog-->
\t";
        } elseif ((        // line 151
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) != null)) {
            // line 152
            echo "\t\t<!-- begin edit evaluation all form by modal dialog-->
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"edit_eval\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_edit", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
            // line 166
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t\t\t\t";
            // line 167
            $this->loadTemplate("BoAdminBundle:Evaluation:modalform.html.twig", "evaluation/show.html.twig", 167)->display($context);
            // line 168
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_edit\" data-dismiss=\"modal\">";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t<!-- end evaluation edition all form by modal dialog-->
\t";
        }
        // line 182
        echo "\t
\t";
        // line 183
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_c7f6179be5605e13b32ec298e95d532f0a95a4dadbf7ea97d07c25b0a6c16cb5->leave($__internal_c7f6179be5605e13b32ec298e95d532f0a95a4dadbf7ea97d07c25b0a6c16cb5_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75fd003b6550e0da4e82466efe9bd964c03eb55eefdbbc4ed507efed8d480264 = $this->env->getExtension("native_profiler");
        $__internal_75fd003b6550e0da4e82466efe9bd964c03eb55eefdbbc4ed507efed8d480264->enter($__internal_75fd003b6550e0da4e82466efe9bd964c03eb55eefdbbc4ed507efed8d480264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 184
        echo "\t\t<script>
\t\t\t\$(\".close_modal_edit\").click(function(){
\t\t\t\t\$('#edit_eval').modal('hide');
\t\t\t});
\t\t\t\$(\".close_modal_delete\").click(function(){
\t\t\t\t\$('#myModal').modal('hide');
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_75fd003b6550e0da4e82466efe9bd964c03eb55eefdbbc4ed507efed8d480264->leave($__internal_75fd003b6550e0da4e82466efe9bd964c03eb55eefdbbc4ed507efed8d480264_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 193,  455 => 192,  445 => 184,  433 => 183,  430 => 182,  417 => 172,  413 => 171,  406 => 168,  404 => 167,  400 => 166,  395 => 164,  388 => 162,  376 => 152,  374 => 151,  362 => 142,  358 => 141,  351 => 138,  349 => 137,  345 => 136,  340 => 134,  331 => 132,  308 => 112,  304 => 111,  297 => 108,  295 => 107,  291 => 106,  286 => 104,  279 => 102,  267 => 92,  265 => 91,  254 => 83,  250 => 82,  246 => 81,  240 => 78,  234 => 75,  214 => 58,  210 => 57,  206 => 56,  202 => 55,  196 => 52,  190 => 49,  175 => 36,  169 => 34,  165 => 33,  162 => 32,  160 => 31,  157 => 30,  153 => 29,  151 => 28,  147 => 27,  144 => 26,  142 => 25,  139 => 24,  137 => 23,  133 => 22,  128 => 19,  126 => 18,  122 => 17,  117 => 14,  115 => 13,  111 => 12,  107 => 10,  105 => 9,  101 => 7,  95 => 6,  79 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}{%include "BoAdminBundle:Evaluation:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Evaluation:showactions.html.twig"%}*/
/* 		*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Evaluation:students.html.twig"%}*/
/* 		</div>	*/
/* */
/* 		<div class="display_content">*/
/* 			<legend>{{'label.contact'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Evaluation:contractual.html.twig"%}*/
/* 		</div>	*/
/* 		*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.billingcontact'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Evaluation:billingcontact.html.twig"%}*/
/* 		</div>*/
/* 		{%if evaluation.status!=1 and evaluation.status!=11%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.result'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Evaluation:result.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}	*/
/* 		{%if evaluation.comment%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.comment'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div>{{evaluation.comment}}</div>*/
/* 			</div>	*/
/* 		{%endif%}			*/
/* 		<br/>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<button class="close_modal_delete" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
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
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="remove_pdf" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.removepdf'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(remove_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(remove_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>	*/
/* 	*/
/* 	{%if evaluation.status==1 or evaluation.status==11%}*/
/* 		<!-- begin edit first evaluation form by modal dialog-->*/
/* 			<div class="container">*/
/* 			  <!-- Modal -->*/
/* 			  <div class="modal fade" id="editfirst_eval" role="dialog">*/
/* 				<div class="modal-dialog">*/
/* 				*/
/* 				  <!-- Modal content-->*/
/* 				  <div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">{{'action.edit'|trans([],'BoAdminBundle')}} {{'entity.evaluation'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<form action="{{ path('evaluation_editfirst',{'id':evaluation.id})}}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{{ form_errors(edit_form) }}*/
/* 								{%include "BoAdminBundle:Evaluation:editfirstform.html.twig"%}*/
/* 							{{ form_rest(edit_form) }}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<button class="close_modal_edit" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 							<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 						</div>*/
/* 					</form>	*/
/* 				  </div>*/
/* 				  */
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 		<!-- end eveluation edtion first form by modal dialog-->*/
/* 		*/
/* 		<!-- begin evaluation of the advisor form by modal dialog-->*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="evaluate" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 					<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 					<h4 class="modal-title">{{'action.evaluate'|trans([],'BoAdminBundle')}} {{evaluation.firstname}} {{evaluation.name}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('evaluation_evaluate',{'id':evaluation.id})}}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(eval_form) }}*/
/* 							{%include "BoAdminBundle:Evaluation:part2form.html.twig"%}*/
/* 						{{ form_rest(eval_form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button class="close_modal_edit" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 						<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		<!-- end eveluation creation form by modal dialog-->*/
/* 	{%elseif form!=null%}*/
/* 		<!-- begin edit evaluation all form by modal dialog-->*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="edit_eval" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 					<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 					<h4 class="modal-title">{{'action.edit'|trans([],'BoAdminBundle')}} {{'entity.evaluation'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('evaluation_edit',{'id':evaluation.id})}}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 							{%include "BoAdminBundle:Evaluation:modalform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button class="close_modal_edit" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 						<input type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		<!-- end evaluation edition all form by modal dialog-->*/
/* 	{%endif%}*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(".close_modal_edit").click(function(){*/
/* 				$('#edit_eval').modal('hide');*/
/* 			});*/
/* 			$(".close_modal_delete").click(function(){*/
/* 				$('#myModal').modal('hide');*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
