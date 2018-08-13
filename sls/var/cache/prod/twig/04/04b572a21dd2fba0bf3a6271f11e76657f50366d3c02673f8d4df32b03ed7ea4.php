<?php

/* BoStudentBundle:Tickets:index.html.twig */
class __TwigTemplate_9147857778ca36943a9d9b7225ddc9fb193c0e86d44e0dd30a36701eb75ae109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("student.html.twig", "BoStudentBundle:Tickets:index.html.twig", 1);
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
        return "student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44eb6ff7f81986d14dbe102a5f77d614837dcd40649932dac228ede34534d094 = $this->env->getExtension("native_profiler");
        $__internal_44eb6ff7f81986d14dbe102a5f77d614837dcd40649932dac228ede34534d094->enter($__internal_44eb6ff7f81986d14dbe102a5f77d614837dcd40649932dac228ede34534d094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Tickets:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44eb6ff7f81986d14dbe102a5f77d614837dcd40649932dac228ede34534d094->leave($__internal_44eb6ff7f81986d14dbe102a5f77d614837dcd40649932dac228ede34534d094_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_864f4f7ceca62fd1a63b91b8678bdcabd45d5b5275adfe3df4f2d82de3a1308c = $this->env->getExtension("native_profiler");
        $__internal_864f4f7ceca62fd1a63b91b8678bdcabd45d5b5275adfe3df4f2d82de3a1308c->enter($__internal_864f4f7ceca62fd1a63b91b8678bdcabd45d5b5275adfe3df4f2d82de3a1308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_864f4f7ceca62fd1a63b91b8678bdcabd45d5b5275adfe3df4f2d82de3a1308c->leave($__internal_864f4f7ceca62fd1a63b91b8678bdcabd45d5b5275adfe3df4f2d82de3a1308c_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7180b448f1c9a4b1a4f5cbb9e48a7a6dac3ddcc083a511f5c7a5ca24ffcc33cf = $this->env->getExtension("native_profiler");
        $__internal_7180b448f1c9a4b1a4f5cbb9e48a7a6dac3ddcc083a511f5c7a5ca24ffcc33cf->enter($__internal_7180b448f1c9a4b1a4f5cbb9e48a7a6dac3ddcc083a511f5c7a5ca24ffcc33cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoStudentBundle:Default:request.html.twig", "BoStudentBundle:Tickets:index.html.twig", 3)->display($context);
        
        $__internal_7180b448f1c9a4b1a4f5cbb9e48a7a6dac3ddcc083a511f5c7a5ca24ffcc33cf->leave($__internal_7180b448f1c9a4b1a4f5cbb9e48a7a6dac3ddcc083a511f5c7a5ca24ffcc33cf_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_cd83eee557654897a9002400f77d4cc7b3389cae5a3c6c478589f87a5abcfc30 = $this->env->getExtension("native_profiler");
        $__internal_cd83eee557654897a9002400f77d4cc7b3389cae5a3c6c478589f87a5abcfc30->enter($__internal_cd83eee557654897a9002400f77d4cc7b3389cae5a3c6c478589f87a5abcfc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if ((array_key_exists("student", $context) && ((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")) != null))) {
            $this->loadTemplate("BoStudentBundle:Default:rightshow.html.twig", "BoStudentBundle:Tickets:index.html.twig", 4)->display($context);
        }
        
        $__internal_cd83eee557654897a9002400f77d4cc7b3389cae5a3c6c478589f87a5abcfc30->leave($__internal_cd83eee557654897a9002400f77d4cc7b3389cae5a3c6c478589f87a5abcfc30_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ba07312466e739da22ef6e319cf9d01552e3d95f61211ddb61000d0383920d11 = $this->env->getExtension("native_profiler");
        $__internal_ba07312466e739da22ef6e319cf9d01552e3d95f61211ddb61000d0383920d11->enter($__internal_ba07312466e739da22ef6e319cf9d01552e3d95f61211ddb61000d0383920d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ba07312466e739da22ef6e319cf9d01552e3d95f61211ddb61000d0383920d11->leave($__internal_ba07312466e739da22ef6e319cf9d01552e3d95f61211ddb61000d0383920d11_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b02988fe0e21e0bd40c9bd4db0ec07c6d05154bed0473a902ee385dee8899a47 = $this->env->getExtension("native_profiler");
        $__internal_b02988fe0e21e0bd40c9bd4db0ec07c6d05154bed0473a902ee385dee8899a47->enter($__internal_b02988fe0e21e0bd40c9bd4db0ec07c6d05154bed0473a902ee385dee8899a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoStudentBundle:Tickets:actions.html.twig", "BoStudentBundle:Tickets:index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_b02988fe0e21e0bd40c9bd4db0ec07c6d05154bed0473a902ee385dee8899a47->leave($__internal_b02988fe0e21e0bd40c9bd4db0ec07c6d05154bed0473a902ee385dee8899a47_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_87ca3449dae9c9eddb78e7d07838092187c34cd09044cef9b403b59980d59a65 = $this->env->getExtension("native_profiler");
        $__internal_87ca3449dae9c9eddb78e7d07838092187c34cd09044cef9b403b59980d59a65->enter($__internal_87ca3449dae9c9eddb78e7d07838092187c34cd09044cef9b403b59980d59a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 11
        $this->loadTemplate("BoStudentBundle:Tickets:tbliste.html.twig", "BoStudentBundle:Tickets:index.html.twig", 11)->display($context);
        // line 12
        echo "\t</div>
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"add_ticket\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addticket", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("student_tickets_new");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 27
        $this->loadTemplate("BoStudentBundle:Tickets:newform.html.twig", "BoStudentBundle:Tickets:index.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_87ca3449dae9c9eddb78e7d07838092187c34cd09044cef9b403b59980d59a65->leave($__internal_87ca3449dae9c9eddb78e7d07838092187c34cd09044cef9b403b59980d59a65_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c04ea3037559dedff01f7a0e4a712976be024f8e356055a8032b3be324689fd7 = $this->env->getExtension("native_profiler");
        $__internal_c04ea3037559dedff01f7a0e4a712976be024f8e356055a8032b3be324689fd7->enter($__internal_c04ea3037559dedff01f7a0e4a712976be024f8e356055a8032b3be324689fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script>
\t\t\t\$(\".close_modal_add\").click(function(){
\t\t\t\t\$('#add_ticket').modal('hide');
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_c04ea3037559dedff01f7a0e4a712976be024f8e356055a8032b3be324689fd7->leave($__internal_c04ea3037559dedff01f7a0e4a712976be024f8e356055a8032b3be324689fd7_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Tickets:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 47,  194 => 46,  187 => 41,  175 => 40,  164 => 32,  160 => 31,  153 => 28,  151 => 27,  147 => 26,  142 => 24,  137 => 22,  125 => 12,  123 => 11,  120 => 10,  114 => 9,  104 => 7,  98 => 6,  82 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'student.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoStudentBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if student is defined and student!=null%}{%include "BoStudentBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoStudentBundle:Tickets:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoStudentBundle:Tickets:tbliste.html.twig"%}*/
/* 	</div>*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="add_ticket" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'label.addticket'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('student_tickets_new') }}" enctype="multipart/form-data" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoStudentBundle:Tickets:newform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(".close_modal_add").click(function(){*/
/* 				$('#add_ticket').modal('hide');*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
