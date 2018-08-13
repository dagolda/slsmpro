<?php

/* BoAdminBundle:Local:availability.html.twig */
class __TwigTemplate_1a2bdf390d47c4104c949c3e449711f616f8485788460775de5665ab62873883 extends Twig_Template
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
        $__internal_3419cefe294ed1ff198ae3c506dcaccd32e5f7d13145bdf3401ec8928348798e = $this->env->getExtension("native_profiler");
        $__internal_3419cefe294ed1ff198ae3c506dcaccd32e5f7d13145bdf3401ec8928348798e->enter($__internal_3419cefe294ed1ff198ae3c506dcaccd32e5f7d13145bdf3401ec8928348798e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:availability.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectstatus", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 3
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 1))) {
            echo "selected='selected'";
        }
        echo ">Available</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 4
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 2))) {
            echo "selected='selected'";
        }
        echo ">Unavailable</option>
\t\t\t\t</select>\t";
        
        $__internal_3419cefe294ed1ff198ae3c506dcaccd32e5f7d13145bdf3401ec8928348798e->leave($__internal_3419cefe294ed1ff198ae3c506dcaccd32e5f7d13145bdf3401ec8928348798e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:availability.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idstatus' id='idstatus'>*/
/* 					<option value="0" selected="delected">{{'action.selectstatus'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="1" {%if idstatus is defined and idstatus==1%}selected='selected'{%endif%}>Available</option>*/
/* 					<option value="2" {%if idstatus is defined and idstatus==2%}selected='selected'{%endif%}>Unavailable</option>*/
/* 				</select>	*/
