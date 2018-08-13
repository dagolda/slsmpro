<?php

/* client/show.html.twig */
class __TwigTemplate_52dafef60c07cfd89daeea2e5b37c04ecf10df34a3662724312844d874ba0d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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
        $__internal_63ac8f160df86930974639745594443dedb91e01ee23ea48ea751a60df258610 = $this->env->getExtension("native_profiler");
        $__internal_63ac8f160df86930974639745594443dedb91e01ee23ea48ea751a60df258610->enter($__internal_63ac8f160df86930974639745594443dedb91e01ee23ea48ea751a60df258610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ac8f160df86930974639745594443dedb91e01ee23ea48ea751a60df258610->leave($__internal_63ac8f160df86930974639745594443dedb91e01ee23ea48ea751a60df258610_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c1d4dfece49b74728297a7e62255b3e1d2312dbff4abd5a74ca5d5282d4415f = $this->env->getExtension("native_profiler");
        $__internal_3c1d4dfece49b74728297a7e62255b3e1d2312dbff4abd5a74ca5d5282d4415f->enter($__internal_3c1d4dfece49b74728297a7e62255b3e1d2312dbff4abd5a74ca5d5282d4415f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3c1d4dfece49b74728297a7e62255b3e1d2312dbff4abd5a74ca5d5282d4415f->leave($__internal_3c1d4dfece49b74728297a7e62255b3e1d2312dbff4abd5a74ca5d5282d4415f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_804ed94d2a1f8a53bac39f6d44e983b6f6d7c30fba481a3747c5e7480e7a1389 = $this->env->getExtension("native_profiler");
        $__internal_804ed94d2a1f8a53bac39f6d44e983b6f6d7c30fba481a3747c5e7480e7a1389->enter($__internal_804ed94d2a1f8a53bac39f6d44e983b6f6d7c30fba481a3747c5e7480e7a1389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "client/show.html.twig", 3)->display($context);
        
        $__internal_804ed94d2a1f8a53bac39f6d44e983b6f6d7c30fba481a3747c5e7480e7a1389->leave($__internal_804ed94d2a1f8a53bac39f6d44e983b6f6d7c30fba481a3747c5e7480e7a1389_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5e846a6084a3033b18e656218f8d721b9346ec759effcb473f8c8943867d8c4f = $this->env->getExtension("native_profiler");
        $__internal_5e846a6084a3033b18e656218f8d721b9346ec759effcb473f8c8943867d8c4f->enter($__internal_5e846a6084a3033b18e656218f8d721b9346ec759effcb473f8c8943867d8c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Client:show.html.twig", "client/show.html.twig", 4)->display($context);
        
        $__internal_5e846a6084a3033b18e656218f8d721b9346ec759effcb473f8c8943867d8c4f->leave($__internal_5e846a6084a3033b18e656218f8d721b9346ec759effcb473f8c8943867d8c4f_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_f96df6d16accb4b65fe67a5435aee175df5a62ed92f774419225fa374349a1b7 = $this->env->getExtension("native_profiler");
        $__internal_f96df6d16accb4b65fe67a5435aee175df5a62ed92f774419225fa374349a1b7->enter($__internal_f96df6d16accb4b65fe67a5435aee175df5a62ed92f774419225fa374349a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_f96df6d16accb4b65fe67a5435aee175df5a62ed92f774419225fa374349a1b7->leave($__internal_f96df6d16accb4b65fe67a5435aee175df5a62ed92f774419225fa374349a1b7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4087ac03534f97540eebfa5ebb4178e98a1a0b64e4695d61f6d286fa58db619b = $this->env->getExtension("native_profiler");
        $__internal_4087ac03534f97540eebfa5ebb4178e98a1a0b64e4695d61f6d286fa58db619b->enter($__internal_4087ac03534f97540eebfa5ebb4178e98a1a0b64e4695d61f6d286fa58db619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Client:showactions.html.twig", "client/show.html.twig", 8)->display($context);
        // line 9
        echo "
\t\t<div class=\"display_content\">
\t\t\t<legend>Contracts of customer</legend>
\t\t\t<input id=\"contract_number\" type=\"hidden\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))), "html", null, true);
        echo "\" />
\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Client:contracts.html.twig", "client/show.html.twig", 13)->display($context);
        // line 14
        echo "\t\t</div>
\t</div>
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
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_coordinator_new", array("idclient" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("BoAdminBundle:Coordinator:modalform.html.twig", "client/show.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" id=\"btn_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4087ac03534f97540eebfa5ebb4178e98a1a0b64e4695d61f6d286fa58db619b->leave($__internal_4087ac03534f97540eebfa5ebb4178e98a1a0b64e4695d61f6d286fa58db619b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f663f6f13cdcb5aa9d195f9c0c8d0545078a86c996c7ea7c5fa69310ac7a877a = $this->env->getExtension("native_profiler");
        $__internal_f663f6f13cdcb5aa9d195f9c0c8d0545078a86c996c7ea7c5fa69310ac7a877a->enter($__internal_f663f6f13cdcb5aa9d195f9c0c8d0545078a86c996c7ea7c5fa69310ac7a877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "\t\t<script>
\t\t\t\$(\"#btn_submit\").click(function(){
\t\t\t\tvar fullname = \$(\".fullname\").val();
\t\t\t\tvar array = fullname.split(\" \");
\t\t\t\tif(array.length<2){
\t\t\t\t\talert(\"You must to enter a firstname and name separeted by an empty space.\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#btn_delete\").click(function(){
\t\t\t\tvar nb_contract = \$(\"#contract_number\").val();
\t\t\t\tif(nb_contract>0){
\t\t\t\t\talert(\"You can not delete this client because it is attached to a contract.\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f663f6f13cdcb5aa9d195f9c0c8d0545078a86c996c7ea7c5fa69310ac7a877a->leave($__internal_f663f6f13cdcb5aa9d195f9c0c8d0545078a86c996c7ea7c5fa69310ac7a877a_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 88,  242 => 87,  238 => 86,  217 => 67,  205 => 66,  195 => 59,  191 => 58,  187 => 57,  181 => 54,  175 => 51,  155 => 34,  148 => 31,  146 => 30,  142 => 29,  137 => 27,  130 => 25,  117 => 14,  115 => 13,  111 => 12,  106 => 9,  104 => 8,  101 => 7,  95 => 6,  79 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.customer'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{%include "BoAdminBundle:Client:show.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.customer'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Client:showactions.html.twig"%}*/
/* */
/* 		<div class="display_content">*/
/* 			<legend>Contracts of customer</legend>*/
/* 			<input id="contract_number" type="hidden" value="{{contracts|length}}" />*/
/* 			{%include "BoAdminBundle:Client:contracts.html.twig"%}*/
/* 		</div>*/
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
/* 				<form action="{{ path('client_coordinator_new',{'idclient':client.id}) }}" method="post" class="style">*/
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
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_submit").click(function(){*/
/* 				var fullname = $(".fullname").val();*/
/* 				var array = fullname.split(" ");*/
/* 				if(array.length<2){*/
/* 					alert("You must to enter a firstname and name separeted by an empty space.");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#btn_delete").click(function(){*/
/* 				var nb_contract = $("#contract_number").val();*/
/* 				if(nb_contract>0){*/
/* 					alert("You can not delete this client because it is attached to a contract.");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
