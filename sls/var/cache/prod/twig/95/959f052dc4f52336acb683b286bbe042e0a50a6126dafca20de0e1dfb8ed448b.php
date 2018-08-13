<?php

/* local/edit.html.twig */
class __TwigTemplate_67ff633930f566ecacfd0e23c16e5df1589909f94b95d334a03864cb4209ab23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "local/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_346db1f768b11934edbf09c5078c4075985aeaab59eeed85a2c330b4ca7886fa = $this->env->getExtension("native_profiler");
        $__internal_346db1f768b11934edbf09c5078c4075985aeaab59eeed85a2c330b4ca7886fa->enter($__internal_346db1f768b11934edbf09c5078c4075985aeaab59eeed85a2c330b4ca7886fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "local/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_346db1f768b11934edbf09c5078c4075985aeaab59eeed85a2c330b4ca7886fa->leave($__internal_346db1f768b11934edbf09c5078c4075985aeaab59eeed85a2c330b4ca7886fa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d1307d55f20ffc162b7f8e1a2cdfa6e6ae091255e6a3ec11415fc23daf5b843 = $this->env->getExtension("native_profiler");
        $__internal_4d1307d55f20ffc162b7f8e1a2cdfa6e6ae091255e6a3ec11415fc23daf5b843->enter($__internal_4d1307d55f20ffc162b7f8e1a2cdfa6e6ae091255e6a3ec11415fc23daf5b843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_4d1307d55f20ffc162b7f8e1a2cdfa6e6ae091255e6a3ec11415fc23daf5b843->leave($__internal_4d1307d55f20ffc162b7f8e1a2cdfa6e6ae091255e6a3ec11415fc23daf5b843_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_bef50eec96f156c25f183b08d6489857ffa8b16f21e3f355d024da29b6e55217 = $this->env->getExtension("native_profiler");
        $__internal_bef50eec96f156c25f183b08d6489857ffa8b16f21e3f355d024da29b6e55217->enter($__internal_bef50eec96f156c25f183b08d6489857ffa8b16f21e3f355d024da29b6e55217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "local/edit.html.twig", 3)->display($context);
        
        $__internal_bef50eec96f156c25f183b08d6489857ffa8b16f21e3f355d024da29b6e55217->leave($__internal_bef50eec96f156c25f183b08d6489857ffa8b16f21e3f355d024da29b6e55217_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_082053bfe8c56dd5725a064c5054542ab78309068991f9701b3101db76d27697 = $this->env->getExtension("native_profiler");
        $__internal_082053bfe8c56dd5725a064c5054542ab78309068991f9701b3101db76d27697->enter($__internal_082053bfe8c56dd5725a064c5054542ab78309068991f9701b3101db76d27697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_082053bfe8c56dd5725a064c5054542ab78309068991f9701b3101db76d27697->leave($__internal_082053bfe8c56dd5725a064c5054542ab78309068991f9701b3101db76d27697_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_74318e9df2ced7ca903d4f443cebef59bed080ec650e754e6f5c383bfa9c06d3 = $this->env->getExtension("native_profiler");
        $__internal_74318e9df2ced7ca903d4f443cebef59bed080ec650e754e6f5c383bfa9c06d3->enter($__internal_74318e9df2ced7ca903d4f443cebef59bed080ec650e754e6f5c383bfa9c06d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_74318e9df2ced7ca903d4f443cebef59bed080ec650e754e6f5c383bfa9c06d3->leave($__internal_74318e9df2ced7ca903d4f443cebef59bed080ec650e754e6f5c383bfa9c06d3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c5c11ec85138f0da6d8edd6254c482652e8c7f3a4bab67eebabfdb219f72e19 = $this->env->getExtension("native_profiler");
        $__internal_1c5c11ec85138f0da6d8edd6254c482652e8c7f3a4bab67eebabfdb219f72e19->enter($__internal_1c5c11ec85138f0da6d8edd6254c482652e8c7f3a4bab67eebabfdb219f72e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_edit", array("id" => $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Local:editactions.html.twig", "local/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Local:editform.html.twig", "local/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>\t
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_1c5c11ec85138f0da6d8edd6254c482652e8c7f3a4bab67eebabfdb219f72e19->leave($__internal_1c5c11ec85138f0da6d8edd6254c482652e8c7f3a4bab67eebabfdb219f72e19_prof);

    }

    public function getTemplateName()
    {
        return "local/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('local_edit',{'id':local.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Local:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Local:editform.html.twig"%}*/
/* 			</div>	*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
