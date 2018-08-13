<?php

/* BoAdminBundle:Param:show.html.twig */
class __TwigTemplate_8d512fcd616a185e8b640ed1464e5dcbacaab287e71b51d4fcb6cdea86a5855d extends Twig_Template
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
        $__internal_d0da0209451c6b6408806d27effd0e752254cbe33c679bf891334747726fcc77 = $this->env->getExtension("native_profiler");
        $__internal_d0da0209451c6b6408806d27effd0e752254cbe33c679bf891334747726fcc77->enter($__internal_d0da0209451c6b6408806d27effd0e752254cbe33c679bf891334747726fcc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Param:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th width=\"120px\">Id:</th>
                <td width=\"500px\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "category", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <th>Value:</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
        </tbody>
    </table>";
        
        $__internal_d0da0209451c6b6408806d27effd0e752254cbe33c679bf891334747726fcc77->leave($__internal_d0da0209451c6b6408806d27effd0e752254cbe33c679bf891334747726fcc77_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Param:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  61 => 20,  57 => 19,  50 => 15,  46 => 14,  39 => 10,  35 => 9,  28 => 5,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="120px">Id:</th>*/
/*                 <td width="500px">{{ param.id }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ param.reference }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ param.name }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.category'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ param.category }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Value:</th>*/
/*                 <td>{{ param.value }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
