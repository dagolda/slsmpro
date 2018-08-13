<?php

/* language/index.html.twig */
class __TwigTemplate_18368c64d6db36de0395f5b66659ba23430ad8df1b52f0bce9a394d7d0245538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "language/index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c3d2caf1fc68e610ad76da31b31b1d2bfd9ad337e768a09385bf3d62faa25bb = $this->env->getExtension("native_profiler");
        $__internal_6c3d2caf1fc68e610ad76da31b31b1d2bfd9ad337e768a09385bf3d62faa25bb->enter($__internal_6c3d2caf1fc68e610ad76da31b31b1d2bfd9ad337e768a09385bf3d62faa25bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "language/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3d2caf1fc68e610ad76da31b31b1d2bfd9ad337e768a09385bf3d62faa25bb->leave($__internal_6c3d2caf1fc68e610ad76da31b31b1d2bfd9ad337e768a09385bf3d62faa25bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6940779c97de449a3223eff470b6dfc2dbf3bdbdfd25dc6e3d93e5cd546dba9 = $this->env->getExtension("native_profiler");
        $__internal_b6940779c97de449a3223eff470b6dfc2dbf3bdbdfd25dc6e3d93e5cd546dba9->enter($__internal_b6940779c97de449a3223eff470b6dfc2dbf3bdbdfd25dc6e3d93e5cd546dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.language", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b6940779c97de449a3223eff470b6dfc2dbf3bdbdfd25dc6e3d93e5cd546dba9->leave($__internal_b6940779c97de449a3223eff470b6dfc2dbf3bdbdfd25dc6e3d93e5cd546dba9_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_40b5ab1fa6d75cb488f6a5c07be65e86695cbc46938ccfc817b4e9031532acae = $this->env->getExtension("native_profiler");
        $__internal_40b5ab1fa6d75cb488f6a5c07be65e86695cbc46938ccfc817b4e9031532acae->enter($__internal_40b5ab1fa6d75cb488f6a5c07be65e86695cbc46938ccfc817b4e9031532acae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "language/index.html.twig", 3)->display($context);
        
        $__internal_40b5ab1fa6d75cb488f6a5c07be65e86695cbc46938ccfc817b4e9031532acae->leave($__internal_40b5ab1fa6d75cb488f6a5c07be65e86695cbc46938ccfc817b4e9031532acae_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_036335699f5db227265efe766e77255185670c4e855860488db4153cc981175e = $this->env->getExtension("native_profiler");
        $__internal_036335699f5db227265efe766e77255185670c4e855860488db4153cc981175e->enter($__internal_036335699f5db227265efe766e77255185670c4e855860488db4153cc981175e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_036335699f5db227265efe766e77255185670c4e855860488db4153cc981175e->leave($__internal_036335699f5db227265efe766e77255185670c4e855860488db4153cc981175e_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_ff97d1ab8ce7875472588da1cf4b045aab4891e1feb67480b3389525edb57101 = $this->env->getExtension("native_profiler");
        $__internal_ff97d1ab8ce7875472588da1cf4b045aab4891e1feb67480b3389525edb57101->enter($__internal_ff97d1ab8ce7875472588da1cf4b045aab4891e1feb67480b3389525edb57101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.language", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ff97d1ab8ce7875472588da1cf4b045aab4891e1feb67480b3389525edb57101->leave($__internal_ff97d1ab8ce7875472588da1cf4b045aab4891e1feb67480b3389525edb57101_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f0aa58465c3b1aa3633cc9f27c2b22c265d87aa4259ca5b531f3f16b21e8db98 = $this->env->getExtension("native_profiler");
        $__internal_f0aa58465c3b1aa3633cc9f27c2b22c265d87aa4259ca5b531f3f16b21e8db98->enter($__internal_f0aa58465c3b1aa3633cc9f27c2b22c265d87aa4259ca5b531f3f16b21e8db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Language:actions.html.twig", "language/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_f0aa58465c3b1aa3633cc9f27c2b22c265d87aa4259ca5b531f3f16b21e8db98->leave($__internal_f0aa58465c3b1aa3633cc9f27c2b22c265d87aa4259ca5b531f3f16b21e8db98_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aba215bbaa643a7f4deb1d09179f4fd2efd32347a98b25f90f331ec07efda2f7 = $this->env->getExtension("native_profiler");
        $__internal_aba215bbaa643a7f4deb1d09179f4fd2efd32347a98b25f90f331ec07efda2f7->enter($__internal_aba215bbaa643a7f4deb1d09179f4fd2efd32347a98b25f90f331ec07efda2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Language:tbliste.html.twig", "language/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
";
        
        $__internal_aba215bbaa643a7f4deb1d09179f4fd2efd32347a98b25f90f331ec07efda2f7->leave($__internal_aba215bbaa643a7f4deb1d09179f4fd2efd32347a98b25f90f331ec07efda2f7_prof);

    }

    public function getTemplateName()
    {
        return "language/index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.language'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.language'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Language:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Language:tbliste.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
