<?php

/* param/index.html.twig */
class __TwigTemplate_aa8d7d9e90132c87c04018f8519ccc48b257361068ebfd48a5f367f6e4d200fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "param/index.html.twig", 1);
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
        $__internal_53f7a4df463a00a369f2e5d169f5767e4695b2c4b07478e7f87ee901f67f7905 = $this->env->getExtension("native_profiler");
        $__internal_53f7a4df463a00a369f2e5d169f5767e4695b2c4b07478e7f87ee901f67f7905->enter($__internal_53f7a4df463a00a369f2e5d169f5767e4695b2c4b07478e7f87ee901f67f7905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "param/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f7a4df463a00a369f2e5d169f5767e4695b2c4b07478e7f87ee901f67f7905->leave($__internal_53f7a4df463a00a369f2e5d169f5767e4695b2c4b07478e7f87ee901f67f7905_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bdc252ce56117fe8a45b111a38ca0aa9c9b22b466d1900c1e4e9dc6c638e4af = $this->env->getExtension("native_profiler");
        $__internal_8bdc252ce56117fe8a45b111a38ca0aa9c9b22b466d1900c1e4e9dc6c638e4af->enter($__internal_8bdc252ce56117fe8a45b111a38ca0aa9c9b22b466d1900c1e4e9dc6c638e4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8bdc252ce56117fe8a45b111a38ca0aa9c9b22b466d1900c1e4e9dc6c638e4af->leave($__internal_8bdc252ce56117fe8a45b111a38ca0aa9c9b22b466d1900c1e4e9dc6c638e4af_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_8a6327377d098749949880574f388239af8c0efd266d6863eb9c260141fa8ef2 = $this->env->getExtension("native_profiler");
        $__internal_8a6327377d098749949880574f388239af8c0efd266d6863eb9c260141fa8ef2->enter($__internal_8a6327377d098749949880574f388239af8c0efd266d6863eb9c260141fa8ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "param/index.html.twig", 3)->display($context);
        
        $__internal_8a6327377d098749949880574f388239af8c0efd266d6863eb9c260141fa8ef2->leave($__internal_8a6327377d098749949880574f388239af8c0efd266d6863eb9c260141fa8ef2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_350772a23d44d68d1762e08e8d1aed02a41ad13c34ae5297d7a97e386e9bbcd5 = $this->env->getExtension("native_profiler");
        $__internal_350772a23d44d68d1762e08e8d1aed02a41ad13c34ae5297d7a97e386e9bbcd5->enter($__internal_350772a23d44d68d1762e08e8d1aed02a41ad13c34ae5297d7a97e386e9bbcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_350772a23d44d68d1762e08e8d1aed02a41ad13c34ae5297d7a97e386e9bbcd5->leave($__internal_350772a23d44d68d1762e08e8d1aed02a41ad13c34ae5297d7a97e386e9bbcd5_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_b6802a8561a8f40fdcadefc8f45a615be2e983a438e97f74d0bd7ec040cbe198 = $this->env->getExtension("native_profiler");
        $__internal_b6802a8561a8f40fdcadefc8f45a615be2e983a438e97f74d0bd7ec040cbe198->enter($__internal_b6802a8561a8f40fdcadefc8f45a615be2e983a438e97f74d0bd7ec040cbe198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b6802a8561a8f40fdcadefc8f45a615be2e983a438e97f74d0bd7ec040cbe198->leave($__internal_b6802a8561a8f40fdcadefc8f45a615be2e983a438e97f74d0bd7ec040cbe198_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bd516ed354517d9ada35c89c70f4e6067b695b70a0a098108c7519e610148997 = $this->env->getExtension("native_profiler");
        $__internal_bd516ed354517d9ada35c89c70f4e6067b695b70a0a098108c7519e610148997->enter($__internal_bd516ed354517d9ada35c89c70f4e6067b695b70a0a098108c7519e610148997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Param:actions.html.twig", "param/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_bd516ed354517d9ada35c89c70f4e6067b695b70a0a098108c7519e610148997->leave($__internal_bd516ed354517d9ada35c89c70f4e6067b695b70a0a098108c7519e610148997_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_11dbf90930dcb19080ee8c347a37316adb09599b19e588af188bcbef6f7c5bcc = $this->env->getExtension("native_profiler");
        $__internal_11dbf90930dcb19080ee8c347a37316adb09599b19e588af188bcbef6f7c5bcc->enter($__internal_11dbf90930dcb19080ee8c347a37316adb09599b19e588af188bcbef6f7c5bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<input type=\"hidden\" id=\"nb_pages\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")), "html", null, true);
        echo "\" /> 
\t";
        // line 12
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 13
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 14
            $this->loadTemplate("BoAdminBundle:Param:pagination.html.twig", "param/index.html.twig", 14)->display($context);
            // line 15
            echo "\t</div>
\t";
        }
        // line 17
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 18
        $this->loadTemplate("BoAdminBundle:Param:tbliste.html.twig", "param/index.html.twig", 18)->display($context);
        // line 19
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_param\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("param_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 34
        $this->loadTemplate("BoAdminBundle:Param:newform.html.twig", "param/index.html.twig", 34)->display($context);
        // line 35
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 38
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
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_11dbf90930dcb19080ee8c347a37316adb09599b19e588af188bcbef6f7c5bcc->leave($__internal_11dbf90930dcb19080ee8c347a37316adb09599b19e588af188bcbef6f7c5bcc_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1e735c4c03ccd09d29ed368efcf13f5a6996101137f42aaf9110333cf4ebc5c = $this->env->getExtension("native_profiler");
        $__internal_b1e735c4c03ccd09d29ed368efcf13f5a6996101137f42aaf9110333cf4ebc5c->enter($__internal_b1e735c4c03ccd09d29ed368efcf13f5a6996101137f42aaf9110333cf4ebc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t\t<script>
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 54
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
        // line 61
        echo $this->env->getExtension('routing')->getPath("param_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t
\t\t\t\tvar DATA = 'data='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("param_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_first\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar page=1;\t
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t\t\t\t
\t\t\t\tstr.text(page);
\t\t\t\tvar DATA = 'data='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("param_pagesearch");
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
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tpage=parseInt(page)-1;
\t\t\t\tstr.text(page);
\t\t\t\tvar DATA = 'data='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("param_pagesearch");
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
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t\t\t
\t\t\t\tpage=parseInt(page)+1;
\t\t\t\tstr.text(page);
\t\t\t\tvar DATA = 'data='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("param_pagesearch");
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
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tvar page=nbpages;\t\t\t\t
\t\t\t\tstr.text(page);
\t\t\t\tvar DATA = 'data='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("param_pagesearch");
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
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_b1e735c4c03ccd09d29ed368efcf13f5a6996101137f42aaf9110333cf4ebc5c->leave($__internal_b1e735c4c03ccd09d29ed368efcf13f5a6996101137f42aaf9110333cf4ebc5c_prof);

    }

    public function getTemplateName()
    {
        return "param/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 178,  380 => 177,  367 => 167,  355 => 160,  336 => 144,  323 => 136,  304 => 120,  293 => 114,  275 => 99,  263 => 92,  245 => 77,  234 => 71,  221 => 61,  209 => 54,  200 => 47,  188 => 46,  177 => 38,  170 => 35,  168 => 34,  164 => 33,  159 => 31,  152 => 29,  140 => 19,  138 => 18,  135 => 17,  131 => 15,  129 => 14,  126 => 13,  124 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.setting'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.setting'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Param:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<input type="hidden" id="nb_pages" value="{{nb_pages}}" /> */
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Param:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Param:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_param" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.setting'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('param_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Param:newform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
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
/* 	{% block javascripts %}*/
/* 		<script>*/
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
/* 					url: "{{ path('param_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();		*/
/* 				var DATA = 'data='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('param_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_first").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var page=1;	*/
/* 				var nbpages = $("#nb_pages").val();					*/
/* 				str.text(page);*/
/* 				var DATA = 'data='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('param_pagesearch')}}",*/
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
/* 				str.text(page);*/
/* 				var DATA = 'data='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('param_pagesearch')}}",*/
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
/* 				str.text(page);*/
/* 				var DATA = 'data='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('param_pagesearch')}}",*/
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
/* 				str.text(page);*/
/* 				var DATA = 'data='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('param_pagesearch')}}",*/
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
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
