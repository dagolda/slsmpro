<?php

/* BoAdminBundle:Advisors:selectadvisor.html.twig */
class __TwigTemplate_33726e16b4a7f4a150fc69b3087f0353fae897f770960ac3e5b5b76a372cdd32 extends Twig_Template
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
        $__internal_ef9ad3eb7d910fc717ffbd57a1d2de0775d7a5bfcefd31d3e48c239ce239e80b = $this->env->getExtension("native_profiler");
        $__internal_ef9ad3eb7d910fc717ffbd57a1d2de0775d7a5bfcefd31d3e48c239ce239e80b->enter($__internal_ef9ad3eb7d910fc717ffbd57a1d2de0775d7a5bfcefd31d3e48c239ce239e80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:selectadvisor.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='advisor' id='advisor' required=\"true\">
\t\t\t\t\t<option value=\"0\" selected=\"delected\">Select advisor</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 0, array(), "array"), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idadvisor", $context) && ((isset($context["idadvisor"]) ? $context["idadvisor"] : $this->getContext($context, "idadvisor")) == $this->getAttribute($context["teacher"], 0, array(), "array")))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_ef9ad3eb7d910fc717ffbd57a1d2de0775d7a5bfcefd31d3e48c239ce239e80b->leave($__internal_ef9ad3eb7d910fc717ffbd57a1d2de0775d7a5bfcefd31d3e48c239ce239e80b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:selectadvisor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 				<select name='advisor' id='advisor' required="true">*/
/* 					<option value="0" selected="delected">Select advisor</option>*/
/* 					{%for teacher in teachers%}*/
/* 						<option value="{{teacher[0]}}" {%if idadvisor is defined and idadvisor ==teacher[0]%}selected='selected'{%endif%}>{{teacher[1]}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
