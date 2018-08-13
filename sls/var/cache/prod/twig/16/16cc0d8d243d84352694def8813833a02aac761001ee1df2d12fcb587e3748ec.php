<?php

/* BoHomeBundle:Absences:show.html.twig */
class __TwigTemplate_a69f2131b382063c4c044238b1b3635d5d0e510c814017dbab96a66026310d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Absences:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7d8dbe614aa64aa40039968390f49bdfddcd43fbee63edb3c7dda17a6b21bc0 = $this->env->getExtension("native_profiler");
        $__internal_b7d8dbe614aa64aa40039968390f49bdfddcd43fbee63edb3c7dda17a6b21bc0->enter($__internal_b7d8dbe614aa64aa40039968390f49bdfddcd43fbee63edb3c7dda17a6b21bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d8dbe614aa64aa40039968390f49bdfddcd43fbee63edb3c7dda17a6b21bc0->leave($__internal_b7d8dbe614aa64aa40039968390f49bdfddcd43fbee63edb3c7dda17a6b21bc0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ca7a5b567b3fba4eac266a3f35cc28ab43257ae80eea9347fd89786b961e7a0 = $this->env->getExtension("native_profiler");
        $__internal_3ca7a5b567b3fba4eac266a3f35cc28ab43257ae80eea9347fd89786b961e7a0->enter($__internal_3ca7a5b567b3fba4eac266a3f35cc28ab43257ae80eea9347fd89786b961e7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.request", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3ca7a5b567b3fba4eac266a3f35cc28ab43257ae80eea9347fd89786b961e7a0->leave($__internal_3ca7a5b567b3fba4eac266a3f35cc28ab43257ae80eea9347fd89786b961e7a0_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_40a18fba481b7d324f1d511ad8f582b4347c957942afeca0aedecfe06f8a34c8 = $this->env->getExtension("native_profiler");
        $__internal_40a18fba481b7d324f1d511ad8f582b4347c957942afeca0aedecfe06f8a34c8->enter($__internal_40a18fba481b7d324f1d511ad8f582b4347c957942afeca0aedecfe06f8a34c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:request.html.twig", "BoHomeBundle:Absences:show.html.twig", 3)->display($context);
        
        $__internal_40a18fba481b7d324f1d511ad8f582b4347c957942afeca0aedecfe06f8a34c8->leave($__internal_40a18fba481b7d324f1d511ad8f582b4347c957942afeca0aedecfe06f8a34c8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bb4b30b15ac423549c4a87a9ed40f2ce4128f56a5011e36ca704f6bc36e16a83 = $this->env->getExtension("native_profiler");
        $__internal_bb4b30b15ac423549c4a87a9ed40f2ce4128f56a5011e36ca704f6bc36e16a83->enter($__internal_bb4b30b15ac423549c4a87a9ed40f2ce4128f56a5011e36ca704f6bc36e16a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Absences:show.html.twig", 4)->display($context);
        }
        
        $__internal_bb4b30b15ac423549c4a87a9ed40f2ce4128f56a5011e36ca704f6bc36e16a83->leave($__internal_bb4b30b15ac423549c4a87a9ed40f2ce4128f56a5011e36ca704f6bc36e16a83_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_12ccbd7c3d723856d044d0bd8b7500ea9ac4cfe53d7fa77cb362bfc25aa13222 = $this->env->getExtension("native_profiler");
        $__internal_12ccbd7c3d723856d044d0bd8b7500ea9ac4cfe53d7fa77cb362bfc25aa13222->enter($__internal_12ccbd7c3d723856d044d0bd8b7500ea9ac4cfe53d7fa77cb362bfc25aa13222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.request", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_12ccbd7c3d723856d044d0bd8b7500ea9ac4cfe53d7fa77cb362bfc25aa13222->leave($__internal_12ccbd7c3d723856d044d0bd8b7500ea9ac4cfe53d7fa77cb362bfc25aa13222_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_409e7c8923c6655541bca6f1a7b4546f1a6fb4b248da38cba21f772486b87ed5 = $this->env->getExtension("native_profiler");
        $__internal_409e7c8923c6655541bca6f1a7b4546f1a6fb4b248da38cba21f772486b87ed5->enter($__internal_409e7c8923c6655541bca6f1a7b4546f1a6fb4b248da38cba21f772486b87ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoHomeBundle:Absences:showactions.html.twig", "BoHomeBundle:Absences:show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoHomeBundle:Absences:tbshow.html.twig", "BoHomeBundle:Absences:show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>\t\t
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
\t\t\t  <h4 class=\"modal-title\">Alert Delete</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>Are you sure to delete this item ?</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"Confirm\">
\t\t\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_409e7c8923c6655541bca6f1a7b4546f1a6fb4b248da38cba21f772486b87ed5->leave($__internal_409e7c8923c6655541bca6f1a7b4546f1a6fb4b248da38cba21f772486b87ed5_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ceff46ce893da29ece8c97b86e3588a3fb10397fc32de5b06222718f33e44bc8 = $this->env->getExtension("native_profiler");
        $__internal_ceff46ce893da29ece8c97b86e3588a3fb10397fc32de5b06222718f33e44bc8->enter($__internal_ceff46ce893da29ece8c97b86e3588a3fb10397fc32de5b06222718f33e44bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_ceff46ce893da29ece8c97b86e3588a3fb10397fc32de5b06222718f33e44bc8->leave($__internal_ceff46ce893da29ece8c97b86e3588a3fb10397fc32de5b06222718f33e44bc8_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 40,  164 => 39,  152 => 38,  141 => 30,  136 => 28,  117 => 11,  115 => 10,  112 => 9,  110 => 8,  107 => 7,  101 => 6,  83 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}-  {{'layout.menu.request'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}}  >> {{'action.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1> {{'layout.menu.request'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}}  >> {{'action.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoHomeBundle:Absences:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoHomeBundle:Absences:tbshow.html.twig"%}*/
/* 		</div>		*/
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
/* 			  <h4 class="modal-title">Alert Delete</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>Are you sure to delete this item ?</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="Confirm">*/
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
