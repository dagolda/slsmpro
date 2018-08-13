<?php

/* param/show.html.twig */
class __TwigTemplate_2edd036c5d0a7bb31b3b94f55b8dcae671b2e8a1efd163a0f29ec880cb0d48bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "param/show.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cc695728671bc1886de870c49e4db0485394d1e71a2d8edc164703b8a25bee5 = $this->env->getExtension("native_profiler");
        $__internal_1cc695728671bc1886de870c49e4db0485394d1e71a2d8edc164703b8a25bee5->enter($__internal_1cc695728671bc1886de870c49e4db0485394d1e71a2d8edc164703b8a25bee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "param/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cc695728671bc1886de870c49e4db0485394d1e71a2d8edc164703b8a25bee5->leave($__internal_1cc695728671bc1886de870c49e4db0485394d1e71a2d8edc164703b8a25bee5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_91204b2a73bbd6847b02fa9851927fdf6a8f35ebc883d8eb58fb5363563d0a3d = $this->env->getExtension("native_profiler");
        $__internal_91204b2a73bbd6847b02fa9851927fdf6a8f35ebc883d8eb58fb5363563d0a3d->enter($__internal_91204b2a73bbd6847b02fa9851927fdf6a8f35ebc883d8eb58fb5363563d0a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_91204b2a73bbd6847b02fa9851927fdf6a8f35ebc883d8eb58fb5363563d0a3d->leave($__internal_91204b2a73bbd6847b02fa9851927fdf6a8f35ebc883d8eb58fb5363563d0a3d_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_5fe381d7fc83e89544aa705341df1ca99023092be2ccac5936d6d6a236435f9d = $this->env->getExtension("native_profiler");
        $__internal_5fe381d7fc83e89544aa705341df1ca99023092be2ccac5936d6d6a236435f9d->enter($__internal_5fe381d7fc83e89544aa705341df1ca99023092be2ccac5936d6d6a236435f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "param/show.html.twig", 3)->display($context);
        
        $__internal_5fe381d7fc83e89544aa705341df1ca99023092be2ccac5936d6d6a236435f9d->leave($__internal_5fe381d7fc83e89544aa705341df1ca99023092be2ccac5936d6d6a236435f9d_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_786ed522d4f1e652812f8b9e6ab7ff9c89928d2f3efb918f0570f1ad4990667b = $this->env->getExtension("native_profiler");
        $__internal_786ed522d4f1e652812f8b9e6ab7ff9c89928d2f3efb918f0570f1ad4990667b->enter($__internal_786ed522d4f1e652812f8b9e6ab7ff9c89928d2f3efb918f0570f1ad4990667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_786ed522d4f1e652812f8b9e6ab7ff9c89928d2f3efb918f0570f1ad4990667b->leave($__internal_786ed522d4f1e652812f8b9e6ab7ff9c89928d2f3efb918f0570f1ad4990667b_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_bb6dcad2a4efffdd2cd07bca6c6bfd3ef4aa5131187ccd0b07e55a8a32543e0e = $this->env->getExtension("native_profiler");
        $__internal_bb6dcad2a4efffdd2cd07bca6c6bfd3ef4aa5131187ccd0b07e55a8a32543e0e->enter($__internal_bb6dcad2a4efffdd2cd07bca6c6bfd3ef4aa5131187ccd0b07e55a8a32543e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_bb6dcad2a4efffdd2cd07bca6c6bfd3ef4aa5131187ccd0b07e55a8a32543e0e->leave($__internal_bb6dcad2a4efffdd2cd07bca6c6bfd3ef4aa5131187ccd0b07e55a8a32543e0e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_27539e211dcd84257bb02ba8eeeeaee75aebc902294e6fbb68030853d7e0074f = $this->env->getExtension("native_profiler");
        $__internal_27539e211dcd84257bb02ba8eeeeaee75aebc902294e6fbb68030853d7e0074f->enter($__internal_27539e211dcd84257bb02ba8eeeeaee75aebc902294e6fbb68030853d7e0074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Param:showactions.html.twig", "param/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Param:show.html.twig", "param/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>
\t<!--Begin duplicate modal form -->
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_param\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.duplicate", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("param_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Param:newform.html.twig", "param/show.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--End duplicate modal form -->

\t<!--Begin edit modal form -->\t
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"edit_param\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.setting", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("param_edit", array("id" => $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 58
        $this->loadTemplate("BoAdminBundle:Param:editform.html.twig", "param/show.html.twig", 58)->display($context);
        // line 59
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>\t
\t
\t
\t";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_27539e211dcd84257bb02ba8eeeeaee75aebc902294e6fbb68030853d7e0074f->leave($__internal_27539e211dcd84257bb02ba8eeeeaee75aebc902294e6fbb68030853d7e0074f_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b64caaf665c480347f341487ad7936a63bd30251d6d7975fe336497fa6369e28 = $this->env->getExtension("native_profiler");
        $__internal_b64caaf665c480347f341487ad7936a63bd30251d6d7975fe336497fa6369e28->enter($__internal_b64caaf665c480347f341487ad7936a63bd30251d6d7975fe336497fa6369e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_b64caaf665c480347f341487ad7936a63bd30251d6d7975fe336497fa6369e28->leave($__internal_b64caaf665c480347f341487ad7936a63bd30251d6d7975fe336497fa6369e28_prof);

    }

    public function getTemplateName()
    {
        return "param/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 75,  230 => 74,  218 => 73,  205 => 63,  201 => 62,  194 => 59,  192 => 58,  188 => 57,  183 => 55,  176 => 53,  153 => 33,  149 => 32,  142 => 29,  140 => 28,  136 => 27,  131 => 25,  124 => 23,  110 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.setting'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.setting'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Param:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Param:show.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--Begin duplicate modal form -->*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_param" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.duplicate'|trans([],'BoAdminBundle')}} {{'entity.setting'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('param_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Param:newform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--End duplicate modal form -->*/
/* */
/* 	<!--Begin edit modal form -->	*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="edit_param" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.edit'|trans([],'BoAdminBundle')}} {{'entity.setting'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('param_edit',{'id':param.id}) }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(edit_form) }}*/
/* 						{%include "BoAdminBundle:Param:editform.html.twig"%}*/
/* 						{{ form_rest(edit_form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 						<input type="submit" value="{{'action.edit'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>	*/
/* 	*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
