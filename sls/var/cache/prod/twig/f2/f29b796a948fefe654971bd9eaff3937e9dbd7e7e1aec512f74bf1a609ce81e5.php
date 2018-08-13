<?php

/* coordinator/show.html.twig */
class __TwigTemplate_a4af12fb4facc836c4479c5634c559aa1cf01eec895694f1294d74b75bb458d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coordinator/show.html.twig", 1);
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
        $__internal_0f7120613c020f059750b6946acf89dfd578f41a419d40d333e0ce69e013816a = $this->env->getExtension("native_profiler");
        $__internal_0f7120613c020f059750b6946acf89dfd578f41a419d40d333e0ce69e013816a->enter($__internal_0f7120613c020f059750b6946acf89dfd578f41a419d40d333e0ce69e013816a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinator/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7120613c020f059750b6946acf89dfd578f41a419d40d333e0ce69e013816a->leave($__internal_0f7120613c020f059750b6946acf89dfd578f41a419d40d333e0ce69e013816a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b3ca3ecfcb95e2aeedf20948fcce3b5e682687311a48c68cac68ad312e71c2b = $this->env->getExtension("native_profiler");
        $__internal_8b3ca3ecfcb95e2aeedf20948fcce3b5e682687311a48c68cac68ad312e71c2b->enter($__internal_8b3ca3ecfcb95e2aeedf20948fcce3b5e682687311a48c68cac68ad312e71c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8b3ca3ecfcb95e2aeedf20948fcce3b5e682687311a48c68cac68ad312e71c2b->leave($__internal_8b3ca3ecfcb95e2aeedf20948fcce3b5e682687311a48c68cac68ad312e71c2b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_aefaf33ecf128cc4ef21665c7cc6e633c694e8c9646c451d3f9356e4ac5921b9 = $this->env->getExtension("native_profiler");
        $__internal_aefaf33ecf128cc4ef21665c7cc6e633c694e8c9646c451d3f9356e4ac5921b9->enter($__internal_aefaf33ecf128cc4ef21665c7cc6e633c694e8c9646c451d3f9356e4ac5921b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "coordinator/show.html.twig", 3)->display($context);
        
        $__internal_aefaf33ecf128cc4ef21665c7cc6e633c694e8c9646c451d3f9356e4ac5921b9->leave($__internal_aefaf33ecf128cc4ef21665c7cc6e633c694e8c9646c451d3f9356e4ac5921b9_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5c2658e4f617723e680cd5f195aab5801336ed74502b79fa698a119644e01b80 = $this->env->getExtension("native_profiler");
        $__internal_5c2658e4f617723e680cd5f195aab5801336ed74502b79fa698a119644e01b80->enter($__internal_5c2658e4f617723e680cd5f195aab5801336ed74502b79fa698a119644e01b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Coordinator:rightshow.html.twig", "coordinator/show.html.twig", 4)->display($context);
        
        $__internal_5c2658e4f617723e680cd5f195aab5801336ed74502b79fa698a119644e01b80->leave($__internal_5c2658e4f617723e680cd5f195aab5801336ed74502b79fa698a119644e01b80_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_de4e2d1207e7ea07c619d2b2c28db3f29143dbef41ac27be7a1b357fef598a71 = $this->env->getExtension("native_profiler");
        $__internal_de4e2d1207e7ea07c619d2b2c28db3f29143dbef41ac27be7a1b357fef598a71->enter($__internal_de4e2d1207e7ea07c619d2b2c28db3f29143dbef41ac27be7a1b357fef598a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_de4e2d1207e7ea07c619d2b2c28db3f29143dbef41ac27be7a1b357fef598a71->leave($__internal_de4e2d1207e7ea07c619d2b2c28db3f29143dbef41ac27be7a1b357fef598a71_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_992e0f3f5124594a1035da9d068de51d75423d9464f6c22a531ad493340ba849 = $this->env->getExtension("native_profiler");
        $__internal_992e0f3f5124594a1035da9d068de51d75423d9464f6c22a531ad493340ba849->enter($__internal_992e0f3f5124594a1035da9d068de51d75423d9464f6c22a531ad493340ba849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Coordinator:showactions.html.twig", "coordinator/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Coordinator:contract.html.twig", "coordinator/show.html.twig", 11)->display($context);
        // line 12
        echo "\t\t</div>\t
\t\t<!--div class=\"display_content\">
\t\t\t<legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 15
        $this->loadTemplate("BoAdminBundle:Coordinator:students.html.twig", "coordinator/show.html.twig", 15)->display($context);
        // line 16
        echo "\t\t</div-->\t\t\t
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
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 35
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
        
        $__internal_992e0f3f5124594a1035da9d068de51d75423d9464f6c22a531ad493340ba849->leave($__internal_992e0f3f5124594a1035da9d068de51d75423d9464f6c22a531ad493340ba849_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cc5d0a72311356b529362252b97bc9245cc3f02736e5b4c452925ffee434286 = $this->env->getExtension("native_profiler");
        $__internal_8cc5d0a72311356b529362252b97bc9245cc3f02736e5b4c452925ffee434286->enter($__internal_8cc5d0a72311356b529362252b97bc9245cc3f02736e5b4c452925ffee434286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_8cc5d0a72311356b529362252b97bc9245cc3f02736e5b4c452925ffee434286->leave($__internal_8cc5d0a72311356b529362252b97bc9245cc3f02736e5b4c452925ffee434286_prof);

    }

    public function getTemplateName()
    {
        return "coordinator/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 44,  181 => 43,  169 => 42,  159 => 35,  155 => 34,  151 => 33,  145 => 30,  139 => 27,  126 => 16,  124 => 15,  120 => 14,  116 => 12,  114 => 11,  110 => 10,  107 => 9,  105 => 8,  102 => 7,  96 => 6,  80 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%include "BoAdminBundle:Coordinator:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Coordinator:showactions.html.twig"%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Coordinator:contract.html.twig"%}*/
/* 		</div>	*/
/* 		<!--div class="display_content">*/
/* 			<legend>{{'label.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Coordinator:students.html.twig"%}*/
/* 		</div-->			*/
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
