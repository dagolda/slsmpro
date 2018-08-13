<?php

/* BoHomeBundle:Emppj:index.html.twig */
class __TwigTemplate_202296f0849db9b95faa1b9819e627cd966635bdcfc82ae76b0bc871acbf7514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Emppj:index.html.twig", 1);
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
        $__internal_702c7f81582596efb1f9b7888f6fc757f72352e1cb1be11b6890c9a03666fa32 = $this->env->getExtension("native_profiler");
        $__internal_702c7f81582596efb1f9b7888f6fc757f72352e1cb1be11b6890c9a03666fa32->enter($__internal_702c7f81582596efb1f9b7888f6fc757f72352e1cb1be11b6890c9a03666fa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Emppj:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702c7f81582596efb1f9b7888f6fc757f72352e1cb1be11b6890c9a03666fa32->leave($__internal_702c7f81582596efb1f9b7888f6fc757f72352e1cb1be11b6890c9a03666fa32_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_69020f17769ae6421382389e85c49381395c9ba415965f1588e7a74cd007e9f2 = $this->env->getExtension("native_profiler");
        $__internal_69020f17769ae6421382389e85c49381395c9ba415965f1588e7a74cd007e9f2->enter($__internal_69020f17769ae6421382389e85c49381395c9ba415965f1588e7a74cd007e9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.mydocuments", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_69020f17769ae6421382389e85c49381395c9ba415965f1588e7a74cd007e9f2->leave($__internal_69020f17769ae6421382389e85c49381395c9ba415965f1588e7a74cd007e9f2_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_84c45d4baa8aca97a2c7c54a9756919c6eecd91ef61d5965c3da9904b7ddf45f = $this->env->getExtension("native_profiler");
        $__internal_84c45d4baa8aca97a2c7c54a9756919c6eecd91ef61d5965c3da9904b7ddf45f->enter($__internal_84c45d4baa8aca97a2c7c54a9756919c6eecd91ef61d5965c3da9904b7ddf45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:document.html.twig", "BoHomeBundle:Emppj:index.html.twig", 3)->display($context);
        
        $__internal_84c45d4baa8aca97a2c7c54a9756919c6eecd91ef61d5965c3da9904b7ddf45f->leave($__internal_84c45d4baa8aca97a2c7c54a9756919c6eecd91ef61d5965c3da9904b7ddf45f_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_06a20ae2ecd2a97a502fbc432b03da1dcae88bf380e65455a331099d1de22769 = $this->env->getExtension("native_profiler");
        $__internal_06a20ae2ecd2a97a502fbc432b03da1dcae88bf380e65455a331099d1de22769->enter($__internal_06a20ae2ecd2a97a502fbc432b03da1dcae88bf380e65455a331099d1de22769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Contracts:rightshow.html.twig", "BoHomeBundle:Emppj:index.html.twig", 4)->display($context);
        }
        
        $__internal_06a20ae2ecd2a97a502fbc432b03da1dcae88bf380e65455a331099d1de22769->leave($__internal_06a20ae2ecd2a97a502fbc432b03da1dcae88bf380e65455a331099d1de22769_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_96cc3752d1215cb726d2504df9ed24df5089c2eb1cdd5ed1d7e87b04cab48b63 = $this->env->getExtension("native_profiler");
        $__internal_96cc3752d1215cb726d2504df9ed24df5089c2eb1cdd5ed1d7e87b04cab48b63->enter($__internal_96cc3752d1215cb726d2504df9ed24df5089c2eb1cdd5ed1d7e87b04cab48b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.mydocuments", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_96cc3752d1215cb726d2504df9ed24df5089c2eb1cdd5ed1d7e87b04cab48b63->leave($__internal_96cc3752d1215cb726d2504df9ed24df5089c2eb1cdd5ed1d7e87b04cab48b63_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_30d72334660923024ac76b1229b3effd64779279189b4faf724d06d09f0874aa = $this->env->getExtension("native_profiler");
        $__internal_30d72334660923024ac76b1229b3effd64779279189b4faf724d06d09f0874aa->enter($__internal_30d72334660923024ac76b1229b3effd64779279189b4faf724d06d09f0874aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Emppj:actions.html.twig", "BoHomeBundle:Emppj:index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_30d72334660923024ac76b1229b3effd64779279189b4faf724d06d09f0874aa->leave($__internal_30d72334660923024ac76b1229b3effd64779279189b4faf724d06d09f0874aa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd477b96e181bf60b5137e5c6c0b72d6a371387dfa1e267625b23fe271290ab = $this->env->getExtension("native_profiler");
        $__internal_0fd477b96e181bf60b5137e5c6c0b72d6a371387dfa1e267625b23fe271290ab->enter($__internal_0fd477b96e181bf60b5137e5c6c0b72d6a371387dfa1e267625b23fe271290ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 11
        $this->loadTemplate("BoHomeBundle:Emppj:tbliste.html.twig", "BoHomeBundle:Emppj:index.html.twig", 11)->display($context);
        // line 12
        echo "\t</div>
\t
\t<!-- Begin employee document deleting -->
\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epjs"]) ? $context["epjs"] : $this->getContext($context, "epjs")));
        foreach ($context['_seq'] as $context["_key"] => $context["epj"]) {
            // line 16
            echo "\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t  <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t";
            // line 31
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["epjs_delete_form"]) ? $context["epjs_delete_form"] : $this->getContext($context, "epjs_delete_form")), $this->getAttribute($context["epj"], "id", array()), array(), "array"), 'form_start');
            echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 33
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["epjs_delete_form"]) ? $context["epjs_delete_form"] : $this->getContext($context, "epjs_delete_form")), $this->getAttribute($context["epj"], "id", array()), array(), "array"), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t<!-- End employee document deleting -->
\t
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_epj\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addmessage", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("home_emppj_new");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div id=records_entity>
\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 58
        $this->loadTemplate("BoHomeBundle:Emppj:newform.html.twig", "BoHomeBundle:Emppj:index.html.twig", 58)->display($context);
        // line 59
        echo "\t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_0fd477b96e181bf60b5137e5c6c0b72d6a371387dfa1e267625b23fe271290ab->leave($__internal_0fd477b96e181bf60b5137e5c6c0b72d6a371387dfa1e267625b23fe271290ab_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65629de57ff140d6b8a4eb574d4dd22e9b1e85ac0405ef5f29e9cf178273b988 = $this->env->getExtension("native_profiler");
        $__internal_65629de57ff140d6b8a4eb574d4dd22e9b1e85ac0405ef5f29e9cf178273b988->enter($__internal_65629de57ff140d6b8a4eb574d4dd22e9b1e85ac0405ef5f29e9cf178273b988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_65629de57ff140d6b8a4eb574d4dd22e9b1e85ac0405ef5f29e9cf178273b988->leave($__internal_65629de57ff140d6b8a4eb574d4dd22e9b1e85ac0405ef5f29e9cf178273b988_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Emppj:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 73,  240 => 72,  228 => 71,  217 => 63,  209 => 59,  207 => 58,  203 => 57,  197 => 54,  192 => 52,  179 => 41,  165 => 33,  161 => 32,  157 => 31,  151 => 28,  145 => 25,  134 => 16,  130 => 15,  125 => 12,  123 => 11,  120 => 10,  114 => 9,  104 => 7,  98 => 6,  82 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.mydocuments'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:document.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if employee!=null%}{%include "BoHomeBundle:Contracts:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.mydocuments'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Emppj:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoHomeBundle:Emppj:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- Begin employee document deleting -->*/
/* 	{%for epj in epjs%}*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="myModal" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<div class="modal-body">*/
/* 				  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					{{ form_start(epjs_delete_form[epj.id]) }}*/
/* 						<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 					{{ form_end(epjs_delete_form[epj.id]) }}*/
/* 				</div>*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 	{%endfor%}*/
/* 	<!-- End employee document deleting -->*/
/* 	*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_epj" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'label.addmessage'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('home_emppj_new') }}" enctype="multipart/form-data" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						<div id=records_entity>*/
/* 							{{ form_errors(form) }}*/
/* 								{%include "BoHomeBundle:Emppj:newform.html.twig"%}*/
/* 							{{ form_rest(form) }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
