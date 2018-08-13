<?php

/* base.html.twig */
class __TwigTemplate_3d90092f6fecd06176b25c3bb13b60ddc963ac28a01627e7dfb231455090248b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "base.html.twig", 1);
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
        $__internal_e295381b53d75306feb240032aba22a18a32a86b54795718aeb56e41800eba9a = $this->env->getExtension("native_profiler");
        $__internal_e295381b53d75306feb240032aba22a18a32a86b54795718aeb56e41800eba9a->enter($__internal_e295381b53d75306feb240032aba22a18a32a86b54795718aeb56e41800eba9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e295381b53d75306feb240032aba22a18a32a86b54795718aeb56e41800eba9a->leave($__internal_e295381b53d75306feb240032aba22a18a32a86b54795718aeb56e41800eba9a_prof);

    }

    // line 2
    public function block_hright($context, array $blocks = array())
    {
        $__internal_d7508b38c4f0ccd68533f88ca0a5104832102bbc6006afdfe13c20e2a8ad294d = $this->env->getExtension("native_profiler");
        $__internal_d7508b38c4f0ccd68533f88ca0a5104832102bbc6006afdfe13c20e2a8ad294d->enter($__internal_d7508b38c4f0ccd68533f88ca0a5104832102bbc6006afdfe13c20e2a8ad294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        // line 3
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Default:userinfo.html.twig", "base.html.twig", 3)->display($context);
        
        $__internal_d7508b38c4f0ccd68533f88ca0a5104832102bbc6006afdfe13c20e2a8ad294d->leave($__internal_d7508b38c4f0ccd68533f88ca0a5104832102bbc6006afdfe13c20e2a8ad294d_prof);

    }

    // line 5
    public function block_nemu($context, array $blocks = array())
    {
        $__internal_693f97156d7545e56c9ceb327123cdbc23535e95b7dfba1623936eea1d057dd9 = $this->env->getExtension("native_profiler");
        $__internal_693f97156d7545e56c9ceb327123cdbc23535e95b7dfba1623936eea1d057dd9->enter($__internal_693f97156d7545e56c9ceb327123cdbc23535e95b7dfba1623936eea1d057dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nemu"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Default:pm.html.twig", "base.html.twig", 6)->display($context);
        
        $__internal_693f97156d7545e56c9ceb327123cdbc23535e95b7dfba1623936eea1d057dd9->leave($__internal_693f97156d7545e56c9ceb327123cdbc23535e95b7dfba1623936eea1d057dd9_prof);

    }

    // line 8
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_833e68f3cab70546e5fb299b6239a54ef6ab62fc6c2df98384741adea3ac86a6 = $this->env->getExtension("native_profiler");
        $__internal_833e68f3cab70546e5fb299b6239a54ef6ab62fc6c2df98384741adea3ac86a6->enter($__internal_833e68f3cab70546e5fb299b6239a54ef6ab62fc6c2df98384741adea3ac86a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_833e68f3cab70546e5fb299b6239a54ef6ab62fc6c2df98384741adea3ac86a6->leave($__internal_833e68f3cab70546e5fb299b6239a54ef6ab62fc6c2df98384741adea3ac86a6_prof);

    }

    // line 10
    public function block_right($context, array $blocks = array())
    {
        $__internal_a9d575136bd098008f0054d9854c01d67093c98ba685f6c556928e2715244477 = $this->env->getExtension("native_profiler");
        $__internal_a9d575136bd098008f0054d9854c01d67093c98ba685f6c556928e2715244477->enter($__internal_a9d575136bd098008f0054d9854c01d67093c98ba685f6c556928e2715244477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 11
        echo "\t<div class=\"col-sm-2 sidenav\">
\t\t<div class=\"well\">
\t\t\t";
        // line 13
        $this->displayBlock('nav', $context, $blocks);
        echo "\t\t\t\t\t\t\t
\t\t</div>
\t\t<!--div class=\"well\">
\t\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Default:slogan.html.twig", "base.html.twig", 16)->display($context);
        echo "\t\t\t\t\t\t
\t\t</div-->
\t</div>
";
        
        $__internal_a9d575136bd098008f0054d9854c01d67093c98ba685f6c556928e2715244477->leave($__internal_a9d575136bd098008f0054d9854c01d67093c98ba685f6c556928e2715244477_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_65fb4e2aa5faf385d4e2fe54100f32fa0c23fe1700cceb8213f47dbc97ba5242 = $this->env->getExtension("native_profiler");
        $__internal_65fb4e2aa5faf385d4e2fe54100f32fa0c23fe1700cceb8213f47dbc97ba5242->enter($__internal_65fb4e2aa5faf385d4e2fe54100f32fa0c23fe1700cceb8213f47dbc97ba5242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_65fb4e2aa5faf385d4e2fe54100f32fa0c23fe1700cceb8213f47dbc97ba5242->leave($__internal_65fb4e2aa5faf385d4e2fe54100f32fa0c23fe1700cceb8213f47dbc97ba5242_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  93 => 16,  87 => 13,  83 => 11,  77 => 10,  66 => 8,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'common.html.twig' %}*/
/* {% block hright%}*/
/* 	{%include "BoAdminBundle:Default:userinfo.html.twig"%}*/
/* {% endblock %}*/
/* {% block nemu %}*/
/* 	{%include "BoAdminBundle:Default:pm.html.twig"%}*/
/* {% endblock %}*/
/* {% block smenu %}*/
/* {% endblock %}	*/
/* {% block right %}*/
/* 	<div class="col-sm-2 sidenav">*/
/* 		<div class="well">*/
/* 			{% block nav %}{% endblock %}							*/
/* 		</div>*/
/* 		<!--div class="well">*/
/* 			{%include "BoAdminBundle:Default:slogan.html.twig"%}						*/
/* 		</div-->*/
/* 	</div>*/
/* {% endblock %}							*/
/* */
/* */
