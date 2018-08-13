<?php

/* contracts/index.html.twig */
class __TwigTemplate_3b1e14486de45a2aac5315d411056a38c022e49bcbfdc844cf545ec605a6d2e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "contracts/index.html.twig", 1);
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
        $__internal_21f7438b2e1ecb9d8cf0c98dd226f6664519579747afcd9e0c0b3928874ef3c6 = $this->env->getExtension("native_profiler");
        $__internal_21f7438b2e1ecb9d8cf0c98dd226f6664519579747afcd9e0c0b3928874ef3c6->enter($__internal_21f7438b2e1ecb9d8cf0c98dd226f6664519579747afcd9e0c0b3928874ef3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f7438b2e1ecb9d8cf0c98dd226f6664519579747afcd9e0c0b3928874ef3c6->leave($__internal_21f7438b2e1ecb9d8cf0c98dd226f6664519579747afcd9e0c0b3928874ef3c6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb09ed0c3a6a139631bb5982fc58356dfa1f12fb8ff01d85469b3c3f4019eb84 = $this->env->getExtension("native_profiler");
        $__internal_fb09ed0c3a6a139631bb5982fc58356dfa1f12fb8ff01d85469b3c3f4019eb84->enter($__internal_fb09ed0c3a6a139631bb5982fc58356dfa1f12fb8ff01d85469b3c3f4019eb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_fb09ed0c3a6a139631bb5982fc58356dfa1f12fb8ff01d85469b3c3f4019eb84->leave($__internal_fb09ed0c3a6a139631bb5982fc58356dfa1f12fb8ff01d85469b3c3f4019eb84_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9055ccbc2a789b8c8f1c5a50da6cfefed0922325b8f53a7a15b067d88e036416 = $this->env->getExtension("native_profiler");
        $__internal_9055ccbc2a789b8c8f1c5a50da6cfefed0922325b8f53a7a15b067d88e036416->enter($__internal_9055ccbc2a789b8c8f1c5a50da6cfefed0922325b8f53a7a15b067d88e036416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/index.html.twig", 3)->display($context);
        
        $__internal_9055ccbc2a789b8c8f1c5a50da6cfefed0922325b8f53a7a15b067d88e036416->leave($__internal_9055ccbc2a789b8c8f1c5a50da6cfefed0922325b8f53a7a15b067d88e036416_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d074fafd1d76d61ae9a8cd873f43e0fa7ffcb537982f9b7d41f99d3f0294d149 = $this->env->getExtension("native_profiler");
        $__internal_d074fafd1d76d61ae9a8cd873f43e0fa7ffcb537982f9b7d41f99d3f0294d149->enter($__internal_d074fafd1d76d61ae9a8cd873f43e0fa7ffcb537982f9b7d41f99d3f0294d149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_d074fafd1d76d61ae9a8cd873f43e0fa7ffcb537982f9b7d41f99d3f0294d149->leave($__internal_d074fafd1d76d61ae9a8cd873f43e0fa7ffcb537982f9b7d41f99d3f0294d149_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_cb4fc1f8e435256132caba24143f3394a9c9701c439d31d57dd3a7158877d425 = $this->env->getExtension("native_profiler");
        $__internal_cb4fc1f8e435256132caba24143f3394a9c9701c439d31d57dd3a7158877d425->enter($__internal_cb4fc1f8e435256132caba24143f3394a9c9701c439d31d57dd3a7158877d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_cb4fc1f8e435256132caba24143f3394a9c9701c439d31d57dd3a7158877d425->leave($__internal_cb4fc1f8e435256132caba24143f3394a9c9701c439d31d57dd3a7158877d425_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_597957a7d28d0ebb79794937f6100f24e1c9b455014302f7a56aca4aaef59ef5 = $this->env->getExtension("native_profiler");
        $__internal_597957a7d28d0ebb79794937f6100f24e1c9b455014302f7a56aca4aaef59ef5->enter($__internal_597957a7d28d0ebb79794937f6100f24e1c9b455014302f7a56aca4aaef59ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Contracts:actions.html.twig", "contracts/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_597957a7d28d0ebb79794937f6100f24e1c9b455014302f7a56aca4aaef59ef5->leave($__internal_597957a7d28d0ebb79794937f6100f24e1c9b455014302f7a56aca4aaef59ef5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_800a34f102bb9a6111cf2ed7cf9c17689d0ad7da903a3f9e2efa0b67c70bc592 = $this->env->getExtension("native_profiler");
        $__internal_800a34f102bb9a6111cf2ed7cf9c17689d0ad7da903a3f9e2efa0b67c70bc592->enter($__internal_800a34f102bb9a6111cf2ed7cf9c17689d0ad7da903a3f9e2efa0b67c70bc592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"pagination_content\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Contracts:pagination.html.twig", "contracts/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div id=\"content-liste\">
\t\t";
        // line 15
        if (array_key_exists("idfield", $context)) {
            // line 16
            echo "\t\t\t<div class='numberfound'><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
            echo "</b> : <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>\t
\t\t";
        }
        // line 18
        echo "\t\t";
        $this->loadTemplate("BoAdminBundle:Contracts:tbliste.html.twig", "contracts/index.html.twig", 18)->display($context);
        // line 19
        echo "\t</div>
\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_800a34f102bb9a6111cf2ed7cf9c17689d0ad7da903a3f9e2efa0b67c70bc592->leave($__internal_800a34f102bb9a6111cf2ed7cf9c17689d0ad7da903a3f9e2efa0b67c70bc592_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_525e94974ed8de2729d6f7181917a509cef64230e4887f68207e6abc0c611188 = $this->env->getExtension("native_profiler");
        $__internal_525e94974ed8de2729d6f7181917a509cef64230e4887f68207e6abc0c611188->enter($__internal_525e94974ed8de2729d6f7181917a509cef64230e4887f68207e6abc0c611188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 23
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("contracts_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 44
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
        // line 51
        echo $this->env->getExtension('routing')->getPath("contracts_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_archived\").click(function(){
\t\t\t\t\$(\"#inp-search\").val(\"\");\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".btn_archived\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = \"description=fini\";
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("contracts_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;

\t\t\t});
\t\t\t\$(\"#btn_upcoming\").click(function(){
\t\t\t\t\$(\"#inp-search\").val(\"\");\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".btn_upcoming\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = \"description=upcoming\";
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("contracts_upcoming");
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
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tif(str.text()!='NMSO'){
\t\t\t\t\t\$('#idfield').val(0);
\t\t\t\t}
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idfield option:selected\");
\t\t\t\tfields=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data=' + type+':'+start+\":\"+end+\":\"+status+\":\"+fields;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("contracts_extrasearch");
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
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tif(str.text()!='NMSO'){
\t\t\t\t\t\$('#idfield').val(0);
\t\t\t\t}
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idfield option:selected\");
\t\t\t\tfields=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data=' + type+':'+start+\":\"+end+\":\"+status+\":\"+fields;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("contracts_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idfield\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\t\$('#idtype').val(1);
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idfield option:selected\");
\t\t\t\tfields=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data=' + type+':'+start+\":\"+end+\":\"+status+\":\"+fields;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("contracts_extrasearch");
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
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\t\$('#idtype').val(1);
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idfield option:selected\");
\t\t\t\tfields=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data=' + type+':'+start+\":\"+end+\":\"+status+\":\"+fields;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("contracts_periodsearch");
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
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\t\$('#idtype').val(1);
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idfield option:selected\");
\t\t\t\tfields=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data=' + type+':'+start+\":\"+end+\":\"+status+\":\"+fields;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 220
        echo $this->env->getExtension('routing')->getPath("contracts_periodsearch");
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
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_525e94974ed8de2729d6f7181917a509cef64230e4887f68207e6abc0c611188->leave($__internal_525e94974ed8de2729d6f7181917a509cef64230e4887f68207e6abc0c611188_prof);

    }

    public function getTemplateName()
    {
        return "contracts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 230,  428 => 220,  408 => 205,  395 => 195,  375 => 180,  362 => 170,  342 => 155,  329 => 145,  307 => 128,  294 => 118,  272 => 101,  258 => 90,  245 => 82,  230 => 70,  217 => 62,  203 => 51,  191 => 44,  173 => 29,  162 => 23,  158 => 21,  146 => 20,  143 => 19,  140 => 18,  130 => 16,  128 => 15,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Contracts:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Contracts:pagination.html.twig' %}*/
/* 	</div>*/
/* 	<div id="content-liste">*/
/* 		{%if idfield is defined%}*/
/* 			<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{contracts|length}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>	*/
/* 		{%endif%}*/
/* 		{%include "BoAdminBundle:Contracts:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_search").click(function(){*/
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
/* 					url: "{{ path('contracts_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_archived").click(function(){*/
/* 				$("#inp-search").val("");				*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".total_number").hide();*/
/* 				$(".btn_archived").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = "description=fini";*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* */
/* 			});*/
/* 			$("#btn_upcoming").click(function(){*/
/* 				$("#inp-search").val("");				*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".total_number").hide();*/
/* 				$(".btn_upcoming").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = "description=upcoming";*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_upcoming')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* */
/* 			});*/
/* 			$("#idtype").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				if(str.text()!='NMSO'){*/
/* 					$('#idfield').val(0);*/
/* 				}*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idfield option:selected");*/
/* 				fields=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data=' + type+':'+start+":"+end+":"+status+":"+fields;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_extrasearch')}}",*/
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
/* 				type=str.val();*/
/* 				if(str.text()!='NMSO'){*/
/* 					$('#idfield').val(0);*/
/* 				}*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idfield option:selected");*/
/* 				fields=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data=' + type+':'+start+":"+end+":"+status+":"+fields;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idfield").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				$('#idtype').val(1);*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idfield option:selected");*/
/* 				fields=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data=' + type+':'+start+":"+end+":"+status+":"+fields;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".startdate").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				$('#idtype').val(1);*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idfield option:selected");*/
/* 				fields=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data=' + type+':'+start+":"+end+":"+status+":"+fields;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_periodsearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".enddate").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				$('#idtype').val(1);*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idfield option:selected");*/
/* 				fields=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data=' + type+':'+start+":"+end+":"+status+":"+fields;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_periodsearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
