<?php

/* BoAdvisorsBundle:Supervision:teachers.html.twig */
class __TwigTemplate_a00b01f6a73a16ba8d64746992b6c10c3ff40102b25d45d84216649b08df07e3 extends Twig_Template
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
        $__internal_3354239aa4100aa8ea96c24e87e10b328c5a2a1eb032f66b528182991d554926 = $this->env->getExtension("native_profiler");
        $__internal_3354239aa4100aa8ea96c24e87e10b328c5a2a1eb032f66b528182991d554926->enter($__internal_3354239aa4100aa8ea96c24e87e10b328c5a2a1eb032f66b528182991d554926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Supervision:teachers.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"10%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"11%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"18%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"28%\" colspan=\"2\">Schedule</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 13
        $context["i"] = 0;
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 15
            echo "\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td colspan=\"2\"><center>";
            // line 22
            if (($this->getAttribute((isset($context["teacherschedule"]) ? $context["teacherschedule"] : null), $this->getAttribute($context["employee"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["teacherschedule"]) ? $context["teacherschedule"] : $this->getContext($context, "teacherschedule")), $this->getAttribute($context["employee"], "id", array()), array(), "array") != null))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacherschedule"]) ? $context["teacherschedule"] : $this->getContext($context, "teacherschedule")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</center></td>
            </tr>\t\t\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_3354239aa4100aa8ea96c24e87e10b328c5a2a1eb032f66b528182991d554926->leave($__internal_3354239aa4100aa8ea96c24e87e10b328c5a2a1eb032f66b528182991d554926_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Supervision:teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  58 => 15,  53 => 14,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="10%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.homenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="28%" colspan="2">Schedule</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{% set i=0 %}*/
/*         {% for employee in teachers %}*/
/* 			{% set i=i+1 %}*/
/*             <tr>*/
/*                 <td>{{ employee.firstname }}</td>*/
/*                 <td>{{ employee.name }}</td>*/
/*                 <td>{{ employee.email }}</td>*/
/*                 <td>{{ employee.homenumber }}</td>*/
/*                 <td>{{ employee.cellnumber }}</td>*/
/* 				<td colspan="2"><center>{%if teacherschedule[employee.id] is defined and teacherschedule[employee.id]!=null %}{{ teacherschedule[employee.id]}}{%else%}---{%endif%}</center></td>*/
/*             </tr>				*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
