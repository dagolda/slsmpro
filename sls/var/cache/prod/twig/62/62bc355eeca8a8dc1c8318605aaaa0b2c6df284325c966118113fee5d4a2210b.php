<?php

/* tadmin/edit.html.twig */
class __TwigTemplate_0a462e9add229c6b4cdd48c36fe572579dd61af71bcce26ce148b5dc878891e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tadmin/edit.html.twig", 1);
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
        $__internal_4cdb9db08a095cbf19e427a103082ee8e85ff3c41622e8128833da0772ca46d3 = $this->env->getExtension("native_profiler");
        $__internal_4cdb9db08a095cbf19e427a103082ee8e85ff3c41622e8128833da0772ca46d3->enter($__internal_4cdb9db08a095cbf19e427a103082ee8e85ff3c41622e8128833da0772ca46d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tadmin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cdb9db08a095cbf19e427a103082ee8e85ff3c41622e8128833da0772ca46d3->leave($__internal_4cdb9db08a095cbf19e427a103082ee8e85ff3c41622e8128833da0772ca46d3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e34ed8579dc1567393df2e064772c5302e1f7fc4e98a2e3855b8b4ed4f6246be = $this->env->getExtension("native_profiler");
        $__internal_e34ed8579dc1567393df2e064772c5302e1f7fc4e98a2e3855b8b4ed4f6246be->enter($__internal_e34ed8579dc1567393df2e064772c5302e1f7fc4e98a2e3855b8b4ed4f6246be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e34ed8579dc1567393df2e064772c5302e1f7fc4e98a2e3855b8b4ed4f6246be->leave($__internal_e34ed8579dc1567393df2e064772c5302e1f7fc4e98a2e3855b8b4ed4f6246be_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d3ed9e1ac3b111fa0881f0ec406d3d566e2c534ad90cd1a1e62f7bef876dfbe4 = $this->env->getExtension("native_profiler");
        $__internal_d3ed9e1ac3b111fa0881f0ec406d3d566e2c534ad90cd1a1e62f7bef876dfbe4->enter($__internal_d3ed9e1ac3b111fa0881f0ec406d3d566e2c534ad90cd1a1e62f7bef876dfbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "tadmin/edit.html.twig", 3)->display($context);
        
        $__internal_d3ed9e1ac3b111fa0881f0ec406d3d566e2c534ad90cd1a1e62f7bef876dfbe4->leave($__internal_d3ed9e1ac3b111fa0881f0ec406d3d566e2c534ad90cd1a1e62f7bef876dfbe4_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_44c5c91b68dddb4952e54a689c5d044b2247f17c48d59c7bef741f0b063ad10b = $this->env->getExtension("native_profiler");
        $__internal_44c5c91b68dddb4952e54a689c5d044b2247f17c48d59c7bef741f0b063ad10b->enter($__internal_44c5c91b68dddb4952e54a689c5d044b2247f17c48d59c7bef741f0b063ad10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_44c5c91b68dddb4952e54a689c5d044b2247f17c48d59c7bef741f0b063ad10b->leave($__internal_44c5c91b68dddb4952e54a689c5d044b2247f17c48d59c7bef741f0b063ad10b_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_a52ef8ae3b32628c88848da855168795cc7e2de28dfae1d6e30093549da1eb73 = $this->env->getExtension("native_profiler");
        $__internal_a52ef8ae3b32628c88848da855168795cc7e2de28dfae1d6e30093549da1eb73->enter($__internal_a52ef8ae3b32628c88848da855168795cc7e2de28dfae1d6e30093549da1eb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a52ef8ae3b32628c88848da855168795cc7e2de28dfae1d6e30093549da1eb73->leave($__internal_a52ef8ae3b32628c88848da855168795cc7e2de28dfae1d6e30093549da1eb73_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_99a75e92642c54ad0d52845168ddb1939f368badd5b4277d4d7ecd95e90d3f96 = $this->env->getExtension("native_profiler");
        $__internal_99a75e92642c54ad0d52845168ddb1939f368badd5b4277d4d7ecd95e90d3f96->enter($__internal_99a75e92642c54ad0d52845168ddb1939f368badd5b4277d4d7ecd95e90d3f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tadmin_edit", array("id" => $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Tadmin:editactions.html.twig", "tadmin/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Tadmin:editform.html.twig", "tadmin/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_99a75e92642c54ad0d52845168ddb1939f368badd5b4277d4d7ecd95e90d3f96->leave($__internal_99a75e92642c54ad0d52845168ddb1939f368badd5b4277d4d7ecd95e90d3f96_prof);

    }

    public function getTemplateName()
    {
        return "tadmin/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'label.tadmin'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'label.tadmin'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('tadmin_edit',{'id':tadmin.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Tadmin:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Tadmin:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
