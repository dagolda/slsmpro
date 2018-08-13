<?php

/* activities/show.html.twig */
class __TwigTemplate_8a5dd226ce0ddd365298050dde1364cdf4c6cfcd83824e6b117b1db7df568b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "activities/show.html.twig", 1);
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
        $__internal_aeb9b63ad8568e71df6c8cf3d8b1747d719834d7fa86b5088be207b800eb56e2 = $this->env->getExtension("native_profiler");
        $__internal_aeb9b63ad8568e71df6c8cf3d8b1747d719834d7fa86b5088be207b800eb56e2->enter($__internal_aeb9b63ad8568e71df6c8cf3d8b1747d719834d7fa86b5088be207b800eb56e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "activities/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb9b63ad8568e71df6c8cf3d8b1747d719834d7fa86b5088be207b800eb56e2->leave($__internal_aeb9b63ad8568e71df6c8cf3d8b1747d719834d7fa86b5088be207b800eb56e2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c3e4cbcd7a733c5592e9b8e3dccc91292cd25131e4ac5a014abbc93349d75de = $this->env->getExtension("native_profiler");
        $__internal_4c3e4cbcd7a733c5592e9b8e3dccc91292cd25131e4ac5a014abbc93349d75de->enter($__internal_4c3e4cbcd7a733c5592e9b8e3dccc91292cd25131e4ac5a014abbc93349d75de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.activity", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_4c3e4cbcd7a733c5592e9b8e3dccc91292cd25131e4ac5a014abbc93349d75de->leave($__internal_4c3e4cbcd7a733c5592e9b8e3dccc91292cd25131e4ac5a014abbc93349d75de_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_8f14a2a48b28ac6d2c813367fff319e1f5d2ddabceb976c818d4b5dff2ced231 = $this->env->getExtension("native_profiler");
        $__internal_8f14a2a48b28ac6d2c813367fff319e1f5d2ddabceb976c818d4b5dff2ced231->enter($__internal_8f14a2a48b28ac6d2c813367fff319e1f5d2ddabceb976c818d4b5dff2ced231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "activities/show.html.twig", 3)->display($context);
        
        $__internal_8f14a2a48b28ac6d2c813367fff319e1f5d2ddabceb976c818d4b5dff2ced231->leave($__internal_8f14a2a48b28ac6d2c813367fff319e1f5d2ddabceb976c818d4b5dff2ced231_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_df66032d1d293d61a044c1f4dd51985ec461257c2e5c84d9eff6d8d4bfc7b198 = $this->env->getExtension("native_profiler");
        $__internal_df66032d1d293d61a044c1f4dd51985ec461257c2e5c84d9eff6d8d4bfc7b198->enter($__internal_df66032d1d293d61a044c1f4dd51985ec461257c2e5c84d9eff6d8d4bfc7b198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_df66032d1d293d61a044c1f4dd51985ec461257c2e5c84d9eff6d8d4bfc7b198->leave($__internal_df66032d1d293d61a044c1f4dd51985ec461257c2e5c84d9eff6d8d4bfc7b198_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_54297e84f94af59e7cc81f1a23c7cd4c9dcb6808d0369b3bf4f96609a513d287 = $this->env->getExtension("native_profiler");
        $__internal_54297e84f94af59e7cc81f1a23c7cd4c9dcb6808d0369b3bf4f96609a513d287->enter($__internal_54297e84f94af59e7cc81f1a23c7cd4c9dcb6808d0369b3bf4f96609a513d287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.activity", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_54297e84f94af59e7cc81f1a23c7cd4c9dcb6808d0369b3bf4f96609a513d287->leave($__internal_54297e84f94af59e7cc81f1a23c7cd4c9dcb6808d0369b3bf4f96609a513d287_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_dea2d5036cccd895d4ccf05329c6729c5b5193ca36bdb937a86061b2b8559dfe = $this->env->getExtension("native_profiler");
        $__internal_dea2d5036cccd895d4ccf05329c6729c5b5193ca36bdb937a86061b2b8559dfe->enter($__internal_dea2d5036cccd895d4ccf05329c6729c5b5193ca36bdb937a86061b2b8559dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Activities:showactions.html.twig", "activities/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Activities:show.html.twig", "activities/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>\t\t\t
\t</div>
\t\t<div class=\"container\">
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
        
        $__internal_dea2d5036cccd895d4ccf05329c6729c5b5193ca36bdb937a86061b2b8559dfe->leave($__internal_dea2d5036cccd895d4ccf05329c6729c5b5193ca36bdb937a86061b2b8559dfe_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79a197259937a4fe721f30698efef024d38c588bdcdc43015a0edece98fd2c82 = $this->env->getExtension("native_profiler");
        $__internal_79a197259937a4fe721f30698efef024d38c588bdcdc43015a0edece98fd2c82->enter($__internal_79a197259937a4fe721f30698efef024d38c588bdcdc43015a0edece98fd2c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_79a197259937a4fe721f30698efef024d38c588bdcdc43015a0edece98fd2c82->leave($__internal_79a197259937a4fe721f30698efef024d38c588bdcdc43015a0edece98fd2c82_prof);

    }

    public function getTemplateName()
    {
        return "activities/show.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.activity'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.activity'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Activities:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Activities:show.html.twig"%}*/
/* 		</div>			*/
/* 	</div>*/
/* 		<div class="container">*/
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
