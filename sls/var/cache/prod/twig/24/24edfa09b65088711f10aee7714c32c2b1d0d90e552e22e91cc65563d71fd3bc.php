<?php

/* BoStudentBundle:Tickets:show.html.twig */
class __TwigTemplate_4f234a8af6d9635eb14bd20d1225af76dd2862e842bda66ff2674f0ebe83cd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("student.html.twig", "BoStudentBundle:Tickets:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23d47ca8d08f18caecbde98a7022400583ce81c785fd3226bf5d1de48c477d25 = $this->env->getExtension("native_profiler");
        $__internal_23d47ca8d08f18caecbde98a7022400583ce81c785fd3226bf5d1de48c477d25->enter($__internal_23d47ca8d08f18caecbde98a7022400583ce81c785fd3226bf5d1de48c477d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Tickets:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d47ca8d08f18caecbde98a7022400583ce81c785fd3226bf5d1de48c477d25->leave($__internal_23d47ca8d08f18caecbde98a7022400583ce81c785fd3226bf5d1de48c477d25_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee13ab33b99bea22e5ad4933e9fe4c777d01d20fe14de3e240d85b019b3fb865 = $this->env->getExtension("native_profiler");
        $__internal_ee13ab33b99bea22e5ad4933e9fe4c777d01d20fe14de3e240d85b019b3fb865->enter($__internal_ee13ab33b99bea22e5ad4933e9fe4c777d01d20fe14de3e240d85b019b3fb865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/infobulle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_ee13ab33b99bea22e5ad4933e9fe4c777d01d20fe14de3e240d85b019b3fb865->leave($__internal_ee13ab33b99bea22e5ad4933e9fe4c777d01d20fe14de3e240d85b019b3fb865_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_de51ae4dcbe559357af733824e608c0477d99ef12498f170ac642cbd4b4c1ef7 = $this->env->getExtension("native_profiler");
        $__internal_de51ae4dcbe559357af733824e608c0477d99ef12498f170ac642cbd4b4c1ef7->enter($__internal_de51ae4dcbe559357af733824e608c0477d99ef12498f170ac642cbd4b4c1ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_de51ae4dcbe559357af733824e608c0477d99ef12498f170ac642cbd4b4c1ef7->leave($__internal_de51ae4dcbe559357af733824e608c0477d99ef12498f170ac642cbd4b4c1ef7_prof);

    }

    // line 7
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b07efbabc7c1c2f1e6ca2aa05be47b01e0940d64bb6ccb06ba2a4981512352c5 = $this->env->getExtension("native_profiler");
        $__internal_b07efbabc7c1c2f1e6ca2aa05be47b01e0940d64bb6ccb06ba2a4981512352c5->enter($__internal_b07efbabc7c1c2f1e6ca2aa05be47b01e0940d64bb6ccb06ba2a4981512352c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoStudentBundle:Default:request.html.twig", "BoStudentBundle:Tickets:show.html.twig", 7)->display($context);
        
        $__internal_b07efbabc7c1c2f1e6ca2aa05be47b01e0940d64bb6ccb06ba2a4981512352c5->leave($__internal_b07efbabc7c1c2f1e6ca2aa05be47b01e0940d64bb6ccb06ba2a4981512352c5_prof);

    }

    // line 8
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c78068c6d45d6d9c3da54c61126fb58dc656934fbd9898fd3977f7052849e6c6 = $this->env->getExtension("native_profiler");
        $__internal_c78068c6d45d6d9c3da54c61126fb58dc656934fbd9898fd3977f7052849e6c6->enter($__internal_c78068c6d45d6d9c3da54c61126fb58dc656934fbd9898fd3977f7052849e6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if ((array_key_exists("student", $context) && ((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")) != null))) {
            $this->loadTemplate("BoStudentBundle:Default:rightshow.html.twig", "BoStudentBundle:Tickets:show.html.twig", 8)->display($context);
        }
        
        $__internal_c78068c6d45d6d9c3da54c61126fb58dc656934fbd9898fd3977f7052849e6c6->leave($__internal_c78068c6d45d6d9c3da54c61126fb58dc656934fbd9898fd3977f7052849e6c6_prof);

    }

    // line 9
    public function block_label($context, array $blocks = array())
    {
        $__internal_6fdf5b9fe7be702ed13e82c074715faa4f569870e773124adeb0a6db6e666e61 = $this->env->getExtension("native_profiler");
        $__internal_6fdf5b9fe7be702ed13e82c074715faa4f569870e773124adeb0a6db6e666e61->enter($__internal_6fdf5b9fe7be702ed13e82c074715faa4f569870e773124adeb0a6db6e666e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " N°";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_6fdf5b9fe7be702ed13e82c074715faa4f569870e773124adeb0a6db6e666e61->leave($__internal_6fdf5b9fe7be702ed13e82c074715faa4f569870e773124adeb0a6db6e666e61_prof);

    }

    // line 10
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cbc5d8e2a98fe93ef83505d155aa0b3851ae5565f2876f756180a879401611e4 = $this->env->getExtension("native_profiler");
        $__internal_cbc5d8e2a98fe93ef83505d155aa0b3851ae5565f2876f756180a879401611e4->enter($__internal_cbc5d8e2a98fe93ef83505d155aa0b3851ae5565f2876f756180a879401611e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 11
        echo "\t";
        $this->loadTemplate("BoStudentBundle:Tickets:showactions.html.twig", "BoStudentBundle:Tickets:show.html.twig", 11)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_cbc5d8e2a98fe93ef83505d155aa0b3851ae5565f2876f756180a879401611e4->leave($__internal_cbc5d8e2a98fe93ef83505d155aa0b3851ae5565f2876f756180a879401611e4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f680fc8b151a8839ca1aff0ec9b20c1eb2a971a741529d31e21ba88fd8700c3 = $this->env->getExtension("native_profiler");
        $__internal_7f680fc8b151a8839ca1aff0ec9b20c1eb2a971a741529d31e21ba88fd8700c3->enter($__internal_7f680fc8b151a8839ca1aff0ec9b20c1eb2a971a741529d31e21ba88fd8700c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t<div class=\"show_content\">
\t\t";
        // line 15
        $this->loadTemplate("BoStudentBundle:Tickets:tbshow.html.twig", "BoStudentBundle:Tickets:show.html.twig", 15)->display($context);
        // line 16
        echo "\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_7f680fc8b151a8839ca1aff0ec9b20c1eb2a971a741529d31e21ba88fd8700c3->leave($__internal_7f680fc8b151a8839ca1aff0ec9b20c1eb2a971a741529d31e21ba88fd8700c3_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13b9d860519c31fc528e95426366e77b0972ff5a0b9cdfa4ae4862b5084116ba = $this->env->getExtension("native_profiler");
        $__internal_13b9d860519c31fc528e95426366e77b0972ff5a0b9cdfa4ae4862b5084116ba->enter($__internal_13b9d860519c31fc528e95426366e77b0972ff5a0b9cdfa4ae4862b5084116ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_13b9d860519c31fc528e95426366e77b0972ff5a0b9cdfa4ae4862b5084116ba->leave($__internal_13b9d860519c31fc528e95426366e77b0972ff5a0b9cdfa4ae4862b5084116ba_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Tickets:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 19,  163 => 18,  151 => 17,  148 => 16,  146 => 15,  143 => 14,  137 => 13,  127 => 11,  121 => 10,  103 => 9,  89 => 8,  77 => 7,  61 => 6,  52 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends 'student.html.twig' %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<link rel="stylesheet" href="{{ asset('css/infobulle.css') }}">*/
/* {% endblock %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoStudentBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if student is defined and student!=null%}{%include "BoStudentBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} N°{{ ticket.id }} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoStudentBundle:Tickets:showactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="show_content">*/
/* 		{%include "BoStudentBundle:Tickets:tbshow.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
