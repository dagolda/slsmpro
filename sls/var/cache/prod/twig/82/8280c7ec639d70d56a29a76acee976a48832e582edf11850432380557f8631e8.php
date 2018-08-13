<?php

/* BoAdminBundle:Contracts:local.html.twig */
class __TwigTemplate_f07eab587d7bf3f8c5bd7537c2f9cb427efa7eda79dd2b4cc2f04713f8e61075 extends Twig_Template
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
        $__internal_dbaac3a62424c222e290e18648929bdb8c1133deb417cf9ac0dcbffa53fb488b = $this->env->getExtension("native_profiler");
        $__internal_dbaac3a62424c222e290e18648929bdb8c1133deb417cf9ac0dcbffa53fb488b->enter($__internal_dbaac3a62424c222e290e18648929bdb8c1133deb417cf9ac0dcbffa53fb488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:local.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dimension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.capacity", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Max</th>
                <th>Campus</th>
\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locals"]) ? $context["locals"] : $this->getContext($context, "locals")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 15
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "designation", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "dimension", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "capability", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "max", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "campus", array()), "designation", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t";
            // line 23
            if ((($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2))) {
                // line 24
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Room", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Room", array(), "array"), "creation", array()) == 1))) {
                    // line 25
                    echo "\t\t\t\t\t\t\t";
                    echo                     $this->env->getExtension('form')->renderer->renderBlock((isset($context["localdelete_form"]) ? $context["localdelete_form"] : $this->getContext($context, "localdelete_form")), 'form_start');
                    echo "
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 27
                    echo                     $this->env->getExtension('form')->renderer->renderBlock((isset($context["localdelete_form"]) ? $context["localdelete_form"] : $this->getContext($context, "localdelete_form")), 'form_end');
                    echo "
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 33
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">
\t\t\t\t\t\t";
            // line 35
            if ((twig_length_filter($this->env, (isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings"))) > 0)) {
                // line 36
                echo "\t\t\t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Room", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Room", array(), "array"), "creation", array()) == 1))) {
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate("BoAdminBundle:Contracts:localform.html.twig", "BoAdminBundle:Contracts:local.html.twig", 37)->display($context);
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.error.addlocal", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 44
            echo "\t
\t\t\t\t\t</td>\t\t\t
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
";
        
        $__internal_dbaac3a62424c222e290e18648929bdb8c1133deb417cf9ac0dcbffa53fb488b->leave($__internal_dbaac3a62424c222e290e18648929bdb8c1133deb417cf9ac0dcbffa53fb488b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 48,  163 => 44,  157 => 43,  153 => 41,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  136 => 35,  132 => 33,  117 => 30,  114 => 29,  109 => 27,  105 => 26,  100 => 25,  97 => 24,  95 => 23,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  67 => 15,  49 => 14,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.dimension'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.capacity'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Max</th>*/
/*                 <th>Campus</th>*/
/* 		<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for local in locals %}*/
/* 				<tr>*/
/* 					<td>{{ local.reference }}</td>*/
/* 					<td>{{ local.designation }}</td>*/
/* 					<td>{{ local.dimension }}</td>*/
/* 					<td>{{ local.capability }}</td>*/
/* 					<td>{{ local.max }}</td>*/
/* 					<td>{{ local.campus.designation }}</td>*/
/* 					<td class="list-action">*/
/* 					{%if contract.status==1 or contract.status==2%}*/
/* 						{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Room'] is defined and app.session.get('rights')['CONTRACTS']['Room'].creation==1%}*/
/* 							{{ form_start(localdelete_form) }}*/
/* 								<input type="submit" value="{{'action.remove'|trans([],'BoAdminBundle')}}">*/
/* 							{{ form_end(localdelete_form) }}*/
/* 						{%endif%}*/
/* 					{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{%else%}*/
/* 				<tr>*/
/* 					<td colspan="7">*/
/* 						{%if trainings|length>0%}*/
/* 							{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Room'] is defined and app.session.get('rights')['CONTRACTS']['Room'].creation==1%}*/
/* 							{%include "BoAdminBundle:Contracts:localform.html.twig"%}*/
/* 							{%else%}*/
/* 								{{'No data found'|trans([],'BoAdminBundle')}}*/
/* 							{%endif%}*/
/* 											*/
/* 						{%else%}*/
/* 							{{'message.error.addlocal'|trans([],'BoAdminBundle')}}*/
/* 						{%endif%}	*/
/* 					</td>			*/
/* 				</tr>*/
/* 			{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
