<?php

/* typecontract/index.html.twig */
class __TwigTemplate_5abacf059e039a333de5702bfcf1e1589405f13cf55a19b9092868b8b416ab0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typecontract/index.html.twig", 1);
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
        $__internal_239d18fef5e833837eaa67d95e218d469f116cb64983d487613168a3d6357aa5 = $this->env->getExtension("native_profiler");
        $__internal_239d18fef5e833837eaa67d95e218d469f116cb64983d487613168a3d6357aa5->enter($__internal_239d18fef5e833837eaa67d95e218d469f116cb64983d487613168a3d6357aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecontract/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239d18fef5e833837eaa67d95e218d469f116cb64983d487613168a3d6357aa5->leave($__internal_239d18fef5e833837eaa67d95e218d469f116cb64983d487613168a3d6357aa5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e96a25217e9ea5e677461ff1ba64c9eef537639e5486565d37eda7a1c957773 = $this->env->getExtension("native_profiler");
        $__internal_1e96a25217e9ea5e677461ff1ba64c9eef537639e5486565d37eda7a1c957773->enter($__internal_1e96a25217e9ea5e677461ff1ba64c9eef537639e5486565d37eda7a1c957773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.typecontract", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_1e96a25217e9ea5e677461ff1ba64c9eef537639e5486565d37eda7a1c957773->leave($__internal_1e96a25217e9ea5e677461ff1ba64c9eef537639e5486565d37eda7a1c957773_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7c7a24caf8a76d8a3161f50c6b154560945ae042ad40a7e91cd7ec61e743a012 = $this->env->getExtension("native_profiler");
        $__internal_7c7a24caf8a76d8a3161f50c6b154560945ae042ad40a7e91cd7ec61e743a012->enter($__internal_7c7a24caf8a76d8a3161f50c6b154560945ae042ad40a7e91cd7ec61e743a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "typecontract/index.html.twig", 3)->display($context);
        
        $__internal_7c7a24caf8a76d8a3161f50c6b154560945ae042ad40a7e91cd7ec61e743a012->leave($__internal_7c7a24caf8a76d8a3161f50c6b154560945ae042ad40a7e91cd7ec61e743a012_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7148bd201701e7783296450009a18cd8e86086c2d00cfcf3075f6918efc2a306 = $this->env->getExtension("native_profiler");
        $__internal_7148bd201701e7783296450009a18cd8e86086c2d00cfcf3075f6918efc2a306->enter($__internal_7148bd201701e7783296450009a18cd8e86086c2d00cfcf3075f6918efc2a306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_7148bd201701e7783296450009a18cd8e86086c2d00cfcf3075f6918efc2a306->leave($__internal_7148bd201701e7783296450009a18cd8e86086c2d00cfcf3075f6918efc2a306_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_f22acf435be0540a22f6a5b3ef6d015698d6047b2081351d838b5708c16cf7f7 = $this->env->getExtension("native_profiler");
        $__internal_f22acf435be0540a22f6a5b3ef6d015698d6047b2081351d838b5708c16cf7f7->enter($__internal_f22acf435be0540a22f6a5b3ef6d015698d6047b2081351d838b5708c16cf7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.typecontract", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_f22acf435be0540a22f6a5b3ef6d015698d6047b2081351d838b5708c16cf7f7->leave($__internal_f22acf435be0540a22f6a5b3ef6d015698d6047b2081351d838b5708c16cf7f7_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fd9c4b35cf21ba698c4cf0d5d01b52172969f9f194eef27c7a443878bfdf02bb = $this->env->getExtension("native_profiler");
        $__internal_fd9c4b35cf21ba698c4cf0d5d01b52172969f9f194eef27c7a443878bfdf02bb->enter($__internal_fd9c4b35cf21ba698c4cf0d5d01b52172969f9f194eef27c7a443878bfdf02bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Typecontract:actions.html.twig", "typecontract/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_fd9c4b35cf21ba698c4cf0d5d01b52172969f9f194eef27c7a443878bfdf02bb->leave($__internal_fd9c4b35cf21ba698c4cf0d5d01b52172969f9f194eef27c7a443878bfdf02bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5482d7c5a46daf6a028950030c44977a7f7b2a15be0b008d166bf37da6c00533 = $this->env->getExtension("native_profiler");
        $__internal_5482d7c5a46daf6a028950030c44977a7f7b2a15be0b008d166bf37da6c00533->enter($__internal_5482d7c5a46daf6a028950030c44977a7f7b2a15be0b008d166bf37da6c00533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Typecontract:tbliste.html.twig", "typecontract/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_type\" role=\"dialog\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.typecontract", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("typecontract_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Typecontract:modalform.html.twig", "typecontract/index.html.twig", 28)->display($context);
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
        
        $__internal_5482d7c5a46daf6a028950030c44977a7f7b2a15be0b008d166bf37da6c00533->leave($__internal_5482d7c5a46daf6a028950030c44977a7f7b2a15be0b008d166bf37da6c00533_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af976fbcc3b3a02f5eca62122e28fd00bb7b8ac9f82c3ae77f7af047f553edfd = $this->env->getExtension("native_profiler");
        $__internal_af976fbcc3b3a02f5eca62122e28fd00bb7b8ac9f82c3ae77f7af047f553edfd->enter($__internal_af976fbcc3b3a02f5eca62122e28fd00bb7b8ac9f82c3ae77f7af047f553edfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_af976fbcc3b3a02f5eca62122e28fd00bb7b8ac9f82c3ae77f7af047f553edfd->leave($__internal_af976fbcc3b3a02f5eca62122e28fd00bb7b8ac9f82c3ae77f7af047f553edfd_prof);

    }

    public function getTemplateName()
    {
        return "typecontract/index.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.typecontract'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.typecontract'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Typecontract:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Typecontract:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_type" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.typecontract'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('typecontract_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 							{%include "BoAdminBundle:Typecontract:modalform.html.twig"%}*/
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
