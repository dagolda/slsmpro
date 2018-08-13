<?php

/* BoHomeBundle:Absences:new.html.twig */
class __TwigTemplate_836717e45dbab68ec5157fc8ff1b5fe0103c4965a39b693e6637289111c6554a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home.html.twig", "BoHomeBundle:Absences:new.html.twig", 1);
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
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bff241292847a50851b12cc4fb40ad4abe67adf34b2745b65be2e2037629105d = $this->env->getExtension("native_profiler");
        $__internal_bff241292847a50851b12cc4fb40ad4abe67adf34b2745b65be2e2037629105d->enter($__internal_bff241292847a50851b12cc4fb40ad4abe67adf34b2745b65be2e2037629105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bff241292847a50851b12cc4fb40ad4abe67adf34b2745b65be2e2037629105d->leave($__internal_bff241292847a50851b12cc4fb40ad4abe67adf34b2745b65be2e2037629105d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a6ea9a26937805ed0119357d58780e97cb59587c7f5b23161f52d3e1bb8af93 = $this->env->getExtension("native_profiler");
        $__internal_8a6ea9a26937805ed0119357d58780e97cb59587c7f5b23161f52d3e1bb8af93->enter($__internal_8a6ea9a26937805ed0119357d58780e97cb59587c7f5b23161f52d3e1bb8af93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absencerequest", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8a6ea9a26937805ed0119357d58780e97cb59587c7f5b23161f52d3e1bb8af93->leave($__internal_8a6ea9a26937805ed0119357d58780e97cb59587c7f5b23161f52d3e1bb8af93_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_55b13c49935b0791fc1105bf01df00356ae9e298c3b1d85b208a9d094186279a = $this->env->getExtension("native_profiler");
        $__internal_55b13c49935b0791fc1105bf01df00356ae9e298c3b1d85b208a9d094186279a->enter($__internal_55b13c49935b0791fc1105bf01df00356ae9e298c3b1d85b208a9d094186279a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:request.html.twig", "BoHomeBundle:Absences:new.html.twig", 3)->display($context);
        
        $__internal_55b13c49935b0791fc1105bf01df00356ae9e298c3b1d85b208a9d094186279a->leave($__internal_55b13c49935b0791fc1105bf01df00356ae9e298c3b1d85b208a9d094186279a_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f93445d86da865c50710c2d4be4239cfc415438dee41578ad04adc699bad1792 = $this->env->getExtension("native_profiler");
        $__internal_f93445d86da865c50710c2d4be4239cfc415438dee41578ad04adc699bad1792->enter($__internal_f93445d86da865c50710c2d4be4239cfc415438dee41578ad04adc699bad1792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Absences:new.html.twig", 4)->display($context);
        }
        
        $__internal_f93445d86da865c50710c2d4be4239cfc415438dee41578ad04adc699bad1792->leave($__internal_f93445d86da865c50710c2d4be4239cfc415438dee41578ad04adc699bad1792_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_94160ecd18bb734fcce26e52256dda2ecb3cdb662406bced59d04a4c2b7c16d1 = $this->env->getExtension("native_profiler");
        $__internal_94160ecd18bb734fcce26e52256dda2ecb3cdb662406bced59d04a4c2b7c16d1->enter($__internal_94160ecd18bb734fcce26e52256dda2ecb3cdb662406bced59d04a4c2b7c16d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absencerequest", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_94160ecd18bb734fcce26e52256dda2ecb3cdb662406bced59d04a4c2b7c16d1->leave($__internal_94160ecd18bb734fcce26e52256dda2ecb3cdb662406bced59d04a4c2b7c16d1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7951af2972bf3fd275dcbcfe3d7d65aca7569175011c207a900fdeea68683540 = $this->env->getExtension("native_profiler");
        $__internal_7951af2972bf3fd275dcbcfe3d7d65aca7569175011c207a900fdeea68683540->enter($__internal_7951af2972bf3fd275dcbcfe3d7d65aca7569175011c207a900fdeea68683540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("home_absences_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoHomeBundle:Absences:newactions.html.twig", "BoHomeBundle:Absences:new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class='show_content'>
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoHomeBundle:Absences:newform.html.twig", "BoHomeBundle:Absences:new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_7951af2972bf3fd275dcbcfe3d7d65aca7569175011c207a900fdeea68683540->leave($__internal_7951af2972bf3fd275dcbcfe3d7d65aca7569175011c207a900fdeea68683540_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 14,  120 => 13,  118 => 12,  115 => 11,  113 => 10,  109 => 9,  105 => 8,  102 => 7,  96 => 6,  80 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'home.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absencerequest'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absencerequest'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('home_absences_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoHomeBundle:Absences:newactions.html.twig"%}*/
/* 			<div class='show_content'>*/
/* 				{%include "BoHomeBundle:Absences:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
