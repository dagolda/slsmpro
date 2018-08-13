<?php

/* BoAdminBundle:Employee:selectsexe.html.twig */
class __TwigTemplate_16fada2756921ced1a43c64cfc7d18c0cbe7f04eccef7a2ba40afb75bb4df19c extends Twig_Template
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
        $__internal_56bed99426db1daad391f2d933f16d7fc98d2c23439541c5771b2c6028a465cd = $this->env->getExtension("native_profiler");
        $__internal_56bed99426db1daad391f2d933f16d7fc98d2c23439541c5771b2c6028a465cd->enter($__internal_56bed99426db1daad391f2d933f16d7fc98d2c23439541c5771b2c6028a465cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:selectsexe.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idsexe' id='idsexe'>
\t\t\t\t\t<option value=\"0\" ";
        // line 2
        if ((array_key_exists("idsexe", $context) && ($this->getAttribute((isset($context["sexe"]) ? $context["sexe"] : $this->getContext($context, "sexe")), "id", array()) == 0))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 3
        if ((array_key_exists("idsexe", $context) && ($this->getAttribute((isset($context["sexe"]) ? $context["sexe"] : $this->getContext($context, "sexe")), "id", array()) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.male", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 4
        if ((array_key_exists("idsexe", $context) && ($this->getAttribute((isset($context["sexe"]) ? $context["sexe"] : $this->getContext($context, "sexe")), "id", array()) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.female", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_56bed99426db1daad391f2d933f16d7fc98d2c23439541c5771b2c6028a465cd->leave($__internal_56bed99426db1daad391f2d933f16d7fc98d2c23439541c5771b2c6028a465cd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:selectsexe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idsexe' id='idsexe'>*/
/* 					<option value="0" {%if idsexe is defined and sexe.id ==0%}selected='selected'{%endif%}>{{'label.all'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="1" {%if idsexe is defined and sexe.id ==1%}selected='selected'{%endif%}>{{'label.male'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idsexe is defined and sexe.id ==2%}selected='selected'{%endif%}>{{'label.female'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
