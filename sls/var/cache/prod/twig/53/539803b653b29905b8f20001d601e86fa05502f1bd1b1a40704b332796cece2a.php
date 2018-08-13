<?php

/* BoCoordinatorBundle:Supervision:actions.html.twig */
class __TwigTemplate_f154a690ba80625b53202a9f58c1ce117a798726b23eb4b33444545cfe020ef6 extends Twig_Template
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
        $__internal_ee582c5a80bca51aefbe214a6cae6ae3b585aa05fe8b0bdb114c696692db90b6 = $this->env->getExtension("native_profiler");
        $__internal_ee582c5a80bca51aefbe214a6cae6ae3b585aa05fe8b0bdb114c696692db90b6->enter($__internal_ee582c5a80bca51aefbe214a6cae6ae3b585aa05fe8b0bdb114c696692db90b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Supervision:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 6
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == 1)) {
            // line 7
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("coordinator_supervision_contracts", array("status" => 0));
            echo "\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.archived", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        } elseif ((        // line 8
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == 0)) {
            // line 9
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("coordinator_supervision_contracts", array("status" => 1));
            echo "\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inprogress", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.curentcontract", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_ee582c5a80bca51aefbe214a6cae6ae3b585aa05fe8b0bdb114c696692db90b6->leave($__internal_ee582c5a80bca51aefbe214a6cae6ae3b585aa05fe8b0bdb114c696692db90b6_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Supervision:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  48 => 11,  40 => 9,  38 => 8,  31 => 7,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						{%if status==1%}*/
/* 							<a href="{{ path('coordinator_supervision_contracts',{'status':0}) }}"">{{'action.archived'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%elseif status==0%}*/
/* 							<a href="{{ path('coordinator_supervision_contracts',{'status':1}) }}"">{{'label.inprogress'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%endif%}*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							{{'label.curentcontract'|trans([],'BoAdminBundle')}} <span class="badge">{{total}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
