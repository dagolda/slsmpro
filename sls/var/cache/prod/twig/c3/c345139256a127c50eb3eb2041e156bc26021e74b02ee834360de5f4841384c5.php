<?php

/* employee/index.html.twig */
class __TwigTemplate_cef1e2874b09c1064b19b33653d291f4da4ad2a876bc5ecdf68ac164fcd11404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "employee/index.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23050f13e35652c4a88013b6003ac9495ef4f7cd30d7385ff9328ed4c5530e37 = $this->env->getExtension("native_profiler");
        $__internal_23050f13e35652c4a88013b6003ac9495ef4f7cd30d7385ff9328ed4c5530e37->enter($__internal_23050f13e35652c4a88013b6003ac9495ef4f7cd30d7385ff9328ed4c5530e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23050f13e35652c4a88013b6003ac9495ef4f7cd30d7385ff9328ed4c5530e37->leave($__internal_23050f13e35652c4a88013b6003ac9495ef4f7cd30d7385ff9328ed4c5530e37_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_825037bee03484e06316dc9bb55f8315a1ea39fce5b9808401582e4213126a41 = $this->env->getExtension("native_profiler");
        $__internal_825037bee03484e06316dc9bb55f8315a1ea39fce5b9808401582e4213126a41->enter($__internal_825037bee03484e06316dc9bb55f8315a1ea39fce5b9808401582e4213126a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_825037bee03484e06316dc9bb55f8315a1ea39fce5b9808401582e4213126a41->leave($__internal_825037bee03484e06316dc9bb55f8315a1ea39fce5b9808401582e4213126a41_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_fde161a0c8160eb860b8a702b85775570e1109b7bf286292f1890c2e33e6375c = $this->env->getExtension("native_profiler");
        $__internal_fde161a0c8160eb860b8a702b85775570e1109b7bf286292f1890c2e33e6375c->enter($__internal_fde161a0c8160eb860b8a702b85775570e1109b7bf286292f1890c2e33e6375c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/index.html.twig", 3)->display($context);
        
        $__internal_fde161a0c8160eb860b8a702b85775570e1109b7bf286292f1890c2e33e6375c->leave($__internal_fde161a0c8160eb860b8a702b85775570e1109b7bf286292f1890c2e33e6375c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ea70b7c2e07e11a3facda73fa61438b437398538179aefab671f6082e1c96f25 = $this->env->getExtension("native_profiler");
        $__internal_ea70b7c2e07e11a3facda73fa61438b437398538179aefab671f6082e1c96f25->enter($__internal_ea70b7c2e07e11a3facda73fa61438b437398538179aefab671f6082e1c96f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_ea70b7c2e07e11a3facda73fa61438b437398538179aefab671f6082e1c96f25->leave($__internal_ea70b7c2e07e11a3facda73fa61438b437398538179aefab671f6082e1c96f25_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_3b12fd6451c245bbe12b2882e633a42dbda9ccb7818fadcdb038caaf38c8921e = $this->env->getExtension("native_profiler");
        $__internal_3b12fd6451c245bbe12b2882e633a42dbda9ccb7818fadcdb038caaf38c8921e->enter($__internal_3b12fd6451c245bbe12b2882e633a42dbda9ccb7818fadcdb038caaf38c8921e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3b12fd6451c245bbe12b2882e633a42dbda9ccb7818fadcdb038caaf38c8921e->leave($__internal_3b12fd6451c245bbe12b2882e633a42dbda9ccb7818fadcdb038caaf38c8921e_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cc0416d2b3b654925c5531737e393acb7b8b17273f4d79b64e9209b6f09d5272 = $this->env->getExtension("native_profiler");
        $__internal_cc0416d2b3b654925c5531737e393acb7b8b17273f4d79b64e9209b6f09d5272->enter($__internal_cc0416d2b3b654925c5531737e393acb7b8b17273f4d79b64e9209b6f09d5272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:actions.html.twig", "employee/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_cc0416d2b3b654925c5531737e393acb7b8b17273f4d79b64e9209b6f09d5272->leave($__internal_cc0416d2b3b654925c5531737e393acb7b8b17273f4d79b64e9209b6f09d5272_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd68a1cdc7d170b5d817755e9f7bebc271a94d17fdcb7ac44ec94a91178d946a = $this->env->getExtension("native_profiler");
        $__internal_fd68a1cdc7d170b5d817755e9f7bebc271a94d17fdcb7ac44ec94a91178d946a->enter($__internal_fd68a1cdc7d170b5d817755e9f7bebc271a94d17fdcb7ac44ec94a91178d946a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Employee:pagination.html.twig", "employee/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Employee:tbliste.html.twig", "employee/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t
\t<!-- begin employee creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_employee\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("BoAdminBundle:Employee:modalform.html.twig", "employee/index.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end employee creation form by modal dialog-->

\t<!-- begin extraction creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"extract_schedule\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.extract", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("employee_extract_schedule");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 64
        $this->loadTemplate("BoAdminBundle:Employee:ccdateform.html.twig", "employee/index.html.twig", 64)->display($context);
        // line 65
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.extract", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end extraction creation form by modal dialog-->\t

\t<!-- begin teacher availability form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"teacher_available\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("employee_teacher_available");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 93
        $this->loadTemplate("BoAdminBundle:Employee:available.html.twig", "employee/index.html.twig", 93)->display($context);
        // line 94
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.validate", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end teacher availability form by modal dialog-->\t\t

\t<!-- begin send user login form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"send_login\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.login", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("employee_send_login");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 121
        $this->loadTemplate("BoAdminBundle:Employee:loginform.html.twig", "employee/index.html.twig", 121)->display($context);
        // line 122
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end send user login form by modal dialog-->
\t
\t
\t";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_fd68a1cdc7d170b5d817755e9f7bebc271a94d17fdcb7ac44ec94a91178d946a->leave($__internal_fd68a1cdc7d170b5d817755e9f7bebc271a94d17fdcb7ac44ec94a91178d946a_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18b0e885bcb94e9eeec1eb1e115b460bab36e0e7616353edfc1df25d7bcaca47 = $this->env->getExtension("native_profiler");
        $__internal_18b0e885bcb94e9eeec1eb1e115b460bab36e0e7616353edfc1df25d7bcaca47->enter($__internal_18b0e885bcb94e9eeec1eb1e115b460bab36e0e7616353edfc1df25d7bcaca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("employee_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("employee_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t\t\t
\t\t\t\$(\"#idtype\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\tvar str=\$(\"#idavailability option:selected\");
\t\t\t\tavailability=str.val();
\t\t\t\tvar str=\$(\"#idoption option:selected\");
\t\t\t\tidoption=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status+\":\"+availability+\":\"+idoption;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("employee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idstatus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\"#idtype\").val(0);
\t\t\t\t\$(\"#idoption\").val(0);
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\tvar str=\$(\"#idavailability option:selected\");
\t\t\t\tavailability=str.val();
\t\t\t\tvar str=\$(\"#idoption option:selected\");
\t\t\t\tidoption=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status+\":\"+availability+\":\"+idoption;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("employee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idlangage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\tvar str=\$(\"#idavailability option:selected\");
\t\t\t\tavailability=str.val();
\t\t\t\tvar str=\$(\"#idoption option:selected\");
\t\t\t\tidoption=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status+\":\"+availability+\":\"+idoption;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 252
        echo $this->env->getExtension('routing')->getPath("employee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idsexe\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\tvar str=\$(\"#idavailability option:selected\");
\t\t\t\tavailability=str.val();
\t\t\t\tvar str=\$(\"#idoption option:selected\");
\t\t\t\tidoption=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status+\":\"+availability+\":\"+idoption;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 280
        echo $this->env->getExtension('routing')->getPath("employee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idavailability\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\tvar str=\$(\"#idavailability option:selected\");
\t\t\t\tavailability=str.val();
\t\t\t\tvar str=\$(\"#idoption option:selected\");
\t\t\t\tidoption=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status+\":\"+availability+\":\"+idoption;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 308
        echo $this->env->getExtension('routing')->getPath("employee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idoption\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\tvar str=\$(\"#idavailability option:selected\");
\t\t\t\tavailability=str.val();
\t\t\t\tvar str=\$(\"#idoption option:selected\");
\t\t\t\tidoption=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status+\":\"+availability+\":\"+idoption;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 336
        echo $this->env->getExtension('routing')->getPath("employee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_18b0e885bcb94e9eeec1eb1e115b460bab36e0e7616353edfc1df25d7bcaca47->leave($__internal_18b0e885bcb94e9eeec1eb1e115b460bab36e0e7616353edfc1df25d7bcaca47_prof);

    }

    public function getTemplateName()
    {
        return "employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 348,  618 => 347,  614 => 346,  601 => 336,  578 => 318,  565 => 308,  542 => 290,  529 => 280,  506 => 262,  493 => 252,  470 => 234,  457 => 224,  432 => 204,  419 => 194,  396 => 176,  383 => 166,  371 => 159,  353 => 144,  342 => 138,  338 => 136,  326 => 135,  312 => 124,  308 => 122,  306 => 121,  301 => 119,  294 => 117,  271 => 97,  264 => 94,  262 => 93,  258 => 92,  253 => 90,  246 => 88,  223 => 68,  216 => 65,  214 => 64,  210 => 63,  205 => 61,  198 => 59,  175 => 39,  168 => 36,  166 => 35,  162 => 34,  157 => 32,  150 => 30,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Employee:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Employee:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Employee:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin employee creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_employee" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.employee'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Employee:modalform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
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
/* 	<!-- end employee creation form by modal dialog-->*/
/* */
/* 	<!-- begin extraction creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="extract_schedule" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.extract'|trans([],'BoAdminBundle')}} {{'label.schedule'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_extract_schedule')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Employee:ccdateform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.extract'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end extraction creation form by modal dialog-->	*/
/* */
/* 	<!-- begin teacher availability form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="teacher_available" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.teacher'|trans([],'BoAdminBundle')}} {{'label.available'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_teacher_available')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(available_form) }}*/
/* 						{%include "BoAdminBundle:Employee:available.html.twig"%}*/
/* 					{{ form_rest(available_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.validate'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end teacher availability form by modal dialog-->		*/
/* */
/* 	<!-- begin send user login form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="send_login" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.send'|trans([],'BoAdminBundle')}} {{'user.login'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('employee_send_login')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{%include "BoAdminBundle:Employee:loginform.html.twig"%}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.send'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end send user login form by modal dialog-->*/
/* 	*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn-search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();				*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".total_number").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});			*/
/* 			$("#idtype").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				var str=$("#idavailability option:selected");*/
/* 				availability=str.val();*/
/* 				var str=$("#idoption option:selected");*/
/* 				idoption=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status+":"+availability+":"+idoption;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idstatus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$("#idtype").val(0);*/
/* 				$("#idoption").val(0);*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				var str=$("#idavailability option:selected");*/
/* 				availability=str.val();*/
/* 				var str=$("#idoption option:selected");*/
/* 				idoption=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status+":"+availability+":"+idoption;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idlangage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				var str=$("#idavailability option:selected");*/
/* 				availability=str.val();*/
/* 				var str=$("#idoption option:selected");*/
/* 				idoption=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status+":"+availability+":"+idoption;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idsexe").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				var str=$("#idavailability option:selected");*/
/* 				availability=str.val();*/
/* 				var str=$("#idoption option:selected");*/
/* 				idoption=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status+":"+availability+":"+idoption;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idavailability").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				var str=$("#idavailability option:selected");*/
/* 				availability=str.val();*/
/* 				var str=$("#idoption option:selected");*/
/* 				idoption=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status+":"+availability+":"+idoption;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idoption").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				var str=$("#idavailability option:selected");*/
/* 				availability=str.val();*/
/* 				var str=$("#idoption option:selected");*/
/* 				idoption=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status+":"+availability+":"+idoption;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
