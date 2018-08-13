<?php

/* BoAdminBundle:Default:slogan.html.twig */
class __TwigTemplate_1b2f90d69e0c45e1a82a5d4389cec0eeb17574ca0fba8639f26224ebf919b43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e6c95bc4823e72827b884f45d60b122307ddfe0f317a7b2858abb127ba48e99 = $this->env->getExtension("native_profiler");
        $__internal_6e6c95bc4823e72827b884f45d60b122307ddfe0f317a7b2858abb127ba48e99->enter($__internal_6e6c95bc4823e72827b884f45d60b122307ddfe0f317a7b2858abb127ba48e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:slogan.html.twig"));

        // line 1
        echo "\t\t<div class=\"know-how\">
\t\t\t<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/know-how.gif"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.knowhow", array(), "BoAdminBundle"), "html", null, true);
        echo "\"/>
\t\t\t<!--p align=\"center\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.knowhow", array(), "BoAdminBundle"), "html", null, true);
        echo "</p--!>
\t\t</div>

";
        
        $__internal_6e6c95bc4823e72827b884f45d60b122307ddfe0f317a7b2858abb127ba48e99->leave($__internal_6e6c95bc4823e72827b884f45d60b122307ddfe0f317a7b2858abb127ba48e99_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:slogan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* 		<div class="know-how">*/
/* 			<img src="{{ asset('images/others/know-how.gif') }}" border="0" alt="{{'message.knowhow'|trans([],'BoAdminBundle')}}"/>*/
/* 			<!--p align="center">{{'message.knowhow'|trans([],'BoAdminBundle')}}</p--!>*/
/* 		</div>*/
/* */
/* */
