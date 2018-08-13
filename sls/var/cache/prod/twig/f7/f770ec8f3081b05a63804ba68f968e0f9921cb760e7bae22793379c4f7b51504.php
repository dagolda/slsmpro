<?php

/* tickets/index.html.twig */
class __TwigTemplate_b22377dcea9e014357350956fd39a79fe1fa8106876e5aa3622e182080c88574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tickets/index.html.twig", 1);
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
        $__internal_929dca8aed830694fb7a2de2f04550475a79c2442659ad148003bd2d22008c5e = $this->env->getExtension("native_profiler");
        $__internal_929dca8aed830694fb7a2de2f04550475a79c2442659ad148003bd2d22008c5e->enter($__internal_929dca8aed830694fb7a2de2f04550475a79c2442659ad148003bd2d22008c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tickets/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929dca8aed830694fb7a2de2f04550475a79c2442659ad148003bd2d22008c5e->leave($__internal_929dca8aed830694fb7a2de2f04550475a79c2442659ad148003bd2d22008c5e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_173c8e6858ff1fb59fb03c234cae1f1bb0b617c5c6fc0fd35655d843ec5729e9 = $this->env->getExtension("native_profiler");
        $__internal_173c8e6858ff1fb59fb03c234cae1f1bb0b617c5c6fc0fd35655d843ec5729e9->enter($__internal_173c8e6858ff1fb59fb03c234cae1f1bb0b617c5c6fc0fd35655d843ec5729e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_173c8e6858ff1fb59fb03c234cae1f1bb0b617c5c6fc0fd35655d843ec5729e9->leave($__internal_173c8e6858ff1fb59fb03c234cae1f1bb0b617c5c6fc0fd35655d843ec5729e9_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_eac4cab1c59a44af0dd8600d690e6b21ebe494df5a7fb0693d2b6826f14cfd98 = $this->env->getExtension("native_profiler");
        $__internal_eac4cab1c59a44af0dd8600d690e6b21ebe494df5a7fb0693d2b6826f14cfd98->enter($__internal_eac4cab1c59a44af0dd8600d690e6b21ebe494df5a7fb0693d2b6826f14cfd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "tickets/index.html.twig", 3)->display($context);
        
        $__internal_eac4cab1c59a44af0dd8600d690e6b21ebe494df5a7fb0693d2b6826f14cfd98->leave($__internal_eac4cab1c59a44af0dd8600d690e6b21ebe494df5a7fb0693d2b6826f14cfd98_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fe17d88fe4a17f752bdbdd1f012bed6b06e70169056c7e83a11ae69b26cf5a38 = $this->env->getExtension("native_profiler");
        $__internal_fe17d88fe4a17f752bdbdd1f012bed6b06e70169056c7e83a11ae69b26cf5a38->enter($__internal_fe17d88fe4a17f752bdbdd1f012bed6b06e70169056c7e83a11ae69b26cf5a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_fe17d88fe4a17f752bdbdd1f012bed6b06e70169056c7e83a11ae69b26cf5a38->leave($__internal_fe17d88fe4a17f752bdbdd1f012bed6b06e70169056c7e83a11ae69b26cf5a38_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_2e7ac3ab936a70faed8491ceb635f50d4e3a54a8b275a26bd179472aa3d00e7b = $this->env->getExtension("native_profiler");
        $__internal_2e7ac3ab936a70faed8491ceb635f50d4e3a54a8b275a26bd179472aa3d00e7b->enter($__internal_2e7ac3ab936a70faed8491ceb635f50d4e3a54a8b275a26bd179472aa3d00e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_2e7ac3ab936a70faed8491ceb635f50d4e3a54a8b275a26bd179472aa3d00e7b->leave($__internal_2e7ac3ab936a70faed8491ceb635f50d4e3a54a8b275a26bd179472aa3d00e7b_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b57d2c97ff5ced8f339faaf6ae31476011b6ac70cf1d252976f875e8fb06fc90 = $this->env->getExtension("native_profiler");
        $__internal_b57d2c97ff5ced8f339faaf6ae31476011b6ac70cf1d252976f875e8fb06fc90->enter($__internal_b57d2c97ff5ced8f339faaf6ae31476011b6ac70cf1d252976f875e8fb06fc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Tickets:actions.html.twig", "tickets/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_b57d2c97ff5ced8f339faaf6ae31476011b6ac70cf1d252976f875e8fb06fc90->leave($__internal_b57d2c97ff5ced8f339faaf6ae31476011b6ac70cf1d252976f875e8fb06fc90_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb6c638b934f0a5dcfbbe63f03866ff10bff0678785a80f911184345f5824829 = $this->env->getExtension("native_profiler");
        $__internal_fb6c638b934f0a5dcfbbe63f03866ff10bff0678785a80f911184345f5824829->enter($__internal_fb6c638b934f0a5dcfbbe63f03866ff10bff0678785a80f911184345f5824829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Tickets:tbliste.html.twig", "tickets/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_ticket\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tickets_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Tickets:modalform.html.twig", "tickets/index.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" id=\"btn_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_fb6c638b934f0a5dcfbbe63f03866ff10bff0678785a80f911184345f5824829->leave($__internal_fb6c638b934f0a5dcfbbe63f03866ff10bff0678785a80f911184345f5824829_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56601e8175cfcdaaf4fbd09c1c90610f73956da96f666bb3b22421625cc4c4bc = $this->env->getExtension("native_profiler");
        $__internal_56601e8175cfcdaaf4fbd09c1c90610f73956da96f666bb3b22421625cc4c4bc->enter($__internal_56601e8175cfcdaaf4fbd09c1c90610f73956da96f666bb3b22421625cc4c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_56601e8175cfcdaaf4fbd09c1c90610f73956da96f666bb3b22421625cc4c4bc->leave($__internal_56601e8175cfcdaaf4fbd09c1c90610f73956da96f666bb3b22421625cc4c4bc_prof);

    }

    public function getTemplateName()
    {
        return "tickets/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 42,  184 => 41,  172 => 40,  161 => 32,  154 => 29,  152 => 28,  148 => 27,  143 => 25,  136 => 23,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Tickets:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Tickets:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_ticket" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.tickets'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('tickets_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Tickets:modalform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" id="btn_submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
