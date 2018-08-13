<?php

/* BoHomeBundle:Default:pm.html.twig */
class __TwigTemplate_c5574b16d4d43d3abde3469fbfd9684cd11516ebd33c93503ba31dd489df8167 extends Twig_Template
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
        $__internal_3ebee30a20f2dbdb8b8ec59f79161927b43ee7b7b1d23fe5018997216b0ef891 = $this->env->getExtension("native_profiler");
        $__internal_3ebee30a20f2dbdb8b8ec59f79161927b43ee7b7b1d23fe5018997216b0ef891->enter($__internal_3ebee30a20f2dbdb8b8ec59f79161927b43ee7b7b1d23fe5018997216b0ef891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:pm.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("bo_home_homepage");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 8
        if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "contracts")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("home_contract_show");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 13
        if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "request")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("home_absences_index");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.request", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 18
        if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "document")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("home_emppj_index");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.documents", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
";
        
        $__internal_3ebee30a20f2dbdb8b8ec59f79161927b43ee7b7b1d23fe5018997216b0ef891->leave($__internal_3ebee30a20f2dbdb8b8ec59f79161927b43ee7b7b1d23fe5018997216b0ef891_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:pm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  80 => 19,  74 => 18,  68 => 15,  64 => 14,  58 => 13,  52 => 10,  48 => 9,  42 => 8,  36 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* 				<div class="collapse navbar-collapse" id="myNavbar">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li {%if pm=="tabeau-bord"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('bo_home_homepage') }}">*/
/* 								{{'layout.menu.dashboard'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						<li {%if pm=="contracts"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('home_contract_show') }}">*/
/* 								{{'layout.menu.contracts'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						<li {%if pm=="request"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('home_absences_index') }}">*/
/* 								{{'layout.menu.request'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						<li {%if pm=="document"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('home_emppj_index') }}">*/
/* 								{{'layout.menu.documents'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* */
