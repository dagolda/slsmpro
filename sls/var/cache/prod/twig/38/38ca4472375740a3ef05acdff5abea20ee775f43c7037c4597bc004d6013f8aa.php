<?php

/* agenda/search.html.twig */
class __TwigTemplate_9659254c795525157f52c4df56f00a65e9a980bb075fe4e6646095c10e615c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "agenda/search.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70227a94087c05bfbfab026a2e228a0662c897f0d2405a149a213948256b7a2f = $this->env->getExtension("native_profiler");
        $__internal_70227a94087c05bfbfab026a2e228a0662c897f0d2405a149a213948256b7a2f->enter($__internal_70227a94087c05bfbfab026a2e228a0662c897f0d2405a149a213948256b7a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agenda/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70227a94087c05bfbfab026a2e228a0662c897f0d2405a149a213948256b7a2f->leave($__internal_70227a94087c05bfbfab026a2e228a0662c897f0d2405a149a213948256b7a2f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4039ac01f2e54b0167991f371d516e2458abb542ff1d8a48ef51a5c456ab2c87 = $this->env->getExtension("native_profiler");
        $__internal_4039ac01f2e54b0167991f371d516e2458abb542ff1d8a48ef51a5c456ab2c87->enter($__internal_4039ac01f2e54b0167991f371d516e2458abb542ff1d8a48ef51a5c456ab2c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_4039ac01f2e54b0167991f371d516e2458abb542ff1d8a48ef51a5c456ab2c87->leave($__internal_4039ac01f2e54b0167991f371d516e2458abb542ff1d8a48ef51a5c456ab2c87_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0b2b11f7b8c0978e53ea82f509a7620538622e9c86f2d409c5f89a5b4996ec12 = $this->env->getExtension("native_profiler");
        $__internal_0b2b11f7b8c0978e53ea82f509a7620538622e9c86f2d409c5f89a5b4996ec12->enter($__internal_0b2b11f7b8c0978e53ea82f509a7620538622e9c86f2d409c5f89a5b4996ec12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "agenda/search.html.twig", 3)->display($context);
        
        $__internal_0b2b11f7b8c0978e53ea82f509a7620538622e9c86f2d409c5f89a5b4996ec12->leave($__internal_0b2b11f7b8c0978e53ea82f509a7620538622e9c86f2d409c5f89a5b4996ec12_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fc383b00f34cb53ab624c5bdcb51bbb96980a5e193ac36dd6a8c8c558b30e50e = $this->env->getExtension("native_profiler");
        $__internal_fc383b00f34cb53ab624c5bdcb51bbb96980a5e193ac36dd6a8c8c558b30e50e->enter($__internal_fc383b00f34cb53ab624c5bdcb51bbb96980a5e193ac36dd6a8c8c558b30e50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_fc383b00f34cb53ab624c5bdcb51bbb96980a5e193ac36dd6a8c8c558b30e50e->leave($__internal_fc383b00f34cb53ab624c5bdcb51bbb96980a5e193ac36dd6a8c8c558b30e50e_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_e2ea17abf905c17bd851715e10aa03dced05061dc12d2a91e5cd0864a060fd0c = $this->env->getExtension("native_profiler");
        $__internal_e2ea17abf905c17bd851715e10aa03dced05061dc12d2a91e5cd0864a060fd0c->enter($__internal_e2ea17abf905c17bd851715e10aa03dced05061dc12d2a91e5cd0864a060fd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_e2ea17abf905c17bd851715e10aa03dced05061dc12d2a91e5cd0864a060fd0c->leave($__internal_e2ea17abf905c17bd851715e10aa03dced05061dc12d2a91e5cd0864a060fd0c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a622d7c87fb15a17b8abc7f83b89acc28aee286ec56c136a00af54ff4e2ec75 = $this->env->getExtension("native_profiler");
        $__internal_4a622d7c87fb15a17b8abc7f83b89acc28aee286ec56c136a00af54ff4e2ec75->enter($__internal_4a622d7c87fb15a17b8abc7f83b89acc28aee286ec56c136a00af54ff4e2ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Agenda:searchaction.html.twig", "agenda/search.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div id=\"content-liste\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Agenda:tbliste2.html.twig", "agenda/search.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>

\t<!-- begin avanced search form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"advanced_search\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advanced.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("agenda_advanced_search");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Agenda:advancedsearch.html.twig", "agenda/search.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.validate", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end send user login form by modal dialog-->

\t";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4a622d7c87fb15a17b8abc7f83b89acc28aee286ec56c136a00af54ff4e2ec75->leave($__internal_4a622d7c87fb15a17b8abc7f83b89acc28aee286ec56c136a00af54ff4e2ec75_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3adb993e2d5630535cb46f1ae9a52f743ed3ff4ceac3d22dd19a33600d0b2d71 = $this->env->getExtension("native_profiler");
        $__internal_3adb993e2d5630535cb46f1ae9a52f743ed3ff4ceac3d22dd19a33600d0b2d71->enter($__internal_3adb993e2d5630535cb46f1ae9a52f743ed3ff4ceac3d22dd19a33600d0b2d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_3adb993e2d5630535cb46f1ae9a52f743ed3ff4ceac3d22dd19a33600d0b2d71->leave($__internal_3adb993e2d5630535cb46f1ae9a52f743ed3ff4ceac3d22dd19a33600d0b2d71_prof);

    }

    public function getTemplateName()
    {
        return "agenda/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 44,  171 => 43,  166 => 42,  154 => 41,  141 => 31,  137 => 29,  135 => 28,  130 => 26,  125 => 24,  110 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'label.schedule'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'label.schedule'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Agenda:searchaction.html.twig"%}*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Agenda:tbliste2.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- begin avanced search form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="advanced_search" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.advanced.search'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('agenda_advanced_search')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{%include "BoAdminBundle:Agenda:advancedsearch.html.twig"%}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.validate'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end send user login form by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
