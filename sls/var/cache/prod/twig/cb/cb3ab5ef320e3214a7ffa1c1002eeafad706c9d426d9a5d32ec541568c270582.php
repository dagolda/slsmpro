<?php

/* BoAdminBundle:Profil:rights.html.twig */
class __TwigTemplate_989b7da23f10760a8b7aea1391e79c0dfc1141cedecb02c228881b4e6bab1bd1 extends Twig_Template
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
        $__internal_d2958f7bc514226cde8796de19095d0fbfe45a27be4df3803413bff77aedce49 = $this->env->getExtension("native_profiler");
        $__internal_d2958f7bc514226cde8796de19095d0fbfe45a27be4df3803413bff77aedce49->enter($__internal_d2958f7bc514226cde8796de19095d0fbfe45a27be4df3803413bff77aedce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Profil:rights.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subrubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</a></th>
                <th>Active</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Others</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rights"]) ? $context["rights"] : $this->getContext($context, "rights")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["right"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["right"], "rubric", array()), "nameen", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["right"], "subrubric", array()), "nameen", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "active", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "liste", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "creation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "edit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "ddelete", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "search", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "others", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rights_edit", array("id" => $this->getAttribute($context["right"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 30
            if (((((((($this->getAttribute($context["right"], "active", array()) == 1) && ($this->getAttribute($context["right"], "liste", array()) == 1)) && ($this->getAttribute($context["right"], "creation", array()) == 1)) && ($this->getAttribute($context["right"], "edit", array()) == 1)) && ($this->getAttribute($context["right"], "ddelete", array()) == 1)) && ($this->getAttribute($context["right"], "search", array()) == 1)) && ($this->getAttribute($context["right"], "others", array()) == 1))) {
                // line 31
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rights_disable", array("id" => $this->getAttribute($context["right"], "id", array()))), "html", null, true);
                echo "\">Disable</a>
\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rights_enableall", array("id" => $this->getAttribute($context["right"], "id", array()))), "html", null, true);
                echo "\">Enable</a>
\t\t\t\t\t";
            }
            // line 35
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t<tr><td colspan=\"10\">No right found</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['right'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
";
        
        $__internal_d2958f7bc514226cde8796de19095d0fbfe45a27be4df3803413bff77aedce49->leave($__internal_d2958f7bc514226cde8796de19095d0fbfe45a27be4df3803413bff77aedce49_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Profil:rights.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  133 => 38,  126 => 35,  120 => 33,  114 => 31,  112 => 30,  106 => 29,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  66 => 18,  61 => 17,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.rubric'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.subrubric'|trans([],'BoAdminBundle')}}</a></th>*/
/*                 <th>Active</th>*/
/*                 <th>{{'action.list'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'action.add'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'action.edit'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'action.delete'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'action.search'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Others</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for right in rights %}*/
/*             <tr>*/
/*                 <td>{{ right.rubric.nameen }}</td>*/
/*                 <td>{{ right.subrubric.nameen }}</td>*/
/*                 <td>{{ right.active }}</td>*/
/*                 <td>{{ right.liste }}</td>*/
/*                 <td>{{ right.creation }}</td>*/
/*                 <td>{{ right.edit }}</td>*/
/*                 <td>{{ right.ddelete }}</td>*/
/*                 <td>{{ right.search }}</td>*/
/*                 <td>{{ right.others }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('rights_edit', { 'id': right.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if right.active==1 and right.liste==1 and right.creation==1 and right.edit==1 and right.ddelete==1 and right.search==1 and right.others==1%}*/
/* 						<a href="{{ path('rights_disable', { 'id': right.id }) }}">Disable</a>*/
/* 					{%else%}*/
/* 						<a href="{{ path('rights_enableall', { 'id': right.id }) }}">Enable</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="10">No right found</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
