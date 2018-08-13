<?php

/* BoStudentBundle:Default:tblistcontact.html.twig */
class __TwigTemplate_4203cc95999739867c49eb340ea88d10ac2b1b75da5ecc748f98738c9cfd0be0 extends Twig_Template
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
        $__internal_c03dbb07e7bf844850f1d3f32b5e38cce81c88caa762dfe560cb54f7b31dccba = $this->env->getExtension("native_profiler");
        $__internal_c03dbb07e7bf844850f1d3f32b5e38cce81c88caa762dfe560cb54f7b31dccba->enter($__internal_c03dbb07e7bf844850f1d3f32b5e38cce81c88caa762dfe560cb54f7b31dccba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Default:tblistcontact.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"19%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"19%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"19%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.site", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">Extension</th>
                <th width=\"20%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 13
        $context["i"] = 0;
        // line 14
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teamcontacts"]) ? $context["teamcontacts"] : $this->getContext($context, "teamcontacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["teamcontact"]) {
            // line 15
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"sty_line";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "employee", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"sty_line";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"sty_line";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"sty_line";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "location", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"sty_line";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "extension", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"sty_line";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teamcontact"], "room", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            // line 23
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                $context["i"] = 1;
            } else {
                $context["i"] = 0;
            }
            // line 24
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teamcontact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_c03dbb07e7bf844850f1d3f32b5e38cce81c88caa762dfe560cb54f7b31dccba->leave($__internal_c03dbb07e7bf844850f1d3f32b5e38cce81c88caa762dfe560cb54f7b31dccba_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Default:tblistcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 25,  106 => 24,  100 => 23,  93 => 21,  87 => 20,  81 => 19,  75 => 18,  69 => 17,  63 => 16,  60 => 15,  55 => 14,  53 => 13,  46 => 9,  41 => 7,  37 => 6,  33 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="19%">{{'label.firstname'|trans([],'BoAdminBundle')}} {{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="19%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="19%">{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.site'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">Extension</th>*/
/*                 <th width="20%">{{'label.room'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{%set i=0%}*/
/* 			{% for teamcontact in teamcontacts %}*/
/* 				<tr>*/
/* 					<td class="sty_line{{i}}">{{ teamcontact.employee }}</td>*/
/* 					<td class="sty_line{{i}}">{{ teamcontact.email }}</td>*/
/* 					<td class="sty_line{{i}}">{{ teamcontact.title }}</td>*/
/* 					<td class="sty_line{{i}}">{{ teamcontact.location }}</td>*/
/* 					<td class="sty_line{{i}}">{{ teamcontact.extension }}</td>*/
/* 					<td class="sty_line{{i}}">{{ teamcontact.room }}</td>*/
/* 				</tr>*/
/* 				{%if i==0%}{%set i=1%}{%else%}{%set i=0%}{%endif%}*/
/* 			{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
