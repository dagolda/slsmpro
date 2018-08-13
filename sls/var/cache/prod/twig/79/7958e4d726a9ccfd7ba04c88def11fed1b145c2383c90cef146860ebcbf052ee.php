<?php

/* FOSUserBundle:ChangePassword:changePassword2_content.html.twig */
class __TwigTemplate_08430c9617ae1b1529fe5ab2572769308b09bedfba1e55b5cf5c4920fdf19f9f extends Twig_Template
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
        $__internal_8870f1a2e894c5e615abdd9a0993dcfad14a5b3431fb216bdddb14d75688e371 = $this->env->getExtension("native_profiler");
        $__internal_8870f1a2e894c5e615abdd9a0993dcfad14a5b3431fb216bdddb14d75688e371->enter($__internal_8870f1a2e894c5e615abdd9a0993dcfad14a5b3431fb216bdddb14d75688e371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword2_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
\t<h2>Change Password</h2>
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8870f1a2e894c5e615abdd9a0993dcfad14a5b3431fb216bdddb14d75688e371->leave($__internal_8870f1a2e894c5e615abdd9a0993dcfad14a5b3431fb216bdddb14d75688e371_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword2_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  35 => 7,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/* 	<h2>Change Password</h2>*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
