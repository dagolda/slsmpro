<?php

/* BoAdminBundle:Advisors:tbliste.html.twig */
class __TwigTemplate_8d188b00b0a5a02e8e89d7216680ac98db3663369a5488bf9e93a7c98ecac633 extends Twig_Template
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
        $__internal_43b680297f2c1476f2814c2062b6e726674bc9cefb675d8bce1c884201c873dd = $this->env->getExtension("native_profiler");
        $__internal_43b680297f2c1476f2814c2062b6e726674bc9cefb675d8bce1c884201c873dd->enter($__internal_43b680297f2c1476f2814c2062b6e726674bc9cefb675d8bce1c884201c873dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"9%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlycharge", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workfields", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"126px\" npowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advisor"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advisor"], "advisor", array()), "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advisor"], "advisor", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advisor"], "advisor", array()), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advisor"], "advisor", array()), "homenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advisor"], "advisor", array()), "cellnumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["advisor"], "percentcharge", array()), 2, ".", ""), "html", null, true);
            echo "%</td>
                <td>
\t\t\t\t\t";
            // line 25
            $context["i"] = 0;
            // line 26
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["advisor"], "typecontract", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 27
                echo "\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 28
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["tc"], "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 29
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($context["advisor"], "typecontract", array())))) {
                    echo ",";
                }
                // line 30
                echo "\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "\t\t\t\t\t\t<center>---</center>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t
\t\t\t\t</td>
                <td>
\t\t\t\t\t";
            // line 35
            $context["i"] = 0;
            // line 36
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["advisor"], "workfields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["wkf"]) {
                // line 37
                echo "\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 38
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["wkf"], "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 39
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($context["advisor"], "workfields", array())))) {
                    echo ",";
                }
                // line 40
                echo "\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 41
                echo "\t\t\t\t\t\t<center>---</center>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wkf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "</td>
                <td class=\"list-action\"  width=\"126px\">
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("advisors_show", array("id" => $this->getAttribute($context["advisor"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 47
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "edit", array()) == 1))) {
                // line 48
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("advisors_edit", array("id" => $this->getAttribute($context["advisor"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 52
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advisor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
";
        
        $__internal_43b680297f2c1476f2814c2062b6e726674bc9cefb675d8bce1c884201c873dd->leave($__internal_43b680297f2c1476f2814c2062b6e726674bc9cefb675d8bce1c884201c873dd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 57,  198 => 55,  191 => 52,  185 => 49,  180 => 48,  178 => 47,  173 => 45,  169 => 44,  165 => 42,  158 => 41,  153 => 40,  149 => 39,  144 => 38,  141 => 37,  135 => 36,  133 => 35,  128 => 32,  121 => 31,  116 => 30,  112 => 29,  107 => 28,  104 => 27,  98 => 26,  96 => 25,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  68 => 17,  63 => 16,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="9%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.hourlycharge'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.workfields'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="126px" npowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for advisor in advisors %}*/
/*             <tr>*/
/*                 <td>{{ advisor.advisor.firstname }}</td>*/
/*                 <td>{{ advisor.advisor.name }}</td>*/
/*                 <td>{{ advisor.advisor.email }}</td>*/
/*                 <td>{{ advisor.advisor.homenumber }}</td>*/
/*                 <td>{{ advisor.advisor.cellnumber }}</td>*/
/*                 <td>{{ advisor.percentcharge|number_format(2,'.','') }}%</td>*/
/*                 <td>*/
/* 					{%set i=0 %}*/
/* 					{%for tc in advisor.typecontract %}*/
/* 						{%set i=i+1 %}*/
/* 						{{ tc }}*/
/* 						{%if i<advisor.typecontract|length%},{%endif%}*/
/* 					{%else%}*/
/* 						<center>---</center>*/
/* 					{%endfor%}				*/
/* 				</td>*/
/*                 <td>*/
/* 					{%set i=0 %}*/
/* 					{%for wkf in advisor.workfields %}*/
/* 						{%set i=i+1 %}*/
/* 						{{ wkf }}*/
/* 						{%if i<advisor.workfields|length%},{%endif%}*/
/* 					{%else%}*/
/* 						<center>---</center>*/
/* 					{%endfor%}</td>*/
/*                 <td class="list-action"  width="126px">*/
/*                     <a href="{{ path('advisors_show', { 'id': advisor.id }) }}">*/
/* 						{{'action.show'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/* 					{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].edit==1%}*/
/* 						<a href="{{ path('advisors_edit', { 'id': advisor.id }) }}">*/
/* 							{{'action.edit'|trans([],'BoAdminBundle')}}*/
/* 						</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
