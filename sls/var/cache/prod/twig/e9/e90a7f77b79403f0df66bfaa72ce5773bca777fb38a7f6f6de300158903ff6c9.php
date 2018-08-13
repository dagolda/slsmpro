<?php

/* profil/index.html.twig */
class __TwigTemplate_adff7929f61685ad00d1866cd77a9c50ba351a7bea7c55e2b7ceda43cf2c7773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b13d5062ee31828351e6d42ade29454a00a04badd66e7bbb611e5320ab49f648 = $this->env->getExtension("native_profiler");
        $__internal_b13d5062ee31828351e6d42ade29454a00a04badd66e7bbb611e5320ab49f648->enter($__internal_b13d5062ee31828351e6d42ade29454a00a04badd66e7bbb611e5320ab49f648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b13d5062ee31828351e6d42ade29454a00a04badd66e7bbb611e5320ab49f648->leave($__internal_b13d5062ee31828351e6d42ade29454a00a04badd66e7bbb611e5320ab49f648_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8786b8be8ace352bbb7016c755592670f4eb35f73bf5ff87b34df3ba94aea76 = $this->env->getExtension("native_profiler");
        $__internal_e8786b8be8ace352bbb7016c755592670f4eb35f73bf5ff87b34df3ba94aea76->enter($__internal_e8786b8be8ace352bbb7016c755592670f4eb35f73bf5ff87b34df3ba94aea76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.profile", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e8786b8be8ace352bbb7016c755592670f4eb35f73bf5ff87b34df3ba94aea76->leave($__internal_e8786b8be8ace352bbb7016c755592670f4eb35f73bf5ff87b34df3ba94aea76_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b605f3952ee193ef1c5438de1b957f818525326c10dbc02edc82b04740570864 = $this->env->getExtension("native_profiler");
        $__internal_b605f3952ee193ef1c5438de1b957f818525326c10dbc02edc82b04740570864->enter($__internal_b605f3952ee193ef1c5438de1b957f818525326c10dbc02edc82b04740570864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "profil/index.html.twig", 3)->display($context);
        
        $__internal_b605f3952ee193ef1c5438de1b957f818525326c10dbc02edc82b04740570864->leave($__internal_b605f3952ee193ef1c5438de1b957f818525326c10dbc02edc82b04740570864_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bbf97d157de6193eb9f463441e53a0828e2cbf24577ab3088031097417cbe6d8 = $this->env->getExtension("native_profiler");
        $__internal_bbf97d157de6193eb9f463441e53a0828e2cbf24577ab3088031097417cbe6d8->enter($__internal_bbf97d157de6193eb9f463441e53a0828e2cbf24577ab3088031097417cbe6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_bbf97d157de6193eb9f463441e53a0828e2cbf24577ab3088031097417cbe6d8->leave($__internal_bbf97d157de6193eb9f463441e53a0828e2cbf24577ab3088031097417cbe6d8_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_4773d9a601c42d9279be10a9cf8f278c835b51669386db2c84f2581cb173fb87 = $this->env->getExtension("native_profiler");
        $__internal_4773d9a601c42d9279be10a9cf8f278c835b51669386db2c84f2581cb173fb87->enter($__internal_4773d9a601c42d9279be10a9cf8f278c835b51669386db2c84f2581cb173fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.profile", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4773d9a601c42d9279be10a9cf8f278c835b51669386db2c84f2581cb173fb87->leave($__internal_4773d9a601c42d9279be10a9cf8f278c835b51669386db2c84f2581cb173fb87_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5ecd14b2048f79284aa84846736782de2da9ed2622160f359f8998c330af4c1f = $this->env->getExtension("native_profiler");
        $__internal_5ecd14b2048f79284aa84846736782de2da9ed2622160f359f8998c330af4c1f->enter($__internal_5ecd14b2048f79284aa84846736782de2da9ed2622160f359f8998c330af4c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Profil:actions.html.twig", "profil/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_5ecd14b2048f79284aa84846736782de2da9ed2622160f359f8998c330af4c1f->leave($__internal_5ecd14b2048f79284aa84846736782de2da9ed2622160f359f8998c330af4c1f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_24628c25e7b058ed8b3e4a201091ad50435f130e0eb75e74c4dbc54927cf0f01 = $this->env->getExtension("native_profiler");
        $__internal_24628c25e7b058ed8b3e4a201091ad50435f130e0eb75e74c4dbc54927cf0f01->enter($__internal_24628c25e7b058ed8b3e4a201091ad50435f130e0eb75e74c4dbc54927cf0f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Profil:tbliste.html.twig", "profil/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_profil\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.profil", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("profil_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Profil:newform.html.twig", "profil/index.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
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
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_24628c25e7b058ed8b3e4a201091ad50435f130e0eb75e74c4dbc54927cf0f01->leave($__internal_24628c25e7b058ed8b3e4a201091ad50435f130e0eb75e74c4dbc54927cf0f01_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c76d7508733e207ee913fd86eddc6243048d20eca613d1bcad0da7dac8008ba = $this->env->getExtension("native_profiler");
        $__internal_2c76d7508733e207ee913fd86eddc6243048d20eca613d1bcad0da7dac8008ba->enter($__internal_2c76d7508733e207ee913fd86eddc6243048d20eca613d1bcad0da7dac8008ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_2c76d7508733e207ee913fd86eddc6243048d20eca613d1bcad0da7dac8008ba->leave($__internal_2c76d7508733e207ee913fd86eddc6243048d20eca613d1bcad0da7dac8008ba_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 42,  184 => 41,  172 => 40,  161 => 32,  154 => 29,  152 => 28,  148 => 27,  143 => 25,  136 => 23,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.profile'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.profile'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Profil:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Profil:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_profil" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.profil'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('profil_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Profil:newform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
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
