<?php

/* employee/active.html.twig */
class __TwigTemplate_576f15038e5c3a325075bb6815c4c09de491280f60d2bf9392d65fa07051f947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "employee/active.html.twig", 1);
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
        $__internal_3e1f03797a9df354d904c8dadbed0a3b47220405c690daf3e52ae8f3ca5d9bb9 = $this->env->getExtension("native_profiler");
        $__internal_3e1f03797a9df354d904c8dadbed0a3b47220405c690daf3e52ae8f3ca5d9bb9->enter($__internal_3e1f03797a9df354d904c8dadbed0a3b47220405c690daf3e52ae8f3ca5d9bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/active.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1f03797a9df354d904c8dadbed0a3b47220405c690daf3e52ae8f3ca5d9bb9->leave($__internal_3e1f03797a9df354d904c8dadbed0a3b47220405c690daf3e52ae8f3ca5d9bb9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2f7799b9cf6b15ff77060ad35fa9f63b1c57fd3b08173335dece0f0868e83a9 = $this->env->getExtension("native_profiler");
        $__internal_e2f7799b9cf6b15ff77060ad35fa9f63b1c57fd3b08173335dece0f0868e83a9->enter($__internal_e2f7799b9cf6b15ff77060ad35fa9f63b1c57fd3b08173335dece0f0868e83a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.active", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e2f7799b9cf6b15ff77060ad35fa9f63b1c57fd3b08173335dece0f0868e83a9->leave($__internal_e2f7799b9cf6b15ff77060ad35fa9f63b1c57fd3b08173335dece0f0868e83a9_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_db2a6f1c4fb55f40973d1675bb4db6fd7614c93a9d73fca2e1edb88fe0e9ae78 = $this->env->getExtension("native_profiler");
        $__internal_db2a6f1c4fb55f40973d1675bb4db6fd7614c93a9d73fca2e1edb88fe0e9ae78->enter($__internal_db2a6f1c4fb55f40973d1675bb4db6fd7614c93a9d73fca2e1edb88fe0e9ae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/active.html.twig", 3)->display($context);
        
        $__internal_db2a6f1c4fb55f40973d1675bb4db6fd7614c93a9d73fca2e1edb88fe0e9ae78->leave($__internal_db2a6f1c4fb55f40973d1675bb4db6fd7614c93a9d73fca2e1edb88fe0e9ae78_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_db373fe5e3b4f9403f0d539fff65039fbddb5038cf8a5c2e8924f416fcefa5da = $this->env->getExtension("native_profiler");
        $__internal_db373fe5e3b4f9403f0d539fff65039fbddb5038cf8a5c2e8924f416fcefa5da->enter($__internal_db373fe5e3b4f9403f0d539fff65039fbddb5038cf8a5c2e8924f416fcefa5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_db373fe5e3b4f9403f0d539fff65039fbddb5038cf8a5c2e8924f416fcefa5da->leave($__internal_db373fe5e3b4f9403f0d539fff65039fbddb5038cf8a5c2e8924f416fcefa5da_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_e0c183255cd4ce8ec9439bbdd55ca32648457f5a57ad6b04148c449001e84e2b = $this->env->getExtension("native_profiler");
        $__internal_e0c183255cd4ce8ec9439bbdd55ca32648457f5a57ad6b04148c449001e84e2b->enter($__internal_e0c183255cd4ce8ec9439bbdd55ca32648457f5a57ad6b04148c449001e84e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.active", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_e0c183255cd4ce8ec9439bbdd55ca32648457f5a57ad6b04148c449001e84e2b->leave($__internal_e0c183255cd4ce8ec9439bbdd55ca32648457f5a57ad6b04148c449001e84e2b_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8d0d20cb255c9032027c06c252fbee21607bb0542cf23041aadd0ccd72ee0d23 = $this->env->getExtension("native_profiler");
        $__internal_8d0d20cb255c9032027c06c252fbee21607bb0542cf23041aadd0ccd72ee0d23->enter($__internal_8d0d20cb255c9032027c06c252fbee21607bb0542cf23041aadd0ccd72ee0d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:activeaction.html.twig", "employee/active.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_8d0d20cb255c9032027c06c252fbee21607bb0542cf23041aadd0ccd72ee0d23->leave($__internal_8d0d20cb255c9032027c06c252fbee21607bb0542cf23041aadd0ccd72ee0d23_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5a4cb0960e1fb79a9e3ec8abb847b80b49e18e95562f284e9f9da8ffe34d9ef = $this->env->getExtension("native_profiler");
        $__internal_c5a4cb0960e1fb79a9e3ec8abb847b80b49e18e95562f284e9f9da8ffe34d9ef->enter($__internal_c5a4cb0960e1fb79a9e3ec8abb847b80b49e18e95562f284e9f9da8ffe34d9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Employee:tbliste.html.twig", "employee/active.html.twig", 12)->display($context);
        // line 13
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
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("employee_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("BoAdminBundle:Employee:modalform.html.twig", "employee/active.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end employee creation form by modal dialog-->\t

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
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.send", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.login", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("employee_send_login");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 58
        $this->loadTemplate("BoAdminBundle:Employee:loginform.html.twig", "employee/active.html.twig", 58)->display($context);
        // line 59
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 61
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
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_c5a4cb0960e1fb79a9e3ec8abb847b80b49e18e95562f284e9f9da8ffe34d9ef->leave($__internal_c5a4cb0960e1fb79a9e3ec8abb847b80b49e18e95562f284e9f9da8ffe34d9ef_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c96e4c666c3cb89057c03181881fb06d996e91106d434f85ba99fd66c6daa9a = $this->env->getExtension("native_profiler");
        $__internal_7c96e4c666c3cb89057c03181881fb06d996e91106d434f85ba99fd66c6daa9a->enter($__internal_7c96e4c666c3cb89057c03181881fb06d996e91106d434f85ba99fd66c6daa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 75
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
        // line 81
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
        // line 96
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
        // line 103
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
        // line 113
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
        // line 131
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
        // line 141
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
        // line 161
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
        // line 171
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
        // line 189
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
        // line 199
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
        // line 217
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
        // line 227
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
        // line 245
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
        // line 255
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
        // line 273
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
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_7c96e4c666c3cb89057c03181881fb06d996e91106d434f85ba99fd66c6daa9a->leave($__internal_7c96e4c666c3cb89057c03181881fb06d996e91106d434f85ba99fd66c6daa9a_prof);

    }

    public function getTemplateName()
    {
        return "employee/active.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 285,  510 => 284,  506 => 283,  493 => 273,  470 => 255,  457 => 245,  434 => 227,  421 => 217,  398 => 199,  385 => 189,  362 => 171,  349 => 161,  324 => 141,  311 => 131,  288 => 113,  275 => 103,  263 => 96,  245 => 81,  234 => 75,  230 => 73,  218 => 72,  204 => 61,  200 => 59,  198 => 58,  193 => 56,  186 => 54,  163 => 34,  156 => 31,  154 => 30,  150 => 29,  145 => 27,  138 => 25,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'label.active'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'label.active'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Employee:activeaction.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
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
/* 	<!-- end employee creation form by modal dialog-->	*/
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
