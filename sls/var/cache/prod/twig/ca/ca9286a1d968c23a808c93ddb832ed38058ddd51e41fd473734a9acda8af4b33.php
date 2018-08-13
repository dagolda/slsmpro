<?php

/* BoAdminBundle:Local:selectcampus.html.twig */
class __TwigTemplate_704dde62ccc10a8c1c728cfa735c2dd649aa28a1be17a55761ea535ede9dec6c extends Twig_Template
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
        $__internal_7c8104e67316bf9420fd33c55c2b5789a7147bb799d3b3530a0ebf732c3d9320 = $this->env->getExtension("native_profiler");
        $__internal_7c8104e67316bf9420fd33c55c2b5789a7147bb799d3b3530a0ebf732c3d9320->enter($__internal_7c8104e67316bf9420fd33c55c2b5789a7147bb799d3b3530a0ebf732c3d9320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:selectcampus.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idcampus' id='idcampus'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectcampus", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campuss"]) ? $context["campuss"] : $this->getContext($context, "campuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["campus"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idcampus", $context) && ($this->getAttribute($context["campus"], "id", array()) == (isset($context["idcampus"]) ? $context["idcampus"] : $this->getContext($context, "idcampus"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "reference", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_7c8104e67316bf9420fd33c55c2b5789a7147bb799d3b3530a0ebf732c3d9320->leave($__internal_7c8104e67316bf9420fd33c55c2b5789a7147bb799d3b3530a0ebf732c3d9320_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:selectcampus.html.twig";
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
/* 				<select name='idcampus' id='idcampus'>*/
/* 					<option value="0" selected="delected">{{'action.selectcampus'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for campus in campuss%}*/
/* 						<option value="{{campus.id}}" {%if idcampus is defined and campus.id ==idcampus%}selected='selected'{%endif%}>{{campus.reference}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
