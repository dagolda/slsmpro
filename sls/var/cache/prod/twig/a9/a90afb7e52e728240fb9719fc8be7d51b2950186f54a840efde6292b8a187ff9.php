<?php

/* BoAdminBundle:User:edit.html.twig */
class __TwigTemplate_2bd5e003f295ae0db94736f1fb27054729c7b49135691bb51ba87a71e0e83198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdminBundle:User:edit.html.twig", 1);
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
        $__internal_5d3a8ebce4a00dab2191d508543bf18507f695c589a660342556772754ebc968 = $this->env->getExtension("native_profiler");
        $__internal_5d3a8ebce4a00dab2191d508543bf18507f695c589a660342556772754ebc968->enter($__internal_5d3a8ebce4a00dab2191d508543bf18507f695c589a660342556772754ebc968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d3a8ebce4a00dab2191d508543bf18507f695c589a660342556772754ebc968->leave($__internal_5d3a8ebce4a00dab2191d508543bf18507f695c589a660342556772754ebc968_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee0cbd833f0e237708a6326da072a7a6b8af548863b5ce9fdc4a3d04d3e778c0 = $this->env->getExtension("native_profiler");
        $__internal_ee0cbd833f0e237708a6326da072a7a6b8af548863b5ce9fdc4a3d04d3e778c0->enter($__internal_ee0cbd833f0e237708a6326da072a7a6b8af548863b5ce9fdc4a3d04d3e778c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_ee0cbd833f0e237708a6326da072a7a6b8af548863b5ce9fdc4a3d04d3e778c0->leave($__internal_ee0cbd833f0e237708a6326da072a7a6b8af548863b5ce9fdc4a3d04d3e778c0_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7e179e8e2689a3d88f503749b8106b8c438e5be2fc588ae2c78d1de49725047c = $this->env->getExtension("native_profiler");
        $__internal_7e179e8e2689a3d88f503749b8106b8c438e5be2fc588ae2c78d1de49725047c->enter($__internal_7e179e8e2689a3d88f503749b8106b8c438e5be2fc588ae2c78d1de49725047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdminBundle:User:edit.html.twig", 3)->display($context);
        
        $__internal_7e179e8e2689a3d88f503749b8106b8c438e5be2fc588ae2c78d1de49725047c->leave($__internal_7e179e8e2689a3d88f503749b8106b8c438e5be2fc588ae2c78d1de49725047c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bef44713531749ac27907255486902df3615848895c99db8a9fd8e2efc6ab2cc = $this->env->getExtension("native_profiler");
        $__internal_bef44713531749ac27907255486902df3615848895c99db8a9fd8e2efc6ab2cc->enter($__internal_bef44713531749ac27907255486902df3615848895c99db8a9fd8e2efc6ab2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_bef44713531749ac27907255486902df3615848895c99db8a9fd8e2efc6ab2cc->leave($__internal_bef44713531749ac27907255486902df3615848895c99db8a9fd8e2efc6ab2cc_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_f9c2828a069465250bb61128ccc10de406b1a9ed22c75eb08b39ec9bc239b30a = $this->env->getExtension("native_profiler");
        $__internal_f9c2828a069465250bb61128ccc10de406b1a9ed22c75eb08b39ec9bc239b30a->enter($__internal_f9c2828a069465250bb61128ccc10de406b1a9ed22c75eb08b39ec9bc239b30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.useredit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_f9c2828a069465250bb61128ccc10de406b1a9ed22c75eb08b39ec9bc239b30a->leave($__internal_f9c2828a069465250bb61128ccc10de406b1a9ed22c75eb08b39ec9bc239b30a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f45bf24631ce8d3ee0fad735a694650de70dd5a07425cb4a9de4ab38e627017a = $this->env->getExtension("native_profiler");
        $__internal_f45bf24631ce8d3ee0fad735a694650de70dd5a07425cb4a9de4ab38e627017a->enter($__internal_f45bf24631ce8d3ee0fad735a694650de70dd5a07425cb4a9de4ab38e627017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("bo_admin_edit");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:User:editactions.html.twig", "BoAdminBundle:User:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:User:editform.html.twig", "BoAdminBundle:User:edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_f45bf24631ce8d3ee0fad735a694650de70dd5a07425cb4a9de4ab38e627017a->leave($__internal_f45bf24631ce8d3ee0fad735a694650de70dd5a07425cb4a9de4ab38e627017a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:User:edit.html.twig";
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
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'admin.default.home'|trans([],'BoAdminBundle')}} >> {{'title.useredit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('bo_admin_edit') }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:User:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:User:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
