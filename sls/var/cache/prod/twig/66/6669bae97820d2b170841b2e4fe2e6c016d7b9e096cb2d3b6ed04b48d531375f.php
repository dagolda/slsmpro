<?php

/* BoAdvisorsBundle:Orderform:headsup.html.twig */
class __TwigTemplate_28aa1acebf3002054a658db6c5ee345baaf6ceb727169f64d1f34c11b6e2ecc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "BoAdvisorsBundle:Orderform:headsup.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_328fcc058c6368e40c3241d1c1db4a84d6663807ea77d2588fedcc942421eb99 = $this->env->getExtension("native_profiler");
        $__internal_328fcc058c6368e40c3241d1c1db4a84d6663807ea77d2588fedcc942421eb99->enter($__internal_328fcc058c6368e40c3241d1c1db4a84d6663807ea77d2588fedcc942421eb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:headsup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328fcc058c6368e40c3241d1c1db4a84d6663807ea77d2588fedcc942421eb99->leave($__internal_328fcc058c6368e40c3241d1c1db4a84d6663807ea77d2588fedcc942421eb99_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b62e550aad6660dee9aad9f54a42efda316a4c5601990d629fb64ffe300daa3b = $this->env->getExtension("native_profiler");
        $__internal_b62e550aad6660dee9aad9f54a42efda316a4c5601990d629fb64ffe300daa3b->enter($__internal_b62e550aad6660dee9aad9f54a42efda316a4c5601990d629fb64ffe300daa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.headsup", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b62e550aad6660dee9aad9f54a42efda316a4c5601990d629fb64ffe300daa3b->leave($__internal_b62e550aad6660dee9aad9f54a42efda316a4c5601990d629fb64ffe300daa3b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0d7750ef51b22d1169410233f4d51897adc6cc53286bc12d66705673ba7a0dc7 = $this->env->getExtension("native_profiler");
        $__internal_0d7750ef51b22d1169410233f4d51897adc6cc53286bc12d66705673ba7a0dc7->enter($__internal_0d7750ef51b22d1169410233f4d51897adc6cc53286bc12d66705673ba7a0dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Orderform:headsup.html.twig", 3)->display($context);
        
        $__internal_0d7750ef51b22d1169410233f4d51897adc6cc53286bc12d66705673ba7a0dc7->leave($__internal_0d7750ef51b22d1169410233f4d51897adc6cc53286bc12d66705673ba7a0dc7_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a3d7f63e59d341f7406cc1ae85867c671abca5052478b4398c1a4d2e6dd0e46a = $this->env->getExtension("native_profiler");
        $__internal_a3d7f63e59d341f7406cc1ae85867c671abca5052478b4398c1a4d2e6dd0e46a->enter($__internal_a3d7f63e59d341f7406cc1ae85867c671abca5052478b4398c1a4d2e6dd0e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if ((array_key_exists("employee", $context) && ((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null))) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Orderform:headsup.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_a3d7f63e59d341f7406cc1ae85867c671abca5052478b4398c1a4d2e6dd0e46a->leave($__internal_a3d7f63e59d341f7406cc1ae85867c671abca5052478b4398c1a4d2e6dd0e46a_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_2e023b7ddf8b655cfb2b72a5936ace68f39a8ab3e4274e71b891c12f95434295 = $this->env->getExtension("native_profiler");
        $__internal_2e023b7ddf8b655cfb2b72a5936ace68f39a8ab3e4274e71b891c12f95434295->enter($__internal_2e023b7ddf8b655cfb2b72a5936ace68f39a8ab3e4274e71b891c12f95434295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.headsup", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_2e023b7ddf8b655cfb2b72a5936ace68f39a8ab3e4274e71b891c12f95434295->leave($__internal_2e023b7ddf8b655cfb2b72a5936ace68f39a8ab3e4274e71b891c12f95434295_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9f8c8897962c8a2239bcfea197e0c3b2951062c8c115f7c0cd1dbeb27ce045e7 = $this->env->getExtension("native_profiler");
        $__internal_9f8c8897962c8a2239bcfea197e0c3b2951062c8c115f7c0cd1dbeb27ce045e7->enter($__internal_9f8c8897962c8a2239bcfea197e0c3b2951062c8c115f7c0cd1dbeb27ce045e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Orderform:headsupactions.html.twig", "BoAdvisorsBundle:Orderform:headsup.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_9f8c8897962c8a2239bcfea197e0c3b2951062c8c115f7c0cd1dbeb27ce045e7->leave($__internal_9f8c8897962c8a2239bcfea197e0c3b2951062c8c115f7c0cd1dbeb27ce045e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c005da4a847fc8325e96c91441b7a0a202be2fd060e7103c66c4ae7b691b28 = $this->env->getExtension("native_profiler");
        $__internal_b3c005da4a847fc8325e96c91441b7a0a202be2fd060e7103c66c4ae7b691b28->enter($__internal_b3c005da4a847fc8325e96c91441b7a0a202be2fd060e7103c66c4ae7b691b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 13
        $this->loadTemplate("BoAdvisorsBundle:Orderform:huliste.html.twig", "BoAdvisorsBundle:Orderform:headsup.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_b3c005da4a847fc8325e96c91441b7a0a202be2fd060e7103c66c4ae7b691b28->leave($__internal_b3c005da4a847fc8325e96c91441b7a0a202be2fd060e7103c66c4ae7b691b28_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da9efb29bb24fab813e765e4ec9f83f3df01596160a2c270742c2d1d88c7205e = $this->env->getExtension("native_profiler");
        $__internal_da9efb29bb24fab813e765e4ec9f83f3df01596160a2c270742c2d1d88c7205e->enter($__internal_da9efb29bb24fab813e765e4ec9f83f3df01596160a2c270742c2d1d88c7205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_da9efb29bb24fab813e765e4ec9f83f3df01596160a2c270742c2d1d88c7205e->leave($__internal_da9efb29bb24fab813e765e4ec9f83f3df01596160a2c270742c2d1d88c7205e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:headsup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 16,  133 => 15,  130 => 14,  128 => 13,  125 => 12,  119 => 11,  109 => 9,  103 => 8,  87 => 7,  76 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.orderform'|trans([],'BoAdminBundle')}} >> {{'label.headsup'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee is defined and employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.orderform'|trans([],'BoAdminBundle')}} >> {{'label.headsup'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Orderform:headsupactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Orderform:huliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
