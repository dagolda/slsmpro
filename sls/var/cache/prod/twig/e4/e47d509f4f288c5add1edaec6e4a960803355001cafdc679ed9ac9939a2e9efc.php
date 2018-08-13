<?php

/* BoAdvisorsBundle:Help:show.html.twig */
class __TwigTemplate_dba6d61fadbc7fe0c95b713f1daf6208e8425360ddbfc9b0776311f41b2bd72a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Help:show.html.twig", 1);
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
        $__internal_338b1dd5d3575b1042dab90b376ff2c89c6b50c5db669378cfc5817822ec23c0 = $this->env->getExtension("native_profiler");
        $__internal_338b1dd5d3575b1042dab90b376ff2c89c6b50c5db669378cfc5817822ec23c0->enter($__internal_338b1dd5d3575b1042dab90b376ff2c89c6b50c5db669378cfc5817822ec23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Help:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_338b1dd5d3575b1042dab90b376ff2c89c6b50c5db669378cfc5817822ec23c0->leave($__internal_338b1dd5d3575b1042dab90b376ff2c89c6b50c5db669378cfc5817822ec23c0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6920b6d6ecb31808c9fe1abcee94e74807cb551b4b0c05293347f0a66f4e0d1 = $this->env->getExtension("native_profiler");
        $__internal_a6920b6d6ecb31808c9fe1abcee94e74807cb551b4b0c05293347f0a66f4e0d1->enter($__internal_a6920b6d6ecb31808c9fe1abcee94e74807cb551b4b0c05293347f0a66f4e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.help", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_a6920b6d6ecb31808c9fe1abcee94e74807cb551b4b0c05293347f0a66f4e0d1->leave($__internal_a6920b6d6ecb31808c9fe1abcee94e74807cb551b4b0c05293347f0a66f4e0d1_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_576eac85b17c53b6b5561aedf8bd7622b7ee73be34d7b305de0cf2cf30394046 = $this->env->getExtension("native_profiler");
        $__internal_576eac85b17c53b6b5561aedf8bd7622b7ee73be34d7b305de0cf2cf30394046->enter($__internal_576eac85b17c53b6b5561aedf8bd7622b7ee73be34d7b305de0cf2cf30394046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Help:show.html.twig", 3)->display($context);
        
        $__internal_576eac85b17c53b6b5561aedf8bd7622b7ee73be34d7b305de0cf2cf30394046->leave($__internal_576eac85b17c53b6b5561aedf8bd7622b7ee73be34d7b305de0cf2cf30394046_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4a2ed989d572f36d105fe1c3bf6a108b236495c7bdb3179f7cd8a82887b708ab = $this->env->getExtension("native_profiler");
        $__internal_4a2ed989d572f36d105fe1c3bf6a108b236495c7bdb3179f7cd8a82887b708ab->enter($__internal_4a2ed989d572f36d105fe1c3bf6a108b236495c7bdb3179f7cd8a82887b708ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_4a2ed989d572f36d105fe1c3bf6a108b236495c7bdb3179f7cd8a82887b708ab->leave($__internal_4a2ed989d572f36d105fe1c3bf6a108b236495c7bdb3179f7cd8a82887b708ab_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_36b708b528114e72677bc1a4881332a6a481a4c60bc034f8876210a2ca3a6795 = $this->env->getExtension("native_profiler");
        $__internal_36b708b528114e72677bc1a4881332a6a481a4c60bc034f8876210a2ca3a6795->enter($__internal_36b708b528114e72677bc1a4881332a6a481a4c60bc034f8876210a2ca3a6795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.help", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_36b708b528114e72677bc1a4881332a6a481a4c60bc034f8876210a2ca3a6795->leave($__internal_36b708b528114e72677bc1a4881332a6a481a4c60bc034f8876210a2ca3a6795_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9def3d13eaab13c66ef141f9983d38b28ee5c31e5f3bbc2b5b13e8009ded2d00 = $this->env->getExtension("native_profiler");
        $__internal_9def3d13eaab13c66ef141f9983d38b28ee5c31e5f3bbc2b5b13e8009ded2d00->enter($__internal_9def3d13eaab13c66ef141f9983d38b28ee5c31e5f3bbc2b5b13e8009ded2d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdvisorsBundle:Help:showactions.html.twig", "BoAdvisorsBundle:Help:show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdvisorsBundle:Help:tbshow.html.twig", "BoAdvisorsBundle:Help:show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
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
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_9def3d13eaab13c66ef141f9983d38b28ee5c31e5f3bbc2b5b13e8009ded2d00->leave($__internal_9def3d13eaab13c66ef141f9983d38b28ee5c31e5f3bbc2b5b13e8009ded2d00_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b27665c692a0ba10957f14b2f2391e3749bed9173f7367bf417d2efb8119d40 = $this->env->getExtension("native_profiler");
        $__internal_7b27665c692a0ba10957f14b2f2391e3749bed9173f7367bf417d2efb8119d40->enter($__internal_7b27665c692a0ba10957f14b2f2391e3749bed9173f7367bf417d2efb8119d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_7b27665c692a0ba10957f14b2f2391e3749bed9173f7367bf417d2efb8119d40->leave($__internal_7b27665c692a0ba10957f14b2f2391e3749bed9173f7367bf417d2efb8119d40_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Help:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 39,  165 => 38,  153 => 37,  143 => 30,  139 => 29,  135 => 28,  129 => 25,  123 => 22,  110 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.help'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.help'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdvisorsBundle:Help:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdvisorsBundle:Help:tbshow.html.twig"%}*/
/* 		</div>*/
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
