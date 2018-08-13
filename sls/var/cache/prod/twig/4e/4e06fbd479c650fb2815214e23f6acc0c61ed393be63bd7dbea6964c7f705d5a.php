<?php

/* securitycote/edit.html.twig */
class __TwigTemplate_b93f679b040422dfab09576c4846683ed6bb91f6298bf3b5982ba0017ac99e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "securitycote/edit.html.twig", 1);
        $this->blocks = array(
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
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
        $__internal_1818f64c9087dc3145f83990d39de536f2953695d406e60f8d40de610d3b3145 = $this->env->getExtension("native_profiler");
        $__internal_1818f64c9087dc3145f83990d39de536f2953695d406e60f8d40de610d3b3145->enter($__internal_1818f64c9087dc3145f83990d39de536f2953695d406e60f8d40de610d3b3145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "securitycote/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1818f64c9087dc3145f83990d39de536f2953695d406e60f8d40de610d3b3145->leave($__internal_1818f64c9087dc3145f83990d39de536f2953695d406e60f8d40de610d3b3145_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b02b8e09dc7e7694225298a8fe2437a0cff3d872c0aa630e01275222fbf95ffe = $this->env->getExtension("native_profiler");
        $__internal_b02b8e09dc7e7694225298a8fe2437a0cff3d872c0aa630e01275222fbf95ffe->enter($__internal_b02b8e09dc7e7694225298a8fe2437a0cff3d872c0aa630e01275222fbf95ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "securitycote/edit.html.twig", 2)->display($context);
        
        $__internal_b02b8e09dc7e7694225298a8fe2437a0cff3d872c0aa630e01275222fbf95ffe->leave($__internal_b02b8e09dc7e7694225298a8fe2437a0cff3d872c0aa630e01275222fbf95ffe_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3eb2dd5573f97a6a77b878cc4b46dd49bd60d5151e480fbd95503719b9e9a296 = $this->env->getExtension("native_profiler");
        $__internal_3eb2dd5573f97a6a77b878cc4b46dd49bd60d5151e480fbd95503719b9e9a296->enter($__internal_3eb2dd5573f97a6a77b878cc4b46dd49bd60d5151e480fbd95503719b9e9a296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_3eb2dd5573f97a6a77b878cc4b46dd49bd60d5151e480fbd95503719b9e9a296->leave($__internal_3eb2dd5573f97a6a77b878cc4b46dd49bd60d5151e480fbd95503719b9e9a296_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_77462024709cfea6b03e65660270d9d49be7154be0f14755297a257433bf5e86 = $this->env->getExtension("native_profiler");
        $__internal_77462024709cfea6b03e65660270d9d49be7154be0f14755297a257433bf5e86->enter($__internal_77462024709cfea6b03e65660270d9d49be7154be0f14755297a257433bf5e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.clearance", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_77462024709cfea6b03e65660270d9d49be7154be0f14755297a257433bf5e86->leave($__internal_77462024709cfea6b03e65660270d9d49be7154be0f14755297a257433bf5e86_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7282aa3481634d00c2f149dea55358bd002ad3c3bc9820f52128fef55fed0aaf = $this->env->getExtension("native_profiler");
        $__internal_7282aa3481634d00c2f149dea55358bd002ad3c3bc9820f52128fef55fed0aaf->enter($__internal_7282aa3481634d00c2f149dea55358bd002ad3c3bc9820f52128fef55fed0aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("securitycote_edit", array("id" => $this->getAttribute((isset($context["securityCote"]) ? $context["securityCote"] : $this->getContext($context, "securityCote")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Securitycote:editactions.html.twig", "securitycote/edit.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Securitycote:newform.html.twig", "securitycote/edit.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t</div>\t
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_7282aa3481634d00c2f149dea55358bd002ad3c3bc9820f52128fef55fed0aaf->leave($__internal_7282aa3481634d00c2f149dea55358bd002ad3c3bc9820f52128fef55fed0aaf_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_411c7018bb0f846b3e9d9f017b99fd4b8d9aa519a501d78adb09ac7bd43f3af1 = $this->env->getExtension("native_profiler");
        $__internal_411c7018bb0f846b3e9d9f017b99fd4b8d9aa519a501d78adb09ac7bd43f3af1->enter($__internal_411c7018bb0f846b3e9d9f017b99fd4b8d9aa519a501d78adb09ac7bd43f3af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_411c7018bb0f846b3e9d9f017b99fd4b8d9aa519a501d78adb09ac7bd43f3af1->leave($__internal_411c7018bb0f846b3e9d9f017b99fd4b8d9aa519a501d78adb09ac7bd43f3af1_prof);

    }

    public function getTemplateName()
    {
        return "securitycote/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  162 => 42,  150 => 41,  139 => 33,  135 => 32,  131 => 31,  125 => 28,  119 => 25,  104 => 13,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  90 => 8,  86 => 7,  83 => 6,  77 => 5,  61 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.clearance'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('securitycote_edit',{'id':securityCote.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Securitycote:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Securitycote:newform.html.twig"%}*/
/* 			</div>	*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
