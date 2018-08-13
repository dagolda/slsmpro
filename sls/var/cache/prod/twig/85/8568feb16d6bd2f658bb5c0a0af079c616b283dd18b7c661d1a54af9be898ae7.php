<?php

/* BoHomeBundle:Default:homemessage.html.twig */
class __TwigTemplate_e7068d67dae3f14ead87ff5ad8adcec5c43952f98c8a431e9f3295e8f4798f31 extends Twig_Template
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
        $__internal_c457f2eb28dd1915063474a9f3161ccd84d9aba22c1c67c687e29271769c5268 = $this->env->getExtension("native_profiler");
        $__internal_c457f2eb28dd1915063474a9f3161ccd84d9aba22c1c67c687e29271769c5268->enter($__internal_c457f2eb28dd1915063474a9f3161ccd84d9aba22c1c67c687e29271769c5268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:homemessage.html.twig"));

        // line 1
        echo "\t\t<br/>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.welcome.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t<div class=\"student_home_welcome\">
\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/slider/", 1 => (isset($context["imgname"]) ? $context["imgname"] : $this->getContext($context, "imgname"))))), "html", null, true);
        echo "\" width=\"400\"/>
\t\t\t\t\t";
        // line 7
        echo (isset($context["welcome"]) ? $context["welcome"] : $this->getContext($context, "welcome"));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"student_home_address\">
\t\t\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.our.address", array(), "BoAdminBundle"), "html", null, true);
        echo ":</h2>
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campuss"]) ? $context["campuss"] : $this->getContext($context, "campuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["campus"]) {
            // line 12
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "address", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-map\" data-toggle=\"modal\" data-target=\"
\t\t\t\t\t\t\t\t";
            // line 15
            if ((($this->getAttribute($context["campus"], "city", array()) == "Gatineau") || ($this->getAttribute($context["campus"], "city", array()) == "gatineau"))) {
                // line 16
                echo "\t\t\t\t\t\t\t\t\t#hull_map
\t\t\t\t\t\t\t\t";
            } elseif ((($this->getAttribute(            // line 17
$context["campus"], "city", array()) == "Ottawa") || ($this->getAttribute($context["campus"], "city", array()) == "ottawa"))) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t#ottawa_map
\t\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.seemap", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        
        $__internal_c457f2eb28dd1915063474a9f3161ccd84d9aba22c1c67c687e29271769c5268->leave($__internal_c457f2eb28dd1915063474a9f3161ccd84d9aba22c1c67c687e29271769c5268_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:homemessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  72 => 20,  69 => 19,  65 => 18,  63 => 17,  60 => 16,  58 => 15,  53 => 13,  50 => 12,  46 => 11,  42 => 10,  36 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 		<br/>*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">{{'title.welcome.message'|trans([],'BoAdminBundle')}}</div>*/
/* 			<div class="panel-body noframe">*/
/* 				<div class="student_home_welcome">*/
/* 					<img src="{{ asset(['images/slider/', imgname]|join) }}" width="400"/>*/
/* 					{{welcome|raw}}*/
/* 				</div>*/
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
