<?php

/* employee/securitycote.html.twig */
class __TwigTemplate_82f44d1003ed7a625e734d6ff500f868a7f6648c59114e4a80e1aff9ecde249f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/securitycote.html.twig", 1);
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
        $__internal_9b256903ad70dc3d22aac8c082ae3a93c6bcc0891e60885abcc01bab688a49e1 = $this->env->getExtension("native_profiler");
        $__internal_9b256903ad70dc3d22aac8c082ae3a93c6bcc0891e60885abcc01bab688a49e1->enter($__internal_9b256903ad70dc3d22aac8c082ae3a93c6bcc0891e60885abcc01bab688a49e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/securitycote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b256903ad70dc3d22aac8c082ae3a93c6bcc0891e60885abcc01bab688a49e1->leave($__internal_9b256903ad70dc3d22aac8c082ae3a93c6bcc0891e60885abcc01bab688a49e1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_311ac6b49113d007b90a81fb9ad5d8f117127ef7e2606afebb1014a9986ac1df = $this->env->getExtension("native_profiler");
        $__internal_311ac6b49113d007b90a81fb9ad5d8f117127ef7e2606afebb1014a9986ac1df->enter($__internal_311ac6b49113d007b90a81fb9ad5d8f117127ef7e2606afebb1014a9986ac1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.clearance", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_311ac6b49113d007b90a81fb9ad5d8f117127ef7e2606afebb1014a9986ac1df->leave($__internal_311ac6b49113d007b90a81fb9ad5d8f117127ef7e2606afebb1014a9986ac1df_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b41d854a11fd172d85836d58cc089690b09f9c872e3d59549b1a46afc326b877 = $this->env->getExtension("native_profiler");
        $__internal_b41d854a11fd172d85836d58cc089690b09f9c872e3d59549b1a46afc326b877->enter($__internal_b41d854a11fd172d85836d58cc089690b09f9c872e3d59549b1a46afc326b877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/securitycote.html.twig", 3)->display($context);
        
        $__internal_b41d854a11fd172d85836d58cc089690b09f9c872e3d59549b1a46afc326b877->leave($__internal_b41d854a11fd172d85836d58cc089690b09f9c872e3d59549b1a46afc326b877_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_07df5c09ed2972565514471c25258fedc8959bee4ef6647695cef21c54b0d96e = $this->env->getExtension("native_profiler");
        $__internal_07df5c09ed2972565514471c25258fedc8959bee4ef6647695cef21c54b0d96e->enter($__internal_07df5c09ed2972565514471c25258fedc8959bee4ef6647695cef21c54b0d96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_07df5c09ed2972565514471c25258fedc8959bee4ef6647695cef21c54b0d96e->leave($__internal_07df5c09ed2972565514471c25258fedc8959bee4ef6647695cef21c54b0d96e_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_9add559e077d993929ab2a63a9137e671cdd3b15906c73640627cdcc45c1cb16 = $this->env->getExtension("native_profiler");
        $__internal_9add559e077d993929ab2a63a9137e671cdd3b15906c73640627cdcc45c1cb16->enter($__internal_9add559e077d993929ab2a63a9137e671cdd3b15906c73640627cdcc45c1cb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.clearance", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.creation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_9add559e077d993929ab2a63a9137e671cdd3b15906c73640627cdcc45c1cb16->leave($__internal_9add559e077d993929ab2a63a9137e671cdd3b15906c73640627cdcc45c1cb16_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_80a3796ae3515ba00dd9da224a6b04de8ca3c9e9ef3b38411b852dd8e26eadcd = $this->env->getExtension("native_profiler");
        $__internal_80a3796ae3515ba00dd9da224a6b04de8ca3c9e9ef3b38411b852dd8e26eadcd->enter($__internal_80a3796ae3515ba00dd9da224a6b04de8ca3c9e9ef3b38411b852dd8e26eadcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_securitycote_new", array("idemployee" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Employee:securitycoteactions.html.twig", "employee/securitycote.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Securitycote:editform.html.twig", "employee/securitycote.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>\t
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_80a3796ae3515ba00dd9da224a6b04de8ca3c9e9ef3b38411b852dd8e26eadcd->leave($__internal_80a3796ae3515ba00dd9da224a6b04de8ca3c9e9ef3b38411b852dd8e26eadcd_prof);

    }

    public function getTemplateName()
    {
        return "employee/securitycote.html.twig";
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
/* {% block title %}{{parent()}}-{{'entity.clearance'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.clearance'|trans([],'BoAdminBundle')}} >> {{'title.creation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('employee_securitycote_new',{'idemployee':employee.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Employee:securitycoteactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Securitycote:editform.html.twig"%}*/
/* 			</div>	*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
