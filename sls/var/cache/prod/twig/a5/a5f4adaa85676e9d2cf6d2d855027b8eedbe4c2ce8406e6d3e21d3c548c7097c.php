<?php

/* user/edit.html.twig */
class __TwigTemplate_e589b2f1b9d9aeda479a69ca5692d447d8826dace6178ca6d52c8f4c6fc85409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_fbf84b0bc7b8372185a57cb9faa0cdf599be0ee262e5a2ea56ea4df478f93fd3 = $this->env->getExtension("native_profiler");
        $__internal_fbf84b0bc7b8372185a57cb9faa0cdf599be0ee262e5a2ea56ea4df478f93fd3->enter($__internal_fbf84b0bc7b8372185a57cb9faa0cdf599be0ee262e5a2ea56ea4df478f93fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf84b0bc7b8372185a57cb9faa0cdf599be0ee262e5a2ea56ea4df478f93fd3->leave($__internal_fbf84b0bc7b8372185a57cb9faa0cdf599be0ee262e5a2ea56ea4df478f93fd3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5f47ac6d3d139170fb0b780e96914bd785a5fadeff47a9877f8c471d12248a2 = $this->env->getExtension("native_profiler");
        $__internal_d5f47ac6d3d139170fb0b780e96914bd785a5fadeff47a9877f8c471d12248a2->enter($__internal_d5f47ac6d3d139170fb0b780e96914bd785a5fadeff47a9877f8c471d12248a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.user", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d5f47ac6d3d139170fb0b780e96914bd785a5fadeff47a9877f8c471d12248a2->leave($__internal_d5f47ac6d3d139170fb0b780e96914bd785a5fadeff47a9877f8c471d12248a2_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_fec58bdf8662f3b1dd90bf401dd2e92e087c83e53c0b629072b64a1eef0226a9 = $this->env->getExtension("native_profiler");
        $__internal_fec58bdf8662f3b1dd90bf401dd2e92e087c83e53c0b629072b64a1eef0226a9->enter($__internal_fec58bdf8662f3b1dd90bf401dd2e92e087c83e53c0b629072b64a1eef0226a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "user/edit.html.twig", 3)->display($context);
        
        $__internal_fec58bdf8662f3b1dd90bf401dd2e92e087c83e53c0b629072b64a1eef0226a9->leave($__internal_fec58bdf8662f3b1dd90bf401dd2e92e087c83e53c0b629072b64a1eef0226a9_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6b052ea71789a3898b547a9ee169df1050ee1327e404937ace2242df25dff853 = $this->env->getExtension("native_profiler");
        $__internal_6b052ea71789a3898b547a9ee169df1050ee1327e404937ace2242df25dff853->enter($__internal_6b052ea71789a3898b547a9ee169df1050ee1327e404937ace2242df25dff853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_6b052ea71789a3898b547a9ee169df1050ee1327e404937ace2242df25dff853->leave($__internal_6b052ea71789a3898b547a9ee169df1050ee1327e404937ace2242df25dff853_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_e828e543820fc6fe8da0035bff0251d4d3a87a4e35dcd6429ac58a6fffaad8c2 = $this->env->getExtension("native_profiler");
        $__internal_e828e543820fc6fe8da0035bff0251d4d3a87a4e35dcd6429ac58a6fffaad8c2->enter($__internal_e828e543820fc6fe8da0035bff0251d4d3a87a4e35dcd6429ac58a6fffaad8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.user", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_e828e543820fc6fe8da0035bff0251d4d3a87a4e35dcd6429ac58a6fffaad8c2->leave($__internal_e828e543820fc6fe8da0035bff0251d4d3a87a4e35dcd6429ac58a6fffaad8c2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_15421fa2a9bdc8d83e30bea7db4a8284784289441d2367366fe86af85dc0de12 = $this->env->getExtension("native_profiler");
        $__internal_15421fa2a9bdc8d83e30bea7db4a8284784289441d2367366fe86af85dc0de12->enter($__internal_15421fa2a9bdc8d83e30bea7db4a8284784289441d2367366fe86af85dc0de12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoUserBundle:User:editactions.html.twig", "user/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoUserBundle:User:editform.html.twig", "user/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_15421fa2a9bdc8d83e30bea7db4a8284784289441d2367366fe86af85dc0de12->leave($__internal_15421fa2a9bdc8d83e30bea7db4a8284784289441d2367366fe86af85dc0de12_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.user'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.user'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('user_edit',{'id':user.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoUserBundle:User:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoUserBundle:User:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
