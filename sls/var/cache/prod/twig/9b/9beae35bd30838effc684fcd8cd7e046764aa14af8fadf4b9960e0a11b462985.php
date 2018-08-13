<?php

/* absences/showforemployee.html.twig */
class __TwigTemplate_98ff34c56ebde32fa1d8b50daa2e597c55a420d292cc6124d47eb06c1bb146e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absences/showforemployee.html.twig", 1);
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
        $__internal_7e12a8bcf6259477aa03603964f1abd09106f0a300096c49fe59fa7048ec90e9 = $this->env->getExtension("native_profiler");
        $__internal_7e12a8bcf6259477aa03603964f1abd09106f0a300096c49fe59fa7048ec90e9->enter($__internal_7e12a8bcf6259477aa03603964f1abd09106f0a300096c49fe59fa7048ec90e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absences/showforemployee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e12a8bcf6259477aa03603964f1abd09106f0a300096c49fe59fa7048ec90e9->leave($__internal_7e12a8bcf6259477aa03603964f1abd09106f0a300096c49fe59fa7048ec90e9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f916d435e67bdf52ab435210a46ae4cd796651c39f9cef361ca22aa2e7048129 = $this->env->getExtension("native_profiler");
        $__internal_f916d435e67bdf52ab435210a46ae4cd796651c39f9cef361ca22aa2e7048129->enter($__internal_f916d435e67bdf52ab435210a46ae4cd796651c39f9cef361ca22aa2e7048129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_f916d435e67bdf52ab435210a46ae4cd796651c39f9cef361ca22aa2e7048129->leave($__internal_f916d435e67bdf52ab435210a46ae4cd796651c39f9cef361ca22aa2e7048129_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_23e1b7ff1b094ac50a66ee9fa9f0b59e64508b2511355b7d7517986ab23cc836 = $this->env->getExtension("native_profiler");
        $__internal_23e1b7ff1b094ac50a66ee9fa9f0b59e64508b2511355b7d7517986ab23cc836->enter($__internal_23e1b7ff1b094ac50a66ee9fa9f0b59e64508b2511355b7d7517986ab23cc836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "absences/showforemployee.html.twig", 3)->display($context);
        
        $__internal_23e1b7ff1b094ac50a66ee9fa9f0b59e64508b2511355b7d7517986ab23cc836->leave($__internal_23e1b7ff1b094ac50a66ee9fa9f0b59e64508b2511355b7d7517986ab23cc836_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_79b9a1e5106cd2dff3701045b11f83e7d3a6b3c8780d0a967345e5f8ec5ab0bd = $this->env->getExtension("native_profiler");
        $__internal_79b9a1e5106cd2dff3701045b11f83e7d3a6b3c8780d0a967345e5f8ec5ab0bd->enter($__internal_79b9a1e5106cd2dff3701045b11f83e7d3a6b3c8780d0a967345e5f8ec5ab0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "absences/showforemployee.html.twig", 4)->display($context);
        
        $__internal_79b9a1e5106cd2dff3701045b11f83e7d3a6b3c8780d0a967345e5f8ec5ab0bd->leave($__internal_79b9a1e5106cd2dff3701045b11f83e7d3a6b3c8780d0a967345e5f8ec5ab0bd_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_e1f41e77c27715216fb23d35cc827ddcfd9ff04b9e5ebb67c1a3b6f8ed4da587 = $this->env->getExtension("native_profiler");
        $__internal_e1f41e77c27715216fb23d35cc827ddcfd9ff04b9e5ebb67c1a3b6f8ed4da587->enter($__internal_e1f41e77c27715216fb23d35cc827ddcfd9ff04b9e5ebb67c1a3b6f8ed4da587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_e1f41e77c27715216fb23d35cc827ddcfd9ff04b9e5ebb67c1a3b6f8ed4da587->leave($__internal_e1f41e77c27715216fb23d35cc827ddcfd9ff04b9e5ebb67c1a3b6f8ed4da587_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_40a576a12726bd70ba653f1342cca7b5bb9826e455a343a8dfa55bb8133f5e94 = $this->env->getExtension("native_profiler");
        $__internal_40a576a12726bd70ba653f1342cca7b5bb9826e455a343a8dfa55bb8133f5e94->enter($__internal_40a576a12726bd70ba653f1342cca7b5bb9826e455a343a8dfa55bb8133f5e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Absences:showforempactions.html.twig", "absences/showforemployee.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Absences:show.html.twig", "absences/showforemployee.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>\t
\t\t";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "contracts", array())) > 0)) {
            // line 13
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 15
            $this->loadTemplate("BoAdminBundle:Absences:contract.html.twig", "absences/showforemployee.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 18
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "group", array())) > 0)) {
            // line 19
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 21
            $this->loadTemplate("BoAdminBundle:Absences:group.html.twig", "absences/showforemployee.html.twig", 21)->display($context);
            // line 22
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 24
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions"))) > 0)) {
            // line 25
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 27
            $this->loadTemplate("BoAdminBundle:Absences:substitution.html.twig", "absences/showforemployee.html.twig", 27)->display($context);
            // line 28
            echo "\t\t\t</div>\t
\t\t";
        }
        // line 30
        echo "\t</div>
\t<!-- begin substitution creation form by modal dialog for contract-->
\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "contracts", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 33
            echo "\t\t";
            if ($this->getAttribute((isset($context["subcontform"]) ? $context["subcontform"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                // line 34
                echo "\t\t";
                $context["substitution_form"] = $this->getAttribute((isset($context["subcontform"]) ? $context["subcontform"] : $this->getContext($context, "subcontform")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
                // line 35
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"add_subscont";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
                echo "\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t
\t\t\t\t\t<!-- Modal content-->
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addschedule", array(), "BoAdminBundle"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.forcontract", array(), "BoAdminBundle"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_substitution_contract", array("idcontract" => $this->getAttribute($context["contract"], "id", array()), "idabsence" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
                echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t";
                // line 48
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'errors');
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 49
                $this->loadTemplate("BoAdminBundle:Employee:subscontform.html.twig", "absences/showforemployee.html.twig", 49)->display($context);
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'rest');
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>\t
\t\t\t\t\t</div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 62
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t<!-- end substitution creation form by modal dialog for contract-->
\t
\t<!-- begin substitution creation form by modal dialog for group-->
\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "group", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 67
            echo "\t\t";
            $context["substitution_form"] = $this->getAttribute((isset($context["subgroupform"]) ? $context["subgroupform"] : $this->getContext($context, "subgroupform")), $this->getAttribute($context["group"], "id", array()), array(), "array");
            // line 68
            echo "\t\t<div class=\"container\">
\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"add_subsgroup";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t
\t\t\t\t\t<!-- Modal content-->
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addschedule", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.forgroup", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_substitution_group", array("idgroup" => $this->getAttribute($context["group"], "id", array()), "idabsence" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 82
            $this->loadTemplate("BoAdminBundle:Employee:subsgroupform.html.twig", "absences/showforemployee.html.twig", 82)->display($context);
            // line 83
            echo "\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'rest');
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>\t
\t\t\t\t\t</div>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t<!-- end substitution creation form by modal dialog for group-->

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
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_40a576a12726bd70ba653f1342cca7b5bb9826e455a343a8dfa55bb8133f5e94->leave($__internal_40a576a12726bd70ba653f1342cca7b5bb9826e455a343a8dfa55bb8133f5e94_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf3d868ec80c8c25bd1bff1848ecdc6bd7f7c5664475a081b6283f2ca8f7d901 = $this->env->getExtension("native_profiler");
        $__internal_cf3d868ec80c8c25bd1bff1848ecdc6bd7f7c5664475a081b6283f2ca8f7d901->enter($__internal_cf3d868ec80c8c25bd1bff1848ecdc6bd7f7c5664475a081b6283f2ca8f7d901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "\t\t<script>
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tvar str=\$(\"#teachers option:selected\");
\t\t\t\tteachers=str.val();
\t\t\t\tif(teachers==0){
\t\t\t\t\talert(\"You have to select a substitute!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_cf3d868ec80c8c25bd1bff1848ecdc6bd7f7c5664475a081b6283f2ca8f7d901->leave($__internal_cf3d868ec80c8c25bd1bff1848ecdc6bd7f7c5664475a081b6283f2ca8f7d901_prof);

    }

    public function getTemplateName()
    {
        return "absences/showforemployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 135,  414 => 134,  401 => 123,  389 => 122,  378 => 114,  374 => 113,  370 => 112,  364 => 109,  358 => 106,  345 => 95,  322 => 86,  315 => 83,  313 => 82,  309 => 81,  304 => 79,  297 => 77,  287 => 70,  283 => 68,  280 => 67,  263 => 66,  258 => 63,  244 => 62,  232 => 53,  225 => 50,  223 => 49,  219 => 48,  214 => 46,  207 => 44,  197 => 37,  193 => 35,  190 => 34,  187 => 33,  170 => 32,  166 => 30,  162 => 28,  160 => 27,  156 => 26,  153 => 25,  150 => 24,  146 => 22,  144 => 21,  140 => 20,  137 => 19,  134 => 18,  130 => 16,  128 => 15,  124 => 14,  121 => 13,  119 => 12,  116 => 11,  114 => 10,  111 => 9,  109 => 8,  106 => 7,  100 => 6,  82 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Absences:showforempactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Absences:show.html.twig"%}*/
/* 		</div>	*/
/* 		{%if absence.contracts|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.contracts'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Absences:contract.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 		{%if absence.group|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Absences:group.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 		{%if substitutions|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'entity.substitution'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Absences:substitution.html.twig"%}*/
/* 			</div>	*/
/* 		{%endif%}*/
/* 	</div>*/
/* 	<!-- begin substitution creation form by modal dialog for contract-->*/
/* 	{%for contract in absence.contracts%}*/
/* 		{%if subcontform[contract.id] is defined%}*/
/* 		{%set substitution_form=subcontform[contract.id]%}*/
/* 		<div class="container">*/
/* 			<!-- Modal -->*/
/* 			<div class="modal fade" id="add_subscont{{contract.id}}" role="dialog">*/
/* 				<div class="modal-dialog">*/
/* 				*/
/* 					<!-- Modal content-->*/
/* 					<div class="modal-content">*/
/* 						<div class="modal-header">*/
/* 							<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 							<h4 class="modal-title">{{'label.addschedule'|trans([],'BoAdminBundle')}} {{'label.forcontract'|trans([],'BoAdminBundle')}}</h4>*/
/* 						</div>*/
/* 						<form action="{{ path('employee_substitution_contract',{'idcontract':contract.id,'idabsence':absence.id}) }}" method="post" class="style">*/
/* 							<div class="modal-body">*/
/* 								{{ form_errors(substitution_form) }}*/
/* 									{%include "BoAdminBundle:Employee:subscontform.html.twig"%}*/
/* 								{{ form_rest(substitution_form) }}*/
/* 							</div>*/
/* 							<div class="modal-footer">*/
/* 								<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 							</div>*/
/* 						</form>	*/
/* 					</div>*/
/* 				  */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{%endif%}*/
/* 	{%endfor%}*/
/* 	<!-- end substitution creation form by modal dialog for contract-->*/
/* 	*/
/* 	<!-- begin substitution creation form by modal dialog for group-->*/
/* 	{%for group in absence.group%}*/
/* 		{%set substitution_form=subgroupform[group.id]%}*/
/* 		<div class="container">*/
/* 			<!-- Modal -->*/
/* 			<div class="modal fade" id="add_subsgroup{{group.id}}" role="dialog">*/
/* 				<div class="modal-dialog">*/
/* 				*/
/* 					<!-- Modal content-->*/
/* 					<div class="modal-content">*/
/* 						<div class="modal-header">*/
/* 							<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 							<h4 class="modal-title">{{'label.addschedule'|trans([],'BoAdminBundle')}} {{'label.forgroup'|trans([],'BoAdminBundle')}}</h4>*/
/* 						</div>*/
/* 						<form action="{{ path('employee_substitution_group',{'idgroup':group.id,'idabsence':absence.id}) }}" method="post" class="style">*/
/* 							<div class="modal-body">*/
/* 								{{ form_errors(substitution_form) }}*/
/* 									{%include "BoAdminBundle:Employee:subsgroupform.html.twig"%}*/
/* 								{{ form_rest(substitution_form) }}*/
/* 							</div>*/
/* 							<div class="modal-footer">*/
/* 								<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 							</div>*/
/* 						</form>	*/
/* 					</div>*/
/* 				  */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{%endfor%}*/
/* 	<!-- end substitution creation form by modal dialog for group-->*/
/* */
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
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn-create").click(function(){*/
/* 				var str=$("#teachers option:selected");*/
/* 				teachers=str.val();*/
/* 				if(teachers==0){*/
/* 					alert("You have to select a substitute!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
