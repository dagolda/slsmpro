<?php

/* BoAdminBundle:Pricesreference:priceform.html.twig */
class __TwigTemplate_0ce00599fef2ac8e29b20d2498d90fbc6ee2e594cd6406435139daa91f59d0d1 extends Twig_Template
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
        $__internal_fc4baf9d6b64bba459dfc7ccdc497feefb5f5f0f4325fd248fbf91afc262f37b = $this->env->getExtension("native_profiler");
        $__internal_fc4baf9d6b64bba459dfc7ccdc497feefb5f5f0f4325fd248fbf91afc262f37b->enter($__internal_fc4baf9d6b64bba459dfc7ccdc497feefb5f5f0f4325fd248fbf91afc262f37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Pricesreference:priceform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.price", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_fc4baf9d6b64bba459dfc7ccdc497feefb5f5f0f4325fd248fbf91afc262f37b->leave($__internal_fc4baf9d6b64bba459dfc7ccdc497feefb5f5f0f4325fd248fbf91afc262f37b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Pricesreference:priceform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  52 => 17,  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startdate) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.enddate) }}</td>*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.price'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.price) }}</td>*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
