<?php

/* contracts/showstudent.html.twig */
class __TwigTemplate_3624f9bbacefa32a609bf43e050bd72e5ff60e72bc509bb46e74907a008c4b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contracts/showstudent.html.twig", 1);
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
        $__internal_3ac827b962fce51abcd94dfbda617cb92db9efcd5bee40c6f25fd1e17c7c08cc = $this->env->getExtension("native_profiler");
        $__internal_3ac827b962fce51abcd94dfbda617cb92db9efcd5bee40c6f25fd1e17c7c08cc->enter($__internal_3ac827b962fce51abcd94dfbda617cb92db9efcd5bee40c6f25fd1e17c7c08cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/showstudent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac827b962fce51abcd94dfbda617cb92db9efcd5bee40c6f25fd1e17c7c08cc->leave($__internal_3ac827b962fce51abcd94dfbda617cb92db9efcd5bee40c6f25fd1e17c7c08cc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_31ac8c04c99b2c28e789df411e5d1204d18755a7ed31f1a0607e40edb1dc814d = $this->env->getExtension("native_profiler");
        $__internal_31ac8c04c99b2c28e789df411e5d1204d18755a7ed31f1a0607e40edb1dc814d->enter($__internal_31ac8c04c99b2c28e789df411e5d1204d18755a7ed31f1a0607e40edb1dc814d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.removeofcontract", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_31ac8c04c99b2c28e789df411e5d1204d18755a7ed31f1a0607e40edb1dc814d->leave($__internal_31ac8c04c99b2c28e789df411e5d1204d18755a7ed31f1a0607e40edb1dc814d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_309c3313f2fd1b0ccdc91b661b87ee051614fbe2bcda0307ba3fd9a9540f81dd = $this->env->getExtension("native_profiler");
        $__internal_309c3313f2fd1b0ccdc91b661b87ee051614fbe2bcda0307ba3fd9a9540f81dd->enter($__internal_309c3313f2fd1b0ccdc91b661b87ee051614fbe2bcda0307ba3fd9a9540f81dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t.row.content {min-height: 660px}
\t</style>
";
        
        $__internal_309c3313f2fd1b0ccdc91b661b87ee051614fbe2bcda0307ba3fd9a9540f81dd->leave($__internal_309c3313f2fd1b0ccdc91b661b87ee051614fbe2bcda0307ba3fd9a9540f81dd_prof);

    }

    // line 9
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_540b9657bef272178c33794ef6f87fe184e28c21e9b5d7ca13bd65753beb2ea5 = $this->env->getExtension("native_profiler");
        $__internal_540b9657bef272178c33794ef6f87fe184e28c21e9b5d7ca13bd65753beb2ea5->enter($__internal_540b9657bef272178c33794ef6f87fe184e28c21e9b5d7ca13bd65753beb2ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/showstudent.html.twig", 9)->display($context);
        
        $__internal_540b9657bef272178c33794ef6f87fe184e28c21e9b5d7ca13bd65753beb2ea5->leave($__internal_540b9657bef272178c33794ef6f87fe184e28c21e9b5d7ca13bd65753beb2ea5_prof);

    }

    // line 10
    public function block_nav($context, array $blocks = array())
    {
        $__internal_539e63ac92c93fc675011954fcc62f2ec83071866f6bd4aebe2d0efce9188008 = $this->env->getExtension("native_profiler");
        $__internal_539e63ac92c93fc675011954fcc62f2ec83071866f6bd4aebe2d0efce9188008->enter($__internal_539e63ac92c93fc675011954fcc62f2ec83071866f6bd4aebe2d0efce9188008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:rightshow.html.twig", "contracts/showstudent.html.twig", 10)->display($context);
        
        $__internal_539e63ac92c93fc675011954fcc62f2ec83071866f6bd4aebe2d0efce9188008->leave($__internal_539e63ac92c93fc675011954fcc62f2ec83071866f6bd4aebe2d0efce9188008_prof);

    }

    // line 11
    public function block_label($context, array $blocks = array())
    {
        $__internal_859e98f4a4a123ddc596c1df09d060215858c602aa706bec0ff593783c0fcf0f = $this->env->getExtension("native_profiler");
        $__internal_859e98f4a4a123ddc596c1df09d060215858c602aa706bec0ff593783c0fcf0f->enter($__internal_859e98f4a4a123ddc596c1df09d060215858c602aa706bec0ff593783c0fcf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.removeofcontract", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_859e98f4a4a123ddc596c1df09d060215858c602aa706bec0ff593783c0fcf0f->leave($__internal_859e98f4a4a123ddc596c1df09d060215858c602aa706bec0ff593783c0fcf0f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8bdb56fa4cf563ebb5d440609c332391995eb948b0762c01d37159a874f794c = $this->env->getExtension("native_profiler");
        $__internal_e8bdb56fa4cf563ebb5d440609c332391995eb948b0762c01d37159a874f794c->enter($__internal_e8bdb56fa4cf563ebb5d440609c332391995eb948b0762c01d37159a874f794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<div id=\"body-content\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "ddelete", array()) == 1))) {
            // line 19
            echo "\t\t\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t\t\t";
            // line 20
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 22
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.cancel", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>\t\t
\t\t\t</div>
\t\t</div>\t

\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 35
        $this->loadTemplate("BoAdminBundle:Students:showcontract.html.twig", "contracts/showstudent.html.twig", 35)->display($context);
        // line 36
        echo "\t\t</div>

\t\t<div class=\"show_content\">
\t\t\t";
        // line 39
        $this->loadTemplate("BoAdminBundle:Students:show.html.twig", "contracts/showstudent.html.twig", 39)->display($context);
        // line 40
        echo "\t\t</div>\t
\t</div>
";
        
        $__internal_e8bdb56fa4cf563ebb5d440609c332391995eb948b0762c01d37159a874f794c->leave($__internal_e8bdb56fa4cf563ebb5d440609c332391995eb948b0762c01d37159a874f794c_prof);

    }

    public function getTemplateName()
    {
        return "contracts/showstudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 40,  174 => 39,  169 => 36,  167 => 35,  163 => 34,  150 => 26,  147 => 25,  141 => 22,  137 => 21,  133 => 20,  130 => 19,  128 => 18,  121 => 13,  115 => 12,  99 => 11,  86 => 10,  74 => 9,  61 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.removeofcontract'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<style>*/
/* 		.row.content {min-height: 660px}*/
/* 	</style>*/
/* {% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%include "BoAdminBundle:Students:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.removeofcontract'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-body">*/
/* 				<table>*/
/* 					<tr>*/
/* 						{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].ddelete==1%}*/
/* 							<td class="delete-action">*/
/* 								{{ form_start(delete_form) }}*/
/* 									<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 								{{ form_end(delete_form) }}*/
/* 							</td>*/
/* 						{%endif%}*/
/* 						<td>*/
/* 							<a href="{{ path('contracts_show',{'id':contract.id}) }}">{{'action.cancel'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</table>		*/
/* 			</div>*/
/* 		</div>	*/
/* */
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:showcontract.html.twig"%}*/
/* 		</div>*/
/* */
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Students:show.html.twig"%}*/
/* 		</div>	*/
/* 	</div>*/
/* {% endblock %}*/
/* */
