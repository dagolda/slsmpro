<?php

/* BoAdminBundle:Students:local.html.twig */
class __TwigTemplate_3ef3e5e24dfc847eee33ec367a5c4d0db6b24bd293bc251e156ec3de5920ca6c extends Twig_Template
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
        $__internal_4e3c9eb774a94539aa382b8559162d30c9d74d21952c6e36c967127ab18fe85d = $this->env->getExtension("native_profiler");
        $__internal_4e3c9eb774a94539aa382b8559162d30c9d74d21952c6e36c967127ab18fe85d->enter($__internal_4e3c9eb774a94539aa382b8559162d30c9d74d21952c6e36c967127ab18fe85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:local.html.twig"));

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
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_4e3c9eb774a94539aa382b8559162d30c9d74d21952c6e36c967127ab18fe85d->leave($__internal_4e3c9eb774a94539aa382b8559162d30c9d74d21952c6e36c967127ab18fe85d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  84 => 23,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  53 => 14,  48 => 13,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
