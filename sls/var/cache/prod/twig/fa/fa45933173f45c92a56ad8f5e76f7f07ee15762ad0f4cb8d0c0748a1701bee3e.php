<?php

/* user/show.html.twig */
class __TwigTemplate_21f5ba37c2c105a6b7ad62cc718a6c83221095ca3e76de698de308afc5a66497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_5bc811ac88a0c98cde3adde548225a38cf302da56f1de88fe2263daf7cf24774 = $this->env->getExtension("native_profiler");
        $__internal_5bc811ac88a0c98cde3adde548225a38cf302da56f1de88fe2263daf7cf24774->enter($__internal_5bc811ac88a0c98cde3adde548225a38cf302da56f1de88fe2263daf7cf24774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc811ac88a0c98cde3adde548225a38cf302da56f1de88fe2263daf7cf24774->leave($__internal_5bc811ac88a0c98cde3adde548225a38cf302da56f1de88fe2263daf7cf24774_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e94734092226aa0acd3fb3e27aaacfe5ad9da0bc01d5148995db237467ba43e = $this->env->getExtension("native_profiler");
        $__internal_0e94734092226aa0acd3fb3e27aaacfe5ad9da0bc01d5148995db237467ba43e->enter($__internal_0e94734092226aa0acd3fb3e27aaacfe5ad9da0bc01d5148995db237467ba43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.user", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_0e94734092226aa0acd3fb3e27aaacfe5ad9da0bc01d5148995db237467ba43e->leave($__internal_0e94734092226aa0acd3fb3e27aaacfe5ad9da0bc01d5148995db237467ba43e_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_38d06b429e7a0f9b868f9db02d156a5d6bfd0a98df53880f6626c235958ba536 = $this->env->getExtension("native_profiler");
        $__internal_38d06b429e7a0f9b868f9db02d156a5d6bfd0a98df53880f6626c235958ba536->enter($__internal_38d06b429e7a0f9b868f9db02d156a5d6bfd0a98df53880f6626c235958ba536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "user/show.html.twig", 3)->display($context);
        
        $__internal_38d06b429e7a0f9b868f9db02d156a5d6bfd0a98df53880f6626c235958ba536->leave($__internal_38d06b429e7a0f9b868f9db02d156a5d6bfd0a98df53880f6626c235958ba536_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_374955de4cb493103225fe8b4cabf718f1d19a20fcba7cdb3db8113ee6f02ea8 = $this->env->getExtension("native_profiler");
        $__internal_374955de4cb493103225fe8b4cabf718f1d19a20fcba7cdb3db8113ee6f02ea8->enter($__internal_374955de4cb493103225fe8b4cabf718f1d19a20fcba7cdb3db8113ee6f02ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_374955de4cb493103225fe8b4cabf718f1d19a20fcba7cdb3db8113ee6f02ea8->leave($__internal_374955de4cb493103225fe8b4cabf718f1d19a20fcba7cdb3db8113ee6f02ea8_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_a72e15d691fcbb1584b335f9289cf3b04bae0db0a72866983f03476bc7ae989b = $this->env->getExtension("native_profiler");
        $__internal_a72e15d691fcbb1584b335f9289cf3b04bae0db0a72866983f03476bc7ae989b->enter($__internal_a72e15d691fcbb1584b335f9289cf3b04bae0db0a72866983f03476bc7ae989b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.user", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a72e15d691fcbb1584b335f9289cf3b04bae0db0a72866983f03476bc7ae989b->leave($__internal_a72e15d691fcbb1584b335f9289cf3b04bae0db0a72866983f03476bc7ae989b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_06461f97254c4a0746e12287cacfcdf06cd025952e81fc086bb13a94a7b5460a = $this->env->getExtension("native_profiler");
        $__internal_06461f97254c4a0746e12287cacfcdf06cd025952e81fc086bb13a94a7b5460a->enter($__internal_06461f97254c4a0746e12287cacfcdf06cd025952e81fc086bb13a94a7b5460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoUserBundle:User:showactions.html.twig", "user/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoUserBundle:User:show.html.twig", "user/show.html.twig", 10)->display($context);
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
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_06461f97254c4a0746e12287cacfcdf06cd025952e81fc086bb13a94a7b5460a->leave($__internal_06461f97254c4a0746e12287cacfcdf06cd025952e81fc086bb13a94a7b5460a_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f48f5c41199cea146ca5ea6ddc3e2fb23ab2ac685e6deb6c1f8ee476927d402 = $this->env->getExtension("native_profiler");
        $__internal_6f48f5c41199cea146ca5ea6ddc3e2fb23ab2ac685e6deb6c1f8ee476927d402->enter($__internal_6f48f5c41199cea146ca5ea6ddc3e2fb23ab2ac685e6deb6c1f8ee476927d402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_6f48f5c41199cea146ca5ea6ddc3e2fb23ab2ac685e6deb6c1f8ee476927d402->leave($__internal_6f48f5c41199cea146ca5ea6ddc3e2fb23ab2ac685e6deb6c1f8ee476927d402_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 40,  166 => 39,  154 => 38,  143 => 30,  139 => 29,  135 => 28,  129 => 25,  123 => 22,  110 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.user'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.user'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoUserBundle:User:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoUserBundle:User:show.html.twig"%}*/
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
