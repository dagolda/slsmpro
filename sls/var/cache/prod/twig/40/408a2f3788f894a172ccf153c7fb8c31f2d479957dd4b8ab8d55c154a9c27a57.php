<?php

/* BoAdminBundle:Contracts:advisor.html.twig */
class __TwigTemplate_927b984935c580bfa34d198ab50e84c9a721f2b05610b9d7c6e5d7caa1f5ff63 extends Twig_Template
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
        $__internal_5b241364fcd4e9e66aa2261f922923726cd72ae15be46af141c666da10e7f227 = $this->env->getExtension("native_profiler");
        $__internal_5b241364fcd4e9e66aa2261f922923726cd72ae15be46af141c666da10e7f227->enter($__internal_5b241364fcd4e9e66aa2261f922923726cd72ae15be46af141c666da10e7f227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:advisor.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"12%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 14
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) && $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "advisor", array())))) {
            // line 15
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) {
                $context["advisor"] = $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array());
            } elseif (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) && $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "advisor", array()))) {
                $context["advisor"] = $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "advisor", array());
            }
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "homenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "cellnumber", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t";
            // line 23
            $context["i"] = 0;
            // line 24
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "typecontract", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 25
                echo "\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 26
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["tc"], "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 27
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "typecontract", array())))) {
                    echo ",";
                }
                // line 28
                echo "\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 29
                echo "\t\t\t\t\t\t<center>---</center>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td class=\"list-action\">
\t\t\t\t";
            // line 33
            if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
                echo "\t
\t\t\t\t\t";
                // line 34
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
                    // line 35
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#delete_advisor\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
                    echo "</button>
\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t</td>
            </tr>
\t\t";
        } elseif ((($this->getAttribute(        // line 40
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
            // line 41
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"7\" class=\"list-action\">
\t\t\t\t\t";
            // line 43
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
                // line 44
                echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_advisor\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addadvisor", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>\t\t\t\t
\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t</td>\t\t\t\t\t\t
\t\t\t</tr>
        ";
        }
        // line 49
        echo "        </tbody>
    </table>
";
        
        $__internal_5b241364fcd4e9e66aa2261f922923726cd72ae15be46af141c666da10e7f227->leave($__internal_5b241364fcd4e9e66aa2261f922923726cd72ae15be46af141c666da10e7f227_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:advisor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 46,  152 => 44,  150 => 43,  146 => 41,  144 => 40,  140 => 38,  137 => 37,  131 => 35,  129 => 34,  125 => 33,  120 => 30,  113 => 29,  108 => 28,  104 => 27,  99 => 26,  96 => 25,  90 => 24,  88 => 23,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  64 => 16,  57 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="12%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{%if contract.advisor or (contract.group and contract.group.advisor)%}*/
/* 			{%if contract.advisor%}{% set advisor=contract.advisor %}{%elseif contract.group and contract.group.advisor%}{% set advisor=contract.group.advisor %}{%endif%}*/
/*             <tr>*/
/*                 <td>{{ advisor.firstname }}</td>*/
/*                 <td>{{ advisor.name }}</td>*/
/*                 <td>{{ advisor.email }}</td>*/
/*                 <td>{{ advisor.homenumber }}</td>*/
/*                 <td>{{ advisor.cellnumber }}</td>*/
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
/* 				<td class="list-action">*/
/* 				{%if contract.status==1 or contract.status==2%}	*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#delete_advisor">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					{%endif%}*/
/* 				{%endif%}*/
/* 				</td>*/
/*             </tr>*/
/* 		{%elseif contract.status==1 or contract.status==2%}*/
/* 			<tr>*/
/* 				<td colspan="7" class="list-action">*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_advisor">{{'label.addadvisor'|trans([],'BoAdminBundle')}}</button>				*/
/* 					{%endif%}*/
/* 				</td>						*/
/* 			</tr>*/
/*         {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
