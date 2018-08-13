<?php

/* BoCoordinatorBundle:Supervision:local.html.twig */
class __TwigTemplate_9957efbd893ce4e266908f8df085b091135f34e9630083f83ec29d63913e7bab extends Twig_Template
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
        $__internal_6635eb6c067492434130861297ad3b55decbf7c3acbef774c1f94e2247acb61b = $this->env->getExtension("native_profiler");
        $__internal_6635eb6c067492434130861297ad3b55decbf7c3acbef774c1f94e2247acb61b->enter($__internal_6635eb6c067492434130861297ad3b55decbf7c3acbef774c1f94e2247acb61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Supervision:local.html.twig"));

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
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>";
        
        $__internal_6635eb6c067492434130861297ad3b55decbf7c3acbef774c1f94e2247acb61b->leave($__internal_6635eb6c067492434130861297ad3b55decbf7c3acbef774c1f94e2247acb61b_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Supervision:local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  52 => 14,  48 => 13,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
