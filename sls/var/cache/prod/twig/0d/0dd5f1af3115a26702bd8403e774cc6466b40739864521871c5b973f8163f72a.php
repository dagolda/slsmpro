<?php

/* diary/show.html.twig */
class __TwigTemplate_7360f9f280491dc8a788df3ca698c9ca6a8b85d1af3b4a07ce9876960684e1a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "diary/show.html.twig", 1);
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
        $__internal_5ece4db928c18a19de6ee625f8a94d8cbd654d319144e563e3ed5e810d6b29ab = $this->env->getExtension("native_profiler");
        $__internal_5ece4db928c18a19de6ee625f8a94d8cbd654d319144e563e3ed5e810d6b29ab->enter($__internal_5ece4db928c18a19de6ee625f8a94d8cbd654d319144e563e3ed5e810d6b29ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diary/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ece4db928c18a19de6ee625f8a94d8cbd654d319144e563e3ed5e810d6b29ab->leave($__internal_5ece4db928c18a19de6ee625f8a94d8cbd654d319144e563e3ed5e810d6b29ab_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3763976c43df6b37d1a5e3c56be01293dd5a6374e222f867ae4abe57666ff993 = $this->env->getExtension("native_profiler");
        $__internal_3763976c43df6b37d1a5e3c56be01293dd5a6374e222f867ae4abe57666ff993->enter($__internal_3763976c43df6b37d1a5e3c56be01293dd5a6374e222f867ae4abe57666ff993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.diary", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3763976c43df6b37d1a5e3c56be01293dd5a6374e222f867ae4abe57666ff993->leave($__internal_3763976c43df6b37d1a5e3c56be01293dd5a6374e222f867ae4abe57666ff993_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e038c7b2dc42951980c11722c16e61abbf8f1fab551c0ee68dae94783fe382bd = $this->env->getExtension("native_profiler");
        $__internal_e038c7b2dc42951980c11722c16e61abbf8f1fab551c0ee68dae94783fe382bd->enter($__internal_e038c7b2dc42951980c11722c16e61abbf8f1fab551c0ee68dae94783fe382bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "diary/show.html.twig", 3)->display($context);
        
        $__internal_e038c7b2dc42951980c11722c16e61abbf8f1fab551c0ee68dae94783fe382bd->leave($__internal_e038c7b2dc42951980c11722c16e61abbf8f1fab551c0ee68dae94783fe382bd_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6a5c1545b9725b8c4b5f721e49307926a02da858ae6e07da2a1bfb90b8dd5394 = $this->env->getExtension("native_profiler");
        $__internal_6a5c1545b9725b8c4b5f721e49307926a02da858ae6e07da2a1bfb90b8dd5394->enter($__internal_6a5c1545b9725b8c4b5f721e49307926a02da858ae6e07da2a1bfb90b8dd5394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_6a5c1545b9725b8c4b5f721e49307926a02da858ae6e07da2a1bfb90b8dd5394->leave($__internal_6a5c1545b9725b8c4b5f721e49307926a02da858ae6e07da2a1bfb90b8dd5394_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_30772257c2cf2adf77eb1fa5465381bb010b2e7ec7f86cbbedb82d27faf4895b = $this->env->getExtension("native_profiler");
        $__internal_30772257c2cf2adf77eb1fa5465381bb010b2e7ec7f86cbbedb82d27faf4895b->enter($__internal_30772257c2cf2adf77eb1fa5465381bb010b2e7ec7f86cbbedb82d27faf4895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.diary", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_30772257c2cf2adf77eb1fa5465381bb010b2e7ec7f86cbbedb82d27faf4895b->leave($__internal_30772257c2cf2adf77eb1fa5465381bb010b2e7ec7f86cbbedb82d27faf4895b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_75d98c4b8b7482fd36d0854e1b3b41186ec0306a659684f55decfb9e9763ab16 = $this->env->getExtension("native_profiler");
        $__internal_75d98c4b8b7482fd36d0854e1b3b41186ec0306a659684f55decfb9e9763ab16->enter($__internal_75d98c4b8b7482fd36d0854e1b3b41186ec0306a659684f55decfb9e9763ab16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Diary:showactions.html.twig", "diary/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Diary:show.html.twig", "diary/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>

\t<!--Begin edit modal form -->\t
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"edit_diary\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.diary", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diary_edit", array("id" => $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 29
        $this->loadTemplate("BoAdminBundle:Diary:modalform.html.twig", "diary/show.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>\t
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>\t
\t
\t";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_75d98c4b8b7482fd36d0854e1b3b41186ec0306a659684f55decfb9e9763ab16->leave($__internal_75d98c4b8b7482fd36d0854e1b3b41186ec0306a659684f55decfb9e9763ab16_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9ade4f7fe5ed2b6d145faee149cf1527ff497b8acd568b5067b34234e6ae27d = $this->env->getExtension("native_profiler");
        $__internal_b9ade4f7fe5ed2b6d145faee149cf1527ff497b8acd568b5067b34234e6ae27d->enter($__internal_b9ade4f7fe5ed2b6d145faee149cf1527ff497b8acd568b5067b34234e6ae27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_b9ade4f7fe5ed2b6d145faee149cf1527ff497b8acd568b5067b34234e6ae27d->leave($__internal_b9ade4f7fe5ed2b6d145faee149cf1527ff497b8acd568b5067b34234e6ae27d_prof);

    }

    public function getTemplateName()
    {
        return "diary/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 69,  217 => 68,  205 => 67,  194 => 59,  190 => 58,  186 => 57,  180 => 54,  174 => 51,  154 => 34,  150 => 33,  143 => 30,  141 => 29,  137 => 28,  132 => 26,  125 => 24,  110 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.diary'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.diary'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Diary:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Diary:show.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!--Begin edit modal form -->	*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="edit_diary" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.edit'|trans([],'BoAdminBundle')}} {{'entity.diary'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('diary_edit',{'id':diary.id}) }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Diary:modalform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
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
/* 	</div>	*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
