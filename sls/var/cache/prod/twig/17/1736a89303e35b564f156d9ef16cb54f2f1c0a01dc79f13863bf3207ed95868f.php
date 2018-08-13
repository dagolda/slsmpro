<?php

/* pricesreference/show.html.twig */
class __TwigTemplate_d9edce3dade3939fde237da9de71187bc64ecea815e0df542385199daef29289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pricesreference/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b981affac2bd72282ea3fd281c5c34f2d8bda1e5b3a2a7ddac7eac5163208934 = $this->env->getExtension("native_profiler");
        $__internal_b981affac2bd72282ea3fd281c5c34f2d8bda1e5b3a2a7ddac7eac5163208934->enter($__internal_b981affac2bd72282ea3fd281c5c34f2d8bda1e5b3a2a7ddac7eac5163208934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pricesreference/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b981affac2bd72282ea3fd281c5c34f2d8bda1e5b3a2a7ddac7eac5163208934->leave($__internal_b981affac2bd72282ea3fd281c5c34f2d8bda1e5b3a2a7ddac7eac5163208934_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_41ab5902e094711d4631a9851b4155fe3d7a52ce188185f451993b0ab15846e3 = $this->env->getExtension("native_profiler");
        $__internal_41ab5902e094711d4631a9851b4155fe3d7a52ce188185f451993b0ab15846e3->enter($__internal_41ab5902e094711d4631a9851b4155fe3d7a52ce188185f451993b0ab15846e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.pricesreference", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_41ab5902e094711d4631a9851b4155fe3d7a52ce188185f451993b0ab15846e3->leave($__internal_41ab5902e094711d4631a9851b4155fe3d7a52ce188185f451993b0ab15846e3_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6352b5bfebda19cbba6ccdb8f30abc36057155756d42296ae40d9d73ace89991 = $this->env->getExtension("native_profiler");
        $__internal_6352b5bfebda19cbba6ccdb8f30abc36057155756d42296ae40d9d73ace89991->enter($__internal_6352b5bfebda19cbba6ccdb8f30abc36057155756d42296ae40d9d73ace89991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "pricesreference/show.html.twig", 3)->display($context);
        
        $__internal_6352b5bfebda19cbba6ccdb8f30abc36057155756d42296ae40d9d73ace89991->leave($__internal_6352b5bfebda19cbba6ccdb8f30abc36057155756d42296ae40d9d73ace89991_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7a3331a9af13d172287a19096b439ae6b3d7a11366682b8d42dda4cd8f7f7c37 = $this->env->getExtension("native_profiler");
        $__internal_7a3331a9af13d172287a19096b439ae6b3d7a11366682b8d42dda4cd8f7f7c37->enter($__internal_7a3331a9af13d172287a19096b439ae6b3d7a11366682b8d42dda4cd8f7f7c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Pricesreference:show.html.twig", "pricesreference/show.html.twig", 4)->display($context);
        
        $__internal_7a3331a9af13d172287a19096b439ae6b3d7a11366682b8d42dda4cd8f7f7c37->leave($__internal_7a3331a9af13d172287a19096b439ae6b3d7a11366682b8d42dda4cd8f7f7c37_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_5544b344cfa7289bbfbb08bd4ac6126c78b0cafcbed8b9e0ca61371b48fc7aa3 = $this->env->getExtension("native_profiler");
        $__internal_5544b344cfa7289bbfbb08bd4ac6126c78b0cafcbed8b9e0ca61371b48fc7aa3->enter($__internal_5544b344cfa7289bbfbb08bd4ac6126c78b0cafcbed8b9e0ca61371b48fc7aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.pricesreference", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5544b344cfa7289bbfbb08bd4ac6126c78b0cafcbed8b9e0ca61371b48fc7aa3->leave($__internal_5544b344cfa7289bbfbb08bd4ac6126c78b0cafcbed8b9e0ca61371b48fc7aa3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6530f489fd46ecf82cb01890b0fd5ef48caccdd4138c282a1afb87d3e7b3f1dd = $this->env->getExtension("native_profiler");
        $__internal_6530f489fd46ecf82cb01890b0fd5ef48caccdd4138c282a1afb87d3e7b3f1dd->enter($__internal_6530f489fd46ecf82cb01890b0fd5ef48caccdd4138c282a1afb87d3e7b3f1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Pricesreference:showactions.html.twig", "pricesreference/show.html.twig", 8)->display($context);
        // line 9
        echo "
\t\t<div class=\"display_content\">
\t\t\t<legend>Price</legend>
\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Pricesreference:prices.html.twig", "pricesreference/show.html.twig", 12)->display($context);
        // line 13
        echo "\t\t</div>
\t</div>
\t
\t<!-- begin add price creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_price\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.price", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pricesreference_price_new", array("id" => $this->getAttribute((isset($context["pricesreference"]) ? $context["pricesreference"] : $this->getContext($context, "pricesreference")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\" class=\"form_submitt\">
\t\t\t\t<div class=\"modal-message\"></div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 32
        $this->loadTemplate("BoAdminBundle:Pricesreference:priceform.html.twig", "pricesreference/show.html.twig", 32)->display($context);
        // line 33
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input id=\"btn-create\" type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end price creation form by modal dialog-->\t
\t
\t<!-- begin edit price form by modal dialog-->
\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prices"]) ? $context["prices"] : $this->getContext($context, "prices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            echo "\t
\t\t";
            // line 49
            $context["editform"] = $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), $this->getAttribute($context["price"], "id", array()), array(), "array");
            // line 50
            echo "\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"edit_price";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.price", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pricesreference_price_edit", array("id" => $this->getAttribute($context["price"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\" class=\"form_submitt\">
\t\t\t\t\t\t<div class=\"modal-message\"></div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editform"]) ? $context["editform"] : $this->getContext($context, "editform")), 'errors');
            echo "
\t\t\t\t\t\t\t";
            // line 65
            $this->loadTemplate("BoAdminBundle:Pricesreference:priceeditform.html.twig", "pricesreference/show.html.twig", 65)->display($context);
            // line 66
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editform"]) ? $context["editform"] : $this->getContext($context, "editform")), 'rest');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t<input id=\"btn-create\" type=\"submit\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t</div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t<!-- end edit price form by modal dialog-->\t
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 98
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6530f489fd46ecf82cb01890b0fd5ef48caccdd4138c282a1afb87d3e7b3f1dd->leave($__internal_6530f489fd46ecf82cb01890b0fd5ef48caccdd4138c282a1afb87d3e7b3f1dd_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82dff41e90c02ac2ad6d6af3f65dbf7c6dc4cab034ba504e7edec6973703a221 = $this->env->getExtension("native_profiler");
        $__internal_82dff41e90c02ac2ad6d6af3f65dbf7c6dc4cab034ba504e7edec6973703a221->enter($__internal_82dff41e90c02ac2ad6d6af3f65dbf7c6dc4cab034ba504e7edec6973703a221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "\t\t<script>
\t\t\t\$(\"#btn_submit\").click(function(){
\t\t\t\tvar fullname = \$(\".fullname\").val();
\t\t\t\tvar array = fullname.split(\" \");
\t\t\t\tif(array.length<2){
\t\t\t\t\talert(\"You must to enter a firstname and name separeted by an empty space.\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#btn_delete\").click(function(){
\t\t\t\tvar nb_contract = \$(\"#contract_number\").val();
\t\t\t\tif(nb_contract>0){
\t\t\t\t\talert(\"You can not delete this client because it is attached to a contract.\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_82dff41e90c02ac2ad6d6af3f65dbf7c6dc4cab034ba504e7edec6973703a221->leave($__internal_82dff41e90c02ac2ad6d6af3f65dbf7c6dc4cab034ba504e7edec6973703a221_prof);

    }

    public function getTemplateName()
    {
        return "pricesreference/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 127,  340 => 126,  336 => 125,  315 => 106,  303 => 105,  293 => 98,  289 => 97,  285 => 96,  279 => 93,  273 => 90,  260 => 79,  237 => 70,  233 => 69,  226 => 66,  224 => 65,  220 => 64,  214 => 61,  207 => 59,  197 => 52,  193 => 50,  191 => 49,  172 => 48,  158 => 37,  154 => 36,  147 => 33,  145 => 32,  141 => 31,  135 => 28,  128 => 26,  113 => 13,  111 => 12,  106 => 9,  104 => 8,  101 => 7,  95 => 6,  79 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.pricesreference'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{%include "BoAdminBundle:Pricesreference:show.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.pricesreference'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Pricesreference:showactions.html.twig"%}*/
/* */
/* 		<div class="display_content">*/
/* 			<legend>Price</legend>*/
/* 			{%include "BoAdminBundle:Pricesreference:prices.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add price creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_price" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.price'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('pricesreference_price_new',{'id':pricesreference.id})}}" method="post" class="style" class="form_submitt">*/
/* 				<div class="modal-message"></div>*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Pricesreference:priceform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input id="btn-create" type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end price creation form by modal dialog-->	*/
/* 	*/
/* 	<!-- begin edit price form by modal dialog-->*/
/* 	{% for price in prices %}	*/
/* 		{%set editform = edit_form[price.id]%}*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="edit_price{{price.id}}" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.price'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<form action="{{ path('pricesreference_price_edit',{'id':price.id})}}" method="post" class="style" class="form_submitt">*/
/* 						<div class="modal-message"></div>*/
/* 						<div class="modal-body">*/
/* 							{{ form_errors(editform) }}*/
/* 							{%include "BoAdminBundle:Pricesreference:priceeditform.html.twig"%}*/
/* 							{{ form_rest(editform) }}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 							<input id="btn-create" type="submit" value="{{'action.update'|trans([],'BoAdminBundle')}}">*/
/* 						</div>*/
/* 					</form>	*/
/* 				</div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/*     {% endfor %}*/
/* 	<!-- end edit price form by modal dialog-->	*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_submit").click(function(){*/
/* 				var fullname = $(".fullname").val();*/
/* 				var array = fullname.split(" ");*/
/* 				if(array.length<2){*/
/* 					alert("You must to enter a firstname and name separeted by an empty space.");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#btn_delete").click(function(){*/
/* 				var nb_contract = $("#contract_number").val();*/
/* 				if(nb_contract>0){*/
/* 					alert("You can not delete this client because it is attached to a contract.");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
