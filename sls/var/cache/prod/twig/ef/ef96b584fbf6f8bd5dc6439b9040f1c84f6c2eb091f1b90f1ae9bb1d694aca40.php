<?php

/* BoAdminBundle:Employee:available.html.twig */
class __TwigTemplate_2c5b885682ad260d94c209a2cd35b2c659341bf7daf9c52d6528cfeec6cfd359 extends Twig_Template
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
        $__internal_5f4de3aaeb8556e0951c8bf27cfe3a021b5737a38f1fb8d00df066bca1f3d47c = $this->env->getExtension("native_profiler");
        $__internal_5f4de3aaeb8556e0951c8bf27cfe3a021b5737a38f1fb8d00df066bca1f3d47c->enter($__internal_5f4de3aaeb8556e0951c8bf27cfe3a021b5737a38f1fb8d00df066bca1f3d47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:available.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
            <tr>
\t\t<th>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), "startdate", array()), 'widget');
        echo "</td>
                <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), "enddate", array()), 'widget');
        echo "</td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>\t
            <tr>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), "startam", array()), 'widget');
        echo "</td>
                <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), "endam", array()), 'widget');
        echo "</td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), "startpm", array()), 'widget');
        echo "</td>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["available_form"]) ? $context["available_form"] : $this->getContext($context, "available_form")), "endpm", array()), 'widget');
        echo "</td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
    </table>
";
        
        $__internal_5f4de3aaeb8556e0951c8bf27cfe3a021b5737a38f1fb8d00df066bca1f3d47c->leave($__internal_5f4de3aaeb8556e0951c8bf27cfe3a021b5737a38f1fb8d00df066bca1f3d47c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:available.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  72 => 22,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*             <tr>*/
/* 		<th>{{'label.from'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.to'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ form_widget(available_form.startdate) }}</td>*/
/*                 <td>{{ form_widget(available_form.enddate) }}</td>*/
/*             </tr>*/
/*             <tr><td colspan="2">&nbsp;</td></tr>	*/
/*             <tr>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ form_widget(available_form.startam) }}</td>*/
/*                 <td>{{ form_widget(available_form.endam) }}</td>*/
/*             </tr>*/
/*             <tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ form_widget(available_form.startpm) }}</td>*/
/*                 <td>{{ form_widget(available_form.endpm) }}</td>*/
/*             </tr>*/
/*             <tr><td colspan="2">&nbsp;</td></tr>*/
/*     </table>*/
/* */
