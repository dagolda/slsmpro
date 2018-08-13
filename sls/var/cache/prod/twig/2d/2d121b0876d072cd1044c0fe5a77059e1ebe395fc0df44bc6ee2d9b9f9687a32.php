<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c418fafa3614a1ea6a9d58d5b0fd557e3d8e6d5d524661a88155a31adde6ffa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::user.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e378bf8fd69ba67c303016a671771ae965ebe7951e7a4e093bd073acd211da2c = $this->env->getExtension("native_profiler");
        $__internal_e378bf8fd69ba67c303016a671771ae965ebe7951e7a4e093bd073acd211da2c->enter($__internal_e378bf8fd69ba67c303016a671771ae965ebe7951e7a4e093bd073acd211da2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e378bf8fd69ba67c303016a671771ae965ebe7951e7a4e093bd073acd211da2c->leave($__internal_e378bf8fd69ba67c303016a671771ae965ebe7951e7a4e093bd073acd211da2c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbc80d5963c8944abd370a75c6dcc5a4eeb629a78788c2fe5274974f3b91bdfa = $this->env->getExtension("native_profiler");
        $__internal_cbc80d5963c8944abd370a75c6dcc5a4eeb629a78788c2fe5274974f3b91bdfa->enter($__internal_cbc80d5963c8944abd370a75c6dcc5a4eeb629a78788c2fe5274974f3b91bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
\t\t.row.content {
\t\t\tmin-height: 400px;
\t\t\toverflow: hidden;
\t\t\tmargin-top: 0;
\t\t}
\t\t\t
\t\t/* Set gray background color and 100% height */
\t\t.sidenav {
\t\t\tpadding-top: 15px;
\t\t\tpadding-bottom: 15px;
\t\t\tbackground-color: #f1f1f1;
\t\t\tmin-height: 422px;
\t\t\toverflow: hidden;
\t\t}       
\t\t/* On small sgreens, set height to 'auto' for sidenav and grid */
\t\t@media sgreen and (max-width: 767px) {
\t\t\t.sidenav {
\t\t\t\theight: auto;
\t\t\t\tpadding: 5px;
\t\t\t}
\t\t\t.row.content {height:auto;} 
\t\t}
\t\t.container-content{
\t\t\tpadding: 0 15px;\t
\t\t}
\t\t.footer{
\t\t\theight: 45px;
\t\t\tbackground-color: #222;
\t\t\tcolor: #fff;
\t\t\tpadding: 15px;
\t\t}
\t</style>
";
        
        $__internal_cbc80d5963c8944abd370a75c6dcc5a4eeb629a78788c2fe5274974f3b91bdfa->leave($__internal_cbc80d5963c8944abd370a75c6dcc5a4eeb629a78788c2fe5274974f3b91bdfa_prof);

    }

    // line 39
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0cf0c940ad3763870d4442b388c3db36e8133e8fd4f1d806414740f3fb405ed = $this->env->getExtension("native_profiler");
        $__internal_e0cf0c940ad3763870d4442b388c3db36e8133e8fd4f1d806414740f3fb405ed->enter($__internal_e0cf0c940ad3763870d4442b388c3db36e8133e8fd4f1d806414740f3fb405ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.login", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e0cf0c940ad3763870d4442b388c3db36e8133e8fd4f1d806414740f3fb405ed->leave($__internal_e0cf0c940ad3763870d4442b388c3db36e8133e8fd4f1d806414740f3fb405ed_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_560170e5305602457dea4c307f6cc2286cd3f40b27894bb44fe2de031a752784 = $this->env->getExtension("native_profiler");
        $__internal_560170e5305602457dea4c307f6cc2286cd3f40b27894bb44fe2de031a752784->enter($__internal_560170e5305602457dea4c307f6cc2286cd3f40b27894bb44fe2de031a752784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_560170e5305602457dea4c307f6cc2286cd3f40b27894bb44fe2de031a752784->leave($__internal_560170e5305602457dea4c307f6cc2286cd3f40b27894bb44fe2de031a752784_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da6148f95701d6229d1b1452a5fdfc38cb15398c2f485d1a59fd9c27354a9ccb = $this->env->getExtension("native_profiler");
        $__internal_da6148f95701d6229d1b1452a5fdfc38cb15398c2f485d1a59fd9c27354a9ccb->enter($__internal_da6148f95701d6229d1b1452a5fdfc38cb15398c2f485d1a59fd9c27354a9ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 42
        echo "\t\t
\t";
        
        $__internal_da6148f95701d6229d1b1452a5fdfc38cb15398c2f485d1a59fd9c27354a9ccb->leave($__internal_da6148f95701d6229d1b1452a5fdfc38cb15398c2f485d1a59fd9c27354a9ccb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  107 => 41,  101 => 40,  87 => 39,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::user.html.twig' %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<style>*/
/* 		/* Set height of the grid so .sidenav can be 100% (adjust as needed) *//* */
/* 		.row.content {*/
/* 			min-height: 400px;*/
/* 			overflow: hidden;*/
/* 			margin-top: 0;*/
/* 		}*/
/* 			*/
/* 		/* Set gray background color and 100% height *//* */
/* 		.sidenav {*/
/* 			padding-top: 15px;*/
/* 			padding-bottom: 15px;*/
/* 			background-color: #f1f1f1;*/
/* 			min-height: 422px;*/
/* 			overflow: hidden;*/
/* 		}       */
/* 		/* On small sgreens, set height to 'auto' for sidenav and grid *//* */
/* 		@media sgreen and (max-width: 767px) {*/
/* 			.sidenav {*/
/* 				height: auto;*/
/* 				padding: 5px;*/
/* 			}*/
/* 			.row.content {height:auto;} */
/* 		}*/
/* 		.container-content{*/
/* 			padding: 0 15px;	*/
/* 		}*/
/* 		.footer{*/
/* 			height: 45px;*/
/* 			background-color: #222;*/
/* 			color: #fff;*/
/* 			padding: 15px;*/
/* 		}*/
/* 	</style>*/
/* {% endblock %}*/
/* {% block title %}{{parent()}}- {{'user.login'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block body %}*/
/* 	{% block fos_user_content %}*/
/* 		*/
/* 	{% endblock %}*/
/* {% endblock %}	*/
