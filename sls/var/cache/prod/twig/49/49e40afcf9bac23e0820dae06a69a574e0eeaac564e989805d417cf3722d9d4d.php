<?php

/* BoAdminBundle:Group:historicactions.html.twig */
class __TwigTemplate_84927ec784a1388d4d35696d0101493b00f2bf4abedc4017cf32360c47445ab5 extends Twig_Template
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
        $__internal_0c96cb316e03deecabf15e1a2b50792b03ac6781dc1c0b86ea54c5ff2345462d = $this->env->getExtension("native_profiler");
        $__internal_0c96cb316e03deecabf15e1a2b50792b03ac6781dc1c0b86ea54c5ff2345462d->enter($__internal_0c96cb316e03deecabf15e1a2b50792b03ac6781dc1c0b86ea54c5ff2345462d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:historicactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("group_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_0c96cb316e03deecabf15e1a2b50792b03ac6781dc1c0b86ea54c5ff2345462d->leave($__internal_0c96cb316e03deecabf15e1a2b50792b03ac6781dc1c0b86ea54c5ff2345462d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:historicactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('group_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('group_show',{'id':group.id}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
