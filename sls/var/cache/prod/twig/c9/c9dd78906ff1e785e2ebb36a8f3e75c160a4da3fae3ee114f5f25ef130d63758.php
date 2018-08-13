<?php

/* BoHomeBundle:Default:request.html.twig */
class __TwigTemplate_986cbbbcaee9321e5a48ed26a4104a701170d768e2a760dc3cafa1d26f0ccdc1 extends Twig_Template
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
        $__internal_370a8e473279c7e292c450837abf967764c1a8d584078a81b27865f8c3d415a5 = $this->env->getExtension("native_profiler");
        $__internal_370a8e473279c7e292c450837abf967764c1a8d584078a81b27865f8c3d415a5->enter($__internal_370a8e473279c7e292c450837abf967764c1a8d584078a81b27865f8c3d415a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:request.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "absences")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("home_absences_index");
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.absences", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 6
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "message")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("home_message_index");
        echo "\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.message", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 11
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "tickets")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("home_tickets_index");
        echo "\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.help", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        
        $__internal_370a8e473279c7e292c450837abf967764c1a8d584078a81b27865f8c3d415a5->leave($__internal_370a8e473279c7e292c450837abf967764c1a8d584078a81b27865f8c3d415a5_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  61 => 12,  55 => 11,  49 => 8,  45 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="absences"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_absences_index') }}">*/
/* 		{{'layout.menu.absences'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="message"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('home_message_index') }}">*/
/* 		{{'layout.menu.message'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="tickets"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_tickets_index') }}">*/
/* 		{{'layout.menu.help'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* */
