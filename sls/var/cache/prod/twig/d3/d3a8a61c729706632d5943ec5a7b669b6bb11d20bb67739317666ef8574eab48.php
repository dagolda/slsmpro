<?php

/* training/edit.html.twig */
class __TwigTemplate_f2afa501602acdbef9bf1ac04ea90ca2594e42d506ac89db6c35a5b78b879299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "training/edit.html.twig", 1);
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
        $__internal_f9561db529d38b25d9e976706a7ce6e49b83fc4554faad78d463545551a64624 = $this->env->getExtension("native_profiler");
        $__internal_f9561db529d38b25d9e976706a7ce6e49b83fc4554faad78d463545551a64624->enter($__internal_f9561db529d38b25d9e976706a7ce6e49b83fc4554faad78d463545551a64624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "training/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9561db529d38b25d9e976706a7ce6e49b83fc4554faad78d463545551a64624->leave($__internal_f9561db529d38b25d9e976706a7ce6e49b83fc4554faad78d463545551a64624_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_31cae279e60b9a02cc012e9229644752463c456f7940a2e0d1a93f6b3df87865 = $this->env->getExtension("native_profiler");
        $__internal_31cae279e60b9a02cc012e9229644752463c456f7940a2e0d1a93f6b3df87865->enter($__internal_31cae279e60b9a02cc012e9229644752463c456f7940a2e0d1a93f6b3df87865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.training", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_31cae279e60b9a02cc012e9229644752463c456f7940a2e0d1a93f6b3df87865->leave($__internal_31cae279e60b9a02cc012e9229644752463c456f7940a2e0d1a93f6b3df87865_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_525fc7f2a77b1c29e91b8137884bc6260b10bf797280753c66626d402128918e = $this->env->getExtension("native_profiler");
        $__internal_525fc7f2a77b1c29e91b8137884bc6260b10bf797280753c66626d402128918e->enter($__internal_525fc7f2a77b1c29e91b8137884bc6260b10bf797280753c66626d402128918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "training/edit.html.twig", 3)->display($context);
        
        $__internal_525fc7f2a77b1c29e91b8137884bc6260b10bf797280753c66626d402128918e->leave($__internal_525fc7f2a77b1c29e91b8137884bc6260b10bf797280753c66626d402128918e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9950644a91139ff20cfb0a2f55ec773fc9ce7f1f5b668fe21f075a91f400afcc = $this->env->getExtension("native_profiler");
        $__internal_9950644a91139ff20cfb0a2f55ec773fc9ce7f1f5b668fe21f075a91f400afcc->enter($__internal_9950644a91139ff20cfb0a2f55ec773fc9ce7f1f5b668fe21f075a91f400afcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_9950644a91139ff20cfb0a2f55ec773fc9ce7f1f5b668fe21f075a91f400afcc->leave($__internal_9950644a91139ff20cfb0a2f55ec773fc9ce7f1f5b668fe21f075a91f400afcc_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_a048d8b4c1766ad18567d4f3c0a2340f10f137756a2b33e5ff66d670d36b3bc8 = $this->env->getExtension("native_profiler");
        $__internal_a048d8b4c1766ad18567d4f3c0a2340f10f137756a2b33e5ff66d670d36b3bc8->enter($__internal_a048d8b4c1766ad18567d4f3c0a2340f10f137756a2b33e5ff66d670d36b3bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.training", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a048d8b4c1766ad18567d4f3c0a2340f10f137756a2b33e5ff66d670d36b3bc8->leave($__internal_a048d8b4c1766ad18567d4f3c0a2340f10f137756a2b33e5ff66d670d36b3bc8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da010ec276a293dcb64803e9ed8620795a142f4c95ff41ffee92a936ea06f52 = $this->env->getExtension("native_profiler");
        $__internal_3da010ec276a293dcb64803e9ed8620795a142f4c95ff41ffee92a936ea06f52->enter($__internal_3da010ec276a293dcb64803e9ed8620795a142f4c95ff41ffee92a936ea06f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("training_edit", array("id" => $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Training:editactions.html.twig", "training/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Training:newform.html.twig", "training/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
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
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_3da010ec276a293dcb64803e9ed8620795a142f4c95ff41ffee92a936ea06f52->leave($__internal_3da010ec276a293dcb64803e9ed8620795a142f4c95ff41ffee92a936ea06f52_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ea45e7022f532852378b3fdfcb07a8d7b8d135230f4bae289d7d4ae39f07550 = $this->env->getExtension("native_profiler");
        $__internal_4ea45e7022f532852378b3fdfcb07a8d7b8d135230f4bae289d7d4ae39f07550->enter($__internal_4ea45e7022f532852378b3fdfcb07a8d7b8d135230f4bae289d7d4ae39f07550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_4ea45e7022f532852378b3fdfcb07a8d7b8d135230f4bae289d7d4ae39f07550->leave($__internal_4ea45e7022f532852378b3fdfcb07a8d7b8d135230f4bae289d7d4ae39f07550_prof);

    }

    public function getTemplateName()
    {
        return "training/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 44,  179 => 43,  167 => 42,  156 => 34,  152 => 33,  148 => 32,  142 => 29,  136 => 26,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.training'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.training'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('training_edit',{'id':training.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Training:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Training:newform.html.twig"%}*/
/* 			</div>*/
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
