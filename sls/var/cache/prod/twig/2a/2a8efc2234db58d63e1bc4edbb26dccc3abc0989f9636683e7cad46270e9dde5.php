<?php

/* BoAdminBundle:Activities:show.html.twig */
class __TwigTemplate_b30484763b65d598a93907f6385558ff43f4972c1a572efd4aecf4510d6da664 extends Twig_Template
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
        $__internal_01be03af5af412d0c651721f7a45b2d4ef0fe998878e73e2480b2380355eba3d = $this->env->getExtension("native_profiler");
        $__internal_01be03af5af412d0c651721f7a45b2d4ef0fe998878e73e2480b2380355eba3d->enter($__internal_01be03af5af412d0c651721f7a45b2d4ef0fe998878e73e2480b2380355eba3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Activities:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th width=\"120px\">Id:</th>
                <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>User:</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " Ip:</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "ip", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Session id:</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "sessionid", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Rubric:</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "rubric", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Subrubric:</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "subrubric", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 35
        if ($this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_01be03af5af412d0c651721f7a45b2d4ef0fe998878e73e2480b2380355eba3d->leave($__internal_01be03af5af412d0c651721f7a45b2d4ef0fe998878e73e2480b2380355eba3d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Activities:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 35,  78 => 34,  71 => 30,  63 => 25,  55 => 20,  47 => 15,  43 => 14,  36 => 10,  28 => 5,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="120px">Id:</th>*/
/*                 <td>{{ activity.id }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>User:</th>*/
/*                 <td>{{ username }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.address'|trans([],'BoAdminBundle')}} Ip:</th>*/
/*                 <td>{{ activity.ip }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Session id:</th>*/
/*                 <td>{{ activity.sessionid }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Rubric:</th>*/
/*                 <td>{{ activity.rubric }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Subrubric:</th>*/
/*                 <td>{{ activity.subrubric }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if activity.creationdate %}{{ activity.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
