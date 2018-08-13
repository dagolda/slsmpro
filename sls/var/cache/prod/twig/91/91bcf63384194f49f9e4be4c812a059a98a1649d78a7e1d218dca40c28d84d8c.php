<?php

/* BoAdminBundle:Holidayslist:show.html.twig */
class __TwigTemplate_3aae464f91810bbd35b3b7ef134d248318d1919d47eeb097d1f8bd93d63633f1 extends Twig_Template
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
        $__internal_2b3983111e27951437e34d192d4c615e584fc334119a294dc765c81c6f088827 = $this->env->getExtension("native_profiler");
        $__internal_2b3983111e27951437e34d192d4c615e584fc334119a294dc765c81c6f088827->enter($__internal_2b3983111e27951437e34d192d4c615e584fc334119a294dc765c81c6f088827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Holidayslist:show.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
\t\t\t\t<th width=\"20%\">Date</th>
                <th width=\"20%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"20%\">Country</th>
\t\t\t\t<th width=\"20%\">Province</th>                
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 10
        if ($this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "ddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "ddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "designation", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "country", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "province", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <td colspan=\"2\">";
        // line 18
        if ($this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["holidayslist"]) ? $context["holidayslist"] : $this->getContext($context, "holidayslist")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>&nbsp;</td>
            </tr>
            <tr><td colspan=\"4\">&nbsp;</td></tr>
        </tbody>
    </table>";
        
        $__internal_2b3983111e27951437e34d192d4c615e584fc334119a294dc765c81c6f088827->leave($__internal_2b3983111e27951437e34d192d4c615e584fc334119a294dc765c81c6f088827_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Holidayslist:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  57 => 17,  50 => 13,  46 => 12,  42 => 11,  36 => 10,  28 => 5,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/* 				<th width="20%">Date</th>*/
/*                 <th width="20%">{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="20%">Country</th>*/
/* 				<th width="20%">Province</th>                */
/*             </tr>*/
/*             <tr>*/
/* 				<td>{% if holidayslist.ddate %}{{ holidayslist.ddate|date('Y-m-d') }}{% endif %}</td>*/
/* 				<td>{{ holidayslist.designation }}</td>*/
/*                 <td>{{ holidayslist.country }}</td>*/
/* 				<td>{{ holidayslist.province }}</td>*/
/*             </tr>*/
/*             <tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <td colspan="2">{% if holidayslist.creationdate %}{{ holidayslist.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 				<td>&nbsp;</td>*/
/*             </tr>*/
/*             <tr><td colspan="4">&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
