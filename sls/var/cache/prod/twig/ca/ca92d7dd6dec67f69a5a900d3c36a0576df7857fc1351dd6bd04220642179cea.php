<?php

/* BoHomeBundle:Tickets:index.html.twig */
class __TwigTemplate_26deb8a232b640ebedd76a9aa77e8ee1a17c03f763756d15385743e28ce0f3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Tickets:index.html.twig", 1);
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
        $__internal_965fd1631fa39974a2b2978d04009eda5075464dd944bbbf1423b36ad953bf80 = $this->env->getExtension("native_profiler");
        $__internal_965fd1631fa39974a2b2978d04009eda5075464dd944bbbf1423b36ad953bf80->enter($__internal_965fd1631fa39974a2b2978d04009eda5075464dd944bbbf1423b36ad953bf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tickets:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965fd1631fa39974a2b2978d04009eda5075464dd944bbbf1423b36ad953bf80->leave($__internal_965fd1631fa39974a2b2978d04009eda5075464dd944bbbf1423b36ad953bf80_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9ec45894f0cb520c2f376a7c0f4918725e3209f07538635059437ac42e2cabe = $this->env->getExtension("native_profiler");
        $__internal_d9ec45894f0cb520c2f376a7c0f4918725e3209f07538635059437ac42e2cabe->enter($__internal_d9ec45894f0cb520c2f376a7c0f4918725e3209f07538635059437ac42e2cabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d9ec45894f0cb520c2f376a7c0f4918725e3209f07538635059437ac42e2cabe->leave($__internal_d9ec45894f0cb520c2f376a7c0f4918725e3209f07538635059437ac42e2cabe_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9e06d65c9250d8f3a6313fc7cc93946ec2e913c2c1bb85a38bfa3fcb08362061 = $this->env->getExtension("native_profiler");
        $__internal_9e06d65c9250d8f3a6313fc7cc93946ec2e913c2c1bb85a38bfa3fcb08362061->enter($__internal_9e06d65c9250d8f3a6313fc7cc93946ec2e913c2c1bb85a38bfa3fcb08362061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:request.html.twig", "BoHomeBundle:Tickets:index.html.twig", 3)->display($context);
        
        $__internal_9e06d65c9250d8f3a6313fc7cc93946ec2e913c2c1bb85a38bfa3fcb08362061->leave($__internal_9e06d65c9250d8f3a6313fc7cc93946ec2e913c2c1bb85a38bfa3fcb08362061_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f28e8ce7e82c221eb58478771323c040754cb00e0ce0b99a3a7d9e4afa9db569 = $this->env->getExtension("native_profiler");
        $__internal_f28e8ce7e82c221eb58478771323c040754cb00e0ce0b99a3a7d9e4afa9db569->enter($__internal_f28e8ce7e82c221eb58478771323c040754cb00e0ce0b99a3a7d9e4afa9db569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if ((array_key_exists("student", $context) && ((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")) != null))) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Tickets:index.html.twig", 4)->display($context);
        }
        
        $__internal_f28e8ce7e82c221eb58478771323c040754cb00e0ce0b99a3a7d9e4afa9db569->leave($__internal_f28e8ce7e82c221eb58478771323c040754cb00e0ce0b99a3a7d9e4afa9db569_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_653e8c0ee1c7dba24f2defdd4b79a37449bcea7673b410196ee583cbb59f263e = $this->env->getExtension("native_profiler");
        $__internal_653e8c0ee1c7dba24f2defdd4b79a37449bcea7673b410196ee583cbb59f263e->enter($__internal_653e8c0ee1c7dba24f2defdd4b79a37449bcea7673b410196ee583cbb59f263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_653e8c0ee1c7dba24f2defdd4b79a37449bcea7673b410196ee583cbb59f263e->leave($__internal_653e8c0ee1c7dba24f2defdd4b79a37449bcea7673b410196ee583cbb59f263e_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8e175d21668dcc86b20c680a99499a801ff0a3cb1e86a53e53adca7917cd3b0d = $this->env->getExtension("native_profiler");
        $__internal_8e175d21668dcc86b20c680a99499a801ff0a3cb1e86a53e53adca7917cd3b0d->enter($__internal_8e175d21668dcc86b20c680a99499a801ff0a3cb1e86a53e53adca7917cd3b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Tickets:actions.html.twig", "BoHomeBundle:Tickets:index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_8e175d21668dcc86b20c680a99499a801ff0a3cb1e86a53e53adca7917cd3b0d->leave($__internal_8e175d21668dcc86b20c680a99499a801ff0a3cb1e86a53e53adca7917cd3b0d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfdfdfc5b9a840ce0d823face1002b8b0ee05384579d0b6bebe90816db231cc7 = $this->env->getExtension("native_profiler");
        $__internal_cfdfdfc5b9a840ce0d823face1002b8b0ee05384579d0b6bebe90816db231cc7->enter($__internal_cfdfdfc5b9a840ce0d823face1002b8b0ee05384579d0b6bebe90816db231cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 11
        $this->loadTemplate("BoHomeBundle:Tickets:tbliste.html.twig", "BoHomeBundle:Tickets:index.html.twig", 11)->display($context);
        // line 12
        echo "\t</div>
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"add_ticket\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addticket", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("home_tickets_new");
        echo "\" enctype=\"multipart/form-data\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 27
        $this->loadTemplate("BoHomeBundle:Tickets:newform.html.twig", "BoHomeBundle:Tickets:index.html.twig", 27)->display($context);
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
        
        $__internal_cfdfdfc5b9a840ce0d823face1002b8b0ee05384579d0b6bebe90816db231cc7->leave($__internal_cfdfdfc5b9a840ce0d823face1002b8b0ee05384579d0b6bebe90816db231cc7_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_081dc95a86d152468a03fc3cf8e2ef538b881ddb146477ca79803c89f635db1a = $this->env->getExtension("native_profiler");
        $__internal_081dc95a86d152468a03fc3cf8e2ef538b881ddb146477ca79803c89f635db1a->enter($__internal_081dc95a86d152468a03fc3cf8e2ef538b881ddb146477ca79803c89f635db1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_081dc95a86d152468a03fc3cf8e2ef538b881ddb146477ca79803c89f635db1a->leave($__internal_081dc95a86d152468a03fc3cf8e2ef538b881ddb146477ca79803c89f635db1a_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tickets:index.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if student is defined and student!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Tickets:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoHomeBundle:Tickets:tbliste.html.twig"%}*/
/* 	</div>*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="add_ticket" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'label.addticket'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('home_tickets_new') }}" enctype="multipart/form-data" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoHomeBundle:Tickets:newform.html.twig"%}*/
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
