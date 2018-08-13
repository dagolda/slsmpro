<?php

/* BoAdminBundle:Default:setting.html.twig */
class __TwigTemplate_89f7c9cb6db4a1aef6b5260370f66331aa990c8d064be1b344a8db81765f846e extends Twig_Template
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
        $__internal_9e683cdad3b1fbcd1f0f78ce6a53a0403b8f4a8d3d24bedd89bb1489db536382 = $this->env->getExtension("native_profiler");
        $__internal_9e683cdad3b1fbcd1f0f78ce6a53a0403b8f4a8d3d24bedd89bb1489db536382->enter($__internal_9e683cdad3b1fbcd1f0f78ce6a53a0403b8f4a8d3d24bedd89bb1489db536382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:setting.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "setting")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("param_index");
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.setting", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 6
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "message")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("message_index");
        echo "\">
\t\tMessages
\t</a>
</li>
<li ";
        // line 11
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "rubrique")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("rubric_index");
        echo "\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.rubrics", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
<li ";
        // line 16
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "language")) {
            echo "class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("language_index");
        echo "\">
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.language", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "NMSO Field", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "NMSO Field", array(), "array"), "active", array()) == 1))) {
            // line 22
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "workfields")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("workfields_index");
            echo "\">
\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.workfields", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contract Type", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contract Type", array(), "array"), "active", array()) == 1))) {
            // line 29
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "typecontract")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("typecontract_index");
            echo "\">
\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Status", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Status", array(), "array"), "active", array()) == 1))) {
            // line 36
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "status")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("status_index");
            echo "\">
\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.status", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 42
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Category teacher", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Category teacher", array(), "array"), "active", array()) == 1))) {
            // line 43
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "category")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("categoryteacher_index");
            echo "\">
\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.categoryteacher", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 49
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Dayoff", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Dayoff", array(), "array"), "active", array()) == 1))) {
            // line 50
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "dayoff")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("holidayslist_index");
            echo "\">
\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dayoff", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "TOOLS", array(), "array", false, true), "Motif", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "TOOLS", array(), "array"), "Motif", array(), "array"), "active", array()) == 1))) {
            // line 57
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "motifabsence")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("motifabsence_index");
            echo "\">
\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.motifabs", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        
        $__internal_9e683cdad3b1fbcd1f0f78ce6a53a0403b8f4a8d3d24bedd89bb1489db536382->leave($__internal_9e683cdad3b1fbcd1f0f78ce6a53a0403b8f4a8d3d24bedd89bb1489db536382_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 59,  193 => 58,  186 => 57,  184 => 56,  177 => 52,  173 => 51,  166 => 50,  164 => 49,  157 => 45,  153 => 44,  146 => 43,  144 => 42,  137 => 38,  133 => 37,  126 => 36,  124 => 35,  117 => 31,  113 => 30,  106 => 29,  104 => 28,  97 => 24,  93 => 23,  86 => 22,  84 => 21,  78 => 18,  74 => 17,  68 => 16,  62 => 13,  58 => 12,  52 => 11,  45 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="setting"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('param_index') }}">*/
/* 		{{'layout.menu.setting'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="message"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('message_index') }}">*/
/* 		Messages*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="rubrique"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('rubric_index') }}">*/
/* 		{{'layout.menu.rubrics'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* <li {%if sm=="language"%}class="active"{%endif%}>*/
/* 	<a href="{{ path('language_index') }}">*/
/* 		{{'layout.menu.language'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%if app.session.get('rights')['CONTRACTS']['NMSO Field'] is defined and app.session.get('rights')['CONTRACTS']['NMSO Field'].active==1%}*/
/* 	<li {%if sm=="workfields"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('workfields_index') }}">*/
/* 			{{'layout.menu.workfields'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Contract Type'] is defined and app.session.get('rights')['CONTRACTS']['Contract Type'].active==1%}*/
/* 	<li {%if sm=="typecontract"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('typecontract_index') }}">*/
/* 			{{'layout.menu.contracttype'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Status'] is defined and app.session.get('rights')['STAFF']['Status'].active==1%}*/
/* 	<li {%if sm=="status"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('status_index') }}">*/
/* 			{{'layout.menu.status'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Category teacher'] is defined and app.session.get('rights')['STAFF']['Category teacher'].active==1%}*/
/* 	<li {%if sm=="category"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('categoryteacher_index') }}">*/
/* 			{{'layout.menu.categoryteacher'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Dayoff'] is defined and app.session.get('rights')['STAFF']['Dayoff'].active==1%}*/
/* 	<li {%if sm=="dayoff"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('holidayslist_index') }}">*/
/* 			{{'layout.menu.dayoff'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['TOOLS']['Motif'] is defined and app.session.get('rights')['TOOLS']['Motif'].active==1%}*/
/* 	<li {%if sm=="motifabsence"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('motifabsence_index') }}">*/
/* 			{{'layout.menu.motifabs'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* */
