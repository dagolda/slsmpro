<?php

/* BoHomeBundle:Message:index.html.twig */
class __TwigTemplate_bae7287e73e3480ef4b43984a6a6215a3c52a2ebf480f130c64aa9ac86158f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Message:index.html.twig", 1);
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
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9da19f327cc35129fbc95cce81205d895ee582bdbf4cb1c03cee676d2e703bf8 = $this->env->getExtension("native_profiler");
        $__internal_9da19f327cc35129fbc95cce81205d895ee582bdbf4cb1c03cee676d2e703bf8->enter($__internal_9da19f327cc35129fbc95cce81205d895ee582bdbf4cb1c03cee676d2e703bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Message:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da19f327cc35129fbc95cce81205d895ee582bdbf4cb1c03cee676d2e703bf8->leave($__internal_9da19f327cc35129fbc95cce81205d895ee582bdbf4cb1c03cee676d2e703bf8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b5fbbf1346f99f839083a6aad85a01a257bbc71cbce33fb139ea91bd6cc0ac7 = $this->env->getExtension("native_profiler");
        $__internal_3b5fbbf1346f99f839083a6aad85a01a257bbc71cbce33fb139ea91bd6cc0ac7->enter($__internal_3b5fbbf1346f99f839083a6aad85a01a257bbc71cbce33fb139ea91bd6cc0ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.message", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3b5fbbf1346f99f839083a6aad85a01a257bbc71cbce33fb139ea91bd6cc0ac7->leave($__internal_3b5fbbf1346f99f839083a6aad85a01a257bbc71cbce33fb139ea91bd6cc0ac7_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_dc231d756145e920d5e5451f3fcb93454df99db58360af69e429fa8994024442 = $this->env->getExtension("native_profiler");
        $__internal_dc231d756145e920d5e5451f3fcb93454df99db58360af69e429fa8994024442->enter($__internal_dc231d756145e920d5e5451f3fcb93454df99db58360af69e429fa8994024442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:request.html.twig", "BoHomeBundle:Message:index.html.twig", 3)->display($context);
        
        $__internal_dc231d756145e920d5e5451f3fcb93454df99db58360af69e429fa8994024442->leave($__internal_dc231d756145e920d5e5451f3fcb93454df99db58360af69e429fa8994024442_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_880f9b5d2c184be166bf3e0ad0cb03dae457cc17596297c78b8f6d9f3e63db38 = $this->env->getExtension("native_profiler");
        $__internal_880f9b5d2c184be166bf3e0ad0cb03dae457cc17596297c78b8f6d9f3e63db38->enter($__internal_880f9b5d2c184be166bf3e0ad0cb03dae457cc17596297c78b8f6d9f3e63db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Message:index.html.twig", 4)->display($context);
        }
        
        $__internal_880f9b5d2c184be166bf3e0ad0cb03dae457cc17596297c78b8f6d9f3e63db38->leave($__internal_880f9b5d2c184be166bf3e0ad0cb03dae457cc17596297c78b8f6d9f3e63db38_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_3f631face8913c211c44ac4a5b494aef6372ef8e40b02ed54b8a269d52542a76 = $this->env->getExtension("native_profiler");
        $__internal_3f631face8913c211c44ac4a5b494aef6372ef8e40b02ed54b8a269d52542a76->enter($__internal_3f631face8913c211c44ac4a5b494aef6372ef8e40b02ed54b8a269d52542a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.message", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3f631face8913c211c44ac4a5b494aef6372ef8e40b02ed54b8a269d52542a76->leave($__internal_3f631face8913c211c44ac4a5b494aef6372ef8e40b02ed54b8a269d52542a76_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1cc11f5a258fa400f88e6d58a250f77bdd52adfa62c105ce704a98db9ab0ebb9 = $this->env->getExtension("native_profiler");
        $__internal_1cc11f5a258fa400f88e6d58a250f77bdd52adfa62c105ce704a98db9ab0ebb9->enter($__internal_1cc11f5a258fa400f88e6d58a250f77bdd52adfa62c105ce704a98db9ab0ebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Message:actions.html.twig", "BoHomeBundle:Message:index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_1cc11f5a258fa400f88e6d58a250f77bdd52adfa62c105ce704a98db9ab0ebb9->leave($__internal_1cc11f5a258fa400f88e6d58a250f77bdd52adfa62c105ce704a98db9ab0ebb9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_44f7b75399f1a6fdbcab9cb4759762b5ef3527a36e8110457459b27d436cb1b3 = $this->env->getExtension("native_profiler");
        $__internal_44f7b75399f1a6fdbcab9cb4759762b5ef3527a36e8110457459b27d436cb1b3->enter($__internal_44f7b75399f1a6fdbcab9cb4759762b5ef3527a36e8110457459b27d436cb1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 11
        $this->loadTemplate("BoHomeBundle:Message:tbliste.html.twig", "BoHomeBundle:Message:index.html.twig", 11)->display($context);
        // line 12
        echo "\t</div>
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"add_message\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addmessage", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("home_message_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 27
        $this->loadTemplate("BoHomeBundle:Message:newform.html.twig", "BoHomeBundle:Message:index.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_44f7b75399f1a6fdbcab9cb4759762b5ef3527a36e8110457459b27d436cb1b3->leave($__internal_44f7b75399f1a6fdbcab9cb4759762b5ef3527a36e8110457459b27d436cb1b3_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f80189d489707f133beb435f34710eb08340d52849f1cd1fa1c0fb1aa8ce8bc = $this->env->getExtension("native_profiler");
        $__internal_5f80189d489707f133beb435f34710eb08340d52849f1cd1fa1c0fb1aa8ce8bc->enter($__internal_5f80189d489707f133beb435f34710eb08340d52849f1cd1fa1c0fb1aa8ce8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script>
\t\t\t\$(\".close_modal_add\").click(function(){
\t\t\t\t\$('#add_make').modal('hide');
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_5f80189d489707f133beb435f34710eb08340d52849f1cd1fa1c0fb1aa8ce8bc->leave($__internal_5f80189d489707f133beb435f34710eb08340d52849f1cd1fa1c0fb1aa8ce8bc_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 47,  194 => 46,  187 => 41,  175 => 40,  164 => 32,  160 => 31,  153 => 28,  151 => 27,  147 => 26,  142 => 24,  137 => 22,  125 => 12,  123 => 11,  120 => 10,  114 => 9,  104 => 7,  98 => 6,  82 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.message'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.message'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Message:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoHomeBundle:Message:tbliste.html.twig"%}*/
/* 	</div>*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="add_message" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'label.addmessage'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('home_message_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoHomeBundle:Message:newform.html.twig"%}*/
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
/* 		  </div>*/
/* 		</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(".close_modal_add").click(function(){*/
/* 				$('#add_make').modal('hide');*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
