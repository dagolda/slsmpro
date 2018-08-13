<?php

/* BoAdminBundle:Default:tools.html.twig */
class __TwigTemplate_e720e2320e7b868b39e5d6f7ce80385e57ff97e5a27a6f3e8859e964e0721c4f extends Twig_Template
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
        $__internal_7ac4ee1741fdf638a2e978f6efb16e61632a48b81931d0ab59fdb61e1e1e11b9 = $this->env->getExtension("native_profiler");
        $__internal_7ac4ee1741fdf638a2e978f6efb16e61632a48b81931d0ab59fdb61e1e1e11b9->enter($__internal_7ac4ee1741fdf638a2e978f6efb16e61632a48b81931d0ab59fdb61e1e1e11b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:tools.html.twig"));

        // line 1
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "Superadmin"))) {
            // line 2
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "activities")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("activities_index");
            echo "\">
\t\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.useractivities", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 8
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "user")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">
\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.user", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 13
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "profile")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("profil_index");
        echo "\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.profile", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 18
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "company")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("company_index");
        echo "\">
\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.welcome", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 23
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "Superadmin"))) {
            // line 24
            echo "<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "tickets")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("tickets_index");
            echo "\">
\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.tickets", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</a>
</li>
<li ";
            // line 29
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "tools")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("tools_index");
            echo "\">
\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.tools", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</a>
</li>
<!--li ";
            // line 34
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "holidays")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("holidayslist_index");
            echo "\">
\t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.bankholidays", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</a>
</li--!>
<li ";
            // line 39
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "errors")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("errors_index");
            echo "\">
\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.errors", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</a>
</li>
<li ";
            // line 44
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "specification")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("specification_index");
            echo "\">
\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.module", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</a>
</li>
";
        }
        // line 50
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "mails")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("mails_index");
        echo "\">
\t\t";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.mails", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 55
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "color")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("color_index");
        echo "\">
\t\t";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.color", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 60
        if (((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "profile"), "method", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Superadmin"))) {
            // line 61
            echo "<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "robot")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("robot_index");
            echo "\">
\t\tRobot
\t</a>
</li>

";
        }
        // line 68
        echo "<!--li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "message")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("usermessage_index");
        echo "\">
\t\t";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.message", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li-->
";
        
        $__internal_7ac4ee1741fdf638a2e978f6efb16e61632a48b81931d0ab59fdb61e1e1e11b9->leave($__internal_7ac4ee1741fdf638a2e978f6efb16e61632a48b81931d0ab59fdb61e1e1e11b9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 70,  233 => 69,  226 => 68,  217 => 62,  210 => 61,  208 => 60,  202 => 57,  198 => 56,  192 => 55,  186 => 52,  182 => 51,  175 => 50,  168 => 46,  164 => 45,  158 => 44,  152 => 41,  148 => 40,  142 => 39,  136 => 36,  132 => 35,  126 => 34,  120 => 31,  116 => 30,  110 => 29,  104 => 26,  100 => 25,  93 => 24,  91 => 23,  85 => 20,  81 => 19,  75 => 18,  69 => 15,  65 => 14,  59 => 13,  53 => 10,  49 => 9,  42 => 8,  35 => 4,  31 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if app.user is defined and app.user.employee.profil is not null and app.user.employee.profil=="Superadmin" %}*/
/* 	<li {%if sm=="activities"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('activities_index') }}">*/
/* 			{{'layout.menu.useractivities'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {% endif %}*/
/* <li {%if sm=="user"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('user_index') }}">*/
/* 		{{'layout.menu.user'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="profile"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('profil_index') }}">*/
/* 		{{'layout.menu.profile'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="company"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('company_index') }}">*/
/* 		{{'layout.menu.welcome'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {% if app.user is defined and app.user.employee.profil is not null and app.user.employee.profil=="Superadmin" %}*/
/* <li {%if sm=="tickets"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('tickets_index') }}">*/
/* 		{{'layout.menu.tickets'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="tools"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('tools_index') }}">*/
/* 		{{'layout.menu.tools'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <!--li {%if sm=="holidays"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('holidayslist_index') }}">*/
/* 		{{'layout.menu.bankholidays'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li--!>*/
/* <li {%if sm=="errors"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('errors_index') }}">*/
/* 		{{'layout.menu.errors'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="specification"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('specification_index') }}">*/
/* 		{{'label.module'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {% endif %}*/
/* <li {%if sm=="mails"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('mails_index') }}">*/
/* 		{{'layout.menu.mails'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="color"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('color_index') }}">*/
/* 		{{'layout.menu.color'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%if pm is defined and  app.session.get('profile') is defined and app.session.get('profile')=="Superadmin"%}*/
/* <li {%if sm=="robot"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('robot_index') }}">*/
/* 		Robot*/
/* 	</a>*/
/* </li>*/
/* */
/* {% endif %}*/
/* <!--li {%if sm=="message"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('usermessage_index') }}">*/
/* 		{{'layout.menu.message'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li-->*/
/* */
