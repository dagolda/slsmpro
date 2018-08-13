<?php

/* substitution/show.html.twig */
class __TwigTemplate_e5c1eb663c4718a6bf09b15fdda89ac9d39e9a3f9ae8ac468c0248320c50a9b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "substitution/show.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cd1c5e37f8901fd316f9eda3564e46def718dab3eb3e7eac3f5c3bd68fbb418 = $this->env->getExtension("native_profiler");
        $__internal_8cd1c5e37f8901fd316f9eda3564e46def718dab3eb3e7eac3f5c3bd68fbb418->enter($__internal_8cd1c5e37f8901fd316f9eda3564e46def718dab3eb3e7eac3f5c3bd68fbb418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "substitution/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd1c5e37f8901fd316f9eda3564e46def718dab3eb3e7eac3f5c3bd68fbb418->leave($__internal_8cd1c5e37f8901fd316f9eda3564e46def718dab3eb3e7eac3f5c3bd68fbb418_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4086d9282d8d6bc62c0f7fa8f9ee37a5a0218043c53a90d6efe26e7b42ca3787 = $this->env->getExtension("native_profiler");
        $__internal_4086d9282d8d6bc62c0f7fa8f9ee37a5a0218043c53a90d6efe26e7b42ca3787->enter($__internal_4086d9282d8d6bc62c0f7fa8f9ee37a5a0218043c53a90d6efe26e7b42ca3787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_4086d9282d8d6bc62c0f7fa8f9ee37a5a0218043c53a90d6efe26e7b42ca3787->leave($__internal_4086d9282d8d6bc62c0f7fa8f9ee37a5a0218043c53a90d6efe26e7b42ca3787_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c2bfaa3b523e9cc90ff878c7c3acb63e709e8b1d701e9ce58fe0ab8b6a6f20cf = $this->env->getExtension("native_profiler");
        $__internal_c2bfaa3b523e9cc90ff878c7c3acb63e709e8b1d701e9ce58fe0ab8b6a6f20cf->enter($__internal_c2bfaa3b523e9cc90ff878c7c3acb63e709e8b1d701e9ce58fe0ab8b6a6f20cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "substitution/show.html.twig", 3)->display($context);
        
        $__internal_c2bfaa3b523e9cc90ff878c7c3acb63e709e8b1d701e9ce58fe0ab8b6a6f20cf->leave($__internal_c2bfaa3b523e9cc90ff878c7c3acb63e709e8b1d701e9ce58fe0ab8b6a6f20cf_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a7df124e2439953fe9ed93c61def0826fa278cc0887cb50b12461ff105d842c9 = $this->env->getExtension("native_profiler");
        $__internal_a7df124e2439953fe9ed93c61def0826fa278cc0887cb50b12461ff105d842c9->enter($__internal_a7df124e2439953fe9ed93c61def0826fa278cc0887cb50b12461ff105d842c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_a7df124e2439953fe9ed93c61def0826fa278cc0887cb50b12461ff105d842c9->leave($__internal_a7df124e2439953fe9ed93c61def0826fa278cc0887cb50b12461ff105d842c9_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_ffaf679fe78c0a954800f0c262a6514e9e9cb11e6025eb2ec5aa114464e25779 = $this->env->getExtension("native_profiler");
        $__internal_ffaf679fe78c0a954800f0c262a6514e9e9cb11e6025eb2ec5aa114464e25779->enter($__internal_ffaf679fe78c0a954800f0c262a6514e9e9cb11e6025eb2ec5aa114464e25779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ffaf679fe78c0a954800f0c262a6514e9e9cb11e6025eb2ec5aa114464e25779->leave($__internal_ffaf679fe78c0a954800f0c262a6514e9e9cb11e6025eb2ec5aa114464e25779_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c885f38773ce9b5d52ec5df2601a97f7b13e8098a4f0f2c7eae2b3dc4d8676ea = $this->env->getExtension("native_profiler");
        $__internal_c885f38773ce9b5d52ec5df2601a97f7b13e8098a4f0f2c7eae2b3dc4d8676ea->enter($__internal_c885f38773ce9b5d52ec5df2601a97f7b13e8098a4f0f2c7eae2b3dc4d8676ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Substitution:showactions.html.twig", "substitution/show.html.twig", 9)->display($context);
        // line 10
        echo "\t\t";
        if (((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) != null)) {
            // line 11
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Substitution:contract.html.twig", "substitution/show.html.twig", 13)->display($context);
            // line 14
            echo "\t\t\t</div>
\t\t";
        }
        // line 16
        echo "\t\t";
        if (((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")) != null)) {
            // line 17
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 19
            $this->loadTemplate("BoAdminBundle:Substitution:group.html.twig", "substitution/show.html.twig", 19)->display($context);
            // line 20
            echo "\t\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 23
        $this->loadTemplate("BoAdminBundle:Substitution:tbshow.html.twig", "substitution/show.html.twig", 23)->display($context);
        // line 24
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
\t\t\t  <h4 class=\"modal-title\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_c885f38773ce9b5d52ec5df2601a97f7b13e8098a4f0f2c7eae2b3dc4d8676ea->leave($__internal_c885f38773ce9b5d52ec5df2601a97f7b13e8098a4f0f2c7eae2b3dc4d8676ea_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e226834085d84aa11d8d9de7823396f81737cb277cb3870b40b52d1631b132f9 = $this->env->getExtension("native_profiler");
        $__internal_e226834085d84aa11d8d9de7823396f81737cb277cb3870b40b52d1631b132f9->enter($__internal_e226834085d84aa11d8d9de7823396f81737cb277cb3870b40b52d1631b132f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_e226834085d84aa11d8d9de7823396f81737cb277cb3870b40b52d1631b132f9->leave($__internal_e226834085d84aa11d8d9de7823396f81737cb277cb3870b40b52d1631b132f9_prof);

    }

    public function getTemplateName()
    {
        return "substitution/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 52,  197 => 51,  185 => 50,  175 => 43,  171 => 42,  167 => 41,  161 => 38,  155 => 35,  142 => 24,  140 => 23,  137 => 22,  133 => 20,  131 => 19,  127 => 18,  124 => 17,  121 => 16,  117 => 14,  115 => 13,  111 => 12,  108 => 11,  105 => 10,  103 => 9,  100 => 8,  94 => 7,  78 => 6,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Substitution:showactions.html.twig"%}*/
/* 		{%if contract!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'entity.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Substitution:contract.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if group!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'entity.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Substitution:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Substitution:tbshow.html.twig"%}*/
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
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
