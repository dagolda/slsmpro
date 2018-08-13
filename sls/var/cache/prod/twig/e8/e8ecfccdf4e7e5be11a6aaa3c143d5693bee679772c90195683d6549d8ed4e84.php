<?php

/* BoAdminBundle:Evaluation:contractual.html.twig */
class __TwigTemplate_0a1fe1bd68621dbeb8a56b486f5f1383c29669620a6ed464bda68ff7b51e174c extends Twig_Template
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
        $__internal_a211d0f83f3be8703db759d21c32f7517d47440a180344e4ad6e2dd04af72cb9 = $this->env->getExtension("native_profiler");
        $__internal_a211d0f83f3be8703db759d21c32f7517d47440a180344e4ad6e2dd04af72cb9->enter($__internal_a211d0f83f3be8703db759d21c32f7517d47440a180344e4ad6e2dd04af72cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:contractual.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"15%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"40%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "contact", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "emailcontact", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "phonecontact", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_a211d0f83f3be8703db759d21c32f7517d47440a180344e4ad6e2dd04af72cb9->leave($__internal_a211d0f83f3be8703db759d21c32f7517d47440a180344e4ad6e2dd04af72cb9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:contractual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  47 => 12,  43 => 11,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="40%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{{ evaluation.contact }}</td>*/
/*                 <td>{{ evaluation.emailcontact }}</td>*/
/*                 <td>{{ evaluation.phonecontact }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
