<?php

/* revision/edit.html.twig */
class __TwigTemplate_aa0f1472ea8ffcf013022066f2944eb12ec90d28c7fa01842144bc4678480e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "revision/edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2dc4094f4eabee499fcd8d35219ea20e5f56f4fa0664785175dbcc0e9cc32da3 = $this->env->getExtension("native_profiler");
        $__internal_2dc4094f4eabee499fcd8d35219ea20e5f56f4fa0664785175dbcc0e9cc32da3->enter($__internal_2dc4094f4eabee499fcd8d35219ea20e5f56f4fa0664785175dbcc0e9cc32da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "revision/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc4094f4eabee499fcd8d35219ea20e5f56f4fa0664785175dbcc0e9cc32da3->leave($__internal_2dc4094f4eabee499fcd8d35219ea20e5f56f4fa0664785175dbcc0e9cc32da3_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_17d0e36910b37e9e82d4008687262a4963113c0f213dd6a44edfa14f8519fc98 = $this->env->getExtension("native_profiler");
        $__internal_17d0e36910b37e9e82d4008687262a4963113c0f213dd6a44edfa14f8519fc98->enter($__internal_17d0e36910b37e9e82d4008687262a4963113c0f213dd6a44edfa14f8519fc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "revision/edit.html.twig", 2)->display($context);
        
        $__internal_17d0e36910b37e9e82d4008687262a4963113c0f213dd6a44edfa14f8519fc98->leave($__internal_17d0e36910b37e9e82d4008687262a4963113c0f213dd6a44edfa14f8519fc98_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3875bd238cb8eb8b0467b6fa7b44f4b05b00cc2c828a799f7010bd1147a04fb8 = $this->env->getExtension("native_profiler");
        $__internal_3875bd238cb8eb8b0467b6fa7b44f4b05b00cc2c828a799f7010bd1147a04fb8->enter($__internal_3875bd238cb8eb8b0467b6fa7b44f4b05b00cc2c828a799f7010bd1147a04fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_3875bd238cb8eb8b0467b6fa7b44f4b05b00cc2c828a799f7010bd1147a04fb8->leave($__internal_3875bd238cb8eb8b0467b6fa7b44f4b05b00cc2c828a799f7010bd1147a04fb8_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_d66bd26a250dd2e4679ec067c3e8cf93142659a81793592ed0106bea7ff706e4 = $this->env->getExtension("native_profiler");
        $__internal_d66bd26a250dd2e4679ec067c3e8cf93142659a81793592ed0106bea7ff706e4->enter($__internal_d66bd26a250dd2e4679ec067c3e8cf93142659a81793592ed0106bea7ff706e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Contract Revision edit</h1>";
        
        $__internal_d66bd26a250dd2e4679ec067c3e8cf93142659a81793592ed0106bea7ff706e4->leave($__internal_d66bd26a250dd2e4679ec067c3e8cf93142659a81793592ed0106bea7ff706e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_863ba9436bc398c68f5fc233c1136da4dd5b71bef4b5b9ea5e4b9c0504d186a0 = $this->env->getExtension("native_profiler");
        $__internal_863ba9436bc398c68f5fc233c1136da4dd5b71bef4b5b9ea5e4b9c0504d186a0->enter($__internal_863ba9436bc398c68f5fc233c1136da4dd5b71bef4b5b9ea5e4b9c0504d186a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("revision_edit", array("id" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Revision:editactions.html.twig", "revision/edit.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Revision:editform.html.twig", "revision/edit.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t</div>
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_863ba9436bc398c68f5fc233c1136da4dd5b71bef4b5b9ea5e4b9c0504d186a0->leave($__internal_863ba9436bc398c68f5fc233c1136da4dd5b71bef4b5b9ea5e4b9c0504d186a0_prof);

    }

    public function getTemplateName()
    {
        return "revision/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  96 => 12,  94 => 11,  91 => 10,  89 => 9,  85 => 8,  81 => 7,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>Contract Revision edit</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('revision_edit',{'id':revision.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Revision:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Revision:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
