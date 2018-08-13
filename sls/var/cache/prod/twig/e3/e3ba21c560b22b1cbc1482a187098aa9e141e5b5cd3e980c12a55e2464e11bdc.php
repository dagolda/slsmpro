<?php

/* coordinator/new.html.twig */
class __TwigTemplate_37fe8519f087f0bed30a4cbbfb6defa7a28bd3aff2d5bc9531777e605716c8e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coordinator/new.html.twig", 1);
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
        $__internal_ac504442f0d20381ecc910db87261b8ffe1c421ca779fa5d650eec366ad5bd66 = $this->env->getExtension("native_profiler");
        $__internal_ac504442f0d20381ecc910db87261b8ffe1c421ca779fa5d650eec366ad5bd66->enter($__internal_ac504442f0d20381ecc910db87261b8ffe1c421ca779fa5d650eec366ad5bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinator/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac504442f0d20381ecc910db87261b8ffe1c421ca779fa5d650eec366ad5bd66->leave($__internal_ac504442f0d20381ecc910db87261b8ffe1c421ca779fa5d650eec366ad5bd66_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdb9db193f4f8f254945c37b9ea7290e0d4a0831565d47a5b268ad1a6019900f = $this->env->getExtension("native_profiler");
        $__internal_bdb9db193f4f8f254945c37b9ea7290e0d4a0831565d47a5b268ad1a6019900f->enter($__internal_bdb9db193f4f8f254945c37b9ea7290e0d4a0831565d47a5b268ad1a6019900f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_bdb9db193f4f8f254945c37b9ea7290e0d4a0831565d47a5b268ad1a6019900f->leave($__internal_bdb9db193f4f8f254945c37b9ea7290e0d4a0831565d47a5b268ad1a6019900f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a59eed3050caf3de985fd16011b2c5ff41ed27f3bec613538889ac7d975b0838 = $this->env->getExtension("native_profiler");
        $__internal_a59eed3050caf3de985fd16011b2c5ff41ed27f3bec613538889ac7d975b0838->enter($__internal_a59eed3050caf3de985fd16011b2c5ff41ed27f3bec613538889ac7d975b0838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "coordinator/new.html.twig", 3)->display($context);
        
        $__internal_a59eed3050caf3de985fd16011b2c5ff41ed27f3bec613538889ac7d975b0838->leave($__internal_a59eed3050caf3de985fd16011b2c5ff41ed27f3bec613538889ac7d975b0838_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7e03d195a61927218ec7b885b2e874a9a8a625e991fe45d12ec63028bdd100a7 = $this->env->getExtension("native_profiler");
        $__internal_7e03d195a61927218ec7b885b2e874a9a8a625e991fe45d12ec63028bdd100a7->enter($__internal_7e03d195a61927218ec7b885b2e874a9a8a625e991fe45d12ec63028bdd100a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_7e03d195a61927218ec7b885b2e874a9a8a625e991fe45d12ec63028bdd100a7->leave($__internal_7e03d195a61927218ec7b885b2e874a9a8a625e991fe45d12ec63028bdd100a7_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_a3eddf447a323d53fbbe6e96c84ffd9eb4b3227733822aef2c79b2c20f5fe011 = $this->env->getExtension("native_profiler");
        $__internal_a3eddf447a323d53fbbe6e96c84ffd9eb4b3227733822aef2c79b2c20f5fe011->enter($__internal_a3eddf447a323d53fbbe6e96c84ffd9eb4b3227733822aef2c79b2c20f5fe011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a3eddf447a323d53fbbe6e96c84ffd9eb4b3227733822aef2c79b2c20f5fe011->leave($__internal_a3eddf447a323d53fbbe6e96c84ffd9eb4b3227733822aef2c79b2c20f5fe011_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b243fa53c02c4534a9b3d24c471a58794c5381a4232f235a96f34cc58febde95 = $this->env->getExtension("native_profiler");
        $__internal_b243fa53c02c4534a9b3d24c471a58794c5381a4232f235a96f34cc58febde95->enter($__internal_b243fa53c02c4534a9b3d24c471a58794c5381a4232f235a96f34cc58febde95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("coordinator_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Coordinator:newactions.html.twig", "coordinator/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Coordinator:newform.html.twig", "coordinator/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_b243fa53c02c4534a9b3d24c471a58794c5381a4232f235a96f34cc58febde95->leave($__internal_b243fa53c02c4534a9b3d24c471a58794c5381a4232f235a96f34cc58febde95_prof);

    }

    public function getTemplateName()
    {
        return "coordinator/new.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('coordinator_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Coordinator:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Coordinator:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
