<?php

/* BoAdminBundle:Default:admin.html.twig */
class __TwigTemplate_3fbaa59e41dd507aaa588e6b947fc87c42e2f7fd07b441ac33cd398a946c200f extends Twig_Template
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
        $__internal_1238d3ea665e2ab38f7967b88122e6253bd29e068e84c39e07475765e834224a = $this->env->getExtension("native_profiler");
        $__internal_1238d3ea665e2ab38f7967b88122e6253bd29e068e84c39e07475765e834224a->enter($__internal_1238d3ea665e2ab38f7967b88122e6253bd29e068e84c39e07475765e834224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:admin.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "evaluation")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("evaluation_index", array("option" => 1));
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.evaluation", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 6
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "tickets")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("dash_tickets_index");
        echo "\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 11
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "help")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("dash_help_index");
        echo "\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.help", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 16
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "report")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"#\">
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.report", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 21
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "enquiry")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_index");
        echo "\">
\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.request", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 26
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "orderform")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("dash_orderform_index");
        echo "\">
\t\t";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ADMINISTRATION", array(), "array", false, true), "Quiz", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Quiz", array(), "array"), "active", array()) == 1))) {
            // line 32
            echo "<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "admin")) {
                echo " class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("quiz_index");
            echo "\">
\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.quiz", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</a>
</li>
";
        }
        
        $__internal_1238d3ea665e2ab38f7967b88122e6253bd29e068e84c39e07475765e834224a->leave($__internal_1238d3ea665e2ab38f7967b88122e6253bd29e068e84c39e07475765e834224a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  125 => 33,  118 => 32,  116 => 31,  110 => 28,  106 => 27,  100 => 26,  94 => 23,  90 => 22,  84 => 21,  78 => 18,  71 => 16,  65 => 13,  61 => 12,  55 => 11,  49 => 8,  45 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="evaluation"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('evaluation_index',{'option':1}) }}">*/
/* 		{{'layout.menu.evaluation'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="tickets"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('dash_tickets_index') }}">*/
/* 		{{'layout.menu.tickets'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="help"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('dash_help_index') }}">*/
/* 		{{'layout.menu.help'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="report"%}class="active"{%endif%}>*/
/* 	<a href="#">*/
/* 		{{'layout.menu.report'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="enquiry"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('dash_enquiry_index') }}">*/
/* 		{{'layout.menu.request'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="orderform"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('dash_orderform_index') }}">*/
/* 		{{'layout.menu.orderform'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%if app.session.get('rights')['ADMINISTRATION']['Quiz'] is defined and app.session.get('rights')['ADMINISTRATION']['Quiz'].active==1%}*/
/* <li {%if sm=="admin"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('quiz_index') }}">*/
/* 		{{'layout.menu.quiz'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%endif%}*/
/* */
