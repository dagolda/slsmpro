<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_06565036da74ad8f1a91881db68558ae6cbb8805fa91dabbc7556182892e03e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6976401f065045397920d0d522137895e66393e78238cdd94034dd6f9214a1d1 = $this->env->getExtension("native_profiler");
        $__internal_6976401f065045397920d0d522137895e66393e78238cdd94034dd6f9214a1d1->enter($__internal_6976401f065045397920d0d522137895e66393e78238cdd94034dd6f9214a1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6976401f065045397920d0d522137895e66393e78238cdd94034dd6f9214a1d1->leave($__internal_6976401f065045397920d0d522137895e66393e78238cdd94034dd6f9214a1d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c0312e73297e8ee0e32bc5dadb27a90a0759a16fc0d45bbf611746c7feef8f2 = $this->env->getExtension("native_profiler");
        $__internal_7c0312e73297e8ee0e32bc5dadb27a90a0759a16fc0d45bbf611746c7feef8f2->enter($__internal_7c0312e73297e8ee0e32bc5dadb27a90a0759a16fc0d45bbf611746c7feef8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t<div id=\"fos_user_registration\">
\t\t<fieldset>
\t\t\t<legend><h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.reset", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1></legend>
\t\t\t";
        // line 7
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 7)->display($context);
        // line 8
        echo "\t\t</fieldset>
\t</div>
";
        
        $__internal_7c0312e73297e8ee0e32bc5dadb27a90a0759a16fc0d45bbf611746c7feef8f2->leave($__internal_7c0312e73297e8ee0e32bc5dadb27a90a0759a16fc0d45bbf611746c7feef8f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* 	<div id="fos_user_registration">*/
/* 		<fieldset>*/
/* 			<legend><h1>{{'user.reset'|trans([],'BoAdminBundle')}}</h1></legend>*/
/* 			{% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* 		</fieldset>*/
/* 	</div>*/
/* {% endblock fos_user_content %}*/
/* */
