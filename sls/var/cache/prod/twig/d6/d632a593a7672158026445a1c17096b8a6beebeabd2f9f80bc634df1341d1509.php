<?php

/* BoAdminBundle:Rubric:srubricnew.html.twig */
class __TwigTemplate_202110d92809038d4951b53e16378c14ae97ff3c531b97fa941362a80589e703 extends Twig_Template
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
        $__internal_efaad0c6a1b2f1435d7d4623373ffd6903c3569d9183dbfd6acd5280b4288000 = $this->env->getExtension("native_profiler");
        $__internal_efaad0c6a1b2f1435d7d4623373ffd6903c3569d9183dbfd6acd5280b4288000->enter($__internal_efaad0c6a1b2f1435d7d4623373ffd6903c3569d9183dbfd6acd5280b4288000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:srubricnew.html.twig"));

        // line 1
        echo "\t\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("subrubric_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 2
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 3
            echo "\t\t\t\t<tr><td colspan=\"7\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["schedule_form"]) ? $context["schedule_form"] : $this->getContext($context, "schedule_form")), 'errors');
            echo "</td></tr>
\t\t\t";
        }
        // line 5
        echo "            <tr>
                <td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nameen", array()), 'widget');
        echo "</td>
                <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namefr", array()), 'widget');
        echo "</td>
                <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordre", array()), 'widget');
        echo "</td>
                <td class=\"list-action\">
                    <button type=\"submit\" id=\"btn-create\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
                </td>
            </tr>
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>";
        
        $__internal_efaad0c6a1b2f1435d7d4623373ffd6903c3569d9183dbfd6acd5280b4288000->leave($__internal_efaad0c6a1b2f1435d7d4623373ffd6903c3569d9183dbfd6acd5280b4288000_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:srubricnew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  51 => 10,  46 => 8,  42 => 7,  38 => 6,  35 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }
}
/* 		<form action="{{ path('subrubric_new') }}" method="post" class="style">*/
/* 			{%if form_errors(form) %}*/
/* 				<tr><td colspan="7">{{ form_errors(schedule_form) }}</td></tr>*/
/* 			{%endif%}*/
/*             <tr>*/
/*                 <td>{{ form_widget(form.nameen) }}</td>*/
/*                 <td>{{ form_widget(form.namefr) }}</td>*/
/*                 <td>{{ form_widget(form.ordre) }}</td>*/
/*                 <td class="list-action">*/
/*                     <button type="submit" id="btn-create">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/*                 </td>*/
/*             </tr>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>*/
