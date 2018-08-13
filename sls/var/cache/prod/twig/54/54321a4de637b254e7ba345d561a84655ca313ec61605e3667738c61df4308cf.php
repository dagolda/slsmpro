<?php

/* BoHomeBundle:Message:tbliste.html.twig */
class __TwigTemplate_bb0cb35e842ac1fd8532b3cc17dea5f816b7778172f682d2af3f63a15b70939b extends Twig_Template
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
        $__internal_b0cd854829bf67cf3ab82c8e58bbaddaa94e6b905fd11bec2882f07d54409234 = $this->env->getExtension("native_profiler");
        $__internal_b0cd854829bf67cf3ab82c8e58bbaddaa94e6b905fd11bec2882f07d54409234->enter($__internal_b0cd854829bf67cf3ab82c8e58bbaddaa94e6b905fd11bec2882f07d54409234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Message:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userMessages"]) ? $context["userMessages"] : $this->getContext($context, "userMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["userMessage"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["userMessage"], "subject", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            if ($this->getAttribute($context["userMessage"], "sto1", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["userMessage"], "sto1", array()), "html", null, true);
            }
            if ($this->getAttribute($context["userMessage"], "sto2", array())) {
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userMessage"], "sto2", array()), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 16
            if ($this->getAttribute($context["userMessage"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userMessage"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute($context["userMessage"], "status", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td class=\"list-action\" nowrap>
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_message_show", array("id" => $this->getAttribute($context["userMessage"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_b0cd854829bf67cf3ab82c8e58bbaddaa94e6b905fd11bec2882f07d54409234->leave($__internal_b0cd854829bf67cf3ab82c8e58bbaddaa94e6b905fd11bec2882f07d54409234_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Message:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  91 => 23,  80 => 19,  75 => 17,  69 => 16,  59 => 15,  55 => 14,  52 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.to'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for userMessage in userMessages %}*/
/*             <tr>*/
/*                 <td>{{ userMessage.subject }}</td>*/
/*                 <td>{% if userMessage.sto1 %}{{ userMessage.sto1 }}{%endif%}{%if userMessage.sto2 %},{{ userMessage.sto2 }}{%endif%}</td>*/
/*                 <td>{% if userMessage.dateCreation %}{{ userMessage.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{status[userMessage.status]}}</td>*/
/*                 <td class="list-action" nowrap>*/
/*                     <a href="{{ path('student_message_show', { 'id': userMessage.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
