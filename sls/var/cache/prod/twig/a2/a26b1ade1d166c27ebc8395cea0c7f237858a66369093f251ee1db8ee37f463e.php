<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_c381a467eea0155cbf5cbdd3b5e96ab75fa6bcc2e3fc9edbeedca3585d83fb05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_0571cd1eb4663a6fe1f38c8f86a775e84253a65b3779d39fbb0a09fb1badfecc = $this->env->getExtension("native_profiler");
        $__internal_0571cd1eb4663a6fe1f38c8f86a775e84253a65b3779d39fbb0a09fb1badfecc->enter($__internal_0571cd1eb4663a6fe1f38c8f86a775e84253a65b3779d39fbb0a09fb1badfecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0571cd1eb4663a6fe1f38c8f86a775e84253a65b3779d39fbb0a09fb1badfecc->leave($__internal_0571cd1eb4663a6fe1f38c8f86a775e84253a65b3779d39fbb0a09fb1badfecc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2739c3b43bbba9f8a4cd5473e9bb67f99861770afcf14b2de22e699a8696bab = $this->env->getExtension("native_profiler");
        $__internal_c2739c3b43bbba9f8a4cd5473e9bb67f99861770afcf14b2de22e699a8696bab->enter($__internal_c2739c3b43bbba9f8a4cd5473e9bb67f99861770afcf14b2de22e699a8696bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c2739c3b43bbba9f8a4cd5473e9bb67f99861770afcf14b2de22e699a8696bab->leave($__internal_c2739c3b43bbba9f8a4cd5473e9bb67f99861770afcf14b2de22e699a8696bab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
