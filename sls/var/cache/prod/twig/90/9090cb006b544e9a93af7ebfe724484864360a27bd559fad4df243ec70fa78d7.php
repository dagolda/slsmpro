<?php

/* BoHomeBundle:Message:recipients1.html.twig */
class __TwigTemplate_59f4cb6b926331af25485eaba2347e91355c5010510e9aecaa036981a564dcf1 extends Twig_Template
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
        $__internal_3f2973bc90024d86ac172bb599d6a6370cc4ca7c1c849bd1bd3be2a2c14e7d08 = $this->env->getExtension("native_profiler");
        $__internal_3f2973bc90024d86ac172bb599d6a6370cc4ca7c1c849bd1bd3be2a2c14e7d08->enter($__internal_3f2973bc90024d86ac172bb599d6a6370cc4ca7c1c849bd1bd3be2a2c14e7d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Message:recipients1.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idrecipient1' id='idrecipient1'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">Select a recipient</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) ? $context["recipients"] : $this->getContext($context, "recipients")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idrecipient1", $context) && ($this->getAttribute($context["recipient"], "id", array()) == (isset($context["idrecipient1"]) ? $context["idrecipient1"] : $this->getContext($context, "idrecipient1"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_3f2973bc90024d86ac172bb599d6a6370cc4ca7c1c849bd1bd3be2a2c14e7d08->leave($__internal_3f2973bc90024d86ac172bb599d6a6370cc4ca7c1c849bd1bd3be2a2c14e7d08_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Message:recipients1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 				<select name='idrecipient1' id='idrecipient1'>*/
/* 					<option value="0" selected="delected">Select a recipient</option>*/
/* 					{%for recipient in recipients%}*/
/* 						<option value="{{recipient.id}}" {%if idrecipient1 is defined and recipient.id ==idrecipient1%}selected='selected'{%endif%}>{{recipient.firstname}} {{recipient.name}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
