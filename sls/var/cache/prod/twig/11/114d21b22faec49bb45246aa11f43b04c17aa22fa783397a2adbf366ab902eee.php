<?php

/* BoAdminBundle:Default:archives.html.twig */
class __TwigTemplate_5f964007db8811d119c60c4a2a166261fbfbcaf64cd0413ae06f67e48b1a0e00 extends Twig_Template
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
        $__internal_9412e6037e58cbb3efa24fbb6e7b8371f8557d848c9b79fcf282e4300fa443bd = $this->env->getExtension("native_profiler");
        $__internal_9412e6037e58cbb3efa24fbb6e7b8371f8557d848c9b79fcf282e4300fa443bd->enter($__internal_9412e6037e58cbb3efa24fbb6e7b8371f8557d848c9b79fcf282e4300fa443bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:archives.html.twig"));

        // line 1
        echo "\t<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "supemployee")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("supemployee_index");
        echo "\">
\t\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.employees", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t</a>
\t</li>
";
        
        $__internal_9412e6037e58cbb3efa24fbb6e7b8371f8557d848c9b79fcf282e4300fa443bd->leave($__internal_9412e6037e58cbb3efa24fbb6e7b8371f8557d848c9b79fcf282e4300fa443bd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* 	<li {%if sm=="supemployee"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('supemployee_index') }}">*/
/* 			{{'layout.menu.employees'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* */
