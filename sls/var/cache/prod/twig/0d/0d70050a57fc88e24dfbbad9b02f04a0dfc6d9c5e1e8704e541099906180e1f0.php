<?php

/* BoHomeBundle:Default:edit.html.twig */
class __TwigTemplate_c14242e6a0c4dc6ddce05afde98a45fe723c7c441960d3398d68043843da6e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoHomeBundle:Default:edit.html.twig", 1);
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
        $__internal_ef5e40039b120f89f6c0362890e1e75681e3d9b917dd84c677c80cebcd7eeb01 = $this->env->getExtension("native_profiler");
        $__internal_ef5e40039b120f89f6c0362890e1e75681e3d9b917dd84c677c80cebcd7eeb01->enter($__internal_ef5e40039b120f89f6c0362890e1e75681e3d9b917dd84c677c80cebcd7eeb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5e40039b120f89f6c0362890e1e75681e3d9b917dd84c677c80cebcd7eeb01->leave($__internal_ef5e40039b120f89f6c0362890e1e75681e3d9b917dd84c677c80cebcd7eeb01_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f3a544bd09880427c052f6a8431b56483e4c7b4af6bae2c482ebfed0023e34e = $this->env->getExtension("native_profiler");
        $__internal_9f3a544bd09880427c052f6a8431b56483e4c7b4af6bae2c482ebfed0023e34e->enter($__internal_9f3a544bd09880427c052f6a8431b56483e4c7b4af6bae2c482ebfed0023e34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9f3a544bd09880427c052f6a8431b56483e4c7b4af6bae2c482ebfed0023e34e->leave($__internal_9f3a544bd09880427c052f6a8431b56483e4c7b4af6bae2c482ebfed0023e34e_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c8004b85565ace227ccddf3944dfc7a8415da88c9520eed18ba27f77f1a62dfa = $this->env->getExtension("native_profiler");
        $__internal_c8004b85565ace227ccddf3944dfc7a8415da88c9520eed18ba27f77f1a62dfa->enter($__internal_c8004b85565ace227ccddf3944dfc7a8415da88c9520eed18ba27f77f1a62dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:tdb.html.twig", "BoHomeBundle:Default:edit.html.twig", 3)->display($context);
        
        $__internal_c8004b85565ace227ccddf3944dfc7a8415da88c9520eed18ba27f77f1a62dfa->leave($__internal_c8004b85565ace227ccddf3944dfc7a8415da88c9520eed18ba27f77f1a62dfa_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_525011c5fe5d746c9741bcaf110a191b32dd8ff5430896cfbc7546c1a7482e07 = $this->env->getExtension("native_profiler");
        $__internal_525011c5fe5d746c9741bcaf110a191b32dd8ff5430896cfbc7546c1a7482e07->enter($__internal_525011c5fe5d746c9741bcaf110a191b32dd8ff5430896cfbc7546c1a7482e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_525011c5fe5d746c9741bcaf110a191b32dd8ff5430896cfbc7546c1a7482e07->leave($__internal_525011c5fe5d746c9741bcaf110a191b32dd8ff5430896cfbc7546c1a7482e07_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_d27c35119b35d94fe216561e1d75d7a7f869afb1d8f7e6cd047ca6bee77f5957 = $this->env->getExtension("native_profiler");
        $__internal_d27c35119b35d94fe216561e1d75d7a7f869afb1d8f7e6cd047ca6bee77f5957->enter($__internal_d27c35119b35d94fe216561e1d75d7a7f869afb1d8f7e6cd047ca6bee77f5957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.useredit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_d27c35119b35d94fe216561e1d75d7a7f869afb1d8f7e6cd047ca6bee77f5957->leave($__internal_d27c35119b35d94fe216561e1d75d7a7f869afb1d8f7e6cd047ca6bee77f5957_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d6263aecdc01b7e3837a7a5acc520a1f58699b18ca4939b127e39415618aa61 = $this->env->getExtension("native_profiler");
        $__internal_2d6263aecdc01b7e3837a7a5acc520a1f58699b18ca4939b127e39415618aa61->enter($__internal_2d6263aecdc01b7e3837a7a5acc520a1f58699b18ca4939b127e39415618aa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("bo_home_edit");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoHomeBundle:Default:editactions.html.twig", "BoHomeBundle:Default:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoHomeBundle:Default:editform.html.twig", "BoHomeBundle:Default:edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_2d6263aecdc01b7e3837a7a5acc520a1f58699b18ca4939b127e39415618aa61->leave($__internal_2d6263aecdc01b7e3837a7a5acc520a1f58699b18ca4939b127e39415618aa61_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 14,  115 => 13,  113 => 12,  110 => 11,  108 => 10,  104 => 9,  100 => 8,  97 => 7,  91 => 6,  75 => 5,  64 => 4,  52 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'admin.default.home'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'admin.default.home'|trans([],'BoAdminBundle')}} >> {{'title.useredit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('bo_home_edit') }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoHomeBundle:Default:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoHomeBundle:Default:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
