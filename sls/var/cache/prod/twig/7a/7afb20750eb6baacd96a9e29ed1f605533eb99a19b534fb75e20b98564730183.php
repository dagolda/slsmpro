<?php

/* BoAdvisorsBundle:Tickets:edit.html.twig */
class __TwigTemplate_a85956fab63c8d6f39176b271ba91af7bfbda8706ebd6f5cb057342bd7b076f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Tickets:edit.html.twig", 1);
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
        $__internal_850df324bc645d7d27770108091a4f502acd9191d4573ae38510d5ad95a0e308 = $this->env->getExtension("native_profiler");
        $__internal_850df324bc645d7d27770108091a4f502acd9191d4573ae38510d5ad95a0e308->enter($__internal_850df324bc645d7d27770108091a4f502acd9191d4573ae38510d5ad95a0e308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850df324bc645d7d27770108091a4f502acd9191d4573ae38510d5ad95a0e308->leave($__internal_850df324bc645d7d27770108091a4f502acd9191d4573ae38510d5ad95a0e308_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9fd75d2140f63157322983e08632deae4508ebd9b98b1a0857aae260f5c69d4 = $this->env->getExtension("native_profiler");
        $__internal_a9fd75d2140f63157322983e08632deae4508ebd9b98b1a0857aae260f5c69d4->enter($__internal_a9fd75d2140f63157322983e08632deae4508ebd9b98b1a0857aae260f5c69d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_a9fd75d2140f63157322983e08632deae4508ebd9b98b1a0857aae260f5c69d4->leave($__internal_a9fd75d2140f63157322983e08632deae4508ebd9b98b1a0857aae260f5c69d4_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9cb52941030dfd13fd48ac707de52614ae7882a0c9839681c986cfe212432c39 = $this->env->getExtension("native_profiler");
        $__internal_9cb52941030dfd13fd48ac707de52614ae7882a0c9839681c986cfe212432c39->enter($__internal_9cb52941030dfd13fd48ac707de52614ae7882a0c9839681c986cfe212432c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Tickets:edit.html.twig", 3)->display($context);
        
        $__internal_9cb52941030dfd13fd48ac707de52614ae7882a0c9839681c986cfe212432c39->leave($__internal_9cb52941030dfd13fd48ac707de52614ae7882a0c9839681c986cfe212432c39_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0519c3bf74cec52534202b7f24c266132006b99e83a2d72e91bd3532907fe872 = $this->env->getExtension("native_profiler");
        $__internal_0519c3bf74cec52534202b7f24c266132006b99e83a2d72e91bd3532907fe872->enter($__internal_0519c3bf74cec52534202b7f24c266132006b99e83a2d72e91bd3532907fe872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_0519c3bf74cec52534202b7f24c266132006b99e83a2d72e91bd3532907fe872->leave($__internal_0519c3bf74cec52534202b7f24c266132006b99e83a2d72e91bd3532907fe872_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_372398de7f2c964517269c61824aef30d334206ee267773b2419328c6f1de107 = $this->env->getExtension("native_profiler");
        $__internal_372398de7f2c964517269c61824aef30d334206ee267773b2419328c6f1de107->enter($__internal_372398de7f2c964517269c61824aef30d334206ee267773b2419328c6f1de107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_372398de7f2c964517269c61824aef30d334206ee267773b2419328c6f1de107->leave($__internal_372398de7f2c964517269c61824aef30d334206ee267773b2419328c6f1de107_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23b1a7e7caf86361ed88458d5d394649ab9b36c1ffedd311490a3b870c833d9 = $this->env->getExtension("native_profiler");
        $__internal_b23b1a7e7caf86361ed88458d5d394649ab9b36c1ffedd311490a3b870c833d9->enter($__internal_b23b1a7e7caf86361ed88458d5d394649ab9b36c1ffedd311490a3b870c833d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_tickets_edit", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdvisorsBundle:Tickets:editactions.html.twig", "BoAdvisorsBundle:Tickets:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Tickets:newform.html.twig", "BoAdvisorsBundle:Tickets:edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_b23b1a7e7caf86361ed88458d5d394649ab9b36c1ffedd311490a3b870c833d9->leave($__internal_b23b1a7e7caf86361ed88458d5d394649ab9b36c1ffedd311490a3b870c833d9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('dash_tickets_edit',{'id':ticket.id}) }}" enctype="multipart/form-data" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdvisorsBundle:Tickets:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdvisorsBundle:Tickets:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
