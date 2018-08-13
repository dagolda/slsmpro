<?php

/* BoAdminBundle:TicketContacts:selectemployee.html.twig */
class __TwigTemplate_a018d53cbd368617ff29f822308c373cac73b03dc72ae36c2cdb7ef9a66cae31 extends Twig_Template
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
        $__internal_41a6524445373a5dac65cca96483585b96db8bb226c31bf9e4031e55c05ef3f4 = $this->env->getExtension("native_profiler");
        $__internal_41a6524445373a5dac65cca96483585b96db8bb226c31bf9e4031e55c05ef3f4->enter($__internal_41a6524445373a5dac65cca96483585b96db8bb226c31bf9e4031e55c05ef3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TicketContacts:selectemployee.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idsemployee[ ]' id='idsemployee' multiple>
\t\t\t\t\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adminteams"]) ? $context["adminteams"] : $this->getContext($context, "adminteams")));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 3
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idemploye", $context) && ($this->getAttribute($context["employee"], "id", array()) == (isset($context["idemployee"]) ? $context["idemployee"] : $this->getContext($context, "idemployee"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "\t\t\t\t</select>\t";
        
        $__internal_41a6524445373a5dac65cca96483585b96db8bb226c31bf9e4031e55c05ef3f4->leave($__internal_41a6524445373a5dac65cca96483585b96db8bb226c31bf9e4031e55c05ef3f4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TicketContacts:selectemployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idsemployee[ ]' id='idsemployee' multiple>*/
/* 					{%for employee in adminteams%}*/
/* 						<option value="{{employee.id}}" {%if idemploye is defined and employee.id ==idemployee%}selected='selected'{%endif%}>{{employee.firstname}} {{employee.name}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
