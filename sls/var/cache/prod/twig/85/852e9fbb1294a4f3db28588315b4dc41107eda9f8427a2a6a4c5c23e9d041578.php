<?php

/* evaluation/index.html.twig */
class __TwigTemplate_e50286f503700b16057a589d0b0aa7548ff114dfcd33cc664fb2a02cbea52bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "evaluation/index.html.twig", 1);
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
        $__internal_79c1b090c5b4cee61a546087a57925b6c105fb020de3d5e382a62c07ea74f071 = $this->env->getExtension("native_profiler");
        $__internal_79c1b090c5b4cee61a546087a57925b6c105fb020de3d5e382a62c07ea74f071->enter($__internal_79c1b090c5b4cee61a546087a57925b6c105fb020de3d5e382a62c07ea74f071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c1b090c5b4cee61a546087a57925b6c105fb020de3d5e382a62c07ea74f071->leave($__internal_79c1b090c5b4cee61a546087a57925b6c105fb020de3d5e382a62c07ea74f071_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_322a7a2bafd53855b05a69a5e51dd81ad7194f149a2fb3ee55985dd6cf565903 = $this->env->getExtension("native_profiler");
        $__internal_322a7a2bafd53855b05a69a5e51dd81ad7194f149a2fb3ee55985dd6cf565903->enter($__internal_322a7a2bafd53855b05a69a5e51dd81ad7194f149a2fb3ee55985dd6cf565903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_322a7a2bafd53855b05a69a5e51dd81ad7194f149a2fb3ee55985dd6cf565903->leave($__internal_322a7a2bafd53855b05a69a5e51dd81ad7194f149a2fb3ee55985dd6cf565903_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_75a9130c0c9def347be13a8fdb7a5862d3ce942cdb4bd51820fcab9a7d3dc8ed = $this->env->getExtension("native_profiler");
        $__internal_75a9130c0c9def347be13a8fdb7a5862d3ce942cdb4bd51820fcab9a7d3dc8ed->enter($__internal_75a9130c0c9def347be13a8fdb7a5862d3ce942cdb4bd51820fcab9a7d3dc8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "evaluation/index.html.twig", 3)->display($context);
        
        $__internal_75a9130c0c9def347be13a8fdb7a5862d3ce942cdb4bd51820fcab9a7d3dc8ed->leave($__internal_75a9130c0c9def347be13a8fdb7a5862d3ce942cdb4bd51820fcab9a7d3dc8ed_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d7e9226f68d55902e03136cb2ac858b984a9772d55bb86da440fc3428ae6c805 = $this->env->getExtension("native_profiler");
        $__internal_d7e9226f68d55902e03136cb2ac858b984a9772d55bb86da440fc3428ae6c805->enter($__internal_d7e9226f68d55902e03136cb2ac858b984a9772d55bb86da440fc3428ae6c805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_d7e9226f68d55902e03136cb2ac858b984a9772d55bb86da440fc3428ae6c805->leave($__internal_d7e9226f68d55902e03136cb2ac858b984a9772d55bb86da440fc3428ae6c805_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_64cdf1d5c12eeb22171354c5404c8d964abc532a63514175552ded9c0ad1ea2b = $this->env->getExtension("native_profiler");
        $__internal_64cdf1d5c12eeb22171354c5404c8d964abc532a63514175552ded9c0ad1ea2b->enter($__internal_64cdf1d5c12eeb22171354c5404c8d964abc532a63514175552ded9c0ad1ea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_64cdf1d5c12eeb22171354c5404c8d964abc532a63514175552ded9c0ad1ea2b->leave($__internal_64cdf1d5c12eeb22171354c5404c8d964abc532a63514175552ded9c0ad1ea2b_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bed662d0733b49c3d0e3b86206d3bc42f66f5f4a9f79cde2e76490ec38273c9d = $this->env->getExtension("native_profiler");
        $__internal_bed662d0733b49c3d0e3b86206d3bc42f66f5f4a9f79cde2e76490ec38273c9d->enter($__internal_bed662d0733b49c3d0e3b86206d3bc42f66f5f4a9f79cde2e76490ec38273c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Evaluation:actions.html.twig", "evaluation/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_bed662d0733b49c3d0e3b86206d3bc42f66f5f4a9f79cde2e76490ec38273c9d->leave($__internal_bed662d0733b49c3d0e3b86206d3bc42f66f5f4a9f79cde2e76490ec38273c9d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d031538d7b21011b6f4aff70b1fca1fd64213d6906592896b3b8037f07594f7e = $this->env->getExtension("native_profiler");
        $__internal_d031538d7b21011b6f4aff70b1fca1fd64213d6906592896b3b8037f07594f7e->enter($__internal_d031538d7b21011b6f4aff70b1fca1fd64213d6906592896b3b8037f07594f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<input type=\"hidden\" id=\"nb_pages\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")), "html", null, true);
        echo "\" /> 
\t";
        // line 12
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 13
            echo "\t\t<div class=\"pagination_content\">
\t\t\t";
            // line 14
            $this->loadTemplate("BoAdminBundle:Evaluation:pagination.html.twig", "evaluation/index.html.twig", 14)->display($context);
            // line 15
            echo "\t\t</div>
\t";
        }
        // line 17
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 18
        $this->loadTemplate("BoAdminBundle:Evaluation:tbliste.html.twig", "evaluation/index.html.twig", 18)->display($context);
        // line 19
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
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluation.request", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("evaluation_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("BoAdminBundle:Evaluation:part1form.html.twig", "evaluation/index.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 40
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
        // line 49
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
            // line 50
            echo "\t\t";
            if ($this->getAttribute((isset($context["evalforms"]) ? $context["evalforms"] : null), $this->getAttribute($context["evaluation"], "id", array()), array(), "array", true, true)) {
                // line 51
                echo "\t\t\t";
                $context["eval_form"] = $this->getAttribute((isset($context["evalforms"]) ? $context["evalforms"] : $this->getContext($context, "evalforms")), $this->getAttribute($context["evaluation"], "id", array()), array(), "array");
                // line 52
                echo "\t\t\t<!-- begin evaluation of the advisor form by modal dialog-->
\t\t\t<div class=\"container\">
\t\t\t  <!-- Modal -->
\t\t\t  <div class=\"modal fade\" id=\"evaluate";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                echo "\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t
\t\t\t\t  <!-- Modal content-->
\t\t\t\t  <div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.evaluate", array(), "BoAdminBundle"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "name", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_evaluate", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
                // line 66
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'errors');
                echo "
\t\t\t\t\t\t\t\t";
                // line 67
                $this->loadTemplate("BoAdminBundle:Evaluation:part2form.html.twig", "evaluation/index.html.twig", 67)->display($context);
                // line 68
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'rest');
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"close_modal_edit\" data-dismiss=\"modal\">";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                // line 72
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
            // line 82
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
        // line 83
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_d031538d7b21011b6f4aff70b1fca1fd64213d6906592896b3b8037f07594f7e->leave($__internal_d031538d7b21011b6f4aff70b1fca1fd64213d6906592896b3b8037f07594f7e_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2376ac80ccb8959575a9c98b0c16448de68bc5865550dffff94011911458d4e = $this->env->getExtension("native_profiler");
        $__internal_d2376ac80ccb8959575a9c98b0c16448de68bc5865550dffff94011911458d4e->enter($__internal_d2376ac80ccb8959575a9c98b0c16448de68bc5865550dffff94011911458d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
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
\t\t\t});\t\t\t\t\t
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("evaluation_pagesearch");
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
        // line 143
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
        // line 150
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
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t\t\t\t
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'motcle='+page;
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
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tpage=parseInt(page)-1;
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'motcle='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 192
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
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t\t\t
\t\t\t\tpage=parseInt(page)+1;
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'motcle='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 216
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
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tvar page=nbpages;\t\t\t\t
\t\t\t\tstr.text(page);\t\t\t
\t\t\t\tvar DATA = 'motcle='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 239
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
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d2376ac80ccb8959575a9c98b0c16448de68bc5865550dffff94011911458d4e->leave($__internal_d2376ac80ccb8959575a9c98b0c16448de68bc5865550dffff94011911458d4e_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 250,  518 => 249,  505 => 239,  493 => 232,  474 => 216,  461 => 208,  442 => 192,  431 => 186,  413 => 171,  402 => 165,  384 => 150,  372 => 143,  354 => 128,  343 => 122,  303 => 84,  290 => 83,  276 => 82,  263 => 72,  259 => 71,  252 => 68,  250 => 67,  246 => 66,  241 => 64,  232 => 62,  222 => 55,  217 => 52,  214 => 51,  211 => 50,  194 => 49,  182 => 40,  178 => 39,  171 => 36,  169 => 35,  165 => 34,  160 => 32,  153 => 30,  140 => 19,  138 => 18,  135 => 17,  131 => 15,  129 => 14,  126 => 13,  124 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Evaluation:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<input type="hidden" id="nb_pages" value="{{nb_pages}}" /> */
/* 	{%if total is defined and total>nb_cpp%}*/
/* 		<div class="pagination_content">*/
/* 			{% include 'BoAdminBundle:Evaluation:pagination.html.twig' %}*/
/* 		</div>*/
/* 	{%endif%}*/
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
/* 			});					*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle='+page;*/
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
/* 				var nbpages = $("#nb_pages").val();					*/
/* 				str.text(page);		*/
/* 				var DATA = 'motcle='+page;*/
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
/* 				var DATA = 'motcle='+page;*/
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
/* 				var DATA = 'motcle='+page;*/
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
/* 				var DATA = 'motcle='+page;*/
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
