<?php

/* BoAdvisorsBundle:Orderform:headsupactions.html.twig */
class __TwigTemplate_ae911fde5b27a880a2fb84812c0cd71b8b1d6f9fc1fabdb74a878dbe7a4683ea extends Twig_Template
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
        $__internal_4135503acc1020545c9c815dc048b5306195f883ec92b0c23d6f65a41d29a9cf = $this->env->getExtension("native_profiler");
        $__internal_4135503acc1020545c9c815dc048b5306195f883ec92b0c23d6f65a41d29a9cf->enter($__internal_4135503acc1020545c9c815dc048b5306195f883ec92b0c23d6f65a41d29a9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:headsupactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("dash_orderform_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_4135503acc1020545c9c815dc048b5306195f883ec92b0c23d6f65a41d29a9cf->leave($__internal_4135503acc1020545c9c815dc048b5306195f883ec92b0c23d6f65a41d29a9cf_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:headsupactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('dash_orderform_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.orderform'|trans([],'BoAdminBundle')}} <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
