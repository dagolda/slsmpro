<?php

/* BoAdminBundle:Language:tbliste.html.twig */
class __TwigTemplate_8d4638be0bfe7ee31d660ccca15982c797aa4a456ef979ce82615ecd214af15d extends Twig_Template
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
        $__internal_48c6ea672994f4f2bdae44d520519a7041c9dd0c8bcf617bfbdf6276cf6ae362 = $this->env->getExtension("native_profiler");
        $__internal_48c6ea672994f4f2bdae44d520519a7041c9dd0c8bcf617bfbdf6276cf6ae362->enter($__internal_48c6ea672994f4f2bdae44d520519a7041c9dd0c8bcf617bfbdf6276cf6ae362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Language:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Creationdate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 12
            echo "            <tr>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("language_show", array("id" => $this->getAttribute($context["language"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            if ($this->getAttribute($context["language"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["language"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("language_show", array("id" => $this->getAttribute($context["language"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("language_edit", array("id" => $this->getAttribute($context["language"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
";
        
        $__internal_48c6ea672994f4f2bdae44d520519a7041c9dd0c8bcf617bfbdf6276cf6ae362->leave($__internal_48c6ea672994f4f2bdae44d520519a7041c9dd0c8bcf617bfbdf6276cf6ae362_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Language:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  62 => 18,  58 => 17,  51 => 15,  47 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Creationdate</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for language in languages %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('language_show', { 'id': language.id }) }}">{{ language.id }}</a></td>*/
/*                 <td>{{ language.name }}</td>*/
/*                 <td>{% if language.creationdate %}{{ language.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('language_show', { 'id': language.id }) }}">show</a>*/
/* 					<a href="{{ path('language_edit', { 'id': language.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
