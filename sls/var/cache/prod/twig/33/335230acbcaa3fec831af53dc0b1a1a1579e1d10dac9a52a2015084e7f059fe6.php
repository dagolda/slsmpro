<?php

/* company/edit.html.twig */
class __TwigTemplate_3a1e704c59f6804c82cc70bef70f7ce6d89e2a2eabaf850e5bc104d6aa8311ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/edit.html.twig", 1);
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
        $__internal_32f4f90f4492f205b4f3786592c9538d26e4c991728218f2bd919293e9d7f7aa = $this->env->getExtension("native_profiler");
        $__internal_32f4f90f4492f205b4f3786592c9538d26e4c991728218f2bd919293e9d7f7aa->enter($__internal_32f4f90f4492f205b4f3786592c9538d26e4c991728218f2bd919293e9d7f7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f4f90f4492f205b4f3786592c9538d26e4c991728218f2bd919293e9d7f7aa->leave($__internal_32f4f90f4492f205b4f3786592c9538d26e4c991728218f2bd919293e9d7f7aa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f304559df7542211ec629014011624070ba7172982ef1e8bc04eb4ee9a62c1d5 = $this->env->getExtension("native_profiler");
        $__internal_f304559df7542211ec629014011624070ba7172982ef1e8bc04eb4ee9a62c1d5->enter($__internal_f304559df7542211ec629014011624070ba7172982ef1e8bc04eb4ee9a62c1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_f304559df7542211ec629014011624070ba7172982ef1e8bc04eb4ee9a62c1d5->leave($__internal_f304559df7542211ec629014011624070ba7172982ef1e8bc04eb4ee9a62c1d5_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e522b489005296d06314b33d525b2d5dfd8ae9460aab9727c55fdbbd84985ced = $this->env->getExtension("native_profiler");
        $__internal_e522b489005296d06314b33d525b2d5dfd8ae9460aab9727c55fdbbd84985ced->enter($__internal_e522b489005296d06314b33d525b2d5dfd8ae9460aab9727c55fdbbd84985ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "company/edit.html.twig", 3)->display($context);
        
        $__internal_e522b489005296d06314b33d525b2d5dfd8ae9460aab9727c55fdbbd84985ced->leave($__internal_e522b489005296d06314b33d525b2d5dfd8ae9460aab9727c55fdbbd84985ced_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1a25ca98c0881df032779b316cd2876c114886b905ed9cddabaec45aad6f1577 = $this->env->getExtension("native_profiler");
        $__internal_1a25ca98c0881df032779b316cd2876c114886b905ed9cddabaec45aad6f1577->enter($__internal_1a25ca98c0881df032779b316cd2876c114886b905ed9cddabaec45aad6f1577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_1a25ca98c0881df032779b316cd2876c114886b905ed9cddabaec45aad6f1577->leave($__internal_1a25ca98c0881df032779b316cd2876c114886b905ed9cddabaec45aad6f1577_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_c7d9ff7b24aa6a82e837c5b3b903882542704525fee6246e8153e10f978b3612 = $this->env->getExtension("native_profiler");
        $__internal_c7d9ff7b24aa6a82e837c5b3b903882542704525fee6246e8153e10f978b3612->enter($__internal_c7d9ff7b24aa6a82e837c5b3b903882542704525fee6246e8153e10f978b3612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homemessage", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c7d9ff7b24aa6a82e837c5b3b903882542704525fee6246e8153e10f978b3612->leave($__internal_c7d9ff7b24aa6a82e837c5b3b903882542704525fee6246e8153e10f978b3612_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0143cbc526ecdf1be400e9303ed335eec5c90555d892b8ff4f3e7e458f04017b = $this->env->getExtension("native_profiler");
        $__internal_0143cbc526ecdf1be400e9303ed335eec5c90555d892b8ff4f3e7e458f04017b->enter($__internal_0143cbc526ecdf1be400e9303ed335eec5c90555d892b8ff4f3e7e458f04017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form id=\"edit_form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_edit", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Company:editactions.html.twig", "company/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Company:editform.html.twig", "company/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_0143cbc526ecdf1be400e9303ed335eec5c90555d892b8ff4f3e7e458f04017b->leave($__internal_0143cbc526ecdf1be400e9303ed335eec5c90555d892b8ff4f3e7e458f04017b_prof);

    }

    public function getTemplateName()
    {
        return "company/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  119 => 13,  117 => 12,  114 => 11,  112 => 10,  108 => 9,  104 => 8,  101 => 7,  95 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.company'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.company'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}} {{'label.homemessage'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form id="edit_form" action="{{ path('company_edit',{'id':company.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Company:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Company:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
