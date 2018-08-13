<?php

/* status/index.html.twig */
class __TwigTemplate_a95028dd5fcb7fbe95a0558bb185d6e523c82c440e3ca20e2b8dfc8b50f3843a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "status/index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98f2ad06d6d2005d0d3733fca803569ddcd64c037fd28185fa321de8ad011c38 = $this->env->getExtension("native_profiler");
        $__internal_98f2ad06d6d2005d0d3733fca803569ddcd64c037fd28185fa321de8ad011c38->enter($__internal_98f2ad06d6d2005d0d3733fca803569ddcd64c037fd28185fa321de8ad011c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "status/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98f2ad06d6d2005d0d3733fca803569ddcd64c037fd28185fa321de8ad011c38->leave($__internal_98f2ad06d6d2005d0d3733fca803569ddcd64c037fd28185fa321de8ad011c38_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_05e217b7ca5a6a26e375c647db885883a354d0b0d03730342f4a608d9b977738 = $this->env->getExtension("native_profiler");
        $__internal_05e217b7ca5a6a26e375c647db885883a354d0b0d03730342f4a608d9b977738->enter($__internal_05e217b7ca5a6a26e375c647db885883a354d0b0d03730342f4a608d9b977738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.status", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_05e217b7ca5a6a26e375c647db885883a354d0b0d03730342f4a608d9b977738->leave($__internal_05e217b7ca5a6a26e375c647db885883a354d0b0d03730342f4a608d9b977738_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a4cd193261587bb10efe8585627589d373d99b8eea32ed12bbdc34696286ceb6 = $this->env->getExtension("native_profiler");
        $__internal_a4cd193261587bb10efe8585627589d373d99b8eea32ed12bbdc34696286ceb6->enter($__internal_a4cd193261587bb10efe8585627589d373d99b8eea32ed12bbdc34696286ceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "status/index.html.twig", 3)->display($context);
        
        $__internal_a4cd193261587bb10efe8585627589d373d99b8eea32ed12bbdc34696286ceb6->leave($__internal_a4cd193261587bb10efe8585627589d373d99b8eea32ed12bbdc34696286ceb6_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_aec092e4a2d7f932530486df6dfd26e07a7f3c1780184cd1fd4e185ca4d39d7e = $this->env->getExtension("native_profiler");
        $__internal_aec092e4a2d7f932530486df6dfd26e07a7f3c1780184cd1fd4e185ca4d39d7e->enter($__internal_aec092e4a2d7f932530486df6dfd26e07a7f3c1780184cd1fd4e185ca4d39d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_aec092e4a2d7f932530486df6dfd26e07a7f3c1780184cd1fd4e185ca4d39d7e->leave($__internal_aec092e4a2d7f932530486df6dfd26e07a7f3c1780184cd1fd4e185ca4d39d7e_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_4b25205edc9ead7135f09f4996ac754583d0600ee9d8bbebde71c584d1be8820 = $this->env->getExtension("native_profiler");
        $__internal_4b25205edc9ead7135f09f4996ac754583d0600ee9d8bbebde71c584d1be8820->enter($__internal_4b25205edc9ead7135f09f4996ac754583d0600ee9d8bbebde71c584d1be8820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.status", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4b25205edc9ead7135f09f4996ac754583d0600ee9d8bbebde71c584d1be8820->leave($__internal_4b25205edc9ead7135f09f4996ac754583d0600ee9d8bbebde71c584d1be8820_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_18ced96a3301d2e6d3258b462a7f4d698cb2365283b9b336dea6dd585692389f = $this->env->getExtension("native_profiler");
        $__internal_18ced96a3301d2e6d3258b462a7f4d698cb2365283b9b336dea6dd585692389f->enter($__internal_18ced96a3301d2e6d3258b462a7f4d698cb2365283b9b336dea6dd585692389f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Status:actions.html.twig", "status/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_18ced96a3301d2e6d3258b462a7f4d698cb2365283b9b336dea6dd585692389f->leave($__internal_18ced96a3301d2e6d3258b462a7f4d698cb2365283b9b336dea6dd585692389f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d342dcc47b98a0663a6392c0364eec3b9a740992d41427a4d1fe4bbd6c368fe8 = $this->env->getExtension("native_profiler");
        $__internal_d342dcc47b98a0663a6392c0364eec3b9a740992d41427a4d1fe4bbd6c368fe8->enter($__internal_d342dcc47b98a0663a6392c0364eec3b9a740992d41427a4d1fe4bbd6c368fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Status:tbliste.html.twig", "status/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t
\t<!-- begin add status creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_status\" role=\"dialog\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("status_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("BoAdminBundle:Status:newform.html.twig", "status/index.html.twig", 30)->display($context);
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
\t<!-- end status creation form by modal dialog-->

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "\t
";
        
        $__internal_d342dcc47b98a0663a6392c0364eec3b9a740992d41427a4d1fe4bbd6c368fe8->leave($__internal_d342dcc47b98a0663a6392c0364eec3b9a740992d41427a4d1fe4bbd6c368fe8_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_170c2c09afafd734b6b6350d90e0121e6f3bd512e63858894e5bd6a254350b94 = $this->env->getExtension("native_profiler");
        $__internal_170c2c09afafd734b6b6350d90e0121e6f3bd512e63858894e5bd6a254350b94->enter($__internal_170c2c09afafd734b6b6350d90e0121e6f3bd512e63858894e5bd6a254350b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_170c2c09afafd734b6b6350d90e0121e6f3bd512e63858894e5bd6a254350b94->leave($__internal_170c2c09afafd734b6b6350d90e0121e6f3bd512e63858894e5bd6a254350b94_prof);

    }

    public function getTemplateName()
    {
        return "status/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 47,  196 => 46,  190 => 45,  182 => 48,  180 => 45,  167 => 35,  163 => 34,  156 => 31,  154 => 30,  150 => 29,  145 => 27,  138 => 25,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.status'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.status'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Status:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Status:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add status creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_status" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.status'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('status_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Status:newform.html.twig"%}*/
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
/* 	<!-- end status creation form by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}	*/
/* {% endblock %}*/
/* */
