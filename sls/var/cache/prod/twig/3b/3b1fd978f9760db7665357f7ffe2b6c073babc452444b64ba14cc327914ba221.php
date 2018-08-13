<?php

/* mobiliers/index.html.twig */
class __TwigTemplate_01a944e33025c3f71a9f07028735d29cf71c43bce17c5b8ac9a2962ad187b60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mobiliers/index.html.twig", 1);
        $this->blocks = array(
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b099ee24fc3ae256bd207beef84aaf0664ae7916abf7628dcd429e3bd6ef807 = $this->env->getExtension("native_profiler");
        $__internal_8b099ee24fc3ae256bd207beef84aaf0664ae7916abf7628dcd429e3bd6ef807->enter($__internal_8b099ee24fc3ae256bd207beef84aaf0664ae7916abf7628dcd429e3bd6ef807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mobiliers/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b099ee24fc3ae256bd207beef84aaf0664ae7916abf7628dcd429e3bd6ef807->leave($__internal_8b099ee24fc3ae256bd207beef84aaf0664ae7916abf7628dcd429e3bd6ef807_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9f07aef715c56eed0b4b5a5325b735fc2ec7eb98a30d411f9937eb1880469932 = $this->env->getExtension("native_profiler");
        $__internal_9f07aef715c56eed0b4b5a5325b735fc2ec7eb98a30d411f9937eb1880469932->enter($__internal_9f07aef715c56eed0b4b5a5325b735fc2ec7eb98a30d411f9937eb1880469932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "mobiliers/index.html.twig", 2)->display($context);
        
        $__internal_9f07aef715c56eed0b4b5a5325b735fc2ec7eb98a30d411f9937eb1880469932->leave($__internal_9f07aef715c56eed0b4b5a5325b735fc2ec7eb98a30d411f9937eb1880469932_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_76d3f65d97fcdbe80aa5bc77334da8094ac31552293fda1d2b7a9eecccf3fb82 = $this->env->getExtension("native_profiler");
        $__internal_76d3f65d97fcdbe80aa5bc77334da8094ac31552293fda1d2b7a9eecccf3fb82->enter($__internal_76d3f65d97fcdbe80aa5bc77334da8094ac31552293fda1d2b7a9eecccf3fb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_76d3f65d97fcdbe80aa5bc77334da8094ac31552293fda1d2b7a9eecccf3fb82->leave($__internal_76d3f65d97fcdbe80aa5bc77334da8094ac31552293fda1d2b7a9eecccf3fb82_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_9bef75e51a5f838d3fe0ee1d4bd0566ccd6fcb57eb2ad2b6b2cb59ecd6b3c5c7 = $this->env->getExtension("native_profiler");
        $__internal_9bef75e51a5f838d3fe0ee1d4bd0566ccd6fcb57eb2ad2b6b2cb59ecd6b3c5c7->enter($__internal_9bef75e51a5f838d3fe0ee1d4bd0566ccd6fcb57eb2ad2b6b2cb59ecd6b3c5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Furnitures list</h1>";
        
        $__internal_9bef75e51a5f838d3fe0ee1d4bd0566ccd6fcb57eb2ad2b6b2cb59ecd6b3c5c7->leave($__internal_9bef75e51a5f838d3fe0ee1d4bd0566ccd6fcb57eb2ad2b6b2cb59ecd6b3c5c7_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f8eeaaa2635095f012736348d65117cd2077503a40672e34c8216347270ec7d0 = $this->env->getExtension("native_profiler");
        $__internal_f8eeaaa2635095f012736348d65117cd2077503a40672e34c8216347270ec7d0->enter($__internal_f8eeaaa2635095f012736348d65117cd2077503a40672e34c8216347270ec7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Furnitures:actions.html.twig", "mobiliers/index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_f8eeaaa2635095f012736348d65117cd2077503a40672e34c8216347270ec7d0->leave($__internal_f8eeaaa2635095f012736348d65117cd2077503a40672e34c8216347270ec7d0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_08e96137d4c26b3ee6278a0e52a25190ed4929c1327d680e3c1a6ffed6a3291a = $this->env->getExtension("native_profiler");
        $__internal_08e96137d4c26b3ee6278a0e52a25190ed4929c1327d680e3c1a6ffed6a3291a->enter($__internal_08e96137d4c26b3ee6278a0e52a25190ed4929c1327d680e3c1a6ffed6a3291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Furnitures:tbliste.html.twig", "mobiliers/index.html.twig", 11)->display($context);
        // line 12
        echo "\t</div>
";
        
        $__internal_08e96137d4c26b3ee6278a0e52a25190ed4929c1327d680e3c1a6ffed6a3291a->leave($__internal_08e96137d4c26b3ee6278a0e52a25190ed4929c1327d680e3c1a6ffed6a3291a_prof);

    }

    public function getTemplateName()
    {
        return "mobiliers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 12,  100 => 11,  97 => 10,  91 => 9,  81 => 7,  75 => 6,  63 => 5,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>Furnitures list</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Furnitures:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Furnitures:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
