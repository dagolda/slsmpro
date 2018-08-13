<?php

/* BoAdminBundle:Robot:tbliste.html.twig */
class __TwigTemplate_28fc79cb743e80f6b0d2321e4b1cd3dac744412ccaf4fb2faabef803636b14d2 extends Twig_Template
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
        $__internal_afac04d5a937e7d2cca1aeaaed8506414dd3baddb52b9072152dcf45c1db45a0 = $this->env->getExtension("native_profiler");
        $__internal_afac04d5a937e7d2cca1aeaaed8506414dd3baddb52b9072152dcf45c1db45a0->enter($__internal_afac04d5a937e7d2cca1aeaaed8506414dd3baddb52b9072152dcf45c1db45a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Robot:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.date", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.number", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.number", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.start", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.end", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Source</th>
                <th width=\"126px\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["robots"]) ? $context["robots"] : $this->getContext($context, "robots")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["robot"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("robot_show", array("id" => $this->getAttribute($context["robot"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            if ($this->getAttribute($context["robot"], "ddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["robot"], "ddate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot"], "nbcontract", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot"], "nbgroup", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot"], "start", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot"], "end", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["robot"], "source", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("robot_show", array("id" => $this->getAttribute($context["robot"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['robot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_afac04d5a937e7d2cca1aeaaed8506414dd3baddb52b9072152dcf45c1db45a0->leave($__internal_afac04d5a937e7d2cca1aeaaed8506414dd3baddb52b9072152dcf45c1db45a0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Robot:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  110 => 29,  101 => 25,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  74 => 18,  68 => 17,  65 => 16,  60 => 15,  51 => 9,  47 => 8,  41 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.date'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.number'|trans([],'BoAdminBundle')}} {{'label.contracts'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.number'|trans([],'BoAdminBundle')}} {{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.start'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.end'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Source</th>*/
/*                 <th width="126px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for robot in robots %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('robot_show', { 'id': robot.id }) }}">{{ robot.id }}</a></td>*/
/*                 <td>{% if robot.ddate %}{{ robot.ddate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ robot.nbcontract }}</td>*/
/*                 <td>{{ robot.nbgroup }}</td>*/
/*                 <td>{{ robot.start }}</td>*/
/*                 <td>{{ robot.end }}</td>*/
/*                 <td>{{ robot.source }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('robot_show', { 'id': robot.id }) }}">show</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
