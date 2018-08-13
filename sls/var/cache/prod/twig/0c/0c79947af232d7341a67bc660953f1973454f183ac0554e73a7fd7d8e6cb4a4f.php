<?php

/* local/new.html.twig */
class __TwigTemplate_1fd4d54f69678d8658e96b3327a5e0e338f80cc36ff9101a634f3589d9292e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "local/new.html.twig", 1);
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
        $__internal_d8e0b11c00148b0afc5e84c05622a173a0f710caca612ebb04ab01e95e44c315 = $this->env->getExtension("native_profiler");
        $__internal_d8e0b11c00148b0afc5e84c05622a173a0f710caca612ebb04ab01e95e44c315->enter($__internal_d8e0b11c00148b0afc5e84c05622a173a0f710caca612ebb04ab01e95e44c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "local/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e0b11c00148b0afc5e84c05622a173a0f710caca612ebb04ab01e95e44c315->leave($__internal_d8e0b11c00148b0afc5e84c05622a173a0f710caca612ebb04ab01e95e44c315_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_23f9e7d26316d19bcdcaaaa591b84e05fecd43b5c53253af50ab3e3d68475ce1 = $this->env->getExtension("native_profiler");
        $__internal_23f9e7d26316d19bcdcaaaa591b84e05fecd43b5c53253af50ab3e3d68475ce1->enter($__internal_23f9e7d26316d19bcdcaaaa591b84e05fecd43b5c53253af50ab3e3d68475ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_23f9e7d26316d19bcdcaaaa591b84e05fecd43b5c53253af50ab3e3d68475ce1->leave($__internal_23f9e7d26316d19bcdcaaaa591b84e05fecd43b5c53253af50ab3e3d68475ce1_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0fb2468d8f6d71dd55a81b1d72507c8066ab5207fb0b3447a256689f9d940ae8 = $this->env->getExtension("native_profiler");
        $__internal_0fb2468d8f6d71dd55a81b1d72507c8066ab5207fb0b3447a256689f9d940ae8->enter($__internal_0fb2468d8f6d71dd55a81b1d72507c8066ab5207fb0b3447a256689f9d940ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "local/new.html.twig", 3)->display($context);
        
        $__internal_0fb2468d8f6d71dd55a81b1d72507c8066ab5207fb0b3447a256689f9d940ae8->leave($__internal_0fb2468d8f6d71dd55a81b1d72507c8066ab5207fb0b3447a256689f9d940ae8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7d9719df40aec8dbdc0d3a73135ed993b4cc3c72b1513b2c98e8a14e307844ab = $this->env->getExtension("native_profiler");
        $__internal_7d9719df40aec8dbdc0d3a73135ed993b4cc3c72b1513b2c98e8a14e307844ab->enter($__internal_7d9719df40aec8dbdc0d3a73135ed993b4cc3c72b1513b2c98e8a14e307844ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_7d9719df40aec8dbdc0d3a73135ed993b4cc3c72b1513b2c98e8a14e307844ab->leave($__internal_7d9719df40aec8dbdc0d3a73135ed993b4cc3c72b1513b2c98e8a14e307844ab_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_ded813d81e3145ec2fda0aa3a3ac35d92db7fe336b62ad9ad792fd9939ed26a5 = $this->env->getExtension("native_profiler");
        $__internal_ded813d81e3145ec2fda0aa3a3ac35d92db7fe336b62ad9ad792fd9939ed26a5->enter($__internal_ded813d81e3145ec2fda0aa3a3ac35d92db7fe336b62ad9ad792fd9939ed26a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ded813d81e3145ec2fda0aa3a3ac35d92db7fe336b62ad9ad792fd9939ed26a5->leave($__internal_ded813d81e3145ec2fda0aa3a3ac35d92db7fe336b62ad9ad792fd9939ed26a5_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_924662854f2d0fb3a4cb19feac8da3f941af08bcc81d4b709d2b0e4cadc7e255 = $this->env->getExtension("native_profiler");
        $__internal_924662854f2d0fb3a4cb19feac8da3f941af08bcc81d4b709d2b0e4cadc7e255->enter($__internal_924662854f2d0fb3a4cb19feac8da3f941af08bcc81d4b709d2b0e4cadc7e255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("local_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Local:newactions.html.twig", "local/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Local:newform.html.twig", "local/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>\t\t\t
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_924662854f2d0fb3a4cb19feac8da3f941af08bcc81d4b709d2b0e4cadc7e255->leave($__internal_924662854f2d0fb3a4cb19feac8da3f941af08bcc81d4b709d2b0e4cadc7e255_prof);

    }

    public function getTemplateName()
    {
        return "local/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('local_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Local:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Local:newform.html.twig"%}*/
/* 			</div>			*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
