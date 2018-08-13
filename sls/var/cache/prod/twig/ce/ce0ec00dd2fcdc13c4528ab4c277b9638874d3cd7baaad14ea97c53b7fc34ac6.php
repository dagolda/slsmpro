<?php

/* BoAdminBundle:Status:show.html.twig */
class __TwigTemplate_c174230f0cd8e91b7716fdd20f4d44c91105e725411ec4faff96c2edcca77a58 extends Twig_Template
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
        $__internal_84109384c485fb881d45faca268997dd051bfb3eb9ce3bb82ad85102174cf481 = $this->env->getExtension("native_profiler");
        $__internal_84109384c485fb881d45faca268997dd051bfb3eb9ce3bb82ad85102174cf481->enter($__internal_84109384c485fb881d45faca268997dd051bfb3eb9ce3bb82ad85102174cf481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Status:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th width=\"120px\">Id:</th>
                <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Name:</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "statusname", array()), "html", null, true);
        echo "</td>
            </tr>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 16
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_84109384c485fb881d45faca268997dd051bfb3eb9ce3bb82ad85102174cf481->leave($__internal_84109384c485fb881d45faca268997dd051bfb3eb9ce3bb82ad85102174cf481_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Status:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  44 => 15,  36 => 10,  28 => 5,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="120px">Id:</th>*/
/*                 <td>{{ status.id }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Name:</th>*/
/*                 <td>{{ status.statusname }}</td>*/
/*             </tr>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if status.creationdate %}{{ status.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
