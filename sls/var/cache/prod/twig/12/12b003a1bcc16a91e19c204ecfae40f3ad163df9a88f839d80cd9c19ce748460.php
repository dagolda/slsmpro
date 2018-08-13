<?php

/* holidayslist/show.html.twig */
class __TwigTemplate_2a210a1532080e0de97cd0a5f5043bf751e5bcfdc798d38a9bbfb8e7e788e634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "holidayslist/show.html.twig", 1);
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
        $__internal_5ef4f5f327c34f34bf730fd5803c387f8601eebe2923008e3697a0ed2dcfa14d = $this->env->getExtension("native_profiler");
        $__internal_5ef4f5f327c34f34bf730fd5803c387f8601eebe2923008e3697a0ed2dcfa14d->enter($__internal_5ef4f5f327c34f34bf730fd5803c387f8601eebe2923008e3697a0ed2dcfa14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "holidayslist/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef4f5f327c34f34bf730fd5803c387f8601eebe2923008e3697a0ed2dcfa14d->leave($__internal_5ef4f5f327c34f34bf730fd5803c387f8601eebe2923008e3697a0ed2dcfa14d_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_170f2f6eac05ed6729307872fe31926a4ebfbe2903744a9384e6cdbb5e2d5816 = $this->env->getExtension("native_profiler");
        $__internal_170f2f6eac05ed6729307872fe31926a4ebfbe2903744a9384e6cdbb5e2d5816->enter($__internal_170f2f6eac05ed6729307872fe31926a4ebfbe2903744a9384e6cdbb5e2d5816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "holidayslist/show.html.twig", 2)->display($context);
        
        $__internal_170f2f6eac05ed6729307872fe31926a4ebfbe2903744a9384e6cdbb5e2d5816->leave($__internal_170f2f6eac05ed6729307872fe31926a4ebfbe2903744a9384e6cdbb5e2d5816_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_869e5b9c80f20e5b524794e0506ceb10dab2ab7ef11ffa14c979a9e1eb958023 = $this->env->getExtension("native_profiler");
        $__internal_869e5b9c80f20e5b524794e0506ceb10dab2ab7ef11ffa14c979a9e1eb958023->enter($__internal_869e5b9c80f20e5b524794e0506ceb10dab2ab7ef11ffa14c979a9e1eb958023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_869e5b9c80f20e5b524794e0506ceb10dab2ab7ef11ffa14c979a9e1eb958023->leave($__internal_869e5b9c80f20e5b524794e0506ceb10dab2ab7ef11ffa14c979a9e1eb958023_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_dd47250cc57809874a311d425188dd8dea2dc23f4290ef0c523e6b089f62c2d1 = $this->env->getExtension("native_profiler");
        $__internal_dd47250cc57809874a311d425188dd8dea2dc23f4290ef0c523e6b089f62c2d1->enter($__internal_dd47250cc57809874a311d425188dd8dea2dc23f4290ef0c523e6b089f62c2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Holidayslist</h1>";
        
        $__internal_dd47250cc57809874a311d425188dd8dea2dc23f4290ef0c523e6b089f62c2d1->leave($__internal_dd47250cc57809874a311d425188dd8dea2dc23f4290ef0c523e6b089f62c2d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c741275ebbd0f9a87689e56cad19c0d6739ac5a36291d8bb708248de0f69971 = $this->env->getExtension("native_profiler");
        $__internal_6c741275ebbd0f9a87689e56cad19c0d6739ac5a36291d8bb708248de0f69971->enter($__internal_6c741275ebbd0f9a87689e56cad19c0d6739ac5a36291d8bb708248de0f69971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t";
        // line 7
        $this->loadTemplate("BoAdminBundle:Holidayslist:showactions.html.twig", "holidayslist/show.html.twig", 7)->display($context);
        // line 8
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Holidayslist:show.html.twig", "holidayslist/show.html.twig", 9)->display($context);
        // line 10
        echo "\t\t</div>\t\t\t
\t</div>
";
        
        $__internal_6c741275ebbd0f9a87689e56cad19c0d6739ac5a36291d8bb708248de0f69971->leave($__internal_6c741275ebbd0f9a87689e56cad19c0d6739ac5a36291d8bb708248de0f69971_prof);

    }

    public function getTemplateName()
    {
        return "holidayslist/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 10,  86 => 9,  83 => 8,  81 => 7,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>Holidayslist</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Holidayslist:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Holidayslist:show.html.twig"%}*/
/* 		</div>			*/
/* 	</div>*/
/* {% endblock %}*/
/* */
