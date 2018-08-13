<?php

/* rubric/index.html.twig */
class __TwigTemplate_1f00025f8ae0edf9fb148382a45649ad865ece287bed339ab6f3ed9b22270e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rubric/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_555e8d333a57e7d85941c8d3f1a3fec179a3c625f2be0e016bfa942f4372e37d = $this->env->getExtension("native_profiler");
        $__internal_555e8d333a57e7d85941c8d3f1a3fec179a3c625f2be0e016bfa942f4372e37d->enter($__internal_555e8d333a57e7d85941c8d3f1a3fec179a3c625f2be0e016bfa942f4372e37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rubric/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_555e8d333a57e7d85941c8d3f1a3fec179a3c625f2be0e016bfa942f4372e37d->leave($__internal_555e8d333a57e7d85941c8d3f1a3fec179a3c625f2be0e016bfa942f4372e37d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_817aa023dc4eb5391448800e433acd079f38e4d631cbc5e088daac16596fc908 = $this->env->getExtension("native_profiler");
        $__internal_817aa023dc4eb5391448800e433acd079f38e4d631cbc5e088daac16596fc908->enter($__internal_817aa023dc4eb5391448800e433acd079f38e4d631cbc5e088daac16596fc908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_817aa023dc4eb5391448800e433acd079f38e4d631cbc5e088daac16596fc908->leave($__internal_817aa023dc4eb5391448800e433acd079f38e4d631cbc5e088daac16596fc908_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d86403186180af0d53e19ba5be2c4a63d34927536793c39f662bdb831332ccbb = $this->env->getExtension("native_profiler");
        $__internal_d86403186180af0d53e19ba5be2c4a63d34927536793c39f662bdb831332ccbb->enter($__internal_d86403186180af0d53e19ba5be2c4a63d34927536793c39f662bdb831332ccbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "rubric/index.html.twig", 3)->display($context);
        
        $__internal_d86403186180af0d53e19ba5be2c4a63d34927536793c39f662bdb831332ccbb->leave($__internal_d86403186180af0d53e19ba5be2c4a63d34927536793c39f662bdb831332ccbb_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f8f42ae6b7d7e9449e20130ac774f5bea45411771b92660d20580413f46bc449 = $this->env->getExtension("native_profiler");
        $__internal_f8f42ae6b7d7e9449e20130ac774f5bea45411771b92660d20580413f46bc449->enter($__internal_f8f42ae6b7d7e9449e20130ac774f5bea45411771b92660d20580413f46bc449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_f8f42ae6b7d7e9449e20130ac774f5bea45411771b92660d20580413f46bc449->leave($__internal_f8f42ae6b7d7e9449e20130ac774f5bea45411771b92660d20580413f46bc449_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_300d6cf057ff64354958e5c89cb843ec940c6c86e34a6c42089c121afcf85c30 = $this->env->getExtension("native_profiler");
        $__internal_300d6cf057ff64354958e5c89cb843ec940c6c86e34a6c42089c121afcf85c30->enter($__internal_300d6cf057ff64354958e5c89cb843ec940c6c86e34a6c42089c121afcf85c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_300d6cf057ff64354958e5c89cb843ec940c6c86e34a6c42089c121afcf85c30->leave($__internal_300d6cf057ff64354958e5c89cb843ec940c6c86e34a6c42089c121afcf85c30_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fea6d7e702a9bb7f60391f08a887a0b84865223f0f589dca4a29e431f573bfc5 = $this->env->getExtension("native_profiler");
        $__internal_fea6d7e702a9bb7f60391f08a887a0b84865223f0f589dca4a29e431f573bfc5->enter($__internal_fea6d7e702a9bb7f60391f08a887a0b84865223f0f589dca4a29e431f573bfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Rubric:actions.html.twig", "rubric/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_fea6d7e702a9bb7f60391f08a887a0b84865223f0f589dca4a29e431f573bfc5->leave($__internal_fea6d7e702a9bb7f60391f08a887a0b84865223f0f589dca4a29e431f573bfc5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e99c4957aab96622b16fd3c93a3544cc3207e1335a8f66deed35d2f361ee67ac = $this->env->getExtension("native_profiler");
        $__internal_e99c4957aab96622b16fd3c93a3544cc3207e1335a8f66deed35d2f361ee67ac->enter($__internal_e99c4957aab96622b16fd3c93a3544cc3207e1335a8f66deed35d2f361ee67ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Rubric:tbliste.html.twig", "rubric/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
";
        
        $__internal_e99c4957aab96622b16fd3c93a3544cc3207e1335a8f66deed35d2f361ee67ac->leave($__internal_e99c4957aab96622b16fd3c93a3544cc3207e1335a8f66deed35d2f361ee67ac_prof);

    }

    public function getTemplateName()
    {
        return "rubric/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  121 => 12,  118 => 11,  112 => 10,  102 => 8,  96 => 7,  80 => 6,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Rubric:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Rubric:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
