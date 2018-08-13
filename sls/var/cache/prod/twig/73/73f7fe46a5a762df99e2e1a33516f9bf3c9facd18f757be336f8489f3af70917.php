<?php

/* BoAdminBundle:Mails:editform.html.twig */
class __TwigTemplate_6adc1ddd3bc5f37411090e81871f7a92853b9321e443f68645e8ed674d3493e5 extends Twig_Template
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
        $__internal_9fa1757f507f752fc312fad002dd8e5abe1648791ecde91ea837534ed8b08267 = $this->env->getExtension("native_profiler");
        $__internal_9fa1757f507f752fc312fad002dd8e5abe1648791ecde91ea837534ed8b08267->enter($__internal_9fa1757f507f752fc312fad002dd8e5abe1648791ecde91ea837534ed8b08267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Mails:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"80%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.denomination", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "name", array()), "html", null, true);
        echo "</td>\t
\t\t</tr> 
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "messageen", array()), 'widget');
        echo "
\t\t\t</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_9fa1757f507f752fc312fad002dd8e5abe1648791ecde91ea837534ed8b08267->leave($__internal_9fa1757f507f752fc312fad002dd8e5abe1648791ecde91ea837534ed8b08267_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Mails:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="80%" class="sty_label">{{'label.denomination'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ mail.name }}</td>	*/
/* 		</tr> */
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.message'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ tinymce_init() }}*/
/* 				{{ form_widget(form.messageen) }}*/
/* 			</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
