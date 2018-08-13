<?php

/* advisors/edit.html.twig */
class __TwigTemplate_07d99bd26d1fcbe31a34d7de9f276cfde7986c42d13a380c4ad9633f17d7e3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "advisors/edit.html.twig", 1);
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
        $__internal_898de79ad87b551f44eaad08d496ba19912ca845a76a0add124dd3c653bd771e = $this->env->getExtension("native_profiler");
        $__internal_898de79ad87b551f44eaad08d496ba19912ca845a76a0add124dd3c653bd771e->enter($__internal_898de79ad87b551f44eaad08d496ba19912ca845a76a0add124dd3c653bd771e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advisors/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898de79ad87b551f44eaad08d496ba19912ca845a76a0add124dd3c653bd771e->leave($__internal_898de79ad87b551f44eaad08d496ba19912ca845a76a0add124dd3c653bd771e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb40121acb950a21667a1468be1e52feec29f853aa8c0efa90f4bb302d071022 = $this->env->getExtension("native_profiler");
        $__internal_bb40121acb950a21667a1468be1e52feec29f853aa8c0efa90f4bb302d071022->enter($__internal_bb40121acb950a21667a1468be1e52feec29f853aa8c0efa90f4bb302d071022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.advisors", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_bb40121acb950a21667a1468be1e52feec29f853aa8c0efa90f4bb302d071022->leave($__internal_bb40121acb950a21667a1468be1e52feec29f853aa8c0efa90f4bb302d071022_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_dadbf4ed961e41fd0c7fdbc007ba0533b182c293c10fcb72f15550cede541ecf = $this->env->getExtension("native_profiler");
        $__internal_dadbf4ed961e41fd0c7fdbc007ba0533b182c293c10fcb72f15550cede541ecf->enter($__internal_dadbf4ed961e41fd0c7fdbc007ba0533b182c293c10fcb72f15550cede541ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "advisors/edit.html.twig", 3)->display($context);
        
        $__internal_dadbf4ed961e41fd0c7fdbc007ba0533b182c293c10fcb72f15550cede541ecf->leave($__internal_dadbf4ed961e41fd0c7fdbc007ba0533b182c293c10fcb72f15550cede541ecf_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_cd8fa7fd37622d95ed96e4f1d106289317dacaa92439fe8a28b22eaeeda659eb = $this->env->getExtension("native_profiler");
        $__internal_cd8fa7fd37622d95ed96e4f1d106289317dacaa92439fe8a28b22eaeeda659eb->enter($__internal_cd8fa7fd37622d95ed96e4f1d106289317dacaa92439fe8a28b22eaeeda659eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_cd8fa7fd37622d95ed96e4f1d106289317dacaa92439fe8a28b22eaeeda659eb->leave($__internal_cd8fa7fd37622d95ed96e4f1d106289317dacaa92439fe8a28b22eaeeda659eb_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_db2e86afd19bf5d2c185f257958a01c69ee06f389f12bf70892f8f99bdb5d82e = $this->env->getExtension("native_profiler");
        $__internal_db2e86afd19bf5d2c185f257958a01c69ee06f389f12bf70892f8f99bdb5d82e->enter($__internal_db2e86afd19bf5d2c185f257958a01c69ee06f389f12bf70892f8f99bdb5d82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.advisors", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_db2e86afd19bf5d2c185f257958a01c69ee06f389f12bf70892f8f99bdb5d82e->leave($__internal_db2e86afd19bf5d2c185f257958a01c69ee06f389f12bf70892f8f99bdb5d82e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_601ff4e4ab22d7e8572c830533e28bdcc1c3fefa2026bffe89538ceeedfe7a6a = $this->env->getExtension("native_profiler");
        $__internal_601ff4e4ab22d7e8572c830533e28bdcc1c3fefa2026bffe89538ceeedfe7a6a->enter($__internal_601ff4e4ab22d7e8572c830533e28bdcc1c3fefa2026bffe89538ceeedfe7a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("advisors_edit", array("id" => $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Advisors:editactions.html.twig", "advisors/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Advisors:editform.html.twig", "advisors/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_601ff4e4ab22d7e8572c830533e28bdcc1c3fefa2026bffe89538ceeedfe7a6a->leave($__internal_601ff4e4ab22d7e8572c830533e28bdcc1c3fefa2026bffe89538ceeedfe7a6a_prof);

    }

    public function getTemplateName()
    {
        return "advisors/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.advisors'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.advisors'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('advisors_edit',{'id':advisor.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Advisors:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Advisors:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
