<?php

/* BoAdminBundle:Agenda:adchform.html.twig */
class __TwigTemplate_4de13fbeb0792e6305ef543a2419b25aeb945698f1db2cb4ac199cc01a92bef0 extends Twig_Template
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
        $__internal_1fff2b96e283955ec414401469458649cb9b3400aadd8a328a1e980962849a9a = $this->env->getExtension("native_profiler");
        $__internal_1fff2b96e283955ec414401469458649cb9b3400aadd8a328a1e980962849a9a->enter($__internal_1fff2b96e283955ec414401469458649cb9b3400aadd8a328a1e980962849a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:adchform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">\t
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"4\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t\t\t
\t\t\t<td colspan=\"4\">
\t\t\t\t";
        // line 7
        if ((array_key_exists("employees", $context) && (twig_length_filter($this->env, (isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees"))) > 0))) {
            echo "\t\t\t\t
\t\t\t\t\t<select name='idteacher' id='teachers' class=\"idteacher\" required=\"true\">
\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Select a teachers</option>
\t\t\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 11
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "id", array()), "html", null, true);
                echo "\" ";
                if ((array_key_exists("idadmin", $context) && ($this->getAttribute($context["admin"], "id", array()) == (isset($context["idadmin"]) ? $context["idadmin"] : $this->getContext($context, "idadmin"))))) {
                    echo "selected='selected'";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t\t\t</select>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "name", array()), "html", null, true);
            echo "\" disabled/>
\t\t\t\t";
        }
        // line 16
        echo "\t
\t\t\t</td>\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<td>&nbsp;</td>\t\t\t
\t\t</tr>
\t\t<tr>\t\t\t\t
\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "startdate", array()), 'widget', array("attr" => array("class" => "asc_start span3")));
        echo "</td>
\t\t\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "enddate", array()), 'widget', array("attr" => array("class" => "asc_end span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "hourperday", array()), 'widget', array("attr" => array("class" => "hourperday span3")));
        echo "</td>\t
\t\t\t<td>&nbsp;</td>\t\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<td colspan=\"4\">
\t\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "startam", array()), 'widget', array("attr" => array("class" => "startam span3")));
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "endam", array()), 'widget', array("attr" => array("class" => "endam span3")));
        echo "</td>\t
\t\t\t\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "startpm", array()), 'widget', array("attr" => array("class" => "startpm span3")));
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "endpm", array()), 'widget', array("attr" => array("class" => "endpm span3")));
        echo "</td>\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>\t\t\t
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"15%\" class=\"sty_label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"15%\" class=\"sty_label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "monday", array()), 'widget', array("attr" => array("class" => "cmonday span3")));
        echo "</td>
            \t\t<td class=\"sty_label\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "tuesday", array()), 'widget', array("attr" => array("class" => "ttuesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "wednesday", array()), 'widget', array("attr" => array("class" => "cwednesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "thursday", array()), 'widget', array("attr" => array("class" => "cthursday span3")));
        echo "</td>
            \t\t<td class=\"sty_label\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "friday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
            \t\t<td class=\"sty_label\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), "description", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>
";
        
        $__internal_1fff2b96e283955ec414401469458649cb9b3400aadd8a328a1e980962849a9a->leave($__internal_1fff2b96e283955ec414401469458649cb9b3400aadd8a328a1e980962849a9a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:adchform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 75,  202 => 72,  193 => 66,  189 => 65,  185 => 64,  181 => 63,  177 => 62,  171 => 59,  167 => 58,  163 => 57,  159 => 56,  155 => 55,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  102 => 29,  98 => 28,  94 => 27,  87 => 23,  83 => 22,  79 => 21,  72 => 16,  64 => 15,  60 => 13,  43 => 11,  39 => 10,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">	*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="4">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>				*/
/* 			<td colspan="4">*/
/* 				{%if employees is defined and employees|length>0%}				*/
/* 					<select name='idteacher' id='teachers' class="idteacher" required="true">*/
/* 						<option value="0" selected="selected">Select a teachers</option>*/
/* 						{%for admin in employees%}*/
/* 							<option value="{{admin.id}}" {%if idadmin is defined and admin.id==idadmin%}selected='selected'{%endif%}>{{admin.firstname}} {{admin.name}}</option>*/
/* 						{%endfor%}*/
/* 					</select>*/
/* 				{%else%}*/
/* 					<input type="text" value="{{employee.firstname}} {{employee.name}}" disabled/>*/
/* 				{%endif%}	*/
/* 			</td>		*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<td>&nbsp;</td>			*/
/* 		</tr>*/
/* 		<tr>				*/
/* 			<td>{{ form_widget(asc_form.startdate, {'attr' : {'class' : 'asc_start span3'}}) }}</td>*/
/* 			<td>{{ form_widget(asc_form.enddate, {'attr' : {'class' : 'asc_end span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(asc_form.hourperday, {'attr' : {'class' : 'hourperday span3'}}) }}</td>	*/
/* 			<td>&nbsp;</td>				*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<td colspan="4">*/
/* 				<table border="0" cellpadding="0" cellspacing="0" width="100%">		*/
/* 					<tr>*/
/* 						<th class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td>{{ form_widget(asc_form.startam, {'attr' : {'class' : 'startam span3'}}) }}</td>*/
/* 						<td>{{ form_widget(asc_form.endam, {'attr' : {'class' : 'endam span3'}}) }}</td>	*/
/* 						<td>{{ form_widget(asc_form.startpm, {'attr' : {'class' : 'startpm span3'}}) }}</td>*/
/* 						<td>{{ form_widget(asc_form.endpm, {'attr' : {'class' : 'endpm span3'}}) }}</td>				*/
/* 					</tr>*/
/* 				</table>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>			*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="15%" class="sty_label">{{'label.monday'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="15%" class="sty_label">{{'label.tuesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.wednesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.thursday'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="15%" class="sty_label">{{'label.friday'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td class="sty_label">{{ form_widget(asc_form.monday, {'attr' : {'class' : 'cmonday span3'}}) }}</td>*/
/*             		<td class="sty_label">{{ form_widget(asc_form.tuesday, {'attr' : {'class' : 'ttuesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(asc_form.wednesday, {'attr' : {'class' : 'cwednesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(asc_form.thursday, {'attr' : {'class' : 'cthursday span3'}}) }}</td>*/
/*             		<td class="sty_label">{{ form_widget(asc_form.friday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="5">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.description'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/*             		<td class="sty_label">{{ form_widget(asc_form.description, {'attr' : {'class' : 'cfriday span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
/* */
