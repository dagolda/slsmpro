<?php

/* campus/show.html.twig */
class __TwigTemplate_9d41a8a50c25b7c4333f6e40f5ab5939de2e4aa32d946d8677541fec00ff45b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "campus/show.html.twig", 1);
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
        $__internal_75b933836a454b5f72e052ff9c8ae5440a0cb24956950cb6a8d5558adcfbf431 = $this->env->getExtension("native_profiler");
        $__internal_75b933836a454b5f72e052ff9c8ae5440a0cb24956950cb6a8d5558adcfbf431->enter($__internal_75b933836a454b5f72e052ff9c8ae5440a0cb24956950cb6a8d5558adcfbf431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "campus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b933836a454b5f72e052ff9c8ae5440a0cb24956950cb6a8d5558adcfbf431->leave($__internal_75b933836a454b5f72e052ff9c8ae5440a0cb24956950cb6a8d5558adcfbf431_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bd96046643e0a6ab5e0e9439a0e3e54bc2a0ec8f08764c414005d97ed9555e0 = $this->env->getExtension("native_profiler");
        $__internal_3bd96046643e0a6ab5e0e9439a0e3e54bc2a0ec8f08764c414005d97ed9555e0->enter($__internal_3bd96046643e0a6ab5e0e9439a0e3e54bc2a0ec8f08764c414005d97ed9555e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.campus", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3bd96046643e0a6ab5e0e9439a0e3e54bc2a0ec8f08764c414005d97ed9555e0->leave($__internal_3bd96046643e0a6ab5e0e9439a0e3e54bc2a0ec8f08764c414005d97ed9555e0_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_37a23053b32b86828fddc05bcbdcaaa93045c032e94e2040dfccebab93208edc = $this->env->getExtension("native_profiler");
        $__internal_37a23053b32b86828fddc05bcbdcaaa93045c032e94e2040dfccebab93208edc->enter($__internal_37a23053b32b86828fddc05bcbdcaaa93045c032e94e2040dfccebab93208edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "campus/show.html.twig", 3)->display($context);
        
        $__internal_37a23053b32b86828fddc05bcbdcaaa93045c032e94e2040dfccebab93208edc->leave($__internal_37a23053b32b86828fddc05bcbdcaaa93045c032e94e2040dfccebab93208edc_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6a320d62257e027fad1aa8642400f5cfdf3a357f3fcc57a3d287bdeaa1bb1eab = $this->env->getExtension("native_profiler");
        $__internal_6a320d62257e027fad1aa8642400f5cfdf3a357f3fcc57a3d287bdeaa1bb1eab->enter($__internal_6a320d62257e027fad1aa8642400f5cfdf3a357f3fcc57a3d287bdeaa1bb1eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Campus:show.html.twig", "campus/show.html.twig", 4)->display($context);
        
        $__internal_6a320d62257e027fad1aa8642400f5cfdf3a357f3fcc57a3d287bdeaa1bb1eab->leave($__internal_6a320d62257e027fad1aa8642400f5cfdf3a357f3fcc57a3d287bdeaa1bb1eab_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_61477532bf9087b121b7060939b561bf347b971b15c0de3d70763918c6320e52 = $this->env->getExtension("native_profiler");
        $__internal_61477532bf9087b121b7060939b561bf347b971b15c0de3d70763918c6320e52->enter($__internal_61477532bf9087b121b7060939b561bf347b971b15c0de3d70763918c6320e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.campus", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_61477532bf9087b121b7060939b561bf347b971b15c0de3d70763918c6320e52->leave($__internal_61477532bf9087b121b7060939b561bf347b971b15c0de3d70763918c6320e52_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c13fd2150c87020c0e57c4fff54368b3c05012e08134f038338bd9e5166d3863 = $this->env->getExtension("native_profiler");
        $__internal_c13fd2150c87020c0e57c4fff54368b3c05012e08134f038338bd9e5166d3863->enter($__internal_c13fd2150c87020c0e57c4fff54368b3c05012e08134f038338bd9e5166d3863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Campus:showactions.html.twig", "campus/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "reference", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.listofroom", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Campus:local.html.twig", "campus/show.html.twig", 11)->display($context);
        // line 12
        echo "\t\t</div>\t\t\t
\t</div>
";
        
        $__internal_c13fd2150c87020c0e57c4fff54368b3c05012e08134f038338bd9e5166d3863->leave($__internal_c13fd2150c87020c0e57c4fff54368b3c05012e08134f038338bd9e5166d3863_prof);

    }

    public function getTemplateName()
    {
        return "campus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 12,  114 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.campus'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}*/
/* {% block nav %}{%include "BoAdminBundle:Campus:show.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.campus'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Campus:showactions.html.twig"%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{campus.reference}} {{'title.listofroom'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Campus:local.html.twig"%}*/
/* 		</div>			*/
/* 	</div>*/
/* {% endblock %}*/
/* */
