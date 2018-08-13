<?php

/* BoAdminBundle:Contracts:selectfield.html.twig */
class __TwigTemplate_b7c8e6a976c9306517c8fb800076778cbafd624f5c951b8a6f5c1ec13c66ee83 extends Twig_Template
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
        $__internal_ed3346315ad54335ff523593bb055dd08c97232be4171ab01d9f82406c25fe93 = $this->env->getExtension("native_profiler");
        $__internal_ed3346315ad54335ff523593bb055dd08c97232be4171ab01d9f82406c25fe93->enter($__internal_ed3346315ad54335ff523593bb055dd08c97232be4171ab01d9f82406c25fe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:selectfield.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idfield' id='idfield'>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectfield", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idfield", $context) && ($this->getAttribute($context["field"], "id", array()) == (isset($context["idfield"]) ? $context["idfield"] : $this->getContext($context, "idfield"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "wfname", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_ed3346315ad54335ff523593bb055dd08c97232be4171ab01d9f82406c25fe93->leave($__internal_ed3346315ad54335ff523593bb055dd08c97232be4171ab01d9f82406c25fe93_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:selectfield.html.twig";
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
/* 				<select name='idfield' id='idfield'>*/
/* 					<option value="0" selected="selected">{{'action.selectfield'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for field in fields%}*/
/* 						<option value="{{field.id}}" {%if idfield is defined and field.id ==idfield%}selected='selected'{%endif%}>{{field.wfname}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
