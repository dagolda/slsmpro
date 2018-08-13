<?php

/* BoAdminBundle:Evaluation:search.html.twig */
class __TwigTemplate_a138ed60281b1f57bdbb866134a324a64b7004806f93be27545655263038733c extends Twig_Template
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
        $__internal_298f3c7caada79508ebf155fd5aad184bf01bf5357b97a6de15647f60e28d150 = $this->env->getExtension("native_profiler");
        $__internal_298f3c7caada79508ebf155fd5aad184bf01bf5357b97a6de15647f60e28d150->enter($__internal_298f3c7caada79508ebf155fd5aad184bf01bf5357b97a6de15647f60e28d150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:search.html.twig"));

        // line 1
        if (array_key_exists("criteria", $context)) {
            // line 2
            echo "\t<div class=\"result_content\">
\t\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.noresult", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</div>
";
        } else {
            // line 6
            echo "\t<div class='numberfound'><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
            echo "</b> : <span>";
            if (array_key_exists("count", $context)) {
                echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees"))), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
            // line 7
            $this->loadTemplate("BoAdminBundle:Evaluation:tbliste2.html.twig", "BoAdminBundle:Evaluation:search.html.twig", 7)->display($context);
        }
        
        $__internal_298f3c7caada79508ebf155fd5aad184bf01bf5357b97a6de15647f60e28d150->leave($__internal_298f3c7caada79508ebf155fd5aad184bf01bf5357b97a6de15647f60e28d150_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}*/
/* 	</div>*/
/* {%else%}*/
/* 	<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{%if count is defined%}{{count}} {%else%}{{employees|length}}{%endif%}{{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoAdminBundle:Evaluation:tbliste2.html.twig' %}*/
/* {%endif%}*/
