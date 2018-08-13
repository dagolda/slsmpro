<?php

/* students/show.html.twig */
class __TwigTemplate_528ed174c550535f727125e0560c5e869b57538a20dfd78dbd43a37bad4c886f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "students/show.html.twig", 1);
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
        $__internal_52be5150dbda7e6f49ec5fe072be996db7072c35e8a65c179a233c73476ede11 = $this->env->getExtension("native_profiler");
        $__internal_52be5150dbda7e6f49ec5fe072be996db7072c35e8a65c179a233c73476ede11->enter($__internal_52be5150dbda7e6f49ec5fe072be996db7072c35e8a65c179a233c73476ede11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52be5150dbda7e6f49ec5fe072be996db7072c35e8a65c179a233c73476ede11->leave($__internal_52be5150dbda7e6f49ec5fe072be996db7072c35e8a65c179a233c73476ede11_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_328c62496b5bb08af7a6e0df4c09407dd1733c3fdb978e55e47ad397def8914b = $this->env->getExtension("native_profiler");
        $__internal_328c62496b5bb08af7a6e0df4c09407dd1733c3fdb978e55e47ad397def8914b->enter($__internal_328c62496b5bb08af7a6e0df4c09407dd1733c3fdb978e55e47ad397def8914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_328c62496b5bb08af7a6e0df4c09407dd1733c3fdb978e55e47ad397def8914b->leave($__internal_328c62496b5bb08af7a6e0df4c09407dd1733c3fdb978e55e47ad397def8914b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_25fc16ce32656c7bd73f7dddd2efb3d635922e5fc6fea6941d830f980cba051e = $this->env->getExtension("native_profiler");
        $__internal_25fc16ce32656c7bd73f7dddd2efb3d635922e5fc6fea6941d830f980cba051e->enter($__internal_25fc16ce32656c7bd73f7dddd2efb3d635922e5fc6fea6941d830f980cba051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/show.html.twig", 3)->display($context);
        
        $__internal_25fc16ce32656c7bd73f7dddd2efb3d635922e5fc6fea6941d830f980cba051e->leave($__internal_25fc16ce32656c7bd73f7dddd2efb3d635922e5fc6fea6941d830f980cba051e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e4246b022302d3520d883ea5444b20b139521ab410e09eae51ff4d7a9c7cba0d = $this->env->getExtension("native_profiler");
        $__internal_e4246b022302d3520d883ea5444b20b139521ab410e09eae51ff4d7a9c7cba0d->enter($__internal_e4246b022302d3520d883ea5444b20b139521ab410e09eae51ff4d7a9c7cba0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:rightshow.html.twig", "students/show.html.twig", 4)->display($context);
        
        $__internal_e4246b022302d3520d883ea5444b20b139521ab410e09eae51ff4d7a9c7cba0d->leave($__internal_e4246b022302d3520d883ea5444b20b139521ab410e09eae51ff4d7a9c7cba0d_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_c13269b62a6aecf0665f32db4b30e96bcd75c543c3e70e54eb610e2ca8ed9d87 = $this->env->getExtension("native_profiler");
        $__internal_c13269b62a6aecf0665f32db4b30e96bcd75c543c3e70e54eb610e2ca8ed9d87->enter($__internal_c13269b62a6aecf0665f32db4b30e96bcd75c543c3e70e54eb610e2ca8ed9d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c13269b62a6aecf0665f32db4b30e96bcd75c543c3e70e54eb610e2ca8ed9d87->leave($__internal_c13269b62a6aecf0665f32db4b30e96bcd75c543c3e70e54eb610e2ca8ed9d87_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_97dc61ed5490f54bb0d41b43d0df96fbc4fa04d761c4b9bb73e7b41747cf6373 = $this->env->getExtension("native_profiler");
        $__internal_97dc61ed5490f54bb0d41b43d0df96fbc4fa04d761c4b9bb73e7b41747cf6373->enter($__internal_97dc61ed5490f54bb0d41b43d0df96fbc4fa04d761c4b9bb73e7b41747cf6373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Students:showactions.html.twig", "students/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        if ((array_key_exists("contract", $context) && ((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) != null))) {
            // line 10
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisor", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 12
            $this->loadTemplate("BoAdminBundle:Students:advisor.html.twig", "students/show.html.twig", 12)->display($context);
            // line 13
            echo "\t\t\t</div>
\t\t";
        }
        // line 15
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Students:contract.html.twig", "students/show.html.twig", 17)->display($context);
        // line 18
        echo "\t\t</div>
\t\t";
        // line 19
        if (((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")) && ((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")) != null))) {
            // line 20
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.departmentcontact", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 22
            $this->loadTemplate("BoAdminBundle:Contracts:coordinator.html.twig", "students/show.html.twig", 22)->display($context);
            // line 23
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 25
        echo "\t\t";
        if ((array_key_exists("group", $context) && ((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")) != null))) {
            // line 26
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 28
            $this->loadTemplate("BoAdminBundle:Contracts:group.html.twig", "students/show.html.twig", 28)->display($context);
            // line 29
            echo "\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers"))) > 0)) {
            // line 32
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t";
            // line 35
            $this->loadTemplate("BoAdminBundle:Students:teachers.html.twig", "students/show.html.twig", 35)->display($context);
            // line 36
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 39
        echo "\t\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "campus", array(), "any", true, true) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()) != null))) {
            // line 40
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 42
            $this->loadTemplate("BoAdminBundle:Students:local.html.twig", "students/show.html.twig", 42)->display($context);
            // line 43
            echo "\t\t</div>
\t\t";
        }
        // line 45
        echo "\t\t";
        if ((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations"))) {
            // line 46
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluation", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 48
            $this->loadTemplate("BoAdminBundle:Students:tbeval.html.twig", "students/show.html.twig", 48)->display($context);
            // line 49
            echo "\t\t</div>
\t\t";
        }
        // line 51
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) > 0)) {
            // line 52
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.recentabsences", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 54
            $this->loadTemplate("BoAdminBundle:Students:absences.html.twig", "students/show.html.twig", 54)->display($context);
            // line 55
            echo "\t\t</div>
\t\t";
        }
        // line 57
        echo "\t\t";
        if (((isset($context["timesheets"]) ? $context["timesheets"] : $this->getContext($context, "timesheets")) != null)) {
            // line 58
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 60
            $this->loadTemplate("BoAdminBundle:Students:timesheet.html.twig", "students/show.html.twig", 60)->display($context);
            // line 61
            echo "\t\t</div>
\t\t";
        }
        // line 63
        echo "\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_absence\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_create_absence", array("idstudent" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 104
        $this->loadTemplate("BoAdminBundle:Students:absenceform.html.twig", "students/show.html.twig", 104)->display($context);
        // line 105
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_97dc61ed5490f54bb0d41b43d0df96fbc4fa04d761c4b9bb73e7b41747cf6373->leave($__internal_97dc61ed5490f54bb0d41b43d0df96fbc4fa04d761c4b9bb73e7b41747cf6373_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4030ebc98fc7272df58f80b85cd5595c1e8b2b721d77a3088746811a59bf006 = $this->env->getExtension("native_profiler");
        $__internal_d4030ebc98fc7272df58f80b85cd5595c1e8b2b721d77a3088746811a59bf006->enter($__internal_d4030ebc98fc7272df58f80b85cd5595c1e8b2b721d77a3088746811a59bf006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "\t\t<script>
\t\t\t\$(\"#btn_create\").click(function(){\t\t
\t\t\t\t\$('.message-content').html(\"<div class='alert alert-info'><center>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center></div>\");
\t\t\t\tidstudent=\$(\"#idstudent\").val();
\t\t\t\tvar DATA = 'id='+idstudent;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("students_user_new");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.message-content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".abstart\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});\t
\t\t\t\$(\".abend\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\".amorpm\").change(function(){
\t\t\t\tvar str=\$(\".amorpm input:checked\");
\t\t\t\tvar amorpm = str.val();
\t\t\t\tif(amorpm==\"ALL\"){
\t\t\t\t\t\$(\".am-data\").hide();
\t\t\t\t\t\$(\".pm-data\").hide();
\t\t\t\t}
\t\t\t\tif(amorpm==\"AM\"){
\t\t\t\t\t\$(\".am-data\").show();
\t\t\t\t\t\$(\".pm-data\").hide();
\t\t\t\t}
\t\t\t\tif(amorpm==\"PM\"){
\t\t\t\t\t\$(\".am-data\").hide();
\t\t\t\t\t\$(\".pm-data\").show();
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d4030ebc98fc7272df58f80b85cd5595c1e8b2b721d77a3088746811a59bf006->leave($__internal_d4030ebc98fc7272df58f80b85cd5595c1e8b2b721d77a3088746811a59bf006_prof);

    }

    public function getTemplateName()
    {
        return "students/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 181,  423 => 180,  365 => 125,  355 => 120,  351 => 118,  339 => 117,  327 => 108,  320 => 105,  318 => 104,  314 => 103,  309 => 101,  304 => 99,  284 => 82,  280 => 81,  276 => 80,  272 => 79,  266 => 76,  260 => 73,  248 => 63,  244 => 61,  242 => 60,  238 => 59,  235 => 58,  232 => 57,  228 => 55,  226 => 54,  222 => 53,  219 => 52,  216 => 51,  212 => 49,  210 => 48,  206 => 47,  203 => 46,  200 => 45,  196 => 43,  194 => 42,  190 => 41,  187 => 40,  184 => 39,  179 => 36,  177 => 35,  172 => 33,  169 => 32,  166 => 31,  162 => 29,  160 => 28,  156 => 27,  153 => 26,  150 => 25,  146 => 23,  144 => 22,  140 => 21,  137 => 20,  135 => 19,  132 => 18,  130 => 17,  126 => 16,  123 => 15,  119 => 13,  117 => 12,  113 => 11,  110 => 10,  107 => 9,  105 => 8,  102 => 7,  96 => 6,  80 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%include "BoAdminBundle:Students:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Students:showactions.html.twig"%}*/
/* 		{%if contract is defined and contract!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.advisor'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Students:advisor.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:contract.html.twig"%}*/
/* 		</div>*/
/* 		{%if coordinator and coordinator!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'title.departmentcontact'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:coordinator.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 		{%if group is defined and group!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if teachers|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div id="teacher_content">*/
/* 					{%include "BoAdminBundle:Students:teachers.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if contract.campus is defined and contract.campus!=null%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.room'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:local.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if evaluations %}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.evaluation'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:tbeval.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if absences|length>0 %}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.recentabsences'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:absences.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if timesheets!=null%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.timesheet'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:timesheet.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<button type="button" class="close" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_absence" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addabsence'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('students_create_absence',{'idstudent':student.id}) }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(absence_form) }}*/
/* 						{%include "BoAdminBundle:Students:absenceform.html.twig"%}*/
/* 					{{ form_rest(absence_form) }}*/
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
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_create").click(function(){		*/
/* 				$('.message-content').html("<div class='alert alert-info'><center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center></div>");*/
/* 				idstudent=$("#idstudent").val();*/
/* 				var DATA = 'id='+idstudent;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_user_new')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.message-content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".abstart").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});	*/
/* 			$(".abend").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$(".amorpm").change(function(){*/
/* 				var str=$(".amorpm input:checked");*/
/* 				var amorpm = str.val();*/
/* 				if(amorpm=="ALL"){*/
/* 					$(".am-data").hide();*/
/* 					$(".pm-data").hide();*/
/* 				}*/
/* 				if(amorpm=="AM"){*/
/* 					$(".am-data").show();*/
/* 					$(".pm-data").hide();*/
/* 				}*/
/* 				if(amorpm=="PM"){*/
/* 					$(".am-data").hide();*/
/* 					$(".pm-data").show();*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
