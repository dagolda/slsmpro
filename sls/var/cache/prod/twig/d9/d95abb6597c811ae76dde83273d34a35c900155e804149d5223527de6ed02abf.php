<?php

/* BoHomeBundle:Default:index.html.twig */
class __TwigTemplate_6d1a1faa4bed84a75ef1d44f659e8c95e997f13a002a6bf65749d669b57245d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home.html.twig", "BoHomeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'navbis' => array($this, 'block_navbis'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61250c46007b45c42ffc497b060da8188ef3618023635e93331e832341e50c22 = $this->env->getExtension("native_profiler");
        $__internal_61250c46007b45c42ffc497b060da8188ef3618023635e93331e832341e50c22->enter($__internal_61250c46007b45c42ffc497b060da8188ef3618023635e93331e832341e50c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61250c46007b45c42ffc497b060da8188ef3618023635e93331e832341e50c22->leave($__internal_61250c46007b45c42ffc497b060da8188ef3618023635e93331e832341e50c22_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_56dba5c77ff56da9961a747c9fc52586048952808c1344ad1e6fa6222d22021d = $this->env->getExtension("native_profiler");
        $__internal_56dba5c77ff56da9961a747c9fc52586048952808c1344ad1e6fa6222d22021d->enter($__internal_56dba5c77ff56da9961a747c9fc52586048952808c1344ad1e6fa6222d22021d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_56dba5c77ff56da9961a747c9fc52586048952808c1344ad1e6fa6222d22021d->leave($__internal_56dba5c77ff56da9961a747c9fc52586048952808c1344ad1e6fa6222d22021d_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_db26b472240d8691f97e6d991603edc6a75103a25cc43d0cd66a378ddc986549 = $this->env->getExtension("native_profiler");
        $__internal_db26b472240d8691f97e6d991603edc6a75103a25cc43d0cd66a378ddc986549->enter($__internal_db26b472240d8691f97e6d991603edc6a75103a25cc43d0cd66a378ddc986549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        // line 4
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Default:tdb.html.twig", "BoHomeBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_db26b472240d8691f97e6d991603edc6a75103a25cc43d0cd66a378ddc986549->leave($__internal_db26b472240d8691f97e6d991603edc6a75103a25cc43d0cd66a378ddc986549_prof);

    }

    // line 6
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2b48e99b26de23b8a432eeb4cfeb3ab5b86e138eaad5529603059c480f411a20 = $this->env->getExtension("native_profiler");
        $__internal_2b48e99b26de23b8a432eeb4cfeb3ab5b86e138eaad5529603059c480f411a20->enter($__internal_2b48e99b26de23b8a432eeb4cfeb3ab5b86e138eaad5529603059c480f411a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 7
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Default:index.html.twig", 7)->display($context);
        }
        echo "\t
";
        
        $__internal_2b48e99b26de23b8a432eeb4cfeb3ab5b86e138eaad5529603059c480f411a20->leave($__internal_2b48e99b26de23b8a432eeb4cfeb3ab5b86e138eaad5529603059c480f411a20_prof);

    }

    // line 9
    public function block_navbis($context, array $blocks = array())
    {
        $__internal_42d006180611325d8d40781240b2e02920c3135372741a68f7ae1979173919b2 = $this->env->getExtension("native_profiler");
        $__internal_42d006180611325d8d40781240b2e02920c3135372741a68f7ae1979173919b2->enter($__internal_42d006180611325d8d40781240b2e02920c3135372741a68f7ae1979173919b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbis"));

        // line 10
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Default:actions.html.twig", "BoHomeBundle:Default:index.html.twig", 10)->display($context);
        echo "\t
";
        
        $__internal_42d006180611325d8d40781240b2e02920c3135372741a68f7ae1979173919b2->leave($__internal_42d006180611325d8d40781240b2e02920c3135372741a68f7ae1979173919b2_prof);

    }

    // line 12
    public function block_label($context, array $blocks = array())
    {
        $__internal_267a4ce9bb2e2d61b0e9b785b7664aafee870b04ef7fd5610ed135336e37871d = $this->env->getExtension("native_profiler");
        $__internal_267a4ce9bb2e2d61b0e9b785b7664aafee870b04ef7fd5610ed135336e37871d->enter($__internal_267a4ce9bb2e2d61b0e9b785b7664aafee870b04ef7fd5610ed135336e37871d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_267a4ce9bb2e2d61b0e9b785b7664aafee870b04ef7fd5610ed135336e37871d->leave($__internal_267a4ce9bb2e2d61b0e9b785b7664aafee870b04ef7fd5610ed135336e37871d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5df28570a6260b0f7d91612eff843e4f305b909a72f503934d91adc537e1da85 = $this->env->getExtension("native_profiler");
        $__internal_5df28570a6260b0f7d91612eff843e4f305b909a72f503934d91adc537e1da85->enter($__internal_5df28570a6260b0f7d91612eff843e4f305b909a72f503934d91adc537e1da85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t<div class=\"panel-group\">
\t\t";
        // line 15
        $this->loadTemplate("BoHomeBundle:Default:schedules.html.twig", "BoHomeBundle:Default:index.html.twig", 15)->display($context);
        // line 16
        echo "\t\t";
        if (((twig_length_filter($this->env, (isset($context["invitations"]) ? $context["invitations"] : $this->getContext($context, "invitations"))) > 0) && ((isset($context["b_invite"]) ? $context["b_invite"] : $this->getContext($context, "b_invite")) == true))) {
            // line 17
            echo "\t\t\t";
            $this->loadTemplate("BoHomeBundle:Default:invitation.html.twig", "BoHomeBundle:Default:index.html.twig", 17)->display($context);
            // line 18
            echo "\t\t";
        } elseif (((isset($context["dwelcome"]) ? $context["dwelcome"] : $this->getContext($context, "dwelcome")) == 1)) {
            // line 19
            echo "\t\t\t";
            $this->loadTemplate("BoHomeBundle:Default:homemessage.html.twig", "BoHomeBundle:Default:index.html.twig", 19)->display($context);
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t\t";
        $this->loadTemplate("BoHomeBundle:Default:clearance.html.twig", "BoHomeBundle:Default:index.html.twig", 21)->display($context);
        echo "\t
\t\t";
        // line 22
        if ((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets"))) {
            // line 23
            echo "\t\t\t";
            $this->loadTemplate("BoHomeBundle:Default:helps.html.twig", "BoHomeBundle:Default:index.html.twig", 23)->display($context);
            // line 24
            echo "\t\t";
        }
        // line 25
        echo "\t\t";
        if ((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) {
            // line 26
            echo "\t\t\t";
            $this->loadTemplate("BoHomeBundle:Default:absences.html.twig", "BoHomeBundle:Default:index.html.twig", 26)->display($context);
            // line 27
            echo "\t\t";
        }
        // line 28
        echo "\t</div>
\t<div class=\"container ggl_map\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"ottawa_map\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.googlemap", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 41
        $this->loadTemplate("BoStudentBundle:Default:ottawamap.html.twig", "BoHomeBundle:Default:index.html.twig", 41)->display($context);
        // line 42
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"hull_map\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.googlemap", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 60
        $this->loadTemplate("BoStudentBundle:Default:hullmap.html.twig", "BoHomeBundle:Default:index.html.twig", 60)->display($context);
        // line 61
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<!-- Begin employee document deleting -->
\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epjs"]) ? $context["epjs"] : $this->getContext($context, "epjs")));
        foreach ($context['_seq'] as $context["_key"] => $context["epj"]) {
            // line 70
            echo "\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t  <p>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t";
            // line 85
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["epjs_delete_form"]) ? $context["epjs_delete_form"] : $this->getContext($context, "epjs_delete_form")), $this->getAttribute($context["epj"], "id", array()), array(), "array"), 'form_start');
            echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 87
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["epjs_delete_form"]) ? $context["epjs_delete_form"] : $this->getContext($context, "epjs_delete_form")), $this->getAttribute($context["epj"], "id", array()), array(), "array"), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t<!-- End employee document deleting -->\t
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_epj\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addmessage", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("home_emppj_new");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div id=records_entity>
\t\t\t\t\t\t\t";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 111
        $this->loadTemplate("BoHomeBundle:Emppj:newform.html.twig", "BoHomeBundle:Default:index.html.twig", 111)->display($context);
        // line 112
        echo "\t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"add_ticket\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addticket", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("bo_home_newticket");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\" >
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["ticketform"]) ? $context["ticketform"] : $this->getContext($context, "ticketform")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 138
        $this->loadTemplate("BoHomeBundle:Default:ticketform.html.twig", "BoHomeBundle:Default:index.html.twig", 138)->display($context);
        // line 139
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["ticketform"]) ? $context["ticketform"] : $this->getContext($context, "ticketform")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
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
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("bo_home_newabsence");
        echo "\" method=\"post\" class=\"modal-form\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absform"]) ? $context["absform"] : $this->getContext($context, "absform")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 165
        $this->loadTemplate("BoHomeBundle:Default:absenceform.html.twig", "BoHomeBundle:Default:index.html.twig", 165)->display($context);
        // line 166
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absform"]) ? $context["absform"] : $this->getContext($context, "absform")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\" id=\"btn-create\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 178
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5df28570a6260b0f7d91612eff843e4f305b909a72f503934d91adc537e1da85->leave($__internal_5df28570a6260b0f7d91612eff843e4f305b909a72f503934d91adc537e1da85_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_754007332ec57fa1dc15fd43c5c469a0c9e620393a5a6fd7f3b8e08cbf617e99 = $this->env->getExtension("native_profiler");
        $__internal_754007332ec57fa1dc15fd43c5c469a0c9e620393a5a6fd7f3b8e08cbf617e99->enter($__internal_754007332ec57fa1dc15fd43c5c469a0c9e620393a5a6fd7f3b8e08cbf617e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "\t\t<script>\t
\t\t\t\$(\".event_next_week\").click(function(){
\t\t\t\t\$(\".current-event\").hide();
\t\t\t\t\$(\".next-event\").show();
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#nstartdate\").val();
\t\t\t\tvar enddate=\$(\"#nenddate\").val();
\t\t\t\t\$('.load_data').html(\"<center>";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".event_current_week\").click(function(){
\t\t\t\t\$(\".next-event\").hide();
\t\t\t\t\$(\".current-event\").show();
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#pstartdate\").val();
\t\t\t\tvar enddate=\$(\"#penddate\").val();
\t\t\t\t\$('.load_data').html(\"<center>";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});\t
\t\t\tfunction loaddata(DATA){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("home_schedule_load");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: true,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#load_data').html(data);
\t\t\t\t\t},
\t\t\t\t\terror: function(data,status,error){
\t\t\t\t\t\t\$('#data_error').html(error);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tif( isNaN(startdate.getTime()) ){
\t\t\t\t\talert(\"Invalid start date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tif( isNaN(enddate.getTime()) ){
\t\t\t\t\talert(\"Invalid end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
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
\t\t\t\tif( isNaN(startdate.getTime()) ){
\t\t\t\t\talert(\"Invalid start date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tif( isNaN(enddate.getTime()) ){
\t\t\t\t\talert(\"Invalid end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
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
\t\t\t\tif( isNaN(startdate.getTime()) ){
\t\t\t\t\talert(\"Invalid start date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tif( isNaN(enddate.getTime()) ){
\t\t\t\t\talert(\"Invalid end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
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
\t\t</script>\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_754007332ec57fa1dc15fd43c5c469a0c9e620393a5a6fd7f3b8e08cbf617e99->leave($__internal_754007332ec57fa1dc15fd43c5c469a0c9e620393a5a6fd7f3b8e08cbf617e99_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 291,  549 => 290,  461 => 205,  448 => 197,  432 => 186,  423 => 179,  411 => 178,  400 => 170,  396 => 169,  389 => 166,  387 => 165,  383 => 164,  378 => 162,  373 => 160,  353 => 143,  349 => 142,  342 => 139,  340 => 138,  336 => 137,  331 => 135,  326 => 133,  306 => 116,  298 => 112,  296 => 111,  292 => 110,  286 => 107,  281 => 105,  269 => 95,  255 => 87,  251 => 86,  247 => 85,  241 => 82,  235 => 79,  224 => 70,  220 => 69,  210 => 61,  208 => 60,  202 => 57,  185 => 42,  183 => 41,  177 => 38,  165 => 28,  162 => 27,  159 => 26,  156 => 25,  153 => 24,  150 => 23,  148 => 22,  143 => 21,  140 => 20,  137 => 19,  134 => 18,  131 => 17,  128 => 16,  126 => 15,  123 => 14,  117 => 13,  103 => 12,  93 => 10,  87 => 9,  76 => 7,  68 => 6,  60 => 4,  54 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'home.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'admin.default.home'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}*/
/* 	{%include "BoHomeBundle:Default:tdb.html.twig"%}*/
/* {% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block navbis %}*/
/* 	{%include "BoHomeBundle:Default:actions.html.twig"%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'admin.default.home'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div class="panel-group">*/
/* 		{%include "BoHomeBundle:Default:schedules.html.twig"%}*/
/* 		{%if invitations|length>0 and b_invite==true%}*/
/* 			{%include "BoHomeBundle:Default:invitation.html.twig"%}*/
/* 		{%elseif dwelcome==1%}*/
/* 			{%include "BoHomeBundle:Default:homemessage.html.twig"%}*/
/* 		{%endif%}*/
/* 		{%include "BoHomeBundle:Default:clearance.html.twig"%}	*/
/* 		{%if tickets %}*/
/* 			{%include "BoHomeBundle:Default:helps.html.twig"%}*/
/* 		{%endif%}*/
/* 		{%if absences %}*/
/* 			{%include "BoHomeBundle:Default:absences.html.twig"%}*/
/* 		{%endif%}*/
/* 	</div>*/
/* 	<div class="container ggl_map">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="ottawa_map" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.googlemap'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				{%include "BoStudentBundle:Default:ottawamap.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="hull_map" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.googlemap'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				{%include "BoStudentBundle:Default:hullmap.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- Begin employee document deleting -->*/
/* 	{%for epj in epjs%}*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="myModal" role="dialog">*/
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
/* 					{{ form_start(epjs_delete_form[epj.id]) }}*/
/* 						<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 					{{ form_end(epjs_delete_form[epj.id]) }}*/
/* 				</div>*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 	{%endfor%}*/
/* 	<!-- End employee document deleting -->	*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_epj" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'label.addmessage'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('home_emppj_new') }}" enctype="multipart/form-data" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						<div id=records_entity>*/
/* 							{{ form_errors(form) }}*/
/* 								{%include "BoHomeBundle:Emppj:newform.html.twig"%}*/
/* 							{{ form_rest(form) }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="add_ticket" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'label.addticket'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('bo_home_newticket') }}" enctype="multipart/form-data" method="post" class="style" >*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(ticketform) }}*/
/* 						{%include "BoHomeBundle:Default:ticketform.html.twig"%}*/
/* 						{{ form_rest(ticketform) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
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
/* 			<form action="{{ path('bo_home_newabsence') }}" method="post" class="modal-form">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(absform) }}*/
/* 						{%include "BoHomeBundle:Default:absenceform.html.twig"%}*/
/* 					{{ form_rest(absform) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" id="btn-create">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>	*/
/* 			$(".event_next_week").click(function(){*/
/* 				$(".current-event").hide();*/
/* 				$(".next-event").show();*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#nstartdate").val();*/
/* 				var enddate=$("#nenddate").val();*/
/* 				$('.load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$(".event_current_week").click(function(){*/
/* 				$(".next-event").hide();*/
/* 				$(".current-event").show();*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#pstartdate").val();*/
/* 				var enddate=$("#penddate").val();*/
/* 				$('.load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});	*/
/* 			function loaddata(DATA){*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('home_schedule_load')}}",*/
/* 					data: DATA,*/
/* 					cache: true,*/
/* 					success: function(data){*/
/* 						$('#load_data').html(data);*/
/* 					},*/
/* 					error: function(data,status,error){*/
/* 						$('#data_error').html(error);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			}*/
/* 			$("#btn-create").click(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				if( isNaN(startdate.getTime()) ){*/
/* 					alert("Invalid start date!");*/
/* 					return false;*/
/* 				}*/
/* 				enddate = new Date($(".abend").val());*/
/* 				if( isNaN(enddate.getTime()) ){*/
/* 					alert("Invalid end date!");*/
/* 					return false;*/
/* 				}*/
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
/* 				if( isNaN(startdate.getTime()) ){*/
/* 					alert("Invalid start date!");*/
/* 					return false;*/
/* 				}*/
/* 				enddate = new Date($(".abend").val());*/
/* 				if( isNaN(enddate.getTime()) ){*/
/* 					alert("Invalid end date!");*/
/* 					return false;*/
/* 				}*/
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
/* 				if( isNaN(startdate.getTime()) ){*/
/* 					alert("Invalid start date!");*/
/* 					return false;*/
/* 				}*/
/* 				enddate = new Date($(".abend").val());*/
/* 				if( isNaN(enddate.getTime()) ){*/
/* 					alert("Invalid end date!");*/
/* 					return false;*/
/* 				}*/
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
/* 		</script>		*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
