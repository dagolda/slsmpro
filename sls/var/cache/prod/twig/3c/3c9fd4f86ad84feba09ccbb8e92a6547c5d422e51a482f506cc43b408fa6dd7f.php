<?php

/* BoAdminBundle:Employee:document.html.twig */
class __TwigTemplate_a1277721aa23ab9a5c681574323b1104ecb285e44184363c891354dc3ce8a2f7 extends Twig_Template
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
        $__internal_93477b63ad38a75cb36028fde4ac27063df6fbf9eb1eae38b0af42a667e52149 = $this->env->getExtension("native_profiler");
        $__internal_93477b63ad38a75cb36028fde4ac27063df6fbf9eb1eae38b0af42a667e52149->enter($__internal_93477b63ad38a75cb36028fde4ac27063df6fbf9eb1eae38b0af42a667e52149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:document.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filename", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epjs"]) ? $context["epjs"] : $this->getContext($context, "epjs")));
        foreach ($context['_seq'] as $context["_key"] => $context["epj"]) {
            // line 13
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["epj"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["epj"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["epj"], "filename", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["epj"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td align='center'>
\t\t\t\t\t\t<span>                          
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/employee/" . $this->getAttribute($context["epj"], "filename", array()))), "html", null, true);
            echo "\">Download</a>
\t\t\t\t\t\t</span>  
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_93477b63ad38a75cb36028fde4ac27063df6fbf9eb1eae38b0af42a667e52149->leave($__internal_93477b63ad38a75cb36028fde4ac27063df6fbf9eb1eae38b0af42a667e52149_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  69 => 20,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  48 => 13,  44 => 12,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/* 				<th>{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.filename'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for epj in epjs %}*/
/* 				<tr>*/
/* 					<td>{{ epj.id }}</td>*/
/* 					<td>{{ epj.name }}</td>*/
/* 					<td>{{ epj.filename }}</td>*/
/* 					<td>{{ epj.creationdate|date("Y-m-d H:i:s") }}</td>*/
/* 					<td align='center'>*/
/* 						<span>                          */
/* 							<a class="btn btn-default btn-sm" href="{{ asset('uploads/employee/' ~ epj.filename) }}">Download</a>*/
/* 						</span>  */
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
