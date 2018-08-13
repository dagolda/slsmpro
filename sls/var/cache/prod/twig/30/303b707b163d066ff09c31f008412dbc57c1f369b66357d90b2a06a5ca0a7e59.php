<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b418c1f8322e83fb31e97c27a099c29edb11bddeb7d44f2ac79f9da4eaa54b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ded127c925adc21e4ef99a2474a3102e4494bbf753f509d050fffd1fcd201fa9 = $this->env->getExtension("native_profiler");
        $__internal_ded127c925adc21e4ef99a2474a3102e4494bbf753f509d050fffd1fcd201fa9->enter($__internal_ded127c925adc21e4ef99a2474a3102e4494bbf753f509d050fffd1fcd201fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded127c925adc21e4ef99a2474a3102e4494bbf753f509d050fffd1fcd201fa9->leave($__internal_ded127c925adc21e4ef99a2474a3102e4494bbf753f509d050fffd1fcd201fa9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ccb237a8566150c696c55189e1be8a34c7bc69d1a453569782e5952fc6ab450 = $this->env->getExtension("native_profiler");
        $__internal_9ccb237a8566150c696c55189e1be8a34c7bc69d1a453569782e5952fc6ab450->enter($__internal_9ccb237a8566150c696c55189e1be8a34c7bc69d1a453569782e5952fc6ab450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t\t<div id=\"fos_user_registration\">
\t\t\t<fieldset>
\t\t\t<legend><h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.login", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1></legend>
\t\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"fos_user_registration_register\">
\t\t\t\t";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "\t\t\t\t\t<div class=\"message_error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t<label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t<label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t<p class=\"remeber\">
\t\t\t\t</p>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.reset", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
\t\t\t\t</div>
\t\t\t</form>
\t\t\t\t</fieldset>
\t\t</div>
";
        
        $__internal_9ccb237a8566150c696c55189e1be8a34c7bc69d1a453569782e5952fc6ab450->leave($__internal_9ccb237a8566150c696c55189e1be8a34c7bc69d1a453569782e5952fc6ab450_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  75 => 18,  70 => 16,  66 => 15,  60 => 13,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* 		<div id="fos_user_registration">*/
/* 			<fieldset>*/
/* 			<legend><h1>{{'user.login'|trans([],'BoAdminBundle')}}</h1></legend>*/
/* 			<form action="{{ path("fos_user_security_check") }}" method="post" class="fos_user_registration_register">*/
/* 				{% if error %}*/
/* 					<div class="message_error">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* 				{% endif %}*/
/* 				<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 				<label for="username">{{ 'security.login.username'|trans }}</label>*/
/* 				<input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/* 				<label for="password">{{ 'security.login.password'|trans }}</label>*/
/* 				<input type="password" id="password" name="_password" required="required" />*/
/* 				<p class="remeber">*/
/* 				</p>*/
/* 				<div>*/
/* 					<a href="{{ path('fos_user_resetting_request') }}">{{'user.reset'|trans([],'BoAdminBundle')}}</a>*/
/* 					<input type="submit" id="_submit" name="_submit" value="Valider" />*/
/* 				</div>*/
/* 			</form>*/
/* 				</fieldset>*/
/* 		</div>*/
/* {% endblock fos_user_content %}*/
/* */
