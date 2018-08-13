<?php

/* otherprices/index.html.twig */
class __TwigTemplate_21d5005e3230e19af0428817a06f1e088206a23fac4cd697fccbbc3980e17e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "otherprices/index.html.twig", 1);
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
        $__internal_b158939d3ab5a653dc2462a83c5be597b0ad9c72e05bc5fca2f4cbbf248b282f = $this->env->getExtension("native_profiler");
        $__internal_b158939d3ab5a653dc2462a83c5be597b0ad9c72e05bc5fca2f4cbbf248b282f->enter($__internal_b158939d3ab5a653dc2462a83c5be597b0ad9c72e05bc5fca2f4cbbf248b282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "otherprices/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b158939d3ab5a653dc2462a83c5be597b0ad9c72e05bc5fca2f4cbbf248b282f->leave($__internal_b158939d3ab5a653dc2462a83c5be597b0ad9c72e05bc5fca2f4cbbf248b282f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b68eec497ff15d46ff2ac67386bae21378413dcab12950fee9e95c34d1147f3 = $this->env->getExtension("native_profiler");
        $__internal_8b68eec497ff15d46ff2ac67386bae21378413dcab12950fee9e95c34d1147f3->enter($__internal_8b68eec497ff15d46ff2ac67386bae21378413dcab12950fee9e95c34d1147f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.otherprices", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8b68eec497ff15d46ff2ac67386bae21378413dcab12950fee9e95c34d1147f3->leave($__internal_8b68eec497ff15d46ff2ac67386bae21378413dcab12950fee9e95c34d1147f3_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9f16959d2fc096c543bd027613f2fb7798254174e27347e652efa2139751e306 = $this->env->getExtension("native_profiler");
        $__internal_9f16959d2fc096c543bd027613f2fb7798254174e27347e652efa2139751e306->enter($__internal_9f16959d2fc096c543bd027613f2fb7798254174e27347e652efa2139751e306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "otherprices/index.html.twig", 3)->display($context);
        
        $__internal_9f16959d2fc096c543bd027613f2fb7798254174e27347e652efa2139751e306->leave($__internal_9f16959d2fc096c543bd027613f2fb7798254174e27347e652efa2139751e306_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_73682746ff5eca3c2d0c3f13b7c7d1ee676096ff22ce8e9755be9fab545f7f26 = $this->env->getExtension("native_profiler");
        $__internal_73682746ff5eca3c2d0c3f13b7c7d1ee676096ff22ce8e9755be9fab545f7f26->enter($__internal_73682746ff5eca3c2d0c3f13b7c7d1ee676096ff22ce8e9755be9fab545f7f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_73682746ff5eca3c2d0c3f13b7c7d1ee676096ff22ce8e9755be9fab545f7f26->leave($__internal_73682746ff5eca3c2d0c3f13b7c7d1ee676096ff22ce8e9755be9fab545f7f26_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_50160e22f2250f7d395c3b8ce733d9dea3d6332cc7c1f406322db721b242c394 = $this->env->getExtension("native_profiler");
        $__internal_50160e22f2250f7d395c3b8ce733d9dea3d6332cc7c1f406322db721b242c394->enter($__internal_50160e22f2250f7d395c3b8ce733d9dea3d6332cc7c1f406322db721b242c394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.otherprices", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_50160e22f2250f7d395c3b8ce733d9dea3d6332cc7c1f406322db721b242c394->leave($__internal_50160e22f2250f7d395c3b8ce733d9dea3d6332cc7c1f406322db721b242c394_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f30683da9765f04c3da767572590b515c06c67c9f29b37fa40be74c9f8e58841 = $this->env->getExtension("native_profiler");
        $__internal_f30683da9765f04c3da767572590b515c06c67c9f29b37fa40be74c9f8e58841->enter($__internal_f30683da9765f04c3da767572590b515c06c67c9f29b37fa40be74c9f8e58841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Otherprices:actions.html.twig", "otherprices/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_f30683da9765f04c3da767572590b515c06c67c9f29b37fa40be74c9f8e58841->leave($__internal_f30683da9765f04c3da767572590b515c06c67c9f29b37fa40be74c9f8e58841_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc8c557c3c97433c6e3a10de27ae54b0e2196288ec0a9565d329496eab611084 = $this->env->getExtension("native_profiler");
        $__internal_dc8c557c3c97433c6e3a10de27ae54b0e2196288ec0a9565d329496eab611084->enter($__internal_dc8c557c3c97433c6e3a10de27ae54b0e2196288ec0a9565d329496eab611084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t\t<div class=\"pagination_content\">
\t\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Otherprices:pagination.html.twig", "otherprices/index.html.twig", 13)->display($context);
            // line 14
            echo "\t\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Otherprices:tbliste.html.twig", "otherprices/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t
\t<!-- begin add Price guide creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_price\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.price", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("otherprices_new");
        echo "\" method=\"post\" class=\"style\" class=\"form_submitt\">
\t\t\t\t<div class=\"modal-message\"></div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdminBundle:Otherprices:newform.html.twig", "otherprices/index.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input id=\"btn-create\" type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end price guide creation form by modal dialog-->\t
\t
\t";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_dc8c557c3c97433c6e3a10de27ae54b0e2196288ec0a9565d329496eab611084->leave($__internal_dc8c557c3c97433c6e3a10de27ae54b0e2196288ec0a9565d329496eab611084_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63f96eabbf08162681ce49ae15f0e118140a8d781d8e054b458f7ecdea5b5a02 = $this->env->getExtension("native_profiler");
        $__internal_63f96eabbf08162681ce49ae15f0e118140a8d781d8e054b458f7ecdea5b5a02->enter($__internal_63f96eabbf08162681ce49ae15f0e118140a8d781d8e054b458f7ecdea5b5a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_63f96eabbf08162681ce49ae15f0e118140a8d781d8e054b458f7ecdea5b5a02->leave($__internal_63f96eabbf08162681ce49ae15f0e118140a8d781d8e054b458f7ecdea5b5a02_prof);

    }

    public function getTemplateName()
    {
        return "otherprices/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 54,  210 => 53,  205 => 52,  193 => 51,  180 => 41,  176 => 40,  169 => 37,  167 => 36,  163 => 35,  157 => 32,  150 => 30,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.otherprices'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.otherprices'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Otherprices:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 		<div class="pagination_content">*/
/* 			{% include 'BoAdminBundle:Otherprices:pagination.html.twig' %}*/
/* 		</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Otherprices:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add Price guide creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_price" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.price'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('otherprices_new')}}" method="post" class="style" class="form_submitt">*/
/* 				<div class="modal-message"></div>*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Otherprices:newform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input id="btn-create" type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end price guide creation form by modal dialog-->	*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
