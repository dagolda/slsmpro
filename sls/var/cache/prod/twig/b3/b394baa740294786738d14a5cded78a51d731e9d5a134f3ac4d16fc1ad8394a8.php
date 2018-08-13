<?php

/* BoHomeBundle:Message:recipients2.html.twig */
class __TwigTemplate_02d1568c04b6cf0faf2bd6d4ba14f876e80cba3e21f9cbbdd3c25a22a32e9f67 extends Twig_Template
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
        $__internal_ac25fc694f399cfbb401d24c29fdfdca64e031c762c67944741b4beb6ca3131b = $this->env->getExtension("native_profiler");
        $__internal_ac25fc694f399cfbb401d24c29fdfdca64e031c762c67944741b4beb6ca3131b->enter($__internal_ac25fc694f399cfbb401d24c29fdfdca64e031c762c67944741b4beb6ca3131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Message:recipients2.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idrecipient2' id='idrecipient2'>
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
            if ((array_key_exists("idrecipient2", $context) && ($this->getAttribute($context["recipient"], "id", array()) == (isset($context["idrecipient2"]) ? $context["idrecipient2"] : $this->getContext($context, "idrecipient2"))))) {
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
        
        $__internal_ac25fc694f399cfbb401d24c29fdfdca64e031c762c67944741b4beb6ca3131b->leave($__internal_ac25fc694f399cfbb401d24c29fdfdca64e031c762c67944741b4beb6ca3131b_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Message:recipients2.html.twig";
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
/* 				<select name='idrecipient2' id='idrecipient2'>*/
/* 					<option value="0" selected="delected">Select a recipient</option>*/
/* 					{%for recipient in recipients%}*/
/* 						<option value="{{recipient.id}}" {%if idrecipient2 is defined and recipient.id ==idrecipient2%}selected='selected'{%endif%}>{{recipient.firstname}} {{recipient.name}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
