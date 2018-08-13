<?php

/* BoAdminBundle:Campus:show.html.twig */
class __TwigTemplate_847c2bc082851e968538940afbda4fcf47cb74d2d0b7348a81a9d8f8bd66e057 extends Twig_Template
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
        $__internal_9dab30c81dde609048e0144f66b8fbf0b4d85cf830dd44fb5a9b9598a924fd64 = $this->env->getExtension("native_profiler");
        $__internal_9dab30c81dde609048e0144f66b8fbf0b4d85cf830dd44fb5a9b9598a924fd64->enter($__internal_9dab30c81dde609048e0144f66b8fbf0b4d85cf830dd44fb5a9b9598a924fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Campus:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th width=\"120px\">Id:</th>
                <td width=\"500px\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "designation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City:</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 25
        if ($this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["campus"]) ? $context["campus"] : $this->getContext($context, "campus")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>";
        
        $__internal_9dab30c81dde609048e0144f66b8fbf0b4d85cf830dd44fb5a9b9598a924fd64->leave($__internal_9dab30c81dde609048e0144f66b8fbf0b4d85cf830dd44fb5a9b9598a924fd64_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Campus:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  71 => 24,  65 => 21,  58 => 17,  54 => 16,  48 => 13,  44 => 12,  38 => 9,  34 => 8,  28 => 5,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="120px">Id:</th>*/
/*                 <td width="500px">{{ campus.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ campus.reference }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ campus.designation }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{'label.address'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ campus.address }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>City:</th>*/
/*                 <td>{{ campus.city }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{% if campus.creationdate %}{{ campus.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
