<?php

/* BoAdminBundle:Advisors:details.html.twig */
class __TwigTemplate_40f0e6f12acd08060863ef88a7d4e552e86d2f6c6b9b824f3d7a852abe50eb52 extends Twig_Template
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
        $__internal_0915ca9fee686a6719e2c4061a2b88920fc722ba64f00c3537f53e46a804421b = $this->env->getExtension("native_profiler");
        $__internal_0915ca9fee686a6719e2c4061a2b88920fc722ba64f00c3537f53e46a804421b->enter($__internal_0915ca9fee686a6719e2c4061a2b88920fc722ba64f00c3537f53e46a804421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:details.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.number", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.coefficient", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.total", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t";
        // line 11
        $context["total"] = 0;
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 13
            echo "\t";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["detail"], "total", array(), "array"));
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "label", array(), "array"), "html", null, true);
            echo "</td>
                <td align='right'>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "number", array(), "array"), "html", null, true);
            echo "</td>
                <td align='right'>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "param", array(), "array"), "html", null, true);
            echo "</td>
                <td align='right'>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "total", array(), "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            <tr>
                <td colspan=\"3\"><b>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.total", array(), "BoAdminBundle"), "html", null, true);
        echo "</b></td>
                <td align='right'><b>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</b></td>
            </tr>
        </tbody>
    </table>
";
        
        $__internal_0915ca9fee686a6719e2c4061a2b88920fc722ba64f00c3537f53e46a804421b->leave($__internal_0915ca9fee686a6719e2c4061a2b88920fc722ba64f00c3537f53e46a804421b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  83 => 22,  80 => 21,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  56 => 14,  53 => 13,  48 => 12,  46 => 11,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.number'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.coefficient'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.total'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 	{%set total=0%}*/
/*         {% for detail in details %}*/
/* 	{%set total=total+detail['total']%}*/
/*             <tr>*/
/*                 <td>{{detail['label']}}</td>*/
/*                 <td align='right'>{{detail['number']}}</td>*/
/*                 <td align='right'>{{detail['param']}}</td>*/
/*                 <td align='right'>{{detail['total']}}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*             <tr>*/
/*                 <td colspan="3"><b>{{'label.total'|trans([],'BoAdminBundle')}}</b></td>*/
/*                 <td align='right'><b>{{total}}</b></td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
