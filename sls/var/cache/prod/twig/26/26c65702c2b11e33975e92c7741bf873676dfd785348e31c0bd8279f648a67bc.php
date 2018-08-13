<?php

/* BoAdminBundle:Campus:local.html.twig */
class __TwigTemplate_0811790c7956869187cc8a0a26893429a5720c5adc70289016462faee1f23666 extends Twig_Template
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
        $__internal_1fcf6ec0494ae451de39880aae6891c42e014a12c69a7f67ab6852dfc3e17d82 = $this->env->getExtension("native_profiler");
        $__internal_1fcf6ec0494ae451de39880aae6891c42e014a12c69a7f67ab6852dfc3e17d82->enter($__internal_1fcf6ec0494ae451de39880aae6891c42e014a12c69a7f67ab6852dfc3e17d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Campus:local.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dimension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locals"]) ? $context["locals"] : $this->getContext($context, "locals")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 14
            echo "            <tr>
                <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_show", array("id" => $this->getAttribute($context["local"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "dimension", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["local"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["local"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_show", array("id" => $this->getAttribute($context["local"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/afficher.jpg"), "html", null, true);
            echo "\" />show</a>
\t\t\t\t\t";
            // line 22
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Campus", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Campus", array(), "array"), "edit", array()) == 1))) {
                echo "\t
\t\t\t\t\t\t<a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_edit", array("id" => $this->getAttribute($context["local"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/modifier.jpg"), "html", null, true);
                echo "\" />";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 25
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t\t\t<tr><td colspan=\"6\">Aucune entrée de local trouvée dans la base de données</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>";
        
        $__internal_1fcf6ec0494ae451de39880aae6891c42e014a12c69a7f67ab6852dfc3e17d82->leave($__internal_1fcf6ec0494ae451de39880aae6891c42e014a12c69a7f67ab6852dfc3e17d82_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Campus:local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  110 => 28,  103 => 25,  94 => 23,  90 => 22,  84 => 21,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  59 => 15,  56 => 14,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.dimension'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for local in locals %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('local_show', { 'id': local.id }) }}">{{ local.id }}</a></td>*/
/*                 <td>{{ local.reference }}</td>*/
/*                 <td>{{ local.designation }}</td>*/
/*                 <td>{{ local.dimension }}</td>*/
/*                 <td>{% if local.creationdate %}{{ local.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('local_show', { 'id': local.id }) }}"><img src="{{ asset('images/actions/afficher.jpg') }}" />show</a>*/
/* 					{%if app.session.get('rights')['ROOMS']['Campus'] is defined and app.session.get('rights')['ROOMS']['Campus'].edit==1%}	*/
/* 						<a href="{{ path('local_edit', { 'id': local.id }) }}"><img src="{{ asset('images/actions/modifier.jpg') }}" />{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">Aucune entrée de local trouvée dans la base de données</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
