<?php

/* BoCoordinatorBundle:Supervision:students.html.twig */
class __TwigTemplate_3bb5b821c6b98dcab8f0c9f6040ae4e5e6248b993f2c059f6601bef4cf99bcca extends Twig_Template
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
        $__internal_f549b0a16e3ed2e3c9b0a05540ad47bacbbd3dfdc1b3d58a933106855a1f977b = $this->env->getExtension("native_profiler");
        $__internal_f549b0a16e3ed2e3c9b0a05540ad47bacbbd3dfdc1b3d58a933106855a1f977b->enter($__internal_f549b0a16e3ed2e3c9b0a05540ad47bacbbd3dfdc1b3d58a933106855a1f977b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Supervision:students.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"10%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"10%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "targetlevel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "phonenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "email", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>";
        
        $__internal_f549b0a16e3ed2e3c9b0a05540ad47bacbbd3dfdc1b3d58a933106855a1f977b->leave($__internal_f549b0a16e3ed2e3c9b0a05540ad47bacbbd3dfdc1b3d58a933106855a1f977b_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Supervision:students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="10%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="10%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for student in students %}*/
/*             <tr>*/
/*                 <td>{{ student.firstname }}</td>*/
/*                 <td>{{ student.name }}</td>*/
/*                 <td>{{ student.targetlevel }}</td>*/
/*                 <td>{{ student.phonenumber }}</td>*/
/*                 <td>{{ student.email }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
