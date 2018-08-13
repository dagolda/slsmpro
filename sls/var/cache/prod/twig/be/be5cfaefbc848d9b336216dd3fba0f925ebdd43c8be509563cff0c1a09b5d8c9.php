<?php

/* BoAdminBundle:Employee:setting.html.twig */
class __TwigTemplate_d54f9f8401895d79abaf4600c0ed37382dbbfd42b179c8634907024b4daf6691 extends Twig_Template
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
        $__internal_c8183323f4ad7b20cbc967558371d154c27b407a700ad4140033c792d6120674 = $this->env->getExtension("native_profiler");
        $__internal_c8183323f4ad7b20cbc967558371d154c27b407a700ad4140033c792d6120674->enter($__internal_c8183323f4ad7b20cbc967558371d154c27b407a700ad4140033c792d6120674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:setting.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"80%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.setting.tsdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<td>
\t\t\t\t<input type=\"radio\" name=\"tsdate\" value=\"yes\" ";
        // line 5
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "tsdate", array()) == 1)) {
            echo "checked";
        }
        echo ">Yes
\t\t\t\t<input type=\"radio\" name=\"tsdate\" value=\"no\" ";
        // line 6
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "tsdate", array()) == 0)) {
            echo "checked";
        }
        echo ">No
\t\t\t</td>
\t\t</tr>
\t</table>";
        
        $__internal_c8183323f4ad7b20cbc967558371d154c27b407a700ad4140033c792d6120674->leave($__internal_c8183323f4ad7b20cbc967558371d154c27b407a700ad4140033c792d6120674_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="80%" class="sty_label">{{'message.setting.tsdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<td>*/
/* 				<input type="radio" name="tsdate" value="yes" {%if employee.tsdate==1%}checked{%endif%}>Yes*/
/* 				<input type="radio" name="tsdate" value="no" {%if employee.tsdate==0%}checked{%endif%}>No*/
/* 			</td>*/
/* 		</tr>*/
/* 	</table>*/
