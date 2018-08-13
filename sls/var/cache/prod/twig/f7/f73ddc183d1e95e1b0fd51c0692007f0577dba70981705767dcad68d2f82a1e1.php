<?php

/* BoAdminBundle:Profil:newform.html.twig */
class __TwigTemplate_27af60f436edc2cf3521a4396f5959f1228169282d2e2624cf29859fb12d8757 extends Twig_Template
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
        $__internal_2dadbae7b60d7946cf9de388932bd592a548b85cfab6571e9f846bfa802fc6e4 = $this->env->getExtension("native_profiler");
        $__internal_2dadbae7b60d7946cf9de388932bd592a548b85cfab6571e9f846bfa802fc6e4->enter($__internal_2dadbae7b60d7946cf9de388932bd592a548b85cfab6571e9f846bfa802fc6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Profil:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_2dadbae7b60d7946cf9de388932bd592a548b85cfab6571e9f846bfa802fc6e4->leave($__internal_2dadbae7b60d7946cf9de388932bd592a548b85cfab6571e9f846bfa802fc6e4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Profil:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.name) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
