<?php

/* param/edit.html.twig */
class __TwigTemplate_5685e9135cd08b81ab53f7c4bf145f85cb1c312c849dc004485bf85b7a7d8eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "param/edit.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe075e570954a37a18c1b40c04c8bb0356663c64e6b9035e823248c1e1c5b89d = $this->env->getExtension("native_profiler");
        $__internal_fe075e570954a37a18c1b40c04c8bb0356663c64e6b9035e823248c1e1c5b89d->enter($__internal_fe075e570954a37a18c1b40c04c8bb0356663c64e6b9035e823248c1e1c5b89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "param/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe075e570954a37a18c1b40c04c8bb0356663c64e6b9035e823248c1e1c5b89d->leave($__internal_fe075e570954a37a18c1b40c04c8bb0356663c64e6b9035e823248c1e1c5b89d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_da052f886aabd3bce85782059d700c5b422c374f849444d99ec211dd5568509f = $this->env->getExtension("native_profiler");
        $__internal_da052f886aabd3bce85782059d700c5b422c374f849444d99ec211dd5568509f->enter($__internal_da052f886aabd3bce85782059d700c5b422c374f849444d99ec211dd5568509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_da052f886aabd3bce85782059d700c5b422c374f849444d99ec211dd5568509f->leave($__internal_da052f886aabd3bce85782059d700c5b422c374f849444d99ec211dd5568509f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a1a66c055b0c59ff5c55c349697697472f61e8abfb6f2e4fe6acc02bed8f2275 = $this->env->getExtension("native_profiler");
        $__internal_a1a66c055b0c59ff5c55c349697697472f61e8abfb6f2e4fe6acc02bed8f2275->enter($__internal_a1a66c055b0c59ff5c55c349697697472f61e8abfb6f2e4fe6acc02bed8f2275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "param/edit.html.twig", 3)->display($context);
        
        $__internal_a1a66c055b0c59ff5c55c349697697472f61e8abfb6f2e4fe6acc02bed8f2275->leave($__internal_a1a66c055b0c59ff5c55c349697697472f61e8abfb6f2e4fe6acc02bed8f2275_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a95aa7cc2085e01acfc48325dec86cd597724fb296f6ad39f06a1cbdb828749b = $this->env->getExtension("native_profiler");
        $__internal_a95aa7cc2085e01acfc48325dec86cd597724fb296f6ad39f06a1cbdb828749b->enter($__internal_a95aa7cc2085e01acfc48325dec86cd597724fb296f6ad39f06a1cbdb828749b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_a95aa7cc2085e01acfc48325dec86cd597724fb296f6ad39f06a1cbdb828749b->leave($__internal_a95aa7cc2085e01acfc48325dec86cd597724fb296f6ad39f06a1cbdb828749b_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_df1f9affd32cd7d4a0e2394b2007ef3a8b59d65d5f8d3e187ebba4caa2b28695 = $this->env->getExtension("native_profiler");
        $__internal_df1f9affd32cd7d4a0e2394b2007ef3a8b59d65d5f8d3e187ebba4caa2b28695->enter($__internal_df1f9affd32cd7d4a0e2394b2007ef3a8b59d65d5f8d3e187ebba4caa2b28695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_df1f9affd32cd7d4a0e2394b2007ef3a8b59d65d5f8d3e187ebba4caa2b28695->leave($__internal_df1f9affd32cd7d4a0e2394b2007ef3a8b59d65d5f8d3e187ebba4caa2b28695_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb6de56d01ac006ff13a2cc0e59dde0690399e55496a7d98dda417aac6b74ac = $this->env->getExtension("native_profiler");
        $__internal_7bb6de56d01ac006ff13a2cc0e59dde0690399e55496a7d98dda417aac6b74ac->enter($__internal_7bb6de56d01ac006ff13a2cc0e59dde0690399e55496a7d98dda417aac6b74ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("param_edit", array("id" => $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Param:editactions.html.twig", "param/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Param:editform.html.twig", "param/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t<br/>
\t\t\t</div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_7bb6de56d01ac006ff13a2cc0e59dde0690399e55496a7d98dda417aac6b74ac->leave($__internal_7bb6de56d01ac006ff13a2cc0e59dde0690399e55496a7d98dda417aac6b74ac_prof);

    }

    public function getTemplateName()
    {
        return "param/edit.html.twig";
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
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.setting'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.setting'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('param_edit',{'id':param.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Param:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Param:editform.html.twig"%}*/
/* 				<br/>*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
