<?php

/* ::user.html.twig */
class __TwigTemplate_8707fc6173ee06b2d0572497285df3e3076730bb8228235e9ff1625116301eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'smenu' => array($this, 'block_smenu'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55f92f30881f0ad9237b17cf3dc5873b2c5e44671a5249b5d0a552466f891572 = $this->env->getExtension("native_profiler");
        $__internal_55f92f30881f0ad9237b17cf3dc5873b2c5e44671a5249b5d0a552466f891572->enter($__internal_55f92f30881f0ad9237b17cf3dc5873b2c5e44671a5249b5d0a552466f891572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::user.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\" />
\t\t<meta content=\"\" name=\"Description\" />
\t\t<meta content=\"José Moise N'VEKOUNOU\" name=\"Author\" />
\t\t<meta content=\"\" name=\"Reply-to\" />
\t\t<meta content=\"\" name=\"Copyright\" />
\t\t<meta content=\"\" name=\"Keyword\" />
\t\t<meta content=\"no-cache\" http-equiv=\"pragma\" />
\t\t<meta content=\"no-cache\" http-equiv=\"cache-control\" />
\t\t<meta content=\"FR\" http-equiv=\"Content-Language\" />
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div id=\"wrapper\">
\t\t\t<div class=\"container header\">
\t\t\t\t<div class=\"h-left\">
\t\t\t\t\t<div class=\"logo\"></div>
\t\t\t\t\t<p class=\"slogan\">
\t\t\t\t\t\tSLSMPRO
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"h-right\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"line\"/>
\t\t\t<div class=\"container-fluid text-center\">    
\t\t\t\t<div class=\"row content\">
\t\t\t\t\t<div class=\"col-sm-8 text-left\">
\t\t\t\t\t\t<div class=\"container sub-menu\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t";
        // line 46
        $this->displayBlock('smenu', $context, $blocks);
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-content\">
\t\t\t\t\t\t\t";
        // line 50
        $this->displayBlock('actions', $context, $blocks);
        // line 51
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2 sidenav\">
\t\t\t\t\t  <!--div class=\"well\">
\t\t\t\t\t\t\t";
        // line 56
        $this->loadTemplate("BoAdminBundle:Default:slogan.html.twig", "::user.html.twig", 56)->display($context);
        echo "\t\t\t\t\t\t
\t\t\t\t\t  </div-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 61
        $this->loadTemplate("BoAdminBundle:Default:footer.html.twig", "::user.html.twig", 61)->display($context);
        // line 62
        echo "\t\t</div>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_55f92f30881f0ad9237b17cf3dc5873b2c5e44671a5249b5d0a552466f891572->leave($__internal_55f92f30881f0ad9237b17cf3dc5873b2c5e44671a5249b5d0a552466f891572_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_efc0894be100809576853b50c654402ef8ea9435fe1dd824b55069eeb2405f41 = $this->env->getExtension("native_profiler");
        $__internal_efc0894be100809576853b50c654402ef8ea9435fe1dd824b55069eeb2405f41->enter($__internal_efc0894be100809576853b50c654402ef8ea9435fe1dd824b55069eeb2405f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SLSMPRO!";
        
        $__internal_efc0894be100809576853b50c654402ef8ea9435fe1dd824b55069eeb2405f41->leave($__internal_efc0894be100809576853b50c654402ef8ea9435fe1dd824b55069eeb2405f41_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b2e8b466a713bb0a1ef9850a52312607a2974b2c18467cf9cf7b7ca76459ec5 = $this->env->getExtension("native_profiler");
        $__internal_5b2e8b466a713bb0a1ef9850a52312607a2974b2c18467cf9cf7b7ca76459ec5->enter($__internal_5b2e8b466a713bb0a1ef9850a52312607a2974b2c18467cf9cf7b7ca76459ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/style.css"), "html", null, true);
        echo "\">\t
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/header.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/menu_gloss_default.css"), "html", null, true);
        echo "\">\t\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/actions.css"), "html", null, true);
        echo "\">\t
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/registration.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/password.css"), "html", null, true);
        echo "\">\t\t\t\t
\t\t\t<link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
\t\t\t<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>\t
\t\t";
        
        $__internal_5b2e8b466a713bb0a1ef9850a52312607a2974b2c18467cf9cf7b7ca76459ec5->leave($__internal_5b2e8b466a713bb0a1ef9850a52312607a2974b2c18467cf9cf7b7ca76459ec5_prof);

    }

    // line 46
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c0ff6cbd2dbd4a02ac20f9f48517e00c0519dd8829db912984ae0daf5b22a95c = $this->env->getExtension("native_profiler");
        $__internal_c0ff6cbd2dbd4a02ac20f9f48517e00c0519dd8829db912984ae0daf5b22a95c->enter($__internal_c0ff6cbd2dbd4a02ac20f9f48517e00c0519dd8829db912984ae0daf5b22a95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_c0ff6cbd2dbd4a02ac20f9f48517e00c0519dd8829db912984ae0daf5b22a95c->leave($__internal_c0ff6cbd2dbd4a02ac20f9f48517e00c0519dd8829db912984ae0daf5b22a95c_prof);

    }

    // line 50
    public function block_actions($context, array $blocks = array())
    {
        $__internal_97c8aa8ff4b8813d06f7309ed82fbec62d3f96842ff2fcca5d98082d547b2925 = $this->env->getExtension("native_profiler");
        $__internal_97c8aa8ff4b8813d06f7309ed82fbec62d3f96842ff2fcca5d98082d547b2925->enter($__internal_97c8aa8ff4b8813d06f7309ed82fbec62d3f96842ff2fcca5d98082d547b2925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_97c8aa8ff4b8813d06f7309ed82fbec62d3f96842ff2fcca5d98082d547b2925->leave($__internal_97c8aa8ff4b8813d06f7309ed82fbec62d3f96842ff2fcca5d98082d547b2925_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae862f2de561f99b95046334cf9b0b949969b89846c444d207e47950329dae82 = $this->env->getExtension("native_profiler");
        $__internal_ae862f2de561f99b95046334cf9b0b949969b89846c444d207e47950329dae82->enter($__internal_ae862f2de561f99b95046334cf9b0b949969b89846c444d207e47950329dae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae862f2de561f99b95046334cf9b0b949969b89846c444d207e47950329dae82->leave($__internal_ae862f2de561f99b95046334cf9b0b949969b89846c444d207e47950329dae82_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9fb361f8ec309fcdafb85c152da8f4755aca70e8b598fc9aa93f3e1cb828720 = $this->env->getExtension("native_profiler");
        $__internal_a9fb361f8ec309fcdafb85c152da8f4755aca70e8b598fc9aa93f3e1cb828720->enter($__internal_a9fb361f8ec309fcdafb85c152da8f4755aca70e8b598fc9aa93f3e1cb828720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\">\t
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"> \t\t\t
\t\t";
        
        $__internal_a9fb361f8ec309fcdafb85c152da8f4755aca70e8b598fc9aa93f3e1cb828720->leave($__internal_a9fb361f8ec309fcdafb85c152da8f4755aca70e8b598fc9aa93f3e1cb828720_prof);

    }

    public function getTemplateName()
    {
        return "::user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 65,  211 => 64,  205 => 63,  194 => 51,  183 => 50,  172 => 46,  161 => 22,  157 => 21,  153 => 20,  149 => 19,  145 => 18,  141 => 17,  136 => 16,  130 => 15,  118 => 14,  109 => 67,  107 => 63,  104 => 62,  102 => 61,  94 => 56,  88 => 52,  85 => 51,  83 => 50,  76 => 46,  52 => 26,  50 => 15,  46 => 14,  42 => 13,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* 		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />*/
/* 		<meta content="" name="Description" />*/
/* 		<meta content="José Moise N'VEKOUNOU" name="Author" />*/
/* 		<meta content="" name="Reply-to" />*/
/* 		<meta content="" name="Copyright" />*/
/* 		<meta content="" name="Keyword" />*/
/* 		<meta content="no-cache" http-equiv="pragma" />*/
/* 		<meta content="no-cache" http-equiv="cache-control" />*/
/* 		<meta content="FR" http-equiv="Content-Language" />*/
/* 		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}SLSMPRO!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* 			<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">*/
/* 			<link rel="stylesheet" href="{{ asset('css/new/style.css') }}">	*/
/* 			<link rel="stylesheet" href="{{ asset('css/new/header.css') }}">*/
/* 			<link rel="stylesheet" href="{{ asset('css/new/menu_gloss_default.css') }}">			*/
/* 			<link rel="stylesheet" href="{{ asset('css/actions.css') }}">	*/
/* 			<link rel="stylesheet" href="{{ asset('css/new/registration.css') }}">*/
/* 			<link rel="stylesheet" href="{{ asset('css/new/password.css') }}">				*/
/* 			<link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/* 			<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>	*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* 		<div id="wrapper">*/
/* 			<div class="container header">*/
/* 				<div class="h-left">*/
/* 					<div class="logo"></div>*/
/* 					<p class="slogan">*/
/* 						SLSMPRO*/
/* 					</p>*/
/* 				</div>*/
/* 				<div class="h-right">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="line"/>*/
/* 			<div class="container-fluid text-center">    */
/* 				<div class="row content">*/
/* 					<div class="col-sm-8 text-left">*/
/* 						<div class="container sub-menu">*/
/* 							<ul class="list-inline">*/
/* 								{% block smenu %}{% endblock %}								*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="container-content">*/
/* 							{% block actions %}{% endblock %}*/
/* 							{% block body %}{% endblock %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2 sidenav">*/
/* 					  <!--div class="well">*/
/* 							{%include "BoAdminBundle:Default:slogan.html.twig"%}						*/
/* 					  </div-->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{%include "BoAdminBundle:Default:footer.html.twig"%}*/
/* 		</div>*/
/*         {% block javascripts %}*/
/* 			<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js')}}">	*/
/* 			<script type="text/javascript" src="{{asset('js/vendor/bootstrap/bootstrap.min.js')}}"> 			*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
