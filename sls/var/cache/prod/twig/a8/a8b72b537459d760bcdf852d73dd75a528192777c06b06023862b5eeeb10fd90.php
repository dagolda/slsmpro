<?php

/* BoCoordinatorBundle:Default:supervision.html.twig */
class __TwigTemplate_91126a02ceddce84d4d50e7de36b460f33b863bebd0e5ec7b134bbebecb3175e extends Twig_Template
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
        $__internal_9c7cfcc6f28c16cac56633c3fc6f8f2f2f54696730e1e395dd71c19a9cbdb0a1 = $this->env->getExtension("native_profiler");
        $__internal_9c7cfcc6f28c16cac56633c3fc6f8f2f2f54696730e1e395dd71c19a9cbdb0a1->enter($__internal_9c7cfcc6f28c16cac56633c3fc6f8f2f2f54696730e1e395dd71c19a9cbdb0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Default:supervision.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "contract")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_contracts", array("status" => 1));
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 6
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "student")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_students");
        echo "\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.student", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>

";
        
        $__internal_9c7cfcc6f28c16cac56633c3fc6f8f2f2f54696730e1e395dd71c19a9cbdb0a1->leave($__internal_9c7cfcc6f28c16cac56633c3fc6f8f2f2f54696730e1e395dd71c19a9cbdb0a1_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Default:supervision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="contract"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('coordinator_supervision_contracts',{'status':1}) }}">*/
/* 		{{'layout.menu.contracts'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="student"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('coordinator_supervision_students') }}">*/
/* 		{{'layout.menu.student'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* */
/* */
