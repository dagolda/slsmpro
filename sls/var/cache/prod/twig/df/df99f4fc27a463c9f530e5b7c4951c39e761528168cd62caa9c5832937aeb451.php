<?php

/* workfields/index.html.twig */
class __TwigTemplate_e5ccd51d7fac9e77cbde8e9bac4143c87ef0e4b5d8aaeeee5fc84e7cb6594098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "workfields/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab4d142f53502c00654290a1519f424adee210cdc16002e4b7bdc8c4eadcf78e = $this->env->getExtension("native_profiler");
        $__internal_ab4d142f53502c00654290a1519f424adee210cdc16002e4b7bdc8c4eadcf78e->enter($__internal_ab4d142f53502c00654290a1519f424adee210cdc16002e4b7bdc8c4eadcf78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workfields/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab4d142f53502c00654290a1519f424adee210cdc16002e4b7bdc8c4eadcf78e->leave($__internal_ab4d142f53502c00654290a1519f424adee210cdc16002e4b7bdc8c4eadcf78e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_92a3e69c8d321d33be73abcb357918d0215d5c5416c60508eaa57032d025c5ef = $this->env->getExtension("native_profiler");
        $__internal_92a3e69c8d321d33be73abcb357918d0215d5c5416c60508eaa57032d025c5ef->enter($__internal_92a3e69c8d321d33be73abcb357918d0215d5c5416c60508eaa57032d025c5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.workfield", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_92a3e69c8d321d33be73abcb357918d0215d5c5416c60508eaa57032d025c5ef->leave($__internal_92a3e69c8d321d33be73abcb357918d0215d5c5416c60508eaa57032d025c5ef_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c0769e8a8e6090da270f14c8af4010a9b0e83232b263b8d5337a1fc302e2a06f = $this->env->getExtension("native_profiler");
        $__internal_c0769e8a8e6090da270f14c8af4010a9b0e83232b263b8d5337a1fc302e2a06f->enter($__internal_c0769e8a8e6090da270f14c8af4010a9b0e83232b263b8d5337a1fc302e2a06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "workfields/index.html.twig", 3)->display($context);
        
        $__internal_c0769e8a8e6090da270f14c8af4010a9b0e83232b263b8d5337a1fc302e2a06f->leave($__internal_c0769e8a8e6090da270f14c8af4010a9b0e83232b263b8d5337a1fc302e2a06f_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9950876c63d9155eda8259a04ea90ae11f34f7b7ccc57c9d69113f9f9e93b04c = $this->env->getExtension("native_profiler");
        $__internal_9950876c63d9155eda8259a04ea90ae11f34f7b7ccc57c9d69113f9f9e93b04c->enter($__internal_9950876c63d9155eda8259a04ea90ae11f34f7b7ccc57c9d69113f9f9e93b04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_9950876c63d9155eda8259a04ea90ae11f34f7b7ccc57c9d69113f9f9e93b04c->leave($__internal_9950876c63d9155eda8259a04ea90ae11f34f7b7ccc57c9d69113f9f9e93b04c_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_03dc1549432729254670d2596e61b4ab3a4cc988000f0fc36e410de00b3ed367 = $this->env->getExtension("native_profiler");
        $__internal_03dc1549432729254670d2596e61b4ab3a4cc988000f0fc36e410de00b3ed367->enter($__internal_03dc1549432729254670d2596e61b4ab3a4cc988000f0fc36e410de00b3ed367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.workfield", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_03dc1549432729254670d2596e61b4ab3a4cc988000f0fc36e410de00b3ed367->leave($__internal_03dc1549432729254670d2596e61b4ab3a4cc988000f0fc36e410de00b3ed367_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_22d0537c57c922da6fe95daf482d1069dd686b98ff1f0d2624cdf1af3db60e87 = $this->env->getExtension("native_profiler");
        $__internal_22d0537c57c922da6fe95daf482d1069dd686b98ff1f0d2624cdf1af3db60e87->enter($__internal_22d0537c57c922da6fe95daf482d1069dd686b98ff1f0d2624cdf1af3db60e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Workfields:actions.html.twig", "workfields/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_22d0537c57c922da6fe95daf482d1069dd686b98ff1f0d2624cdf1af3db60e87->leave($__internal_22d0537c57c922da6fe95daf482d1069dd686b98ff1f0d2624cdf1af3db60e87_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_46a15b6a4e731e8131f5e10688f3d3f9c00e7260a68344b0b0ce9efeb1f7729a = $this->env->getExtension("native_profiler");
        $__internal_46a15b6a4e731e8131f5e10688f3d3f9c00e7260a68344b0b0ce9efeb1f7729a->enter($__internal_46a15b6a4e731e8131f5e10688f3d3f9c00e7260a68344b0b0ce9efeb1f7729a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Workfields:tbliste.html.twig", "workfields/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_field\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.workfield", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("workfields_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Workfields:newform.html.twig", "workfields/index.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_46a15b6a4e731e8131f5e10688f3d3f9c00e7260a68344b0b0ce9efeb1f7729a->leave($__internal_46a15b6a4e731e8131f5e10688f3d3f9c00e7260a68344b0b0ce9efeb1f7729a_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3578491109570ff99ba6d861531d5a6719ec56ddde6c0ad70f5ecdb910cca14 = $this->env->getExtension("native_profiler");
        $__internal_b3578491109570ff99ba6d861531d5a6719ec56ddde6c0ad70f5ecdb910cca14->enter($__internal_b3578491109570ff99ba6d861531d5a6719ec56ddde6c0ad70f5ecdb910cca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_b3578491109570ff99ba6d861531d5a6719ec56ddde6c0ad70f5ecdb910cca14->leave($__internal_b3578491109570ff99ba6d861531d5a6719ec56ddde6c0ad70f5ecdb910cca14_prof);

    }

    public function getTemplateName()
    {
        return "workfields/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 42,  184 => 41,  172 => 40,  161 => 32,  154 => 29,  152 => 28,  148 => 27,  143 => 25,  136 => 23,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.workfield'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.workfield'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Workfields:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Workfields:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_field" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.workfield'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('workfields_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 							{%include "BoAdminBundle:Workfields:newform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
