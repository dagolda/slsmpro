<?php

/* BoAdminBundle:Employee:selecttype.html.twig */
class __TwigTemplate_d4684c5a18abc6b4ae69d0384232db830fcca1983d3b15ae7771b0c9448283be extends Twig_Template
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
        $__internal_10eae8be83dcef5771c2bc78c2d486eb566dbbd1565eb5853a20b3d1f43ce256 = $this->env->getExtension("native_profiler");
        $__internal_10eae8be83dcef5771c2bc78c2d486eb566dbbd1565eb5853a20b3d1f43ce256->enter($__internal_10eae8be83dcef5771c2bc78c2d486eb566dbbd1565eb5853a20b3d1f43ce256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:selecttype.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idtype' id='idtype'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selecttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idtype", $context) && ($this->getAttribute($context["type"], "id", array()) == (isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "reference", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_10eae8be83dcef5771c2bc78c2d486eb566dbbd1565eb5853a20b3d1f43ce256->leave($__internal_10eae8be83dcef5771c2bc78c2d486eb566dbbd1565eb5853a20b3d1f43ce256_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:selecttype.html.twig";
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
/* 				<select name='idtype' id='idtype'>*/
/* 					<option value="0" selected="delected">{{'action.selecttype'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for type in types%}*/
/* 						<option value="{{type.id}}" {%if idtype is defined and type.id ==idtype%}selected='selected'{%endif%}>{{type.reference}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
