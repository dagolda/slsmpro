<?php

/* BoCoordinatorBundle:Students:actions.html.twig */
class __TwigTemplate_8b37c828886fc96c332388e7595bbef44e8b0eda610bc7599c94cd780decca63 extends Twig_Template
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
        $__internal_2afdf80d8078abc931774286832a2b47489c4dbe2a4724ed654feba4909bbdb1 = $this->env->getExtension("native_profiler");
        $__internal_2afdf80d8078abc931774286832a2b47489c4dbe2a4724ed654feba4909bbdb1->enter($__internal_2afdf80d8078abc931774286832a2b47489c4dbe2a4724ed654feba4909bbdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Students:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.students", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_2afdf80d8078abc931774286832a2b47489c4dbe2a4724ed654feba4909bbdb1->leave($__internal_2afdf80d8078abc931774286832a2b47489c4dbe2a4724ed654feba4909bbdb1_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Students:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'label.students'|trans([],'BoAdminBundle')}} <span class="badge">{{total}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
