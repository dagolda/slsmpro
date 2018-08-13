<?php

/* BoHomeBundle:Tsdoc:index.html.twig */
class __TwigTemplate_d49bea9ce334007a90e63257a29b1082d37412c38ac68f7b68e23fe8b42a23ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Tsdoc:index.html.twig", 1);
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
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f850cefe1aff954b175c60e0a6065cde2339941436023c11515f8c676a4ac71a = $this->env->getExtension("native_profiler");
        $__internal_f850cefe1aff954b175c60e0a6065cde2339941436023c11515f8c676a4ac71a->enter($__internal_f850cefe1aff954b175c60e0a6065cde2339941436023c11515f8c676a4ac71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tsdoc:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f850cefe1aff954b175c60e0a6065cde2339941436023c11515f8c676a4ac71a->leave($__internal_f850cefe1aff954b175c60e0a6065cde2339941436023c11515f8c676a4ac71a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd553f70dab66af6139e3d348bf8c029de1a2c2b729df543b0208a9a05e5f6de = $this->env->getExtension("native_profiler");
        $__internal_dd553f70dab66af6139e3d348bf8c029de1a2c2b729df543b0208a9a05e5f6de->enter($__internal_dd553f70dab66af6139e3d348bf8c029de1a2c2b729df543b0208a9a05e5f6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.documents", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_dd553f70dab66af6139e3d348bf8c029de1a2c2b729df543b0208a9a05e5f6de->leave($__internal_dd553f70dab66af6139e3d348bf8c029de1a2c2b729df543b0208a9a05e5f6de_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_4048838f162d23eb6d8a257321302053d69a58bf1ed0dcf8a343371000d4b2e1 = $this->env->getExtension("native_profiler");
        $__internal_4048838f162d23eb6d8a257321302053d69a58bf1ed0dcf8a343371000d4b2e1->enter($__internal_4048838f162d23eb6d8a257321302053d69a58bf1ed0dcf8a343371000d4b2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:document.html.twig", "BoHomeBundle:Tsdoc:index.html.twig", 3)->display($context);
        
        $__internal_4048838f162d23eb6d8a257321302053d69a58bf1ed0dcf8a343371000d4b2e1->leave($__internal_4048838f162d23eb6d8a257321302053d69a58bf1ed0dcf8a343371000d4b2e1_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1cb028769c85ce89a10de6feb5c76af8dd8a2125f48684dc46ba913f42707882 = $this->env->getExtension("native_profiler");
        $__internal_1cb028769c85ce89a10de6feb5c76af8dd8a2125f48684dc46ba913f42707882->enter($__internal_1cb028769c85ce89a10de6feb5c76af8dd8a2125f48684dc46ba913f42707882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Contracts:rightshow.html.twig", "BoHomeBundle:Tsdoc:index.html.twig", 4)->display($context);
        }
        
        $__internal_1cb028769c85ce89a10de6feb5c76af8dd8a2125f48684dc46ba913f42707882->leave($__internal_1cb028769c85ce89a10de6feb5c76af8dd8a2125f48684dc46ba913f42707882_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ed5e33cd5ae7e511a50dd1dc09a249e2406be6e1d79da90b4e920b6bd8275a30 = $this->env->getExtension("native_profiler");
        $__internal_ed5e33cd5ae7e511a50dd1dc09a249e2406be6e1d79da90b4e920b6bd8275a30->enter($__internal_ed5e33cd5ae7e511a50dd1dc09a249e2406be6e1d79da90b4e920b6bd8275a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.documents", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ed5e33cd5ae7e511a50dd1dc09a249e2406be6e1d79da90b4e920b6bd8275a30->leave($__internal_ed5e33cd5ae7e511a50dd1dc09a249e2406be6e1d79da90b4e920b6bd8275a30_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ad3d243e3961cd0f3b836918baa1c9723b6526b56a18bf60159ead7c19d531b2 = $this->env->getExtension("native_profiler");
        $__internal_ad3d243e3961cd0f3b836918baa1c9723b6526b56a18bf60159ead7c19d531b2->enter($__internal_ad3d243e3961cd0f3b836918baa1c9723b6526b56a18bf60159ead7c19d531b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Tsdoc:actions.html.twig", "BoHomeBundle:Tsdoc:index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_ad3d243e3961cd0f3b836918baa1c9723b6526b56a18bf60159ead7c19d531b2->leave($__internal_ad3d243e3961cd0f3b836918baa1c9723b6526b56a18bf60159ead7c19d531b2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_651325ddb2b233ecca31e62650c688ab6a74ab8be6bdb742986ea5b283a40b42 = $this->env->getExtension("native_profiler");
        $__internal_651325ddb2b233ecca31e62650c688ab6a74ab8be6bdb742986ea5b283a40b42->enter($__internal_651325ddb2b233ecca31e62650c688ab6a74ab8be6bdb742986ea5b283a40b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 11
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 12
            $this->loadTemplate("BoHomeBundle:Tsdoc:pagination.html.twig", "BoHomeBundle:Tsdoc:index.html.twig", 12)->display($context);
            // line 13
            echo "\t</div>
\t";
        }
        // line 15
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoHomeBundle:Tsdoc:tbliste.html.twig", "BoHomeBundle:Tsdoc:index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t<input type=\"hidden\" id=\"idemployee\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "\"/>\t\t
\t<!-- Begin employee document deleting -->
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tsdocs"]) ? $context["tsdocs"] : $this->getContext($context, "tsdocs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tsdoc"]) {
            // line 21
            echo "\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t  <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t";
            // line 36
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["tsdoc_delete_form"]) ? $context["tsdoc_delete_form"] : $this->getContext($context, "tsdoc_delete_form")), $this->getAttribute($context["tsdoc"], "id", array()), array(), "array"), 'form_start');
            echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 38
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["tsdoc_delete_form"]) ? $context["tsdoc_delete_form"] : $this->getContext($context, "tsdoc_delete_form")), $this->getAttribute($context["tsdoc"], "id", array()), array(), "array"), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tsdoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t<!-- End employee document deleting -->
\t
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_tsdoc\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  \t<h4 class=\"modal-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.adddocument", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t\t<div id=\"error_message\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("home_tsdoc_new");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div id=records_entity>
\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 64
        $this->loadTemplate("BoHomeBundle:Tsdoc:newform.html.twig", "BoHomeBundle:Tsdoc:index.html.twig", 64)->display($context);
        // line 65
        echo "\t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\" id=\"btn-create\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_651325ddb2b233ecca31e62650c688ab6a74ab8be6bdb742986ea5b283a40b42->leave($__internal_651325ddb2b233ecca31e62650c688ab6a74ab8be6bdb742986ea5b283a40b42_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f11f75a709dbc1dfdc182412027f77bb9e6178d8348f41914c9923b7dc98ab81 = $this->env->getExtension("native_profiler");
        $__internal_f11f75a709dbc1dfdc182412027f77bb9e6178d8348f41914c9923b7dc98ab81->enter($__internal_f11f75a709dbc1dfdc182412027f77bb9e6178d8348f41914c9923b7dc98ab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "\t\t<script>
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tif(\$(\".startdate\").val()>=\$(\".enddate\").val()){
\t\t\t\t\t\$('#error_message').html(\"startdate can not be equal to or greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar idemployee = \$(\"#idemployee\").val();
\t\t\t\tvar DATA = 'motcle=' + page+\"-\"+idemployee;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("home_tsdoc_pagesearch");
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
        // line 109
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
        // line 116
        echo $this->env->getExtension('routing')->getPath("home_tsdoc_search");
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
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f11f75a709dbc1dfdc182412027f77bb9e6178d8348f41914c9923b7dc98ab81->leave($__internal_f11f75a709dbc1dfdc182412027f77bb9e6178d8348f41914c9923b7dc98ab81_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tsdoc:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 127,  326 => 126,  313 => 116,  301 => 109,  283 => 94,  271 => 87,  260 => 78,  248 => 77,  237 => 69,  229 => 65,  227 => 64,  223 => 63,  217 => 60,  211 => 57,  198 => 46,  184 => 38,  180 => 37,  176 => 36,  170 => 33,  164 => 30,  153 => 21,  149 => 20,  144 => 18,  141 => 17,  139 => 16,  136 => 15,  132 => 13,  130 => 12,  127 => 11,  124 => 10,  118 => 9,  108 => 7,  102 => 6,  84 => 5,  70 => 4,  58 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.documents'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:document.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if employee!=null%}{%include "BoHomeBundle:Contracts:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.documents'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Tsdoc:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoHomeBundle:Tsdoc:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoHomeBundle:Tsdoc:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<input type="hidden" id="idemployee" value="{{employee.id}}"/>		*/
/* 	<!-- Begin employee document deleting -->*/
/* 	{%for tsdoc in tsdocs%}*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="myModal" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<div class="modal-body">*/
/* 				  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					{{ form_start(tsdoc_delete_form[tsdoc.id]) }}*/
/* 						<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 					{{ form_end(tsdoc_delete_form[tsdoc.id]) }}*/
/* 				</div>*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 	{%endfor%}*/
/* 	<!-- End employee document deleting -->*/
/* 	*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_tsdoc" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  	<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  	<h4 class="modal-title">{{'label.adddocument'|trans([],'BoAdminBundle')}}</h4>*/
/* 					<div id="error_message" align="center"></div>*/
/* 				</div>*/
/* 				<form action="{{ path('home_tsdoc_new') }}" enctype="multipart/form-data" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						<div id=records_entity>*/
/* 							{{ form_errors(form) }}*/
/* 								{%include "BoHomeBundle:Tsdoc:newform.html.twig"%}*/
/* 							{{ form_rest(form) }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" id="btn-create">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn-create").click(function(){*/
/* 				if($(".startdate").val()>=$(".enddate").val()){*/
/* 					$('#error_message').html("startdate can not be equal to or greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var idemployee = $("#idemployee").val();*/
/* 				var DATA = 'motcle=' + page+"-"+idemployee;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('home_tsdoc_pagesearch')}}",*/
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
/* 					url: "{{ path('home_tsdoc_search')}}",*/
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
