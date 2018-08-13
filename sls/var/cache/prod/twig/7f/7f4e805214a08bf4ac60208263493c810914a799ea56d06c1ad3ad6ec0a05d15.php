<?php

/* BoAdminBundle:Employee:selectoption.html.twig */
class __TwigTemplate_bdbff0194d9620842cb0074104a30fb201576e75b28398944376d5d58f5f31cf extends Twig_Template
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
        $__internal_8231b169b22064e3ffce667f52f94774b0ef159ff27c610e08d5223eaaefef5d = $this->env->getExtension("native_profiler");
        $__internal_8231b169b22064e3ffce667f52f94774b0ef159ff27c610e08d5223eaaefef5d->enter($__internal_8231b169b22064e3ffce667f52f94774b0ef159ff27c610e08d5223eaaefef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:selectoption.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idoption' id='idoption'>
\t\t\t\t\t<option value=\"0\" ";
        // line 2
        if ((array_key_exists("idoption", $context) && ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id", array()) == 0))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 3
        if ((array_key_exists("idoption", $context) && ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id", array()) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.withcontract", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 4
        if ((array_key_exists("idoption", $context) && ($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id", array()) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.without", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_8231b169b22064e3ffce667f52f94774b0ef159ff27c610e08d5223eaaefef5d->leave($__internal_8231b169b22064e3ffce667f52f94774b0ef159ff27c610e08d5223eaaefef5d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:selectoption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idoption' id='idoption'>*/
/* 					<option value="0" {%if idoption is defined and option.id ==0%}selected='selected'{%endif%}>{{'label.all'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="1" {%if idoption is defined and option.id ==1%}selected='selected'{%endif%}>{{'label.withcontract'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idoption is defined and option.id ==2%}selected='selected'{%endif%}>{{'label.without'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
