<?php

/* modules/custom/newsletter/templates/newsletter-sepi.html.twig */
class __TwigTemplate_d1be7edb621e30dc7e2add23dbae5c1b2a317ae53839fd70d33572e4f87a664b extends Twig_Template
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
        $tags = array("trans" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<h2 class=\"newsletter-title\">";
        echo t("Newsletter", array());
        echo "</h2>
<div class=\"row\">
  <div class=\"capa-contenedora-form-newsletter col col-sm-12\">
    <label class=\"hidden\" aria-hidden=\"true\" for=\"form_id\">Hidden label</label>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_hidden", array()), "html", null, true));
        echo "
    <label class=\"hidden\" aria-hidden=\"true\" for=\"groups-3\">Hidden label</label>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_grupos", array()), "html", null, true));
        echo "
    <label class=\"hidden\" aria-hidden=\"true\" for=\"name\">Hidden label</label>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_name", array()), "html", null, true));
        echo "
    <label class=\"hidden\" aria-hidden=\"true\" for=\"successUrl\">Hidden label</label>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_success", array()), "html", null, true));
        echo "
    <label class=\"hidden\" aria-hidden=\"true\" for=\"confirmationUrl\">Hidden label</label>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_confirmation", array()), "html", null, true));
        echo "
    <label class=\"hidden\" aria-hidden=\"true\" for=\"errorUrl\">Hidden label</label>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_error", array()), "html", null, true));
        echo "

    <div class=\"col-xs-12 col-sm-10 col-md-12 capa-input-newsletter-footer\">
      <div class=\"form-group newsletter-form-elements\">
        <div class=\"form-check\">
          <label class=\"hidden\" aria-hidden=\"true\" for=\"email\">Hidden label</label>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_email", array()), "html", null, true));
        echo "
        </div>
        <span class=\"formulario_contacto_agree \">
          <label class=\"hidden\" aria-hidden=\"true\" for=\"aceptar_condiciones_newsletter\">Hidden webform</label><input type=\"checkbox\" data-drupal-selector=\"aceptar_condiciones\" id=\"aceptar_condiciones_newsletter\" name=\"agree1\" value=\"agree\" required=\"required\">";
        // line 17
        echo t("He leido y aceptado la", array());
        echo " <a href=\"/es/clausula-informativa\" class=\"burdeos enlace\">";
        echo t("cláusula informativa", array());
        echo "</a>
        </span>
      </div>
    </div>

    <div class=\"col-xs-12 col-sm-2 col-md-6 btn-subscribirse\">
      <div class=\"form-group\">
        <label class=\"hidden\" aria-hidden=\"true\" for=\"submit\">Hidden label</label>";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "submit_button", array()), "html", null, true));
        echo "
      </div>
    </div>


  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/newsletter/templates/newsletter-sepi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  84 => 17,  78 => 14,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/newsletter/templates/newsletter-sepi.html.twig", "/Users/miguel/Sites/SEPI/web/modules/custom/newsletter/templates/newsletter-sepi.html.twig");
    }
}
