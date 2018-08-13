<?php

/* profil/edit.html.twig */
class __TwigTemplate_c810ae83b84cbaf7d1c69a66daba3276a8a9334a8934018a8ea8d21871682bc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profil/edit.html.twig", 1);
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
        $__internal_1c8b6e6eab015c525859a71793a062f0a304e34ebccc0a92e7b243e636b1cca7 = $this->env->getExtension("native_profiler");
        $__internal_1c8b6e6eab015c525859a71793a062f0a304e34ebccc0a92e7b243e636b1cca7->enter($__internal_1c8b6e6eab015c525859a71793a062f0a304e34ebccc0a92e7b243e636b1cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c8b6e6eab015c525859a71793a062f0a304e34ebccc0a92e7b243e636b1cca7->leave($__internal_1c8b6e6eab015c525859a71793a062f0a304e34ebccc0a92e7b243e636b1cca7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f750bf5fb69a6d5e8f21393979d90ece0a13386dffa443f6965dcd2525e1ee23 = $this->env->getExtension("native_profiler");
        $__internal_f750bf5fb69a6d5e8f21393979d90ece0a13386dffa443f6965dcd2525e1ee23->enter($__internal_f750bf5fb69a6d5e8f21393979d90ece0a13386dffa443f6965dcd2525e1ee23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.profile", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_f750bf5fb69a6d5e8f21393979d90ece0a13386dffa443f6965dcd2525e1ee23->leave($__internal_f750bf5fb69a6d5e8f21393979d90ece0a13386dffa443f6965dcd2525e1ee23_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_443a7d0afb0c6ce3667526f57b5c8a7b0cc20084cae0ac0fe9e779e67a99835b = $this->env->getExtension("native_profiler");
        $__internal_443a7d0afb0c6ce3667526f57b5c8a7b0cc20084cae0ac0fe9e779e67a99835b->enter($__internal_443a7d0afb0c6ce3667526f57b5c8a7b0cc20084cae0ac0fe9e779e67a99835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "profil/edit.html.twig", 3)->display($context);
        
        $__internal_443a7d0afb0c6ce3667526f57b5c8a7b0cc20084cae0ac0fe9e779e67a99835b->leave($__internal_443a7d0afb0c6ce3667526f57b5c8a7b0cc20084cae0ac0fe9e779e67a99835b_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0f674024cd49eac2d70f6e3ba4f39013e30ddf22aebd2e8a8008a668a2c275cd = $this->env->getExtension("native_profiler");
        $__internal_0f674024cd49eac2d70f6e3ba4f39013e30ddf22aebd2e8a8008a668a2c275cd->enter($__internal_0f674024cd49eac2d70f6e3ba4f39013e30ddf22aebd2e8a8008a668a2c275cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_0f674024cd49eac2d70f6e3ba4f39013e30ddf22aebd2e8a8008a668a2c275cd->leave($__internal_0f674024cd49eac2d70f6e3ba4f39013e30ddf22aebd2e8a8008a668a2c275cd_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_4f4507622642baca5822a6dbc08a325005c605a3a7b564e4a09d06a35a156264 = $this->env->getExtension("native_profiler");
        $__internal_4f4507622642baca5822a6dbc08a325005c605a3a7b564e4a09d06a35a156264->enter($__internal_4f4507622642baca5822a6dbc08a325005c605a3a7b564e4a09d06a35a156264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.profile", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4f4507622642baca5822a6dbc08a325005c605a3a7b564e4a09d06a35a156264->leave($__internal_4f4507622642baca5822a6dbc08a325005c605a3a7b564e4a09d06a35a156264_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e043a9c439480e106ffe7b010f7dd3bcfa90f433b0647866065e4983ce033aa1 = $this->env->getExtension("native_profiler");
        $__internal_e043a9c439480e106ffe7b010f7dd3bcfa90f433b0647866065e4983ce033aa1->enter($__internal_e043a9c439480e106ffe7b010f7dd3bcfa90f433b0647866065e4983ce033aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_edit", array("id" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Profil:editactions.html.twig", "profil/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Profil:editform.html.twig", "profil/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_e043a9c439480e106ffe7b010f7dd3bcfa90f433b0647866065e4983ce033aa1->leave($__internal_e043a9c439480e106ffe7b010f7dd3bcfa90f433b0647866065e4983ce033aa1_prof);

    }

    public function getTemplateName()
    {
        return "profil/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.profile'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.profile'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('profil_edit',{'id':profil.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Profil:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Profil:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
