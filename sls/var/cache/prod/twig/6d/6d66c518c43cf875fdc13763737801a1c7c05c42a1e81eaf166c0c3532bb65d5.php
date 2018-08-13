<?php

/* BoAdminBundle:Default:local.html.twig */
class __TwigTemplate_bf868b890976ee4f86d62dcc0558fdf84e9bf30fd59d8af30e21eac8a59d61aa extends Twig_Template
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
        $__internal_a6d1d09b24ebbf01225eafd7910bf0915c3444231ba9792b11a56f3c94d8b80e = $this->env->getExtension("native_profiler");
        $__internal_a6d1d09b24ebbf01225eafd7910bf0915c3444231ba9792b11a56f3c94d8b80e->enter($__internal_a6d1d09b24ebbf01225eafd7910bf0915c3444231ba9792b11a56f3c94d8b80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:local.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "active", array()) == 1))) {
            // line 2
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "local")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("local_index");
            echo "\">
\t\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.rooms", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Campus", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Campus", array(), "array"), "active", array()) == 1))) {
            // line 9
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "campus")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("campus_index");
            echo "\">
\t\t\tCampus
\t\t</a>
\t</li>
";
        }
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Category Room", array(), "array"), "active", array()) == 1))) {
            // line 16
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "category")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("categoryroom_index");
            echo "\">
\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.categoryroom", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Furnitures", array(), "array"), "active", array()) == 1))) {
            // line 23
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "mobiliers")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("mobiliers_index");
            echo "\">
\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.furniture", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Type of Furniture", array(), "array"), "active", array()) == 1))) {
            // line 30
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "etatmobiliers")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("etatmobiliers_index");
            echo "\">
\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.furniturestate", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Planning", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Planning", array(), "array"), "active", array()) == 1))) {
            // line 37
            echo "\t<!--li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "planning")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"#\">
\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.planning", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li--!>
";
        }
        // line 43
        echo "
";
        
        $__internal_a6d1d09b24ebbf01225eafd7910bf0915c3444231ba9792b11a56f3c94d8b80e->leave($__internal_a6d1d09b24ebbf01225eafd7910bf0915c3444231ba9792b11a56f3c94d8b80e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  129 => 39,  121 => 37,  119 => 36,  112 => 32,  108 => 31,  101 => 30,  99 => 29,  92 => 25,  88 => 24,  81 => 23,  79 => 22,  72 => 18,  68 => 17,  61 => 16,  59 => 15,  51 => 10,  44 => 9,  42 => 8,  35 => 4,  31 => 3,  24 => 2,  22 => 1,);
    }
}
/* {%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].active==1%}*/
/* 	<li {%if sm=="local"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('local_index') }}">*/
/* 			{{'layout.menu.rooms'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['ROOMS']['Campus'] is defined and app.session.get('rights')['ROOMS']['Campus'].active==1%}*/
/* 	<li {%if sm=="campus"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('campus_index') }}">*/
/* 			Campus*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Category Room'].active==1%}*/
/* 	<li {%if sm=="category"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('categoryroom_index') }}">*/
/* 			{{'layout.menu.categoryroom'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Furnitures'].active==1%}*/
/* 	<li {%if sm=="mobiliers"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('mobiliers_index') }}">*/
/* 			{{'layout.menu.furniture'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Type of Furniture'].active==1%}*/
/* 	<li {%if sm=="etatmobiliers"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('etatmobiliers_index') }}">*/
/* 			{{'layout.menu.furniturestate'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['ROOMS']['Planning'] is defined and app.session.get('rights')['ROOMS']['Planning'].active==1%}*/
/* 	<!--li {%if sm=="planning"%}class="active"{%endif%}>*/
/* 		<a href="#">*/
/* 			{{'layout.menu.planning'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li--!>*/
/* {%endif%}*/
/* */
/* */
