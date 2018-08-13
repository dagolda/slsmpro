<?php

/* BoAdminBundle:Default:index.html.twig */
class __TwigTemplate_424ee1040f0f4077c8ba59a4982e92173e6c12bb814c058db088c47dff08f08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdminBundle:Default:index.html.twig", 1);
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
        $__internal_017de362d672cc508e71dc0191e8ee633d00e1390128aa178395ce7f143d1ef2 = $this->env->getExtension("native_profiler");
        $__internal_017de362d672cc508e71dc0191e8ee633d00e1390128aa178395ce7f143d1ef2->enter($__internal_017de362d672cc508e71dc0191e8ee633d00e1390128aa178395ce7f143d1ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_017de362d672cc508e71dc0191e8ee633d00e1390128aa178395ce7f143d1ef2->leave($__internal_017de362d672cc508e71dc0191e8ee633d00e1390128aa178395ce7f143d1ef2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_54e2e26af6fc2b5a6dad2b82844492f79b71fd02f7f37b58c72ae295ed7be41e = $this->env->getExtension("native_profiler");
        $__internal_54e2e26af6fc2b5a6dad2b82844492f79b71fd02f7f37b58c72ae295ed7be41e->enter($__internal_54e2e26af6fc2b5a6dad2b82844492f79b71fd02f7f37b58c72ae295ed7be41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.home", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_54e2e26af6fc2b5a6dad2b82844492f79b71fd02f7f37b58c72ae295ed7be41e->leave($__internal_54e2e26af6fc2b5a6dad2b82844492f79b71fd02f7f37b58c72ae295ed7be41e_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_5d59962a087c4f616b050e6149b0f74bca834c8128bd5e496700f8bcffd30cbd = $this->env->getExtension("native_profiler");
        $__internal_5d59962a087c4f616b050e6149b0f74bca834c8128bd5e496700f8bcffd30cbd->enter($__internal_5d59962a087c4f616b050e6149b0f74bca834c8128bd5e496700f8bcffd30cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdminBundle:Default:index.html.twig", 3)->display($context);
        
        $__internal_5d59962a087c4f616b050e6149b0f74bca834c8128bd5e496700f8bcffd30cbd->leave($__internal_5d59962a087c4f616b050e6149b0f74bca834c8128bd5e496700f8bcffd30cbd_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_385f4f9c7327008ed533f764ed2143bf154b7e205eae048e1f8e8f1a62c94dfe = $this->env->getExtension("native_profiler");
        $__internal_385f4f9c7327008ed533f764ed2143bf154b7e205eae048e1f8e8f1a62c94dfe->enter($__internal_385f4f9c7327008ed533f764ed2143bf154b7e205eae048e1f8e8f1a62c94dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:Default:rightshow.html.twig", "BoAdminBundle:Default:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_385f4f9c7327008ed533f764ed2143bf154b7e205eae048e1f8e8f1a62c94dfe->leave($__internal_385f4f9c7327008ed533f764ed2143bf154b7e205eae048e1f8e8f1a62c94dfe_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_0cb7c271daa251c7eb9fcbc3d7ad4c3e851dbe0bb5b7171ce5fdee5a44dab311 = $this->env->getExtension("native_profiler");
        $__internal_0cb7c271daa251c7eb9fcbc3d7ad4c3e851dbe0bb5b7171ce5fdee5a44dab311->enter($__internal_0cb7c271daa251c7eb9fcbc3d7ad4c3e851dbe0bb5b7171ce5fdee5a44dab311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.home", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_0cb7c271daa251c7eb9fcbc3d7ad4c3e851dbe0bb5b7171ce5fdee5a44dab311->leave($__internal_0cb7c271daa251c7eb9fcbc3d7ad4c3e851dbe0bb5b7171ce5fdee5a44dab311_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_215393716c778973402c8eb8f7292b106180fb077aad41c82c348c58e8c15b5c = $this->env->getExtension("native_profiler");
        $__internal_215393716c778973402c8eb8f7292b106180fb077aad41c82c348c58e8c15b5c->enter($__internal_215393716c778973402c8eb8f7292b106180fb077aad41c82c348c58e8c15b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"panel-group\">
\t\t";
        // line 10
        if (((twig_length_filter($this->env, (isset($context["invitations"]) ? $context["invitations"] : $this->getContext($context, "invitations"))) > 0) && ((isset($context["b_invite"]) ? $context["b_invite"] : $this->getContext($context, "b_invite")) == true))) {
            // line 11
            echo "\t\t\t";
            $this->loadTemplate("BoHomeBundle:Default:invitation.html.twig", "BoAdminBundle:Default:index.html.twig", 11)->display($context);
            // line 12
            echo "\t\t";
        } elseif (((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) != null)) {
            // line 13
            echo "\t\t\t";
            $this->loadTemplate("BoHomeBundle:Default:schedules.html.twig", "BoAdminBundle:Default:index.html.twig", 13)->display($context);
            // line 14
            echo "\t\t";
        } else {
            // line 15
            echo "\t\t\t";
            $this->loadTemplate("BoAdminBundle:Default:homemessage.html.twig", "BoAdminBundle:Default:index.html.twig", 15)->display($context);
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t\t<br/>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.notifications", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no message found"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<br/>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Default:tbliste.html.twig", "BoAdminBundle:Default:index.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 31
        if ($this->getAttribute((isset($context["securityCotes"]) ? $context["securityCotes"] : null), 0, array(), "array", true, true)) {
            // line 32
            echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.security.cote", array(), "BoAdminBundle"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t\t";
            // line 35
            $this->loadTemplate("BoHomeBundle:User:securitycote.html.twig", "BoAdminBundle:Default:index.html.twig", 35)->display($context);
            // line 36
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 39
        echo "\t</div>
\t<div class=\"container ggl_map\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"ottawa_map\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.googlemap", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 52
        $this->loadTemplate("BoStudentBundle:Default:ottawamap.html.twig", "BoAdminBundle:Default:index.html.twig", 52)->display($context);
        // line 53
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"hull_map\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.googlemap", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 71
        $this->loadTemplate("BoStudentBundle:Default:hullmap.html.twig", "BoAdminBundle:Default:index.html.twig", 71)->display($context);
        // line 72
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_215393716c778973402c8eb8f7292b106180fb077aad41c82c348c58e8c15b5c->leave($__internal_215393716c778973402c8eb8f7292b106180fb077aad41c82c348c58e8c15b5c_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa8de5cce448063014b13ac516029ac01bb73bdcd460d3a2465d6653735b7082 = $this->env->getExtension("native_profiler");
        $__internal_fa8de5cce448063014b13ac516029ac01bb73bdcd460d3a2465d6653735b7082->enter($__internal_fa8de5cce448063014b13ac516029ac01bb73bdcd460d3a2465d6653735b7082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "\t\t<script>\t
\t\t\t\$(\".event_next_week\").click(function(){
\t\t\t\t\$(\".current-event\").hide();
\t\t\t\t\$(\".next-event\").show();
\t\t\t\t\$('.load_data').html(\"<center>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar number=7;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#nstartdate\").val();
\t\t\t\tvar enddate=\$(\"#nenddate\").val();
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".event_current_week\").click(function(){
\t\t\t\t\$(\".next-event\").hide();
\t\t\t\t\$(\".current-event\").show();
\t\t\t\t\$('.load_data').html(\"<center>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar number=0;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#pstartdate\").val();
\t\t\t\tvar enddate=\$(\"#penddate\").val();
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});\t
\t\t\tfunction loaddata(DATA){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("home_schedule_load");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: true,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#load_data').html(data);
\t\t\t\t\t},
\t\t\t\t\terror: function(data,status,error){
\t\t\t\t\t\t\$('#data_error').html(error);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_fa8de5cce448063014b13ac516029ac01bb73bdcd460d3a2465d6653735b7082->leave($__internal_fa8de5cce448063014b13ac516029ac01bb73bdcd460d3a2465d6653735b7082_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 121,  297 => 120,  281 => 107,  264 => 95,  247 => 83,  241 => 79,  229 => 78,  221 => 72,  219 => 71,  213 => 68,  196 => 53,  194 => 52,  188 => 49,  176 => 39,  171 => 36,  169 => 35,  164 => 33,  161 => 32,  159 => 31,  155 => 29,  153 => 28,  148 => 26,  140 => 21,  135 => 19,  131 => 17,  128 => 16,  125 => 15,  122 => 14,  119 => 13,  116 => 12,  113 => 11,  111 => 10,  108 => 9,  102 => 8,  86 => 7,  75 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'layout.menu.home'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoAdminBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'layout.menu.home'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div class="panel-group">*/
/* 		{%if invitations|length>0 and b_invite==true%}*/
/* 			{%include "BoHomeBundle:Default:invitation.html.twig"%}*/
/* 		{%elseif contracts!=null%}*/
/* 			{%include "BoHomeBundle:Default:schedules.html.twig"%}*/
/* 		{%else%}*/
/* 			{%include "BoAdminBundle:Default:homemessage.html.twig"%}*/
/* 		{%endif%}*/
/* 		<br/>*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">{{'title.notifications'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body noframe">*/
/* 				{{"no message found"|trans()}}*/
/* 			</div>*/
/* 		</div>*/
/* 		<br/>*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">{{'entity.tickets'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body noframe">*/
/* 				{%include "BoAdminBundle:Default:tbliste.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* 		{%if securityCotes[0] is defined%}*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading">{{'title.security.cote'|trans([],'BoAdminBundle')}}</div>*/
/* 				<div class="panel-body noframe">*/
/* 					{%include "BoHomeBundle:User:securitycote.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
/* 	</div>*/
/* 	<div class="container ggl_map">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="ottawa_map" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.googlemap'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				{%include "BoStudentBundle:Default:ottawamap.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="hull_map" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.googlemap'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				{%include "BoStudentBundle:Default:hullmap.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>	*/
/* 			$(".event_next_week").click(function(){*/
/* 				$(".current-event").hide();*/
/* 				$(".next-event").show();*/
/* 				$('.load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var number=7;*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#nstartdate").val();*/
/* 				var enddate=$("#nenddate").val();*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$(".event_current_week").click(function(){*/
/* 				$(".next-event").hide();*/
/* 				$(".current-event").show();*/
/* 				$('.load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var number=0;*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#pstartdate").val();*/
/* 				var enddate=$("#penddate").val();*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});	*/
/* 			function loaddata(DATA){*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('home_schedule_load')}}",*/
/* 					data: DATA,*/
/* 					cache: true,*/
/* 					success: function(data){*/
/* 						$('#load_data').html(data);*/
/* 					},*/
/* 					error: function(data,status,error){*/
/* 						$('#data_error').html(error);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			}*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
