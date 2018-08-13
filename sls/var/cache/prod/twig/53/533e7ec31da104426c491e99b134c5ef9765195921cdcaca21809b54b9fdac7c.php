<?php

/* BoAdminBundle:Activities:search.html.twig */
class __TwigTemplate_fd4451d0a124ae64ea0d194eb3ac73b5b78e0a9aee7db41ea4f8eb16152a899c extends Twig_Template
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
        $__internal_897459eb4731fb8fb8d284f7b3d1cc3ab5a3eca83878f8df293fd250d6a9307a = $this->env->getExtension("native_profiler");
        $__internal_897459eb4731fb8fb8d284f7b3d1cc3ab5a3eca83878f8df293fd250d6a9307a->enter($__internal_897459eb4731fb8fb8d284f7b3d1cc3ab5a3eca83878f8df293fd250d6a9307a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Activities:search.html.twig"));

        // line 1
        if (array_key_exists("criteria", $context)) {
            // line 2
            echo "\t<div class=\"result_content\">
\t\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.noresult", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</div>
";
        } else {
            // line 6
            echo "\t";
            $this->loadTemplate("BoAdminBundle:Activities:tbliste.html.twig", "BoAdminBundle:Activities:search.html.twig", 6)->display($context);
        }
        
        $__internal_897459eb4731fb8fb8d284f7b3d1cc3ab5a3eca83878f8df293fd250d6a9307a->leave($__internal_897459eb4731fb8fb8d284f7b3d1cc3ab5a3eca83878f8df293fd250d6a9307a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Activities:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}*/
/* 	</div>*/
/* {%else%}*/
/* 	{% include 'BoAdminBundle:Activities:tbliste.html.twig' %}*/
/* {%endif%}*/
