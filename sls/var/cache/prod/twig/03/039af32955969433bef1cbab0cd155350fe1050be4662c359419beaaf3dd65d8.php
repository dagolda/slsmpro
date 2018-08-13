<?php

/* coordinator/index.html.twig */
class __TwigTemplate_631f0229f1cc7dfc410acc5ceb8fe76a735d0774ecd80979b6091417db66b931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "coordinator/index.html.twig", 1);
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
        $__internal_4c4e18aeec910f5ed1cb0d5edba4965741c964f7d3642d6685b5c77d69aa23bd = $this->env->getExtension("native_profiler");
        $__internal_4c4e18aeec910f5ed1cb0d5edba4965741c964f7d3642d6685b5c77d69aa23bd->enter($__internal_4c4e18aeec910f5ed1cb0d5edba4965741c964f7d3642d6685b5c77d69aa23bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinator/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c4e18aeec910f5ed1cb0d5edba4965741c964f7d3642d6685b5c77d69aa23bd->leave($__internal_4c4e18aeec910f5ed1cb0d5edba4965741c964f7d3642d6685b5c77d69aa23bd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d8a0b45270ad9be574a16c6565a71a3963cf87ecc8070dc957c663e89484b5d = $this->env->getExtension("native_profiler");
        $__internal_9d8a0b45270ad9be574a16c6565a71a3963cf87ecc8070dc957c663e89484b5d->enter($__internal_9d8a0b45270ad9be574a16c6565a71a3963cf87ecc8070dc957c663e89484b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9d8a0b45270ad9be574a16c6565a71a3963cf87ecc8070dc957c663e89484b5d->leave($__internal_9d8a0b45270ad9be574a16c6565a71a3963cf87ecc8070dc957c663e89484b5d_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_f749ddfaad6437f578b901aa4415536c99a29e5e66811402305eb1c914806fb2 = $this->env->getExtension("native_profiler");
        $__internal_f749ddfaad6437f578b901aa4415536c99a29e5e66811402305eb1c914806fb2->enter($__internal_f749ddfaad6437f578b901aa4415536c99a29e5e66811402305eb1c914806fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "coordinator/index.html.twig", 3)->display($context);
        
        $__internal_f749ddfaad6437f578b901aa4415536c99a29e5e66811402305eb1c914806fb2->leave($__internal_f749ddfaad6437f578b901aa4415536c99a29e5e66811402305eb1c914806fb2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e96972d7e0f88809682eb1453b7e2180af867401c21c3a7f63b7cd11a0173e7a = $this->env->getExtension("native_profiler");
        $__internal_e96972d7e0f88809682eb1453b7e2180af867401c21c3a7f63b7cd11a0173e7a->enter($__internal_e96972d7e0f88809682eb1453b7e2180af867401c21c3a7f63b7cd11a0173e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_e96972d7e0f88809682eb1453b7e2180af867401c21c3a7f63b7cd11a0173e7a->leave($__internal_e96972d7e0f88809682eb1453b7e2180af867401c21c3a7f63b7cd11a0173e7a_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_bca88526b4b16a1a2a8250018484b13c49c749b09c023d8d19ea070571c30e98 = $this->env->getExtension("native_profiler");
        $__internal_bca88526b4b16a1a2a8250018484b13c49c749b09c023d8d19ea070571c30e98->enter($__internal_bca88526b4b16a1a2a8250018484b13c49c749b09c023d8d19ea070571c30e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_bca88526b4b16a1a2a8250018484b13c49c749b09c023d8d19ea070571c30e98->leave($__internal_bca88526b4b16a1a2a8250018484b13c49c749b09c023d8d19ea070571c30e98_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8faa55f34bf86da29f0364469a5445955383f4e88e065d7a5942418903df7b6e = $this->env->getExtension("native_profiler");
        $__internal_8faa55f34bf86da29f0364469a5445955383f4e88e065d7a5942418903df7b6e->enter($__internal_8faa55f34bf86da29f0364469a5445955383f4e88e065d7a5942418903df7b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Coordinator:actions.html.twig", "coordinator/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_8faa55f34bf86da29f0364469a5445955383f4e88e065d7a5942418903df7b6e->leave($__internal_8faa55f34bf86da29f0364469a5445955383f4e88e065d7a5942418903df7b6e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f9edb82731f8d9a558c8345846735647b6a55bc56e8dfc5fe2d8ca463c56139 = $this->env->getExtension("native_profiler");
        $__internal_7f9edb82731f8d9a558c8345846735647b6a55bc56e8dfc5fe2d8ca463c56139->enter($__internal_7f9edb82731f8d9a558c8345846735647b6a55bc56e8dfc5fe2d8ca463c56139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t\t<div class=\"pagination_content\">
\t\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Coordinator:pagination.html.twig", "coordinator/index.html.twig", 13)->display($context);
            // line 14
            echo "\t\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Coordinator:tbliste.html.twig", "coordinator/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_coordinator\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("coordinator_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 33
        $this->loadTemplate("BoAdminBundle:Coordinator:modalform.html.twig", "coordinator/index.html.twig", 33)->display($context);
        // line 34
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" id=\"btn_submit\" value=\"";
        // line 37
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
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_7f9edb82731f8d9a558c8345846735647b6a55bc56e8dfc5fe2d8ca463c56139->leave($__internal_7f9edb82731f8d9a558c8345846735647b6a55bc56e8dfc5fe2d8ca463c56139_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dad8d3e5719b9c59bab1831f7f4274fd5428c7339a71a1caa58ae20e9f62891c = $this->env->getExtension("native_profiler");
        $__internal_dad8d3e5719b9c59bab1831f7f4274fd5428c7339a71a1caa58ae20e9f62891c->enter($__internal_dad8d3e5719b9c59bab1831f7f4274fd5428c7339a71a1caa58ae20e9f62891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("coordinator_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_submit\").click(function(){
\t\t\t\tvar fullname = \$(\".fullname\").val();
\t\t\t\tvar array = fullname.split(\" \");
\t\t\t\tif(array.length<2){
\t\t\t\t\talert(\"You must to enter a firstname and name separeted by an empty space.\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 77
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
        // line 84
        echo $this->env->getExtension('routing')->getPath("coordinator_search");
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
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_dad8d3e5719b9c59bab1831f7f4274fd5428c7339a71a1caa58ae20e9f62891c->leave($__internal_dad8d3e5719b9c59bab1831f7f4274fd5428c7339a71a1caa58ae20e9f62891c_prof);

    }

    public function getTemplateName()
    {
        return "coordinator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 96,  261 => 95,  257 => 94,  244 => 84,  232 => 77,  205 => 53,  196 => 46,  184 => 45,  173 => 37,  166 => 34,  164 => 33,  160 => 32,  155 => 30,  148 => 28,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Coordinator:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 		<div class="pagination_content">*/
/* 			{% include 'BoAdminBundle:Coordinator:pagination.html.twig' %}*/
/* 		</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Coordinator:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_coordinator" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.coordinator'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('coordinator_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Coordinator:modalform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" id="btn_submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('coordinator_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_submit").click(function(){*/
/* 				var fullname = $(".fullname").val();*/
/* 				var array = fullname.split(" ");*/
/* 				if(array.length<2){*/
/* 					alert("You must to enter a firstname and name separeted by an empty space.");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
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
/* 					url: "{{ path('coordinator_search')}}",*/
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
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
