<?php

/* BoAdminBundle:Employee:selectstatus.html.twig */
class __TwigTemplate_934c91e2af13ce61daeb526473aa80cb6cd1ba330448a22b1783070aa9ef78e7 extends Twig_Template
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
        $__internal_8a2542f8d6f0c88dca8ede1538094077da70a5ba75dcec467071c74f7479461c = $this->env->getExtension("native_profiler");
        $__internal_8a2542f8d6f0c88dca8ede1538094077da70a5ba75dcec467071c74f7479461c->enter($__internal_8a2542f8d6f0c88dca8ede1538094077da70a5ba75dcec467071c74f7479461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:selectstatus.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectstatus", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuss"]) ? $context["statuss"] : $this->getContext($context, "statuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idstatus", $context) && ($this->getAttribute($context["status"], "id", array()) == (isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "statusname", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_8a2542f8d6f0c88dca8ede1538094077da70a5ba75dcec467071c74f7479461c->leave($__internal_8a2542f8d6f0c88dca8ede1538094077da70a5ba75dcec467071c74f7479461c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:selectstatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idstatus' id='idstatus'>*/
/* 					<option value="0" selected="delected">{{'action.selectstatus'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for status in statuss%}*/
/* 						<option value="{{status.id}}" {%if idstatus is defined and status.id ==idstatus%}selected='selected'{%endif%}>{{status.statusname}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
