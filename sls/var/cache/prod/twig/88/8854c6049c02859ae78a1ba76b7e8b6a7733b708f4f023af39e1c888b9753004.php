<?php

/* BoCoordinatorBundle:Default:tdb.html.twig */
class __TwigTemplate_507ead10dfc8ce184888bac8c919ff1ec689dd039fd381a48579db1310844443 extends Twig_Template
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
        $__internal_5359dc2665eb741c2ec4d6b5db438831ed1e79c348ebb00809ab25e63666831d = $this->env->getExtension("native_profiler");
        $__internal_5359dc2665eb741c2ec4d6b5db438831ed1e79c348ebb00809ab25e63666831d->enter($__internal_5359dc2665eb741c2ec4d6b5db438831ed1e79c348ebb00809ab25e63666831d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Default:tdb.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "home")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("bo_coordinator_homepage");
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.home", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 6
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "teamcontact")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("bo_coordinator_teamcontact");
        echo "\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>

";
        
        $__internal_5359dc2665eb741c2ec4d6b5db438831ed1e79c348ebb00809ab25e63666831d->leave($__internal_5359dc2665eb741c2ec4d6b5db438831ed1e79c348ebb00809ab25e63666831d_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Default:tdb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="home"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('bo_coordinator_homepage') }}">*/
/* 		{{'layout.menu.home'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="teamcontact"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('bo_coordinator_teamcontact') }}">*/
/* 		{{'layout.menu.teamcontacts'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* */
/* */
