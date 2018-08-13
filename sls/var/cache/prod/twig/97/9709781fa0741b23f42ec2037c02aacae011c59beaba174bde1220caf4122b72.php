<?php

/* BoAdvisorsBundle:Tickets:mylist.html.twig */
class __TwigTemplate_9f78ce804d886eb39adfafb4a3015319be4865b12a6e7d82d60095bd9d2739a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "BoAdvisorsBundle:Tickets:mylist.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec0592694b1796c641f90425df1dc91a0af65e35ef9f5536eb953df251bb98c5 = $this->env->getExtension("native_profiler");
        $__internal_ec0592694b1796c641f90425df1dc91a0af65e35ef9f5536eb953df251bb98c5->enter($__internal_ec0592694b1796c641f90425df1dc91a0af65e35ef9f5536eb953df251bb98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:mylist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0592694b1796c641f90425df1dc91a0af65e35ef9f5536eb953df251bb98c5->leave($__internal_ec0592694b1796c641f90425df1dc91a0af65e35ef9f5536eb953df251bb98c5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dca1f6575b7eeeaaf49c36b014c9a0a4c1c75438c76258b524d7c362fa463d9 = $this->env->getExtension("native_profiler");
        $__internal_8dca1f6575b7eeeaaf49c36b014c9a0a4c1c75438c76258b524d7c362fa463d9->enter($__internal_8dca1f6575b7eeeaaf49c36b014c9a0a4c1c75438c76258b524d7c362fa463d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8dca1f6575b7eeeaaf49c36b014c9a0a4c1c75438c76258b524d7c362fa463d9->leave($__internal_8dca1f6575b7eeeaaf49c36b014c9a0a4c1c75438c76258b524d7c362fa463d9_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_f3613cc820ddaaa5a19729cb49734412108933f8efbe5af644589c3a460507b9 = $this->env->getExtension("native_profiler");
        $__internal_f3613cc820ddaaa5a19729cb49734412108933f8efbe5af644589c3a460507b9->enter($__internal_f3613cc820ddaaa5a19729cb49734412108933f8efbe5af644589c3a460507b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Tickets:mylist.html.twig", 3)->display($context);
        
        $__internal_f3613cc820ddaaa5a19729cb49734412108933f8efbe5af644589c3a460507b9->leave($__internal_f3613cc820ddaaa5a19729cb49734412108933f8efbe5af644589c3a460507b9_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0c3e064f4a4aa61ca42917836fb963657158149c4314889d75e53829fb3131b4 = $this->env->getExtension("native_profiler");
        $__internal_0c3e064f4a4aa61ca42917836fb963657158149c4314889d75e53829fb3131b4->enter($__internal_0c3e064f4a4aa61ca42917836fb963657158149c4314889d75e53829fb3131b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_0c3e064f4a4aa61ca42917836fb963657158149c4314889d75e53829fb3131b4->leave($__internal_0c3e064f4a4aa61ca42917836fb963657158149c4314889d75e53829fb3131b4_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_ad8a57b39e7920231e57ad0beec7ea90c3f994a9efc84c0e12921d212cafb620 = $this->env->getExtension("native_profiler");
        $__internal_ad8a57b39e7920231e57ad0beec7ea90c3f994a9efc84c0e12921d212cafb620->enter($__internal_ad8a57b39e7920231e57ad0beec7ea90c3f994a9efc84c0e12921d212cafb620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ad8a57b39e7920231e57ad0beec7ea90c3f994a9efc84c0e12921d212cafb620->leave($__internal_ad8a57b39e7920231e57ad0beec7ea90c3f994a9efc84c0e12921d212cafb620_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7b3e72f55b43d635c9beb2f3f7da01b1a8ad20284e8a0f5165f12f29c0102f20 = $this->env->getExtension("native_profiler");
        $__internal_7b3e72f55b43d635c9beb2f3f7da01b1a8ad20284e8a0f5165f12f29c0102f20->enter($__internal_7b3e72f55b43d635c9beb2f3f7da01b1a8ad20284e8a0f5165f12f29c0102f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Tickets:myactions.html.twig", "BoAdvisorsBundle:Tickets:mylist.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_7b3e72f55b43d635c9beb2f3f7da01b1a8ad20284e8a0f5165f12f29c0102f20->leave($__internal_7b3e72f55b43d635c9beb2f3f7da01b1a8ad20284e8a0f5165f12f29c0102f20_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a2f1a8010ef978d7d95a03320a96a750093bf032f3ca1f173daeb2907e00f5 = $this->env->getExtension("native_profiler");
        $__internal_d0a2f1a8010ef978d7d95a03320a96a750093bf032f3ca1f173daeb2907e00f5->enter($__internal_d0a2f1a8010ef978d7d95a03320a96a750093bf032f3ca1f173daeb2907e00f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdvisorsBundle:Tickets:tbliste.html.twig", "BoAdvisorsBundle:Tickets:mylist.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
";
        
        $__internal_d0a2f1a8010ef978d7d95a03320a96a750093bf032f3ca1f173daeb2907e00f5->leave($__internal_d0a2f1a8010ef978d7d95a03320a96a750093bf032f3ca1f173daeb2907e00f5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:mylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  121 => 12,  118 => 11,  112 => 10,  102 => 8,  96 => 7,  80 => 6,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Tickets:myactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Tickets:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
