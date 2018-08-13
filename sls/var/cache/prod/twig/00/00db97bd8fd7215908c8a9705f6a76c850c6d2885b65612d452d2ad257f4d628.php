<?php

/* BoAdminBundle:Contracts:emp_close.html.twig */
class __TwigTemplate_bb92f293e288738b8f01046b83f57fbb845d32684836eecd14c8291a1c658411 extends Twig_Template
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
        $__internal_00626d1591eb86697cb918664e76293df86309a53252c7bda75f41959af63194 = $this->env->getExtension("native_profiler");
        $__internal_00626d1591eb86697cb918664e76293df86309a53252c7bda75f41959af63194->enter($__internal_00626d1591eb86697cb918664e76293df86309a53252c7bda75f41959af63194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:emp_close.html.twig"));

        // line 1
        echo "\t\t\t\t\t\t\t";
        $context["tab"] = array();
        // line 2
        echo "\t\t\t\t\t\t\t";
        $context["j"] = 1;
        // line 3
        echo "\t\t\t\t\t\t\t";
        $context["al"] = twig_length_filter($this->env, (isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
        // line 4
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 5
            echo "\t\t\t\t\t\t\t\t";
            $context["teacher"] = $this->getAttribute($context["agenda"], "employee", array());
            // line 6
            echo "\t\t\t\t\t\t\t\t";
            if (((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")) &&  !$this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "firstname", array()) . " ") . $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "name", array())), array(), "array", true, true))) {
                // line 7
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "name", array()), "html", null, true);
                if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) < (isset($context["al"]) ? $context["al"] : $this->getContext($context, "al")))) {
                    echo ",";
                }
                // line 8
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 9
                echo "\t\t\t\t\t\t\t\t\t";
                $context["tab"] = twig_array_merge((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), array((($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "firstname", array()) . " ") . $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "name", array())) => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array())));
                // line 10
                echo "\t\t\t\t\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t\t\t\t\t";
                $context["al"] = ((isset($context["al"]) ? $context["al"] : $this->getContext($context, "al")) - 1);
                // line 12
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_00626d1591eb86697cb918664e76293df86309a53252c7bda75f41959af63194->leave($__internal_00626d1591eb86697cb918664e76293df86309a53252c7bda75f41959af63194_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:emp_close.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  50 => 8,  42 => 7,  39 => 6,  36 => 5,  31 => 4,  28 => 3,  25 => 2,  22 => 1,);
    }
}
/* 							{%set tab={}%}*/
/* 							{%set j=1%}*/
/* 							{%set al=agendas|length%}*/
/* 							{%for agenda in agendas %}*/
/* 								{%set teacher=agenda.employee%}*/
/* 								{%if teacher and tab[teacher.firstname~' '~teacher.name] is not defined%}*/
/* 									{{ teacher.firstname }} {{ teacher.name }}{%if j<al%},{%endif%}*/
/* {%set j=j+1%}*/
/* 									{%set tab = tab|merge({(teacher.firstname~' '~teacher.name):(teacher.id)})%}*/
/* 								{%else%}*/
/* 									{%set al=al-1%}*/
/* 								{%endif%}*/
/* 							{%endfor%}*/
/* */
