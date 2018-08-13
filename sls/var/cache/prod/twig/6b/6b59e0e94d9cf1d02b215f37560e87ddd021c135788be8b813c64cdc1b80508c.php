<?php

/* BoHomeBundle:Tickets:newform.html.twig */
class __TwigTemplate_b7e32115e25f89747c9f45889944d02623a2a09ea265d6324042d7fa4bc0f447 extends Twig_Template
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
        $__internal_81bb7d2282141e67981df233c15cf13626c19aa07c6deb374f8051b5a10c2c2e = $this->env->getExtension("native_profiler");
        $__internal_81bb7d2282141e67981df233c15cf13626c19aa07c6deb374f8051b5a10c2c2e->enter($__internal_81bb7d2282141e67981df233c15cf13626c19aa07c6deb374f8051b5a10c2c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tickets:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"80%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contacts", array()), 'widget', array("attr" => array("class" => "contacts span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filename", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filename", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comments", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "subject span3")));
        echo "
";
        
        $__internal_81bb7d2282141e67981df233c15cf13626c19aa07c6deb374f8051b5a10c2c2e->leave($__internal_81bb7d2282141e67981df233c15cf13626c19aa07c6deb374f8051b5a10c2c2e_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tickets:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  58 => 20,  52 => 17,  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="80%" class="sty_label">{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.contacts, {'attr' : {'class' : 'contacts span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.filename'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(form.filename) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.message'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(form.comments) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	{{ form_widget(form.subject, {'attr' : {'class' : 'subject span3'}}) }}*/
/* */
