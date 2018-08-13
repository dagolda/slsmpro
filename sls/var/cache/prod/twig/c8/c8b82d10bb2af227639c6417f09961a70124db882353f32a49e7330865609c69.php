<?php

/* BoHomeBundle:Default:contract.html.twig */
class __TwigTemplate_9ecbc627baa926a74d97cf19f4bb9d7ea292d5f1204c2a89c5c950404f1c0b7c extends Twig_Template
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
        $__internal_fe4733349405a9be488203b4cedf24dedc49537aa24b7dc997205346d9ab0c5b = $this->env->getExtension("native_profiler");
        $__internal_fe4733349405a9be488203b4cedf24dedc49537aa24b7dc997205346d9ab0c5b->enter($__internal_fe4733349405a9be488203b4cedf24dedc49537aa24b7dc997205346d9ab0c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:contract.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "contract")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("home_contract_show");
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            // line 7
            echo "<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "timesheet")) {
                echo " class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("home_timesheet_index");
            echo "\">
\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.timesheet", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</a>
</li>
";
        }
        // line 13
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "substitution")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("home_substitution_index");
        echo "\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.substitutions", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 18
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "invitation")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("home_invitation_index");
        echo "\">
\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.invitation", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        
        $__internal_fe4733349405a9be488203b4cedf24dedc49537aa24b7dc997205346d9ab0c5b->leave($__internal_fe4733349405a9be488203b4cedf24dedc49537aa24b7dc997205346d9ab0c5b_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  82 => 19,  76 => 18,  70 => 15,  66 => 14,  59 => 13,  52 => 9,  48 => 8,  41 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="contract"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_contract_show') }}">*/
/* 		{{'layout.menu.contracts'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%if app.session.get('dts') is defined and app.session.get('dts')==1%}*/
/* <li {%if sm=="timesheet"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_timesheet_index') }}">*/
/* 		{{'layout.menu.timesheet'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%endif%}*/
/* <li {%if sm=="substitution"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_substitution_index') }}">*/
/* 		{{'layout.menu.substitutions'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="invitation"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_invitation_index') }}">*/
/* 		{{'label.invitation'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* */
