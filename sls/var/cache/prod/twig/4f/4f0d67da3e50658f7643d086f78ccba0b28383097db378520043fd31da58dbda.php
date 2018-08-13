<?php

/* BoAdminBundle:Contracts:addnote.html.twig */
class __TwigTemplate_17f22eeeba960d86b24e3d48664cf14944e1d11eb4812400eb2c46cd6dcab099 extends Twig_Template
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
        $__internal_5c000ef34a4274f8ca41646f561de2f1bda0a783c4b75b394cdee309b92d1bf7 = $this->env->getExtension("native_profiler");
        $__internal_5c000ef34a4274f8ca41646f561de2f1bda0a783c4b75b394cdee309b92d1bf7->enter($__internal_5c000ef34a4274f8ca41646f561de2f1bda0a783c4b75b394cdee309b92d1bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:addnote.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th class=\"sty_label\">Notes</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addnoteform"]) ? $context["addnoteform"] : $this->getContext($context, "addnoteform")), "description", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>
";
        
        $__internal_5c000ef34a4274f8ca41646f561de2f1bda0a783c4b75b394cdee309b92d1bf7->leave($__internal_5c000ef34a4274f8ca41646f561de2f1bda0a783c4b75b394cdee309b92d1bf7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:addnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             		<th class="sty_label">Notes</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(addnoteform.description) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
/* */
