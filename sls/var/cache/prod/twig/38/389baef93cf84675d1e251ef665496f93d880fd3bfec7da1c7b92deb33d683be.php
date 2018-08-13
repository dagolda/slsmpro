<?php

/* BoQuizBundle:Quiz:newform.html.twig */
class __TwigTemplate_7c0f2763468f1aa8380571be47dc4c36e9ae323c8509794af9e76c8ae39636e1 extends Twig_Template
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
        $__internal_0dcd0651b71553d99e4f0f154c20b50266f6ca4ce41122c0f84f635dc2fdf7f4 = $this->env->getExtension("native_profiler");
        $__internal_0dcd0651b71553d99e4f0f154c20b50266f6ca4ce41122c0f84f635dc2fdf7f4->enter($__internal_0dcd0651b71553d99e4f0f154c20b50266f6ca4ce41122c0f84f635dc2fdf7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoQuizBundle:Quiz:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
           \t\t <th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
           \t\t <th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_category\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>
\t\t\t</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
           \t\t <th class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_type\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>
\t\t\t</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.noq", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noq", array()), 'widget');
        echo "</td>\t
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>
";
        
        $__internal_0dcd0651b71553d99e4f0f154c20b50266f6ca4ce41122c0f84f635dc2fdf7f4->leave($__internal_0dcd0651b71553d99e4f0f154c20b50266f6ca4ce41122c0f84f635dc2fdf7f4_prof);

    }

    public function getTemplateName()
    {
        return "BoQuizBundle:Quiz:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  95 => 36,  89 => 33,  83 => 30,  72 => 25,  68 => 24,  61 => 20,  50 => 15,  46 => 14,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*            		 <th class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.name) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*            		 <th class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.category) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_category"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'action.add'|trans([],'BoAdminBundle')}}{{'label.category'|trans([],'BoAdminBundle')}}" /></button>*/
/* 			</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*            		 <th class="sty_label">{{'label.type'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.type) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_type"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'action.add'|trans([],'BoAdminBundle')}}{{'label.type'|trans([],'BoAdminBundle')}}" /></button>*/
/* 			</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.noq'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.noq) }}</td>	*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.language) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
/* */
