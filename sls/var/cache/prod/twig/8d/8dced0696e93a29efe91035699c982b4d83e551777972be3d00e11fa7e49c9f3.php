<?php

/* company/index.html.twig */
class __TwigTemplate_34c37ea02d2ce6fd911c9b2185eac374e3851544e5bc9062400eb68b9391fce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789b35fe46ea6a2737e0bbb7ae27c1a05ebd92fe1994152e4f2e8748e0730f47 = $this->env->getExtension("native_profiler");
        $__internal_789b35fe46ea6a2737e0bbb7ae27c1a05ebd92fe1994152e4f2e8748e0730f47->enter($__internal_789b35fe46ea6a2737e0bbb7ae27c1a05ebd92fe1994152e4f2e8748e0730f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789b35fe46ea6a2737e0bbb7ae27c1a05ebd92fe1994152e4f2e8748e0730f47->leave($__internal_789b35fe46ea6a2737e0bbb7ae27c1a05ebd92fe1994152e4f2e8748e0730f47_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cd91e818be555480762a39d625ddddba729be1cb0a03f340027b5e4a536c68e = $this->env->getExtension("native_profiler");
        $__internal_2cd91e818be555480762a39d625ddddba729be1cb0a03f340027b5e4a536c68e->enter($__internal_2cd91e818be555480762a39d625ddddba729be1cb0a03f340027b5e4a536c68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_2cd91e818be555480762a39d625ddddba729be1cb0a03f340027b5e4a536c68e->leave($__internal_2cd91e818be555480762a39d625ddddba729be1cb0a03f340027b5e4a536c68e_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a40dd22a8d26fde748e1715b4c951edd8f0c1c9768dca483d732e81ab8d319f2 = $this->env->getExtension("native_profiler");
        $__internal_a40dd22a8d26fde748e1715b4c951edd8f0c1c9768dca483d732e81ab8d319f2->enter($__internal_a40dd22a8d26fde748e1715b4c951edd8f0c1c9768dca483d732e81ab8d319f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "company/index.html.twig", 3)->display($context);
        
        $__internal_a40dd22a8d26fde748e1715b4c951edd8f0c1c9768dca483d732e81ab8d319f2->leave($__internal_a40dd22a8d26fde748e1715b4c951edd8f0c1c9768dca483d732e81ab8d319f2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3d3ce532ea60eb81734c7d6d2186a20ce88df6be7e5efe704bba702dbb1a93a1 = $this->env->getExtension("native_profiler");
        $__internal_3d3ce532ea60eb81734c7d6d2186a20ce88df6be7e5efe704bba702dbb1a93a1->enter($__internal_3d3ce532ea60eb81734c7d6d2186a20ce88df6be7e5efe704bba702dbb1a93a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_3d3ce532ea60eb81734c7d6d2186a20ce88df6be7e5efe704bba702dbb1a93a1->leave($__internal_3d3ce532ea60eb81734c7d6d2186a20ce88df6be7e5efe704bba702dbb1a93a1_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_3d1d872734bef59a28f80c0297ef2331659e8f7563b7d138e893d38f4f5d7760 = $this->env->getExtension("native_profiler");
        $__internal_3d1d872734bef59a28f80c0297ef2331659e8f7563b7d138e893d38f4f5d7760->enter($__internal_3d1d872734bef59a28f80c0297ef2331659e8f7563b7d138e893d38f4f5d7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homemessage", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3d1d872734bef59a28f80c0297ef2331659e8f7563b7d138e893d38f4f5d7760->leave($__internal_3d1d872734bef59a28f80c0297ef2331659e8f7563b7d138e893d38f4f5d7760_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_dc5ffd2414fc1c33b560a92fd4b6e357e52d05190e3c3379209cda9ff30ffbd5 = $this->env->getExtension("native_profiler");
        $__internal_dc5ffd2414fc1c33b560a92fd4b6e357e52d05190e3c3379209cda9ff30ffbd5->enter($__internal_dc5ffd2414fc1c33b560a92fd4b6e357e52d05190e3c3379209cda9ff30ffbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Company:actions.html.twig", "company/index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_dc5ffd2414fc1c33b560a92fd4b6e357e52d05190e3c3379209cda9ff30ffbd5->leave($__internal_dc5ffd2414fc1c33b560a92fd4b6e357e52d05190e3c3379209cda9ff30ffbd5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b03c581f433b23d6b721cd06ae4132af542f1e400047d7cd3da90116fd5a86f = $this->env->getExtension("native_profiler");
        $__internal_7b03c581f433b23d6b721cd06ae4132af542f1e400047d7cd3da90116fd5a86f->enter($__internal_7b03c581f433b23d6b721cd06ae4132af542f1e400047d7cd3da90116fd5a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Company:tbliste.html.twig", "company/index.html.twig", 11)->display($context);
        // line 12
        echo "\t</div>
";
        
        $__internal_7b03c581f433b23d6b721cd06ae4132af542f1e400047d7cd3da90116fd5a86f->leave($__internal_7b03c581f433b23d6b721cd06ae4132af542f1e400047d7cd3da90116fd5a86f_prof);

    }

    public function getTemplateName()
    {
        return "company/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 12,  121 => 11,  118 => 10,  112 => 9,  102 => 7,  96 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.company'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.company'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}} {{'label.homemessage'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Company:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Company:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
