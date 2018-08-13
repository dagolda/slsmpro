<?php

/* rubric/subedit.html.twig */
class __TwigTemplate_2f4e724188caaf21f5c76d6ca734c5852d983db5111023a18dab95614bc74c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rubric/subedit.html.twig", 1);
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
        $__internal_3e8f6d933e91abd66244412a6f2002437d36681649034d74d37893eb48bdd998 = $this->env->getExtension("native_profiler");
        $__internal_3e8f6d933e91abd66244412a6f2002437d36681649034d74d37893eb48bdd998->enter($__internal_3e8f6d933e91abd66244412a6f2002437d36681649034d74d37893eb48bdd998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rubric/subedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e8f6d933e91abd66244412a6f2002437d36681649034d74d37893eb48bdd998->leave($__internal_3e8f6d933e91abd66244412a6f2002437d36681649034d74d37893eb48bdd998_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_50832631e3937bec3179ed7b6bf9a9243a25d2ac4ca927cf91a2892e02a860d4 = $this->env->getExtension("native_profiler");
        $__internal_50832631e3937bec3179ed7b6bf9a9243a25d2ac4ca927cf91a2892e02a860d4->enter($__internal_50832631e3937bec3179ed7b6bf9a9243a25d2ac4ca927cf91a2892e02a860d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_50832631e3937bec3179ed7b6bf9a9243a25d2ac4ca927cf91a2892e02a860d4->leave($__internal_50832631e3937bec3179ed7b6bf9a9243a25d2ac4ca927cf91a2892e02a860d4_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_977cdfdd956785ddc85735219126b1b20bc4de9e4b9e8b98eea8d61b9a729b84 = $this->env->getExtension("native_profiler");
        $__internal_977cdfdd956785ddc85735219126b1b20bc4de9e4b9e8b98eea8d61b9a729b84->enter($__internal_977cdfdd956785ddc85735219126b1b20bc4de9e4b9e8b98eea8d61b9a729b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "rubric/subedit.html.twig", 3)->display($context);
        
        $__internal_977cdfdd956785ddc85735219126b1b20bc4de9e4b9e8b98eea8d61b9a729b84->leave($__internal_977cdfdd956785ddc85735219126b1b20bc4de9e4b9e8b98eea8d61b9a729b84_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3f0ec75b0afef580aa903a887f88e3feafc55140569538ef7c84e868e8fabb8b = $this->env->getExtension("native_profiler");
        $__internal_3f0ec75b0afef580aa903a887f88e3feafc55140569538ef7c84e868e8fabb8b->enter($__internal_3f0ec75b0afef580aa903a887f88e3feafc55140569538ef7c84e868e8fabb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_3f0ec75b0afef580aa903a887f88e3feafc55140569538ef7c84e868e8fabb8b->leave($__internal_3f0ec75b0afef580aa903a887f88e3feafc55140569538ef7c84e868e8fabb8b_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_fbcb2c88903def20a6df50708c3aec21188617d69b3c4dda05f8211894e07725 = $this->env->getExtension("native_profiler");
        $__internal_fbcb2c88903def20a6df50708c3aec21188617d69b3c4dda05f8211894e07725->enter($__internal_fbcb2c88903def20a6df50708c3aec21188617d69b3c4dda05f8211894e07725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_fbcb2c88903def20a6df50708c3aec21188617d69b3c4dda05f8211894e07725->leave($__internal_fbcb2c88903def20a6df50708c3aec21188617d69b3c4dda05f8211894e07725_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9209b33883a7de00d441b7fcc9173691bb78b881c98f1f34303f835ad0cea3ca = $this->env->getExtension("native_profiler");
        $__internal_9209b33883a7de00d441b7fcc9173691bb78b881c98f1f34303f835ad0cea3ca->enter($__internal_9209b33883a7de00d441b7fcc9173691bb78b881c98f1f34303f835ad0cea3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subrubric_edit", array("id" => $this->getAttribute((isset($context["subrubric"]) ? $context["subrubric"] : $this->getContext($context, "subrubric")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Rubric:subeditactions.html.twig", "rubric/subedit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Rubric:subeditform.html.twig", "rubric/subedit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_9209b33883a7de00d441b7fcc9173691bb78b881c98f1f34303f835ad0cea3ca->leave($__internal_9209b33883a7de00d441b7fcc9173691bb78b881c98f1f34303f835ad0cea3ca_prof);

    }

    public function getTemplateName()
    {
        return "rubric/subedit.html.twig";
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
/* {% block title %}{{parent()}}-{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('subrubric_edit',{'id':subrubric.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Rubric:subeditactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Rubric:subeditform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
