<?php

/* BoAdminBundle:Local:selectstatus.html.twig */
class __TwigTemplate_38f27ce7d66ed7a7a7b57d6da9cb607f164d105ac4b4af0b06c2b07b6641018b extends Twig_Template
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
        $__internal_7a081ecf1494a1d3a23d5a8ccd4e3d51c5f7c16e9b6267313fddd0ee32e24f1b = $this->env->getExtension("native_profiler");
        $__internal_7a081ecf1494a1d3a23d5a8ccd4e3d51c5f7c16e9b6267313fddd0ee32e24f1b->enter($__internal_7a081ecf1494a1d3a23d5a8ccd4e3d51c5f7c16e9b6267313fddd0ee32e24f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:selectstatus.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"0\" ";
        // line 2
        if ((array_key_exists("idstatus", $context) && ($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id", array()) == 0))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 3
        if ((array_key_exists("idstatus", $context) && ($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id", array()) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 4
        if ((array_key_exists("idstatus", $context) && ($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id", array()) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.unavailable", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_7a081ecf1494a1d3a23d5a8ccd4e3d51c5f7c16e9b6267313fddd0ee32e24f1b->leave($__internal_7a081ecf1494a1d3a23d5a8ccd4e3d51c5f7c16e9b6267313fddd0ee32e24f1b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:selectstatus.html.twig";
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
/* 				<select name='idstatus' id='idstatus'>*/
/* 					<option value="0" {%if idstatus is defined and status.id ==0%}selected='selected'{%endif%}>{{'label.all'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="1" {%if idstatus is defined and status.id ==1%}selected='selected'{%endif%}>{{'label.available'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idstatus is defined and status.id ==2%}selected='selected'{%endif%}>{{'label.unavailable'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
