<?php

/* BoAdvisorsBundle:Help:index.html.twig */
class __TwigTemplate_97e1820c12e9ca3bc1348437fc48b6f179d18e12428de72099513ebbb0447f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Help:index.html.twig", 1);
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
        $__internal_f4c2e81cf3fe31f9c026f2422366e6b507ffb93fd13dc514a42c8536c7913a61 = $this->env->getExtension("native_profiler");
        $__internal_f4c2e81cf3fe31f9c026f2422366e6b507ffb93fd13dc514a42c8536c7913a61->enter($__internal_f4c2e81cf3fe31f9c026f2422366e6b507ffb93fd13dc514a42c8536c7913a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Help:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c2e81cf3fe31f9c026f2422366e6b507ffb93fd13dc514a42c8536c7913a61->leave($__internal_f4c2e81cf3fe31f9c026f2422366e6b507ffb93fd13dc514a42c8536c7913a61_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_30364011b3e5504434a3129dfe7a1be54b61cf3887b13e54546f22977e849ab5 = $this->env->getExtension("native_profiler");
        $__internal_30364011b3e5504434a3129dfe7a1be54b61cf3887b13e54546f22977e849ab5->enter($__internal_30364011b3e5504434a3129dfe7a1be54b61cf3887b13e54546f22977e849ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.help", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_30364011b3e5504434a3129dfe7a1be54b61cf3887b13e54546f22977e849ab5->leave($__internal_30364011b3e5504434a3129dfe7a1be54b61cf3887b13e54546f22977e849ab5_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9d224fce97ad493e1848a50b4e831c54504ae29f7bd82a5574be487ca7cf787c = $this->env->getExtension("native_profiler");
        $__internal_9d224fce97ad493e1848a50b4e831c54504ae29f7bd82a5574be487ca7cf787c->enter($__internal_9d224fce97ad493e1848a50b4e831c54504ae29f7bd82a5574be487ca7cf787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Help:index.html.twig", 3)->display($context);
        
        $__internal_9d224fce97ad493e1848a50b4e831c54504ae29f7bd82a5574be487ca7cf787c->leave($__internal_9d224fce97ad493e1848a50b4e831c54504ae29f7bd82a5574be487ca7cf787c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e11eb4f56348af95d454e1c0f8e99415c6a1c348b486accc7dcdcb3d8383c17c = $this->env->getExtension("native_profiler");
        $__internal_e11eb4f56348af95d454e1c0f8e99415c6a1c348b486accc7dcdcb3d8383c17c->enter($__internal_e11eb4f56348af95d454e1c0f8e99415c6a1c348b486accc7dcdcb3d8383c17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_e11eb4f56348af95d454e1c0f8e99415c6a1c348b486accc7dcdcb3d8383c17c->leave($__internal_e11eb4f56348af95d454e1c0f8e99415c6a1c348b486accc7dcdcb3d8383c17c_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_2afb8d693477bbd4898a3b0aa2ea2dabb35e31265460a81d7c68738d8f4184a3 = $this->env->getExtension("native_profiler");
        $__internal_2afb8d693477bbd4898a3b0aa2ea2dabb35e31265460a81d7c68738d8f4184a3->enter($__internal_2afb8d693477bbd4898a3b0aa2ea2dabb35e31265460a81d7c68738d8f4184a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.help", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_2afb8d693477bbd4898a3b0aa2ea2dabb35e31265460a81d7c68738d8f4184a3->leave($__internal_2afb8d693477bbd4898a3b0aa2ea2dabb35e31265460a81d7c68738d8f4184a3_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_733143c9f878492d122bc48bd9af76c8de1f1831b3f58bf267f41ba4cd3fdbe9 = $this->env->getExtension("native_profiler");
        $__internal_733143c9f878492d122bc48bd9af76c8de1f1831b3f58bf267f41ba4cd3fdbe9->enter($__internal_733143c9f878492d122bc48bd9af76c8de1f1831b3f58bf267f41ba4cd3fdbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Help:actions.html.twig", "BoAdvisorsBundle:Help:index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_733143c9f878492d122bc48bd9af76c8de1f1831b3f58bf267f41ba4cd3fdbe9->leave($__internal_733143c9f878492d122bc48bd9af76c8de1f1831b3f58bf267f41ba4cd3fdbe9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7726449d9315142e5ccd4c41d979ac52313d2ee12694cb9a3ef204cb60c77611 = $this->env->getExtension("native_profiler");
        $__internal_7726449d9315142e5ccd4c41d979ac52313d2ee12694cb9a3ef204cb60c77611->enter($__internal_7726449d9315142e5ccd4c41d979ac52313d2ee12694cb9a3ef204cb60c77611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Help:tbliste.html.twig", "BoAdvisorsBundle:Help:index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_help\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.help", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("dash_help_new");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdvisorsBundle:Help:modalform.html.twig", "BoAdvisorsBundle:Help:index.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" id=\"btn_submit\" value=\"";
        // line 32
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
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_7726449d9315142e5ccd4c41d979ac52313d2ee12694cb9a3ef204cb60c77611->leave($__internal_7726449d9315142e5ccd4c41d979ac52313d2ee12694cb9a3ef204cb60c77611_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e2d8021c22f523b9b19fb3c501cef8c3c665ddfe25245f42d19e994a0a2cefd = $this->env->getExtension("native_profiler");
        $__internal_3e2d8021c22f523b9b19fb3c501cef8c3c665ddfe25245f42d19e994a0a2cefd->enter($__internal_3e2d8021c22f523b9b19fb3c501cef8c3c665ddfe25245f42d19e994a0a2cefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_3e2d8021c22f523b9b19fb3c501cef8c3c665ddfe25245f42d19e994a0a2cefd->leave($__internal_3e2d8021c22f523b9b19fb3c501cef8c3c665ddfe25245f42d19e994a0a2cefd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Help:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 42,  184 => 41,  172 => 40,  161 => 32,  154 => 29,  152 => 28,  148 => 27,  143 => 25,  136 => 23,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.help'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.help'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Help:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Help:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_help" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.help'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('dash_help_new') }}" enctype="multipart/form-data" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdvisorsBundle:Help:modalform.html.twig"%}*/
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
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
