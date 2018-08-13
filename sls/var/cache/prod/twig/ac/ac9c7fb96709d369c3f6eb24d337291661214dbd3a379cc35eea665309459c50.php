<?php

/* BoAdminBundle:Advisors:selectsubtitute.html.twig */
class __TwigTemplate_209d0f40acdf3ab076d1637eb74377b2c70d0cbbddd267b28868987f498ff12f extends Twig_Template
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
        $__internal_2ea659d67db5de5cac1e14b4eedc4dacae4a48c70406bef7705f3e11b84839c3 = $this->env->getExtension("native_profiler");
        $__internal_2ea659d67db5de5cac1e14b4eedc4dacae4a48c70406bef7705f3e11b84839c3->enter($__internal_2ea659d67db5de5cac1e14b4eedc4dacae4a48c70406bef7705f3e11b84839c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:selectsubtitute.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='substitute' id='substitute' required=\"true\">
\t\t\t\t\t<option value=\"0\" selected=\"delected\">Select substitute</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")));
        foreach ($context['_seq'] as $context["_key"] => $context["advisor"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advisor"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idsubstitute", $context) && ((isset($context["idsubstitute"]) ? $context["idsubstitute"] : $this->getContext($context, "idsubstitute")) == $this->getAttribute($context["advisor"], "id", array())))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advisor"], "advisor", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advisor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_2ea659d67db5de5cac1e14b4eedc4dacae4a48c70406bef7705f3e11b84839c3->leave($__internal_2ea659d67db5de5cac1e14b4eedc4dacae4a48c70406bef7705f3e11b84839c3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:selectsubtitute.html.twig";
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
/* 				<select name='substitute' id='substitute' required="true">*/
/* 					<option value="0" selected="delected">Select substitute</option>*/
/* 					{%for advisor in advisors%}*/
/* 						<option value="{{advisor.id}}" {%if idsubstitute is defined and idsubstitute ==advisor.id%}selected='selected'{%endif%}>{{advisor.advisor}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
