<?php

/* message/edit.html.twig */
class __TwigTemplate_443d59ade0bd5a6c5f61e82faaa068f9b1c76a4d5f1f29d1bc73fbbe4f1e7a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message/edit.html.twig", 1);
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
        $__internal_326e2d110f17ea472098cbbdc7ff2c9a3366ad67eaacd68d4d54df5c8c869775 = $this->env->getExtension("native_profiler");
        $__internal_326e2d110f17ea472098cbbdc7ff2c9a3366ad67eaacd68d4d54df5c8c869775->enter($__internal_326e2d110f17ea472098cbbdc7ff2c9a3366ad67eaacd68d4d54df5c8c869775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326e2d110f17ea472098cbbdc7ff2c9a3366ad67eaacd68d4d54df5c8c869775->leave($__internal_326e2d110f17ea472098cbbdc7ff2c9a3366ad67eaacd68d4d54df5c8c869775_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d97d7e8b4f4877df7f470a0a61ba2f0c6a7e696cd5e2d12fd96fddb1e7d395b2 = $this->env->getExtension("native_profiler");
        $__internal_d97d7e8b4f4877df7f470a0a61ba2f0c6a7e696cd5e2d12fd96fddb1e7d395b2->enter($__internal_d97d7e8b4f4877df7f470a0a61ba2f0c6a7e696cd5e2d12fd96fddb1e7d395b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "message/edit.html.twig", 2)->display($context);
        
        $__internal_d97d7e8b4f4877df7f470a0a61ba2f0c6a7e696cd5e2d12fd96fddb1e7d395b2->leave($__internal_d97d7e8b4f4877df7f470a0a61ba2f0c6a7e696cd5e2d12fd96fddb1e7d395b2_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e38963f76dcc25a6854cdc85dac0ca764daa53cd1f2111c46f11c0077bc1064f = $this->env->getExtension("native_profiler");
        $__internal_e38963f76dcc25a6854cdc85dac0ca764daa53cd1f2111c46f11c0077bc1064f->enter($__internal_e38963f76dcc25a6854cdc85dac0ca764daa53cd1f2111c46f11c0077bc1064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_e38963f76dcc25a6854cdc85dac0ca764daa53cd1f2111c46f11c0077bc1064f->leave($__internal_e38963f76dcc25a6854cdc85dac0ca764daa53cd1f2111c46f11c0077bc1064f_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_cb75c9bf46bd17db311ef1b2422452e08753eac035159e0be3c73d08329c3d86 = $this->env->getExtension("native_profiler");
        $__internal_cb75c9bf46bd17db311ef1b2422452e08753eac035159e0be3c73d08329c3d86->enter($__internal_cb75c9bf46bd17db311ef1b2422452e08753eac035159e0be3c73d08329c3d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Message edit</h1>";
        
        $__internal_cb75c9bf46bd17db311ef1b2422452e08753eac035159e0be3c73d08329c3d86->leave($__internal_cb75c9bf46bd17db311ef1b2422452e08753eac035159e0be3c73d08329c3d86_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d123f58d9e7fd6f0802b6b4da168f3ca8d819a5972c3811b06d845d17a1e4b80 = $this->env->getExtension("native_profiler");
        $__internal_d123f58d9e7fd6f0802b6b4da168f3ca8d819a5972c3811b06d845d17a1e4b80->enter($__internal_d123f58d9e7fd6f0802b6b4da168f3ca8d819a5972c3811b06d845d17a1e4b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_edit", array("id" => $this->getAttribute((isset($context["errormessage"]) ? $context["errormessage"] : $this->getContext($context, "errormessage")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Message:editactions.html.twig", "message/edit.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t";
        $this->loadTemplate("BoAdminBundle:Message:editform.html.twig", "message/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_d123f58d9e7fd6f0802b6b4da168f3ca8d819a5972c3811b06d845d17a1e4b80->leave($__internal_d123f58d9e7fd6f0802b6b4da168f3ca8d819a5972c3811b06d845d17a1e4b80_prof);

    }

    public function getTemplateName()
    {
        return "message/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  91 => 10,  89 => 9,  85 => 8,  81 => 7,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>Message edit</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('message_edit',{'id':errormessage.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Message:editactions.html.twig"%}*/
/* 			{%include "BoAdminBundle:Message:editform.html.twig"%}*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
