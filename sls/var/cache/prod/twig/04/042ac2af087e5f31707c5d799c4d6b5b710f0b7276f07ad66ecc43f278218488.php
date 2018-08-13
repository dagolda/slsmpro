<?php

/* BoAdvisorsBundle:Absences:show.html.twig */
class __TwigTemplate_a29e2deef7d69d17084b67bd38c889a64dd7f52a56c50d456eb1ad3ad5f4bbfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Absences:show.html.twig", 1);
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
        $__internal_6a109299f4b7734427f4f87031736ea768b840b2c876e1e3e958c5acc7de68e4 = $this->env->getExtension("native_profiler");
        $__internal_6a109299f4b7734427f4f87031736ea768b840b2c876e1e3e958c5acc7de68e4->enter($__internal_6a109299f4b7734427f4f87031736ea768b840b2c876e1e3e958c5acc7de68e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a109299f4b7734427f4f87031736ea768b840b2c876e1e3e958c5acc7de68e4->leave($__internal_6a109299f4b7734427f4f87031736ea768b840b2c876e1e3e958c5acc7de68e4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab98c5d94c12adfbf4bda872b5de66f69e0d129664a7ced08444bf76fbf6a5d4 = $this->env->getExtension("native_profiler");
        $__internal_ab98c5d94c12adfbf4bda872b5de66f69e0d129664a7ced08444bf76fbf6a5d4->enter($__internal_ab98c5d94c12adfbf4bda872b5de66f69e0d129664a7ced08444bf76fbf6a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_ab98c5d94c12adfbf4bda872b5de66f69e0d129664a7ced08444bf76fbf6a5d4->leave($__internal_ab98c5d94c12adfbf4bda872b5de66f69e0d129664a7ced08444bf76fbf6a5d4_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_06d4fab8e9d086a3fb55c86faa6b14cd0755ecdd1ae6a52a84b1e0a476dad0d3 = $this->env->getExtension("native_profiler");
        $__internal_06d4fab8e9d086a3fb55c86faa6b14cd0755ecdd1ae6a52a84b1e0a476dad0d3->enter($__internal_06d4fab8e9d086a3fb55c86faa6b14cd0755ecdd1ae6a52a84b1e0a476dad0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Absences:show.html.twig", 3)->display($context);
        
        $__internal_06d4fab8e9d086a3fb55c86faa6b14cd0755ecdd1ae6a52a84b1e0a476dad0d3->leave($__internal_06d4fab8e9d086a3fb55c86faa6b14cd0755ecdd1ae6a52a84b1e0a476dad0d3_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_73f7120bc4e47342f2c0eaa6e06017c5888c6a2fe5025e9c1e9ad5aef9fcbe3d = $this->env->getExtension("native_profiler");
        $__internal_73f7120bc4e47342f2c0eaa6e06017c5888c6a2fe5025e9c1e9ad5aef9fcbe3d->enter($__internal_73f7120bc4e47342f2c0eaa6e06017c5888c6a2fe5025e9c1e9ad5aef9fcbe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_73f7120bc4e47342f2c0eaa6e06017c5888c6a2fe5025e9c1e9ad5aef9fcbe3d->leave($__internal_73f7120bc4e47342f2c0eaa6e06017c5888c6a2fe5025e9c1e9ad5aef9fcbe3d_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_4e377d769fb7b88e94cc2dbccf37f7d00496018227305a8641bf9049d960936d = $this->env->getExtension("native_profiler");
        $__internal_4e377d769fb7b88e94cc2dbccf37f7d00496018227305a8641bf9049d960936d->enter($__internal_4e377d769fb7b88e94cc2dbccf37f7d00496018227305a8641bf9049d960936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " Id:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4e377d769fb7b88e94cc2dbccf37f7d00496018227305a8641bf9049d960936d->leave($__internal_4e377d769fb7b88e94cc2dbccf37f7d00496018227305a8641bf9049d960936d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc658460d1a48e7e43af6fa3224fc6c60627b28afef72232983c192e16131c79 = $this->env->getExtension("native_profiler");
        $__internal_cc658460d1a48e7e43af6fa3224fc6c60627b28afef72232983c192e16131c79->enter($__internal_cc658460d1a48e7e43af6fa3224fc6c60627b28afef72232983c192e16131c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t";
        // line 9
        $this->loadTemplate("BoAdvisorsBundle:Absences:showactions.html.twig", "BoAdvisorsBundle:Absences:show.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdvisorsBundle:Absences:tbshow.html.twig", "BoAdvisorsBundle:Absences:show.html.twig", 11)->display($context);
        // line 12
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
\t\t\t  <h4 class=\"modal-title\">Alert Delete</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>Are you sure to delete this item ?</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"Confirm\">
\t\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_cc658460d1a48e7e43af6fa3224fc6c60627b28afef72232983c192e16131c79->leave($__internal_cc658460d1a48e7e43af6fa3224fc6c60627b28afef72232983c192e16131c79_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_526380127e5a267c82cfbe85ddb6e6f329230f4753accf7657ec67e518331a87 = $this->env->getExtension("native_profiler");
        $__internal_526380127e5a267c82cfbe85ddb6e6f329230f4753accf7657ec67e518331a87->enter($__internal_526380127e5a267c82cfbe85ddb6e6f329230f4753accf7657ec67e518331a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_526380127e5a267c82cfbe85ddb6e6f329230f4753accf7657ec67e518331a87->leave($__internal_526380127e5a267c82cfbe85ddb6e6f329230f4753accf7657ec67e518331a87_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 41,  163 => 40,  151 => 39,  140 => 31,  135 => 29,  116 => 12,  114 => 11,  111 => 10,  109 => 9,  106 => 8,  100 => 7,  80 => 6,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.absence'|trans([],'BoAdminBundle')}} Id:{{absence.id}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %} */
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdvisorsBundle:Absences:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdvisorsBundle:Absences:tbshow.html.twig"%}*/
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
/* 			  <h4 class="modal-title">Alert Delete</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>Are you sure to delete this item ?</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="Confirm">*/
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
