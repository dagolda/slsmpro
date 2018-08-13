<?php

/* BoAdminBundle:Color:show.html.twig */
class __TwigTemplate_6c1e265de1648b6adecdda341a3c34476c6cf2e2300489075bb116c57923daaf extends Twig_Template
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
        $__internal_0de8a5bf54d70ec452f3efa5baf88447dfb9cc56b06e93cac3f7c8e4ca65e972 = $this->env->getExtension("native_profiler");
        $__internal_0de8a5bf54d70ec452f3efa5baf88447dfb9cc56b06e93cac3f7c8e4ca65e972->enter($__internal_0de8a5bf54d70ec452f3efa5baf88447dfb9cc56b06e93cac3f7c8e4ca65e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Color:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th width=\"120px\">Id:</th>
                <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Name:</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Color:</th>
                <td width=\"160px\" height=\"28px\" class=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "name", array()), "html", null, true);
        echo "\">&nbsp;</td>
            </tr>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_0de8a5bf54d70ec452f3efa5baf88447dfb9cc56b06e93cac3f7c8e4ca65e972->leave($__internal_0de8a5bf54d70ec452f3efa5baf88447dfb9cc56b06e93cac3f7c8e4ca65e972_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Color:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  52 => 20,  44 => 15,  36 => 10,  28 => 5,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="120px">Id:</th>*/
/*                 <td>{{ color.id }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Name:</th>*/
/*                 <td>{{ color.name }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Color:</th>*/
/*                 <td width="160px" height="28px" class="{{ color.name }}">&nbsp;</td>*/
/*             </tr>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if color.creationdate %}{{ color.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
