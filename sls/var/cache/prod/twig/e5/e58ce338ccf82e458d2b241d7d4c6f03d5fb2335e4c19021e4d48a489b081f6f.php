<?php

/* BoAdminBundle:Employee:ccdateform.html.twig */
class __TwigTemplate_b937d1772607be196f0e176f4eee4b9ed36e09012a6252cfc1324b2c5dca7ba5 extends Twig_Template
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
        $__internal_85058d6fa26db64a8ed540a1dfb1f55375ccecbf1aeebc482757dfa7b2d73fe5 = $this->env->getExtension("native_profiler");
        $__internal_85058d6fa26db64a8ed540a1dfb1f55375ccecbf1aeebc482757dfa7b2d73fe5->enter($__internal_85058d6fa26db64a8ed540a1dfb1f55375ccecbf1aeebc482757dfa7b2d73fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:ccdateform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["dateform"]) ? $context["dateform"] : $this->getContext($context, "dateform")), "startdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["dateform"]) ? $context["dateform"] : $this->getContext($context, "dateform")), "enddate", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_85058d6fa26db64a8ed540a1dfb1f55375ccecbf1aeebc482757dfa7b2d73fe5->leave($__internal_85058d6fa26db64a8ed540a1dfb1f55375ccecbf1aeebc482757dfa7b2d73fe5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:ccdateform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="40%" class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(dateform.startdate) }}</td>*/
/* 			<td>{{ form_widget(dateform.enddate) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
