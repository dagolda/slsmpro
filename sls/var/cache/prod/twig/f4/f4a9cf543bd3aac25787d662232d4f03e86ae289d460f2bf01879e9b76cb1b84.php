<?php

/* FOSUserBundle:ChangePassword:changePassword2.html.twig */
class __TwigTemplate_62e48d433bc31418b1ea0e9a33759badfb89c4fc7b3683899e896691e80951d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword2.html.twig", 1);
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
        $__internal_a28c1151497c1b3e0bf1a896d3302ece444051553a6b5512061d0200f7a9c073 = $this->env->getExtension("native_profiler");
        $__internal_a28c1151497c1b3e0bf1a896d3302ece444051553a6b5512061d0200f7a9c073->enter($__internal_a28c1151497c1b3e0bf1a896d3302ece444051553a6b5512061d0200f7a9c073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a28c1151497c1b3e0bf1a896d3302ece444051553a6b5512061d0200f7a9c073->leave($__internal_a28c1151497c1b3e0bf1a896d3302ece444051553a6b5512061d0200f7a9c073_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f2141bacb69df87d3aa744271e5d8c87d6e445146e5d98d53881ddd06736d6f = $this->env->getExtension("native_profiler");
        $__internal_3f2141bacb69df87d3aa744271e5d8c87d6e445146e5d98d53881ddd06736d6f->enter($__internal_3f2141bacb69df87d3aa744271e5d8c87d6e445146e5d98d53881ddd06736d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword2_content.html.twig", "FOSUserBundle:ChangePassword:changePassword2.html.twig", 4)->display($context);
        
        $__internal_3f2141bacb69df87d3aa744271e5d8c87d6e445146e5d98d53881ddd06736d6f->leave($__internal_3f2141bacb69df87d3aa744271e5d8c87d6e445146e5d98d53881ddd06736d6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword2_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
