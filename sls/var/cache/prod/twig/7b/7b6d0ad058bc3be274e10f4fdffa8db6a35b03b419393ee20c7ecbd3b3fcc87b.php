<?php

/* students/teacheravailable.html.twig */
class __TwigTemplate_02ffa873495b275eff0f7a589e1b1a8304c0f173676c5ffa95432406f0be384c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "students/teacheravailable.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06e39c59cb12e70f731b0c02c1c1ff2c4e858bc5d87f8a33c0dfce44106ddf95 = $this->env->getExtension("native_profiler");
        $__internal_06e39c59cb12e70f731b0c02c1c1ff2c4e858bc5d87f8a33c0dfce44106ddf95->enter($__internal_06e39c59cb12e70f731b0c02c1c1ff2c4e858bc5d87f8a33c0dfce44106ddf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/teacheravailable.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e39c59cb12e70f731b0c02c1c1ff2c4e858bc5d87f8a33c0dfce44106ddf95->leave($__internal_06e39c59cb12e70f731b0c02c1c1ff2c4e858bc5d87f8a33c0dfce44106ddf95_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1f5ba2534665b9e5dbf843bd46de18ebbf63de434b4d9447ff440116114e1bf = $this->env->getExtension("native_profiler");
        $__internal_f1f5ba2534665b9e5dbf843bd46de18ebbf63de434b4d9447ff440116114e1bf->enter($__internal_f1f5ba2534665b9e5dbf843bd46de18ebbf63de434b4d9447ff440116114e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_f1f5ba2534665b9e5dbf843bd46de18ebbf63de434b4d9447ff440116114e1bf->leave($__internal_f1f5ba2534665b9e5dbf843bd46de18ebbf63de434b4d9447ff440116114e1bf_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0be286f355092c8b63df16093db5e4ec767cfbf517d915bd58876cd8d6ab6028 = $this->env->getExtension("native_profiler");
        $__internal_0be286f355092c8b63df16093db5e4ec767cfbf517d915bd58876cd8d6ab6028->enter($__internal_0be286f355092c8b63df16093db5e4ec767cfbf517d915bd58876cd8d6ab6028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/teacheravailable.html.twig", 3)->display($context);
        
        $__internal_0be286f355092c8b63df16093db5e4ec767cfbf517d915bd58876cd8d6ab6028->leave($__internal_0be286f355092c8b63df16093db5e4ec767cfbf517d915bd58876cd8d6ab6028_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_9410112d4a26d507e3bb2cc938e5774a8c2df6d0ff08452f41d0d33684068aa4 = $this->env->getExtension("native_profiler");
        $__internal_9410112d4a26d507e3bb2cc938e5774a8c2df6d0ff08452f41d0d33684068aa4->enter($__internal_9410112d4a26d507e3bb2cc938e5774a8c2df6d0ff08452f41d0d33684068aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_9410112d4a26d507e3bb2cc938e5774a8c2df6d0ff08452f41d0d33684068aa4->leave($__internal_9410112d4a26d507e3bb2cc938e5774a8c2df6d0ff08452f41d0d33684068aa4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_adf4da2b28b50be642a1280e4800868ec19fd77e9c0efbbe3b8bf9841a76ed55 = $this->env->getExtension("native_profiler");
        $__internal_adf4da2b28b50be642a1280e4800868ec19fd77e9c0efbbe3b8bf9841a76ed55->enter($__internal_adf4da2b28b50be642a1280e4800868ec19fd77e9c0efbbe3b8bf9841a76ed55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Students:availableactions.html.twig", "students/teacheravailable.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div id=\"content-liste\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Students:teacherlist.html.twig", "students/teacheravailable.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>

\t";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_adf4da2b28b50be642a1280e4800868ec19fd77e9c0efbbe3b8bf9841a76ed55->leave($__internal_adf4da2b28b50be642a1280e4800868ec19fd77e9c0efbbe3b8bf9841a76ed55_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a981135f0d1154f42913286bca5aa147927c72c44b24a617cf51f84899958d76 = $this->env->getExtension("native_profiler");
        $__internal_a981135f0d1154f42913286bca5aa147927c72c44b24a617cf51f84899958d76->enter($__internal_a981135f0d1154f42913286bca5aa147927c72c44b24a617cf51f84899958d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_a981135f0d1154f42913286bca5aa147927c72c44b24a617cf51f84899958d76->leave($__internal_a981135f0d1154f42913286bca5aa147927c72c44b24a617cf51f84899958d76_prof);

    }

    public function getTemplateName()
    {
        return "students/teacheravailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 16,  120 => 15,  108 => 14,  103 => 11,  101 => 10,  98 => 9,  96 => 8,  92 => 6,  86 => 5,  68 => 4,  56 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'label.teacher'|trans([],'BoAdminBundle')}} {{'label.available'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block label %}<h1>{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'label.teacher'|trans([],'BoAdminBundle')}} {{'label.available'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Students:availableactions.html.twig"%}*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Students:teacherlist.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
