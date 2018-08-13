<?php

/* local/show.html.twig */
class __TwigTemplate_9ec43f555748086ba7c55a092e88709490f32e08fc37d57fe6f8c02f1caa359c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "local/show.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4740fb72ff88bd569ad1489da6efcd2bdb017b25b6eea7acfec9098329216b6 = $this->env->getExtension("native_profiler");
        $__internal_e4740fb72ff88bd569ad1489da6efcd2bdb017b25b6eea7acfec9098329216b6->enter($__internal_e4740fb72ff88bd569ad1489da6efcd2bdb017b25b6eea7acfec9098329216b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "local/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4740fb72ff88bd569ad1489da6efcd2bdb017b25b6eea7acfec9098329216b6->leave($__internal_e4740fb72ff88bd569ad1489da6efcd2bdb017b25b6eea7acfec9098329216b6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d1523e89b822432da7ff9af37ad2fbee25043eddcb8b20e9a1711f419333a22 = $this->env->getExtension("native_profiler");
        $__internal_9d1523e89b822432da7ff9af37ad2fbee25043eddcb8b20e9a1711f419333a22->enter($__internal_9d1523e89b822432da7ff9af37ad2fbee25043eddcb8b20e9a1711f419333a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9d1523e89b822432da7ff9af37ad2fbee25043eddcb8b20e9a1711f419333a22->leave($__internal_9d1523e89b822432da7ff9af37ad2fbee25043eddcb8b20e9a1711f419333a22_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0e6c8155cfa66490dc96df572765b16b4d618e46ec6e9905622882f22cf8f3f8 = $this->env->getExtension("native_profiler");
        $__internal_0e6c8155cfa66490dc96df572765b16b4d618e46ec6e9905622882f22cf8f3f8->enter($__internal_0e6c8155cfa66490dc96df572765b16b4d618e46ec6e9905622882f22cf8f3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "local/show.html.twig", 3)->display($context);
        
        $__internal_0e6c8155cfa66490dc96df572765b16b4d618e46ec6e9905622882f22cf8f3f8->leave($__internal_0e6c8155cfa66490dc96df572765b16b4d618e46ec6e9905622882f22cf8f3f8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4e380ba05fb45ea5f34c7381af7c245d503a6736ee301df6a10d97c49991f1eb = $this->env->getExtension("native_profiler");
        $__internal_4e380ba05fb45ea5f34c7381af7c245d503a6736ee301df6a10d97c49991f1eb->enter($__internal_4e380ba05fb45ea5f34c7381af7c245d503a6736ee301df6a10d97c49991f1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Local:rightshow.html.twig", "local/show.html.twig", 4)->display($context);
        
        $__internal_4e380ba05fb45ea5f34c7381af7c245d503a6736ee301df6a10d97c49991f1eb->leave($__internal_4e380ba05fb45ea5f34c7381af7c245d503a6736ee301df6a10d97c49991f1eb_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_62f5ac233cbc9999a801e54e74e81db8738de927e11318f68ce1b0785aec5822 = $this->env->getExtension("native_profiler");
        $__internal_62f5ac233cbc9999a801e54e74e81db8738de927e11318f68ce1b0785aec5822->enter($__internal_62f5ac233cbc9999a801e54e74e81db8738de927e11318f68ce1b0785aec5822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_62f5ac233cbc9999a801e54e74e81db8738de927e11318f68ce1b0785aec5822->leave($__internal_62f5ac233cbc9999a801e54e74e81db8738de927e11318f68ce1b0785aec5822_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_69fb05795dde900d17d36af33b62c389bd8b8f1a2361e7b3bdce759e39fa8eaf = $this->env->getExtension("native_profiler");
        $__internal_69fb05795dde900d17d36af33b62c389bd8b8f1a2361e7b3bdce759e39fa8eaf->enter($__internal_69fb05795dde900d17d36af33b62c389bd8b8f1a2361e7b3bdce759e39fa8eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Local:showactions.html.twig", "local/show.html.twig", 8)->display($context);
        echo "\t\t
\t\t<div class=\"display_content\">
\t\t\t<legend>Occupation</legend>
\t\t\t";
        // line 11
        if ((((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) == null) && ((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) == null))) {
            // line 12
            echo "\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Local:nooccupation.html.twig", "local/show.html.twig", 12)->display($context);
            // line 13
            echo "\t\t\t";
        }
        echo "\t\t\t
\t\t\t";
        // line 14
        if (((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) != null)) {
            // line 15
            echo "\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Local:schedule.html.twig", "local/show.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t";
        }
        // line 17
        echo "\t\t\t";
        if (((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) != null)) {
            // line 18
            echo "\t\t\t\t";
            $this->loadTemplate("BoAdminBundle:Local:schedulegroup.html.twig", "local/show.html.twig", 18)->display($context);
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t</div>
\t\t";
        // line 21
        if (((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) != null)) {
            // line 22
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 24
            $this->loadTemplate("BoAdminBundle:Local:group.html.twig", "local/show.html.twig", 24)->display($context);
            // line 25
            echo "\t\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if (((twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))) == 1) && (twig_length_filter($this->env, (isset($context["cstudents"]) ? $context["cstudents"] : $this->getContext($context, "cstudents"))) == 1))) {
            // line 28
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 30
            if (((twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))) == 1) && (twig_length_filter($this->env, (isset($context["cstudents"]) ? $context["cstudents"] : $this->getContext($context, "cstudents"))) > 0))) {
                // line 31
                echo "\t\t\t\t\t";
                $this->loadTemplate("BoAdminBundle:Local:students.html.twig", "local/show.html.twig", 31)->display($context);
                // line 32
                echo "\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t";
            if ((((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) != null) && (twig_length_filter($this->env, (isset($context["gstudents"]) ? $context["gstudents"] : $this->getContext($context, "gstudents"))) > 0))) {
                // line 34
                echo "\t\t\t\t\t";
                $this->loadTemplate("BoAdminBundle:Local:studentsgroup.html.twig", "local/show.html.twig", 34)->display($context);
                // line 35
                echo "\t\t\t\t";
            }
            // line 36
            echo "\t\t\t</div>
\t\t";
        }
        // line 38
        echo "\t\t";
        if (((twig_length_filter($this->env, (isset($context["cteachers"]) ? $context["cteachers"] : $this->getContext($context, "cteachers"))) > 0) || (twig_length_filter($this->env, (isset($context["gteachers"]) ? $context["gteachers"] : $this->getContext($context, "gteachers"))) > 0))) {
            // line 39
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t";
            // line 40
            if (((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")) != null)) {
                // line 41
                echo "\t\t\t\t\t<legend>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
                echo "</legend>
\t\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t\t";
                // line 43
                $this->loadTemplate("BoAdminBundle:Local:teachers.html.twig", "local/show.html.twig", 43)->display($context);
                // line 44
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t";
            if (((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")) != null)) {
                // line 47
                echo "\t\t\t\t\t<legend>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
                echo "</legend>
\t\t\t\t\t<div id=\"teacher_content\">\t\t\t\t
\t\t\t\t\t\t";
                // line 49
                $this->loadTemplate("BoAdminBundle:Local:teachersgroup.html.twig", "local/show.html.twig", 49)->display($context);
                // line 50
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 51
            echo "\t
\t\t\t</div>
\t\t";
        }
        // line 53
        echo "\t\t\t
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t
\t<!-- end enable a room form by modal dialog -->\t
\t";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_69fb05795dde900d17d36af33b62c389bd8b8f1a2361e7b3bdce759e39fa8eaf->leave($__internal_69fb05795dde900d17d36af33b62c389bd8b8f1a2361e7b3bdce759e39fa8eaf_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7a48188ed9b279a21b641c2d85ba8d7d2f5f67be833b2fd7b7bdf481693fc09 = $this->env->getExtension("native_profiler");
        $__internal_c7a48188ed9b279a21b641c2d85ba8d7d2f5f67be833b2fd7b7bdf481693fc09->enter($__internal_c7a48188ed9b279a21b641c2d85ba8d7d2f5f67be833b2fd7b7bdf481693fc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_c7a48188ed9b279a21b641c2d85ba8d7d2f5f67be833b2fd7b7bdf481693fc09->leave($__internal_c7a48188ed9b279a21b641c2d85ba8d7d2f5f67be833b2fd7b7bdf481693fc09_prof);

    }

    public function getTemplateName()
    {
        return "local/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 83,  283 => 82,  271 => 81,  259 => 72,  255 => 71,  251 => 70,  245 => 67,  239 => 64,  226 => 53,  221 => 51,  217 => 50,  215 => 49,  209 => 47,  206 => 46,  202 => 44,  200 => 43,  194 => 41,  192 => 40,  189 => 39,  186 => 38,  182 => 36,  179 => 35,  176 => 34,  173 => 33,  170 => 32,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  155 => 27,  151 => 25,  149 => 24,  145 => 23,  142 => 22,  140 => 21,  137 => 20,  134 => 19,  131 => 18,  128 => 17,  125 => 16,  122 => 15,  120 => 14,  115 => 13,  112 => 12,  110 => 11,  104 => 8,  101 => 7,  95 => 6,  79 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}*/
/* {% block nav %}{%include "BoAdminBundle:Local:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Local:showactions.html.twig"%}		*/
/* 		<div class="display_content">*/
/* 			<legend>Occupation</legend>*/
/* 			{%if contracts==null and groups==null%}*/
/* 				{%include "BoAdminBundle:Local:nooccupation.html.twig"%}*/
/* 			{%endif%}			*/
/* 			{%if contracts!=null%}*/
/* 				{%include "BoAdminBundle:Local:schedule.html.twig"%}*/
/* 			{%endif%}*/
/* 			{%if groups!=null%}*/
/* 				{%include "BoAdminBundle:Local:schedulegroup.html.twig"%}*/
/* 			{%endif%}*/
/* 		</div>*/
/* 		{%if groups!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Local:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if contracts|length==1  and cstudents|length==1%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'entity.student'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%if contracts|length==1  and cstudents|length>0%}*/
/* 					{%include "BoAdminBundle:Local:students.html.twig"%}*/
/* 				{%endif%}*/
/* 				{%if groups!=null and gstudents|length>0%}*/
/* 					{%include "BoAdminBundle:Local:studentsgroup.html.twig"%}*/
/* 				{%endif%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if cteachers|length>0 or gteachers|length>0%}*/
/* 			<div class="display_content">*/
/* 				{%if contracts!=null%}*/
/* 					<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 					<div id="teacher_content">*/
/* 						{%include "BoAdminBundle:Local:teachers.html.twig"%}*/
/* 					</div>*/
/* 				{%endif%}*/
/* 				{%if groups!=null%}*/
/* 					<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 					<div id="teacher_content">				*/
/* 						{%include "BoAdminBundle:Local:teachersgroup.html.twig"%}*/
/* 					</div>*/
/* 				{%endif%}	*/
/* 			</div>*/
/* 		{%endif%}			*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- end enable a room form by modal dialog -->	*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
