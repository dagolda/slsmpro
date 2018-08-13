<?php

/* BoHomeBundle:Contracts:nocontract.html.twig */
class __TwigTemplate_d0816cb11061f5a6c9c1459aee36da6b26e67b540efdafcd9857c4a24c65d516 extends Twig_Template
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
        $__internal_bc02f1547181d00dfd0745bbaf030ce91525cd203270d46a31fa79b5c17724aa = $this->env->getExtension("native_profiler");
        $__internal_bc02f1547181d00dfd0745bbaf030ce91525cd203270d46a31fa79b5c17724aa->enter($__internal_bc02f1547181d00dfd0745bbaf030ce91525cd203270d46a31fa79b5c17724aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Contracts:nocontract.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"13%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t<tr><td colspan=\"8\">No contract found</td></tr>
        </tbody>
    </table>";
        
        $__internal_bc02f1547181d00dfd0745bbaf030ce91525cd203270d46a31fa79b5c17724aa->leave($__internal_bc02f1547181d00dfd0745bbaf030ce91525cd203270d46a31fa79b5c17724aa_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Contracts:nocontract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="13%">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.group'|trans([],'BoAdminBundle')}}/{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.pa'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			<tr><td colspan="8">No contract found</td></tr>*/
/*         </tbody>*/
/*     </table>*/
