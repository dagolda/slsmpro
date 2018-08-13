<?php

/* employee/edit.html.twig */
class __TwigTemplate_9ce0e443aa5c6b4de395923836325ed3a361bdac63df14bed7f909b05fe1810d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/edit.html.twig", 1);
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
        $__internal_1208e1f24e6204a44feaddfb87fe5d1f7e39960f797e8d4cfeae5575a151e334 = $this->env->getExtension("native_profiler");
        $__internal_1208e1f24e6204a44feaddfb87fe5d1f7e39960f797e8d4cfeae5575a151e334->enter($__internal_1208e1f24e6204a44feaddfb87fe5d1f7e39960f797e8d4cfeae5575a151e334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1208e1f24e6204a44feaddfb87fe5d1f7e39960f797e8d4cfeae5575a151e334->leave($__internal_1208e1f24e6204a44feaddfb87fe5d1f7e39960f797e8d4cfeae5575a151e334_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0be04441ecfb94d1e4bae06528503dcfc3301aba64a563bfe562a9e8767c9323 = $this->env->getExtension("native_profiler");
        $__internal_0be04441ecfb94d1e4bae06528503dcfc3301aba64a563bfe562a9e8767c9323->enter($__internal_0be04441ecfb94d1e4bae06528503dcfc3301aba64a563bfe562a9e8767c9323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_0be04441ecfb94d1e4bae06528503dcfc3301aba64a563bfe562a9e8767c9323->leave($__internal_0be04441ecfb94d1e4bae06528503dcfc3301aba64a563bfe562a9e8767c9323_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_2b06c330881b05258275f7aefffaa4ffb179f178ca19982e0978633ee10e103c = $this->env->getExtension("native_profiler");
        $__internal_2b06c330881b05258275f7aefffaa4ffb179f178ca19982e0978633ee10e103c->enter($__internal_2b06c330881b05258275f7aefffaa4ffb179f178ca19982e0978633ee10e103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/edit.html.twig", 3)->display($context);
        
        $__internal_2b06c330881b05258275f7aefffaa4ffb179f178ca19982e0978633ee10e103c->leave($__internal_2b06c330881b05258275f7aefffaa4ffb179f178ca19982e0978633ee10e103c_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_67596c7d5edaef53e0e8b71084459008b092e7272d55048260d0e101692b704f = $this->env->getExtension("native_profiler");
        $__internal_67596c7d5edaef53e0e8b71084459008b092e7272d55048260d0e101692b704f->enter($__internal_67596c7d5edaef53e0e8b71084459008b092e7272d55048260d0e101692b704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_67596c7d5edaef53e0e8b71084459008b092e7272d55048260d0e101692b704f->leave($__internal_67596c7d5edaef53e0e8b71084459008b092e7272d55048260d0e101692b704f_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_c6e8d6450699d2acc50164d534314c115e83be8ddd0b7adbccb1e2ad1eb137df = $this->env->getExtension("native_profiler");
        $__internal_c6e8d6450699d2acc50164d534314c115e83be8ddd0b7adbccb1e2ad1eb137df->enter($__internal_c6e8d6450699d2acc50164d534314c115e83be8ddd0b7adbccb1e2ad1eb137df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c6e8d6450699d2acc50164d534314c115e83be8ddd0b7adbccb1e2ad1eb137df->leave($__internal_c6e8d6450699d2acc50164d534314c115e83be8ddd0b7adbccb1e2ad1eb137df_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30cf26d9223c67200dbc190de72722431f25eb02254f5dc4b0ba8c5ba200214 = $this->env->getExtension("native_profiler");
        $__internal_c30cf26d9223c67200dbc190de72722431f25eb02254f5dc4b0ba8c5ba200214->enter($__internal_c30cf26d9223c67200dbc190de72722431f25eb02254f5dc4b0ba8c5ba200214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Employee:editactions.html.twig", "employee/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        if ((((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")) == "Superadmin") || ((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")) == "Executive"))) {
            // line 13
            echo "\t\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Employee:editform.html.twig", "employee/edit.html.twig", 13)->display($context);
            // line 14
            echo "\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Employee:newform.html.twig", "employee/edit.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</div>
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_c30cf26d9223c67200dbc190de72722431f25eb02254f5dc4b0ba8c5ba200214->leave($__internal_c30cf26d9223c67200dbc190de72722431f25eb02254f5dc4b0ba8c5ba200214_prof);

    }

    public function getTemplateName()
    {
        return "employee/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 18,  129 => 17,  126 => 16,  123 => 15,  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('employee_edit',{'id':employee.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Employee:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%if profile=="Superadmin" or profile=="Executive"%}*/
/* 					{%include "BoAdminBundle:Employee:editform.html.twig"%}*/
/* 				{%else%}*/
/* 					{%include "BoAdminBundle:Employee:newform.html.twig"%}*/
/* 				{%endif%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
