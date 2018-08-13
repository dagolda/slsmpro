<?php

/* BoHomeBundle:Message:newform.html.twig */
class __TwigTemplate_6f73aab646e045eb831d34b13e724746fd92f492aa229d7f2411a6731864b2b0 extends Twig_Template
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
        $__internal_13d25fe13395015d03a20677f2c73d0eba55567726c53abf5dba7fe3aff8f2fc = $this->env->getExtension("native_profiler");
        $__internal_13d25fe13395015d03a20677f2c73d0eba55567726c53abf5dba7fe3aff8f2fc->enter($__internal_13d25fe13395015d03a20677f2c73d0eba55567726c53abf5dba7fe3aff8f2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Message:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "subject span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        $this->loadTemplate("BoHomeBundle:Message:recipients1.html.twig", "BoHomeBundle:Message:newform.html.twig", 13)->display($context);
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 20
        $this->loadTemplate("BoHomeBundle:Message:recipients2.html.twig", "BoHomeBundle:Message:newform.html.twig", 20)->display($context);
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
\t\t\t</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_13d25fe13395015d03a20677f2c73d0eba55567726c53abf5dba7fe3aff8f2fc->leave($__internal_13d25fe13395015d03a20677f2c73d0eba55567726c53abf5dba7fe3aff8f2fc_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Message:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  65 => 24,  58 => 20,  52 => 17,  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.subject, {'attr' : {'class' : 'subject span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.to'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{%include "BoHomeBundle:Message:recipients1.html.twig"%}</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.cc'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{%include "BoHomeBundle:Message:recipients2.html.twig"%}</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.message'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.message) }}*/
/* 			</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
