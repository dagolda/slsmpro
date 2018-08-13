<?php

/* BoAdminBundle:Cancel:tbliste.html.twig */
class __TwigTemplate_5006534757e3a0b0cd62b12dd18782bf393909b413cdf3616b5e751ada7e7993 extends Twig_Template
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
        $__internal_57dc9181b36f3594d8b7db624dc0b6b0c09baaccdb2699d3a3716c4ab10e3d49 = $this->env->getExtension("native_profiler");
        $__internal_57dc9181b36f3594d8b7db624dc0b6b0c09baaccdb2699d3a3716c4ab10e3d49->enter($__internal_57dc9181b36f3594d8b7db624dc0b6b0c09baaccdb2699d3a3716c4ab10e3d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Cancel:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"5%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"126px\" npowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cancels"]) ? $context["cancels"] : $this->getContext($context, "cancels")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cancel"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancel"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cancel"], "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cancel"], "enddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancel"], "amorpm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancel"], "motif", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["cancel"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cancel"], "creationdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td class=\"list-action\"  width=\"126px\">
                    \t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cancel_show", array("id" => $this->getAttribute($context["cancel"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t</a>
\t\t\t";
            // line 26
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Cancel", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Cancel", array(), "array"), "edit", array()) == 1))) {
                // line 27
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cancel_edit", array("id" => $this->getAttribute($context["cancel"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t</a>
\t\t\t";
            }
            // line 31
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
";
        
        $__internal_57dc9181b36f3594d8b7db624dc0b6b0c09baaccdb2699d3a3716c4ab10e3d49->leave($__internal_57dc9181b36f3594d8b7db624dc0b6b0c09baaccdb2699d3a3716c4ab10e3d49_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Cancel:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  121 => 34,  114 => 31,  108 => 28,  103 => 27,  101 => 26,  96 => 24,  92 => 23,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="5%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="126px" npowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cancel in cancels %}*/
/*             <tr>*/
/*                 <td>{{ cancel.id }}</td>*/
/*                 <td>{{ cancel.startdate|date('Y-m-d') }}</td>*/
/*                 <td>{{ cancel.enddate|date('Y-m-d') }}</td>*/
/*                 <td>{{ cancel.amorpm }}</td>*/
/*                 <td>{{ cancel.motif }}</td>*/
/*                 <td>{%if cancel.creationdate %}{{ cancel.creationdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td class="list-action"  width="126px">*/
/*                     	<a href="{{ path('cancel_show', { 'id': cancel.id }) }}">*/
/* 				{{'action.show'|trans([],'BoAdminBundle')}}*/
/* 			</a>*/
/* 			{%if app.session.get('rights')['STAFF']['Cancel'] is defined and app.session.get('rights')['STAFF']['Cancel'].edit==1%}*/
/* 			<a href="{{ path('cancel_edit', { 'id': cancel.id }) }}">*/
/* 				{{'action.edit'|trans([],'BoAdminBundle')}}*/
/* 			</a>*/
/* 			{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
