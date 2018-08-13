<?php

/* BoAdminBundle:Profil:showactions.html.twig */
class __TwigTemplate_3e58bb198acf6bd118cef337acd06ef4606b4e5ccf811deee6ee725d931f493b extends Twig_Template
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
        $__internal_2f8bf6efe1382669474d17eff8003f268906f2eb2156de5627d99d5b2dda6545 = $this->env->getExtension("native_profiler");
        $__internal_2f8bf6efe1382669474d17eff8003f268906f2eb2156de5627d99d5b2dda6545->enter($__internal_2f8bf6efe1382669474d17eff8003f268906f2eb2156de5627d99d5b2dda6545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Profil:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("profil_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["rights"]) ? $context["rights"] : $this->getContext($context, "rights"))) > 0)) {
            // line 10
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("rights_update");
            echo "\">Update rights</a>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_right\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>\t
\t\t\t\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("rights_new");
            echo "\">Add rights</a>
\t\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_enableall", array("id" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.enableall", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_2f8bf6efe1382669474d17eff8003f268906f2eb2156de5627d99d5b2dda6545->leave($__internal_2f8bf6efe1382669474d17eff8003f268906f2eb2156de5627d99d5b2dda6545_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Profil:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  49 => 13,  44 => 11,  39 => 10,  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('profil_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						{%if rights|length>0%}*/
/* 							<a href="{{ path('rights_update') }}">Update rights</a>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_right">{{'action.add'|trans([],'BoAdminBundle')}}</button>	*/
/* 						{%else%}*/
/* 							<a href="{{ path('rights_new') }}">Add rights</a>*/
/* 						{%endif%}*/
/* 						<a href="{{ path('profil_enableall', { 'id': profil.id }) }}">{{'action.enableall'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
