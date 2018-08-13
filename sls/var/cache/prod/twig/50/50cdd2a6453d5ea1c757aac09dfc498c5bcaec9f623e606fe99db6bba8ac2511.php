<?php

/* BoAdvisorsBundle:Enquiry:tbliste.html.twig */
class __TwigTemplate_6a9983bb9a462e2fdec289cb11222c965542f0368ab60828890a2ceae83bac43 extends Twig_Template
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
        $__internal_be9811994ffc08af4b7e8b87895220589f74c043333e5e3fae236d7ddb72dafa = $this->env->getExtension("native_profiler");
        $__internal_be9811994ffc08af4b7e8b87895220589f74c043333e5e3fae236d7ddb72dafa->enter($__internal_be9811994ffc08af4b7e8b87895220589f74c043333e5e3fae236d7ddb72dafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlanguage", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"120px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enquiries"]) ? $context["enquiries"] : $this->getContext($context, "enquiries")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["enquiry"]) {
            // line 20
            echo "            <tr>
                <td ";
            // line 21
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "id", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "firstname", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 24
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "email", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "phone", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 26
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "ftorpt", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 27
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if ($this->getAttribute($context["enquiry"], "typecontract", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "typecontract", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 28
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "language", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 29
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enquiry"], "hours", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 30
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if ($this->getAttribute($context["enquiry"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["enquiry"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td  ";
            // line 31
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "class=\"wax_3d_1\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "class=\"validated\"";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "class=\"rejected\"";
            }
            echo ">";
            if ($this->getAttribute($context["enquiry"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["enquiry"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action ";
            // line 32
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                echo "wax_3d_1";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 2)) {
                echo "validated";
            } elseif (($this->getAttribute($context["enquiry"], "status", array()) == 3)) {
                echo "rejected";
            }
            echo "\">
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_enquiry_show", array("id" => $this->getAttribute($context["enquiry"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 34
            if (($this->getAttribute($context["enquiry"], "status", array()) == 1)) {
                // line 35
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_enquiry_edit", array("id" => $this->getAttribute($context["enquiry"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 37
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "\t\t\t<tr><td colspan=\"12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enquiry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
        
        $__internal_be9811994ffc08af4b7e8b87895220589f74c043333e5e3fae236d7ddb72dafa->leave($__internal_be9811994ffc08af4b7e8b87895220589f74c043333e5e3fae236d7ddb72dafa_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 42,  251 => 40,  244 => 37,  236 => 35,  234 => 34,  230 => 33,  220 => 32,  206 => 31,  192 => 30,  180 => 29,  168 => 28,  152 => 27,  140 => 26,  128 => 25,  116 => 24,  104 => 23,  92 => 22,  80 => 21,  77 => 20,  72 => 19,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlanguage'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hours'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="120px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for enquiry in enquiries %}*/
/*             <tr>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.id }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.name }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.firstname }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.email }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.phone }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.ftorpt }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{%if enquiry.typecontract%}{{ enquiry.typecontract }}{%else%}---{%endif%}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.language }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{{ enquiry.hours }}</td>*/
/*                 <td {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{% if enquiry.startdate %}{{ enquiry.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td  {%if enquiry.status==1%}class="wax_3d_1"{%elseif enquiry.status==2%}class="validated"{%elseif enquiry.status==3%}class="rejected"{%endif%}>{% if enquiry.enddate %}{{ enquiry.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td class="list-action {%if enquiry.status==1%}wax_3d_1{%elseif enquiry.status==2%}validated{%elseif enquiry.status==3%}rejected{%endif%}">*/
/*                     <a href="{{ path('dash_enquiry_show', { 'id': enquiry.id }) }}">show</a>*/
/* 					{%if enquiry.status==1%}*/
/* 						<a href="{{ path('dash_enquiry_edit', { 'id': enquiry.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="12">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
