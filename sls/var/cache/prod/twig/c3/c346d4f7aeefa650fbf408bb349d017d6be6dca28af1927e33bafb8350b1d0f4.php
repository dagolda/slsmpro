<?php

/* BoAdminBundle:Contracts:historic.html.twig */
class __TwigTemplate_c0690f893f44cc4d42593276e5e306f134c13d853324aaab704727a846bce9d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdminBundle:Contracts:historic.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bef45186c7e7437f6c3f1300822d6863aad4b7fa715bd9cb5a0154c7f1444b0 = $this->env->getExtension("native_profiler");
        $__internal_1bef45186c7e7437f6c3f1300822d6863aad4b7fa715bd9cb5a0154c7f1444b0->enter($__internal_1bef45186c7e7437f6c3f1300822d6863aad4b7fa715bd9cb5a0154c7f1444b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:historic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bef45186c7e7437f6c3f1300822d6863aad4b7fa715bd9cb5a0154c7f1444b0->leave($__internal_1bef45186c7e7437f6c3f1300822d6863aad4b7fa715bd9cb5a0154c7f1444b0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_390b762ebee123b23dcc76b20c810f440faa82f81854718002320143a6bbc256 = $this->env->getExtension("native_profiler");
        $__internal_390b762ebee123b23dcc76b20c810f440faa82f81854718002320143a6bbc256->enter($__internal_390b762ebee123b23dcc76b20c810f440faa82f81854718002320143a6bbc256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.historic", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_390b762ebee123b23dcc76b20c810f440faa82f81854718002320143a6bbc256->leave($__internal_390b762ebee123b23dcc76b20c810f440faa82f81854718002320143a6bbc256_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_c55c710d7c19e03d0222dfa425cf59ecd40880be9df8e377cef39cc5f73d7801 = $this->env->getExtension("native_profiler");
        $__internal_c55c710d7c19e03d0222dfa425cf59ecd40880be9df8e377cef39cc5f73d7801->enter($__internal_c55c710d7c19e03d0222dfa425cf59ecd40880be9df8e377cef39cc5f73d7801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "BoAdminBundle:Contracts:historic.html.twig", 3)->display($context);
        
        $__internal_c55c710d7c19e03d0222dfa425cf59ecd40880be9df8e377cef39cc5f73d7801->leave($__internal_c55c710d7c19e03d0222dfa425cf59ecd40880be9df8e377cef39cc5f73d7801_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e679b10f4a20ab3bf62755243a1e1feec4e3393509eec0143a9900ca5d1d2d81 = $this->env->getExtension("native_profiler");
        $__internal_e679b10f4a20ab3bf62755243a1e1feec4e3393509eec0143a9900ca5d1d2d81->enter($__internal_e679b10f4a20ab3bf62755243a1e1feec4e3393509eec0143a9900ca5d1d2d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Contracts:rightshow.html.twig", "BoAdminBundle:Contracts:historic.html.twig", 4)->display($context);
        
        $__internal_e679b10f4a20ab3bf62755243a1e1feec4e3393509eec0143a9900ca5d1d2d81->leave($__internal_e679b10f4a20ab3bf62755243a1e1feec4e3393509eec0143a9900ca5d1d2d81_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_9eac802689e3f8bea97b9620218b5e6fbc078c35aed9aa95a4bb2435635ad8b4 = $this->env->getExtension("native_profiler");
        $__internal_9eac802689e3f8bea97b9620218b5e6fbc078c35aed9aa95a4bb2435635ad8b4->enter($__internal_9eac802689e3f8bea97b9620218b5e6fbc078c35aed9aa95a4bb2435635ad8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.historic", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_9eac802689e3f8bea97b9620218b5e6fbc078c35aed9aa95a4bb2435635ad8b4->leave($__internal_9eac802689e3f8bea97b9620218b5e6fbc078c35aed9aa95a4bb2435635ad8b4_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_09ef1c9f3dd41f8e4d8008113970138ad73d3fbf36f0924bd5de3e23f77ee935 = $this->env->getExtension("native_profiler");
        $__internal_09ef1c9f3dd41f8e4d8008113970138ad73d3fbf36f0924bd5de3e23f77ee935->enter($__internal_09ef1c9f3dd41f8e4d8008113970138ad73d3fbf36f0924bd5de3e23f77ee935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $this->loadTemplate("BoAdminBundle:Histocontract:actions.html.twig", "BoAdminBundle:Contracts:historic.html.twig", 6)->display($context);
        
        $__internal_09ef1c9f3dd41f8e4d8008113970138ad73d3fbf36f0924bd5de3e23f77ee935->leave($__internal_09ef1c9f3dd41f8e4d8008113970138ad73d3fbf36f0924bd5de3e23f77ee935_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8cdf720ff27b90ed53ed9c992c8160a9a95d7ae88e8a0f97028a85af21cf974 = $this->env->getExtension("native_profiler");
        $__internal_f8cdf720ff27b90ed53ed9c992c8160a9a95d7ae88e8a0f97028a85af21cf974->enter($__internal_f8cdf720ff27b90ed53ed9c992c8160a9a95d7ae88e8a0f97028a85af21cf974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"content-liste\">
\t    <table class=\"table table-bordered records_list\">
\t\t<thead>
\t\t    <tr>
\t\t        <th width=\"15%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.user", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t        <th width=\"70%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t    </tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historics"]) ? $context["historics"] : $this->getContext($context, "historics")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["historic"]) {
            // line 19
            echo "\t\t    <tr>
 \t\t\t  <td>";
            // line 20
            if ($this->getAttribute($context["historic"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["historic"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
\t\t\t  <td>";
            // line 21
            if ($this->getAttribute($context["historic"], "user", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["historic"], "user", array()), "html", null, true);
            }
            echo "</td>
\t\t\t  <td>";
            // line 22
            if ($this->getAttribute($context["historic"], "description", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["historic"], "description", array()), "html", null, true);
            }
            echo "</td>
\t\t    </tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "\t\t\t\t<tr><td colspan=\"3\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</tbody>
\t    </table>
\t</div>
";
        
        $__internal_f8cdf720ff27b90ed53ed9c992c8160a9a95d7ae88e8a0f97028a85af21cf974->leave($__internal_f8cdf720ff27b90ed53ed9c992c8160a9a95d7ae88e8a0f97028a85af21cf974_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:historic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 27,  164 => 25,  154 => 22,  148 => 21,  142 => 20,  139 => 19,  134 => 18,  127 => 14,  123 => 13,  119 => 12,  113 => 8,  107 => 7,  95 => 6,  79 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'label.historic'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}{%include "BoAdminBundle:Contracts:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'label.historic'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}{%include "BoAdminBundle:Histocontract:actions.html.twig"%}{% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 	    <table class="table table-bordered records_list">*/
/* 		<thead>*/
/* 		    <tr>*/
/* 		        <th width="15%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%">{{'label.user'|trans([],'BoAdminBundle')}}</th>*/
/* 		        <th width="70%">{{'label.description'|trans([],'BoAdminBundle')}}</th>*/
/* 		    </tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% for historic in historics %}*/
/* 		    <tr>*/
/*  			  <td>{% if historic.creationdate %}{{ historic.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 			  <td>{% if historic.user %}{{ historic.user }}{% endif %}</td>*/
/* 			  <td>{% if historic.description %}{{ historic.description }}{% endif %}</td>*/
/* 		    </tr>*/
/* 			{%else%}*/
/* 				<tr><td colspan="3">{{'message.no.found'|trans([],'BoAdminBundle')}}</td></tr>*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 	    </table>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
