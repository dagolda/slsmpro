<?php

/* BoAdminBundle:Contracts:editbillingcontact.html.twig */
class __TwigTemplate_0f6bd705360c0eaa8952270ba5ec38efc1b9e57c42cc324fa8e52edbe9e310a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdminBundle:Contracts:editbillingcontact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d0201a9113fce30bd23a0656897abe24fd9f92cd719201fb69b3e6582541ee8 = $this->env->getExtension("native_profiler");
        $__internal_9d0201a9113fce30bd23a0656897abe24fd9f92cd719201fb69b3e6582541ee8->enter($__internal_9d0201a9113fce30bd23a0656897abe24fd9f92cd719201fb69b3e6582541ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:editbillingcontact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0201a9113fce30bd23a0656897abe24fd9f92cd719201fb69b3e6582541ee8->leave($__internal_9d0201a9113fce30bd23a0656897abe24fd9f92cd719201fb69b3e6582541ee8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9d4694444929d46678631c404619809635d2382311e88944cc2b3ce3ad31243 = $this->env->getExtension("native_profiler");
        $__internal_d9d4694444929d46678631c404619809635d2382311e88944cc2b3ce3ad31243->enter($__internal_d9d4694444929d46678631c404619809635d2382311e88944cc2b3ce3ad31243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d9d4694444929d46678631c404619809635d2382311e88944cc2b3ce3ad31243->leave($__internal_d9d4694444929d46678631c404619809635d2382311e88944cc2b3ce3ad31243_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_708a8a1f75318cabe610a4717181d4d42a222407a02dad44e3c2be5800f3d6dd = $this->env->getExtension("native_profiler");
        $__internal_708a8a1f75318cabe610a4717181d4d42a222407a02dad44e3c2be5800f3d6dd->enter($__internal_708a8a1f75318cabe610a4717181d4d42a222407a02dad44e3c2be5800f3d6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "BoAdminBundle:Contracts:editbillingcontact.html.twig", 3)->display($context);
        
        $__internal_708a8a1f75318cabe610a4717181d4d42a222407a02dad44e3c2be5800f3d6dd->leave($__internal_708a8a1f75318cabe610a4717181d4d42a222407a02dad44e3c2be5800f3d6dd_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_17803fbeb6392e527cfc82b790b16032253275a834dcf6c8b0c29ce0e3105bcf = $this->env->getExtension("native_profiler");
        $__internal_17803fbeb6392e527cfc82b790b16032253275a834dcf6c8b0c29ce0e3105bcf->enter($__internal_17803fbeb6392e527cfc82b790b16032253275a834dcf6c8b0c29ce0e3105bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_17803fbeb6392e527cfc82b790b16032253275a834dcf6c8b0c29ce0e3105bcf->leave($__internal_17803fbeb6392e527cfc82b790b16032253275a834dcf6c8b0c29ce0e3105bcf_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_4cad621545c13dd7c5cb485802c77829b6ad7da88637132b52d8ff380d8fea4c = $this->env->getExtension("native_profiler");
        $__internal_4cad621545c13dd7c5cb485802c77829b6ad7da88637132b52d8ff380d8fea4c->enter($__internal_4cad621545c13dd7c5cb485802c77829b6ad7da88637132b52d8ff380d8fea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4cad621545c13dd7c5cb485802c77829b6ad7da88637132b52d8ff380d8fea4c->leave($__internal_4cad621545c13dd7c5cb485802c77829b6ad7da88637132b52d8ff380d8fea4c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fede590704bf503f9a259ab526665702a6daa351072759f8f6aae25edf8d0288 = $this->env->getExtension("native_profiler");
        $__internal_fede590704bf503f9a259ab526665702a6daa351072759f8f6aae25edf8d0288->enter($__internal_fede590704bf503f9a259ab526665702a6daa351072759f8f6aae25edf8d0288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_billingcontact_edit", array("id" => $this->getAttribute((isset($context["billingContact"]) ? $context["billingContact"] : $this->getContext($context, "billingContact")), "id", array()), "idcontract" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.update", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 23
        $this->loadTemplate("BoAdminBundle:BillingContact:editform.html.twig", "BoAdminBundle:Contracts:editbillingcontact.html.twig", 23)->display($context);
        // line 24
        echo "\t\t\t</div>
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
";
        
        $__internal_fede590704bf503f9a259ab526665702a6daa351072759f8f6aae25edf8d0288->leave($__internal_fede590704bf503f9a259ab526665702a6daa351072759f8f6aae25edf8d0288_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:editbillingcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 25,  133 => 24,  131 => 23,  119 => 16,  114 => 14,  106 => 9,  102 => 8,  99 => 7,  93 => 6,  77 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.billingcontact'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.billingcontact'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('contracts_billingcontact_edit',{'id':billingContact.id,'idcontract':idcontract}) }}" method="post" class="style">*/
/* 			{{ form_errors(edit_form) }}*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-body">*/
/* 					<table>*/
/* 						<tr>*/
/* 							<td><button type="submit" id="btn-create">{{'action.update'|trans([],'BoAdminBundle')}}</button></td>*/
/* 							<td>*/
/* 								<a href="{{ path('contracts_show',{'id':idcontract}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 							</td>*/
/* 						</tr>*/
/* 					</table>		*/
/* 				</div>*/
/* 			</div>	*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdminBundle:BillingContact:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(edit_form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
