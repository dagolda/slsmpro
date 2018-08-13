<?php

/* BoCoordinatorBundle:Default:index.html.twig */
class __TwigTemplate_0eca2e577658685bfade81585cfd1f4585eafae7ec19848d26efa7139d36693d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("coordinator.html.twig", "BoCoordinatorBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "coordinator.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ac0f3b12a4dbf3c1284c64dd0631cffb570f33c2a5ef470632fadb32492113a = $this->env->getExtension("native_profiler");
        $__internal_7ac0f3b12a4dbf3c1284c64dd0631cffb570f33c2a5ef470632fadb32492113a->enter($__internal_7ac0f3b12a4dbf3c1284c64dd0631cffb570f33c2a5ef470632fadb32492113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac0f3b12a4dbf3c1284c64dd0631cffb570f33c2a5ef470632fadb32492113a->leave($__internal_7ac0f3b12a4dbf3c1284c64dd0631cffb570f33c2a5ef470632fadb32492113a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e2cf3a419edbfaa2fec59bd1480898171686d7b31a55fcc61b1f255fac8deb = $this->env->getExtension("native_profiler");
        $__internal_d1e2cf3a419edbfaa2fec59bd1480898171686d7b31a55fcc61b1f255fac8deb->enter($__internal_d1e2cf3a419edbfaa2fec59bd1480898171686d7b31a55fcc61b1f255fac8deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d1e2cf3a419edbfaa2fec59bd1480898171686d7b31a55fcc61b1f255fac8deb->leave($__internal_d1e2cf3a419edbfaa2fec59bd1480898171686d7b31a55fcc61b1f255fac8deb_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_98e599f555c83da42c9506b1a7d641657c4838a91528d81c9330a1fd8fd3e260 = $this->env->getExtension("native_profiler");
        $__internal_98e599f555c83da42c9506b1a7d641657c4838a91528d81c9330a1fd8fd3e260->enter($__internal_98e599f555c83da42c9506b1a7d641657c4838a91528d81c9330a1fd8fd3e260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoCoordinatorBundle:Default:tdb.html.twig", "BoCoordinatorBundle:Default:index.html.twig", 3)->display($context);
        
        $__internal_98e599f555c83da42c9506b1a7d641657c4838a91528d81c9330a1fd8fd3e260->leave($__internal_98e599f555c83da42c9506b1a7d641657c4838a91528d81c9330a1fd8fd3e260_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_beb932d80d4db7138f5c734736b3cbd43aacc6db1d60997073ea3946f81f6374 = $this->env->getExtension("native_profiler");
        $__internal_beb932d80d4db7138f5c734736b3cbd43aacc6db1d60997073ea3946f81f6374->enter($__internal_beb932d80d4db7138f5c734736b3cbd43aacc6db1d60997073ea3946f81f6374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")) != null)) {
            $this->loadTemplate("BoCoordinatorBundle:Default:rightshow.html.twig", "BoCoordinatorBundle:Default:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_beb932d80d4db7138f5c734736b3cbd43aacc6db1d60997073ea3946f81f6374->leave($__internal_beb932d80d4db7138f5c734736b3cbd43aacc6db1d60997073ea3946f81f6374_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_bdd82cee315e35e18d2d65e0b476f78c58c9cb80061612f05a88687043acd622 = $this->env->getExtension("native_profiler");
        $__internal_bdd82cee315e35e18d2d65e0b476f78c58c9cb80061612f05a88687043acd622->enter($__internal_bdd82cee315e35e18d2d65e0b476f78c58c9cb80061612f05a88687043acd622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_bdd82cee315e35e18d2d65e0b476f78c58c9cb80061612f05a88687043acd622->leave($__internal_bdd82cee315e35e18d2d65e0b476f78c58c9cb80061612f05a88687043acd622_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_14282cc89bb2acb6622c8aa692088d585b1d71a0397927b02e05604a1f8a423c = $this->env->getExtension("native_profiler");
        $__internal_14282cc89bb2acb6622c8aa692088d585b1d71a0397927b02e05604a1f8a423c->enter($__internal_14282cc89bb2acb6622c8aa692088d585b1d71a0397927b02e05604a1f8a423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"panel-group\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.welcome.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body noframe\">
\t\t\t\t<div class=\"student_home_welcome\">
\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/slider/", 1 => (isset($context["imgname"]) ? $context["imgname"] : $this->getContext($context, "imgname"))))), "html", null, true);
        echo "\" width=\"400\"/>
\t\t\t\t\t";
        // line 15
        echo (isset($context["welcome"]) ? $context["welcome"] : $this->getContext($context, "welcome"));
        echo "
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"student_home_address\">
\t\t\t\t\t<h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.our.address", array(), "BoAdminBundle"), "html", null, true);
        echo ":</h2>
\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campuss"]) ? $context["campuss"] : $this->getContext($context, "campuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["campus"]) {
            // line 20
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "address", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-map\" data-toggle=\"modal\" data-target=\"
\t\t\t\t\t\t\t\t";
            // line 23
            if ((($this->getAttribute($context["campus"], "city", array()) == "Gatineau") || ($this->getAttribute($context["campus"], "city", array()) == "gatineau"))) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t#hull_map
\t\t\t\t\t\t\t\t";
            } elseif ((($this->getAttribute(            // line 25
$context["campus"], "city", array()) == "Ottawa") || ($this->getAttribute($context["campus"], "city", array()) == "ottawa"))) {
                // line 26
                echo "\t\t\t\t\t\t\t\t\t#ottawa_map
\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.seemap", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container ggl_map\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"ottawa_map\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.googlemap", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 47
        $this->loadTemplate("BoStudentBundle:Default:ottawamap.html.twig", "BoCoordinatorBundle:Default:index.html.twig", 47)->display($context);
        // line 48
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"hull_map\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.googlemap", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 66
        $this->loadTemplate("BoStudentBundle:Default:hullmap.html.twig", "BoCoordinatorBundle:Default:index.html.twig", 66)->display($context);
        // line 67
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_14282cc89bb2acb6622c8aa692088d585b1d71a0397927b02e05604a1f8a423c->leave($__internal_14282cc89bb2acb6622c8aa692088d585b1d71a0397927b02e05604a1f8a423c_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4c69a55f31d4ea3841eccbfa9a2edc4cc2ddb9de17d350c9181e7893b39a51d = $this->env->getExtension("native_profiler");
        $__internal_d4c69a55f31d4ea3841eccbfa9a2edc4cc2ddb9de17d350c9181e7893b39a51d->enter($__internal_d4c69a55f31d4ea3841eccbfa9a2edc4cc2ddb9de17d350c9181e7893b39a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d4c69a55f31d4ea3841eccbfa9a2edc4cc2ddb9de17d350c9181e7893b39a51d->leave($__internal_d4c69a55f31d4ea3841eccbfa9a2edc4cc2ddb9de17d350c9181e7893b39a51d_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 75,  236 => 74,  224 => 73,  216 => 67,  214 => 66,  208 => 63,  191 => 48,  189 => 47,  183 => 44,  167 => 30,  158 => 28,  155 => 27,  151 => 26,  149 => 25,  146 => 24,  144 => 23,  139 => 21,  136 => 20,  132 => 19,  128 => 18,  122 => 15,  118 => 14,  112 => 11,  108 => 9,  102 => 8,  86 => 7,  75 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'coordinator.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'admin.default.home'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoCoordinatorBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if coordinator!=null%}{%include "BoCoordinatorBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'admin.default.home'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div class="panel-group">*/
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
/* 	</div>*/
/* 	<div class="container ggl_map">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="ottawa_map" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.googlemap'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				{%include "BoStudentBundle:Default:ottawamap.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="hull_map" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.googlemap'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				{%include "BoStudentBundle:Default:hullmap.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
