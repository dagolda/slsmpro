<?php

/* status/show.html.twig */
class __TwigTemplate_d50b97b63a61b36e250e8308cb92cae53cd333e0c217135c7b2b94323a410544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "status/show.html.twig", 1);
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
        $__internal_d4c27cdf9dd1664a3352760dcbb9ab671d0226cbd99a56cd21fd83770abc4a7b = $this->env->getExtension("native_profiler");
        $__internal_d4c27cdf9dd1664a3352760dcbb9ab671d0226cbd99a56cd21fd83770abc4a7b->enter($__internal_d4c27cdf9dd1664a3352760dcbb9ab671d0226cbd99a56cd21fd83770abc4a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "status/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c27cdf9dd1664a3352760dcbb9ab671d0226cbd99a56cd21fd83770abc4a7b->leave($__internal_d4c27cdf9dd1664a3352760dcbb9ab671d0226cbd99a56cd21fd83770abc4a7b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f09abe7100981855e18f392183a1e757e76f63cc0dd8ee871c52c31644b92e8 = $this->env->getExtension("native_profiler");
        $__internal_6f09abe7100981855e18f392183a1e757e76f63cc0dd8ee871c52c31644b92e8->enter($__internal_6f09abe7100981855e18f392183a1e757e76f63cc0dd8ee871c52c31644b92e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.status", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_6f09abe7100981855e18f392183a1e757e76f63cc0dd8ee871c52c31644b92e8->leave($__internal_6f09abe7100981855e18f392183a1e757e76f63cc0dd8ee871c52c31644b92e8_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_8546635584b9702c11091b21d6b62431c8697bee2920be8eaf9df9d516f9c54b = $this->env->getExtension("native_profiler");
        $__internal_8546635584b9702c11091b21d6b62431c8697bee2920be8eaf9df9d516f9c54b->enter($__internal_8546635584b9702c11091b21d6b62431c8697bee2920be8eaf9df9d516f9c54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "status/show.html.twig", 3)->display($context);
        
        $__internal_8546635584b9702c11091b21d6b62431c8697bee2920be8eaf9df9d516f9c54b->leave($__internal_8546635584b9702c11091b21d6b62431c8697bee2920be8eaf9df9d516f9c54b_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b8686b21d019e1968438505051994f44636201df35372df46e29f885e7a2a590 = $this->env->getExtension("native_profiler");
        $__internal_b8686b21d019e1968438505051994f44636201df35372df46e29f885e7a2a590->enter($__internal_b8686b21d019e1968438505051994f44636201df35372df46e29f885e7a2a590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_b8686b21d019e1968438505051994f44636201df35372df46e29f885e7a2a590->leave($__internal_b8686b21d019e1968438505051994f44636201df35372df46e29f885e7a2a590_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_c4c45161f2a5321472dae296f5aeb2036081165bf458835c97aa4d284369f655 = $this->env->getExtension("native_profiler");
        $__internal_c4c45161f2a5321472dae296f5aeb2036081165bf458835c97aa4d284369f655->enter($__internal_c4c45161f2a5321472dae296f5aeb2036081165bf458835c97aa4d284369f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.status", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c4c45161f2a5321472dae296f5aeb2036081165bf458835c97aa4d284369f655->leave($__internal_c4c45161f2a5321472dae296f5aeb2036081165bf458835c97aa4d284369f655_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_80bb40ce70c91eb3cf724f220cc45a5e8581996a63960da7411a7c8679d0e4d5 = $this->env->getExtension("native_profiler");
        $__internal_80bb40ce70c91eb3cf724f220cc45a5e8581996a63960da7411a7c8679d0e4d5->enter($__internal_80bb40ce70c91eb3cf724f220cc45a5e8581996a63960da7411a7c8679d0e4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Status:showactions.html.twig", "status/show.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Status:show.html.twig", "status/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>
";
        
        $__internal_80bb40ce70c91eb3cf724f220cc45a5e8581996a63960da7411a7c8679d0e4d5->leave($__internal_80bb40ce70c91eb3cf724f220cc45a5e8581996a63960da7411a7c8679d0e4d5_prof);

    }

    public function getTemplateName()
    {
        return "status/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 11,  107 => 10,  104 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.status'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.status'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Status:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Status:show.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
