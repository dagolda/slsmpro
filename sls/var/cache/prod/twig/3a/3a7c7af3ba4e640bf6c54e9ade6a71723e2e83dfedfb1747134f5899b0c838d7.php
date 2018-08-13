<?php

/* BoQuizBundle:Quiz:tbliste.html.twig */
class __TwigTemplate_331d50f0436c6369726a70b7f83531b9b972ec22def17d8bc5fdbeb57b3d3a92 extends Twig_Template
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
        $__internal_2220ac1cdd914b79a31971ce7b400bf33ced5be0e08b012b531ee57ee63abfbd = $this->env->getExtension("native_profiler");
        $__internal_2220ac1cdd914b79a31971ce7b400bf33ced5be0e08b012b531ee57ee63abfbd->enter($__internal_2220ac1cdd914b79a31971ce7b400bf33ced5be0e08b012b531ee57ee63abfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoQuizBundle:Quiz:tbliste.html.twig"));

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
\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) ? $context["quizzes"] : $this->getContext($context, "quizzes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 13
            echo "            <tr>
                <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quiz_show", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quiz"], "category", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo ",";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "---";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["quiz"], "type", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "type", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td class=\"list-action\">
                    \t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quiz_show", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t";
            // line 20
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ADMINISTRATION", array(), "array", false, true), "Quiz", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Quiz", array(), "array"), "edit", array()) == 1))) {
                // line 21
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quiz_edit", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t";
            }
            // line 23
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<tr><td colspan=\"3\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
";
        
        $__internal_2220ac1cdd914b79a31971ce7b400bf33ced5be0e08b012b531ee57ee63abfbd->leave($__internal_2220ac1cdd914b79a31971ce7b400bf33ced5be0e08b012b531ee57ee63abfbd_prof);

    }

    public function getTemplateName()
    {
        return "BoQuizBundle:Quiz:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  112 => 26,  105 => 23,  97 => 21,  95 => 20,  91 => 19,  82 => 17,  65 => 16,  61 => 15,  55 => 14,  52 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.type'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for quiz in quizzes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('quiz_show', { 'id': quiz.id }) }}">{{ quiz.id }}</a></td>*/
/*                 <td>{{ quiz.name }}</td>*/
/*                 <td>{%for category in quiz.category %}{{ category.name }},{%else%}---{%endfor%}</td>*/
/*                 <td>{%if quiz.type %}{{ quiz.type }}{%else%}---{%endif%}</td>*/
/*                 <td class="list-action">*/
/*                     	<a href="{{ path('quiz_show', { 'id': quiz.id }) }}">show</a>*/
/* 			{%if app.session.get('rights')['ADMINISTRATION']['Quiz'] is defined and app.session.get('rights')['ADMINISTRATION']['Quiz'].edit==1%}*/
/* 			<a href="{{ path('quiz_edit', { 'id': quiz.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 		{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="3">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
