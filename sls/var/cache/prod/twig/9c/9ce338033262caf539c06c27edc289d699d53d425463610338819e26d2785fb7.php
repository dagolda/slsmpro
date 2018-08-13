<?php

/* company/show.html.twig */
class __TwigTemplate_7ba530eac67136c6559b9a3c1ab3fd1bf37c8176ce656fc8a4d2339acdb90f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
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
        $__internal_7c5fcba2f0429c7b25091f0b384171b6600c1fd745ac7e674397a0397c4eb211 = $this->env->getExtension("native_profiler");
        $__internal_7c5fcba2f0429c7b25091f0b384171b6600c1fd745ac7e674397a0397c4eb211->enter($__internal_7c5fcba2f0429c7b25091f0b384171b6600c1fd745ac7e674397a0397c4eb211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5fcba2f0429c7b25091f0b384171b6600c1fd745ac7e674397a0397c4eb211->leave($__internal_7c5fcba2f0429c7b25091f0b384171b6600c1fd745ac7e674397a0397c4eb211_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4adeba44c5f5c10a17c7710b1d114916d49850486c5d2e556b2960ce657fd7c6 = $this->env->getExtension("native_profiler");
        $__internal_4adeba44c5f5c10a17c7710b1d114916d49850486c5d2e556b2960ce657fd7c6->enter($__internal_4adeba44c5f5c10a17c7710b1d114916d49850486c5d2e556b2960ce657fd7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_4adeba44c5f5c10a17c7710b1d114916d49850486c5d2e556b2960ce657fd7c6->leave($__internal_4adeba44c5f5c10a17c7710b1d114916d49850486c5d2e556b2960ce657fd7c6_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d02eb776486423c27793d2e62182e654aa57661c203f8f80e9baa14503392cc7 = $this->env->getExtension("native_profiler");
        $__internal_d02eb776486423c27793d2e62182e654aa57661c203f8f80e9baa14503392cc7->enter($__internal_d02eb776486423c27793d2e62182e654aa57661c203f8f80e9baa14503392cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "company/show.html.twig", 3)->display($context);
        
        $__internal_d02eb776486423c27793d2e62182e654aa57661c203f8f80e9baa14503392cc7->leave($__internal_d02eb776486423c27793d2e62182e654aa57661c203f8f80e9baa14503392cc7_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_88274a8cf8b4cca701664388895124f53a310891726fe88bdc41de3d62ecc137 = $this->env->getExtension("native_profiler");
        $__internal_88274a8cf8b4cca701664388895124f53a310891726fe88bdc41de3d62ecc137->enter($__internal_88274a8cf8b4cca701664388895124f53a310891726fe88bdc41de3d62ecc137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homemessage", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_88274a8cf8b4cca701664388895124f53a310891726fe88bdc41de3d62ecc137->leave($__internal_88274a8cf8b4cca701664388895124f53a310891726fe88bdc41de3d62ecc137_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd4544c2bd7a494c0406510778a2a24a38fdf64ae730d538f961fb69af2e6f36 = $this->env->getExtension("native_profiler");
        $__internal_bd4544c2bd7a494c0406510778a2a24a38fdf64ae730d538f961fb69af2e6f36->enter($__internal_bd4544c2bd7a494c0406510778a2a24a38fdf64ae730d538f961fb69af2e6f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t";
        // line 7
        $this->loadTemplate("BoAdminBundle:Company:showactions.html.twig", "company/show.html.twig", 7)->display($context);
        // line 8
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Company:show.html.twig", "company/show.html.twig", 9)->display($context);
        // line 10
        echo "\t\t</div>\t\t\t
\t</div>
";
        
        $__internal_bd4544c2bd7a494c0406510778a2a24a38fdf64ae730d538f961fb69af2e6f36->leave($__internal_bd4544c2bd7a494c0406510778a2a24a38fdf64ae730d538f961fb69af2e6f36_prof);

    }

    public function getTemplateName()
    {
        return "company/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 10,  95 => 9,  92 => 8,  90 => 7,  87 => 6,  81 => 5,  65 => 4,  53 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.company'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}	*/
/* {% block label %}<h1>{{'entity.company'|trans([],'BoAdminBundle')}} >> {{'label.homemessage'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Company:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Company:show.html.twig"%}*/
/* 		</div>			*/
/* 	</div>*/
/* {% endblock %}*/
/* */
