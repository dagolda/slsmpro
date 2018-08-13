<?php

/* BoAdvisorsBundle:Absences:new.html.twig */
class __TwigTemplate_42657a747d106ef5aa6d067e1aef1509423bfc0dbed6281cb920d775f5777b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Absences:new.html.twig", 1);
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
        $__internal_fd7b275d4274d28f433eab061a877b96c50cdd5949b1acf960e9563f502f4684 = $this->env->getExtension("native_profiler");
        $__internal_fd7b275d4274d28f433eab061a877b96c50cdd5949b1acf960e9563f502f4684->enter($__internal_fd7b275d4274d28f433eab061a877b96c50cdd5949b1acf960e9563f502f4684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7b275d4274d28f433eab061a877b96c50cdd5949b1acf960e9563f502f4684->leave($__internal_fd7b275d4274d28f433eab061a877b96c50cdd5949b1acf960e9563f502f4684_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d6e1b89f9c6990e9972d1e6318676c2a9912624cd15031d321647abc7ed99ed = $this->env->getExtension("native_profiler");
        $__internal_2d6e1b89f9c6990e9972d1e6318676c2a9912624cd15031d321647abc7ed99ed->enter($__internal_2d6e1b89f9c6990e9972d1e6318676c2a9912624cd15031d321647abc7ed99ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.request", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_2d6e1b89f9c6990e9972d1e6318676c2a9912624cd15031d321647abc7ed99ed->leave($__internal_2d6e1b89f9c6990e9972d1e6318676c2a9912624cd15031d321647abc7ed99ed_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_66b30cf6558c888546ff717e9be81ae7cbd8ff32cf303cf33ee42065ef0ded4c = $this->env->getExtension("native_profiler");
        $__internal_66b30cf6558c888546ff717e9be81ae7cbd8ff32cf303cf33ee42065ef0ded4c->enter($__internal_66b30cf6558c888546ff717e9be81ae7cbd8ff32cf303cf33ee42065ef0ded4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Absences:new.html.twig", 3)->display($context);
        
        $__internal_66b30cf6558c888546ff717e9be81ae7cbd8ff32cf303cf33ee42065ef0ded4c->leave($__internal_66b30cf6558c888546ff717e9be81ae7cbd8ff32cf303cf33ee42065ef0ded4c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_07832ea8acb81a63a8b2e15762114cd01e1e56f3aa48d42405c02bc36665e7f7 = $this->env->getExtension("native_profiler");
        $__internal_07832ea8acb81a63a8b2e15762114cd01e1e56f3aa48d42405c02bc36665e7f7->enter($__internal_07832ea8acb81a63a8b2e15762114cd01e1e56f3aa48d42405c02bc36665e7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_07832ea8acb81a63a8b2e15762114cd01e1e56f3aa48d42405c02bc36665e7f7->leave($__internal_07832ea8acb81a63a8b2e15762114cd01e1e56f3aa48d42405c02bc36665e7f7_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_20117e53994f22ce6bb795b4f8cb0097348e56f2ff27218c0ec57060d500fdd3 = $this->env->getExtension("native_profiler");
        $__internal_20117e53994f22ce6bb795b4f8cb0097348e56f2ff27218c0ec57060d500fdd3->enter($__internal_20117e53994f22ce6bb795b4f8cb0097348e56f2ff27218c0ec57060d500fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.request", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_20117e53994f22ce6bb795b4f8cb0097348e56f2ff27218c0ec57060d500fdd3->leave($__internal_20117e53994f22ce6bb795b4f8cb0097348e56f2ff27218c0ec57060d500fdd3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_33f8a29fd223e7795f278d2baedf06fb5054a4dd9f65a3297cb204c90f67c0ae = $this->env->getExtension("native_profiler");
        $__internal_33f8a29fd223e7795f278d2baedf06fb5054a4dd9f65a3297cb204c90f67c0ae->enter($__internal_33f8a29fd223e7795f278d2baedf06fb5054a4dd9f65a3297cb204c90f67c0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("dash_absences_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdvisorsBundle:Absences:newactions.html.twig", "BoAdvisorsBundle:Absences:new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Absences:newform.html.twig", "BoAdvisorsBundle:Absences:new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_33f8a29fd223e7795f278d2baedf06fb5054a4dd9f65a3297cb204c90f67c0ae->leave($__internal_33f8a29fd223e7795f278d2baedf06fb5054a4dd9f65a3297cb204c90f67c0ae_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 14,  121 => 13,  119 => 12,  116 => 11,  114 => 10,  110 => 9,  106 => 8,  103 => 7,  97 => 6,  79 => 5,  68 => 4,  56 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'label.request'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'label.request'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('dash_absences_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdvisorsBundle:Absences:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdvisorsBundle:Absences:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
