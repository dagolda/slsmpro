<?php

/* BoAdminBundle:Color:tbliste.html.twig */
class __TwigTemplate_317d096d899204ebe112f3d287df59dcc0ad37077ad43479e0e00d8ef748dff8 extends Twig_Template
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
        $__internal_5ebafc7aa7d08d2c0cf5404995ab1a7bf63f7f219589207953329e26fdc3bdee = $this->env->getExtension("native_profiler");
        $__internal_5ebafc7aa7d08d2c0cf5404995ab1a7bf63f7f219589207953329e26fdc3bdee->enter($__internal_5ebafc7aa7d08d2c0cf5404995ab1a7bf63f7f219589207953329e26fdc3bdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Color:tbliste.html.twig"));

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
\t\t\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.color", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
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
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 13
            echo "\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) != "Teacher")) {
                // line 14
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("color_show", array("id" => $this->getAttribute($context["color"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "id", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td width=\"200px\" class=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "name", array()), "html", null, true);
                echo "\">&nbsp;</td>
\t\t\t\t\t<td>";
                // line 18
                if ($this->getAttribute($context["color"], "creationdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["color"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("color_show", array("id" => $this->getAttribute($context["color"], "id", array()))), "html", null, true);
                echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("color_edit", array("id" => $this->getAttribute($context["color"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 25
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<tr><td colspan=\"4\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>";
        
        $__internal_5ebafc7aa7d08d2c0cf5404995ab1a7bf63f7f219589207953329e26fdc3bdee->leave($__internal_5ebafc7aa7d08d2c0cf5404995ab1a7bf63f7f219589207953329e26fdc3bdee_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Color:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  99 => 26,  94 => 25,  85 => 21,  81 => 20,  72 => 18,  68 => 17,  64 => 16,  58 => 15,  55 => 14,  52 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.color'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for color in colors %}*/
/* 			{%if color.name!= "Teacher"%}*/
/* 				<tr>*/
/* 					<td><a href="{{ path('color_show', { 'id': color.id }) }}">{{ color.id }}</a></td>*/
/* 					<td>{{ color.name }}</td>*/
/* 					<td width="200px" class="{{ color.name }}">&nbsp;</td>*/
/* 					<td>{% if color.creationdate %}{{ color.creationdate|date('Y-m-d H:i:s') }}{% else %}---{% endif %}</td>*/
/* 					<td class="list-action">*/
/* 						<a href="{{ path('color_show', { 'id': color.id }) }}">show</a>*/
/* 						<a href="{{ path('color_edit', { 'id': color.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="4">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
