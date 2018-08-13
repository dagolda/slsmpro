<?php

/* BoCoordinatorBundle:Students:showactions.html.twig */
class __TwigTemplate_cf2b7d884d1267996c859237789bd71397d8f346b4f5b14cc5f29d0330d2e6ef extends Twig_Template
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
        $__internal_c8b408d9b26b0b7429f67a51a9ec98be0700767748a12618e0eea8f5b0059531 = $this->env->getExtension("native_profiler");
        $__internal_c8b408d9b26b0b7429f67a51a9ec98be0700767748a12618e0eea8f5b0059531->enter($__internal_c8b408d9b26b0b7429f67a51a9ec98be0700767748a12618e0eea8f5b0059531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Students:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_students");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_c8b408d9b26b0b7429f67a51a9ec98be0700767748a12618e0eea8f5b0059531->leave($__internal_c8b408d9b26b0b7429f67a51a9ec98be0700767748a12618e0eea8f5b0059531_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Students:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('coordinator_supervision_students') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
