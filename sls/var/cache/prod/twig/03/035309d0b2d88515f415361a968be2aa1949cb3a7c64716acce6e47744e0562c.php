<?php

/* language/show.html.twig */
class __TwigTemplate_c15caa6a6c41fc09531ba734a37736559d8703267c95714ea920f47d544f9ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "language/show.html.twig", 1);
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
        $__internal_f2f2771a4b1ce79c04273893a96ed20f097df57b20fefe1a30574edf9c5e8793 = $this->env->getExtension("native_profiler");
        $__internal_f2f2771a4b1ce79c04273893a96ed20f097df57b20fefe1a30574edf9c5e8793->enter($__internal_f2f2771a4b1ce79c04273893a96ed20f097df57b20fefe1a30574edf9c5e8793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "language/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f2771a4b1ce79c04273893a96ed20f097df57b20fefe1a30574edf9c5e8793->leave($__internal_f2f2771a4b1ce79c04273893a96ed20f097df57b20fefe1a30574edf9c5e8793_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4aa33a017499c494cc1f1a4d104815e7faa28ebc54641b936f056ee4be0c33fb = $this->env->getExtension("native_profiler");
        $__internal_4aa33a017499c494cc1f1a4d104815e7faa28ebc54641b936f056ee4be0c33fb->enter($__internal_4aa33a017499c494cc1f1a4d104815e7faa28ebc54641b936f056ee4be0c33fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.language", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_4aa33a017499c494cc1f1a4d104815e7faa28ebc54641b936f056ee4be0c33fb->leave($__internal_4aa33a017499c494cc1f1a4d104815e7faa28ebc54641b936f056ee4be0c33fb_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e466689da51da043bd213f60288771205ce703f3335ef9c7baac09f296f37ae4 = $this->env->getExtension("native_profiler");
        $__internal_e466689da51da043bd213f60288771205ce703f3335ef9c7baac09f296f37ae4->enter($__internal_e466689da51da043bd213f60288771205ce703f3335ef9c7baac09f296f37ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "language/show.html.twig", 3)->display($context);
        
        $__internal_e466689da51da043bd213f60288771205ce703f3335ef9c7baac09f296f37ae4->leave($__internal_e466689da51da043bd213f60288771205ce703f3335ef9c7baac09f296f37ae4_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_facfdb62e120afd75774cac43b037382b35694090cbd1fbea419fec9a88a5432 = $this->env->getExtension("native_profiler");
        $__internal_facfdb62e120afd75774cac43b037382b35694090cbd1fbea419fec9a88a5432->enter($__internal_facfdb62e120afd75774cac43b037382b35694090cbd1fbea419fec9a88a5432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_facfdb62e120afd75774cac43b037382b35694090cbd1fbea419fec9a88a5432->leave($__internal_facfdb62e120afd75774cac43b037382b35694090cbd1fbea419fec9a88a5432_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_7971b664b031963412559c86c52a57954fa0ad4c00f9b54e03ef46a1e7c49eb3 = $this->env->getExtension("native_profiler");
        $__internal_7971b664b031963412559c86c52a57954fa0ad4c00f9b54e03ef46a1e7c49eb3->enter($__internal_7971b664b031963412559c86c52a57954fa0ad4c00f9b54e03ef46a1e7c49eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.language", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_7971b664b031963412559c86c52a57954fa0ad4c00f9b54e03ef46a1e7c49eb3->leave($__internal_7971b664b031963412559c86c52a57954fa0ad4c00f9b54e03ef46a1e7c49eb3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aa6869614460c7ce9c4140329889b89a0d52151f95f2227bab3308167caebe9 = $this->env->getExtension("native_profiler");
        $__internal_3aa6869614460c7ce9c4140329889b89a0d52151f95f2227bab3308167caebe9->enter($__internal_3aa6869614460c7ce9c4140329889b89a0d52151f95f2227bab3308167caebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Language:showactions.html.twig", "language/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Language:show.html.twig", "language/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>
";
        
        $__internal_3aa6869614460c7ce9c4140329889b89a0d52151f95f2227bab3308167caebe9->leave($__internal_3aa6869614460c7ce9c4140329889b89a0d52151f95f2227bab3308167caebe9_prof);

    }

    public function getTemplateName()
    {
        return "language/show.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.language'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.language'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Language:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Language:show.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
