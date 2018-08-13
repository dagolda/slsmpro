<?php

/* BoAdminBundle:Contracts:localform.html.twig */
class __TwigTemplate_56dacdbb3076bec7ba810b9f41b08e4402de2810fb76aefc8387f1f00fe2840a extends Twig_Template
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
        $__internal_439aedfc14d7b524396d178b42033ea4070b71f38aee8da439723ff6f0fbdea6 = $this->env->getExtension("native_profiler");
        $__internal_439aedfc14d7b524396d178b42033ea4070b71f38aee8da439723ff6f0fbdea6->enter($__internal_439aedfc14d7b524396d178b42033ea4070b71f38aee8da439723ff6f0fbdea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:localform.html.twig"));

        // line 1
        echo "\t\t\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("contracts_local_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<select name='local' id='local'>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">Select a local</option>
\t\t\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["s_locals"]) ? $context["s_locals"] : $this->getContext($context, "s_locals")));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 5
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], 0, array(), "array"), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idlocal", $context) && ($this->getAttribute($context["local"], 0, array(), "array") == (isset($context["idlocal"]) ? $context["idlocal"] : $this->getContext($context, "idlocal"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], 1, array(), "array"), "html", null, true);
            echo " </option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t\t\t</select>\t
\t\t\t\t<button type=\"submit\" id=\"local-create\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t</form>
";
        
        $__internal_439aedfc14d7b524396d178b42033ea4070b71f38aee8da439723ff6f0fbdea6->leave($__internal_439aedfc14d7b524396d178b42033ea4070b71f38aee8da439723ff6f0fbdea6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:localform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  48 => 7,  33 => 5,  29 => 4,  22 => 1,);
    }
}
/* 			<form action="{{ path('contracts_local_new') }}" method="post" class="style">*/
/* 				<select name='local' id='local'>*/
/* 					<option value="0" selected="selected">Select a local</option>*/
/* 					{%for local in s_locals%}*/
/* 						<option value="{{local[0]}}" {%if idlocal is defined and local[0]==idlocal%}selected='selected'{%endif%}>{{local[1]}} </option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
/* 				<button type="submit" id="local-create">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 			</form>*/
/* */
