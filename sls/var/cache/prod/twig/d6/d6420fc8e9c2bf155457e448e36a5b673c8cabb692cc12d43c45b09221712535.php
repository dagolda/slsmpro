<?php

/* BoHomeBundle:Default:tdb.html.twig */
class __TwigTemplate_74917d24a5f9831c01e8a0499ef09a5090983cabb90c163c164e0368a399a30a extends Twig_Template
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
        $__internal_505ddc386c488281b1d42a4dbf4e709c1f64d58900e63ea1750365a8c72d31da = $this->env->getExtension("native_profiler");
        $__internal_505ddc386c488281b1d42a4dbf4e709c1f64d58900e63ea1750365a8c72d31da->enter($__internal_505ddc386c488281b1d42a4dbf4e709c1f64d58900e63ea1750365a8c72d31da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:tdb.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "home")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("bo_home_homepage");
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.home", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dat"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            // line 7
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "agenda")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("home_agenda_index");
            echo "\">
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.agenda", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 13
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "teamcontact")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("bo_home_teamcontact");
        echo "\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 18
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "myaccount")) {
            // line 19
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "myaccount")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.myaccount", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</li>
";
        }
        // line 23
        echo "
";
        
        $__internal_505ddc386c488281b1d42a4dbf4e709c1f64d58900e63ea1750365a8c72d31da->leave($__internal_505ddc386c488281b1d42a4dbf4e709c1f64d58900e63ea1750365a8c72d31da_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:tdb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  85 => 20,  78 => 19,  76 => 18,  70 => 15,  66 => 14,  59 => 13,  52 => 9,  48 => 8,  41 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="home"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('bo_home_homepage') }}">*/
/* 		{{'layout.menu.home'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%if app.session.get('dat') is defined and app.session.get('dts')==1%}*/
/* 	<li {%if sm=="agenda"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('home_agenda_index') }}">*/
/* 			{{'layout.menu.agenda'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* <li {%if sm=="teamcontact"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('bo_home_teamcontact') }}">*/
/* 		{{'layout.menu.teamcontacts'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%if sm=="myaccount"%}*/
/* 	<li {%if sm=="myaccount"%}class="active"{%endif%}>*/
/* 		{{'layout.menu.myaccount'|trans([],'BoAdminBundle')}}*/
/* 	</li>*/
/* {%endif%}*/
/* */
/* */
