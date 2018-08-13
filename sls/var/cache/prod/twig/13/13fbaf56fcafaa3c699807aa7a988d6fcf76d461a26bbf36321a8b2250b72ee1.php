<?php

/* BoAdminBundle:Language:show.html.twig */
class __TwigTemplate_3bb930f116c0f0e6febb6a1ef4afcb2414bf54cdbde6b78106714c0f56587e40 extends Twig_Template
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
        $__internal_df0558ccbc99a7ba94b03f1f03d3f16537de6238a2aa9f0fd70d7334d3e5d9b6 = $this->env->getExtension("native_profiler");
        $__internal_df0558ccbc99a7ba94b03f1f03d3f16537de6238a2aa9f0fd70d7334d3e5d9b6->enter($__internal_df0558ccbc99a7ba94b03f1f03d3f16537de6238a2aa9f0fd70d7334d3e5d9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Language:show.html.twig"));

        // line 1
        echo "    <table>
        <tbody>
            <tr>
                <th>Id</th>
            </tr>
            <tr>
                <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Name</th>
            </tr>
            <tr>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
            <tr>
                <th>Creationdate</th>
            </tr>
            <tr>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td>&nbsp;</td></tr>
        </tbody>
    </table>
";
        
        $__internal_df0558ccbc99a7ba94b03f1f03d3f16537de6238a2aa9f0fd70d7334d3e5d9b6->leave($__internal_df0558ccbc99a7ba94b03f1f03d3f16537de6238a2aa9f0fd70d7334d3e5d9b6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Language:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  40 => 14,  30 => 7,  22 => 1,);
    }
}
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ language.id }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ language.name }}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>Creationdate</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{% if language.creationdate %}{{ language.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td>&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
