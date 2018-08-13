<?php

/* common.html.twig */
class __TwigTemplate_88201135871b41915d4f91116ed0cafa1db223c4e308afed5c8594b81d05e5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hright' => array($this, 'block_hright'),
            'nemu' => array($this, 'block_nemu'),
            'smenu' => array($this, 'block_smenu'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'navbis' => array($this, 'block_navbis'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65072f8eed89838049d173c6f635ab220a47a95f235239f2c44da3ae0266c29f = $this->env->getExtension("native_profiler");
        $__internal_65072f8eed89838049d173c6f635ab220a47a95f235239f2c44da3ae0266c29f->enter($__internal_65072f8eed89838049d173c6f635ab220a47a95f235239f2c44da3ae0266c29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->loadTemplate("BoAdminBundle:Default:head.html.twig", "common.html.twig", 3)->display($context);
        // line 4
        echo "    <body>
\t\t<div id=\"wrapper\">
\t\t\t<div class=\"container header\">
\t\t\t\t<div class=\"h-left\">
\t\t\t\t\t<div class=\"logo\"></div>
\t\t\t\t\t<p class=\"slogan\">
\t\t\t\t\t\tSLSMPRO
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"h-right\">
\t\t\t\t\t";
        // line 14
        $this->displayBlock('hright', $context, $blocks);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid menu\">
\t\t\t\t";
        // line 18
        $this->displayBlock('nemu', $context, $blocks);
        // line 20
        echo "\t\t\t</div>
\t\t\t<div id=\"line\"/>
\t\t\t<div class=\"container-fluid text-center\">    
\t\t\t\t<div class=\"row content\">
\t\t\t\t\t\t<div class=\"container sub-menu\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('smenu', $context, $blocks);
        echo "\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8 text-left\">
\t\t\t\t\t\t<div class=\"container-content\">
\t\t\t\t\t\t\t<div class=\"message-content\">
\t\t\t\t\t\t\t\t";
        // line 32
        $this->loadTemplate("BoAdminBundle:Default:message.html.twig", "common.html.twig", 32)->display($context);
        // line 33
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<legend>";
        // line 34
        $this->displayBlock('label', $context, $blocks);
        echo "</legend>
\t\t\t\t\t\t\t";
        // line 35
        $this->displayBlock('actions', $context, $blocks);
        // line 36
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2 sidenav\">
\t\t\t\t\t  <div class=\"well\">
\t\t\t\t\t\t\t";
        // line 41
        $this->displayBlock('nav', $context, $blocks);
        echo "\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t ";
        // line 43
        if (array_key_exists("dnb", $context)) {
            // line 44
            echo "\t\t\t\t\t  <div class=\"fine\">
\t\t\t\t\t\t\t<div>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "BoAdminBundle"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
            // line 46
            $this->displayBlock('navbis', $context, $blocks);
            echo "\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t ";
        }
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 52
        $this->loadTemplate("BoAdminBundle:Default:footer.html.twig", "common.html.twig", 52)->display($context);
        // line 53
        echo "\t\t</div>
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
        
        $__internal_65072f8eed89838049d173c6f635ab220a47a95f235239f2c44da3ae0266c29f->leave($__internal_65072f8eed89838049d173c6f635ab220a47a95f235239f2c44da3ae0266c29f_prof);

    }

    // line 14
    public function block_hright($context, array $blocks = array())
    {
        $__internal_5fdfdd71531a2862348b608fe9ba361c7c55990f1414bdbe7a0c66112ae2d8fd = $this->env->getExtension("native_profiler");
        $__internal_5fdfdd71531a2862348b608fe9ba361c7c55990f1414bdbe7a0c66112ae2d8fd->enter($__internal_5fdfdd71531a2862348b608fe9ba361c7c55990f1414bdbe7a0c66112ae2d8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        
        $__internal_5fdfdd71531a2862348b608fe9ba361c7c55990f1414bdbe7a0c66112ae2d8fd->leave($__internal_5fdfdd71531a2862348b608fe9ba361c7c55990f1414bdbe7a0c66112ae2d8fd_prof);

    }

    // line 18
    public function block_nemu($context, array $blocks = array())
    {
        $__internal_669e36743452ff45800378f2dca9702721e50f5bbef0d993c70317b41a533a48 = $this->env->getExtension("native_profiler");
        $__internal_669e36743452ff45800378f2dca9702721e50f5bbef0d993c70317b41a533a48->enter($__internal_669e36743452ff45800378f2dca9702721e50f5bbef0d993c70317b41a533a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nemu"));

        // line 19
        echo "\t\t\t\t";
        
        $__internal_669e36743452ff45800378f2dca9702721e50f5bbef0d993c70317b41a533a48->leave($__internal_669e36743452ff45800378f2dca9702721e50f5bbef0d993c70317b41a533a48_prof);

    }

    // line 26
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_cfd0bdb318173db784c46d388bb367549e6d83ac39129ca3e5a4ecb5b340eae1 = $this->env->getExtension("native_profiler");
        $__internal_cfd0bdb318173db784c46d388bb367549e6d83ac39129ca3e5a4ecb5b340eae1->enter($__internal_cfd0bdb318173db784c46d388bb367549e6d83ac39129ca3e5a4ecb5b340eae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_cfd0bdb318173db784c46d388bb367549e6d83ac39129ca3e5a4ecb5b340eae1->leave($__internal_cfd0bdb318173db784c46d388bb367549e6d83ac39129ca3e5a4ecb5b340eae1_prof);

    }

    // line 34
    public function block_label($context, array $blocks = array())
    {
        $__internal_650e5458dcb12335f8c5a6d2150d8e7ea34d3565049ae671274757ecbc7f037a = $this->env->getExtension("native_profiler");
        $__internal_650e5458dcb12335f8c5a6d2150d8e7ea34d3565049ae671274757ecbc7f037a->enter($__internal_650e5458dcb12335f8c5a6d2150d8e7ea34d3565049ae671274757ecbc7f037a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        
        $__internal_650e5458dcb12335f8c5a6d2150d8e7ea34d3565049ae671274757ecbc7f037a->leave($__internal_650e5458dcb12335f8c5a6d2150d8e7ea34d3565049ae671274757ecbc7f037a_prof);

    }

    // line 35
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ce41db2c0c0e59c5ba297d6f2485e8f14bc160c42a61d04636ce3e0211de9892 = $this->env->getExtension("native_profiler");
        $__internal_ce41db2c0c0e59c5ba297d6f2485e8f14bc160c42a61d04636ce3e0211de9892->enter($__internal_ce41db2c0c0e59c5ba297d6f2485e8f14bc160c42a61d04636ce3e0211de9892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_ce41db2c0c0e59c5ba297d6f2485e8f14bc160c42a61d04636ce3e0211de9892->leave($__internal_ce41db2c0c0e59c5ba297d6f2485e8f14bc160c42a61d04636ce3e0211de9892_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_62697ce3aa2fbbe43fd3092fb9d66eb01c841c9c05c3cebbf6a673d79c1d27a4 = $this->env->getExtension("native_profiler");
        $__internal_62697ce3aa2fbbe43fd3092fb9d66eb01c841c9c05c3cebbf6a673d79c1d27a4->enter($__internal_62697ce3aa2fbbe43fd3092fb9d66eb01c841c9c05c3cebbf6a673d79c1d27a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62697ce3aa2fbbe43fd3092fb9d66eb01c841c9c05c3cebbf6a673d79c1d27a4->leave($__internal_62697ce3aa2fbbe43fd3092fb9d66eb01c841c9c05c3cebbf6a673d79c1d27a4_prof);

    }

    // line 41
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5bf1f454b276d3b44fa91b1ec6413971c7f31c6f926408df848f31998ead7e13 = $this->env->getExtension("native_profiler");
        $__internal_5bf1f454b276d3b44fa91b1ec6413971c7f31c6f926408df848f31998ead7e13->enter($__internal_5bf1f454b276d3b44fa91b1ec6413971c7f31c6f926408df848f31998ead7e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_5bf1f454b276d3b44fa91b1ec6413971c7f31c6f926408df848f31998ead7e13->leave($__internal_5bf1f454b276d3b44fa91b1ec6413971c7f31c6f926408df848f31998ead7e13_prof);

    }

    // line 46
    public function block_navbis($context, array $blocks = array())
    {
        $__internal_6ab46f3d2d16c1207f50f4faf1d590fc36a9019fe9ca7dee04ebf7c08b7a820a = $this->env->getExtension("native_profiler");
        $__internal_6ab46f3d2d16c1207f50f4faf1d590fc36a9019fe9ca7dee04ebf7c08b7a820a->enter($__internal_6ab46f3d2d16c1207f50f4faf1d590fc36a9019fe9ca7dee04ebf7c08b7a820a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbis"));

        
        $__internal_6ab46f3d2d16c1207f50f4faf1d590fc36a9019fe9ca7dee04ebf7c08b7a820a->leave($__internal_6ab46f3d2d16c1207f50f4faf1d590fc36a9019fe9ca7dee04ebf7c08b7a820a_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73d883ccf1c466bc55f27d4537f6b2719112ffc09574d2386984d759f490abfb = $this->env->getExtension("native_profiler");
        $__internal_73d883ccf1c466bc55f27d4537f6b2719112ffc09574d2386984d759f490abfb->enter($__internal_73d883ccf1c466bc55f27d4537f6b2719112ffc09574d2386984d759f490abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t\t<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>\t\t\t
\t";
        
        $__internal_73d883ccf1c466bc55f27d4537f6b2719112ffc09574d2386984d759f490abfb->leave($__internal_73d883ccf1c466bc55f27d4537f6b2719112ffc09574d2386984d759f490abfb_prof);

    }

    public function getTemplateName()
    {
        return "common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 55,  226 => 54,  215 => 46,  204 => 41,  193 => 36,  182 => 35,  171 => 34,  160 => 26,  153 => 19,  147 => 18,  136 => 14,  127 => 58,  125 => 54,  122 => 53,  120 => 52,  115 => 49,  109 => 46,  105 => 45,  102 => 44,  100 => 43,  95 => 41,  89 => 37,  86 => 36,  84 => 35,  80 => 34,  77 => 33,  75 => 32,  66 => 26,  58 => 20,  56 => 18,  51 => 15,  49 => 14,  37 => 4,  35 => 3,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     {%include "BoAdminBundle:Default:head.html.twig"%}*/
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
/* 					{% block hright%}{% endblock %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container-fluid menu">*/
/* 				{% block nemu %}*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 			<div id="line"/>*/
/* 			<div class="container-fluid text-center">    */
/* 				<div class="row content">*/
/* 						<div class="container sub-menu">*/
/* 							<ul class="list-inline">*/
/* 								{% block smenu %}{% endblock %}			*/
/* 							</ul>*/
/* 						</div>*/
/* 					<div class="col-sm-8 text-left">*/
/* 						<div class="container-content">*/
/* 							<div class="message-content">*/
/* 								{%include "BoAdminBundle:Default:message.html.twig"%}*/
/* 							</div>*/
/* 							<legend>{% block label %}{% endblock %}</legend>*/
/* 							{% block actions %}{% endblock %}*/
/* 							{% block body %}{% endblock %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2 sidenav">*/
/* 					  <div class="well">*/
/* 							{% block nav %}{% endblock %}		*/
/* 					  </div>*/
/* 					 {%if dnb is defined%}*/
/* 					  <div class="fine">*/
/* 							<div>{{'label.actions'|trans([],'BoAdminBundle')}}</div>*/
/* 							{% block navbis %}{% endblock %}		*/
/* 					  </div>*/
/* 					 {%endif%}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{%include "BoAdminBundle:Default:footer.html.twig"%}*/
/* 		</div>*/
/*         {% block javascripts %}*/
/* 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>			*/
/* 	{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
