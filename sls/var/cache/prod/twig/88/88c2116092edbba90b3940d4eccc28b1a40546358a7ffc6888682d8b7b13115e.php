<?php

/* BoAdminBundle:Group:historic.html.twig */
class __TwigTemplate_4e9eeedb5e84c8ea8440dd077e983ac193207009427bc91d20e0eaa0152deddd extends Twig_Template
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
        $__internal_2ad6a2125376fb712cb6c26f3987298d3a1f72fb25c6c0c14eb17378fef905cc = $this->env->getExtension("native_profiler");
        $__internal_2ad6a2125376fb712cb6c26f3987298d3a1f72fb25c6c0c14eb17378fef905cc->enter($__internal_2ad6a2125376fb712cb6c26f3987298d3a1f72fb25c6c0c14eb17378fef905cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:historic.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historics"]) ? $context["historics"] : $this->getContext($context, "historics")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["historic"]) {
            // line 15
            echo "\t\t\t";
            $context["student"] = $this->getAttribute($context["historic"], "student", array());
            // line 16
            echo "\t\t\t";
            $context["group"] = $this->getAttribute($context["historic"], "group", array());
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startlevel", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startlevel", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["historic"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "\t\t\t<tr><td colspan=\"7\">No activity entry found in database</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>";
        
        $__internal_2ad6a2125376fb712cb6c26f3987298d3a1f72fb25c6c0c14eb17378fef905cc->leave($__internal_2ad6a2125376fb712cb6c26f3987298d3a1f72fb25c6c0c14eb17378fef905cc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:historic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 29,  122 => 27,  112 => 24,  104 => 23,  96 => 22,  88 => 21,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for historic in historics %}*/
/* 			{%set student=historic.student%}*/
/* 			{%set group=historic.group%}*/
/*             <tr>*/
/*                 <td>{{ student.name }}</td>*/
/*                 <td>{{ student.firstname }}</td>*/
/*                 <td>{%if student.startlevel %}{{ student.startlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if student.targetlevel %}{{ student.targetlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{% if student.startdate %}{{ student.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if student.enddate %}{{ student.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if historic.creationdate %}{{ student.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">No activity entry found in database</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
