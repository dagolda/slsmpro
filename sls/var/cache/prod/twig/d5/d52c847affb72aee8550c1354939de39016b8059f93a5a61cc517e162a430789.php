<?php

/* coordinator.html.twig */
class __TwigTemplate_edfd409ace9e910c2e49529f2c0656dbbfbeb57e4f2e0e40fe00a51126115dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "coordinator.html.twig", 1);
        $this->blocks = array(
            'hright' => array($this, 'block_hright'),
            'nemu' => array($this, 'block_nemu'),
            'smenu' => array($this, 'block_smenu'),
            'right' => array($this, 'block_right'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883fe5703e2df10413ac3cfa094e339031a7ba7b149b1a1406742b34213e4c8a = $this->env->getExtension("native_profiler");
        $__internal_883fe5703e2df10413ac3cfa094e339031a7ba7b149b1a1406742b34213e4c8a->enter($__internal_883fe5703e2df10413ac3cfa094e339031a7ba7b149b1a1406742b34213e4c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883fe5703e2df10413ac3cfa094e339031a7ba7b149b1a1406742b34213e4c8a->leave($__internal_883fe5703e2df10413ac3cfa094e339031a7ba7b149b1a1406742b34213e4c8a_prof);

    }

    // line 2
    public function block_hright($context, array $blocks = array())
    {
        $__internal_d915a392db15475431eb07300d4affd0e4ef15b5bcee83b723e1519ccf8b8403 = $this->env->getExtension("native_profiler");
        $__internal_d915a392db15475431eb07300d4affd0e4ef15b5bcee83b723e1519ccf8b8403->enter($__internal_d915a392db15475431eb07300d4affd0e4ef15b5bcee83b723e1519ccf8b8403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        // line 3
        echo "\t";
        $this->loadTemplate("BoCoordinatorBundle:Default:userinfo.html.twig", "coordinator.html.twig", 3)->display($context);
        
        $__internal_d915a392db15475431eb07300d4affd0e4ef15b5bcee83b723e1519ccf8b8403->leave($__internal_d915a392db15475431eb07300d4affd0e4ef15b5bcee83b723e1519ccf8b8403_prof);

    }

    // line 5
    public function block_nemu($context, array $blocks = array())
    {
        $__internal_99d417e328a9091b2f3d6ec06ccd848b4e2f3a60fa6b8ff5e9fe5f852aeab1e4 = $this->env->getExtension("native_profiler");
        $__internal_99d417e328a9091b2f3d6ec06ccd848b4e2f3a60fa6b8ff5e9fe5f852aeab1e4->enter($__internal_99d417e328a9091b2f3d6ec06ccd848b4e2f3a60fa6b8ff5e9fe5f852aeab1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nemu"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoCoordinatorBundle:Default:pm.html.twig", "coordinator.html.twig", 6)->display($context);
        
        $__internal_99d417e328a9091b2f3d6ec06ccd848b4e2f3a60fa6b8ff5e9fe5f852aeab1e4->leave($__internal_99d417e328a9091b2f3d6ec06ccd848b4e2f3a60fa6b8ff5e9fe5f852aeab1e4_prof);

    }

    // line 8
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6dc0fe79cff4cefbc0961b8c48e45d1555febdc2d8af1ba0c2ab88d890314c11 = $this->env->getExtension("native_profiler");
        $__internal_6dc0fe79cff4cefbc0961b8c48e45d1555febdc2d8af1ba0c2ab88d890314c11->enter($__internal_6dc0fe79cff4cefbc0961b8c48e45d1555febdc2d8af1ba0c2ab88d890314c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_6dc0fe79cff4cefbc0961b8c48e45d1555febdc2d8af1ba0c2ab88d890314c11->leave($__internal_6dc0fe79cff4cefbc0961b8c48e45d1555febdc2d8af1ba0c2ab88d890314c11_prof);

    }

    // line 10
    public function block_right($context, array $blocks = array())
    {
        $__internal_011824af8d20311e7c5a59b81d8123085523a98214864d128067032095b7e4ee = $this->env->getExtension("native_profiler");
        $__internal_011824af8d20311e7c5a59b81d8123085523a98214864d128067032095b7e4ee->enter($__internal_011824af8d20311e7c5a59b81d8123085523a98214864d128067032095b7e4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 11
        echo "\t<div class=\"col-sm-2 sidenav\">
\t\t<div class=\"well\">
\t\t\t";
        // line 13
        $this->displayBlock('nav', $context, $blocks);
        echo "\t\t\t\t\t\t\t
\t\t</div>
\t</div>
";
        
        $__internal_011824af8d20311e7c5a59b81d8123085523a98214864d128067032095b7e4ee->leave($__internal_011824af8d20311e7c5a59b81d8123085523a98214864d128067032095b7e4ee_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_213ac3dbf139ade052822ddfc8935476519fc70e6af9cfd7378c6bcc5e608a3d = $this->env->getExtension("native_profiler");
        $__internal_213ac3dbf139ade052822ddfc8935476519fc70e6af9cfd7378c6bcc5e608a3d->enter($__internal_213ac3dbf139ade052822ddfc8935476519fc70e6af9cfd7378c6bcc5e608a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_213ac3dbf139ade052822ddfc8935476519fc70e6af9cfd7378c6bcc5e608a3d->leave($__internal_213ac3dbf139ade052822ddfc8935476519fc70e6af9cfd7378c6bcc5e608a3d_prof);

    }

    public function getTemplateName()
    {
        return "coordinator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  83 => 11,  77 => 10,  66 => 8,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'common.html.twig' %}*/
/* {% block hright%}*/
/* 	{%include "BoCoordinatorBundle:Default:userinfo.html.twig"%}*/
/* {% endblock %}*/
/* {% block nemu %}*/
/* 	{%include "BoCoordinatorBundle:Default:pm.html.twig"%}*/
/* {% endblock %}*/
/* {% block smenu %}*/
/* {% endblock %}	*/
/* {% block right %}*/
/* 	<div class="col-sm-2 sidenav">*/
/* 		<div class="well">*/
/* 			{% block nav %}{% endblock %}							*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}							*/
/* */
/* */
