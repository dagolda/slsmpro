<?php

/* pricesreference/edit.html.twig */
class __TwigTemplate_568be5188c18a5204bc7a63ca2413594c20de09faeb170a2e83c7fad48e984f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pricesreference/edit.html.twig", 1);
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
        $__internal_0a365a3483ee64a9c26dc320993b59f0c045820ad82da80f51ef2580665a0d93 = $this->env->getExtension("native_profiler");
        $__internal_0a365a3483ee64a9c26dc320993b59f0c045820ad82da80f51ef2580665a0d93->enter($__internal_0a365a3483ee64a9c26dc320993b59f0c045820ad82da80f51ef2580665a0d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pricesreference/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a365a3483ee64a9c26dc320993b59f0c045820ad82da80f51ef2580665a0d93->leave($__internal_0a365a3483ee64a9c26dc320993b59f0c045820ad82da80f51ef2580665a0d93_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff176ed68b09bd4138ee371a21bde04665d00f30322000c244019fb85c34bb92 = $this->env->getExtension("native_profiler");
        $__internal_ff176ed68b09bd4138ee371a21bde04665d00f30322000c244019fb85c34bb92->enter($__internal_ff176ed68b09bd4138ee371a21bde04665d00f30322000c244019fb85c34bb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.pricesreference", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_ff176ed68b09bd4138ee371a21bde04665d00f30322000c244019fb85c34bb92->leave($__internal_ff176ed68b09bd4138ee371a21bde04665d00f30322000c244019fb85c34bb92_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7d7f50aef67319d88f215a9ac1ce841de31ba6047bb2875f38200a15d542174b = $this->env->getExtension("native_profiler");
        $__internal_7d7f50aef67319d88f215a9ac1ce841de31ba6047bb2875f38200a15d542174b->enter($__internal_7d7f50aef67319d88f215a9ac1ce841de31ba6047bb2875f38200a15d542174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "pricesreference/edit.html.twig", 3)->display($context);
        
        $__internal_7d7f50aef67319d88f215a9ac1ce841de31ba6047bb2875f38200a15d542174b->leave($__internal_7d7f50aef67319d88f215a9ac1ce841de31ba6047bb2875f38200a15d542174b_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4165915f11638c8400f003d8374bf80edcff23243299d69c128750ca667291d4 = $this->env->getExtension("native_profiler");
        $__internal_4165915f11638c8400f003d8374bf80edcff23243299d69c128750ca667291d4->enter($__internal_4165915f11638c8400f003d8374bf80edcff23243299d69c128750ca667291d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_4165915f11638c8400f003d8374bf80edcff23243299d69c128750ca667291d4->leave($__internal_4165915f11638c8400f003d8374bf80edcff23243299d69c128750ca667291d4_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_d6d9e496bc77bf4cebea650e286ef9bf07591db624175e8bc75f2f1e7f12ae31 = $this->env->getExtension("native_profiler");
        $__internal_d6d9e496bc77bf4cebea650e286ef9bf07591db624175e8bc75f2f1e7f12ae31->enter($__internal_d6d9e496bc77bf4cebea650e286ef9bf07591db624175e8bc75f2f1e7f12ae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.pricesreference", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_d6d9e496bc77bf4cebea650e286ef9bf07591db624175e8bc75f2f1e7f12ae31->leave($__internal_d6d9e496bc77bf4cebea650e286ef9bf07591db624175e8bc75f2f1e7f12ae31_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5ae5fe3ba12d3bded24c92d11c82ef8f422d89e4e81509e7c6743e9bf0a2550 = $this->env->getExtension("native_profiler");
        $__internal_e5ae5fe3ba12d3bded24c92d11c82ef8f422d89e4e81509e7c6743e9bf0a2550->enter($__internal_e5ae5fe3ba12d3bded24c92d11c82ef8f422d89e4e81509e7c6743e9bf0a2550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pricesreference_edit", array("id" => $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Pricesreference:editactions.html.twig", "pricesreference/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Pricesreference:editform.html.twig", "pricesreference/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_e5ae5fe3ba12d3bded24c92d11c82ef8f422d89e4e81509e7c6743e9bf0a2550->leave($__internal_e5ae5fe3ba12d3bded24c92d11c82ef8f422d89e4e81509e7c6743e9bf0a2550_prof);

    }

    public function getTemplateName()
    {
        return "pricesreference/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.pricesreference'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.pricesreference'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('pricesreference_edit',{'id':pricesreference.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Pricesreference:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Pricesreference:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
