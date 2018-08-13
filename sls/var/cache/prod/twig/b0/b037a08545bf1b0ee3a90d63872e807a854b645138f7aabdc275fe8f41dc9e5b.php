<?php

/* BoAdminBundle:Mails:tbliste.html.twig */
class __TwigTemplate_7f77bce1340383ac6563b300c69ee96630e29baea20a363c8862b6cb29f6a25d extends Twig_Template
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
        $__internal_3564bc0a2cd4bb2131f2f15133dedb8ac9cf2763c8d0dbc241495bb218217210 = $this->env->getExtension("native_profiler");
        $__internal_3564bc0a2cd4bb2131f2f15133dedb8ac9cf2763c8d0dbc241495bb218217210->enter($__internal_3564bc0a2cd4bb2131f2f15133dedb8ac9cf2763c8d0dbc241495bb218217210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Mails:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Messageen</th>
                <th>Messagefr</th>
                <th>Datecreation</th>
                <th width=\"120px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : $this->getContext($context, "mails")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 14
            echo "            <tr>
                <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mails_show", array("id" => $this->getAttribute($context["mail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo $this->getAttribute($context["mail"], "messageen", array());
            echo "</td>
                <td>";
            // line 18
            echo $this->getAttribute($context["mail"], "messagefr", array());
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["mail"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mail"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mails_show", array("id" => $this->getAttribute($context["mail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mails_edit", array("id" => $this->getAttribute($context["mail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>\t
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<tr><td colspan=\"7\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
";
        
        $__internal_3564bc0a2cd4bb2131f2f15133dedb8ac9cf2763c8d0dbc241495bb218217210->leave($__internal_3564bc0a2cd4bb2131f2f15133dedb8ac9cf2763c8d0dbc241495bb218217210_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Mails:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  86 => 26,  75 => 22,  69 => 21,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  44 => 15,  41 => 14,  36 => 13,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Messageen</th>*/
/*                 <th>Messagefr</th>*/
/*                 <th>Datecreation</th>*/
/*                 <th width="120px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for mail in mails %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('mails_show', { 'id': mail.id }) }}">{{ mail.id }}</a></td>*/
/*                 <td>{{ mail.name }}</td>*/
/*                 <td>{{ mail.messageen|raw }}</td>*/
/*                 <td>{{ mail.messagefr|raw }}</td>*/
/*                 <td>{% if mail.dateCreation %}{{ mail.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('mails_show', { 'id': mail.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                     <a href="{{ path('mails_edit', { 'id': mail.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>	*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
