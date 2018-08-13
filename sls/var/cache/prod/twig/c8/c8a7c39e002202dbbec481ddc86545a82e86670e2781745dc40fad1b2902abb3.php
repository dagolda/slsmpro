<?php

/* BoHomeBundle:Default:abslist.html.twig */
class __TwigTemplate_44d4735dec1d5c18a1cfa013d43ec1a416f2bd7c1ce674e71535b59139a888b8 extends Twig_Template
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
        $__internal_8f2a86e064b1b6096fec415bacf88016660439968ed4988fdfface4303255fce = $this->env->getExtension("native_profiler");
        $__internal_8f2a86e064b1b6096fec415bacf88016660439968ed4988fdfface4303255fce->enter($__internal_8f2a86e064b1b6096fec415bacf88016660439968ed4988fdfface4303255fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:abslist.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Motif</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "motif", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            if ($this->getAttribute($context["absence"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["absence"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "amorpm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "numberday", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["absence"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<tr><td colspan=\"5\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
        
        $__internal_8f2a86e064b1b6096fec415bacf88016660439968ed4988fdfface4303255fce->leave($__internal_8f2a86e064b1b6096fec415bacf88016660439968ed4988fdfface4303255fce_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:abslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  93 => 23,  83 => 20,  79 => 19,  75 => 18,  69 => 17,  63 => 16,  59 => 15,  56 => 14,  51 => 13,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Motif</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for absence in absences %}*/
/*             <tr>*/
/*                 <td>{{ absence.motif }}</td>*/
/*                 <td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ absence.amorpm }}</td>*/
/*                 <td>{{ absence.numberday }}</td>*/
/*                 <td>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="5">{{'message.no.found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
