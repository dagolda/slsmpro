<?php

/* BoHomeBundle:Emppj:tbliste.html.twig */
class __TwigTemplate_7054ea5d48d05a483d56fc1620783b590e7119a703b723a3726bfcd06a1de790 extends Twig_Template
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
        $__internal_aff004fa18ab5ca6f656787bd7ebca51c60d3c73167fa5821a20497a32862fbf = $this->env->getExtension("native_profiler");
        $__internal_aff004fa18ab5ca6f656787bd7ebca51c60d3c73167fa5821a20497a32862fbf->enter($__internal_aff004fa18ab5ca6f656787bd7ebca51c60d3c73167fa5821a20497a32862fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Emppj:tbliste.html.twig"));

        // line 1
        echo "    <table class='table table-bordered records_list'>
        <thead>
            <tr>
                <th>Id</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filename", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epjs"]) ? $context["epjs"] : $this->getContext($context, "epjs")));
        foreach ($context['_seq'] as $context["_key"] => $context["epj"]) {
            // line 13
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["epj"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["epj"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["epj"], "filename", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["epj"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"list-action\">                         
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"btn btn-info btn-lg modal-create\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/employee/" . $this->getAttribute($context["epj"], "filename", array()))), "html", null, true);
            echo "\">Download</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_epj\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>\t
\t\t\t\t</td>
\t\t\t</tr>
        </tbody>
    </table>
";
        
        $__internal_aff004fa18ab5ca6f656787bd7ebca51c60d3c73167fa5821a20497a32862fbf->leave($__internal_aff004fa18ab5ca6f656787bd7ebca51c60d3c73167fa5821a20497a32862fbf_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Emppj:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  84 => 26,  74 => 22,  69 => 20,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  48 => 13,  44 => 12,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class='table table-bordered records_list'>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/* 				<th>{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.filename'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for epj in epjs %}*/
/* 				<tr>*/
/* 					<td>{{ epj.id }}</td>*/
/* 					<td>{{ epj.name }}</td>*/
/* 					<td>{{ epj.filename }}</td>*/
/* 					<td>{{ epj.creationdate|date("Y-m-d H:i:s") }}</td>*/
/* 					<td class="list-action">                         */
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 						<a class="btn btn-info btn-lg modal-create" href="{{ asset('uploads/employee/' ~ epj.filename) }}">Download</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			<tr>*/
/* 				<td colspan="5">*/
/* 					<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_epj">{{'action.add'|trans([],'BoAdminBundle')}}</button>	*/
/* 				</td>*/
/* 			</tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
