<?php

/* BoAdminBundle:Local:group.html.twig */
class __TwigTemplate_2ebe49177015364de982492894ac50f29a02cd2100a9411cafe5479a96cc7f4e extends Twig_Template
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
        $__internal_4703ae12da2c5d6cdc6ec7a2f85c747aa7b0b5fca7c7e82c58791c11f9e9ca56 = $this->env->getExtension("native_profiler");
        $__internal_4703ae12da2c5d6cdc6ec7a2f85c747aa7b0b5fca7c7e82c58791c11f9e9ca56->enter($__internal_4703ae12da2c5d6cdc6ec7a2f85c747aa7b0b5fca7c7e82c58791c11f9e9ca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:group.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 14
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td ";
            // line 15
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo "><a>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td ";
            // line 16
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ((array_key_exists("contract", $context) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "typecontract", array()), "reference", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td ";
            // line 17
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td ";
            // line 18
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "targetlevel", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td ";
            // line 19
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["group"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["group"], "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td ";
            // line 20
            if (($this->getAttribute($context["group"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["group"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["group"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>";
        
        $__internal_4703ae12da2c5d6cdc6ec7a2f85c747aa7b0b5fca7c7e82c58791c11f9e9ca56->leave($__internal_4703ae12da2c5d6cdc6ec7a2f85c747aa7b0b5fca7c7e82c58791c11f9e9ca56_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 23,  109 => 20,  97 => 19,  89 => 18,  81 => 17,  69 => 16,  61 => 15,  58 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{%for group in groups%}*/
/* 				<tr>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}><a>{{ group.id }}</a></td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{%if contract is defined and contract.typecontract %}{{ contract.typecontract.reference }}{%else%}---{%endif%}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.name }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{{ group.targetlevel }}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.startdate %}{{ group.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					<td {%if group.status==0%} class="completed_contracts"{%endif%}>{% if group.enddate %}{{ group.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 				</tr>*/
/* 			{%endfor%}*/
/*         </tbody>*/
/*     </table>*/
