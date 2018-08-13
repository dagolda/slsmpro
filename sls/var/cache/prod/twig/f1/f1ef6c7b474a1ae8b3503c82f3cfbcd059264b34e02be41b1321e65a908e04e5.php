<?php

/* diary/edit.html.twig */
class __TwigTemplate_ca52fbb6489a0b38a0135e545acc89864f23a64b35403a7d7e7d92cd2b57bd61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "diary/edit.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6f5cb8ade01c6d4e168757ef592b0362b629dbd67e5744dfc2c5b0083434d06 = $this->env->getExtension("native_profiler");
        $__internal_c6f5cb8ade01c6d4e168757ef592b0362b629dbd67e5744dfc2c5b0083434d06->enter($__internal_c6f5cb8ade01c6d4e168757ef592b0362b629dbd67e5744dfc2c5b0083434d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diary/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f5cb8ade01c6d4e168757ef592b0362b629dbd67e5744dfc2c5b0083434d06->leave($__internal_c6f5cb8ade01c6d4e168757ef592b0362b629dbd67e5744dfc2c5b0083434d06_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2681286072853deb06d34bef4f39c2f4d9b71fc37bb9e370ca2c982bd18071fb = $this->env->getExtension("native_profiler");
        $__internal_2681286072853deb06d34bef4f39c2f4d9b71fc37bb9e370ca2c982bd18071fb->enter($__internal_2681286072853deb06d34bef4f39c2f4d9b71fc37bb9e370ca2c982bd18071fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.diary", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_2681286072853deb06d34bef4f39c2f4d9b71fc37bb9e370ca2c982bd18071fb->leave($__internal_2681286072853deb06d34bef4f39c2f4d9b71fc37bb9e370ca2c982bd18071fb_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7c0dc1beeb07fb597d9b1e261e11bc4c29576d08afda427f4159b85b4c6b0963 = $this->env->getExtension("native_profiler");
        $__internal_7c0dc1beeb07fb597d9b1e261e11bc4c29576d08afda427f4159b85b4c6b0963->enter($__internal_7c0dc1beeb07fb597d9b1e261e11bc4c29576d08afda427f4159b85b4c6b0963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "diary/edit.html.twig", 3)->display($context);
        
        $__internal_7c0dc1beeb07fb597d9b1e261e11bc4c29576d08afda427f4159b85b4c6b0963->leave($__internal_7c0dc1beeb07fb597d9b1e261e11bc4c29576d08afda427f4159b85b4c6b0963_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_414cc9edc605e34ca95e9f3966d96b70b5cdbb80f33f4f2a1bbb1e0f2eac64fb = $this->env->getExtension("native_profiler");
        $__internal_414cc9edc605e34ca95e9f3966d96b70b5cdbb80f33f4f2a1bbb1e0f2eac64fb->enter($__internal_414cc9edc605e34ca95e9f3966d96b70b5cdbb80f33f4f2a1bbb1e0f2eac64fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_414cc9edc605e34ca95e9f3966d96b70b5cdbb80f33f4f2a1bbb1e0f2eac64fb->leave($__internal_414cc9edc605e34ca95e9f3966d96b70b5cdbb80f33f4f2a1bbb1e0f2eac64fb_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_804bb2e2d366122d352b8e8e8112254a3ec0ed2cb2d454f64b9842cbaae4c2cc = $this->env->getExtension("native_profiler");
        $__internal_804bb2e2d366122d352b8e8e8112254a3ec0ed2cb2d454f64b9842cbaae4c2cc->enter($__internal_804bb2e2d366122d352b8e8e8112254a3ec0ed2cb2d454f64b9842cbaae4c2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.diary", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_804bb2e2d366122d352b8e8e8112254a3ec0ed2cb2d454f64b9842cbaae4c2cc->leave($__internal_804bb2e2d366122d352b8e8e8112254a3ec0ed2cb2d454f64b9842cbaae4c2cc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3fad253bf639568de69a47fcf1028b55ff00610ff63a83a8422b53116c6988e = $this->env->getExtension("native_profiler");
        $__internal_f3fad253bf639568de69a47fcf1028b55ff00610ff63a83a8422b53116c6988e->enter($__internal_f3fad253bf639568de69a47fcf1028b55ff00610ff63a83a8422b53116c6988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diary_edit", array("id" => $this->getAttribute((isset($context["diary"]) ? $context["diary"] : $this->getContext($context, "diary")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Diary:editactions.html.twig", "diary/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Diary:editform.html.twig", "diary/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t<br/>
\t\t\t</div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_f3fad253bf639568de69a47fcf1028b55ff00610ff63a83a8422b53116c6988e->leave($__internal_f3fad253bf639568de69a47fcf1028b55ff00610ff63a83a8422b53116c6988e_prof);

    }

    public function getTemplateName()
    {
        return "diary/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 15,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.diary'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.diary'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('diary_edit',{'id':diary.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:Diary:editactions.html.twig"%}*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:Diary:editform.html.twig"%}*/
/* 				<br/>*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
