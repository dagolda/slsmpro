<?php

/* local/back.html.twig */
class __TwigTemplate_6d02068d9fe1398302a330c564bdbfe8d79b74826659257c1c5b1438a6c1a976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "local/back.html.twig", 1);
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
        $__internal_1e9c3868b85f04605c2df702040f0516009c76905711626ccce87f77e0b66cc4 = $this->env->getExtension("native_profiler");
        $__internal_1e9c3868b85f04605c2df702040f0516009c76905711626ccce87f77e0b66cc4->enter($__internal_1e9c3868b85f04605c2df702040f0516009c76905711626ccce87f77e0b66cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "local/back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9c3868b85f04605c2df702040f0516009c76905711626ccce87f77e0b66cc4->leave($__internal_1e9c3868b85f04605c2df702040f0516009c76905711626ccce87f77e0b66cc4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1b7ddb5d557b7f3e794b0ec35e8a3f49e880ad6a32e561ea9b86fde41ae9adf = $this->env->getExtension("native_profiler");
        $__internal_a1b7ddb5d557b7f3e794b0ec35e8a3f49e880ad6a32e561ea9b86fde41ae9adf->enter($__internal_a1b7ddb5d557b7f3e794b0ec35e8a3f49e880ad6a32e561ea9b86fde41ae9adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_a1b7ddb5d557b7f3e794b0ec35e8a3f49e880ad6a32e561ea9b86fde41ae9adf->leave($__internal_a1b7ddb5d557b7f3e794b0ec35e8a3f49e880ad6a32e561ea9b86fde41ae9adf_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e9f5922857580ee2f38468fc3a6bf375e7bf55293c8568f1f1f276ef15c290ed = $this->env->getExtension("native_profiler");
        $__internal_e9f5922857580ee2f38468fc3a6bf375e7bf55293c8568f1f1f276ef15c290ed->enter($__internal_e9f5922857580ee2f38468fc3a6bf375e7bf55293c8568f1f1f276ef15c290ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "local/back.html.twig", 3)->display($context);
        
        $__internal_e9f5922857580ee2f38468fc3a6bf375e7bf55293c8568f1f1f276ef15c290ed->leave($__internal_e9f5922857580ee2f38468fc3a6bf375e7bf55293c8568f1f1f276ef15c290ed_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9c8e5d37ca7c1fd38301525c6b58c70aaad586d715bbd3fb6209986c11381705 = $this->env->getExtension("native_profiler");
        $__internal_9c8e5d37ca7c1fd38301525c6b58c70aaad586d715bbd3fb6209986c11381705->enter($__internal_9c8e5d37ca7c1fd38301525c6b58c70aaad586d715bbd3fb6209986c11381705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_9c8e5d37ca7c1fd38301525c6b58c70aaad586d715bbd3fb6209986c11381705->leave($__internal_9c8e5d37ca7c1fd38301525c6b58c70aaad586d715bbd3fb6209986c11381705_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_8707eef35c40607304ef4fe02e74a1f2e11d56d912c760531cdb5aa438d7b614 = $this->env->getExtension("native_profiler");
        $__internal_8707eef35c40607304ef4fe02e74a1f2e11d56d912c760531cdb5aa438d7b614->enter($__internal_8707eef35c40607304ef4fe02e74a1f2e11d56d912c760531cdb5aa438d7b614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_8707eef35c40607304ef4fe02e74a1f2e11d56d912c760531cdb5aa438d7b614->leave($__internal_8707eef35c40607304ef4fe02e74a1f2e11d56d912c760531cdb5aa438d7b614_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2db4fb04b839a42025c5228575524328bedfc4930ba21f5c7010a068306a3772 = $this->env->getExtension("native_profiler");
        $__internal_2db4fb04b839a42025c5228575524328bedfc4930ba21f5c7010a068306a3772->enter($__internal_2db4fb04b839a42025c5228575524328bedfc4930ba21f5c7010a068306a3772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Local:backactions.html.twig", "local/back.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_2db4fb04b839a42025c5228575524328bedfc4930ba21f5c7010a068306a3772->leave($__internal_2db4fb04b839a42025c5228575524328bedfc4930ba21f5c7010a068306a3772_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f12f9a7ac39d98471243db3342461af8b3fd9d36163094025862ae43714e5069 = $this->env->getExtension("native_profiler");
        $__internal_f12f9a7ac39d98471243db3342461af8b3fd9d36163094025862ae43714e5069->enter($__internal_f12f9a7ac39d98471243db3342461af8b3fd9d36163094025862ae43714e5069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t<div class='numberfound'><b>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</b> : <span>";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></div>
\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Local:tbliste.html.twig", "local/back.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_f12f9a7ac39d98471243db3342461af8b3fd9d36163094025862ae43714e5069->leave($__internal_f12f9a7ac39d98471243db3342461af8b3fd9d36163094025862ae43714e5069_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3ec83b76ba451c0ed00b69710bf1d20b20da782324d45789b976aa853467731 = $this->env->getExtension("native_profiler");
        $__internal_e3ec83b76ba451c0ed00b69710bf1d20b20da782324d45789b976aa853467731->enter($__internal_e3ec83b76ba451c0ed00b69710bf1d20b20da782324d45789b976aa853467731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("local_pagesearch");
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
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 38
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
        // line 44
        echo $this->env->getExtension('routing')->getPath("local_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idcampus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar DATA = 'data=' +campus+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("local_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#idcampus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar DATA = 'data=' +campus+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("local_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#idstatus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\texit(0);
\t\t\t\tvar DATA = 'data=' +campus+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("local_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#idtype\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar DATA = 'data=' +campus+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("local_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#idstatus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar DATA = 'data=' +campus+\":\"+status+\":\"+type;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("local_extrasearch");
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
\t\t\t\$(\".startdate\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");\t
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data='+campus+\":\"+status+\":\"+type+':'+start+\":\"+end;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("local_periodsearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;\t\t\t\t
\t\t\t});
\t\t\t\$(\".enddate\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");\t
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data='+campus+\":\"+status+\":\"+type+':'+start+\":\"+end;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("local_periodsearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;\t
\t\t\t});
\t\t\t*/
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_e3ec83b76ba451c0ed00b69710bf1d20b20da782324d45789b976aa853467731->leave($__internal_e3ec83b76ba451c0ed00b69710bf1d20b20da782324d45789b976aa853467731_prof);

    }

    public function getTemplateName()
    {
        return "local/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 202,  388 => 191,  369 => 177,  356 => 167,  337 => 153,  323 => 142,  308 => 132,  295 => 122,  280 => 112,  267 => 102,  254 => 94,  241 => 84,  226 => 74,  213 => 64,  198 => 54,  185 => 44,  174 => 38,  156 => 23,  147 => 16,  135 => 15,  132 => 14,  130 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Local:backactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 		{%include "BoAdminBundle:Local:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_pagesearch')}}",*/
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
/* 				var criteria = $("#inp-search").val();			*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idcampus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var DATA = 'data=' +campus+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#idcampus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var DATA = 'data=' +campus+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#idstatus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				exit(0);*/
/* 				var DATA = 'data=' +campus+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#idtype").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var DATA = 'data=' +campus+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#idstatus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var DATA = 'data=' +campus+":"+status+":"+type;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			/**/
/* 			$(".startdate").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");	*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data='+campus+":"+status+":"+type+':'+start+":"+end;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_periodsearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;				*/
/* 			});*/
/* 			$(".enddate").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");	*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data='+campus+":"+status+":"+type+':'+start+":"+end;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_periodsearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;	*/
/* 			});*/
/* 			*//* */
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
