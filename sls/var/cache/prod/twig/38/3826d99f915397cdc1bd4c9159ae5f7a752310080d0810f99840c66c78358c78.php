<?php

/* BoAdminBundle:Diary:showactions.html.twig */
class __TwigTemplate_9d0b32d9ea366b442e018fcdebebc1760a383c0db455533c4d1bd207c6c54f10 extends Twig_Template
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
        $__internal_0912268ab0bdef91bdadb3c0b467087a7d9c57d96b6c1ba31c91092a6574b6d1 = $this->env->getExtension("native_profiler");
        $__internal_0912268ab0bdef91bdadb3c0b467087a7d9c57d96b6c1ba31c91092a6574b6d1->enter($__internal_0912268ab0bdef91bdadb3c0b467087a7d9c57d96b6c1ba31c91092a6574b6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Diary:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("diary_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#edit_diary\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<!--button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_diary\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.duplicate", array(), "BoAdminBundle"), "html", null, true);
        echo "</button-->
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_0912268ab0bdef91bdadb3c0b467087a7d9c57d96b6c1ba31c91092a6574b6d1->leave($__internal_0912268ab0bdef91bdadb3c0b467087a7d9c57d96b6c1ba31c91092a6574b6d1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Diary:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  43 => 12,  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('diary_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#edit_diary">{{'action.edit'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<!--button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_diary">{{'action.duplicate'|trans([],'BoAdminBundle')}}</button-->*/
/* 					</td>*/
/* 					<td class="delete-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
