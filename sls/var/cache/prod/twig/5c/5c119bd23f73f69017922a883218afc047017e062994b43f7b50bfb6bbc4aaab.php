<?php

/* color/index.html.twig */
class __TwigTemplate_922d9554c0b15465280cf84d14812b12e5bbd4d0b18df9b5c8f1c75a01f1d5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "color/index.html.twig", 1);
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
        $__internal_6e3a630a6252c68c7f407749fab9f78776eb73824c6ca299f4a0851910fb5dce = $this->env->getExtension("native_profiler");
        $__internal_6e3a630a6252c68c7f407749fab9f78776eb73824c6ca299f4a0851910fb5dce->enter($__internal_6e3a630a6252c68c7f407749fab9f78776eb73824c6ca299f4a0851910fb5dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3a630a6252c68c7f407749fab9f78776eb73824c6ca299f4a0851910fb5dce->leave($__internal_6e3a630a6252c68c7f407749fab9f78776eb73824c6ca299f4a0851910fb5dce_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6085cbfbf580835d7db3f45779e7e09476c7d9d0f48dc51ef9525a2ed760f5b1 = $this->env->getExtension("native_profiler");
        $__internal_6085cbfbf580835d7db3f45779e7e09476c7d9d0f48dc51ef9525a2ed760f5b1->enter($__internal_6085cbfbf580835d7db3f45779e7e09476c7d9d0f48dc51ef9525a2ed760f5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.color", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_6085cbfbf580835d7db3f45779e7e09476c7d9d0f48dc51ef9525a2ed760f5b1->leave($__internal_6085cbfbf580835d7db3f45779e7e09476c7d9d0f48dc51ef9525a2ed760f5b1_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_5ba4856d75d93715d530a39d488e14419cf2439a4953230615227d4679b0433c = $this->env->getExtension("native_profiler");
        $__internal_5ba4856d75d93715d530a39d488e14419cf2439a4953230615227d4679b0433c->enter($__internal_5ba4856d75d93715d530a39d488e14419cf2439a4953230615227d4679b0433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "color/index.html.twig", 3)->display($context);
        
        $__internal_5ba4856d75d93715d530a39d488e14419cf2439a4953230615227d4679b0433c->leave($__internal_5ba4856d75d93715d530a39d488e14419cf2439a4953230615227d4679b0433c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0db81080e0154bd12e7cf88ae57663b0ae3b2c718b67cabdd81e0bb3df948532 = $this->env->getExtension("native_profiler");
        $__internal_0db81080e0154bd12e7cf88ae57663b0ae3b2c718b67cabdd81e0bb3df948532->enter($__internal_0db81080e0154bd12e7cf88ae57663b0ae3b2c718b67cabdd81e0bb3df948532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_0db81080e0154bd12e7cf88ae57663b0ae3b2c718b67cabdd81e0bb3df948532->leave($__internal_0db81080e0154bd12e7cf88ae57663b0ae3b2c718b67cabdd81e0bb3df948532_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_b51f72255e701d42be46154c99d9079bf2a0bf45dec30bea35a6367827e7bdba = $this->env->getExtension("native_profiler");
        $__internal_b51f72255e701d42be46154c99d9079bf2a0bf45dec30bea35a6367827e7bdba->enter($__internal_b51f72255e701d42be46154c99d9079bf2a0bf45dec30bea35a6367827e7bdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.color", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b51f72255e701d42be46154c99d9079bf2a0bf45dec30bea35a6367827e7bdba->leave($__internal_b51f72255e701d42be46154c99d9079bf2a0bf45dec30bea35a6367827e7bdba_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4af4d9f44f788627732c07d5fd849c997c885ef3ad0a4ff3904b9c7e1074676f = $this->env->getExtension("native_profiler");
        $__internal_4af4d9f44f788627732c07d5fd849c997c885ef3ad0a4ff3904b9c7e1074676f->enter($__internal_4af4d9f44f788627732c07d5fd849c997c885ef3ad0a4ff3904b9c7e1074676f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Color:actions.html.twig", "color/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_4af4d9f44f788627732c07d5fd849c997c885ef3ad0a4ff3904b9c7e1074676f->leave($__internal_4af4d9f44f788627732c07d5fd849c997c885ef3ad0a4ff3904b9c7e1074676f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_958f4449a553c3407149cd511cc6c170aa2185d712f052a5c6a25d51869d996b = $this->env->getExtension("native_profiler");
        $__internal_958f4449a553c3407149cd511cc6c170aa2185d712f052a5c6a25d51869d996b->enter($__internal_958f4449a553c3407149cd511cc6c170aa2185d712f052a5c6a25d51869d996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Color:tbliste.html.twig", "color/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_color\" role=\"dialog\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.color", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("color_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Color:newform.html.twig", "color/index.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
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
        
        $__internal_958f4449a553c3407149cd511cc6c170aa2185d712f052a5c6a25d51869d996b->leave($__internal_958f4449a553c3407149cd511cc6c170aa2185d712f052a5c6a25d51869d996b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7efc7c3101474d766523fb2574f7682872e78d1557f5f7116ecd6e99983a40ec = $this->env->getExtension("native_profiler");
        $__internal_7efc7c3101474d766523fb2574f7682872e78d1557f5f7116ecd6e99983a40ec->enter($__internal_7efc7c3101474d766523fb2574f7682872e78d1557f5f7116ecd6e99983a40ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_7efc7c3101474d766523fb2574f7682872e78d1557f5f7116ecd6e99983a40ec->leave($__internal_7efc7c3101474d766523fb2574f7682872e78d1557f5f7116ecd6e99983a40ec_prof);

    }

    public function getTemplateName()
    {
        return "color/index.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.color'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.color'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Color:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Color:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_color" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.color'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('color_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Color:newform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
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
