<?php

/* tickets/show.html.twig */
class __TwigTemplate_ba955fefe958040a7c4dd08366d8629050045518aa58b0988f7b0aa7d31fec21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tickets/show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_6d0e63fcb25fcf0247225db734c87f1c1c6d11d3f036519c52f0bc3604e8b679 = $this->env->getExtension("native_profiler");
        $__internal_6d0e63fcb25fcf0247225db734c87f1c1c6d11d3f036519c52f0bc3604e8b679->enter($__internal_6d0e63fcb25fcf0247225db734c87f1c1c6d11d3f036519c52f0bc3604e8b679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tickets/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0e63fcb25fcf0247225db734c87f1c1c6d11d3f036519c52f0bc3604e8b679->leave($__internal_6d0e63fcb25fcf0247225db734c87f1c1c6d11d3f036519c52f0bc3604e8b679_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bccc640994b4c9947d98891bdcabc80b2c1f306be873675657bafbcc9018656b = $this->env->getExtension("native_profiler");
        $__internal_bccc640994b4c9947d98891bdcabc80b2c1f306be873675657bafbcc9018656b->enter($__internal_bccc640994b4c9947d98891bdcabc80b2c1f306be873675657bafbcc9018656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/infobulle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_bccc640994b4c9947d98891bdcabc80b2c1f306be873675657bafbcc9018656b->leave($__internal_bccc640994b4c9947d98891bdcabc80b2c1f306be873675657bafbcc9018656b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ff40c385d8fae60c97bc6b3ca98a6dec697ec8874e38d245f73d9e54d235340 = $this->env->getExtension("native_profiler");
        $__internal_7ff40c385d8fae60c97bc6b3ca98a6dec697ec8874e38d245f73d9e54d235340->enter($__internal_7ff40c385d8fae60c97bc6b3ca98a6dec697ec8874e38d245f73d9e54d235340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_7ff40c385d8fae60c97bc6b3ca98a6dec697ec8874e38d245f73d9e54d235340->leave($__internal_7ff40c385d8fae60c97bc6b3ca98a6dec697ec8874e38d245f73d9e54d235340_prof);

    }

    // line 7
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e84ccb48060404407c8987cfc362602785d168db690f7721dc1119610074535d = $this->env->getExtension("native_profiler");
        $__internal_e84ccb48060404407c8987cfc362602785d168db690f7721dc1119610074535d->enter($__internal_e84ccb48060404407c8987cfc362602785d168db690f7721dc1119610074535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "tickets/show.html.twig", 7)->display($context);
        
        $__internal_e84ccb48060404407c8987cfc362602785d168db690f7721dc1119610074535d->leave($__internal_e84ccb48060404407c8987cfc362602785d168db690f7721dc1119610074535d_prof);

    }

    // line 8
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a4b9f4a38a19093fd1c168c1b62bb1bd4b2f0899849e3acd623bad4eb2e6a2be = $this->env->getExtension("native_profiler");
        $__internal_a4b9f4a38a19093fd1c168c1b62bb1bd4b2f0899849e3acd623bad4eb2e6a2be->enter($__internal_a4b9f4a38a19093fd1c168c1b62bb1bd4b2f0899849e3acd623bad4eb2e6a2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_a4b9f4a38a19093fd1c168c1b62bb1bd4b2f0899849e3acd623bad4eb2e6a2be->leave($__internal_a4b9f4a38a19093fd1c168c1b62bb1bd4b2f0899849e3acd623bad4eb2e6a2be_prof);

    }

    // line 9
    public function block_label($context, array $blocks = array())
    {
        $__internal_c9be513f6728c2f87011064b5181d4d9a658a39edb6ada1918ec6fb695a9a6b3 = $this->env->getExtension("native_profiler");
        $__internal_c9be513f6728c2f87011064b5181d4d9a658a39edb6ada1918ec6fb695a9a6b3->enter($__internal_c9be513f6728c2f87011064b5181d4d9a658a39edb6ada1918ec6fb695a9a6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c9be513f6728c2f87011064b5181d4d9a658a39edb6ada1918ec6fb695a9a6b3->leave($__internal_c9be513f6728c2f87011064b5181d4d9a658a39edb6ada1918ec6fb695a9a6b3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_55c0de0e2c1305bde246d029120620cce44071d9b75c0e5c88e137a926a774d5 = $this->env->getExtension("native_profiler");
        $__internal_55c0de0e2c1305bde246d029120620cce44071d9b75c0e5c88e137a926a774d5->enter($__internal_55c0de0e2c1305bde246d029120620cce44071d9b75c0e5c88e137a926a774d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"body-content\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Tickets:showactions.html.twig", "tickets/show.html.twig", 12)->display($context);
        // line 13
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 14
        $this->loadTemplate("BoAdminBundle:Tickets:show.html.twig", "tickets/show.html.twig", 14)->display($context);
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
\t";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_55c0de0e2c1305bde246d029120620cce44071d9b75c0e5c88e137a926a774d5->leave($__internal_55c0de0e2c1305bde246d029120620cce44071d9b75c0e5c88e137a926a774d5_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3624cb67d36c3f55be0f765ccbfc06575fa9eec26147cca1f81e5d14e3a2ed9 = $this->env->getExtension("native_profiler");
        $__internal_d3624cb67d36c3f55be0f765ccbfc06575fa9eec26147cca1f81e5d14e3a2ed9->enter($__internal_d3624cb67d36c3f55be0f765ccbfc06575fa9eec26147cca1f81e5d14e3a2ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d3624cb67d36c3f55be0f765ccbfc06575fa9eec26147cca1f81e5d14e3a2ed9->leave($__internal_d3624cb67d36c3f55be0f765ccbfc06575fa9eec26147cca1f81e5d14e3a2ed9_prof);

    }

    public function getTemplateName()
    {
        return "tickets/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 43,  186 => 42,  174 => 41,  164 => 34,  160 => 33,  156 => 32,  150 => 29,  144 => 26,  131 => 15,  129 => 14,  126 => 13,  124 => 12,  121 => 11,  115 => 10,  99 => 9,  88 => 8,  76 => 7,  60 => 6,  51 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<link rel="stylesheet" href="{{ asset('css/infobulle.css') }}">*/
/* {% endblock %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Tickets:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Tickets:show.html.twig"%}*/
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
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
