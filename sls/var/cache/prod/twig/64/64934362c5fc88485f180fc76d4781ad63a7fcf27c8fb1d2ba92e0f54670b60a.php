<?php

/* client/edit.html.twig */
class __TwigTemplate_b40840c6b63c642af122394096af09c55d67e1874888f94f6134f84a4b065f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        $__internal_d35334144cc23aa4d462e1b97f3e9b741405ca1550fb629d6921677e288688bd = $this->env->getExtension("native_profiler");
        $__internal_d35334144cc23aa4d462e1b97f3e9b741405ca1550fb629d6921677e288688bd->enter($__internal_d35334144cc23aa4d462e1b97f3e9b741405ca1550fb629d6921677e288688bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35334144cc23aa4d462e1b97f3e9b741405ca1550fb629d6921677e288688bd->leave($__internal_d35334144cc23aa4d462e1b97f3e9b741405ca1550fb629d6921677e288688bd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9addc0d322e93629efb6ebc9db2f6c4b2e3093ee6573d9c4cbf97614f8ce53bd = $this->env->getExtension("native_profiler");
        $__internal_9addc0d322e93629efb6ebc9db2f6c4b2e3093ee6573d9c4cbf97614f8ce53bd->enter($__internal_9addc0d322e93629efb6ebc9db2f6c4b2e3093ee6573d9c4cbf97614f8ce53bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9addc0d322e93629efb6ebc9db2f6c4b2e3093ee6573d9c4cbf97614f8ce53bd->leave($__internal_9addc0d322e93629efb6ebc9db2f6c4b2e3093ee6573d9c4cbf97614f8ce53bd_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_06b14f01a35f119fbe4aa36e7d732067944e4ad6e8a981ff560171fc039b5ba9 = $this->env->getExtension("native_profiler");
        $__internal_06b14f01a35f119fbe4aa36e7d732067944e4ad6e8a981ff560171fc039b5ba9->enter($__internal_06b14f01a35f119fbe4aa36e7d732067944e4ad6e8a981ff560171fc039b5ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "client/edit.html.twig", 3)->display($context);
        
        $__internal_06b14f01a35f119fbe4aa36e7d732067944e4ad6e8a981ff560171fc039b5ba9->leave($__internal_06b14f01a35f119fbe4aa36e7d732067944e4ad6e8a981ff560171fc039b5ba9_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5d79ceb0f1d5cc3ef97b37ad1b7ced0d8a1c754880f9efba7ca423034d51a366 = $this->env->getExtension("native_profiler");
        $__internal_5d79ceb0f1d5cc3ef97b37ad1b7ced0d8a1c754880f9efba7ca423034d51a366->enter($__internal_5d79ceb0f1d5cc3ef97b37ad1b7ced0d8a1c754880f9efba7ca423034d51a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_5d79ceb0f1d5cc3ef97b37ad1b7ced0d8a1c754880f9efba7ca423034d51a366->leave($__internal_5d79ceb0f1d5cc3ef97b37ad1b7ced0d8a1c754880f9efba7ca423034d51a366_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_2763d371c9c5b44e0f30e61e575dce9d2f792857d1cac87949f8bb8540963ca4 = $this->env->getExtension("native_profiler");
        $__internal_2763d371c9c5b44e0f30e61e575dce9d2f792857d1cac87949f8bb8540963ca4->enter($__internal_2763d371c9c5b44e0f30e61e575dce9d2f792857d1cac87949f8bb8540963ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_2763d371c9c5b44e0f30e61e575dce9d2f792857d1cac87949f8bb8540963ca4->leave($__internal_2763d371c9c5b44e0f30e61e575dce9d2f792857d1cac87949f8bb8540963ca4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d653df695c664fee239ed6d67e3ae31f0f2253e633c08a28cd93a4e5df2de296 = $this->env->getExtension("native_profiler");
        $__internal_d653df695c664fee239ed6d67e3ae31f0f2253e633c08a28cd93a4e5df2de296->enter($__internal_d653df695c664fee239ed6d67e3ae31f0f2253e633c08a28cd93a4e5df2de296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Client:editactions.html.twig", "client/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Client:editform.html.twig", "client/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_d653df695c664fee239ed6d67e3ae31f0f2253e633c08a28cd93a4e5df2de296->leave($__internal_d653df695c664fee239ed6d67e3ae31f0f2253e633c08a28cd93a4e5df2de296_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.customer'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.customer'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('client_edit',{'id':client.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Client:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Client:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
