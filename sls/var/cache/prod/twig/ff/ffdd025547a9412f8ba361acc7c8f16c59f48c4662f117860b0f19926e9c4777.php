<?php

/* BoAdminBundle:Local:nooccupation.html.twig */
class __TwigTemplate_1d252d71ed3865a8dcd0cc0002d188e37f00b0a7f878edecf3c99ba74637a88a extends Twig_Template
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
        $__internal_3139d42f27713de7ea88b63d68ce943abb79b35b7610849abd0509555ca0ead6 = $this->env->getExtension("native_profiler");
        $__internal_3139d42f27713de7ea88b63d68ce943abb79b35b7610849abd0509555ca0ead6->enter($__internal_3139d42f27713de7ea88b63d68ce943abb79b35b7610849abd0509555ca0ead6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:nooccupation.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daysoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t\t\t<tr>
\t\t\t\t<td colspan=\"9\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
        echo "</td>
\t\t\t</tr>\t\t\t
        </tbody>
    </table>";
        
        $__internal_3139d42f27713de7ea88b63d68ce943abb79b35b7610849abd0509555ca0ead6->leave($__internal_3139d42f27713de7ea88b63d68ce943abb79b35b7610849abd0509555ca0ead6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:nooccupation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.daysoftraining'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			<tr>*/
/* 				<td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td>*/
/* 			</tr>			*/
/*         </tbody>*/
/*     </table>*/
