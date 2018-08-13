<?php

/* otherprices/edit.html.twig */
class __TwigTemplate_d524327482a9bbec52a7c2c610a4246129be7fa4218bf2c86901113f97de3fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "otherprices/edit.html.twig", 1);
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
        $__internal_41174a3c9c6b94cd71531074a7baf6d5d1e41147ff07136f3a769ecce84edd1b = $this->env->getExtension("native_profiler");
        $__internal_41174a3c9c6b94cd71531074a7baf6d5d1e41147ff07136f3a769ecce84edd1b->enter($__internal_41174a3c9c6b94cd71531074a7baf6d5d1e41147ff07136f3a769ecce84edd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otherprices/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41174a3c9c6b94cd71531074a7baf6d5d1e41147ff07136f3a769ecce84edd1b->leave($__internal_41174a3c9c6b94cd71531074a7baf6d5d1e41147ff07136f3a769ecce84edd1b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1f702f4d63d5ab23b047949d590af47bf1d8024efd3b336317bb5fa21289138 = $this->env->getExtension("native_profiler");
        $__internal_d1f702f4d63d5ab23b047949d590af47bf1d8024efd3b336317bb5fa21289138->enter($__internal_d1f702f4d63d5ab23b047949d590af47bf1d8024efd3b336317bb5fa21289138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.otherprices", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d1f702f4d63d5ab23b047949d590af47bf1d8024efd3b336317bb5fa21289138->leave($__internal_d1f702f4d63d5ab23b047949d590af47bf1d8024efd3b336317bb5fa21289138_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_100d2c44f622e2eb29cce0eae519acd8599e04407636219d0212ee5b603d463f = $this->env->getExtension("native_profiler");
        $__internal_100d2c44f622e2eb29cce0eae519acd8599e04407636219d0212ee5b603d463f->enter($__internal_100d2c44f622e2eb29cce0eae519acd8599e04407636219d0212ee5b603d463f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "otherprices/edit.html.twig", 3)->display($context);
        
        $__internal_100d2c44f622e2eb29cce0eae519acd8599e04407636219d0212ee5b603d463f->leave($__internal_100d2c44f622e2eb29cce0eae519acd8599e04407636219d0212ee5b603d463f_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_104e184168996e96ed2696a67d8ec7ea7ed388cfcb8c4c0849c84159041413dc = $this->env->getExtension("native_profiler");
        $__internal_104e184168996e96ed2696a67d8ec7ea7ed388cfcb8c4c0849c84159041413dc->enter($__internal_104e184168996e96ed2696a67d8ec7ea7ed388cfcb8c4c0849c84159041413dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_104e184168996e96ed2696a67d8ec7ea7ed388cfcb8c4c0849c84159041413dc->leave($__internal_104e184168996e96ed2696a67d8ec7ea7ed388cfcb8c4c0849c84159041413dc_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_01c3e82f0ba4075436534be0dc5e5f75db81004638178e13dece3c78e04a1c87 = $this->env->getExtension("native_profiler");
        $__internal_01c3e82f0ba4075436534be0dc5e5f75db81004638178e13dece3c78e04a1c87->enter($__internal_01c3e82f0ba4075436534be0dc5e5f75db81004638178e13dece3c78e04a1c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.otherprices", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_01c3e82f0ba4075436534be0dc5e5f75db81004638178e13dece3c78e04a1c87->leave($__internal_01c3e82f0ba4075436534be0dc5e5f75db81004638178e13dece3c78e04a1c87_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc591d96d7161e3f78d3608efedf09e5b001488fcc1a5daf01108c98fd32534e = $this->env->getExtension("native_profiler");
        $__internal_bc591d96d7161e3f78d3608efedf09e5b001488fcc1a5daf01108c98fd32534e->enter($__internal_bc591d96d7161e3f78d3608efedf09e5b001488fcc1a5daf01108c98fd32534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("otherprices_edit", array("id" => $this->getAttribute((isset($context["otherprice"]) ? $context["otherprice"] : $this->getContext($context, "otherprice")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Otherprices:editactions.html.twig", "otherprices/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Otherprices:editform.html.twig", "otherprices/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_bc591d96d7161e3f78d3608efedf09e5b001488fcc1a5daf01108c98fd32534e->leave($__internal_bc591d96d7161e3f78d3608efedf09e5b001488fcc1a5daf01108c98fd32534e_prof);

    }

    public function getTemplateName()
    {
        return "otherprices/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.otherprices'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.otherprices'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('otherprices_edit',{'id':otherprice.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Otherprices:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Otherprices:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
