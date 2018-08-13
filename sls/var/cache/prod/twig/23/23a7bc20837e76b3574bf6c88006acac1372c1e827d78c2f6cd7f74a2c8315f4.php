<?php

/* BoAdminBundle:Otherprices:tbliste.html.twig */
class __TwigTemplate_edc73fe8154d4173c5a97f7c9d8d68aab2b5d33724e48355c36de8d04a558ce3 extends Twig_Template
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
        $__internal_c265f64f77152368b76f6ae4a0ac0ed7d225edc125e16d5837fd55066190f213 = $this->env->getExtension("native_profiler");
        $__internal_c265f64f77152368b76f6ae4a0ac0ed7d225edc125e16d5837fd55066190f213->enter($__internal_c265f64f77152368b76f6ae4a0ac0ed7d225edc125e16d5837fd55066190f213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Otherprices:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
\t\t\t\t<th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.feature", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>   \t\t\t\t
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.priceonsite", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.priceoffsite", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["otherprices"]) ? $context["otherprices"] : $this->getContext($context, "otherprices")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["otherprice"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("otherprices_show", array("id" => $this->getAttribute($context["otherprice"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["otherprice"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["otherprice"], "contracttype", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["otherprice"], "language", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["otherprice"], "ftorpt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feature"]) ? $context["feature"] : $this->getContext($context, "feature")), $this->getAttribute($context["otherprice"], "feature", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["otherprice"], "priceonsite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["otherprice"], "priceoffsite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["otherprice"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["otherprice"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\" nowrap>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("otherprices_show", array("id" => $this->getAttribute($context["otherprice"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 28
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Prices", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Prices", array(), "array"), "edit", array()) == 1))) {
                // line 29
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("otherprices_edit", array("id" => $this->getAttribute($context["otherprice"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 31
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otherprice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
";
        
        $__internal_c265f64f77152368b76f6ae4a0ac0ed7d225edc125e16d5837fd55066190f213->leave($__internal_c265f64f77152368b76f6ae4a0ac0ed7d225edc125e16d5837fd55066190f213_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Otherprices:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 36,  128 => 34,  121 => 31,  113 => 29,  111 => 28,  105 => 27,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  68 => 18,  65 => 17,  60 => 16,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/* 				<th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>  */
/* 				<th>{{'label.feature'|trans([],'BoAdminBundle')}}</th>   				*/
/*                 <th>{{'label.priceonsite'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.priceoffsite'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for otherprice in otherprices %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('otherprices_show', { 'id': otherprice.id }) }}">{{ otherprice.id }}</a></td>*/
/* 				<td>{{ otherprice.contracttype }}</td>*/
/*                 <td>{{ otherprice.language }}</td>*/
/*                 <td>{{ otherprice.ftorpt }}</td>*/
/*                 <td>{{ feature[otherprice.feature] }}</td>*/
/*                 <td>{{ otherprice.priceonsite }}</td>*/
/*                 <td>{{ otherprice.priceoffsite }}</td>*/
/*                 <td>{% if otherprice.creationdate %}{{ otherprice.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action" nowrap>*/
/*                     <a href="{{ path('otherprices_show', { 'id': otherprice.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Prices'] is defined and app.session.get('rights')['CONTRACTS']['Prices'].edit==1%}*/
/* 						<a href="{{ path('otherprices_edit', { 'id': otherprice.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
