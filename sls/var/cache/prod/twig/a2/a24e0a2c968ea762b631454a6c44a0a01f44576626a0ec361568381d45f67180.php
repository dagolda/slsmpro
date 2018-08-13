<?php

/* BoAdminBundle:Mails:modalform.html.twig */
class __TwigTemplate_6d9fa0d7fcb86952e6954c7d48a47885eb58e606d06b79cf22995bcf9000ba9d extends Twig_Template
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
        $__internal_0c0eb0ffaeab38d5d6fb34e0720b951d6d5397f1aef26650c1d8f6b35e64daf3 = $this->env->getExtension("native_profiler");
        $__internal_0c0eb0ffaeab38d5d6fb34e0720b951d6d5397f1aef26650c1d8f6b35e64daf3->enter($__internal_0c0eb0ffaeab38d5d6fb34e0720b951d6d5397f1aef26650c1d8f6b35e64daf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Mails:modalform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
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
        
        $__internal_0c0eb0ffaeab38d5d6fb34e0720b951d6d5397f1aef26650c1d8f6b35e64daf3->leave($__internal_0c0eb0ffaeab38d5d6fb34e0720b951d6d5397f1aef26650c1d8f6b35e64daf3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Mails:modalform.html.twig";
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
/* 			<td>{{ form_widget(form.name) }}</td>	*/
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
