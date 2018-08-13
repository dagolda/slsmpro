<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ebc83a252a96998a162accfcdb517fec1da4c36b52c862f10bbebabc86b59cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79b41db389d07bc6f46ab9d4f454080ec43ccba53e9caeacd576ba8d94b7f266 = $this->env->getExtension("native_profiler");
        $__internal_79b41db389d07bc6f46ab9d4f454080ec43ccba53e9caeacd576ba8d94b7f266->enter($__internal_79b41db389d07bc6f46ab9d4f454080ec43ccba53e9caeacd576ba8d94b7f266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_79b41db389d07bc6f46ab9d4f454080ec43ccba53e9caeacd576ba8d94b7f266->leave($__internal_79b41db389d07bc6f46ab9d4f454080ec43ccba53e9caeacd576ba8d94b7f266_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_abfba430c42bfe1e36a375c73c60974bdf22b0fc14c793760ef5c9325bf64373 = $this->env->getExtension("native_profiler");
        $__internal_abfba430c42bfe1e36a375c73c60974bdf22b0fc14c793760ef5c9325bf64373->enter($__internal_abfba430c42bfe1e36a375c73c60974bdf22b0fc14c793760ef5c9325bf64373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "\t";
        // line 4
        echo "\t\t";
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
\t";
        
        $__internal_abfba430c42bfe1e36a375c73c60974bdf22b0fc14c793760ef5c9325bf64373->leave($__internal_abfba430c42bfe1e36a375c73c60974bdf22b0fc14c793760ef5c9325bf64373_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f35b7a15c8e4779517842b6bd57e4c530feb84286dc0969671067b3bc5b4b7d0 = $this->env->getExtension("native_profiler");
        $__internal_f35b7a15c8e4779517842b6bd57e4c530feb84286dc0969671067b3bc5b4b7d0->enter($__internal_f35b7a15c8e4779517842b6bd57e4c530feb84286dc0969671067b3bc5b4b7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "\t";
        // line 9
        echo "\t\t";
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
\t";
        
        $__internal_f35b7a15c8e4779517842b6bd57e4c530feb84286dc0969671067b3bc5b4b7d0->leave($__internal_f35b7a15c8e4779517842b6bd57e4c530feb84286dc0969671067b3bc5b4b7d0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b5cd698a4eaea67153c22a8634d333134de5c7f8ee7335c3c932199d447ed817 = $this->env->getExtension("native_profiler");
        $__internal_b5cd698a4eaea67153c22a8634d333134de5c7f8ee7335c3c932199d447ed817->enter($__internal_b5cd698a4eaea67153c22a8634d333134de5c7f8ee7335c3c932199d447ed817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        echo "SLSMANAGER for CLIC";
        
        $__internal_b5cd698a4eaea67153c22a8634d333134de5c7f8ee7335c3c932199d447ed817->leave($__internal_b5cd698a4eaea67153c22a8634d333134de5c7f8ee7335c3c932199d447ed817_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  62 => 9,  60 => 8,  54 => 7,  44 => 4,  42 => 3,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* 	{% autoescape false %}*/
/* 		{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* 	{% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* 	{% autoescape false %}*/
/* 		{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* 	{% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}SLSMANAGER for CLIC{% endblock %}*/
/* */
