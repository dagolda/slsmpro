<?php

/* BoStudentBundle:Default:pm.html.twig */
class __TwigTemplate_b9e30c82f3672dcc7cc1944498e01df11587366eff2a4f8dee19f575a29222a4 extends Twig_Template
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
        $__internal_98822c95510b2a29cae143c786aa4d8fb8be8e48f73ee2d7b1fd1f50ac6fc93f = $this->env->getExtension("native_profiler");
        $__internal_98822c95510b2a29cae143c786aa4d8fb8be8e48f73ee2d7b1fd1f50ac6fc93f->enter($__internal_98822c95510b2a29cae143c786aa4d8fb8be8e48f73ee2d7b1fd1f50ac6fc93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Default:pm.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("bo_student_homepage");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 8
        if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "request")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("student_absences_index");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.request", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"http://slsmpro.com/wpslsm/\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.documents", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>";
        
        $__internal_98822c95510b2a29cae143c786aa4d8fb8be8e48f73ee2d7b1fd1f50ac6fc93f->leave($__internal_98822c95510b2a29cae143c786aa4d8fb8be8e48f73ee2d7b1fd1f50ac6fc93f_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Default:pm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  52 => 10,  48 => 9,  42 => 8,  36 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* 				<div class="collapse navbar-collapse" id="myNavbar">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li {%if pm=="tabeau-bord"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('bo_student_homepage') }}">*/
/* 								{{'layout.menu.dashboard'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						<li {%if pm=="request"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('student_absences_index') }}">*/
/* 								{{'layout.menu.request'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="http://slsmpro.com/wpslsm/" target="_blank">*/
/* 								{{'layout.menu.documents'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
