<?php

/* BoCoordinatorBundle:Default:pm.html.twig */
class __TwigTemplate_bc29a334fcae69bbd9d84a6560e0a045e7e9d91a9f2a07ccea8b6329e4480484 extends Twig_Template
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
        $__internal_aad054f22b0f41768fddb92e8c899cfcc64aeb2be628eaf78f3087a4210785e6 = $this->env->getExtension("native_profiler");
        $__internal_aad054f22b0f41768fddb92e8c899cfcc64aeb2be628eaf78f3087a4210785e6->enter($__internal_aad054f22b0f41768fddb92e8c899cfcc64aeb2be628eaf78f3087a4210785e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Default:pm.html.twig"));

        // line 1
        echo "\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li ";
        // line 3
        if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "tabeau-bord")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("bo_coordinator_homepage");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 8
        if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "supervision")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_contracts", array("status" => 1));
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.supervision", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
";
        
        $__internal_aad054f22b0f41768fddb92e8c899cfcc64aeb2be628eaf78f3087a4210785e6->leave($__internal_aad054f22b0f41768fddb92e8c899cfcc64aeb2be628eaf78f3087a4210785e6_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Default:pm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  48 => 9,  42 => 8,  36 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* 				<div class="collapse navbar-collapse" id="myNavbar">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li {%if pm=="tabeau-bord"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('bo_coordinator_homepage') }}">*/
/* 								{{'layout.menu.dashboard'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						<li {%if pm=="supervision"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('coordinator_supervision_contracts',{'status':1}) }}">*/
/* 								{{'layout.menu.supervision'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* */
