<?php

/* contracts/edit.html.twig */
class __TwigTemplate_2373aae2135077c54911c655fe38d44f3dde3b56a0de2c802f9e5631a6ba5184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contracts/edit.html.twig", 1);
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
        $__internal_8bc614ac8f3f5f71fe9dcf2cb6a0c7885993e3c7750b08754ebeab78ae58891f = $this->env->getExtension("native_profiler");
        $__internal_8bc614ac8f3f5f71fe9dcf2cb6a0c7885993e3c7750b08754ebeab78ae58891f->enter($__internal_8bc614ac8f3f5f71fe9dcf2cb6a0c7885993e3c7750b08754ebeab78ae58891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bc614ac8f3f5f71fe9dcf2cb6a0c7885993e3c7750b08754ebeab78ae58891f->leave($__internal_8bc614ac8f3f5f71fe9dcf2cb6a0c7885993e3c7750b08754ebeab78ae58891f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b828c70faa801b5d56190b72f6ff77db45b68d0f0c6613ac6dd2e76f61ac7829 = $this->env->getExtension("native_profiler");
        $__internal_b828c70faa801b5d56190b72f6ff77db45b68d0f0c6613ac6dd2e76f61ac7829->enter($__internal_b828c70faa801b5d56190b72f6ff77db45b68d0f0c6613ac6dd2e76f61ac7829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b828c70faa801b5d56190b72f6ff77db45b68d0f0c6613ac6dd2e76f61ac7829->leave($__internal_b828c70faa801b5d56190b72f6ff77db45b68d0f0c6613ac6dd2e76f61ac7829_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6a5b3ae8d0e804a66a16599655576591ee6eaf5611317e94a45bb83904db9737 = $this->env->getExtension("native_profiler");
        $__internal_6a5b3ae8d0e804a66a16599655576591ee6eaf5611317e94a45bb83904db9737->enter($__internal_6a5b3ae8d0e804a66a16599655576591ee6eaf5611317e94a45bb83904db9737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/edit.html.twig", 3)->display($context);
        
        $__internal_6a5b3ae8d0e804a66a16599655576591ee6eaf5611317e94a45bb83904db9737->leave($__internal_6a5b3ae8d0e804a66a16599655576591ee6eaf5611317e94a45bb83904db9737_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_8cc2aee9844568add37ef65dceba241167dec584098b829ea44cfd1211b47f02 = $this->env->getExtension("native_profiler");
        $__internal_8cc2aee9844568add37ef65dceba241167dec584098b829ea44cfd1211b47f02->enter($__internal_8cc2aee9844568add37ef65dceba241167dec584098b829ea44cfd1211b47f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_8cc2aee9844568add37ef65dceba241167dec584098b829ea44cfd1211b47f02->leave($__internal_8cc2aee9844568add37ef65dceba241167dec584098b829ea44cfd1211b47f02_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_6aaf6befc1f380ba5af374d072072f0d0cec338745c0adac62288ea5df308be2 = $this->env->getExtension("native_profiler");
        $__internal_6aaf6befc1f380ba5af374d072072f0d0cec338745c0adac62288ea5df308be2->enter($__internal_6aaf6befc1f380ba5af374d072072f0d0cec338745c0adac62288ea5df308be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_6aaf6befc1f380ba5af374d072072f0d0cec338745c0adac62288ea5df308be2->leave($__internal_6aaf6befc1f380ba5af374d072072f0d0cec338745c0adac62288ea5df308be2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c8cd1806ae93f374d0ae04f9b167baac13dfbbce07bd0c61386cd0f10d50ad6 = $this->env->getExtension("native_profiler");
        $__internal_8c8cd1806ae93f374d0ae04f9b167baac13dfbbce07bd0c61386cd0f10d50ad6->enter($__internal_8c8cd1806ae93f374d0ae04f9b167baac13dfbbce07bd0c61386cd0f10d50ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_edit", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Contracts:editactions.html.twig", "contracts/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"display_content\">
\t\t\t\t";
        // line 12
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array())) {
            // line 13
            echo "\t\t\t\t\t<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t\t";
            // line 14
            $this->loadTemplate("BoAdminBundle:Contracts:group.html.twig", "contracts/edit.html.twig", 14)->display($context);
            // line 15
            echo "\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array())) > 0))) {
            // line 16
            echo "\t\t\t\t\t<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t\t";
            // line 17
            $this->loadTemplate("BoAdminBundle:Contracts:student.html.twig", "contracts/edit.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t\t";
        }
        echo "\t\t\t
\t\t\t</div>
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 21
        $this->loadTemplate("BoAdminBundle:Contracts:editform.html.twig", "contracts/edit.html.twig", 21)->display($context);
        // line 22
        echo "\t\t\t</div>
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addclient", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("contracts_create_client");
        echo "\" method=\"post\" class=\"style\">
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["client_form"]) ? $context["client_form"] : $this->getContext($context, "client_form")), 'errors');
        echo "
\t\t\t\t\t";
        // line 40
        $this->loadTemplate("BoAdminBundle:Contracts:clientnewform.html.twig", "contracts/edit.html.twig", 40)->display($context);
        // line 41
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["client_form"]) ? $context["client_form"] : $this->getContext($context, "client_form")), 'rest');
        echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<input type=\"submit\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_group\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addgroup", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("contracts_create_group");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 67
        $this->loadTemplate("BoAdminBundle:Contracts:groupnewform.html.twig", "contracts/edit.html.twig", 67)->display($context);
        // line 68
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 71
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
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_8c8cd1806ae93f374d0ae04f9b167baac13dfbbce07bd0c61386cd0f10d50ad6->leave($__internal_8c8cd1806ae93f374d0ae04f9b167baac13dfbbce07bd0c61386cd0f10d50ad6_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e28f040aa0c3675e2375ec23000bf230a225d1abbd5b075d0c87ad0047436bd1 = $this->env->getExtension("native_profiler");
        $__internal_e28f040aa0c3675e2375ec23000bf230a225d1abbd5b075d0c87ad0047436bd1->enter($__internal_e28f040aa0c3675e2375ec23000bf230a225d1abbd5b075d0c87ad0047436bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
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
\t\t\t\$(\".status\").change(function(){
\t\t\t\tvar str=\$(\".status option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tnotes = \$(\".notes\").text();\t\t\t\t
\t\t\t\tif((status==3 || status==5) && notes==null){
\t\t\t\t\talert(\"You have to enter a note for this status. Thank you to do it.\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\".campusclass\").change(function(){
\t\t\t\tvar str=\$(\".campusclass option:selected\");
\t\t\t\tcampus=str.text();
\t\t\t\tvar address = \$(\"#\"+campus).val();
\t\t\t\t\$(\".addressclass\").val(address);\t\t\t\t
\t\t\t\treturn false;
\t\t\t});
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
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_e28f040aa0c3675e2375ec23000bf230a225d1abbd5b075d0c87ad0047436bd1->leave($__internal_e28f040aa0c3675e2375ec23000bf230a225d1abbd5b075d0c87ad0047436bd1_prof);

    }

    public function getTemplateName()
    {
        return "contracts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 190,  363 => 189,  253 => 81,  241 => 80,  229 => 71,  222 => 68,  220 => 67,  216 => 66,  211 => 64,  206 => 62,  185 => 44,  178 => 41,  176 => 40,  172 => 39,  167 => 37,  162 => 35,  147 => 23,  144 => 22,  142 => 21,  135 => 18,  133 => 17,  128 => 16,  125 => 15,  123 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('contracts_edit',{'id':contract.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Contracts:editactions.html.twig"%}*/
/* 			<div class="display_content">*/
/* 				{%if contract.group%}*/
/* 					<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 					{%include "BoAdminBundle:Contracts:group.html.twig"%}*/
/* 				{%elseif contract.students and contract.students|length>0%}*/
/* 					<legend>{{'label.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 					{%include "BoAdminBundle:Contracts:student.html.twig"%}*/
/* 				{%endif%}			*/
/* 			</div>*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Contracts:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
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
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_group" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addgroup'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('contracts_create_group') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(group_form) }}*/
/* 						{%include "BoAdminBundle:Contracts:groupnewform.html.twig"%}*/
/* 					{{ form_rest(group_form) }}*/
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
/* 			$(".status").change(function(){*/
/* 				var str=$(".status option:selected");*/
/* 				status=str.val();*/
/* 				notes = $(".notes").text();				*/
/* 				if((status==3 || status==5) && notes==null){*/
/* 					alert("You have to enter a note for this status. Thank you to do it.");*/
/* 					return false;*/
/* 				}			*/
/* 				return true;*/
/* 			});*/
/* 			$(".campusclass").change(function(){*/
/* 				var str=$(".campusclass option:selected");*/
/* 				campus=str.text();*/
/* 				var address = $("#"+campus).val();*/
/* 				$(".addressclass").val(address);				*/
/* 				return false;*/
/* 			});*/
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
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
