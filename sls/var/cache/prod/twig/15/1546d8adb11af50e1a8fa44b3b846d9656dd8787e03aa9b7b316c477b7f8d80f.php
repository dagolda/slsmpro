<?php

/* status/new.html.twig */
class __TwigTemplate_372dff3b85c2faf4291d9ddcc56ac7f411f5c334f9ea5caf6ae7e1a646406d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "status/new.html.twig", 1);
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
        $__internal_216e07548bfcd5a40a3ccfa0eed46ce5df4478377e2268b120e8a81d477c7eef = $this->env->getExtension("native_profiler");
        $__internal_216e07548bfcd5a40a3ccfa0eed46ce5df4478377e2268b120e8a81d477c7eef->enter($__internal_216e07548bfcd5a40a3ccfa0eed46ce5df4478377e2268b120e8a81d477c7eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "status/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_216e07548bfcd5a40a3ccfa0eed46ce5df4478377e2268b120e8a81d477c7eef->leave($__internal_216e07548bfcd5a40a3ccfa0eed46ce5df4478377e2268b120e8a81d477c7eef_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_61e52e7a7558364a9c810ee98c5cbea677f1c956bffed4fb7444797efcd9aac5 = $this->env->getExtension("native_profiler");
        $__internal_61e52e7a7558364a9c810ee98c5cbea677f1c956bffed4fb7444797efcd9aac5->enter($__internal_61e52e7a7558364a9c810ee98c5cbea677f1c956bffed4fb7444797efcd9aac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.status", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_61e52e7a7558364a9c810ee98c5cbea677f1c956bffed4fb7444797efcd9aac5->leave($__internal_61e52e7a7558364a9c810ee98c5cbea677f1c956bffed4fb7444797efcd9aac5_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6ec835cc0ab77058e6a1ad0f33faf18978fab159c307d236f41ea9db1587adaa = $this->env->getExtension("native_profiler");
        $__internal_6ec835cc0ab77058e6a1ad0f33faf18978fab159c307d236f41ea9db1587adaa->enter($__internal_6ec835cc0ab77058e6a1ad0f33faf18978fab159c307d236f41ea9db1587adaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "status/new.html.twig", 3)->display($context);
        
        $__internal_6ec835cc0ab77058e6a1ad0f33faf18978fab159c307d236f41ea9db1587adaa->leave($__internal_6ec835cc0ab77058e6a1ad0f33faf18978fab159c307d236f41ea9db1587adaa_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5e54f879ca4e32144c33024aff20e42e1c6dc9d92b0e8bd1e6217f385d4a9085 = $this->env->getExtension("native_profiler");
        $__internal_5e54f879ca4e32144c33024aff20e42e1c6dc9d92b0e8bd1e6217f385d4a9085->enter($__internal_5e54f879ca4e32144c33024aff20e42e1c6dc9d92b0e8bd1e6217f385d4a9085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_5e54f879ca4e32144c33024aff20e42e1c6dc9d92b0e8bd1e6217f385d4a9085->leave($__internal_5e54f879ca4e32144c33024aff20e42e1c6dc9d92b0e8bd1e6217f385d4a9085_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_b3fdc44544f54d5fddb6e6d1eff8eefccc5871e922cdfea7f72c4266c0d0a896 = $this->env->getExtension("native_profiler");
        $__internal_b3fdc44544f54d5fddb6e6d1eff8eefccc5871e922cdfea7f72c4266c0d0a896->enter($__internal_b3fdc44544f54d5fddb6e6d1eff8eefccc5871e922cdfea7f72c4266c0d0a896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.status", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b3fdc44544f54d5fddb6e6d1eff8eefccc5871e922cdfea7f72c4266c0d0a896->leave($__internal_b3fdc44544f54d5fddb6e6d1eff8eefccc5871e922cdfea7f72c4266c0d0a896_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a283090a78674c6433d9d894b0bdcd49adda29b4b3cf3588c792e77c99b2d97 = $this->env->getExtension("native_profiler");
        $__internal_9a283090a78674c6433d9d894b0bdcd49adda29b4b3cf3588c792e77c99b2d97->enter($__internal_9a283090a78674c6433d9d894b0bdcd49adda29b4b3cf3588c792e77c99b2d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("status_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Status:newactions.html.twig", "status/new.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t";
        $this->loadTemplate("BoAdminBundle:Status:newform.html.twig", "status/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_9a283090a78674c6433d9d894b0bdcd49adda29b4b3cf3588c792e77c99b2d97->leave($__internal_9a283090a78674c6433d9d894b0bdcd49adda29b4b3cf3588c792e77c99b2d97_prof);

    }

    public function getTemplateName()
    {
        return "status/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 13,  114 => 12,  112 => 11,  108 => 10,  104 => 9,  101 => 8,  95 => 7,  79 => 6,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.status'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.status'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('status_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Status:newactions.html.twig"%}*/
/* 			{%include "BoAdminBundle:Status:newform.html.twig"%}*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
