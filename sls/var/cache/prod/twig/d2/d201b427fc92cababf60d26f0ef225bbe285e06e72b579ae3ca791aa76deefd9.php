<?php

/* BoQuizBundle:Evalquiz:userlink.html.twig */
class __TwigTemplate_c18ec45622e0fae7734681d58ffd5223844da7e71121035e1b96c510f1266055 extends Twig_Template
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
        $__internal_1620b34b724b0c72431369d403c49b3396c9a13afeca8384d94e61a0f7f67979 = $this->env->getExtension("native_profiler");
        $__internal_1620b34b724b0c72431369d403c49b3396c9a13afeca8384d94e61a0f7f67979->enter($__internal_1620b34b724b0c72431369d403c49b3396c9a13afeca8384d94e61a0f7f67979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoQuizBundle:Evalquiz:userlink.html.twig"));

        // line 1
        echo $this->env->getExtension('routing')->getPath("bo_quiz_login");
        echo "
";
        
        $__internal_1620b34b724b0c72431369d403c49b3396c9a13afeca8384d94e61a0f7f67979->leave($__internal_1620b34b724b0c72431369d403c49b3396c9a13afeca8384d94e61a0f7f67979_prof);

    }

    public function getTemplateName()
    {
        return "BoQuizBundle:Evalquiz:userlink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ path('bo_quiz_login') }}*/
/* */
