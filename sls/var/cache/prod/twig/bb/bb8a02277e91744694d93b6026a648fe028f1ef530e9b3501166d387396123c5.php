<?php

/* BoAdvisorsBundle:Tickets:show.html.twig */
class __TwigTemplate_7e4ee40b7b0031f8931e4016333d543d1e4abdf75f157260a7f04e84b850c970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Tickets:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_5347631971c618e084e85f24dce4b65f0d7a1bbf6ee4e5651c2f890029999d34 = $this->env->getExtension("native_profiler");
        $__internal_5347631971c618e084e85f24dce4b65f0d7a1bbf6ee4e5651c2f890029999d34->enter($__internal_5347631971c618e084e85f24dce4b65f0d7a1bbf6ee4e5651c2f890029999d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5347631971c618e084e85f24dce4b65f0d7a1bbf6ee4e5651c2f890029999d34->leave($__internal_5347631971c618e084e85f24dce4b65f0d7a1bbf6ee4e5651c2f890029999d34_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f04c40d92e0b01ac0aff47c2bd8bbd812e97fa728049e1a1533f0f2dd813049f = $this->env->getExtension("native_profiler");
        $__internal_f04c40d92e0b01ac0aff47c2bd8bbd812e97fa728049e1a1533f0f2dd813049f->enter($__internal_f04c40d92e0b01ac0aff47c2bd8bbd812e97fa728049e1a1533f0f2dd813049f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_f04c40d92e0b01ac0aff47c2bd8bbd812e97fa728049e1a1533f0f2dd813049f->leave($__internal_f04c40d92e0b01ac0aff47c2bd8bbd812e97fa728049e1a1533f0f2dd813049f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d270ea811a00097d6cc6714df4f0c9d3caf0235be0e03d1132b152f0213c59b1 = $this->env->getExtension("native_profiler");
        $__internal_d270ea811a00097d6cc6714df4f0c9d3caf0235be0e03d1132b152f0213c59b1->enter($__internal_d270ea811a00097d6cc6714df4f0c9d3caf0235be0e03d1132b152f0213c59b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Tickets:show.html.twig", 3)->display($context);
        
        $__internal_d270ea811a00097d6cc6714df4f0c9d3caf0235be0e03d1132b152f0213c59b1->leave($__internal_d270ea811a00097d6cc6714df4f0c9d3caf0235be0e03d1132b152f0213c59b1_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_98c763e3d578080576512140292e4627eac48a2096779d3524b45f4402cd09b4 = $this->env->getExtension("native_profiler");
        $__internal_98c763e3d578080576512140292e4627eac48a2096779d3524b45f4402cd09b4->enter($__internal_98c763e3d578080576512140292e4627eac48a2096779d3524b45f4402cd09b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_98c763e3d578080576512140292e4627eac48a2096779d3524b45f4402cd09b4->leave($__internal_98c763e3d578080576512140292e4627eac48a2096779d3524b45f4402cd09b4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b1661fa215ea6847fe6d4c2575dc42d213ec6c0f936faca6f8378392c95dc40 = $this->env->getExtension("native_profiler");
        $__internal_0b1661fa215ea6847fe6d4c2575dc42d213ec6c0f936faca6f8378392c95dc40->enter($__internal_0b1661fa215ea6847fe6d4c2575dc42d213ec6c0f936faca6f8378392c95dc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/infobulle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_0b1661fa215ea6847fe6d4c2575dc42d213ec6c0f936faca6f8378392c95dc40->leave($__internal_0b1661fa215ea6847fe6d4c2575dc42d213ec6c0f936faca6f8378392c95dc40_prof);

    }

    // line 9
    public function block_label($context, array $blocks = array())
    {
        $__internal_7094f67bd54cf7d6bb31ee4d78597199c41f7a2edaf246f191d073b779400824 = $this->env->getExtension("native_profiler");
        $__internal_7094f67bd54cf7d6bb31ee4d78597199c41f7a2edaf246f191d073b779400824->enter($__internal_7094f67bd54cf7d6bb31ee4d78597199c41f7a2edaf246f191d073b779400824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_7094f67bd54cf7d6bb31ee4d78597199c41f7a2edaf246f191d073b779400824->leave($__internal_7094f67bd54cf7d6bb31ee4d78597199c41f7a2edaf246f191d073b779400824_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66cec603fe788c23825621f478fcaa54d692b952b7f64dfd9f3d4cb2718356ce = $this->env->getExtension("native_profiler");
        $__internal_66cec603fe788c23825621f478fcaa54d692b952b7f64dfd9f3d4cb2718356ce->enter($__internal_66cec603fe788c23825621f478fcaa54d692b952b7f64dfd9f3d4cb2718356ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"body-content\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Tickets:showactions.html.twig", "BoAdvisorsBundle:Tickets:show.html.twig", 12)->display($context);
        // line 13
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 14
        $this->loadTemplate("BoAdvisorsBundle:Tickets:tbshow.html.twig", "BoAdvisorsBundle:Tickets:show.html.twig", 14)->display($context);
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
\t
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_note\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notes", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_tickets_resolve", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<textarea name=\"note\" id=\"note\" rows=\"4\" cols=\"76\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" id=\"btn_submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.continue", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_66cec603fe788c23825621f478fcaa54d692b952b7f64dfd9f3d4cb2718356ce->leave($__internal_66cec603fe788c23825621f478fcaa54d692b952b7f64dfd9f3d4cb2718356ce_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa26c9f0f2316f372e877e96e8a14abdea615996c647b3f6046fb51103561f9f = $this->env->getExtension("native_profiler");
        $__internal_fa26c9f0f2316f372e877e96e8a14abdea615996c647b3f6046fb51103561f9f->enter($__internal_fa26c9f0f2316f372e877e96e8a14abdea615996c647b3f6046fb51103561f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_fa26c9f0f2316f372e877e96e8a14abdea615996c647b3f6046fb51103561f9f->leave($__internal_fa26c9f0f2316f372e877e96e8a14abdea615996c647b3f6046fb51103561f9f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 69,  223 => 68,  211 => 67,  199 => 58,  191 => 53,  184 => 51,  164 => 34,  160 => 33,  156 => 32,  150 => 29,  144 => 26,  131 => 15,  129 => 14,  126 => 13,  124 => 12,  121 => 11,  115 => 10,  99 => 9,  90 => 7,  85 => 6,  79 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<link rel="stylesheet" href="{{ asset('css/infobulle.css') }}">*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdvisorsBundle:Tickets:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdvisorsBundle:Tickets:tbshow.html.twig"%}*/
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
/* 	*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_note" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.notes'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('dash_tickets_resolve', { 'id': ticket.id }) }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						<textarea name="note" id="note" rows="4" cols="76"></textarea>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" id="btn_submit" value="{{'action.continue'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
