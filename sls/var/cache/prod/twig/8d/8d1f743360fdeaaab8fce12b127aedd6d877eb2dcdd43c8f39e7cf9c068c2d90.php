<?php

/* BoAdminBundle:Default:userinfo.html.twig */
class __TwigTemplate_a868a261cb85c1c74f161d3d6e454c578dfa8b901a6ee8ebdd9332e306c16cf6 extends Twig_Template
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
        $__internal_a02dc0038ff430bf147aa4c7a93fc2c02175a47ef0e9acd5c4fd5b9ccd66bfd7 = $this->env->getExtension("native_profiler");
        $__internal_a02dc0038ff430bf147aa4c7a93fc2c02175a47ef0e9acd5c4fd5b9ccd66bfd7->enter($__internal_a02dc0038ff430bf147aa4c7a93fc2c02175a47ef0e9acd5c4fd5b9ccd66bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:userinfo.html.twig"));

        // line 1
        echo "
\t\t\t\t\t\t";
        // line 2
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) && $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 3
            echo "\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/login/man.jpg"), "html", null, true);
            echo "\" width=\"20px\" border=\"0\"/>
\t\t\t\t\t\t\t\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t<a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t\t\t\t\t<a href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a> |
\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("bo_admin_language", array("_locale" => "fr"));
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "_locale"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "_locale"), "method") == "fr"))) {
            echo "class=\"active\"";
        }
        echo ">FR</a> |
\t\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("bo_admin_language", array("_locale" => "en"));
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "_locale"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "_locale"), "method") == "en"))) {
            echo "class=\"active\"";
        }
        echo ">EN</a>
\t\t\t\t\t\t</span>";
        
        $__internal_a02dc0038ff430bf147aa4c7a93fc2c02175a47ef0e9acd5c4fd5b9ccd66bfd7->leave($__internal_a02dc0038ff430bf147aa4c7a93fc2c02175a47ef0e9acd5c4fd5b9ccd66bfd7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  60 => 14,  57 => 13,  52 => 11,  47 => 10,  41 => 7,  37 => 6,  32 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* 						{% if app.user is defined and app.user is not null and is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 								<img src="{{ asset('images/login/man.jpg') }}" width="20px" border="0"/>*/
/* 									{{app.user.username}}*/
/* 								|*/
/* 								<a href="{{ path('fos_user_security_logout') }}">*/
/* 								{{ 'layout.logout'|trans([], 'FOSUserBundle') }}*/
/* 								</a>*/
/* 							{% else %}*/
/* 								<a href="#">{{ 'layout.login'|trans([], 'FOSUserBundle') }}</a> |*/
/* 								<a href="#">{{ 'layout.register'|trans([],'FOSUserBundle') }}</a>*/
/* 						{% endif %}*/
/* 						<span>*/
/* 							<a href="{{ path('bo_admin_language', {'_locale' : 'fr'}) }}" {%if app.session.get('_locale') is defined and app.session.get('_locale')=='fr'%}class="active"{%endif%}>FR</a> |*/
/* 							<a href="{{ path('bo_admin_language', {'_locale' : 'en'}) }}" {%if app.session.get('_locale') is defined and app.session.get('_locale')=='en'%}class="active"{%endif%}>EN</a>*/
/* 						</span>*/
