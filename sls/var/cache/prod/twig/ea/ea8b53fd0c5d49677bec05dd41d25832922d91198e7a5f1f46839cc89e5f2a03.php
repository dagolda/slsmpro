<?php

/* workfields/edit.html.twig */
class __TwigTemplate_adc7a7b18217c8a0eafcb04a2d4b5736f327b5e884bb88f7ed7389401a22066d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "workfields/edit.html.twig", 1);
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
        $__internal_4bad41d1e913c09f7b88917fbd47c9ba67e5279e8602702e929b64d161dc5e40 = $this->env->getExtension("native_profiler");
        $__internal_4bad41d1e913c09f7b88917fbd47c9ba67e5279e8602702e929b64d161dc5e40->enter($__internal_4bad41d1e913c09f7b88917fbd47c9ba67e5279e8602702e929b64d161dc5e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workfields/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bad41d1e913c09f7b88917fbd47c9ba67e5279e8602702e929b64d161dc5e40->leave($__internal_4bad41d1e913c09f7b88917fbd47c9ba67e5279e8602702e929b64d161dc5e40_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1052216fa8b5a6c02430f24139495dbe562bddc8d27cf22c72ecd2364f7434d3 = $this->env->getExtension("native_profiler");
        $__internal_1052216fa8b5a6c02430f24139495dbe562bddc8d27cf22c72ecd2364f7434d3->enter($__internal_1052216fa8b5a6c02430f24139495dbe562bddc8d27cf22c72ecd2364f7434d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.workfield", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_1052216fa8b5a6c02430f24139495dbe562bddc8d27cf22c72ecd2364f7434d3->leave($__internal_1052216fa8b5a6c02430f24139495dbe562bddc8d27cf22c72ecd2364f7434d3_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_3ba482e0e181f796f0b08ffe032a39b465c9399d2552656803058299a0e7ad19 = $this->env->getExtension("native_profiler");
        $__internal_3ba482e0e181f796f0b08ffe032a39b465c9399d2552656803058299a0e7ad19->enter($__internal_3ba482e0e181f796f0b08ffe032a39b465c9399d2552656803058299a0e7ad19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "workfields/edit.html.twig", 3)->display($context);
        
        $__internal_3ba482e0e181f796f0b08ffe032a39b465c9399d2552656803058299a0e7ad19->leave($__internal_3ba482e0e181f796f0b08ffe032a39b465c9399d2552656803058299a0e7ad19_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_262f41915426083de48161c47de4befa1c75ff5b2602fc0508bac3002632998a = $this->env->getExtension("native_profiler");
        $__internal_262f41915426083de48161c47de4befa1c75ff5b2602fc0508bac3002632998a->enter($__internal_262f41915426083de48161c47de4befa1c75ff5b2602fc0508bac3002632998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_262f41915426083de48161c47de4befa1c75ff5b2602fc0508bac3002632998a->leave($__internal_262f41915426083de48161c47de4befa1c75ff5b2602fc0508bac3002632998a_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_0d3671944b4e81006f770a8ce7648b2b73e099e24c5f2ec47b4d98082da3734b = $this->env->getExtension("native_profiler");
        $__internal_0d3671944b4e81006f770a8ce7648b2b73e099e24c5f2ec47b4d98082da3734b->enter($__internal_0d3671944b4e81006f770a8ce7648b2b73e099e24c5f2ec47b4d98082da3734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Work field edit</h1>";
        
        $__internal_0d3671944b4e81006f770a8ce7648b2b73e099e24c5f2ec47b4d98082da3734b->leave($__internal_0d3671944b4e81006f770a8ce7648b2b73e099e24c5f2ec47b4d98082da3734b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cf909b2a98e1e55c38a14869d83c7139fa57d74a294c649c01184173a384024 = $this->env->getExtension("native_profiler");
        $__internal_6cf909b2a98e1e55c38a14869d83c7139fa57d74a294c649c01184173a384024->enter($__internal_6cf909b2a98e1e55c38a14869d83c7139fa57d74a294c649c01184173a384024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("workfields_edit", array("id" => $this->getAttribute((isset($context["workfield"]) ? $context["workfield"] : $this->getContext($context, "workfield")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Workfields:editactions.html.twig", "workfields/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Workfields:editform.html.twig", "workfields/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_6cf909b2a98e1e55c38a14869d83c7139fa57d74a294c649c01184173a384024->leave($__internal_6cf909b2a98e1e55c38a14869d83c7139fa57d74a294c649c01184173a384024_prof);

    }

    public function getTemplateName()
    {
        return "workfields/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 14,  113 => 13,  111 => 12,  108 => 11,  106 => 10,  102 => 9,  98 => 8,  95 => 7,  89 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.workfield'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>Work field edit</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('workfields_edit',{'id':workfield.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Workfields:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Workfields:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
