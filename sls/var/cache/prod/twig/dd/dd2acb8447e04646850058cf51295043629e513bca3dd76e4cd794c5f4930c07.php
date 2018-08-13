<?php

/* BoHomeBundle:Default:errors.html.twig */
class __TwigTemplate_dbd0226912dd2e2a89220ad909ab478b809f2cc0aa45bc8c41cbec82a681c2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home.html.twig", "BoHomeBundle:Default:errors.html.twig", 1);
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
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a231b1d66ecb22598d1dd36ef5f7b80e1d302fbbb6394edc432ae60baae4e10b = $this->env->getExtension("native_profiler");
        $__internal_a231b1d66ecb22598d1dd36ef5f7b80e1d302fbbb6394edc432ae60baae4e10b->enter($__internal_a231b1d66ecb22598d1dd36ef5f7b80e1d302fbbb6394edc432ae60baae4e10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:errors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a231b1d66ecb22598d1dd36ef5f7b80e1d302fbbb6394edc432ae60baae4e10b->leave($__internal_a231b1d66ecb22598d1dd36ef5f7b80e1d302fbbb6394edc432ae60baae4e10b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_14aea614f31985f965152bd5763e1277e3f35cdf5bfef6ff297366625c839e72 = $this->env->getExtension("native_profiler");
        $__internal_14aea614f31985f965152bd5763e1277e3f35cdf5bfef6ff297366625c839e72->enter($__internal_14aea614f31985f965152bd5763e1277e3f35cdf5bfef6ff297366625c839e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.technical.error", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_14aea614f31985f965152bd5763e1277e3f35cdf5bfef6ff297366625c839e72->leave($__internal_14aea614f31985f965152bd5763e1277e3f35cdf5bfef6ff297366625c839e72_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_288a4740329089c6417719434a9bb2fc72b6591b80de75ab8cf9693e95c9bafe = $this->env->getExtension("native_profiler");
        $__internal_288a4740329089c6417719434a9bb2fc72b6591b80de75ab8cf9693e95c9bafe->enter($__internal_288a4740329089c6417719434a9bb2fc72b6591b80de75ab8cf9693e95c9bafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:tdb.html.twig", "BoHomeBundle:Default:errors.html.twig", 3)->display($context);
        
        $__internal_288a4740329089c6417719434a9bb2fc72b6591b80de75ab8cf9693e95c9bafe->leave($__internal_288a4740329089c6417719434a9bb2fc72b6591b80de75ab8cf9693e95c9bafe_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4704bd24ed4ea50a5d2b6cfbf0154f4865092483b2c7c223543bf507bc2117d9 = $this->env->getExtension("native_profiler");
        $__internal_4704bd24ed4ea50a5d2b6cfbf0154f4865092483b2c7c223543bf507bc2117d9->enter($__internal_4704bd24ed4ea50a5d2b6cfbf0154f4865092483b2c7c223543bf507bc2117d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Default:errors.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_4704bd24ed4ea50a5d2b6cfbf0154f4865092483b2c7c223543bf507bc2117d9->leave($__internal_4704bd24ed4ea50a5d2b6cfbf0154f4865092483b2c7c223543bf507bc2117d9_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_2af5da75f81aa5ba6cb3e7c4f3d519e3744556b8107092b5435d4c5b93e87ac7 = $this->env->getExtension("native_profiler");
        $__internal_2af5da75f81aa5ba6cb3e7c4f3d519e3744556b8107092b5435d4c5b93e87ac7->enter($__internal_2af5da75f81aa5ba6cb3e7c4f3d519e3744556b8107092b5435d4c5b93e87ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.technical.error", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_2af5da75f81aa5ba6cb3e7c4f3d519e3744556b8107092b5435d4c5b93e87ac7->leave($__internal_2af5da75f81aa5ba6cb3e7c4f3d519e3744556b8107092b5435d4c5b93e87ac7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_505c5bfb3602465dd3395884ba7bc37a625ab4beb9cf06cbdc694dd2d1b90766 = $this->env->getExtension("native_profiler");
        $__internal_505c5bfb3602465dd3395884ba7bc37a625ab4beb9cf06cbdc694dd2d1b90766->enter($__internal_505c5bfb3602465dd3395884ba7bc37a625ab4beb9cf06cbdc694dd2d1b90766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"content-liste\">
\t\t<p class=\"error_message\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.something.broken", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t<div class=\"image-sorry\">
\t\t\t<center><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/errors/", 1 => (isset($context["imgname"]) ? $context["imgname"] : $this->getContext($context, "imgname"))))), "html", null, true);
        echo "\" width=\"225\"/></center>
\t\t</div>
\t</div>
";
        
        $__internal_505c5bfb3602465dd3395884ba7bc37a625ab4beb9cf06cbdc694dd2d1b90766->leave($__internal_505c5bfb3602465dd3395884ba7bc37a625ab4beb9cf06cbdc694dd2d1b90766_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 12,  106 => 10,  103 => 9,  97 => 8,  83 => 7,  72 => 5,  64 => 4,  52 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'home.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'label.technical.error'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'label.technical.error'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		<p class="error_message">{{'message.something.broken'|trans([],'BoAdminBundle')}}</p>*/
/* 		<div class="image-sorry">*/
/* 			<center><img src="{{ asset(['images/errors/', imgname]|join) }}" width="225"/></center>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
