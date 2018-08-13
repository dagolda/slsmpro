<?php

/* maintenance.html.twig */
class __TwigTemplate_9c9c2beaa0e93ac78e6b5a9ba26368508f15ed67f1b57790bbb2894258a75d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c6e0353cafa4c905fb94aceb822f85e557eff5504c474e28d56e74089916940 = $this->env->getExtension("native_profiler");
        $__internal_2c6e0353cafa4c905fb94aceb822f85e557eff5504c474e28d56e74089916940->enter($__internal_2c6e0353cafa4c905fb94aceb822f85e557eff5504c474e28d56e74089916940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\" />
\t\t<meta content=\"\" name=\"Description\" />
\t\t<meta content=\"Jos� Moise N'VEKOUNOU\" name=\"Author\" />
\t\t<meta content=\"\" name=\"Reply-to\" />
\t\t<meta content=\"\" name=\"Copyright\" />
\t\t<meta content=\"\" name=\"Keyword\" />
\t\t<meta content=\"FR\" http-equiv=\"Content-Language\" />
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
        // line 20
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
\t\t\t\t\t\tSLS-MANAGER
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"h-right\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid text-center\">    
\t\t\t\t<div class=\"row content\">
\t\t\t\t\t<div class=\"col-sm-8 text-left\">
\t\t\t\t\t\t<div class=\"container sub-menu\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-content\">
\t\t\t\t\t\t\t<div class=\"message-content\">
\t\t\t\t\t\t\t\t";
        // line 43
        $this->loadTemplate("BoAdminBundle:Default:message.html.twig", "maintenance.html.twig", 43)->display($context);
        // line 44
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2 sidenav\">
\t\t\t\t\t  <div class=\"well\">\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid text-center footer\">
\t\t\t\t  <p>Copyright &copy; Takatim 2016</p>
\t\t\t</div>
\t\t</div>
        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "    </body>
</html>
";
        
        $__internal_2c6e0353cafa4c905fb94aceb822f85e557eff5504c474e28d56e74089916940->leave($__internal_2c6e0353cafa4c905fb94aceb822f85e557eff5504c474e28d56e74089916940_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a6e3b26aa811c1c93feb65f61dfd6bf0be54410f0c6c1649c8c7c99c2e389cd = $this->env->getExtension("native_profiler");
        $__internal_6a6e3b26aa811c1c93feb65f61dfd6bf0be54410f0c6c1649c8c7c99c2e389cd->enter($__internal_6a6e3b26aa811c1c93feb65f61dfd6bf0be54410f0c6c1649c8c7c99c2e389cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SLS!";
        
        $__internal_6a6e3b26aa811c1c93feb65f61dfd6bf0be54410f0c6c1649c8c7c99c2e389cd->leave($__internal_6a6e3b26aa811c1c93feb65f61dfd6bf0be54410f0c6c1649c8c7c99c2e389cd_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_839a04ad5915fb052fe46e6dca50fde6d12b737a196e09cb3a6cad1a3418d878 = $this->env->getExtension("native_profiler");
        $__internal_839a04ad5915fb052fe46e6dca50fde6d12b737a196e09cb3a6cad1a3418d878->enter($__internal_839a04ad5915fb052fe46e6dca50fde6d12b737a196e09cb3a6cad1a3418d878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/new/style.css"), "html", null, true);
        echo "\">\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/actions.css"), "html", null, true);
        echo "\">\t\t\t\t\t
\t\t\t<link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
\t\t\t<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>\t
\t\t";
        
        $__internal_839a04ad5915fb052fe46e6dca50fde6d12b737a196e09cb3a6cad1a3418d878->leave($__internal_839a04ad5915fb052fe46e6dca50fde6d12b737a196e09cb3a6cad1a3418d878_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_54239ccb80390a51b41ecd64a42dc8e55f334b0d6e5750145e11265ebabcf9c7 = $this->env->getExtension("native_profiler");
        $__internal_54239ccb80390a51b41ecd64a42dc8e55f334b0d6e5750145e11265ebabcf9c7->enter($__internal_54239ccb80390a51b41ecd64a42dc8e55f334b0d6e5750145e11265ebabcf9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "\t\t\t\t\t\t\t\t<legend><h1>Maintenance en cours</h1></legend>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<div class=\"maintenance\">
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<p>SLS Manager est actuellement en maintenance.</p>
\t\t\t\t\t\t\t\t\t\t<p>Les travaux en cours peuvent prendre quelque temps. Le système sera à nouveau disponible dès que possible.</p>
\t\t\t\t\t\t\t\t\t\t<p>Désolé pour ce contre-temps, nous vous présentons toutes nos excuses.</p>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<div>Merci pour la compr&#233;hension.</div>
\t\t\t\t\t\t\t\t\t\t<div>SLS-MANAGER pour CLIC</div>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        
        $__internal_54239ccb80390a51b41ecd64a42dc8e55f334b0d6e5750145e11265ebabcf9c7->leave($__internal_54239ccb80390a51b41ecd64a42dc8e55f334b0d6e5750145e11265ebabcf9c7_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90c68560d98110d82b382c8e06323cf00c04a0a2f825ff363a96c61a0e717084 = $this->env->getExtension("native_profiler");
        $__internal_90c68560d98110d82b382c8e06323cf00c04a0a2f825ff363a96c61a0e717084->enter($__internal_90c68560d98110d82b382c8e06323cf00c04a0a2f825ff363a96c61a0e717084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "\t\t\t
\t\t";
        
        $__internal_90c68560d98110d82b382c8e06323cf00c04a0a2f825ff363a96c61a0e717084->leave($__internal_90c68560d98110d82b382c8e06323cf00c04a0a2f825ff363a96c61a0e717084_prof);

    }

    public function getTemplateName()
    {
        return "maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 74,  172 => 73,  151 => 46,  145 => 45,  134 => 16,  130 => 15,  125 => 14,  119 => 13,  107 => 12,  98 => 76,  96 => 73,  82 => 61,  80 => 45,  77 => 44,  75 => 43,  48 => 20,  46 => 13,  42 => 12,  38 => 11,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* 		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />*/
/* 		<meta content="" name="Description" />*/
/* 		<meta content="Jos� Moise N'VEKOUNOU" name="Author" />*/
/* 		<meta content="" name="Reply-to" />*/
/* 		<meta content="" name="Copyright" />*/
/* 		<meta content="" name="Keyword" />*/
/* 		<meta content="FR" http-equiv="Content-Language" />*/
/* 		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}SLS!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* 			<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">*/
/* 			<link rel="stylesheet" href="{{ asset('css/new/style.css') }}">		*/
/* 			<link rel="stylesheet" href="{{ asset('css/actions.css') }}">					*/
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
/* 						SLS-MANAGER*/
/* 					</p>*/
/* 				</div>*/
/* 				<div class="h-right">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container-fluid text-center">    */
/* 				<div class="row content">*/
/* 					<div class="col-sm-8 text-left">*/
/* 						<div class="container sub-menu">*/
/* 							<ul class="list-inline">							*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="container-content">*/
/* 							<div class="message-content">*/
/* 								{%include "BoAdminBundle:Default:message.html.twig"%}*/
/* 							</div>*/
/* 							{% block body %}*/
/* 								<legend><h1>Maintenance en cours</h1></legend>*/
/* 								<br/>*/
/* 								<br/>*/
/* 								<div class="maintenance">*/
/* 									<center>*/
/* 										<p>SLS Manager est actuellement en maintenance.</p>*/
/* 										<p>Les travaux en cours peuvent prendre quelque temps. Le système sera à nouveau disponible dès que possible.</p>*/
/* 										<p>Désolé pour ce contre-temps, nous vous présentons toutes nos excuses.</p>*/
/* 										*/
/* 										<br/>*/
/* 										<div>Merci pour la compr&#233;hension.</div>*/
/* 										<div>SLS-MANAGER pour CLIC</div>*/
/* 									</center>*/
/* 								</div>								*/
/* 							{% endblock %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2 sidenav">*/
/* 					  <div class="well">						*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container-fluid text-center footer">*/
/* 				  <p>Copyright &copy; Takatim 2016</p>*/
/* 			</div>*/
/* 		</div>*/
/*         {% block javascripts %}*/
/* 			*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
