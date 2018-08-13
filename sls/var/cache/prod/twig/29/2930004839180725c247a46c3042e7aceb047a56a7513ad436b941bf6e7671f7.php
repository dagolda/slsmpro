<?php

/* contracts/confirmation.html.twig */
class __TwigTemplate_a9d447b8a8b8bf665a77bc98326b95f6886cb89c194d125c2807f0b21bc4feeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contracts/confirmation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_f8d0e6d13eafcdf920179ca601cb6022073dde0d7517e0c4604cd89ed2e4d683 = $this->env->getExtension("native_profiler");
        $__internal_f8d0e6d13eafcdf920179ca601cb6022073dde0d7517e0c4604cd89ed2e4d683->enter($__internal_f8d0e6d13eafcdf920179ca601cb6022073dde0d7517e0c4604cd89ed2e4d683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d0e6d13eafcdf920179ca601cb6022073dde0d7517e0c4604cd89ed2e4d683->leave($__internal_f8d0e6d13eafcdf920179ca601cb6022073dde0d7517e0c4604cd89ed2e4d683_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2451df92a8752677360f0a9c5d54ea713f40b2b1eb42d5e73b5641f7ebb7a4fa = $this->env->getExtension("native_profiler");
        $__internal_2451df92a8752677360f0a9c5d54ea713f40b2b1eb42d5e73b5641f7ebb7a4fa->enter($__internal_2451df92a8752677360f0a9c5d54ea713f40b2b1eb42d5e73b5641f7ebb7a4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.confirmation", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_2451df92a8752677360f0a9c5d54ea713f40b2b1eb42d5e73b5641f7ebb7a4fa->leave($__internal_2451df92a8752677360f0a9c5d54ea713f40b2b1eb42d5e73b5641f7ebb7a4fa_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdaa49037a648273981fc99bb4ca8f8a80b80a40a71e295572cd057fba4726b4 = $this->env->getExtension("native_profiler");
        $__internal_bdaa49037a648273981fc99bb4ca8f8a80b80a40a71e295572cd057fba4726b4->enter($__internal_bdaa49037a648273981fc99bb4ca8f8a80b80a40a71e295572cd057fba4726b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_bdaa49037a648273981fc99bb4ca8f8a80b80a40a71e295572cd057fba4726b4->leave($__internal_bdaa49037a648273981fc99bb4ca8f8a80b80a40a71e295572cd057fba4726b4_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_8a8e77a5dcb8b8806e02a233c53428375b991b9912ddaac618b283faf4857df2 = $this->env->getExtension("native_profiler");
        $__internal_8a8e77a5dcb8b8806e02a233c53428375b991b9912ddaac618b283faf4857df2->enter($__internal_8a8e77a5dcb8b8806e02a233c53428375b991b9912ddaac618b283faf4857df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/confirmation.html.twig", 4)->display($context);
        
        $__internal_8a8e77a5dcb8b8806e02a233c53428375b991b9912ddaac618b283faf4857df2->leave($__internal_8a8e77a5dcb8b8806e02a233c53428375b991b9912ddaac618b283faf4857df2_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f7a422a9870e0d150d30effcbc25cafc8cc279378f8ebd7f905287059782a9bf = $this->env->getExtension("native_profiler");
        $__internal_f7a422a9870e0d150d30effcbc25cafc8cc279378f8ebd7f905287059782a9bf->enter($__internal_f7a422a9870e0d150d30effcbc25cafc8cc279378f8ebd7f905287059782a9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Contracts:rightshow.html.twig", "contracts/confirmation.html.twig", 5)->display($context);
        
        $__internal_f7a422a9870e0d150d30effcbc25cafc8cc279378f8ebd7f905287059782a9bf->leave($__internal_f7a422a9870e0d150d30effcbc25cafc8cc279378f8ebd7f905287059782a9bf_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_ef5fecc74e957c339b665a7c6249c9a01382481d735e3c1be989ae7e1cae2153 = $this->env->getExtension("native_profiler");
        $__internal_ef5fecc74e957c339b665a7c6249c9a01382481d735e3c1be989ae7e1cae2153->enter($__internal_ef5fecc74e957c339b665a7c6249c9a01382481d735e3c1be989ae7e1cae2153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.confirmation", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_ef5fecc74e957c339b665a7c6249c9a01382481d735e3c1be989ae7e1cae2153->leave($__internal_ef5fecc74e957c339b665a7c6249c9a01382481d735e3c1be989ae7e1cae2153_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_32d0c0cb785af49fb434c48ce2a22e589d265a35474c79e6e88296ca461e28e2 = $this->env->getExtension("native_profiler");
        $__internal_32d0c0cb785af49fb434c48ce2a22e589d265a35474c79e6e88296ca461e28e2->enter($__internal_32d0c0cb785af49fb434c48ce2a22e589d265a35474c79e6e88296ca461e28e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_confirmation", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">\t
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Contracts:confirmactions.html.twig", "contracts/confirmation.html.twig", 10)->display($context);
        echo "\t\t\t\t
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t<div class=\"title2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.send.confirmation", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"student\" value=\"1\" checked> ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["emailstudents"]) ? $context["emailstudents"] : $this->getContext($context, "emailstudents")), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 15
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) {
            // line 16
            echo "\t\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"advisor\" value=\"1\" checked> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()), "email", array()), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"clientservice\" value=\"1\" checked> ";
        echo twig_escape_filter($this->env, (isset($context["clientservice"]) ? $context["clientservice"] : $this->getContext($context, "clientservice")), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 19
        if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "coordinator", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "coordinator", array()) != null)) && ($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "coordinator", array()), "email", array()) != null))) {
            // line 20
            echo "\t\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"coordinator\" value=\"1\" checked> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "coordinator", array()), "email", array()), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array()) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array()) != null)) && ($this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array()), "email", array()) != null))) {
            // line 23
            echo "\t\t\t\t\t<div class=\"aeration\"><input type=\"checkbox\" name=\"contractual\" value=\"1\" checked> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractual", array()), "email", array()), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t<div class=\"aeration\">
\t\t\t\t\t<b>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.other", array(), "BoAdminBundle"), "html", null, true);
        echo "</b>: <input type=\"text\" name=\"other\" size=\"60\" value=\"\" />
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t</div>
\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>
\t</div>
";
        
        $__internal_32d0c0cb785af49fb434c48ce2a22e589d265a35474c79e6e88296ca461e28e2->leave($__internal_32d0c0cb785af49fb434c48ce2a22e589d265a35474c79e6e88296ca461e28e2_prof);

    }

    public function getTemplateName()
    {
        return "contracts/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 30,  171 => 26,  168 => 25,  162 => 23,  159 => 22,  153 => 20,  151 => 19,  146 => 18,  140 => 16,  138 => 15,  134 => 14,  130 => 13,  126 => 12,  121 => 10,  117 => 9,  114 => 8,  108 => 7,  92 => 6,  80 => 5,  68 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.confirmation'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{%include "BoAdminBundle:Contracts:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.confirmation'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('contracts_confirmation',{'idcontract':contract.id}) }}" method="post" class="style">	*/
/* 			{%include "BoAdminBundle:Contracts:confirmactions.html.twig"%}				*/
/* 			<div class="show_content">*/
/* 				{{ form_errors(form) }}*/
/* 				<div class="title2">{{'message.send.confirmation'|trans([],'BoAdminBundle')}}</div>*/
/* 				<div class="aeration"><input type="checkbox" name="student" value="1" checked> {{ emailstudents }}</div>*/
/* 				{%if contract.advisor%}*/
/* 					<div class="aeration"><input type="checkbox" name="advisor" value="1" checked> {{contract.advisor.email}}</div>*/
/* 				{%endif%}*/
/* 				<div class="aeration"><input type="checkbox" name="clientservice" value="1" checked> {{clientservice}}</div>*/
/* 				{%if contract.coordinator and contract.coordinator!=null and contract.coordinator.email!=null%}*/
/* 					<div class="aeration"><input type="checkbox" name="coordinator" value="1" checked> {{contract.coordinator.email}}</div>*/
/* 				{%endif%}*/
/* 				{%if contract.contractual and contract.contractual!=null and contract.contractual.email!=null%}*/
/* 					<div class="aeration"><input type="checkbox" name="contractual" value="1" checked> {{contract.contractual.email}}</div>*/
/* 				{%endif%}*/
/* 				<div class="aeration">*/
/* 					<b>{{'label.other'|trans([],'BoAdminBundle')}}</b>: <input type="text" name="other" size="60" value="" />*/
/* 				</div>*/
/* 				<br/>*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
