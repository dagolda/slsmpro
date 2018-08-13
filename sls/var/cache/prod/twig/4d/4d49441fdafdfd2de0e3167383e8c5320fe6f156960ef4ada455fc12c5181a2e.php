<?php

/* BoAdminBundle:TeamContacts:show.html.twig */
class __TwigTemplate_a28e2e8ffd88c1916f7bd46097dcabe8c7bade66d5284557293ea0a5482b60bf extends Twig_Template
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
        $__internal_461e039d51499af49157607c61a62d1a46ffbc7f5e1afb250db43868e4c12524 = $this->env->getExtension("native_profiler");
        $__internal_461e039d51499af49157607c61a62d1a46ffbc7f5e1afb250db43868e4c12524->enter($__internal_461e039d51499af49157607c61a62d1a46ffbc7f5e1afb250db43868e4c12524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TeamContacts:show.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
                <th width=\"30%\">Id</th>
\t\t\t\t<th width=\"30%\">Title</th>
                <th width=\"30%\">Email</th>
            </tr>
            <tr>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "title", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th>Location</th>
\t\t\t\t<th>Extension</th>
\t\t\t\t<th>Room</th>
            </tr>
            <tr>
                 <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "location", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "extension", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "room", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th>Creationdate</th>
\t\t\t\t<th>Createby</th>                
            </tr>
            <tr>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamcontact"]) ? $context["teamcontact"] : $this->getContext($context, "teamcontact")), "createby", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
        </tbody>
    </table>
";
        
        $__internal_461e039d51499af49157607c61a62d1a46ffbc7f5e1afb250db43868e4c12524->leave($__internal_461e039d51499af49157607c61a62d1a46ffbc7f5e1afb250db43868e4c12524_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TeamContacts:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  71 => 30,  60 => 22,  56 => 21,  52 => 20,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="30%">Id</th>*/
/* 				<th width="30%">Title</th>*/
/*                 <th width="30%">Email</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ teamcontact.id }}</td>*/
/*                 <td>{{ teamcontact.title }}</td>*/
/* 				<td>{{ teamcontact.email }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Location</th>*/
/* 				<th>Extension</th>*/
/* 				<th>Room</th>*/
/*             </tr>*/
/*             <tr>*/
/*                  <td>{{ teamcontact.location }}</td>*/
/*                 <td>{{ teamcontact.extension }}</td>*/
/* 				<td>{{ teamcontact.room }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Creationdate</th>*/
/* 				<th>Createby</th>                */
/*             </tr>*/
/*             <tr>*/
/*                 <td>{% if teamcontact.creationdate %}{{ teamcontact.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ teamcontact.createby }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
