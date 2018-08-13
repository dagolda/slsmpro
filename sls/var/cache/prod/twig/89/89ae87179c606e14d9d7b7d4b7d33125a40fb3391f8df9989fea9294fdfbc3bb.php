<?php

/* BoHomeBundle:Timesheet:addactions.html.twig */
class __TwigTemplate_c0bdc63f4f33def356ecbb720693b764184d728f051016e7cfc5459eb554e675 extends Twig_Template
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
        $__internal_f8744cb58004cbad34599b0b7363e870044f5b9797f3a69defe164a254b76f5d = $this->env->getExtension("native_profiler");
        $__internal_f8744cb58004cbad34599b0b7363e870044f5b9797f3a69defe164a254b76f5d->enter($__internal_f8744cb58004cbad34599b0b7363e870044f5b9797f3a69defe164a254b76f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Timesheet:addactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if ($this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "hour", array())) {
            // line 6
            echo "\t\t\t\t\t\t<td class=\"class_btn_create\"><button type=\"submit\" id=\"btn-create\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_f8744cb58004cbad34599b0b7363e870044f5b9797f3a69defe164a254b76f5d->leave($__internal_f8744cb58004cbad34599b0b7363e870044f5b9797f3a69defe164a254b76f5d_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Timesheet:addactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  36 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if timesheet.hour%}*/
/* 						<td class="class_btn_create"><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
