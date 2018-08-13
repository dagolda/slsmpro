<?php

/* BoAdminBundle:Errors:tbliste.html.twig */
class __TwigTemplate_f00af8ca7250e05d69f87dbedcbadd11617baac63dace6720c0dd7728afb1205 extends Twig_Template
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
        $__internal_88ef3504cd15de79ec043a17e39f8522783d7c1d4b7124c66dbf45daf2277273 = $this->env->getExtension("native_profiler");
        $__internal_88ef3504cd15de79ec043a17e39f8522783d7c1d4b7124c66dbf45daf2277273->enter($__internal_88ef3504cd15de79ec043a17e39f8522783d7c1d4b7124c66dbf45daf2277273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Errors:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Action</th>
                <th>Comment</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "code", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "action", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "comment", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["error"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["error"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("errors_show", array("id" => $this->getAttribute($context["error"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<tr><td colspan=\"7\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_88ef3504cd15de79ec043a17e39f8522783d7c1d4b7124c66dbf45daf2277273->leave($__internal_88ef3504cd15de79ec043a17e39f8522783d7c1d4b7124c66dbf45daf2277273_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Errors:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  74 => 23,  65 => 19,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  43 => 13,  38 => 12,  30 => 7,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Code</th>*/
/*                 <th>Action</th>*/
/*                 <th>Comment</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for error in errors %}*/
/*             <tr>*/
/*                 <td>{{ error.code }}</td>*/
/*                 <td>{{ error.action }}</td>*/
/*                 <td>{{ error.comment }}</td>*/
/*                 <td>{% if error.creationdate %}{{ error.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('errors_show', { 'id': error.id }) }}">show</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
