<?php

/* BoAdminBundle:Workfields:tbliste.html.twig */
class __TwigTemplate_b6aef88ae6da3b16eadf417177fcbf56868297727fdbc967eb9dc33525ab70d9 extends Twig_Template
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
        $__internal_72eea31965f84784aa262cf17c902a7ac283cbc089a9a3d5fd29d8fc0190fd1c = $this->env->getExtension("native_profiler");
        $__internal_72eea31965f84784aa262cf17c902a7ac283cbc089a9a3d5fd29d8fc0190fd1c->enter($__internal_72eea31965f84784aa262cf17c902a7ac283cbc089a9a3d5fd29d8fc0190fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Workfields:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Details</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlycharge", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Cration date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workfields"]) ? $context["workfields"] : $this->getContext($context, "workfields")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["workfield"]) {
            // line 14
            echo "            <tr>
                <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("workfields_show", array("id" => $this->getAttribute($context["workfield"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["workfield"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["workfield"], "wfname", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["workfield"], "details", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["workfield"], "chargescale", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 19
            if ($this->getAttribute($context["workfield"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["workfield"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("workfields_show", array("id" => $this->getAttribute($context["workfield"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("workfields_edit", array("id" => $this->getAttribute($context["workfield"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<tr><td colspan=\"4\">Aucune entrée de Workfields trouvée dans la base de données</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workfield'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>";
        
        $__internal_72eea31965f84784aa262cf17c902a7ac283cbc089a9a3d5fd29d8fc0190fd1c->leave($__internal_72eea31965f84784aa262cf17c902a7ac283cbc089a9a3d5fd29d8fc0190fd1c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Workfields:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  93 => 26,  82 => 22,  78 => 21,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  53 => 15,  50 => 14,  45 => 13,  36 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Details</th>*/
/*                 <th>{{'label.hourlycharge'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Cration date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for workfield in workfields %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('workfields_show', { 'id': workfield.id }) }}">{{ workfield.id }}</a></td>*/
/*                 <td>{{ workfield.wfname }}</td>*/
/* 				<td>{{ workfield.details }}</td>*/
/*                 <td>{{ workfield.chargescale }}</td>*/
/* 				<td>{% if workfield.creationdate %}{{ workfield.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('workfields_show', { 'id': workfield.id }) }}">show</a>*/
/*                     <a href="{{ path('workfields_edit', { 'id': workfield.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="4">Aucune entrée de Workfields trouvée dans la base de données</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
