<?php

/* BoAdminBundle:Message:tbliste.html.twig */
class __TwigTemplate_32d469f47e807ce606164056fb9b3af550d70c8b6b2c137f576962bea7419b8f extends Twig_Template
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
        $__internal_9e4714f2f43cb179cdd4256ed89dccc491baa0d257bcf9572157f8d63a444411 = $this->env->getExtension("native_profiler");
        $__internal_9e4714f2f43cb179cdd4256ed89dccc491baa0d257bcf9572157f8d63a444411->enter($__internal_9e4714f2f43cb179cdd4256ed89dccc491baa0d257bcf9572157f8d63a444411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Message:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>French</th>
                <th>English</th>
                <th width='110px'>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errormessages"]) ? $context["errormessages"] : $this->getContext($context, "errormessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <tr>
                <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_show", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "descfr", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "descen", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_show", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_edit", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>";
        
        $__internal_9e4714f2f43cb179cdd4256ed89dccc491baa0d257bcf9572157f8d63a444411->leave($__internal_9e4714f2f43cb179cdd4256ed89dccc491baa0d257bcf9572157f8d63a444411_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Message:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  83 => 24,  72 => 20,  68 => 19,  63 => 17,  59 => 16,  55 => 15,  49 => 14,  46 => 13,  41 => 12,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>French</th>*/
/*                 <th>English</th>*/
/*                 <th width='110px'>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for message in errormessages %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('message_show', { 'id': message.id }) }}">{{ message.id }}</a></td>*/
/*                 <td>{{ message.designation }}</td>*/
/*                 <td>{{ message.descfr }}</td>*/
/*                 <td>{{ message.descen }}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('message_show', { 'id': message.id }) }}">show</a>*/
/*                     <a href="{{ path('message_edit', { 'id': message.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
