<?php

/* BoAdminBundle:Company:tbliste.html.twig */
class __TwigTemplate_dca03de0b6ebcd4483ae959abb344c8a6224ee4d463e5bf4f267c3a866beaea6 extends Twig_Template
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
        $__internal_4bca12f51f9f2d5921e6177d09bcb3b93420a80270b0dd15bbeb4385bcd10c0b = $this->env->getExtension("native_profiler");
        $__internal_4bca12f51f9f2d5921e6177d09bcb3b93420a80270b0dd15bbeb4385bcd10c0b->enter($__internal_4bca12f51f9f2d5921e6177d09bcb3b93420a80270b0dd15bbeb4385bcd10c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Company:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"6%\">Id</th>
                <th width=\"9%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.account", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">Message en</th>
                <th width=\"30%\">Message fr</th>
                <th width=\"15%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_show", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "compte", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "nname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_slice($this->env, $this->getAttribute($context["company"], "messageen", array()), 0, 500);
            echo "...</td>
                <td>";
            // line 20
            echo twig_slice($this->env, $this->getAttribute($context["company"], "messagefr", array()), 0, 500);
            echo "...</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["company"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["company"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\" nowrap>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_show", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_edit", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
";
        
        $__internal_4bca12f51f9f2d5921e6177d09bcb3b93420a80270b0dd15bbeb4385bcd10c0b->leave($__internal_4bca12f51f9f2d5921e6177d09bcb3b93420a80270b0dd15bbeb4385bcd10c0b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Company:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  88 => 24,  82 => 23,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  53 => 16,  50 => 15,  46 => 14,  38 => 9,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="6%">Id</th>*/
/*                 <th width="9%">{{'label.account'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">Message en</th>*/
/*                 <th width="30%">Message fr</th>*/
/*                 <th width="15%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for company in companies %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('company_show', { 'id': company.id }) }}">{{ company.id }}</a></td>*/
/*                 <td>{{ company.compte }}</td>*/
/*                 <td>{{ company.nname }}</td>*/
/*                 <td>{{ company.messageen[:500]|raw }}...</td>*/
/*                 <td>{{ company.messagefr[:500]|raw }}...</td>*/
/*                 <td>{% if company.dateCreation %}{{ company.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action" nowrap>*/
/*                     <a href="{{ path('company_show', { 'id': company.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					<a href="{{ path('company_edit', { 'id': company.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
