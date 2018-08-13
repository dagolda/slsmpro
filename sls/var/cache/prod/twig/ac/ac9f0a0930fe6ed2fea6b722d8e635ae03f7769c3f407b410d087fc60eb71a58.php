<?php

/* BoHomeBundle:Tickets:show.html.twig */
class __TwigTemplate_4d08aaef3c41705712fdd02e45d6fa084972d86f715ef6986167c7de3567f7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Tickets:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83c24e57022ca8a58709e14b5c9bd4f65ddb7c273c7e2e384d360e2ecf965e88 = $this->env->getExtension("native_profiler");
        $__internal_83c24e57022ca8a58709e14b5c9bd4f65ddb7c273c7e2e384d360e2ecf965e88->enter($__internal_83c24e57022ca8a58709e14b5c9bd4f65ddb7c273c7e2e384d360e2ecf965e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tickets:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c24e57022ca8a58709e14b5c9bd4f65ddb7c273c7e2e384d360e2ecf965e88->leave($__internal_83c24e57022ca8a58709e14b5c9bd4f65ddb7c273c7e2e384d360e2ecf965e88_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdf0339f3436489393b4053718934f5aa4a92e308d786732ee8b3d46f773baf7 = $this->env->getExtension("native_profiler");
        $__internal_bdf0339f3436489393b4053718934f5aa4a92e308d786732ee8b3d46f773baf7->enter($__internal_bdf0339f3436489393b4053718934f5aa4a92e308d786732ee8b3d46f773baf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_bdf0339f3436489393b4053718934f5aa4a92e308d786732ee8b3d46f773baf7->leave($__internal_bdf0339f3436489393b4053718934f5aa4a92e308d786732ee8b3d46f773baf7_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_8eb7040c9dd9d62ba65b5fa8d059d81f4062a3ee1862f87c4ad13d7396c96891 = $this->env->getExtension("native_profiler");
        $__internal_8eb7040c9dd9d62ba65b5fa8d059d81f4062a3ee1862f87c4ad13d7396c96891->enter($__internal_8eb7040c9dd9d62ba65b5fa8d059d81f4062a3ee1862f87c4ad13d7396c96891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:request.html.twig", "BoHomeBundle:Tickets:show.html.twig", 3)->display($context);
        
        $__internal_8eb7040c9dd9d62ba65b5fa8d059d81f4062a3ee1862f87c4ad13d7396c96891->leave($__internal_8eb7040c9dd9d62ba65b5fa8d059d81f4062a3ee1862f87c4ad13d7396c96891_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a8100ee67804e7c744376209f22923ae26c6926cbd596a40a3ffab5086510cfe = $this->env->getExtension("native_profiler");
        $__internal_a8100ee67804e7c744376209f22923ae26c6926cbd596a40a3ffab5086510cfe->enter($__internal_a8100ee67804e7c744376209f22923ae26c6926cbd596a40a3ffab5086510cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        if ((array_key_exists("student", $context) && ((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")) != null))) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Tickets:show.html.twig", 4)->display($context);
        }
        
        $__internal_a8100ee67804e7c744376209f22923ae26c6926cbd596a40a3ffab5086510cfe->leave($__internal_a8100ee67804e7c744376209f22923ae26c6926cbd596a40a3ffab5086510cfe_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_7ef1db913b02378c9d35a4df96fc9e134e011342741799e6ac0cabd1361940df = $this->env->getExtension("native_profiler");
        $__internal_7ef1db913b02378c9d35a4df96fc9e134e011342741799e6ac0cabd1361940df->enter($__internal_7ef1db913b02378c9d35a4df96fc9e134e011342741799e6ac0cabd1361940df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " N°";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_7ef1db913b02378c9d35a4df96fc9e134e011342741799e6ac0cabd1361940df->leave($__internal_7ef1db913b02378c9d35a4df96fc9e134e011342741799e6ac0cabd1361940df_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c455031aea1aef991abe876bfe39c21986e64689bc395a27af7d301dc742c269 = $this->env->getExtension("native_profiler");
        $__internal_c455031aea1aef991abe876bfe39c21986e64689bc395a27af7d301dc742c269->enter($__internal_c455031aea1aef991abe876bfe39c21986e64689bc395a27af7d301dc742c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Tickets:showactions.html.twig", "BoHomeBundle:Tickets:show.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_c455031aea1aef991abe876bfe39c21986e64689bc395a27af7d301dc742c269->leave($__internal_c455031aea1aef991abe876bfe39c21986e64689bc395a27af7d301dc742c269_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6215237252152e7ce7e71fc7e18ea8659d72ee9cae8a29c9570c504099464385 = $this->env->getExtension("native_profiler");
        $__internal_6215237252152e7ce7e71fc7e18ea8659d72ee9cae8a29c9570c504099464385->enter($__internal_6215237252152e7ce7e71fc7e18ea8659d72ee9cae8a29c9570c504099464385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"show_content\">
\t\t<table width=\"100%\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"30\"%>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"30\"%>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.affectedto", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"30\"%\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.blockedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>              
\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "subject", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 21
        if (((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")) && $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "employee", array()))) {
            // line 22
            echo "\t\t\t\t\t\t\t";
            $context["i"] = 1;
            // line 23
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "employee", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 25
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 26
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "employee", array())))) {
                    echo ", ";
                }
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
        // line 32
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "blockedby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "blockedby", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.statusddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>               
\t\t\t\t\t<td>";
        // line 41
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()), array(), "array"), "html", null, true);
        echo "</td>\t\t\t\t\t
\t\t\t\t\t<td>";
        // line 43
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolvedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 52
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
        // line 53
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolveddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t\t\t
\t\t\t\t\t<td>";
        // line 54
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"3\">Message</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\"><textarea name=\"message\" rows=5 COLS=120  disabled=\"disabled\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "comments", array()), "html", null, true);
        echo "</textarea></td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_6215237252152e7ce7e71fc7e18ea8659d72ee9cae8a29c9570c504099464385->leave($__internal_6215237252152e7ce7e71fc7e18ea8659d72ee9cae8a29c9570c504099464385_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tickets:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 61,  258 => 54,  250 => 53,  244 => 52,  238 => 49,  234 => 48,  230 => 47,  221 => 43,  217 => 42,  211 => 41,  205 => 38,  201 => 37,  197 => 36,  186 => 32,  183 => 31,  179 => 29,  176 => 28,  165 => 26,  163 => 25,  156 => 24,  151 => 23,  148 => 22,  146 => 21,  141 => 19,  135 => 16,  131 => 15,  127 => 14,  121 => 10,  115 => 9,  105 => 7,  99 => 6,  81 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:request.html.twig"%}{% endblock %}*/
/* {% block nav %}{%if student is defined and student!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} N°{{ ticket.id }} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoHomeBundle:Tickets:showactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="show_content">*/
/* 		<table width="100%">*/
/* 			<tbody>*/
/* 				<tr>*/
/* 					<th width="30"%>{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="30"%>{{'label.affectedto'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="30"%">{{'label.blockedby'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>              */
/* 					<td>{{ ticket.subject }}</td>*/
/* 					<td>*/
/* 						{%if contact and contact.employee%}*/
/* 							{%set i=1%}*/
/* 							{%for employee in contact.employee%}*/
/* 								{{ employee.firstname }} {{ employee.name }}*/
/* 								{%set i=i+1%}*/
/* 								{%if i<contact.employee|length%}, {%endif%}					*/
/* 							{%endfor%}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endif%}*/
/* 					</td>*/
/* 					<td>{%if ticket.blockedby %}{{ ticket.blockedby }}{%else%}---{%endif%}</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<th>{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.statusddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>               */
/* 					<td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{{ status[ticket.status] }}</td>					*/
/* 					<td>{% if ticket.statusddate %}{{ ticket.statusddate|date('Y-m-d') }}{% endif %}</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.resolveddate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.resolvedby'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>				*/
/* 					<td>{% if ticket.resolveddate %}{{ ticket.openeddate|date('Y-m-d') }}{%else%}---{% endif %}</td>					*/
/* 					<td>{% if ticket.resolvedby %}{{ ticket.resolvedby}}{%else%}---{% endif %}</td>					*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<th colspan="3">Message</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td colspan="3"><textarea name="message" rows=5 COLS=120  disabled="disabled">{{ ticket.comments }}</textarea></td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
