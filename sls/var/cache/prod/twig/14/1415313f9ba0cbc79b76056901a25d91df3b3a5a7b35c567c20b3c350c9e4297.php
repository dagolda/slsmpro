<?php

/* base2.html.twig */
class __TwigTemplate_a7ed2b986dbf65dfeace6d6b60f67356122d12943a56c2fc9bb2a7b9cf76b65f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'smenu' => array($this, 'block_smenu'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c300f3504ef1554ec1c45fdc125c5d1f0d16f54c22587aa11f738ce6943a7a5 = $this->env->getExtension("native_profiler");
        $__internal_4c300f3504ef1554ec1c45fdc125c5d1f0d16f54c22587aa11f738ce6943a7a5->enter($__internal_4c300f3504ef1554ec1c45fdc125c5d1f0d16f54c22587aa11f738ce6943a7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->loadTemplate("BoAdminBundle:Default:head.html.twig", "base2.html.twig", 3)->display($context);
        // line 4
        echo "    <body>
\t\t<div id=\"wrapper\">
\t\t\t<div class=\"container header\">
\t\t\t\t<div class=\"h-left\">
\t\t\t\t\t<div class=\"logo\"></div>
\t\t\t\t\t<p class=\"slogan\">
\t\t\t\t\t\tSLSMPRO
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"h-right\">
\t\t\t\t\t";
        // line 14
        $this->loadTemplate("BoAdminBundle:Default:userinfo.html.twig", "base2.html.twig", 14)->display($context);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid menu\">
\t\t\t\t";
        // line 18
        $this->loadTemplate("BoAdminBundle:Default:pm.html.twig", "base2.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t</div>
\t\t\t<div id=\"line\"/>
\t\t\t<div class=\"container-fluid text-center\">    
\t\t\t\t<div class=\"row content\">
\t\t\t\t\t<div class=\"col-sm-8 text-left2\">
\t\t\t\t\t\t<div class=\"container sub-menu\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('smenu', $context, $blocks);
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-content\">
\t\t\t\t\t\t\t<div class=\"message-content\">
\t\t\t\t\t\t\t\t";
        // line 31
        $this->loadTemplate("BoAdminBundle:Default:message.html.twig", "base2.html.twig", 31)->display($context);
        // line 32
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<legend>";
        // line 33
        $this->displayBlock('label', $context, $blocks);
        echo "</legend>
\t\t\t\t\t\t\t";
        // line 34
        $this->displayBlock('actions', $context, $blocks);
        // line 35
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 40
        $this->loadTemplate("BoAdminBundle:Default:footer.html.twig", "base2.html.twig", 40)->display($context);
        // line 41
        echo "\t\t</div>
        \t";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
        
        $__internal_4c300f3504ef1554ec1c45fdc125c5d1f0d16f54c22587aa11f738ce6943a7a5->leave($__internal_4c300f3504ef1554ec1c45fdc125c5d1f0d16f54c22587aa11f738ce6943a7a5_prof);

    }

    // line 26
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_89463ca31a5fadf791d525d8bb9bd2cc0490b0fe00a00ad94c233ef041d1cbdc = $this->env->getExtension("native_profiler");
        $__internal_89463ca31a5fadf791d525d8bb9bd2cc0490b0fe00a00ad94c233ef041d1cbdc->enter($__internal_89463ca31a5fadf791d525d8bb9bd2cc0490b0fe00a00ad94c233ef041d1cbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_89463ca31a5fadf791d525d8bb9bd2cc0490b0fe00a00ad94c233ef041d1cbdc->leave($__internal_89463ca31a5fadf791d525d8bb9bd2cc0490b0fe00a00ad94c233ef041d1cbdc_prof);

    }

    // line 33
    public function block_label($context, array $blocks = array())
    {
        $__internal_b06beb7622310cf48b9fdbbe83a047c7ffc715a9c56b3b4006c648bb998b81ce = $this->env->getExtension("native_profiler");
        $__internal_b06beb7622310cf48b9fdbbe83a047c7ffc715a9c56b3b4006c648bb998b81ce->enter($__internal_b06beb7622310cf48b9fdbbe83a047c7ffc715a9c56b3b4006c648bb998b81ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        
        $__internal_b06beb7622310cf48b9fdbbe83a047c7ffc715a9c56b3b4006c648bb998b81ce->leave($__internal_b06beb7622310cf48b9fdbbe83a047c7ffc715a9c56b3b4006c648bb998b81ce_prof);

    }

    // line 34
    public function block_actions($context, array $blocks = array())
    {
        $__internal_574d7a693b451b5c73edcfd3f16bb167bdb483dd947986e9e0fb9a91d48b06bf = $this->env->getExtension("native_profiler");
        $__internal_574d7a693b451b5c73edcfd3f16bb167bdb483dd947986e9e0fb9a91d48b06bf->enter($__internal_574d7a693b451b5c73edcfd3f16bb167bdb483dd947986e9e0fb9a91d48b06bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_574d7a693b451b5c73edcfd3f16bb167bdb483dd947986e9e0fb9a91d48b06bf->leave($__internal_574d7a693b451b5c73edcfd3f16bb167bdb483dd947986e9e0fb9a91d48b06bf_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b9be560b503c6a02eebaa840e57630ab710dec83a828bf3d58a75044cc4b1a2 = $this->env->getExtension("native_profiler");
        $__internal_0b9be560b503c6a02eebaa840e57630ab710dec83a828bf3d58a75044cc4b1a2->enter($__internal_0b9be560b503c6a02eebaa840e57630ab710dec83a828bf3d58a75044cc4b1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b9be560b503c6a02eebaa840e57630ab710dec83a828bf3d58a75044cc4b1a2->leave($__internal_0b9be560b503c6a02eebaa840e57630ab710dec83a828bf3d58a75044cc4b1a2_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5219a23915fe00394a936f4f4373f143b6009d5661c80fb0f3895f3b1c2cb15e = $this->env->getExtension("native_profiler");
        $__internal_5219a23915fe00394a936f4f4373f143b6009d5661c80fb0f3895f3b1c2cb15e->enter($__internal_5219a23915fe00394a936f4f4373f143b6009d5661c80fb0f3895f3b1c2cb15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t\t
\t\t";
        
        $__internal_5219a23915fe00394a936f4f4373f143b6009d5661c80fb0f3895f3b1c2cb15e->leave($__internal_5219a23915fe00394a936f4f4373f143b6009d5661c80fb0f3895f3b1c2cb15e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 43,  151 => 42,  140 => 35,  129 => 34,  118 => 33,  107 => 26,  98 => 45,  96 => 42,  93 => 41,  91 => 40,  85 => 36,  82 => 35,  80 => 34,  76 => 33,  73 => 32,  71 => 31,  63 => 26,  54 => 19,  52 => 18,  47 => 15,  45 => 14,  33 => 4,  31 => 3,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     {%include "BoAdminBundle:Default:head.html.twig"%}*/
/*     <body>*/
/* 		<div id="wrapper">*/
/* 			<div class="container header">*/
/* 				<div class="h-left">*/
/* 					<div class="logo"></div>*/
/* 					<p class="slogan">*/
/* 						SLSMPRO*/
/* 					</p>*/
/* 				</div>*/
/* 				<div class="h-right">*/
/* 					{%include "BoAdminBundle:Default:userinfo.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container-fluid menu">*/
/* 				{%include "BoAdminBundle:Default:pm.html.twig"%}*/
/* 			</div>*/
/* 			<div id="line"/>*/
/* 			<div class="container-fluid text-center">    */
/* 				<div class="row content">*/
/* 					<div class="col-sm-8 text-left2">*/
/* 						<div class="container sub-menu">*/
/* 							<ul class="list-inline">*/
/* 								{% block smenu %}{% endblock %}								*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="container-content">*/
/* 							<div class="message-content">*/
/* 								{%include "BoAdminBundle:Default:message.html.twig"%}*/
/* 							</div>*/
/* 							<legend>{% block label %}{% endblock %}</legend>*/
/* 							{% block actions %}{% endblock %}*/
/* 							{% block body %}{% endblock %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{%include "BoAdminBundle:Default:footer.html.twig"%}*/
/* 		</div>*/
/*         	{% block javascripts %}*/
/* 			*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
