<?php

/* teamcontacts/show.html.twig */
class __TwigTemplate_b24379b9378e644aeebd88b575fa18baa23ed63aa3c6de5384b75e514180627f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "teamcontacts/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_72ec1031e2e7c073ed8eb59b218586b9b334141b7bf1f41788392cb4093ee1f3 = $this->env->getExtension("native_profiler");
        $__internal_72ec1031e2e7c073ed8eb59b218586b9b334141b7bf1f41788392cb4093ee1f3->enter($__internal_72ec1031e2e7c073ed8eb59b218586b9b334141b7bf1f41788392cb4093ee1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teamcontacts/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ec1031e2e7c073ed8eb59b218586b9b334141b7bf1f41788392cb4093ee1f3->leave($__internal_72ec1031e2e7c073ed8eb59b218586b9b334141b7bf1f41788392cb4093ee1f3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_54d9419dde9463d445305f2391fcf30860740d65f473f4cdf2aab7e9318ed16e = $this->env->getExtension("native_profiler");
        $__internal_54d9419dde9463d445305f2391fcf30860740d65f473f4cdf2aab7e9318ed16e->enter($__internal_54d9419dde9463d445305f2391fcf30860740d65f473f4cdf2aab7e9318ed16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_54d9419dde9463d445305f2391fcf30860740d65f473f4cdf2aab7e9318ed16e->leave($__internal_54d9419dde9463d445305f2391fcf30860740d65f473f4cdf2aab7e9318ed16e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0364d5ba0890d60dad90dcaaffbcdb4b583fffc3d1465d12af8f838ad98fdc4b = $this->env->getExtension("native_profiler");
        $__internal_0364d5ba0890d60dad90dcaaffbcdb4b583fffc3d1465d12af8f838ad98fdc4b->enter($__internal_0364d5ba0890d60dad90dcaaffbcdb4b583fffc3d1465d12af8f838ad98fdc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0364d5ba0890d60dad90dcaaffbcdb4b583fffc3d1465d12af8f838ad98fdc4b->leave($__internal_0364d5ba0890d60dad90dcaaffbcdb4b583fffc3d1465d12af8f838ad98fdc4b_prof);

    }

    // line 6
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_daad3c8f2e9e6836a6f7bdee44001d063083e42b9279d361afedbbf1f3ceceb5 = $this->env->getExtension("native_profiler");
        $__internal_daad3c8f2e9e6836a6f7bdee44001d063083e42b9279d361afedbbf1f3ceceb5->enter($__internal_daad3c8f2e9e6836a6f7bdee44001d063083e42b9279d361afedbbf1f3ceceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "teamcontacts/show.html.twig", 6)->display($context);
        
        $__internal_daad3c8f2e9e6836a6f7bdee44001d063083e42b9279d361afedbbf1f3ceceb5->leave($__internal_daad3c8f2e9e6836a6f7bdee44001d063083e42b9279d361afedbbf1f3ceceb5_prof);

    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        $__internal_46ef007a961b4f7bb84e33cce8ef2fc6aa441293ad75ebf0b3544662e3b8cd22 = $this->env->getExtension("native_profiler");
        $__internal_46ef007a961b4f7bb84e33cce8ef2fc6aa441293ad75ebf0b3544662e3b8cd22->enter($__internal_46ef007a961b4f7bb84e33cce8ef2fc6aa441293ad75ebf0b3544662e3b8cd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_46ef007a961b4f7bb84e33cce8ef2fc6aa441293ad75ebf0b3544662e3b8cd22->leave($__internal_46ef007a961b4f7bb84e33cce8ef2fc6aa441293ad75ebf0b3544662e3b8cd22_prof);

    }

    // line 9
    public function block_label($context, array $blocks = array())
    {
        $__internal_1087a4207f6a66c3c51d47b0289007cbc19edae68cf2e8e37e021dea184c4037 = $this->env->getExtension("native_profiler");
        $__internal_1087a4207f6a66c3c51d47b0289007cbc19edae68cf2e8e37e021dea184c4037->enter($__internal_1087a4207f6a66c3c51d47b0289007cbc19edae68cf2e8e37e021dea184c4037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_1087a4207f6a66c3c51d47b0289007cbc19edae68cf2e8e37e021dea184c4037->leave($__internal_1087a4207f6a66c3c51d47b0289007cbc19edae68cf2e8e37e021dea184c4037_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea3bfaf0984d67c2d914f48f93dee31dcadd35a8d25b648990b2c8514206481 = $this->env->getExtension("native_profiler");
        $__internal_2ea3bfaf0984d67c2d914f48f93dee31dcadd35a8d25b648990b2c8514206481->enter($__internal_2ea3bfaf0984d67c2d914f48f93dee31dcadd35a8d25b648990b2c8514206481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"body-content\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:TeamContacts:showactions.html.twig", "teamcontacts/show.html.twig", 12)->display($context);
        // line 13
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 14
        $this->loadTemplate("BoAdminBundle:TeamContacts:show.html.twig", "teamcontacts/show.html.twig", 14)->display($context);
        // line 15
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
        
        $__internal_2ea3bfaf0984d67c2d914f48f93dee31dcadd35a8d25b648990b2c8514206481->leave($__internal_2ea3bfaf0984d67c2d914f48f93dee31dcadd35a8d25b648990b2c8514206481_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae4d2cc3d2dc42ce3a73c0847e223ccebeb3727c3b83f97c3fe309145b46935a = $this->env->getExtension("native_profiler");
        $__internal_ae4d2cc3d2dc42ce3a73c0847e223ccebeb3727c3b83f97c3fe309145b46935a->enter($__internal_ae4d2cc3d2dc42ce3a73c0847e223ccebeb3727c3b83f97c3fe309145b46935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_ae4d2cc3d2dc42ce3a73c0847e223ccebeb3727c3b83f97c3fe309145b46935a->leave($__internal_ae4d2cc3d2dc42ce3a73c0847e223ccebeb3727c3b83f97c3fe309145b46935a_prof);

    }

    public function getTemplateName()
    {
        return "teamcontacts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 44,  183 => 43,  171 => 42,  160 => 34,  156 => 33,  152 => 32,  146 => 29,  140 => 26,  127 => 15,  125 => 14,  122 => 13,  120 => 12,  117 => 11,  111 => 10,  95 => 9,  84 => 7,  72 => 6,  62 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.teamcontacts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* {% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.teamcontacts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:TeamContacts:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:TeamContacts:show.html.twig"%}*/
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
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
