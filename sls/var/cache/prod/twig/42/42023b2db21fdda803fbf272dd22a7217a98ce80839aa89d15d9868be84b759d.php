<?php

/* contracts/show.html.twig */
class __TwigTemplate_504ff6f00473d4bc26f41f108c9813b45a9cde02e54974ef70cc640761768070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contracts/show.html.twig", 1);
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
        $__internal_83c5dc4275f0ff457abeaf14ab1ed30e35d96a1d585d5bfda1df7c3414468474 = $this->env->getExtension("native_profiler");
        $__internal_83c5dc4275f0ff457abeaf14ab1ed30e35d96a1d585d5bfda1df7c3414468474->enter($__internal_83c5dc4275f0ff457abeaf14ab1ed30e35d96a1d585d5bfda1df7c3414468474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c5dc4275f0ff457abeaf14ab1ed30e35d96a1d585d5bfda1df7c3414468474->leave($__internal_83c5dc4275f0ff457abeaf14ab1ed30e35d96a1d585d5bfda1df7c3414468474_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbaa3bc0a45737437a4e9ecd3cd19cea4170b85b64ca547a3a9bfddbbb7f0eab = $this->env->getExtension("native_profiler");
        $__internal_dbaa3bc0a45737437a4e9ecd3cd19cea4170b85b64ca547a3a9bfddbbb7f0eab->enter($__internal_dbaa3bc0a45737437a4e9ecd3cd19cea4170b85b64ca547a3a9bfddbbb7f0eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_dbaa3bc0a45737437a4e9ecd3cd19cea4170b85b64ca547a3a9bfddbbb7f0eab->leave($__internal_dbaa3bc0a45737437a4e9ecd3cd19cea4170b85b64ca547a3a9bfddbbb7f0eab_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8677bab93b6175b3833c84cb0e1baf8d5e1dd5e76514b4be6737bc27d3e9368c = $this->env->getExtension("native_profiler");
        $__internal_8677bab93b6175b3833c84cb0e1baf8d5e1dd5e76514b4be6737bc27d3e9368c->enter($__internal_8677bab93b6175b3833c84cb0e1baf8d5e1dd5e76514b4be6737bc27d3e9368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_8677bab93b6175b3833c84cb0e1baf8d5e1dd5e76514b4be6737bc27d3e9368c->leave($__internal_8677bab93b6175b3833c84cb0e1baf8d5e1dd5e76514b4be6737bc27d3e9368c_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b12a9186ab524dcd84ae2e13e9ad7dd8f952a71f572156199d2dfd6d7796aa4b = $this->env->getExtension("native_profiler");
        $__internal_b12a9186ab524dcd84ae2e13e9ad7dd8f952a71f572156199d2dfd6d7796aa4b->enter($__internal_b12a9186ab524dcd84ae2e13e9ad7dd8f952a71f572156199d2dfd6d7796aa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/show.html.twig", 4)->display($context);
        
        $__internal_b12a9186ab524dcd84ae2e13e9ad7dd8f952a71f572156199d2dfd6d7796aa4b->leave($__internal_b12a9186ab524dcd84ae2e13e9ad7dd8f952a71f572156199d2dfd6d7796aa4b_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_03a12b022576b66de978a9ac171678406e0e57f15b5782c49f67ea608ea97159 = $this->env->getExtension("native_profiler");
        $__internal_03a12b022576b66de978a9ac171678406e0e57f15b5782c49f67ea608ea97159->enter($__internal_03a12b022576b66de978a9ac171678406e0e57f15b5782c49f67ea608ea97159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Contracts:rightshow.html.twig", "contracts/show.html.twig", 5)->display($context);
        
        $__internal_03a12b022576b66de978a9ac171678406e0e57f15b5782c49f67ea608ea97159->leave($__internal_03a12b022576b66de978a9ac171678406e0e57f15b5782c49f67ea608ea97159_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_bca441420ad7c143f21d9dc29e314f9d299685ac6a9c0fe63f758aa9777190f3 = $this->env->getExtension("native_profiler");
        $__internal_bca441420ad7c143f21d9dc29e314f9d299685ac6a9c0fe63f758aa9777190f3->enter($__internal_bca441420ad7c143f21d9dc29e314f9d299685ac6a9c0fe63f758aa9777190f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_bca441420ad7c143f21d9dc29e314f9d299685ac6a9c0fe63f758aa9777190f3->leave($__internal_bca441420ad7c143f21d9dc29e314f9d299685ac6a9c0fe63f758aa9777190f3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8fe869d84cee89f5c1a3c065babb75880491ee21cb0368479e054e4a09eed4a = $this->env->getExtension("native_profiler");
        $__internal_d8fe869d84cee89f5c1a3c065babb75880491ee21cb0368479e054e4a09eed4a->enter($__internal_d8fe869d84cee89f5c1a3c065babb75880491ee21cb0368479e054e4a09eed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Contracts:showactions.html.twig", "contracts/show.html.twig", 9)->display($context);
        // line 10
        echo "
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "group", array(), "any", true, true) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) != null))) {
            // line 12
            echo "\t\t\t";
            $context["group"] = $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array());
            // line 13
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 15
            $this->loadTemplate("BoAdminBundle:Contracts:group.html.twig", "contracts/show.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t</div>
\t\t";
        }
        // line 18
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.training", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 20
        $this->loadTemplate("BoAdminBundle:Training:show.html.twig", "contracts/show.html.twig", 20)->display($context);
        // line 21
        echo "\t\t</div>
\t\t";
        // line 22
        if (((isset($context["groupnull"]) ? $context["groupnull"] : $this->getContext($context, "groupnull")) == 0)) {
            // line 23
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t";
            // line 26
            $this->loadTemplate("BoAdminBundle:Contracts:agteacher.html.twig", "contracts/show.html.twig", 26)->display($context);
            // line 27
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 29
            if ((array_key_exists("substitutions", $context) && (twig_length_filter($this->env, (isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions"))) > 0))) {
                // line 30
                echo "\t\t\t\t<div class=\"display_content\">
\t\t\t\t\t<legend>";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitution", array(), "BoAdminBundle"), "html", null, true);
                echo "</legend>
\t\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t\t";
                // line 33
                $this->loadTemplate("BoAdminBundle:Contracts:substitutions.html.twig", "contracts/show.html.twig", 33)->display($context);
                // line 34
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 37
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "campus", array(), "any", true, true) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()) != null))) {
                // line 38
                echo "\t\t\t\t<div class=\"display_content\">
\t\t\t\t\t<legend>";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
                echo "</legend>
\t\t\t\t\t";
                // line 40
                $this->loadTemplate("BoAdminBundle:Contracts:local.html.twig", "contracts/show.html.twig", 40)->display($context);
                // line 41
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 43
            echo "\t\t";
        }
        // line 44
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"students_content\">
\t\t\t\t";
        // line 47
        $this->loadTemplate("BoAdminBundle:Contracts:students.html.twig", "contracts/show.html.twig", 47)->display($context);
        // line 48
        echo "\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"advisor_content\">
\t\t\t\t";
        // line 53
        $this->loadTemplate("BoAdminBundle:Contracts:advisor.html.twig", "contracts/show.html.twig", 53)->display($context);
        // line 54
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.revision", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 58
        $this->loadTemplate("BoAdminBundle:Contracts:revision.html.twig", "contracts/show.html.twig", 58)->display($context);
        // line 59
        echo "\t\t</div>
\t\t";
        // line 60
        if ((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator"))) {
            // line 61
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.departmentcontact", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 63
            $this->loadTemplate("BoAdminBundle:Contracts:coordinator.html.twig", "contracts/show.html.twig", 63)->display($context);
            // line 64
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 66
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contractual", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 68
        $this->loadTemplate("BoAdminBundle:Contracts:contractual.html.twig", "contracts/show.html.twig", 68)->display($context);
        // line 69
        echo "\t\t</div>\t
\t\t";
        // line 70
        if ((isset($context["billingContacts"]) ? $context["billingContacts"] : $this->getContext($context, "billingContacts"))) {
            // line 71
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.billingcontact", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 73
            $this->loadTemplate("BoAdminBundle:Contracts:bcontact.html.twig", "contracts/show.html.twig", 73)->display($context);
            // line 74
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 75
        echo "\t\t
\t\t";
        // line 76
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "notes", array())) {
            // line 77
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notes", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div>";
            // line 79
            echo $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "notes", array());
            echo "</div>
\t\t\t</div>\t
\t\t";
        }
        // line 81
        echo "\t\t\t
\t\t<br/>
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
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"close_contract\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <b>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</b>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_close", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["close_form"]) ? $context["close_form"] : $this->getContext($context, "close_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 125
        $this->loadTemplate("BoAdminBundle:Contracts:closeform.html.twig", "contracts/show.html.twig", 125)->display($context);
        // line 126
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["close_form"]) ? $context["close_form"] : $this->getContext($context, "close_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
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
\t  <div class=\"modal fade\" id=\"add_note\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.note", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_addnote", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addnoteform"]) ? $context["addnoteform"] : $this->getContext($context, "addnoteform")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 152
        $this->loadTemplate("BoAdminBundle:Contracts:addnote.html.twig", "contracts/show.html.twig", 152)->display($context);
        // line 153
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addnoteform"]) ? $context["addnoteform"] : $this->getContext($context, "addnoteform")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t<!-- Begin modal reopen contract -->
\t";
        // line 166
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 0)) {
            // line 167
            echo "\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"reopen_contract\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.reopen", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <b>";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.reopen", array(), "BoAdminBundle"), "html", null, true);
            echo "</b>
\t\t\t</div>
\t\t\t<form action=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_reopen", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
            // line 183
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["reopen_form"]) ? $context["reopen_form"] : $this->getContext($context, "reopen_form")), 'errors');
            echo "
\t\t\t\t\t\t";
            // line 184
            $this->loadTemplate("BoAdminBundle:Contracts:reopen.html.twig", "contracts/show.html.twig", 184)->display($context);
            // line 185
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["reopen_form"]) ? $context["reopen_form"] : $this->getContext($context, "reopen_form")), 'rest');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.open", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        }
        // line 197
        echo "\t<!-- end modal reopen contract -->

\t";
        // line 199
        if (((isset($context["advisordelete_form"]) ? $context["advisordelete_form"] : $this->getContext($context, "advisordelete_form")) != null)) {
            // line 200
            echo "\t\t<!-- begin modal advisor removing from contract -->\t
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"delete_advisor\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t  <p>";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t";
            // line 216
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["advisordelete_form"]) ? $context["advisordelete_form"] : $this->getContext($context, "advisordelete_form")), 'form_start');
            echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 218
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["advisordelete_form"]) ? $context["advisordelete_form"] : $this->getContext($context, "advisordelete_form")), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t<!-- end modal advisor removing from contract -->\t
\t";
        }
        // line 227
        echo "\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"historic_schedule\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacherhistoric", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  ";
        // line 240
        $this->loadTemplate("BoAdminBundle:HTeacherSchedule:tbliste.html.twig", "contracts/show.html.twig", 240)->display($context);
        // line 241
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"historic_student\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studenthistoric", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  ";
        // line 260
        $this->loadTemplate("BoAdminBundle:HistoStudents:tbliste.html.twig", "contracts/show.html.twig", 260)->display($context);
        // line 261
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<!-- begin Training creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_training\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addschedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("training_new", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 283
        $this->loadTemplate("BoAdminBundle:Contracts:trainingform.html.twig", "contracts/show.html.twig", 283)->display($context);
        // line 284
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 287
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

\t<!-- begin ts presence extraction form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"extract_presence\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tspresence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_presencexls", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tsp_form"]) ? $context["tsp_form"] : $this->getContext($context, "tsp_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 312
        $this->loadTemplate("BoAdminBundle:Contracts:tspresence.html.twig", "contracts/show.html.twig", 312)->display($context);
        // line 313
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tsp_form"]) ? $context["tsp_form"] : $this->getContext($context, "tsp_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end ts presence extraction form by modal dialog-->
\t
\t<!-- begin substitution creation form by modal dialog-->
\t";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 328
            echo "\t";
            $context["substitution_form"] = $this->getAttribute((isset($context["subs_form"]) ? $context["subs_form"] : $this->getContext($context, "subs_form")), $this->getAttribute($context["agenda"], "id", array()), array(), "array");
            // line 329
            echo "\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_substitution";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute($context["agenda"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 338
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addschedule", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
            // line 340
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_substitution_new", array("idagenda" => $this->getAttribute($context["agenda"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
            // line 342
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 343
            $this->loadTemplate("BoAdminBundle:Contracts:substitutionform.html.twig", "contracts/show.html.twig", 343)->display($context);
            // line 344
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'rest');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t</div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "\t<!-- end substitution creation form by modal dialog-->
\t
\t<!-- begin contractual creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_contractual\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contractual", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_contractual_new", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 373
        $this->loadTemplate("BoAdminBundle:Contractual:newform.html.twig", "contracts/show.html.twig", 373)->display($context);
        // line 374
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end contractual creation form by modal dialog-->\t
\t
\t";
        // line 387
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array()) != null))) {
            // line 388
            echo "\t\t<!-- begin contractual edit form by modal dialog-->
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"edit_contractual\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
            // line 398
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contractual", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
            // line 400
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_contractual_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array()), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
            // line 402
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contractual_editform"]) ? $context["contractual_editform"] : $this->getContext($context, "contractual_editform")), 'errors');
            echo "
\t\t\t\t\t\t\t";
            // line 403
            $this->loadTemplate("BoAdminBundle:Contractual:editform.html.twig", "contracts/show.html.twig", 403)->display($context);
            // line 404
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contractual_editform"]) ? $context["contractual_editform"] : $this->getContext($context, "contractual_editform")), 'rest');
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 407
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t<!-- end Training creation form by modal dialog-->
\t";
        }
        // line 417
        echo "\t
\t";
        // line 418
        if (((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")) != null)) {
            // line 419
            echo "\t\t<!-- begin teacher schedule creation form by modal dialog-->
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"add_tsc\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t  <h4 class=\"modal-title\">";
            // line 429
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addteacherschedule", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"error_message\" align=\"center\"></div>
\t\t\t\t\t<form action=\"";
            // line 432
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_new", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
            // line 434
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 435
            $this->loadTemplate("BoAdminBundle:Contracts:tscform.html.twig", "contracts/show.html.twig", 435)->display($context);
            // line 436
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), 'rest');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 439
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
            echo "\" id=\"btn_add_schedule\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t</div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t<!-- end teacher schedule form by modal dialog-->
\t";
        }
        // line 449
        echo "\t
\t<!-- Begin advisor creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_advisor\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addadvisor", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_add_advisor", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 464
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["advisor_form"]) ? $context["advisor_form"] : $this->getContext($context, "advisor_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 465
        $this->loadTemplate("BoAdminBundle:Contracts:advisorform.html.twig", "contracts/show.html.twig", 465)->display($context);
        // line 466
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["advisor_form"]) ? $context["advisor_form"] : $this->getContext($context, "advisor_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- End advisor creation form by modal dialog-->
\t
\t<!-- Begin student creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_student\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addstudent", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 491
        echo $this->env->getExtension('routing')->getPath("contracts_students_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 493
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 494
        $this->loadTemplate("BoAdminBundle:Contracts:studentform.html.twig", "contracts/show.html.twig", 494)->display($context);
        // line 495
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- End student creation form by modal dialog-->
\t
\t<!-- Begin revision creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_revision\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addrevision", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 520
        echo $this->env->getExtension('routing')->getPath("contracts_revision_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 522
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 523
        $this->loadTemplate("BoAdminBundle:Contracts:revisionform.html.twig", "contracts/show.html.twig", 523)->display($context);
        // line 524
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t</div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- End revision creation form by modal dialog-->

\t";
        // line 537
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_d8fe869d84cee89f5c1a3c065babb75880491ee21cb0368479e054e4a09eed4a->leave($__internal_d8fe869d84cee89f5c1a3c065babb75880491ee21cb0368479e054e4a09eed4a_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48f72c364d1a8a12c124b8897c74a0d5d668a6ae54b18ced491be1a25469f266 = $this->env->getExtension("native_profiler");
        $__internal_48f72c364d1a8a12c124b8897c74a0d5d668a6ae54b18ced491be1a25469f266->enter($__internal_48f72c364d1a8a12c124b8897c74a0d5d668a6ae54b18ced491be1a25469f266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 538
        echo "\t\t<script>
\t\t\t\$(\"#holders\").change(function(){
\t\t\t\t\$(\".schedule_content\").show();
\t\t\t\t\$('.schedule_content').html(\"<center>";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#holders option:selected\");
\t\t\t\tholders=str.val();
\t\t\t\tvar obj = \$(\"#idcontract\");
\t\t\t\tidcontract = obj.val();
\t\t\t\tvar DATA = 'data='+holders+\"-\"+idcontract;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 549
        echo $this->env->getExtension('routing')->getPath("substitution_reload");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.schedule_content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tvar str=\$(\"#holders option:selected\");
\t\t\t\tholders=str.val();
\t\t\t\tvar str=\$(\"#teachers option:selected\");
\t\t\t\tteachers=str.val();
\t\t\t\tif(holders==0){
\t\t\t\t\talert(\"You have to select a holder!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(teachers==0){
\t\t\t\t\talert(\"You have to select a substitute!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#local-create\").click(function(){
\t\t\t\tvar str=\$(\"#local option:selected\");
\t\t\t\tlocal=str.val();
\t\t\t\tif(local==0){
\t\t\t\t\talert(\"You have to select a room!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#tch_create\").click(function(){
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#teachers option:selected\");
\t\t\t\tteacher=str.val();
\t\t\t\tvar str=\$(\"#idschedule option:selected\");
\t\t\t\tidschedule=str.val();
\t\t\t\tif(teacher==\"0\" && idschedule==\"0\"){
\t\t\t\t\talert(\"you have to select a teacher and a schedule\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(teacher==\"0\"){
\t\t\t\t\talert(\"you have to select a teacher\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t
\t\t\t\tif(idschedule==\"0\"){
\t\t\t\t\talert(\"you have to select a schedule\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar DATA = 'data=' + teacher+\"-\"+idschedule;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 604
        echo $this->env->getExtension('routing')->getPath("contracts_addteacher");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#teacher_content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t\t
\t\t\t});
\t\t\t\$(\"#btn_open\").click(function(){
\t\t\t\tcontractid = \$(\"#btn_open\").val();
\t\t\t\tvar DATA = 'id='+contractid;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 619
        echo $this->env->getExtension('routing')->getPath("contracts_open");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.message-content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;\t\t\t
\t\t\t});
\t\t\t\$(\"#btn_plan\").click(function(){
\t\t\t\tcontractid = \$(\"#btn_plan\").val();
\t\t\t\tvar DATA = 'id='+contractid;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 633
        echo $this->env->getExtension('routing')->getPath("contracts_plan");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.message-content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;\t\t\t\t
\t\t\t});
\t\t\t\$(\"#btn_search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 654
        echo $this->env->getExtension('routing')->getPath("students_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hour\").change(function(){
\t\t\t\tvar before = \$(\".hoursbefore\").val();
\t\t\t\tvar hour = \$(\".hour\").val();
\t\t\t\tvar hour1 = Number(\$(\".hour1\").val());
\t\t\t\tvar hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);\t\t\t\t
\t\t\t\t\$(\".hourafter\").val(hourafter);
\t\t\t\tvar hourlyrate = \$(\".hourlyrate\").val();
\t\t\t\tvar hourlyrate1 = Number(\$(\".hourlyrate1\").val());
\t\t\t\tvar revisioncost = Number(hourlyrate)*parseInt(hour);
\t\t\t\tvar revisioncost1 = Number(hourlyrate1)*parseInt(hour1);
\t\t\t\t\$(\".total\").val(revisioncost);
\t\t\t\t\$(\".total1\").val(revisioncost1);
\t\t\t\tvar costbefore = \$(\".costbefore\").val();
\t\t\t\tvar costafter = revisioncost+revisioncost1+Number(costbefore);
\t\t\t\t\$(\".costafter\").val(costafter);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hour1\").change(function(){
\t\t\t\tvar before = \$(\".hoursbefore\").val();
\t\t\t\tvar hour = \$(\".hour\").val();
\t\t\t\tvar hour1 = Number(\$(\".hour1\").val());
\t\t\t\tvar hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);\t\t\t\t
\t\t\t\t\$(\".hourafter\").val(hourafter);
\t\t\t\tvar hourlyrate = \$(\".hourlyrate\").val();
\t\t\t\tvar hourlyrate1 = Number(\$(\".hourlyrate1\").val());
\t\t\t\tvar revisioncost = Number(hourlyrate)*parseInt(hour);
\t\t\t\tvar revisioncost1 = Number(hourlyrate1)*parseInt(hour1);
\t\t\t\t\$(\".total\").val(revisioncost);
\t\t\t\t\$(\".total1\").val(revisioncost1);
\t\t\t\tvar costbefore = \$(\".costbefore\").val();
\t\t\t\tvar costafter = revisioncost+revisioncost1+Number(costbefore);
\t\t\t\t\$(\".costafter\").val(costafter);
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\".hourlyrate\").change(function(){
\t\t\t\tvar before = \$(\".hoursbefore\").val();
\t\t\t\tvar hour = \$(\".hour\").val();
\t\t\t\tvar hour1 = Number(\$(\".hour1\").val());
\t\t\t\tvar hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);\t\t\t\t
\t\t\t\t\$(\".hourafter\").val(hourafter);
\t\t\t\tvar hourlyrate = \$(\".hourlyrate\").val();
\t\t\t\tvar hourlyrate1 = Number(\$(\".hourlyrate1\").val());
\t\t\t\tvar revisioncost = Number(hourlyrate)*parseInt(hour);
\t\t\t\tvar revisioncost1 = Number(hourlyrate1)*parseInt(hour1);
\t\t\t\t\$(\".total\").val(revisioncost);
\t\t\t\t\$(\".total1\").val(revisioncost1);
\t\t\t\tvar costbefore = \$(\".costbefore\").val();
\t\t\t\tvar costafter = revisioncost+revisioncost1+Number(costbefore);
\t\t\t\t\$(\".costafter\").val(costafter);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hourlyrate1\").change(function(){
\t\t\t\tvar before = \$(\".hoursbefore\").val();
\t\t\t\tvar hour = \$(\".hour\").val();
\t\t\t\tvar hour1 = Number(\$(\".hour1\").val());
\t\t\t\tvar hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);\t\t\t\t
\t\t\t\t\$(\".hourafter\").val(hourafter);
\t\t\t\tvar hourlyrate = \$(\".hourlyrate\").val();
\t\t\t\tvar hourlyrate1 = Number(\$(\".hourlyrate1\").val());
\t\t\t\tvar revisioncost = Number(hourlyrate)*parseInt(hour);
\t\t\t\tvar revisioncost1 = Number(hourlyrate1)*parseInt(hour1);
\t\t\t\t\$(\".total\").val(revisioncost);
\t\t\t\t\$(\".total1\").val(revisioncost1);
\t\t\t\tvar costbefore = \$(\".costbefore\").val();
\t\t\t\tvar costafter = revisioncost+revisioncost1+Number(costbefore);
\t\t\t\t\$(\".costafter\").val(costafter);
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\".hoursbefore\").change(function(){
\t\t\t\tvar before = \$(\".hoursbefore\").val();
\t\t\t\tvar hour = \$(\".hour\").val();
\t\t\t\tif(parseInt(before)>0 && parseInt(hour)>0){
\t\t\t\t\tvar hourafter = parseInt(before)+parseInt(hour);
\t\t\t\t\t\$(\".hourafter\").val(hourafter)
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_add_schedule\").click(function(){
\t\t\t\tvar str=\$(\".idteacher option:selected\");
\t\t\t\tidteacher = str.val();
\t\t\t\tif(idteacher==0){
\t\t\t\t\t\$('#error_message').html(\"You must select a teacher\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar startam = \$(\".startam\").val();
\t\t\t\tvar endam = \$(\".endam\").val();
\t\t\t\tvar startpm = \$(\".startpm\").val();
\t\t\t\tvar endpm = \$(\".endpm\").val();
\t\t\t\tif(startam==\"00:00\" && endam==\"00:00\" && startpm==\"00:00\" && endpm==\"00:00\"){
\t\t\t\t\t\$('#error_message').html(\"You have to enter the schedule\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(\$(\".tsc_start\").val()>\$(\".tsc_end\").val()){
\t\t\t\t\t\$('#error_message').html(\"Schedule startdate can not be equal to or greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(\$(\".hourperday\").val()==\"\"){
\t\t\t\t\t\$('#error_message').html(\"You have to fill the Hour/day field\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t
\t\t\t\treturn true;\t\t\t
\t\t\t});
\t\t\t/*
\t\t\t\$(\".idteacher\").change(function(){
\t\t\t\tvar str=\$(\".idteacher option:selected\");
\t\t\t\tvar idteacher=str.val();
\t\t\t\tvar start = \$(\".start\").val();
\t\t\t\tvar end = \$(\".end\").val();
\t\t\t\tvar hourperday = \$(\".hourperday\").val();
\t\t\t\tvar startam = \$(\".startam\").val();
\t\t\t\tvar startpm = \$(\".startpm\").val();
\t\t\t\tvar endam = \$(\".endam\").val();
\t\t\t\tvar endpm = \$(\".endpm\").val();
\t\t\t\tvar cmonday = \$(\".cmonday\").val();
\t\t\t\tvar ttuesday = \$(\".ttuesday\").val();
\t\t\t\tvar cwednesday = \$(\".cwednesday\").val();
\t\t\t\tvar cthursday = \$(\".cthursday\").val();
\t\t\t\tvar cfriday = \$(\".cfriday\").val();
\t\t\t\tvar DATA = 'data='+idteacher+\"#\"+start+\"#\"+end+\"#\"+hourperday+\"#\"+startam+\"#\"+endam+\"#\"+startpm+\"#\"+endpm+\"#\"+cmonday+\"#\"+ttuesday+\"#\"+cwednesday+\"#\"+cthursday+\"#\"+cfriday;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 784
        echo $this->env->getExtension('routing')->getPath("agenda_check");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#error_message').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t*/
\t\t</script>\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_48f72c364d1a8a12c124b8897c74a0d5d668a6ae54b18ced491be1a25469f266->leave($__internal_48f72c364d1a8a12c124b8897c74a0d5d668a6ae54b18ced491be1a25469f266_prof);

    }

    public function getTemplateName()
    {
        return "contracts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1381 => 796,  1377 => 795,  1363 => 784,  1230 => 654,  1219 => 648,  1201 => 633,  1184 => 619,  1166 => 604,  1141 => 584,  1103 => 549,  1090 => 541,  1085 => 538,  1073 => 537,  1060 => 527,  1053 => 524,  1051 => 523,  1047 => 522,  1042 => 520,  1037 => 518,  1014 => 498,  1007 => 495,  1005 => 494,  1001 => 493,  996 => 491,  991 => 489,  968 => 469,  961 => 466,  959 => 465,  955 => 464,  950 => 462,  945 => 460,  932 => 449,  919 => 439,  912 => 436,  910 => 435,  906 => 434,  901 => 432,  895 => 429,  883 => 419,  881 => 418,  878 => 417,  865 => 407,  858 => 404,  856 => 403,  852 => 402,  847 => 400,  840 => 398,  828 => 388,  826 => 387,  813 => 377,  806 => 374,  804 => 373,  800 => 372,  795 => 370,  788 => 368,  774 => 356,  751 => 347,  744 => 344,  742 => 343,  738 => 342,  733 => 340,  728 => 338,  718 => 331,  714 => 329,  711 => 328,  694 => 327,  680 => 316,  673 => 313,  671 => 312,  667 => 311,  662 => 309,  657 => 307,  634 => 287,  627 => 284,  625 => 283,  621 => 282,  616 => 280,  611 => 278,  592 => 261,  590 => 260,  584 => 257,  566 => 241,  564 => 240,  558 => 237,  546 => 227,  534 => 218,  530 => 217,  526 => 216,  520 => 213,  514 => 210,  502 => 200,  500 => 199,  496 => 197,  484 => 188,  477 => 185,  475 => 184,  471 => 183,  466 => 181,  461 => 179,  455 => 176,  444 => 167,  442 => 166,  429 => 156,  422 => 153,  420 => 152,  416 => 151,  411 => 149,  404 => 147,  383 => 129,  376 => 126,  374 => 125,  370 => 124,  365 => 122,  360 => 120,  354 => 117,  335 => 101,  331 => 100,  327 => 99,  321 => 96,  315 => 93,  301 => 81,  295 => 79,  291 => 78,  288 => 77,  286 => 76,  283 => 75,  279 => 74,  277 => 73,  273 => 72,  270 => 71,  268 => 70,  265 => 69,  263 => 68,  259 => 67,  256 => 66,  252 => 64,  250 => 63,  246 => 62,  243 => 61,  241 => 60,  238 => 59,  236 => 58,  232 => 57,  227 => 54,  225 => 53,  220 => 51,  215 => 48,  213 => 47,  208 => 45,  205 => 44,  202 => 43,  198 => 41,  196 => 40,  192 => 39,  189 => 38,  186 => 37,  181 => 34,  179 => 33,  174 => 31,  171 => 30,  169 => 29,  165 => 27,  163 => 26,  158 => 24,  155 => 23,  153 => 22,  150 => 21,  148 => 20,  144 => 19,  141 => 18,  137 => 16,  135 => 15,  131 => 14,  128 => 13,  125 => 12,  123 => 11,  120 => 10,  118 => 9,  115 => 8,  109 => 7,  93 => 6,  81 => 5,  69 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{%include "BoAdminBundle:Contracts:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Contracts:showactions.html.twig"%}*/
/* */
/* 		{%if contract.group is defined and contract.group!=null%}*/
/* 			{% set group=contract.group %}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.training'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Training:show.html.twig"%}*/
/* 		</div>*/
/* 		{%if groupnull==0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div id="teacher_content">*/
/* 					{%include "BoAdminBundle:Contracts:agteacher.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 			{%if substitutions is defined and substitutions|length>0%}*/
/* 				<div class="display_content">*/
/* 					<legend>{{'label.substitution'|trans([],'BoAdminBundle')}}</legend>*/
/* 					<div id="teacher_content">*/
/* 						{%include "BoAdminBundle:Contracts:substitutions.html.twig"%}*/
/* 					</div>*/
/* 				</div>*/
/* 			{%endif%}*/
/* 			{%if contract.campus is defined and contract.campus!=null%}*/
/* 				<div class="display_content">*/
/* 					<legend>{{'label.room'|trans([],'BoAdminBundle')}}</legend>*/
/* 					{%include "BoAdminBundle:Contracts:local.html.twig"%}*/
/* 				</div>*/
/* 			{%endif%}*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'Student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="students_content">*/
/* 				{%include "BoAdminBundle:Contracts:students.html.twig"%}*/
/* 			</div>*/
/* 		</div>	*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.pa'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="advisor_content">*/
/* 				{%include "BoAdminBundle:Contracts:advisor.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.revision'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Contracts:revision.html.twig"%}*/
/* 		</div>*/
/* 		{%if coordinator%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'title.departmentcontact'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:coordinator.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.contractual'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Contracts:contractual.html.twig"%}*/
/* 		</div>	*/
/* 		{%if billingContacts %}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'title.billingcontact'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:bcontact.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}		*/
/* 		{%if contract.notes%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.notes'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div>{{contract.notes|raw}}</div>*/
/* 			</div>	*/
/* 		{%endif%}			*/
/* 		<br/>*/
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
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
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
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="close_contract" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.close'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <b>{{'message.confirm.close'|trans([],'BoAdminBundle')}}</b>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_close',{'id':contract.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(close_form) }}*/
/* 						{%include "BoAdminBundle:Contracts:closeform.html.twig"%}*/
/* 					{{ form_rest(close_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.close'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_note" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.note'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_addnote',{'id':contract.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(addnoteform) }}*/
/* 						{%include "BoAdminBundle:Contracts:addnote.html.twig"%}*/
/* 					{{ form_rest(addnoteform) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.add'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	<!-- Begin modal reopen contract -->*/
/* 	{%if contract.status==0%}*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="reopen_contract" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.reopen'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <b>{{'message.confirm.reopen'|trans([],'BoAdminBundle')}}</b>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_reopen',{'id':contract.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(reopen_form) }}*/
/* 						{%include "BoAdminBundle:Contracts:reopen.html.twig"%}*/
/* 					{{ form_rest(reopen_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.open'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<!-- end modal reopen contract -->*/
/* */
/* 	{%if advisordelete_form!=null%}*/
/* 		<!-- begin modal advisor removing from contract -->	*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="delete_advisor" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<div class="modal-body">*/
/* 				  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					{{ form_start(advisordelete_form) }}*/
/* 						<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 					{{ form_end(advisordelete_form) }}*/
/* 				</div>*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		<!-- end modal advisor removing from contract -->	*/
/* 	{%endif%}*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="historic_schedule" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.teacherhistoric'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  {%include "BoAdminBundle:HTeacherSchedule:tbliste.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="historic_student" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.studenthistoric'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  {%include "BoAdminBundle:HistoStudents:tbliste.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin Training creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_training" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addschedule'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('training_new',{'idcontract':contract.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(training_form) }}*/
/* 						{%include "BoAdminBundle:Contracts:trainingform.html.twig"%}*/
/* 					{{ form_rest(training_form) }}*/
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
/* 	<!-- begin ts presence extraction form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="extract_presence" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.tspresence'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_presencexls',{'id':contract.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(tsp_form) }}*/
/* 						{%include "BoAdminBundle:Contracts:tspresence.html.twig"%}*/
/* 					{{ form_rest(tsp_form) }}*/
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
/* 	<!-- end ts presence extraction form by modal dialog-->*/
/* 	*/
/* 	<!-- begin substitution creation form by modal dialog-->*/
/* 	{%for agenda in agendas%}*/
/* 	{%set substitution_form=subs_form[agenda.id]%}*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_substitution{{agenda.id}}" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">{{'label.addschedule'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<form action="{{ path('contracts_substitution_new',{'idagenda':agenda.id}) }}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{{ form_errors(substitution_form) }}*/
/* 								{%include "BoAdminBundle:Contracts:substitutionform.html.twig"%}*/
/* 							{{ form_rest(substitution_form) }}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 						</div>*/
/* 					</form>	*/
/* 				</div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{%endfor%}*/
/* 	<!-- end substitution creation form by modal dialog-->*/
/* 	*/
/* 	<!-- begin contractual creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_contractual" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.contractual'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_contractual_new',{'idcontract':contract.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(contractual_form) }}*/
/* 						{%include "BoAdminBundle:Contractual:newform.html.twig"%}*/
/* 					{{ form_rest(contractual_form) }}*/
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
/* 	<!-- end contractual creation form by modal dialog-->	*/
/* 	*/
/* 	{%if contract.contractual and contract.contractual!=null%}*/
/* 		<!-- begin contractual edit form by modal dialog-->*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="edit_contractual" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.edit'|trans([],'BoAdminBundle')}} {{'entity.contractual'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('contracts_contractual_edit',{'id':contract.contractual.id}) }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(contractual_editform) }}*/
/* 							{%include "BoAdminBundle:Contractual:editform.html.twig"%}*/
/* 						{{ form_rest(contractual_editform) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.edit'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		<!-- end Training creation form by modal dialog-->*/
/* 	{%endif%}*/
/* 	*/
/* 	{%if tsc_form!=null%}*/
/* 		<!-- begin teacher schedule creation form by modal dialog-->*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="add_tsc" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 					  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 					  <h4 class="modal-title">{{'label.addteacherschedule'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<div id="error_message" align="center"></div>*/
/* 					<form action="{{ path('agenda_new',{'idcontract':contract.id}) }}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{{ form_errors(tsc_form) }}*/
/* 								{%include "BoAdminBundle:Contracts:tscform.html.twig"%}*/
/* 							{{ form_rest(tsc_form) }}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" id="btn_add_schedule">*/
/* 						</div>*/
/* 					</form>	*/
/* 				</div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		<!-- end teacher schedule form by modal dialog-->*/
/* 	{%endif%}*/
/* 	*/
/* 	<!-- Begin advisor creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_advisor" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addadvisor'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_add_advisor',{'idcontract':contract.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(advisor_form) }}*/
/* 						{%include "BoAdminBundle:Contracts:advisorform.html.twig"%}*/
/* 					{{ form_rest(advisor_form) }}*/
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
/* 	<!-- End advisor creation form by modal dialog-->*/
/* 	*/
/* 	<!-- Begin student creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_student" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addstudent'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_students_new') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(student_form) }}*/
/* 						{%include "BoAdminBundle:Contracts:studentform.html.twig"%}*/
/* 					{{ form_rest(student_form) }}*/
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
/* 	<!-- End student creation form by modal dialog-->*/
/* 	*/
/* 	<!-- Begin revision creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_revision" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 			<!-- Modal content-->*/
/* 			<div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'label.addrevision'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('contracts_revision_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(revision_form) }}*/
/* 							{%include "BoAdminBundle:Contracts:revisionform.html.twig"%}*/
/* 						{{ form_rest(revision_form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			</div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- End revision creation form by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#holders").change(function(){*/
/* 				$(".schedule_content").show();*/
/* 				$('.schedule_content').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#holders option:selected");*/
/* 				holders=str.val();*/
/* 				var obj = $("#idcontract");*/
/* 				idcontract = obj.val();*/
/* 				var DATA = 'data='+holders+"-"+idcontract;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('substitution_reload')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.schedule_content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn-create").click(function(){*/
/* 				var str=$("#holders option:selected");*/
/* 				holders=str.val();*/
/* 				var str=$("#teachers option:selected");*/
/* 				teachers=str.val();*/
/* 				if(holders==0){*/
/* 					alert("You have to select a holder!");*/
/* 					return false;*/
/* 				}*/
/* 				if(teachers==0){*/
/* 					alert("You have to select a substitute!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#local-create").click(function(){*/
/* 				var str=$("#local option:selected");*/
/* 				local=str.val();*/
/* 				if(local==0){*/
/* 					alert("You have to select a room!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#tch_create").click(function(){*/
/* 				var criteria = $("#inp-search").val();				*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#teachers option:selected");*/
/* 				teacher=str.val();*/
/* 				var str=$("#idschedule option:selected");*/
/* 				idschedule=str.val();*/
/* 				if(teacher=="0" && idschedule=="0"){*/
/* 					alert("you have to select a teacher and a schedule");*/
/* 					return false;*/
/* 				}*/
/* 				if(teacher=="0"){*/
/* 					alert("you have to select a teacher");*/
/* 					return false;*/
/* 				}				*/
/* 				if(idschedule=="0"){*/
/* 					alert("you have to select a schedule");*/
/* 					return false;*/
/* 				}*/
/* 				var DATA = 'data=' + teacher+"-"+idschedule;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_addteacher')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#teacher_content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 				*/
/* 			});*/
/* 			$("#btn_open").click(function(){*/
/* 				contractid = $("#btn_open").val();*/
/* 				var DATA = 'id='+contractid;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_open')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.message-content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;			*/
/* 			});*/
/* 			$("#btn_plan").click(function(){*/
/* 				contractid = $("#btn_plan").val();*/
/* 				var DATA = 'id='+contractid;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_plan')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.message-content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;				*/
/* 			});*/
/* 			$("#btn_search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();			*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".hour").change(function(){*/
/* 				var before = $(".hoursbefore").val();*/
/* 				var hour = $(".hour").val();*/
/* 				var hour1 = Number($(".hour1").val());*/
/* 				var hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);				*/
/* 				$(".hourafter").val(hourafter);*/
/* 				var hourlyrate = $(".hourlyrate").val();*/
/* 				var hourlyrate1 = Number($(".hourlyrate1").val());*/
/* 				var revisioncost = Number(hourlyrate)*parseInt(hour);*/
/* 				var revisioncost1 = Number(hourlyrate1)*parseInt(hour1);*/
/* 				$(".total").val(revisioncost);*/
/* 				$(".total1").val(revisioncost1);*/
/* 				var costbefore = $(".costbefore").val();*/
/* 				var costafter = revisioncost+revisioncost1+Number(costbefore);*/
/* 				$(".costafter").val(costafter);*/
/* 				return false;*/
/* 			});*/
/* 			$(".hour1").change(function(){*/
/* 				var before = $(".hoursbefore").val();*/
/* 				var hour = $(".hour").val();*/
/* 				var hour1 = Number($(".hour1").val());*/
/* 				var hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);				*/
/* 				$(".hourafter").val(hourafter);*/
/* 				var hourlyrate = $(".hourlyrate").val();*/
/* 				var hourlyrate1 = Number($(".hourlyrate1").val());*/
/* 				var revisioncost = Number(hourlyrate)*parseInt(hour);*/
/* 				var revisioncost1 = Number(hourlyrate1)*parseInt(hour1);*/
/* 				$(".total").val(revisioncost);*/
/* 				$(".total1").val(revisioncost1);*/
/* 				var costbefore = $(".costbefore").val();*/
/* 				var costafter = revisioncost+revisioncost1+Number(costbefore);*/
/* 				$(".costafter").val(costafter);*/
/* 				return false;*/
/* 			});	*/
/* 			$(".hourlyrate").change(function(){*/
/* 				var before = $(".hoursbefore").val();*/
/* 				var hour = $(".hour").val();*/
/* 				var hour1 = Number($(".hour1").val());*/
/* 				var hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);				*/
/* 				$(".hourafter").val(hourafter);*/
/* 				var hourlyrate = $(".hourlyrate").val();*/
/* 				var hourlyrate1 = Number($(".hourlyrate1").val());*/
/* 				var revisioncost = Number(hourlyrate)*parseInt(hour);*/
/* 				var revisioncost1 = Number(hourlyrate1)*parseInt(hour1);*/
/* 				$(".total").val(revisioncost);*/
/* 				$(".total1").val(revisioncost1);*/
/* 				var costbefore = $(".costbefore").val();*/
/* 				var costafter = revisioncost+revisioncost1+Number(costbefore);*/
/* 				$(".costafter").val(costafter);*/
/* 				return false;*/
/* 			});*/
/* 			$(".hourlyrate1").change(function(){*/
/* 				var before = $(".hoursbefore").val();*/
/* 				var hour = $(".hour").val();*/
/* 				var hour1 = Number($(".hour1").val());*/
/* 				var hourafter = parseInt(before)+parseInt(hour)+parseInt(hour1);				*/
/* 				$(".hourafter").val(hourafter);*/
/* 				var hourlyrate = $(".hourlyrate").val();*/
/* 				var hourlyrate1 = Number($(".hourlyrate1").val());*/
/* 				var revisioncost = Number(hourlyrate)*parseInt(hour);*/
/* 				var revisioncost1 = Number(hourlyrate1)*parseInt(hour1);*/
/* 				$(".total").val(revisioncost);*/
/* 				$(".total1").val(revisioncost1);*/
/* 				var costbefore = $(".costbefore").val();*/
/* 				var costafter = revisioncost+revisioncost1+Number(costbefore);*/
/* 				$(".costafter").val(costafter);*/
/* 				return false;*/
/* 			});	*/
/* 			$(".hoursbefore").change(function(){*/
/* 				var before = $(".hoursbefore").val();*/
/* 				var hour = $(".hour").val();*/
/* 				if(parseInt(before)>0 && parseInt(hour)>0){*/
/* 					var hourafter = parseInt(before)+parseInt(hour);*/
/* 					$(".hourafter").val(hourafter)*/
/* 				}*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_add_schedule").click(function(){*/
/* 				var str=$(".idteacher option:selected");*/
/* 				idteacher = str.val();*/
/* 				if(idteacher==0){*/
/* 					$('#error_message').html("You must select a teacher");*/
/* 					return false;*/
/* 				}*/
/* 				var startam = $(".startam").val();*/
/* 				var endam = $(".endam").val();*/
/* 				var startpm = $(".startpm").val();*/
/* 				var endpm = $(".endpm").val();*/
/* 				if(startam=="00:00" && endam=="00:00" && startpm=="00:00" && endpm=="00:00"){*/
/* 					$('#error_message').html("You have to enter the schedule");*/
/* 					return false;*/
/* 				}*/
/* 				if($(".tsc_start").val()>$(".tsc_end").val()){*/
/* 					$('#error_message').html("Schedule startdate can not be equal to or greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				if($(".hourperday").val()==""){*/
/* 					$('#error_message').html("You have to fill the Hour/day field");*/
/* 					return false;*/
/* 				}				*/
/* 				return true;			*/
/* 			});*/
/* 			/**/
/* 			$(".idteacher").change(function(){*/
/* 				var str=$(".idteacher option:selected");*/
/* 				var idteacher=str.val();*/
/* 				var start = $(".start").val();*/
/* 				var end = $(".end").val();*/
/* 				var hourperday = $(".hourperday").val();*/
/* 				var startam = $(".startam").val();*/
/* 				var startpm = $(".startpm").val();*/
/* 				var endam = $(".endam").val();*/
/* 				var endpm = $(".endpm").val();*/
/* 				var cmonday = $(".cmonday").val();*/
/* 				var ttuesday = $(".ttuesday").val();*/
/* 				var cwednesday = $(".cwednesday").val();*/
/* 				var cthursday = $(".cthursday").val();*/
/* 				var cfriday = $(".cfriday").val();*/
/* 				var DATA = 'data='+idteacher+"#"+start+"#"+end+"#"+hourperday+"#"+startam+"#"+endam+"#"+startpm+"#"+endpm+"#"+cmonday+"#"+ttuesday+"#"+cwednesday+"#"+cthursday+"#"+cfriday;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('agenda_check')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#error_message').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			*//* */
/* 		</script>	*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
