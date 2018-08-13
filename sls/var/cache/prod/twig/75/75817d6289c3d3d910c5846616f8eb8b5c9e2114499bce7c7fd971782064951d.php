<?php

/* BoAdminBundle:Contracts:coordinator.html.twig */
class __TwigTemplate_d0605b20ec99a2dcb3fecdd803d244779d7885c6cfd0a12bec54b9ad1273744b extends Twig_Template
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
        $__internal_815cc1b6bae4e845e856eebbaae80c20773d4ed365341a1902e4de3d4f03a377 = $this->env->getExtension("native_profiler");
        $__internal_815cc1b6bae4e845e856eebbaae80c20773d4ed365341a1902e4de3d4f03a377->enter($__internal_815cc1b6bae4e845e856eebbaae80c20773d4ed365341a1902e4de3d4f03a377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:coordinator.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Phone</th>
                <th>Contract type</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "name", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "email", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 15
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "phone", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "phone", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "typecontract", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_815cc1b6bae4e845e856eebbaae80c20773d4ed365341a1902e4de3d4f03a377->leave($__internal_815cc1b6bae4e845e856eebbaae80c20773d4ed365341a1902e4de3d4f03a377_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:coordinator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  61 => 16,  53 => 15,  49 => 14,  45 => 13,  37 => 8,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Phone</th>*/
/*                 <th>Contract type</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{{ coordinator.name }}</td>*/
/*                 <td>{{ coordinator.email }}</td>*/
/*                 <td>{% if coordinator.phone %}{{ coordinator.phone }}{% else %}---{% endif %}</td>*/
/*                 <td>{{ coordinator.typecontract }}</td>*/
/*                 <td>{% if coordinator.creationdate %}{{ coordinator.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
