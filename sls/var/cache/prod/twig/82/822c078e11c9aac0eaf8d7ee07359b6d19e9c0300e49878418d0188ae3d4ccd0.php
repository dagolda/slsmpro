<?php

/* color/edit.html.twig */
class __TwigTemplate_004909ee538d221f8859eaaa7e6d0f618652050e0df49f3c9cf8c6e642802098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "color/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec5118a9f3402019c2616808ee73dcd6d2c33ebb70697160cde67bdc5c07f626 = $this->env->getExtension("native_profiler");
        $__internal_ec5118a9f3402019c2616808ee73dcd6d2c33ebb70697160cde67bdc5c07f626->enter($__internal_ec5118a9f3402019c2616808ee73dcd6d2c33ebb70697160cde67bdc5c07f626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5118a9f3402019c2616808ee73dcd6d2c33ebb70697160cde67bdc5c07f626->leave($__internal_ec5118a9f3402019c2616808ee73dcd6d2c33ebb70697160cde67bdc5c07f626_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bd933684a1900a2288b7692dd5b0dd303e7ca9906ebfc8244951eaf32e6ef73 = $this->env->getExtension("native_profiler");
        $__internal_5bd933684a1900a2288b7692dd5b0dd303e7ca9906ebfc8244951eaf32e6ef73->enter($__internal_5bd933684a1900a2288b7692dd5b0dd303e7ca9906ebfc8244951eaf32e6ef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.color", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_5bd933684a1900a2288b7692dd5b0dd303e7ca9906ebfc8244951eaf32e6ef73->leave($__internal_5bd933684a1900a2288b7692dd5b0dd303e7ca9906ebfc8244951eaf32e6ef73_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_3050aeb4f74ab9a27803b960aa8805fb780b300b2f61433d5072af54ee7ff3a2 = $this->env->getExtension("native_profiler");
        $__internal_3050aeb4f74ab9a27803b960aa8805fb780b300b2f61433d5072af54ee7ff3a2->enter($__internal_3050aeb4f74ab9a27803b960aa8805fb780b300b2f61433d5072af54ee7ff3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "color/edit.html.twig", 3)->display($context);
        
        $__internal_3050aeb4f74ab9a27803b960aa8805fb780b300b2f61433d5072af54ee7ff3a2->leave($__internal_3050aeb4f74ab9a27803b960aa8805fb780b300b2f61433d5072af54ee7ff3a2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d449bb8268c68632fb049b4af138e70f22b239d84b33b998c6da6f05128f08a0 = $this->env->getExtension("native_profiler");
        $__internal_d449bb8268c68632fb049b4af138e70f22b239d84b33b998c6da6f05128f08a0->enter($__internal_d449bb8268c68632fb049b4af138e70f22b239d84b33b998c6da6f05128f08a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_d449bb8268c68632fb049b4af138e70f22b239d84b33b998c6da6f05128f08a0->leave($__internal_d449bb8268c68632fb049b4af138e70f22b239d84b33b998c6da6f05128f08a0_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ec734868279bdd9b66708e2855a14d193b9db26634bf358e52a00b7b7bef503c = $this->env->getExtension("native_profiler");
        $__internal_ec734868279bdd9b66708e2855a14d193b9db26634bf358e52a00b7b7bef503c->enter($__internal_ec734868279bdd9b66708e2855a14d193b9db26634bf358e52a00b7b7bef503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.color", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ec734868279bdd9b66708e2855a14d193b9db26634bf358e52a00b7b7bef503c->leave($__internal_ec734868279bdd9b66708e2855a14d193b9db26634bf358e52a00b7b7bef503c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a3a5ed867020cc6f723e74d20f8199d4a1b3d8a04e3805ea6a4e7bff20a7d70 = $this->env->getExtension("native_profiler");
        $__internal_8a3a5ed867020cc6f723e74d20f8199d4a1b3d8a04e3805ea6a4e7bff20a7d70->enter($__internal_8a3a5ed867020cc6f723e74d20f8199d4a1b3d8a04e3805ea6a4e7bff20a7d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("color_edit", array("id" => $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Color:editactions.html.twig", "color/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Color:editform.html.twig", "color/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_8a3a5ed867020cc6f723e74d20f8199d4a1b3d8a04e3805ea6a4e7bff20a7d70->leave($__internal_8a3a5ed867020cc6f723e74d20f8199d4a1b3d8a04e3805ea6a4e7bff20a7d70_prof);

    }

    public function getTemplateName()
    {
        return "color/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.color'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.color'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('color_edit',{'id':color.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Color:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Color:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
