<?php

/* BoAdminBundle:Advisors:rightshow.html.twig */
class __TwigTemplate_53dc8a3f8df712367569a74887916d018c66bc006e9ea593fe535a4443b6c041 extends Twig_Template
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
        $__internal_3e69a8e98aed8fb5187f6add27f7c37fff3e7d3a7229671acfa3d9574219ea9b = $this->env->getExtension("native_profiler");
        $__internal_3e69a8e98aed8fb5187f6add27f7c37fff3e7d3a7229671acfa3d9574219ea9b->enter($__internal_3e69a8e98aed8fb5187f6add27f7c37fff3e7d3a7229671acfa3d9574219ea9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:rightshow.html.twig"));

        // line 1
        echo "<div class=\"employee-identity\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "html", null, true);
        echo " </div>
<div class=\"employee-status\">";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "status", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "status", array()), array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</div>
    <table>
        <tbody>
\t\t\t";
        // line 5
        if (($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : null), "typecontract", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "typecontract", array())) > 0))) {
            // line 6
            echo "            <tr>
                <th>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>
\t\t\t\t\t";
            // line 9
            $context["i"] = 0;
            // line 10
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "typecontract", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 11
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "reference", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 12
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 13
                echo "\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "typecontract", array())))) {
                    echo "-";
                }
                // line 14
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t</td>
            </tr>
\t\t\t";
        }
        // line 18
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : null), "workfields", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "workfields", array())) > 0))) {
            // line 19
            echo "            <tr>
                <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workfields", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>
\t\t\t\t\t";
            // line 22
            $context["i"] = 0;
            // line 23
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "workfields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 24
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "wfname", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 25
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 26
                echo "\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "workfields", array())))) {
                    echo ", ";
                }
                // line 27
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t</td>
            </tr>
\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "profil", array())) {
            // line 32
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.profile", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "profil", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 37
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "email", array())) {
            // line 38
            echo "            <tr>\t\t
\t\t\t\t<th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "email", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 43
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "langage", array())) {
            // line 44
            echo "            <tr>
\t\t\t\t<th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>\t\t\t
\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "langage", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 49
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "homenumber", array())) {
            // line 50
            echo "            <tr>
                <th>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "homenumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 55
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "cellnumber", array())) {
            // line 56
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "cellnumber", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 61
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "address1", array())) {
            // line 62
            echo "            <tr>
                <th>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo " 1:</th>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "address1", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 67
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "address2", array())) {
            // line 68
            echo "            <tr>
\t\t\t\t<th>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
            echo " 2:</th>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "address2", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 73
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), 0, array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "categoryteacher", array()))) {
            // line 74
            echo "            <tr>               
\t\t\t\t<th>Category:</th>
\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), 0, array(), "array"), "categoryteacher", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>            
            </tr>
\t\t\t";
        }
        // line 79
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "creationdate", array())) {
            // line 80
            echo "            <tr>
\t\t\t\t<th>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advisors"]) ? $context["advisors"] : $this->getContext($context, "advisors")), "advisor", array()), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>               
            </tr>
\t\t\t";
        }
        // line 85
        echo "        </tbody>
    </table>";
        
        $__internal_3e69a8e98aed8fb5187f6add27f7c37fff3e7d3a7229671acfa3d9574219ea9b->leave($__internal_3e69a8e98aed8fb5187f6add27f7c37fff3e7d3a7229671acfa3d9574219ea9b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  251 => 82,  247 => 81,  244 => 80,  241 => 79,  235 => 76,  231 => 74,  228 => 73,  222 => 70,  218 => 69,  215 => 68,  212 => 67,  206 => 64,  202 => 63,  199 => 62,  196 => 61,  190 => 58,  186 => 57,  183 => 56,  180 => 55,  174 => 52,  170 => 51,  167 => 50,  164 => 49,  158 => 46,  154 => 45,  151 => 44,  148 => 43,  142 => 40,  138 => 39,  135 => 38,  132 => 37,  126 => 34,  122 => 33,  119 => 32,  116 => 31,  111 => 28,  105 => 27,  100 => 26,  98 => 25,  93 => 24,  88 => 23,  86 => 22,  81 => 20,  78 => 19,  75 => 18,  70 => 15,  64 => 14,  59 => 13,  57 => 12,  52 => 11,  47 => 10,  45 => 9,  40 => 7,  37 => 6,  35 => 5,  27 => 2,  22 => 1,);
    }
}
/* <div class="employee-identity">{{ advisors.advisor }} </div>*/
/* <div class="employee-status">{% if advisors.advisor.status %}{{ advisors.advisor.status|trans([],'BoAdminBundle') }}{%endif%}</div>*/
/*     <table>*/
/*         <tbody>*/
/* 			{% if advisors.typecontract is defined and advisors.typecontract|length>0 %}*/
/*             <tr>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>*/
/* 					{%set i=0%}*/
/* 					{%for tc in advisors.typecontract%}*/
/* 						{{ tc.reference }}*/
/* 						{%set i=i+1%}*/
/* 						{%if i<advisors.typecontract|length%}-{%endif%}*/
/* 					{%endfor%}*/
/* 				</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if advisors.workfields is defined and advisors.workfields|length>0 %}*/
/*             <tr>*/
/*                 <th>{{'label.workfields'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>*/
/* 					{%set i=0%}*/
/* 					{%for tc in advisors.workfields%}*/
/* 						{{ tc.wfname }}*/
/* 						{%set i=i+1%}*/
/* 						{%if i<advisors.workfields|length%}, {%endif%}*/
/* 					{%endfor%}*/
/* 				</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if advisors.advisor.profil %}*/
/*             <tr>		*/
/* 				<th>{{'label.profile'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ advisors.advisor.profil }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if advisors.advisor.email %}*/
/*             <tr>		*/
/* 				<th>{{'label.email'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ advisors.advisor.email }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{% if advisors.advisor.langage %}*/
/*             <tr>*/
/* 				<th>{{'label.language'|trans([],'BoAdminBundle')}}:</th>			*/
/* 				<td>{{ advisors.advisor.langage|trans([],'BoAdminBundle') }}</td>*/
/*             </tr>*/
/* 			{%endif%}*/
/* 			{%if advisors.advisor.homenumber %}*/
/*             <tr>*/
/*                 <th>{{'label.homenumber'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ advisors.advisor.homenumber }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if advisors.advisor.cellnumber %}*/
/* 			<tr>*/
/* 				<th>{{'label.cellnumber'|trans([],'BoAdminBundle')}}:</th>*/
/*                 <td>{{ advisors.advisor.cellnumber }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if advisors.advisor.address1 %}*/
/*             <tr>*/
/*                 <th>{{'label.address'|trans([],'BoAdminBundle')}} 1:</th>*/
/*                 <td>{{ advisors.advisor.address1 }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if advisors.advisor.address2 %}*/
/*             <tr>*/
/* 				<th>{{'label.address'|trans([],'BoAdminBundle')}} 2:</th>*/
/*                 <td>{{ advisors.advisor.address2 }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{%if teacher[0] is defined and teacher[0].categoryteacher %}*/
/*             <tr>               */
/* 				<th>Category:</th>*/
/* 				<td>{{ teacher[0].categoryteacher|trans([],'BoAdminBundle') }}</td>            */
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if advisors.advisor.creationdate %}*/
/*             <tr>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ advisors.advisor.creationdate|date('Y-m-d H:i:s') }}</td>               */
/*             </tr>*/
/* 			{% endif %}*/
/*         </tbody>*/
/*     </table>*/
