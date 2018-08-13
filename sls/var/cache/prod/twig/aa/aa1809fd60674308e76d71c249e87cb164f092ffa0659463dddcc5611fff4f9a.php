<?php

/* students/showabsence.html.twig */
class __TwigTemplate_9cf9ea082982e9edebd8de5316582b26a496f7f78e53f8b3074c440167c89c3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "students/showabsence.html.twig", 1);
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
        $__internal_c8799a4cf96b95fb0f591330cbb8c44e8d7a35415de71d92f51f408ab19e1ba8 = $this->env->getExtension("native_profiler");
        $__internal_c8799a4cf96b95fb0f591330cbb8c44e8d7a35415de71d92f51f408ab19e1ba8->enter($__internal_c8799a4cf96b95fb0f591330cbb8c44e8d7a35415de71d92f51f408ab19e1ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/showabsence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8799a4cf96b95fb0f591330cbb8c44e8d7a35415de71d92f51f408ab19e1ba8->leave($__internal_c8799a4cf96b95fb0f591330cbb8c44e8d7a35415de71d92f51f408ab19e1ba8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6ba2e834c4f8b31cb54cf1d6c61a64b85c787a2c5b627536f8c1a60ce82d1b7 = $this->env->getExtension("native_profiler");
        $__internal_b6ba2e834c4f8b31cb54cf1d6c61a64b85c787a2c5b627536f8c1a60ce82d1b7->enter($__internal_b6ba2e834c4f8b31cb54cf1d6c61a64b85c787a2c5b627536f8c1a60ce82d1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b6ba2e834c4f8b31cb54cf1d6c61a64b85c787a2c5b627536f8c1a60ce82d1b7->leave($__internal_b6ba2e834c4f8b31cb54cf1d6c61a64b85c787a2c5b627536f8c1a60ce82d1b7_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_bb61f10a3872be2c1407d60238e026a6eb62ebf24bc1e3e470248ccd9cbe24e8 = $this->env->getExtension("native_profiler");
        $__internal_bb61f10a3872be2c1407d60238e026a6eb62ebf24bc1e3e470248ccd9cbe24e8->enter($__internal_bb61f10a3872be2c1407d60238e026a6eb62ebf24bc1e3e470248ccd9cbe24e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/showabsence.html.twig", 3)->display($context);
        
        $__internal_bb61f10a3872be2c1407d60238e026a6eb62ebf24bc1e3e470248ccd9cbe24e8->leave($__internal_bb61f10a3872be2c1407d60238e026a6eb62ebf24bc1e3e470248ccd9cbe24e8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_94ea9497ce330c0d3c4dfc6d69bfebea53f2b60252feb90caf93aac0bbe5245d = $this->env->getExtension("native_profiler");
        $__internal_94ea9497ce330c0d3c4dfc6d69bfebea53f2b60252feb90caf93aac0bbe5245d->enter($__internal_94ea9497ce330c0d3c4dfc6d69bfebea53f2b60252feb90caf93aac0bbe5245d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:rightshow.html.twig", "students/showabsence.html.twig", 4)->display($context);
        
        $__internal_94ea9497ce330c0d3c4dfc6d69bfebea53f2b60252feb90caf93aac0bbe5245d->leave($__internal_94ea9497ce330c0d3c4dfc6d69bfebea53f2b60252feb90caf93aac0bbe5245d_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_1afe3bed5fdff75c612db4934f7c6ccb1bd1427f21e8d709ccf15173b0172611 = $this->env->getExtension("native_profiler");
        $__internal_1afe3bed5fdff75c612db4934f7c6ccb1bd1427f21e8d709ccf15173b0172611->enter($__internal_1afe3bed5fdff75c612db4934f7c6ccb1bd1427f21e8d709ccf15173b0172611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_1afe3bed5fdff75c612db4934f7c6ccb1bd1427f21e8d709ccf15173b0172611->leave($__internal_1afe3bed5fdff75c612db4934f7c6ccb1bd1427f21e8d709ccf15173b0172611_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fc05c11f736aac52fcd09d59d94602a3b89af0c85d2ff9fa3327f4a179ed2a3 = $this->env->getExtension("native_profiler");
        $__internal_0fc05c11f736aac52fcd09d59d94602a3b89af0c85d2ff9fa3327f4a179ed2a3->enter($__internal_0fc05c11f736aac52fcd09d59d94602a3b89af0c85d2ff9fa3327f4a179ed2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div id=\"body-content\">
\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Students:absenceshowactions.html.twig", "students/showabsence.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Students:showabsence.html.twig", "students/showabsence.html.twig", 11)->display($context);
        // line 12
        echo "\t\t</div>
\t\t";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))) > 0)) {
            echo "\t\t
\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 16
            $this->loadTemplate("BoAdminBundle:Absences:contract.html.twig", "students/showabsence.html.twig", 16)->display($context);
            // line 17
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 19
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) > 0)) {
            echo "\t\t
\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 22
            $this->loadTemplate("BoAdminBundle:Absences:group.html.twig", "students/showabsence.html.twig", 22)->display($context);
            // line 23
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 25
        echo "\t</div>
\t
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "\t
";
        
        $__internal_0fc05c11f736aac52fcd09d59d94602a3b89af0c85d2ff9fa3327f4a179ed2a3->leave($__internal_0fc05c11f736aac52fcd09d59d94602a3b89af0c85d2ff9fa3327f4a179ed2a3_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38e6747f5800e556350d51c7fa9fa1a13b5ef4636c86618b4c1a80f7044bef7d = $this->env->getExtension("native_profiler");
        $__internal_38e6747f5800e556350d51c7fa9fa1a13b5ef4636c86618b4c1a80f7044bef7d->enter($__internal_38e6747f5800e556350d51c7fa9fa1a13b5ef4636c86618b4c1a80f7044bef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_38e6747f5800e556350d51c7fa9fa1a13b5ef4636c86618b4c1a80f7044bef7d->leave($__internal_38e6747f5800e556350d51c7fa9fa1a13b5ef4636c86618b4c1a80f7044bef7d_prof);

    }

    public function getTemplateName()
    {
        return "students/showabsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 54,  211 => 53,  205 => 52,  197 => 56,  195 => 52,  184 => 44,  180 => 43,  176 => 42,  170 => 39,  164 => 36,  151 => 25,  147 => 23,  145 => 22,  141 => 21,  135 => 19,  131 => 17,  129 => 16,  125 => 15,  120 => 13,  117 => 12,  115 => 11,  112 => 10,  110 => 9,  106 => 7,  100 => 6,  82 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	{%include "BoAdminBundle:Students:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Students:absenceshowactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Students:showabsence.html.twig"%}*/
/* 		</div>*/
/* 		{%if contracts|length>0%}		*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.contracts'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Absences:contract.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 		{%if groups|length>0%}		*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Absences:group.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 	</div>*/
/* 	*/
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
/* 	*/
/* {% endblock %}*/
/* */
