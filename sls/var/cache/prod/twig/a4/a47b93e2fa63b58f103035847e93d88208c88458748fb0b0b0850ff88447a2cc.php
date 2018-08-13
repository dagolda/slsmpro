<?php

/* BoAdminBundle:Group:teachers.html.twig */
class __TwigTemplate_84a19468a790f63b57e9f91678cca1b19dea656b9f9dd6277907323aca120be4 extends Twig_Template
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
        $__internal_6c505d4b2aa838d091c44762ca6f750b69960481330600149d7b071924105fdd = $this->env->getExtension("native_profiler");
        $__internal_6c505d4b2aa838d091c44762ca6f750b69960481330600149d7b071924105fdd->enter($__internal_6c505d4b2aa838d091c44762ca6f750b69960481330600149d7b071924105fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:teachers.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"11%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
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
\t\t\t\t<th width=\"28%\" colspan=\"2\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
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
        $context['_iterated'] = false;
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
            </tr>\t
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>\t\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>";
        
        $__internal_6c505d4b2aa838d091c44762ca6f750b69960481330600149d7b071924105fdd->leave($__internal_6c505d4b2aa838d091c44762ca6f750b69960481330600149d7b071924105fdd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  100 => 25,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  65 => 16,  62 => 15,  56 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="11%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.homenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="28%" colspan="2">{{'label.schedule'|trans([],'BoAdminBundle')}}</th>*/
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
/*             </tr>	*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>			*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
