<?php

/* evaluation/back.html.twig */
class __TwigTemplate_688c3ced0c638ddc88c1ab171d4e2c8407ccce9b4481162013e501187e626923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "evaluation/back.html.twig", 1);
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
        $__internal_e7c231ebc8e72ed67c830253ab9bfd055bbe7f79830b1d21bb4ceb4afd97c2f1 = $this->env->getExtension("native_profiler");
        $__internal_e7c231ebc8e72ed67c830253ab9bfd055bbe7f79830b1d21bb4ceb4afd97c2f1->enter($__internal_e7c231ebc8e72ed67c830253ab9bfd055bbe7f79830b1d21bb4ceb4afd97c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c231ebc8e72ed67c830253ab9bfd055bbe7f79830b1d21bb4ceb4afd97c2f1->leave($__internal_e7c231ebc8e72ed67c830253ab9bfd055bbe7f79830b1d21bb4ceb4afd97c2f1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_db778eb05a54b4028d062b620429c0526c6e00c1aef824a463983be5bef8dfb7 = $this->env->getExtension("native_profiler");
        $__internal_db778eb05a54b4028d062b620429c0526c6e00c1aef824a463983be5bef8dfb7->enter($__internal_db778eb05a54b4028d062b620429c0526c6e00c1aef824a463983be5bef8dfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_db778eb05a54b4028d062b620429c0526c6e00c1aef824a463983be5bef8dfb7->leave($__internal_db778eb05a54b4028d062b620429c0526c6e00c1aef824a463983be5bef8dfb7_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_248e4028e65f2d749ab2192ab862e26b5b3c1421c651da07b06b40abe08706c2 = $this->env->getExtension("native_profiler");
        $__internal_248e4028e65f2d749ab2192ab862e26b5b3c1421c651da07b06b40abe08706c2->enter($__internal_248e4028e65f2d749ab2192ab862e26b5b3c1421c651da07b06b40abe08706c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "evaluation/back.html.twig", 3)->display($context);
        
        $__internal_248e4028e65f2d749ab2192ab862e26b5b3c1421c651da07b06b40abe08706c2->leave($__internal_248e4028e65f2d749ab2192ab862e26b5b3c1421c651da07b06b40abe08706c2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_505d55e3d2e894435be13b4b52684bb96ef6376492de8c1a2ebf5ded31c0c5ae = $this->env->getExtension("native_profiler");
        $__internal_505d55e3d2e894435be13b4b52684bb96ef6376492de8c1a2ebf5ded31c0c5ae->enter($__internal_505d55e3d2e894435be13b4b52684bb96ef6376492de8c1a2ebf5ded31c0c5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_505d55e3d2e894435be13b4b52684bb96ef6376492de8c1a2ebf5ded31c0c5ae->leave($__internal_505d55e3d2e894435be13b4b52684bb96ef6376492de8c1a2ebf5ded31c0c5ae_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_1a7345dcd4a7500c4bb8e0aa78102ab7a6a807cb6ffe495b65d78a54d84fa631 = $this->env->getExtension("native_profiler");
        $__internal_1a7345dcd4a7500c4bb8e0aa78102ab7a6a807cb6ffe495b65d78a54d84fa631->enter($__internal_1a7345dcd4a7500c4bb8e0aa78102ab7a6a807cb6ffe495b65d78a54d84fa631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_1a7345dcd4a7500c4bb8e0aa78102ab7a6a807cb6ffe495b65d78a54d84fa631->leave($__internal_1a7345dcd4a7500c4bb8e0aa78102ab7a6a807cb6ffe495b65d78a54d84fa631_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_87ae3a4efe32cf8c3db9ad703a872eaa23afb3cf9a04abeeb1413c3fa56caa2b = $this->env->getExtension("native_profiler");
        $__internal_87ae3a4efe32cf8c3db9ad703a872eaa23afb3cf9a04abeeb1413c3fa56caa2b->enter($__internal_87ae3a4efe32cf8c3db9ad703a872eaa23afb3cf9a04abeeb1413c3fa56caa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Evaluation:backactions.html.twig", "evaluation/back.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_87ae3a4efe32cf8c3db9ad703a872eaa23afb3cf9a04abeeb1413c3fa56caa2b->leave($__internal_87ae3a4efe32cf8c3db9ad703a872eaa23afb3cf9a04abeeb1413c3fa56caa2b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58713b5e8a019f604b9f1d49559d2c40c64e11de8cb45154ab688b7f3cdaca9 = $this->env->getExtension("native_profiler");
        $__internal_b58713b5e8a019f604b9f1d49559d2c40c64e11de8cb45154ab688b7f3cdaca9->enter($__internal_b58713b5e8a019f604b9f1d49559d2c40c64e11de8cb45154ab688b7f3cdaca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Evaluation:tbliste.html.twig", "evaluation/back.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<!-- begin add evaluation creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_eval\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluation.request", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("evaluation_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 29
        $this->loadTemplate("BoAdminBundle:Evaluation:part1form.html.twig", "evaluation/back.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
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
\t<!-- end eveluation creation form by modal dialog-->
\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 44
            echo "\t\t";
            if ($this->getAttribute((isset($context["evalforms"]) ? $context["evalforms"] : null), $this->getAttribute($context["evaluation"], "id", array()), array(), "array", true, true)) {
                // line 45
                echo "\t\t\t";
                $context["eval_form"] = $this->getAttribute((isset($context["evalforms"]) ? $context["evalforms"] : $this->getContext($context, "evalforms")), $this->getAttribute($context["evaluation"], "id", array()), array(), "array");
                // line 46
                echo "\t\t\t<!-- begin evaluation of the advisor form by modal dialog-->
\t\t\t<div class=\"container\">
\t\t\t  <!-- Modal -->
\t\t\t  <div class=\"modal fade\" id=\"evaluate";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                echo "\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t
\t\t\t\t  <!-- Modal content-->
\t\t\t\t  <div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.evaluate", array(), "BoAdminBundle"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "name", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_evaluate", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
                // line 60
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'errors');
                echo "
\t\t\t\t\t\t\t\t";
                // line 61
                $this->loadTemplate("BoAdminBundle:Evaluation:part2form.html.twig", "evaluation/back.html.twig", 61)->display($context);
                // line 62
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'rest');
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"close_modal_edit\" data-dismiss=\"modal\">";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<!-- end eveluation creation form by modal dialog-->
\t\t";
            }
            // line 76
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_b58713b5e8a019f604b9f1d49559d2c40c64e11de8cb45154ab688b7f3cdaca9->leave($__internal_b58713b5e8a019f604b9f1d49559d2c40c64e11de8cb45154ab688b7f3cdaca9_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6170b8f121fe34873f23cfc970d15a1487af5ce4c1c9fd012feb9688f7546b8f = $this->env->getExtension("native_profiler");
        $__internal_6170b8f121fe34873f23cfc970d15a1487af5ce4c1c9fd012feb9688f7546b8f->enter($__internal_6170b8f121fe34873f23cfc970d15a1487af5ce4c1c9fd012feb9688f7546b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "\t\t<script>
\t\t\t\$(\".close_modal_add\").click(function(){
\t\t\t\t\$('#edit_eval').modal('hide');
\t\t\t});
\t\t\t\$(\".campusclass\").change(function(){
\t\t\t\tvar str=\$(\".campusclass option:selected\");
\t\t\t\tcampus=str.text();
\t\t\t\tvar address = \$(\"#\"+campus).val();
\t\t\t\t\$(\".addressclass\").val(address);
\t\t\t\t\$(\".evallocation\").val(\"Campus\");\t\t\t\t
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".evallocation\").change(function(){
\t\t\t\tvar str=\$(\".evallocation option:selected\");
\t\t\t\tevallocation=str.text();
\t\t\t\tif(evallocation==\"Phone\" || evallocation==\"Office\"){
\t\t\t\t\t\$(\".addressclass\").val(\"\");\t
\t\t\t\t\t\$(\".campusclass\").val(\"0\");\t\t\t\t\t\t
\t\t\t\t}\t\t\t\t
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\".student\").change(function(){
\t\t\t\tvar str=\$(\".student option:selected\");
\t\t\t\tstudent=str.text();
\t\t\t\tsplit = student.split(\" \");
\t\t\t\tif(typeof split[0]!==\"undefined\"){
\t\t\t\t\t\$(\".firstname\").val(split[0]);
\t\t\t\t}else{
\t\t\t\t\t\$(\".firstname\").val(\"\");
\t\t\t\t}
\t\t\t\tif(typeof split[1]!==\"undefined\"){
\t\t\t\t\t\$(\".name\").val(split[1]);
\t\t\t\t}else{
\t\t\t\t\t\$(\".name\").val(\"\");
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});\t\t\t\t\t\t
\t\t\t\$(\"#btn_search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 121
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
        // line 128
        echo $this->env->getExtension('routing')->getPath("evaluation_search");
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
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar page=1;\t
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t\t\t\t
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("evaluation_pagesearch");
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
        // line 165
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
        // line 171
        echo $this->env->getExtension('routing')->getPath("evaluation_pagesearch");
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
\t\t\t\tif(parseInt(page)==parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 187
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
        // line 195
        echo $this->env->getExtension('routing')->getPath("evaluation_pagesearch");
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
\t\t\t\tif(parseInt(page)==parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 211
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
        // line 218
        echo $this->env->getExtension('routing')->getPath("evaluation_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t\t
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_6170b8f121fe34873f23cfc970d15a1487af5ce4c1c9fd012feb9688f7546b8f->leave($__internal_6170b8f121fe34873f23cfc970d15a1487af5ce4c1c9fd012feb9688f7546b8f_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 229,  479 => 228,  466 => 218,  454 => 211,  435 => 195,  422 => 187,  403 => 171,  392 => 165,  374 => 150,  362 => 143,  344 => 128,  332 => 121,  287 => 78,  274 => 77,  260 => 76,  247 => 66,  243 => 65,  236 => 62,  234 => 61,  230 => 60,  225 => 58,  216 => 56,  206 => 49,  201 => 46,  198 => 45,  195 => 44,  178 => 43,  166 => 34,  162 => 33,  155 => 30,  153 => 29,  149 => 28,  144 => 26,  137 => 24,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Evaluation:backactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Evaluation:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<!-- begin add evaluation creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_eval" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.evaluation.request'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('evaluation_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Evaluation:part1form.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end eveluation creation form by modal dialog-->*/
/* 	{%for evaluation in evaluations%}*/
/* 		{%if evalforms[evaluation.id] is defined%}*/
/* 			{%set eval_form=evalforms[evaluation.id]%}*/
/* 			<!-- begin evaluation of the advisor form by modal dialog-->*/
/* 			<div class="container">*/
/* 			  <!-- Modal -->*/
/* 			  <div class="modal fade" id="evaluate{{evaluation.id}}" role="dialog">*/
/* 				<div class="modal-dialog">*/
/* 				*/
/* 				  <!-- Modal content-->*/
/* 				  <div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">{{'action.evaluate'|trans([],'BoAdminBundle')}} {{evaluation.firstname}} {{evaluation.name}}</h4>*/
/* 					</div>*/
/* 					<form action="{{ path('evaluation_evaluate',{'id':evaluation.id})}}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{{ form_errors(eval_form) }}*/
/* 								{%include "BoAdminBundle:Evaluation:part2form.html.twig"%}*/
/* 							{{ form_rest(eval_form) }}*/
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
/* 			<!-- end eveluation creation form by modal dialog-->*/
/* 		{%endif%}*/
/* 	{%endfor%}*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(".close_modal_add").click(function(){*/
/* 				$('#edit_eval').modal('hide');*/
/* 			});*/
/* 			$(".campusclass").change(function(){*/
/* 				var str=$(".campusclass option:selected");*/
/* 				campus=str.text();*/
/* 				var address = $("#"+campus).val();*/
/* 				$(".addressclass").val(address);*/
/* 				$(".evallocation").val("Campus");				*/
/* 				return false;*/
/* 			});*/
/* 			$(".evallocation").change(function(){*/
/* 				var str=$(".evallocation option:selected");*/
/* 				evallocation=str.text();*/
/* 				if(evallocation=="Phone" || evallocation=="Office"){*/
/* 					$(".addressclass").val("");	*/
/* 					$(".campusclass").val("0");						*/
/* 				}				*/
/* 				return false;*/
/* 			});	*/
/* 			$(".student").change(function(){*/
/* 				var str=$(".student option:selected");*/
/* 				student=str.text();*/
/* 				split = student.split(" ");*/
/* 				if(typeof split[0]!=="undefined"){*/
/* 					$(".firstname").val(split[0]);*/
/* 				}else{*/
/* 					$(".firstname").val("");*/
/* 				}*/
/* 				if(typeof split[1]!=="undefined"){*/
/* 					$(".name").val(split[1]);*/
/* 				}else{*/
/* 					$(".name").val("");*/
/* 				}*/
/* 				return false;*/
/* 			});						*/
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
/* 					url: "{{ path('evaluation_search')}}",*/
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
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('evaluation_pagesearch')}}",*/
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
/* 					url: "{{ path('evaluation_pagesearch')}}",*/
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
/* 				if(parseInt(page)==parseInt(nbpages)){*/
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
/* 					url: "{{ path('evaluation_pagesearch')}}",*/
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
/* 				if(parseInt(page)==parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				var page=nbpages;				*/
/* 				str.text(page);			*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('evaluation_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});		*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
