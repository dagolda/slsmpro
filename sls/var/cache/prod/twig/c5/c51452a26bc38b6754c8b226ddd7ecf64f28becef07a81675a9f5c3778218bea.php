<?php

/* BoAdminBundle:Employee:categorynewform.html.twig */
class __TwigTemplate_107d9daacbd640a6661179e6a49c35e58ad50256921fd5f0206dc1311ee45865 extends Twig_Template
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
        $__internal_6195b5406dde1c6059dc83aedfcb0963c6f5b8744b6bef9bf1a1395e16886bba = $this->env->getExtension("native_profiler");
        $__internal_6195b5406dde1c6059dc83aedfcb0963c6f5b8744b6bef9bf1a1395e16886bba->enter($__internal_6195b5406dde1c6059dc83aedfcb0963c6f5b8744b6bef9bf1a1395e16886bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:categorynewform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["category_form"]) ? $context["category_form"] : $this->getContext($context, "category_form")), "catname", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_6195b5406dde1c6059dc83aedfcb0963c6f5b8744b6bef9bf1a1395e16886bba->leave($__internal_6195b5406dde1c6059dc83aedfcb0963c6f5b8744b6bef9bf1a1395e16886bba_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:categorynewform.html.twig";
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
/* 			<td>{{ form_widget(category_form.catname) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
