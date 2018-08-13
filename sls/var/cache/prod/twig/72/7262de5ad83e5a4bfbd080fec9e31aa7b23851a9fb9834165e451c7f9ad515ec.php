<?php

/* quiz/index.html.twig */
class __TwigTemplate_7f2a3ad918f3c501eec7d5dd883ea7003e6b881363dcbc7f689349830c367574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "quiz/index.html.twig", 1);
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
        $__internal_bf2f91299a6e7cfe9e23c62139652bee54a1ef5ce70db7b7bdb903a3c4de08af = $this->env->getExtension("native_profiler");
        $__internal_bf2f91299a6e7cfe9e23c62139652bee54a1ef5ce70db7b7bdb903a3c4de08af->enter($__internal_bf2f91299a6e7cfe9e23c62139652bee54a1ef5ce70db7b7bdb903a3c4de08af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf2f91299a6e7cfe9e23c62139652bee54a1ef5ce70db7b7bdb903a3c4de08af->leave($__internal_bf2f91299a6e7cfe9e23c62139652bee54a1ef5ce70db7b7bdb903a3c4de08af_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a7b33d15fb316c4387b574f7e968e6675934ed3c692f328caed7b4ae48ef162 = $this->env->getExtension("native_profiler");
        $__internal_5a7b33d15fb316c4387b574f7e968e6675934ed3c692f328caed7b4ae48ef162->enter($__internal_5a7b33d15fb316c4387b574f7e968e6675934ed3c692f328caed7b4ae48ef162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.quiz", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_5a7b33d15fb316c4387b574f7e968e6675934ed3c692f328caed7b4ae48ef162->leave($__internal_5a7b33d15fb316c4387b574f7e968e6675934ed3c692f328caed7b4ae48ef162_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_34fa3d837d6c8d6f95d41e1383fd516e0775a789d8408794971d42c79472e5e0 = $this->env->getExtension("native_profiler");
        $__internal_34fa3d837d6c8d6f95d41e1383fd516e0775a789d8408794971d42c79472e5e0->enter($__internal_34fa3d837d6c8d6f95d41e1383fd516e0775a789d8408794971d42c79472e5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "quiz/index.html.twig", 3)->display($context);
        
        $__internal_34fa3d837d6c8d6f95d41e1383fd516e0775a789d8408794971d42c79472e5e0->leave($__internal_34fa3d837d6c8d6f95d41e1383fd516e0775a789d8408794971d42c79472e5e0_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ee08f2ab0a77694c9d7ca30e9414084663c16fe520d40e8c8e7b79458b03a119 = $this->env->getExtension("native_profiler");
        $__internal_ee08f2ab0a77694c9d7ca30e9414084663c16fe520d40e8c8e7b79458b03a119->enter($__internal_ee08f2ab0a77694c9d7ca30e9414084663c16fe520d40e8c8e7b79458b03a119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_ee08f2ab0a77694c9d7ca30e9414084663c16fe520d40e8c8e7b79458b03a119->leave($__internal_ee08f2ab0a77694c9d7ca30e9414084663c16fe520d40e8c8e7b79458b03a119_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_57ce7addb5d9ce9a91959b6a52e2a83589fa0dcf6828e3729d49b1faace548c9 = $this->env->getExtension("native_profiler");
        $__internal_57ce7addb5d9ce9a91959b6a52e2a83589fa0dcf6828e3729d49b1faace548c9->enter($__internal_57ce7addb5d9ce9a91959b6a52e2a83589fa0dcf6828e3729d49b1faace548c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.quiz", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_57ce7addb5d9ce9a91959b6a52e2a83589fa0dcf6828e3729d49b1faace548c9->leave($__internal_57ce7addb5d9ce9a91959b6a52e2a83589fa0dcf6828e3729d49b1faace548c9_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9dc25d73ef5b532cfd399c635f236022544a367ab81700cdeaf3d14809c27ad7 = $this->env->getExtension("native_profiler");
        $__internal_9dc25d73ef5b532cfd399c635f236022544a367ab81700cdeaf3d14809c27ad7->enter($__internal_9dc25d73ef5b532cfd399c635f236022544a367ab81700cdeaf3d14809c27ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoQuizBundle:Quiz:actions.html.twig", "quiz/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_9dc25d73ef5b532cfd399c635f236022544a367ab81700cdeaf3d14809c27ad7->leave($__internal_9dc25d73ef5b532cfd399c635f236022544a367ab81700cdeaf3d14809c27ad7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6af13169bc1c8446d9e02c2e7c47d153cfa60cf424ad88283f440ef2889cc561 = $this->env->getExtension("native_profiler");
        $__internal_6af13169bc1c8446d9e02c2e7c47d153cfa60cf424ad88283f440ef2889cc561->enter($__internal_6af13169bc1c8446d9e02c2e7c47d153cfa60cf424ad88283f440ef2889cc561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoQuizBundle:Quiz:tbliste.html.twig", "quiz/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t
\t<!-- begin add quiz creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_quiz\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.quiz", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("quiz_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("BoQuizBundle:Quiz:newform.html.twig", "quiz/index.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end quiz creation form by modal dialog-->

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "\t
";
        
        $__internal_6af13169bc1c8446d9e02c2e7c47d153cfa60cf424ad88283f440ef2889cc561->leave($__internal_6af13169bc1c8446d9e02c2e7c47d153cfa60cf424ad88283f440ef2889cc561_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32fc3b8211d70fb04e0f55b0757baf4a77d91f7af77f6a9e1f20d3f9f9e9ebc6 = $this->env->getExtension("native_profiler");
        $__internal_32fc3b8211d70fb04e0f55b0757baf4a77d91f7af77f6a9e1f20d3f9f9e9ebc6->enter($__internal_32fc3b8211d70fb04e0f55b0757baf4a77d91f7af77f6a9e1f20d3f9f9e9ebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_32fc3b8211d70fb04e0f55b0757baf4a77d91f7af77f6a9e1f20d3f9f9e9ebc6->leave($__internal_32fc3b8211d70fb04e0f55b0757baf4a77d91f7af77f6a9e1f20d3f9f9e9ebc6_prof);

    }

    public function getTemplateName()
    {
        return "quiz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 47,  196 => 46,  190 => 45,  182 => 48,  180 => 45,  167 => 35,  163 => 34,  156 => 31,  154 => 30,  150 => 29,  145 => 27,  138 => 25,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.quiz'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.quiz'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoQuizBundle:Quiz:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoQuizBundle:Quiz:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add quiz creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_quiz" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.quiz'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('quiz_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoQuizBundle:Quiz:newform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end quiz creation form by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}	*/
/* {% endblock %}*/
/* */
