<?php

/* BoAdminBundle:Students:advisor.html.twig */
class __TwigTemplate_0c2cbacb9931f00dfd065b3b58f32a232932892f40199147c0f07dcc786324af extends Twig_Template
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
        $__internal_211b6fee28fd04388758656fedc8888f66b05dfacbdde6d8900ae77e9ee4c710 = $this->env->getExtension("native_profiler");
        $__internal_211b6fee28fd04388758656fedc8888f66b05dfacbdde6d8900ae77e9ee4c710->enter($__internal_211b6fee28fd04388758656fedc8888f66b05dfacbdde6d8900ae77e9ee4c710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:advisor.html.twig"));

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
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 13
        if (((array_key_exists("contract", $context) && ((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) != null)) && $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array()))) {
            // line 14
            echo "\t\t\t";
            $context["advisor"] = $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array());
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "homenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "cellnumber", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t";
            // line 22
            $context["i"] = 0;
            // line 23
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "typecontract", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                // line 24
                echo "\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 25
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["tc"], "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 26
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "typecontract", array())))) {
                    echo ",";
                }
                // line 27
                echo "\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 28
                echo "\t\t\t\t\t\t<center>---</center>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t
\t\t\t\t</td>
            </tr>
\t\t";
        } else {
            // line 33
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        // line 35
        echo "        </tbody>
    </table>";
        
        $__internal_211b6fee28fd04388758656fedc8888f66b05dfacbdde6d8900ae77e9ee4c710->leave($__internal_211b6fee28fd04388758656fedc8888f66b05dfacbdde6d8900ae77e9ee4c710_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:advisor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 35,  121 => 33,  115 => 29,  108 => 28,  103 => 27,  99 => 26,  94 => 25,  91 => 24,  85 => 23,  83 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  59 => 15,  56 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{%if contract is defined and contract!=null and contract.advisor%}*/
/* 			{% set advisor=contract.advisor %}*/
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
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endif %}*/
/*         </tbody>*/
/*     </table>*/
