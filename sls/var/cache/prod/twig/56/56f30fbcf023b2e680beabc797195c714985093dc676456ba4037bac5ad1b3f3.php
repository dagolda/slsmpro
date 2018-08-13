<?php

/* ticketcontacts/index.html.twig */
class __TwigTemplate_5a79fcf5b7034293e856d1c233c89598e45da738c47aa4e3ded5c8381d6d3642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ticketcontacts/index.html.twig", 1);
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
        $__internal_180e822a43f1b3614d9512820d61898a1f08400077e93d6f122f764142794d55 = $this->env->getExtension("native_profiler");
        $__internal_180e822a43f1b3614d9512820d61898a1f08400077e93d6f122f764142794d55->enter($__internal_180e822a43f1b3614d9512820d61898a1f08400077e93d6f122f764142794d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ticketcontacts/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180e822a43f1b3614d9512820d61898a1f08400077e93d6f122f764142794d55->leave($__internal_180e822a43f1b3614d9512820d61898a1f08400077e93d6f122f764142794d55_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a550b4e41423c6cc0d1101135374cc4c88aa5f426e7e1f0e5bc25972b7f33d9 = $this->env->getExtension("native_profiler");
        $__internal_7a550b4e41423c6cc0d1101135374cc4c88aa5f426e7e1f0e5bc25972b7f33d9->enter($__internal_7a550b4e41423c6cc0d1101135374cc4c88aa5f426e7e1f0e5bc25972b7f33d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_7a550b4e41423c6cc0d1101135374cc4c88aa5f426e7e1f0e5bc25972b7f33d9->leave($__internal_7a550b4e41423c6cc0d1101135374cc4c88aa5f426e7e1f0e5bc25972b7f33d9_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_2449e0ab9a27373d1aa17dbcc4d45b6eac22c61fb23db42265316b5ea0edb9a2 = $this->env->getExtension("native_profiler");
        $__internal_2449e0ab9a27373d1aa17dbcc4d45b6eac22c61fb23db42265316b5ea0edb9a2->enter($__internal_2449e0ab9a27373d1aa17dbcc4d45b6eac22c61fb23db42265316b5ea0edb9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "ticketcontacts/index.html.twig", 3)->display($context);
        
        $__internal_2449e0ab9a27373d1aa17dbcc4d45b6eac22c61fb23db42265316b5ea0edb9a2->leave($__internal_2449e0ab9a27373d1aa17dbcc4d45b6eac22c61fb23db42265316b5ea0edb9a2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b9f3c8f76777ec66bc7aa1035fa19684b3ef503ca6445aed2088fb400c2ff3bf = $this->env->getExtension("native_profiler");
        $__internal_b9f3c8f76777ec66bc7aa1035fa19684b3ef503ca6445aed2088fb400c2ff3bf->enter($__internal_b9f3c8f76777ec66bc7aa1035fa19684b3ef503ca6445aed2088fb400c2ff3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_b9f3c8f76777ec66bc7aa1035fa19684b3ef503ca6445aed2088fb400c2ff3bf->leave($__internal_b9f3c8f76777ec66bc7aa1035fa19684b3ef503ca6445aed2088fb400c2ff3bf_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_a06c292db2e1607e116ade8768a99779e402b95898f90267e236a04d25d5f5b9 = $this->env->getExtension("native_profiler");
        $__internal_a06c292db2e1607e116ade8768a99779e402b95898f90267e236a04d25d5f5b9->enter($__internal_a06c292db2e1607e116ade8768a99779e402b95898f90267e236a04d25d5f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a06c292db2e1607e116ade8768a99779e402b95898f90267e236a04d25d5f5b9->leave($__internal_a06c292db2e1607e116ade8768a99779e402b95898f90267e236a04d25d5f5b9_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e125c1d72a083d0b1dbbdb4e903e0aacf7f356308b1a06f5b7edcf180fd83295 = $this->env->getExtension("native_profiler");
        $__internal_e125c1d72a083d0b1dbbdb4e903e0aacf7f356308b1a06f5b7edcf180fd83295->enter($__internal_e125c1d72a083d0b1dbbdb4e903e0aacf7f356308b1a06f5b7edcf180fd83295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:TicketContacts:actions.html.twig", "ticketcontacts/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_e125c1d72a083d0b1dbbdb4e903e0aacf7f356308b1a06f5b7edcf180fd83295->leave($__internal_e125c1d72a083d0b1dbbdb4e903e0aacf7f356308b1a06f5b7edcf180fd83295_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20a84ad5f0a09bf35fe08637f2fd2ebd41d671623c8de2672ea2e43a0cea72c0 = $this->env->getExtension("native_profiler");
        $__internal_20a84ad5f0a09bf35fe08637f2fd2ebd41d671623c8de2672ea2e43a0cea72c0->enter($__internal_20a84ad5f0a09bf35fe08637f2fd2ebd41d671623c8de2672ea2e43a0cea72c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:TicketContacts:tbliste.html.twig", "ticketcontacts/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_contact\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">\t\t\t
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t  <h2 class=\"modal-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
        // line 26
        $this->loadTemplate("BoAdminBundle:TicketContacts:modalform.html.twig", "ticketcontacts/index.html.twig", 26)->display($context);
        // line 27
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t</div>\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketcontacts"]) ? $context["ticketcontacts"] : $this->getContext($context, "ticketcontacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticketcontact"]) {
            // line 38
            echo "\t\t<div class=\"container\">
\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"add_employee";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticketcontact"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\">\t\t\t
\t\t\t\t\t<!-- Modal content-->
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t  <h2 class=\"modal-title\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticketcontacts_add_employee", array("id" => $this->getAttribute($context["ticketcontact"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<select name='idemployee' id='idemployee'>
\t\t\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adminteams"]) ? $context["adminteams"] : $this->getContext($context, "adminteams")));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
                echo "\" ";
                if ((array_key_exists("idemploye", $context) && ($this->getAttribute($context["employee"], "id", array()) == (isset($context["idemployee"]) ? $context["idemployee"] : $this->getContext($context, "idemployee"))))) {
                    echo "selected='selected'";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t\t\t</select>\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>\t
\t\t\t\t\t</div>\t\t\t  
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketcontact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t
\t";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_20a84ad5f0a09bf35fe08637f2fd2ebd41d671623c8de2672ea2e43a0cea72c0->leave($__internal_20a84ad5f0a09bf35fe08637f2fd2ebd41d671623c8de2672ea2e43a0cea72c0_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b1bfe497d24d993751f368df275e8e9505948a6001a73aa7a6aad80495a527d = $this->env->getExtension("native_profiler");
        $__internal_4b1bfe497d24d993751f368df275e8e9505948a6001a73aa7a6aad80495a527d->enter($__internal_4b1bfe497d24d993751f368df275e8e9505948a6001a73aa7a6aad80495a527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "\t\t<script>
\t\t\t\$(\".close_modal_add\").click(function(){
\t\t\t\t\$('#add_make').modal('hide');
\t\t\t});
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 77
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
        // line 83
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_psearch");
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
        // line 114
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
        // line 121
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_psearch");
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
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tpage=parseInt(page)-1;
\t\t\t\tstr.text(page);\t\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_psearch");
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
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t\t\t\t
\t\t\t\tpage=parseInt(page)+1;
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_psearch");
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
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tvar page=nbpages;\t\t\t\t
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_psearch");
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
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_4b1bfe497d24d993751f368df275e8e9505948a6001a73aa7a6aad80495a527d->leave($__internal_4b1bfe497d24d993751f368df275e8e9505948a6001a73aa7a6aad80495a527d_prof);

    }

    public function getTemplateName()
    {
        return "ticketcontacts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 200,  444 => 199,  431 => 189,  419 => 182,  400 => 166,  387 => 158,  368 => 142,  357 => 136,  339 => 121,  327 => 114,  309 => 99,  298 => 93,  285 => 83,  274 => 77,  262 => 67,  250 => 66,  247 => 65,  233 => 58,  229 => 57,  224 => 54,  207 => 52,  203 => 51,  197 => 48,  190 => 46,  181 => 40,  177 => 38,  173 => 37,  163 => 30,  159 => 29,  155 => 27,  153 => 26,  148 => 24,  139 => 22,  128 => 13,  126 => 12,  123 => 11,  117 => 10,  107 => 8,  101 => 7,  83 => 6,  70 => 4,  58 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'label.contacts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'label.contacts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:TicketContacts:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:TicketContacts:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_contact" role="dialog">*/
/* 			<div class="modal-dialog">			*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 					  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 					  <h2 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.tickets'|trans([],'BoAdminBundle')}} {{'label.contact'|trans([],'BoAdminBundle')}}</h2>*/
/* 					</div>*/
/* 					<form action="{{ path('ticketcontacts_new') }}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{%include "BoAdminBundle:TicketContacts:modalform.html.twig"%}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 							<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" />*/
/* 						</div>*/
/* 					</form>	*/
/* 				</div>			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% for ticketcontact in ticketcontacts %}*/
/* 		<div class="container">*/
/* 			<!-- Modal -->*/
/* 			<div class="modal fade" id="add_employee{{ticketcontact.id}}" role="dialog">*/
/* 				<div class="modal-dialog">			*/
/* 					<!-- Modal content-->*/
/* 					<div class="modal-content">*/
/* 						<div class="modal-header">*/
/* 						  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						  <h2 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.employee'|trans([],'BoAdminBundle')}}</h2>*/
/* 						</div>*/
/* 						<form action="{{ path('ticketcontacts_add_employee',{'id':ticketcontact.id}) }}" method="post" class="style">*/
/* 							<div class="modal-body">*/
/* 								<select name='idemployee' id='idemployee'>*/
/* 									{%for employee in adminteams%}*/
/* 										<option value="{{employee.id}}" {%if idemploye is defined and employee.id ==idemployee%}selected='selected'{%endif%}>{{employee.firstname}} {{employee.name}}</option>*/
/* 									{%endfor%}*/
/* 								</select>					*/
/* 							</div>*/
/* 							<div class="modal-footer">*/
/* 								<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 								<input type="submit" value="{{'action.add'|trans([],'BoAdminBundle')}}" />*/
/* 							</div>*/
/* 						</form>	*/
/* 					</div>			  */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/*     {% endfor %}	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(".close_modal_add").click(function(){*/
/* 				$('#add_make').modal('hide');*/
/* 			});*/
/* 			$("#btn-search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();	*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('ticketcontacts_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('ticketcontacts_psearch')}}",*/
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
/* 					url: "{{ path('ticketcontacts_psearch')}}",*/
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
/* 				str.text(page);			*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('ticketcontacts_psearch')}}",*/
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
/* 				page=str.text();					*/
/* 				page=parseInt(page)+1;*/
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('ticketcontacts_psearch')}}",*/
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
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('ticketcontacts_psearch')}}",*/
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
