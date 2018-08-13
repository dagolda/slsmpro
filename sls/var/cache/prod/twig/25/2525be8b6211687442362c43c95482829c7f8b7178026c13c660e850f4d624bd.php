<?php

/* BoAdvisorsBundle:Timesheet:index.html.twig */
class __TwigTemplate_36f8b01d6d29395e64cf10b2027bc4d222a40bd4112ba6d4d9ecf9e3d20bc08b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 1);
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
        $__internal_58aa377f2efadf0142d14b9c79138a58d9463bf3a3e87896a486750eb82d2050 = $this->env->getExtension("native_profiler");
        $__internal_58aa377f2efadf0142d14b9c79138a58d9463bf3a3e87896a486750eb82d2050->enter($__internal_58aa377f2efadf0142d14b9c79138a58d9463bf3a3e87896a486750eb82d2050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58aa377f2efadf0142d14b9c79138a58d9463bf3a3e87896a486750eb82d2050->leave($__internal_58aa377f2efadf0142d14b9c79138a58d9463bf3a3e87896a486750eb82d2050_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dba0be8ba7c517519c69981cdc9d1caa5a0ff67795b1b80bc368dc018ac1239a = $this->env->getExtension("native_profiler");
        $__internal_dba0be8ba7c517519c69981cdc9d1caa5a0ff67795b1b80bc368dc018ac1239a->enter($__internal_dba0be8ba7c517519c69981cdc9d1caa5a0ff67795b1b80bc368dc018ac1239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_dba0be8ba7c517519c69981cdc9d1caa5a0ff67795b1b80bc368dc018ac1239a->leave($__internal_dba0be8ba7c517519c69981cdc9d1caa5a0ff67795b1b80bc368dc018ac1239a_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c5647acceae7994dc847c249c0f7c823ff21fcf2df0ed909f8ba1a8626dd03b5 = $this->env->getExtension("native_profiler");
        $__internal_c5647acceae7994dc847c249c0f7c823ff21fcf2df0ed909f8ba1a8626dd03b5->enter($__internal_c5647acceae7994dc847c249c0f7c823ff21fcf2df0ed909f8ba1a8626dd03b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 3)->display($context);
        
        $__internal_c5647acceae7994dc847c249c0f7c823ff21fcf2df0ed909f8ba1a8626dd03b5->leave($__internal_c5647acceae7994dc847c249c0f7c823ff21fcf2df0ed909f8ba1a8626dd03b5_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ddffcf15752cddd014a16d6e3583961e00c21a27d35738f648d77751bad2b958 = $this->env->getExtension("native_profiler");
        $__internal_ddffcf15752cddd014a16d6e3583961e00c21a27d35738f648d77751bad2b958->enter($__internal_ddffcf15752cddd014a16d6e3583961e00c21a27d35738f648d77751bad2b958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_ddffcf15752cddd014a16d6e3583961e00c21a27d35738f648d77751bad2b958->leave($__internal_ddffcf15752cddd014a16d6e3583961e00c21a27d35738f648d77751bad2b958_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_bcc5c28c42433b2380a5eeccaff631f0b3399558f66479e20383f2aac5f862b1 = $this->env->getExtension("native_profiler");
        $__internal_bcc5c28c42433b2380a5eeccaff631f0b3399558f66479e20383f2aac5f862b1->enter($__internal_bcc5c28c42433b2380a5eeccaff631f0b3399558f66479e20383f2aac5f862b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_bcc5c28c42433b2380a5eeccaff631f0b3399558f66479e20383f2aac5f862b1->leave($__internal_bcc5c28c42433b2380a5eeccaff631f0b3399558f66479e20383f2aac5f862b1_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1d00e528d11e16d87cdc2076587627e36ee7bce6258b25d19b60037747e256d0 = $this->env->getExtension("native_profiler");
        $__internal_1d00e528d11e16d87cdc2076587627e36ee7bce6258b25d19b60037747e256d0->enter($__internal_1d00e528d11e16d87cdc2076587627e36ee7bce6258b25d19b60037747e256d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:actions.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_1d00e528d11e16d87cdc2076587627e36ee7bce6258b25d19b60037747e256d0->leave($__internal_1d00e528d11e16d87cdc2076587627e36ee7bce6258b25d19b60037747e256d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_abaf979ab9990121fbeaf01c6c3a1dbb9964d8540309e125a9bf868e4a89f93b = $this->env->getExtension("native_profiler");
        $__internal_abaf979ab9990121fbeaf01c6c3a1dbb9964d8540309e125a9bf868e4a89f93b->enter($__internal_abaf979ab9990121fbeaf01c6c3a1dbb9964d8540309e125a9bf868e4a89f93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div class=\"pagination_content\">
\t\t";
        // line 13
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:criteria.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:tbliste.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t<input id=\"idemployee\" name=\"idemployee\" type=\"hidden\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "\" />
\t
\t<!--Begin admin timesheet creation --!>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_tsother\" role=\"dialog\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.timesheet", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_other");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"modal-message\"></div>
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:admintsform.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" id=\"add_ts\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>\t
\t<!--End admin timesheet creation --!>
\t
\t<!--Begin admin model timesheet creation --!>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_model\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addmodel", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("dash_model_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 65
        $this->loadTemplate("BoAdvisorsBundle:Modelts:form.html.twig", "BoAdvisorsBundle:Timesheet:index.html.twig", 65)->display($context);
        // line 66
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!--End admin timesheet creation --!>
\t
\t";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_abaf979ab9990121fbeaf01c6c3a1dbb9964d8540309e125a9bf868e4a89f93b->leave($__internal_abaf979ab9990121fbeaf01c6c3a1dbb9964d8540309e125a9bf868e4a89f93b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_940381172bbdae5543fa54e06bb3fd71887c04151dd43b69dd6523d7167460ed = $this->env->getExtension("native_profiler");
        $__internal_940381172bbdae5543fa54e06bb3fd71887c04151dd43b69dd6523d7167460ed->enter($__internal_940381172bbdae5543fa54e06bb3fd71887c04151dd43b69dd6523d7167460ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "\t\t<script>
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();
\t\t\t\tvar idemployee = \$(\"#idemployee\").val();
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t//\$(\".pagination_content\").hide();
\t\t\t\t//\$(\".total_number\").hide();
\t\t\t\t//\$(\".list_link\").show();
\t\t\t\tvar DATA = 'data=' +idemployee+'-'+criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t/*
\t\t\t\$(\"#add_ts\").click(function(){
\t\t\t\t\$('.modal-message').html(\"<center>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar ddate = \$(\".ddate\").val();
\t\t\t\tvar hour = \$(\".hour\").val();
\t\t\t\tvar startam = \$(\".startam\").val();
\t\t\t\tvar endam = \$(\".endam\").val();
\t\t\t\tvar startpm = \$(\".startpm\").val();
\t\t\t\tvar endpm = \$(\".endpm\").val();
\t\t\t\tvar typeclass = \$(\".typeclass\").val();
\t\t\t\tvar idemployee = \$(\"#idemployee\").val();
\t\t\t\tvar DATA = 'data='+ddate+'#'+typeclass+\"#\"+idemployee+\"#\"+hour+\"#\"+startam+\"#\"+endam+\"#\"+startpm+\"#\"+endpm;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_checking");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\tif(data!=1){
\t\t\t\t\t\t\t\$('.modal-message').html(data);
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});\t\t\t\t
\t\t\t});
\t\t\t*/
\t\t\t\$(\".month\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\".month option:selected\");
\t\t\t\tmonth=str.text();
\t\t\t\tvar str=\$(\".year option:selected\");
\t\t\t\tyear=str.text();
\t\t\t\tvar str=\$(\".week option:selected\");
\t\t\t\tweek=str.text();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data='+month+':'+year+\":\"+week+\":\"+start+\":\"+end+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_extrasearch");
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
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\".month option:selected\");
\t\t\t\tmonth=str.text();
\t\t\t\tvar str=\$(\".year option:selected\");
\t\t\t\tyear=str.text();
\t\t\t\tvar str=\$(\".week option:selected\");
\t\t\t\tweek=str.text();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data='+month+':'+year+\":\"+week+\":\"+start+\":\"+end+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idtype\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\".month option:selected\");
\t\t\t\tmonth=str.text();
\t\t\t\tvar str=\$(\".year option:selected\");
\t\t\t\tyear=str.text();
\t\t\t\tvar str=\$(\".week option:selected\");
\t\t\t\tweek=str.text();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data='+month+':'+year+\":\"+week+\":\"+start+\":\"+end+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".year\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\".month option:selected\");
\t\t\t\tmonth=str.text();
\t\t\t\tvar str=\$(\".year option:selected\");
\t\t\t\tyear=str.text();
\t\t\t\tvar str=\$(\".week option:selected\");
\t\t\t\tweek=str.text();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data='+month+':'+year+\":\"+week+\":\"+start+\":\"+end+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 225
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".startdate\").change(function(){
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tif(start>end){
\t\t\t\t\talert(\"The end date can not be less than the start date\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\".month option:selected\");
\t\t\t\tmonth=str.text();
\t\t\t\tvar str=\$(\".year option:selected\");
\t\t\t\tyear=str.text();
\t\t\t\tvar str=\$(\".week option:selected\");
\t\t\t\tweek=str.text();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar DATA = 'data='+month+':'+year+\":\"+week+\":\"+start+\":\"+end+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 255
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_datesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".enddate\").change(function(){
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tif(start>end){
\t\t\t\t\talert(\"The end date can not be less than the start date\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\".month option:selected\");
\t\t\t\tmonth=str.text();
\t\t\t\tvar str=\$(\".year option:selected\");
\t\t\t\tyear=str.text();
\t\t\t\tvar str=\$(\".week option:selected\");
\t\t\t\tweek=str.text();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar DATA = 'data='+month+':'+year+\":\"+week+\":\"+start+\":\"+end+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 285
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_datesearch");
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
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_940381172bbdae5543fa54e06bb3fd71887c04151dd43b69dd6523d7167460ed->leave($__internal_940381172bbdae5543fa54e06bb3fd71887c04151dd43b69dd6523d7167460ed_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 297,  536 => 296,  532 => 295,  519 => 285,  500 => 271,  481 => 255,  462 => 241,  443 => 225,  422 => 209,  409 => 199,  388 => 183,  375 => 173,  354 => 157,  341 => 147,  320 => 131,  304 => 118,  287 => 106,  273 => 95,  261 => 88,  251 => 80,  239 => 79,  226 => 69,  219 => 66,  217 => 65,  213 => 64,  208 => 62,  203 => 60,  180 => 40,  173 => 37,  171 => 36,  167 => 35,  161 => 32,  154 => 30,  139 => 18,  136 => 17,  134 => 16,  130 => 14,  128 => 13,  125 => 12,  119 => 11,  109 => 9,  103 => 8,  87 => 7,  76 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Timesheet:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdvisorsBundle:Timesheet:criteria.html.twig' %}*/
/* 	</div>*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Timesheet:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<input id="idemployee" name="idemployee" type="hidden" value="{{employee.id}}" />*/
/* 	*/
/* 	<!--Begin admin timesheet creation --!>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_tsother" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'title.timesheet'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('dash_timesheet_other') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					<div class="modal-message"></div>*/
/* 					{{ form_errors(admints_form) }}*/
/* 						{%include "BoAdvisorsBundle:Timesheet:admintsform.html.twig"%}*/
/* 					{{ form_rest(admints_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" id="add_ts" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>	*/
/* 	<!--End admin timesheet creation --!>*/
/* 	*/
/* 	<!--Begin admin model timesheet creation --!>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_model" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addmodel'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('dash_model_new') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(model_form) }}*/
/* 						{%include "BoAdvisorsBundle:Modelts:form.html.twig"%}*/
/* 					{{ form_rest(model_form) }}*/
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
/* 	<!--End admin timesheet creation --!>*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn-search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();*/
/* 				var idemployee = $("#idemployee").val();*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				//$(".pagination_content").hide();*/
/* 				//$(".total_number").hide();*/
/* 				//$(".list_link").show();*/
/* 				var DATA = 'data=' +idemployee+'-'+criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			/**/
/* 			$("#add_ts").click(function(){*/
/* 				$('.modal-message').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var ddate = $(".ddate").val();*/
/* 				var hour = $(".hour").val();*/
/* 				var startam = $(".startam").val();*/
/* 				var endam = $(".endam").val();*/
/* 				var startpm = $(".startpm").val();*/
/* 				var endpm = $(".endpm").val();*/
/* 				var typeclass = $(".typeclass").val();*/
/* 				var idemployee = $("#idemployee").val();*/
/* 				var DATA = 'data='+ddate+'#'+typeclass+"#"+idemployee+"#"+hour+"#"+startam+"#"+endam+"#"+startpm+"#"+endpm;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_checking')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						if(data!=1){*/
/* 							$('.modal-message').html(data);*/
/* 							return false;*/
/* 						}*/
/* 					}*/
/* 				});				*/
/* 			});*/
/* 			*//* */
/* 			$(".month").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$(".month option:selected");*/
/* 				month=str.text();*/
/* 				var str=$(".year option:selected");*/
/* 				year=str.text();*/
/* 				var str=$(".week option:selected");*/
/* 				week=str.text();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data='+month+':'+year+":"+week+":"+start+":"+end+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_extrasearch')}}",*/
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
/* 				var str=$(".month option:selected");*/
/* 				month=str.text();*/
/* 				var str=$(".year option:selected");*/
/* 				year=str.text();*/
/* 				var str=$(".week option:selected");*/
/* 				week=str.text();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data='+month+':'+year+":"+week+":"+start+":"+end+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idtype").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$(".month option:selected");*/
/* 				month=str.text();*/
/* 				var str=$(".year option:selected");*/
/* 				year=str.text();*/
/* 				var str=$(".week option:selected");*/
/* 				week=str.text();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data='+month+':'+year+":"+week+":"+start+":"+end+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".year").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$(".month option:selected");*/
/* 				month=str.text();*/
/* 				var str=$(".year option:selected");*/
/* 				year=str.text();*/
/* 				var str=$(".week option:selected");*/
/* 				week=str.text();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data='+month+':'+year+":"+week+":"+start+":"+end+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".startdate").change(function(){*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				if(start>end){*/
/* 					alert("The end date can not be less than the start date");*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$(".month option:selected");*/
/* 				month=str.text();*/
/* 				var str=$(".year option:selected");*/
/* 				year=str.text();*/
/* 				var str=$(".week option:selected");*/
/* 				week=str.text();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var DATA = 'data='+month+':'+year+":"+week+":"+start+":"+end+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_datesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".enddate").change(function(){*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				if(start>end){*/
/* 					alert("The end date can not be less than the start date");*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$(".month option:selected");*/
/* 				month=str.text();*/
/* 				var str=$(".year option:selected");*/
/* 				year=str.text();*/
/* 				var str=$(".week option:selected");*/
/* 				week=str.text();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var DATA = 'data='+month+':'+year+":"+week+":"+start+":"+end+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_datesearch')}}",*/
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
