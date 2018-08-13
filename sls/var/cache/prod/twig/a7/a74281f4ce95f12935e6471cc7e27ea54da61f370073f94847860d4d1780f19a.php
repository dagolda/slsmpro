<?php

/* color/show.html.twig */
class __TwigTemplate_e70981caddd70ca6a85a5f9858786bf97f8ffbf5889ff1a38fbe05da6616c05d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "color/show.html.twig", 1);
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
        $__internal_ffc26ebcfff3f6c8ed8877200f77105204a9a9a2c3f514c8ad959e304c9f7105 = $this->env->getExtension("native_profiler");
        $__internal_ffc26ebcfff3f6c8ed8877200f77105204a9a9a2c3f514c8ad959e304c9f7105->enter($__internal_ffc26ebcfff3f6c8ed8877200f77105204a9a9a2c3f514c8ad959e304c9f7105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffc26ebcfff3f6c8ed8877200f77105204a9a9a2c3f514c8ad959e304c9f7105->leave($__internal_ffc26ebcfff3f6c8ed8877200f77105204a9a9a2c3f514c8ad959e304c9f7105_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b05c6eea63e2d68727fce926917bfd6df91d436d2d5afd0538979be5700f8444 = $this->env->getExtension("native_profiler");
        $__internal_b05c6eea63e2d68727fce926917bfd6df91d436d2d5afd0538979be5700f8444->enter($__internal_b05c6eea63e2d68727fce926917bfd6df91d436d2d5afd0538979be5700f8444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.color", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b05c6eea63e2d68727fce926917bfd6df91d436d2d5afd0538979be5700f8444->leave($__internal_b05c6eea63e2d68727fce926917bfd6df91d436d2d5afd0538979be5700f8444_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7b3b5ee32d7d8242c9eba1906b61d56ca8a456f1c66cd5ea975fd3d9860c22ff = $this->env->getExtension("native_profiler");
        $__internal_7b3b5ee32d7d8242c9eba1906b61d56ca8a456f1c66cd5ea975fd3d9860c22ff->enter($__internal_7b3b5ee32d7d8242c9eba1906b61d56ca8a456f1c66cd5ea975fd3d9860c22ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "color/show.html.twig", 3)->display($context);
        
        $__internal_7b3b5ee32d7d8242c9eba1906b61d56ca8a456f1c66cd5ea975fd3d9860c22ff->leave($__internal_7b3b5ee32d7d8242c9eba1906b61d56ca8a456f1c66cd5ea975fd3d9860c22ff_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a0caf212d043fb15296fa136b2c69d0a79ab76828412f25575611833f3263ae9 = $this->env->getExtension("native_profiler");
        $__internal_a0caf212d043fb15296fa136b2c69d0a79ab76828412f25575611833f3263ae9->enter($__internal_a0caf212d043fb15296fa136b2c69d0a79ab76828412f25575611833f3263ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_a0caf212d043fb15296fa136b2c69d0a79ab76828412f25575611833f3263ae9->leave($__internal_a0caf212d043fb15296fa136b2c69d0a79ab76828412f25575611833f3263ae9_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_b94bc918989fac8365f092d24acb76d5d6ba17ae32822e6c86d540d94226328e = $this->env->getExtension("native_profiler");
        $__internal_b94bc918989fac8365f092d24acb76d5d6ba17ae32822e6c86d540d94226328e->enter($__internal_b94bc918989fac8365f092d24acb76d5d6ba17ae32822e6c86d540d94226328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.color", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b94bc918989fac8365f092d24acb76d5d6ba17ae32822e6c86d540d94226328e->leave($__internal_b94bc918989fac8365f092d24acb76d5d6ba17ae32822e6c86d540d94226328e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e065541270cd4dfc27dbefaaafd06292913f66f2107b9f362fdeb2da2a232d21 = $this->env->getExtension("native_profiler");
        $__internal_e065541270cd4dfc27dbefaaafd06292913f66f2107b9f362fdeb2da2a232d21->enter($__internal_e065541270cd4dfc27dbefaaafd06292913f66f2107b9f362fdeb2da2a232d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Color:showactions.html.twig", "color/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Color:show.html.twig", "color/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>
";
        
        $__internal_e065541270cd4dfc27dbefaaafd06292913f66f2107b9f362fdeb2da2a232d21->leave($__internal_e065541270cd4dfc27dbefaaafd06292913f66f2107b9f362fdeb2da2a232d21_prof);

    }

    public function getTemplateName()
    {
        return "color/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 11,  107 => 10,  104 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.color'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.color'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Color:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Color:show.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
