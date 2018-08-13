<?php

/* BoHomeBundle:Contracts:nogroup.html.twig */
class __TwigTemplate_0989c6f734dff057e9757b7e212805a43446ba10138d100217c1d98fa0d7c516 extends Twig_Template
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
        $__internal_10faaa7b200372cb3c8a36a0755d08836ad04bd36437cbd65ce29126ea45ceaf = $this->env->getExtension("native_profiler");
        $__internal_10faaa7b200372cb3c8a36a0755d08836ad04bd36437cbd65ce29126ea45ceaf->enter($__internal_10faaa7b200372cb3c8a36a0755d08836ad04bd36437cbd65ce29126ea45ceaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Contracts:nogroup.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t<tr><td colspan=\"7\">No group entry found</td></tr>
        </tbody>
    </table>";
        
        $__internal_10faaa7b200372cb3c8a36a0755d08836ad04bd36437cbd65ce29126ea45ceaf->leave($__internal_10faaa7b200372cb3c8a36a0755d08836ad04bd36437cbd65ce29126ea45ceaf_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Contracts:nogroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			<tr><td colspan="7">No group entry found</td></tr>*/
/*         </tbody>*/
/*     </table>*/
