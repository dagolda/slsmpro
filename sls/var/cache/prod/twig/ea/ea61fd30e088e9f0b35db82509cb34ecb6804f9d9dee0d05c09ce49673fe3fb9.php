<?php

/* rubric/show.html.twig */
class __TwigTemplate_6c8ed3688027fce44ca983f211c70efdf0216885708f298d00868c1eccdc9576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rubric/show.html.twig", 1);
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
        $__internal_67e4df18ba8efe85279c2f641b414963613b954a8e8a14576a2023f765e700e7 = $this->env->getExtension("native_profiler");
        $__internal_67e4df18ba8efe85279c2f641b414963613b954a8e8a14576a2023f765e700e7->enter($__internal_67e4df18ba8efe85279c2f641b414963613b954a8e8a14576a2023f765e700e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rubric/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e4df18ba8efe85279c2f641b414963613b954a8e8a14576a2023f765e700e7->leave($__internal_67e4df18ba8efe85279c2f641b414963613b954a8e8a14576a2023f765e700e7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7946b69545e97228bd115de1a966a53d745f47e37398f16c741529e9b1949dd3 = $this->env->getExtension("native_profiler");
        $__internal_7946b69545e97228bd115de1a966a53d745f47e37398f16c741529e9b1949dd3->enter($__internal_7946b69545e97228bd115de1a966a53d745f47e37398f16c741529e9b1949dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_7946b69545e97228bd115de1a966a53d745f47e37398f16c741529e9b1949dd3->leave($__internal_7946b69545e97228bd115de1a966a53d745f47e37398f16c741529e9b1949dd3_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_2faf9a624698746e132a5da0c1e809696bc5eee6249b9bf8432bc404f56470ce = $this->env->getExtension("native_profiler");
        $__internal_2faf9a624698746e132a5da0c1e809696bc5eee6249b9bf8432bc404f56470ce->enter($__internal_2faf9a624698746e132a5da0c1e809696bc5eee6249b9bf8432bc404f56470ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "rubric/show.html.twig", 3)->display($context);
        
        $__internal_2faf9a624698746e132a5da0c1e809696bc5eee6249b9bf8432bc404f56470ce->leave($__internal_2faf9a624698746e132a5da0c1e809696bc5eee6249b9bf8432bc404f56470ce_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_99bc7e1d59191dbaa9f520267a979f3dced41889ff388fb74d9ef7cb39b001b3 = $this->env->getExtension("native_profiler");
        $__internal_99bc7e1d59191dbaa9f520267a979f3dced41889ff388fb74d9ef7cb39b001b3->enter($__internal_99bc7e1d59191dbaa9f520267a979f3dced41889ff388fb74d9ef7cb39b001b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_99bc7e1d59191dbaa9f520267a979f3dced41889ff388fb74d9ef7cb39b001b3->leave($__internal_99bc7e1d59191dbaa9f520267a979f3dced41889ff388fb74d9ef7cb39b001b3_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_f58d33754a6b4b39d6cb33877323348d7f0da3e15d80bbc6876dcdcf21dcea73 = $this->env->getExtension("native_profiler");
        $__internal_f58d33754a6b4b39d6cb33877323348d7f0da3e15d80bbc6876dcdcf21dcea73->enter($__internal_f58d33754a6b4b39d6cb33877323348d7f0da3e15d80bbc6876dcdcf21dcea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubric"]) ? $context["rubric"] : $this->getContext($context, "rubric")), "nameen", array()), "html", null, true);
        echo "</h1>";
        
        $__internal_f58d33754a6b4b39d6cb33877323348d7f0da3e15d80bbc6876dcdcf21dcea73->leave($__internal_f58d33754a6b4b39d6cb33877323348d7f0da3e15d80bbc6876dcdcf21dcea73_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1874ab6ffa66bd8f3e862ff0c58f327971b4f5d9adc3a383ba7839c5651945e0 = $this->env->getExtension("native_profiler");
        $__internal_1874ab6ffa66bd8f3e862ff0c58f327971b4f5d9adc3a383ba7839c5651945e0->enter($__internal_1874ab6ffa66bd8f3e862ff0c58f327971b4f5d9adc3a383ba7839c5651945e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Rubric:showactions.html.twig", "rubric/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"display_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Rubric:show.html.twig", "rubric/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>
";
        
        $__internal_1874ab6ffa66bd8f3e862ff0c58f327971b4f5d9adc3a383ba7839c5651945e0->leave($__internal_1874ab6ffa66bd8f3e862ff0c58f327971b4f5d9adc3a383ba7839c5651945e0_prof);

    }

    public function getTemplateName()
    {
        return "rubric/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 11,  109 => 10,  106 => 9,  104 => 8,  101 => 7,  95 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.rubric'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}} >> {{rubric.nameen}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Rubric:showactions.html.twig"%}*/
/* 		<div class="display_content">*/
/* 			{%include "BoAdminBundle:Rubric:show.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
