<?php

/* group/historic.html.twig */
class __TwigTemplate_086340677741288b4ad221d2ef77477cca8e3dcc061d99eadbd956157c217ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "group/historic.html.twig", 1);
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
        $__internal_269072abf2dd21443de171aa28e4b7361198f0d4c2c6c59fa1339d4b0b5184e6 = $this->env->getExtension("native_profiler");
        $__internal_269072abf2dd21443de171aa28e4b7361198f0d4c2c6c59fa1339d4b0b5184e6->enter($__internal_269072abf2dd21443de171aa28e4b7361198f0d4c2c6c59fa1339d4b0b5184e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "group/historic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269072abf2dd21443de171aa28e4b7361198f0d4c2c6c59fa1339d4b0b5184e6->leave($__internal_269072abf2dd21443de171aa28e4b7361198f0d4c2c6c59fa1339d4b0b5184e6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_966b623fcfd7a88374343eb58e3b39c2183791dcc03e79a2f3f7fdaca1105864 = $this->env->getExtension("native_profiler");
        $__internal_966b623fcfd7a88374343eb58e3b39c2183791dcc03e79a2f3f7fdaca1105864->enter($__internal_966b623fcfd7a88374343eb58e3b39c2183791dcc03e79a2f3f7fdaca1105864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.historic", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_966b623fcfd7a88374343eb58e3b39c2183791dcc03e79a2f3f7fdaca1105864->leave($__internal_966b623fcfd7a88374343eb58e3b39c2183791dcc03e79a2f3f7fdaca1105864_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0b15b73c3301ebbd705f5fb72c31a074ee7b4ffd70990b7d17451adefb0e0f6c = $this->env->getExtension("native_profiler");
        $__internal_0b15b73c3301ebbd705f5fb72c31a074ee7b4ffd70990b7d17451adefb0e0f6c->enter($__internal_0b15b73c3301ebbd705f5fb72c31a074ee7b4ffd70990b7d17451adefb0e0f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "group/historic.html.twig", 3)->display($context);
        
        $__internal_0b15b73c3301ebbd705f5fb72c31a074ee7b4ffd70990b7d17451adefb0e0f6c->leave($__internal_0b15b73c3301ebbd705f5fb72c31a074ee7b4ffd70990b7d17451adefb0e0f6c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a2a6aacf17ef7f7b168030e6763850abfa347ab55778296347f48ff211c92a73 = $this->env->getExtension("native_profiler");
        $__internal_a2a6aacf17ef7f7b168030e6763850abfa347ab55778296347f48ff211c92a73->enter($__internal_a2a6aacf17ef7f7b168030e6763850abfa347ab55778296347f48ff211c92a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_a2a6aacf17ef7f7b168030e6763850abfa347ab55778296347f48ff211c92a73->leave($__internal_a2a6aacf17ef7f7b168030e6763850abfa347ab55778296347f48ff211c92a73_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_932517e08478d6ec880440a604f407ae3bf5aaab0cee4b0261f24aef6de487a2 = $this->env->getExtension("native_profiler");
        $__internal_932517e08478d6ec880440a604f407ae3bf5aaab0cee4b0261f24aef6de487a2->enter($__internal_932517e08478d6ec880440a604f407ae3bf5aaab0cee4b0261f24aef6de487a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.historic", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_932517e08478d6ec880440a604f407ae3bf5aaab0cee4b0261f24aef6de487a2->leave($__internal_932517e08478d6ec880440a604f407ae3bf5aaab0cee4b0261f24aef6de487a2_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e3645a4e13049f87053611cff9d1b5ab700fe153de4efca94fad91baf1f7e323 = $this->env->getExtension("native_profiler");
        $__internal_e3645a4e13049f87053611cff9d1b5ab700fe153de4efca94fad91baf1f7e323->enter($__internal_e3645a4e13049f87053611cff9d1b5ab700fe153de4efca94fad91baf1f7e323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Group:historicactions.html.twig", "group/historic.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_e3645a4e13049f87053611cff9d1b5ab700fe153de4efca94fad91baf1f7e323->leave($__internal_e3645a4e13049f87053611cff9d1b5ab700fe153de4efca94fad91baf1f7e323_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea7d5d0e94541f9d353895ff69f9e74f9e449da48e752fb917ada88e069c00cc = $this->env->getExtension("native_profiler");
        $__internal_ea7d5d0e94541f9d353895ff69f9e74f9e449da48e752fb917ada88e069c00cc->enter($__internal_ea7d5d0e94541f9d353895ff69f9e74f9e449da48e752fb917ada88e069c00cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Group:historic.html.twig", "group/historic.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
";
        
        $__internal_ea7d5d0e94541f9d353895ff69f9e74f9e449da48e752fb917ada88e069c00cc->leave($__internal_ea7d5d0e94541f9d353895ff69f9e74f9e449da48e752fb917ada88e069c00cc_prof);

    }

    public function getTemplateName()
    {
        return "group/historic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  121 => 12,  118 => 11,  112 => 10,  102 => 8,  96 => 7,  80 => 6,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.historic'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.historic'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Group:historicactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Group:historic.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
