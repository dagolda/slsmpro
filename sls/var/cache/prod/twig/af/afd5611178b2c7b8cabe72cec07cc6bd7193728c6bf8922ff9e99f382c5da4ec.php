<?php

/* BoAdvisorsBundle:Orderform:status.html.twig */
class __TwigTemplate_f50d51340136f9c82fedf509fa01a7a6f1acea662ab85e4c3d35b8334707d23a extends Twig_Template
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
        $__internal_5d23a91e1fa8e0fdba12db2d23491195fdd12ace6b6541a72aa2a5ef1f340f4d = $this->env->getExtension("native_profiler");
        $__internal_5d23a91e1fa8e0fdba12db2d23491195fdd12ace6b6541a72aa2a5ef1f340f4d->enter($__internal_5d23a91e1fa8e0fdba12db2d23491195fdd12ace6b6541a72aa2a5ef1f340f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:status.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"0\" ";
        // line 2
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 0))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 3
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.created", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 4
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.headsup", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"3\" ";
        // line 5
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 3))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractcreated", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_5d23a91e1fa8e0fdba12db2d23491195fdd12ace6b6541a72aa2a5ef1f340f4d->leave($__internal_5d23a91e1fa8e0fdba12db2d23491195fdd12ace6b6541a72aa2a5ef1f340f4d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  41 => 4,  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idstatus' id='idstatus'>*/
/* 					<option value="0" {%if idstatus is defined and idstatus ==0%}selected='selected'{%endif%}>{{'label.all'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="1" {%if idstatus is defined and idstatus ==1%}selected='selected'{%endif%}>{{'status.created'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idstatus is defined and idstatus ==2%}selected='selected'{%endif%}>{{'label.headsup'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="3" {%if idstatus is defined and idstatus ==3%}selected='selected'{%endif%}>{{'label.contractcreated'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
