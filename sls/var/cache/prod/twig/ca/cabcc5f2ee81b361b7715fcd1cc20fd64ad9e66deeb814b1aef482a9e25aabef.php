<?php

/* teamcontacts/edit.html.twig */
class __TwigTemplate_13df39f6847b4b32da08a9081e835075f4b86c50ae5ca4885ec850289d98b600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "teamcontacts/edit.html.twig", 1);
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
        $__internal_316842e779f0362578fe70d081c145fbf25ad9e6f6f808309494b176e78db208 = $this->env->getExtension("native_profiler");
        $__internal_316842e779f0362578fe70d081c145fbf25ad9e6f6f808309494b176e78db208->enter($__internal_316842e779f0362578fe70d081c145fbf25ad9e6f6f808309494b176e78db208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teamcontacts/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316842e779f0362578fe70d081c145fbf25ad9e6f6f808309494b176e78db208->leave($__internal_316842e779f0362578fe70d081c145fbf25ad9e6f6f808309494b176e78db208_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c36f3bca51cb2e64e7007ad881cbf9dc4d71b9ab465153c239029ed43c2e7485 = $this->env->getExtension("native_profiler");
        $__internal_c36f3bca51cb2e64e7007ad881cbf9dc4d71b9ab465153c239029ed43c2e7485->enter($__internal_c36f3bca51cb2e64e7007ad881cbf9dc4d71b9ab465153c239029ed43c2e7485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_c36f3bca51cb2e64e7007ad881cbf9dc4d71b9ab465153c239029ed43c2e7485->leave($__internal_c36f3bca51cb2e64e7007ad881cbf9dc4d71b9ab465153c239029ed43c2e7485_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_22e01e8295405257ed9247aeb965e9005e6786c751bf2a4ec52f48fcd97f497f = $this->env->getExtension("native_profiler");
        $__internal_22e01e8295405257ed9247aeb965e9005e6786c751bf2a4ec52f48fcd97f497f->enter($__internal_22e01e8295405257ed9247aeb965e9005e6786c751bf2a4ec52f48fcd97f497f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "teamcontacts/edit.html.twig", 3)->display($context);
        
        $__internal_22e01e8295405257ed9247aeb965e9005e6786c751bf2a4ec52f48fcd97f497f->leave($__internal_22e01e8295405257ed9247aeb965e9005e6786c751bf2a4ec52f48fcd97f497f_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a3748e7a4402524211117724d725956104e1308fab6b017a5ea3711598b06ba9 = $this->env->getExtension("native_profiler");
        $__internal_a3748e7a4402524211117724d725956104e1308fab6b017a5ea3711598b06ba9->enter($__internal_a3748e7a4402524211117724d725956104e1308fab6b017a5ea3711598b06ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_a3748e7a4402524211117724d725956104e1308fab6b017a5ea3711598b06ba9->leave($__internal_a3748e7a4402524211117724d725956104e1308fab6b017a5ea3711598b06ba9_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_4bcfe5fc5ac29a9ed349401d19ab8a1d2c50d702d8d42ddf951ecc48be2efbe0 = $this->env->getExtension("native_profiler");
        $__internal_4bcfe5fc5ac29a9ed349401d19ab8a1d2c50d702d8d42ddf951ecc48be2efbe0->enter($__internal_4bcfe5fc5ac29a9ed349401d19ab8a1d2c50d702d8d42ddf951ecc48be2efbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4bcfe5fc5ac29a9ed349401d19ab8a1d2c50d702d8d42ddf951ecc48be2efbe0->leave($__internal_4bcfe5fc5ac29a9ed349401d19ab8a1d2c50d702d8d42ddf951ecc48be2efbe0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e2c14aa5d14cdcab3837bb32b31a103396d5a66e1d138a669149403d7050dc9 = $this->env->getExtension("native_profiler");
        $__internal_4e2c14aa5d14cdcab3837bb32b31a103396d5a66e1d138a669149403d7050dc9->enter($__internal_4e2c14aa5d14cdcab3837bb32b31a103396d5a66e1d138a669149403d7050dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teamcontacts_edit", array("id" => $this->getAttribute((isset($context["teamcontacts"]) ? $context["teamcontacts"] : $this->getContext($context, "teamcontacts")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:TeamContacts:editactions.html.twig", "teamcontacts/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:TeamContacts:editform.html.twig", "teamcontacts/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_4e2c14aa5d14cdcab3837bb32b31a103396d5a66e1d138a669149403d7050dc9->leave($__internal_4e2c14aa5d14cdcab3837bb32b31a103396d5a66e1d138a669149403d7050dc9_prof);

    }

    public function getTemplateName()
    {
        return "teamcontacts/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.teamcontacts'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.teamcontacts'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('teamcontacts_edit',{'id':teamcontacts.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:TeamContacts:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:TeamContacts:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
