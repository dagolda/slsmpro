<?php

/* BoAdvisorsBundle:Tickets:index.html.twig */
class __TwigTemplate_e925fb5f9fc86819632dd5320c01ac4f55b59c4b9ea1ed8e08fbf0b9c2be197b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "BoAdvisorsBundle:Tickets:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
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
        $__internal_ef59ade54c5c31395c49c6b7d11686f67d073b6a15c53cb544f50202094cb334 = $this->env->getExtension("native_profiler");
        $__internal_ef59ade54c5c31395c49c6b7d11686f67d073b6a15c53cb544f50202094cb334->enter($__internal_ef59ade54c5c31395c49c6b7d11686f67d073b6a15c53cb544f50202094cb334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef59ade54c5c31395c49c6b7d11686f67d073b6a15c53cb544f50202094cb334->leave($__internal_ef59ade54c5c31395c49c6b7d11686f67d073b6a15c53cb544f50202094cb334_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6ec19cbffc30ea8e7fa3d80713d4d129cde84ce1a662519dd2703724526e2e6 = $this->env->getExtension("native_profiler");
        $__internal_c6ec19cbffc30ea8e7fa3d80713d4d129cde84ce1a662519dd2703724526e2e6->enter($__internal_c6ec19cbffc30ea8e7fa3d80713d4d129cde84ce1a662519dd2703724526e2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_c6ec19cbffc30ea8e7fa3d80713d4d129cde84ce1a662519dd2703724526e2e6->leave($__internal_c6ec19cbffc30ea8e7fa3d80713d4d129cde84ce1a662519dd2703724526e2e6_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_387f1b27f11b6f865f1794b6f0d94531c599e48063c8444171a67de9f0421c15 = $this->env->getExtension("native_profiler");
        $__internal_387f1b27f11b6f865f1794b6f0d94531c599e48063c8444171a67de9f0421c15->enter($__internal_387f1b27f11b6f865f1794b6f0d94531c599e48063c8444171a67de9f0421c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Tickets:index.html.twig", 3)->display($context);
        
        $__internal_387f1b27f11b6f865f1794b6f0d94531c599e48063c8444171a67de9f0421c15->leave($__internal_387f1b27f11b6f865f1794b6f0d94531c599e48063c8444171a67de9f0421c15_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_73a185f5e0295508cc2c171c5f00a937dc0854fcb08ce4cca946dd1aa4b0b254 = $this->env->getExtension("native_profiler");
        $__internal_73a185f5e0295508cc2c171c5f00a937dc0854fcb08ce4cca946dd1aa4b0b254->enter($__internal_73a185f5e0295508cc2c171c5f00a937dc0854fcb08ce4cca946dd1aa4b0b254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_73a185f5e0295508cc2c171c5f00a937dc0854fcb08ce4cca946dd1aa4b0b254->leave($__internal_73a185f5e0295508cc2c171c5f00a937dc0854fcb08ce4cca946dd1aa4b0b254_prof);

    }

    // line 5
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0ad14ce34e32053784d329307a40548dbd8b24a327a6083c14dcb347b12f9e0f = $this->env->getExtension("native_profiler");
        $__internal_0ad14ce34e32053784d329307a40548dbd8b24a327a6083c14dcb347b12f9e0f->enter($__internal_0ad14ce34e32053784d329307a40548dbd8b24a327a6083c14dcb347b12f9e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Tickets:actions.html.twig", "BoAdvisorsBundle:Tickets:index.html.twig", 6)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_0ad14ce34e32053784d329307a40548dbd8b24a327a6083c14dcb347b12f9e0f->leave($__internal_0ad14ce34e32053784d329307a40548dbd8b24a327a6083c14dcb347b12f9e0f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_437aeac6ca723b7029e54e26674cc501e969923119d875f35f3d906e38ad86c2 = $this->env->getExtension("native_profiler");
        $__internal_437aeac6ca723b7029e54e26674cc501e969923119d875f35f3d906e38ad86c2->enter($__internal_437aeac6ca723b7029e54e26674cc501e969923119d875f35f3d906e38ad86c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<input type=\"hidden\" id=\"nb_pages\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")), "html", null, true);
        echo "\" /> 
\t";
        // line 10
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 11
            echo "\t\t<div class=\"pagination_content\">
\t\t\t";
            // line 12
            $this->loadTemplate("BoAdvisorsBundle:Tickets:pagination.html.twig", "BoAdvisorsBundle:Tickets:index.html.twig", 12)->display($context);
            // line 13
            echo "\t\t</div>
\t";
        }
        // line 15
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdvisorsBundle:Tickets:tbliste.html.twig", "BoAdvisorsBundle:Tickets:index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_ticket\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("dash_tickets_new");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 32
        $this->loadTemplate("BoAdminBundle:Tickets:modalform.html.twig", "BoAdvisorsBundle:Tickets:index.html.twig", 32)->display($context);
        // line 33
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" id=\"btn_submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_437aeac6ca723b7029e54e26674cc501e969923119d875f35f3d906e38ad86c2->leave($__internal_437aeac6ca723b7029e54e26674cc501e969923119d875f35f3d906e38ad86c2_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66ef0102cf39e3906dd23c2c32ae2d04850989fd88669dced959a7c116d571d7 = $this->env->getExtension("native_profiler");
        $__internal_66ef0102cf39e3906dd23c2c32ae2d04850989fd88669dced959a7c116d571d7->enter($__internal_66ef0102cf39e3906dd23c2c32ae2d04850989fd88669dced959a7c116d571d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\talert(page);
\t\t\t\tvar DATA = 'page=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("dash_tickets_pagesearch");
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
        // line 68
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
        // line 75
        echo $this->env->getExtension('routing')->getPath("dash_tickets_search");
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\tidtype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tidstatus=str.val();
\t\t\t\t/*\$(\".list_link\").show();*/
\t\t\t\tvar DATA = 'data=' + idtype+':'+idstatus;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("dash_tickets_extrasearch");
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
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\tidtype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tidstatus=str.val();
\t\t\t\t/*\$(\".list_link\").show();*/
\t\t\t\tvar DATA = 'data=' + idtype+':'+idstatus;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("dash_tickets_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_first\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");\t\t\t\t\t
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("dash_tickets_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tpage=parseInt(page)-1;
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("dash_tickets_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_next\").click(function(){
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)>=parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t\t\t
\t\t\t\tpage=parseInt(page)+1;
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("dash_tickets_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_last\").click(function(){
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)>=parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tvar page=nbpages;\t\t\t\t
\t\t\t\tstr.text(page);\t\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("dash_tickets_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_66ef0102cf39e3906dd23c2c32ae2d04850989fd88669dced959a7c116d571d7->leave($__internal_66ef0102cf39e3906dd23c2c32ae2d04850989fd88669dced959a7c116d571d7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 212,  413 => 211,  400 => 201,  388 => 194,  369 => 178,  356 => 170,  337 => 154,  326 => 148,  308 => 133,  298 => 128,  280 => 113,  266 => 104,  253 => 94,  239 => 85,  226 => 75,  214 => 68,  196 => 53,  186 => 45,  174 => 44,  163 => 36,  156 => 33,  154 => 32,  150 => 31,  145 => 29,  138 => 27,  126 => 17,  124 => 16,  121 => 15,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  105 => 9,  99 => 8,  89 => 6,  83 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Tickets:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<input type="hidden" id="nb_pages" value="{{nb_pages}}" /> */
/* 	{%if total is defined and total>nb_cpp%}*/
/* 		<div class="pagination_content">*/
/* 			{% include 'BoAdvisorsBundle:Tickets:pagination.html.twig' %}*/
/* 		</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Tickets:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_ticket" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.tickets'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('dash_tickets_new') }}" enctype="multipart/form-data" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Tickets:modalform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" id="btn_submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				alert(page);*/
/* 				var DATA = 'page=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_tickets_pagesearch')}}",*/
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
/* 					url: "{{ path('dash_tickets_search')}}",*/
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
/* 				var str=$("#idtype option:selected");*/
/* 				idtype=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				idstatus=str.val();*/
/* 				/*$(".list_link").show();*//* */
/* 				var DATA = 'data=' + idtype+':'+idstatus;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_tickets_extrasearch')}}",*/
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
/* 				var str=$("#idtype option:selected");*/
/* 				idtype=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				idstatus=str.val();*/
/* 				/*$(".list_link").show();*//* */
/* 				var DATA = 'data=' + idtype+':'+idstatus;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_tickets_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_first").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");					*/
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_tickets_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_previous").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				page=parseInt(page)-1;*/
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_tickets_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_next").click(function(){*/
/* 				var nbpages = $("#nb_pages").val();		*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)>=parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();				*/
/* 				page=parseInt(page)+1;*/
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_tickets_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_last").click(function(){*/
/* 				var nbpages = $("#nb_pages").val();		*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)>=parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				var page=nbpages;				*/
/* 				str.text(page);			*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_tickets_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
