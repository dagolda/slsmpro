<?php

/* BoAdminBundle:Group:local.html.twig */
class __TwigTemplate_23787b450b0be6de8f0c69680cf1ec9b580ca94514e8962eee114d2951cba1f9 extends Twig_Template
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
        $__internal_20d2080944f49093a903556fd0f84b22cf5bdb2f53b8ef2f30ed186506e3a586 = $this->env->getExtension("native_profiler");
        $__internal_20d2080944f49093a903556fd0f84b22cf5bdb2f53b8ef2f30ed186506e3a586->enter($__internal_20d2080944f49093a903556fd0f84b22cf5bdb2f53b8ef2f30ed186506e3a586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:local.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dimension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.capacity", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Max</th>
                <th>Campus</th>
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
            echo "\t\t\t<tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "dimension", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "capability", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "max", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "campus", array()), "designation", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t<tr>
\t\t\t<tr><td colspan=\"7\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>\t\t\t\t
\t\t</tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>";
        
        $__internal_20d2080944f49093a903556fd0f84b22cf5bdb2f53b8ef2f30ed186506e3a586->leave($__internal_20d2080944f49093a903556fd0f84b22cf5bdb2f53b8ef2f30ed186506e3a586_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  87 => 24,  84 => 23,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  53 => 14,  48 => 13,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.dimension'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.capacity'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Max</th>*/
/*                 <th>Campus</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for local in locals %}*/
/* 			<tr>*/
/*                 <td>{{ local.reference }}</td>*/
/*                 <td>{{ local.designation }}</td>*/
/*                 <td>{{ local.dimension }}</td>*/
/*                 <td>{{ local.capability }}</td>*/
/*                 <td>{{ local.max }}</td>*/
/*                 <td>{{ local.campus.designation }}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 		<tr>*/
/* 			<tr><td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>				*/
/* 		</tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
