<?php

/* BoHomeBundle:Default:contactaction.html.twig */
class __TwigTemplate_1ab85f6576ad8bd7738046502c9434c27924a3092c3b7573ce40431da14ff165 extends Twig_Template
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
        $__internal_7447b27598410488684a9477788dd66e06df24587c7a4561f76987a8b26ff9d9 = $this->env->getExtension("native_profiler");
        $__internal_7447b27598410488684a9477788dd66e06df24587c7a4561f76987a8b26ff9d9->enter($__internal_7447b27598410488684a9477788dd66e06df24587c7a4561f76987a8b26ff9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:contactaction.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("bo_home_teamcontact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_7447b27598410488684a9477788dd66e06df24587c7a4561f76987a8b26ff9d9->leave($__internal_7447b27598410488684a9477788dd66e06df24587c7a4561f76987a8b26ff9d9_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:contactaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  31 => 8,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('bo_home_teamcontact') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
