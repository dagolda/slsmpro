<?php

/* company/new.html.twig */
class __TwigTemplate_24499cb25300243eed074bf6305ae895f97b79a1045ba97889ad6540ae770fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/new.html.twig", 1);
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
        $__internal_f1275647a940c1730264821d2b6541d812d203b87d3db63e8413fd42b0887515 = $this->env->getExtension("native_profiler");
        $__internal_f1275647a940c1730264821d2b6541d812d203b87d3db63e8413fd42b0887515->enter($__internal_f1275647a940c1730264821d2b6541d812d203b87d3db63e8413fd42b0887515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1275647a940c1730264821d2b6541d812d203b87d3db63e8413fd42b0887515->leave($__internal_f1275647a940c1730264821d2b6541d812d203b87d3db63e8413fd42b0887515_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_edabf4a37de2ab170359f6cf0437f32bddb618bb7913ab7d69b3e4ee49a14997 = $this->env->getExtension("native_profiler");
        $__internal_edabf4a37de2ab170359f6cf0437f32bddb618bb7913ab7d69b3e4ee49a14997->enter($__internal_edabf4a37de2ab170359f6cf0437f32bddb618bb7913ab7d69b3e4ee49a14997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_edabf4a37de2ab170359f6cf0437f32bddb618bb7913ab7d69b3e4ee49a14997->leave($__internal_edabf4a37de2ab170359f6cf0437f32bddb618bb7913ab7d69b3e4ee49a14997_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b8f0d0589a7e522d3083a2c663b153e02caa40d1df3ccf6107a6e881a00da0e2 = $this->env->getExtension("native_profiler");
        $__internal_b8f0d0589a7e522d3083a2c663b153e02caa40d1df3ccf6107a6e881a00da0e2->enter($__internal_b8f0d0589a7e522d3083a2c663b153e02caa40d1df3ccf6107a6e881a00da0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "company/new.html.twig", 3)->display($context);
        
        $__internal_b8f0d0589a7e522d3083a2c663b153e02caa40d1df3ccf6107a6e881a00da0e2->leave($__internal_b8f0d0589a7e522d3083a2c663b153e02caa40d1df3ccf6107a6e881a00da0e2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_94aa9a11bc6d02796781772c5abc890bcbee0cbd561b4e5f2b37d4bc38bc7753 = $this->env->getExtension("native_profiler");
        $__internal_94aa9a11bc6d02796781772c5abc890bcbee0cbd561b4e5f2b37d4bc38bc7753->enter($__internal_94aa9a11bc6d02796781772c5abc890bcbee0cbd561b4e5f2b37d4bc38bc7753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_94aa9a11bc6d02796781772c5abc890bcbee0cbd561b4e5f2b37d4bc38bc7753->leave($__internal_94aa9a11bc6d02796781772c5abc890bcbee0cbd561b4e5f2b37d4bc38bc7753_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_1686c0b2a3b529bdaa30dfa509be88dd1e786213a0fe127cc5c7abf7c5f55829 = $this->env->getExtension("native_profiler");
        $__internal_1686c0b2a3b529bdaa30dfa509be88dd1e786213a0fe127cc5c7abf7c5f55829->enter($__internal_1686c0b2a3b529bdaa30dfa509be88dd1e786213a0fe127cc5c7abf7c5f55829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.company", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_1686c0b2a3b529bdaa30dfa509be88dd1e786213a0fe127cc5c7abf7c5f55829->leave($__internal_1686c0b2a3b529bdaa30dfa509be88dd1e786213a0fe127cc5c7abf7c5f55829_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c1609139ae9ac574e5a93fe8b754ad006c61006d86b51bf2a68852fde3d3574 = $this->env->getExtension("native_profiler");
        $__internal_5c1609139ae9ac574e5a93fe8b754ad006c61006d86b51bf2a68852fde3d3574->enter($__internal_5c1609139ae9ac574e5a93fe8b754ad006c61006d86b51bf2a68852fde3d3574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("company_new");
        echo "\" method=\"post\" class=\"style\" id=\"company_form\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Company:newactions.html.twig", "company/new.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Company:editform.html.twig", "company/new.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5c1609139ae9ac574e5a93fe8b754ad006c61006d86b51bf2a68852fde3d3574->leave($__internal_5c1609139ae9ac574e5a93fe8b754ad006c61006d86b51bf2a68852fde3d3574_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57ed4784d0fd656d8125c90a571a3f38b8952edc724aaa062858bdddfa7a8348 = $this->env->getExtension("native_profiler");
        $__internal_57ed4784d0fd656d8125c90a571a3f38b8952edc724aaa062858bdddfa7a8348->enter($__internal_57ed4784d0fd656d8125c90a571a3f38b8952edc724aaa062858bdddfa7a8348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>
\t\t\t\$(\"#company_form\").submit(function(){
\t\t\t\tvar str=\$(\".account option:selected\");
\t\t\t\taccount=str.text();
\t\t\t\tif(account==\"\"){
\t\t\t\t\talert(\"Vide\");
\t\t\t\t\treturn false;\t\t\t\t
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_57ed4784d0fd656d8125c90a571a3f38b8952edc724aaa062858bdddfa7a8348->leave($__internal_57ed4784d0fd656d8125c90a571a3f38b8952edc724aaa062858bdddfa7a8348_prof);

    }

    public function getTemplateName()
    {
        return "company/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 30,  152 => 29,  139 => 18,  127 => 17,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  111 => 10,  107 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.company'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}	*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.company'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('company_new') }}" method="post" class="style" id="company_form">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Company:newactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Company:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#company_form").submit(function(){*/
/* 				var str=$(".account option:selected");*/
/* 				account=str.text();*/
/* 				if(account==""){*/
/* 					alert("Vide");*/
/* 					return false;				*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
