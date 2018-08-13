<?php

/* BoAdminBundle:Securitycote:search.html.twig */
class __TwigTemplate_fd405b459a72a856bf1cb68b56394dcbb60781b627b474a053e9bb325954f343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caabce849b70d54a045a669ebd81ac5ce081a603a730c855c66c21de13f40edf = $this->env->getExtension("native_profiler");
        $__internal_caabce849b70d54a045a669ebd81ac5ce081a603a730c855c66c21de13f40edf->enter($__internal_caabce849b70d54a045a669ebd81ac5ce081a603a730c855c66c21de13f40edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:search.html.twig"));

        // line 1
        if (array_key_exists("criteria", $context)) {
            // line 2
            echo "\t<div class=\"result_content\">
\t\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.result", array(), "BoAdminBundle"), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, (isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "html", null, true);
            echo "\"<br/>
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.noresult", array(), "BoAdminBundle"), "html", null, true);
            echo ".
\t</div>
";
        } else {
            // line 7
            echo "\t";
            $this->loadTemplate("BoAdminBundle:Securitycote:tbliste.html.twig", "BoAdminBundle:Securitycote:search.html.twig", 7)->display($context);
        }
        
        $__internal_caabce849b70d54a045a669ebd81ac5ce081a603a730c855c66c21de13f40edf->leave($__internal_caabce849b70d54a045a669ebd81ac5ce081a603a730c855c66c21de13f40edf_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.result'|trans([],'BoAdminBundle')}} "{{criteria}}"<br/>*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}.*/
/* 	</div>*/
/* {%else%}*/
/* 	{% include 'BoAdminBundle:Securitycote:tbliste.html.twig' %}*/
/* {%endif%}*/
