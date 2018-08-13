<?php

/* BoAdminBundle:Tools:schedule.html.twig */
class __TwigTemplate_641a4d4cfdbfa2e977d13507eafe6991d361aacda9ae6d9a96fb099da31ee315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "BoAdminBundle:Tools:schedule.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c0528313cfd1f21892fe138e86e5e3a7f2b4f0071872a3b97a845183d4790f8 = $this->env->getExtension("native_profiler");
        $__internal_8c0528313cfd1f21892fe138e86e5e3a7f2b4f0071872a3b97a845183d4790f8->enter($__internal_8c0528313cfd1f21892fe138e86e5e3a7f2b4f0071872a3b97a845183d4790f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tools:schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0528313cfd1f21892fe138e86e5e3a7f2b4f0071872a3b97a845183d4790f8->leave($__internal_8c0528313cfd1f21892fe138e86e5e3a7f2b4f0071872a3b97a845183d4790f8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ed8319ef2c71849e119a45482ef80ce692d827f2c65de4a85a023b854b0777b = $this->env->getExtension("native_profiler");
        $__internal_2ed8319ef2c71849e119a45482ef80ce692d827f2c65de4a85a023b854b0777b->enter($__internal_2ed8319ef2c71849e119a45482ef80ce692d827f2c65de4a85a023b854b0777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tools", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_2ed8319ef2c71849e119a45482ef80ce692d827f2c65de4a85a023b854b0777b->leave($__internal_2ed8319ef2c71849e119a45482ef80ce692d827f2c65de4a85a023b854b0777b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_bceb830824c8e393aed3bca0e5d96aad37f292b1b6151a4c05e2135b55306524 = $this->env->getExtension("native_profiler");
        $__internal_bceb830824c8e393aed3bca0e5d96aad37f292b1b6151a4c05e2135b55306524->enter($__internal_bceb830824c8e393aed3bca0e5d96aad37f292b1b6151a4c05e2135b55306524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "BoAdminBundle:Tools:schedule.html.twig", 3)->display($context);
        
        $__internal_bceb830824c8e393aed3bca0e5d96aad37f292b1b6151a4c05e2135b55306524->leave($__internal_bceb830824c8e393aed3bca0e5d96aad37f292b1b6151a4c05e2135b55306524_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_af012706e9f2b1c22f7ff20dd65ec37f31954f3a1f7f006389342af2dee939bf = $this->env->getExtension("native_profiler");
        $__internal_af012706e9f2b1c22f7ff20dd65ec37f31954f3a1f7f006389342af2dee939bf->enter($__internal_af012706e9f2b1c22f7ff20dd65ec37f31954f3a1f7f006389342af2dee939bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tools", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_af012706e9f2b1c22f7ff20dd65ec37f31954f3a1f7f006389342af2dee939bf->leave($__internal_af012706e9f2b1c22f7ff20dd65ec37f31954f3a1f7f006389342af2dee939bf_prof);

    }

    // line 5
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c56efb2b9bd2755bb883d7606c069893f78c73d9dc837fe9d94882c40d09e660 = $this->env->getExtension("native_profiler");
        $__internal_c56efb2b9bd2755bb883d7606c069893f78c73d9dc837fe9d94882c40d09e660->enter($__internal_c56efb2b9bd2755bb883d7606c069893f78c73d9dc837fe9d94882c40d09e660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Tools:scheduleactions.html.twig", "BoAdminBundle:Tools:schedule.html.twig", 6)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_c56efb2b9bd2755bb883d7606c069893f78c73d9dc837fe9d94882c40d09e660->leave($__internal_c56efb2b9bd2755bb883d7606c069893f78c73d9dc837fe9d94882c40d09e660_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_695ada2c5cac43cf66f90ada05865ad67cced5926f02019e3c6e4fcae777e4fa = $this->env->getExtension("native_profiler");
        $__internal_695ada2c5cac43cf66f90ada05865ad67cced5926f02019e3c6e4fcae777e4fa->enter($__internal_695ada2c5cac43cf66f90ada05865ad67cced5926f02019e3c6e4fcae777e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Tools:schedulelist.html.twig", "BoAdminBundle:Tools:schedule.html.twig", 10)->display($context);
        // line 11
        echo "\t</div>
\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedules"]) ? $context["schedules"] : $this->getContext($context, "schedules")));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 13
            echo "\t\t";
            $context["delete_form"] = $this->getAttribute((isset($context["deleteform"]) ? $context["deleteform"] : $this->getContext($context, "deleteform")), $this->getAttribute($context["schedule"], "id", array()), array(), "array");
            // line 14
            echo "\t\t<div class=\"container\">
\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"myModal";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t
\t\t\t\t  <!-- Modal content-->
\t\t\t\t  <div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t  <h4 class=\"modal-title\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t  <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t";
            // line 29
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 31
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_695ada2c5cac43cf66f90ada05865ad67cced5926f02019e3c6e4fcae777e4fa->leave($__internal_695ada2c5cac43cf66f90ada05865ad67cced5926f02019e3c6e4fcae777e4fa_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5686566d6e10609c037ecc2cb51672a975b117e6493efc4c7000d531468490b = $this->env->getExtension("native_profiler");
        $__internal_d5686566d6e10609c037ecc2cb51672a975b117e6493efc4c7000d531468490b->enter($__internal_d5686566d6e10609c037ecc2cb51672a975b117e6493efc4c7000d531468490b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d5686566d6e10609c037ecc2cb51672a975b117e6493efc4c7000d531468490b->leave($__internal_d5686566d6e10609c037ecc2cb51672a975b117e6493efc4c7000d531468490b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tools:schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 42,  190 => 41,  185 => 40,  172 => 39,  158 => 31,  154 => 30,  150 => 29,  144 => 26,  138 => 23,  128 => 16,  124 => 14,  121 => 13,  117 => 12,  114 => 11,  112 => 10,  109 => 9,  103 => 8,  93 => 6,  87 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tools'|trans([],'BoAdminBundle')}} >> {{'title.schedule'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tools'|trans([],'BoAdminBundle')}} >> {{'title.schedule'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Tools:scheduleactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Tools:schedulelist.html.twig"%}*/
/* 	</div>*/
/* 	{% for schedule in schedules %}*/
/* 		{%set delete_form=deleteform[schedule.id]%}*/
/* 		<div class="container">*/
/* 			<!-- Modal -->*/
/* 			<div class="modal fade" id="myModal{{schedule.id}}" role="dialog">*/
/* 				<div class="modal-dialog">*/
/* 				*/
/* 				  <!-- Modal content-->*/
/* 				  <div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 					  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 					  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<div class="modal-body">*/
/* 					  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						{{ form_start(delete_form) }}*/
/* 							<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 						{{ form_end(delete_form) }}*/
/* 					</div>*/
/* 				  </div>*/
/* 				  */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{%endfor%}*/
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
