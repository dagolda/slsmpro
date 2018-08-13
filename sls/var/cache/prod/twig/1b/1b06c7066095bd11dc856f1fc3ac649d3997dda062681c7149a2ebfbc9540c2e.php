<?php

/* BoAdminBundle:Default:message.html.twig */
class __TwigTemplate_5d23ac8f4f7a3fb49559369557a0fe7f9033ca2107158d81c57f55783a4a49bc extends Twig_Template
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
        $__internal_589a0db0608ff254f3156623897855e90dfaa2da029cd5671c3caae6d35efbfa = $this->env->getExtension("native_profiler");
        $__internal_589a0db0608ff254f3156623897855e90dfaa2da029cd5671c3caae6d35efbfa->enter($__internal_589a0db0608ff254f3156623897855e90dfaa2da029cd5671c3caae6d35efbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:message.html.twig"));

        // line 1
        echo "\t\t\t\t\t\t\t";
        if (((((array_key_exists("message", $context) && ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != null)) && $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "type", array(), "array", true, true)) && ($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type", array(), "array") != null)) && ($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "texte", array(), "array") != null))) {
            // line 2
            echo "\t\t\t\t\t\t\t\t<div class=\"message-container\">
\t\t\t\t\t\t\t\t\t";
            // line 3
            if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type", array(), "array") == "Success")) {
                // line 4
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Success!</strong> ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 8
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type", array(), "array") == "Info")) {
                // line 9
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Info!</strong> ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type", array(), "array") == "Warning")) {
                // line 14
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Warning!</strong> ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type", array(), "array") == "Danger")) {
                // line 19
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Danger!</strong> ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } elseif ((((($this->getAttribute($this->getAttribute(        // line 24
(isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "message"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method") != null)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "message"), "method", false, true), "type", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "type", array(), "array") != null)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "texte", array(), "array") != null))) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<div class=\"message-container\">
\t\t\t\t\t\t\t\t\t";
            // line 26
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "type", array(), "array") == "Success")) {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Success!</strong> ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "type", array(), "array") == "Info")) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Info!</strong> ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "type", array(), "array") == "Warning")) {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Warning!</strong> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "type", array(), "array") == "Danger")) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Danger!</strong> ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method"), "texte", array(), "array"), "html", null, true);
                echo ".
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        
        $__internal_589a0db0608ff254f3156623897855e90dfaa2da029cd5671c3caae6d35efbfa->leave($__internal_589a0db0608ff254f3156623897855e90dfaa2da029cd5671c3caae6d35efbfa_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  124 => 43,  121 => 42,  118 => 41,  112 => 38,  109 => 37,  106 => 36,  100 => 33,  97 => 32,  94 => 31,  88 => 28,  85 => 27,  83 => 26,  80 => 25,  78 => 24,  75 => 23,  69 => 20,  66 => 19,  63 => 18,  57 => 15,  54 => 14,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  33 => 5,  30 => 4,  28 => 3,  25 => 2,  22 => 1,);
    }
}
/* 							{%if message is defined and message!=null and message['type'] is defined and message['type']!=null and message['texte']!=null%}*/
/* 								<div class="message-container">*/
/* 									{%if message['type']=="Success"%}*/
/* 										<div class="alert alert-success">*/
/* 											<strong>Success!</strong> {{message['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 									{%if message['type']=="Info"%}*/
/* 										<div class="alert alert-info">*/
/* 											<strong>Info!</strong> {{message['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 									{%if message['type']=="Warning"%}*/
/* 										<div class="alert alert-warning">*/
/* 											<strong>Warning!</strong> {{message['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 									{%if message['type']=="Danger"%}*/
/* 										<div class="alert alert-danger">*/
/* 											<strong>Danger!</strong> {{message['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 								</div>*/
/* 							{%elseif app.session.get('message') is defined and app.session.get('message')!=null and app.session.get('message')['type'] is defined and app.session.get('message')['type']!=null and app.session.get('message')['texte']!=null%}*/
/* 								<div class="message-container">*/
/* 									{%if app.session.get('message')['type']=="Success"%}*/
/* 										<div class="alert alert-success">*/
/* 											<strong>Success!</strong> {{app.session.get('message')['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 									{%if app.session.get('message')['type']=="Info"%}*/
/* 										<div class="alert alert-info">*/
/* 											<strong>Info!</strong> {{app.session.get('message')['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 									{%if app.session.get('message')['type']=="Warning"%}*/
/* 										<div class="alert alert-warning">*/
/* 											<strong>Warning!</strong> {{app.session.get('message')['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 									{%if app.session.get('message')['type']=="Danger"%}*/
/* 										<div class="alert alert-danger">*/
/* 											<strong>Danger!</strong> {{app.session.get('message')['texte']}}.*/
/* 										</div>*/
/* 									{%endif%}*/
/* 								</div>*/
/* 							{%endif%}*/
