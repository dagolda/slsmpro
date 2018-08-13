<?php

/* BoAdminBundle:Pricesreference:prices.html.twig */
class __TwigTemplate_71788eebc34dfb7e39ab026406ed9ccaec3519da5aa04fcfb5e8036ec6959218 extends Twig_Template
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
        $__internal_dd1386b08416751af9cc0bf99461f24a613ff7bde653eeb7f164ce5aa163e37a = $this->env->getExtension("native_profiler");
        $__internal_dd1386b08416751af9cc0bf99461f24a613ff7bde653eeb7f164ce5aa163e37a->enter($__internal_dd1386b08416751af9cc0bf99461f24a613ff7bde653eeb7f164ce5aa163e37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Pricesreference:prices.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.price", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prices"]) ? $context["prices"] : $this->getContext($context, "prices")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            if ($this->getAttribute($context["price"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["price"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 15
            if ($this->getAttribute($context["price"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["price"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            if ($this->getAttribute($context["price"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["price"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#edit_price";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<tr><td colspan=\"5\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t
        </tbody>
    </table>";
        
        $__internal_dd1386b08416751af9cc0bf99461f24a613ff7bde653eeb7f164ce5aa163e37a->leave($__internal_dd1386b08416751af9cc0bf99461f24a613ff7bde653eeb7f164ce5aa163e37a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Pricesreference:prices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  89 => 23,  78 => 19,  71 => 17,  67 => 16,  61 => 15,  55 => 14,  52 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.price'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for price in prices %}*/
/*             <tr>*/
/*                 <td>{% if price.startdate %}{{ price.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if price.enddate %}{{ price.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ price.price }}</td>*/
/* 				<td>{% if price.creationdate %}{{ price.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#edit_price{{price.id}}">{{'action.edit'|trans([],'BoAdminBundle')}}</button>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="5">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}			*/
/*         </tbody>*/
/*     </table>*/
