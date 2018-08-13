<?php

/* BoAdminBundle:Local:showactions.html.twig */
class __TwigTemplate_db86c7c5bc4881d80dcff52a430ad82e73d8514ca58f9224f795af368639e109 extends Twig_Template
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
        $__internal_3266957a12b41a882b35c02041cd12417b47e0d34c39191ed3dcd6cd5d8bad19 = $this->env->getExtension("native_profiler");
        $__internal_3266957a12b41a882b35c02041cd12417b47e0d34c39191ed3dcd6cd5d8bad19->enter($__internal_3266957a12b41a882b35c02041cd12417b47e0d34c39191ed3dcd6cd5d8bad19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "ddelete", array()) == 1))) {
            echo "\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "search"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "search"), "method"))) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "data"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "data"), "method"))))) {
            echo "\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("local_back");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("local_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "Superadmin"))) {
            // line 22
            echo "\t\t\t\t\t\t";
            if ((((($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "status", array()) == 1) || ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "status", array()) == 2)) && (twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))) == 0)) && (twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) == 0))) {
                // line 23
                echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_free", array("id" => $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.release", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 29
        if (($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "available", array()) == 0)) {
            // line 30
            echo "\t\t\t\t\t\t\t<span class=\"btn ping-color\">
\t\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.unavailable", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 33
(isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "status", array()) == 1)) {
            // line 34
            echo "\t\t\t\t\t\t\t<span class=\"btn brown_3d_11\">
\t\t\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.occupied", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 37
(isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "status", array()) == 2)) {
            // line 38
            echo "\t\t\t\t\t\t\t<span class=\"btn wax_3d_3\">
\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reserved", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 41
(isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "status", array()) == 3)) {
            // line 42
            echo "\t\t\t\t\t\t\t<span class=\"btn red_3d_11\">
\t\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.disable", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_3266957a12b41a882b35c02041cd12417b47e0d34c39191ed3dcd6cd5d8bad19->leave($__internal_3266957a12b41a882b35c02041cd12417b47e0d34c39191ed3dcd6cd5d8bad19_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  124 => 43,  121 => 42,  119 => 41,  114 => 39,  111 => 38,  109 => 37,  104 => 35,  101 => 34,  99 => 33,  94 => 31,  91 => 30,  89 => 29,  86 => 28,  83 => 27,  75 => 24,  72 => 23,  69 => 22,  66 => 21,  58 => 18,  55 => 17,  47 => 14,  41 => 12,  34 => 8,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].ddelete==1%}	*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 								{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 							</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if (app.session.get('search') is defined and app.session.get('search') is not null) or (app.session.get('data') is defined and app.session.get('data') is not null)%}	*/
/* 						<td>*/
/* 							<a href="{{ path('local_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%else%}*/
/* 						<td>*/
/* 							<a href="{{ path('local_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{% if app.user is defined and app.user.employee.profil is not null and app.user.employee.profil=="Superadmin" %}*/
/* 						{%if (local.status==1 or local.status==2) and contracts|length==0 and groups|length==0%}*/
/* 							<td>*/
/* 								<a href="{{ path('local_free',{'id':local.id}) }}">{{'action.release'|trans([],'BoAdminBundle')}}</a>*/
/* 							</td>*/
/* 						{%endif%}*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						{%if local.available==0%}*/
/* 							<span class="btn ping-color">*/
/* 								{{'label.unavailable'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif local.status==1%}*/
/* 							<span class="btn brown_3d_11">*/
/* 								{{'label.occupied'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif local.status==2%}*/
/* 							<span class="btn wax_3d_3">*/
/* 								{{'label.reserved'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif local.status==3%}*/
/* 							<span class="btn red_3d_11">*/
/* 								{{'label.disable'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
