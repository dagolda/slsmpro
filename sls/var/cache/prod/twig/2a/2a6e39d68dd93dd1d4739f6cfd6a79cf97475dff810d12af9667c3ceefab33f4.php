<?php

/* BoAdminBundle:Rubric:show.html.twig */
class __TwigTemplate_f17055ecf3c83b4f792c3717850226090f8acccf4fa9770f0edb6d0df4e470ea extends Twig_Template
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
        $__internal_e26a7301863eaa3b8002064ab5ad35999de63be17bb41b5f4aad2f03e82295ea = $this->env->getExtension("native_profiler");
        $__internal_e26a7301863eaa3b8002064ab5ad35999de63be17bb41b5f4aad2f03e82295ea->enter($__internal_e26a7301863eaa3b8002064ab5ad35999de63be17bb41b5f4aad2f03e82295ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:show.html.twig"));

        // line 1
        echo "\t<table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Name (english)</th>
                <th>Name (french)</th>
                <th>Ordre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subrubrics"]) ? $context["subrubrics"] : $this->getContext($context, "subrubrics")));
        foreach ($context['_seq'] as $context["_key"] => $context["subrubric"]) {
            // line 12
            echo "            <tr>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["subrubric"], "nameen", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["subrubric"], "namefr", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["subrubric"], "ordre", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subrubric_edit", array("id" => $this->getAttribute($context["subrubric"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subrubric'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t";
        $this->loadTemplate("BoAdminBundle:Rubric:srubricnew.html.twig", "BoAdminBundle:Rubric:show.html.twig", 21)->display($context);
        echo "\t\t
        </tbody>
    </table>
";
        
        $__internal_e26a7301863eaa3b8002064ab5ad35999de63be17bb41b5f4aad2f03e82295ea->leave($__internal_e26a7301863eaa3b8002064ab5ad35999de63be17bb41b5f4aad2f03e82295ea_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  54 => 17,  49 => 15,  45 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* 	<table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name (english)</th>*/
/*                 <th>Name (french)</th>*/
/*                 <th>Ordre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for subrubric in subrubrics %}*/
/*             <tr>*/
/*                 <td>{{ subrubric.nameen }}</td>*/
/*                 <td>{{ subrubric.namefr }}</td>*/
/*                 <td>{{ subrubric.ordre }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('subrubric_edit', { 'id': subrubric.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/* 			{% include 'BoAdminBundle:Rubric:srubricnew.html.twig' %}		*/
/*         </tbody>*/
/*     </table>*/
/* */
