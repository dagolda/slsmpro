<?php

/* students/edit.html.twig */
class __TwigTemplate_e44269a8e1e23002f693ec168c8b85b82da1363a9c71288d66b39eea24505859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "students/edit.html.twig", 1);
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
        $__internal_d4fa8aaedc11f53f1f5bbbc23ecaefd5eaede3f9b02e5f4ed021613320dba85d = $this->env->getExtension("native_profiler");
        $__internal_d4fa8aaedc11f53f1f5bbbc23ecaefd5eaede3f9b02e5f4ed021613320dba85d->enter($__internal_d4fa8aaedc11f53f1f5bbbc23ecaefd5eaede3f9b02e5f4ed021613320dba85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fa8aaedc11f53f1f5bbbc23ecaefd5eaede3f9b02e5f4ed021613320dba85d->leave($__internal_d4fa8aaedc11f53f1f5bbbc23ecaefd5eaede3f9b02e5f4ed021613320dba85d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd2303f9d35f148d34ae47314fe649a450d89f8d19d0d95895e78217e09fbddf = $this->env->getExtension("native_profiler");
        $__internal_fd2303f9d35f148d34ae47314fe649a450d89f8d19d0d95895e78217e09fbddf->enter($__internal_fd2303f9d35f148d34ae47314fe649a450d89f8d19d0d95895e78217e09fbddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_fd2303f9d35f148d34ae47314fe649a450d89f8d19d0d95895e78217e09fbddf->leave($__internal_fd2303f9d35f148d34ae47314fe649a450d89f8d19d0d95895e78217e09fbddf_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_d74ca310e8d1d3a2b211f8a475e1a8729cf894e3fc971cd668a81f30560c7325 = $this->env->getExtension("native_profiler");
        $__internal_d74ca310e8d1d3a2b211f8a475e1a8729cf894e3fc971cd668a81f30560c7325->enter($__internal_d74ca310e8d1d3a2b211f8a475e1a8729cf894e3fc971cd668a81f30560c7325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/edit.html.twig", 3)->display($context);
        
        $__internal_d74ca310e8d1d3a2b211f8a475e1a8729cf894e3fc971cd668a81f30560c7325->leave($__internal_d74ca310e8d1d3a2b211f8a475e1a8729cf894e3fc971cd668a81f30560c7325_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f086bf432c937059668dc771873cfc6b0bdb75bd02bff8b54f2d7656adebc4df = $this->env->getExtension("native_profiler");
        $__internal_f086bf432c937059668dc771873cfc6b0bdb75bd02bff8b54f2d7656adebc4df->enter($__internal_f086bf432c937059668dc771873cfc6b0bdb75bd02bff8b54f2d7656adebc4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_f086bf432c937059668dc771873cfc6b0bdb75bd02bff8b54f2d7656adebc4df->leave($__internal_f086bf432c937059668dc771873cfc6b0bdb75bd02bff8b54f2d7656adebc4df_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_873da0b053efac6381937c645deb0a7652bb23b84edcf945063e48984c2fb80b = $this->env->getExtension("native_profiler");
        $__internal_873da0b053efac6381937c645deb0a7652bb23b84edcf945063e48984c2fb80b->enter($__internal_873da0b053efac6381937c645deb0a7652bb23b84edcf945063e48984c2fb80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_873da0b053efac6381937c645deb0a7652bb23b84edcf945063e48984c2fb80b->leave($__internal_873da0b053efac6381937c645deb0a7652bb23b84edcf945063e48984c2fb80b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_96662e968a0bc376a88013fc7c0f58e678946e0ca39c441ef68befee0e8c040b = $this->env->getExtension("native_profiler");
        $__internal_96662e968a0bc376a88013fc7c0f58e678946e0ca39c441ef68befee0e8c040b->enter($__internal_96662e968a0bc376a88013fc7c0f58e678946e0ca39c441ef68befee0e8c040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_edit", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Students:editactions.html.twig", "students/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Students:editform.html.twig", "students/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_96662e968a0bc376a88013fc7c0f58e678946e0ca39c441ef68befee0e8c040b->leave($__internal_96662e968a0bc376a88013fc7c0f58e678946e0ca39c441ef68befee0e8c040b_prof);

    }

    public function getTemplateName()
    {
        return "students/edit.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}		*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('students_edit',{'id':student.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			{%include "BoAdminBundle:Students:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Students:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
