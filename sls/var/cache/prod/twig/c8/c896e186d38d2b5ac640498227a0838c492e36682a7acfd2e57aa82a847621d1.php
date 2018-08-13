<?php

/* ticketcontacts/edit.html.twig */
class __TwigTemplate_e569922cebf07a62b4ac3377eb5988ab3019c03c90c5088e771c845d3ca67c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ticketcontacts/edit.html.twig", 1);
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
        $__internal_7963129f0f958d0df7c030f2c99e0f201cf0f2fd5f3d839c63f3cd650749a143 = $this->env->getExtension("native_profiler");
        $__internal_7963129f0f958d0df7c030f2c99e0f201cf0f2fd5f3d839c63f3cd650749a143->enter($__internal_7963129f0f958d0df7c030f2c99e0f201cf0f2fd5f3d839c63f3cd650749a143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ticketcontacts/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7963129f0f958d0df7c030f2c99e0f201cf0f2fd5f3d839c63f3cd650749a143->leave($__internal_7963129f0f958d0df7c030f2c99e0f201cf0f2fd5f3d839c63f3cd650749a143_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_11776e0202b015161a7dfe2c52a3aa4433583af1d2e90e7ba09d7f1c107590e6 = $this->env->getExtension("native_profiler");
        $__internal_11776e0202b015161a7dfe2c52a3aa4433583af1d2e90e7ba09d7f1c107590e6->enter($__internal_11776e0202b015161a7dfe2c52a3aa4433583af1d2e90e7ba09d7f1c107590e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_11776e0202b015161a7dfe2c52a3aa4433583af1d2e90e7ba09d7f1c107590e6->leave($__internal_11776e0202b015161a7dfe2c52a3aa4433583af1d2e90e7ba09d7f1c107590e6_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_912b4a1ae3fc8fc9750e3cf7f6019f275087f34a576ecd930b08164deee38e3b = $this->env->getExtension("native_profiler");
        $__internal_912b4a1ae3fc8fc9750e3cf7f6019f275087f34a576ecd930b08164deee38e3b->enter($__internal_912b4a1ae3fc8fc9750e3cf7f6019f275087f34a576ecd930b08164deee38e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "ticketcontacts/edit.html.twig", 3)->display($context);
        
        $__internal_912b4a1ae3fc8fc9750e3cf7f6019f275087f34a576ecd930b08164deee38e3b->leave($__internal_912b4a1ae3fc8fc9750e3cf7f6019f275087f34a576ecd930b08164deee38e3b_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_28f830ad562c67bbfcee5a074004756e07cc9bfbf558039f403cfc56d766b9f0 = $this->env->getExtension("native_profiler");
        $__internal_28f830ad562c67bbfcee5a074004756e07cc9bfbf558039f403cfc56d766b9f0->enter($__internal_28f830ad562c67bbfcee5a074004756e07cc9bfbf558039f403cfc56d766b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_28f830ad562c67bbfcee5a074004756e07cc9bfbf558039f403cfc56d766b9f0->leave($__internal_28f830ad562c67bbfcee5a074004756e07cc9bfbf558039f403cfc56d766b9f0_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_629f278cc25eadd855ee14e3584bdab048376b53f11c8f58c09b6f5524d9bc7c = $this->env->getExtension("native_profiler");
        $__internal_629f278cc25eadd855ee14e3584bdab048376b53f11c8f58c09b6f5524d9bc7c->enter($__internal_629f278cc25eadd855ee14e3584bdab048376b53f11c8f58c09b6f5524d9bc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.tickets", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_629f278cc25eadd855ee14e3584bdab048376b53f11c8f58c09b6f5524d9bc7c->leave($__internal_629f278cc25eadd855ee14e3584bdab048376b53f11c8f58c09b6f5524d9bc7c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a80d2e49e22eb5d5a963c4d001a7855fec94fd7c30c8cb325334a8c704305e04 = $this->env->getExtension("native_profiler");
        $__internal_a80d2e49e22eb5d5a963c4d001a7855fec94fd7c30c8cb325334a8c704305e04->enter($__internal_a80d2e49e22eb5d5a963c4d001a7855fec94fd7c30c8cb325334a8c704305e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticketcontacts_edit", array("id" => $this->getAttribute((isset($context["ticketcontact"]) ? $context["ticketcontact"] : $this->getContext($context, "ticketcontact")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:TicketContacts:editactions.html.twig", "ticketcontacts/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"show_content2\">
\t\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:TicketContacts:editform.html.twig", "ticketcontacts/edit.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ticketcontact"]) ? $context["ticketcontact"] : $this->getContext($context, "ticketcontact")), "employee", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 18
            echo "\t\t";
            $context["remove_form"] = $this->getAttribute((isset($context["remove_forms"]) ? $context["remove_forms"] : $this->getContext($context, "remove_forms")), $this->getAttribute($context["employee"], "id", array()), array(), "array");
            // line 19
            echo "\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"myModal";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t  <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["remove_form"]) ? $context["remove_form"] : $this->getContext($context, "remove_form")), 'form_start');
            echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 36
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["remove_form"]) ? $context["remove_form"] : $this->getContext($context, "remove_form")), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a80d2e49e22eb5d5a963c4d001a7855fec94fd7c30c8cb325334a8c704305e04->leave($__internal_a80d2e49e22eb5d5a963c4d001a7855fec94fd7c30c8cb325334a8c704305e04_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48c5472768b213c5d13c5d24aeb5f3f3189ead89d333a801f1ca0789da22819a = $this->env->getExtension("native_profiler");
        $__internal_48c5472768b213c5d13c5d24aeb5f3f3189ead89d333a801f1ca0789da22819a->enter($__internal_48c5472768b213c5d13c5d24aeb5f3f3189ead89d333a801f1ca0789da22819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_48c5472768b213c5d13c5d24aeb5f3f3189ead89d333a801f1ca0789da22819a->leave($__internal_48c5472768b213c5d13c5d24aeb5f3f3189ead89d333a801f1ca0789da22819a_prof);

    }

    public function getTemplateName()
    {
        return "ticketcontacts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 47,  201 => 46,  189 => 45,  186 => 44,  172 => 36,  168 => 35,  164 => 34,  158 => 31,  152 => 28,  142 => 21,  138 => 19,  135 => 18,  131 => 17,  125 => 14,  122 => 13,  120 => 12,  117 => 11,  115 => 10,  111 => 9,  107 => 8,  104 => 7,  98 => 6,  80 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'label.contacts'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'entity.tickets'|trans([],'BoAdminBundle')}} >> {{'label.contacts'|trans([],'BoAdminBundle')}} >> {{'title.edit'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('ticketcontacts_edit',{'id':ticketcontact.id}) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdminBundle:TicketContacts:editactions.html.twig"%}*/
/* 			<div class="show_content2">*/
/* 				{%include "BoAdminBundle:TicketContacts:editform.html.twig"%}*/
/* 			</div>*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	{%for employee in ticketcontact.employee%}*/
/* 		{%set remove_form=remove_forms[employee.id]%}*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="myModal{{employee.id}}" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<div class="modal-body">*/
/* 				  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					{{ form_start(remove_form) }}*/
/* 						<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 					{{ form_end(remove_form) }}*/
/* 				</div>*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 	{%endfor%}*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
