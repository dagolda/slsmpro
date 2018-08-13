<?php

/* BoHomeBundle:User:securitycote.html.twig */
class __TwigTemplate_7fa0ceefdab94681a8eb5726257bb29de5a92684441ee1350d2cf600cdefa7bc extends Twig_Template
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
        $__internal_7cda991d13355023aadb01cc8d81057e674d5cfac23b829ecf8f1d65cbdce16a = $this->env->getExtension("native_profiler");
        $__internal_7cda991d13355023aadb01cc8d81057e674d5cfac23b829ecf8f1d65cbdce16a->enter($__internal_7cda991d13355023aadb01cc8d81057e674d5cfac23b829ecf8f1d65cbdce16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:User:securitycote.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered acceuil_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.requesteddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expireddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["securityCotes"]) ? $context["securityCotes"] : $this->getContext($context, "securityCotes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["securityCote"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["securityCote"], "filenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["securityCote"], "requestdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "requestdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["securityCote"], "receivedate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "receivedate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["securityCote"], "expirydate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "expirydate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["securityCote"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["securityCote"], "creationdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<tr><td colspan=\"6\">No security cote found.</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['securityCote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_7cda991d13355023aadb01cc8d81057e674d5cfac23b829ecf8f1d65cbdce16a->leave($__internal_7cda991d13355023aadb01cc8d81057e674d5cfac23b829ecf8f1d65cbdce16a_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:User:securitycote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  98 => 23,  88 => 20,  82 => 19,  76 => 18,  70 => 17,  66 => 16,  62 => 15,  59 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered acceuil_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.filenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.requesteddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.receiveddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.expireddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for securityCote in securityCotes %}*/
/*             <tr>*/
/*                 <td>{{ securityCote.id }}</td>*/
/*                 <td>{{ securityCote.filenumber }}</td>*/
/*                 <td>{% if securityCote.requestdate %}{{ securityCote.requestdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if securityCote.receivedate %}{{ securityCote.receivedate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if securityCote.expirydate %}{{ securityCote.expirydate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if securityCote.creationdate %}{{ securityCote.creationdate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">No security cote found.</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
