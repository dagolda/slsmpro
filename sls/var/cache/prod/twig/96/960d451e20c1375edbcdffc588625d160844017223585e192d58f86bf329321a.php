<?php

/* mails/edit.html.twig */
class __TwigTemplate_156513ff3c1e1e441d879e8cad0a3ce0d049443ae72cce44cda7fcfcc0876bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mails/edit.html.twig", 1);
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
        $__internal_975dbf81f7b58ea0659ebe189c75e716d6e06563f5ba30a4b04c7b45939b91ba = $this->env->getExtension("native_profiler");
        $__internal_975dbf81f7b58ea0659ebe189c75e716d6e06563f5ba30a4b04c7b45939b91ba->enter($__internal_975dbf81f7b58ea0659ebe189c75e716d6e06563f5ba30a4b04c7b45939b91ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mails/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975dbf81f7b58ea0659ebe189c75e716d6e06563f5ba30a4b04c7b45939b91ba->leave($__internal_975dbf81f7b58ea0659ebe189c75e716d6e06563f5ba30a4b04c7b45939b91ba_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_55a60641d2c2c6c33eb47eca9f8e1214ec0e643e1983e32ae46c51a3eeb8dc53 = $this->env->getExtension("native_profiler");
        $__internal_55a60641d2c2c6c33eb47eca9f8e1214ec0e643e1983e32ae46c51a3eeb8dc53->enter($__internal_55a60641d2c2c6c33eb47eca9f8e1214ec0e643e1983e32ae46c51a3eeb8dc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.mail", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_55a60641d2c2c6c33eb47eca9f8e1214ec0e643e1983e32ae46c51a3eeb8dc53->leave($__internal_55a60641d2c2c6c33eb47eca9f8e1214ec0e643e1983e32ae46c51a3eeb8dc53_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_fd728308f06b0cac44242310e98135b9aacb7555bbbe41ed8fcb4634b2ef83a8 = $this->env->getExtension("native_profiler");
        $__internal_fd728308f06b0cac44242310e98135b9aacb7555bbbe41ed8fcb4634b2ef83a8->enter($__internal_fd728308f06b0cac44242310e98135b9aacb7555bbbe41ed8fcb4634b2ef83a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "mails/edit.html.twig", 3)->display($context);
        
        $__internal_fd728308f06b0cac44242310e98135b9aacb7555bbbe41ed8fcb4634b2ef83a8->leave($__internal_fd728308f06b0cac44242310e98135b9aacb7555bbbe41ed8fcb4634b2ef83a8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5d0a8147aad5e95e89eec5dca41a1c04bad9f6133097a5f4ee5ec4e0ee263f10 = $this->env->getExtension("native_profiler");
        $__internal_5d0a8147aad5e95e89eec5dca41a1c04bad9f6133097a5f4ee5ec4e0ee263f10->enter($__internal_5d0a8147aad5e95e89eec5dca41a1c04bad9f6133097a5f4ee5ec4e0ee263f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_5d0a8147aad5e95e89eec5dca41a1c04bad9f6133097a5f4ee5ec4e0ee263f10->leave($__internal_5d0a8147aad5e95e89eec5dca41a1c04bad9f6133097a5f4ee5ec4e0ee263f10_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_80a9aac1528ed03f010155c5cee3329ef21a30b01598657dd97285ffc92e3a1c = $this->env->getExtension("native_profiler");
        $__internal_80a9aac1528ed03f010155c5cee3329ef21a30b01598657dd97285ffc92e3a1c->enter($__internal_80a9aac1528ed03f010155c5cee3329ef21a30b01598657dd97285ffc92e3a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.mail", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_80a9aac1528ed03f010155c5cee3329ef21a30b01598657dd97285ffc92e3a1c->leave($__internal_80a9aac1528ed03f010155c5cee3329ef21a30b01598657dd97285ffc92e3a1c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ead30eeeeda0e15bbb95aae2acb344780806cf791013aaec6e673be27da1be7 = $this->env->getExtension("native_profiler");
        $__internal_2ead30eeeeda0e15bbb95aae2acb344780806cf791013aaec6e673be27da1be7->enter($__internal_2ead30eeeeda0e15bbb95aae2acb344780806cf791013aaec6e673be27da1be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mails_edit", array("id" => $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Mails:editactions.html.twig", "mails/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Mails:editform.html.twig", "mails/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t<br/>
\t\t\t</div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_2ead30eeeeda0e15bbb95aae2acb344780806cf791013aaec6e673be27da1be7->leave($__internal_2ead30eeeeda0e15bbb95aae2acb344780806cf791013aaec6e673be27da1be7_prof);

    }

    public function getTemplateName()
    {
        return "mails/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 15,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.mail'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.mail'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('mails_edit',{'id':mail.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Mails:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Mails:editform.html.twig"%}*/
/* 				<br/>*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
