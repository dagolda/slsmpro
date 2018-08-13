<?php

/* agenda/edit.html.twig */
class __TwigTemplate_e39a29fc0059e99a919f33739a1dd1b9bac7b1efd753f2872f90f661e1d32aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agenda/edit.html.twig", 1);
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
        $__internal_a251f12b1aa8ffc1fe5767c3176a0b1e02f230da752ec581ca955c79b260aa07 = $this->env->getExtension("native_profiler");
        $__internal_a251f12b1aa8ffc1fe5767c3176a0b1e02f230da752ec581ca955c79b260aa07->enter($__internal_a251f12b1aa8ffc1fe5767c3176a0b1e02f230da752ec581ca955c79b260aa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agenda/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a251f12b1aa8ffc1fe5767c3176a0b1e02f230da752ec581ca955c79b260aa07->leave($__internal_a251f12b1aa8ffc1fe5767c3176a0b1e02f230da752ec581ca955c79b260aa07_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6094a98c68e47f5cc5b620413fddf8fa5be1125302f4e4347b48b450560a970 = $this->env->getExtension("native_profiler");
        $__internal_a6094a98c68e47f5cc5b620413fddf8fa5be1125302f4e4347b48b450560a970->enter($__internal_a6094a98c68e47f5cc5b620413fddf8fa5be1125302f4e4347b48b450560a970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_a6094a98c68e47f5cc5b620413fddf8fa5be1125302f4e4347b48b450560a970->leave($__internal_a6094a98c68e47f5cc5b620413fddf8fa5be1125302f4e4347b48b450560a970_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_44f776fb0bb62c06c9f32f32710c1ab72ef4ec5f5c12b6df782c76b2a05b3096 = $this->env->getExtension("native_profiler");
        $__internal_44f776fb0bb62c06c9f32f32710c1ab72ef4ec5f5c12b6df782c76b2a05b3096->enter($__internal_44f776fb0bb62c06c9f32f32710c1ab72ef4ec5f5c12b6df782c76b2a05b3096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "agenda/edit.html.twig", 3)->display($context);
        
        $__internal_44f776fb0bb62c06c9f32f32710c1ab72ef4ec5f5c12b6df782c76b2a05b3096->leave($__internal_44f776fb0bb62c06c9f32f32710c1ab72ef4ec5f5c12b6df782c76b2a05b3096_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9a5ab4dc85e6e707c99c84b2aa5fa1d4ffb75fcc3fa1d02e91a5b09e6705f2bd = $this->env->getExtension("native_profiler");
        $__internal_9a5ab4dc85e6e707c99c84b2aa5fa1d4ffb75fcc3fa1d02e91a5b09e6705f2bd->enter($__internal_9a5ab4dc85e6e707c99c84b2aa5fa1d4ffb75fcc3fa1d02e91a5b09e6705f2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_9a5ab4dc85e6e707c99c84b2aa5fa1d4ffb75fcc3fa1d02e91a5b09e6705f2bd->leave($__internal_9a5ab4dc85e6e707c99c84b2aa5fa1d4ffb75fcc3fa1d02e91a5b09e6705f2bd_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_29a1a054939460b07184228d0ceee4a0b3d06617131a55d54f43f46f87fcf369 = $this->env->getExtension("native_profiler");
        $__internal_29a1a054939460b07184228d0ceee4a0b3d06617131a55d54f43f46f87fcf369->enter($__internal_29a1a054939460b07184228d0ceee4a0b3d06617131a55d54f43f46f87fcf369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_29a1a054939460b07184228d0ceee4a0b3d06617131a55d54f43f46f87fcf369->leave($__internal_29a1a054939460b07184228d0ceee4a0b3d06617131a55d54f43f46f87fcf369_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_00fc5bef9bf8593872621e3d82feee2bb9eb25ba7a1187a01e38d8ac59139147 = $this->env->getExtension("native_profiler");
        $__internal_00fc5bef9bf8593872621e3d82feee2bb9eb25ba7a1187a01e38d8ac59139147->enter($__internal_00fc5bef9bf8593872621e3d82feee2bb9eb25ba7a1187a01e38d8ac59139147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_edit", array("id" => $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Agenda:editactions.html.twig", "agenda/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t\t<div class=\"show_content\">
\t\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Agenda:editform.html.twig", "agenda/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
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
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_00fc5bef9bf8593872621e3d82feee2bb9eb25ba7a1187a01e38d8ac59139147->leave($__internal_00fc5bef9bf8593872621e3d82feee2bb9eb25ba7a1187a01e38d8ac59139147_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_321d1554ed165251baf84340adbad3d3007631cc9d910a4a95fe46b684a8df59 = $this->env->getExtension("native_profiler");
        $__internal_321d1554ed165251baf84340adbad3d3007631cc9d910a4a95fe46b684a8df59->enter($__internal_321d1554ed165251baf84340adbad3d3007631cc9d910a4a95fe46b684a8df59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_321d1554ed165251baf84340adbad3d3007631cc9d910a4a95fe46b684a8df59->leave($__internal_321d1554ed165251baf84340adbad3d3007631cc9d910a4a95fe46b684a8df59_prof);

    }

    public function getTemplateName()
    {
        return "agenda/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 44,  179 => 43,  167 => 42,  156 => 34,  152 => 33,  148 => 32,  142 => 29,  136 => 26,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.teacherschedule'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.teacherschedule'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('agenda_edit',{'id':schedule.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 				{%include "BoAdminBundle:Agenda:editactions.html.twig"%}*/
/* 				<div class="show_content">*/
/* 					{%include "BoAdminBundle:Agenda:editform.html.twig"%}*/
/* 				</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
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
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
