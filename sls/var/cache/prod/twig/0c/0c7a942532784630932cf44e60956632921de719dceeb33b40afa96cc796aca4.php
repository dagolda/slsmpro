<?php

/* BoAdminBundle:Status:showactions.html.twig */
class __TwigTemplate_9788dbcb77497003a5180f5b0a6f0272930675e5f706a150156f11c5f2873a1c extends Twig_Template
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
        $__internal_92c65bb32182b9b8ae6ddf7edf785e811fa33956a2751013f3d516c4f96a42fb = $this->env->getExtension("native_profiler");
        $__internal_92c65bb32182b9b8ae6ddf7edf785e811fa33956a2751013f3d516c4f96a42fb->enter($__internal_92c65bb32182b9b8ae6ddf7edf785e811fa33956a2751013f3d516c4f96a42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Status:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Status", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Status", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<!--td class=\"delete-action\">
\t\t\t\t\t\t";
            // line 7
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Delete\">
\t\t\t\t\t\t";
            // line 9
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t\t\t</td-->
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("status_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_92c65bb32182b9b8ae6ddf7edf785e811fa33956a2751013f3d516c4f96a42fb->leave($__internal_92c65bb32182b9b8ae6ddf7edf785e811fa33956a2751013f3d516c4f96a42fb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Status:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  38 => 9,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Status'] is defined and app.session.get('rights')['STAFF']['Status'].ddelete==1%}*/
/* 					<!--td class="delete-action">*/
/* 						{{ form_start(delete_form) }}*/
/* 							<input type="submit" value="Delete">*/
/* 						{{ form_end(delete_form) }}*/
/* 					</td-->*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('status_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
