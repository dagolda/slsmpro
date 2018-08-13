<?php

/* BoUserBundle:Rights:newform.html.twig */
class __TwigTemplate_8988d8bbd197b48e74bd1aa9307eab6cb4bf02ec95b291c025694f568ef5f3ae extends Twig_Template
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
        $__internal_5439231e75c55d359a5a7b1981e9b80815818eea97b87d086e881ed13e01db9c = $this->env->getExtension("native_profiler");
        $__internal_5439231e75c55d359a5a7b1981e9b80815818eea97b87d086e881ed13e01db9c->enter($__internal_5439231e75c55d359a5a7b1981e9b80815818eea97b87d086e881ed13e01db9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:Rights:newform.html.twig"));

        // line 1
        echo "<table>
\t<tbody>
\t\t<tr>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrics"]) ? $context["rubrics"] : $this->getContext($context, "rubrics")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubric"]) {
            // line 5
            echo "\t\t\t<td width=\"20%\"><input type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rubric"], "nameen", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rubric"], "nameen", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rubric"], "nameen", array()), "html", null, true);
            echo "</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubric'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t<tbody>
</table>";
        
        $__internal_5439231e75c55d359a5a7b1981e9b80815818eea97b87d086e881ed13e01db9c->leave($__internal_5439231e75c55d359a5a7b1981e9b80815818eea97b87d086e881ed13e01db9c_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:Rights:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <table>*/
/* 	<tbody>*/
/* 		<tr>*/
/* 		{%for rubric in rubrics%}*/
/* 			<td width="20%"><input type="checkbox" name="{{rubric.nameen}}" value="{{rubric.nameen}}"> {{rubric.nameen}}</td>*/
/* 		{%endfor%}*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	<tbody>*/
/* </table>*/
