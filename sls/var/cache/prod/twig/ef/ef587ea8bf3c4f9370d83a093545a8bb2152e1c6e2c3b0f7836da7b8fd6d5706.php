<?php

/* holidayslist/edit.html.twig */
class __TwigTemplate_eb6e731110eb9c5f2138380922b40ea34c46544be4eebdfd311044b91710f39f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "holidayslist/edit.html.twig", 1);
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
        $__internal_87f7c90f965739baf0d5fe4d3345229a4502e269035bd9bfc44954b7e97f9923 = $this->env->getExtension("native_profiler");
        $__internal_87f7c90f965739baf0d5fe4d3345229a4502e269035bd9bfc44954b7e97f9923->enter($__internal_87f7c90f965739baf0d5fe4d3345229a4502e269035bd9bfc44954b7e97f9923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "holidayslist/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f7c90f965739baf0d5fe4d3345229a4502e269035bd9bfc44954b7e97f9923->leave($__internal_87f7c90f965739baf0d5fe4d3345229a4502e269035bd9bfc44954b7e97f9923_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7ae8b250c12fca6fadfe377a3fd84911bdcd41443b5085c68c96321f1362e73d = $this->env->getExtension("native_profiler");
        $__internal_7ae8b250c12fca6fadfe377a3fd84911bdcd41443b5085c68c96321f1362e73d->enter($__internal_7ae8b250c12fca6fadfe377a3fd84911bdcd41443b5085c68c96321f1362e73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "holidayslist/edit.html.twig", 2)->display($context);
        
        $__internal_7ae8b250c12fca6fadfe377a3fd84911bdcd41443b5085c68c96321f1362e73d->leave($__internal_7ae8b250c12fca6fadfe377a3fd84911bdcd41443b5085c68c96321f1362e73d_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fb8afb95c04270ed6a9dfdee78f920efde33ce7d61cb62e2c004f0b866b04f50 = $this->env->getExtension("native_profiler");
        $__internal_fb8afb95c04270ed6a9dfdee78f920efde33ce7d61cb62e2c004f0b866b04f50->enter($__internal_fb8afb95c04270ed6a9dfdee78f920efde33ce7d61cb62e2c004f0b866b04f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_fb8afb95c04270ed6a9dfdee78f920efde33ce7d61cb62e2c004f0b866b04f50->leave($__internal_fb8afb95c04270ed6a9dfdee78f920efde33ce7d61cb62e2c004f0b866b04f50_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_561d96c7c49e7d3ccd14feb78c0fd2af75790b1b815a70cf05f8a748493d5415 = $this->env->getExtension("native_profiler");
        $__internal_561d96c7c49e7d3ccd14feb78c0fd2af75790b1b815a70cf05f8a748493d5415->enter($__internal_561d96c7c49e7d3ccd14feb78c0fd2af75790b1b815a70cf05f8a748493d5415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Holidayslist edit</h1>";
        
        $__internal_561d96c7c49e7d3ccd14feb78c0fd2af75790b1b815a70cf05f8a748493d5415->leave($__internal_561d96c7c49e7d3ccd14feb78c0fd2af75790b1b815a70cf05f8a748493d5415_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa003f089fa00d83b260f9e961d22dcdafe73c5862e24f1daab06b8cbb96732a = $this->env->getExtension("native_profiler");
        $__internal_fa003f089fa00d83b260f9e961d22dcdafe73c5862e24f1daab06b8cbb96732a->enter($__internal_fa003f089fa00d83b260f9e961d22dcdafe73c5862e24f1daab06b8cbb96732a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("holidayslist_edit", array("id" => $this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Holidayslist:editactions.html.twig", "holidayslist/edit.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t";
        $this->loadTemplate("BoAdminBundle:Holidayslist:editform.html.twig", "holidayslist/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_fa003f089fa00d83b260f9e961d22dcdafe73c5862e24f1daab06b8cbb96732a->leave($__internal_fa003f089fa00d83b260f9e961d22dcdafe73c5862e24f1daab06b8cbb96732a_prof);

    }

    public function getTemplateName()
    {
        return "holidayslist/edit.html.twig";
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
/* {% block label %}<h1>Holidayslist edit</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('holidayslist_edit',{'id':holidayslist.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Holidayslist:editactions.html.twig"%}*/
/* 			{%include "BoAdminBundle:Holidayslist:editform.html.twig"%}*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
