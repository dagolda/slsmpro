<?php

/* BoAdminBundle:Contracts:agteacher.html.twig */
class __TwigTemplate_62f1bd85bea5f58b1187a41931ba83f84b9ac46f92440fb4647f3bdfbbb846fa extends Twig_Template
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
        $__internal_fac276d00b9c5bd54cfaaa76c11980a8cbbaa3ccd011a2c404b4631a0d220cf1 = $this->env->getExtension("native_profiler");
        $__internal_fac276d00b9c5bd54cfaaa76c11980a8cbbaa3ccd011a2c404b4631a0d220cf1->enter($__internal_fac276d00b9c5bd54cfaaa76c11980a8cbbaa3ccd011a2c404b4631a0d220cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:agteacher.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"4%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fullname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.days", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"120px\">Actions</th>
            </tr>
        </thead>
        <tbody>
\t";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas"))) > 0)) {
            // line 19
            echo "\t\t";
            $this->loadTemplate("BoAdminBundle:Contracts:activeagenda.html.twig", "BoAdminBundle:Contracts:agteacher.html.twig", 19)->display($context);
            // line 20
            echo "\t";
        } else {
            // line 21
            echo "\t\t";
            $this->loadTemplate("BoAdminBundle:Contracts:closedagenda.html.twig", "BoAdminBundle:Contracts:agteacher.html.twig", 21)->display($context);
            // line 22
            echo "\t";
        }
        // line 23
        echo "\t";
        if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
            // line 24
            echo "\t\t<tr>
\t\t\t<td colspan=\"11\" class=\"list-action\">
\t\t\t\t";
            // line 26
            if ((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Teacher Schedule", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Teacher Schedule", array(), "array"), "creation", array()) == 1)) && ((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")) != null)) && (twig_length_filter($this->env, (isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings"))) > 0)) && (twig_length_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array())) > 0))) {
                // line 27
                echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_tsc\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t";
            } elseif ((twig_length_filter($this->env,             // line 28
(isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings"))) == 0)) {
                // line 29
                echo "\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.error.addteacher", array(), "BoAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t";
            } elseif ((twig_length_filter($this->env, $this->getAttribute(            // line 30
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array())) == 0)) {
                // line 31
                echo "\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.error.addteacher2", array(), "BoAdminBundle"), "html", null, true);
                echo "<span>
\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Teacher Schedule", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Teacher Schedule", array(), "array"), "creation", array()) == 1)) && $this->getAttribute((isset($context["htss0"]) ? $context["htss0"] : null), 0, array(), "array", true, true))) {
                // line 34
                echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#historic_schedule\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.seehistoric", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["closed_agenda"]) ? $context["closed_agenda"] : $this->getContext($context, "closed_agenda"))) > 0)) {
                // line 37
                echo "\t\t\t\t\t<button type=\"button\" class=\"show_close\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.archived", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>\t
\t\t\t\t\t<button type=\"button\" class=\"hide_close\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.hide", array(), "BoAdminBundle"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.archived", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t</td>\t\t\t
\t\t</tr>
\t";
        }
        // line 43
        echo "        </tbody>
    </table>
";
        
        $__internal_fac276d00b9c5bd54cfaaa76c11980a8cbbaa3ccd011a2c404b4631a0d220cf1->leave($__internal_fac276d00b9c5bd54cfaaa76c11980a8cbbaa3ccd011a2c404b4631a0d220cf1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:agteacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  140 => 40,  133 => 38,  126 => 37,  123 => 36,  117 => 34,  114 => 33,  108 => 31,  106 => 30,  101 => 29,  99 => 28,  94 => 27,  92 => 26,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  71 => 18,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.fullname'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.days'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="120px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 	{%if agendas|length>0%}*/
/* 		{%include "BoAdminBundle:Contracts:activeagenda.html.twig"%}*/
/* 	{%else%}*/
/* 		{%include "BoAdminBundle:Contracts:closedagenda.html.twig"%}*/
/* 	{%endif%}*/
/* 	{%if contract.status==1 or contract.status==2%}*/
/* 		<tr>*/
/* 			<td colspan="11" class="list-action">*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Teacher Schedule'] is defined and app.session.get('rights')['CONTRACTS']['Teacher Schedule'].creation==1 and tsc_form!=null and trainings|length>0 and contract.students|length>0%}*/
/* 					<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_tsc">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 				{%elseif trainings|length==0%}*/
/* 					<span>{{'message.error.addteacher'|trans([],'BoAdminBundle')}}</span>*/
/* 				{%elseif contract.students|length==0%}*/
/* 					<span>{{'message.error.addteacher2'|trans([],'BoAdminBundle')}}<span>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Teacher Schedule'] is defined and app.session.get('rights')['CONTRACTS']['Teacher Schedule'].creation==1 and htss0[0] is defined%}*/
/* 					<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#historic_schedule">{{'action.seehistoric'|trans([],'BoAdminBundle')}}</button>*/
/* 				{% endif %}*/
/* 				{%if closed_agenda|length>0%}*/
/* 					<button type="button" class="show_close">{{'action.show'|trans([],'BoAdminBundle')}} {{'label.archived'|trans([],'BoAdminBundle')}}</button>	*/
/* 					<button type="button" class="hide_close">{{'action.hide'|trans([],'BoAdminBundle')}} {{'label.archived'|trans([],'BoAdminBundle')}}</button>*/
/* 				{% endif %}*/
/* 			</td>			*/
/* 		</tr>*/
/* 	{% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
