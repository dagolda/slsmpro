<?php

/* rubric/edit.html.twig */
class __TwigTemplate_d7b193ca9badd8c55d5fec911cff4c8362c74d9de0ff6d9545e0bbe1ecf8f38b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rubric/edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3b2ca0193121cbecbd3f2db4eb7d1d6e82d48102fbdef83d13ce49aeaa381a07 = $this->env->getExtension("native_profiler");
        $__internal_3b2ca0193121cbecbd3f2db4eb7d1d6e82d48102fbdef83d13ce49aeaa381a07->enter($__internal_3b2ca0193121cbecbd3f2db4eb7d1d6e82d48102fbdef83d13ce49aeaa381a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rubric/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2ca0193121cbecbd3f2db4eb7d1d6e82d48102fbdef83d13ce49aeaa381a07->leave($__internal_3b2ca0193121cbecbd3f2db4eb7d1d6e82d48102fbdef83d13ce49aeaa381a07_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d50b2d1705743c87ba03206798a6f985b5ce7656ed79d79bbcdf883fea4f37c2 = $this->env->getExtension("native_profiler");
        $__internal_d50b2d1705743c87ba03206798a6f985b5ce7656ed79d79bbcdf883fea4f37c2->enter($__internal_d50b2d1705743c87ba03206798a6f985b5ce7656ed79d79bbcdf883fea4f37c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "rubric/edit.html.twig", 2)->display($context);
        
        $__internal_d50b2d1705743c87ba03206798a6f985b5ce7656ed79d79bbcdf883fea4f37c2->leave($__internal_d50b2d1705743c87ba03206798a6f985b5ce7656ed79d79bbcdf883fea4f37c2_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_df43937a5292fb8d630cbd3103a5edd80530f7d456ddd1fbf5448c82a13301fa = $this->env->getExtension("native_profiler");
        $__internal_df43937a5292fb8d630cbd3103a5edd80530f7d456ddd1fbf5448c82a13301fa->enter($__internal_df43937a5292fb8d630cbd3103a5edd80530f7d456ddd1fbf5448c82a13301fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_df43937a5292fb8d630cbd3103a5edd80530f7d456ddd1fbf5448c82a13301fa->leave($__internal_df43937a5292fb8d630cbd3103a5edd80530f7d456ddd1fbf5448c82a13301fa_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_6ce081611aa54fa5396c1f3faa7e430a3cd4091bc6f7b6adcb1d4a7c0c890b85 = $this->env->getExtension("native_profiler");
        $__internal_6ce081611aa54fa5396c1f3faa7e430a3cd4091bc6f7b6adcb1d4a7c0c890b85->enter($__internal_6ce081611aa54fa5396c1f3faa7e430a3cd4091bc6f7b6adcb1d4a7c0c890b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Rubric edit</h1>";
        
        $__internal_6ce081611aa54fa5396c1f3faa7e430a3cd4091bc6f7b6adcb1d4a7c0c890b85->leave($__internal_6ce081611aa54fa5396c1f3faa7e430a3cd4091bc6f7b6adcb1d4a7c0c890b85_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4cbe522741c2dbf9f50feb0999c5ee85cb0d8cd5048725c0f77e1cab0ff993c = $this->env->getExtension("native_profiler");
        $__internal_f4cbe522741c2dbf9f50feb0999c5ee85cb0d8cd5048725c0f77e1cab0ff993c->enter($__internal_f4cbe522741c2dbf9f50feb0999c5ee85cb0d8cd5048725c0f77e1cab0ff993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubric_edit", array("id" => $this->getAttribute((isset($context["rubric"]) ? $context["rubric"] : $this->getContext($context, "rubric")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Rubric:editactions.html.twig", "rubric/edit.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Rubric:editform.html.twig", "rubric/edit.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t</div>
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_f4cbe522741c2dbf9f50feb0999c5ee85cb0d8cd5048725c0f77e1cab0ff993c->leave($__internal_f4cbe522741c2dbf9f50feb0999c5ee85cb0d8cd5048725c0f77e1cab0ff993c_prof);

    }

    public function getTemplateName()
    {
        return "rubric/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  96 => 12,  94 => 11,  91 => 10,  89 => 9,  85 => 8,  81 => 7,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>Rubric edit</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('rubric_edit',{'id':rubric.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Rubric:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Rubric:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
