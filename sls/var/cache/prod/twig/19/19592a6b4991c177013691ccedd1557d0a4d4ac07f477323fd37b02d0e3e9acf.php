<?php

/* BoAdminBundle:Default:homemessage.html.twig */
class __TwigTemplate_e7dac4537b6cf486a70545aeaf51fba82940a2a2f32ff952031ea103239f76c7 extends Twig_Template
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
        $__internal_d3bb9cc5ac7cb9e311a1c4dc29da729358d79763416ffb1a92c50689366d5c2b = $this->env->getExtension("native_profiler");
        $__internal_d3bb9cc5ac7cb9e311a1c4dc29da729358d79763416ffb1a92c50689366d5c2b->enter($__internal_d3bb9cc5ac7cb9e311a1c4dc29da729358d79763416ffb1a92c50689366d5c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:homemessage.html.twig"));

        // line 1
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.welcome.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t<div class=\"student_home_welcome\">
\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/slider/", 1 => (isset($context["imgname"]) ? $context["imgname"] : $this->getContext($context, "imgname"))))), "html", null, true);
        echo "\" width=\"400\"/>
\t\t\t\t\t";
        // line 6
        echo (isset($context["welcome"]) ? $context["welcome"] : $this->getContext($context, "welcome"));
        echo "
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"student_home_address\">
\t\t\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.our.address", array(), "BoAdminBundle"), "html", null, true);
        echo ":</h2>
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campuss"]) ? $context["campuss"] : $this->getContext($context, "campuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["campus"]) {
            // line 11
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "address", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-map\" data-toggle=\"modal\" data-target=\"
\t\t\t\t\t\t\t\t";
            // line 14
            if ((($this->getAttribute($context["campus"], "city", array()) == "Gatineau") || ($this->getAttribute($context["campus"], "city", array()) == "gatineau"))) {
                // line 15
                echo "\t\t\t\t\t\t\t\t\t#hull_map
\t\t\t\t\t\t\t\t";
            } elseif ((($this->getAttribute(            // line 16
$context["campus"], "city", array()) == "Ottawa") || ($this->getAttribute($context["campus"], "city", array()) == "ottawa"))) {
                // line 17
                echo "\t\t\t\t\t\t\t\t\t#ottawa_map
\t\t\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.seemap", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        
        $__internal_d3bb9cc5ac7cb9e311a1c4dc29da729358d79763416ffb1a92c50689366d5c2b->leave($__internal_d3bb9cc5ac7cb9e311a1c4dc29da729358d79763416ffb1a92c50689366d5c2b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:homemessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  71 => 19,  68 => 18,  64 => 17,  62 => 16,  59 => 15,  57 => 14,  52 => 12,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }
}
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">{{'title.welcome.message'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body noframe">*/
/* 				<div class="student_home_welcome">*/
/* 					<img src="{{ asset(['images/slider/', imgname]|join) }}" width="400"/>*/
/* 					{{welcome|raw}}*/
/* 				</div>				*/
/* 				<div class="student_home_address">*/
/* 					<h2>{{'title.our.address'|trans([],'BoAdminBundle')}}:</h2>*/
/* 					{%for campus in campuss%}*/
/* 						<ul>*/
/* 							<li>{{campus.address}}*/
/* 							<button type="button" class="btn btn-info btn-lg modal-map" data-toggle="modal" data-target="*/
/* 								{%if campus.city=='Gatineau' or campus.city=='gatineau'%}*/
/* 									#hull_map*/
/* 								{%elseif campus.city=='Ottawa' or campus.city=='ottawa'%}*/
/* 									#ottawa_map*/
/* 								{%endif%}							*/
/* 							">{{'action.seemap'|trans([],'BoAdminBundle')}}</button></li>*/
/* 						</ul>*/
/* 					{%endfor%}				*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
