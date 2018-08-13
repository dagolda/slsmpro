<?php

/* evaluation/new.html.twig */
class __TwigTemplate_94aae93f301328e8ab8e52801056616351f346d79b8966897029ce3f6a23874d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/new.html.twig", 1);
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
        $__internal_3e02f872241e611a0fc6597f0923422180ac194bf6f539e0b2abeec77d357685 = $this->env->getExtension("native_profiler");
        $__internal_3e02f872241e611a0fc6597f0923422180ac194bf6f539e0b2abeec77d357685->enter($__internal_3e02f872241e611a0fc6597f0923422180ac194bf6f539e0b2abeec77d357685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e02f872241e611a0fc6597f0923422180ac194bf6f539e0b2abeec77d357685->leave($__internal_3e02f872241e611a0fc6597f0923422180ac194bf6f539e0b2abeec77d357685_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_af52abbdec23719c2b21f2f2975e143802d83ca222e1fc2e10257061c221cf00 = $this->env->getExtension("native_profiler");
        $__internal_af52abbdec23719c2b21f2f2975e143802d83ca222e1fc2e10257061c221cf00->enter($__internal_af52abbdec23719c2b21f2f2975e143802d83ca222e1fc2e10257061c221cf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_af52abbdec23719c2b21f2f2975e143802d83ca222e1fc2e10257061c221cf00->leave($__internal_af52abbdec23719c2b21f2f2975e143802d83ca222e1fc2e10257061c221cf00_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6755707c7fb63602ca086868acf5393a78fd03e43961ba14b7cbf330987d0bd6 = $this->env->getExtension("native_profiler");
        $__internal_6755707c7fb63602ca086868acf5393a78fd03e43961ba14b7cbf330987d0bd6->enter($__internal_6755707c7fb63602ca086868acf5393a78fd03e43961ba14b7cbf330987d0bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "evaluation/new.html.twig", 3)->display($context);
        
        $__internal_6755707c7fb63602ca086868acf5393a78fd03e43961ba14b7cbf330987d0bd6->leave($__internal_6755707c7fb63602ca086868acf5393a78fd03e43961ba14b7cbf330987d0bd6_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0664de551da9c6084737f9c6579b4f1296a59a04340025bb37c1b10864fa959c = $this->env->getExtension("native_profiler");
        $__internal_0664de551da9c6084737f9c6579b4f1296a59a04340025bb37c1b10864fa959c->enter($__internal_0664de551da9c6084737f9c6579b4f1296a59a04340025bb37c1b10864fa959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_0664de551da9c6084737f9c6579b4f1296a59a04340025bb37c1b10864fa959c->leave($__internal_0664de551da9c6084737f9c6579b4f1296a59a04340025bb37c1b10864fa959c_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_774ffd84031fac27da5d6274e9f0fd09e1ccb3cfa3ac010d5ad204664c6fa5ca = $this->env->getExtension("native_profiler");
        $__internal_774ffd84031fac27da5d6274e9f0fd09e1ccb3cfa3ac010d5ad204664c6fa5ca->enter($__internal_774ffd84031fac27da5d6274e9f0fd09e1ccb3cfa3ac010d5ad204664c6fa5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_774ffd84031fac27da5d6274e9f0fd09e1ccb3cfa3ac010d5ad204664c6fa5ca->leave($__internal_774ffd84031fac27da5d6274e9f0fd09e1ccb3cfa3ac010d5ad204664c6fa5ca_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_36707899a2119190065e340c538609c5ff2c44db6a315082b94d6972068e9204 = $this->env->getExtension("native_profiler");
        $__internal_36707899a2119190065e340c538609c5ff2c44db6a315082b94d6972068e9204->enter($__internal_36707899a2119190065e340c538609c5ff2c44db6a315082b94d6972068e9204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("evaluation_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Evaluation:newactions.html.twig", "evaluation/new.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Evaluation:editform.html.twig", "evaluation/new.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_36707899a2119190065e340c538609c5ff2c44db6a315082b94d6972068e9204->leave($__internal_36707899a2119190065e340c538609c5ff2c44db6a315082b94d6972068e9204_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 15,  119 => 14,  117 => 13,  114 => 12,  112 => 11,  108 => 10,  104 => 9,  101 => 8,  95 => 7,  79 => 6,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.evaluation'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('evaluation_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Evaluation:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Evaluation:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
