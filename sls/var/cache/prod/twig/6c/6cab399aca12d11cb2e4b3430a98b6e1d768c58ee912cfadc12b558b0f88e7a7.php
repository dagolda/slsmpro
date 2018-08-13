<?php

/* securitycote/show.html.twig */
class __TwigTemplate_bbd8f69bd66f2fe6b37a0b6dc6d81867324fa8a54b66669ee37e0ce9df1acd2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "securitycote/show.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5a46cbce6f939c8ce9df70134c4bdc14042242e2ee13b02133737064789d4db6 = $this->env->getExtension("native_profiler");
        $__internal_5a46cbce6f939c8ce9df70134c4bdc14042242e2ee13b02133737064789d4db6->enter($__internal_5a46cbce6f939c8ce9df70134c4bdc14042242e2ee13b02133737064789d4db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "securitycote/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a46cbce6f939c8ce9df70134c4bdc14042242e2ee13b02133737064789d4db6->leave($__internal_5a46cbce6f939c8ce9df70134c4bdc14042242e2ee13b02133737064789d4db6_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_8b30522daed04c9bd2bf367b2b77db7d034737ea0b1a41ddb1aa025bef33ff30 = $this->env->getExtension("native_profiler");
        $__internal_8b30522daed04c9bd2bf367b2b77db7d034737ea0b1a41ddb1aa025bef33ff30->enter($__internal_8b30522daed04c9bd2bf367b2b77db7d034737ea0b1a41ddb1aa025bef33ff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "securitycote/show.html.twig", 2)->display($context);
        
        $__internal_8b30522daed04c9bd2bf367b2b77db7d034737ea0b1a41ddb1aa025bef33ff30->leave($__internal_8b30522daed04c9bd2bf367b2b77db7d034737ea0b1a41ddb1aa025bef33ff30_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_19d979f8c6fdab04e168ca16068c276c5d83ebaa8956d4fde650947ef7e77c22 = $this->env->getExtension("native_profiler");
        $__internal_19d979f8c6fdab04e168ca16068c276c5d83ebaa8956d4fde650947ef7e77c22->enter($__internal_19d979f8c6fdab04e168ca16068c276c5d83ebaa8956d4fde650947ef7e77c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_19d979f8c6fdab04e168ca16068c276c5d83ebaa8956d4fde650947ef7e77c22->leave($__internal_19d979f8c6fdab04e168ca16068c276c5d83ebaa8956d4fde650947ef7e77c22_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_128a4409644bbaaf2ccdc25bde17a675c298e756cd140f2bf60c985fcff3da99 = $this->env->getExtension("native_profiler");
        $__internal_128a4409644bbaaf2ccdc25bde17a675c298e756cd140f2bf60c985fcff3da99->enter($__internal_128a4409644bbaaf2ccdc25bde17a675c298e756cd140f2bf60c985fcff3da99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.clearance", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_128a4409644bbaaf2ccdc25bde17a675c298e756cd140f2bf60c985fcff3da99->leave($__internal_128a4409644bbaaf2ccdc25bde17a675c298e756cd140f2bf60c985fcff3da99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a99ada4cb88790cf3ec5657f531a7b44a38c13433b56f448a2df612c73c3aa93 = $this->env->getExtension("native_profiler");
        $__internal_a99ada4cb88790cf3ec5657f531a7b44a38c13433b56f448a2df612c73c3aa93->enter($__internal_a99ada4cb88790cf3ec5657f531a7b44a38c13433b56f448a2df612c73c3aa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t";
        // line 7
        $this->loadTemplate("BoAdminBundle:Securitycote:showactions.html.twig", "securitycote/show.html.twig", 7)->display($context);
        // line 8
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Securitycote:show.html.twig", "securitycote/show.html.twig", 9)->display($context);
        // line 10
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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a99ada4cb88790cf3ec5657f531a7b44a38c13433b56f448a2df612c73c3aa93->leave($__internal_a99ada4cb88790cf3ec5657f531a7b44a38c13433b56f448a2df612c73c3aa93_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f3aee756fb5a3690fcbb1032b8784890ea7365bb1738ee5a9fede30d4b20c07 = $this->env->getExtension("native_profiler");
        $__internal_8f3aee756fb5a3690fcbb1032b8784890ea7365bb1738ee5a9fede30d4b20c07->enter($__internal_8f3aee756fb5a3690fcbb1032b8784890ea7365bb1738ee5a9fede30d4b20c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_8f3aee756fb5a3690fcbb1032b8784890ea7365bb1738ee5a9fede30d4b20c07->leave($__internal_8f3aee756fb5a3690fcbb1032b8784890ea7365bb1738ee5a9fede30d4b20c07_prof);

    }

    public function getTemplateName()
    {
        return "securitycote/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 39,  149 => 38,  137 => 37,  126 => 29,  122 => 28,  118 => 27,  112 => 24,  106 => 21,  93 => 10,  91 => 9,  88 => 8,  86 => 7,  83 => 6,  77 => 5,  61 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.clearance'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Securitycote:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Securitycote:show.html.twig"%}*/
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
