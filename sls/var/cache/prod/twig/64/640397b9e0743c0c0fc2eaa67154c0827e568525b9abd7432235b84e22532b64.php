<?php

/* scoring/index.html.twig */
class __TwigTemplate_24ce648c148e6ceea8a5795df43dc63fb0b48b40bb619356f62d25e6074c63d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "scoring/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_103a6023b9b58679705f5e82cb90e4798be75c7089e5370d0d6083a0961782ff = $this->env->getExtension("native_profiler");
        $__internal_103a6023b9b58679705f5e82cb90e4798be75c7089e5370d0d6083a0961782ff->enter($__internal_103a6023b9b58679705f5e82cb90e4798be75c7089e5370d0d6083a0961782ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "scoring/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103a6023b9b58679705f5e82cb90e4798be75c7089e5370d0d6083a0961782ff->leave($__internal_103a6023b9b58679705f5e82cb90e4798be75c7089e5370d0d6083a0961782ff_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb287f27ce62892acfcb6d481ea43987ae5a193359b2a76adb5a149cca48e71d = $this->env->getExtension("native_profiler");
        $__internal_cb287f27ce62892acfcb6d481ea43987ae5a193359b2a76adb5a149cca48e71d->enter($__internal_cb287f27ce62892acfcb6d481ea43987ae5a193359b2a76adb5a149cca48e71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.quiz", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.scoring", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_cb287f27ce62892acfcb6d481ea43987ae5a193359b2a76adb5a149cca48e71d->leave($__internal_cb287f27ce62892acfcb6d481ea43987ae5a193359b2a76adb5a149cca48e71d_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_ab2c233b5a9e9a3dba6bb94f8e24ea3e15383ba7c7989f8d3f39c351230c93ac = $this->env->getExtension("native_profiler");
        $__internal_ab2c233b5a9e9a3dba6bb94f8e24ea3e15383ba7c7989f8d3f39c351230c93ac->enter($__internal_ab2c233b5a9e9a3dba6bb94f8e24ea3e15383ba7c7989f8d3f39c351230c93ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "scoring/index.html.twig", 3)->display($context);
        
        $__internal_ab2c233b5a9e9a3dba6bb94f8e24ea3e15383ba7c7989f8d3f39c351230c93ac->leave($__internal_ab2c233b5a9e9a3dba6bb94f8e24ea3e15383ba7c7989f8d3f39c351230c93ac_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2cf9ca2dcbae1b4ab2d6a0a15f6969283add2c6f34f744df11df40a8d67d8e8f = $this->env->getExtension("native_profiler");
        $__internal_2cf9ca2dcbae1b4ab2d6a0a15f6969283add2c6f34f744df11df40a8d67d8e8f->enter($__internal_2cf9ca2dcbae1b4ab2d6a0a15f6969283add2c6f34f744df11df40a8d67d8e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_2cf9ca2dcbae1b4ab2d6a0a15f6969283add2c6f34f744df11df40a8d67d8e8f->leave($__internal_2cf9ca2dcbae1b4ab2d6a0a15f6969283add2c6f34f744df11df40a8d67d8e8f_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_142d9d207622065b8d89eb3055eb246e44f4a22611f472f3bc1238c37f878a0f = $this->env->getExtension("native_profiler");
        $__internal_142d9d207622065b8d89eb3055eb246e44f4a22611f472f3bc1238c37f878a0f->enter($__internal_142d9d207622065b8d89eb3055eb246e44f4a22611f472f3bc1238c37f878a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.quiz", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.scoring", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_142d9d207622065b8d89eb3055eb246e44f4a22611f472f3bc1238c37f878a0f->leave($__internal_142d9d207622065b8d89eb3055eb246e44f4a22611f472f3bc1238c37f878a0f_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_766c7bb2bc29dcde168f8bc7ddfe8983350c45809d1aff1cd208a500814817c9 = $this->env->getExtension("native_profiler");
        $__internal_766c7bb2bc29dcde168f8bc7ddfe8983350c45809d1aff1cd208a500814817c9->enter($__internal_766c7bb2bc29dcde168f8bc7ddfe8983350c45809d1aff1cd208a500814817c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoQuizBundle:Scoring:actions.html.twig", "scoring/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_766c7bb2bc29dcde168f8bc7ddfe8983350c45809d1aff1cd208a500814817c9->leave($__internal_766c7bb2bc29dcde168f8bc7ddfe8983350c45809d1aff1cd208a500814817c9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_448c39d42c6225670fcdd1cc0a7004b6f80abf51b8d92f8b1947a60bddb52466 = $this->env->getExtension("native_profiler");
        $__internal_448c39d42c6225670fcdd1cc0a7004b6f80abf51b8d92f8b1947a60bddb52466->enter($__internal_448c39d42c6225670fcdd1cc0a7004b6f80abf51b8d92f8b1947a60bddb52466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoQuizBundle:Scoring:tbliste.html.twig", "scoring/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t
\t<!-- begin add quiz creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_score\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.scoring", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("scoring_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("BoQuizBundle:Scoring:newform.html.twig", "scoring/index.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end quiz creation form by modal dialog-->

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "\t
";
        
        $__internal_448c39d42c6225670fcdd1cc0a7004b6f80abf51b8d92f8b1947a60bddb52466->leave($__internal_448c39d42c6225670fcdd1cc0a7004b6f80abf51b8d92f8b1947a60bddb52466_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bed257d82242e38b3f85e26b914a62216cdba5080fa7be26a4e469f83b3a130 = $this->env->getExtension("native_profiler");
        $__internal_3bed257d82242e38b3f85e26b914a62216cdba5080fa7be26a4e469f83b3a130->enter($__internal_3bed257d82242e38b3f85e26b914a62216cdba5080fa7be26a4e469f83b3a130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_3bed257d82242e38b3f85e26b914a62216cdba5080fa7be26a4e469f83b3a130->leave($__internal_3bed257d82242e38b3f85e26b914a62216cdba5080fa7be26a4e469f83b3a130_prof);

    }

    public function getTemplateName()
    {
        return "scoring/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 47,  200 => 46,  194 => 45,  186 => 48,  184 => 45,  171 => 35,  167 => 34,  160 => 31,  158 => 30,  154 => 29,  149 => 27,  142 => 25,  128 => 13,  126 => 12,  123 => 11,  117 => 10,  107 => 8,  101 => 7,  83 => 6,  70 => 4,  58 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.quiz'|trans([],'BoAdminBundle')}} >> {{'label.scoring'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.quiz'|trans([],'BoAdminBundle')}} >> {{'label.scoring'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoQuizBundle:Scoring:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoQuizBundle:Scoring:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add quiz creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_score" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.scoring'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('scoring_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoQuizBundle:Scoring:newform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end quiz creation form by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}	*/
/* {% endblock %}*/
/* */
