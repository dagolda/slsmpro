<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f8b7dbe3380a2c361c86e3d735e1191421588b955f9fbc8bcb2c5352a351eb4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hright' => array($this, 'block_hright'),
            'nav' => array($this, 'block_nav'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3b5a1bca348b0f6b75ca0a2985a5d02f6c3643b161313b31a3463240e544efe = $this->env->getExtension("native_profiler");
        $__internal_e3b5a1bca348b0f6b75ca0a2985a5d02f6c3643b161313b31a3463240e544efe->enter($__internal_e3b5a1bca348b0f6b75ca0a2985a5d02f6c3643b161313b31a3463240e544efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->loadTemplate("BoAdminBundle:Default:head.html.twig", "@Twig/Exception/exception_full.html.twig", 3)->display($context);
        // line 4
        echo "    <body>
\t\t<div id=\"wrapper\">
\t\t\t<div class=\"container header\">
\t\t\t\t<div class=\"h-left\">
\t\t\t\t\t<div class=\"logo\"></div>
\t\t\t\t\t<p class=\"slogan\">
\t\t\t\t\t\tSLS-MANAGER
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"h-right\">
\t\t\t\t\t";
        // line 14
        $this->displayBlock('hright', $context, $blocks);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid menu\">
\t\t\t\t";
        // line 18
        $this->loadTemplate("BoAdminBundle:Default:pm.html.twig", "@Twig/Exception/exception_full.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t</div>
\t\t\t<div id=\"line\"/>
\t\t\t<div class=\"container-fluid text-center\">    
\t\t\t\t<div class=\"row content\">
\t\t\t\t\t<div class=\"col-sm-8 text-left\">
\t\t\t\t\t\t<div class=\"container sub-menu\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t";
        // line 26
        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "@Twig/Exception/exception_full.html.twig", 26)->display($context);
        // line 27
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-content\">
\t\t\t\t\t\t\t<div class=\"message-content\">
\t\t\t\t\t\t\t\t<div class=\"message-container\">
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t\t<strong>Warning!</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.something.broken", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"exception-message\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t";
        // line 39
        if (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == "404")) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.error.404", array(), "BoAdminBundle"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t";
        } elseif ((        // line 41
(isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == "500")) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.error.500", array(), "BoAdminBundle"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.error.other", array(), "BoAdminBundle"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class='errorImage'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t";
        // line 51
        if ((array_key_exists("option", $context) && ((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == 1))) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slider/2010_05_25_4844.jpg"), "html", null, true);
            echo "\" border=\"0\" alt=\"\"/>\t
\t\t\t\t\t\t\t\t\t";
        } elseif ((        // line 53
array_key_exists("option", $context) && ((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == 2))) {
            echo "\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slider/2010_05_25_4846.jpg"), "html", null, true);
            echo "\" border=\"0\" alt=\"\"/>\t
\t\t\t\t\t\t\t\t\t";
        } elseif ((        // line 55
array_key_exists("option", $context) && ((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == 3))) {
            echo "\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slider/2010_05_25_4856.jpg"), "html", null, true);
            echo "\" border=\"0\" alt=\"\"/>\t
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slider/2010_05_25_4860.jpg"), "html", null, true);
            echo "\" border=\"0\" alt=\"\"/>\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.error.end", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>SLSMPRO pour CLIC.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tout-petit\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t\t";
        // line 70
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\tat
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t<abbr title=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "short_class", array()), "html", null, true);
            echo "</abbr>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t(";
            // line 76
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
\t\t\t\t\t\t\t\t\t";
        }
        // line 78
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 79
        if (((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array())) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()))) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? ("<br />") : (""));
            echo "
\t\t\t\t\t\t\t\t\t\tin ";
            // line 81
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()));
            echo "&nbsp;
\t\t\t\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2 sidenav\">
\t\t\t\t\t  <div class=\"well\">
\t\t\t\t\t\t\t";
        // line 88
        $this->displayBlock('nav', $context, $blocks);
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid text-center footer\">
\t\t\t\t<p>Copyright &copy; Takatim 2016</p>
\t\t\t</div>
\t\t</div>
        ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    </body>
</html>
";
        
        $__internal_e3b5a1bca348b0f6b75ca0a2985a5d02f6c3643b161313b31a3463240e544efe->leave($__internal_e3b5a1bca348b0f6b75ca0a2985a5d02f6c3643b161313b31a3463240e544efe_prof);

    }

    // line 14
    public function block_hright($context, array $blocks = array())
    {
        $__internal_03ff5981d4e9c5525c025742f3c260a34e7d7bc8f862f800773c4a643c6c6522 = $this->env->getExtension("native_profiler");
        $__internal_03ff5981d4e9c5525c025742f3c260a34e7d7bc8f862f800773c4a643c6c6522->enter($__internal_03ff5981d4e9c5525c025742f3c260a34e7d7bc8f862f800773c4a643c6c6522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        
        $__internal_03ff5981d4e9c5525c025742f3c260a34e7d7bc8f862f800773c4a643c6c6522->leave($__internal_03ff5981d4e9c5525c025742f3c260a34e7d7bc8f862f800773c4a643c6c6522_prof);

    }

    // line 88
    public function block_nav($context, array $blocks = array())
    {
        $__internal_71e8352d8f0f2201f413cf03cff8dc38e08359c7cedf50c3f1b8ed8e6bdb7457 = $this->env->getExtension("native_profiler");
        $__internal_71e8352d8f0f2201f413cf03cff8dc38e08359c7cedf50c3f1b8ed8e6bdb7457->enter($__internal_71e8352d8f0f2201f413cf03cff8dc38e08359c7cedf50c3f1b8ed8e6bdb7457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_71e8352d8f0f2201f413cf03cff8dc38e08359c7cedf50c3f1b8ed8e6bdb7457->leave($__internal_71e8352d8f0f2201f413cf03cff8dc38e08359c7cedf50c3f1b8ed8e6bdb7457_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_764c9bcae7cc1a9c7142decaadce72002924f2127fbcf79573094566e193e57e = $this->env->getExtension("native_profiler");
        $__internal_764c9bcae7cc1a9c7142decaadce72002924f2127fbcf79573094566e193e57e->enter($__internal_764c9bcae7cc1a9c7142decaadce72002924f2127fbcf79573094566e193e57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "\t\t\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t\t\t  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>\t\t\t
\t\t";
        
        $__internal_764c9bcae7cc1a9c7142decaadce72002924f2127fbcf79573094566e193e57e->leave($__internal_764c9bcae7cc1a9c7142decaadce72002924f2127fbcf79573094566e193e57e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 98,  248 => 97,  237 => 88,  226 => 14,  217 => 101,  215 => 97,  203 => 88,  195 => 82,  190 => 81,  185 => 80,  183 => 79,  180 => 78,  175 => 76,  170 => 74,  164 => 73,  160 => 71,  158 => 70,  154 => 69,  143 => 61,  140 => 60,  135 => 58,  132 => 57,  127 => 56,  123 => 55,  119 => 54,  115 => 53,  110 => 52,  108 => 51,  101 => 46,  95 => 44,  89 => 42,  87 => 41,  82 => 40,  80 => 39,  71 => 33,  63 => 27,  61 => 26,  52 => 19,  50 => 18,  45 => 15,  43 => 14,  31 => 4,  29 => 3,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     {%include "BoAdminBundle:Default:head.html.twig"%}*/
/*     <body>*/
/* 		<div id="wrapper">*/
/* 			<div class="container header">*/
/* 				<div class="h-left">*/
/* 					<div class="logo"></div>*/
/* 					<p class="slogan">*/
/* 						SLS-MANAGER*/
/* 					</p>*/
/* 				</div>*/
/* 				<div class="h-right">*/
/* 					{% block hright%}{% endblock %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container-fluid menu">*/
/* 				{%include "BoAdminBundle:Default:pm.html.twig"%}*/
/* 			</div>*/
/* 			<div id="line"/>*/
/* 			<div class="container-fluid text-center">    */
/* 				<div class="row content">*/
/* 					<div class="col-sm-8 text-left">*/
/* 						<div class="container sub-menu">*/
/* 							<ul class="list-inline">*/
/* 								{%include "BoAdminBundle:Default:tdb.html.twig"%}*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="container-content">*/
/* 							<div class="message-content">*/
/* 								<div class="message-container">*/
/* 									<div class="alert alert-warning">*/
/* 										<strong>Warning!</strong> {{'message.something.broken'|trans([],'BoAdminBundle')}}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div id="exception-message">*/
/* 								<center>*/
/* 									{% if status_code=='404' %}*/
/* 										<h3>{{'message.error.404'|trans([],'BoAdminBundle')}}</h3>*/
/* 									{% elseif status_code=='500' %}*/
/* 										<h3>{{'message.error.500'|trans([],'BoAdminBundle')}}</h3>*/
/* 									{% else %}*/
/* 										<h3>{{'message.error.other'|trans([],'BoAdminBundle')}}</h3>*/
/* 									{% endif %}*/
/* 								</center>*/
/* 								<br/><br/>*/
/* 							</div>*/
/* 							<div class='errorImage'>*/
/* 								<center>*/
/* 									{%if option is defined and option==1%}*/
/* 										<img src="{{ asset('images/slider/2010_05_25_4844.jpg') }}" border="0" alt=""/>	*/
/* 									{%elseif option is defined and option==2%}	*/
/* 										<img src="{{ asset('images/slider/2010_05_25_4846.jpg') }}" border="0" alt=""/>	*/
/* 									{%elseif option is defined and option==3%}	*/
/* 										<img src="{{ asset('images/slider/2010_05_25_4856.jpg') }}" border="0" alt=""/>	*/
/* 									{%else%}	*/
/* 										<img src="{{ asset('images/slider/2010_05_25_4860.jpg') }}" border="0" alt=""/>	*/
/* 									{%endif%}*/
/* 									<div>*/
/* 										<p>{{'message.error.end'|trans([],'BoAdminBundle')}}</p>*/
/* 										<p>SLSMPRO pour CLIC.</p>*/
/* 									</div>*/
/* 								</center>*/
/* 							</div>*/
/* 						</div>*/
/* 							<div class="tout-petit">*/
/* 								<center>*/
/* 									{{exception.message}}<br>*/
/* 									{% if trace.function %}*/
/* 										at*/
/* 										<strong>*/
/* 											<abbr title="{{ trace.class }}">{{ trace.short_class }}</abbr>*/
/* 											{{ trace.type ~ trace.function }}*/
/* 										</strong>*/
/* 										({{ trace.args|format_args }})*/
/* 									{% endif %}*/
/* */
/* 									{% if trace.file is defined and trace.file and trace.line is defined and trace.line %}*/
/* 										{{ trace.function ? '<br />' : '' }}*/
/* 										in {{ trace.file|format_file(trace.line) }}&nbsp;*/
/* 									{% endif %}							*/
/* 								</center>*/
/* 							</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2 sidenav">*/
/* 					  <div class="well">*/
/* 							{% block nav %}{% endblock %}							*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container-fluid text-center footer">*/
/* 				<p>Copyright &copy; Takatim 2016</p>*/
/* 			</div>*/
/* 		</div>*/
/*         {% block javascripts %}*/
/* 			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 			  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>			*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
