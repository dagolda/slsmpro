<?php

/* BoAdminBundle:Default:head.html.twig */
class __TwigTemplate_dfa9a98a4881bbab11552f97fe7c73971b261068ca8eebbfd85d73ac914049c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3daf51f2445b55bbe14c7ae6399d45d851aba2fb95da6357cb907c85817dbda1 = $this->env->getExtension("native_profiler");
        $__internal_3daf51f2445b55bbe14c7ae6399d45d851aba2fb95da6357cb907c85817dbda1->enter($__internal_3daf51f2445b55bbe14c7ae6399d45d851aba2fb95da6357cb907c85817dbda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:head.html.twig"));

        // line 1
        echo "    <head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\" />
\t\t<meta content=\"\" name=\"Description\" />
\t\t<meta content=\"José Moise N'VEKOUNOU\" name=\"Author\" />
\t\t<meta content=\"\" name=\"Reply-to\" />
\t\t<meta content=\"\" name=\"Copyright\" />
\t\t<meta content=\"\" name=\"Keyword\" />
\t\t<meta content=\"FR\" http-equiv=\"Content-Language\" />
\t\t<meta content=\"no-cache\" http-equiv=\"pragma\" />
\t\t<meta content=\"no-cache\" http-equiv=\"cache-control\" />
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
";
        
        $__internal_3daf51f2445b55bbe14c7ae6399d45d851aba2fb95da6357cb907c85817dbda1->leave($__internal_3daf51f2445b55bbe14c7ae6399d45d851aba2fb95da6357cb907c85817dbda1_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_502bd18c57b94127dd2821513b6358d474fe39024e2556fb3bcc79f5b21ecf1e = $this->env->getExtension("native_profiler");
        $__internal_502bd18c57b94127dd2821513b6358d474fe39024e2556fb3bcc79f5b21ecf1e->enter($__internal_502bd18c57b94127dd2821513b6358d474fe39024e2556fb3bcc79f5b21ecf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SLSMPRO!";
        
        $__internal_502bd18c57b94127dd2821513b6358d474fe39024e2556fb3bcc79f5b21ecf1e->leave($__internal_502bd18c57b94127dd2821513b6358d474fe39024e2556fb3bcc79f5b21ecf1e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af903f76d20e896fc9da188caf4d7b6c2bbe0d7c3e64a8797bbc14e485ba3ef5 = $this->env->getExtension("native_profiler");
        $__internal_af903f76d20e896fc9da188caf4d7b6c2bbe0d7c3e64a8797bbc14e485ba3ef5->enter($__internal_af903f76d20e896fc9da188caf4d7b6c2bbe0d7c3e64a8797bbc14e485ba3ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/style.css"), "html", null, true);
        echo "\">\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/header.css"), "html", null, true);
        echo "\">
\t\t";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "style"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "style"), "method") == 1))) {
            // line 18
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/menu_gd.css"), "html", null, true);
            echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/action_gd.css"), "html", null, true);
            echo "\">
\t\t";
        } else {
            // line 21
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/menu.css"), "html", null, true);
            echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/action.css"), "html", null, true);
            echo "\">
\t\t";
        }
        // line 23
        echo "\t\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/actions.css"), "html", null, true);
        echo "\">\t\t\t\t\t
\t\t<link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>\t
\t";
        
        $__internal_af903f76d20e896fc9da188caf4d7b6c2bbe0d7c3e64a8797bbc14e485ba3ef5->leave($__internal_af903f76d20e896fc9da188caf4d7b6c2bbe0d7c3e64a8797bbc14e485ba3ef5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  110 => 23,  105 => 22,  100 => 21,  95 => 19,  90 => 18,  88 => 17,  84 => 16,  80 => 15,  75 => 14,  69 => 13,  57 => 12,  46 => 28,  44 => 13,  40 => 12,  36 => 11,  24 => 1,);
    }
}
/*     <head>*/
/* 		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />*/
/* 		<meta content="" name="Description" />*/
/* 		<meta content="José Moise N'VEKOUNOU" name="Author" />*/
/* 		<meta content="" name="Reply-to" />*/
/* 		<meta content="" name="Copyright" />*/
/* 		<meta content="" name="Keyword" />*/
/* 		<meta content="FR" http-equiv="Content-Language" />*/
/* 		<meta content="no-cache" http-equiv="pragma" />*/
/* 		<meta content="no-cache" http-equiv="cache-control" />*/
/* 		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}SLSMPRO!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* 		<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('css/new/style.css') }}">	*/
/* 		<link rel="stylesheet" href="{{ asset('css/new/header.css') }}">*/
/* 		{% if app.session.get('style') is defined and app.session.get('style')==1 %}*/
/* 		<link rel="stylesheet" href="{{ asset('css/new/menu_gd.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('css/new/action_gd.css') }}">*/
/* 		{% else %}*/
/* 		<link rel="stylesheet" href="{{ asset('css/new/menu.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('css/new/action.css') }}">*/
/* 		{% endif %}		*/
/* 		<link rel="stylesheet" href="{{ asset('css/actions.css') }}">					*/
/* 		<link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/* 		<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>	*/
/* 	{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
