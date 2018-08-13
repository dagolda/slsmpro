<?php

/* mails/index.html.twig */
class __TwigTemplate_c1db41280d213cbe7244db9cfce2bbb5cac5654bd4adec19ba769457476084b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mails/index.html.twig", 1);
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
        $__internal_d307de5c336cb0f57641f8e517d3f5e3c2c9475e0a51b80623b84af840c2ef08 = $this->env->getExtension("native_profiler");
        $__internal_d307de5c336cb0f57641f8e517d3f5e3c2c9475e0a51b80623b84af840c2ef08->enter($__internal_d307de5c336cb0f57641f8e517d3f5e3c2c9475e0a51b80623b84af840c2ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mails/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d307de5c336cb0f57641f8e517d3f5e3c2c9475e0a51b80623b84af840c2ef08->leave($__internal_d307de5c336cb0f57641f8e517d3f5e3c2c9475e0a51b80623b84af840c2ef08_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9afdbafc0e268a622b80a0dbaf663913085d9b7b7606ad2582c48f1ff442f9a6 = $this->env->getExtension("native_profiler");
        $__internal_9afdbafc0e268a622b80a0dbaf663913085d9b7b7606ad2582c48f1ff442f9a6->enter($__internal_9afdbafc0e268a622b80a0dbaf663913085d9b7b7606ad2582c48f1ff442f9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.mail", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9afdbafc0e268a622b80a0dbaf663913085d9b7b7606ad2582c48f1ff442f9a6->leave($__internal_9afdbafc0e268a622b80a0dbaf663913085d9b7b7606ad2582c48f1ff442f9a6_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7812ac0165384af25fb29962a4bf797695e28a075659e5b08bf57a36a29d8421 = $this->env->getExtension("native_profiler");
        $__internal_7812ac0165384af25fb29962a4bf797695e28a075659e5b08bf57a36a29d8421->enter($__internal_7812ac0165384af25fb29962a4bf797695e28a075659e5b08bf57a36a29d8421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "mails/index.html.twig", 3)->display($context);
        
        $__internal_7812ac0165384af25fb29962a4bf797695e28a075659e5b08bf57a36a29d8421->leave($__internal_7812ac0165384af25fb29962a4bf797695e28a075659e5b08bf57a36a29d8421_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1907ea0eae9dc0172a108145969ac2311990753d8cfb5ac2d0aef7fbf711ca6b = $this->env->getExtension("native_profiler");
        $__internal_1907ea0eae9dc0172a108145969ac2311990753d8cfb5ac2d0aef7fbf711ca6b->enter($__internal_1907ea0eae9dc0172a108145969ac2311990753d8cfb5ac2d0aef7fbf711ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_1907ea0eae9dc0172a108145969ac2311990753d8cfb5ac2d0aef7fbf711ca6b->leave($__internal_1907ea0eae9dc0172a108145969ac2311990753d8cfb5ac2d0aef7fbf711ca6b_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_d56d210b2a89ea01abd1f6db16bbef0aeea7047a68996f565404aa608c36fa21 = $this->env->getExtension("native_profiler");
        $__internal_d56d210b2a89ea01abd1f6db16bbef0aeea7047a68996f565404aa608c36fa21->enter($__internal_d56d210b2a89ea01abd1f6db16bbef0aeea7047a68996f565404aa608c36fa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.mail", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_d56d210b2a89ea01abd1f6db16bbef0aeea7047a68996f565404aa608c36fa21->leave($__internal_d56d210b2a89ea01abd1f6db16bbef0aeea7047a68996f565404aa608c36fa21_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_918b6422dc4fc5d5dc9df6201df8016fcf194ec9d949c0c20ccbdfa30e0f4b00 = $this->env->getExtension("native_profiler");
        $__internal_918b6422dc4fc5d5dc9df6201df8016fcf194ec9d949c0c20ccbdfa30e0f4b00->enter($__internal_918b6422dc4fc5d5dc9df6201df8016fcf194ec9d949c0c20ccbdfa30e0f4b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Mails:actions.html.twig", "mails/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_918b6422dc4fc5d5dc9df6201df8016fcf194ec9d949c0c20ccbdfa30e0f4b00->leave($__internal_918b6422dc4fc5d5dc9df6201df8016fcf194ec9d949c0c20ccbdfa30e0f4b00_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_880aa9cde72cad1496f325161dc46310070934e1861335ab7d036485d7a897b2 = $this->env->getExtension("native_profiler");
        $__internal_880aa9cde72cad1496f325161dc46310070934e1861335ab7d036485d7a897b2->enter($__internal_880aa9cde72cad1496f325161dc46310070934e1861335ab7d036485d7a897b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Mails:tbliste.html.twig", "mails/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_mail\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " Mail</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("mails_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 29
        $this->loadTemplate("BoAdminBundle:Mails:modalform.html.twig", "mails/index.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_880aa9cde72cad1496f325161dc46310070934e1861335ab7d036485d7a897b2->leave($__internal_880aa9cde72cad1496f325161dc46310070934e1861335ab7d036485d7a897b2_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87c612fc93b119a81fbc6a026ac553d8427d32d24032de7767f702c305e40a05 = $this->env->getExtension("native_profiler");
        $__internal_87c612fc93b119a81fbc6a026ac553d8427d32d24032de7767f702c305e40a05->enter($__internal_87c612fc93b119a81fbc6a026ac553d8427d32d24032de7767f702c305e40a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_87c612fc93b119a81fbc6a026ac553d8427d32d24032de7767f702c305e40a05->leave($__internal_87c612fc93b119a81fbc6a026ac553d8427d32d24032de7767f702c305e40a05_prof);

    }

    public function getTemplateName()
    {
        return "mails/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 44,  184 => 43,  172 => 42,  160 => 33,  153 => 30,  151 => 29,  147 => 28,  142 => 26,  137 => 24,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.mail'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.mail'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Mails:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Mails:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_mail" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} Mail</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('mails_new') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Mails:modalform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
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
