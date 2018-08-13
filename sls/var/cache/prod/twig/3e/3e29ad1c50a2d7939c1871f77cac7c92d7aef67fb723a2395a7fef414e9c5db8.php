<?php

/* BoAdminBundle:Group:showactions.html.twig */
class __TwigTemplate_a2c5fcf1c4ef7df0f03fff61d907a379a3b2d297181eef5f5e5b0277c09c73aa extends Twig_Template
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
        $__internal_447695b37b1c47748e58f59c98abbe0d36dbefc0ea989858dab6e5d02edf1650 = $this->env->getExtension("native_profiler");
        $__internal_447695b37b1c47748e58f59c98abbe0d36dbefc0ea989858dab6e5d02edf1650->enter($__internal_447695b37b1c47748e58f59c98abbe0d36dbefc0ea989858dab6e5d02edf1650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "search"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "search"), "method")))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("group_back");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "edit", array()) == 1)) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) != 0))) {
            // line 18
            echo "\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#close_group\">
\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "edit", array()) == 1)) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) == 0))) {
            // line 25
            echo "\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#reopen_group\">
\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.open", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["historics"]) ? $context["historics"] : $this->getContext($context, "historics"))) > 0)) {
            // line 32
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_historic", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.historic", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t";
        if (((isset($context["dba"]) ? $context["dba"] : $this->getContext($context, "dba")) == 1)) {
            // line 37
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_actualize", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.actualize", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("group_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t<!--td><button type=\"submit\" id=\"btn-update\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td--!>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 46
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) == 0)) {
            // line 47
            echo "\t\t\t\t\t\t\t<span class=\"btn completed_contracts\">
\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.closed", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 50
(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) == 1)) {
            // line 51
            echo "\t\t\t\t\t\t\t<span class=\"btn green_3d_21\">
\t\t\t\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inprogress", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 54
(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) == 2)) {
            // line 55
            echo "\t\t\t\t\t\t\t<span class=\"btn wax_3d_3\">
\t\t\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.upcoming", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_447695b37b1c47748e58f59c98abbe0d36dbefc0ea989858dab6e5d02edf1650->leave($__internal_447695b37b1c47748e58f59c98abbe0d36dbefc0ea989858dab6e5d02edf1650_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 59,  151 => 56,  148 => 55,  146 => 54,  141 => 52,  138 => 51,  136 => 50,  131 => 48,  128 => 47,  126 => 46,  121 => 44,  114 => 42,  111 => 41,  103 => 38,  100 => 37,  97 => 36,  89 => 33,  86 => 32,  83 => 31,  76 => 27,  72 => 25,  69 => 24,  62 => 20,  58 => 18,  55 => 17,  47 => 14,  41 => 12,  34 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].ddelete==1%}*/
/* 					<td class="delete-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('search') is defined and app.session.get('search') is not null%}	*/
/* 					<td>*/
/* 						<a href="{{ path('group_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].edit==1 and group.status!=0%}*/
/* 					<td class="delete-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#close_group">*/
/* 							{{'action.close'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].edit==1 and group.status==0%}*/
/* 					<td class="delete-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#reopen_group">*/
/* 							{{'action.open'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if historics|length>0%}*/
/* 					<td>*/
/* 						<a href="{{ path('group_historic',{'id':group.id}) }}">{{'action.historic'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if dba==1%}*/
/* 					<td>*/
/* 						<a href="{{ path('group_actualize',{'id':group.id}) }}">{{'action.actualize'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('group_index') }}">{{'action.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				<!--td><button type="submit" id="btn-update">{{'action.update'|trans([],'BoAdminBundle')}}</button></td--!>*/
/* 					<td>*/
/* 						{%if group.status==0%}*/
/* 							<span class="btn completed_contracts">*/
/* 								{{'label.closed'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif group.status==1%}*/
/* 							<span class="btn green_3d_21">*/
/* 								{{'label.inprogress'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif group.status==2%}*/
/* 							<span class="btn wax_3d_3">*/
/* 								{{'label.upcoming'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
