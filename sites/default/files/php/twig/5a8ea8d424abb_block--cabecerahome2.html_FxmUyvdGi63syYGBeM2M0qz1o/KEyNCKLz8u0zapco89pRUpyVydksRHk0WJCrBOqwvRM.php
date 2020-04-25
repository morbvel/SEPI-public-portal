<?php

/* themes/SEPI/templates/block--cabecerahome2.html.twig */
class __TwigTemplate_e5189224227dd2f99dd42213e6a22e09884ae08d63101f1d996f822a261c5c17 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("file_url" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('file_url')
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
        echo "<div class=\"container-fluid module-carrusel\">
  <div class=\"row\">

    <a href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#block_content", array(), "array"), "field_enlace", array()), "value", array()), "html", null, true));
        echo "\" target=\"_blank\">
      <div class=\"module-destacado-especial\">
        <div class=\"relative\">

          <div class=\"image-resizer cabecera-2\">
            <img class=\"\" src=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_imagen_cabecera_home", array()), 0, array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "\" />

            <div class=\"image-text  col-md-offset-2 col-md-3\">
              <p class=\"text-carrusel\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#block_content", array(), "array"), "field_texto_imagen", array()), "value", array()), "html", null, true));
        echo "</p>
            </div>

          </div>

        </div>
      </div>

      <div class=\"intro-sepi\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <p class=\"default-text\">";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#block_content", array(), "array"), "field_texto_resumen", array()), "value", array()), "html", null, true));
        echo "</p>
            </div>
          </div>
        </div>
      </div>
    </a>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/SEPI/templates/block--cabecerahome2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  62 => 12,  56 => 9,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/SEPI/templates/block--cabecerahome2.html.twig", "/Users/miguel/Sites/SEPI/web/themes/SEPI/templates/block--cabecerahome2.html.twig");
    }
}
