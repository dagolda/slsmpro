<?php

/* BoHomeBundle:Default:document.html.twig */
class __TwigTemplate_709c7a6c8f99500972643cb91f21b3582ddb4115a06f9dbb92de31b9a4bf2432 extends Twig_Template
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
        $__internal_a76b7ac8f638b5fb654504dbc282c6ec536c8d45fcb8cbe7373177529c77ff08 = $this->env->getExtension("native_profiler");
        $__internal_a76b7ac8f638b5fb654504dbc282c6ec536c8d45fcb8cbe7373177529c77ff08->enter($__internal_a76b7ac8f638b5fb654504dbc282c6ec536c8d45fcb8cbe7373177529c77ff08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:document.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "emppj")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("home_emppj_index");
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.emppj", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 6
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "tsdoc")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("home_tsdoc_index");
        echo "\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.tsdoc", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li>
\t<a href=\"http://slsmpro.com/wpslsm/\" target=\"_blank\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.pedagogical", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        
        $__internal_a76b7ac8f638b5fb654504dbc282c6ec536c8d45fcb8cbe7373177529c77ff08->leave($__internal_a76b7ac8f638b5fb654504dbc282c6ec536c8d45fcb8cbe7373177529c77ff08_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  49 => 8,  45 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="emppj"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_emppj_index') }}">*/
/* 		{{'layout.menu.emppj'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="tsdoc"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('home_tsdoc_index') }}">*/
/* 		{{'layout.menu.tsdoc'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li>*/
/* 	<a href="http://slsmpro.com/wpslsm/" target="_blank">*/
/* 		{{'entity.pedagogical'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* */
