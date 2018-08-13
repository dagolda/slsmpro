<?php

/* BoHomeBundle:Default:message.html.twig */
class __TwigTemplate_a40ca5d1f9f0719f728b1ebf74688809283442dec6edff0fd5738239e474f5d0 extends Twig_Template
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
        $__internal_ca1ce6fb84e6dd868b95b5b19d00b0b65e09abde04480ac9933750ccc9428a3e = $this->env->getExtension("native_profiler");
        $__internal_ca1ce6fb84e6dd868b95b5b19d00b0b65e09abde04480ac9933750ccc9428a3e->enter($__internal_ca1ce6fb84e6dd868b95b5b19d00b0b65e09abde04480ac9933750ccc9428a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:message.html.twig"));

        // line 1
        echo "\t\t<br/>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.notifications", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no message found"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
";
        
        $__internal_ca1ce6fb84e6dd868b95b5b19d00b0b65e09abde04480ac9933750ccc9428a3e->leave($__internal_ca1ce6fb84e6dd868b95b5b19d00b0b65e09abde04480ac9933750ccc9428a3e_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* 		<br/>*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">{{'title.notifications'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body noframe">*/
/* 				{{"no message found"|trans()}}*/
/* 			</div>*/
/* 		</div>*/
/* */
