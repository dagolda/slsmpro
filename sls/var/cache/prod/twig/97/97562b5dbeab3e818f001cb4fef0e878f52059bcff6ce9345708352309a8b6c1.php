<?php

/* common3.html.twig */
class __TwigTemplate_d4af05ab2897b5ca963f722cfa912d356b45601ece29f351c8749e281ac0b76c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hright' => array($this, 'block_hright'),
            'nemu' => array($this, 'block_nemu'),
            'smenu' => array($this, 'block_smenu'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1acaa2a6d3a931d7cac451e09e4a6cf292e03a6dfe5df6b0888d737386f03c14 = $this->env->getExtension("native_profiler");
        $__internal_1acaa2a6d3a931d7cac451e09e4a6cf292e03a6dfe5df6b0888d737386f03c14->enter($__internal_1acaa2a6d3a931d7cac451e09e4a6cf292e03a6dfe5df6b0888d737386f03c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common3.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->loadTemplate("BoAdminBundle:Default:head.html.twig", "common3.html.twig", 3)->display($context);
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
        $this->displayBlock('hright', $context, $blocks);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid menu\">
\t\t\t\t";
        // line 18
        $this->displayBlock('nemu', $context, $blocks);
        // line 20
        echo "\t\t\t</div>
\t\t\t<div id=\"line\"/>
\t\t\t<div class=\"container-fluid text-center\">    
\t\t\t\t<div class=\"row content\">
\t\t\t\t\t\t<div class=\"container sub-menu\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('smenu', $context, $blocks);
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8 text-left2\">
\t\t\t\t\t\t<div class=\"container-content\">
\t\t\t\t\t\t\t<div class=\"message-content\">
\t\t\t\t\t\t\t\t";
        // line 32
        $this->loadTemplate("BoAdminBundle:Default:message.html.twig", "common3.html.twig", 32)->display($context);
        // line 33
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<legend>";
        // line 34
        $this->displayBlock('label', $context, $blocks);
        echo "</legend>
\t\t\t\t\t\t\t";
        // line 35
        $this->displayBlock('actions', $context, $blocks);
        // line 36
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 41
        $this->loadTemplate("BoAdminBundle:Default:footer.html.twig", "common3.html.twig", 41)->display($context);
        // line 42
        echo "\t\t</div>
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_1acaa2a6d3a931d7cac451e09e4a6cf292e03a6dfe5df6b0888d737386f03c14->leave($__internal_1acaa2a6d3a931d7cac451e09e4a6cf292e03a6dfe5df6b0888d737386f03c14_prof);

    }

    // line 14
    public function block_hright($context, array $blocks = array())
    {
        $__internal_51f5a5f8be6b62e3fe716e6b35f44cbdac14bec43b406748c552b23738c94a63 = $this->env->getExtension("native_profiler");
        $__internal_51f5a5f8be6b62e3fe716e6b35f44cbdac14bec43b406748c552b23738c94a63->enter($__internal_51f5a5f8be6b62e3fe716e6b35f44cbdac14bec43b406748c552b23738c94a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        
        $__internal_51f5a5f8be6b62e3fe716e6b35f44cbdac14bec43b406748c552b23738c94a63->leave($__internal_51f5a5f8be6b62e3fe716e6b35f44cbdac14bec43b406748c552b23738c94a63_prof);

    }

    // line 18
    public function block_nemu($context, array $blocks = array())
    {
        $__internal_161cf508a33ad34fe34459476ca345fbffcf7c33d0e0125f38758024d13e609d = $this->env->getExtension("native_profiler");
        $__internal_161cf508a33ad34fe34459476ca345fbffcf7c33d0e0125f38758024d13e609d->enter($__internal_161cf508a33ad34fe34459476ca345fbffcf7c33d0e0125f38758024d13e609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nemu"));

        // line 19
        echo "\t\t\t\t";
        
        $__internal_161cf508a33ad34fe34459476ca345fbffcf7c33d0e0125f38758024d13e609d->leave($__internal_161cf508a33ad34fe34459476ca345fbffcf7c33d0e0125f38758024d13e609d_prof);

    }

    // line 26
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7f3010125165826e6a526ea043fc6cfdf751968b25caea77a2f641adfcfed64a = $this->env->getExtension("native_profiler");
        $__internal_7f3010125165826e6a526ea043fc6cfdf751968b25caea77a2f641adfcfed64a->enter($__internal_7f3010125165826e6a526ea043fc6cfdf751968b25caea77a2f641adfcfed64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_7f3010125165826e6a526ea043fc6cfdf751968b25caea77a2f641adfcfed64a->leave($__internal_7f3010125165826e6a526ea043fc6cfdf751968b25caea77a2f641adfcfed64a_prof);

    }

    // line 34
    public function block_label($context, array $blocks = array())
    {
        $__internal_a12c88ab1713a479f329ebc3b53ca09b3569012535c0d9bbf93248963aab71c1 = $this->env->getExtension("native_profiler");
        $__internal_a12c88ab1713a479f329ebc3b53ca09b3569012535c0d9bbf93248963aab71c1->enter($__internal_a12c88ab1713a479f329ebc3b53ca09b3569012535c0d9bbf93248963aab71c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        
        $__internal_a12c88ab1713a479f329ebc3b53ca09b3569012535c0d9bbf93248963aab71c1->leave($__internal_a12c88ab1713a479f329ebc3b53ca09b3569012535c0d9bbf93248963aab71c1_prof);

    }

    // line 35
    public function block_actions($context, array $blocks = array())
    {
        $__internal_deb63d143f30ae049e96046ffea5989112bfa347543412aa405e863ca19f08d9 = $this->env->getExtension("native_profiler");
        $__internal_deb63d143f30ae049e96046ffea5989112bfa347543412aa405e863ca19f08d9->enter($__internal_deb63d143f30ae049e96046ffea5989112bfa347543412aa405e863ca19f08d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_deb63d143f30ae049e96046ffea5989112bfa347543412aa405e863ca19f08d9->leave($__internal_deb63d143f30ae049e96046ffea5989112bfa347543412aa405e863ca19f08d9_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6279de649d5c60de59ed8cb7ce979a0645a1d7963d323ee73ba61f0ae3e794a = $this->env->getExtension("native_profiler");
        $__internal_b6279de649d5c60de59ed8cb7ce979a0645a1d7963d323ee73ba61f0ae3e794a->enter($__internal_b6279de649d5c60de59ed8cb7ce979a0645a1d7963d323ee73ba61f0ae3e794a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6279de649d5c60de59ed8cb7ce979a0645a1d7963d323ee73ba61f0ae3e794a->leave($__internal_b6279de649d5c60de59ed8cb7ce979a0645a1d7963d323ee73ba61f0ae3e794a_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70ac814a04ec42a11fc3659798794aa739a133159caef85fa9fa232364ac2447 = $this->env->getExtension("native_profiler");
        $__internal_70ac814a04ec42a11fc3659798794aa739a133159caef85fa9fa232364ac2447->enter($__internal_70ac814a04ec42a11fc3659798794aa739a133159caef85fa9fa232364ac2447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "\t\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t\t\t  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>\t\t\t
\t\t";
        
        $__internal_70ac814a04ec42a11fc3659798794aa739a133159caef85fa9fa232364ac2447->leave($__internal_70ac814a04ec42a11fc3659798794aa739a133159caef85fa9fa232364ac2447_prof);

    }

    public function getTemplateName()
    {
        return "common3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 44,  177 => 43,  166 => 36,  155 => 35,  144 => 34,  133 => 26,  126 => 19,  120 => 18,  109 => 14,  100 => 47,  98 => 43,  95 => 42,  93 => 41,  87 => 37,  84 => 36,  82 => 35,  78 => 34,  75 => 33,  73 => 32,  64 => 26,  56 => 20,  54 => 18,  49 => 15,  47 => 14,  35 => 4,  33 => 3,  29 => 1,);
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
/* 					{% block hright%}{% endblock %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container-fluid menu">*/
/* 				{% block nemu %}*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 			<div id="line"/>*/
/* 			<div class="container-fluid text-center">    */
/* 				<div class="row content">*/
/* 						<div class="container sub-menu">*/
/* 							<ul class="list-inline">*/
/* 								{% block smenu %}{% endblock %}								*/
/* 							</ul>*/
/* 						</div>*/
/* 					<div class="col-sm-8 text-left2">*/
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
/*         {% block javascripts %}*/
/* 			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 			  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>			*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
