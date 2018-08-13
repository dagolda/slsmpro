<?php

/* BoHomeBundle:Tsdoc:tbliste.html.twig */
class __TwigTemplate_e880d554baeda45847f72f0517614a322b6fc63cb8979a3d300716e43ff663de extends Twig_Template
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
        $__internal_bbea3810d1693cfb13fe76105bca9217412e4e8443951cbb61516ccd57cea65e = $this->env->getExtension("native_profiler");
        $__internal_bbea3810d1693cfb13fe76105bca9217412e4e8443951cbb61516ccd57cea65e->enter($__internal_bbea3810d1693cfb13fe76105bca9217412e4e8443951cbb61516ccd57cea65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tsdoc:tbliste.html.twig"));

        // line 1
        echo "    <table class='table table-bordered records_list'>
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.year", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.month", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tsdocs"]) ? $context["tsdocs"] : $this->getContext($context, "tsdocs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tsdoc"]) {
            // line 18
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tsdoc"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tsdoc"], "year", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tsdoc"], "month", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tsdoc"], "student", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tsdoc"], "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tsdoc"], "enddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tsdoc"], "nbhour", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tsdoc"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            if ($this->getAttribute($context["tsdoc"], "createby", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["tsdoc"], "createby", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td class=\"list-action\">                         
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"btn btn-info btn-lg modal-create\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/tsdoc/" . $this->getAttribute($context["tsdoc"], "filename", array()))), "html", null, true);
            echo "\">Download</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tsdoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"10\"class=\"panel-body\">
\t\t\t\t\t<button type=\"button\" class=\"modal-create\" data-toggle=\"modal\" data-target=\"#add_tsdoc\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>\t
\t\t\t\t</td>
\t\t\t</tr>
        </tbody>
    </table>
";
        
        $__internal_bbea3810d1693cfb13fe76105bca9217412e4e8443951cbb61516ccd57cea65e->leave($__internal_bbea3810d1693cfb13fe76105bca9217412e4e8443951cbb61516ccd57cea65e_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tsdoc:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  128 => 36,  118 => 32,  113 => 30,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  64 => 17,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class='table table-bordered records_list'>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.year'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.month'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.studentname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.numberhour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for tsdoc in tsdocs %}*/
/* 				<tr>*/
/* 					<td>{{ tsdoc.id }}</td>*/
/* 					<td>{{ tsdoc.year }}</td>*/
/* 					<td>{{ tsdoc.month }}</td>*/
/* 					<td>{{ tsdoc.student }}</td>*/
/* 					<td>{{ tsdoc.startdate|date('Y-m-d') }}</td>*/
/* 					<td>{{ tsdoc.enddate|date('Y-m-d') }}</td>*/
/* 					<td>{{ tsdoc.nbhour }}</td>*/
/* 					<td>{{ tsdoc.creationdate|date("Y-m-d H:i:s") }}</td>*/
/* 					<td>{%if tsdoc.createby %}{{ tsdoc.createby }}{%else%}---{%endif%}</td>*/
/* 					<td class="list-action">                         */
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 						<a class="btn btn-info btn-lg modal-create" href="{{ asset('uploads/tsdoc/' ~ tsdoc.filename) }}">Download</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			<tr>*/
/* 				<td colspan="10"class="panel-body">*/
/* 					<button type="button" class="modal-create" data-toggle="modal" data-target="#add_tsdoc">{{'action.add'|trans([],'BoAdminBundle')}}</button>	*/
/* 				</td>*/
/* 			</tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
