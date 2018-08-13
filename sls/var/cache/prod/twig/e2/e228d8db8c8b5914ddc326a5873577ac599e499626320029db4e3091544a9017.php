<?php

/* BoAdminBundle:Agenda:teacherlist.html.twig */
class __TwigTemplate_a56795963d110ebbf5abbbbfbc602abe1eca92f6292311c44bfa9711376691a6 extends Twig_Template
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
        $__internal_df81351df39bfda3c8d7b83b731ae2000ac01fbf3c99af752400df85d27be5eb = $this->env->getExtension("native_profiler");
        $__internal_df81351df39bfda3c8d7b83b731ae2000ac01fbf3c99af752400df85d27be5eb->enter($__internal_df81351df39bfda3c8d7b83b731ae2000ac01fbf3c99af752400df85d27be5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:teacherlist.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idteacher' id='idteacher' height=\"40px\">
\t\t\t\t\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 3
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("employee", $context) && ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()) == $this->getAttribute($context["teacher"], "id", array())))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "\t\t\t\t</select>\t
";
        
        $__internal_df81351df39bfda3c8d7b83b731ae2000ac01fbf3c99af752400df85d27be5eb->leave($__internal_df81351df39bfda3c8d7b83b731ae2000ac01fbf3c99af752400df85d27be5eb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:teacherlist.html.twig";
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
/* 				<select name='idteacher' id='idteacher' height="40px">*/
/* 					{%for teacher in teachers%}*/
/* 						<option value="{{teacher.id}}" {%if employee is defined and employee.id==teacher.id%}selected='selected'{%endif%}>{{teacher.firstname}} {{teacher.name}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
/* */
