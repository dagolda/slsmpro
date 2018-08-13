<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_3a51087fa423b27afccfbeb3029a81737bb5d7276373b8dd7935c35484c2f9b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5ae884f8b0517470907bd8de84a2fd6bcacdfab8c55740c96828e98451c619b = $this->env->getExtension("native_profiler");
        $__internal_c5ae884f8b0517470907bd8de84a2fd6bcacdfab8c55740c96828e98451c619b->enter($__internal_c5ae884f8b0517470907bd8de84a2fd6bcacdfab8c55740c96828e98451c619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ae884f8b0517470907bd8de84a2fd6bcacdfab8c55740c96828e98451c619b->leave($__internal_c5ae884f8b0517470907bd8de84a2fd6bcacdfab8c55740c96828e98451c619b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_909bb644c942152fe7b9ff08654c738963230cb6bc1212f0d081322c5b196d1e = $this->env->getExtension("native_profiler");
        $__internal_909bb644c942152fe7b9ff08654c738963230cb6bc1212f0d081322c5b196d1e->enter($__internal_909bb644c942152fe7b9ff08654c738963230cb6bc1212f0d081322c5b196d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_909bb644c942152fe7b9ff08654c738963230cb6bc1212f0d081322c5b196d1e->leave($__internal_909bb644c942152fe7b9ff08654c738963230cb6bc1212f0d081322c5b196d1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* 	<p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
