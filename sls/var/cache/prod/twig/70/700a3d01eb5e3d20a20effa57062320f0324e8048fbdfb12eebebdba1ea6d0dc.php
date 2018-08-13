<?php

/* BoAdminBundle:Profil:tbliste.html.twig */
class __TwigTemplate_8f782a0f2d5f3fc7f4dacb3307ec115a5cceea9d5caefc6dafb8fd1eecde79ba extends Twig_Template
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
        $__internal_d12bf894c51a4ee304fb2b8870c1fa6a9956f052b75c9229cd9dd7f414ad68de = $this->env->getExtension("native_profiler");
        $__internal_d12bf894c51a4ee304fb2b8870c1fa6a9956f052b75c9229cd9dd7f414ad68de->enter($__internal_d12bf894c51a4ee304fb2b8870c1fa6a9956f052b75c9229cd9dd7f414ad68de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Profil:tbliste.html.twig"));

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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
            // line 11
            echo "\t\t\t";
            if (($this->getAttribute($context["profil"], "name", array()) != "Teacher")) {
                // line 12
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_show", array("id" => $this->getAttribute($context["profil"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "id", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t<td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t\t<a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_show", array("id" => $this->getAttribute($context["profil"], "id", array()))), "html", null, true);
                echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_edit", array("id" => $this->getAttribute($context["profil"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 21
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t\t\t<tr><td colspan=\"3\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>";
        
        $__internal_d12bf894c51a4ee304fb2b8870c1fa6a9956f052b75c9229cd9dd7f414ad68de->leave($__internal_d12bf894c51a4ee304fb2b8870c1fa6a9956f052b75c9229cd9dd7f414ad68de_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Profil:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  79 => 22,  74 => 21,  65 => 17,  61 => 16,  56 => 14,  50 => 13,  47 => 12,  44 => 11,  39 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for profil in profils %}*/
/* 			{%if profil.name!= "Teacher"%}*/
/* 				<tr>*/
/* 					<td><a href="{{ path('profil_show', { 'id': profil.id }) }}">{{ profil.id }}</a></td>*/
/* 					<td>{{ profil.name }}</td>*/
/* 					<td class="list-action">*/
/* 						<a href="{{ path('profil_show', { 'id': profil.id }) }}">show</a>*/
/* 						<a href="{{ path('profil_edit', { 'id': profil.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="3">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
