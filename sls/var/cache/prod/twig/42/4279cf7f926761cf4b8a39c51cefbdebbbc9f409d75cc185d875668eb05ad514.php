<?php

/* group/new.html.twig */
class __TwigTemplate_ce268ae07a1285fc8dec8d0dd40097a105553956848d197e8f74fc8b27f0b316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "group/new.html.twig", 1);
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
        $__internal_e141cc188e27821e200ad681bb27e96179f52e46911b7f244778eaee672779ff = $this->env->getExtension("native_profiler");
        $__internal_e141cc188e27821e200ad681bb27e96179f52e46911b7f244778eaee672779ff->enter($__internal_e141cc188e27821e200ad681bb27e96179f52e46911b7f244778eaee672779ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e141cc188e27821e200ad681bb27e96179f52e46911b7f244778eaee672779ff->leave($__internal_e141cc188e27821e200ad681bb27e96179f52e46911b7f244778eaee672779ff_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dea688e21f8491c11d1b8fdff5bc808816c5042082577b0e9ca9b603b4c640a = $this->env->getExtension("native_profiler");
        $__internal_8dea688e21f8491c11d1b8fdff5bc808816c5042082577b0e9ca9b603b4c640a->enter($__internal_8dea688e21f8491c11d1b8fdff5bc808816c5042082577b0e9ca9b603b4c640a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8dea688e21f8491c11d1b8fdff5bc808816c5042082577b0e9ca9b603b4c640a->leave($__internal_8dea688e21f8491c11d1b8fdff5bc808816c5042082577b0e9ca9b603b4c640a_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7819894602b25d250fc805bc937e288193a6012bf038aa7b50d869b995f5adab = $this->env->getExtension("native_profiler");
        $__internal_7819894602b25d250fc805bc937e288193a6012bf038aa7b50d869b995f5adab->enter($__internal_7819894602b25d250fc805bc937e288193a6012bf038aa7b50d869b995f5adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "group/new.html.twig", 3)->display($context);
        
        $__internal_7819894602b25d250fc805bc937e288193a6012bf038aa7b50d869b995f5adab->leave($__internal_7819894602b25d250fc805bc937e288193a6012bf038aa7b50d869b995f5adab_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_85ad17a440e90653e469df2f3274cd438f4c3a81f306f6f0d07de8c9a264e886 = $this->env->getExtension("native_profiler");
        $__internal_85ad17a440e90653e469df2f3274cd438f4c3a81f306f6f0d07de8c9a264e886->enter($__internal_85ad17a440e90653e469df2f3274cd438f4c3a81f306f6f0d07de8c9a264e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_85ad17a440e90653e469df2f3274cd438f4c3a81f306f6f0d07de8c9a264e886->leave($__internal_85ad17a440e90653e469df2f3274cd438f4c3a81f306f6f0d07de8c9a264e886_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_3b5486eec2ea6f378f4443ee2be9642692271d4d41a11e1c41e8c6e77629a628 = $this->env->getExtension("native_profiler");
        $__internal_3b5486eec2ea6f378f4443ee2be9642692271d4d41a11e1c41e8c6e77629a628->enter($__internal_3b5486eec2ea6f378f4443ee2be9642692271d4d41a11e1c41e8c6e77629a628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3b5486eec2ea6f378f4443ee2be9642692271d4d41a11e1c41e8c6e77629a628->leave($__internal_3b5486eec2ea6f378f4443ee2be9642692271d4d41a11e1c41e8c6e77629a628_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_22608ec7455f98e27938ec30deefcb28c73051edc28bf3098db1fd9f733d7d41 = $this->env->getExtension("native_profiler");
        $__internal_22608ec7455f98e27938ec30deefcb28c73051edc28bf3098db1fd9f733d7d41->enter($__internal_22608ec7455f98e27938ec30deefcb28c73051edc28bf3098db1fd9f733d7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("group_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Group:newactions.html.twig", "group/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Group:newform.html.twig", "group/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_22608ec7455f98e27938ec30deefcb28c73051edc28bf3098db1fd9f733d7d41->leave($__internal_22608ec7455f98e27938ec30deefcb28c73051edc28bf3098db1fd9f733d7d41_prof);

    }

    public function getTemplateName()
    {
        return "group/new.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('group_new') }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Group:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Group:newform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
