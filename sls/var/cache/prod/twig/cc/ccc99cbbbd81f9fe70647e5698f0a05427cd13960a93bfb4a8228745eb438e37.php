<?php

/* BoAdminBundle:Company:show.html.twig */
class __TwigTemplate_ec0e46756bea54cf874217a65cc914706e44677678f976612a5dfe6732a14ca5 extends Twig_Template
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
        $__internal_df588774ce2f7d476de9979d7c8d92a518084311c3aec90d0021068f5ee4db5d = $this->env->getExtension("native_profiler");
        $__internal_df588774ce2f7d476de9979d7c8d92a518084311c3aec90d0021068f5ee4db5d->enter($__internal_df588774ce2f7d476de9979d7c8d92a518084311c3aec90d0021068f5ee4db5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Company:show.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
                <td class=\"students_company_name\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "nname", array()), "html", null, true);
        echo " ";
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "compte", array())) {
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "compte", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.account", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</td>
                <td width=\"30%px\">";
        // line 5
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "dateCreation", array())) {
            echo "<b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.created", array(), "BoAdminBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</b></td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <td colspan=\"2\" width=80%>
\t\t\t\t\t";
        // line 10
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "messageen", array());
        echo "
\t\t\t\t</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <td colspan=\"2\" width=80%>
\t\t\t\t\t";
        // line 16
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "messagefr", array());
        echo "
\t\t\t\t</td>
            </tr>
        </tbody>
    </table>
";
        
        $__internal_df588774ce2f7d476de9979d7c8d92a518084311c3aec90d0021068f5ee4db5d->leave($__internal_df588774ce2f7d476de9979d7c8d92a518084311c3aec90d0021068f5ee4db5d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Company:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  51 => 10,  38 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td class="students_company_name">{{ company.nname }} {% if company.compte %}- {{ company.compte }} {{'label.account'|trans([],'BoAdminBundle')}}{%endif%}</td>*/
/*                 <td width="30%px">{% if company.dateCreation %}<b>{{'label.created'|trans([],'BoAdminBundle')}}: {{ company.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</b></td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <td colspan="2" width=80%>*/
/* 					{{ company.messageen|raw }}*/
/* 				</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <td colspan="2" width=80%>*/
/* 					{{ company.messagefr|raw }}*/
/* 				</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
