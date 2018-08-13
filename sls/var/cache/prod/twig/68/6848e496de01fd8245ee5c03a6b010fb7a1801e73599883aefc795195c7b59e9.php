<?php

/* contracts/new.html.twig */
class __TwigTemplate_62a0361bd16174ff27aea5addbcc3aa4cbca6167eafb5dcf9a918ddaedf1c840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contracts/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
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
        $__internal_98038df718a67259563589d94777660bf19f86ae3c175655dacc7174ac5e3162 = $this->env->getExtension("native_profiler");
        $__internal_98038df718a67259563589d94777660bf19f86ae3c175655dacc7174ac5e3162->enter($__internal_98038df718a67259563589d94777660bf19f86ae3c175655dacc7174ac5e3162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98038df718a67259563589d94777660bf19f86ae3c175655dacc7174ac5e3162->leave($__internal_98038df718a67259563589d94777660bf19f86ae3c175655dacc7174ac5e3162_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b85ef3c8259e56bd7388f757a4da137a701e855be609347f46c61c80f04772b = $this->env->getExtension("native_profiler");
        $__internal_3b85ef3c8259e56bd7388f757a4da137a701e855be609347f46c61c80f04772b->enter($__internal_3b85ef3c8259e56bd7388f757a4da137a701e855be609347f46c61c80f04772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3b85ef3c8259e56bd7388f757a4da137a701e855be609347f46c61c80f04772b->leave($__internal_3b85ef3c8259e56bd7388f757a4da137a701e855be609347f46c61c80f04772b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6bc0acf9eb05a264cccdac1d95b6af3a9e0a64b48b18f87507080e4aa96134af = $this->env->getExtension("native_profiler");
        $__internal_6bc0acf9eb05a264cccdac1d95b6af3a9e0a64b48b18f87507080e4aa96134af->enter($__internal_6bc0acf9eb05a264cccdac1d95b6af3a9e0a64b48b18f87507080e4aa96134af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/new.html.twig", 3)->display($context);
        
        $__internal_6bc0acf9eb05a264cccdac1d95b6af3a9e0a64b48b18f87507080e4aa96134af->leave($__internal_6bc0acf9eb05a264cccdac1d95b6af3a9e0a64b48b18f87507080e4aa96134af_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ac26c98a24cc2489075e995aeb99d567cbdb591e4da7b2863c31a149feecc79b = $this->env->getExtension("native_profiler");
        $__internal_ac26c98a24cc2489075e995aeb99d567cbdb591e4da7b2863c31a149feecc79b->enter($__internal_ac26c98a24cc2489075e995aeb99d567cbdb591e4da7b2863c31a149feecc79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_ac26c98a24cc2489075e995aeb99d567cbdb591e4da7b2863c31a149feecc79b->leave($__internal_ac26c98a24cc2489075e995aeb99d567cbdb591e4da7b2863c31a149feecc79b_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_799bd067e025af683ef5dbd7d8d5242e6569fa285214f65bd6f2e33e3518ddba = $this->env->getExtension("native_profiler");
        $__internal_799bd067e025af683ef5dbd7d8d5242e6569fa285214f65bd6f2e33e3518ddba->enter($__internal_799bd067e025af683ef5dbd7d8d5242e6569fa285214f65bd6f2e33e3518ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_799bd067e025af683ef5dbd7d8d5242e6569fa285214f65bd6f2e33e3518ddba->leave($__internal_799bd067e025af683ef5dbd7d8d5242e6569fa285214f65bd6f2e33e3518ddba_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_77c1f882f32a6a0d44a26ae84bb34b507e0eea8bbe3105cb6c164d5682767b00 = $this->env->getExtension("native_profiler");
        $__internal_77c1f882f32a6a0d44a26ae84bb34b507e0eea8bbe3105cb6c164d5682767b00->enter($__internal_77c1f882f32a6a0d44a26ae84bb34b507e0eea8bbe3105cb6c164d5682767b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form id==\"contract_form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("contracts_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Contracts:newactions.html.twig", "contracts/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Contracts:newform.html.twig", "contracts/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_client\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addclient", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("contracts_create_client");
        echo "\" method=\"post\" class=\"style\">
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["client_form"]) ? $context["client_form"] : $this->getContext($context, "client_form")), 'errors');
        echo "
\t\t\t\t\t";
        // line 32
        $this->loadTemplate("BoAdminBundle:Contracts:clientnewform.html.twig", "contracts/new.html.twig", 32)->display($context);
        // line 33
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["client_form"]) ? $context["client_form"] : $this->getContext($context, "client_form")), 'rest');
        echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<input type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_77c1f882f32a6a0d44a26ae84bb34b507e0eea8bbe3105cb6c164d5682767b00->leave($__internal_77c1f882f32a6a0d44a26ae84bb34b507e0eea8bbe3105cb6c164d5682767b00_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1872158f9aec0ec56a3d3173458bbddf330f94e46ba55d4ab303a158a1256f71 = $this->env->getExtension("native_profiler");
        $__internal_1872158f9aec0ec56a3d3173458bbddf330f94e46ba55d4ab303a158a1256f71->enter($__internal_1872158f9aec0ec56a3d3173458bbddf330f94e46ba55d4ab303a158a1256f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "\t\t<script>
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tif(\$(\".contractnumber\").val()==\"\"){
\t\t\t\t\talert(\"Contract number field is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar str=\$(\".typecontract option:selected\");
\t\t\t\ttype=str.text();
\t\t\t\tif(type==\"\"){
\t\t\t\t\talert(\"Contract type field is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar str=\$(\".language option:selected\");
\t\t\t\tlanguage=str.text();
\t\t\t\tif(language==\"\"){
\t\t\t\t\talert(\"Language field is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar str=\$(\".group option:selected\");
\t\t\t\tgroup=str.text();\t
\t\t\t\tif(group==null || group==\"\"){
\t\t\t\t\tif(\$(\".gro_start\").val()>\$(\".gro_end\").val()){
\t\t\t\t\t\talert(\"Group startdate can not be equal to or greater than the end date!\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif(\$(\".startdate\").val()>=\$(\".enddate\").val()){
\t\t\t\t\talert(\"Contract startdate can not be equal to or greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\".hoursnumber\").change(function(){
\t\t\t\t//if hoursnumber is null
\t\t\t\tif(\$(\".hoursnumber\").val()==\"\" || \$(\".hoursnumber\").val()==null){
\t\t\t\t\tvar hoursnumber=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber = parseInt(\$(\".hoursnumber\").val());
\t\t\t\t}
\t\t\t\t//if hourlyrate is null
\t\t\t\tif(\$(\".hourlyrate\").val()==\"\" || \$(\".hourlyrate\").val()==null){
\t\t\t\t\tvar estimatedcost=0;
\t\t\t\t}else{
\t\t\t\t\tvar hourlyrate = parseFloat(\$(\".hourlyrate\").val());
\t\t\t\t\tvar estimatedcost = hoursnumber*hourlyrate;
\t\t\t\t}\t\t\t\t
\t\t\t\t\$(\".estimatedcost\").val(estimatedcost);
\t\t\t\tif(\$(\".estimatedcost1\").val()==\"\" || \$(\".estimatedcost1\").val()==null){
\t\t\t\t\tvar estimatedcost1=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost1=parseFloat(\$(\".estimatedcost1\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".estimatedcost2\").val()==\"\" || \$(\".estimatedcost2\").val()==null){
\t\t\t\t\tvar estimatedcost2=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost2=parseFloat(\$(\".estimatedcost2\").val());
\t\t\t\t}
\t\t\t\tvar totalcost = estimatedcost+estimatedcost1+estimatedcost2;
\t\t\t\t\$(\".totalcost\").val(totalcost);
\t\t\t\tif(\$(\".hoursnumber1\").val()==\"\" || \$(\".hoursnumber1\").val()==null){
\t\t\t\t\tvar hoursnumber1=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber1 = parseInt(\$(\".hoursnumber1\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".hoursnumber2\").val()==\"\" || \$(\".hoursnumber2\").val()==null){
\t\t\t\t\tvar hoursnumber2=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber2 = parseInt(\$(\".hoursnumber2\").val());
\t\t\t\t}
\t\t\t\tvar totalhours = hoursnumber+hoursnumber1+hoursnumber2;
\t\t\t\t\$(\".totalhours\").val(totalhours);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hourlyrate\").change(function(){
\t\t\t\t//if hoursnumber is null
\t\t\t\tif(\$(\".hoursnumber\").val()==\"\" || \$(\".hoursnumber\").val()==null){
\t\t\t\t\tvar hoursnumber=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber = parseInt(\$(\".hoursnumber\").val());
\t\t\t\t}
\t\t\t\t//if hourlyrate is null
\t\t\t\tif(\$(\".hourlyrate\").val()==\"\" || \$(\".hourlyrate\").val()==null){
\t\t\t\t\tvar estimatedcost=0;
\t\t\t\t}else{
\t\t\t\t\tvar hourlyrate = parseFloat(\$(\".hourlyrate\").val());
\t\t\t\t\tvar estimatedcost = hoursnumber*hourlyrate;
\t\t\t\t}\t\t\t\t\t
\t\t\t\t\$(\".estimatedcost\").val(estimatedcost);
\t\t\t\tif(\$(\".estimatedcost1\").val()==\"\" || \$(\".estimatedcost1\").val()==null){
\t\t\t\t\tvar estimatedcost1=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost1=parseFloat(\$(\".estimatedcost1\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".estimatedcost2\").val()==\"\" || \$(\".estimatedcost2\").val()==null){
\t\t\t\t\tvar estimatedcost2=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost2=parseFloat(\$(\".estimatedcost2\").val());
\t\t\t\t}
\t\t\t\tvar totalcost = estimatedcost+estimatedcost1+estimatedcost2;
\t\t\t\t\$(\".totalcost\").val(totalcost);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hoursnumber1\").change(function(){
\t\t\t\t//if hoursnumber1 is null
\t\t\t\tif(\$(\".hoursnumber1\").val()==\"\" || \$(\".hoursnumber1\").val()==null){
\t\t\t\t\tvar hoursnumber1=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber1 = parseInt(\$(\".hoursnumber1\").val());
\t\t\t\t}
\t\t\t\t//if hourlyrate is null
\t\t\t\tif(\$(\".hourlyrate1\").val()==\"\" || \$(\".hourlyrate1\").val()==null){
\t\t\t\t\tvar estimatedcost1=0;
\t\t\t\t}else{
\t\t\t\t\tvar hourlyrate1 = parseFloat(\$(\".hourlyrate1\").val());
\t\t\t\t\tvar estimatedcost1 = hoursnumber1*hourlyrate1;
\t\t\t\t}\t\t\t\t
\t\t\t\t\$(\".estimatedcost1\").val(estimatedcost1);
\t\t\t\tif(\$(\".estimatedcost\").val()==\"\" || \$(\".estimatedcost\").val()==null){
\t\t\t\t\tvar estimatedcost=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost=parseFloat(\$(\".estimatedcost\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".estimatedcost2\").val()==\"\" || \$(\".estimatedcost2\").val()==null){
\t\t\t\t\tvar estimatedcost2=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost2=parseFloat(\$(\".estimatedcost2\").val());
\t\t\t\t}
\t\t\t\tvar totalcost = estimatedcost+estimatedcost1+estimatedcost2;
\t\t\t\t\$(\".totalcost\").val(totalcost);
\t\t\t\tif(\$(\".hoursnumber\").val()==\"\" || \$(\".hoursnumber\").val()==null){
\t\t\t\t\tvar hoursnumber=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber = parseInt(\$(\".hoursnumber\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".hoursnumber2\").val()==\"\" || \$(\".hoursnumber2\").val()==null){
\t\t\t\t\tvar hoursnumber2=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber2 = parseInt(\$(\".hoursnumber2\").val());
\t\t\t\t}
\t\t\t\tvar totalhours = hoursnumber+hoursnumber1+hoursnumber2;
\t\t\t\t\$(\".totalhours\").val(totalhours);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hourlyrate1\").change(function(){
\t\t\t\t//if hoursnumber1 is null
\t\t\t\tif(\$(\".hoursnumber1\").val()==\"\" || \$(\".hoursnumber1\").val()==null){
\t\t\t\t\tvar hoursnumber1=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber1 = parseInt(\$(\".hoursnumber1\").val());
\t\t\t\t}
\t\t\t\t//if hourlyrate1 is null
\t\t\t\tif(\$(\".hourlyrate1\").val()==\"\" || \$(\".hourlyrate1\").val()==null){
\t\t\t\t\tvar estimatedcost1=0;
\t\t\t\t}else{
\t\t\t\t\tvar hourlyrate1 = parseFloat(\$(\".hourlyrate1\").val());
\t\t\t\t\tvar estimatedcost1 = hoursnumber1*hourlyrate1;
\t\t\t\t}\t\t\t\t\t
\t\t\t\t\$(\".estimatedcost1\").val(estimatedcost1);
\t\t\t\tif(\$(\".estimatedcost\").val()==\"\" || \$(\".estimatedcost\").val()==null){
\t\t\t\t\tvar estimatedcost=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost=parseFloat(\$(\".estimatedcost\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".estimatedcost2\").val()==\"\" || \$(\".estimatedcost2\").val()==null){
\t\t\t\t\tvar estimatedcost2=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost2=parseFloat(\$(\".estimatedcost2\").val());
\t\t\t\t}
\t\t\t\tvar totalcost = estimatedcost+estimatedcost1+estimatedcost2;
\t\t\t\t\$(\".totalcost\").val(totalcost);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hoursnumber2\").change(function(){
\t\t\t\t//if hoursnumber2 is null
\t\t\t\tif(\$(\".hoursnumber2\").val()==\"\" || \$(\".hoursnumber2\").val()==null){
\t\t\t\t\tvar hoursnumber2=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber2 = parseInt(\$(\".hoursnumber2\").val());
\t\t\t\t}
\t\t\t\t//if hourlyrate is null
\t\t\t\tif(\$(\".hourlyrate2\").val()==\"\" || \$(\".hourlyrate2\").val()==null){
\t\t\t\t\tvar estimatedcost2=0;
\t\t\t\t}else{
\t\t\t\t\tvar hourlyrate2 = parseFloat(\$(\".hourlyrate2\").val());
\t\t\t\t\tvar estimatedcost2 = hoursnumber2*hourlyrate2;
\t\t\t\t}\t\t\t\t
\t\t\t\t\$(\".estimatedcost2\").val(estimatedcost2);
\t\t\t\tif(\$(\".hoursnumber\").val()==\"\" || \$(\".hoursnumber\").val()==null){
\t\t\t\t\tvar hoursnumber=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber = parseInt(\$(\".hoursnumber\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".hoursnumber1\").val()==\"\" || \$(\".hoursnumber1\").val()==null){
\t\t\t\t\tvar hoursnumber1=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber1 = parseInt(\$(\".hoursnumber1\").val());
\t\t\t\t}
\t\t\t\tvar totalhours = hoursnumber+hoursnumber1+hoursnumber2;
\t\t\t\t\$(\".totalhours\").val(totalhours);
\t\t\t\tif(\$(\".estimatedcost\").val()==\"\" || \$(\".estimatedcost\").val()==null){
\t\t\t\t\tvar estimatedcost=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost=parseFloat(\$(\".estimatedcost\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".estimatedcost\").val()==\"\" || \$(\".estimatedcost\").val()==null){
\t\t\t\t\tvar estimatedcost=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost=parseFloat(\$(\".estimatedcost\").val());
\t\t\t\t}
\t\t\t\tvar totalcost = estimatedcost+estimatedcost1+estimatedcost2;
\t\t\t\t\$(\".totalcost\").val(totalcost);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hourlyrate2\").change(function(){
\t\t\t\t//if hoursnumber2 is null
\t\t\t\tif(\$(\".hoursnumber2\").val()==\"\" || \$(\".hoursnumber2\").val()==null){
\t\t\t\t\tvar hoursnumber2=0;
\t\t\t\t}else{
\t\t\t\t\tvar hoursnumber2 = parseInt(\$(\".hoursnumber2\").val());
\t\t\t\t}
\t\t\t\t//if hourlyrate2 is null
\t\t\t\tif(\$(\".hourlyrate2\").val()==\"\" || \$(\".hourlyrate2\").val()==null){
\t\t\t\t\tvar estimatedcost2=0;
\t\t\t\t}else{
\t\t\t\t\tvar hourlyrate2 = parseFloat(\$(\".hourlyrate2\").val());
\t\t\t\t\tvar estimatedcost2 = hoursnumber2*hourlyrate2;
\t\t\t\t}\t\t\t\t\t
\t\t\t\t\$(\".estimatedcost2\").val(estimatedcost2);
\t\t\t\tif(\$(\".estimatedcost\").val()==\"\" || \$(\".estimatedcost\").val()==null){
\t\t\t\t\tvar estimatedcost=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost=parseFloat(\$(\".estimatedcost\").val());
\t\t\t\t}
\t\t\t\tif(\$(\".estimatedcost1\").val()==\"\" || \$(\".estimatedcost1\").val()==null){
\t\t\t\t\tvar estimatedcost1=0;
\t\t\t\t}else{
\t\t\t\t\tvar estimatedcost1=parseFloat(\$(\".estimatedcost1\").val());
\t\t\t\t}
\t\t\t\tvar totalcost = estimatedcost+estimatedcost1+estimatedcost2;
\t\t\t\t\$(\".totalcost\").val(totalcost);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".show_coo_new\").click(function(){
\t\t\t\t\$(\"#coordinator_form\").show();
\t\t\t\t\$(\".show_coo_new\").hide();
\t\t\t\t\$(\".coo_list\").hide();
\t\t\t\t\$(\".hide_coo_new\").show();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hide_coo_new\").click(function(){
\t\t\t\t\$(\"#coordinator_form\").hide();
\t\t\t\t\$(\".show_coo_new\").show();
\t\t\t\t\$(\".coo_list\").show();
\t\t\t\t\$(\".hide_coo_new\").hide();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".coordinator\").change(function(){
\t\t\t\tvar str=\$(\".coordinator option:selected\");
\t\t\t\tcoordinator=str.text();\t
\t\t\t\tif(coordinator!=null && coordinator!=\"\"){
\t\t\t\t\t\$(\".show_coo_new\").hide();
\t\t\t\t\t\$(\".co_name\").val(\"\");
\t\t\t\t\t\$(\".co_email\").val(\"\");
\t\t\t\t\t\$(\".co_phone\").val(\"\");
\t\t\t\t}else{
\t\t\t\t\t\$(\".show_coo_new\").show();
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\".show_con_new\").click(function(){
\t\t\t\t\$(\"#contractual_form\").show();
\t\t\t\t\$(\".show_con_new\").hide();
\t\t\t\t\$(\".con_list\").hide();
\t\t\t\t\$(\".hide_con_new\").show();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hide_con_new\").click(function(){
\t\t\t\t\$(\"#contractual_form\").hide();
\t\t\t\t\$(\".show_con_new\").show();
\t\t\t\t\$(\".con_list\").show();
\t\t\t\t\$(\".hide_con_new\").hide();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".contractual\").change(function(){
\t\t\t\tvar str=\$(\".contractual option:selected\");
\t\t\t\tcontractual=str.text();\t
\t\t\t\tif(contractual!=null && contractual!=\"\"){
\t\t\t\t\t\$(\".show_con_new\").hide();
\t\t\t\t\t\$(\".con_name\").val(\"\");
\t\t\t\t\t\$(\".con_email\").val(\"\");
\t\t\t\t\t\$(\".con_phone\").val(\"\");
\t\t\t\t}else{
\t\t\t\t\t\$(\".show_con_new\").show();
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".show_gro_new\").click(function(){
\t\t\t\t\$(\"#group_form\").show();
\t\t\t\t\$(\".show_gro_new\").hide();
\t\t\t\t\$(\".gro_list\").hide();
\t\t\t\t\$(\".hide_gro_new\").show();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hide_gro_new\").click(function(){
\t\t\t\t\$(\"#group_form\").hide();
\t\t\t\t\$(\".show_gro_new\").show();
\t\t\t\t\$(\".gro_list\").show();
\t\t\t\t\$(\".hide_gro_new\").hide();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".group\").change(function(){
\t\t\t\tvar str=\$(\".group option:selected\");
\t\t\t\tgroup=str.text();\t
\t\t\t\tif(group!=null && group!=\"\"){
\t\t\t\t\t\$(\".show_gro_new\").hide();
\t\t\t\t\t\$(\".gro_name\").val(\"\");
\t\t\t\t}else{
\t\t\t\t\t\$(\".show_gro_new\").show();
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});\t\t\t\t
\t\t\t\$(\".show_cb_new\").click(function(){
\t\t\t\t\$(\"#cbilling_form\").show();
\t\t\t\t\$(\".show_cb_new\").hide();
\t\t\t\t\$(\".cb_list\").hide();
\t\t\t\t\$(\".hide_cb_new\").show();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".hide_cb_new\").click(function(){
\t\t\t\t\$(\"#cbilling_form\").hide();
\t\t\t\t\$(\".show_cb_new\").show();
\t\t\t\t\$(\".cb_list\").show();
\t\t\t\t\$(\".hide_cb_new\").hide();
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".cbilling\").change(function(){
\t\t\t\tvar str=\$(\".cbilling option:selected\");
\t\t\t\tcbilling=str.text();\t
\t\t\t\tif(cbilling!=null && cbilling!=\"\"){
\t\t\t\t\t\$(\".show_cb_new\").hide();
\t\t\t\t\t\$(\".cb_name\").val(\"\");
\t\t\t\t\t\$(\".cb_email\").val(\"\");
\t\t\t\t\t\$(\".cb_phone\").val(\"\");
\t\t\t\t}else{
\t\t\t\t\t\$(\".show_cb_new\").show();
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".typecontract\").change(function(){
\t\t\t\tvar str=\$(\".typecontract option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\t\$(\".cotypecontract\").val(type);\t
\t\t\t\t\$(\".cctypecontract\").val(type);\t\t\t\t\t
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".campusclass\").change(function(){
\t\t\t\tvar str=\$(\".campusclass option:selected\");
\t\t\t\tcampus=str.text();
\t\t\t\tvar address = \$(\"#\"+campus).val();
\t\t\t\t\$(\".addressclass\").val(address);\t\t\t\t
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".addressclass\").change(function(){
\t\t\t\tvar str=\$(\".campusclass option:selected\");
\t\t\t\tcampus=str.text();
\t\t\t\tif(campus==null || campus==\"\"){
\t\t\t\t\t\$(\".location\").val(\"Office\");\t\t\t\t
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".tipetime\").change(function(){
\t\t\t\tvar str=\$(\".tipetime option:selected\");
\t\t\t\ttipetime=str.val();
\t\t\t\tif(tipetime==\"Full Time\"){
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t}
\t\t\t});\t\t\t\t\t\t\t\t
\t\t\t\$(\".field\").change(function(){
\t\t\t\tvar str=\$(\".field option:selected\");
\t\t\t\tfield=str.val();
\t\t\t\tif(field==1){
\t\t\t\t\t\$(\".group_pane\").show();
\t\t\t\t\t\$(\".typetraining\").val(\"GR\");
\t\t\t\t\t\$(\".language\").val(\"1\");
\t\t\t\t\t\$(\".typecontract\").val(\"1\");
\t\t\t\t\t\$(\".tipetime\").val(\"Full Time\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==2){
\t\t\t\t\t\$(\".group_pane\").show();
\t\t\t\t\t\$(\".typetraining\").val(\"GR\");
\t\t\t\t\t\$(\".typecontract\").val(\"1\");
\t\t\t\t\t\$(\".language\").val(\"2\");
\t\t\t\t\t\$(\".tipetime\").val(\"Full Time\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==3){
\t\t\t\t\t\$(\".group_pane\").hide();
\t\t\t\t\t\$(\".typetraining\").val(\"\");
\t\t\t\t\t\$(\".language\").val(\"1\");
\t\t\t\t\t\$(\".typecontract\").val(\"1\");
\t\t\t\t\t\$(\".tipetime\").val(\"Full Time\");
\t\t\t\t\t\$(\".schedule\").val(\"From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==4){
\t\t\t\t\t\$(\".group_pane\").hide();
\t\t\t\t\t\$(\".typetraining\").val(\"\");
\t\t\t\t\t\$(\".language\").val(\"2\");
\t\t\t\t\t\$(\".typecontract\").val(\"1\");
\t\t\t\t\t\$(\".tipetime\").val(\"Full Time\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\treturn false;
\t\t\t\t}\t
\t\t\t\tif(field==6){
\t\t\t\t\t\$(\".group_pane\").hide();
\t\t\t\t\t\$(\".typetraining\").val(\"PR\");
\t\t\t\t\t\$(\".language\").val(\"French\");
\t\t\t\t\t\$(\".typecontract\").val(\"1\");
\t\t\t\t\t\$(\".tipetime\").val(\"Part Time\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(field==\"\"){
\t\t\t\t\t\$(\".group_pane\").hide();
\t\t\t\t\t\$(\".typetraining\").val(\"\");
\t\t\t\t\t\$(\".language\").val(\"\");
\t\t\t\t\t\$(\".typecontract\").val(\"\");
\t\t\t\t\t\$(\".tipetime\").val(\"\");
\t\t\t\t\t\$(\".schedule\").val(\"\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t\t
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#contract_form\").submit(function(){
\t\t\t\tvar str=\$(\".typecontract option:selected\");
\t\t\t\ttype=str.text();
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".advisor\").change(function(){
\t\t\t\treturn checkAdvisor();
\t\t\t});
\t\t\tfunction checkAdvisor(){
\t\t\t\tvar str=\$(\".advisor option:selected\");
\t\t\t\tidadvisor=str.val();
\t\t\t\tvar outcharged = \$(\"#emp\"+idadvisor).val();
\t\t\t\tif(outcharged==1){
\t\t\t\t\talert(\"Attention: Le conseiller pédagogique choisi ne plus recevoir de contrat. Sa charge dépasse la normale.\");
\t\t\t\t\treturn false;\t
\t\t\t\t}
\t\t\t\treturn true;\t\t
\t\t\t}
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_1872158f9aec0ec56a3d3173458bbddf330f94e46ba55d4ab303a158a1256f71->leave($__internal_1872158f9aec0ec56a3d3173458bbddf330f94e46ba55d4ab303a158a1256f71_prof);

    }

    public function getTemplateName()
    {
        return "contracts/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  655 => 509,  651 => 508,  647 => 507,  184 => 46,  172 => 45,  160 => 36,  153 => 33,  151 => 32,  147 => 31,  142 => 29,  137 => 27,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form id=="contract_form" action="{{ path('contracts_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Contracts:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Contracts:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_client" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addclient'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_create_client') }}" method="post" class="style">*/
/* 			<div class="modal-body">*/
/* 				{{ form_errors(client_form) }}*/
/* 					{%include "BoAdminBundle:Contracts:clientnewform.html.twig"%}*/
/* 				{{ form_rest(client_form) }}*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 			</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn-create").click(function(){*/
/* 				if($(".contractnumber").val()==""){*/
/* 					alert("Contract number field is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var str=$(".typecontract option:selected");*/
/* 				type=str.text();*/
/* 				if(type==""){*/
/* 					alert("Contract type field is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var str=$(".language option:selected");*/
/* 				language=str.text();*/
/* 				if(language==""){*/
/* 					alert("Language field is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var str=$(".group option:selected");*/
/* 				group=str.text();	*/
/* 				if(group==null || group==""){*/
/* 					if($(".gro_start").val()>$(".gro_end").val()){*/
/* 						alert("Group startdate can not be equal to or greater than the end date!");*/
/* 						return false;*/
/* 					}*/
/* 				}*/
/* 				if($(".startdate").val()>=$(".enddate").val()){*/
/* 					alert("Contract startdate can not be equal to or greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$(".hoursnumber").change(function(){*/
/* 				//if hoursnumber is null*/
/* 				if($(".hoursnumber").val()=="" || $(".hoursnumber").val()==null){*/
/* 					var hoursnumber=0;*/
/* 				}else{*/
/* 					var hoursnumber = parseInt($(".hoursnumber").val());*/
/* 				}*/
/* 				//if hourlyrate is null*/
/* 				if($(".hourlyrate").val()=="" || $(".hourlyrate").val()==null){*/
/* 					var estimatedcost=0;*/
/* 				}else{*/
/* 					var hourlyrate = parseFloat($(".hourlyrate").val());*/
/* 					var estimatedcost = hoursnumber*hourlyrate;*/
/* 				}				*/
/* 				$(".estimatedcost").val(estimatedcost);*/
/* 				if($(".estimatedcost1").val()=="" || $(".estimatedcost1").val()==null){*/
/* 					var estimatedcost1=0;*/
/* 				}else{*/
/* 					var estimatedcost1=parseFloat($(".estimatedcost1").val());*/
/* 				}*/
/* 				if($(".estimatedcost2").val()=="" || $(".estimatedcost2").val()==null){*/
/* 					var estimatedcost2=0;*/
/* 				}else{*/
/* 					var estimatedcost2=parseFloat($(".estimatedcost2").val());*/
/* 				}*/
/* 				var totalcost = estimatedcost+estimatedcost1+estimatedcost2;*/
/* 				$(".totalcost").val(totalcost);*/
/* 				if($(".hoursnumber1").val()=="" || $(".hoursnumber1").val()==null){*/
/* 					var hoursnumber1=0;*/
/* 				}else{*/
/* 					var hoursnumber1 = parseInt($(".hoursnumber1").val());*/
/* 				}*/
/* 				if($(".hoursnumber2").val()=="" || $(".hoursnumber2").val()==null){*/
/* 					var hoursnumber2=0;*/
/* 				}else{*/
/* 					var hoursnumber2 = parseInt($(".hoursnumber2").val());*/
/* 				}*/
/* 				var totalhours = hoursnumber+hoursnumber1+hoursnumber2;*/
/* 				$(".totalhours").val(totalhours);*/
/* 				return false;*/
/* 			});*/
/* 			$(".hourlyrate").change(function(){*/
/* 				//if hoursnumber is null*/
/* 				if($(".hoursnumber").val()=="" || $(".hoursnumber").val()==null){*/
/* 					var hoursnumber=0;*/
/* 				}else{*/
/* 					var hoursnumber = parseInt($(".hoursnumber").val());*/
/* 				}*/
/* 				//if hourlyrate is null*/
/* 				if($(".hourlyrate").val()=="" || $(".hourlyrate").val()==null){*/
/* 					var estimatedcost=0;*/
/* 				}else{*/
/* 					var hourlyrate = parseFloat($(".hourlyrate").val());*/
/* 					var estimatedcost = hoursnumber*hourlyrate;*/
/* 				}					*/
/* 				$(".estimatedcost").val(estimatedcost);*/
/* 				if($(".estimatedcost1").val()=="" || $(".estimatedcost1").val()==null){*/
/* 					var estimatedcost1=0;*/
/* 				}else{*/
/* 					var estimatedcost1=parseFloat($(".estimatedcost1").val());*/
/* 				}*/
/* 				if($(".estimatedcost2").val()=="" || $(".estimatedcost2").val()==null){*/
/* 					var estimatedcost2=0;*/
/* 				}else{*/
/* 					var estimatedcost2=parseFloat($(".estimatedcost2").val());*/
/* 				}*/
/* 				var totalcost = estimatedcost+estimatedcost1+estimatedcost2;*/
/* 				$(".totalcost").val(totalcost);*/
/* 				return false;*/
/* 			});*/
/* 			$(".hoursnumber1").change(function(){*/
/* 				//if hoursnumber1 is null*/
/* 				if($(".hoursnumber1").val()=="" || $(".hoursnumber1").val()==null){*/
/* 					var hoursnumber1=0;*/
/* 				}else{*/
/* 					var hoursnumber1 = parseInt($(".hoursnumber1").val());*/
/* 				}*/
/* 				//if hourlyrate is null*/
/* 				if($(".hourlyrate1").val()=="" || $(".hourlyrate1").val()==null){*/
/* 					var estimatedcost1=0;*/
/* 				}else{*/
/* 					var hourlyrate1 = parseFloat($(".hourlyrate1").val());*/
/* 					var estimatedcost1 = hoursnumber1*hourlyrate1;*/
/* 				}				*/
/* 				$(".estimatedcost1").val(estimatedcost1);*/
/* 				if($(".estimatedcost").val()=="" || $(".estimatedcost").val()==null){*/
/* 					var estimatedcost=0;*/
/* 				}else{*/
/* 					var estimatedcost=parseFloat($(".estimatedcost").val());*/
/* 				}*/
/* 				if($(".estimatedcost2").val()=="" || $(".estimatedcost2").val()==null){*/
/* 					var estimatedcost2=0;*/
/* 				}else{*/
/* 					var estimatedcost2=parseFloat($(".estimatedcost2").val());*/
/* 				}*/
/* 				var totalcost = estimatedcost+estimatedcost1+estimatedcost2;*/
/* 				$(".totalcost").val(totalcost);*/
/* 				if($(".hoursnumber").val()=="" || $(".hoursnumber").val()==null){*/
/* 					var hoursnumber=0;*/
/* 				}else{*/
/* 					var hoursnumber = parseInt($(".hoursnumber").val());*/
/* 				}*/
/* 				if($(".hoursnumber2").val()=="" || $(".hoursnumber2").val()==null){*/
/* 					var hoursnumber2=0;*/
/* 				}else{*/
/* 					var hoursnumber2 = parseInt($(".hoursnumber2").val());*/
/* 				}*/
/* 				var totalhours = hoursnumber+hoursnumber1+hoursnumber2;*/
/* 				$(".totalhours").val(totalhours);*/
/* 				return false;*/
/* 			});*/
/* 			$(".hourlyrate1").change(function(){*/
/* 				//if hoursnumber1 is null*/
/* 				if($(".hoursnumber1").val()=="" || $(".hoursnumber1").val()==null){*/
/* 					var hoursnumber1=0;*/
/* 				}else{*/
/* 					var hoursnumber1 = parseInt($(".hoursnumber1").val());*/
/* 				}*/
/* 				//if hourlyrate1 is null*/
/* 				if($(".hourlyrate1").val()=="" || $(".hourlyrate1").val()==null){*/
/* 					var estimatedcost1=0;*/
/* 				}else{*/
/* 					var hourlyrate1 = parseFloat($(".hourlyrate1").val());*/
/* 					var estimatedcost1 = hoursnumber1*hourlyrate1;*/
/* 				}					*/
/* 				$(".estimatedcost1").val(estimatedcost1);*/
/* 				if($(".estimatedcost").val()=="" || $(".estimatedcost").val()==null){*/
/* 					var estimatedcost=0;*/
/* 				}else{*/
/* 					var estimatedcost=parseFloat($(".estimatedcost").val());*/
/* 				}*/
/* 				if($(".estimatedcost2").val()=="" || $(".estimatedcost2").val()==null){*/
/* 					var estimatedcost2=0;*/
/* 				}else{*/
/* 					var estimatedcost2=parseFloat($(".estimatedcost2").val());*/
/* 				}*/
/* 				var totalcost = estimatedcost+estimatedcost1+estimatedcost2;*/
/* 				$(".totalcost").val(totalcost);*/
/* 				return false;*/
/* 			});*/
/* 			$(".hoursnumber2").change(function(){*/
/* 				//if hoursnumber2 is null*/
/* 				if($(".hoursnumber2").val()=="" || $(".hoursnumber2").val()==null){*/
/* 					var hoursnumber2=0;*/
/* 				}else{*/
/* 					var hoursnumber2 = parseInt($(".hoursnumber2").val());*/
/* 				}*/
/* 				//if hourlyrate is null*/
/* 				if($(".hourlyrate2").val()=="" || $(".hourlyrate2").val()==null){*/
/* 					var estimatedcost2=0;*/
/* 				}else{*/
/* 					var hourlyrate2 = parseFloat($(".hourlyrate2").val());*/
/* 					var estimatedcost2 = hoursnumber2*hourlyrate2;*/
/* 				}				*/
/* 				$(".estimatedcost2").val(estimatedcost2);*/
/* 				if($(".hoursnumber").val()=="" || $(".hoursnumber").val()==null){*/
/* 					var hoursnumber=0;*/
/* 				}else{*/
/* 					var hoursnumber = parseInt($(".hoursnumber").val());*/
/* 				}*/
/* 				if($(".hoursnumber1").val()=="" || $(".hoursnumber1").val()==null){*/
/* 					var hoursnumber1=0;*/
/* 				}else{*/
/* 					var hoursnumber1 = parseInt($(".hoursnumber1").val());*/
/* 				}*/
/* 				var totalhours = hoursnumber+hoursnumber1+hoursnumber2;*/
/* 				$(".totalhours").val(totalhours);*/
/* 				if($(".estimatedcost").val()=="" || $(".estimatedcost").val()==null){*/
/* 					var estimatedcost=0;*/
/* 				}else{*/
/* 					var estimatedcost=parseFloat($(".estimatedcost").val());*/
/* 				}*/
/* 				if($(".estimatedcost").val()=="" || $(".estimatedcost").val()==null){*/
/* 					var estimatedcost=0;*/
/* 				}else{*/
/* 					var estimatedcost=parseFloat($(".estimatedcost").val());*/
/* 				}*/
/* 				var totalcost = estimatedcost+estimatedcost1+estimatedcost2;*/
/* 				$(".totalcost").val(totalcost);*/
/* 				return false;*/
/* 			});*/
/* 			$(".hourlyrate2").change(function(){*/
/* 				//if hoursnumber2 is null*/
/* 				if($(".hoursnumber2").val()=="" || $(".hoursnumber2").val()==null){*/
/* 					var hoursnumber2=0;*/
/* 				}else{*/
/* 					var hoursnumber2 = parseInt($(".hoursnumber2").val());*/
/* 				}*/
/* 				//if hourlyrate2 is null*/
/* 				if($(".hourlyrate2").val()=="" || $(".hourlyrate2").val()==null){*/
/* 					var estimatedcost2=0;*/
/* 				}else{*/
/* 					var hourlyrate2 = parseFloat($(".hourlyrate2").val());*/
/* 					var estimatedcost2 = hoursnumber2*hourlyrate2;*/
/* 				}					*/
/* 				$(".estimatedcost2").val(estimatedcost2);*/
/* 				if($(".estimatedcost").val()=="" || $(".estimatedcost").val()==null){*/
/* 					var estimatedcost=0;*/
/* 				}else{*/
/* 					var estimatedcost=parseFloat($(".estimatedcost").val());*/
/* 				}*/
/* 				if($(".estimatedcost1").val()=="" || $(".estimatedcost1").val()==null){*/
/* 					var estimatedcost1=0;*/
/* 				}else{*/
/* 					var estimatedcost1=parseFloat($(".estimatedcost1").val());*/
/* 				}*/
/* 				var totalcost = estimatedcost+estimatedcost1+estimatedcost2;*/
/* 				$(".totalcost").val(totalcost);*/
/* 				return false;*/
/* 			});*/
/* 			$(".show_coo_new").click(function(){*/
/* 				$("#coordinator_form").show();*/
/* 				$(".show_coo_new").hide();*/
/* 				$(".coo_list").hide();*/
/* 				$(".hide_coo_new").show();*/
/* 				return false;*/
/* 			});*/
/* 			$(".hide_coo_new").click(function(){*/
/* 				$("#coordinator_form").hide();*/
/* 				$(".show_coo_new").show();*/
/* 				$(".coo_list").show();*/
/* 				$(".hide_coo_new").hide();*/
/* 				return false;*/
/* 			});*/
/* 			$(".coordinator").change(function(){*/
/* 				var str=$(".coordinator option:selected");*/
/* 				coordinator=str.text();	*/
/* 				if(coordinator!=null && coordinator!=""){*/
/* 					$(".show_coo_new").hide();*/
/* 					$(".co_name").val("");*/
/* 					$(".co_email").val("");*/
/* 					$(".co_phone").val("");*/
/* 				}else{*/
/* 					$(".show_coo_new").show();*/
/* 				}*/
/* 				return false;*/
/* 			});	*/
/* 			$(".show_con_new").click(function(){*/
/* 				$("#contractual_form").show();*/
/* 				$(".show_con_new").hide();*/
/* 				$(".con_list").hide();*/
/* 				$(".hide_con_new").show();*/
/* 				return false;*/
/* 			});*/
/* 			$(".hide_con_new").click(function(){*/
/* 				$("#contractual_form").hide();*/
/* 				$(".show_con_new").show();*/
/* 				$(".con_list").show();*/
/* 				$(".hide_con_new").hide();*/
/* 				return false;*/
/* 			});*/
/* 			$(".contractual").change(function(){*/
/* 				var str=$(".contractual option:selected");*/
/* 				contractual=str.text();	*/
/* 				if(contractual!=null && contractual!=""){*/
/* 					$(".show_con_new").hide();*/
/* 					$(".con_name").val("");*/
/* 					$(".con_email").val("");*/
/* 					$(".con_phone").val("");*/
/* 				}else{*/
/* 					$(".show_con_new").show();*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 			$(".show_gro_new").click(function(){*/
/* 				$("#group_form").show();*/
/* 				$(".show_gro_new").hide();*/
/* 				$(".gro_list").hide();*/
/* 				$(".hide_gro_new").show();*/
/* 				return false;*/
/* 			});*/
/* 			$(".hide_gro_new").click(function(){*/
/* 				$("#group_form").hide();*/
/* 				$(".show_gro_new").show();*/
/* 				$(".gro_list").show();*/
/* 				$(".hide_gro_new").hide();*/
/* 				return false;*/
/* 			});*/
/* 			$(".group").change(function(){*/
/* 				var str=$(".group option:selected");*/
/* 				group=str.text();	*/
/* 				if(group!=null && group!=""){*/
/* 					$(".show_gro_new").hide();*/
/* 					$(".gro_name").val("");*/
/* 				}else{*/
/* 					$(".show_gro_new").show();*/
/* 				}*/
/* 				return false;*/
/* 			});				*/
/* 			$(".show_cb_new").click(function(){*/
/* 				$("#cbilling_form").show();*/
/* 				$(".show_cb_new").hide();*/
/* 				$(".cb_list").hide();*/
/* 				$(".hide_cb_new").show();*/
/* 				return false;*/
/* 			});*/
/* 			$(".hide_cb_new").click(function(){*/
/* 				$("#cbilling_form").hide();*/
/* 				$(".show_cb_new").show();*/
/* 				$(".cb_list").show();*/
/* 				$(".hide_cb_new").hide();*/
/* 				return false;*/
/* 			});*/
/* 			$(".cbilling").change(function(){*/
/* 				var str=$(".cbilling option:selected");*/
/* 				cbilling=str.text();	*/
/* 				if(cbilling!=null && cbilling!=""){*/
/* 					$(".show_cb_new").hide();*/
/* 					$(".cb_name").val("");*/
/* 					$(".cb_email").val("");*/
/* 					$(".cb_phone").val("");*/
/* 				}else{*/
/* 					$(".show_cb_new").show();*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 			$(".typecontract").change(function(){*/
/* 				var str=$(".typecontract option:selected");*/
/* 				type=str.val();*/
/* 				$(".cotypecontract").val(type);	*/
/* 				$(".cctypecontract").val(type);					*/
/* 				return false;*/
/* 			});*/
/* 			$(".campusclass").change(function(){*/
/* 				var str=$(".campusclass option:selected");*/
/* 				campus=str.text();*/
/* 				var address = $("#"+campus).val();*/
/* 				$(".addressclass").val(address);				*/
/* 				return false;*/
/* 			});*/
/* 			$(".addressclass").change(function(){*/
/* 				var str=$(".campusclass option:selected");*/
/* 				campus=str.text();*/
/* 				if(campus==null || campus==""){*/
/* 					$(".location").val("Office");				*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 			$(".tipetime").change(function(){*/
/* 				var str=$(".tipetime option:selected");*/
/* 				tipetime=str.val();*/
/* 				if(tipetime=="Full Time"){*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					return false;*/
/* 				}else{*/
/* 					$(".schedule").val("");*/
/* 				}*/
/* 			});								*/
/* 			$(".field").change(function(){*/
/* 				var str=$(".field option:selected");*/
/* 				field=str.val();*/
/* 				if(field==1){*/
/* 					$(".group_pane").show();*/
/* 					$(".typetraining").val("GR");*/
/* 					$(".language").val("1");*/
/* 					$(".typecontract").val("1");*/
/* 					$(".tipetime").val("Full Time");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					return false;*/
/* 				}*/
/* 				if(field==2){*/
/* 					$(".group_pane").show();*/
/* 					$(".typetraining").val("GR");*/
/* 					$(".typecontract").val("1");*/
/* 					$(".language").val("2");*/
/* 					$(".tipetime").val("Full Time");*/
/* 					return false;*/
/* 				}*/
/* 				if(field==3){*/
/* 					$(".group_pane").hide();*/
/* 					$(".typetraining").val("");*/
/* 					$(".language").val("1");*/
/* 					$(".typecontract").val("1");*/
/* 					$(".tipetime").val("Full Time");*/
/* 					$(".schedule").val("From Monday to Friday, 8h00-12h00 & 13h00-16h30 (7 hours per day) 1 hour for lunch time & 15 minutes for break time in the morning & afternoon");*/
/* 					return false;*/
/* 				}*/
/* 				if(field==4){*/
/* 					$(".group_pane").hide();*/
/* 					$(".typetraining").val("");*/
/* 					$(".language").val("2");*/
/* 					$(".typecontract").val("1");*/
/* 					$(".tipetime").val("Full Time");*/
/* 					$(".schedule").val("");*/
/* 					return false;*/
/* 				}	*/
/* 				if(field==6){*/
/* 					$(".group_pane").hide();*/
/* 					$(".typetraining").val("PR");*/
/* 					$(".language").val("French");*/
/* 					$(".typecontract").val("1");*/
/* 					$(".tipetime").val("Part Time");*/
/* 					$(".schedule").val("");*/
/* 					return false;*/
/* 				}*/
/* 				if(field==""){*/
/* 					$(".group_pane").hide();*/
/* 					$(".typetraining").val("");*/
/* 					$(".language").val("");*/
/* 					$(".typecontract").val("");*/
/* 					$(".tipetime").val("");*/
/* 					$(".schedule").val("");*/
/* 					return false;*/
/* 				}					*/
/* 				return false;*/
/* 			});*/
/* 			$("#contract_form").submit(function(){*/
/* 				var str=$(".typecontract option:selected");*/
/* 				type=str.text();*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 			$(".advisor").change(function(){*/
/* 				return checkAdvisor();*/
/* 			});*/
/* 			function checkAdvisor(){*/
/* 				var str=$(".advisor option:selected");*/
/* 				idadvisor=str.val();*/
/* 				var outcharged = $("#emp"+idadvisor).val();*/
/* 				if(outcharged==1){*/
/* 					alert("Attention: Le conseiller pédagogique choisi ne plus recevoir de contrat. Sa charge dépasse la normale.");*/
/* 					return false;	*/
/* 				}*/
/* 				return true;		*/
/* 			}*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
