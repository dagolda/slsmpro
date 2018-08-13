<?php

/* BoAdminBundle:Furnitures:tbliste.html.twig */
class __TwigTemplate_6fea248b4c878f3c6f6cbfe46a3cb01e5c32e7100f90d6c283253f9c72c0f418 extends Twig_Template
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
        $__internal_abc5d76c6ff8b5f3e94fdd1596479ce56816c68cd8808113344a5fc5023817e2 = $this->env->getExtension("native_profiler");
        $__internal_abc5d76c6ff8b5f3e94fdd1596479ce56816c68cd8808113344a5fc5023817e2->enter($__internal_abc5d76c6ff8b5f3e94fdd1596479ce56816c68cd8808113344a5fc5023817e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Furnitures:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"8%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mobiliers"]) ? $context["mobiliers"] : $this->getContext($context, "mobiliers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mobilier"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobiliers_show", array("id" => $this->getAttribute($context["mobilier"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mobilier"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["mobilier"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["mobilier"], "designation", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["mobilier"], "etatmobiliers", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["mobilier"], "local", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["mobilier"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mobilier"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobiliers_show", array("id" => $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/afficher.jpg"), "html", null, true);
            echo "\" />";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 24
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Furniture", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Furniture", array(), "array"), "edit", array()) == 1))) {
                echo "\t
\t\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobiliers_edit", array("id" => $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/modifier.jpg"), "html", null, true);
                echo "\" />";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 27
            echo "                </td>\t\t\t\t
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t<tr><td colspan=\"7\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mobilier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>";
        
        $__internal_abc5d76c6ff8b5f3e94fdd1596479ce56816c68cd8808113344a5fc5023817e2->leave($__internal_abc5d76c6ff8b5f3e94fdd1596479ce56816c68cd8808113344a5fc5023817e2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Furnitures:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  120 => 30,  113 => 27,  104 => 25,  100 => 24,  92 => 23,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="8%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.room'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for mobilier in mobiliers %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('mobiliers_show', { 'id': mobilier.id }) }}">{{ mobilier.id }}</a></td>*/
/*                 <td>{{ mobilier.reference }}</td>*/
/*                 <td>{{ mobilier.designation }}</td>*/
/* 				<td>{{ mobilier.etatmobiliers }}</td>*/
/* 				<td>{{ mobilier.local }}</td>*/
/*                 <td>{% if mobilier.creationdate %}{{ mobilier.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('mobiliers_show', { 'id': campus.id }) }}"><img src="{{ asset('images/actions/afficher.jpg') }}" />{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['ROOMS']['Furniture'] is defined and app.session.get('rights')['ROOMS']['Furniture'].edit==1%}	*/
/* 						<a href="{{ path('mobiliers_edit', { 'id': campus.id }) }}"><img src="{{ asset('images/actions/modifier.jpg') }}" />{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>				*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
