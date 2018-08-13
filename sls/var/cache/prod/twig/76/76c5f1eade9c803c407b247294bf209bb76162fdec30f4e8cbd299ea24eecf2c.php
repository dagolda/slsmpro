<?php

/* evaluation/evaluate.html.twig */
class __TwigTemplate_09f2299d4d43543b2bb0afe6cf0a0b02480aba3b01affb46b09252fe960d2a38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/evaluate.html.twig", 1);
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
        $__internal_dd716529a76f4c42c5e36c84a62bfbcba6bf825000de575afd43267cae1e08cd = $this->env->getExtension("native_profiler");
        $__internal_dd716529a76f4c42c5e36c84a62bfbcba6bf825000de575afd43267cae1e08cd->enter($__internal_dd716529a76f4c42c5e36c84a62bfbcba6bf825000de575afd43267cae1e08cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/evaluate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd716529a76f4c42c5e36c84a62bfbcba6bf825000de575afd43267cae1e08cd->leave($__internal_dd716529a76f4c42c5e36c84a62bfbcba6bf825000de575afd43267cae1e08cd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b30ba052464fa3d12a86b1df0871aea3248c08f1d50bc0d8f1bd81987a68a46 = $this->env->getExtension("native_profiler");
        $__internal_8b30ba052464fa3d12a86b1df0871aea3248c08f1d50bc0d8f1bd81987a68a46->enter($__internal_8b30ba052464fa3d12a86b1df0871aea3248c08f1d50bc0d8f1bd81987a68a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisor", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        
        $__internal_8b30ba052464fa3d12a86b1df0871aea3248c08f1d50bc0d8f1bd81987a68a46->leave($__internal_8b30ba052464fa3d12a86b1df0871aea3248c08f1d50bc0d8f1bd81987a68a46_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_1cb9bc5c74f52570e588fd69b60f3bb6fb67a801f941364b55e14538efe156fc = $this->env->getExtension("native_profiler");
        $__internal_1cb9bc5c74f52570e588fd69b60f3bb6fb67a801f941364b55e14538efe156fc->enter($__internal_1cb9bc5c74f52570e588fd69b60f3bb6fb67a801f941364b55e14538efe156fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "evaluation/evaluate.html.twig", 3)->display($context);
        
        $__internal_1cb9bc5c74f52570e588fd69b60f3bb6fb67a801f941364b55e14538efe156fc->leave($__internal_1cb9bc5c74f52570e588fd69b60f3bb6fb67a801f941364b55e14538efe156fc_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2e3534801bff4cead6c54867749feb674b690a1be1203dc930db8c517579d77a = $this->env->getExtension("native_profiler");
        $__internal_2e3534801bff4cead6c54867749feb674b690a1be1203dc930db8c517579d77a->enter($__internal_2e3534801bff4cead6c54867749feb674b690a1be1203dc930db8c517579d77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_2e3534801bff4cead6c54867749feb674b690a1be1203dc930db8c517579d77a->leave($__internal_2e3534801bff4cead6c54867749feb674b690a1be1203dc930db8c517579d77a_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_c38b671151317fcdbbad9d28917a53d7fe48b6f8cf5c4a4590ddcce6d6dfa7ee = $this->env->getExtension("native_profiler");
        $__internal_c38b671151317fcdbbad9d28917a53d7fe48b6f8cf5c4a4590ddcce6d6dfa7ee->enter($__internal_c38b671151317fcdbbad9d28917a53d7fe48b6f8cf5c4a4590ddcce6d6dfa7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisor", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c38b671151317fcdbbad9d28917a53d7fe48b6f8cf5c4a4590ddcce6d6dfa7ee->leave($__internal_c38b671151317fcdbbad9d28917a53d7fe48b6f8cf5c4a4590ddcce6d6dfa7ee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_845523f462b65611e01ccb206914ccad065b8a34052a6195937f7701dd60b415 = $this->env->getExtension("native_profiler");
        $__internal_845523f462b65611e01ccb206914ccad065b8a34052a6195937f7701dd60b415->enter($__internal_845523f462b65611e01ccb206914ccad065b8a34052a6195937f7701dd60b415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_evaluate", array("id" => $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'errors');
        echo "
\t\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Evaluation:editactions.html.twig", "evaluation/evaluate.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t\t<div class=\"show_content\">
\t\t\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Evaluation:part2form.html.twig", "evaluation/evaluate.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t\t</div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_845523f462b65611e01ccb206914ccad065b8a34052a6195937f7701dd60b415->leave($__internal_845523f462b65611e01ccb206914ccad065b8a34052a6195937f7701dd60b415_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/evaluate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 15,  120 => 14,  118 => 13,  115 => 12,  113 => 11,  109 => 10,  105 => 9,  102 => 8,  96 => 7,  80 => 6,  67 => 4,  55 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'label.advisor'|trans([],'BoAdminBundle')}} >> {{'entity.evaluation'|trans([],'BoAdminBundle')}} {% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'label.advisor'|trans([],'BoAdminBundle')}} >> {{'entity.evaluation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('evaluation_evaluate',{'id':evaluation.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(eval_form) }}*/
/* 				{%include "BoAdminBundle:Evaluation:editactions.html.twig"%}*/
/* 				<div class="show_content">*/
/* 					{%include "BoAdminBundle:Evaluation:part2form.html.twig"%}*/
/* 				</div>*/
/* 			{{ form_rest(eval_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
