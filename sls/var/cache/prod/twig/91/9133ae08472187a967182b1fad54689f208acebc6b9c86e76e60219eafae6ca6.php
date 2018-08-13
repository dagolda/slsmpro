<?php

/* BoAdminBundle:Local:rightshow.html.twig */
class __TwigTemplate_03fa892e6e119f38d8cfc97bfc79fe8eea2c09946e8125c7b64411153a431992 extends Twig_Template
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
        $__internal_75da738db68ce8c9b63503ddbd0dd10394c542d851a930267cf3c9cbc52895d9 = $this->env->getExtension("native_profiler");
        $__internal_75da738db68ce8c9b63503ddbd0dd10394c542d851a930267cf3c9cbc52895d9->enter($__internal_75da738db68ce8c9b63503ddbd0dd10394c542d851a930267cf3c9cbc52895d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:rightshow.html.twig"));

        // line 1
        echo "\t<div class=\"employee-identity\">Local ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "reference", array()), "html", null, true);
        echo "</div>
    <table>
        <tbody>
            <tr>
                <th>Id:</th>
                <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 8
        if (($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "typecontract", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "typecontract", array())) > 0))) {
            // line 9
            echo "            <tr>
                <th>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>
\t\t\t\t\t";
            // line 12
            $context["i"] = 0;
            // line 13
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "typecontract", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 14
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "reference", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 15
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 16
                echo "\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "typecontract", array())))) {
                    echo "-";
                }
                // line 17
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t\t\t
\t\t\t\t</td>
            </tr>
\t\t\t";
        }
        // line 21
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "designation", array())) {
            // line 22
            echo "            <tr>
                <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "designation", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "campus", array())) {
            // line 28
            echo "            <tr>
                <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "campus", array()), "designation", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 33
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "campus", array())) {
            // line 34
            echo "            <tr>
                <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "campus", array()), "address", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 39
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "dimension", array())) {
            // line 40
            echo "            <tr>
                <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dimension", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "dimension", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 45
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "categoryroom", array())) {
            // line 46
            echo "            <tr>
                <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "categoryroom", array()), "catname", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 51
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "capability", array())) {
            // line 52
            echo "            <tr>
                <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.capacity", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "capability", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 57
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "max", array())) {
            // line 58
            echo "            <tr>
                <th>Max:</th>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "max", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 63
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "suite", array())) {
            // line 64
            echo "            <tr>
                <th>Suite:</th>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "suite", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 69
        echo "            <tr>
                <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "status", array()), array(), "array"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
                <td>";
        // line 75
        if (($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "available", array()) == 1)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.yes", array(), "BoAdminBundle"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.no", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t";
        // line 77
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "creationdate", array())) {
            // line 78
            echo "            <tr>
                <th>";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 83
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "details", array()) != "") && ($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "details", array()) != null))) {
            // line 84
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th>Details:</th>
\t\t\t\t\t<td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "details", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 89
        echo "        </tbody>
    </table>";
        
        $__internal_75da738db68ce8c9b63503ddbd0dd10394c542d851a930267cf3c9cbc52895d9->leave($__internal_75da738db68ce8c9b63503ddbd0dd10394c542d851a930267cf3c9cbc52895d9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 89,  246 => 86,  242 => 84,  239 => 83,  233 => 80,  229 => 79,  226 => 78,  224 => 77,  215 => 75,  211 => 74,  205 => 71,  201 => 70,  198 => 69,  192 => 66,  188 => 64,  185 => 63,  179 => 60,  175 => 58,  172 => 57,  166 => 54,  162 => 53,  159 => 52,  156 => 51,  150 => 48,  146 => 47,  143 => 46,  140 => 45,  134 => 42,  130 => 41,  127 => 40,  124 => 39,  118 => 36,  114 => 35,  111 => 34,  108 => 33,  102 => 30,  98 => 29,  95 => 28,  92 => 27,  86 => 24,  82 => 23,  79 => 22,  76 => 21,  65 => 17,  60 => 16,  58 => 15,  53 => 14,  48 => 13,  46 => 12,  41 => 10,  38 => 9,  36 => 8,  31 => 6,  22 => 1,);
    }
}
/* 	<div class="employee-identity">Local {{ local.reference }}</div>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id:</th>*/
/*                 <td>{{ local.id }}</td>*/
/*             </tr>*/
/* 			{%if local.typecontract and local.typecontract|length>0%}*/
/*             <tr>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>*/
/* 					{%set i=0%}*/
/* 					{%for tc in local.typecontract%}*/
/* 						{{ tc.reference }}*/
/* 						{%set i=i+1%}*/
/* 						{%if i<local.typecontract|length%}-{%endif%}*/
/* 					{%endfor%}				*/
/* 				</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.designation%}*/
/*             <tr>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ local.designation }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.campus%}*/
/*             <tr>*/
/*                 <th>{{'label.campus'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ local.campus.designation }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.campus%}*/
/*             <tr>*/
/*                 <th>{{'label.address'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ local.campus.address }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.dimension%}*/
/*             <tr>*/
/*                 <th>{{'label.dimension'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ local.dimension }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.categoryroom%}*/
/*             <tr>*/
/*                 <th>{{'label.category'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ local.categoryroom.catname }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.capability%}*/
/*             <tr>*/
/*                 <th>{{'label.capacity'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ local.capability }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.max %}*/
/*             <tr>*/
/*                 <th>Max:</th>*/
/*                 <td>{{ local.max }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if local.suite %}*/
/*             <tr>*/
/*                 <th>Suite:</th>*/
/*                 <td>{{ local.suite }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/*             <tr>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ status[local.status] }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{'label.available'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{%if local.available==1%}{{'label.yes'|trans([],'BoAdminBundle')}}{%else%}{{'label.no'|trans([],'BoAdminBundle')}}{%endif%}</td>*/
/*             </tr>*/
/* 			{%if local.creationdate %}*/
/*             <tr>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ local.creationdate|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if local.details!="" and local.details!=null%}*/
/* 				<tr>*/
/* 					<th>Details:</th>*/
/* 					<td>{{ local.details }}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/*         </tbody>*/
/*     </table>*/
