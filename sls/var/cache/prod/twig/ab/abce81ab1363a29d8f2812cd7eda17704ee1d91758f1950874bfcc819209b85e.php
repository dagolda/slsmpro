<?php

/* BoAdminBundle:Client:contracts.html.twig */
class __TwigTemplate_46ba25041c913b698290187327dc238323f85164af1c054f3e29f31c33062612 extends Twig_Template
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
        $__internal_c5d490fd7e23329a77f7a814ea810c7819b7b90b4c9e2b5e23c60e2d19133d32 = $this->env->getExtension("native_profiler");
        $__internal_c5d490fd7e23329a77f7a814ea810c7819b7b90b4c9e2b5e23c60e2d19133d32->enter($__internal_c5d490fd7e23329a77f7a814ea810c7819b7b90b4c9e2b5e23c60e2d19133d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Client:contracts.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Workfield</th>
                <th>Hour's number</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "workfields", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "hoursnumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["contract"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["contract"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["contract"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_edit", array("id" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "\t\t\t<tr><td colspan=\"9\">Aucune entrée de contrat trouvée dans la base de données</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>";
        
        $__internal_c5d490fd7e23329a77f7a814ea810c7819b7b90b4c9e2b5e23c60e2d19133d32->leave($__internal_c5d490fd7e23329a77f7a814ea810c7819b7b90b4c9e2b5e23c60e2d19133d32_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Client:contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 34,  121 => 32,  110 => 28,  106 => 27,  99 => 25,  93 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  65 => 18,  62 => 17,  57 => 16,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Workfield</th>*/
/*                 <th>Hour's number</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contracts_show', { 'id': contract.id }) }}">{{ contract.id }}</a></td>*/
/*                 <td>{{ contract.reference }}</td>*/
/*                 <td>{{ contract.typecontract }}</td>*/
/*                 <td>{{ contract.workfields }}</td>*/
/*                 <td>{{ contract.hoursnumber }}</td>*/
/*                 <td>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if contract.creationdate %}{{ contract.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('contracts_show', { 'id': contract.id }) }}">show</a>*/
/*                     <a href="{{ path('contracts_edit', { 'id': contract.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">Aucune entrée de contrat trouvée dans la base de données</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
